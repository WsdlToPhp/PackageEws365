<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArrayOfTransitionsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfTransitionsType extends AbstractStructBase
{
    /**
     * The Transition
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: t:Transition
     * @var \Ews\StructType\EwsTransitionType[]
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
     * @param \Ews\StructType\EwsTransitionType[] $transition
     * @param string $id
     */
    public function __construct(array $transition = array(), $id = null)
    {
        $this
            ->setTransition($transition)
            ->setId($id);
    }
    /**
     * Get Transition value
     * @return \Ews\StructType\EwsTransitionType[]|null
     */
    public function getTransition()
    {
        return $this->Transition;
    }
    /**
     * Set Transition value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsTransitionType[] $transition
     * @return \Ews\StructType\EwsArrayOfTransitionsType
     */
    public function setTransition(array $transition = array())
    {
        foreach ($transition as $arrayOfTransitionsTypeTransitionItem) {
            // validation for constraint: itemType
            if (!$arrayOfTransitionsTypeTransitionItem instanceof \Ews\StructType\EwsTransitionType) {
                throw new \InvalidArgumentException(sprintf('The Transition property can only contain items of \Ews\StructType\EwsTransitionType, "%s" given', is_object($arrayOfTransitionsTypeTransitionItem) ? get_class($arrayOfTransitionsTypeTransitionItem) : gettype($arrayOfTransitionsTypeTransitionItem)), __LINE__);
            }
        }
        $this->Transition = $transition;
        return $this;
    }
    /**
     * Add item to Transition value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsTransitionType $item
     * @return \Ews\StructType\EwsArrayOfTransitionsType
     */
    public function addToTransition(\Ews\StructType\EwsTransitionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsTransitionType) {
            throw new \InvalidArgumentException(sprintf('The Transition property can only contain items of \Ews\StructType\EwsTransitionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Transition[] = $item;
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
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
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
