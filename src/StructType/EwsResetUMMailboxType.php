<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResetUMMailboxType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsResetUMMailboxType extends EwsBaseRequestType
{
    /**
     * The KeepProperties
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $KeepProperties;
    /**
     * Constructor method for ResetUMMailboxType
     * @uses EwsResetUMMailboxType::setKeepProperties()
     * @param bool $keepProperties
     */
    public function __construct(bool $keepProperties)
    {
        $this
            ->setKeepProperties($keepProperties);
    }
    /**
     * Get KeepProperties value
     * @return bool
     */
    public function getKeepProperties(): bool
    {
        return $this->KeepProperties;
    }
    /**
     * Set KeepProperties value
     * @param bool $keepProperties
     * @return \StructType\EwsResetUMMailboxType
     */
    public function setKeepProperties(bool $keepProperties): self
    {
        // validation for constraint: boolean
        if (!is_null($keepProperties) && !is_bool($keepProperties)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($keepProperties, true), gettype($keepProperties)), __LINE__);
        }
        $this->KeepProperties = $keepProperties;
        
        return $this;
    }
}
