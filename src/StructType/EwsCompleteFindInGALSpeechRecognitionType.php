<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompleteFindInGALSpeechRecognitionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCompleteFindInGALSpeechRecognitionType extends EwsBaseRequestType
{
    /**
     * The RecognitionId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsRecognitionIdType
     */
    public $RecognitionId;
    /**
     * The AudioData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $AudioData;
    /**
     * Constructor method for CompleteFindInGALSpeechRecognitionType
     * @uses EwsCompleteFindInGALSpeechRecognitionType::setRecognitionId()
     * @uses EwsCompleteFindInGALSpeechRecognitionType::setAudioData()
     * @param \Ews\StructType\EwsRecognitionIdType $recognitionId
     * @param string $audioData
     */
    public function __construct(\Ews\StructType\EwsRecognitionIdType $recognitionId = null, $audioData = null)
    {
        $this
            ->setRecognitionId($recognitionId)
            ->setAudioData($audioData);
    }
    /**
     * Get RecognitionId value
     * @return \Ews\StructType\EwsRecognitionIdType
     */
    public function getRecognitionId()
    {
        return $this->RecognitionId;
    }
    /**
     * Set RecognitionId value
     * @param \Ews\StructType\EwsRecognitionIdType $recognitionId
     * @return \Ews\StructType\EwsCompleteFindInGALSpeechRecognitionType
     */
    public function setRecognitionId(\Ews\StructType\EwsRecognitionIdType $recognitionId = null)
    {
        $this->RecognitionId = $recognitionId;
        return $this;
    }
    /**
     * Get AudioData value
     * @return string
     */
    public function getAudioData()
    {
        return $this->AudioData;
    }
    /**
     * Set AudioData value
     * @param string $audioData
     * @return \Ews\StructType\EwsCompleteFindInGALSpeechRecognitionType
     */
    public function setAudioData($audioData = null)
    {
        // validation for constraint: string
        if (!is_null($audioData) && !is_string($audioData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($audioData, true), gettype($audioData)), __LINE__);
        }
        $this->AudioData = $audioData;
        return $this;
    }
}
