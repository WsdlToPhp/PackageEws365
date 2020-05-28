<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StartFindInGALSpeechRecognitionResponseMessageType
 * StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsStartFindInGALSpeechRecognitionResponseMessageType extends EwsResponseMessageType
{
    /**
     * The RecognitionId
     * Meta information extracted from the WSDL
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
}
