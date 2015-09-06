<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompleteFindInGALSpeechRecognitionResponseMessageType
 * StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCompleteFindInGALSpeechRecognitionResponseMessageType extends EwsResponseMessageType
{
    /**
     * The RecognitionResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsRecognitionResultType
     */
    public $RecognitionResult;
    /**
     * Constructor method for CompleteFindInGALSpeechRecognitionResponseMessageType
     * @uses
     * EwsCompleteFindInGALSpeechRecognitionResponseMessageType::setRecognitionResult()
     * @param \Ews\StructType\EwsRecognitionResultType $recognitionResult
     */
    public function __construct(\Ews\StructType\EwsRecognitionResultType $recognitionResult = null)
    {
        $this
            ->setRecognitionResult($recognitionResult);
    }
    /**
     * Get RecognitionResult value
     * @return \Ews\StructType\EwsRecognitionResultType|null
     */
    public function getRecognitionResult()
    {
        return $this->RecognitionResult;
    }
    /**
     * Set RecognitionResult value
     * @param \Ews\StructType\EwsRecognitionResultType $recognitionResult
     * @return \Ews\StructType\EwsCompleteFindInGALSpeechRecognitionResponseMessageType
     */
    public function setRecognitionResult(\Ews\StructType\EwsRecognitionResultType $recognitionResult = null)
    {
        $this->RecognitionResult = $recognitionResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsCompleteFindInGALSpeechRecognitionResponseMessageType
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
