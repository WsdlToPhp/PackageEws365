<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsRecognitionIdType|null
     */
    protected ?\StructType\EwsRecognitionIdType $RecognitionId = null;
    /**
     * Constructor method for StartFindInGALSpeechRecognitionResponseMessageType
     * @uses EwsStartFindInGALSpeechRecognitionResponseMessageType::setRecognitionId()
     * @param \StructType\EwsRecognitionIdType $recognitionId
     */
    public function __construct(?\StructType\EwsRecognitionIdType $recognitionId = null)
    {
        $this
            ->setRecognitionId($recognitionId);
    }
    /**
     * Get RecognitionId value
     * @return \StructType\EwsRecognitionIdType|null
     */
    public function getRecognitionId(): ?\StructType\EwsRecognitionIdType
    {
        return $this->RecognitionId;
    }
    /**
     * Set RecognitionId value
     * @param \StructType\EwsRecognitionIdType $recognitionId
     * @return \StructType\EwsStartFindInGALSpeechRecognitionResponseMessageType
     */
    public function setRecognitionId(?\StructType\EwsRecognitionIdType $recognitionId = null): self
    {
        $this->RecognitionId = $recognitionId;
        
        return $this;
    }
}
