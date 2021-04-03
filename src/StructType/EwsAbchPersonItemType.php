<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AbchPersonItemType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAbchPersonItemType extends EwsItemType
{
    /**
     * The AntiLinkInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AntiLinkInfo = null;
    /**
     * The PersonId
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string|null
     */
    protected ?string $PersonId = null;
    /**
     * The ContactHandles
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfAbchPersonContactHandlesType|null
     */
    protected ?\ArrayType\EwsArrayOfAbchPersonContactHandlesType $ContactHandles = null;
    /**
     * The ContactCategories
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $ContactCategories = null;
    /**
     * The RelevanceOrder1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RelevanceOrder1 = null;
    /**
     * The RelevanceOrder2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RelevanceOrder2 = null;
    /**
     * The TrustLevel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TrustLevel = null;
    /**
     * The FavoriteOrder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $FavoriteOrder = null;
    /**
     * Constructor method for AbchPersonItemType
     * @uses EwsAbchPersonItemType::setAntiLinkInfo()
     * @uses EwsAbchPersonItemType::setPersonId()
     * @uses EwsAbchPersonItemType::setContactHandles()
     * @uses EwsAbchPersonItemType::setContactCategories()
     * @uses EwsAbchPersonItemType::setRelevanceOrder1()
     * @uses EwsAbchPersonItemType::setRelevanceOrder2()
     * @uses EwsAbchPersonItemType::setTrustLevel()
     * @uses EwsAbchPersonItemType::setFavoriteOrder()
     * @param string $antiLinkInfo
     * @param string $personId
     * @param \ArrayType\EwsArrayOfAbchPersonContactHandlesType $contactHandles
     * @param \ArrayType\EwsArrayOfStringsType $contactCategories
     * @param string $relevanceOrder1
     * @param string $relevanceOrder2
     * @param int $trustLevel
     * @param int $favoriteOrder
     */
    public function __construct(?string $antiLinkInfo = null, ?string $personId = null, ?\ArrayType\EwsArrayOfAbchPersonContactHandlesType $contactHandles = null, ?\ArrayType\EwsArrayOfStringsType $contactCategories = null, ?string $relevanceOrder1 = null, ?string $relevanceOrder2 = null, ?int $trustLevel = null, ?int $favoriteOrder = null)
    {
        $this
            ->setAntiLinkInfo($antiLinkInfo)
            ->setPersonId($personId)
            ->setContactHandles($contactHandles)
            ->setContactCategories($contactCategories)
            ->setRelevanceOrder1($relevanceOrder1)
            ->setRelevanceOrder2($relevanceOrder2)
            ->setTrustLevel($trustLevel)
            ->setFavoriteOrder($favoriteOrder);
    }
    /**
     * Get AntiLinkInfo value
     * @return string|null
     */
    public function getAntiLinkInfo(): ?string
    {
        return $this->AntiLinkInfo;
    }
    /**
     * Set AntiLinkInfo value
     * @param string $antiLinkInfo
     * @return \StructType\EwsAbchPersonItemType
     */
    public function setAntiLinkInfo(?string $antiLinkInfo = null): self
    {
        // validation for constraint: string
        if (!is_null($antiLinkInfo) && !is_string($antiLinkInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($antiLinkInfo, true), gettype($antiLinkInfo)), __LINE__);
        }
        $this->AntiLinkInfo = $antiLinkInfo;
        
        return $this;
    }
    /**
     * Get PersonId value
     * @return string|null
     */
    public function getPersonId(): ?string
    {
        return $this->PersonId;
    }
    /**
     * Set PersonId value
     * @param string $personId
     * @return \StructType\EwsAbchPersonItemType
     */
    public function setPersonId(?string $personId = null): self
    {
        // validation for constraint: string
        if (!is_null($personId) && !is_string($personId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personId, true), gettype($personId)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($personId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $personId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($personId, true)), __LINE__);
        }
        $this->PersonId = $personId;
        
        return $this;
    }
    /**
     * Get ContactHandles value
     * @return \ArrayType\EwsArrayOfAbchPersonContactHandlesType|null
     */
    public function getContactHandles(): ?\ArrayType\EwsArrayOfAbchPersonContactHandlesType
    {
        return $this->ContactHandles;
    }
    /**
     * Set ContactHandles value
     * @param \ArrayType\EwsArrayOfAbchPersonContactHandlesType $contactHandles
     * @return \StructType\EwsAbchPersonItemType
     */
    public function setContactHandles(?\ArrayType\EwsArrayOfAbchPersonContactHandlesType $contactHandles = null): self
    {
        $this->ContactHandles = $contactHandles;
        
        return $this;
    }
    /**
     * Get ContactCategories value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getContactCategories(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->ContactCategories;
    }
    /**
     * Set ContactCategories value
     * @param \ArrayType\EwsArrayOfStringsType $contactCategories
     * @return \StructType\EwsAbchPersonItemType
     */
    public function setContactCategories(?\ArrayType\EwsArrayOfStringsType $contactCategories = null): self
    {
        $this->ContactCategories = $contactCategories;
        
        return $this;
    }
    /**
     * Get RelevanceOrder1 value
     * @return string|null
     */
    public function getRelevanceOrder1(): ?string
    {
        return $this->RelevanceOrder1;
    }
    /**
     * Set RelevanceOrder1 value
     * @param string $relevanceOrder1
     * @return \StructType\EwsAbchPersonItemType
     */
    public function setRelevanceOrder1(?string $relevanceOrder1 = null): self
    {
        // validation for constraint: string
        if (!is_null($relevanceOrder1) && !is_string($relevanceOrder1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($relevanceOrder1, true), gettype($relevanceOrder1)), __LINE__);
        }
        $this->RelevanceOrder1 = $relevanceOrder1;
        
        return $this;
    }
    /**
     * Get RelevanceOrder2 value
     * @return string|null
     */
    public function getRelevanceOrder2(): ?string
    {
        return $this->RelevanceOrder2;
    }
    /**
     * Set RelevanceOrder2 value
     * @param string $relevanceOrder2
     * @return \StructType\EwsAbchPersonItemType
     */
    public function setRelevanceOrder2(?string $relevanceOrder2 = null): self
    {
        // validation for constraint: string
        if (!is_null($relevanceOrder2) && !is_string($relevanceOrder2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($relevanceOrder2, true), gettype($relevanceOrder2)), __LINE__);
        }
        $this->RelevanceOrder2 = $relevanceOrder2;
        
        return $this;
    }
    /**
     * Get TrustLevel value
     * @return int|null
     */
    public function getTrustLevel(): ?int
    {
        return $this->TrustLevel;
    }
    /**
     * Set TrustLevel value
     * @param int $trustLevel
     * @return \StructType\EwsAbchPersonItemType
     */
    public function setTrustLevel(?int $trustLevel = null): self
    {
        // validation for constraint: int
        if (!is_null($trustLevel) && !(is_int($trustLevel) || ctype_digit($trustLevel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($trustLevel, true), gettype($trustLevel)), __LINE__);
        }
        $this->TrustLevel = $trustLevel;
        
        return $this;
    }
    /**
     * Get FavoriteOrder value
     * @return int|null
     */
    public function getFavoriteOrder(): ?int
    {
        return $this->FavoriteOrder;
    }
    /**
     * Set FavoriteOrder value
     * @param int $favoriteOrder
     * @return \StructType\EwsAbchPersonItemType
     */
    public function setFavoriteOrder(?int $favoriteOrder = null): self
    {
        // validation for constraint: int
        if (!is_null($favoriteOrder) && !(is_int($favoriteOrder) || ctype_digit($favoriteOrder))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($favoriteOrder, true), gettype($favoriteOrder)), __LINE__);
        }
        $this->FavoriteOrder = $favoriteOrder;
        
        return $this;
    }
}
