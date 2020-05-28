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
     * Meta information extracted from the WSDL
     * - base: t:NonEmptyStringType
     * - minLength: 1
     * @var string
     */
    public $SubscriptionId;
    /**
     * The Watermark
     * Meta information extracted from the WSDL
     * - base: t:NonEmptyStringType
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
        // validation for constraint: string
        if (!is_null($subscriptionId) && !is_string($subscriptionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subscriptionId, true), gettype($subscriptionId)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($subscriptionId) && mb_strlen($subscriptionId) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($subscriptionId)), __LINE__);
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
        // validation for constraint: string
        if (!is_null($watermark) && !is_string($watermark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($watermark, true), gettype($watermark)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($watermark) && mb_strlen($watermark) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($watermark)), __LINE__);
        }
        $this->Watermark = $watermark;
        return $this;
    }
}
