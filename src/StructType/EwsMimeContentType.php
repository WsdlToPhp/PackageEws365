<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MimeContentType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMimeContentType extends AbstractStructBase
{
    /**
     * The _
     * @var string|null
     */
    protected ?string $_ = null;
    /**
     * The CharacterSet
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $CharacterSet = null;
    /**
     * Constructor method for MimeContentType
     * @uses EwsMimeContentType::set_()
     * @uses EwsMimeContentType::setCharacterSet()
     * @param string $_
     * @param string $characterSet
     */
    public function __construct(?string $_ = null, ?string $characterSet = null)
    {
        $this
            ->set_($_)
            ->setCharacterSet($characterSet);
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
     * @return \StructType\EwsMimeContentType
     */
    public function set_(?string $_ = null): self
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        $this->_ = $_;
        
        return $this;
    }
    /**
     * Get CharacterSet value
     * @return string|null
     */
    public function getCharacterSet(): ?string
    {
        return $this->CharacterSet;
    }
    /**
     * Set CharacterSet value
     * @param string $characterSet
     * @return \StructType\EwsMimeContentType
     */
    public function setCharacterSet(?string $characterSet = null): self
    {
        // validation for constraint: string
        if (!is_null($characterSet) && !is_string($characterSet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($characterSet, true), gettype($characterSet)), __LINE__);
        }
        $this->CharacterSet = $characterSet;
        
        return $this;
    }
}
