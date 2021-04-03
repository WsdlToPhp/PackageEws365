<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WellKnownResponseObjectType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsWellKnownResponseObjectType extends AbstractStructBase
{
    /**
     * The ItemClass
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemClass = null;
    /**
     * The Sensitivity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Sensitivity = null;
    /**
     * The Body
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsBodyType|null
     */
    protected ?\StructType\EwsBodyType $Body = null;
    /**
     * The Attachments
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsNonEmptyArrayOfAttachmentsType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfAttachmentsType $Attachments = null;
    /**
     * The InternetMessageHeaders
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsNonEmptyArrayOfInternetHeadersType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfInternetHeadersType $InternetMessageHeaders = null;
    /**
     * The Sender
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsSingleRecipientType|null
     */
    protected ?\StructType\EwsSingleRecipientType $Sender = null;
    /**
     * The ToRecipients
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfRecipientsType|null
     */
    protected ?\ArrayType\EwsArrayOfRecipientsType $ToRecipients = null;
    /**
     * The CcRecipients
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfRecipientsType|null
     */
    protected ?\ArrayType\EwsArrayOfRecipientsType $CcRecipients = null;
    /**
     * The BccRecipients
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfRecipientsType|null
     */
    protected ?\ArrayType\EwsArrayOfRecipientsType $BccRecipients = null;
    /**
     * The IsReadReceiptRequested
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsReadReceiptRequested = null;
    /**
     * The IsDeliveryReceiptRequested
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsDeliveryReceiptRequested = null;
    /**
     * The From
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsSingleRecipientType|null
     */
    protected ?\StructType\EwsSingleRecipientType $From = null;
    /**
     * The ReferenceItemId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $ReferenceItemId = null;
    /**
     * The ObjectName
     * Meta information extracted from the WSDL
     * - use: prohibited
     * @var string|null
     */
    protected ?string $ObjectName = null;
    /**
     * Constructor method for WellKnownResponseObjectType
     * @uses EwsWellKnownResponseObjectType::setItemClass()
     * @uses EwsWellKnownResponseObjectType::setSensitivity()
     * @uses EwsWellKnownResponseObjectType::setBody()
     * @uses EwsWellKnownResponseObjectType::setAttachments()
     * @uses EwsWellKnownResponseObjectType::setInternetMessageHeaders()
     * @uses EwsWellKnownResponseObjectType::setSender()
     * @uses EwsWellKnownResponseObjectType::setToRecipients()
     * @uses EwsWellKnownResponseObjectType::setCcRecipients()
     * @uses EwsWellKnownResponseObjectType::setBccRecipients()
     * @uses EwsWellKnownResponseObjectType::setIsReadReceiptRequested()
     * @uses EwsWellKnownResponseObjectType::setIsDeliveryReceiptRequested()
     * @uses EwsWellKnownResponseObjectType::setFrom()
     * @uses EwsWellKnownResponseObjectType::setReferenceItemId()
     * @uses EwsWellKnownResponseObjectType::setObjectName()
     * @param string $itemClass
     * @param string $sensitivity
     * @param \StructType\EwsBodyType $body
     * @param \StructType\EwsNonEmptyArrayOfAttachmentsType $attachments
     * @param \ArrayType\EwsNonEmptyArrayOfInternetHeadersType $internetMessageHeaders
     * @param \StructType\EwsSingleRecipientType $sender
     * @param \ArrayType\EwsArrayOfRecipientsType $toRecipients
     * @param \ArrayType\EwsArrayOfRecipientsType $ccRecipients
     * @param \ArrayType\EwsArrayOfRecipientsType $bccRecipients
     * @param bool $isReadReceiptRequested
     * @param bool $isDeliveryReceiptRequested
     * @param \StructType\EwsSingleRecipientType $from
     * @param \StructType\EwsItemIdType $referenceItemId
     * @param string $objectName
     */
    public function __construct(?string $itemClass = null, ?string $sensitivity = null, ?\StructType\EwsBodyType $body = null, ?\StructType\EwsNonEmptyArrayOfAttachmentsType $attachments = null, ?\ArrayType\EwsNonEmptyArrayOfInternetHeadersType $internetMessageHeaders = null, ?\StructType\EwsSingleRecipientType $sender = null, ?\ArrayType\EwsArrayOfRecipientsType $toRecipients = null, ?\ArrayType\EwsArrayOfRecipientsType $ccRecipients = null, ?\ArrayType\EwsArrayOfRecipientsType $bccRecipients = null, ?bool $isReadReceiptRequested = null, ?bool $isDeliveryReceiptRequested = null, ?\StructType\EwsSingleRecipientType $from = null, ?\StructType\EwsItemIdType $referenceItemId = null, ?string $objectName = null)
    {
        $this
            ->setItemClass($itemClass)
            ->setSensitivity($sensitivity)
            ->setBody($body)
            ->setAttachments($attachments)
            ->setInternetMessageHeaders($internetMessageHeaders)
            ->setSender($sender)
            ->setToRecipients($toRecipients)
            ->setCcRecipients($ccRecipients)
            ->setBccRecipients($bccRecipients)
            ->setIsReadReceiptRequested($isReadReceiptRequested)
            ->setIsDeliveryReceiptRequested($isDeliveryReceiptRequested)
            ->setFrom($from)
            ->setReferenceItemId($referenceItemId)
            ->setObjectName($objectName);
    }
    /**
     * Get ItemClass value
     * @return string|null
     */
    public function getItemClass(): ?string
    {
        return $this->ItemClass;
    }
    /**
     * Set ItemClass value
     * @param string $itemClass
     * @return \StructType\EwsWellKnownResponseObjectType
     */
    public function setItemClass(?string $itemClass = null): self
    {
        // validation for constraint: string
        if (!is_null($itemClass) && !is_string($itemClass)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemClass, true), gettype($itemClass)), __LINE__);
        }
        $this->ItemClass = $itemClass;
        
        return $this;
    }
    /**
     * Get Sensitivity value
     * @return string|null
     */
    public function getSensitivity(): ?string
    {
        return $this->Sensitivity;
    }
    /**
     * Set Sensitivity value
     * @uses \EnumType\EwsSensitivityChoicesType::valueIsValid()
     * @uses \EnumType\EwsSensitivityChoicesType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sensitivity
     * @return \StructType\EwsWellKnownResponseObjectType
     */
    public function setSensitivity(?string $sensitivity = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsSensitivityChoicesType::valueIsValid($sensitivity)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsSensitivityChoicesType', is_array($sensitivity) ? implode(', ', $sensitivity) : var_export($sensitivity, true), implode(', ', \EnumType\EwsSensitivityChoicesType::getValidValues())), __LINE__);
        }
        $this->Sensitivity = $sensitivity;
        
        return $this;
    }
    /**
     * Get Body value
     * @return \StructType\EwsBodyType|null
     */
    public function getBody(): ?\StructType\EwsBodyType
    {
        return $this->Body;
    }
    /**
     * Set Body value
     * @param \StructType\EwsBodyType $body
     * @return \StructType\EwsWellKnownResponseObjectType
     */
    public function setBody(?\StructType\EwsBodyType $body = null): self
    {
        $this->Body = $body;
        
        return $this;
    }
    /**
     * Get Attachments value
     * @return \StructType\EwsNonEmptyArrayOfAttachmentsType|null
     */
    public function getAttachments(): ?\StructType\EwsNonEmptyArrayOfAttachmentsType
    {
        return $this->Attachments;
    }
    /**
     * Set Attachments value
     * @param \StructType\EwsNonEmptyArrayOfAttachmentsType $attachments
     * @return \StructType\EwsWellKnownResponseObjectType
     */
    public function setAttachments(?\StructType\EwsNonEmptyArrayOfAttachmentsType $attachments = null): self
    {
        $this->Attachments = $attachments;
        
        return $this;
    }
    /**
     * Get InternetMessageHeaders value
     * @return \ArrayType\EwsNonEmptyArrayOfInternetHeadersType|null
     */
    public function getInternetMessageHeaders(): ?\ArrayType\EwsNonEmptyArrayOfInternetHeadersType
    {
        return $this->InternetMessageHeaders;
    }
    /**
     * Set InternetMessageHeaders value
     * @param \ArrayType\EwsNonEmptyArrayOfInternetHeadersType $internetMessageHeaders
     * @return \StructType\EwsWellKnownResponseObjectType
     */
    public function setInternetMessageHeaders(?\ArrayType\EwsNonEmptyArrayOfInternetHeadersType $internetMessageHeaders = null): self
    {
        $this->InternetMessageHeaders = $internetMessageHeaders;
        
        return $this;
    }
    /**
     * Get Sender value
     * @return \StructType\EwsSingleRecipientType|null
     */
    public function getSender(): ?\StructType\EwsSingleRecipientType
    {
        return $this->Sender;
    }
    /**
     * Set Sender value
     * @param \StructType\EwsSingleRecipientType $sender
     * @return \StructType\EwsWellKnownResponseObjectType
     */
    public function setSender(?\StructType\EwsSingleRecipientType $sender = null): self
    {
        $this->Sender = $sender;
        
        return $this;
    }
    /**
     * Get ToRecipients value
     * @return \ArrayType\EwsArrayOfRecipientsType|null
     */
    public function getToRecipients(): ?\ArrayType\EwsArrayOfRecipientsType
    {
        return $this->ToRecipients;
    }
    /**
     * Set ToRecipients value
     * @param \ArrayType\EwsArrayOfRecipientsType $toRecipients
     * @return \StructType\EwsWellKnownResponseObjectType
     */
    public function setToRecipients(?\ArrayType\EwsArrayOfRecipientsType $toRecipients = null): self
    {
        $this->ToRecipients = $toRecipients;
        
        return $this;
    }
    /**
     * Get CcRecipients value
     * @return \ArrayType\EwsArrayOfRecipientsType|null
     */
    public function getCcRecipients(): ?\ArrayType\EwsArrayOfRecipientsType
    {
        return $this->CcRecipients;
    }
    /**
     * Set CcRecipients value
     * @param \ArrayType\EwsArrayOfRecipientsType $ccRecipients
     * @return \StructType\EwsWellKnownResponseObjectType
     */
    public function setCcRecipients(?\ArrayType\EwsArrayOfRecipientsType $ccRecipients = null): self
    {
        $this->CcRecipients = $ccRecipients;
        
        return $this;
    }
    /**
     * Get BccRecipients value
     * @return \ArrayType\EwsArrayOfRecipientsType|null
     */
    public function getBccRecipients(): ?\ArrayType\EwsArrayOfRecipientsType
    {
        return $this->BccRecipients;
    }
    /**
     * Set BccRecipients value
     * @param \ArrayType\EwsArrayOfRecipientsType $bccRecipients
     * @return \StructType\EwsWellKnownResponseObjectType
     */
    public function setBccRecipients(?\ArrayType\EwsArrayOfRecipientsType $bccRecipients = null): self
    {
        $this->BccRecipients = $bccRecipients;
        
        return $this;
    }
    /**
     * Get IsReadReceiptRequested value
     * @return bool|null
     */
    public function getIsReadReceiptRequested(): ?bool
    {
        return $this->IsReadReceiptRequested;
    }
    /**
     * Set IsReadReceiptRequested value
     * @param bool $isReadReceiptRequested
     * @return \StructType\EwsWellKnownResponseObjectType
     */
    public function setIsReadReceiptRequested(?bool $isReadReceiptRequested = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isReadReceiptRequested) && !is_bool($isReadReceiptRequested)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isReadReceiptRequested, true), gettype($isReadReceiptRequested)), __LINE__);
        }
        $this->IsReadReceiptRequested = $isReadReceiptRequested;
        
        return $this;
    }
    /**
     * Get IsDeliveryReceiptRequested value
     * @return bool|null
     */
    public function getIsDeliveryReceiptRequested(): ?bool
    {
        return $this->IsDeliveryReceiptRequested;
    }
    /**
     * Set IsDeliveryReceiptRequested value
     * @param bool $isDeliveryReceiptRequested
     * @return \StructType\EwsWellKnownResponseObjectType
     */
    public function setIsDeliveryReceiptRequested(?bool $isDeliveryReceiptRequested = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDeliveryReceiptRequested) && !is_bool($isDeliveryReceiptRequested)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDeliveryReceiptRequested, true), gettype($isDeliveryReceiptRequested)), __LINE__);
        }
        $this->IsDeliveryReceiptRequested = $isDeliveryReceiptRequested;
        
        return $this;
    }
    /**
     * Get From value
     * @return \StructType\EwsSingleRecipientType|null
     */
    public function getFrom(): ?\StructType\EwsSingleRecipientType
    {
        return $this->From;
    }
    /**
     * Set From value
     * @param \StructType\EwsSingleRecipientType $from
     * @return \StructType\EwsWellKnownResponseObjectType
     */
    public function setFrom(?\StructType\EwsSingleRecipientType $from = null): self
    {
        $this->From = $from;
        
        return $this;
    }
    /**
     * Get ReferenceItemId value
     * @return \StructType\EwsItemIdType|null
     */
    public function getReferenceItemId(): ?\StructType\EwsItemIdType
    {
        return $this->ReferenceItemId;
    }
    /**
     * Set ReferenceItemId value
     * @param \StructType\EwsItemIdType $referenceItemId
     * @return \StructType\EwsWellKnownResponseObjectType
     */
    public function setReferenceItemId(?\StructType\EwsItemIdType $referenceItemId = null): self
    {
        $this->ReferenceItemId = $referenceItemId;
        
        return $this;
    }
    /**
     * Get ObjectName value
     * @return string|null
     */
    public function getObjectName(): ?string
    {
        return $this->ObjectName;
    }
    /**
     * Set ObjectName value
     * @param string $objectName
     * @return \StructType\EwsWellKnownResponseObjectType
     */
    public function setObjectName(?string $objectName = null): self
    {
        // validation for constraint: string
        if (!is_null($objectName) && !is_string($objectName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($objectName, true), gettype($objectName)), __LINE__);
        }
        $this->ObjectName = $objectName;
        
        return $this;
    }
}
