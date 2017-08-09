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
     * Meta informations extracted from the WSDL
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
     * Set PredictedActionReason value
     * @uses \Ews\EnumType\EwsPredictedActionReasonType::valueIsValid()
     * @uses \Ews\EnumType\EwsPredictedActionReasonType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $predictedActionReason
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfPredictedActionReasonType
     */
    public function setPredictedActionReason(array $predictedActionReason = array())
    {
        $invalidValues = array();
        foreach ($predictedActionReason as $nonEmptyArrayOfPredictedActionReasonTypePredictedActionReasonItem) {
            if (!\Ews\EnumType\EwsPredictedActionReasonType::valueIsValid($nonEmptyArrayOfPredictedActionReasonTypePredictedActionReasonItem)) {
                $invalidValues[] = var_export($nonEmptyArrayOfPredictedActionReasonTypePredictedActionReasonItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Ews\EnumType\EwsPredictedActionReasonType::getValidValues())), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Ews\EnumType\EwsPredictedActionReasonType::getValidValues())), __LINE__);
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
        if (!\Ews\EnumType\EwsPredictedActionReasonType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Ews\EnumType\EwsPredictedActionReasonType::getValidValues())), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfPredictedActionReasonType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
