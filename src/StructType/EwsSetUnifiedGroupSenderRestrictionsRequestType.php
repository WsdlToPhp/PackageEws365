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
     * The GroupIdentity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsUnifiedGroupIdentity
     */
    public $GroupIdentity;
    /**
     * The RestrictionSettings
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType
     */
    public $RestrictionSettings;
    /**
     * The UnifiedGroupSenderRestrictionsSettings
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType
     */
    public $UnifiedGroupSenderRestrictionsSettings;
    /**
     * Constructor method for SetUnifiedGroupSenderRestrictionsRequestType
     * @uses EwsSetUnifiedGroupSenderRestrictionsRequestType::setGroupIdentity()
     * @uses EwsSetUnifiedGroupSenderRestrictionsRequestType::setRestrictionSettings()
     * @uses EwsSetUnifiedGroupSenderRestrictionsRequestType::setUnifiedGroupSenderRestrictionsSettings()
     * @param \Ews\StructType\EwsUnifiedGroupIdentity $groupIdentity
     * @param \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType $restrictionSettings
     * @param \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType $unifiedGroupSenderRestrictionsSettings
     */
    public function __construct(\Ews\StructType\EwsUnifiedGroupIdentity $groupIdentity = null, \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType $restrictionSettings = null, \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType $unifiedGroupSenderRestrictionsSettings = null)
    {
        $this
            ->setGroupIdentity($groupIdentity)
            ->setRestrictionSettings($restrictionSettings)
            ->setUnifiedGroupSenderRestrictionsSettings($unifiedGroupSenderRestrictionsSettings);
    }
    /**
     * Get GroupIdentity value
     * @return \Ews\StructType\EwsUnifiedGroupIdentity
     */
    public function getGroupIdentity()
    {
        return $this->GroupIdentity;
    }
    /**
     * Set GroupIdentity value
     * @param \Ews\StructType\EwsUnifiedGroupIdentity $groupIdentity
     * @return \Ews\StructType\EwsSetUnifiedGroupSenderRestrictionsRequestType
     */
    public function setGroupIdentity(\Ews\StructType\EwsUnifiedGroupIdentity $groupIdentity = null)
    {
        $this->GroupIdentity = $groupIdentity;
        return $this;
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSetUnifiedGroupSenderRestrictionsRequestType
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
