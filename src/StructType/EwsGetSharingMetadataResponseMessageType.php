<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfEncryptedSharedFolderDataType|null
     */
    protected ?\ArrayType\EwsArrayOfEncryptedSharedFolderDataType $EncryptedSharedFolderDataCollection = null;
    /**
     * The InvalidRecipients
     * @var \ArrayType\EwsArrayOfInvalidRecipientsType|null
     */
    protected ?\ArrayType\EwsArrayOfInvalidRecipientsType $InvalidRecipients = null;
    /**
     * Constructor method for GetSharingMetadataResponseMessageType
     * @uses EwsGetSharingMetadataResponseMessageType::setEncryptedSharedFolderDataCollection()
     * @uses EwsGetSharingMetadataResponseMessageType::setInvalidRecipients()
     * @param \ArrayType\EwsArrayOfEncryptedSharedFolderDataType $encryptedSharedFolderDataCollection
     * @param \ArrayType\EwsArrayOfInvalidRecipientsType $invalidRecipients
     */
    public function __construct(?\ArrayType\EwsArrayOfEncryptedSharedFolderDataType $encryptedSharedFolderDataCollection = null, ?\ArrayType\EwsArrayOfInvalidRecipientsType $invalidRecipients = null)
    {
        $this
            ->setEncryptedSharedFolderDataCollection($encryptedSharedFolderDataCollection)
            ->setInvalidRecipients($invalidRecipients);
    }
    /**
     * Get EncryptedSharedFolderDataCollection value
     * @return \ArrayType\EwsArrayOfEncryptedSharedFolderDataType|null
     */
    public function getEncryptedSharedFolderDataCollection(): ?\ArrayType\EwsArrayOfEncryptedSharedFolderDataType
    {
        return $this->EncryptedSharedFolderDataCollection;
    }
    /**
     * Set EncryptedSharedFolderDataCollection value
     * @param \ArrayType\EwsArrayOfEncryptedSharedFolderDataType $encryptedSharedFolderDataCollection
     * @return \StructType\EwsGetSharingMetadataResponseMessageType
     */
    public function setEncryptedSharedFolderDataCollection(?\ArrayType\EwsArrayOfEncryptedSharedFolderDataType $encryptedSharedFolderDataCollection = null): self
    {
        $this->EncryptedSharedFolderDataCollection = $encryptedSharedFolderDataCollection;
        
        return $this;
    }
    /**
     * Get InvalidRecipients value
     * @return \ArrayType\EwsArrayOfInvalidRecipientsType|null
     */
    public function getInvalidRecipients(): ?\ArrayType\EwsArrayOfInvalidRecipientsType
    {
        return $this->InvalidRecipients;
    }
    /**
     * Set InvalidRecipients value
     * @param \ArrayType\EwsArrayOfInvalidRecipientsType $invalidRecipients
     * @return \StructType\EwsGetSharingMetadataResponseMessageType
     */
    public function setInvalidRecipients(?\ArrayType\EwsArrayOfInvalidRecipientsType $invalidRecipients = null): self
    {
        $this->InvalidRecipients = $invalidRecipients;
        
        return $this;
    }
}
