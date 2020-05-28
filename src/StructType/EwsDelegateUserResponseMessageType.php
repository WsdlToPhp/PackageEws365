<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DelegateUserResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDelegateUserResponseMessageType extends EwsResponseMessageType
{
    /**
     * The DelegateUser
     * Meta information extracted from the WSDL
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
}
