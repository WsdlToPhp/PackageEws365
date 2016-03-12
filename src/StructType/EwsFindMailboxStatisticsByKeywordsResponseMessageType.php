<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindMailboxStatisticsByKeywordsResponseMessageType
 * StructType
 * Meta informations extracted from the WSDL
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
     * @uses
     * EwsFindMailboxStatisticsByKeywordsResponseMessageType::setMailboxStatisticsSearc
     * hResult()
     * @param \Ews\StructType\EwsMailboxStatisticsSearchResultType
     * $mailboxStatisticsSearchResult
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
     * @param \Ews\StructType\EwsMailboxStatisticsSearchResultType
     * $mailboxStatisticsSearchResult
     * @return \Ews\StructType\EwsFindMailboxStatisticsByKeywordsResponseMessageType
     */
    public function setMailboxStatisticsSearchResult(\Ews\StructType\EwsMailboxStatisticsSearchResultType $mailboxStatisticsSearchResult = null)
    {
        $this->MailboxStatisticsSearchResult = $mailboxStatisticsSearchResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFindMailboxStatisticsByKeywordsResponseMessageType
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
