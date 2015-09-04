<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddEntityFeedbackType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsAddEntityFeedbackType extends EwsBaseRequestType
{
    /**
     * The EntityFeedbackEntries
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfEntityFeedbackEntry
     */
    public $EntityFeedbackEntries;
    /**
     * Constructor method for AddEntityFeedbackType
     * @uses EwsAddEntityFeedbackType::setEntityFeedbackEntries()
     * @param \Ews\ArrayType\EwsArrayOfEntityFeedbackEntry $entityFeedbackEntries
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfEntityFeedbackEntry $entityFeedbackEntries = null)
    {
        $this
            ->setEntityFeedbackEntries($entityFeedbackEntries);
    }
    /**
     * Get EntityFeedbackEntries value
     * @return \Ews\ArrayType\EwsArrayOfEntityFeedbackEntry
     */
    public function getEntityFeedbackEntries()
    {
        return $this->EntityFeedbackEntries;
    }
    /**
     * Set EntityFeedbackEntries value
     * @param \Ews\ArrayType\EwsArrayOfEntityFeedbackEntry $entityFeedbackEntries
     * @return \Ews\StructType\EwsAddEntityFeedbackType
     */
    public function setEntityFeedbackEntries(\Ews\ArrayType\EwsArrayOfEntityFeedbackEntry $entityFeedbackEntries = null)
    {
        $this->EntityFeedbackEntries = $entityFeedbackEntries;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsAddEntityFeedbackType
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
