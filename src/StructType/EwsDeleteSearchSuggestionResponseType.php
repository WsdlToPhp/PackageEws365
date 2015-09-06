<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSearchSuggestionResponseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDeleteSearchSuggestionResponseType extends AbstractStructBase
{
    /**
     * The Success
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var boolean
     */
    public $Success;
    /**
     * The StatusMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $StatusMessage;
    /**
     * The DiagnosticsData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSearchDiagnosticsType
     */
    public $DiagnosticsData;
    /**
     * Constructor method for DeleteSearchSuggestionResponseType
     * @uses EwsDeleteSearchSuggestionResponseType::setSuccess()
     * @uses EwsDeleteSearchSuggestionResponseType::setStatusMessage()
     * @uses EwsDeleteSearchSuggestionResponseType::setDiagnosticsData()
     * @param boolean $success
     * @param string $statusMessage
     * @param \Ews\StructType\EwsSearchDiagnosticsType $diagnosticsData
     */
    public function __construct($success = null, $statusMessage = null, \Ews\StructType\EwsSearchDiagnosticsType $diagnosticsData = null)
    {
        $this
            ->setSuccess($success)
            ->setStatusMessage($statusMessage)
            ->setDiagnosticsData($diagnosticsData);
    }
    /**
     * Get Success value
     * @return boolean
     */
    public function getSuccess()
    {
        return $this->Success;
    }
    /**
     * Set Success value
     * @param boolean $success
     * @return \Ews\StructType\EwsDeleteSearchSuggestionResponseType
     */
    public function setSuccess($success = null)
    {
        $this->Success = $success;
        return $this;
    }
    /**
     * Get StatusMessage value
     * @return string|null
     */
    public function getStatusMessage()
    {
        return $this->StatusMessage;
    }
    /**
     * Set StatusMessage value
     * @param string $statusMessage
     * @return \Ews\StructType\EwsDeleteSearchSuggestionResponseType
     */
    public function setStatusMessage($statusMessage = null)
    {
        $this->StatusMessage = $statusMessage;
        return $this;
    }
    /**
     * Get DiagnosticsData value
     * @return \Ews\StructType\EwsSearchDiagnosticsType|null
     */
    public function getDiagnosticsData()
    {
        return $this->DiagnosticsData;
    }
    /**
     * Set DiagnosticsData value
     * @param \Ews\StructType\EwsSearchDiagnosticsType $diagnosticsData
     * @return \Ews\StructType\EwsDeleteSearchSuggestionResponseType
     */
    public function setDiagnosticsData(\Ews\StructType\EwsSearchDiagnosticsType $diagnosticsData = null)
    {
        $this->DiagnosticsData = $diagnosticsData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsDeleteSearchSuggestionResponseType
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
