<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnifiedGroupSenderRestrictionsDataType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedGroupSenderRestrictionsDataType extends AbstractStructBase
{
    /**
     * The Persona
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsPersonaType
     */
    public $Persona;
    /**
     * The ExternalDirectoryObjectId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExternalDirectoryObjectId;
    /**
     * Constructor method for UnifiedGroupSenderRestrictionsDataType
     * @uses EwsUnifiedGroupSenderRestrictionsDataType::setPersona()
     * @uses EwsUnifiedGroupSenderRestrictionsDataType::setExternalDirectoryObjectId()
     * @param \Ews\StructType\EwsPersonaType $persona
     * @param string $externalDirectoryObjectId
     */
    public function __construct(\Ews\StructType\EwsPersonaType $persona = null, $externalDirectoryObjectId = null)
    {
        $this
            ->setPersona($persona)
            ->setExternalDirectoryObjectId($externalDirectoryObjectId);
    }
    /**
     * Get Persona value
     * @return \Ews\StructType\EwsPersonaType
     */
    public function getPersona()
    {
        return $this->Persona;
    }
    /**
     * Set Persona value
     * @param \Ews\StructType\EwsPersonaType $persona
     * @return \Ews\StructType\EwsUnifiedGroupSenderRestrictionsDataType
     */
    public function setPersona(\Ews\StructType\EwsPersonaType $persona = null)
    {
        $this->Persona = $persona;
        return $this;
    }
    /**
     * Get ExternalDirectoryObjectId value
     * @return string|null
     */
    public function getExternalDirectoryObjectId()
    {
        return $this->ExternalDirectoryObjectId;
    }
    /**
     * Set ExternalDirectoryObjectId value
     * @param string $externalDirectoryObjectId
     * @return \Ews\StructType\EwsUnifiedGroupSenderRestrictionsDataType
     */
    public function setExternalDirectoryObjectId($externalDirectoryObjectId = null)
    {
        // validation for constraint: string
        if (!is_null($externalDirectoryObjectId) && !is_string($externalDirectoryObjectId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalDirectoryObjectId, true), gettype($externalDirectoryObjectId)), __LINE__);
        }
        $this->ExternalDirectoryObjectId = $externalDirectoryObjectId;
        return $this;
    }
}
