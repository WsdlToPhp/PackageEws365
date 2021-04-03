<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactPropertySuggestionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsContactPropertySuggestionType extends EwsBaseRequestType
{
    /**
     * The QueryString
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $QueryString;
    /**
     * The MaxResultsCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaxResultsCount = null;
    /**
     * Constructor method for ContactPropertySuggestionType
     * @uses EwsContactPropertySuggestionType::setQueryString()
     * @uses EwsContactPropertySuggestionType::setMaxResultsCount()
     * @param string $queryString
     * @param int $maxResultsCount
     */
    public function __construct(string $queryString, ?int $maxResultsCount = null)
    {
        $this
            ->setQueryString($queryString)
            ->setMaxResultsCount($maxResultsCount);
    }
    /**
     * Get QueryString value
     * @return string
     */
    public function getQueryString(): string
    {
        return $this->QueryString;
    }
    /**
     * Set QueryString value
     * @param string $queryString
     * @return \StructType\EwsContactPropertySuggestionType
     */
    public function setQueryString(string $queryString): self
    {
        // validation for constraint: string
        if (!is_null($queryString) && !is_string($queryString)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($queryString, true), gettype($queryString)), __LINE__);
        }
        $this->QueryString = $queryString;
        
        return $this;
    }
    /**
     * Get MaxResultsCount value
     * @return int|null
     */
    public function getMaxResultsCount(): ?int
    {
        return $this->MaxResultsCount;
    }
    /**
     * Set MaxResultsCount value
     * @param int $maxResultsCount
     * @return \StructType\EwsContactPropertySuggestionType
     */
    public function setMaxResultsCount(?int $maxResultsCount = null): self
    {
        // validation for constraint: int
        if (!is_null($maxResultsCount) && !(is_int($maxResultsCount) || ctype_digit($maxResultsCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxResultsCount, true), gettype($maxResultsCount)), __LINE__);
        }
        $this->MaxResultsCount = $maxResultsCount;
        
        return $this;
    }
}
