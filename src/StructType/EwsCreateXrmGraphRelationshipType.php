<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateXrmGraphRelationshipType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsCreateXrmGraphRelationshipType extends EwsBaseRequestType
{
    /**
     * The FromEntityId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $FromEntityId;
    /**
     * The FromEntityType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $FromEntityType;
    /**
     * The ToEntityId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $ToEntityId;
    /**
     * The ToEntityType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ToEntityType;
    /**
     * The RelationshipType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $RelationshipType;
    /**
     * Constructor method for CreateXrmGraphRelationshipType
     * @uses EwsCreateXrmGraphRelationshipType::setFromEntityId()
     * @uses EwsCreateXrmGraphRelationshipType::setFromEntityType()
     * @uses EwsCreateXrmGraphRelationshipType::setToEntityId()
     * @uses EwsCreateXrmGraphRelationshipType::setToEntityType()
     * @uses EwsCreateXrmGraphRelationshipType::setRelationshipType()
     * @param string $fromEntityId
     * @param string $fromEntityType
     * @param string $toEntityId
     * @param string $toEntityType
     * @param string $relationshipType
     */
    public function __construct($fromEntityId = null, $fromEntityType = null, $toEntityId = null, $toEntityType = null, $relationshipType = null)
    {
        $this
            ->setFromEntityId($fromEntityId)
            ->setFromEntityType($fromEntityType)
            ->setToEntityId($toEntityId)
            ->setToEntityType($toEntityType)
            ->setRelationshipType($relationshipType);
    }
    /**
     * Get FromEntityId value
     * @return string
     */
    public function getFromEntityId()
    {
        return $this->FromEntityId;
    }
    /**
     * Set FromEntityId value
     * @param string $fromEntityId
     * @return \Ews\StructType\EwsCreateXrmGraphRelationshipType
     */
    public function setFromEntityId($fromEntityId = null)
    {
        $this->FromEntityId = $fromEntityId;
        return $this;
    }
    /**
     * Get FromEntityType value
     * @return string
     */
    public function getFromEntityType()
    {
        return $this->FromEntityType;
    }
    /**
     * Set FromEntityType value
     * @uses \Ews\EnumType\EwsXrmGraphRelationshipEntityType::valueIsValid()
     * @uses \Ews\EnumType\EwsXrmGraphRelationshipEntityType::getValidValues()
     * @param string $fromEntityType
     * @return \Ews\StructType\EwsCreateXrmGraphRelationshipType
     */
    public function setFromEntityType($fromEntityType = null)
    {
        if (!\Ews\EnumType\EwsXrmGraphRelationshipEntityType::valueIsValid($fromEntityType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $fromEntityType, implode(', ', \Ews\EnumType\EwsXrmGraphRelationshipEntityType::getValidValues())), __LINE__);
        }
        $this->FromEntityType = $fromEntityType;
        return $this;
    }
    /**
     * Get ToEntityId value
     * @return string
     */
    public function getToEntityId()
    {
        return $this->ToEntityId;
    }
    /**
     * Set ToEntityId value
     * @param string $toEntityId
     * @return \Ews\StructType\EwsCreateXrmGraphRelationshipType
     */
    public function setToEntityId($toEntityId = null)
    {
        $this->ToEntityId = $toEntityId;
        return $this;
    }
    /**
     * Get ToEntityType value
     * @return string
     */
    public function getToEntityType()
    {
        return $this->ToEntityType;
    }
    /**
     * Set ToEntityType value
     * @uses \Ews\EnumType\EwsXrmGraphRelationshipEntityType::valueIsValid()
     * @uses \Ews\EnumType\EwsXrmGraphRelationshipEntityType::getValidValues()
     * @param string $toEntityType
     * @return \Ews\StructType\EwsCreateXrmGraphRelationshipType
     */
    public function setToEntityType($toEntityType = null)
    {
        if (!\Ews\EnumType\EwsXrmGraphRelationshipEntityType::valueIsValid($toEntityType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $toEntityType, implode(', ', \Ews\EnumType\EwsXrmGraphRelationshipEntityType::getValidValues())), __LINE__);
        }
        $this->ToEntityType = $toEntityType;
        return $this;
    }
    /**
     * Get RelationshipType value
     * @return string
     */
    public function getRelationshipType()
    {
        return $this->RelationshipType;
    }
    /**
     * Set RelationshipType value
     * @uses \Ews\EnumType\EwsXrmGraphRelationshipType::valueIsValid()
     * @uses \Ews\EnumType\EwsXrmGraphRelationshipType::getValidValues()
     * @param string $relationshipType
     * @return \Ews\StructType\EwsCreateXrmGraphRelationshipType
     */
    public function setRelationshipType($relationshipType = null)
    {
        if (!\Ews\EnumType\EwsXrmGraphRelationshipType::valueIsValid($relationshipType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $relationshipType, implode(', ', \Ews\EnumType\EwsXrmGraphRelationshipType::getValidValues())), __LINE__);
        }
        $this->RelationshipType = $relationshipType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsCreateXrmGraphRelationshipType
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