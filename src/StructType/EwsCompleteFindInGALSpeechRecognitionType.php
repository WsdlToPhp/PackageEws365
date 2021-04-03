<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsRecognitionIdType
     */
    protected \StructType\EwsRecognitionIdType $RecognitionId;
    /**
     * The AudioData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $AudioData;
    /**
     * Constructor method for CompleteFindInGALSpeechRecognitionType
     * @uses EwsCompleteFindInGALSpeechRecognitionType::setRecognitionId()
     * @uses EwsCompleteFindInGALSpeechRecognitionType::setAudioData()
     * @param \StructType\EwsRecognitionIdType $recognitionId
     * @param string $audioData
     */
    public function __construct(\StructType\EwsRecognitionIdType $recognitionId, string $audioData)
    {
        $this
            ->setRecognitionId($recognitionId)
            ->setAudioData($audioData);
    }
    /**
     * Get RecognitionId value
     * @return \StructType\EwsRecognitionIdType
     */
    public function getRecognitionId(): \StructType\EwsRecognitionIdType
    {
        return $this->RecognitionId;
    }
    /**
     * Set RecognitionId value
     * @param \StructType\EwsRecognitionIdType $recognitionId
     * @return \StructType\EwsCompleteFindInGALSpeechRecognitionType
     */
    public function setRecognitionId(\StructType\EwsRecognitionIdType $recognitionId): self
    {
        $this->RecognitionId = $recognitionId;
        
        return $this;
    }
    /**
     * Get AudioData value
     * @return string
     */
    public function getAudioData(): string
    {
        return $this->AudioData;
    }
    /**
     * Set AudioData value
     * @param string $audioData
     * @return \StructType\EwsCompleteFindInGALSpeechRecognitionType
     */
    public function setAudioData(string $audioData): self
    {
        // validation for constraint: string
        if (!is_null($audioData) && !is_string($audioData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($audioData, true), gettype($audioData)), __LINE__);
        }
        $this->AudioData = $audioData;
        
        return $this;
    }
}
