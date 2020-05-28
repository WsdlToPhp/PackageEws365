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
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * @var string
     */
    public $TelUriAddress;
    /**
     * The ImContactSipUriAddress
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * @var string
     */
    public $ImContactSipUriAddress;
    /**
     * The ImTelephoneNumber
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * @var string
     */
    public $ImTelephoneNumber;
    /**
     * The GroupId
     * Meta information extracted from the WSDL
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
        // validation for constraint: string
        if (!is_null($telUriAddress) && !is_string($telUriAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($telUriAddress, true), gettype($telUriAddress)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($telUriAddress) && mb_strlen($telUriAddress) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($telUriAddress)), __LINE__);
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
        // validation for constraint: string
        if (!is_null($imContactSipUriAddress) && !is_string($imContactSipUriAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($imContactSipUriAddress, true), gettype($imContactSipUriAddress)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($imContactSipUriAddress) && mb_strlen($imContactSipUriAddress) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($imContactSipUriAddress)), __LINE__);
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
        // validation for constraint: string
        if (!is_null($imTelephoneNumber) && !is_string($imTelephoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($imTelephoneNumber, true), gettype($imTelephoneNumber)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($imTelephoneNumber) && mb_strlen($imTelephoneNumber) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($imTelephoneNumber)), __LINE__);
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
}
