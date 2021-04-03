<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $TelUriAddress = null;
    /**
     * The ImContactSipUriAddress
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * @var string|null
     */
    protected ?string $ImContactSipUriAddress = null;
    /**
     * The ImTelephoneNumber
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * @var string|null
     */
    protected ?string $ImTelephoneNumber = null;
    /**
     * The GroupId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $GroupId = null;
    /**
     * Constructor method for AddNewTelUriContactToGroupType
     * @uses EwsAddNewTelUriContactToGroupType::setTelUriAddress()
     * @uses EwsAddNewTelUriContactToGroupType::setImContactSipUriAddress()
     * @uses EwsAddNewTelUriContactToGroupType::setImTelephoneNumber()
     * @uses EwsAddNewTelUriContactToGroupType::setGroupId()
     * @param string $telUriAddress
     * @param string $imContactSipUriAddress
     * @param string $imTelephoneNumber
     * @param \StructType\EwsItemIdType $groupId
     */
    public function __construct(?string $telUriAddress = null, ?string $imContactSipUriAddress = null, ?string $imTelephoneNumber = null, ?\StructType\EwsItemIdType $groupId = null)
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
    public function getTelUriAddress(): ?string
    {
        return $this->TelUriAddress;
    }
    /**
     * Set TelUriAddress value
     * @param string $telUriAddress
     * @return \StructType\EwsAddNewTelUriContactToGroupType
     */
    public function setTelUriAddress(?string $telUriAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($telUriAddress) && !is_string($telUriAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($telUriAddress, true), gettype($telUriAddress)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($telUriAddress) && mb_strlen((string) $telUriAddress) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $telUriAddress)), __LINE__);
        }
        $this->TelUriAddress = $telUriAddress;
        
        return $this;
    }
    /**
     * Get ImContactSipUriAddress value
     * @return string|null
     */
    public function getImContactSipUriAddress(): ?string
    {
        return $this->ImContactSipUriAddress;
    }
    /**
     * Set ImContactSipUriAddress value
     * @param string $imContactSipUriAddress
     * @return \StructType\EwsAddNewTelUriContactToGroupType
     */
    public function setImContactSipUriAddress(?string $imContactSipUriAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($imContactSipUriAddress) && !is_string($imContactSipUriAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($imContactSipUriAddress, true), gettype($imContactSipUriAddress)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($imContactSipUriAddress) && mb_strlen((string) $imContactSipUriAddress) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $imContactSipUriAddress)), __LINE__);
        }
        $this->ImContactSipUriAddress = $imContactSipUriAddress;
        
        return $this;
    }
    /**
     * Get ImTelephoneNumber value
     * @return string|null
     */
    public function getImTelephoneNumber(): ?string
    {
        return $this->ImTelephoneNumber;
    }
    /**
     * Set ImTelephoneNumber value
     * @param string $imTelephoneNumber
     * @return \StructType\EwsAddNewTelUriContactToGroupType
     */
    public function setImTelephoneNumber(?string $imTelephoneNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($imTelephoneNumber) && !is_string($imTelephoneNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($imTelephoneNumber, true), gettype($imTelephoneNumber)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($imTelephoneNumber) && mb_strlen((string) $imTelephoneNumber) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $imTelephoneNumber)), __LINE__);
        }
        $this->ImTelephoneNumber = $imTelephoneNumber;
        
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
     * @return \StructType\EwsAddNewTelUriContactToGroupType
     */
    public function setGroupId(?\StructType\EwsItemIdType $groupId = null): self
    {
        $this->GroupId = $groupId;
        
        return $this;
    }
}
