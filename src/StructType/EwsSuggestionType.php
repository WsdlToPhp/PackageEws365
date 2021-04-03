<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuggestionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSuggestionType extends AbstractStructBase
{
    /**
     * The SuggestedQuery
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $SuggestedQuery;
    /**
     * The DisplayText
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DisplayText;
    /**
     * The SuggestionType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $SuggestionType;
    /**
     * The Trigger
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Trigger = null;
    /**
     * The TDSuggestionId
     * @var int|null
     */
    protected ?int $TDSuggestionId = null;
    /**
     * The IsDeletable
     * @var bool|null
     */
    protected ?bool $IsDeletable = null;
    /**
     * Constructor method for SuggestionType
     * @uses EwsSuggestionType::setSuggestedQuery()
     * @uses EwsSuggestionType::setDisplayText()
     * @uses EwsSuggestionType::setSuggestionType()
     * @uses EwsSuggestionType::setTrigger()
     * @uses EwsSuggestionType::setTDSuggestionId()
     * @uses EwsSuggestionType::setIsDeletable()
     * @param string $suggestedQuery
     * @param string $displayText
     * @param array|string $suggestionType
     * @param string $trigger
     * @param int $tDSuggestionId
     * @param bool $isDeletable
     */
    public function __construct(string $suggestedQuery, string $displayText, $suggestionType, ?string $trigger = null, ?int $tDSuggestionId = null, ?bool $isDeletable = null)
    {
        $this
            ->setSuggestedQuery($suggestedQuery)
            ->setDisplayText($displayText)
            ->setSuggestionType($suggestionType)
            ->setTrigger($trigger)
            ->setTDSuggestionId($tDSuggestionId)
            ->setIsDeletable($isDeletable);
    }
    /**
     * Get SuggestedQuery value
     * @return string
     */
    public function getSuggestedQuery(): string
    {
        return $this->SuggestedQuery;
    }
    /**
     * Set SuggestedQuery value
     * @param string $suggestedQuery
     * @return \StructType\EwsSuggestionType
     */
    public function setSuggestedQuery(string $suggestedQuery): self
    {
        // validation for constraint: string
        if (!is_null($suggestedQuery) && !is_string($suggestedQuery)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($suggestedQuery, true), gettype($suggestedQuery)), __LINE__);
        }
        $this->SuggestedQuery = $suggestedQuery;
        
        return $this;
    }
    /**
     * Get DisplayText value
     * @return string
     */
    public function getDisplayText(): string
    {
        return $this->DisplayText;
    }
    /**
     * Set DisplayText value
     * @param string $displayText
     * @return \StructType\EwsSuggestionType
     */
    public function setDisplayText(string $displayText): self
    {
        // validation for constraint: string
        if (!is_null($displayText) && !is_string($displayText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayText, true), gettype($displayText)), __LINE__);
        }
        $this->DisplayText = $displayText;
        
        return $this;
    }
    /**
     * Get SuggestionType value
     * @return string
     */
    public function getSuggestionType(): string
    {
        return $this->SuggestionType;
    }
    /**
     * This method is responsible for validating the values passed to the setSuggestionType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSuggestionType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSuggestionTypeForArrayConstraintsFromSetSuggestionType(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $suggestionTypeSuggestionTypeItem) {
            // validation for constraint: enumeration
            if (!\EnumType\EwsSuggestionKindType::valueIsValid($suggestionTypeSuggestionTypeItem)) {
                $invalidValues[] = is_object($suggestionTypeSuggestionTypeItem) ? get_class($suggestionTypeSuggestionTypeItem) : sprintf('%s(%s)', gettype($suggestionTypeSuggestionTypeItem), var_export($suggestionTypeSuggestionTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsSuggestionKindType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\EwsSuggestionKindType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SuggestionType value
     * @uses \EnumType\EwsSuggestionKindType::valueIsValid()
     * @uses \EnumType\EwsSuggestionKindType::getValidValues()
     * @throws InvalidArgumentException
     * @param array|string $suggestionType
     * @return \StructType\EwsSuggestionType
     */
    public function setSuggestionType($suggestionType): self
    {
        // validation for constraint: list
        if ('' !== ($suggestionTypeArrayErrorMessage = self::validateSuggestionTypeForArrayConstraintsFromSetSuggestionType(is_string($suggestionType) ? explode(' ', $suggestionType) : $suggestionType))) {
            throw new InvalidArgumentException($suggestionTypeArrayErrorMessage, __LINE__);
        }
        $this->SuggestionType = is_array($suggestionType) ? implode(' ', $suggestionType) : $suggestionType;
        
        return $this;
    }
    /**
     * Get Trigger value
     * @return string|null
     */
    public function getTrigger(): ?string
    {
        return $this->Trigger;
    }
    /**
     * Set Trigger value
     * @param string $trigger
     * @return \StructType\EwsSuggestionType
     */
    public function setTrigger(?string $trigger = null): self
    {
        // validation for constraint: string
        if (!is_null($trigger) && !is_string($trigger)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trigger, true), gettype($trigger)), __LINE__);
        }
        $this->Trigger = $trigger;
        
        return $this;
    }
    /**
     * Get TDSuggestionId value
     * @return int|null
     */
    public function getTDSuggestionId(): ?int
    {
        return $this->TDSuggestionId;
    }
    /**
     * Set TDSuggestionId value
     * @param int $tDSuggestionId
     * @return \StructType\EwsSuggestionType
     */
    public function setTDSuggestionId(?int $tDSuggestionId = null): self
    {
        // validation for constraint: int
        if (!is_null($tDSuggestionId) && !(is_int($tDSuggestionId) || ctype_digit($tDSuggestionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tDSuggestionId, true), gettype($tDSuggestionId)), __LINE__);
        }
        $this->TDSuggestionId = $tDSuggestionId;
        
        return $this;
    }
    /**
     * Get IsDeletable value
     * @return bool|null
     */
    public function getIsDeletable(): ?bool
    {
        return $this->IsDeletable;
    }
    /**
     * Set IsDeletable value
     * @param bool $isDeletable
     * @return \StructType\EwsSuggestionType
     */
    public function setIsDeletable(?bool $isDeletable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDeletable) && !is_bool($isDeletable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDeletable, true), gettype($isDeletable)), __LINE__);
        }
        $this->IsDeletable = $isDeletable;
        
        return $this;
    }
}
