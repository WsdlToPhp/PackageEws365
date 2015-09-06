<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PermissionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A permission on a folder
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPermissionType extends EwsBasePermissionType
{
    /**
     * The PermissionLevel
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $PermissionLevel;
    /**
     * The ReadItems
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReadItems;
    /**
     * Constructor method for PermissionType
     * @uses EwsPermissionType::setPermissionLevel()
     * @uses EwsPermissionType::setReadItems()
     * @param string $permissionLevel
     * @param string $readItems
     */
    public function __construct($permissionLevel = null, $readItems = null)
    {
        $this
            ->setPermissionLevel($permissionLevel)
            ->setReadItems($readItems);
    }
    /**
     * Get PermissionLevel value
     * @return string
     */
    public function getPermissionLevel()
    {
        return $this->PermissionLevel;
    }
    /**
     * Set PermissionLevel value
     * @uses \Ews\EnumType\EwsPermissionLevelType::valueIsValid()
     * @uses \Ews\EnumType\EwsPermissionLevelType::getValidValues()
     * @param string $permissionLevel
     * @return \Ews\StructType\EwsPermissionType
     */
    public function setPermissionLevel($permissionLevel = null)
    {
        if (!\Ews\EnumType\EwsPermissionLevelType::valueIsValid($permissionLevel)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $permissionLevel, implode(', ', \Ews\EnumType\EwsPermissionLevelType::getValidValues())), __LINE__);
        }
        $this->PermissionLevel = $permissionLevel;
        return $this;
    }
    /**
     * Get ReadItems value
     * @return string|null
     */
    public function getReadItems()
    {
        return $this->ReadItems;
    }
    /**
     * Set ReadItems value
     * @uses \Ews\EnumType\EwsPermissionReadAccessType::valueIsValid()
     * @uses \Ews\EnumType\EwsPermissionReadAccessType::getValidValues()
     * @param string $readItems
     * @return \Ews\StructType\EwsPermissionType
     */
    public function setReadItems($readItems = null)
    {
        if (!\Ews\EnumType\EwsPermissionReadAccessType::valueIsValid($readItems)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $readItems, implode(', ', \Ews\EnumType\EwsPermissionReadAccessType::getValidValues())), __LINE__);
        }
        $this->ReadItems = $readItems;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsPermissionType
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
