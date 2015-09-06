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
     * Meta informations extracted from the WSDL
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
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Name;
    /**
     * The RoutingType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $RoutingType;
    /**
     * The MailboxType
     * Meta informations extracted from the WSDL
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
     * @param string $key
     * @return \Ews\StructType\EwsEmailAddressDictionaryEntryType
     */
    public function setKey($key = null)
    {
        if (!\Ews\EnumType\EwsEmailAddressKeyType::valueIsValid($key)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $key, implode(', ', \Ews\EnumType\EwsEmailAddressKeyType::getValidValues())), __LINE__);
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
     * @param string $mailboxType
     * @return \Ews\StructType\EwsEmailAddressDictionaryEntryType
     */
    public function setMailboxType($mailboxType = null)
    {
        if (!\Ews\EnumType\EwsMailboxTypeType::valueIsValid($mailboxType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $mailboxType, implode(', ', \Ews\EnumType\EwsMailboxTypeType::getValidValues())), __LINE__);
        }
        $this->MailboxType = $mailboxType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsEmailAddressDictionaryEntryType
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
