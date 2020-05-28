<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSharingMetadataResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
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
     * @uses EwsGetSharingMetadataResponseMessageType::setEncryptedSharedFolderDataCollection()
     * @uses EwsGetSharingMetadataResponseMessageType::setInvalidRecipients()
     * @param \Ews\ArrayType\EwsArrayOfEncryptedSharedFolderDataType $encryptedSharedFolderDataCollection
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
     * @param \Ews\ArrayType\EwsArrayOfEncryptedSharedFolderDataType $encryptedSharedFolderDataCollection
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
}
