<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetentionTagType StructType
 * Meta information extracted from the WSDL
 * - documentation: The regular expression captures the standard representation of a GUID
 * - base: xs:string
 * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRetentionTagType extends AbstractStructBase
{
    /**
     * The IsExplicit
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $IsExplicit;
    /**
     * The _
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string|null
     */
    protected ?string $_ = null;
    /**
     * Constructor method for RetentionTagType
     * @uses EwsRetentionTagType::setIsExplicit()
     * @uses EwsRetentionTagType::set_()
     * @param bool $isExplicit
     * @param string $_
     */
    public function __construct(bool $isExplicit, ?string $_ = null)
    {
        $this
            ->setIsExplicit($isExplicit)
            ->set_($_);
    }
    /**
     * Get IsExplicit value
     * @return bool
     */
    public function getIsExplicit(): bool
    {
        return $this->IsExplicit;
    }
    /**
     * Set IsExplicit value
     * @param bool $isExplicit
     * @return \StructType\EwsRetentionTagType
     */
    public function setIsExplicit(bool $isExplicit): self
    {
        // validation for constraint: boolean
        if (!is_null($isExplicit) && !is_bool($isExplicit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isExplicit, true), gettype($isExplicit)), __LINE__);
        }
        $this->IsExplicit = $isExplicit;
        
        return $this;
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_(): ?string
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \StructType\EwsRetentionTagType
     */
    public function set_(?string $_ = null): self
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($_) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $_)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($_, true)), __LINE__);
        }
        $this->_ = $_;
        
        return $this;
    }
}
