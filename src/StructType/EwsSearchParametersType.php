<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsRestrictionType|null
     */
    protected ?\StructType\EwsRestrictionType $Restriction = null;
    /**
     * The BaseFolderIds
     * @var \StructType\EwsNonEmptyArrayOfBaseFolderIdsType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $BaseFolderIds = null;
    /**
     * The Traversal
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Traversal = null;
    /**
     * Constructor method for SearchParametersType
     * @uses EwsSearchParametersType::setRestriction()
     * @uses EwsSearchParametersType::setBaseFolderIds()
     * @uses EwsSearchParametersType::setTraversal()
     * @param \StructType\EwsRestrictionType $restriction
     * @param \StructType\EwsNonEmptyArrayOfBaseFolderIdsType $baseFolderIds
     * @param string $traversal
     */
    public function __construct(?\StructType\EwsRestrictionType $restriction = null, ?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $baseFolderIds = null, ?string $traversal = null)
    {
        $this
            ->setRestriction($restriction)
            ->setBaseFolderIds($baseFolderIds)
            ->setTraversal($traversal);
    }
    /**
     * Get Restriction value
     * @return \StructType\EwsRestrictionType|null
     */
    public function getRestriction(): ?\StructType\EwsRestrictionType
    {
        return $this->Restriction;
    }
    /**
     * Set Restriction value
     * @param \StructType\EwsRestrictionType $restriction
     * @return \StructType\EwsSearchParametersType
     */
    public function setRestriction(?\StructType\EwsRestrictionType $restriction = null): self
    {
        $this->Restriction = $restriction;
        
        return $this;
    }
    /**
     * Get BaseFolderIds value
     * @return \StructType\EwsNonEmptyArrayOfBaseFolderIdsType|null
     */
    public function getBaseFolderIds(): ?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType
    {
        return $this->BaseFolderIds;
    }
    /**
     * Set BaseFolderIds value
     * @param \StructType\EwsNonEmptyArrayOfBaseFolderIdsType $baseFolderIds
     * @return \StructType\EwsSearchParametersType
     */
    public function setBaseFolderIds(?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $baseFolderIds = null): self
    {
        $this->BaseFolderIds = $baseFolderIds;
        
        return $this;
    }
    /**
     * Get Traversal value
     * @return string|null
     */
    public function getTraversal(): ?string
    {
        return $this->Traversal;
    }
    /**
     * Set Traversal value
     * @uses \EnumType\EwsSearchFolderTraversalType::valueIsValid()
     * @uses \EnumType\EwsSearchFolderTraversalType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $traversal
     * @return \StructType\EwsSearchParametersType
     */
    public function setTraversal(?string $traversal = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsSearchFolderTraversalType::valueIsValid($traversal)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsSearchFolderTraversalType', is_array($traversal) ? implode(', ', $traversal) : var_export($traversal, true), implode(', ', \EnumType\EwsSearchFolderTraversalType::getValidValues())), __LINE__);
        }
        $this->Traversal = $traversal;
        
        return $this;
    }
}
