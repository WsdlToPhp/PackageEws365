<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for XrmRelationshipBaseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsXrmRelationshipBaseType extends AbstractStructBase
{
    /**
     * The LinkId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $LinkId;
    /**
     * The FromEntityId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
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
     * - maxOccurs: 1
     * - minOccurs: 1
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
     * Constructor method for XrmRelationshipBaseType
     * @uses EwsXrmRelationshipBaseType::setLinkId()
     * @uses EwsXrmRelationshipBaseType::setFromEntityId()
     * @uses EwsXrmRelationshipBaseType::setFromEntityType()
     * @uses EwsXrmRelationshipBaseType::setToEntityId()
     * @uses EwsXrmRelationshipBaseType::setToEntityType()
     * @uses EwsXrmRelationshipBaseType::setRelationshipType()
     * @param string $linkId
     * @param string $fromEntityId
     * @param string $fromEntityType
     * @param string $toEntityId
     * @param string $toEntityType
     * @param string $relationshipType
     */
    public function __construct(string $linkId, string $fromEntityId, string $fromEntityType, string $toEntityId, string $toEntityType, string $relationshipType)
    {
        $this
            ->setLinkId($linkId)
            ->setFromEntityId($fromEntityId)
            ->setFromEntityType($fromEntityType)
            ->setToEntityId($toEntityId)
            ->setToEntityType($toEntityType)
            ->setRelationshipType($relationshipType);
    }
    /**
     * Get LinkId value
     * @return string
     */
    public function getLinkId(): string
    {
        return $this->LinkId;
    }
    /**
     * Set LinkId value
     * @param string $linkId
     * @return \StructType\EwsXrmRelationshipBaseType
     */
    public function setLinkId(string $linkId): self
    {
        // validation for constraint: string
        if (!is_null($linkId) && !is_string($linkId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($linkId, true), gettype($linkId)), __LINE__);
        }
        $this->LinkId = $linkId;
        
        return $this;
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
     * @return \StructType\EwsXrmRelationshipBaseType
     */
    public function setFromEntityId(string $fromEntityId): self
    {
        // validation for constraint: string
        if (!is_null($fromEntityId) && !is_string($fromEntityId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromEntityId, true), gettype($fromEntityId)), __LINE__);
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
     * @param string $fromEntityType
     * @return \StructType\EwsXrmRelationshipBaseType
     */
    public function setFromEntityType(string $fromEntityType): self
    {
        // validation for constraint: string
        if (!is_null($fromEntityType) && !is_string($fromEntityType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromEntityType, true), gettype($fromEntityType)), __LINE__);
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
     * @return \StructType\EwsXrmRelationshipBaseType
     */
    public function setToEntityId(string $toEntityId): self
    {
        // validation for constraint: string
        if (!is_null($toEntityId) && !is_string($toEntityId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toEntityId, true), gettype($toEntityId)), __LINE__);
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
     * @param string $toEntityType
     * @return \StructType\EwsXrmRelationshipBaseType
     */
    public function setToEntityType(string $toEntityType): self
    {
        // validation for constraint: string
        if (!is_null($toEntityType) && !is_string($toEntityType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toEntityType, true), gettype($toEntityType)), __LINE__);
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
     * @return \StructType\EwsXrmRelationshipBaseType
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
}
