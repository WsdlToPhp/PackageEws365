<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserUnifiedGroupsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUserUnifiedGroupsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The GroupsSets
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfUnifiedGroupsSetsType
     */
    public $GroupsSets;
    /**
     * Constructor method for GetUserUnifiedGroupsResponseMessageType
     * @uses EwsGetUserUnifiedGroupsResponseMessageType::setGroupsSets()
     * @param \Ews\ArrayType\EwsArrayOfUnifiedGroupsSetsType $groupsSets
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfUnifiedGroupsSetsType $groupsSets = null)
    {
        $this
            ->setGroupsSets($groupsSets);
    }
    /**
     * Get GroupsSets value
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupsSetsType
     */
    public function getGroupsSets()
    {
        return $this->GroupsSets;
    }
    /**
     * Set GroupsSets value
     * @param \Ews\ArrayType\EwsArrayOfUnifiedGroupsSetsType $groupsSets
     * @return \Ews\StructType\EwsGetUserUnifiedGroupsResponseMessageType
     */
    public function setGroupsSets(\Ews\ArrayType\EwsArrayOfUnifiedGroupsSetsType $groupsSets = null)
    {
        $this->GroupsSets = $groupsSets;
        return $this;
    }
}
