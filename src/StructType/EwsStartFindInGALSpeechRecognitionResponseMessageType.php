<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StartFindInGALSpeechRecognitionResponseMessageType
 * StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsStartFindInGALSpeechRecognitionResponseMessageType extends EwsResponseMessageType
{
    /**
     * The RecognitionId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsRecognitionIdType
     */
    public $RecognitionId;
    /**
     * Constructor method for StartFindInGALSpeechRecognitionResponseMessageType
     * @uses EwsStartFindInGALSpeechRecognitionResponseMessageType::setRecognitionId()
     * @param \Ews\StructType\EwsRecognitionIdType $recognitionId
     */
    public function __construct(\Ews\StructType\EwsRecognitionIdType $recognitionId = null)
    {
        $this
            ->setRecognitionId($recognitionId);
    }
    /**
     * Get RecognitionId value
     * @return \Ews\StructType\EwsRecognitionIdType|null
     */
    public function getRecognitionId()
    {
        return $this->RecognitionId;
    }
    /**
     * Set RecognitionId value
     * @param \Ews\StructType\EwsRecognitionIdType $recognitionId
     * @return \Ews\StructType\EwsStartFindInGALSpeechRecognitionResponseMessageType
     */
    public function setRecognitionId(\Ews\StructType\EwsRecognitionIdType $recognitionId = null)
    {
        $this->RecognitionId = $recognitionId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsStartFindInGALSpeechRecognitionResponseMessageType
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
