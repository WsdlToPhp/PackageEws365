<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnifiedGroupMemberType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedGroupMemberType extends AbstractStructBase
{
    /**
     * The Persona
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsPersonaType
     */
    public $Persona;
    /**
     * The IsOwner
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $IsOwner;
    /**
     * Constructor method for UnifiedGroupMemberType
     * @uses EwsUnifiedGroupMemberType::setPersona()
     * @uses EwsUnifiedGroupMemberType::setIsOwner()
     * @param \Ews\StructType\EwsPersonaType $persona
     * @param bool $isOwner
     */
    public function __construct(\Ews\StructType\EwsPersonaType $persona = null, $isOwner = null)
    {
        $this
            ->setPersona($persona)
            ->setIsOwner($isOwner);
    }
    /**
     * Get Persona value
     * @return \Ews\StructType\EwsPersonaType|null
     */
    public function getPersona()
    {
        return $this->Persona;
    }
    /**
     * Set Persona value
     * @param \Ews\StructType\EwsPersonaType $persona
     * @return \Ews\StructType\EwsUnifiedGroupMemberType
     */
    public function setPersona(\Ews\StructType\EwsPersonaType $persona = null)
    {
        $this->Persona = $persona;
        return $this;
    }
    /**
     * Get IsOwner value
     * @return bool|null
     */
    public function getIsOwner()
    {
        return $this->IsOwner;
    }
    /**
     * Set IsOwner value
     * @param bool $isOwner
     * @return \Ews\StructType\EwsUnifiedGroupMemberType
     */
    public function setIsOwner($isOwner = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOwner) && !is_bool($isOwner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOwner, true), gettype($isOwner)), __LINE__);
        }
        $this->IsOwner = $isOwner;
        return $this;
    }
}
