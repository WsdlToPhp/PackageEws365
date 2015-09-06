<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateItemResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUpdateItemResponseMessageType extends EwsItemInfoResponseMessageType
{
    /**
     * The ConflictResults
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsConflictResultsType
     */
    public $ConflictResults;
    /**
     * Constructor method for UpdateItemResponseMessageType
     * @uses EwsUpdateItemResponseMessageType::setConflictResults()
     * @param \Ews\StructType\EwsConflictResultsType $conflictResults
     */
    public function __construct(\Ews\StructType\EwsConflictResultsType $conflictResults = null)
    {
        $this
            ->setConflictResults($conflictResults);
    }
    /**
     * Get ConflictResults value
     * @return \Ews\StructType\EwsConflictResultsType|null
     */
    public function getConflictResults()
    {
        return $this->ConflictResults;
    }
    /**
     * Set ConflictResults value
     * @param \Ews\StructType\EwsConflictResultsType $conflictResults
     * @return \Ews\StructType\EwsUpdateItemResponseMessageType
     */
    public function setConflictResults(\Ews\StructType\EwsConflictResultsType $conflictResults = null)
    {
        $this->ConflictResults = $conflictResults;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUpdateItemResponseMessageType
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
