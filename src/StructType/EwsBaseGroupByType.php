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
     * Meta information extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsSortDirectionType', is_array($order) ? implode(', ', $order) : var_export($order, true), implode(', ', \Ews\EnumType\EwsSortDirectionType::getValidValues())), __LINE__);
        }
        $this->Order = $order;
        return $this;
    }
}
