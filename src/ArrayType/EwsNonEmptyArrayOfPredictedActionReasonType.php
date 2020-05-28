<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfPredictedActionReasonType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfPredictedActionReasonType extends AbstractStructArrayBase
{
    /**
     * The PredictedActionReason
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $PredictedActionReason;
    /**
     * Constructor method for NonEmptyArrayOfPredictedActionReasonType
     * @uses EwsNonEmptyArrayOfPredictedActionReasonType::setPredictedActionReason()
     * @param string[] $predictedActionReason
     */
    public function __construct(array $predictedActionReason = array())
    {
        $this
            ->setPredictedActionReason($predictedActionReason);
    }
    /**
     * Get PredictedActionReason value
     * @return string[]|null
     */
    public function getPredictedActionReason()
    {
        return $this->PredictedActionReason;
    }
    /**
     * This method is responsible for validating the values passed to the setPredictedActionReason method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPredictedActionReason method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePredictedActionReasonForArrayConstraintsFromSetPredictedActionReason(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfPredictedActionReasonTypePredictedActionReasonItem) {
            // validation for constraint: enumeration
            if (!\Ews\EnumType\EwsPredictedActionReasonType::valueIsValid($nonEmptyArrayOfPredictedActionReasonTypePredictedActionReasonItem)) {
                $invalidValues[] = is_object($nonEmptyArrayOfPredictedActionReasonTypePredictedActionReasonItem) ? get_class($nonEmptyArrayOfPredictedActionReasonTypePredictedActionReasonItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfPredictedActionReasonTypePredictedActionReasonItem), var_export($nonEmptyArrayOfPredictedActionReasonTypePredictedActionReasonItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsPredictedActionReasonType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Ews\EnumType\EwsPredictedActionReasonType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PredictedActionReason value
     * @uses \Ews\EnumType\EwsPredictedActionReasonType::valueIsValid()
     * @uses \Ews\EnumType\EwsPredictedActionReasonType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $predictedActionReason
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfPredictedActionReasonType
     */
    public function setPredictedActionReason(array $predictedActionReason = array())
    {
        // validation for constraint: array
        if ('' !== ($predictedActionReasonArrayErrorMessage = self::validatePredictedActionReasonForArrayConstraintsFromSetPredictedActionReason($predictedActionReason))) {
            throw new \InvalidArgumentException($predictedActionReasonArrayErrorMessage, __LINE__);
        }
        $this->PredictedActionReason = $predictedActionReason;
        return $this;
    }
    /**
     * Add item to PredictedActionReason value
     * @uses \Ews\EnumType\EwsPredictedActionReasonType::valueIsValid()
     * @uses \Ews\EnumType\EwsPredictedActionReasonType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfPredictedActionReasonType
     */
    public function addToPredictedActionReason($item)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsPredictedActionReasonType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsPredictedActionReasonType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \Ews\EnumType\EwsPredictedActionReasonType::getValidValues())), __LINE__);
        }
        $this->PredictedActionReason[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws \InvalidArgumentException
     * @uses \Ews\EnumType\EwsPredictedActionReasonType::valueIsValid()
     * @param string $item
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfPredictedActionReasonType
     */
    public function add($item)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsPredictedActionReasonType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsPredictedActionReasonType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \Ews\EnumType\EwsPredictedActionReasonType::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PredictedActionReason
     */
    public function getAttributeName()
    {
        return 'PredictedActionReason';
    }
}
