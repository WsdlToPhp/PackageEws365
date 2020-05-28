<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPasswordExpirationDateResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetPasswordExpirationDateResponseMessageType extends EwsResponseMessageType
{
    /**
     * The PasswordExpirationDate
     * @var string
     */
    public $PasswordExpirationDate;
    /**
     * Constructor method for GetPasswordExpirationDateResponseMessageType
     * @uses EwsGetPasswordExpirationDateResponseMessageType::setPasswordExpirationDate()
     * @param string $passwordExpirationDate
     */
    public function __construct($passwordExpirationDate = null)
    {
        $this
            ->setPasswordExpirationDate($passwordExpirationDate);
    }
    /**
     * Get PasswordExpirationDate value
     * @return string|null
     */
    public function getPasswordExpirationDate()
    {
        return $this->PasswordExpirationDate;
    }
    /**
     * Set PasswordExpirationDate value
     * @param string $passwordExpirationDate
     * @return \Ews\StructType\EwsGetPasswordExpirationDateResponseMessageType
     */
    public function setPasswordExpirationDate($passwordExpirationDate = null)
    {
        // validation for constraint: string
        if (!is_null($passwordExpirationDate) && !is_string($passwordExpirationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passwordExpirationDate, true), gettype($passwordExpirationDate)), __LINE__);
        }
        $this->PasswordExpirationDate = $passwordExpirationDate;
        return $this;
    }
}
