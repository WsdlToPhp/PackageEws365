<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUMPromptResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGetUMPromptResponseMessageType extends EwsResponseMessageType
{
    /**
     * The AudioData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var base64Binary
     */
    public $AudioData;
    /**
     * Constructor method for GetUMPromptResponseMessageType
     * @uses EwsGetUMPromptResponseMessageType::setAudioData()
     * @param base64Binary $audioData
     */
    public function __construct(base64Binary $audioData = null)
    {
        $this
            ->setAudioData($audioData);
    }
    /**
     * Get AudioData value
     * @return base64Binary|null
     */
    public function getAudioData()
    {
        return $this->AudioData;
    }
    /**
     * Set AudioData value
     * @param base64Binary $audioData
     * @return \Ews\StructType\EwsGetUMPromptResponseMessageType
     */
    public function setAudioData(base64Binary $audioData = null)
    {
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
