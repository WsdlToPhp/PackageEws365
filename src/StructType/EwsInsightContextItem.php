<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsightContextItem StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsInsightContextItem extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Val
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Val;
    /**
     * Constructor method for InsightContextItem
     * @uses EwsInsightContextItem::setName()
     * @uses EwsInsightContextItem::setVal()
     * @param string $name
     * @param string $val
     */
    public function __construct($name = null, $val = null)
    {
        $this
            ->setName($name)
            ->setVal($val);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Ews\StructType\EwsInsightContextItem
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Val value
     * @return string|null
     */
    public function getVal()
    {
        return $this->Val;
    }
    /**
     * Set Val value
     * @param string $val
     * @return \Ews\StructType\EwsInsightContextItem
     */
    public function setVal($val = null)
    {
        // validation for constraint: string
        if (!is_null($val) && !is_string($val)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($val, true), gettype($val)), __LINE__);
        }
        $this->Val = $val;
        return $this;
    }
}
