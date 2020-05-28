<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var int
     */
    public $StatusFrequency;
    /**
     * The URL
     * @var string
     */
    public $URL;
    /**
     * The CallerData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CallerData;
    /**
     * Constructor method for PushSubscriptionRequestType
     * @uses EwsPushSubscriptionRequestType::setStatusFrequency()
     * @uses EwsPushSubscriptionRequestType::setURL()
     * @uses EwsPushSubscriptionRequestType::setCallerData()
     * @param int $statusFrequency
     * @param string $uRL
     * @param string $callerData
     */
    public function __construct($statusFrequency = null, $uRL = null, $callerData = null)
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
    public function getStatusFrequency()
    {
        return $this->StatusFrequency;
    }
    /**
     * Set StatusFrequency value
     * @param int $statusFrequency
     * @return \Ews\StructType\EwsPushSubscriptionRequestType
     */
    public function setStatusFrequency($statusFrequency = null)
    {
        // validation for constraint: int
        if (!is_null($statusFrequency) && !(is_int($statusFrequency) || ctype_digit($statusFrequency))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($statusFrequency, true), gettype($statusFrequency)), __LINE__);
        }
        // validation for constraint: maxInclusive(1440)
        if (!is_null($statusFrequency) && $statusFrequency > 1440) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 1440', var_export($statusFrequency, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($statusFrequency) && $statusFrequency < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($statusFrequency, true)), __LINE__);
        }
        $this->StatusFrequency = $statusFrequency;
        return $this;
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $uRL
     * @return \Ews\StructType\EwsPushSubscriptionRequestType
     */
    public function setURL($uRL = null)
    {
        // validation for constraint: string
        if (!is_null($uRL) && !is_string($uRL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uRL, true), gettype($uRL)), __LINE__);
        }
        $this->URL = $uRL;
        return $this;
    }
    /**
     * Get CallerData value
     * @return string|null
     */
    public function getCallerData()
    {
        return $this->CallerData;
    }
    /**
     * Set CallerData value
     * @param string $callerData
     * @return \Ews\StructType\EwsPushSubscriptionRequestType
     */
    public function setCallerData($callerData = null)
    {
        // validation for constraint: string
        if (!is_null($callerData) && !is_string($callerData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($callerData, true), gettype($callerData)), __LINE__);
        }
        $this->CallerData = $callerData;
        return $this;
    }
}
