<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeletedOccurrenceInfoType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDeletedOccurrenceInfoType extends AbstractStructBase
{
    /**
     * The Start
     * @var string|null
     */
    protected ?string $Start = null;
    /**
     * Constructor method for DeletedOccurrenceInfoType
     * @uses EwsDeletedOccurrenceInfoType::setStart()
     * @param string $start
     */
    public function __construct(?string $start = null)
    {
        $this
            ->setStart($start);
    }
    /**
     * Get Start value
     * @return string|null
     */
    public function getStart(): ?string
    {
        return $this->Start;
    }
    /**
     * Set Start value
     * @param string $start
     * @return \StructType\EwsDeletedOccurrenceInfoType
     */
    public function setStart(?string $start = null): self
    {
        // validation for constraint: string
        if (!is_null($start) && !is_string($start)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($start, true), gettype($start)), __LINE__);
        }
        $this->Start = $start;
        
        return $this;
    }
}
