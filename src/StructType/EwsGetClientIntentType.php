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
     * Meta information extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($globalObjectId, true), gettype($globalObjectId)), __LINE__);
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
}
