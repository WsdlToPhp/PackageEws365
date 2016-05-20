<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EducationInsightValue StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsEducationInsightValue extends EwsInsightValue
{
    /**
     * The Institute
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Institute;
    /**
     * The Degree
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Degree;
    /**
     * The StartUtcTicks
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $StartUtcTicks;
    /**
     * The EndUtcTicks
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $EndUtcTicks;
    /**
     * Constructor method for EducationInsightValue
     * @uses EwsEducationInsightValue::setInstitute()
     * @uses EwsEducationInsightValue::setDegree()
     * @uses EwsEducationInsightValue::setStartUtcTicks()
     * @uses EwsEducationInsightValue::setEndUtcTicks()
     * @param string $institute
     * @param string $degree
     * @param int $startUtcTicks
     * @param int $endUtcTicks
     */
    public function __construct($institute = null, $degree = null, $startUtcTicks = null, $endUtcTicks = null)
    {
        $this
            ->setInstitute($institute)
            ->setDegree($degree)
            ->setStartUtcTicks($startUtcTicks)
            ->setEndUtcTicks($endUtcTicks);
    }
    /**
     * Get Institute value
     * @return string|null
     */
    public function getInstitute()
    {
        return $this->Institute;
    }
    /**
     * Set Institute value
     * @param string $institute
     * @return \Ews\StructType\EwsEducationInsightValue
     */
    public function setInstitute($institute = null)
    {
        // validation for constraint: string
        if (!is_null($institute) && !is_string($institute)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($institute)), __LINE__);
        }
        $this->Institute = $institute;
        return $this;
    }
    /**
     * Get Degree value
     * @return string|null
     */
    public function getDegree()
    {
        return $this->Degree;
    }
    /**
     * Set Degree value
     * @param string $degree
     * @return \Ews\StructType\EwsEducationInsightValue
     */
    public function setDegree($degree = null)
    {
        // validation for constraint: string
        if (!is_null($degree) && !is_string($degree)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($degree)), __LINE__);
        }
        $this->Degree = $degree;
        return $this;
    }
    /**
     * Get StartUtcTicks value
     * @return int|null
     */
    public function getStartUtcTicks()
    {
        return $this->StartUtcTicks;
    }
    /**
     * Set StartUtcTicks value
     * @param int $startUtcTicks
     * @return \Ews\StructType\EwsEducationInsightValue
     */
    public function setStartUtcTicks($startUtcTicks = null)
    {
        // validation for constraint: int
        if (!is_null($startUtcTicks) && !is_numeric($startUtcTicks)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($startUtcTicks)), __LINE__);
        }
        $this->StartUtcTicks = $startUtcTicks;
        return $this;
    }
    /**
     * Get EndUtcTicks value
     * @return int|null
     */
    public function getEndUtcTicks()
    {
        return $this->EndUtcTicks;
    }
    /**
     * Set EndUtcTicks value
     * @param int $endUtcTicks
     * @return \Ews\StructType\EwsEducationInsightValue
     */
    public function setEndUtcTicks($endUtcTicks = null)
    {
        // validation for constraint: int
        if (!is_null($endUtcTicks) && !is_numeric($endUtcTicks)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($endUtcTicks)), __LINE__);
        }
        $this->EndUtcTicks = $endUtcTicks;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsEducationInsightValue
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
