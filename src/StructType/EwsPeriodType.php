<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PeriodType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPeriodType extends AbstractStructBase
{
    /**
     * The Bias
     * @var string
     */
    public $Bias;
    /**
     * The Name
     * @var string
     */
    public $Name;
    /**
     * The Id
     * @var string
     */
    public $Id;
    /**
     * Constructor method for PeriodType
     * @uses EwsPeriodType::setBias()
     * @uses EwsPeriodType::setName()
     * @uses EwsPeriodType::setId()
     * @param string $bias
     * @param string $name
     * @param string $id
     */
    public function __construct($bias = null, $name = null, $id = null)
    {
        $this
            ->setBias($bias)
            ->setName($name)
            ->setId($id);
    }
    /**
     * Get Bias value
     * @return string|null
     */
    public function getBias()
    {
        return $this->Bias;
    }
    /**
     * Set Bias value
     * @param string $bias
     * @return \Ews\StructType\EwsPeriodType
     */
    public function setBias($bias = null)
    {
        // validation for constraint: string
        if (!is_null($bias) && !is_string($bias)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bias, true), gettype($bias)), __LINE__);
        }
        $this->Bias = $bias;
        return $this;
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
     * @return \Ews\StructType\EwsPeriodType
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
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Ews\StructType\EwsPeriodType
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
}
