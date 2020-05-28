<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddNewImContactToGroupResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAddNewImContactToGroupResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Persona
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsPersonaType
     */
    public $Persona;
    /**
     * Constructor method for AddNewImContactToGroupResponseMessageType
     * @uses EwsAddNewImContactToGroupResponseMessageType::setPersona()
     * @param \Ews\StructType\EwsPersonaType $persona
     */
    public function __construct(\Ews\StructType\EwsPersonaType $persona = null)
    {
        $this
            ->setPersona($persona);
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
     * @return \Ews\StructType\EwsAddNewImContactToGroupResponseMessageType
     */
    public function setPersona(\Ews\StructType\EwsPersonaType $persona = null)
    {
        $this->Persona = $persona;
        return $this;
    }
}
