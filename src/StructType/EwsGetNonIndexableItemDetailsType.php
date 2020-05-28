<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfLegacyDNsType
     */
    public $Mailboxes;
    /**
     * The PageSize
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PageSize;
    /**
     * The PageItemReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PageItemReference;
    /**
     * The PageDirection
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PageDirection;
    /**
     * The SearchArchiveOnly
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $SearchArchiveOnly;
    /**
     * Constructor method for GetNonIndexableItemDetailsType
     * @uses EwsGetNonIndexableItemDetailsType::setMailboxes()
     * @uses EwsGetNonIndexableItemDetailsType::setPageSize()
     * @uses EwsGetNonIndexableItemDetailsType::setPageItemReference()
     * @uses EwsGetNonIndexableItemDetailsType::setPageDirection()
     * @uses EwsGetNonIndexableItemDetailsType::setSearchArchiveOnly()
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfLegacyDNsType $mailboxes
     * @param int $pageSize
     * @param string $pageItemReference
     * @param string $pageDirection
     * @param bool $searchArchiveOnly
     */
    public function __construct(\Ews\ArrayType\EwsNonEmptyArrayOfLegacyDNsType $mailboxes = null, $pageSize = null, $pageItemReference = null, $pageDirection = null, $searchArchiveOnly = null)
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
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfLegacyDNsType
     */
    public function getMailboxes()
    {
        return $this->Mailboxes;
    }
    /**
     * Set Mailboxes value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfLegacyDNsType $mailboxes
     * @return \Ews\StructType\EwsGetNonIndexableItemDetailsType
     */
    public function setMailboxes(\Ews\ArrayType\EwsNonEmptyArrayOfLegacyDNsType $mailboxes = null)
    {
        $this->Mailboxes = $mailboxes;
        return $this;
    }
    /**
     * Get PageSize value
     * @return int|null
     */
    public function getPageSize()
    {
        return $this->PageSize;
    }
    /**
     * Set PageSize value
     * @param int $pageSize
     * @return \Ews\StructType\EwsGetNonIndexableItemDetailsType
     */
    public function setPageSize($pageSize = null)
    {
        // validation for constraint: int
        if (!is_null($pageSize) && !(is_int($pageSize) || ctype_digit($pageSize))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageSize, true), gettype($pageSize)), __LINE__);
        }
        $this->PageSize = $pageSize;
        return $this;
    }
    /**
     * Get PageItemReference value
     * @return string|null
     */
    public function getPageItemReference()
    {
        return $this->PageItemReference;
    }
    /**
     * Set PageItemReference value
     * @param string $pageItemReference
     * @return \Ews\StructType\EwsGetNonIndexableItemDetailsType
     */
    public function setPageItemReference($pageItemReference = null)
    {
        // validation for constraint: string
        if (!is_null($pageItemReference) && !is_string($pageItemReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pageItemReference, true), gettype($pageItemReference)), __LINE__);
        }
        $this->PageItemReference = $pageItemReference;
        return $this;
    }
    /**
     * Get PageDirection value
     * @return string|null
     */
    public function getPageDirection()
    {
        return $this->PageDirection;
    }
    /**
     * Set PageDirection value
     * @uses \Ews\EnumType\EwsSearchPageDirectionType::valueIsValid()
     * @uses \Ews\EnumType\EwsSearchPageDirectionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $pageDirection
     * @return \Ews\StructType\EwsGetNonIndexableItemDetailsType
     */
    public function setPageDirection($pageDirection = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsSearchPageDirectionType::valueIsValid($pageDirection)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsSearchPageDirectionType', is_array($pageDirection) ? implode(', ', $pageDirection) : var_export($pageDirection, true), implode(', ', \Ews\EnumType\EwsSearchPageDirectionType::getValidValues())), __LINE__);
        }
        $this->PageDirection = $pageDirection;
        return $this;
    }
    /**
     * Get SearchArchiveOnly value
     * @return bool|null
     */
    public function getSearchArchiveOnly()
    {
        return $this->SearchArchiveOnly;
    }
    /**
     * Set SearchArchiveOnly value
     * @param bool $searchArchiveOnly
     * @return \Ews\StructType\EwsGetNonIndexableItemDetailsType
     */
    public function setSearchArchiveOnly($searchArchiveOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($searchArchiveOnly) && !is_bool($searchArchiveOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($searchArchiveOnly, true), gettype($searchArchiveOnly)), __LINE__);
        }
        $this->SearchArchiveOnly = $searchArchiveOnly;
        return $this;
    }
}
