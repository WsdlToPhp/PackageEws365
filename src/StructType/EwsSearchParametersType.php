<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchParametersType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSearchParametersType extends AbstractStructBase
{
    /**
     * The Restriction
     * @var \Ews\StructType\EwsRestrictionType
     */
    public $Restriction;
    /**
     * The BaseFolderIds
     * @var \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType
     */
    public $BaseFolderIds;
    /**
     * The Traversal
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Traversal;
    /**
     * Constructor method for SearchParametersType
     * @uses EwsSearchParametersType::setRestriction()
     * @uses EwsSearchParametersType::setBaseFolderIds()
     * @uses EwsSearchParametersType::setTraversal()
     * @param \Ews\StructType\EwsRestrictionType $restriction
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $baseFolderIds
     * @param string $traversal
     */
    public function __construct(\Ews\StructType\EwsRestrictionType $restriction = null, \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $baseFolderIds = null, $traversal = null)
    {
        $this
            ->setRestriction($restriction)
            ->setBaseFolderIds($baseFolderIds)
            ->setTraversal($traversal);
    }
    /**
     * Get Restriction value
     * @return \Ews\StructType\EwsRestrictionType|null
     */
    public function getRestriction()
    {
        return $this->Restriction;
    }
    /**
     * Set Restriction value
     * @param \Ews\StructType\EwsRestrictionType $restriction
     * @return \Ews\StructType\EwsSearchParametersType
     */
    public function setRestriction(\Ews\StructType\EwsRestrictionType $restriction = null)
    {
        $this->Restriction = $restriction;
        return $this;
    }
    /**
     * Get BaseFolderIds value
     * @return \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType|null
     */
    public function getBaseFolderIds()
    {
        return $this->BaseFolderIds;
    }
    /**
     * Set BaseFolderIds value
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $baseFolderIds
     * @return \Ews\StructType\EwsSearchParametersType
     */
    public function setBaseFolderIds(\Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $baseFolderIds = null)
    {
        $this->BaseFolderIds = $baseFolderIds;
        return $this;
    }
    /**
     * Get Traversal value
     * @return string|null
     */
    public function getTraversal()
    {
        return $this->Traversal;
    }
    /**
     * Set Traversal value
     * @uses \Ews\EnumType\EwsSearchFolderTraversalType::valueIsValid()
     * @uses \Ews\EnumType\EwsSearchFolderTraversalType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $traversal
     * @return \Ews\StructType\EwsSearchParametersType
     */
    public function setTraversal($traversal = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsSearchFolderTraversalType::valueIsValid($traversal)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $traversal, implode(', ', \Ews\EnumType\EwsSearchFolderTraversalType::getValidValues())), __LINE__);
        }
        $this->Traversal = $traversal;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSearchParametersType
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
