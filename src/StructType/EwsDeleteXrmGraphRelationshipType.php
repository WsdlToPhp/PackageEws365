<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteXrmGraphRelationshipType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDeleteXrmGraphRelationshipType extends EwsBaseRequestType
{
    /**
     * The FromEntityId
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    protected string $FromEntityId;
    /**
     * The FromEntityType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $FromEntityType;
    /**
     * The ToEntityId
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    protected string $ToEntityId;
    /**
     * The ToEntityType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $ToEntityType;
    /**
     * The RelationshipType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $RelationshipType;
    /**
     * The LinkId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LinkId = null;
    /**
     * Constructor method for DeleteXrmGraphRelationshipType
     * @uses EwsDeleteXrmGraphRelationshipType::setFromEntityId()
     * @uses EwsDeleteXrmGraphRelationshipType::setFromEntityType()
     * @uses EwsDeleteXrmGraphRelationshipType::setToEntityId()
     * @uses EwsDeleteXrmGraphRelationshipType::setToEntityType()
     * @uses EwsDeleteXrmGraphRelationshipType::setRelationshipType()
     * @uses EwsDeleteXrmGraphRelationshipType::setLinkId()
     * @param string $fromEntityId
     * @param string $fromEntityType
     * @param string $toEntityId
     * @param string $toEntityType
     * @param string $relationshipType
     * @param string $linkId
     */
    public function __construct(string $fromEntityId, string $fromEntityType, string $toEntityId, string $toEntityType, string $relationshipType, ?string $linkId = null)
    {
        $this
            ->setFromEntityId($fromEntityId)
            ->setFromEntityType($fromEntityType)
            ->setToEntityId($toEntityId)
            ->setToEntityType($toEntityType)
            ->setRelationshipType($relationshipType)
            ->setLinkId($linkId);
    }
    /**
     * Get FromEntityId value
     * @return string
     */
    public function getFromEntityId(): string
    {
        return $this->FromEntityId;
    }
    /**
     * Set FromEntityId value
     * @param string $fromEntityId
     * @return \StructType\EwsDeleteXrmGraphRelationshipType
     */
    public function setFromEntityId(string $fromEntityId): self
    {
        // validation for constraint: string
        if (!is_null($fromEntityId) && !is_string($fromEntityId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromEntityId, true), gettype($fromEntityId)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($fromEntityId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $fromEntityId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($fromEntityId, true)), __LINE__);
        }
        $this->FromEntityId = $fromEntityId;
        
        return $this;
    }
    /**
     * Get FromEntityType value
     * @return string
     */
    public function getFromEntityType(): string
    {
        return $this->FromEntityType;
    }
    /**
     * Set FromEntityType value
     * @uses \EnumType\EwsXrmGraphRelationshipEntityType::valueIsValid()
     * @uses \EnumType\EwsXrmGraphRelationshipEntityType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $fromEntityType
     * @return \StructType\EwsDeleteXrmGraphRelationshipType
     */
    public function setFromEntityType(string $fromEntityType): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsXrmGraphRelationshipEntityType::valueIsValid($fromEntityType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsXrmGraphRelationshipEntityType', is_array($fromEntityType) ? implode(', ', $fromEntityType) : var_export($fromEntityType, true), implode(', ', \EnumType\EwsXrmGraphRelationshipEntityType::getValidValues())), __LINE__);
        }
        $this->FromEntityType = $fromEntityType;
        
        return $this;
    }
    /**
     * Get ToEntityId value
     * @return string
     */
    public function getToEntityId(): string
    {
        return $this->ToEntityId;
    }
    /**
     * Set ToEntityId value
     * @param string $toEntityId
     * @return \StructType\EwsDeleteXrmGraphRelationshipType
     */
    public function setToEntityId(string $toEntityId): self
    {
        // validation for constraint: string
        if (!is_null($toEntityId) && !is_string($toEntityId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toEntityId, true), gettype($toEntityId)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($toEntityId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $toEntityId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($toEntityId, true)), __LINE__);
        }
        $this->ToEntityId = $toEntityId;
        
        return $this;
    }
    /**
     * Get ToEntityType value
     * @return string
     */
    public function getToEntityType(): string
    {
        return $this->ToEntityType;
    }
    /**
     * Set ToEntityType value
     * @uses \EnumType\EwsXrmGraphRelationshipEntityType::valueIsValid()
     * @uses \EnumType\EwsXrmGraphRelationshipEntityType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $toEntityType
     * @return \StructType\EwsDeleteXrmGraphRelationshipType
     */
    public function setToEntityType(string $toEntityType): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsXrmGraphRelationshipEntityType::valueIsValid($toEntityType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsXrmGraphRelationshipEntityType', is_array($toEntityType) ? implode(', ', $toEntityType) : var_export($toEntityType, true), implode(', ', \EnumType\EwsXrmGraphRelationshipEntityType::getValidValues())), __LINE__);
        }
        $this->ToEntityType = $toEntityType;
        
        return $this;
    }
    /**
     * Get RelationshipType value
     * @return string
     */
    public function getRelationshipType(): string
    {
        return $this->RelationshipType;
    }
    /**
     * Set RelationshipType value
     * @uses \EnumType\EwsXrmGraphRelationshipType::valueIsValid()
     * @uses \EnumType\EwsXrmGraphRelationshipType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $relationshipType
     * @return \StructType\EwsDeleteXrmGraphRelationshipType
     */
    public function setRelationshipType(string $relationshipType): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsXrmGraphRelationshipType::valueIsValid($relationshipType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsXrmGraphRelationshipType', is_array($relationshipType) ? implode(', ', $relationshipType) : var_export($relationshipType, true), implode(', ', \EnumType\EwsXrmGraphRelationshipType::getValidValues())), __LINE__);
        }
        $this->RelationshipType = $relationshipType;
        
        return $this;
    }
    /**
     * Get LinkId value
     * @return string|null
     */
    public function getLinkId(): ?string
    {
        return $this->LinkId;
    }
    /**
     * Set LinkId value
     * @param string $linkId
     * @return \StructType\EwsDeleteXrmGraphRelationshipType
     */
    public function setLinkId(?string $linkId = null): self
    {
        // validation for constraint: string
        if (!is_null($linkId) && !is_string($linkId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($linkId, true), gettype($linkId)), __LINE__);
        }
        $this->LinkId = $linkId;
        
        return $this;
    }
}
