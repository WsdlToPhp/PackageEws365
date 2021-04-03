<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MailboxStatisticsSearchResultType StructType
 * Meta information extracted from the WSDL
 * - documentation: Mailbox statistics search result.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMailboxStatisticsSearchResultType extends AbstractStructBase
{
    /**
     * The UserMailbox
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsUserMailboxType
     */
    protected \StructType\EwsUserMailboxType $UserMailbox;
    /**
     * The KeywordStatisticsSearchResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsKeywordStatisticsSearchResultType|null
     */
    protected ?\StructType\EwsKeywordStatisticsSearchResultType $KeywordStatisticsSearchResult = null;
    /**
     * Constructor method for MailboxStatisticsSearchResultType
     * @uses EwsMailboxStatisticsSearchResultType::setUserMailbox()
     * @uses EwsMailboxStatisticsSearchResultType::setKeywordStatisticsSearchResult()
     * @param \StructType\EwsUserMailboxType $userMailbox
     * @param \StructType\EwsKeywordStatisticsSearchResultType $keywordStatisticsSearchResult
     */
    public function __construct(\StructType\EwsUserMailboxType $userMailbox, ?\StructType\EwsKeywordStatisticsSearchResultType $keywordStatisticsSearchResult = null)
    {
        $this
            ->setUserMailbox($userMailbox)
            ->setKeywordStatisticsSearchResult($keywordStatisticsSearchResult);
    }
    /**
     * Get UserMailbox value
     * @return \StructType\EwsUserMailboxType
     */
    public function getUserMailbox(): \StructType\EwsUserMailboxType
    {
        return $this->UserMailbox;
    }
    /**
     * Set UserMailbox value
     * @param \StructType\EwsUserMailboxType $userMailbox
     * @return \StructType\EwsMailboxStatisticsSearchResultType
     */
    public function setUserMailbox(\StructType\EwsUserMailboxType $userMailbox): self
    {
        $this->UserMailbox = $userMailbox;
        
        return $this;
    }
    /**
     * Get KeywordStatisticsSearchResult value
     * @return \StructType\EwsKeywordStatisticsSearchResultType|null
     */
    public function getKeywordStatisticsSearchResult(): ?\StructType\EwsKeywordStatisticsSearchResultType
    {
        return $this->KeywordStatisticsSearchResult;
    }
    /**
     * Set KeywordStatisticsSearchResult value
     * @param \StructType\EwsKeywordStatisticsSearchResultType $keywordStatisticsSearchResult
     * @return \StructType\EwsMailboxStatisticsSearchResultType
     */
    public function setKeywordStatisticsSearchResult(?\StructType\EwsKeywordStatisticsSearchResultType $keywordStatisticsSearchResult = null): self
    {
        $this->KeywordStatisticsSearchResult = $keywordStatisticsSearchResult;
        
        return $this;
    }
}
