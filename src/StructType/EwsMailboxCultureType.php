<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MailboxCultureType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Allow attributes in the soap namespace to be used here
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMailboxCultureType extends AbstractStructBase
{
    /**
     * The _
     * @var language
     */
    public $_;
    /**
     * Constructor method for MailboxCultureType
     * @uses EwsMailboxCultureType::set_()
     * @param language $_
     */
    public function __construct($_ = null)
    {
        $this
            ->set_($_);
    }
    /**
     * Get _ value
     * @return language|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param language $_
     * @return \Ews\StructType\EwsMailboxCultureType
     */
    public function set_($_ = null)
    {
        $this->_ = $_;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMailboxCultureType
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
