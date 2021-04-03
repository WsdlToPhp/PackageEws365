<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var bool|null
     */
    protected ?bool $GroupsEnabled = null;
    /**
     * The GroupCreationEnabled
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $GroupCreationEnabled = null;
    /**
     * The IsUnifiedGroupsAddressListPresent
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsUnifiedGroupsAddressListPresent = null;
    /**
     * The EditGroupOwaTemplateUrl
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EditGroupOwaTemplateUrl = null;
    /**
     * The BrowseGroupsUrl
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BrowseGroupsUrl = null;
    /**
     * The GroupsTargetDomain
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $GroupsTargetDomain = null;
    /**
     * The GroupsGuidelinesLink
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $GroupsGuidelinesLink = null;
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
    public function __construct(?bool $groupsEnabled = null, ?bool $groupCreationEnabled = null, ?bool $isUnifiedGroupsAddressListPresent = null, ?string $editGroupOwaTemplateUrl = null, ?string $browseGroupsUrl = null, ?string $groupsTargetDomain = null, ?string $groupsGuidelinesLink = null)
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
    public function getGroupsEnabled(): ?bool
    {
        return $this->GroupsEnabled;
    }
    /**
     * Set GroupsEnabled value
     * @param bool $groupsEnabled
     * @return \StructType\EwsGetUnifiedGroupsSettingsResponseMessageType
     */
    public function setGroupsEnabled(?bool $groupsEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($groupsEnabled) && !is_bool($groupsEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($groupsEnabled, true), gettype($groupsEnabled)), __LINE__);
        }
        $this->GroupsEnabled = $groupsEnabled;
        
        return $this;
    }
    /**
     * Get GroupCreationEnabled value
     * @return bool|null
     */
    public function getGroupCreationEnabled(): ?bool
    {
        return $this->GroupCreationEnabled;
    }
    /**
     * Set GroupCreationEnabled value
     * @param bool $groupCreationEnabled
     * @return \StructType\EwsGetUnifiedGroupsSettingsResponseMessageType
     */
    public function setGroupCreationEnabled(?bool $groupCreationEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($groupCreationEnabled) && !is_bool($groupCreationEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($groupCreationEnabled, true), gettype($groupCreationEnabled)), __LINE__);
        }
        $this->GroupCreationEnabled = $groupCreationEnabled;
        
        return $this;
    }
    /**
     * Get IsUnifiedGroupsAddressListPresent value
     * @return bool|null
     */
    public function getIsUnifiedGroupsAddressListPresent(): ?bool
    {
        return $this->IsUnifiedGroupsAddressListPresent;
    }
    /**
     * Set IsUnifiedGroupsAddressListPresent value
     * @param bool $isUnifiedGroupsAddressListPresent
     * @return \StructType\EwsGetUnifiedGroupsSettingsResponseMessageType
     */
    public function setIsUnifiedGroupsAddressListPresent(?bool $isUnifiedGroupsAddressListPresent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isUnifiedGroupsAddressListPresent) && !is_bool($isUnifiedGroupsAddressListPresent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isUnifiedGroupsAddressListPresent, true), gettype($isUnifiedGroupsAddressListPresent)), __LINE__);
        }
        $this->IsUnifiedGroupsAddressListPresent = $isUnifiedGroupsAddressListPresent;
        
        return $this;
    }
    /**
     * Get EditGroupOwaTemplateUrl value
     * @return string|null
     */
    public function getEditGroupOwaTemplateUrl(): ?string
    {
        return $this->EditGroupOwaTemplateUrl;
    }
    /**
     * Set EditGroupOwaTemplateUrl value
     * @param string $editGroupOwaTemplateUrl
     * @return \StructType\EwsGetUnifiedGroupsSettingsResponseMessageType
     */
    public function setEditGroupOwaTemplateUrl(?string $editGroupOwaTemplateUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($editGroupOwaTemplateUrl) && !is_string($editGroupOwaTemplateUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($editGroupOwaTemplateUrl, true), gettype($editGroupOwaTemplateUrl)), __LINE__);
        }
        $this->EditGroupOwaTemplateUrl = $editGroupOwaTemplateUrl;
        
        return $this;
    }
    /**
     * Get BrowseGroupsUrl value
     * @return string|null
     */
    public function getBrowseGroupsUrl(): ?string
    {
        return $this->BrowseGroupsUrl;
    }
    /**
     * Set BrowseGroupsUrl value
     * @param string $browseGroupsUrl
     * @return \StructType\EwsGetUnifiedGroupsSettingsResponseMessageType
     */
    public function setBrowseGroupsUrl(?string $browseGroupsUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($browseGroupsUrl) && !is_string($browseGroupsUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($browseGroupsUrl, true), gettype($browseGroupsUrl)), __LINE__);
        }
        $this->BrowseGroupsUrl = $browseGroupsUrl;
        
        return $this;
    }
    /**
     * Get GroupsTargetDomain value
     * @return string|null
     */
    public function getGroupsTargetDomain(): ?string
    {
        return $this->GroupsTargetDomain;
    }
    /**
     * Set GroupsTargetDomain value
     * @param string $groupsTargetDomain
     * @return \StructType\EwsGetUnifiedGroupsSettingsResponseMessageType
     */
    public function setGroupsTargetDomain(?string $groupsTargetDomain = null): self
    {
        // validation for constraint: string
        if (!is_null($groupsTargetDomain) && !is_string($groupsTargetDomain)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupsTargetDomain, true), gettype($groupsTargetDomain)), __LINE__);
        }
        $this->GroupsTargetDomain = $groupsTargetDomain;
        
        return $this;
    }
    /**
     * Get GroupsGuidelinesLink value
     * @return string|null
     */
    public function getGroupsGuidelinesLink(): ?string
    {
        return $this->GroupsGuidelinesLink;
    }
    /**
     * Set GroupsGuidelinesLink value
     * @param string $groupsGuidelinesLink
     * @return \StructType\EwsGetUnifiedGroupsSettingsResponseMessageType
     */
    public function setGroupsGuidelinesLink(?string $groupsGuidelinesLink = null): self
    {
        // validation for constraint: string
        if (!is_null($groupsGuidelinesLink) && !is_string($groupsGuidelinesLink)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupsGuidelinesLink, true), gettype($groupsGuidelinesLink)), __LINE__);
        }
        $this->GroupsGuidelinesLink = $groupsGuidelinesLink;
        
        return $this;
    }
}
