<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsFolderIdType|null
     */
    protected ?\StructType\EwsFolderIdType $IdOfFolderToShare = null;
    /**
     * The SenderSmtpAddress
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * @var string|null
     */
    protected ?string $SenderSmtpAddress = null;
    /**
     * The Recipients
     * @var \ArrayType\EwsArrayOfSmtpAddressType|null
     */
    protected ?\ArrayType\EwsArrayOfSmtpAddressType $Recipients = null;
    /**
     * Constructor method for GetSharingMetadataType
     * @uses EwsGetSharingMetadataType::setIdOfFolderToShare()
     * @uses EwsGetSharingMetadataType::setSenderSmtpAddress()
     * @uses EwsGetSharingMetadataType::setRecipients()
     * @param \StructType\EwsFolderIdType $idOfFolderToShare
     * @param string $senderSmtpAddress
     * @param \ArrayType\EwsArrayOfSmtpAddressType $recipients
     */
    public function __construct(?\StructType\EwsFolderIdType $idOfFolderToShare = null, ?string $senderSmtpAddress = null, ?\ArrayType\EwsArrayOfSmtpAddressType $recipients = null)
    {
        $this
            ->setIdOfFolderToShare($idOfFolderToShare)
            ->setSenderSmtpAddress($senderSmtpAddress)
            ->setRecipients($recipients);
    }
    /**
     * Get IdOfFolderToShare value
     * @return \StructType\EwsFolderIdType|null
     */
    public function getIdOfFolderToShare(): ?\StructType\EwsFolderIdType
    {
        return $this->IdOfFolderToShare;
    }
    /**
     * Set IdOfFolderToShare value
     * @param \StructType\EwsFolderIdType $idOfFolderToShare
     * @return \StructType\EwsGetSharingMetadataType
     */
    public function setIdOfFolderToShare(?\StructType\EwsFolderIdType $idOfFolderToShare = null): self
    {
        $this->IdOfFolderToShare = $idOfFolderToShare;
        
        return $this;
    }
    /**
     * Get SenderSmtpAddress value
     * @return string|null
     */
    public function getSenderSmtpAddress(): ?string
    {
        return $this->SenderSmtpAddress;
    }
    /**
     * Set SenderSmtpAddress value
     * @param string $senderSmtpAddress
     * @return \StructType\EwsGetSharingMetadataType
     */
    public function setSenderSmtpAddress(?string $senderSmtpAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($senderSmtpAddress) && !is_string($senderSmtpAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($senderSmtpAddress, true), gettype($senderSmtpAddress)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($senderSmtpAddress) && mb_strlen((string) $senderSmtpAddress) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $senderSmtpAddress)), __LINE__);
        }
        $this->SenderSmtpAddress = $senderSmtpAddress;
        
        return $this;
    }
    /**
     * Get Recipients value
     * @return \ArrayType\EwsArrayOfSmtpAddressType|null
     */
    public function getRecipients(): ?\ArrayType\EwsArrayOfSmtpAddressType
    {
        return $this->Recipients;
    }
    /**
     * Set Recipients value
     * @param \ArrayType\EwsArrayOfSmtpAddressType $recipients
     * @return \StructType\EwsGetSharingMetadataType
     */
    public function setRecipients(?\ArrayType\EwsArrayOfSmtpAddressType $recipients = null): self
    {
        $this->Recipients = $recipients;
        
        return $this;
    }
}
