<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DistinguishedFolderIdType StructType
 * Meta information extracted from the WSDL
 * - documentation: Identifier for a distinguished folder
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDistinguishedFolderIdType extends EwsBaseFolderIdType
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Id;
    /**
     * The Mailbox
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsEmailAddressType
     */
    public $Mailbox;
    /**
     * The ChangeKey
     * Meta information extracted from the WSDL
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
     * @throws \InvalidArgumentException
     * @param string $id
     * @return \Ews\StructType\EwsDistinguishedFolderIdType
     */
    public function setId($id = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsDistinguishedFolderIdNameType::valueIsValid($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsDistinguishedFolderIdNameType', is_array($id) ? implode(', ', $id) : var_export($id, true), implode(', ', \Ews\EnumType\EwsDistinguishedFolderIdNameType::getValidValues())), __LINE__);
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
        // validation for constraint: string
        if (!is_null($changeKey) && !is_string($changeKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($changeKey, true), gettype($changeKey)), __LINE__);
        }
        $this->ChangeKey = $changeKey;
        return $this;
    }
}
