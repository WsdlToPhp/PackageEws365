<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArrayOfAttendeeConflictData StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfAttendeeConflictData extends AbstractStructBase
{
    /**
     * The UnknownAttendeeConflictData
     * Meta information extracted from the WSDL
     * - choice: UnknownAttendeeConflictData | IndividualAttendeeConflictData | TooBigGroupAttendeeConflictData | GroupAttendeeConflictData
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\EwsUnknownAttendeeConflictData
     */
    protected \StructType\EwsUnknownAttendeeConflictData $UnknownAttendeeConflictData;
    /**
     * The IndividualAttendeeConflictData
     * Meta information extracted from the WSDL
     * - choice: UnknownAttendeeConflictData | IndividualAttendeeConflictData | TooBigGroupAttendeeConflictData | GroupAttendeeConflictData
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\EwsIndividualAttendeeConflictData
     */
    protected \StructType\EwsIndividualAttendeeConflictData $IndividualAttendeeConflictData;
    /**
     * The TooBigGroupAttendeeConflictData
     * Meta information extracted from the WSDL
     * - choice: UnknownAttendeeConflictData | IndividualAttendeeConflictData | TooBigGroupAttendeeConflictData | GroupAttendeeConflictData
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\EwsTooBigGroupAttendeeConflictData
     */
    protected \StructType\EwsTooBigGroupAttendeeConflictData $TooBigGroupAttendeeConflictData;
    /**
     * The GroupAttendeeConflictData
     * Meta information extracted from the WSDL
     * - choice: UnknownAttendeeConflictData | IndividualAttendeeConflictData | TooBigGroupAttendeeConflictData | GroupAttendeeConflictData
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\EwsGroupAttendeeConflictData
     */
    protected \StructType\EwsGroupAttendeeConflictData $GroupAttendeeConflictData;
    /**
     * Constructor method for ArrayOfAttendeeConflictData
     * @uses EwsArrayOfAttendeeConflictData::setUnknownAttendeeConflictData()
     * @uses EwsArrayOfAttendeeConflictData::setIndividualAttendeeConflictData()
     * @uses EwsArrayOfAttendeeConflictData::setTooBigGroupAttendeeConflictData()
     * @uses EwsArrayOfAttendeeConflictData::setGroupAttendeeConflictData()
     * @param \StructType\EwsUnknownAttendeeConflictData $unknownAttendeeConflictData
     * @param \StructType\EwsIndividualAttendeeConflictData $individualAttendeeConflictData
     * @param \StructType\EwsTooBigGroupAttendeeConflictData $tooBigGroupAttendeeConflictData
     * @param \StructType\EwsGroupAttendeeConflictData $groupAttendeeConflictData
     */
    public function __construct(\StructType\EwsUnknownAttendeeConflictData $unknownAttendeeConflictData, \StructType\EwsIndividualAttendeeConflictData $individualAttendeeConflictData, \StructType\EwsTooBigGroupAttendeeConflictData $tooBigGroupAttendeeConflictData, \StructType\EwsGroupAttendeeConflictData $groupAttendeeConflictData)
    {
        $this
            ->setUnknownAttendeeConflictData($unknownAttendeeConflictData)
            ->setIndividualAttendeeConflictData($individualAttendeeConflictData)
            ->setTooBigGroupAttendeeConflictData($tooBigGroupAttendeeConflictData)
            ->setGroupAttendeeConflictData($groupAttendeeConflictData);
    }
    /**
     * Get UnknownAttendeeConflictData value
     * @return \StructType\EwsUnknownAttendeeConflictData
     */
    public function getUnknownAttendeeConflictData(): \StructType\EwsUnknownAttendeeConflictData
    {
        return isset($this->UnknownAttendeeConflictData) ? $this->UnknownAttendeeConflictData : null;
    }
    /**
     * This method is responsible for validating the value passed to the setUnknownAttendeeConflictData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnknownAttendeeConflictData method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateUnknownAttendeeConflictDataForChoiceConstraintsFromSetUnknownAttendeeConflictData($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'IndividualAttendeeConflictData',
            'TooBigGroupAttendeeConflictData',
            'GroupAttendeeConflictData',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property UnknownAttendeeConflictData can\'t be set as the property %s is already set. Only one property must be set among these properties: UnknownAttendeeConflictData, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set UnknownAttendeeConflictData value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsUnknownAttendeeConflictData $unknownAttendeeConflictData
     * @return \StructType\EwsArrayOfAttendeeConflictData
     */
    public function setUnknownAttendeeConflictData(\StructType\EwsUnknownAttendeeConflictData $unknownAttendeeConflictData): self
    {
        // validation for constraint: choice(UnknownAttendeeConflictData, IndividualAttendeeConflictData, TooBigGroupAttendeeConflictData, GroupAttendeeConflictData)
        if ('' !== ($unknownAttendeeConflictDataChoiceErrorMessage = self::validateUnknownAttendeeConflictDataForChoiceConstraintsFromSetUnknownAttendeeConflictData($unknownAttendeeConflictData))) {
            throw new InvalidArgumentException($unknownAttendeeConflictDataChoiceErrorMessage, __LINE__);
        }
        if (is_null($unknownAttendeeConflictData) || (is_array($unknownAttendeeConflictData) && empty($unknownAttendeeConflictData))) {
            unset($this->UnknownAttendeeConflictData);
        } else {
            $this->UnknownAttendeeConflictData = $unknownAttendeeConflictData;
        }
        
        return $this;
    }
    /**
     * Get IndividualAttendeeConflictData value
     * @return \StructType\EwsIndividualAttendeeConflictData
     */
    public function getIndividualAttendeeConflictData(): \StructType\EwsIndividualAttendeeConflictData
    {
        return isset($this->IndividualAttendeeConflictData) ? $this->IndividualAttendeeConflictData : null;
    }
    /**
     * This method is responsible for validating the value passed to the setIndividualAttendeeConflictData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIndividualAttendeeConflictData method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateIndividualAttendeeConflictDataForChoiceConstraintsFromSetIndividualAttendeeConflictData($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'UnknownAttendeeConflictData',
            'TooBigGroupAttendeeConflictData',
            'GroupAttendeeConflictData',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property IndividualAttendeeConflictData can\'t be set as the property %s is already set. Only one property must be set among these properties: IndividualAttendeeConflictData, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set IndividualAttendeeConflictData value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsIndividualAttendeeConflictData $individualAttendeeConflictData
     * @return \StructType\EwsArrayOfAttendeeConflictData
     */
    public function setIndividualAttendeeConflictData(\StructType\EwsIndividualAttendeeConflictData $individualAttendeeConflictData): self
    {
        // validation for constraint: choice(UnknownAttendeeConflictData, IndividualAttendeeConflictData, TooBigGroupAttendeeConflictData, GroupAttendeeConflictData)
        if ('' !== ($individualAttendeeConflictDataChoiceErrorMessage = self::validateIndividualAttendeeConflictDataForChoiceConstraintsFromSetIndividualAttendeeConflictData($individualAttendeeConflictData))) {
            throw new InvalidArgumentException($individualAttendeeConflictDataChoiceErrorMessage, __LINE__);
        }
        if (is_null($individualAttendeeConflictData) || (is_array($individualAttendeeConflictData) && empty($individualAttendeeConflictData))) {
            unset($this->IndividualAttendeeConflictData);
        } else {
            $this->IndividualAttendeeConflictData = $individualAttendeeConflictData;
        }
        
        return $this;
    }
    /**
     * Get TooBigGroupAttendeeConflictData value
     * @return \StructType\EwsTooBigGroupAttendeeConflictData
     */
    public function getTooBigGroupAttendeeConflictData(): \StructType\EwsTooBigGroupAttendeeConflictData
    {
        return isset($this->TooBigGroupAttendeeConflictData) ? $this->TooBigGroupAttendeeConflictData : null;
    }
    /**
     * This method is responsible for validating the value passed to the setTooBigGroupAttendeeConflictData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTooBigGroupAttendeeConflictData method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateTooBigGroupAttendeeConflictDataForChoiceConstraintsFromSetTooBigGroupAttendeeConflictData($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'UnknownAttendeeConflictData',
            'IndividualAttendeeConflictData',
            'GroupAttendeeConflictData',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property TooBigGroupAttendeeConflictData can\'t be set as the property %s is already set. Only one property must be set among these properties: TooBigGroupAttendeeConflictData, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set TooBigGroupAttendeeConflictData value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsTooBigGroupAttendeeConflictData $tooBigGroupAttendeeConflictData
     * @return \StructType\EwsArrayOfAttendeeConflictData
     */
    public function setTooBigGroupAttendeeConflictData(\StructType\EwsTooBigGroupAttendeeConflictData $tooBigGroupAttendeeConflictData): self
    {
        // validation for constraint: choice(UnknownAttendeeConflictData, IndividualAttendeeConflictData, TooBigGroupAttendeeConflictData, GroupAttendeeConflictData)
        if ('' !== ($tooBigGroupAttendeeConflictDataChoiceErrorMessage = self::validateTooBigGroupAttendeeConflictDataForChoiceConstraintsFromSetTooBigGroupAttendeeConflictData($tooBigGroupAttendeeConflictData))) {
            throw new InvalidArgumentException($tooBigGroupAttendeeConflictDataChoiceErrorMessage, __LINE__);
        }
        if (is_null($tooBigGroupAttendeeConflictData) || (is_array($tooBigGroupAttendeeConflictData) && empty($tooBigGroupAttendeeConflictData))) {
            unset($this->TooBigGroupAttendeeConflictData);
        } else {
            $this->TooBigGroupAttendeeConflictData = $tooBigGroupAttendeeConflictData;
        }
        
        return $this;
    }
    /**
     * Get GroupAttendeeConflictData value
     * @return \StructType\EwsGroupAttendeeConflictData
     */
    public function getGroupAttendeeConflictData(): \StructType\EwsGroupAttendeeConflictData
    {
        return isset($this->GroupAttendeeConflictData) ? $this->GroupAttendeeConflictData : null;
    }
    /**
     * This method is responsible for validating the value passed to the setGroupAttendeeConflictData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGroupAttendeeConflictData method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGroupAttendeeConflictDataForChoiceConstraintsFromSetGroupAttendeeConflictData($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'UnknownAttendeeConflictData',
            'IndividualAttendeeConflictData',
            'TooBigGroupAttendeeConflictData',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property GroupAttendeeConflictData can\'t be set as the property %s is already set. Only one property must be set among these properties: GroupAttendeeConflictData, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set GroupAttendeeConflictData value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsGroupAttendeeConflictData $groupAttendeeConflictData
     * @return \StructType\EwsArrayOfAttendeeConflictData
     */
    public function setGroupAttendeeConflictData(\StructType\EwsGroupAttendeeConflictData $groupAttendeeConflictData): self
    {
        // validation for constraint: choice(UnknownAttendeeConflictData, IndividualAttendeeConflictData, TooBigGroupAttendeeConflictData, GroupAttendeeConflictData)
        if ('' !== ($groupAttendeeConflictDataChoiceErrorMessage = self::validateGroupAttendeeConflictDataForChoiceConstraintsFromSetGroupAttendeeConflictData($groupAttendeeConflictData))) {
            throw new InvalidArgumentException($groupAttendeeConflictDataChoiceErrorMessage, __LINE__);
        }
        if (is_null($groupAttendeeConflictData) || (is_array($groupAttendeeConflictData) && empty($groupAttendeeConflictData))) {
            unset($this->GroupAttendeeConflictData);
        } else {
            $this->GroupAttendeeConflictData = $groupAttendeeConflictData;
        }
        
        return $this;
    }
}
