<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactUrlDictionaryType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsContactUrlDictionaryType extends AbstractStructBase
{
    /**
     * The Url
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Ews\StructType\EwsContactUrlDictionaryEntryType
     */
    public $Url;
    /**
     * Constructor method for ContactUrlDictionaryType
     * @uses EwsContactUrlDictionaryType::setUrl()
     * @param \Ews\StructType\EwsContactUrlDictionaryEntryType $url
     */
    public function __construct(\Ews\StructType\EwsContactUrlDictionaryEntryType $url = null)
    {
        $this
            ->setUrl($url);
    }
    /**
     * Get Url value
     * @return \Ews\StructType\EwsContactUrlDictionaryEntryType|null
     */
    public function getUrl()
    {
        return $this->Url;
    }
    /**
     * Set Url value
     * @param \Ews\StructType\EwsContactUrlDictionaryEntryType $url
     * @return \Ews\StructType\EwsContactUrlDictionaryType
     */
    public function setUrl(\Ews\StructType\EwsContactUrlDictionaryEntryType $url = null)
    {
        $this->Url = $url;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsContactUrlDictionaryType
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
