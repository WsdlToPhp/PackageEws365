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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsPersonaType
     */
    public $Persona;
    /**
     * The IsOwner
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $IsOwner;
    /**
     * Constructor method for UnifiedGroupMemberType
     * @uses EwsUnifiedGroupMemberType::setPersona()
     * @uses EwsUnifiedGroupMemberType::setIsOwner()
     * @param \Ews\StructType\EwsPersonaType $persona
     * @param boolean $isOwner
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
     * @return boolean|null
     */
    public function getIsOwner()
    {
        return $this->IsOwner;
    }
    /**
     * Set IsOwner value
     * @param boolean $isOwner
     * @return \Ews\StructType\EwsUnifiedGroupMemberType
     */
    public function setIsOwner($isOwner = null)
    {
        $this->IsOwner = $isOwner;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUnifiedGroupMemberType
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
