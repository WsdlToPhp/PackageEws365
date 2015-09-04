<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindXrmGraphRelationshipType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsFindXrmGraphRelationshipType extends EwsBaseRequestType
{
    /**
     * The LinkedEntityId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $LinkedEntityId;
    /**
     * The GraphRelationshipTypes
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFindXrmGraphRelationshipType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
