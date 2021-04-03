<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfEntityFeedbackEntry
     */
    protected \ArrayType\EwsArrayOfEntityFeedbackEntry $EntityFeedbackEntries;
    /**
     * Constructor method for AddEntityFeedbackType
     * @uses EwsAddEntityFeedbackType::setEntityFeedbackEntries()
     * @param \ArrayType\EwsArrayOfEntityFeedbackEntry $entityFeedbackEntries
     */
    public function __construct(\ArrayType\EwsArrayOfEntityFeedbackEntry $entityFeedbackEntries)
    {
        $this
            ->setEntityFeedbackEntries($entityFeedbackEntries);
    }
    /**
     * Get EntityFeedbackEntries value
     * @return \ArrayType\EwsArrayOfEntityFeedbackEntry
     */
    public function getEntityFeedbackEntries(): \ArrayType\EwsArrayOfEntityFeedbackEntry
    {
        return $this->EntityFeedbackEntries;
    }
    /**
     * Set EntityFeedbackEntries value
     * @param \ArrayType\EwsArrayOfEntityFeedbackEntry $entityFeedbackEntries
     * @return \StructType\EwsAddEntityFeedbackType
     */
    public function setEntityFeedbackEntries(\ArrayType\EwsArrayOfEntityFeedbackEntry $entityFeedbackEntries): self
    {
        $this->EntityFeedbackEntries = $entityFeedbackEntries;
        
        return $this;
    }
}
