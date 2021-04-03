<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsItemIdType
     */
    protected \StructType\EwsItemIdType $ItemId;
    /**
     * The Action
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Action;
    /**
     * The Data
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Data = null;
    /**
     * Constructor method for ProcessComplianceOperationType
     * @uses EwsProcessComplianceOperationType::setItemId()
     * @uses EwsProcessComplianceOperationType::setAction()
     * @uses EwsProcessComplianceOperationType::setData()
     * @param \StructType\EwsItemIdType $itemId
     * @param string $action
     * @param string $data
     */
    public function __construct(\StructType\EwsItemIdType $itemId, string $action, ?string $data = null)
    {
        $this
            ->setItemId($itemId)
            ->setAction($action)
            ->setData($data);
    }
    /**
     * Get ItemId value
     * @return \StructType\EwsItemIdType
     */
    public function getItemId(): \StructType\EwsItemIdType
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \StructType\EwsItemIdType $itemId
     * @return \StructType\EwsProcessComplianceOperationType
     */
    public function setItemId(\StructType\EwsItemIdType $itemId): self
    {
        $this->ItemId = $itemId;
        
        return $this;
    }
    /**
     * Get Action value
     * @return string
     */
    public function getAction(): string
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @uses \EnumType\EwsProcessComplianceOperationActionType::valueIsValid()
     * @uses \EnumType\EwsProcessComplianceOperationActionType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $action
     * @return \StructType\EwsProcessComplianceOperationType
     */
    public function setAction(string $action): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsProcessComplianceOperationActionType::valueIsValid($action)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsProcessComplianceOperationActionType', is_array($action) ? implode(', ', $action) : var_export($action, true), implode(', ', \EnumType\EwsProcessComplianceOperationActionType::getValidValues())), __LINE__);
        }
        $this->Action = $action;
        
        return $this;
    }
    /**
     * Get Data value
     * @return string|null
     */
    public function getData(): ?string
    {
        return $this->Data;
    }
    /**
     * Set Data value
     * @param string $data
     * @return \StructType\EwsProcessComplianceOperationType
     */
    public function setData(?string $data = null): self
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($data, true), gettype($data)), __LINE__);
        }
        $this->Data = $data;
        
        return $this;
    }
}
