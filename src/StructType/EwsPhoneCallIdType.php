<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhoneCallIdType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPhoneCallIdType extends AbstractStructBase
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Id;
    /**
     * Constructor method for PhoneCallIdType
     * @uses EwsPhoneCallIdType::setId()
     * @param string $id
     */
    public function __construct(string $id)
    {
        $this
            ->setId($id);
    }
    /**
     * Get Id value
     * @return string
     */
    public function getId(): string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \StructType\EwsPhoneCallIdType
     */
    public function setId(string $id): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
}
