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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ID;
    /**
     * The DisableReason
     * Meta informations extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iD)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $disableReason, implode(', ', \Ews\EnumType\EwsDisableReasonType::getValidValues())), __LINE__);
        }
        $this->DisableReason = $disableReason;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsDisableAppType
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
