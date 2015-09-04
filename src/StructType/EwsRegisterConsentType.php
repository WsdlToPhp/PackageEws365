<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegisterConsentType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsRegisterConsentType extends EwsBaseRequestType
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Id;
    /**
     * The ConsentState
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ConsentState;
    /**
     * Constructor method for RegisterConsentType
     * @uses EwsRegisterConsentType::setId()
     * @uses EwsRegisterConsentType::setConsentState()
     * @param string $id
     * @param string $consentState
     */
    public function __construct($id = null, $consentState = null)
    {
        $this
            ->setId($id)
            ->setConsentState($consentState);
    }
    /**
     * Get Id value
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Ews\StructType\EwsRegisterConsentType
     */
    public function setId($id = null)
    {
        $this->Id = $id;
        return $this;
    }
    /**
     * Get ConsentState value
     * @return string
     */
    public function getConsentState()
    {
        return $this->ConsentState;
    }
    /**
     * Set ConsentState value
     * @uses \Ews\EnumType\EwsConsentStateType::valueIsValid()
     * @uses \Ews\EnumType\EwsConsentStateType::getValidValues()
     * @param string $consentState
     * @return \Ews\StructType\EwsRegisterConsentType
     */
    public function setConsentState($consentState = null)
    {
        if (!\Ews\EnumType\EwsConsentStateType::valueIsValid($consentState)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $consentState, implode(', ', \Ews\EnumType\EwsConsentStateType::getValidValues())), __LINE__);
        }
        $this->ConsentState = $consentState;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsRegisterConsentType
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
