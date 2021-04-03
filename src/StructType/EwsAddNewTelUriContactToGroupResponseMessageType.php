<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddNewTelUriContactToGroupResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAddNewTelUriContactToGroupResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Persona
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsPersonaType|null
     */
    protected ?\StructType\EwsPersonaType $Persona = null;
    /**
     * Constructor method for AddNewTelUriContactToGroupResponseMessageType
     * @uses EwsAddNewTelUriContactToGroupResponseMessageType::setPersona()
     * @param \StructType\EwsPersonaType $persona
     */
    public function __construct(?\StructType\EwsPersonaType $persona = null)
    {
        $this
            ->setPersona($persona);
    }
    /**
     * Get Persona value
     * @return \StructType\EwsPersonaType|null
     */
    public function getPersona(): ?\StructType\EwsPersonaType
    {
        return $this->Persona;
    }
    /**
     * Set Persona value
     * @param \StructType\EwsPersonaType $persona
     * @return \StructType\EwsAddNewTelUriContactToGroupResponseMessageType
     */
    public function setPersona(?\StructType\EwsPersonaType $persona = null): self
    {
        $this->Persona = $persona;
        
        return $this;
    }
}
