<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WellKnownResponseObjectType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsWellKnownResponseObjectType extends EwsResponseObjectType
{
    /**
     * The ItemClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ItemClass;
    /**
     * The Sensitivity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Sensitivity;
    /**
     * The Body
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsBodyType
     */
    public $Body;
    /**
     * The Attachments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsNonEmptyArrayOfAttachmentsType
     */
    public $Attachments;
    /**
     * The InternetMessageHeaders
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfInternetHeadersType
     */
    public $InternetMessageHeaders;
    /**
     * The Sender
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSingleRecipientType
     */
    public $Sender;
    /**
     * The ToRecipients
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfRecipientsType
     */
    public $ToRecipients;
    /**
     * The CcRecipients
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfRecipientsType
     */
    public $CcRecipients;
    /**
     * The BccRecipients
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfRecipientsType
     */
    public $BccRecipients;
    /**
     * The IsReadReceiptRequested
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $IsReadReceiptRequested;
    /**
     * The IsDeliveryReceiptRequested
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $IsDeliveryReceiptRequested;
    /**
     * The From
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSingleRecipientType
     */
    public $From;
    /**
     * The ReferenceItemId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Identifier for a fully resolved item
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ReferenceItemId;
    /**
     * The ObjectName
     * Meta informations extracted from the WSDL
     * - use: prohibited
     * @var string
     */
    public $ObjectName;
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
     * @param \Ews\StructType\EwsBodyType $body
     * @param \Ews\StructType\EwsNonEmptyArrayOfAttachmentsType $attachments
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfInternetHeadersType
     * $internetMessageHeaders
     * @param \Ews\StructType\EwsSingleRecipientType $sender
     * @param \Ews\ArrayType\EwsArrayOfRecipientsType $toRecipients
     * @param \Ews\ArrayType\EwsArrayOfRecipientsType $ccRecipients
     * @param \Ews\ArrayType\EwsArrayOfRecipientsType $bccRecipients
     * @param boolean $isReadReceiptRequested
     * @param boolean $isDeliveryReceiptRequested
     * @param \Ews\StructType\EwsSingleRecipientType $from
     * @param \Ews\StructType\EwsItemIdType $referenceItemId
     * @param string $objectName
     */
    public function __construct($itemClass = null, $sensitivity = null, \Ews\StructType\EwsBodyType $body = null, \Ews\StructType\EwsNonEmptyArrayOfAttachmentsType $attachments = null, \Ews\ArrayType\EwsNonEmptyArrayOfInternetHeadersType $internetMessageHeaders = null, \Ews\StructType\EwsSingleRecipientType $sender = null, \Ews\ArrayType\EwsArrayOfRecipientsType $toRecipients = null, \Ews\ArrayType\EwsArrayOfRecipientsType $ccRecipients = null, \Ews\ArrayType\EwsArrayOfRecipientsType $bccRecipients = null, $isReadReceiptRequested = null, $isDeliveryReceiptRequested = null, \Ews\StructType\EwsSingleRecipientType $from = null, \Ews\StructType\EwsItemIdType $referenceItemId = null, $objectName = null)
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
    public function getItemClass()
    {
        return $this->ItemClass;
    }
    /**
     * Set ItemClass value
     * @param string $itemClass
     * @return \Ews\StructType\EwsWellKnownResponseObjectType
     */
    public function setItemClass($itemClass = null)
    {
        $this->ItemClass = $itemClass;
        return $this;
    }
    /**
     * Get Sensitivity value
     * @return string|null
     */
    public function getSensitivity()
    {
        return $this->Sensitivity;
    }
    /**
     * Set Sensitivity value
     * @uses \Ews\EnumType\EwsSensitivityChoicesType::valueIsValid()
     * @uses \Ews\EnumType\EwsSensitivityChoicesType::getValidValues()
     * @param string $sensitivity
     * @return \Ews\StructType\EwsWellKnownResponseObjectType
     */
    public function setSensitivity($sensitivity = null)
    {
        if (!\Ews\EnumType\EwsSensitivityChoicesType::valueIsValid($sensitivity)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sensitivity, implode(', ', \Ews\EnumType\EwsSensitivityChoicesType::getValidValues())), __LINE__);
        }
        $this->Sensitivity = $sensitivity;
        return $this;
    }
    /**
     * Get Body value
     * @return \Ews\StructType\EwsBodyType|null
     */
    public function getBody()
    {
        return $this->Body;
    }
    /**
     * Set Body value
     * @param \Ews\StructType\EwsBodyType $body
     * @return \Ews\StructType\EwsWellKnownResponseObjectType
     */
    public function setBody(\Ews\StructType\EwsBodyType $body = null)
    {
        $this->Body = $body;
        return $this;
    }
    /**
     * Get Attachments value
     * @return \Ews\StructType\EwsNonEmptyArrayOfAttachmentsType|null
     */
    public function getAttachments()
    {
        return $this->Attachments;
    }
    /**
     * Set Attachments value
     * @param \Ews\StructType\EwsNonEmptyArrayOfAttachmentsType $attachments
     * @return \Ews\StructType\EwsWellKnownResponseObjectType
     */
    public function setAttachments(\Ews\StructType\EwsNonEmptyArrayOfAttachmentsType $attachments = null)
    {
        $this->Attachments = $attachments;
        return $this;
    }
    /**
     * Get InternetMessageHeaders value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfInternetHeadersType|null
     */
    public function getInternetMessageHeaders()
    {
        return $this->InternetMessageHeaders;
    }
    /**
     * Set InternetMessageHeaders value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfInternetHeadersType
     * $internetMessageHeaders
     * @return \Ews\StructType\EwsWellKnownResponseObjectType
     */
    public function setInternetMessageHeaders(\Ews\ArrayType\EwsNonEmptyArrayOfInternetHeadersType $internetMessageHeaders = null)
    {
        $this->InternetMessageHeaders = $internetMessageHeaders;
        return $this;
    }
    /**
     * Get Sender value
     * @return \Ews\StructType\EwsSingleRecipientType|null
     */
    public function getSender()
    {
        return $this->Sender;
    }
    /**
     * Set Sender value
     * @param \Ews\StructType\EwsSingleRecipientType $sender
     * @return \Ews\StructType\EwsWellKnownResponseObjectType
     */
    public function setSender(\Ews\StructType\EwsSingleRecipientType $sender = null)
    {
        $this->Sender = $sender;
        return $this;
    }
    /**
     * Get ToRecipients value
     * @return \Ews\ArrayType\EwsArrayOfRecipientsType|null
     */
    public function getToRecipients()
    {
        return $this->ToRecipients;
    }
    /**
     * Set ToRecipients value
     * @param \Ews\ArrayType\EwsArrayOfRecipientsType $toRecipients
     * @return \Ews\StructType\EwsWellKnownResponseObjectType
     */
    public function setToRecipients(\Ews\ArrayType\EwsArrayOfRecipientsType $toRecipients = null)
    {
        $this->ToRecipients = $toRecipients;
        return $this;
    }
    /**
     * Get CcRecipients value
     * @return \Ews\ArrayType\EwsArrayOfRecipientsType|null
     */
    public function getCcRecipients()
    {
        return $this->CcRecipients;
    }
    /**
     * Set CcRecipients value
     * @param \Ews\ArrayType\EwsArrayOfRecipientsType $ccRecipients
     * @return \Ews\StructType\EwsWellKnownResponseObjectType
     */
    public function setCcRecipients(\Ews\ArrayType\EwsArrayOfRecipientsType $ccRecipients = null)
    {
        $this->CcRecipients = $ccRecipients;
        return $this;
    }
    /**
     * Get BccRecipients value
     * @return \Ews\ArrayType\EwsArrayOfRecipientsType|null
     */
    public function getBccRecipients()
    {
        return $this->BccRecipients;
    }
    /**
     * Set BccRecipients value
     * @param \Ews\ArrayType\EwsArrayOfRecipientsType $bccRecipients
     * @return \Ews\StructType\EwsWellKnownResponseObjectType
     */
    public function setBccRecipients(\Ews\ArrayType\EwsArrayOfRecipientsType $bccRecipients = null)
    {
        $this->BccRecipients = $bccRecipients;
        return $this;
    }
    /**
     * Get IsReadReceiptRequested value
     * @return boolean|null
     */
    public function getIsReadReceiptRequested()
    {
        return $this->IsReadReceiptRequested;
    }
    /**
     * Set IsReadReceiptRequested value
     * @param boolean $isReadReceiptRequested
     * @return \Ews\StructType\EwsWellKnownResponseObjectType
     */
    public function setIsReadReceiptRequested($isReadReceiptRequested = null)
    {
        $this->IsReadReceiptRequested = $isReadReceiptRequested;
        return $this;
    }
    /**
     * Get IsDeliveryReceiptRequested value
     * @return boolean|null
     */
    public function getIsDeliveryReceiptRequested()
    {
        return $this->IsDeliveryReceiptRequested;
    }
    /**
     * Set IsDeliveryReceiptRequested value
     * @param boolean $isDeliveryReceiptRequested
     * @return \Ews\StructType\EwsWellKnownResponseObjectType
     */
    public function setIsDeliveryReceiptRequested($isDeliveryReceiptRequested = null)
    {
        $this->IsDeliveryReceiptRequested = $isDeliveryReceiptRequested;
        return $this;
    }
    /**
     * Get From value
     * @return \Ews\StructType\EwsSingleRecipientType|null
     */
    public function getFrom()
    {
        return $this->From;
    }
    /**
     * Set From value
     * @param \Ews\StructType\EwsSingleRecipientType $from
     * @return \Ews\StructType\EwsWellKnownResponseObjectType
     */
    public function setFrom(\Ews\StructType\EwsSingleRecipientType $from = null)
    {
        $this->From = $from;
        return $this;
    }
    /**
     * Get ReferenceItemId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getReferenceItemId()
    {
        return $this->ReferenceItemId;
    }
    /**
     * Set ReferenceItemId value
     * @param \Ews\StructType\EwsItemIdType $referenceItemId
     * @return \Ews\StructType\EwsWellKnownResponseObjectType
     */
    public function setReferenceItemId(\Ews\StructType\EwsItemIdType $referenceItemId = null)
    {
        $this->ReferenceItemId = $referenceItemId;
        return $this;
    }
    /**
     * Get ObjectName value
     * @return string|null
     */
    public function getObjectName()
    {
        return $this->ObjectName;
    }
    /**
     * Set ObjectName value
     * @param string $objectName
     * @return \Ews\StructType\EwsWellKnownResponseObjectType
     */
    public function setObjectName($objectName = null)
    {
        $this->ObjectName = $objectName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsWellKnownResponseObjectType
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
