<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsDelegateUserType|null
     */
    protected ?\StructType\EwsDelegateUserType $DelegateUser = null;
    /**
     * Constructor method for DelegateUserResponseMessageType
     * @uses EwsDelegateUserResponseMessageType::setDelegateUser()
     * @param \StructType\EwsDelegateUserType $delegateUser
     */
    public function __construct(?\StructType\EwsDelegateUserType $delegateUser = null)
    {
        $this
            ->setDelegateUser($delegateUser);
    }
    /**
     * Get DelegateUser value
     * @return \StructType\EwsDelegateUserType|null
     */
    public function getDelegateUser(): ?\StructType\EwsDelegateUserType
    {
        return $this->DelegateUser;
    }
    /**
     * Set DelegateUser value
     * @param \StructType\EwsDelegateUserType $delegateUser
     * @return \StructType\EwsDelegateUserResponseMessageType
     */
    public function setDelegateUser(?\StructType\EwsDelegateUserType $delegateUser = null): self
    {
        $this->DelegateUser = $delegateUser;
        
        return $this;
    }
}
