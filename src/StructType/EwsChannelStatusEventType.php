<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChannelStatusEventType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsChannelStatusEventType extends EwsChannelEventType
{
    /**
     * The IsNew
     * @var boolean
     */
    public $IsNew;
    /**
     * Constructor method for ChannelStatusEventType
     * @uses EwsChannelStatusEventType::setIsNew()
     * @param boolean $isNew
     */
    public function __construct($isNew = null)
    {
        $this
            ->setIsNew($isNew);
    }
    /**
     * Get IsNew value
     * @return boolean|null
     */
    public function getIsNew()
    {
        return $this->IsNew;
    }
    /**
     * Set IsNew value
     * @param boolean $isNew
     * @return \Ews\StructType\EwsChannelStatusEventType
     */
    public function setIsNew($isNew = null)
    {
        $this->IsNew = $isNew;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsChannelStatusEventType
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
