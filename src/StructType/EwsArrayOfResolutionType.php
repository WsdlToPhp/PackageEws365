<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArrayOfResolutionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfResolutionType extends AbstractStructBase
{
    /**
     * The Resolution
     * Meta informations extracted from the WSDL
     * - maxOccurs: 100
     * - minOccurs: 0
     * @var \Ews\StructType\EwsResolutionType[]
     */
    public $Resolution;
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
     * Constructor method for ArrayOfResolutionType
     * @uses EwsArrayOfResolutionType::setResolution()
     * @uses EwsArrayOfResolutionType::setIndexedPagingOffset()
     * @uses EwsArrayOfResolutionType::setNumeratorOffset()
     * @uses EwsArrayOfResolutionType::setAbsoluteDenominator()
     * @uses EwsArrayOfResolutionType::setIncludesLastItemInRange()
     * @uses EwsArrayOfResolutionType::setTotalItemsInView()
     * @param \Ews\StructType\EwsResolutionType[] $resolution
     * @param int $indexedPagingOffset
     * @param int $numeratorOffset
     * @param int $absoluteDenominator
     * @param bool $includesLastItemInRange
     * @param int $totalItemsInView
     */
    public function __construct(array $resolution = array(), $indexedPagingOffset = null, $numeratorOffset = null, $absoluteDenominator = null, $includesLastItemInRange = null, $totalItemsInView = null)
    {
        $this
            ->setResolution($resolution)
            ->setIndexedPagingOffset($indexedPagingOffset)
            ->setNumeratorOffset($numeratorOffset)
            ->setAbsoluteDenominator($absoluteDenominator)
            ->setIncludesLastItemInRange($includesLastItemInRange)
            ->setTotalItemsInView($totalItemsInView);
    }
    /**
     * Get Resolution value
     * @return \Ews\StructType\EwsResolutionType[]|null
     */
    public function getResolution()
    {
        return $this->Resolution;
    }
    /**
     * Set Resolution value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsResolutionType[] $resolution
     * @return \Ews\StructType\EwsArrayOfResolutionType
     */
    public function setResolution(array $resolution = array())
    {
        foreach ($resolution as $arrayOfResolutionTypeResolutionItem) {
            // validation for constraint: itemType
            if (!$arrayOfResolutionTypeResolutionItem instanceof \Ews\StructType\EwsResolutionType) {
                throw new \InvalidArgumentException(sprintf('The Resolution property can only contain items of \Ews\StructType\EwsResolutionType, "%s" given', is_object($arrayOfResolutionTypeResolutionItem) ? get_class($arrayOfResolutionTypeResolutionItem) : gettype($arrayOfResolutionTypeResolutionItem)), __LINE__);
            }
        }
        $this->Resolution = $resolution;
        return $this;
    }
    /**
     * Add item to Resolution value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsResolutionType $item
     * @return \Ews\StructType\EwsArrayOfResolutionType
     */
    public function addToResolution(\Ews\StructType\EwsResolutionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsResolutionType) {
            throw new \InvalidArgumentException(sprintf('The Resolution property can only contain items of \Ews\StructType\EwsResolutionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Resolution[] = $item;
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
     * @return \Ews\StructType\EwsArrayOfResolutionType
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
     * @return \Ews\StructType\EwsArrayOfResolutionType
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
     * @return \Ews\StructType\EwsArrayOfResolutionType
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
     * @return \Ews\StructType\EwsArrayOfResolutionType
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
     * @return \Ews\StructType\EwsArrayOfResolutionType
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
     * @return \Ews\StructType\EwsArrayOfResolutionType
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
