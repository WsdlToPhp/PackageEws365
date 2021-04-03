<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisableAppType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDisableAppType extends EwsBaseRequestType
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $ID;
    /**
     * The DisableReason
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DisableReason;
    /**
     * Constructor method for DisableAppType
     * @uses EwsDisableAppType::setID()
     * @uses EwsDisableAppType::setDisableReason()
     * @param string $iD
     * @param string $disableReason
     */
    public function __construct(string $iD, string $disableReason)
    {
        $this
            ->setID($iD)
            ->setDisableReason($disableReason);
    }
    /**
     * Get ID value
     * @return string
     */
    public function getID(): string
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \StructType\EwsDisableAppType
     */
    public function setID(string $iD): self
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        
        return $this;
    }
    /**
     * Get DisableReason value
     * @return string
     */
    public function getDisableReason(): string
    {
        return $this->DisableReason;
    }
    /**
     * Set DisableReason value
     * @uses \EnumType\EwsDisableReasonType::valueIsValid()
     * @uses \EnumType\EwsDisableReasonType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $disableReason
     * @return \StructType\EwsDisableAppType
     */
    public function setDisableReason(string $disableReason): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsDisableReasonType::valueIsValid($disableReason)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsDisableReasonType', is_array($disableReason) ? implode(', ', $disableReason) : var_export($disableReason, true), implode(', ', \EnumType\EwsDisableReasonType::getValidValues())), __LINE__);
        }
        $this->DisableReason = $disableReason;
        
        return $this;
    }
}
