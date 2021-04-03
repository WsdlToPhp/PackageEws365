<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TargetFolderIdType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsTargetFolderIdType extends AbstractStructBase
{
    /**
     * The FolderId
     * Meta information extracted from the WSDL
     * - choice: FolderId | DistinguishedFolderId | AddressListId | ConsumerCalendarId
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \StructType\EwsFolderIdType|null
     */
    protected ?\StructType\EwsFolderIdType $FolderId = null;
    /**
     * The DistinguishedFolderId
     * Meta information extracted from the WSDL
     * - choice: FolderId | DistinguishedFolderId | AddressListId | ConsumerCalendarId
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \StructType\EwsDistinguishedFolderIdType|null
     */
    protected ?\StructType\EwsDistinguishedFolderIdType $DistinguishedFolderId = null;
    /**
     * The AddressListId
     * Meta information extracted from the WSDL
     * - choice: FolderId | DistinguishedFolderId | AddressListId | ConsumerCalendarId
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \StructType\EwsAddressListIdType|null
     */
    protected ?\StructType\EwsAddressListIdType $AddressListId = null;
    /**
     * The ConsumerCalendarId
     * Meta information extracted from the WSDL
     * - choice: FolderId | DistinguishedFolderId | AddressListId | ConsumerCalendarId
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \StructType\EwsConsumerCalendarIdType|null
     */
    protected ?\StructType\EwsConsumerCalendarIdType $ConsumerCalendarId = null;
    /**
     * Constructor method for TargetFolderIdType
     * @uses EwsTargetFolderIdType::setFolderId()
     * @uses EwsTargetFolderIdType::setDistinguishedFolderId()
     * @uses EwsTargetFolderIdType::setAddressListId()
     * @uses EwsTargetFolderIdType::setConsumerCalendarId()
     * @param \StructType\EwsFolderIdType $folderId
     * @param \StructType\EwsDistinguishedFolderIdType $distinguishedFolderId
     * @param \StructType\EwsAddressListIdType $addressListId
     * @param \StructType\EwsConsumerCalendarIdType $consumerCalendarId
     */
    public function __construct(?\StructType\EwsFolderIdType $folderId = null, ?\StructType\EwsDistinguishedFolderIdType $distinguishedFolderId = null, ?\StructType\EwsAddressListIdType $addressListId = null, ?\StructType\EwsConsumerCalendarIdType $consumerCalendarId = null)
    {
        $this
            ->setFolderId($folderId)
            ->setDistinguishedFolderId($distinguishedFolderId)
            ->setAddressListId($addressListId)
            ->setConsumerCalendarId($consumerCalendarId);
    }
    /**
     * Get FolderId value
     * @return \StructType\EwsFolderIdType|null
     */
    public function getFolderId(): ?\StructType\EwsFolderIdType
    {
        return isset($this->FolderId) ? $this->FolderId : null;
    }
    /**
     * This method is responsible for validating the value passed to the setFolderId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFolderId method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateFolderIdForChoiceConstraintsFromSetFolderId($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DistinguishedFolderId',
            'AddressListId',
            'ConsumerCalendarId',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property FolderId can\'t be set as the property %s is already set. Only one property must be set among these properties: FolderId, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set FolderId value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsFolderIdType $folderId
     * @return \StructType\EwsTargetFolderIdType
     */
    public function setFolderId(?\StructType\EwsFolderIdType $folderId = null): self
    {
        // validation for constraint: choice(FolderId, DistinguishedFolderId, AddressListId, ConsumerCalendarId)
        if ('' !== ($folderIdChoiceErrorMessage = self::validateFolderIdForChoiceConstraintsFromSetFolderId($folderId))) {
            throw new InvalidArgumentException($folderIdChoiceErrorMessage, __LINE__);
        }
        if (is_null($folderId) || (is_array($folderId) && empty($folderId))) {
            unset($this->FolderId);
        } else {
            $this->FolderId = $folderId;
        }
        
        return $this;
    }
    /**
     * Get DistinguishedFolderId value
     * @return \StructType\EwsDistinguishedFolderIdType|null
     */
    public function getDistinguishedFolderId(): ?\StructType\EwsDistinguishedFolderIdType
    {
        return isset($this->DistinguishedFolderId) ? $this->DistinguishedFolderId : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDistinguishedFolderId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDistinguishedFolderId method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDistinguishedFolderIdForChoiceConstraintsFromSetDistinguishedFolderId($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'FolderId',
            'AddressListId',
            'ConsumerCalendarId',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property DistinguishedFolderId can\'t be set as the property %s is already set. Only one property must be set among these properties: DistinguishedFolderId, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set DistinguishedFolderId value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsDistinguishedFolderIdType $distinguishedFolderId
     * @return \StructType\EwsTargetFolderIdType
     */
    public function setDistinguishedFolderId(?\StructType\EwsDistinguishedFolderIdType $distinguishedFolderId = null): self
    {
        // validation for constraint: choice(FolderId, DistinguishedFolderId, AddressListId, ConsumerCalendarId)
        if ('' !== ($distinguishedFolderIdChoiceErrorMessage = self::validateDistinguishedFolderIdForChoiceConstraintsFromSetDistinguishedFolderId($distinguishedFolderId))) {
            throw new InvalidArgumentException($distinguishedFolderIdChoiceErrorMessage, __LINE__);
        }
        if (is_null($distinguishedFolderId) || (is_array($distinguishedFolderId) && empty($distinguishedFolderId))) {
            unset($this->DistinguishedFolderId);
        } else {
            $this->DistinguishedFolderId = $distinguishedFolderId;
        }
        
        return $this;
    }
    /**
     * Get AddressListId value
     * @return \StructType\EwsAddressListIdType|null
     */
    public function getAddressListId(): ?\StructType\EwsAddressListIdType
    {
        return isset($this->AddressListId) ? $this->AddressListId : null;
    }
    /**
     * This method is responsible for validating the value passed to the setAddressListId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAddressListId method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAddressListIdForChoiceConstraintsFromSetAddressListId($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'FolderId',
            'DistinguishedFolderId',
            'ConsumerCalendarId',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AddressListId can\'t be set as the property %s is already set. Only one property must be set among these properties: AddressListId, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AddressListId value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsAddressListIdType $addressListId
     * @return \StructType\EwsTargetFolderIdType
     */
    public function setAddressListId(?\StructType\EwsAddressListIdType $addressListId = null): self
    {
        // validation for constraint: choice(FolderId, DistinguishedFolderId, AddressListId, ConsumerCalendarId)
        if ('' !== ($addressListIdChoiceErrorMessage = self::validateAddressListIdForChoiceConstraintsFromSetAddressListId($addressListId))) {
            throw new InvalidArgumentException($addressListIdChoiceErrorMessage, __LINE__);
        }
        if (is_null($addressListId) || (is_array($addressListId) && empty($addressListId))) {
            unset($this->AddressListId);
        } else {
            $this->AddressListId = $addressListId;
        }
        
        return $this;
    }
    /**
     * Get ConsumerCalendarId value
     * @return \StructType\EwsConsumerCalendarIdType|null
     */
    public function getConsumerCalendarId(): ?\StructType\EwsConsumerCalendarIdType
    {
        return isset($this->ConsumerCalendarId) ? $this->ConsumerCalendarId : null;
    }
    /**
     * This method is responsible for validating the value passed to the setConsumerCalendarId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setConsumerCalendarId method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateConsumerCalendarIdForChoiceConstraintsFromSetConsumerCalendarId($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'FolderId',
            'DistinguishedFolderId',
            'AddressListId',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property ConsumerCalendarId can\'t be set as the property %s is already set. Only one property must be set among these properties: ConsumerCalendarId, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set ConsumerCalendarId value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsConsumerCalendarIdType $consumerCalendarId
     * @return \StructType\EwsTargetFolderIdType
     */
    public function setConsumerCalendarId(?\StructType\EwsConsumerCalendarIdType $consumerCalendarId = null): self
    {
        // validation for constraint: choice(FolderId, DistinguishedFolderId, AddressListId, ConsumerCalendarId)
        if ('' !== ($consumerCalendarIdChoiceErrorMessage = self::validateConsumerCalendarIdForChoiceConstraintsFromSetConsumerCalendarId($consumerCalendarId))) {
            throw new InvalidArgumentException($consumerCalendarIdChoiceErrorMessage, __LINE__);
        }
        if (is_null($consumerCalendarId) || (is_array($consumerCalendarId) && empty($consumerCalendarId))) {
            unset($this->ConsumerCalendarId);
        } else {
            $this->ConsumerCalendarId = $consumerCalendarId;
        }
        
        return $this;
    }
}
