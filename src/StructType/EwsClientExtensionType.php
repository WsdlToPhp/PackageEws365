<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClientExtensionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsClientExtensionType extends AbstractStructBase
{
    /**
     * The SpecificUsers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $SpecificUsers = null;
    /**
     * The Manifest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Manifest = null;
    /**
     * The IsAvailable
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $IsAvailable = null;
    /**
     * The IsMandatory
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $IsMandatory = null;
    /**
     * The IsEnabledByDefault
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $IsEnabledByDefault = null;
    /**
     * The ProvidedTo
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $ProvidedTo = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * The Scope
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Scope = null;
    /**
     * The MarketplaceAssetId
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $MarketplaceAssetId = null;
    /**
     * The MarketplaceContentMarket
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $MarketplaceContentMarket = null;
    /**
     * The AppStatus
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $AppStatus = null;
    /**
     * The Etoken
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Etoken = null;
    /**
     * Constructor method for ClientExtensionType
     * @uses EwsClientExtensionType::setSpecificUsers()
     * @uses EwsClientExtensionType::setManifest()
     * @uses EwsClientExtensionType::setIsAvailable()
     * @uses EwsClientExtensionType::setIsMandatory()
     * @uses EwsClientExtensionType::setIsEnabledByDefault()
     * @uses EwsClientExtensionType::setProvidedTo()
     * @uses EwsClientExtensionType::setType()
     * @uses EwsClientExtensionType::setScope()
     * @uses EwsClientExtensionType::setMarketplaceAssetId()
     * @uses EwsClientExtensionType::setMarketplaceContentMarket()
     * @uses EwsClientExtensionType::setAppStatus()
     * @uses EwsClientExtensionType::setEtoken()
     * @param \ArrayType\EwsArrayOfStringsType $specificUsers
     * @param string $manifest
     * @param bool $isAvailable
     * @param bool $isMandatory
     * @param bool $isEnabledByDefault
     * @param string $providedTo
     * @param string $type
     * @param string $scope
     * @param string $marketplaceAssetId
     * @param string $marketplaceContentMarket
     * @param string $appStatus
     * @param string $etoken
     */
    public function __construct(?\ArrayType\EwsArrayOfStringsType $specificUsers = null, ?string $manifest = null, ?bool $isAvailable = null, ?bool $isMandatory = null, ?bool $isEnabledByDefault = null, ?string $providedTo = null, ?string $type = null, ?string $scope = null, ?string $marketplaceAssetId = null, ?string $marketplaceContentMarket = null, ?string $appStatus = null, ?string $etoken = null)
    {
        $this
            ->setSpecificUsers($specificUsers)
            ->setManifest($manifest)
            ->setIsAvailable($isAvailable)
            ->setIsMandatory($isMandatory)
            ->setIsEnabledByDefault($isEnabledByDefault)
            ->setProvidedTo($providedTo)
            ->setType($type)
            ->setScope($scope)
            ->setMarketplaceAssetId($marketplaceAssetId)
            ->setMarketplaceContentMarket($marketplaceContentMarket)
            ->setAppStatus($appStatus)
            ->setEtoken($etoken);
    }
    /**
     * Get SpecificUsers value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getSpecificUsers(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->SpecificUsers;
    }
    /**
     * Set SpecificUsers value
     * @param \ArrayType\EwsArrayOfStringsType $specificUsers
     * @return \StructType\EwsClientExtensionType
     */
    public function setSpecificUsers(?\ArrayType\EwsArrayOfStringsType $specificUsers = null): self
    {
        $this->SpecificUsers = $specificUsers;
        
        return $this;
    }
    /**
     * Get Manifest value
     * @return string|null
     */
    public function getManifest(): ?string
    {
        return $this->Manifest;
    }
    /**
     * Set Manifest value
     * @param string $manifest
     * @return \StructType\EwsClientExtensionType
     */
    public function setManifest(?string $manifest = null): self
    {
        // validation for constraint: string
        if (!is_null($manifest) && !is_string($manifest)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($manifest, true), gettype($manifest)), __LINE__);
        }
        $this->Manifest = $manifest;
        
        return $this;
    }
    /**
     * Get IsAvailable value
     * @return bool|null
     */
    public function getIsAvailable(): ?bool
    {
        return $this->IsAvailable;
    }
    /**
     * Set IsAvailable value
     * @param bool $isAvailable
     * @return \StructType\EwsClientExtensionType
     */
    public function setIsAvailable(?bool $isAvailable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAvailable) && !is_bool($isAvailable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAvailable, true), gettype($isAvailable)), __LINE__);
        }
        $this->IsAvailable = $isAvailable;
        
        return $this;
    }
    /**
     * Get IsMandatory value
     * @return bool|null
     */
    public function getIsMandatory(): ?bool
    {
        return $this->IsMandatory;
    }
    /**
     * Set IsMandatory value
     * @param bool $isMandatory
     * @return \StructType\EwsClientExtensionType
     */
    public function setIsMandatory(?bool $isMandatory = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isMandatory) && !is_bool($isMandatory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMandatory, true), gettype($isMandatory)), __LINE__);
        }
        $this->IsMandatory = $isMandatory;
        
        return $this;
    }
    /**
     * Get IsEnabledByDefault value
     * @return bool|null
     */
    public function getIsEnabledByDefault(): ?bool
    {
        return $this->IsEnabledByDefault;
    }
    /**
     * Set IsEnabledByDefault value
     * @param bool $isEnabledByDefault
     * @return \StructType\EwsClientExtensionType
     */
    public function setIsEnabledByDefault(?bool $isEnabledByDefault = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isEnabledByDefault) && !is_bool($isEnabledByDefault)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isEnabledByDefault, true), gettype($isEnabledByDefault)), __LINE__);
        }
        $this->IsEnabledByDefault = $isEnabledByDefault;
        
        return $this;
    }
    /**
     * Get ProvidedTo value
     * @return string|null
     */
    public function getProvidedTo(): ?string
    {
        return $this->ProvidedTo;
    }
    /**
     * Set ProvidedTo value
     * @uses \EnumType\EwsClientExtensionProvidedToType::valueIsValid()
     * @uses \EnumType\EwsClientExtensionProvidedToType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $providedTo
     * @return \StructType\EwsClientExtensionType
     */
    public function setProvidedTo(?string $providedTo = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsClientExtensionProvidedToType::valueIsValid($providedTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsClientExtensionProvidedToType', is_array($providedTo) ? implode(', ', $providedTo) : var_export($providedTo, true), implode(', ', \EnumType\EwsClientExtensionProvidedToType::getValidValues())), __LINE__);
        }
        $this->ProvidedTo = $providedTo;
        
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \EnumType\EwsClientExtensionTypeType::valueIsValid()
     * @uses \EnumType\EwsClientExtensionTypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \StructType\EwsClientExtensionType
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsClientExtensionTypeType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsClientExtensionTypeType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\EwsClientExtensionTypeType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get Scope value
     * @return string|null
     */
    public function getScope(): ?string
    {
        return $this->Scope;
    }
    /**
     * Set Scope value
     * @uses \EnumType\EwsClientExtensionScopeType::valueIsValid()
     * @uses \EnumType\EwsClientExtensionScopeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $scope
     * @return \StructType\EwsClientExtensionType
     */
    public function setScope(?string $scope = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsClientExtensionScopeType::valueIsValid($scope)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsClientExtensionScopeType', is_array($scope) ? implode(', ', $scope) : var_export($scope, true), implode(', ', \EnumType\EwsClientExtensionScopeType::getValidValues())), __LINE__);
        }
        $this->Scope = $scope;
        
        return $this;
    }
    /**
     * Get MarketplaceAssetId value
     * @return string|null
     */
    public function getMarketplaceAssetId(): ?string
    {
        return $this->MarketplaceAssetId;
    }
    /**
     * Set MarketplaceAssetId value
     * @param string $marketplaceAssetId
     * @return \StructType\EwsClientExtensionType
     */
    public function setMarketplaceAssetId(?string $marketplaceAssetId = null): self
    {
        // validation for constraint: string
        if (!is_null($marketplaceAssetId) && !is_string($marketplaceAssetId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($marketplaceAssetId, true), gettype($marketplaceAssetId)), __LINE__);
        }
        $this->MarketplaceAssetId = $marketplaceAssetId;
        
        return $this;
    }
    /**
     * Get MarketplaceContentMarket value
     * @return string|null
     */
    public function getMarketplaceContentMarket(): ?string
    {
        return $this->MarketplaceContentMarket;
    }
    /**
     * Set MarketplaceContentMarket value
     * @param string $marketplaceContentMarket
     * @return \StructType\EwsClientExtensionType
     */
    public function setMarketplaceContentMarket(?string $marketplaceContentMarket = null): self
    {
        // validation for constraint: string
        if (!is_null($marketplaceContentMarket) && !is_string($marketplaceContentMarket)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($marketplaceContentMarket, true), gettype($marketplaceContentMarket)), __LINE__);
        }
        $this->MarketplaceContentMarket = $marketplaceContentMarket;
        
        return $this;
    }
    /**
     * Get AppStatus value
     * @return string|null
     */
    public function getAppStatus(): ?string
    {
        return $this->AppStatus;
    }
    /**
     * Set AppStatus value
     * @param string $appStatus
     * @return \StructType\EwsClientExtensionType
     */
    public function setAppStatus(?string $appStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($appStatus) && !is_string($appStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($appStatus, true), gettype($appStatus)), __LINE__);
        }
        $this->AppStatus = $appStatus;
        
        return $this;
    }
    /**
     * Get Etoken value
     * @return string|null
     */
    public function getEtoken(): ?string
    {
        return $this->Etoken;
    }
    /**
     * Set Etoken value
     * @param string $etoken
     * @return \StructType\EwsClientExtensionType
     */
    public function setEtoken(?string $etoken = null): self
    {
        // validation for constraint: string
        if (!is_null($etoken) && !is_string($etoken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($etoken, true), gettype($etoken)), __LINE__);
        }
        $this->Etoken = $etoken;
        
        return $this;
    }
}
