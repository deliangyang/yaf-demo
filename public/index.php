<?php
/**
 * Created by unkown ide ps.
 * User: phantom
 * Date Time: 6/11/17 8:55 PM
 */

define("APPLICATION_PATH",  dirname(dirname(__FILE__)));

//call bootstrap methods defined in Bootstrap.php
$app  = new Yaf_Application(APPLICATION_PATH . "/conf/application.ini");
$app->bootstrap()->run();