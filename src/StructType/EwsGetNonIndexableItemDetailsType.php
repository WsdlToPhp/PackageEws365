<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNonIndexableItemDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request type for the GetNonIndexableItemDetails web method.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetNonIndexableItemDetailsType extends EwsBaseRequestType
{
    /**
     * The Mailboxes
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var \ArrayType\EwsNonEmptyArrayOfLegacyDNsType
     */
    protected \ArrayType\EwsNonEmptyArrayOfLegacyDNsType $Mailboxes;
    /**
     * The PageSize
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PageSize = null;
    /**
     * The PageItemReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PageItemReference = null;
    /**
     * The PageDirection
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PageDirection = null;
    /**
     * The SearchArchiveOnly
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SearchArchiveOnly = null;
    /**
     * Constructor method for GetNonIndexableItemDetailsType
     * @uses EwsGetNonIndexableItemDetailsType::setMailboxes()
     * @uses EwsGetNonIndexableItemDetailsType::setPageSize()
     * @uses EwsGetNonIndexableItemDetailsType::setPageItemReference()
     * @uses EwsGetNonIndexableItemDetailsType::setPageDirection()
     * @uses EwsGetNonIndexableItemDetailsType::setSearchArchiveOnly()
     * @param \ArrayType\EwsNonEmptyArrayOfLegacyDNsType $mailboxes
     * @param int $pageSize
     * @param string $pageItemReference
     * @param string $pageDirection
     * @param bool $searchArchiveOnly
     */
    public function __construct(\ArrayType\EwsNonEmptyArrayOfLegacyDNsType $mailboxes, ?int $pageSize = null, ?string $pageItemReference = null, ?string $pageDirection = null, ?bool $searchArchiveOnly = null)
    {
        $this
            ->setMailboxes($mailboxes)
            ->setPageSize($pageSize)
            ->setPageItemReference($pageItemReference)
            ->setPageDirection($pageDirection)
            ->setSearchArchiveOnly($searchArchiveOnly);
    }
    /**
     * Get Mailboxes value
     * @return \ArrayType\EwsNonEmptyArrayOfLegacyDNsType
     */
    public function getMailboxes(): \ArrayType\EwsNonEmptyArrayOfLegacyDNsType
    {
        return $this->Mailboxes;
    }
    /**
     * Set Mailboxes value
     * @param \ArrayType\EwsNonEmptyArrayOfLegacyDNsType $mailboxes
     * @return \StructType\EwsGetNonIndexableItemDetailsType
     */
    public function setMailboxes(\ArrayType\EwsNonEmptyArrayOfLegacyDNsType $mailboxes): self
    {
        $this->Mailboxes = $mailboxes;
        
        return $this;
    }
    /**
     * Get PageSize value
     * @return int|null
     */
    public function getPageSize(): ?int
    {
        return $this->PageSize;
    }
    /**
     * Set PageSize value
     * @param int $pageSize
     * @return \StructType\EwsGetNonIndexableItemDetailsType
     */
    public function setPageSize(?int $pageSize = null): self
    {
        // validation for constraint: int
        if (!is_null($pageSize) && !(is_int($pageSize) || ctype_digit($pageSize))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageSize, true), gettype($pageSize)), __LINE__);
        }
        $this->PageSize = $pageSize;
        
        return $this;
    }
    /**
     * Get PageItemReference value
     * @return string|null
     */
    public function getPageItemReference(): ?string
    {
        return $this->PageItemReference;
    }
    /**
     * Set PageItemReference value
     * @param string $pageItemReference
     * @return \StructType\EwsGetNonIndexableItemDetailsType
     */
    public function setPageItemReference(?string $pageItemReference = null): self
    {
        // validation for constraint: string
        if (!is_null($pageItemReference) && !is_string($pageItemReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pageItemReference, true), gettype($pageItemReference)), __LINE__);
        }
        $this->PageItemReference = $pageItemReference;
        
        return $this;
    }
    /**
     * Get PageDirection value
     * @return string|null
     */
    public function getPageDirection(): ?string
    {
        return $this->PageDirection;
    }
    /**
     * Set PageDirection value
     * @uses \EnumType\EwsSearchPageDirectionType::valueIsValid()
     * @uses \EnumType\EwsSearchPageDirectionType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $pageDirection
     * @return \StructType\EwsGetNonIndexableItemDetailsType
     */
    public function setPageDirection(?string $pageDirection = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsSearchPageDirectionType::valueIsValid($pageDirection)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsSearchPageDirectionType', is_array($pageDirection) ? implode(', ', $pageDirection) : var_export($pageDirection, true), implode(', ', \EnumType\EwsSearchPageDirectionType::getValidValues())), __LINE__);
        }
        $this->PageDirection = $pageDirection;
        
        return $this;
    }
    /**
     * Get SearchArchiveOnly value
     * @return bool|null
     */
    public function getSearchArchiveOnly(): ?bool
    {
        return $this->SearchArchiveOnly;
    }
    /**
     * Set SearchArchiveOnly value
     * @param bool $searchArchiveOnly
     * @return \StructType\EwsGetNonIndexableItemDetailsType
     */
    public function setSearchArchiveOnly(?bool $searchArchiveOnly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($searchArchiveOnly) && !is_bool($searchArchiveOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($searchArchiveOnly, true), gettype($searchArchiveOnly)), __LINE__);
        }
        $this->SearchArchiveOnly = $searchArchiveOnly;
        
        return $this;
    }
}
