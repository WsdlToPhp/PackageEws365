<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressListIdType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifier for a address list
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAddressListIdType extends EwsBaseFolderIdType
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Id;
    /**
     * Constructor method for AddressListIdType
     * @uses EwsAddressListIdType::setId()
     * @param string $id
     */
    public function __construct($id = null)
    {
        $this
            ->setId($id);
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
     * @return \Ews\StructType\EwsAddressListIdType
     */
    public function setId($id = null)
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
     * @return \Ews\StructType\EwsAddressListIdType
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
