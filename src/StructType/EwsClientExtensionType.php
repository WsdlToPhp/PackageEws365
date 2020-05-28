<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $SpecificUsers;
    /**
     * The Manifest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Manifest;
    /**
     * The IsAvailable
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $IsAvailable;
    /**
     * The IsMandatory
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $IsMandatory;
    /**
     * The IsEnabledByDefault
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $IsEnabledByDefault;
    /**
     * The ProvidedTo
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ProvidedTo;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Type;
    /**
     * The Scope
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Scope;
    /**
     * The MarketplaceAssetId
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $MarketplaceAssetId;
    /**
     * The MarketplaceContentMarket
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $MarketplaceContentMarket;
    /**
     * The AppStatus
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $AppStatus;
    /**
     * The Etoken
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Etoken;
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
     * @param \Ews\ArrayType\EwsArrayOfStringsType $specificUsers
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
    public function __construct(\Ews\ArrayType\EwsArrayOfStringsType $specificUsers = null, $manifest = null, $isAvailable = null, $isMandatory = null, $isEnabledByDefault = null, $providedTo = null, $type = null, $scope = null, $marketplaceAssetId = null, $marketplaceContentMarket = null, $appStatus = null, $etoken = null)
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
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getSpecificUsers()
    {
        return $this->SpecificUsers;
    }
    /**
     * Set SpecificUsers value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $specificUsers
     * @return \Ews\StructType\EwsClientExtensionType
     */
    public function setSpecificUsers(\Ews\ArrayType\EwsArrayOfStringsType $specificUsers = null)
    {
        $this->SpecificUsers = $specificUsers;
        return $this;
    }
    /**
     * Get Manifest value
     * @return string|null
     */
    public function getManifest()
    {
        return $this->Manifest;
    }
    /**
     * Set Manifest value
     * @param string $manifest
     * @return \Ews\StructType\EwsClientExtensionType
     */
    public function setManifest($manifest = null)
    {
        // validation for constraint: string
        if (!is_null($manifest) && !is_string($manifest)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($manifest, true), gettype($manifest)), __LINE__);
        }
        $this->Manifest = $manifest;
        return $this;
    }
    /**
     * Get IsAvailable value
     * @return bool|null
     */
    public function getIsAvailable()
    {
        return $this->IsAvailable;
    }
    /**
     * Set IsAvailable value
     * @param bool $isAvailable
     * @return \Ews\StructType\EwsClientExtensionType
     */
    public function setIsAvailable($isAvailable = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAvailable) && !is_bool($isAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAvailable, true), gettype($isAvailable)), __LINE__);
        }
        $this->IsAvailable = $isAvailable;
        return $this;
    }
    /**
     * Get IsMandatory value
     * @return bool|null
     */
    public function getIsMandatory()
    {
        return $this->IsMandatory;
    }
    /**
     * Set IsMandatory value
     * @param bool $isMandatory
     * @return \Ews\StructType\EwsClientExtensionType
     */
    public function setIsMandatory($isMandatory = null)
    {
        // validation for constraint: boolean
        if (!is_null($isMandatory) && !is_bool($isMandatory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMandatory, true), gettype($isMandatory)), __LINE__);
        }
        $this->IsMandatory = $isMandatory;
        return $this;
    }
    /**
     * Get IsEnabledByDefault value
     * @return bool|null
     */
    public function getIsEnabledByDefault()
    {
        return $this->IsEnabledByDefault;
    }
    /**
     * Set IsEnabledByDefault value
     * @param bool $isEnabledByDefault
     * @return \Ews\StructType\EwsClientExtensionType
     */
    public function setIsEnabledByDefault($isEnabledByDefault = null)
    {
        // validation for constraint: boolean
        if (!is_null($isEnabledByDefault) && !is_bool($isEnabledByDefault)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isEnabledByDefault, true), gettype($isEnabledByDefault)), __LINE__);
        }
        $this->IsEnabledByDefault = $isEnabledByDefault;
        return $this;
    }
    /**
     * Get ProvidedTo value
     * @return string|null
     */
    public function getProvidedTo()
    {
        return $this->ProvidedTo;
    }
    /**
     * Set ProvidedTo value
     * @uses \Ews\EnumType\EwsClientExtensionProvidedToType::valueIsValid()
     * @uses \Ews\EnumType\EwsClientExtensionProvidedToType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $providedTo
     * @return \Ews\StructType\EwsClientExtensionType
     */
    public function setProvidedTo($providedTo = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsClientExtensionProvidedToType::valueIsValid($providedTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsClientExtensionProvidedToType', is_array($providedTo) ? implode(', ', $providedTo) : var_export($providedTo, true), implode(', ', \Ews\EnumType\EwsClientExtensionProvidedToType::getValidValues())), __LINE__);
        }
        $this->ProvidedTo = $providedTo;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Ews\EnumType\EwsClientExtensionTypeType::valueIsValid()
     * @uses \Ews\EnumType\EwsClientExtensionTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Ews\StructType\EwsClientExtensionType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsClientExtensionTypeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsClientExtensionTypeType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Ews\EnumType\EwsClientExtensionTypeType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Scope value
     * @return string|null
     */
    public function getScope()
    {
        return $this->Scope;
    }
    /**
     * Set Scope value
     * @uses \Ews\EnumType\EwsClientExtensionScopeType::valueIsValid()
     * @uses \Ews\EnumType\EwsClientExtensionScopeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $scope
     * @return \Ews\StructType\EwsClientExtensionType
     */
    public function setScope($scope = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsClientExtensionScopeType::valueIsValid($scope)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsClientExtensionScopeType', is_array($scope) ? implode(', ', $scope) : var_export($scope, true), implode(', ', \Ews\EnumType\EwsClientExtensionScopeType::getValidValues())), __LINE__);
        }
        $this->Scope = $scope;
        return $this;
    }
    /**
     * Get MarketplaceAssetId value
     * @return string|null
     */
    public function getMarketplaceAssetId()
    {
        return $this->MarketplaceAssetId;
    }
    /**
     * Set MarketplaceAssetId value
     * @param string $marketplaceAssetId
     * @return \Ews\StructType\EwsClientExtensionType
     */
    public function setMarketplaceAssetId($marketplaceAssetId = null)
    {
        // validation for constraint: string
        if (!is_null($marketplaceAssetId) && !is_string($marketplaceAssetId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($marketplaceAssetId, true), gettype($marketplaceAssetId)), __LINE__);
        }
        $this->MarketplaceAssetId = $marketplaceAssetId;
        return $this;
    }
    /**
     * Get MarketplaceContentMarket value
     * @return string|null
     */
    public function getMarketplaceContentMarket()
    {
        return $this->MarketplaceContentMarket;
    }
    /**
     * Set MarketplaceContentMarket value
     * @param string $marketplaceContentMarket
     * @return \Ews\StructType\EwsClientExtensionType
     */
    public function setMarketplaceContentMarket($marketplaceContentMarket = null)
    {
        // validation for constraint: string
        if (!is_null($marketplaceContentMarket) && !is_string($marketplaceContentMarket)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($marketplaceContentMarket, true), gettype($marketplaceContentMarket)), __LINE__);
        }
        $this->MarketplaceContentMarket = $marketplaceContentMarket;
        return $this;
    }
    /**
     * Get AppStatus value
     * @return string|null
     */
    public function getAppStatus()
    {
        return $this->AppStatus;
    }
    /**
     * Set AppStatus value
     * @param string $appStatus
     * @return \Ews\StructType\EwsClientExtensionType
     */
    public function setAppStatus($appStatus = null)
    {
        // validation for constraint: string
        if (!is_null($appStatus) && !is_string($appStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($appStatus, true), gettype($appStatus)), __LINE__);
        }
        $this->AppStatus = $appStatus;
        return $this;
    }
    /**
     * Get Etoken value
     * @return string|null
     */
    public function getEtoken()
    {
        return $this->Etoken;
    }
    /**
     * Set Etoken value
     * @param string $etoken
     * @return \Ews\StructType\EwsClientExtensionType
     */
    public function setEtoken($etoken = null)
    {
        // validation for constraint: string
        if (!is_null($etoken) && !is_string($etoken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($etoken, true), gettype($etoken)), __LINE__);
        }
        $this->Etoken = $etoken;
        return $this;
    }
}
