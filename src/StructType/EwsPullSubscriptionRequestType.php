<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PullSubscriptionRequestType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsPullSubscriptionRequestType extends EwsBaseSubscriptionRequestType
{
    /**
     * The Timeout
     * Meta informations extracted from the WSDL
     * - maxInclusive: 1440
     * - minInclusive: 1
     * @var int
     */
    public $Timeout;
    /**
     * Constructor method for PullSubscriptionRequestType
     * @uses EwsPullSubscriptionRequestType::setTimeout()
     * @param int $timeout
     */
    public function __construct($timeout = null)
    {
        $this
            ->setTimeout($timeout);
    }
    /**
     * Get Timeout value
     * @return int|null
     */
    public function getTimeout()
    {
        return $this->Timeout;
    }
    /**
     * Set Timeout value
     * @param int $timeout
     * @return \Ews\StructType\EwsPullSubscriptionRequestType
     */
    public function setTimeout($timeout = null)
    {
        $this->Timeout = $timeout;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsPullSubscriptionRequestType
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
