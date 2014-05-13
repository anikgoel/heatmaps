<?php

class DevsController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
    }

    public function index() {
        $this->layout = NULL;
    }

    public function saveClicks() {
        $this->autoRender = FALSE;
        $data = $this->params->query;
        $this->loadModel('Click');
        $this->Click->create();
        $this->Click->save($data['data']);
    }

    public function getClicks() {
        $this->autoRender = FALSE;
        $this->loadModel('Click');
        $results = $this->Click->find('all', array(
            'conditions' => array(
                'Click.location' => $this->params->query['location']
            )
                ));
        if (!empty($results)) {
            foreach ($results as $result) {
                if (isset($return_array[$result['Click']['x_position'] . "," . $result['Click']['y_position']])) {
                    $return_array[$result['Click']['x_position'] . "," . $result['Click']['y_position']] += 1;
                } else {
                    $return_array[$result['Click']['x_position'] . "," . $result['Click']['y_position']] = 1;
                }
            }
        }
        foreach ($return_array as $key => $value) {
            $arr = explode(",", $key);
            $data["x"] = $arr[0];
            $data["y"] = $arr[1];
            $data["count"] = $value;
            $final_data[] = $data;
        }
        echo $this->params->query['callback'] . "(" . json_encode($final_data) . ")";
    }

}
