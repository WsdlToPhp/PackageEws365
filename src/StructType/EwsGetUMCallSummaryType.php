<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUMCallSummaryType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUMCallSummaryType extends EwsBaseRequestType
{
    /**
     * The DailPlanGuid
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $DailPlanGuid;
    /**
     * The GatewayGuid
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $GatewayGuid;
    /**
     * The GroupRecordsBy
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $GroupRecordsBy;
    /**
     * Constructor method for GetUMCallSummaryType
     * @uses EwsGetUMCallSummaryType::setDailPlanGuid()
     * @uses EwsGetUMCallSummaryType::setGatewayGuid()
     * @uses EwsGetUMCallSummaryType::setGroupRecordsBy()
     * @param string $dailPlanGuid
     * @param string $gatewayGuid
     * @param string $groupRecordsBy
     */
    public function __construct($dailPlanGuid = null, $gatewayGuid = null, $groupRecordsBy = null)
    {
        $this
            ->setDailPlanGuid($dailPlanGuid)
            ->setGatewayGuid($gatewayGuid)
            ->setGroupRecordsBy($groupRecordsBy);
    }
    /**
     * Get DailPlanGuid value
     * @return string
     */
    public function getDailPlanGuid()
    {
        return $this->DailPlanGuid;
    }
    /**
     * Set DailPlanGuid value
     * @param string $dailPlanGuid
     * @return \Ews\StructType\EwsGetUMCallSummaryType
     */
    public function setDailPlanGuid($dailPlanGuid = null)
    {
        // validation for constraint: string
        if (!is_null($dailPlanGuid) && !is_string($dailPlanGuid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dailPlanGuid, true), gettype($dailPlanGuid)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($dailPlanGuid) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $dailPlanGuid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($dailPlanGuid, true)), __LINE__);
        }
        $this->DailPlanGuid = $dailPlanGuid;
        return $this;
    }
    /**
     * Get GatewayGuid value
     * @return string
     */
    public function getGatewayGuid()
    {
        return $this->GatewayGuid;
    }
    /**
     * Set GatewayGuid value
     * @param string $gatewayGuid
     * @return \Ews\StructType\EwsGetUMCallSummaryType
     */
    public function setGatewayGuid($gatewayGuid = null)
    {
        // validation for constraint: string
        if (!is_null($gatewayGuid) && !is_string($gatewayGuid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gatewayGuid, true), gettype($gatewayGuid)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($gatewayGuid) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $gatewayGuid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($gatewayGuid, true)), __LINE__);
        }
        $this->GatewayGuid = $gatewayGuid;
        return $this;
    }
    /**
     * Get GroupRecordsBy value
     * @return string
     */
    public function getGroupRecordsBy()
    {
        return $this->GroupRecordsBy;
    }
    /**
     * Set GroupRecordsBy value
     * @uses \Ews\EnumType\EwsUMCDRGroupByType::valueIsValid()
     * @uses \Ews\EnumType\EwsUMCDRGroupByType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $groupRecordsBy
     * @return \Ews\StructType\EwsGetUMCallSummaryType
     */
    public function setGroupRecordsBy($groupRecordsBy = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsUMCDRGroupByType::valueIsValid($groupRecordsBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsUMCDRGroupByType', is_array($groupRecordsBy) ? implode(', ', $groupRecordsBy) : var_export($groupRecordsBy, true), implode(', ', \Ews\EnumType\EwsUMCDRGroupByType::getValidValues())), __LINE__);
        }
        $this->GroupRecordsBy = $groupRecordsBy;
        return $this;
    }
}
