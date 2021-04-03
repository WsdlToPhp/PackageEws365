<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected string $GlobalObjectId;
    /**
     * The StateDefinition
     * @var \StructType\EwsNonEmptyStateDefinitionType|null
     */
    protected ?\StructType\EwsNonEmptyStateDefinitionType $StateDefinition = null;
    /**
     * Constructor method for GetClientIntentType
     * @uses EwsGetClientIntentType::setGlobalObjectId()
     * @uses EwsGetClientIntentType::setStateDefinition()
     * @param string $globalObjectId
     * @param \StructType\EwsNonEmptyStateDefinitionType $stateDefinition
     */
    public function __construct(string $globalObjectId, ?\StructType\EwsNonEmptyStateDefinitionType $stateDefinition = null)
    {
        $this
            ->setGlobalObjectId($globalObjectId)
            ->setStateDefinition($stateDefinition);
    }
    /**
     * Get GlobalObjectId value
     * @return string
     */
    public function getGlobalObjectId(): string
    {
        return $this->GlobalObjectId;
    }
    /**
     * Set GlobalObjectId value
     * @param string $globalObjectId
     * @return \StructType\EwsGetClientIntentType
     */
    public function setGlobalObjectId(string $globalObjectId): self
    {
        // validation for constraint: string
        if (!is_null($globalObjectId) && !is_string($globalObjectId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($globalObjectId, true), gettype($globalObjectId)), __LINE__);
        }
        $this->GlobalObjectId = $globalObjectId;
        
        return $this;
    }
    /**
     * Get StateDefinition value
     * @return \StructType\EwsNonEmptyStateDefinitionType|null
     */
    public function getStateDefinition(): ?\StructType\EwsNonEmptyStateDefinitionType
    {
        return $this->StateDefinition;
    }
    /**
     * Set StateDefinition value
     * @param \StructType\EwsNonEmptyStateDefinitionType $stateDefinition
     * @return \StructType\EwsGetClientIntentType
     */
    public function setStateDefinition(?\StructType\EwsNonEmptyStateDefinitionType $stateDefinition = null): self
    {
        $this->StateDefinition = $stateDefinition;
        
        return $this;
    }
}
