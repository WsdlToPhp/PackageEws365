<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNonIndexableItemStatisticsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request type for the GetNonIndexableItemStatistics web method.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetNonIndexableItemStatisticsType extends EwsBaseRequestType
{
    /**
     * The Mailboxes
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfLegacyDNsType
     */
    public $Mailboxes;
    /**
     * The SearchArchiveOnly
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $SearchArchiveOnly;
    /**
     * Constructor method for GetNonIndexableItemStatisticsType
     * @uses EwsGetNonIndexableItemStatisticsType::setMailboxes()
     * @uses EwsGetNonIndexableItemStatisticsType::setSearchArchiveOnly()
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfLegacyDNsType $mailboxes
     * @param bool $searchArchiveOnly
     */
    public function __construct(\Ews\ArrayType\EwsNonEmptyArrayOfLegacyDNsType $mailboxes = null, $searchArchiveOnly = null)
    {
        $this
            ->setMailboxes($mailboxes)
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
     * @return \Ews\StructType\EwsGetNonIndexableItemStatisticsType
     */
    public function setMailboxes(\Ews\ArrayType\EwsNonEmptyArrayOfLegacyDNsType $mailboxes = null)
    {
        $this->Mailboxes = $mailboxes;
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
     * @return \Ews\StructType\EwsGetNonIndexableItemStatisticsType
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
