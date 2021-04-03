<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImGroupType StructType
 * Meta information extracted from the WSDL
 * - documentation: A Group on the ImContactList, with one or more members
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsImGroupType extends AbstractStructBase
{
    /**
     * The DisplayName
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * @var string|null
     */
    protected ?string $DisplayName = null;
    /**
     * The GroupType
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * @var string|null
     */
    protected ?string $GroupType = null;
    /**
     * The ExchangeStoreId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $ExchangeStoreId = null;
    /**
     * The MemberCorrelationKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsNonEmptyArrayOfItemIdsType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfItemIdsType $MemberCorrelationKey = null;
    /**
     * The ExtendedProperties
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsNonEmptyArrayOfExtendedPropertyType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfExtendedPropertyType $ExtendedProperties = null;
    /**
     * The SmtpAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SmtpAddress = null;
    /**
     * Constructor method for ImGroupType
     * @uses EwsImGroupType::setDisplayName()
     * @uses EwsImGroupType::setGroupType()
     * @uses EwsImGroupType::setExchangeStoreId()
     * @uses EwsImGroupType::setMemberCorrelationKey()
     * @uses EwsImGroupType::setExtendedProperties()
     * @uses EwsImGroupType::setSmtpAddress()
     * @param string $displayName
     * @param string $groupType
     * @param \StructType\EwsItemIdType $exchangeStoreId
     * @param \ArrayType\EwsNonEmptyArrayOfItemIdsType $memberCorrelationKey
     * @param \ArrayType\EwsNonEmptyArrayOfExtendedPropertyType $extendedProperties
     * @param string $smtpAddress
     */
    public function __construct(?string $displayName = null, ?string $groupType = null, ?\StructType\EwsItemIdType $exchangeStoreId = null, ?\ArrayType\EwsNonEmptyArrayOfItemIdsType $memberCorrelationKey = null, ?\ArrayType\EwsNonEmptyArrayOfExtendedPropertyType $extendedProperties = null, ?string $smtpAddress = null)
    {
        $this
            ->setDisplayName($displayName)
            ->setGroupType($groupType)
            ->setExchangeStoreId($exchangeStoreId)
            ->setMemberCorrelationKey($memberCorrelationKey)
            ->setExtendedProperties($extendedProperties)
            ->setSmtpAddress($smtpAddress);
    }
    /**
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName(): ?string
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \StructType\EwsImGroupType
     */
    public function setDisplayName(?string $displayName = null): self
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($displayName) && mb_strlen((string) $displayName) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        
        return $this;
    }
    /**
     * Get GroupType value
     * @return string|null
     */
    public function getGroupType(): ?string
    {
        return $this->GroupType;
    }
    /**
     * Set GroupType value
     * @param string $groupType
     * @return \StructType\EwsImGroupType
     */
    public function setGroupType(?string $groupType = null): self
    {
        // validation for constraint: string
        if (!is_null($groupType) && !is_string($groupType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupType, true), gettype($groupType)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($groupType) && mb_strlen((string) $groupType) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $groupType)), __LINE__);
        }
        $this->GroupType = $groupType;
        
        return $this;
    }
    /**
     * Get ExchangeStoreId value
     * @return \StructType\EwsItemIdType|null
     */
    public function getExchangeStoreId(): ?\StructType\EwsItemIdType
    {
        return $this->ExchangeStoreId;
    }
    /**
     * Set ExchangeStoreId value
     * @param \StructType\EwsItemIdType $exchangeStoreId
     * @return \StructType\EwsImGroupType
     */
    public function setExchangeStoreId(?\StructType\EwsItemIdType $exchangeStoreId = null): self
    {
        $this->ExchangeStoreId = $exchangeStoreId;
        
        return $this;
    }
    /**
     * Get MemberCorrelationKey value
     * @return \ArrayType\EwsNonEmptyArrayOfItemIdsType|null
     */
    public function getMemberCorrelationKey(): ?\ArrayType\EwsNonEmptyArrayOfItemIdsType
    {
        return $this->MemberCorrelationKey;
    }
    /**
     * Set MemberCorrelationKey value
     * @param \ArrayType\EwsNonEmptyArrayOfItemIdsType $memberCorrelationKey
     * @return \StructType\EwsImGroupType
     */
    public function setMemberCorrelationKey(?\ArrayType\EwsNonEmptyArrayOfItemIdsType $memberCorrelationKey = null): self
    {
        $this->MemberCorrelationKey = $memberCorrelationKey;
        
        return $this;
    }
    /**
     * Get ExtendedProperties value
     * @return \ArrayType\EwsNonEmptyArrayOfExtendedPropertyType|null
     */
    public function getExtendedProperties(): ?\ArrayType\EwsNonEmptyArrayOfExtendedPropertyType
    {
        return $this->ExtendedProperties;
    }
    /**
     * Set ExtendedProperties value
     * @param \ArrayType\EwsNonEmptyArrayOfExtendedPropertyType $extendedProperties
     * @return \StructType\EwsImGroupType
     */
    public function setExtendedProperties(?\ArrayType\EwsNonEmptyArrayOfExtendedPropertyType $extendedProperties = null): self
    {
        $this->ExtendedProperties = $extendedProperties;
        
        return $this;
    }
    /**
     * Get SmtpAddress value
     * @return string|null
     */
    public function getSmtpAddress(): ?string
    {
        return $this->SmtpAddress;
    }
    /**
     * Set SmtpAddress value
     * @param string $smtpAddress
     * @return \StructType\EwsImGroupType
     */
    public function setSmtpAddress(?string $smtpAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($smtpAddress) && !is_string($smtpAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($smtpAddress, true), gettype($smtpAddress)), __LINE__);
        }
        $this->SmtpAddress = $smtpAddress;
        
        return $this;
    }
}
