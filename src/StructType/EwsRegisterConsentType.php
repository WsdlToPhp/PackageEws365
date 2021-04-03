<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected string $Id;
    /**
     * The ConsentState
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $ConsentState;
    /**
     * Constructor method for RegisterConsentType
     * @uses EwsRegisterConsentType::setId()
     * @uses EwsRegisterConsentType::setConsentState()
     * @param string $id
     * @param string $consentState
     */
    public function __construct(string $id, string $consentState)
    {
        $this
            ->setId($id)
            ->setConsentState($consentState);
    }
    /**
     * Get Id value
     * @return string
     */
    public function getId(): string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \StructType\EwsRegisterConsentType
     */
    public function setId(string $id): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get ConsentState value
     * @return string
     */
    public function getConsentState(): string
    {
        return $this->ConsentState;
    }
    /**
     * Set ConsentState value
     * @uses \EnumType\EwsConsentStateType::valueIsValid()
     * @uses \EnumType\EwsConsentStateType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $consentState
     * @return \StructType\EwsRegisterConsentType
     */
    public function setConsentState(string $consentState): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsConsentStateType::valueIsValid($consentState)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsConsentStateType', is_array($consentState) ? implode(', ', $consentState) : var_export($consentState, true), implode(', ', \EnumType\EwsConsentStateType::getValidValues())), __LINE__);
        }
        $this->ConsentState = $consentState;
        
        return $this;
    }
}
