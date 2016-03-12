<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SkillInsightValue StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSkillInsightValue extends EwsInsightValue
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Strength
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $Strength;
    /**
     * Constructor method for SkillInsightValue
     * @uses EwsSkillInsightValue::setName()
     * @uses EwsSkillInsightValue::setStrength()
     * @param string $name
     * @param int $strength
     */
    public function __construct($name = null, $strength = null)
    {
        $this
            ->setName($name)
            ->setStrength($strength);
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
     * @return \Ews\StructType\EwsSkillInsightValue
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Strength value
     * @return int|null
     */
    public function getStrength()
    {
        return $this->Strength;
    }
    /**
     * Set Strength value
     * @param int $strength
     * @return \Ews\StructType\EwsSkillInsightValue
     */
    public function setStrength($strength = null)
    {
        // validation for constraint: int
        if (!is_null($strength) && !is_int($strength)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($strength)), __LINE__);
        }
        $this->Strength = $strength;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSkillInsightValue
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
