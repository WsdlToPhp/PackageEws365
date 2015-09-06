<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArrayOfRuleOperationsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Represents an array of rule operations to be performed
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfRuleOperationsType extends AbstractStructBase
{
    /**
     * The CreateRuleOperation
     * @var \Ews\StructType\EwsCreateRuleOperationType
     */
    public $CreateRuleOperation;
    /**
     * The SetRuleOperation
     * @var \Ews\StructType\EwsSetRuleOperationType
     */
    public $SetRuleOperation;
    /**
     * The DeleteRuleOperation
     * @var \Ews\StructType\EwsDeleteRuleOperationType
     */
    public $DeleteRuleOperation;
    /**
     * Constructor method for ArrayOfRuleOperationsType
     * @uses EwsArrayOfRuleOperationsType::setCreateRuleOperation()
     * @uses EwsArrayOfRuleOperationsType::setSetRuleOperation()
     * @uses EwsArrayOfRuleOperationsType::setDeleteRuleOperation()
     * @param \Ews\StructType\EwsCreateRuleOperationType $createRuleOperation
     * @param \Ews\StructType\EwsSetRuleOperationType $setRuleOperation
     * @param \Ews\StructType\EwsDeleteRuleOperationType $deleteRuleOperation
     */
    public function __construct(\Ews\StructType\EwsCreateRuleOperationType $createRuleOperation = null, \Ews\StructType\EwsSetRuleOperationType $setRuleOperation = null, \Ews\StructType\EwsDeleteRuleOperationType $deleteRuleOperation = null)
    {
        $this
            ->setCreateRuleOperation($createRuleOperation)
            ->setSetRuleOperation($setRuleOperation)
            ->setDeleteRuleOperation($deleteRuleOperation);
    }
    /**
     * Get CreateRuleOperation value
     * @return \Ews\StructType\EwsCreateRuleOperationType|null
     */
    public function getCreateRuleOperation()
    {
        return $this->CreateRuleOperation;
    }
    /**
     * Set CreateRuleOperation value
     * @param \Ews\StructType\EwsCreateRuleOperationType $createRuleOperation
     * @return \Ews\StructType\EwsArrayOfRuleOperationsType
     */
    public function setCreateRuleOperation(\Ews\StructType\EwsCreateRuleOperationType $createRuleOperation = null)
    {
        $this->CreateRuleOperation = $createRuleOperation;
        return $this;
    }
    /**
     * Get SetRuleOperation value
     * @return \Ews\StructType\EwsSetRuleOperationType|null
     */
    public function getSetRuleOperation()
    {
        return $this->SetRuleOperation;
    }
    /**
     * Set SetRuleOperation value
     * @param \Ews\StructType\EwsSetRuleOperationType $setRuleOperation
     * @return \Ews\StructType\EwsArrayOfRuleOperationsType
     */
    public function setSetRuleOperation(\Ews\StructType\EwsSetRuleOperationType $setRuleOperation = null)
    {
        $this->SetRuleOperation = $setRuleOperation;
        return $this;
    }
    /**
     * Get DeleteRuleOperation value
     * @return \Ews\StructType\EwsDeleteRuleOperationType|null
     */
    public function getDeleteRuleOperation()
    {
        return $this->DeleteRuleOperation;
    }
    /**
     * Set DeleteRuleOperation value
     * @param \Ews\StructType\EwsDeleteRuleOperationType $deleteRuleOperation
     * @return \Ews\StructType\EwsArrayOfRuleOperationsType
     */
    public function setDeleteRuleOperation(\Ews\StructType\EwsDeleteRuleOperationType $deleteRuleOperation = null)
    {
        $this->DeleteRuleOperation = $deleteRuleOperation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsArrayOfRuleOperationsType
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
