<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EducationInsightValue StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
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
     * @var long
     */
    public $StartUtcTicks;
    /**
     * The EndUtcTicks
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var long
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
     * @param long $startUtcTicks
     * @param long $endUtcTicks
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
        $this->Degree = $degree;
        return $this;
    }
    /**
     * Get StartUtcTicks value
     * @return long|null
     */
    public function getStartUtcTicks()
    {
        return $this->StartUtcTicks;
    }
    /**
     * Set StartUtcTicks value
     * @param long $startUtcTicks
     * @return \Ews\StructType\EwsEducationInsightValue
     */
    public function setStartUtcTicks($startUtcTicks = null)
    {
        $this->StartUtcTicks = $startUtcTicks;
        return $this;
    }
    /**
     * Get EndUtcTicks value
     * @return long|null
     */
    public function getEndUtcTicks()
    {
        return $this->EndUtcTicks;
    }
    /**
     * Set EndUtcTicks value
     * @param long $endUtcTicks
     * @return \Ews\StructType\EwsEducationInsightValue
     */
    public function setEndUtcTicks($endUtcTicks = null)
    {
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
