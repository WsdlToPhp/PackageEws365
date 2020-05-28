<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
    public $LinkedEntityId;
    /**
     * The GraphRelationshipTypes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfXrmGraphRelationshipType
     */
    public $GraphRelationshipTypes;
    /**
     * Constructor method for FindXrmGraphRelationshipType
     * @uses EwsFindXrmGraphRelationshipType::setLinkedEntityId()
     * @uses EwsFindXrmGraphRelationshipType::setGraphRelationshipTypes()
     * @param string $linkedEntityId
     * @param \Ews\ArrayType\EwsArrayOfXrmGraphRelationshipType $graphRelationshipTypes
     */
    public function __construct($linkedEntityId = null, \Ews\ArrayType\EwsArrayOfXrmGraphRelationshipType $graphRelationshipTypes = null)
    {
        $this
            ->setLinkedEntityId($linkedEntityId)
            ->setGraphRelationshipTypes($graphRelationshipTypes);
    }
    /**
     * Get LinkedEntityId value
     * @return string
     */
    public function getLinkedEntityId()
    {
        return $this->LinkedEntityId;
    }
    /**
     * Set LinkedEntityId value
     * @param string $linkedEntityId
     * @return \Ews\StructType\EwsFindXrmGraphRelationshipType
     */
    public function setLinkedEntityId($linkedEntityId = null)
    {
        // validation for constraint: string
        if (!is_null($linkedEntityId) && !is_string($linkedEntityId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($linkedEntityId, true), gettype($linkedEntityId)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($linkedEntityId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $linkedEntityId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}', var_export($linkedEntityId, true)), __LINE__);
        }
        $this->LinkedEntityId = $linkedEntityId;
        return $this;
    }
    /**
     * Get GraphRelationshipTypes value
     * @return \Ews\ArrayType\EwsArrayOfXrmGraphRelationshipType
     */
    public function getGraphRelationshipTypes()
    {
        return $this->GraphRelationshipTypes;
    }
    /**
     * Set GraphRelationshipTypes value
     * @param \Ews\ArrayType\EwsArrayOfXrmGraphRelationshipType $graphRelationshipTypes
     * @return \Ews\StructType\EwsFindXrmGraphRelationshipType
     */
    public function setGraphRelationshipTypes(\Ews\ArrayType\EwsArrayOfXrmGraphRelationshipType $graphRelationshipTypes = null)
    {
        $this->GraphRelationshipTypes = $graphRelationshipTypes;
        return $this;
    }
}
