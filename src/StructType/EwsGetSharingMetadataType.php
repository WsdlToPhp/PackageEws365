<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSharingMetadataType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetSharingMetadataType extends EwsBaseRequestType
{
    /**
     * The IdOfFolderToShare
     * @var \Ews\StructType\EwsFolderIdType
     */
    public $IdOfFolderToShare;
    /**
     * The SenderSmtpAddress
     * Meta informations extracted from the WSDL
     * - minLength: 1
     * @var string
     */
    public $SenderSmtpAddress;
    /**
     * The Recipients
     * @var \Ews\ArrayType\EwsArrayOfSmtpAddressType
     */
    public $Recipients;
    /**
     * Constructor method for GetSharingMetadataType
     * @uses EwsGetSharingMetadataType::setIdOfFolderToShare()
     * @uses EwsGetSharingMetadataType::setSenderSmtpAddress()
     * @uses EwsGetSharingMetadataType::setRecipients()
     * @param \Ews\StructType\EwsFolderIdType $idOfFolderToShare
     * @param string $senderSmtpAddress
     * @param \Ews\ArrayType\EwsArrayOfSmtpAddressType $recipients
     */
    public function __construct(\Ews\StructType\EwsFolderIdType $idOfFolderToShare = null, $senderSmtpAddress = null, \Ews\ArrayType\EwsArrayOfSmtpAddressType $recipients = null)
    {
        $this
            ->setIdOfFolderToShare($idOfFolderToShare)
            ->setSenderSmtpAddress($senderSmtpAddress)
            ->setRecipients($recipients);
    }
    /**
     * Get IdOfFolderToShare value
     * @return \Ews\StructType\EwsFolderIdType|null
     */
    public function getIdOfFolderToShare()
    {
        return $this->IdOfFolderToShare;
    }
    /**
     * Set IdOfFolderToShare value
     * @param \Ews\StructType\EwsFolderIdType $idOfFolderToShare
     * @return \Ews\StructType\EwsGetSharingMetadataType
     */
    public function setIdOfFolderToShare(\Ews\StructType\EwsFolderIdType $idOfFolderToShare = null)
    {
        $this->IdOfFolderToShare = $idOfFolderToShare;
        return $this;
    }
    /**
     * Get SenderSmtpAddress value
     * @return string|null
     */
    public function getSenderSmtpAddress()
    {
        return $this->SenderSmtpAddress;
    }
    /**
     * Set SenderSmtpAddress value
     * @param string $senderSmtpAddress
     * @return \Ews\StructType\EwsGetSharingMetadataType
     */
    public function setSenderSmtpAddress($senderSmtpAddress = null)
    {
        // validation for constraint: minLength
        if ((is_scalar(senderSmtpAddress) && strlen(senderSmtpAddress) < 1) || (is_array(senderSmtpAddress) && count(senderSmtpAddress) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($senderSmtpAddress) && !is_string($senderSmtpAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($senderSmtpAddress)), __LINE__);
        }
        $this->SenderSmtpAddress = $senderSmtpAddress;
        return $this;
    }
    /**
     * Get Recipients value
     * @return \Ews\ArrayType\EwsArrayOfSmtpAddressType|null
     */
    public function getRecipients()
    {
        return $this->Recipients;
    }
    /**
     * Set Recipients value
     * @param \Ews\ArrayType\EwsArrayOfSmtpAddressType $recipients
     * @return \Ews\StructType\EwsGetSharingMetadataType
     */
    public function setRecipients(\Ews\ArrayType\EwsArrayOfSmtpAddressType $recipients = null)
    {
        $this->Recipients = $recipients;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetSharingMetadataType
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
