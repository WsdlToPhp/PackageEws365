<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetImGroupType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetImGroupType extends EwsBaseRequestType
{
    /**
     * The GroupId
     * Meta informations extracted from the WSDL
     * - documentation: Identifier for a fully resolved item
     * @var \Ews\StructType\EwsItemIdType
     */
    public $GroupId;
    /**
     * The NewDisplayName
     * Meta informations extracted from the WSDL
     * - minLength: 1
     * @var string
     */
    public $NewDisplayName;
    /**
     * Constructor method for SetImGroupType
     * @uses EwsSetImGroupType::setGroupId()
     * @uses EwsSetImGroupType::setNewDisplayName()
     * @param \Ews\StructType\EwsItemIdType $groupId
     * @param string $newDisplayName
     */
    public function __construct(\Ews\StructType\EwsItemIdType $groupId = null, $newDisplayName = null)
    {
        $this
            ->setGroupId($groupId)
            ->setNewDisplayName($newDisplayName);
    }
    /**
     * Get GroupId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getGroupId()
    {
        return $this->GroupId;
    }
    /**
     * Set GroupId value
     * @param \Ews\StructType\EwsItemIdType $groupId
     * @return \Ews\StructType\EwsSetImGroupType
     */
    public function setGroupId(\Ews\StructType\EwsItemIdType $groupId = null)
    {
        $this->GroupId = $groupId;
        return $this;
    }
    /**
     * Get NewDisplayName value
     * @return string|null
     */
    public function getNewDisplayName()
    {
        return $this->NewDisplayName;
    }
    /**
     * Set NewDisplayName value
     * @param string $newDisplayName
     * @return \Ews\StructType\EwsSetImGroupType
     */
    public function setNewDisplayName($newDisplayName = null)
    {
        $this->NewDisplayName = $newDisplayName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSetImGroupType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
