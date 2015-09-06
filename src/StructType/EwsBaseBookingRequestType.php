<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseBookingRequestType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
abstract class EwsBaseBookingRequestType extends EwsBaseRequestType
{
    /**
     * The TargetMailbox
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Identifier for a fully resolved email address
     * @var \Ews\StructType\EwsEmailAddressType
     */
    public $TargetMailbox;
    /**
     * Constructor method for BaseBookingRequestType
     * @uses EwsBaseBookingRequestType::setTargetMailbox()
     * @param \Ews\StructType\EwsEmailAddressType $targetMailbox
     */
    public function __construct(\Ews\StructType\EwsEmailAddressType $targetMailbox = null)
    {
        $this
            ->setTargetMailbox($targetMailbox);
    }
    /**
     * Get TargetMailbox value
     * @return \Ews\StructType\EwsEmailAddressType|null
     */
    public function getTargetMailbox()
    {
        return $this->TargetMailbox;
    }
    /**
     * Set TargetMailbox value
     * @param \Ews\StructType\EwsEmailAddressType $targetMailbox
     * @return \Ews\StructType\EwsBaseBookingRequestType
     */
    public function setTargetMailbox(\Ews\StructType\EwsEmailAddressType $targetMailbox = null)
    {
        $this->TargetMailbox = $targetMailbox;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsBaseBookingRequestType
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
