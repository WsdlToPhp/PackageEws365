<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetUnifiedGroupSenderRestrictionsRequestType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetUnifiedGroupSenderRestrictionsRequestType extends EwsUnifiedGroupBaseRequestType
{
    /**
     * The RestrictionSettings
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType
     */
    public $RestrictionSettings;
    /**
     * The UnifiedGroupSenderRestrictionsSettings
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType
     */
    public $UnifiedGroupSenderRestrictionsSettings;
    /**
     * Constructor method for SetUnifiedGroupSenderRestrictionsRequestType
     * @uses EwsSetUnifiedGroupSenderRestrictionsRequestType::setRestrictionSettings()
     * @uses EwsSetUnifiedGroupSenderRestrictionsRequestType::setUnifiedGroupSenderRestrictionsSettings()
     * @param \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType $restrictionSettings
     * @param \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType $unifiedGroupSenderRestrictionsSettings
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType $restrictionSettings = null, \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType $unifiedGroupSenderRestrictionsSettings = null)
    {
        $this
            ->setRestrictionSettings($restrictionSettings)
            ->setUnifiedGroupSenderRestrictionsSettings($unifiedGroupSenderRestrictionsSettings);
    }
    /**
     * Get RestrictionSettings value
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType
     */
    public function getRestrictionSettings()
    {
        return $this->RestrictionSettings;
    }
    /**
     * Set RestrictionSettings value
     * @param \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType $restrictionSettings
     * @return \Ews\StructType\EwsSetUnifiedGroupSenderRestrictionsRequestType
     */
    public function setRestrictionSettings(\Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType $restrictionSettings = null)
    {
        $this->RestrictionSettings = $restrictionSettings;
        return $this;
    }
    /**
     * Get UnifiedGroupSenderRestrictionsSettings value
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType
     */
    public function getUnifiedGroupSenderRestrictionsSettings()
    {
        return $this->UnifiedGroupSenderRestrictionsSettings;
    }
    /**
     * Set UnifiedGroupSenderRestrictionsSettings value
     * @param \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType $unifiedGroupSenderRestrictionsSettings
     * @return \Ews\StructType\EwsSetUnifiedGroupSenderRestrictionsRequestType
     */
    public function setUnifiedGroupSenderRestrictionsSettings(\Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType $unifiedGroupSenderRestrictionsSettings = null)
    {
        $this->UnifiedGroupSenderRestrictionsSettings = $unifiedGroupSenderRestrictionsSettings;
        return $this;
    }
}
