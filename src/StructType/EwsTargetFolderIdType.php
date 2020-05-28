<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsFolderIdType
     */
    public $FolderId;
    /**
     * The DistinguishedFolderId
     * Meta information extracted from the WSDL
     * - choice: FolderId | DistinguishedFolderId | AddressListId | ConsumerCalendarId
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsDistinguishedFolderIdType
     */
    public $DistinguishedFolderId;
    /**
     * The AddressListId
     * Meta information extracted from the WSDL
     * - choice: FolderId | DistinguishedFolderId | AddressListId | ConsumerCalendarId
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsAddressListIdType
     */
    public $AddressListId;
    /**
     * The ConsumerCalendarId
     * Meta information extracted from the WSDL
     * - choice: FolderId | DistinguishedFolderId | AddressListId | ConsumerCalendarId
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsConsumerCalendarIdType
     */
    public $ConsumerCalendarId;
    /**
     * Constructor method for TargetFolderIdType
     * @uses EwsTargetFolderIdType::setFolderId()
     * @uses EwsTargetFolderIdType::setDistinguishedFolderId()
     * @uses EwsTargetFolderIdType::setAddressListId()
     * @uses EwsTargetFolderIdType::setConsumerCalendarId()
     * @param \Ews\StructType\EwsFolderIdType $folderId
     * @param \Ews\StructType\EwsDistinguishedFolderIdType $distinguishedFolderId
     * @param \Ews\StructType\EwsAddressListIdType $addressListId
     * @param \Ews\StructType\EwsConsumerCalendarIdType $consumerCalendarId
     */
    public function __construct(\Ews\StructType\EwsFolderIdType $folderId = null, \Ews\StructType\EwsDistinguishedFolderIdType $distinguishedFolderId = null, \Ews\StructType\EwsAddressListIdType $addressListId = null, \Ews\StructType\EwsConsumerCalendarIdType $consumerCalendarId = null)
    {
        $this
            ->setFolderId($folderId)
            ->setDistinguishedFolderId($distinguishedFolderId)
            ->setAddressListId($addressListId)
            ->setConsumerCalendarId($consumerCalendarId);
    }
    /**
     * Get FolderId value
     * @return \Ews\StructType\EwsFolderIdType|null
     */
    public function getFolderId()
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
    public function validateFolderIdForChoiceConstraintsFromSetFolderId($value)
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
                    throw new \InvalidArgumentException(sprintf('The property FolderId can\'t be set as the property %s is already set. Only one property must be set among these properties: FolderId, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set FolderId value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFolderIdType $folderId
     * @return \Ews\StructType\EwsTargetFolderIdType
     */
    public function setFolderId(\Ews\StructType\EwsFolderIdType $folderId = null)
    {
        // validation for constraint: choice(FolderId, DistinguishedFolderId, AddressListId, ConsumerCalendarId)
        if ('' !== ($folderIdChoiceErrorMessage = self::validateFolderIdForChoiceConstraintsFromSetFolderId($folderId))) {
            throw new \InvalidArgumentException($folderIdChoiceErrorMessage, __LINE__);
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
     * @return \Ews\StructType\EwsDistinguishedFolderIdType|null
     */
    public function getDistinguishedFolderId()
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
    public function validateDistinguishedFolderIdForChoiceConstraintsFromSetDistinguishedFolderId($value)
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
                    throw new \InvalidArgumentException(sprintf('The property DistinguishedFolderId can\'t be set as the property %s is already set. Only one property must be set among these properties: DistinguishedFolderId, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set DistinguishedFolderId value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsDistinguishedFolderIdType $distinguishedFolderId
     * @return \Ews\StructType\EwsTargetFolderIdType
     */
    public function setDistinguishedFolderId(\Ews\StructType\EwsDistinguishedFolderIdType $distinguishedFolderId = null)
    {
        // validation for constraint: choice(FolderId, DistinguishedFolderId, AddressListId, ConsumerCalendarId)
        if ('' !== ($distinguishedFolderIdChoiceErrorMessage = self::validateDistinguishedFolderIdForChoiceConstraintsFromSetDistinguishedFolderId($distinguishedFolderId))) {
            throw new \InvalidArgumentException($distinguishedFolderIdChoiceErrorMessage, __LINE__);
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
     * @return \Ews\StructType\EwsAddressListIdType|null
     */
    public function getAddressListId()
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
    public function validateAddressListIdForChoiceConstraintsFromSetAddressListId($value)
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
                    throw new \InvalidArgumentException(sprintf('The property AddressListId can\'t be set as the property %s is already set. Only one property must be set among these properties: AddressListId, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set AddressListId value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsAddressListIdType $addressListId
     * @return \Ews\StructType\EwsTargetFolderIdType
     */
    public function setAddressListId(\Ews\StructType\EwsAddressListIdType $addressListId = null)
    {
        // validation for constraint: choice(FolderId, DistinguishedFolderId, AddressListId, ConsumerCalendarId)
        if ('' !== ($addressListIdChoiceErrorMessage = self::validateAddressListIdForChoiceConstraintsFromSetAddressListId($addressListId))) {
            throw new \InvalidArgumentException($addressListIdChoiceErrorMessage, __LINE__);
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
     * @return \Ews\StructType\EwsConsumerCalendarIdType|null
     */
    public function getConsumerCalendarId()
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
    public function validateConsumerCalendarIdForChoiceConstraintsFromSetConsumerCalendarId($value)
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
                    throw new \InvalidArgumentException(sprintf('The property ConsumerCalendarId can\'t be set as the property %s is already set. Only one property must be set among these properties: ConsumerCalendarId, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set ConsumerCalendarId value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsConsumerCalendarIdType $consumerCalendarId
     * @return \Ews\StructType\EwsTargetFolderIdType
     */
    public function setConsumerCalendarId(\Ews\StructType\EwsConsumerCalendarIdType $consumerCalendarId = null)
    {
        // validation for constraint: choice(FolderId, DistinguishedFolderId, AddressListId, ConsumerCalendarId)
        if ('' !== ($consumerCalendarIdChoiceErrorMessage = self::validateConsumerCalendarIdForChoiceConstraintsFromSetConsumerCalendarId($consumerCalendarId))) {
            throw new \InvalidArgumentException($consumerCalendarIdChoiceErrorMessage, __LINE__);
        }
        if (is_null($consumerCalendarId) || (is_array($consumerCalendarId) && empty($consumerCalendarId))) {
            unset($this->ConsumerCalendarId);
        } else {
            $this->ConsumerCalendarId = $consumerCalendarId;
        }
        return $this;
    }
}
