<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PullSubscriptionRequestType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
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
        // validation for constraint: maxInclusive
        if ($timeout > 1440) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 1440, "%s" given', $timeout), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($timeout < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 1, "%s" given', $timeout), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($timeout) && !is_numeric($timeout)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($timeout)), __LINE__);
        }
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
