<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsUnknownAttendeeConflictData
     */
    public $UnknownAttendeeConflictData;
    /**
     * The IndividualAttendeeConflictData
     * Meta information extracted from the WSDL
     * - choice: UnknownAttendeeConflictData | IndividualAttendeeConflictData | TooBigGroupAttendeeConflictData | GroupAttendeeConflictData
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Ews\StructType\EwsIndividualAttendeeConflictData
     */
    public $IndividualAttendeeConflictData;
    /**
     * The TooBigGroupAttendeeConflictData
     * Meta information extracted from the WSDL
     * - choice: UnknownAttendeeConflictData | IndividualAttendeeConflictData | TooBigGroupAttendeeConflictData | GroupAttendeeConflictData
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Ews\StructType\EwsTooBigGroupAttendeeConflictData
     */
    public $TooBigGroupAttendeeConflictData;
    /**
     * The GroupAttendeeConflictData
     * Meta information extracted from the WSDL
     * - choice: UnknownAttendeeConflictData | IndividualAttendeeConflictData | TooBigGroupAttendeeConflictData | GroupAttendeeConflictData
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Ews\StructType\EwsGroupAttendeeConflictData
     */
    public $GroupAttendeeConflictData;
    /**
     * Constructor method for ArrayOfAttendeeConflictData
     * @uses EwsArrayOfAttendeeConflictData::setUnknownAttendeeConflictData()
     * @uses EwsArrayOfAttendeeConflictData::setIndividualAttendeeConflictData()
     * @uses EwsArrayOfAttendeeConflictData::setTooBigGroupAttendeeConflictData()
     * @uses EwsArrayOfAttendeeConflictData::setGroupAttendeeConflictData()
     * @param \Ews\StructType\EwsUnknownAttendeeConflictData $unknownAttendeeConflictData
     * @param \Ews\StructType\EwsIndividualAttendeeConflictData $individualAttendeeConflictData
     * @param \Ews\StructType\EwsTooBigGroupAttendeeConflictData $tooBigGroupAttendeeConflictData
     * @param \Ews\StructType\EwsGroupAttendeeConflictData $groupAttendeeConflictData
     */
    public function __construct(\Ews\StructType\EwsUnknownAttendeeConflictData $unknownAttendeeConflictData = null, \Ews\StructType\EwsIndividualAttendeeConflictData $individualAttendeeConflictData = null, \Ews\StructType\EwsTooBigGroupAttendeeConflictData $tooBigGroupAttendeeConflictData = null, \Ews\StructType\EwsGroupAttendeeConflictData $groupAttendeeConflictData = null)
    {
        $this
            ->setUnknownAttendeeConflictData($unknownAttendeeConflictData)
            ->setIndividualAttendeeConflictData($individualAttendeeConflictData)
            ->setTooBigGroupAttendeeConflictData($tooBigGroupAttendeeConflictData)
            ->setGroupAttendeeConflictData($groupAttendeeConflictData);
    }
    /**
     * Get UnknownAttendeeConflictData value
     * @return \Ews\StructType\EwsUnknownAttendeeConflictData
     */
    public function getUnknownAttendeeConflictData()
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
    public function validateUnknownAttendeeConflictDataForChoiceConstraintsFromSetUnknownAttendeeConflictData($value)
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
                    throw new \InvalidArgumentException(sprintf('The property UnknownAttendeeConflictData can\'t be set as the property %s is already set. Only one property must be set among these properties: UnknownAttendeeConflictData, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set UnknownAttendeeConflictData value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUnknownAttendeeConflictData $unknownAttendeeConflictData
     * @return \Ews\StructType\EwsArrayOfAttendeeConflictData
     */
    public function setUnknownAttendeeConflictData(\Ews\StructType\EwsUnknownAttendeeConflictData $unknownAttendeeConflictData = null)
    {
        // validation for constraint: choice(UnknownAttendeeConflictData, IndividualAttendeeConflictData, TooBigGroupAttendeeConflictData, GroupAttendeeConflictData)
        if ('' !== ($unknownAttendeeConflictDataChoiceErrorMessage = self::validateUnknownAttendeeConflictDataForChoiceConstraintsFromSetUnknownAttendeeConflictData($unknownAttendeeConflictData))) {
            throw new \InvalidArgumentException($unknownAttendeeConflictDataChoiceErrorMessage, __LINE__);
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
     * @return \Ews\StructType\EwsIndividualAttendeeConflictData
     */
    public function getIndividualAttendeeConflictData()
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
    public function validateIndividualAttendeeConflictDataForChoiceConstraintsFromSetIndividualAttendeeConflictData($value)
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
                    throw new \InvalidArgumentException(sprintf('The property IndividualAttendeeConflictData can\'t be set as the property %s is already set. Only one property must be set among these properties: IndividualAttendeeConflictData, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set IndividualAttendeeConflictData value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsIndividualAttendeeConflictData $individualAttendeeConflictData
     * @return \Ews\StructType\EwsArrayOfAttendeeConflictData
     */
    public function setIndividualAttendeeConflictData(\Ews\StructType\EwsIndividualAttendeeConflictData $individualAttendeeConflictData = null)
    {
        // validation for constraint: choice(UnknownAttendeeConflictData, IndividualAttendeeConflictData, TooBigGroupAttendeeConflictData, GroupAttendeeConflictData)
        if ('' !== ($individualAttendeeConflictDataChoiceErrorMessage = self::validateIndividualAttendeeConflictDataForChoiceConstraintsFromSetIndividualAttendeeConflictData($individualAttendeeConflictData))) {
            throw new \InvalidArgumentException($individualAttendeeConflictDataChoiceErrorMessage, __LINE__);
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
     * @return \Ews\StructType\EwsTooBigGroupAttendeeConflictData
     */
    public function getTooBigGroupAttendeeConflictData()
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
    public function validateTooBigGroupAttendeeConflictDataForChoiceConstraintsFromSetTooBigGroupAttendeeConflictData($value)
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
                    throw new \InvalidArgumentException(sprintf('The property TooBigGroupAttendeeConflictData can\'t be set as the property %s is already set. Only one property must be set among these properties: TooBigGroupAttendeeConflictData, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set TooBigGroupAttendeeConflictData value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsTooBigGroupAttendeeConflictData $tooBigGroupAttendeeConflictData
     * @return \Ews\StructType\EwsArrayOfAttendeeConflictData
     */
    public function setTooBigGroupAttendeeConflictData(\Ews\StructType\EwsTooBigGroupAttendeeConflictData $tooBigGroupAttendeeConflictData = null)
    {
        // validation for constraint: choice(UnknownAttendeeConflictData, IndividualAttendeeConflictData, TooBigGroupAttendeeConflictData, GroupAttendeeConflictData)
        if ('' !== ($tooBigGroupAttendeeConflictDataChoiceErrorMessage = self::validateTooBigGroupAttendeeConflictDataForChoiceConstraintsFromSetTooBigGroupAttendeeConflictData($tooBigGroupAttendeeConflictData))) {
            throw new \InvalidArgumentException($tooBigGroupAttendeeConflictDataChoiceErrorMessage, __LINE__);
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
     * @return \Ews\StructType\EwsGroupAttendeeConflictData
     */
    public function getGroupAttendeeConflictData()
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
    public function validateGroupAttendeeConflictDataForChoiceConstraintsFromSetGroupAttendeeConflictData($value)
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
                    throw new \InvalidArgumentException(sprintf('The property GroupAttendeeConflictData can\'t be set as the property %s is already set. Only one property must be set among these properties: GroupAttendeeConflictData, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set GroupAttendeeConflictData value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsGroupAttendeeConflictData $groupAttendeeConflictData
     * @return \Ews\StructType\EwsArrayOfAttendeeConflictData
     */
    public function setGroupAttendeeConflictData(\Ews\StructType\EwsGroupAttendeeConflictData $groupAttendeeConflictData = null)
    {
        // validation for constraint: choice(UnknownAttendeeConflictData, IndividualAttendeeConflictData, TooBigGroupAttendeeConflictData, GroupAttendeeConflictData)
        if ('' !== ($groupAttendeeConflictDataChoiceErrorMessage = self::validateGroupAttendeeConflictDataForChoiceConstraintsFromSetGroupAttendeeConflictData($groupAttendeeConflictData))) {
            throw new \InvalidArgumentException($groupAttendeeConflictDataChoiceErrorMessage, __LINE__);
        }
        if (is_null($groupAttendeeConflictData) || (is_array($groupAttendeeConflictData) && empty($groupAttendeeConflictData))) {
            unset($this->GroupAttendeeConflictData);
        } else {
            $this->GroupAttendeeConflictData = $groupAttendeeConflictData;
        }
        return $this;
    }
}
