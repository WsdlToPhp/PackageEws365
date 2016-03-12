<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindFolderParentType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindFolderParentType extends AbstractStructBase
{
    /**
     * The Folders
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsArrayOfFoldersType
     */
    public $Folders;
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
     * Constructor method for FindFolderParentType
     * @uses EwsFindFolderParentType::setFolders()
     * @uses EwsFindFolderParentType::setIndexedPagingOffset()
     * @uses EwsFindFolderParentType::setNumeratorOffset()
     * @uses EwsFindFolderParentType::setAbsoluteDenominator()
     * @uses EwsFindFolderParentType::setIncludesLastItemInRange()
     * @uses EwsFindFolderParentType::setTotalItemsInView()
     * @param \Ews\StructType\EwsArrayOfFoldersType $folders
     * @param int $indexedPagingOffset
     * @param int $numeratorOffset
     * @param int $absoluteDenominator
     * @param bool $includesLastItemInRange
     * @param int $totalItemsInView
     */
    public function __construct(\Ews\StructType\EwsArrayOfFoldersType $folders = null, $indexedPagingOffset = null, $numeratorOffset = null, $absoluteDenominator = null, $includesLastItemInRange = null, $totalItemsInView = null)
    {
        $this
            ->setFolders($folders)
            ->setIndexedPagingOffset($indexedPagingOffset)
            ->setNumeratorOffset($numeratorOffset)
            ->setAbsoluteDenominator($absoluteDenominator)
            ->setIncludesLastItemInRange($includesLastItemInRange)
            ->setTotalItemsInView($totalItemsInView);
    }
    /**
     * Get Folders value
     * @return \Ews\StructType\EwsArrayOfFoldersType|null
     */
    public function getFolders()
    {
        return $this->Folders;
    }
    /**
     * Set Folders value
     * @param \Ews\StructType\EwsArrayOfFoldersType $folders
     * @return \Ews\StructType\EwsFindFolderParentType
     */
    public function setFolders(\Ews\StructType\EwsArrayOfFoldersType $folders = null)
    {
        $this->Folders = $folders;
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
     * @return \Ews\StructType\EwsFindFolderParentType
     */
    public function setIndexedPagingOffset($indexedPagingOffset = null)
    {
        // validation for constraint: int
        if (!is_null($indexedPagingOffset) && !is_int($indexedPagingOffset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($indexedPagingOffset)), __LINE__);
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
     * @return \Ews\StructType\EwsFindFolderParentType
     */
    public function setNumeratorOffset($numeratorOffset = null)
    {
        // validation for constraint: int
        if (!is_null($numeratorOffset) && !is_int($numeratorOffset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($numeratorOffset)), __LINE__);
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
     * @return \Ews\StructType\EwsFindFolderParentType
     */
    public function setAbsoluteDenominator($absoluteDenominator = null)
    {
        // validation for constraint: int
        if (!is_null($absoluteDenominator) && !is_int($absoluteDenominator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($absoluteDenominator)), __LINE__);
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
     * @return \Ews\StructType\EwsFindFolderParentType
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
     * @return \Ews\StructType\EwsFindFolderParentType
     */
    public function setTotalItemsInView($totalItemsInView = null)
    {
        // validation for constraint: int
        if (!is_null($totalItemsInView) && !is_int($totalItemsInView)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($totalItemsInView)), __LINE__);
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
     * @return \Ews\StructType\EwsFindFolderParentType
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
