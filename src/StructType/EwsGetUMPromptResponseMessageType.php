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
     * Meta informations extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($audioData)), __LINE__);
        }
        $this->AudioData = $audioData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetUMPromptResponseMessageType
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
