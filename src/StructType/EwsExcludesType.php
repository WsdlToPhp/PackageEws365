<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExcludesType StructType
 * Meta informations extracted from the WSDL
 * - ref: t:Path
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsExcludesType extends EwsSearchExpressionType
{
    /**
     * The Path
     * @var \Ews\StructType\EwsBasePathToElementType
     */
    public $Path;
    /**
     * The Bitmask
     * @var \Ews\StructType\EwsExcludesValueType
     */
    public $Bitmask;
    /**
     * Constructor method for ExcludesType
     * @uses EwsExcludesType::setPath()
     * @uses EwsExcludesType::setBitmask()
     * @param \Ews\StructType\EwsBasePathToElementType $path
     * @param \Ews\StructType\EwsExcludesValueType $bitmask
     */
    public function __construct(\Ews\StructType\EwsBasePathToElementType $path = null, \Ews\StructType\EwsExcludesValueType $bitmask = null)
    {
        $this
            ->setPath($path)
            ->setBitmask($bitmask);
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
     * @return \Ews\StructType\EwsExcludesType
     */
    public function setPath(\Ews\StructType\EwsBasePathToElementType $path = null)
    {
        $this->Path = $path;
        return $this;
    }
    /**
     * Get Bitmask value
     * @return \Ews\StructType\EwsExcludesValueType|null
     */
    public function getBitmask()
    {
        return $this->Bitmask;
    }
    /**
     * Set Bitmask value
     * @param \Ews\StructType\EwsExcludesValueType $bitmask
     * @return \Ews\StructType\EwsExcludesType
     */
    public function setBitmask(\Ews\StructType\EwsExcludesValueType $bitmask = null)
    {
        $this->Bitmask = $bitmask;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsExcludesType
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
