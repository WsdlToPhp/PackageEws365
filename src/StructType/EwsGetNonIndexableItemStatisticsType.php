<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNonIndexableItemStatisticsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Request type for the GetNonIndexableItemStatistics web method.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetNonIndexableItemStatisticsType extends EwsBaseRequestType
{
    /**
     * The Mailboxes
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfLegacyDNsType
     */
    public $Mailboxes;
    /**
     * The SearchArchiveOnly
     * Meta informations extracted from the WSDL
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
        $this->SearchArchiveOnly = $searchArchiveOnly;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetNonIndexableItemStatisticsType
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
