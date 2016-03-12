<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetClientIntentType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetClientIntentType extends EwsBaseRequestType
{
    /**
     * The GlobalObjectId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $GlobalObjectId;
    /**
     * The StateDefinition
     * @var \Ews\StructType\EwsNonEmptyStateDefinitionType
     */
    public $StateDefinition;
    /**
     * Constructor method for GetClientIntentType
     * @uses EwsGetClientIntentType::setGlobalObjectId()
     * @uses EwsGetClientIntentType::setStateDefinition()
     * @param string $globalObjectId
     * @param \Ews\StructType\EwsNonEmptyStateDefinitionType $stateDefinition
     */
    public function __construct($globalObjectId = null, \Ews\StructType\EwsNonEmptyStateDefinitionType $stateDefinition = null)
    {
        $this
            ->setGlobalObjectId($globalObjectId)
            ->setStateDefinition($stateDefinition);
    }
    /**
     * Get GlobalObjectId value
     * @return string
     */
    public function getGlobalObjectId()
    {
        return $this->GlobalObjectId;
    }
    /**
     * Set GlobalObjectId value
     * @param string $globalObjectId
     * @return \Ews\StructType\EwsGetClientIntentType
     */
    public function setGlobalObjectId($globalObjectId = null)
    {
        // validation for constraint: string
        if (!is_null($globalObjectId) && !is_string($globalObjectId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($globalObjectId)), __LINE__);
        }
        $this->GlobalObjectId = $globalObjectId;
        return $this;
    }
    /**
     * Get StateDefinition value
     * @return \Ews\StructType\EwsNonEmptyStateDefinitionType|null
     */
    public function getStateDefinition()
    {
        return $this->StateDefinition;
    }
    /**
     * Set StateDefinition value
     * @param \Ews\StructType\EwsNonEmptyStateDefinitionType $stateDefinition
     * @return \Ews\StructType\EwsGetClientIntentType
     */
    public function setStateDefinition(\Ews\StructType\EwsNonEmptyStateDefinitionType $stateDefinition = null)
    {
        $this->StateDefinition = $stateDefinition;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetClientIntentType
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
