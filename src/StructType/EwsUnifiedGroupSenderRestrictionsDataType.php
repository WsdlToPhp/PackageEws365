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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsPersonaType
     */
    public $Persona;
    /**
     * The ExternalDirectoryObjectId
     * Meta informations extracted from the WSDL
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
        $this->ExternalDirectoryObjectId = $externalDirectoryObjectId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUnifiedGroupSenderRestrictionsDataType
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
