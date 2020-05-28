<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var int
     */
    public $MaxEntriesReturned;
    /**
     * Constructor method for BasePagingType
     * @uses EwsBasePagingType::setMaxEntriesReturned()
     * @param int $maxEntriesReturned
     */
    public function __construct($maxEntriesReturned = null)
    {
        $this
            ->setMaxEntriesReturned($maxEntriesReturned);
    }
    /**
     * Get MaxEntriesReturned value
     * @return int|null
     */
    public function getMaxEntriesReturned()
    {
        return $this->MaxEntriesReturned;
    }
    /**
     * Set MaxEntriesReturned value
     * @param int $maxEntriesReturned
     * @return \Ews\StructType\EwsBasePagingType
     */
    public function setMaxEntriesReturned($maxEntriesReturned = null)
    {
        // validation for constraint: int
        if (!is_null($maxEntriesReturned) && !(is_int($maxEntriesReturned) || ctype_digit($maxEntriesReturned))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxEntriesReturned, true), gettype($maxEntriesReturned)), __LINE__);
        }
        $this->MaxEntriesReturned = $maxEntriesReturned;
        return $this;
    }
}
