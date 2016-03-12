<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PeopleSuggestionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPeopleSuggestionType extends EwsSuggestionType
{
    /**
     * The PrimarySmtpAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $PrimarySmtpAddress;
    /**
     * The PersonType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PersonType;
    /**
     * Constructor method for PeopleSuggestionType
     * @uses EwsPeopleSuggestionType::setPrimarySmtpAddress()
     * @uses EwsPeopleSuggestionType::setPersonType()
     * @param string $primarySmtpAddress
     * @param string $personType
     */
    public function __construct($primarySmtpAddress = null, $personType = null)
    {
        $this
            ->setPrimarySmtpAddress($primarySmtpAddress)
            ->setPersonType($personType);
    }
    /**
     * Get PrimarySmtpAddress value
     * @return string
     */
    public function getPrimarySmtpAddress()
    {
        return $this->PrimarySmtpAddress;
    }
    /**
     * Set PrimarySmtpAddress value
     * @param string $primarySmtpAddress
     * @return \Ews\StructType\EwsPeopleSuggestionType
     */
    public function setPrimarySmtpAddress($primarySmtpAddress = null)
    {
        // validation for constraint: string
        if (!is_null($primarySmtpAddress) && !is_string($primarySmtpAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($primarySmtpAddress)), __LINE__);
        }
        $this->PrimarySmtpAddress = $primarySmtpAddress;
        return $this;
    }
    /**
     * Get PersonType value
     * @return string|null
     */
    public function getPersonType()
    {
        return $this->PersonType;
    }
    /**
     * Set PersonType value
     * @param string $personType
     * @return \Ews\StructType\EwsPeopleSuggestionType
     */
    public function setPersonType($personType = null)
    {
        // validation for constraint: string
        if (!is_null($personType) && !is_string($personType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($personType)), __LINE__);
        }
        $this->PersonType = $personType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsPeopleSuggestionType
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
