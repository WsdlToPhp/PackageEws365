<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FieldURIOrConstantType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFieldURIOrConstantType extends AbstractStructBase
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
     * Constructor method for FieldURIOrConstantType
     * @uses EwsFieldURIOrConstantType::setPath()
     * @uses EwsFieldURIOrConstantType::setConstant()
     * @param \Ews\StructType\EwsBasePathToElementType $path
     * @param \Ews\StructType\EwsConstantValueType $constant
     */
    public function __construct(\Ews\StructType\EwsBasePathToElementType $path = null, \Ews\StructType\EwsConstantValueType $constant = null)
    {
        $this
            ->setPath($path)
            ->setConstant($constant);
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
     * @return \Ews\StructType\EwsFieldURIOrConstantType
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
     * @return \Ews\StructType\EwsFieldURIOrConstantType
     */
    public function setConstant(\Ews\StructType\EwsConstantValueType $constant = null)
    {
        $this->Constant = $constant;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFieldURIOrConstantType
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
