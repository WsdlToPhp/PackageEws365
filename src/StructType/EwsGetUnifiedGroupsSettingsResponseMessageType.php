<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUnifiedGroupsSettingsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUnifiedGroupsSettingsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The GroupsEnabled
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $GroupsEnabled;
    /**
     * The GroupCreationEnabled
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $GroupCreationEnabled;
    /**
     * The IsUnifiedGroupsAddressListPresent
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $IsUnifiedGroupsAddressListPresent;
    /**
     * The EditGroupOwaTemplateUrl
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EditGroupOwaTemplateUrl;
    /**
     * The BrowseGroupsUrl
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BrowseGroupsUrl;
    /**
     * The GroupsTargetDomain
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GroupsTargetDomain;
    /**
     * The GroupsGuidelinesLink
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GroupsGuidelinesLink;
    /**
     * Constructor method for GetUnifiedGroupsSettingsResponseMessageType
     * @uses EwsGetUnifiedGroupsSettingsResponseMessageType::setGroupsEnabled()
     * @uses EwsGetUnifiedGroupsSettingsResponseMessageType::setGroupCreationEnabled()
     * @uses EwsGetUnifiedGroupsSettingsResponseMessageType::setIsUnifiedGroupsAddressListPresent()
     * @uses EwsGetUnifiedGroupsSettingsResponseMessageType::setEditGroupOwaTemplateUrl()
     * @uses EwsGetUnifiedGroupsSettingsResponseMessageType::setBrowseGroupsUrl()
     * @uses EwsGetUnifiedGroupsSettingsResponseMessageType::setGroupsTargetDomain()
     * @uses EwsGetUnifiedGroupsSettingsResponseMessageType::setGroupsGuidelinesLink()
     * @param bool $groupsEnabled
     * @param bool $groupCreationEnabled
     * @param bool $isUnifiedGroupsAddressListPresent
     * @param string $editGroupOwaTemplateUrl
     * @param string $browseGroupsUrl
     * @param string $groupsTargetDomain
     * @param string $groupsGuidelinesLink
     */
    public function __construct($groupsEnabled = null, $groupCreationEnabled = null, $isUnifiedGroupsAddressListPresent = null, $editGroupOwaTemplateUrl = null, $browseGroupsUrl = null, $groupsTargetDomain = null, $groupsGuidelinesLink = null)
    {
        $this
            ->setGroupsEnabled($groupsEnabled)
            ->setGroupCreationEnabled($groupCreationEnabled)
            ->setIsUnifiedGroupsAddressListPresent($isUnifiedGroupsAddressListPresent)
            ->setEditGroupOwaTemplateUrl($editGroupOwaTemplateUrl)
            ->setBrowseGroupsUrl($browseGroupsUrl)
            ->setGroupsTargetDomain($groupsTargetDomain)
            ->setGroupsGuidelinesLink($groupsGuidelinesLink);
    }
    /**
     * Get GroupsEnabled value
     * @return bool|null
     */
    public function getGroupsEnabled()
    {
        return $this->GroupsEnabled;
    }
    /**
     * Set GroupsEnabled value
     * @param bool $groupsEnabled
     * @return \Ews\StructType\EwsGetUnifiedGroupsSettingsResponseMessageType
     */
    public function setGroupsEnabled($groupsEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($groupsEnabled) && !is_bool($groupsEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($groupsEnabled, true), gettype($groupsEnabled)), __LINE__);
        }
        $this->GroupsEnabled = $groupsEnabled;
        return $this;
    }
    /**
     * Get GroupCreationEnabled value
     * @return bool|null
     */
    public function getGroupCreationEnabled()
    {
        return $this->GroupCreationEnabled;
    }
    /**
     * Set GroupCreationEnabled value
     * @param bool $groupCreationEnabled
     * @return \Ews\StructType\EwsGetUnifiedGroupsSettingsResponseMessageType
     */
    public function setGroupCreationEnabled($groupCreationEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($groupCreationEnabled) && !is_bool($groupCreationEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($groupCreationEnabled, true), gettype($groupCreationEnabled)), __LINE__);
        }
        $this->GroupCreationEnabled = $groupCreationEnabled;
        return $this;
    }
    /**
     * Get IsUnifiedGroupsAddressListPresent value
     * @return bool|null
     */
    public function getIsUnifiedGroupsAddressListPresent()
    {
        return $this->IsUnifiedGroupsAddressListPresent;
    }
    /**
     * Set IsUnifiedGroupsAddressListPresent value
     * @param bool $isUnifiedGroupsAddressListPresent
     * @return \Ews\StructType\EwsGetUnifiedGroupsSettingsResponseMessageType
     */
    public function setIsUnifiedGroupsAddressListPresent($isUnifiedGroupsAddressListPresent = null)
    {
        // validation for constraint: boolean
        if (!is_null($isUnifiedGroupsAddressListPresent) && !is_bool($isUnifiedGroupsAddressListPresent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isUnifiedGroupsAddressListPresent, true), gettype($isUnifiedGroupsAddressListPresent)), __LINE__);
        }
        $this->IsUnifiedGroupsAddressListPresent = $isUnifiedGroupsAddressListPresent;
        return $this;
    }
    /**
     * Get EditGroupOwaTemplateUrl value
     * @return string|null
     */
    public function getEditGroupOwaTemplateUrl()
    {
        return $this->EditGroupOwaTemplateUrl;
    }
    /**
     * Set EditGroupOwaTemplateUrl value
     * @param string $editGroupOwaTemplateUrl
     * @return \Ews\StructType\EwsGetUnifiedGroupsSettingsResponseMessageType
     */
    public function setEditGroupOwaTemplateUrl($editGroupOwaTemplateUrl = null)
    {
        // validation for constraint: string
        if (!is_null($editGroupOwaTemplateUrl) && !is_string($editGroupOwaTemplateUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($editGroupOwaTemplateUrl, true), gettype($editGroupOwaTemplateUrl)), __LINE__);
        }
        $this->EditGroupOwaTemplateUrl = $editGroupOwaTemplateUrl;
        return $this;
    }
    /**
     * Get BrowseGroupsUrl value
     * @return string|null
     */
    public function getBrowseGroupsUrl()
    {
        return $this->BrowseGroupsUrl;
    }
    /**
     * Set BrowseGroupsUrl value
     * @param string $browseGroupsUrl
     * @return \Ews\StructType\EwsGetUnifiedGroupsSettingsResponseMessageType
     */
    public function setBrowseGroupsUrl($browseGroupsUrl = null)
    {
        // validation for constraint: string
        if (!is_null($browseGroupsUrl) && !is_string($browseGroupsUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($browseGroupsUrl, true), gettype($browseGroupsUrl)), __LINE__);
        }
        $this->BrowseGroupsUrl = $browseGroupsUrl;
        return $this;
    }
    /**
     * Get GroupsTargetDomain value
     * @return string|null
     */
    public function getGroupsTargetDomain()
    {
        return $this->GroupsTargetDomain;
    }
    /**
     * Set GroupsTargetDomain value
     * @param string $groupsTargetDomain
     * @return \Ews\StructType\EwsGetUnifiedGroupsSettingsResponseMessageType
     */
    public function setGroupsTargetDomain($groupsTargetDomain = null)
    {
        // validation for constraint: string
        if (!is_null($groupsTargetDomain) && !is_string($groupsTargetDomain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupsTargetDomain, true), gettype($groupsTargetDomain)), __LINE__);
        }
        $this->GroupsTargetDomain = $groupsTargetDomain;
        return $this;
    }
    /**
     * Get GroupsGuidelinesLink value
     * @return string|null
     */
    public function getGroupsGuidelinesLink()
    {
        return $this->GroupsGuidelinesLink;
    }
    /**
     * Set GroupsGuidelinesLink value
     * @param string $groupsGuidelinesLink
     * @return \Ews\StructType\EwsGetUnifiedGroupsSettingsResponseMessageType
     */
    public function setGroupsGuidelinesLink($groupsGuidelinesLink = null)
    {
        // validation for constraint: string
        if (!is_null($groupsGuidelinesLink) && !is_string($groupsGuidelinesLink)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupsGuidelinesLink, true), gettype($groupsGuidelinesLink)), __LINE__);
        }
        $this->GroupsGuidelinesLink = $groupsGuidelinesLink;
        return $this;
    }
}
