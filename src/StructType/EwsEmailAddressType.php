<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmailAddressType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifier for a fully resolved email address
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsEmailAddressType extends EwsBaseEmailAddressType
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The EmailAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - minLength: 1
     * @var string
     */
    public $EmailAddress;
    /**
     * The RoutingType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - minLength: 1
     * @var string
     */
    public $RoutingType;
    /**
     * The MailboxType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MailboxType;
    /**
     * The ItemId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ItemId;
    /**
     * The OriginalDisplayName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OriginalDisplayName;
    /**
     * Constructor method for EmailAddressType
     * @uses EwsEmailAddressType::setName()
     * @uses EwsEmailAddressType::setEmailAddress()
     * @uses EwsEmailAddressType::setRoutingType()
     * @uses EwsEmailAddressType::setMailboxType()
     * @uses EwsEmailAddressType::setItemId()
     * @uses EwsEmailAddressType::setOriginalDisplayName()
     * @param string $name
     * @param string $emailAddress
     * @param string $routingType
     * @param string $mailboxType
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @param string $originalDisplayName
     */
    public function __construct($name = null, $emailAddress = null, $routingType = null, $mailboxType = null, \Ews\StructType\EwsItemIdType $itemId = null, $originalDisplayName = null)
    {
        $this
            ->setName($name)
            ->setEmailAddress($emailAddress)
            ->setRoutingType($routingType)
            ->setMailboxType($mailboxType)
            ->setItemId($itemId)
            ->setOriginalDisplayName($originalDisplayName);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Ews\StructType\EwsEmailAddressType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get EmailAddress value
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }
    /**
     * Set EmailAddress value
     * @param string $emailAddress
     * @return \Ews\StructType\EwsEmailAddressType
     */
    public function setEmailAddress($emailAddress = null)
    {
        // validation for constraint: minLength
        if ((is_scalar(emailAddress) && strlen(emailAddress) < 1) || (is_array(emailAddress) && count(emailAddress) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($emailAddress) && !is_string($emailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emailAddress)), __LINE__);
        }
        $this->EmailAddress = $emailAddress;
        return $this;
    }
    /**
     * Get RoutingType value
     * @return string|null
     */
    public function getRoutingType()
    {
        return $this->RoutingType;
    }
    /**
     * Set RoutingType value
     * @param string $routingType
     * @return \Ews\StructType\EwsEmailAddressType
     */
    public function setRoutingType($routingType = null)
    {
        // validation for constraint: minLength
        if ((is_scalar(routingType) && strlen(routingType) < 1) || (is_array(routingType) && count(routingType) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($routingType) && !is_string($routingType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($routingType)), __LINE__);
        }
        $this->RoutingType = $routingType;
        return $this;
    }
    /**
     * Get MailboxType value
     * @return string|null
     */
    public function getMailboxType()
    {
        return $this->MailboxType;
    }
    /**
     * Set MailboxType value
     * @uses \Ews\EnumType\EwsMailboxTypeType::valueIsValid()
     * @uses \Ews\EnumType\EwsMailboxTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $mailboxType
     * @return \Ews\StructType\EwsEmailAddressType
     */
    public function setMailboxType($mailboxType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsMailboxTypeType::valueIsValid($mailboxType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $mailboxType, implode(', ', \Ews\EnumType\EwsMailboxTypeType::getValidValues())), __LINE__);
        }
        $this->MailboxType = $mailboxType;
        return $this;
    }
    /**
     * Get ItemId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getItemId()
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @return \Ews\StructType\EwsEmailAddressType
     */
    public function setItemId(\Ews\StructType\EwsItemIdType $itemId = null)
    {
        $this->ItemId = $itemId;
        return $this;
    }
    /**
     * Get OriginalDisplayName value
     * @return string|null
     */
    public function getOriginalDisplayName()
    {
        return $this->OriginalDisplayName;
    }
    /**
     * Set OriginalDisplayName value
     * @param string $originalDisplayName
     * @return \Ews\StructType\EwsEmailAddressType
     */
    public function setOriginalDisplayName($originalDisplayName = null)
    {
        // validation for constraint: string
        if (!is_null($originalDisplayName) && !is_string($originalDisplayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originalDisplayName)), __LINE__);
        }
        $this->OriginalDisplayName = $originalDisplayName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsEmailAddressType
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
