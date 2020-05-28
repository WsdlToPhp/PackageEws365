<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocationConstraintItem StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsLocationConstraintItem extends EwsMeetingTimeCandidatesConstraintItem
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The ResolveAvailability
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ResolveAvailability;
    /**
     * Constructor method for LocationConstraintItem
     * @uses EwsLocationConstraintItem::setName()
     * @uses EwsLocationConstraintItem::setResolveAvailability()
     * @param string $name
     * @param bool $resolveAvailability
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
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get ResolveAvailability value
     * @return bool|null
     */
    public function getResolveAvailability()
    {
        return $this->ResolveAvailability;
    }
    /**
     * Set ResolveAvailability value
     * @param bool $resolveAvailability
     * @return \Ews\StructType\EwsLocationConstraintItem
     */
    public function setResolveAvailability($resolveAvailability = null)
    {
        // validation for constraint: boolean
        if (!is_null($resolveAvailability) && !is_bool($resolveAvailability)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($resolveAvailability, true), gettype($resolveAvailability)), __LINE__);
        }
        $this->ResolveAvailability = $resolveAvailability;
        return $this;
    }
}
