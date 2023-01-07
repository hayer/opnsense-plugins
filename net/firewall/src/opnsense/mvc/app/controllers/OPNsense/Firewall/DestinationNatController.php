<?php

namespace OPNsense\Firewall;

class SourceNatController extends \OPNsense\Base\IndexController
{
    public function indexAction()
    {
        $this->view->pick('OPNsense/Firewall/filter');
        $this->view->ruleController = "destination_nat";
        $this->view->formDialogFilterRule = $this->getForm("dialogDNatRule");
    }
}
