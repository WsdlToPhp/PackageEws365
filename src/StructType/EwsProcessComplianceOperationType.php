<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessComplianceOperationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsProcessComplianceOperationType extends EwsBaseRequestType
{
    /**
     * The ItemId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: Identifier for a fully resolved item
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ItemId;
    /**
     * The Action
     * Meta informations extracted from the WSDL
     * - use: required
     * - documentation: Types of compliance operation action
     * @var string
     */
    public $Action;
    /**
     * The Data
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var base64Binary
     */
    public $Data;
    /**
     * Constructor method for ProcessComplianceOperationType
     * @uses EwsProcessComplianceOperationType::setItemId()
     * @uses EwsProcessComplianceOperationType::setAction()
     * @uses EwsProcessComplianceOperationType::setData()
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @param string $action
     * @param base64Binary $data
     */
    public function __construct(\Ews\StructType\EwsItemIdType $itemId = null, $action = null, base64Binary $data = null)
    {
        $this
            ->setItemId($itemId)
            ->setAction($action)
            ->setData($data);
    }
    /**
     * Get ItemId value
     * @return \Ews\StructType\EwsItemIdType
     */
    public function getItemId()
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @return \Ews\StructType\EwsProcessComplianceOperationType
     */
    public function setItemId(\Ews\StructType\EwsItemIdType $itemId = null)
    {
        $this->ItemId = $itemId;
        return $this;
    }
    /**
     * Get Action value
     * @return string
     */
    public function getAction()
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @uses \Ews\EnumType\EwsProcessComplianceOperationActionType::valueIsValid()
     * @uses \Ews\EnumType\EwsProcessComplianceOperationActionType::getValidValues()
     * @param string $action
     * @return \Ews\StructType\EwsProcessComplianceOperationType
     */
    public function setAction($action = null)
    {
        if (!\Ews\EnumType\EwsProcessComplianceOperationActionType::valueIsValid($action)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $action, implode(', ', \Ews\EnumType\EwsProcessComplianceOperationActionType::getValidValues())), __LINE__);
        }
        $this->Action = $action;
        return $this;
    }
    /**
     * Get Data value
     * @return base64Binary|null
     */
    public function getData()
    {
        return $this->Data;
    }
    /**
     * Set Data value
     * @param base64Binary $data
     * @return \Ews\StructType\EwsProcessComplianceOperationType
     */
    public function setData(base64Binary $data = null)
    {
        $this->Data = $data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsProcessComplianceOperationType
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
