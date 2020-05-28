<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEncryptedSharedFolderDataType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfEncryptedSharedFolderDataType extends AbstractStructArrayBase
{
    /**
     * The EncryptedSharedFolderData
     * Meta information extracted from the WSDL
     * - choice: EncryptedSharedFolderData
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsEncryptedSharedFolderDataType
     */
    public $EncryptedSharedFolderData;
    /**
     * Constructor method for ArrayOfEncryptedSharedFolderDataType
     * @uses EwsArrayOfEncryptedSharedFolderDataType::setEncryptedSharedFolderData()
     * @param \Ews\StructType\EwsEncryptedSharedFolderDataType $encryptedSharedFolderData
     */
    public function __construct(\Ews\StructType\EwsEncryptedSharedFolderDataType $encryptedSharedFolderData = null)
    {
        $this
            ->setEncryptedSharedFolderData($encryptedSharedFolderData);
    }
    /**
     * Get EncryptedSharedFolderData value
     * @return \Ews\StructType\EwsEncryptedSharedFolderDataType|null
     */
    public function getEncryptedSharedFolderData()
    {
        return isset($this->EncryptedSharedFolderData) ? $this->EncryptedSharedFolderData : null;
    }
    /**
     * This method is responsible for validating the value passed to the setEncryptedSharedFolderData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEncryptedSharedFolderData method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateEncryptedSharedFolderDataForChoiceConstraintsFromSetEncryptedSharedFolderData($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property EncryptedSharedFolderData can\'t be set as the property %s is already set. Only one property must be set among these properties: EncryptedSharedFolderData, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set EncryptedSharedFolderData value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsEncryptedSharedFolderDataType $encryptedSharedFolderData
     * @return \Ews\ArrayType\EwsArrayOfEncryptedSharedFolderDataType
     */
    public function setEncryptedSharedFolderData(\Ews\StructType\EwsEncryptedSharedFolderDataType $encryptedSharedFolderData = null)
    {
        // validation for constraint: choice(EncryptedSharedFolderData)
        if ('' !== ($encryptedSharedFolderDataChoiceErrorMessage = self::validateEncryptedSharedFolderDataForChoiceConstraintsFromSetEncryptedSharedFolderData($encryptedSharedFolderData))) {
            throw new \InvalidArgumentException($encryptedSharedFolderDataChoiceErrorMessage, __LINE__);
        }
        if (is_null($encryptedSharedFolderData) || (is_array($encryptedSharedFolderData) && empty($encryptedSharedFolderData))) {
            unset($this->EncryptedSharedFolderData);
        } else {
            $this->EncryptedSharedFolderData = $encryptedSharedFolderData;
        }
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsEncryptedSharedFolderDataType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsEncryptedSharedFolderDataType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsEncryptedSharedFolderDataType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsEncryptedSharedFolderDataType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsEncryptedSharedFolderDataType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EncryptedSharedFolderData
     */
    public function getAttributeName()
    {
        return 'EncryptedSharedFolderData';
    }
}
