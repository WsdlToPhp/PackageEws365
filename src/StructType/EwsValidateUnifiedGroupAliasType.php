<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateUnifiedGroupAliasType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsValidateUnifiedGroupAliasType extends EwsBaseRequestType
{
    /**
     * The Alias
     * @var string|null
     */
    protected ?string $Alias = null;
    /**
     * Constructor method for ValidateUnifiedGroupAliasType
     * @uses EwsValidateUnifiedGroupAliasType::setAlias()
     * @param string $alias
     */
    public function __construct(?string $alias = null)
    {
        $this
            ->setAlias($alias);
    }
    /**
     * Get Alias value
     * @return string|null
     */
    public function getAlias(): ?string
    {
        return $this->Alias;
    }
    /**
     * Set Alias value
     * @param string $alias
     * @return \StructType\EwsValidateUnifiedGroupAliasType
     */
    public function setAlias(?string $alias = null): self
    {
        // validation for constraint: string
        if (!is_null($alias) && !is_string($alias)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($alias, true), gettype($alias)), __LINE__);
        }
        $this->Alias = $alias;
        
        return $this;
    }
}
