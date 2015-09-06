<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DistinguishedFolderIdType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifier for a distinguished folder
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDistinguishedFolderIdType extends EwsBaseFolderIdType
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - use: required
     * - documentation: URIs for the distinguished folders accessible from a mailbox
     * @var string
     */
    public $Id;
    /**
     * The Mailbox
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Identifier for a fully resolved email address
     * @var \Ews\StructType\EwsEmailAddressType
     */
    public $Mailbox;
    /**
     * The ChangeKey
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ChangeKey;
    /**
     * Constructor method for DistinguishedFolderIdType
     * @uses EwsDistinguishedFolderIdType::setId()
     * @uses EwsDistinguishedFolderIdType::setMailbox()
     * @uses EwsDistinguishedFolderIdType::setChangeKey()
     * @param string $id
     * @param \Ews\StructType\EwsEmailAddressType $mailbox
     * @param string $changeKey
     */
    public function __construct($id = null, \Ews\StructType\EwsEmailAddressType $mailbox = null, $changeKey = null)
    {
        $this
            ->setId($id)
            ->setMailbox($mailbox)
            ->setChangeKey($changeKey);
    }
    /**
     * Get Id value
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @uses \Ews\EnumType\EwsDistinguishedFolderIdNameType::valueIsValid()
     * @uses \Ews\EnumType\EwsDistinguishedFolderIdNameType::getValidValues()
     * @param string $id
     * @return \Ews\StructType\EwsDistinguishedFolderIdType
     */
    public function setId($id = null)
    {
        if (!\Ews\EnumType\EwsDistinguishedFolderIdNameType::valueIsValid($id)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $id, implode(', ', \Ews\EnumType\EwsDistinguishedFolderIdNameType::getValidValues())), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get Mailbox value
     * @return \Ews\StructType\EwsEmailAddressType|null
     */
    public function getMailbox()
    {
        return $this->Mailbox;
    }
    /**
     * Set Mailbox value
     * @param \Ews\StructType\EwsEmailAddressType $mailbox
     * @return \Ews\StructType\EwsDistinguishedFolderIdType
     */
    public function setMailbox(\Ews\StructType\EwsEmailAddressType $mailbox = null)
    {
        $this->Mailbox = $mailbox;
        return $this;
    }
    /**
     * Get ChangeKey value
     * @return string|null
     */
    public function getChangeKey()
    {
        return $this->ChangeKey;
    }
    /**
     * Set ChangeKey value
     * @param string $changeKey
     * @return \Ews\StructType\EwsDistinguishedFolderIdType
     */
    public function setChangeKey($changeKey = null)
    {
        $this->ChangeKey = $changeKey;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsDistinguishedFolderIdType
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
