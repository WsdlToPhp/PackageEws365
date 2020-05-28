<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonEmptyArrayOfBaseFolderIdsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfBaseFolderIdsType extends AbstractStructBase
{
    /**
     * The FolderId
     * Meta information extracted from the WSDL
     * - choice: FolderId | DistinguishedFolderId
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsFolderIdType
     */
    public $FolderId;
    /**
     * The DistinguishedFolderId
     * Meta information extracted from the WSDL
     * - choice: FolderId | DistinguishedFolderId
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsDistinguishedFolderIdType
     */
    public $DistinguishedFolderId;
    /**
     * Constructor method for NonEmptyArrayOfBaseFolderIdsType
     * @uses EwsNonEmptyArrayOfBaseFolderIdsType::setFolderId()
     * @uses EwsNonEmptyArrayOfBaseFolderIdsType::setDistinguishedFolderId()
     * @param \Ews\StructType\EwsFolderIdType $folderId
     * @param \Ews\StructType\EwsDistinguishedFolderIdType $distinguishedFolderId
     */
    public function __construct(\Ews\StructType\EwsFolderIdType $folderId = null, \Ews\StructType\EwsDistinguishedFolderIdType $distinguishedFolderId = null)
    {
        $this
            ->setFolderId($folderId)
            ->setDistinguishedFolderId($distinguishedFolderId);
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType
     */
    public function setFolderId(\Ews\StructType\EwsFolderIdType $folderId = null)
    {
        // validation for constraint: choice(FolderId, DistinguishedFolderId)
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
     * @return \Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType
     */
    public function setDistinguishedFolderId(\Ews\StructType\EwsDistinguishedFolderIdType $distinguishedFolderId = null)
    {
        // validation for constraint: choice(FolderId, DistinguishedFolderId)
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
}
