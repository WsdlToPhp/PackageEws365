<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindMailboxStatisticsByKeywordsResponseMessageType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Response message type for the FindMailboxStatisticsByKeywords web method.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindMailboxStatisticsByKeywordsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The MailboxStatisticsSearchResult
     * @var \StructType\EwsMailboxStatisticsSearchResultType|null
     */
    protected ?\StructType\EwsMailboxStatisticsSearchResultType $MailboxStatisticsSearchResult = null;
    /**
     * Constructor method for FindMailboxStatisticsByKeywordsResponseMessageType
     * @uses EwsFindMailboxStatisticsByKeywordsResponseMessageType::setMailboxStatisticsSearchResult()
     * @param \StructType\EwsMailboxStatisticsSearchResultType $mailboxStatisticsSearchResult
     */
    public function __construct(?\StructType\EwsMailboxStatisticsSearchResultType $mailboxStatisticsSearchResult = null)
    {
        $this
            ->setMailboxStatisticsSearchResult($mailboxStatisticsSearchResult);
    }
    /**
     * Get MailboxStatisticsSearchResult value
     * @return \StructType\EwsMailboxStatisticsSearchResultType|null
     */
    public function getMailboxStatisticsSearchResult(): ?\StructType\EwsMailboxStatisticsSearchResultType
    {
        return $this->MailboxStatisticsSearchResult;
    }
    /**
     * Set MailboxStatisticsSearchResult value
     * @param \StructType\EwsMailboxStatisticsSearchResultType $mailboxStatisticsSearchResult
     * @return \StructType\EwsFindMailboxStatisticsByKeywordsResponseMessageType
     */
    public function setMailboxStatisticsSearchResult(?\StructType\EwsMailboxStatisticsSearchResultType $mailboxStatisticsSearchResult = null): self
    {
        $this->MailboxStatisticsSearchResult = $mailboxStatisticsSearchResult;
        
        return $this;
    }
}
