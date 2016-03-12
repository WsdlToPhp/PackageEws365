<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEventsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetEventsType extends EwsBaseRequestType
{
    /**
     * The SubscriptionId
     * Meta informations extracted from the WSDL
     * - minLength: 1
     * @var string
     */
    public $SubscriptionId;
    /**
     * The Watermark
     * Meta informations extracted from the WSDL
     * - minLength: 1
     * @var string
     */
    public $Watermark;
    /**
     * Constructor method for GetEventsType
     * @uses EwsGetEventsType::setSubscriptionId()
     * @uses EwsGetEventsType::setWatermark()
     * @param string $subscriptionId
     * @param string $watermark
     */
    public function __construct($subscriptionId = null, $watermark = null)
    {
        $this
            ->setSubscriptionId($subscriptionId)
            ->setWatermark($watermark);
    }
    /**
     * Get SubscriptionId value
     * @return string|null
     */
    public function getSubscriptionId()
    {
        return $this->SubscriptionId;
    }
    /**
     * Set SubscriptionId value
     * @param string $subscriptionId
     * @return \Ews\StructType\EwsGetEventsType
     */
    public function setSubscriptionId($subscriptionId = null)
    {
        // validation for constraint: minLength
        if ((is_scalar(subscriptionId) && strlen(subscriptionId) < 1) || (is_array(subscriptionId) && count(subscriptionId) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($subscriptionId) && !is_string($subscriptionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subscriptionId)), __LINE__);
        }
        $this->SubscriptionId = $subscriptionId;
        return $this;
    }
    /**
     * Get Watermark value
     * @return string|null
     */
    public function getWatermark()
    {
        return $this->Watermark;
    }
    /**
     * Set Watermark value
     * @param string $watermark
     * @return \Ews\StructType\EwsGetEventsType
     */
    public function setWatermark($watermark = null)
    {
        // validation for constraint: minLength
        if ((is_scalar(watermark) && strlen(watermark) < 1) || (is_array(watermark) && count(watermark) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($watermark) && !is_string($watermark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($watermark)), __LINE__);
        }
        $this->Watermark = $watermark;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetEventsType
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
