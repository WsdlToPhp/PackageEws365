<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNonIndexableItemDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Request type for the GetNonIndexableItemDetails web method.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetNonIndexableItemDetailsType extends EwsBaseRequestType
{
    /**
     * The Mailboxes
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfLegacyDNsType
     */
    public $Mailboxes;
    /**
     * The PageSize
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PageSize;
    /**
     * The PageItemReference
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PageItemReference;
    /**
     * The PageDirection
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PageDirection;
    /**
     * The SearchArchiveOnly
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
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
     * @param boolean $searchArchiveOnly
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
     * @param string $pageDirection
     * @return \Ews\StructType\EwsGetNonIndexableItemDetailsType
     */
    public function setPageDirection($pageDirection = null)
    {
        if (!\Ews\EnumType\EwsSearchPageDirectionType::valueIsValid($pageDirection)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $pageDirection, implode(', ', \Ews\EnumType\EwsSearchPageDirectionType::getValidValues())), __LINE__);
        }
        $this->PageDirection = $pageDirection;
        return $this;
    }
    /**
     * Get SearchArchiveOnly value
     * @return boolean|null
     */
    public function getSearchArchiveOnly()
    {
        return $this->SearchArchiveOnly;
    }
    /**
     * Set SearchArchiveOnly value
     * @param boolean $searchArchiveOnly
     * @return \Ews\StructType\EwsGetNonIndexableItemDetailsType
     */
    public function setSearchArchiveOnly($searchArchiveOnly = null)
    {
        $this->SearchArchiveOnly = $searchArchiveOnly;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetNonIndexableItemDetailsType
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
