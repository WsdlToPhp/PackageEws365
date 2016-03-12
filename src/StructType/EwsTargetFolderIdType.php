<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TargetFolderIdType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsTargetFolderIdType extends AbstractStructBase
{
    /**
     * The FolderId
     * @var \Ews\StructType\EwsFolderIdType
     */
    public $FolderId;
    /**
     * The DistinguishedFolderId
     * @var \Ews\StructType\EwsDistinguishedFolderIdType
     */
    public $DistinguishedFolderId;
    /**
     * The AddressListId
     * @var \Ews\StructType\EwsAddressListIdType
     */
    public $AddressListId;
    /**
     * The ConsumerCalendarId
     * @var \Ews\StructType\EwsConsumerCalendarIdType
     */
    public $ConsumerCalendarId;
    /**
     * Constructor method for TargetFolderIdType
     * @uses EwsTargetFolderIdType::setFolderId()
     * @uses EwsTargetFolderIdType::setDistinguishedFolderId()
     * @uses EwsTargetFolderIdType::setAddressListId()
     * @uses EwsTargetFolderIdType::setConsumerCalendarId()
     * @param \Ews\StructType\EwsFolderIdType $folderId
     * @param \Ews\StructType\EwsDistinguishedFolderIdType $distinguishedFolderId
     * @param \Ews\StructType\EwsAddressListIdType $addressListId
     * @param \Ews\StructType\EwsConsumerCalendarIdType $consumerCalendarId
     */
    public function __construct(\Ews\StructType\EwsFolderIdType $folderId = null, \Ews\StructType\EwsDistinguishedFolderIdType $distinguishedFolderId = null, \Ews\StructType\EwsAddressListIdType $addressListId = null, \Ews\StructType\EwsConsumerCalendarIdType $consumerCalendarId = null)
    {
        $this
            ->setFolderId($folderId)
            ->setDistinguishedFolderId($distinguishedFolderId)
            ->setAddressListId($addressListId)
            ->setConsumerCalendarId($consumerCalendarId);
    }
    /**
     * Get FolderId value
     * @return \Ews\StructType\EwsFolderIdType|null
     */
    public function getFolderId()
    {
        return $this->FolderId;
    }
    /**
     * Set FolderId value
     * @param \Ews\StructType\EwsFolderIdType $folderId
     * @return \Ews\StructType\EwsTargetFolderIdType
     */
    public function setFolderId(\Ews\StructType\EwsFolderIdType $folderId = null)
    {
        $this->FolderId = $folderId;
        return $this;
    }
    /**
     * Get DistinguishedFolderId value
     * @return \Ews\StructType\EwsDistinguishedFolderIdType|null
     */
    public function getDistinguishedFolderId()
    {
        return $this->DistinguishedFolderId;
    }
    /**
     * Set DistinguishedFolderId value
     * @param \Ews\StructType\EwsDistinguishedFolderIdType $distinguishedFolderId
     * @return \Ews\StructType\EwsTargetFolderIdType
     */
    public function setDistinguishedFolderId(\Ews\StructType\EwsDistinguishedFolderIdType $distinguishedFolderId = null)
    {
        $this->DistinguishedFolderId = $distinguishedFolderId;
        return $this;
    }
    /**
     * Get AddressListId value
     * @return \Ews\StructType\EwsAddressListIdType|null
     */
    public function getAddressListId()
    {
        return $this->AddressListId;
    }
    /**
     * Set AddressListId value
     * @param \Ews\StructType\EwsAddressListIdType $addressListId
     * @return \Ews\StructType\EwsTargetFolderIdType
     */
    public function setAddressListId(\Ews\StructType\EwsAddressListIdType $addressListId = null)
    {
        $this->AddressListId = $addressListId;
        return $this;
    }
    /**
     * Get ConsumerCalendarId value
     * @return \Ews\StructType\EwsConsumerCalendarIdType|null
     */
    public function getConsumerCalendarId()
    {
        return $this->ConsumerCalendarId;
    }
    /**
     * Set ConsumerCalendarId value
     * @param \Ews\StructType\EwsConsumerCalendarIdType $consumerCalendarId
     * @return \Ews\StructType\EwsTargetFolderIdType
     */
    public function setConsumerCalendarId(\Ews\StructType\EwsConsumerCalendarIdType $consumerCalendarId = null)
    {
        $this->ConsumerCalendarId = $consumerCalendarId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsTargetFolderIdType
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
