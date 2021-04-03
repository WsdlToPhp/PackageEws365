<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubscribeResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSubscribeResponseMessageType extends EwsResponseMessageType
{
    /**
     * The SubscriptionId
     * Meta information extracted from the WSDL
     * - base: t:NonEmptyStringType
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SubscriptionId = null;
    /**
     * The Watermark
     * Meta information extracted from the WSDL
     * - base: t:NonEmptyStringType
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Watermark = null;
    /**
     * Constructor method for SubscribeResponseMessageType
     * @uses EwsSubscribeResponseMessageType::setSubscriptionId()
     * @uses EwsSubscribeResponseMessageType::setWatermark()
     * @param string $subscriptionId
     * @param string $watermark
     */
    public function __construct(?string $subscriptionId = null, ?string $watermark = null)
    {
        $this
            ->setSubscriptionId($subscriptionId)
            ->setWatermark($watermark);
    }
    /**
     * Get SubscriptionId value
     * @return string|null
     */
    public function getSubscriptionId(): ?string
    {
        return $this->SubscriptionId;
    }
    /**
     * Set SubscriptionId value
     * @param string $subscriptionId
     * @return \StructType\EwsSubscribeResponseMessageType
     */
    public function setSubscriptionId(?string $subscriptionId = null): self
    {
        // validation for constraint: string
        if (!is_null($subscriptionId) && !is_string($subscriptionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subscriptionId, true), gettype($subscriptionId)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($subscriptionId) && mb_strlen((string) $subscriptionId) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $subscriptionId)), __LINE__);
        }
        $this->SubscriptionId = $subscriptionId;
        
        return $this;
    }
    /**
     * Get Watermark value
     * @return string|null
     */
    public function getWatermark(): ?string
    {
        return $this->Watermark;
    }
    /**
     * Set Watermark value
     * @param string $watermark
     * @return \StructType\EwsSubscribeResponseMessageType
     */
    public function setWatermark(?string $watermark = null): self
    {
        // validation for constraint: string
        if (!is_null($watermark) && !is_string($watermark)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($watermark, true), gettype($watermark)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($watermark) && mb_strlen((string) $watermark) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $watermark)), __LINE__);
        }
        $this->Watermark = $watermark;
        
        return $this;
    }
}
