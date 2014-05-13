<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Click Map Demo</title>
        <?php
        echo $this->Html->css(
                array(
                    'clickmap',
                    'style',
        ));
        ?>
        <script src="http://www.google.com/jsapi" type="text/javascript"></script>
        <?php
        echo $this->Html->script(array(
            'jquery',
            'clickmap',
        ));
        ?>
    </head>
    <body>
        <?php echo $this->Html->image('baywatch.jpg'); ?>
    </body>
</html>