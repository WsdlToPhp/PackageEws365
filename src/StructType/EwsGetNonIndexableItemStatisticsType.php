<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsNonEmptyArrayOfLegacyDNsType
     */
    protected \ArrayType\EwsNonEmptyArrayOfLegacyDNsType $Mailboxes;
    /**
     * The SearchArchiveOnly
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SearchArchiveOnly = null;
    /**
     * Constructor method for GetNonIndexableItemStatisticsType
     * @uses EwsGetNonIndexableItemStatisticsType::setMailboxes()
     * @uses EwsGetNonIndexableItemStatisticsType::setSearchArchiveOnly()
     * @param \ArrayType\EwsNonEmptyArrayOfLegacyDNsType $mailboxes
     * @param bool $searchArchiveOnly
     */
    public function __construct(\ArrayType\EwsNonEmptyArrayOfLegacyDNsType $mailboxes, ?bool $searchArchiveOnly = null)
    {
        $this
            ->setMailboxes($mailboxes)
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
     * @return \StructType\EwsGetNonIndexableItemStatisticsType
     */
    public function setMailboxes(\ArrayType\EwsNonEmptyArrayOfLegacyDNsType $mailboxes): self
    {
        $this->Mailboxes = $mailboxes;
        
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
     * @return \StructType\EwsGetNonIndexableItemStatisticsType
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
