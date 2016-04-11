<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultipleOperandBooleanExpressionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
abstract class EwsMultipleOperandBooleanExpressionType extends EwsSearchExpressionType
{
    /**
     * The SearchExpression
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * - ref: t:SearchExpression
     * @var \Ews\StructType\EwsSearchExpressionType[]
     */
    public $SearchExpression;
    /**
     * Constructor method for MultipleOperandBooleanExpressionType
     * @uses EwsMultipleOperandBooleanExpressionType::setSearchExpression()
     * @param \Ews\StructType\EwsSearchExpressionType[] $searchExpression
     */
    public function __construct(array $searchExpression = array())
    {
        $this
            ->setSearchExpression($searchExpression);
    }
    /**
     * Get SearchExpression value
     * @return \Ews\StructType\EwsSearchExpressionType[]
     */
    public function getSearchExpression()
    {
        return $this->SearchExpression;
    }
    /**
     * Set SearchExpression value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSearchExpressionType[] $searchExpression
     * @return \Ews\StructType\EwsMultipleOperandBooleanExpressionType
     */
    public function setSearchExpression(array $searchExpression = array())
    {
        foreach ($searchExpression as $multipleOperandBooleanExpressionTypeSearchExpressionItem) {
            // validation for constraint: itemType
            if (!$multipleOperandBooleanExpressionTypeSearchExpressionItem instanceof \Ews\StructType\EwsSearchExpressionType) {
                throw new \InvalidArgumentException(sprintf('The SearchExpression property can only contain items of \Ews\StructType\EwsSearchExpressionType, "%s" given', is_object($multipleOperandBooleanExpressionTypeSearchExpressionItem) ? get_class($multipleOperandBooleanExpressionTypeSearchExpressionItem) : gettype($multipleOperandBooleanExpressionTypeSearchExpressionItem)), __LINE__);
            }
        }
        $this->SearchExpression = $searchExpression;
        return $this;
    }
    /**
     * Add item to SearchExpression value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSearchExpressionType $item
     * @return \Ews\StructType\EwsMultipleOperandBooleanExpressionType
     */
    public function addToSearchExpression(\Ews\StructType\EwsSearchExpressionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsSearchExpressionType) {
            throw new \InvalidArgumentException(sprintf('The SearchExpression property can only contain items of \Ews\StructType\EwsSearchExpressionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SearchExpression[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMultipleOperandBooleanExpressionType
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
