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
     * Meta informations extracted from the WSDL
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
        if (!is_null($maxEntriesReturned) && !is_int($maxEntriesReturned)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($maxEntriesReturned)), __LINE__);
        }
        $this->MaxEntriesReturned = $maxEntriesReturned;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsBasePagingType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
