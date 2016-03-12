<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetUnifiedGroupUserSubscribeStateType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetUnifiedGroupUserSubscribeStateType extends EwsUnifiedGroupBaseRequestType
{
    /**
     * The IsSubscribed
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IsSubscribed;
    /**
     * Constructor method for SetUnifiedGroupUserSubscribeStateType
     * @uses EwsSetUnifiedGroupUserSubscribeStateType::setIsSubscribed()
     * @param bool $isSubscribed
     */
    public function __construct($isSubscribed = null)
    {
        $this
            ->setIsSubscribed($isSubscribed);
    }
    /**
     * Get IsSubscribed value
     * @return bool
     */
    public function getIsSubscribed()
    {
        return $this->IsSubscribed;
    }
    /**
     * Set IsSubscribed value
     * @param bool $isSubscribed
     * @return \Ews\StructType\EwsSetUnifiedGroupUserSubscribeStateType
     */
    public function setIsSubscribed($isSubscribed = null)
    {
        $this->IsSubscribed = $isSubscribed;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSetUnifiedGroupUserSubscribeStateType
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
