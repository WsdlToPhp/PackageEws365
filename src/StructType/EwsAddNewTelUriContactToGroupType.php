<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddNewTelUriContactToGroupType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAddNewTelUriContactToGroupType extends EwsBaseRequestType
{
    /**
     * The TelUriAddress
     * Meta informations extracted from the WSDL
     * - minLength: 1
     * @var string
     */
    public $TelUriAddress;
    /**
     * The ImContactSipUriAddress
     * Meta informations extracted from the WSDL
     * - minLength: 1
     * @var string
     */
    public $ImContactSipUriAddress;
    /**
     * The ImTelephoneNumber
     * Meta informations extracted from the WSDL
     * - minLength: 1
     * @var string
     */
    public $ImTelephoneNumber;
    /**
     * The GroupId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsItemIdType
     */
    public $GroupId;
    /**
     * Constructor method for AddNewTelUriContactToGroupType
     * @uses EwsAddNewTelUriContactToGroupType::setTelUriAddress()
     * @uses EwsAddNewTelUriContactToGroupType::setImContactSipUriAddress()
     * @uses EwsAddNewTelUriContactToGroupType::setImTelephoneNumber()
     * @uses EwsAddNewTelUriContactToGroupType::setGroupId()
     * @param string $telUriAddress
     * @param string $imContactSipUriAddress
     * @param string $imTelephoneNumber
     * @param \Ews\StructType\EwsItemIdType $groupId
     */
    public function __construct($telUriAddress = null, $imContactSipUriAddress = null, $imTelephoneNumber = null, \Ews\StructType\EwsItemIdType $groupId = null)
    {
        $this
            ->setTelUriAddress($telUriAddress)
            ->setImContactSipUriAddress($imContactSipUriAddress)
            ->setImTelephoneNumber($imTelephoneNumber)
            ->setGroupId($groupId);
    }
    /**
     * Get TelUriAddress value
     * @return string|null
     */
    public function getTelUriAddress()
    {
        return $this->TelUriAddress;
    }
    /**
     * Set TelUriAddress value
     * @param string $telUriAddress
     * @return \Ews\StructType\EwsAddNewTelUriContactToGroupType
     */
    public function setTelUriAddress($telUriAddress = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($telUriAddress) && strlen($telUriAddress) < 1) || (is_array($telUriAddress) && count($telUriAddress) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($telUriAddress) && !is_string($telUriAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($telUriAddress)), __LINE__);
        }
        $this->TelUriAddress = $telUriAddress;
        return $this;
    }
    /**
     * Get ImContactSipUriAddress value
     * @return string|null
     */
    public function getImContactSipUriAddress()
    {
        return $this->ImContactSipUriAddress;
    }
    /**
     * Set ImContactSipUriAddress value
     * @param string $imContactSipUriAddress
     * @return \Ews\StructType\EwsAddNewTelUriContactToGroupType
     */
    public function setImContactSipUriAddress($imContactSipUriAddress = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($imContactSipUriAddress) && strlen($imContactSipUriAddress) < 1) || (is_array($imContactSipUriAddress) && count($imContactSipUriAddress) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($imContactSipUriAddress) && !is_string($imContactSipUriAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($imContactSipUriAddress)), __LINE__);
        }
        $this->ImContactSipUriAddress = $imContactSipUriAddress;
        return $this;
    }
    /**
     * Get ImTelephoneNumber value
     * @return string|null
     */
    public function getImTelephoneNumber()
    {
        return $this->ImTelephoneNumber;
    }
    /**
     * Set ImTelephoneNumber value
     * @param string $imTelephoneNumber
     * @return \Ews\StructType\EwsAddNewTelUriContactToGroupType
     */
    public function setImTelephoneNumber($imTelephoneNumber = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($imTelephoneNumber) && strlen($imTelephoneNumber) < 1) || (is_array($imTelephoneNumber) && count($imTelephoneNumber) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($imTelephoneNumber) && !is_string($imTelephoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($imTelephoneNumber)), __LINE__);
        }
        $this->ImTelephoneNumber = $imTelephoneNumber;
        return $this;
    }
    /**
     * Get GroupId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getGroupId()
    {
        return $this->GroupId;
    }
    /**
     * Set GroupId value
     * @param \Ews\StructType\EwsItemIdType $groupId
     * @return \Ews\StructType\EwsAddNewTelUriContactToGroupType
     */
    public function setGroupId(\Ews\StructType\EwsItemIdType $groupId = null)
    {
        $this->GroupId = $groupId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsAddNewTelUriContactToGroupType
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
