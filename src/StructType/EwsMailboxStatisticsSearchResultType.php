<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MailboxStatisticsSearchResultType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Mailbox statistics search result.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMailboxStatisticsSearchResultType extends AbstractStructBase
{
    /**
     * The UserMailbox
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsUserMailboxType
     */
    public $UserMailbox;
    /**
     * The KeywordStatisticsSearchResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsKeywordStatisticsSearchResultType
     */
    public $KeywordStatisticsSearchResult;
    /**
     * Constructor method for MailboxStatisticsSearchResultType
     * @uses EwsMailboxStatisticsSearchResultType::setUserMailbox()
     * @uses EwsMailboxStatisticsSearchResultType::setKeywordStatisticsSearchResult()
     * @param \Ews\StructType\EwsUserMailboxType $userMailbox
     * @param \Ews\StructType\EwsKeywordStatisticsSearchResultType
     * $keywordStatisticsSearchResult
     */
    public function __construct(\Ews\StructType\EwsUserMailboxType $userMailbox = null, \Ews\StructType\EwsKeywordStatisticsSearchResultType $keywordStatisticsSearchResult = null)
    {
        $this
            ->setUserMailbox($userMailbox)
            ->setKeywordStatisticsSearchResult($keywordStatisticsSearchResult);
    }
    /**
     * Get UserMailbox value
     * @return \Ews\StructType\EwsUserMailboxType
     */
    public function getUserMailbox()
    {
        return $this->UserMailbox;
    }
    /**
     * Set UserMailbox value
     * @param \Ews\StructType\EwsUserMailboxType $userMailbox
     * @return \Ews\StructType\EwsMailboxStatisticsSearchResultType
     */
    public function setUserMailbox(\Ews\StructType\EwsUserMailboxType $userMailbox = null)
    {
        $this->UserMailbox = $userMailbox;
        return $this;
    }
    /**
     * Get KeywordStatisticsSearchResult value
     * @return \Ews\StructType\EwsKeywordStatisticsSearchResultType|null
     */
    public function getKeywordStatisticsSearchResult()
    {
        return $this->KeywordStatisticsSearchResult;
    }
    /**
     * Set KeywordStatisticsSearchResult value
     * @param \Ews\StructType\EwsKeywordStatisticsSearchResultType
     * $keywordStatisticsSearchResult
     * @return \Ews\StructType\EwsMailboxStatisticsSearchResultType
     */
    public function setKeywordStatisticsSearchResult(\Ews\StructType\EwsKeywordStatisticsSearchResultType $keywordStatisticsSearchResult = null)
    {
        $this->KeywordStatisticsSearchResult = $keywordStatisticsSearchResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMailboxStatisticsSearchResultType
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
