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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ErrorCount;
    /**
     * The ErrorDetails
     * Meta informations extracted from the WSDL
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
        $this->ErrorDetails = $errorDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsAddEntityFeedbackResponseMessageType
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
