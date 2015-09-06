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
     * @var array
     */
    public $PredictedActionReason;
    /**
     * Constructor method for NonEmptyArrayOfPredictedActionReasonType
     * @uses EwsNonEmptyArrayOfPredictedActionReasonType::setPredictedActionReason()
     * @param array $predictedActionReason
     */
    public function __construct(array $predictedActionReason = array())
    {
        $this
            ->setPredictedActionReason($predictedActionReason);
    }
    /**
     * Get PredictedActionReason value
     * @return array
     */
    public function getPredictedActionReason()
    {
        return $this->PredictedActionReason;
    }
    /**
     * Set PredictedActionReason value
     * @param array $predictedActionReason
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfPredictedActionReasonType
     */
    public function setPredictedActionReason(array $predictedActionReason = array())
    {
        $this->PredictedActionReason = $predictedActionReason;
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
     * @uses \Ews\EnumType\EwsPredictedActionReasonType::valueIsValid()
     * @param string $item
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfPredictedActionReasonType|bool
     */
    public function add($item)
    {
        return \Ews\EnumType\EwsPredictedActionReasonType::valueIsValid($item) ? parent::add($item) : false;
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
