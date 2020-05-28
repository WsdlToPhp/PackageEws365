<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegisterConsentType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRegisterConsentType extends EwsBaseRequestType
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Id;
    /**
     * The ConsentState
     * Meta information extracted from the WSDL
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
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
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
     * @throws \InvalidArgumentException
     * @param string $consentState
     * @return \Ews\StructType\EwsRegisterConsentType
     */
    public function setConsentState($consentState = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsConsentStateType::valueIsValid($consentState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsConsentStateType', is_array($consentState) ? implode(', ', $consentState) : var_export($consentState, true), implode(', ', \Ews\EnumType\EwsConsentStateType::getValidValues())), __LINE__);
        }
        $this->ConsentState = $consentState;
        return $this;
    }
}
