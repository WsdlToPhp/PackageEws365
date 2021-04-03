<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetUnifiedGroupLastVisitedTimeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetUnifiedGroupLastVisitedTimeType extends EwsUnifiedGroupBaseRequestType
{
    /**
     * The LastVisitedTimeUtc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $LastVisitedTimeUtc;
    /**
     * Constructor method for SetUnifiedGroupLastVisitedTimeType
     * @uses EwsSetUnifiedGroupLastVisitedTimeType::setLastVisitedTimeUtc()
     * @param string $lastVisitedTimeUtc
     */
    public function __construct(string $lastVisitedTimeUtc)
    {
        $this
            ->setLastVisitedTimeUtc($lastVisitedTimeUtc);
    }
    /**
     * Get LastVisitedTimeUtc value
     * @return string
     */
    public function getLastVisitedTimeUtc(): string
    {
        return $this->LastVisitedTimeUtc;
    }
    /**
     * Set LastVisitedTimeUtc value
     * @param string $lastVisitedTimeUtc
     * @return \StructType\EwsSetUnifiedGroupLastVisitedTimeType
     */
    public function setLastVisitedTimeUtc(string $lastVisitedTimeUtc): self
    {
        // validation for constraint: string
        if (!is_null($lastVisitedTimeUtc) && !is_string($lastVisitedTimeUtc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastVisitedTimeUtc, true), gettype($lastVisitedTimeUtc)), __LINE__);
        }
        $this->LastVisitedTimeUtc = $lastVisitedTimeUtc;
        
        return $this;
    }
}
