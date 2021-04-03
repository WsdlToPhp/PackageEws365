<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PushSubscriptionRequestType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPushSubscriptionRequestType extends EwsBaseSubscriptionRequestType
{
    /**
     * The StatusFrequency
     * Meta information extracted from the WSDL
     * - base: xs:int
     * - maxInclusive: 1440
     * - minInclusive: 1
     * @var int|null
     */
    protected ?int $StatusFrequency = null;
    /**
     * The URL
     * @var string|null
     */
    protected ?string $URL = null;
    /**
     * The CallerData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CallerData = null;
    /**
     * Constructor method for PushSubscriptionRequestType
     * @uses EwsPushSubscriptionRequestType::setStatusFrequency()
     * @uses EwsPushSubscriptionRequestType::setURL()
     * @uses EwsPushSubscriptionRequestType::setCallerData()
     * @param int $statusFrequency
     * @param string $uRL
     * @param string $callerData
     */
    public function __construct(?int $statusFrequency = null, ?string $uRL = null, ?string $callerData = null)
    {
        $this
            ->setStatusFrequency($statusFrequency)
            ->setURL($uRL)
            ->setCallerData($callerData);
    }
    /**
     * Get StatusFrequency value
     * @return int|null
     */
    public function getStatusFrequency(): ?int
    {
        return $this->StatusFrequency;
    }
    /**
     * Set StatusFrequency value
     * @param int $statusFrequency
     * @return \StructType\EwsPushSubscriptionRequestType
     */
    public function setStatusFrequency(?int $statusFrequency = null): self
    {
        // validation for constraint: int
        if (!is_null($statusFrequency) && !(is_int($statusFrequency) || ctype_digit($statusFrequency))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($statusFrequency, true), gettype($statusFrequency)), __LINE__);
        }
        // validation for constraint: maxInclusive(1440)
        if (!is_null($statusFrequency) && $statusFrequency > 1440) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 1440', var_export($statusFrequency, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($statusFrequency) && $statusFrequency < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($statusFrequency, true)), __LINE__);
        }
        $this->StatusFrequency = $statusFrequency;
        
        return $this;
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL(): ?string
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $uRL
     * @return \StructType\EwsPushSubscriptionRequestType
     */
    public function setURL(?string $uRL = null): self
    {
        // validation for constraint: string
        if (!is_null($uRL) && !is_string($uRL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uRL, true), gettype($uRL)), __LINE__);
        }
        $this->URL = $uRL;
        
        return $this;
    }
    /**
     * Get CallerData value
     * @return string|null
     */
    public function getCallerData(): ?string
    {
        return $this->CallerData;
    }
    /**
     * Set CallerData value
     * @param string $callerData
     * @return \StructType\EwsPushSubscriptionRequestType
     */
    public function setCallerData(?string $callerData = null): self
    {
        // validation for constraint: string
        if (!is_null($callerData) && !is_string($callerData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($callerData, true), gettype($callerData)), __LINE__);
        }
        $this->CallerData = $callerData;
        
        return $this;
    }
}
