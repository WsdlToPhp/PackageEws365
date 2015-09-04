<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocationConstraintItem StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsLocationConstraintItem extends EwsMeetingTimeCandidatesConstraintItem
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The ResolveAvailability
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $ResolveAvailability;
    /**
     * Constructor method for LocationConstraintItem
     * @uses EwsLocationConstraintItem::setName()
     * @uses EwsLocationConstraintItem::setResolveAvailability()
     * @param string $name
     * @param boolean $resolveAvailability
     */
    public function __construct($name = null, $resolveAvailability = null)
    {
        $this
            ->setName($name)
            ->setResolveAvailability($resolveAvailability);
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
     * @return \Ews\StructType\EwsLocationConstraintItem
     */
    public function setName($name = null)
    {
        $this->Name = $name;
        return $this;
    }
    /**
     * Get ResolveAvailability value
     * @return boolean|null
     */
    public function getResolveAvailability()
    {
        return $this->ResolveAvailability;
    }
    /**
     * Set ResolveAvailability value
     * @param boolean $resolveAvailability
     * @return \Ews\StructType\EwsLocationConstraintItem
     */
    public function setResolveAvailability($resolveAvailability = null)
    {
        $this->ResolveAvailability = $resolveAvailability;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsLocationConstraintItem
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
