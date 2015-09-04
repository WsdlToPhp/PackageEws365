<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSharingMetadataResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGetSharingMetadataResponseMessageType extends EwsResponseMessageType
{
    /**
     * The EncryptedSharedFolderDataCollection
     * @var \Ews\ArrayType\EwsArrayOfEncryptedSharedFolderDataType
     */
    public $EncryptedSharedFolderDataCollection;
    /**
     * The InvalidRecipients
     * @var \Ews\ArrayType\EwsArrayOfInvalidRecipientsType
     */
    public $InvalidRecipients;
    /**
     * Constructor method for GetSharingMetadataResponseMessageType
     * @uses
     * EwsGetSharingMetadataResponseMessageType::setEncryptedSharedFolderDataCollection
     * ()
     * @uses EwsGetSharingMetadataResponseMessageType::setInvalidRecipients()
     * @param \Ews\ArrayType\EwsArrayOfEncryptedSharedFolderDataType
     * $encryptedSharedFolderDataCollection
     * @param \Ews\ArrayType\EwsArrayOfInvalidRecipientsType $invalidRecipients
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfEncryptedSharedFolderDataType $encryptedSharedFolderDataCollection = null, \Ews\ArrayType\EwsArrayOfInvalidRecipientsType $invalidRecipients = null)
    {
        $this
            ->setEncryptedSharedFolderDataCollection($encryptedSharedFolderDataCollection)
            ->setInvalidRecipients($invalidRecipients);
    }
    /**
     * Get EncryptedSharedFolderDataCollection value
     * @return \Ews\ArrayType\EwsArrayOfEncryptedSharedFolderDataType|null
     */
    public function getEncryptedSharedFolderDataCollection()
    {
        return $this->EncryptedSharedFolderDataCollection;
    }
    /**
     * Set EncryptedSharedFolderDataCollection value
     * @param \Ews\ArrayType\EwsArrayOfEncryptedSharedFolderDataType
     * $encryptedSharedFolderDataCollection
     * @return \Ews\StructType\EwsGetSharingMetadataResponseMessageType
     */
    public function setEncryptedSharedFolderDataCollection(\Ews\ArrayType\EwsArrayOfEncryptedSharedFolderDataType $encryptedSharedFolderDataCollection = null)
    {
        $this->EncryptedSharedFolderDataCollection = $encryptedSharedFolderDataCollection;
        return $this;
    }
    /**
     * Get InvalidRecipients value
     * @return \Ews\ArrayType\EwsArrayOfInvalidRecipientsType|null
     */
    public function getInvalidRecipients()
    {
        return $this->InvalidRecipients;
    }
    /**
     * Set InvalidRecipients value
     * @param \Ews\ArrayType\EwsArrayOfInvalidRecipientsType $invalidRecipients
     * @return \Ews\StructType\EwsGetSharingMetadataResponseMessageType
     */
    public function setInvalidRecipients(\Ews\ArrayType\EwsArrayOfInvalidRecipientsType $invalidRecipients = null)
    {
        $this->InvalidRecipients = $invalidRecipients;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetSharingMetadataResponseMessageType
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
