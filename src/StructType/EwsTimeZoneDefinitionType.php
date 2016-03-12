<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TimeZoneDefinitionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsTimeZoneDefinitionType extends AbstractStructBase
{
    /**
     * The Periods
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfPeriodsType
     */
    public $Periods;
    /**
     * The TransitionsGroups
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfTransitionsGroupsType
     */
    public $TransitionsGroups;
    /**
     * The Transitions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsArrayOfTransitionsType
     */
    public $Transitions;
    /**
     * The Id
     * @var string
     */
    public $Id;
    /**
     * The Name
     * @var string
     */
    public $Name;
    /**
     * Constructor method for TimeZoneDefinitionType
     * @uses EwsTimeZoneDefinitionType::setPeriods()
     * @uses EwsTimeZoneDefinitionType::setTransitionsGroups()
     * @uses EwsTimeZoneDefinitionType::setTransitions()
     * @uses EwsTimeZoneDefinitionType::setId()
     * @uses EwsTimeZoneDefinitionType::setName()
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfPeriodsType $periods
     * @param \Ews\ArrayType\EwsArrayOfTransitionsGroupsType $transitionsGroups
     * @param \Ews\StructType\EwsArrayOfTransitionsType $transitions
     * @param string $id
     * @param string $name
     */
    public function __construct(\Ews\ArrayType\EwsNonEmptyArrayOfPeriodsType $periods = null, \Ews\ArrayType\EwsArrayOfTransitionsGroupsType $transitionsGroups = null, \Ews\StructType\EwsArrayOfTransitionsType $transitions = null, $id = null, $name = null)
    {
        $this
            ->setPeriods($periods)
            ->setTransitionsGroups($transitionsGroups)
            ->setTransitions($transitions)
            ->setId($id)
            ->setName($name);
    }
    /**
     * Get Periods value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfPeriodsType|null
     */
    public function getPeriods()
    {
        return $this->Periods;
    }
    /**
     * Set Periods value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfPeriodsType $periods
     * @return \Ews\StructType\EwsTimeZoneDefinitionType
     */
    public function setPeriods(\Ews\ArrayType\EwsNonEmptyArrayOfPeriodsType $periods = null)
    {
        $this->Periods = $periods;
        return $this;
    }
    /**
     * Get TransitionsGroups value
     * @return \Ews\ArrayType\EwsArrayOfTransitionsGroupsType|null
     */
    public function getTransitionsGroups()
    {
        return $this->TransitionsGroups;
    }
    /**
     * Set TransitionsGroups value
     * @param \Ews\ArrayType\EwsArrayOfTransitionsGroupsType $transitionsGroups
     * @return \Ews\StructType\EwsTimeZoneDefinitionType
     */
    public function setTransitionsGroups(\Ews\ArrayType\EwsArrayOfTransitionsGroupsType $transitionsGroups = null)
    {
        $this->TransitionsGroups = $transitionsGroups;
        return $this;
    }
    /**
     * Get Transitions value
     * @return \Ews\StructType\EwsArrayOfTransitionsType|null
     */
    public function getTransitions()
    {
        return $this->Transitions;
    }
    /**
     * Set Transitions value
     * @param \Ews\StructType\EwsArrayOfTransitionsType $transitions
     * @return \Ews\StructType\EwsTimeZoneDefinitionType
     */
    public function setTransitions(\Ews\StructType\EwsArrayOfTransitionsType $transitions = null)
    {
        $this->Transitions = $transitions;
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
     * @return \Ews\StructType\EwsTimeZoneDefinitionType
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->Id = $id;
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
     * @return \Ews\StructType\EwsTimeZoneDefinitionType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsTimeZoneDefinitionType
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
