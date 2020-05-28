<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchFolderScopeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSearchFolderScopeType extends AbstractStructBase
{
    /**
     * The FolderId
     * Meta information extracted from the WSDL
     * - choice: FolderId | WellKnownFolder
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsFolderIdType
     */
    public $FolderId;
    /**
     * The WellKnownFolder
     * Meta information extracted from the WSDL
     * - choice: FolderId | WellKnownFolder
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsDistinguishedFolderIdType
     */
    public $WellKnownFolder;
    /**
     * Constructor method for SearchFolderScopeType
     * @uses EwsSearchFolderScopeType::setFolderId()
     * @uses EwsSearchFolderScopeType::setWellKnownFolder()
     * @param \Ews\StructType\EwsFolderIdType $folderId
     * @param \Ews\StructType\EwsDistinguishedFolderIdType $wellKnownFolder
     */
    public function __construct(\Ews\StructType\EwsFolderIdType $folderId = null, \Ews\StructType\EwsDistinguishedFolderIdType $wellKnownFolder = null)
    {
        $this
            ->setFolderId($folderId)
            ->setWellKnownFolder($wellKnownFolder);
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
            'WellKnownFolder',
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
     * @return \Ews\StructType\EwsSearchFolderScopeType
     */
    public function setFolderId(\Ews\StructType\EwsFolderIdType $folderId = null)
    {
        // validation for constraint: choice(FolderId, WellKnownFolder)
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
     * Get WellKnownFolder value
     * @return \Ews\StructType\EwsDistinguishedFolderIdType|null
     */
    public function getWellKnownFolder()
    {
        return isset($this->WellKnownFolder) ? $this->WellKnownFolder : null;
    }
    /**
     * This method is responsible for validating the value passed to the setWellKnownFolder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWellKnownFolder method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateWellKnownFolderForChoiceConstraintsFromSetWellKnownFolder($value)
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
                    throw new \InvalidArgumentException(sprintf('The property WellKnownFolder can\'t be set as the property %s is already set. Only one property must be set among these properties: WellKnownFolder, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set WellKnownFolder value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsDistinguishedFolderIdType $wellKnownFolder
     * @return \Ews\StructType\EwsSearchFolderScopeType
     */
    public function setWellKnownFolder(\Ews\StructType\EwsDistinguishedFolderIdType $wellKnownFolder = null)
    {
        // validation for constraint: choice(FolderId, WellKnownFolder)
        if ('' !== ($wellKnownFolderChoiceErrorMessage = self::validateWellKnownFolderForChoiceConstraintsFromSetWellKnownFolder($wellKnownFolder))) {
            throw new \InvalidArgumentException($wellKnownFolderChoiceErrorMessage, __LINE__);
        }
        if (is_null($wellKnownFolder) || (is_array($wellKnownFolder) && empty($wellKnownFolder))) {
            unset($this->WellKnownFolder);
        } else {
            $this->WellKnownFolder = $wellKnownFolder;
        }
        return $this;
    }
}
