<?php
namespace Jbpros\DynSubs;
class IndexController extends \Jbpros\Base\IndexController
{
    public function indexAction()
    {
        // pick the template to serve to our users.
        $this->view->pick('Jbpros/DynSubs/index');
    }
}
