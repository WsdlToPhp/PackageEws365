<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string
     */
    public $Alias;
    /**
     * Constructor method for ValidateUnifiedGroupAliasType
     * @uses EwsValidateUnifiedGroupAliasType::setAlias()
     * @param string $alias
     */
    public function __construct($alias = null)
    {
        $this
            ->setAlias($alias);
    }
    /**
     * Get Alias value
     * @return string|null
     */
    public function getAlias()
    {
        return $this->Alias;
    }
    /**
     * Set Alias value
     * @param string $alias
     * @return \Ews\StructType\EwsValidateUnifiedGroupAliasType
     */
    public function setAlias($alias = null)
    {
        // validation for constraint: string
        if (!is_null($alias) && !is_string($alias)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($alias, true), gettype($alias)), __LINE__);
        }
        $this->Alias = $alias;
        return $this;
    }
}
