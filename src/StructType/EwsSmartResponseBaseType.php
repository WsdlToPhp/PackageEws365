<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SmartResponseBaseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSmartResponseBaseType extends EwsResponseObjectType
{
    /**
     * The Subject
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Subject;
    /**
     * The Body
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsBodyType
     */
    public $Body;
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
     * @var bool
     */
    public $IsReadReceiptRequested;
    /**
     * The IsDeliveryReceiptRequested
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
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
     * @param \Ews\StructType\EwsBodyType $body
     * @param \Ews\ArrayType\EwsArrayOfRecipientsType $toRecipients
     * @param \Ews\ArrayType\EwsArrayOfRecipientsType $ccRecipients
     * @param \Ews\ArrayType\EwsArrayOfRecipientsType $bccRecipients
     * @param bool $isReadReceiptRequested
     * @param bool $isDeliveryReceiptRequested
     * @param \Ews\StructType\EwsSingleRecipientType $from
     * @param \Ews\StructType\EwsItemIdType $referenceItemId
     * @param string $objectName
     */
    public function __construct($subject = null, \Ews\StructType\EwsBodyType $body = null, \Ews\ArrayType\EwsArrayOfRecipientsType $toRecipients = null, \Ews\ArrayType\EwsArrayOfRecipientsType $ccRecipients = null, \Ews\ArrayType\EwsArrayOfRecipientsType $bccRecipients = null, $isReadReceiptRequested = null, $isDeliveryReceiptRequested = null, \Ews\StructType\EwsSingleRecipientType $from = null, \Ews\StructType\EwsItemIdType $referenceItemId = null, $objectName = null)
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
    public function getSubject()
    {
        return $this->Subject;
    }
    /**
     * Set Subject value
     * @param string $subject
     * @return \Ews\StructType\EwsSmartResponseBaseType
     */
    public function setSubject($subject = null)
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subject)), __LINE__);
        }
        $this->Subject = $subject;
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
     * @return \Ews\StructType\EwsSmartResponseBaseType
     */
    public function setBody(\Ews\StructType\EwsBodyType $body = null)
    {
        $this->Body = $body;
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
     * @return \Ews\StructType\EwsSmartResponseBaseType
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
     * @return \Ews\StructType\EwsSmartResponseBaseType
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
     * @return \Ews\StructType\EwsSmartResponseBaseType
     */
    public function setBccRecipients(\Ews\ArrayType\EwsArrayOfRecipientsType $bccRecipients = null)
    {
        $this->BccRecipients = $bccRecipients;
        return $this;
    }
    /**
     * Get IsReadReceiptRequested value
     * @return bool|null
     */
    public function getIsReadReceiptRequested()
    {
        return $this->IsReadReceiptRequested;
    }
    /**
     * Set IsReadReceiptRequested value
     * @param bool $isReadReceiptRequested
     * @return \Ews\StructType\EwsSmartResponseBaseType
     */
    public function setIsReadReceiptRequested($isReadReceiptRequested = null)
    {
        // validation for constraint: boolean
        if (!is_null($isReadReceiptRequested) && !is_bool($isReadReceiptRequested)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isReadReceiptRequested)), __LINE__);
        }
        $this->IsReadReceiptRequested = $isReadReceiptRequested;
        return $this;
    }
    /**
     * Get IsDeliveryReceiptRequested value
     * @return bool|null
     */
    public function getIsDeliveryReceiptRequested()
    {
        return $this->IsDeliveryReceiptRequested;
    }
    /**
     * Set IsDeliveryReceiptRequested value
     * @param bool $isDeliveryReceiptRequested
     * @return \Ews\StructType\EwsSmartResponseBaseType
     */
    public function setIsDeliveryReceiptRequested($isDeliveryReceiptRequested = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDeliveryReceiptRequested) && !is_bool($isDeliveryReceiptRequested)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isDeliveryReceiptRequested)), __LINE__);
        }
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
     * @return \Ews\StructType\EwsSmartResponseBaseType
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
     * @return \Ews\StructType\EwsSmartResponseBaseType
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
     * @return \Ews\StructType\EwsSmartResponseBaseType
     */
    public function setObjectName($objectName = null)
    {
        // validation for constraint: string
        if (!is_null($objectName) && !is_string($objectName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($objectName)), __LINE__);
        }
        $this->ObjectName = $objectName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSmartResponseBaseType
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
