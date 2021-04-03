<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmailUserType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsEmailUserType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The UserId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UserId = null;
    /**
     * Constructor method for EmailUserType
     * @uses EwsEmailUserType::setName()
     * @uses EwsEmailUserType::setUserId()
     * @param string $name
     * @param string $userId
     */
    public function __construct(?string $name = null, ?string $userId = null)
    {
        $this
            ->setName($name)
            ->setUserId($userId);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\EwsEmailUserType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get UserId value
     * @return string|null
     */
    public function getUserId(): ?string
    {
        return $this->UserId;
    }
    /**
     * Set UserId value
     * @param string $userId
     * @return \StructType\EwsEmailUserType
     */
    public function setUserId(?string $userId = null): self
    {
        // validation for constraint: string
        if (!is_null($userId) && !is_string($userId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->UserId = $userId;
        
        return $this;
    }
}
