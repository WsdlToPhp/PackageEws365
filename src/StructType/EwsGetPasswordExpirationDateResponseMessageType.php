<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $PasswordExpirationDate = null;
    /**
     * Constructor method for GetPasswordExpirationDateResponseMessageType
     * @uses EwsGetPasswordExpirationDateResponseMessageType::setPasswordExpirationDate()
     * @param string $passwordExpirationDate
     */
    public function __construct(?string $passwordExpirationDate = null)
    {
        $this
            ->setPasswordExpirationDate($passwordExpirationDate);
    }
    /**
     * Get PasswordExpirationDate value
     * @return string|null
     */
    public function getPasswordExpirationDate(): ?string
    {
        return $this->PasswordExpirationDate;
    }
    /**
     * Set PasswordExpirationDate value
     * @param string $passwordExpirationDate
     * @return \StructType\EwsGetPasswordExpirationDateResponseMessageType
     */
    public function setPasswordExpirationDate(?string $passwordExpirationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($passwordExpirationDate) && !is_string($passwordExpirationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passwordExpirationDate, true), gettype($passwordExpirationDate)), __LINE__);
        }
        $this->PasswordExpirationDate = $passwordExpirationDate;
        
        return $this;
    }
}
