<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
    public $ID;
    /**
     * The DisableReason
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $DisableReason;
    /**
     * Constructor method for DisableAppType
     * @uses EwsDisableAppType::setID()
     * @uses EwsDisableAppType::setDisableReason()
     * @param string $iD
     * @param string $disableReason
     */
    public function __construct($iD = null, $disableReason = null)
    {
        $this
            ->setID($iD)
            ->setDisableReason($disableReason);
    }
    /**
     * Get ID value
     * @return string
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \Ews\StructType\EwsDisableAppType
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get DisableReason value
     * @return string
     */
    public function getDisableReason()
    {
        return $this->DisableReason;
    }
    /**
     * Set DisableReason value
     * @uses \Ews\EnumType\EwsDisableReasonType::valueIsValid()
     * @uses \Ews\EnumType\EwsDisableReasonType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $disableReason
     * @return \Ews\StructType\EwsDisableAppType
     */
    public function setDisableReason($disableReason = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsDisableReasonType::valueIsValid($disableReason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsDisableReasonType', is_array($disableReason) ? implode(', ', $disableReason) : var_export($disableReason, true), implode(', ', \Ews\EnumType\EwsDisableReasonType::getValidValues())), __LINE__);
        }
        $this->DisableReason = $disableReason;
        return $this;
    }
}
