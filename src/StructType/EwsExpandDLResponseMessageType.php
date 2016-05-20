<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExpandDLResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsExpandDLResponseMessageType extends EwsResponseMessageType
{
    /**
     * The DLExpansion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsArrayOfDLExpansionType
     */
    public $DLExpansion;
    /**
     * The IndexedPagingOffset
     * @var int
     */
    public $IndexedPagingOffset;
    /**
     * The NumeratorOffset
     * @var int
     */
    public $NumeratorOffset;
    /**
     * The AbsoluteDenominator
     * @var int
     */
    public $AbsoluteDenominator;
    /**
     * The IncludesLastItemInRange
     * @var bool
     */
    public $IncludesLastItemInRange;
    /**
     * The TotalItemsInView
     * @var int
     */
    public $TotalItemsInView;
    /**
     * Constructor method for ExpandDLResponseMessageType
     * @uses EwsExpandDLResponseMessageType::setDLExpansion()
     * @uses EwsExpandDLResponseMessageType::setIndexedPagingOffset()
     * @uses EwsExpandDLResponseMessageType::setNumeratorOffset()
     * @uses EwsExpandDLResponseMessageType::setAbsoluteDenominator()
     * @uses EwsExpandDLResponseMessageType::setIncludesLastItemInRange()
     * @uses EwsExpandDLResponseMessageType::setTotalItemsInView()
     * @param \Ews\StructType\EwsArrayOfDLExpansionType $dLExpansion
     * @param int $indexedPagingOffset
     * @param int $numeratorOffset
     * @param int $absoluteDenominator
     * @param bool $includesLastItemInRange
     * @param int $totalItemsInView
     */
    public function __construct(\Ews\StructType\EwsArrayOfDLExpansionType $dLExpansion = null, $indexedPagingOffset = null, $numeratorOffset = null, $absoluteDenominator = null, $includesLastItemInRange = null, $totalItemsInView = null)
    {
        $this
            ->setDLExpansion($dLExpansion)
            ->setIndexedPagingOffset($indexedPagingOffset)
            ->setNumeratorOffset($numeratorOffset)
            ->setAbsoluteDenominator($absoluteDenominator)
            ->setIncludesLastItemInRange($includesLastItemInRange)
            ->setTotalItemsInView($totalItemsInView);
    }
    /**
     * Get DLExpansion value
     * @return \Ews\StructType\EwsArrayOfDLExpansionType|null
     */
    public function getDLExpansion()
    {
        return $this->DLExpansion;
    }
    /**
     * Set DLExpansion value
     * @param \Ews\StructType\EwsArrayOfDLExpansionType $dLExpansion
     * @return \Ews\StructType\EwsExpandDLResponseMessageType
     */
    public function setDLExpansion(\Ews\StructType\EwsArrayOfDLExpansionType $dLExpansion = null)
    {
        $this->DLExpansion = $dLExpansion;
        return $this;
    }
    /**
     * Get IndexedPagingOffset value
     * @return int|null
     */
    public function getIndexedPagingOffset()
    {
        return $this->IndexedPagingOffset;
    }
    /**
     * Set IndexedPagingOffset value
     * @param int $indexedPagingOffset
     * @return \Ews\StructType\EwsExpandDLResponseMessageType
     */
    public function setIndexedPagingOffset($indexedPagingOffset = null)
    {
        // validation for constraint: int
        if (!is_null($indexedPagingOffset) && !is_numeric($indexedPagingOffset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($indexedPagingOffset)), __LINE__);
        }
        $this->IndexedPagingOffset = $indexedPagingOffset;
        return $this;
    }
    /**
     * Get NumeratorOffset value
     * @return int|null
     */
    public function getNumeratorOffset()
    {
        return $this->NumeratorOffset;
    }
    /**
     * Set NumeratorOffset value
     * @param int $numeratorOffset
     * @return \Ews\StructType\EwsExpandDLResponseMessageType
     */
    public function setNumeratorOffset($numeratorOffset = null)
    {
        // validation for constraint: int
        if (!is_null($numeratorOffset) && !is_numeric($numeratorOffset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numeratorOffset)), __LINE__);
        }
        $this->NumeratorOffset = $numeratorOffset;
        return $this;
    }
    /**
     * Get AbsoluteDenominator value
     * @return int|null
     */
    public function getAbsoluteDenominator()
    {
        return $this->AbsoluteDenominator;
    }
    /**
     * Set AbsoluteDenominator value
     * @param int $absoluteDenominator
     * @return \Ews\StructType\EwsExpandDLResponseMessageType
     */
    public function setAbsoluteDenominator($absoluteDenominator = null)
    {
        // validation for constraint: int
        if (!is_null($absoluteDenominator) && !is_numeric($absoluteDenominator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($absoluteDenominator)), __LINE__);
        }
        $this->AbsoluteDenominator = $absoluteDenominator;
        return $this;
    }
    /**
     * Get IncludesLastItemInRange value
     * @return bool|null
     */
    public function getIncludesLastItemInRange()
    {
        return $this->IncludesLastItemInRange;
    }
    /**
     * Set IncludesLastItemInRange value
     * @param bool $includesLastItemInRange
     * @return \Ews\StructType\EwsExpandDLResponseMessageType
     */
    public function setIncludesLastItemInRange($includesLastItemInRange = null)
    {
        $this->IncludesLastItemInRange = $includesLastItemInRange;
        return $this;
    }
    /**
     * Get TotalItemsInView value
     * @return int|null
     */
    public function getTotalItemsInView()
    {
        return $this->TotalItemsInView;
    }
    /**
     * Set TotalItemsInView value
     * @param int $totalItemsInView
     * @return \Ews\StructType\EwsExpandDLResponseMessageType
     */
    public function setTotalItemsInView($totalItemsInView = null)
    {
        // validation for constraint: int
        if (!is_null($totalItemsInView) && !is_numeric($totalItemsInView)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalItemsInView)), __LINE__);
        }
        $this->TotalItemsInView = $totalItemsInView;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsExpandDLResponseMessageType
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
