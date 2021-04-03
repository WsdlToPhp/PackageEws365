<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QueryStringType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsQueryStringType extends AbstractStructBase
{
    /**
     * The _
     * @var string|null
     */
    protected ?string $_ = null;
    /**
     * The ResetCache
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ResetCache = null;
    /**
     * The ReturnHighlightTerms
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ReturnHighlightTerms = null;
    /**
     * The ReturnDeletedItems
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ReturnDeletedItems = null;
    /**
     * Constructor method for QueryStringType
     * @uses EwsQueryStringType::set_()
     * @uses EwsQueryStringType::setResetCache()
     * @uses EwsQueryStringType::setReturnHighlightTerms()
     * @uses EwsQueryStringType::setReturnDeletedItems()
     * @param string $_
     * @param bool $resetCache
     * @param bool $returnHighlightTerms
     * @param bool $returnDeletedItems
     */
    public function __construct(?string $_ = null, ?bool $resetCache = null, ?bool $returnHighlightTerms = null, ?bool $returnDeletedItems = null)
    {
        $this
            ->set_($_)
            ->setResetCache($resetCache)
            ->setReturnHighlightTerms($returnHighlightTerms)
            ->setReturnDeletedItems($returnDeletedItems);
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
     * @return \StructType\EwsQueryStringType
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
     * Get ResetCache value
     * @return bool|null
     */
    public function getResetCache(): ?bool
    {
        return $this->ResetCache;
    }
    /**
     * Set ResetCache value
     * @param bool $resetCache
     * @return \StructType\EwsQueryStringType
     */
    public function setResetCache(?bool $resetCache = null): self
    {
        // validation for constraint: boolean
        if (!is_null($resetCache) && !is_bool($resetCache)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($resetCache, true), gettype($resetCache)), __LINE__);
        }
        $this->ResetCache = $resetCache;
        
        return $this;
    }
    /**
     * Get ReturnHighlightTerms value
     * @return bool|null
     */
    public function getReturnHighlightTerms(): ?bool
    {
        return $this->ReturnHighlightTerms;
    }
    /**
     * Set ReturnHighlightTerms value
     * @param bool $returnHighlightTerms
     * @return \StructType\EwsQueryStringType
     */
    public function setReturnHighlightTerms(?bool $returnHighlightTerms = null): self
    {
        // validation for constraint: boolean
        if (!is_null($returnHighlightTerms) && !is_bool($returnHighlightTerms)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnHighlightTerms, true), gettype($returnHighlightTerms)), __LINE__);
        }
        $this->ReturnHighlightTerms = $returnHighlightTerms;
        
        return $this;
    }
    /**
     * Get ReturnDeletedItems value
     * @return bool|null
     */
    public function getReturnDeletedItems(): ?bool
    {
        return $this->ReturnDeletedItems;
    }
    /**
     * Set ReturnDeletedItems value
     * @param bool $returnDeletedItems
     * @return \StructType\EwsQueryStringType
     */
    public function setReturnDeletedItems(?bool $returnDeletedItems = null): self
    {
        // validation for constraint: boolean
        if (!is_null($returnDeletedItems) && !is_bool($returnDeletedItems)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnDeletedItems, true), gettype($returnDeletedItems)), __LINE__);
        }
        $this->ReturnDeletedItems = $returnDeletedItems;
        
        return $this;
    }
}
