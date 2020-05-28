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
     * Meta information extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsSearchFolderTraversalType', is_array($traversal) ? implode(', ', $traversal) : var_export($traversal, true), implode(', ', \Ews\EnumType\EwsSearchFolderTraversalType::getValidValues())), __LINE__);
        }
        $this->Traversal = $traversal;
        return $this;
    }
}
