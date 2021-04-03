<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserConfigurationNameType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUserConfigurationNameType extends EwsTargetFolderIdType
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * - use: required
     * @var string
     */
    protected string $Name;
    /**
     * Constructor method for UserConfigurationNameType
     * @uses EwsUserConfigurationNameType::setName()
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this
            ->setName($name);
    }
    /**
     * Get Name value
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\EwsUserConfigurationNameType
     */
    public function setName(string $name): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($name) && mb_strlen((string) $name) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
}
