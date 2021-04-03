<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected string $Order;
    /**
     * Constructor method for BaseGroupByType
     * @uses EwsBaseGroupByType::setOrder()
     * @param string $order
     */
    public function __construct(string $order)
    {
        $this
            ->setOrder($order);
    }
    /**
     * Get Order value
     * @return string
     */
    public function getOrder(): string
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @uses \EnumType\EwsSortDirectionType::valueIsValid()
     * @uses \EnumType\EwsSortDirectionType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $order
     * @return \StructType\EwsBaseGroupByType
     */
    public function setOrder(string $order): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsSortDirectionType::valueIsValid($order)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsSortDirectionType', is_array($order) ? implode(', ', $order) : var_export($order, true), implode(', ', \EnumType\EwsSortDirectionType::getValidValues())), __LINE__);
        }
        $this->Order = $order;
        
        return $this;
    }
}
