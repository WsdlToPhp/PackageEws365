<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmailAddressDictionaryEntryType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsEmailAddressDictionaryEntryType extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Key;
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Name;
    /**
     * The RoutingType
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $RoutingType;
    /**
     * The MailboxType
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $MailboxType;
    /**
     * Constructor method for EmailAddressDictionaryEntryType
     * @uses EwsEmailAddressDictionaryEntryType::setKey()
     * @uses EwsEmailAddressDictionaryEntryType::set_()
     * @uses EwsEmailAddressDictionaryEntryType::setName()
     * @uses EwsEmailAddressDictionaryEntryType::setRoutingType()
     * @uses EwsEmailAddressDictionaryEntryType::setMailboxType()
     * @param string $key
     * @param string $_
     * @param string $name
     * @param string $routingType
     * @param string $mailboxType
     */
    public function __construct($key = null, $_ = null, $name = null, $routingType = null, $mailboxType = null)
    {
        $this
            ->setKey($key)
            ->set_($_)
            ->setName($name)
            ->setRoutingType($routingType)
            ->setMailboxType($mailboxType);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey()
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @uses \Ews\EnumType\EwsEmailAddressKeyType::valueIsValid()
     * @uses \Ews\EnumType\EwsEmailAddressKeyType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $key
     * @return \Ews\StructType\EwsEmailAddressDictionaryEntryType
     */
    public function setKey($key = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsEmailAddressKeyType::valueIsValid($key)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsEmailAddressKeyType', is_array($key) ? implode(', ', $key) : var_export($key, true), implode(', ', \Ews\EnumType\EwsEmailAddressKeyType::getValidValues())), __LINE__);
        }
        $this->Key = $key;
        return $this;
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Ews\StructType\EwsEmailAddressDictionaryEntryType
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
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
     * @return \Ews\StructType\EwsEmailAddressDictionaryEntryType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
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
     * @return \Ews\StructType\EwsEmailAddressDictionaryEntryType
     */
    public function setRoutingType($routingType = null)
    {
        // validation for constraint: string
        if (!is_null($routingType) && !is_string($routingType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routingType, true), gettype($routingType)), __LINE__);
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
     * @return \Ews\StructType\EwsEmailAddressDictionaryEntryType
     */
    public function setMailboxType($mailboxType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsMailboxTypeType::valueIsValid($mailboxType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsMailboxTypeType', is_array($mailboxType) ? implode(', ', $mailboxType) : var_export($mailboxType, true), implode(', ', \Ews\EnumType\EwsMailboxTypeType::getValidValues())), __LINE__);
        }
        $this->MailboxType = $mailboxType;
        return $this;
    }
}
