<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AbchEmailAddressDictionaryType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsAbchEmailAddressDictionaryType extends AbstractStructBase
{
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Ews\StructType\EwsAbchEmailAddressDictionaryEntryType
     */
    public $Email;
    /**
     * Constructor method for AbchEmailAddressDictionaryType
     * @uses EwsAbchEmailAddressDictionaryType::setEmail()
     * @param \Ews\StructType\EwsAbchEmailAddressDictionaryEntryType $email
     */
    public function __construct(\Ews\StructType\EwsAbchEmailAddressDictionaryEntryType $email = null)
    {
        $this
            ->setEmail($email);
    }
    /**
     * Get Email value
     * @return \Ews\StructType\EwsAbchEmailAddressDictionaryEntryType|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param \Ews\StructType\EwsAbchEmailAddressDictionaryEntryType $email
     * @return \Ews\StructType\EwsAbchEmailAddressDictionaryType
     */
    public function setEmail(\Ews\StructType\EwsAbchEmailAddressDictionaryEntryType $email = null)
    {
        $this->Email = $email;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsAbchEmailAddressDictionaryType
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
