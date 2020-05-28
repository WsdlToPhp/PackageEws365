<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddEntityFeedbackResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAddEntityFeedbackResponseMessageType extends EwsResponseMessageType
{
    /**
     * The ErrorCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ErrorCount;
    /**
     * The ErrorDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ErrorDetails;
    /**
     * Constructor method for AddEntityFeedbackResponseMessageType
     * @uses EwsAddEntityFeedbackResponseMessageType::setErrorCount()
     * @uses EwsAddEntityFeedbackResponseMessageType::setErrorDetails()
     * @param int $errorCount
     * @param string $errorDetails
     */
    public function __construct($errorCount = null, $errorDetails = null)
    {
        $this
            ->setErrorCount($errorCount)
            ->setErrorDetails($errorDetails);
    }
    /**
     * Get ErrorCount value
     * @return int
     */
    public function getErrorCount()
    {
        return $this->ErrorCount;
    }
    /**
     * Set ErrorCount value
     * @param int $errorCount
     * @return \Ews\StructType\EwsAddEntityFeedbackResponseMessageType
     */
    public function setErrorCount($errorCount = null)
    {
        // validation for constraint: int
        if (!is_null($errorCount) && !(is_int($errorCount) || ctype_digit($errorCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorCount, true), gettype($errorCount)), __LINE__);
        }
        $this->ErrorCount = $errorCount;
        return $this;
    }
    /**
     * Get ErrorDetails value
     * @return string|null
     */
    public function getErrorDetails()
    {
        return $this->ErrorDetails;
    }
    /**
     * Set ErrorDetails value
     * @param string $errorDetails
     * @return \Ews\StructType\EwsAddEntityFeedbackResponseMessageType
     */
    public function setErrorDetails($errorDetails = null)
    {
        // validation for constraint: string
        if (!is_null($errorDetails) && !is_string($errorDetails)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorDetails, true), gettype($errorDetails)), __LINE__);
        }
        $this->ErrorDetails = $errorDetails;
        return $this;
    }
}
