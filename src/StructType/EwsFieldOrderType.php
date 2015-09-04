<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FieldOrderType StructType
 * Meta informations extracted from the WSDL
 * - ref: t:Path
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsFieldOrderType extends AbstractStructBase
{
    /**
     * The Order
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Order;
    /**
     * The Path
     * @var \Ews\StructType\EwsBasePathToElementType
     */
    public $Path;
    /**
     * Constructor method for FieldOrderType
     * @uses EwsFieldOrderType::setOrder()
     * @uses EwsFieldOrderType::setPath()
     * @param string $order
     * @param \Ews\StructType\EwsBasePathToElementType $path
     */
    public function __construct($order = null, \Ews\StructType\EwsBasePathToElementType $path = null)
    {
        $this
            ->setOrder($order)
            ->setPath($path);
    }
    /**
     * Get Order value
     * @return string
     */
    public function getOrder()
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @uses \Ews\EnumType\EwsSortDirectionType::valueIsValid()
     * @uses \Ews\EnumType\EwsSortDirectionType::getValidValues()
     * @param string $order
     * @return \Ews\StructType\EwsFieldOrderType
     */
    public function setOrder($order = null)
    {
        if (!\Ews\EnumType\EwsSortDirectionType::valueIsValid($order)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $order, implode(', ', \Ews\EnumType\EwsSortDirectionType::getValidValues())), __LINE__);
        }
        $this->Order = $order;
        return $this;
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
     * @return \Ews\StructType\EwsFieldOrderType
     */
    public function setPath(\Ews\StructType\EwsBasePathToElementType $path = null)
    {
        $this->Path = $path;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFieldOrderType
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
