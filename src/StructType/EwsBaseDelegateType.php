<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseDelegateType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
abstract class EwsBaseDelegateType extends EwsBaseRequestType
{
    /**
     * The Mailbox
     * @var \Ews\StructType\EwsEmailAddressType
     */
    public $Mailbox;
    /**
     * Constructor method for BaseDelegateType
     * @uses EwsBaseDelegateType::setMailbox()
     * @param \Ews\StructType\EwsEmailAddressType $mailbox
     */
    public function __construct(\Ews\StructType\EwsEmailAddressType $mailbox = null)
    {
        $this
            ->setMailbox($mailbox);
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
     * @return \Ews\StructType\EwsBaseDelegateType
     */
    public function setMailbox(\Ews\StructType\EwsEmailAddressType $mailbox = null)
    {
        $this->Mailbox = $mailbox;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsBaseDelegateType
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
