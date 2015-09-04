<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UrlEntityType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsUrlEntityType extends EwsEntityType
{
    /**
     * The Url
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Url;
    /**
     * Constructor method for UrlEntityType
     * @uses EwsUrlEntityType::setUrl()
     * @param string $url
     */
    public function __construct($url = null)
    {
        $this
            ->setUrl($url);
    }
    /**
     * Get Url value
     * @return string|null
     */
    public function getUrl()
    {
        return $this->Url;
    }
    /**
     * Set Url value
     * @param string $url
     * @return \Ews\StructType\EwsUrlEntityType
     */
    public function setUrl($url = null)
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
     * @return \Ews\StructType\EwsUrlEntityType
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
