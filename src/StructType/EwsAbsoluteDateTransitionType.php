<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AbsoluteDateTransitionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAbsoluteDateTransitionType extends EwsTransitionType
{
    /**
     * The DateTime
     * @var string|null
     */
    protected ?string $DateTime = null;
    /**
     * Constructor method for AbsoluteDateTransitionType
     * @uses EwsAbsoluteDateTransitionType::setDateTime()
     * @param string $dateTime
     */
    public function __construct(?string $dateTime = null)
    {
        $this
            ->setDateTime($dateTime);
    }
    /**
     * Get DateTime value
     * @return string|null
     */
    public function getDateTime(): ?string
    {
        return $this->DateTime;
    }
    /**
     * Set DateTime value
     * @param string $dateTime
     * @return \StructType\EwsAbsoluteDateTransitionType
     */
    public function setDateTime(?string $dateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($dateTime) && !is_string($dateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateTime, true), gettype($dateTime)), __LINE__);
        }
        $this->DateTime = $dateTime;
        
        return $this;
    }
}
