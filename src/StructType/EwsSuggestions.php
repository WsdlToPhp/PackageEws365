<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Suggestions StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSuggestions extends AbstractStructBase
{
    /**
     * The Suggestion
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSuggestionType
     */
    public $Suggestion;
    /**
     * Constructor method for Suggestions
     * @uses EwsSuggestions::setSuggestion()
     * @param \Ews\StructType\EwsSuggestionType $suggestion
     */
    public function __construct(\Ews\StructType\EwsSuggestionType $suggestion = null)
    {
        $this
            ->setSuggestion($suggestion);
    }
    /**
     * Get Suggestion value
     * @return \Ews\StructType\EwsSuggestionType|null
     */
    public function getSuggestion()
    {
        return $this->Suggestion;
    }
    /**
     * Set Suggestion value
     * @param \Ews\StructType\EwsSuggestionType $suggestion
     * @return \Ews\StructType\EwsSuggestions
     */
    public function setSuggestion(\Ews\StructType\EwsSuggestionType $suggestion = null)
    {
        $this->Suggestion = $suggestion;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSuggestions
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
