<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DirectoryEntryType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsDirectoryEntryType extends AbstractStructBase
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Identifier for a fully resolved email address
     * @var \Ews\StructType\EwsEmailAddressType
     */
    public $Id;
    /**
     * Constructor method for DirectoryEntryType
     * @uses EwsDirectoryEntryType::setId()
     * @param \Ews\StructType\EwsEmailAddressType $id
     */
    public function __construct(\Ews\StructType\EwsEmailAddressType $id = null)
    {
        $this
            ->setId($id);
    }
    /**
     * Get Id value
     * @return \Ews\StructType\EwsEmailAddressType|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param \Ews\StructType\EwsEmailAddressType $id
     * @return \Ews\StructType\EwsDirectoryEntryType
     */
    public function setId(\Ews\StructType\EwsEmailAddressType $id = null)
    {
        $this->Id = $id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsDirectoryEntryType
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
