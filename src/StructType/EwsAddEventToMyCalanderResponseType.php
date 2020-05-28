<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddEventToMyCalanderResponseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAddEventToMyCalanderResponseType extends EwsResponseMessageType
{
    /**
     * The WasSuccessful
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $WasSuccessful;
    /**
     * Constructor method for AddEventToMyCalanderResponseType
     * @uses EwsAddEventToMyCalanderResponseType::setWasSuccessful()
     * @param bool $wasSuccessful
     */
    public function __construct($wasSuccessful = null)
    {
        $this
            ->setWasSuccessful($wasSuccessful);
    }
    /**
     * Get WasSuccessful value
     * @return bool
     */
    public function getWasSuccessful()
    {
        return $this->WasSuccessful;
    }
    /**
     * Set WasSuccessful value
     * @param bool $wasSuccessful
     * @return \Ews\StructType\EwsAddEventToMyCalanderResponseType
     */
    public function setWasSuccessful($wasSuccessful = null)
    {
        // validation for constraint: boolean
        if (!is_null($wasSuccessful) && !is_bool($wasSuccessful)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($wasSuccessful, true), gettype($wasSuccessful)), __LINE__);
        }
        $this->WasSuccessful = $wasSuccessful;
        return $this;
    }
}
