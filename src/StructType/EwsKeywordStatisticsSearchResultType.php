<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KeywordStatisticsSearchResultType StructType
 * Meta information extracted from the WSDL
 * - documentation: Keyword statistics search result.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsKeywordStatisticsSearchResultType extends AbstractStructBase
{
    /**
     * The Keyword
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Keyword;
    /**
     * The ItemHits
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $ItemHits;
    /**
     * The Size
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $Size;
    /**
     * Constructor method for KeywordStatisticsSearchResultType
     * @uses EwsKeywordStatisticsSearchResultType::setKeyword()
     * @uses EwsKeywordStatisticsSearchResultType::setItemHits()
     * @uses EwsKeywordStatisticsSearchResultType::setSize()
     * @param string $keyword
     * @param int $itemHits
     * @param int $size
     */
    public function __construct(string $keyword, int $itemHits, int $size)
    {
        $this
            ->setKeyword($keyword)
            ->setItemHits($itemHits)
            ->setSize($size);
    }
    /**
     * Get Keyword value
     * @return string
     */
    public function getKeyword(): string
    {
        return $this->Keyword;
    }
    /**
     * Set Keyword value
     * @param string $keyword
     * @return \StructType\EwsKeywordStatisticsSearchResultType
     */
    public function setKeyword(string $keyword): self
    {
        // validation for constraint: string
        if (!is_null($keyword) && !is_string($keyword)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($keyword, true), gettype($keyword)), __LINE__);
        }
        $this->Keyword = $keyword;
        
        return $this;
    }
    /**
     * Get ItemHits value
     * @return int
     */
    public function getItemHits(): int
    {
        return $this->ItemHits;
    }
    /**
     * Set ItemHits value
     * @param int $itemHits
     * @return \StructType\EwsKeywordStatisticsSearchResultType
     */
    public function setItemHits(int $itemHits): self
    {
        // validation for constraint: int
        if (!is_null($itemHits) && !(is_int($itemHits) || ctype_digit($itemHits))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemHits, true), gettype($itemHits)), __LINE__);
        }
        $this->ItemHits = $itemHits;
        
        return $this;
    }
    /**
     * Get Size value
     * @return int
     */
    public function getSize(): int
    {
        return $this->Size;
    }
    /**
     * Set Size value
     * @param int $size
     * @return \StructType\EwsKeywordStatisticsSearchResultType
     */
    public function setSize(int $size): self
    {
        // validation for constraint: int
        if (!is_null($size) && !(is_int($size) || ctype_digit($size))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($size, true), gettype($size)), __LINE__);
        }
        $this->Size = $size;
        
        return $this;
    }
}
