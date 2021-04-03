<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected string $LogonType;
    /**
     * The ConnectingSID
     * @var \StructType\EwsConnectingSIDType|null
     */
    protected ?\StructType\EwsConnectingSIDType $ConnectingSID = null;
    /**
     * The BudgetType
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $BudgetType = null;
    /**
     * Constructor method for OpenAsAdminOrSystemServiceType
     * @uses EwsOpenAsAdminOrSystemServiceType::setLogonType()
     * @uses EwsOpenAsAdminOrSystemServiceType::setConnectingSID()
     * @uses EwsOpenAsAdminOrSystemServiceType::setBudgetType()
     * @param string $logonType
     * @param \StructType\EwsConnectingSIDType $connectingSID
     * @param int $budgetType
     */
    public function __construct(string $logonType, ?\StructType\EwsConnectingSIDType $connectingSID = null, ?int $budgetType = null)
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
    public function getLogonType(): string
    {
        return $this->LogonType;
    }
    /**
     * Set LogonType value
     * @uses \EnumType\EwsSpecialLogonTypeType::valueIsValid()
     * @uses \EnumType\EwsSpecialLogonTypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $logonType
     * @return \StructType\EwsOpenAsAdminOrSystemServiceType
     */
    public function setLogonType(string $logonType): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsSpecialLogonTypeType::valueIsValid($logonType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsSpecialLogonTypeType', is_array($logonType) ? implode(', ', $logonType) : var_export($logonType, true), implode(', ', \EnumType\EwsSpecialLogonTypeType::getValidValues())), __LINE__);
        }
        $this->LogonType = $logonType;
        
        return $this;
    }
    /**
     * Get ConnectingSID value
     * @return \StructType\EwsConnectingSIDType|null
     */
    public function getConnectingSID(): ?\StructType\EwsConnectingSIDType
    {
        return $this->ConnectingSID;
    }
    /**
     * Set ConnectingSID value
     * @param \StructType\EwsConnectingSIDType $connectingSID
     * @return \StructType\EwsOpenAsAdminOrSystemServiceType
     */
    public function setConnectingSID(?\StructType\EwsConnectingSIDType $connectingSID = null): self
    {
        $this->ConnectingSID = $connectingSID;
        
        return $this;
    }
    /**
     * Get BudgetType value
     * @return int|null
     */
    public function getBudgetType(): ?int
    {
        return $this->BudgetType;
    }
    /**
     * Set BudgetType value
     * @param int $budgetType
     * @return \StructType\EwsOpenAsAdminOrSystemServiceType
     */
    public function setBudgetType(?int $budgetType = null): self
    {
        // validation for constraint: int
        if (!is_null($budgetType) && !(is_int($budgetType) || ctype_digit($budgetType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($budgetType, true), gettype($budgetType)), __LINE__);
        }
        $this->BudgetType = $budgetType;
        
        return $this;
    }
}
