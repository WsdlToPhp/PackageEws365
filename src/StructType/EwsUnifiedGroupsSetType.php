<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnifiedGroupsSetType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Represents a set of unified groups in a GetUserUnifiedGroup response
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedGroupsSetType extends AbstractStructBase
{
    /**
     * The FilterType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FilterType;
    /**
     * The TotalGroups
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $TotalGroups;
    /**
     * The Groups
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfUnifiedGroupsType
     */
    public $Groups;
    /**
     * Constructor method for UnifiedGroupsSetType
     * @uses EwsUnifiedGroupsSetType::setFilterType()
     * @uses EwsUnifiedGroupsSetType::setTotalGroups()
     * @uses EwsUnifiedGroupsSetType::setGroups()
     * @param string $filterType
     * @param int $totalGroups
     * @param \Ews\ArrayType\EwsArrayOfUnifiedGroupsType $groups
     */
    public function __construct($filterType = null, $totalGroups = null, \Ews\ArrayType\EwsArrayOfUnifiedGroupsType $groups = null)
    {
        $this
            ->setFilterType($filterType)
            ->setTotalGroups($totalGroups)
            ->setGroups($groups);
    }
    /**
     * Get FilterType value
     * @return string|null
     */
    public function getFilterType()
    {
        return $this->FilterType;
    }
    /**
     * Set FilterType value
     * @uses \Ews\EnumType\EwsUnifiedGroupsFilterType::valueIsValid()
     * @uses \Ews\EnumType\EwsUnifiedGroupsFilterType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $filterType
     * @return \Ews\StructType\EwsUnifiedGroupsSetType
     */
    public function setFilterType($filterType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsUnifiedGroupsFilterType::valueIsValid($filterType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $filterType, implode(', ', \Ews\EnumType\EwsUnifiedGroupsFilterType::getValidValues())), __LINE__);
        }
        $this->FilterType = $filterType;
        return $this;
    }
    /**
     * Get TotalGroups value
     * @return int|null
     */
    public function getTotalGroups()
    {
        return $this->TotalGroups;
    }
    /**
     * Set TotalGroups value
     * @param int $totalGroups
     * @return \Ews\StructType\EwsUnifiedGroupsSetType
     */
    public function setTotalGroups($totalGroups = null)
    {
        // validation for constraint: int
        if (!is_null($totalGroups) && !is_int($totalGroups)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($totalGroups)), __LINE__);
        }
        $this->TotalGroups = $totalGroups;
        return $this;
    }
    /**
     * Get Groups value
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupsType|null
     */
    public function getGroups()
    {
        return $this->Groups;
    }
    /**
     * Set Groups value
     * @param \Ews\ArrayType\EwsArrayOfUnifiedGroupsType $groups
     * @return \Ews\StructType\EwsUnifiedGroupsSetType
     */
    public function setGroups(\Ews\ArrayType\EwsArrayOfUnifiedGroupsType $groups = null)
    {
        $this->Groups = $groups;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUnifiedGroupsSetType
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
