<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindXrmGraphRelationshipType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindXrmGraphRelationshipType extends EwsBaseRequestType
{
    /**
     * The LinkedEntityId
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    protected string $LinkedEntityId;
    /**
     * The GraphRelationshipTypes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ArrayType\EwsArrayOfXrmGraphRelationshipType
     */
    protected \ArrayType\EwsArrayOfXrmGraphRelationshipType $GraphRelationshipTypes;
    /**
     * Constructor method for FindXrmGraphRelationshipType
     * @uses EwsFindXrmGraphRelationshipType::setLinkedEntityId()
     * @uses EwsFindXrmGraphRelationshipType::setGraphRelationshipTypes()
     * @param string $linkedEntityId
     * @param \ArrayType\EwsArrayOfXrmGraphRelationshipType $graphRelationshipTypes
     */
    public function __construct(string $linkedEntityId, \ArrayType\EwsArrayOfXrmGraphRelationshipType $graphRelationshipTypes)
    {
        $this
            ->setLinkedEntityId($linkedEntityId)
            ->setGraphRelationshipTypes($graphRelationshipTypes);
    }
    /**
     * Get LinkedEntityId value
     * @return string
     */
    public function getLinkedEntityId(): string
    {
        return $this->LinkedEntityId;
    }
    /**
     * Set LinkedEntityId value
     * @param string $linkedEntityId
     * @return \StructType\EwsFindXrmGraphRelationshipType
     */
    public function setLinkedEntityId(string $linkedEntityId): self
    {
        // validation for constraint: string
        if (!is_null($linkedEntityId) && !is_string($linkedEntityId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($linkedEntityId, true), gettype($linkedEntityId)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($linkedEntityId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $linkedEntityId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($linkedEntityId, true)), __LINE__);
        }
        $this->LinkedEntityId = $linkedEntityId;
        
        return $this;
    }
    /**
     * Get GraphRelationshipTypes value
     * @return \ArrayType\EwsArrayOfXrmGraphRelationshipType
     */
    public function getGraphRelationshipTypes(): \ArrayType\EwsArrayOfXrmGraphRelationshipType
    {
        return $this->GraphRelationshipTypes;
    }
    /**
     * Set GraphRelationshipTypes value
     * @param \ArrayType\EwsArrayOfXrmGraphRelationshipType $graphRelationshipTypes
     * @return \StructType\EwsFindXrmGraphRelationshipType
     */
    public function setGraphRelationshipTypes(\ArrayType\EwsArrayOfXrmGraphRelationshipType $graphRelationshipTypes): self
    {
        $this->GraphRelationshipTypes = $graphRelationshipTypes;
        
        return $this;
    }
}
