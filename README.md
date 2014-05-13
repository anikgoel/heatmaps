Heatmaps

Remote Heatmap generator

There is a js file in the app/webroot/js/clickmap.js and css file app/webroot/css/clickmap.css which when placed in any website displays the heatmaps and clickmaps of the page. All the user clicks are saved in cloud database whose functions are written in app/Controller/DevsController.php

Currently you can see the heatmaps by pressing Ctrl+Shift on the webpage and clickmaps by pressing Ctrl+Alt. This can be altered from clickmap.js according to the need.

Find the sql file for database at app/Config/Schema/clickmap/sql

If you want to integrate this service directly into your website just paste the below code - 

&lt;link rel="stylesheet" type="text/css" href="http://development.luminogurus.com/heatmaps/css/clickmap.css" />
&lt;script type="text/javascript" src="http://development.luminogurus.com/heatmaps/js/clickmap.js"></script>


Note :- <br/> 
1. This is in beta mode. <br/>
2. If you are going to use the backend part, include database.php and core.php in the app/Config folder. It is not there in this commit.
