<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GroupSearchScopeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGroupSearchScopeType extends AbstractStructBase
{
    /**
     * The GroupTypes
     * @var string[]
     */
    public $GroupTypes;
    /**
     * Constructor method for GroupSearchScopeType
     * @uses EwsGroupSearchScopeType::setGroupTypes()
     * @param string[] $groupTypes
     */
    public function __construct($groupTypes = null)
    {
        $this
            ->setGroupTypes($groupTypes);
    }
    /**
     * Get GroupTypes value
     * @return string[]|null
     */
    public function getGroupTypes()
    {
        return $this->GroupTypes;
    }
    /**
     * Set GroupTypes value
     * @uses \Ews\EnumType\EwsSearchScopeGroupsType::valueIsValid()
     * @uses \Ews\EnumType\EwsSearchScopeGroupsType::getValidValues()
     * @param string[] $groupTypes
     * @return \Ews\StructType\EwsGroupSearchScopeType
     */
    public function setGroupTypes($groupTypes = null)
    {
        if (!\Ews\EnumType\EwsSearchScopeGroupsType::valueIsValid($groupTypes)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $groupTypes, implode(', ', \Ews\EnumType\EwsSearchScopeGroupsType::getValidValues())), __LINE__);
        }
        $this->GroupTypes = $groupTypes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGroupSearchScopeType
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
