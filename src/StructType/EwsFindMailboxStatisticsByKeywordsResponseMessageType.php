<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsMailboxStatisticsSearchResultType
     */
    public $MailboxStatisticsSearchResult;
    /**
     * Constructor method for FindMailboxStatisticsByKeywordsResponseMessageType
     * @uses EwsFindMailboxStatisticsByKeywordsResponseMessageType::setMailboxStatisticsSearchResult()
     * @param \Ews\StructType\EwsMailboxStatisticsSearchResultType $mailboxStatisticsSearchResult
     */
    public function __construct(\Ews\StructType\EwsMailboxStatisticsSearchResultType $mailboxStatisticsSearchResult = null)
    {
        $this
            ->setMailboxStatisticsSearchResult($mailboxStatisticsSearchResult);
    }
    /**
     * Get MailboxStatisticsSearchResult value
     * @return \Ews\StructType\EwsMailboxStatisticsSearchResultType|null
     */
    public function getMailboxStatisticsSearchResult()
    {
        return $this->MailboxStatisticsSearchResult;
    }
    /**
     * Set MailboxStatisticsSearchResult value
     * @param \Ews\StructType\EwsMailboxStatisticsSearchResultType $mailboxStatisticsSearchResult
     * @return \Ews\StructType\EwsFindMailboxStatisticsByKeywordsResponseMessageType
     */
    public function setMailboxStatisticsSearchResult(\Ews\StructType\EwsMailboxStatisticsSearchResultType $mailboxStatisticsSearchResult = null)
    {
        $this->MailboxStatisticsSearchResult = $mailboxStatisticsSearchResult;
        return $this;
    }
}
