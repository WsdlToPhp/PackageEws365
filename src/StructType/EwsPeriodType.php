<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PeriodType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsPeriodType extends AbstractStructBase
{
    /**
     * The Bias
     * @var duration
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
     * @param duration $bias
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
     * @return duration|null
     */
    public function getBias()
    {
        return $this->Bias;
    }
    /**
     * Set Bias value
     * @param duration $bias
     * @return \Ews\StructType\EwsPeriodType
     */
    public function setBias($bias = null)
    {
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
        $this->Id = $id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsPeriodType
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
