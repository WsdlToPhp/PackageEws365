<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AlternateIdType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Represents an alternate mailbox folder or item Id.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAlternateIdType extends EwsAlternateIdBaseType
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Id;
    /**
     * The Mailbox
     * Meta informations extracted from the WSDL
     * - use: required
     * - minLength: 1
     * @var string
     */
    public $Mailbox;
    /**
     * The IsArchive
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var boolean
     */
    public $IsArchive;
    /**
     * Constructor method for AlternateIdType
     * @uses EwsAlternateIdType::setId()
     * @uses EwsAlternateIdType::setMailbox()
     * @uses EwsAlternateIdType::setIsArchive()
     * @param string $id
     * @param string $mailbox
     * @param boolean $isArchive
     */
    public function __construct($id = null, $mailbox = null, $isArchive = null)
    {
        $this
            ->setId($id)
            ->setMailbox($mailbox)
            ->setIsArchive($isArchive);
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
     * @param string $id
     * @return \Ews\StructType\EwsAlternateIdType
     */
    public function setId($id = null)
    {
        $this->Id = $id;
        return $this;
    }
    /**
     * Get Mailbox value
     * @return string
     */
    public function getMailbox()
    {
        return $this->Mailbox;
    }
    /**
     * Set Mailbox value
     * @param string $mailbox
     * @return \Ews\StructType\EwsAlternateIdType
     */
    public function setMailbox($mailbox = null)
    {
        $this->Mailbox = $mailbox;
        return $this;
    }
    /**
     * Get IsArchive value
     * @return boolean|null
     */
    public function getIsArchive()
    {
        return $this->IsArchive;
    }
    /**
     * Set IsArchive value
     * @param boolean $isArchive
     * @return \Ews\StructType\EwsAlternateIdType
     */
    public function setIsArchive($isArchive = null)
    {
        $this->IsArchive = $isArchive;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsAlternateIdType
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
