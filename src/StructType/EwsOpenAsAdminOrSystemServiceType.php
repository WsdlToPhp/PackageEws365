<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OpenAsAdminOrSystemServiceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Allow attributes in the soap namespace to be used here
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsOpenAsAdminOrSystemServiceType extends AbstractStructBase
{
    /**
     * The LogonType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $LogonType;
    /**
     * The ConnectingSID
     * @var \Ews\StructType\EwsConnectingSIDType
     */
    public $ConnectingSID;
    /**
     * The BudgetType
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $BudgetType;
    /**
     * Constructor method for OpenAsAdminOrSystemServiceType
     * @uses EwsOpenAsAdminOrSystemServiceType::setLogonType()
     * @uses EwsOpenAsAdminOrSystemServiceType::setConnectingSID()
     * @uses EwsOpenAsAdminOrSystemServiceType::setBudgetType()
     * @param string $logonType
     * @param \Ews\StructType\EwsConnectingSIDType $connectingSID
     * @param int $budgetType
     */
    public function __construct($logonType = null, \Ews\StructType\EwsConnectingSIDType $connectingSID = null, $budgetType = null)
    {
        $this
            ->setLogonType($logonType)
            ->setConnectingSID($connectingSID)
            ->setBudgetType($budgetType);
    }
    /**
     * Get LogonType value
     * @return string
     */
    public function getLogonType()
    {
        return $this->LogonType;
    }
    /**
     * Set LogonType value
     * @uses \Ews\EnumType\EwsSpecialLogonTypeType::valueIsValid()
     * @uses \Ews\EnumType\EwsSpecialLogonTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $logonType
     * @return \Ews\StructType\EwsOpenAsAdminOrSystemServiceType
     */
    public function setLogonType($logonType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsSpecialLogonTypeType::valueIsValid($logonType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsSpecialLogonTypeType', is_array($logonType) ? implode(', ', $logonType) : var_export($logonType, true), implode(', ', \Ews\EnumType\EwsSpecialLogonTypeType::getValidValues())), __LINE__);
        }
        $this->LogonType = $logonType;
        return $this;
    }
    /**
     * Get ConnectingSID value
     * @return \Ews\StructType\EwsConnectingSIDType|null
     */
    public function getConnectingSID()
    {
        return $this->ConnectingSID;
    }
    /**
     * Set ConnectingSID value
     * @param \Ews\StructType\EwsConnectingSIDType $connectingSID
     * @return \Ews\StructType\EwsOpenAsAdminOrSystemServiceType
     */
    public function setConnectingSID(\Ews\StructType\EwsConnectingSIDType $connectingSID = null)
    {
        $this->ConnectingSID = $connectingSID;
        return $this;
    }
    /**
     * Get BudgetType value
     * @return int|null
     */
    public function getBudgetType()
    {
        return $this->BudgetType;
    }
    /**
     * Set BudgetType value
     * @param int $budgetType
     * @return \Ews\StructType\EwsOpenAsAdminOrSystemServiceType
     */
    public function setBudgetType($budgetType = null)
    {
        // validation for constraint: int
        if (!is_null($budgetType) && !(is_int($budgetType) || ctype_digit($budgetType))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($budgetType, true), gettype($budgetType)), __LINE__);
        }
        $this->BudgetType = $budgetType;
        return $this;
    }
}
