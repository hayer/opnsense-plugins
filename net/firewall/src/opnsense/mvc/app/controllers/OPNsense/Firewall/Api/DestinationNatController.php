<?php

namespace OPNsense\Firewall\Api;

class DestinationNatController extends FilterBaseController
{
    public function searchRuleAction()
    {
        return $this->searchBase("dnatrules.rule", array('enabled', 'sequence', 'description'), "sequence");
    }

    public function setRuleAction($uuid)
    {
        return $this->setBase("rule", "dnatrules.rule", $uuid);
    }

    public function addRuleAction()
    {
        return $this->addBase("rule", "dnatrules.rule");
    }

    public function getRuleAction($uuid = null)
    {
        return $this->getBase("rule", "dnatrules.rule", $uuid);
    }

    public function delRuleAction($uuid)
    {
        return $this->delBase("dnatrules.rule", $uuid);
    }

    public function toggleRuleAction($uuid, $enabled = null)
    {
        return $this->toggleBase("dnatrules.rule", $uuid, $enabled);
    }
}