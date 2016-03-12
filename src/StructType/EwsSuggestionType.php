<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SuggestedQuery;
    /**
     * The DisplayText
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $DisplayText;
    /**
     * The SuggestionType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SuggestionType;
    /**
     * The Trigger
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Trigger;
    /**
     * The TDSuggestionId
     * @var int
     */
    public $TDSuggestionId;
    /**
     * The IsDeletable
     * @var bool
     */
    public $IsDeletable;
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
     * @param string $suggestionType
     * @param string $trigger
     * @param int $tDSuggestionId
     * @param bool $isDeletable
     */
    public function __construct($suggestedQuery = null, $displayText = null, $suggestionType = null, $trigger = null, $tDSuggestionId = null, $isDeletable = null)
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
    public function getSuggestedQuery()
    {
        return $this->SuggestedQuery;
    }
    /**
     * Set SuggestedQuery value
     * @param string $suggestedQuery
     * @return \Ews\StructType\EwsSuggestionType
     */
    public function setSuggestedQuery($suggestedQuery = null)
    {
        // validation for constraint: string
        if (!is_null($suggestedQuery) && !is_string($suggestedQuery)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($suggestedQuery)), __LINE__);
        }
        $this->SuggestedQuery = $suggestedQuery;
        return $this;
    }
    /**
     * Get DisplayText value
     * @return string
     */
    public function getDisplayText()
    {
        return $this->DisplayText;
    }
    /**
     * Set DisplayText value
     * @param string $displayText
     * @return \Ews\StructType\EwsSuggestionType
     */
    public function setDisplayText($displayText = null)
    {
        // validation for constraint: string
        if (!is_null($displayText) && !is_string($displayText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($displayText)), __LINE__);
        }
        $this->DisplayText = $displayText;
        return $this;
    }
    /**
     * Get SuggestionType value
     * @return string
     */
    public function getSuggestionType()
    {
        return $this->SuggestionType;
    }
    /**
     * Set SuggestionType value
     * @uses \Ews\EnumType\EwsSuggestionKindType::valueIsValid()
     * @uses \Ews\EnumType\EwsSuggestionKindType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $suggestionType
     * @return \Ews\StructType\EwsSuggestionType
     */
    public function setSuggestionType($suggestionType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsSuggestionKindType::valueIsValid($suggestionType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $suggestionType, implode(', ', \Ews\EnumType\EwsSuggestionKindType::getValidValues())), __LINE__);
        }
        $this->SuggestionType = $suggestionType;
        return $this;
    }
    /**
     * Get Trigger value
     * @return string|null
     */
    public function getTrigger()
    {
        return $this->Trigger;
    }
    /**
     * Set Trigger value
     * @param string $trigger
     * @return \Ews\StructType\EwsSuggestionType
     */
    public function setTrigger($trigger = null)
    {
        // validation for constraint: string
        if (!is_null($trigger) && !is_string($trigger)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trigger)), __LINE__);
        }
        $this->Trigger = $trigger;
        return $this;
    }
    /**
     * Get TDSuggestionId value
     * @return int|null
     */
    public function getTDSuggestionId()
    {
        return $this->TDSuggestionId;
    }
    /**
     * Set TDSuggestionId value
     * @param int $tDSuggestionId
     * @return \Ews\StructType\EwsSuggestionType
     */
    public function setTDSuggestionId($tDSuggestionId = null)
    {
        // validation for constraint: int
        if (!is_null($tDSuggestionId) && !is_int($tDSuggestionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($tDSuggestionId)), __LINE__);
        }
        $this->TDSuggestionId = $tDSuggestionId;
        return $this;
    }
    /**
     * Get IsDeletable value
     * @return bool|null
     */
    public function getIsDeletable()
    {
        return $this->IsDeletable;
    }
    /**
     * Set IsDeletable value
     * @param bool $isDeletable
     * @return \Ews\StructType\EwsSuggestionType
     */
    public function setIsDeletable($isDeletable = null)
    {
        $this->IsDeletable = $isDeletable;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSuggestionType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
