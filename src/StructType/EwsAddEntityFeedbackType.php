<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddEntityFeedbackType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAddEntityFeedbackType extends EwsBaseRequestType
{
    /**
     * The EntityFeedbackEntries
     * Meta information extracted from the WSDL
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
}
