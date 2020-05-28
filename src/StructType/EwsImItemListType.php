<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImItemListType StructType
 * Meta information extracted from the WSDL
 * - documentation: IM Contact List
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsImItemListType extends AbstractStructBase
{
    /**
     * The Groups
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfImGroupType
     */
    public $Groups;
    /**
     * The Personas
     * Meta information extracted from the WSDL
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
}
