<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUMPromptResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUMPromptResponseMessageType extends EwsResponseMessageType
{
    /**
     * The AudioData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AudioData;
    /**
     * Constructor method for GetUMPromptResponseMessageType
     * @uses EwsGetUMPromptResponseMessageType::setAudioData()
     * @param string $audioData
     */
    public function __construct($audioData = null)
    {
        $this
            ->setAudioData($audioData);
    }
    /**
     * Get AudioData value
     * @return string|null
     */
    public function getAudioData()
    {
        return $this->AudioData;
    }
    /**
     * Set AudioData value
     * @param string $audioData
     * @return \Ews\StructType\EwsGetUMPromptResponseMessageType
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
