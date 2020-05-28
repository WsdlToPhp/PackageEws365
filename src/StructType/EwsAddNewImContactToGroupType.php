<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddNewImContactToGroupType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAddNewImContactToGroupType extends EwsBaseRequestType
{
    /**
     * The ImAddress
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * @var string
     */
    public $ImAddress;
    /**
     * The DisplayName
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $DisplayName;
    /**
     * The GroupId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsItemIdType
     */
    public $GroupId;
    /**
     * Constructor method for AddNewImContactToGroupType
     * @uses EwsAddNewImContactToGroupType::setImAddress()
     * @uses EwsAddNewImContactToGroupType::setDisplayName()
     * @uses EwsAddNewImContactToGroupType::setGroupId()
     * @param string $imAddress
     * @param string $displayName
     * @param \Ews\StructType\EwsItemIdType $groupId
     */
    public function __construct($imAddress = null, $displayName = null, \Ews\StructType\EwsItemIdType $groupId = null)
    {
        $this
            ->setImAddress($imAddress)
            ->setDisplayName($displayName)
            ->setGroupId($groupId);
    }
    /**
     * Get ImAddress value
     * @return string|null
     */
    public function getImAddress()
    {
        return $this->ImAddress;
    }
    /**
     * Set ImAddress value
     * @param string $imAddress
     * @return \Ews\StructType\EwsAddNewImContactToGroupType
     */
    public function setImAddress($imAddress = null)
    {
        // validation for constraint: string
        if (!is_null($imAddress) && !is_string($imAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($imAddress, true), gettype($imAddress)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($imAddress) && mb_strlen($imAddress) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($imAddress)), __LINE__);
        }
        $this->ImAddress = $imAddress;
        return $this;
    }
    /**
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \Ews\StructType\EwsAddNewImContactToGroupType
     */
    public function setDisplayName($displayName = null)
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($displayName) && mb_strlen($displayName) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
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
     * @return \Ews\StructType\EwsAddNewImContactToGroupType
     */
    public function setGroupId(\Ews\StructType\EwsItemIdType $groupId = null)
    {
        $this->GroupId = $groupId;
        return $this;
    }
}
