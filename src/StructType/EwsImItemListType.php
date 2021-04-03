<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfImGroupType|null
     */
    protected ?\ArrayType\EwsArrayOfImGroupType $Groups = null;
    /**
     * The Personas
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfPeopleType|null
     */
    protected ?\ArrayType\EwsArrayOfPeopleType $Personas = null;
    /**
     * Constructor method for ImItemListType
     * @uses EwsImItemListType::setGroups()
     * @uses EwsImItemListType::setPersonas()
     * @param \ArrayType\EwsArrayOfImGroupType $groups
     * @param \ArrayType\EwsArrayOfPeopleType $personas
     */
    public function __construct(?\ArrayType\EwsArrayOfImGroupType $groups = null, ?\ArrayType\EwsArrayOfPeopleType $personas = null)
    {
        $this
            ->setGroups($groups)
            ->setPersonas($personas);
    }
    /**
     * Get Groups value
     * @return \ArrayType\EwsArrayOfImGroupType|null
     */
    public function getGroups(): ?\ArrayType\EwsArrayOfImGroupType
    {
        return $this->Groups;
    }
    /**
     * Set Groups value
     * @param \ArrayType\EwsArrayOfImGroupType $groups
     * @return \StructType\EwsImItemListType
     */
    public function setGroups(?\ArrayType\EwsArrayOfImGroupType $groups = null): self
    {
        $this->Groups = $groups;
        
        return $this;
    }
    /**
     * Get Personas value
     * @return \ArrayType\EwsArrayOfPeopleType|null
     */
    public function getPersonas(): ?\ArrayType\EwsArrayOfPeopleType
    {
        return $this->Personas;
    }
    /**
     * Set Personas value
     * @param \ArrayType\EwsArrayOfPeopleType $personas
     * @return \StructType\EwsImItemListType
     */
    public function setPersonas(?\ArrayType\EwsArrayOfPeopleType $personas = null): self
    {
        $this->Personas = $personas;
        
        return $this;
    }
}
