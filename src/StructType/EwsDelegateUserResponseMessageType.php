<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DelegateUserResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsDelegateUserResponseMessageType extends EwsResponseMessageType
{
    /**
     * The DelegateUser
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsDelegateUserType
     */
    public $DelegateUser;
    /**
     * Constructor method for DelegateUserResponseMessageType
     * @uses EwsDelegateUserResponseMessageType::setDelegateUser()
     * @param \Ews\StructType\EwsDelegateUserType $delegateUser
     */
    public function __construct(\Ews\StructType\EwsDelegateUserType $delegateUser = null)
    {
        $this
            ->setDelegateUser($delegateUser);
    }
    /**
     * Get DelegateUser value
     * @return \Ews\StructType\EwsDelegateUserType|null
     */
    public function getDelegateUser()
    {
        return $this->DelegateUser;
    }
    /**
     * Set DelegateUser value
     * @param \Ews\StructType\EwsDelegateUserType $delegateUser
     * @return \Ews\StructType\EwsDelegateUserResponseMessageType
     */
    public function setDelegateUser(\Ews\StructType\EwsDelegateUserType $delegateUser = null)
    {
        $this->DelegateUser = $delegateUser;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsDelegateUserResponseMessageType
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
