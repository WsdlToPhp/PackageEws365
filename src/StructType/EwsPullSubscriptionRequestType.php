<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - base: xs:int
     * - maxInclusive: 1440
     * - minInclusive: 1
     * @var int|null
     */
    protected ?int $Timeout = null;
    /**
     * Constructor method for PullSubscriptionRequestType
     * @uses EwsPullSubscriptionRequestType::setTimeout()
     * @param int $timeout
     */
    public function __construct(?int $timeout = null)
    {
        $this
            ->setTimeout($timeout);
    }
    /**
     * Get Timeout value
     * @return int|null
     */
    public function getTimeout(): ?int
    {
        return $this->Timeout;
    }
    /**
     * Set Timeout value
     * @param int $timeout
     * @return \StructType\EwsPullSubscriptionRequestType
     */
    public function setTimeout(?int $timeout = null): self
    {
        // validation for constraint: int
        if (!is_null($timeout) && !(is_int($timeout) || ctype_digit($timeout))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($timeout, true), gettype($timeout)), __LINE__);
        }
        // validation for constraint: maxInclusive(1440)
        if (!is_null($timeout) && $timeout > 1440) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 1440', var_export($timeout, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($timeout) && $timeout < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($timeout, true)), __LINE__);
        }
        $this->Timeout = $timeout;
        
        return $this;
    }
}
