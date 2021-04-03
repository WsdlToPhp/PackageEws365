<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SmartResponseBaseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSmartResponseBaseType extends AbstractStructBase
{
    /**
     * The Subject
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Subject = null;
    /**
     * The Body
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsBodyType|null
     */
    protected ?\StructType\EwsBodyType $Body = null;
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
     * Constructor method for SmartResponseBaseType
     * @uses EwsSmartResponseBaseType::setSubject()
     * @uses EwsSmartResponseBaseType::setBody()
     * @uses EwsSmartResponseBaseType::setToRecipients()
     * @uses EwsSmartResponseBaseType::setCcRecipients()
     * @uses EwsSmartResponseBaseType::setBccRecipients()
     * @uses EwsSmartResponseBaseType::setIsReadReceiptRequested()
     * @uses EwsSmartResponseBaseType::setIsDeliveryReceiptRequested()
     * @uses EwsSmartResponseBaseType::setFrom()
     * @uses EwsSmartResponseBaseType::setReferenceItemId()
     * @uses EwsSmartResponseBaseType::setObjectName()
     * @param string $subject
     * @param \StructType\EwsBodyType $body
     * @param \ArrayType\EwsArrayOfRecipientsType $toRecipients
     * @param \ArrayType\EwsArrayOfRecipientsType $ccRecipients
     * @param \ArrayType\EwsArrayOfRecipientsType $bccRecipients
     * @param bool $isReadReceiptRequested
     * @param bool $isDeliveryReceiptRequested
     * @param \StructType\EwsSingleRecipientType $from
     * @param \StructType\EwsItemIdType $referenceItemId
     * @param string $objectName
     */
    public function __construct(?string $subject = null, ?\StructType\EwsBodyType $body = null, ?\ArrayType\EwsArrayOfRecipientsType $toRecipients = null, ?\ArrayType\EwsArrayOfRecipientsType $ccRecipients = null, ?\ArrayType\EwsArrayOfRecipientsType $bccRecipients = null, ?bool $isReadReceiptRequested = null, ?bool $isDeliveryReceiptRequested = null, ?\StructType\EwsSingleRecipientType $from = null, ?\StructType\EwsItemIdType $referenceItemId = null, ?string $objectName = null)
    {
        $this
            ->setSubject($subject)
            ->setBody($body)
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
     * Get Subject value
     * @return string|null
     */
    public function getSubject(): ?string
    {
        return $this->Subject;
    }
    /**
     * Set Subject value
     * @param string $subject
     * @return \StructType\EwsSmartResponseBaseType
     */
    public function setSubject(?string $subject = null): self
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subject, true), gettype($subject)), __LINE__);
        }
        $this->Subject = $subject;
        
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
     * @return \StructType\EwsSmartResponseBaseType
     */
    public function setBody(?\StructType\EwsBodyType $body = null): self
    {
        $this->Body = $body;
        
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
     * @return \StructType\EwsSmartResponseBaseType
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
     * @return \StructType\EwsSmartResponseBaseType
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
     * @return \StructType\EwsSmartResponseBaseType
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
     * @return \StructType\EwsSmartResponseBaseType
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
     * @return \StructType\EwsSmartResponseBaseType
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
     * @return \StructType\EwsSmartResponseBaseType
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
     * @return \StructType\EwsSmartResponseBaseType
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
     * @return \StructType\EwsSmartResponseBaseType
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
