<?php
/**
 * Created by unkown ide ps.
 * User: phantom
 * Date Time: 6/11/17 9:27 PM
 */
class TestController extends Yaf_Controller_Abstract
{
    public function indexAction()
    {
        $this->getView()->assign('aa', 'ccccc');
    }
}