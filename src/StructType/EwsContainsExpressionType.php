<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContainsExpressionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsContainsExpressionType extends EwsSearchExpressionType
{
    /**
     * The Path
     * Meta informations extracted from the WSDL
     * - ref: t:Path
     * @var \Ews\StructType\EwsBasePathToElementType
     */
    public $Path;
    /**
     * The Constant
     * @var \Ews\StructType\EwsConstantValueType
     */
    public $Constant;
    /**
     * The ContainmentMode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ContainmentMode;
    /**
     * The ContainmentComparison
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ContainmentComparison;
    /**
     * Constructor method for ContainsExpressionType
     * @uses EwsContainsExpressionType::setPath()
     * @uses EwsContainsExpressionType::setConstant()
     * @uses EwsContainsExpressionType::setContainmentMode()
     * @uses EwsContainsExpressionType::setContainmentComparison()
     * @param \Ews\StructType\EwsBasePathToElementType $path
     * @param \Ews\StructType\EwsConstantValueType $constant
     * @param string $containmentMode
     * @param string $containmentComparison
     */
    public function __construct(\Ews\StructType\EwsBasePathToElementType $path = null, \Ews\StructType\EwsConstantValueType $constant = null, $containmentMode = null, $containmentComparison = null)
    {
        $this
            ->setPath($path)
            ->setConstant($constant)
            ->setContainmentMode($containmentMode)
            ->setContainmentComparison($containmentComparison);
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
     * @return \Ews\StructType\EwsContainsExpressionType
     */
    public function setPath(\Ews\StructType\EwsBasePathToElementType $path = null)
    {
        $this->Path = $path;
        return $this;
    }
    /**
     * Get Constant value
     * @return \Ews\StructType\EwsConstantValueType|null
     */
    public function getConstant()
    {
        return $this->Constant;
    }
    /**
     * Set Constant value
     * @param \Ews\StructType\EwsConstantValueType $constant
     * @return \Ews\StructType\EwsContainsExpressionType
     */
    public function setConstant(\Ews\StructType\EwsConstantValueType $constant = null)
    {
        $this->Constant = $constant;
        return $this;
    }
    /**
     * Get ContainmentMode value
     * @return string|null
     */
    public function getContainmentMode()
    {
        return $this->ContainmentMode;
    }
    /**
     * Set ContainmentMode value
     * @uses \Ews\EnumType\EwsContainmentModeType::valueIsValid()
     * @uses \Ews\EnumType\EwsContainmentModeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $containmentMode
     * @return \Ews\StructType\EwsContainsExpressionType
     */
    public function setContainmentMode($containmentMode = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsContainmentModeType::valueIsValid($containmentMode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $containmentMode, implode(', ', \Ews\EnumType\EwsContainmentModeType::getValidValues())), __LINE__);
        }
        $this->ContainmentMode = $containmentMode;
        return $this;
    }
    /**
     * Get ContainmentComparison value
     * @return string|null
     */
    public function getContainmentComparison()
    {
        return $this->ContainmentComparison;
    }
    /**
     * Set ContainmentComparison value
     * @uses \Ews\EnumType\EwsContainmentComparisonType::valueIsValid()
     * @uses \Ews\EnumType\EwsContainmentComparisonType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $containmentComparison
     * @return \Ews\StructType\EwsContainsExpressionType
     */
    public function setContainmentComparison($containmentComparison = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsContainmentComparisonType::valueIsValid($containmentComparison)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $containmentComparison, implode(', ', \Ews\EnumType\EwsContainmentComparisonType::getValidValues())), __LINE__);
        }
        $this->ContainmentComparison = $containmentComparison;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsContainsExpressionType
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
