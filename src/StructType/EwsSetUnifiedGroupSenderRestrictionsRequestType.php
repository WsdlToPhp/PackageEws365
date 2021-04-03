<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType
     */
    protected \ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType $RestrictionSettings;
    /**
     * The UnifiedGroupSenderRestrictionsSettings
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType
     */
    protected \ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType $UnifiedGroupSenderRestrictionsSettings;
    /**
     * Constructor method for SetUnifiedGroupSenderRestrictionsRequestType
     * @uses EwsSetUnifiedGroupSenderRestrictionsRequestType::setRestrictionSettings()
     * @uses EwsSetUnifiedGroupSenderRestrictionsRequestType::setUnifiedGroupSenderRestrictionsSettings()
     * @param \ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType $restrictionSettings
     * @param \ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType $unifiedGroupSenderRestrictionsSettings
     */
    public function __construct(\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType $restrictionSettings, \ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType $unifiedGroupSenderRestrictionsSettings)
    {
        $this
            ->setRestrictionSettings($restrictionSettings)
            ->setUnifiedGroupSenderRestrictionsSettings($unifiedGroupSenderRestrictionsSettings);
    }
    /**
     * Get RestrictionSettings value
     * @return \ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType
     */
    public function getRestrictionSettings(): \ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType
    {
        return $this->RestrictionSettings;
    }
    /**
     * Set RestrictionSettings value
     * @param \ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType $restrictionSettings
     * @return \StructType\EwsSetUnifiedGroupSenderRestrictionsRequestType
     */
    public function setRestrictionSettings(\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType $restrictionSettings): self
    {
        $this->RestrictionSettings = $restrictionSettings;
        
        return $this;
    }
    /**
     * Get UnifiedGroupSenderRestrictionsSettings value
     * @return \ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType
     */
    public function getUnifiedGroupSenderRestrictionsSettings(): \ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType
    {
        return $this->UnifiedGroupSenderRestrictionsSettings;
    }
    /**
     * Set UnifiedGroupSenderRestrictionsSettings value
     * @param \ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType $unifiedGroupSenderRestrictionsSettings
     * @return \StructType\EwsSetUnifiedGroupSenderRestrictionsRequestType
     */
    public function setUnifiedGroupSenderRestrictionsSettings(\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType $unifiedGroupSenderRestrictionsSettings): self
    {
        $this->UnifiedGroupSenderRestrictionsSettings = $unifiedGroupSenderRestrictionsSettings;
        
        return $this;
    }
}
