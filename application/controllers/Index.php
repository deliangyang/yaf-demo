<?php
/**
 * Created by unkown ide ps.
 * User: phantom
 * Date Time: 6/11/17 8:58 PM
 */
class IndexController extends Yaf_Controller_Abstract
{

    public function indexAction()
    {
        $this->getView()->assign("content", "hello world");
    }

    public function testAction()
    {

    }

}