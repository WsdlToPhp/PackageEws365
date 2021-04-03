<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $ImAddress = null;
    /**
     * The DisplayName
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisplayName = null;
    /**
     * The GroupId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $GroupId = null;
    /**
     * Constructor method for AddNewImContactToGroupType
     * @uses EwsAddNewImContactToGroupType::setImAddress()
     * @uses EwsAddNewImContactToGroupType::setDisplayName()
     * @uses EwsAddNewImContactToGroupType::setGroupId()
     * @param string $imAddress
     * @param string $displayName
     * @param \StructType\EwsItemIdType $groupId
     */
    public function __construct(?string $imAddress = null, ?string $displayName = null, ?\StructType\EwsItemIdType $groupId = null)
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
    public function getImAddress(): ?string
    {
        return $this->ImAddress;
    }
    /**
     * Set ImAddress value
     * @param string $imAddress
     * @return \StructType\EwsAddNewImContactToGroupType
     */
    public function setImAddress(?string $imAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($imAddress) && !is_string($imAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($imAddress, true), gettype($imAddress)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($imAddress) && mb_strlen((string) $imAddress) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $imAddress)), __LINE__);
        }
        $this->ImAddress = $imAddress;
        
        return $this;
    }
    /**
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName(): ?string
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \StructType\EwsAddNewImContactToGroupType
     */
    public function setDisplayName(?string $displayName = null): self
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($displayName) && mb_strlen((string) $displayName) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        
        return $this;
    }
    /**
     * Get GroupId value
     * @return \StructType\EwsItemIdType|null
     */
    public function getGroupId(): ?\StructType\EwsItemIdType
    {
        return $this->GroupId;
    }
    /**
     * Set GroupId value
     * @param \StructType\EwsItemIdType $groupId
     * @return \StructType\EwsAddNewImContactToGroupType
     */
    public function setGroupId(?\StructType\EwsItemIdType $groupId = null): self
    {
        $this->GroupId = $groupId;
        
        return $this;
    }
}
