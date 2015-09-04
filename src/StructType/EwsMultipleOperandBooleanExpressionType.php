<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultipleOperandBooleanExpressionType StructType
 * Meta informations extracted from the WSDL
 * - maxOccurs: unbounded
 * - minOccurs: 1
 * - ref: t:SearchExpression
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
abstract class EwsMultipleOperandBooleanExpressionType extends EwsSearchExpressionType
{
    /**
     * The SearchExpression
     * @var \Ews\StructType\EwsSearchExpressionType
     */
    public $SearchExpression;
    /**
     * Constructor method for MultipleOperandBooleanExpressionType
     * @uses EwsMultipleOperandBooleanExpressionType::setSearchExpression()
     * @param \Ews\StructType\EwsSearchExpressionType $searchExpression
     */
    public function __construct(\Ews\StructType\EwsSearchExpressionType $searchExpression = null)
    {
        $this
            ->setSearchExpression($searchExpression);
    }
    /**
     * Get SearchExpression value
     * @return \Ews\StructType\EwsSearchExpressionType|null
     */
    public function getSearchExpression()
    {
        return $this->SearchExpression;
    }
    /**
     * Set SearchExpression value
     * @param \Ews\StructType\EwsSearchExpressionType $searchExpression
     * @return \Ews\StructType\EwsMultipleOperandBooleanExpressionType
     */
    public function setSearchExpression(\Ews\StructType\EwsSearchExpressionType $searchExpression = null)
    {
        $this->SearchExpression = $searchExpression;
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
