<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseGroupByType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
abstract class EwsBaseGroupByType extends AbstractStructBase
{
    /**
     * The Order
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Order;
    /**
     * Constructor method for BaseGroupByType
     * @uses EwsBaseGroupByType::setOrder()
     * @param string $order
     */
    public function __construct($order = null)
    {
        $this
            ->setOrder($order);
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
     * @throws \InvalidArgumentException
     * @param string $order
     * @return \Ews\StructType\EwsBaseGroupByType
     */
    public function setOrder($order = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsSortDirectionType::valueIsValid($order)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $order, implode(', ', \Ews\EnumType\EwsSortDirectionType::getValidValues())), __LINE__);
        }
        $this->Order = $order;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsBaseGroupByType
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
