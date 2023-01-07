<?php

namespace OPNsense\Firewall\FieldTypes;

use OPNsense\Base\FieldTypes\ArrayField;
use OPNsense\Base\FieldTypes\ContainerField;

class DestinationNatRuleContainerField extends ContainerField
{
    /**
     * map destination nat rules
     * @return array
     */
    public function serialize()
    {
        $result = [];
        $sourceMapper = [
            'enabled',
            // TODO: fill list
        ]

        return $result;
    }
}

class DestinationNatRuleField extends ArrayField
{
    /**
     * @inheritDoc
     */
    public function newContainerField($ref, $tagName)
    {
        $containerNode = new DestinationNatRuleContainerField($ref, $tagName);
        $parentModel = $this->getParentModel();
        $containerNode->setParentModel($parentModel);
        return $containerNode;
    }
}