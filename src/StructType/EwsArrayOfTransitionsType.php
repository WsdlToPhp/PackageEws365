<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArrayOfTransitionsType StructType
 * Meta informations extracted from the WSDL
 * - maxOccurs: unbounded
 * - ref: t:Transition
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsArrayOfTransitionsType extends AbstractStructBase
{
    /**
     * The Transition
     * @var \Ews\StructType\EwsTransitionType
     */
    public $Transition;
    /**
     * The Id
     * @var string
     */
    public $Id;
    /**
     * Constructor method for ArrayOfTransitionsType
     * @uses EwsArrayOfTransitionsType::setTransition()
     * @uses EwsArrayOfTransitionsType::setId()
     * @param \Ews\StructType\EwsTransitionType $transition
     * @param string $id
     */
    public function __construct(\Ews\StructType\EwsTransitionType $transition = null, $id = null)
    {
        $this
            ->setTransition($transition)
            ->setId($id);
    }
    /**
     * Get Transition value
     * @return \Ews\StructType\EwsTransitionType|null
     */
    public function getTransition()
    {
        return $this->Transition;
    }
    /**
     * Set Transition value
     * @param \Ews\StructType\EwsTransitionType $transition
     * @return \Ews\StructType\EwsArrayOfTransitionsType
     */
    public function setTransition(\Ews\StructType\EwsTransitionType $transition = null)
    {
        $this->Transition = $transition;
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
     * @return \Ews\StructType\EwsArrayOfTransitionsType
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
     * @return \Ews\StructType\EwsArrayOfTransitionsType
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
