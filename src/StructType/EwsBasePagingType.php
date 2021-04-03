<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BasePagingType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
abstract class EwsBasePagingType extends AbstractStructBase
{
    /**
     * The MaxEntriesReturned
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $MaxEntriesReturned = null;
    /**
     * Constructor method for BasePagingType
     * @uses EwsBasePagingType::setMaxEntriesReturned()
     * @param int $maxEntriesReturned
     */
    public function __construct(?int $maxEntriesReturned = null)
    {
        $this
            ->setMaxEntriesReturned($maxEntriesReturned);
    }
    /**
     * Get MaxEntriesReturned value
     * @return int|null
     */
    public function getMaxEntriesReturned(): ?int
    {
        return $this->MaxEntriesReturned;
    }
    /**
     * Set MaxEntriesReturned value
     * @param int $maxEntriesReturned
     * @return \StructType\EwsBasePagingType
     */
    public function setMaxEntriesReturned(?int $maxEntriesReturned = null): self
    {
        // validation for constraint: int
        if (!is_null($maxEntriesReturned) && !(is_int($maxEntriesReturned) || ctype_digit($maxEntriesReturned))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxEntriesReturned, true), gettype($maxEntriesReturned)), __LINE__);
        }
        $this->MaxEntriesReturned = $maxEntriesReturned;
        
        return $this;
    }
}
