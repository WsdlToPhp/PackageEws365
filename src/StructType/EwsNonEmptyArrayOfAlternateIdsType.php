<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonEmptyArrayOfAlternateIdsType StructType
 * Meta information extracted from the WSDL
 * - documentation: A non-empty array of alternate Ids.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfAlternateIdsType extends AbstractStructBase
{
    /**
     * The AlternateId
     * Meta information extracted from the WSDL
     * - choice: AlternateId | AlternatePublicFolderId | AlternatePublicFolderItemId
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsAlternateIdType|null
     */
    protected ?\StructType\EwsAlternateIdType $AlternateId = null;
    /**
     * The AlternatePublicFolderId
     * Meta information extracted from the WSDL
     * - choice: AlternateId | AlternatePublicFolderId | AlternatePublicFolderItemId
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsAlternatePublicFolderIdType|null
     */
    protected ?\StructType\EwsAlternatePublicFolderIdType $AlternatePublicFolderId = null;
    /**
     * The AlternatePublicFolderItemId
     * Meta information extracted from the WSDL
     * - choice: AlternateId | AlternatePublicFolderId | AlternatePublicFolderItemId
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsAlternatePublicFolderItemIdType|null
     */
    protected ?\StructType\EwsAlternatePublicFolderItemIdType $AlternatePublicFolderItemId = null;
    /**
     * Constructor method for NonEmptyArrayOfAlternateIdsType
     * @uses EwsNonEmptyArrayOfAlternateIdsType::setAlternateId()
     * @uses EwsNonEmptyArrayOfAlternateIdsType::setAlternatePublicFolderId()
     * @uses EwsNonEmptyArrayOfAlternateIdsType::setAlternatePublicFolderItemId()
     * @param \StructType\EwsAlternateIdType $alternateId
     * @param \StructType\EwsAlternatePublicFolderIdType $alternatePublicFolderId
     * @param \StructType\EwsAlternatePublicFolderItemIdType $alternatePublicFolderItemId
     */
    public function __construct(?\StructType\EwsAlternateIdType $alternateId = null, ?\StructType\EwsAlternatePublicFolderIdType $alternatePublicFolderId = null, ?\StructType\EwsAlternatePublicFolderItemIdType $alternatePublicFolderItemId = null)
    {
        $this
            ->setAlternateId($alternateId)
            ->setAlternatePublicFolderId($alternatePublicFolderId)
            ->setAlternatePublicFolderItemId($alternatePublicFolderItemId);
    }
    /**
     * Get AlternateId value
     * @return \StructType\EwsAlternateIdType|null
     */
    public function getAlternateId(): ?\StructType\EwsAlternateIdType
    {
        return isset($this->AlternateId) ? $this->AlternateId : null;
    }
    /**
     * This method is responsible for validating the value passed to the setAlternateId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAlternateId method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAlternateIdForChoiceConstraintsFromSetAlternateId($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AlternatePublicFolderId',
            'AlternatePublicFolderItemId',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AlternateId can\'t be set as the property %s is already set. Only one property must be set among these properties: AlternateId, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AlternateId value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsAlternateIdType $alternateId
     * @return \StructType\EwsNonEmptyArrayOfAlternateIdsType
     */
    public function setAlternateId(?\StructType\EwsAlternateIdType $alternateId = null): self
    {
        // validation for constraint: choice(AlternateId, AlternatePublicFolderId, AlternatePublicFolderItemId)
        if ('' !== ($alternateIdChoiceErrorMessage = self::validateAlternateIdForChoiceConstraintsFromSetAlternateId($alternateId))) {
            throw new InvalidArgumentException($alternateIdChoiceErrorMessage, __LINE__);
        }
        if (is_null($alternateId) || (is_array($alternateId) && empty($alternateId))) {
            unset($this->AlternateId);
        } else {
            $this->AlternateId = $alternateId;
        }
        
        return $this;
    }
    /**
     * Get AlternatePublicFolderId value
     * @return \StructType\EwsAlternatePublicFolderIdType|null
     */
    public function getAlternatePublicFolderId(): ?\StructType\EwsAlternatePublicFolderIdType
    {
        return isset($this->AlternatePublicFolderId) ? $this->AlternatePublicFolderId : null;
    }
    /**
     * This method is responsible for validating the value passed to the setAlternatePublicFolderId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAlternatePublicFolderId method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAlternatePublicFolderIdForChoiceConstraintsFromSetAlternatePublicFolderId($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AlternateId',
            'AlternatePublicFolderItemId',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AlternatePublicFolderId can\'t be set as the property %s is already set. Only one property must be set among these properties: AlternatePublicFolderId, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AlternatePublicFolderId value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsAlternatePublicFolderIdType $alternatePublicFolderId
     * @return \StructType\EwsNonEmptyArrayOfAlternateIdsType
     */
    public function setAlternatePublicFolderId(?\StructType\EwsAlternatePublicFolderIdType $alternatePublicFolderId = null): self
    {
        // validation for constraint: choice(AlternateId, AlternatePublicFolderId, AlternatePublicFolderItemId)
        if ('' !== ($alternatePublicFolderIdChoiceErrorMessage = self::validateAlternatePublicFolderIdForChoiceConstraintsFromSetAlternatePublicFolderId($alternatePublicFolderId))) {
            throw new InvalidArgumentException($alternatePublicFolderIdChoiceErrorMessage, __LINE__);
        }
        if (is_null($alternatePublicFolderId) || (is_array($alternatePublicFolderId) && empty($alternatePublicFolderId))) {
            unset($this->AlternatePublicFolderId);
        } else {
            $this->AlternatePublicFolderId = $alternatePublicFolderId;
        }
        
        return $this;
    }
    /**
     * Get AlternatePublicFolderItemId value
     * @return \StructType\EwsAlternatePublicFolderItemIdType|null
     */
    public function getAlternatePublicFolderItemId(): ?\StructType\EwsAlternatePublicFolderItemIdType
    {
        return isset($this->AlternatePublicFolderItemId) ? $this->AlternatePublicFolderItemId : null;
    }
    /**
     * This method is responsible for validating the value passed to the setAlternatePublicFolderItemId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAlternatePublicFolderItemId method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAlternatePublicFolderItemIdForChoiceConstraintsFromSetAlternatePublicFolderItemId($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AlternateId',
            'AlternatePublicFolderId',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AlternatePublicFolderItemId can\'t be set as the property %s is already set. Only one property must be set among these properties: AlternatePublicFolderItemId, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AlternatePublicFolderItemId value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsAlternatePublicFolderItemIdType $alternatePublicFolderItemId
     * @return \StructType\EwsNonEmptyArrayOfAlternateIdsType
     */
    public function setAlternatePublicFolderItemId(?\StructType\EwsAlternatePublicFolderItemIdType $alternatePublicFolderItemId = null): self
    {
        // validation for constraint: choice(AlternateId, AlternatePublicFolderId, AlternatePublicFolderItemId)
        if ('' !== ($alternatePublicFolderItemIdChoiceErrorMessage = self::validateAlternatePublicFolderItemIdForChoiceConstraintsFromSetAlternatePublicFolderItemId($alternatePublicFolderItemId))) {
            throw new InvalidArgumentException($alternatePublicFolderItemIdChoiceErrorMessage, __LINE__);
        }
        if (is_null($alternatePublicFolderItemId) || (is_array($alternatePublicFolderItemId) && empty($alternatePublicFolderItemId))) {
            unset($this->AlternatePublicFolderItemId);
        } else {
            $this->AlternatePublicFolderItemId = $alternatePublicFolderItemId;
        }
        
        return $this;
    }
}
