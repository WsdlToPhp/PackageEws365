<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImItemListType StructType
 * Meta informations extracted from the WSDL
 * - documentation: IM Contact List
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsImItemListType extends AbstractStructBase
{
    /**
     * The Groups
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfImGroupType
     */
    public $Groups;
    /**
     * The Personas
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfPeopleType
     */
    public $Personas;
    /**
     * Constructor method for ImItemListType
     * @uses EwsImItemListType::setGroups()
     * @uses EwsImItemListType::setPersonas()
     * @param \Ews\ArrayType\EwsArrayOfImGroupType $groups
     * @param \Ews\ArrayType\EwsArrayOfPeopleType $personas
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfImGroupType $groups = null, \Ews\ArrayType\EwsArrayOfPeopleType $personas = null)
    {
        $this
            ->setGroups($groups)
            ->setPersonas($personas);
    }
    /**
     * Get Groups value
     * @return \Ews\ArrayType\EwsArrayOfImGroupType|null
     */
    public function getGroups()
    {
        return $this->Groups;
    }
    /**
     * Set Groups value
     * @param \Ews\ArrayType\EwsArrayOfImGroupType $groups
     * @return \Ews\StructType\EwsImItemListType
     */
    public function setGroups(\Ews\ArrayType\EwsArrayOfImGroupType $groups = null)
    {
        $this->Groups = $groups;
        return $this;
    }
    /**
     * Get Personas value
     * @return \Ews\ArrayType\EwsArrayOfPeopleType|null
     */
    public function getPersonas()
    {
        return $this->Personas;
    }
    /**
     * Set Personas value
     * @param \Ews\ArrayType\EwsArrayOfPeopleType $personas
     * @return \Ews\StructType\EwsImItemListType
     */
    public function setPersonas(\Ews\ArrayType\EwsArrayOfPeopleType $personas = null)
    {
        $this->Personas = $personas;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsImItemListType
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
