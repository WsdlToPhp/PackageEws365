<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsRecognitionResultType|null
     */
    protected ?\StructType\EwsRecognitionResultType $RecognitionResult = null;
    /**
     * Constructor method for CompleteFindInGALSpeechRecognitionResponseMessageType
     * @uses EwsCompleteFindInGALSpeechRecognitionResponseMessageType::setRecognitionResult()
     * @param \StructType\EwsRecognitionResultType $recognitionResult
     */
    public function __construct(?\StructType\EwsRecognitionResultType $recognitionResult = null)
    {
        $this
            ->setRecognitionResult($recognitionResult);
    }
    /**
     * Get RecognitionResult value
     * @return \StructType\EwsRecognitionResultType|null
     */
    public function getRecognitionResult(): ?\StructType\EwsRecognitionResultType
    {
        return $this->RecognitionResult;
    }
    /**
     * Set RecognitionResult value
     * @param \StructType\EwsRecognitionResultType $recognitionResult
     * @return \StructType\EwsCompleteFindInGALSpeechRecognitionResponseMessageType
     */
    public function setRecognitionResult(?\StructType\EwsRecognitionResultType $recognitionResult = null): self
    {
        $this->RecognitionResult = $recognitionResult;
        
        return $this;
    }
}
