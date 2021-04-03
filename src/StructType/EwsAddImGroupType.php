<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddImGroupType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAddImGroupType extends EwsBaseRequestType
{
    /**
     * The DisplayName
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * @var string|null
     */
    protected ?string $DisplayName = null;
    /**
     * Constructor method for AddImGroupType
     * @uses EwsAddImGroupType::setDisplayName()
     * @param string $displayName
     */
    public function __construct(?string $displayName = null)
    {
        $this
            ->setDisplayName($displayName);
    }
    /**
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName(): ?string
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \StructType\EwsAddImGroupType
     */
    public function setDisplayName(?string $displayName = null): self
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($displayName) && mb_strlen((string) $displayName) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        
        return $this;
    }
}
