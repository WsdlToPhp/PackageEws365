<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TwoOperandExpressionType StructType
 * Meta informations extracted from the WSDL
 * - ref: t:Path
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
abstract class EwsTwoOperandExpressionType extends EwsSearchExpressionType
{
    /**
     * The Path
     * @var \Ews\StructType\EwsBasePathToElementType
     */
    public $Path;
    /**
     * The FieldURIOrConstant
     * @var \Ews\StructType\EwsFieldURIOrConstantType
     */
    public $FieldURIOrConstant;
    /**
     * Constructor method for TwoOperandExpressionType
     * @uses EwsTwoOperandExpressionType::setPath()
     * @uses EwsTwoOperandExpressionType::setFieldURIOrConstant()
     * @param \Ews\StructType\EwsBasePathToElementType $path
     * @param \Ews\StructType\EwsFieldURIOrConstantType $fieldURIOrConstant
     */
    public function __construct(\Ews\StructType\EwsBasePathToElementType $path = null, \Ews\StructType\EwsFieldURIOrConstantType $fieldURIOrConstant = null)
    {
        $this
            ->setPath($path)
            ->setFieldURIOrConstant($fieldURIOrConstant);
    }
    /**
     * Get Path value
     * @return \Ews\StructType\EwsBasePathToElementType|null
     */
    public function getPath()
    {
        return $this->Path;
    }
    /**
     * Set Path value
     * @param \Ews\StructType\EwsBasePathToElementType $path
     * @return \Ews\StructType\EwsTwoOperandExpressionType
     */
    public function setPath(\Ews\StructType\EwsBasePathToElementType $path = null)
    {
        $this->Path = $path;
        return $this;
    }
    /**
     * Get FieldURIOrConstant value
     * @return \Ews\StructType\EwsFieldURIOrConstantType|null
     */
    public function getFieldURIOrConstant()
    {
        return $this->FieldURIOrConstant;
    }
    /**
     * Set FieldURIOrConstant value
     * @param \Ews\StructType\EwsFieldURIOrConstantType $fieldURIOrConstant
     * @return \Ews\StructType\EwsTwoOperandExpressionType
     */
    public function setFieldURIOrConstant(\Ews\StructType\EwsFieldURIOrConstantType $fieldURIOrConstant = null)
    {
        $this->FieldURIOrConstant = $fieldURIOrConstant;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsTwoOperandExpressionType
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
