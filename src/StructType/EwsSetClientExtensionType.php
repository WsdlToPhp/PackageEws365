<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetClientExtensionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetClientExtensionType extends EwsBaseRequestType
{
    /**
     * The Actions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ArrayType\EwsArrayOfSetClientExtensionActionsType
     */
    protected \ArrayType\EwsArrayOfSetClientExtensionActionsType $Actions;
    /**
     * Constructor method for SetClientExtensionType
     * @uses EwsSetClientExtensionType::setActions()
     * @param \ArrayType\EwsArrayOfSetClientExtensionActionsType $actions
     */
    public function __construct(\ArrayType\EwsArrayOfSetClientExtensionActionsType $actions)
    {
        $this
            ->setActions($actions);
    }
    /**
     * Get Actions value
     * @return \ArrayType\EwsArrayOfSetClientExtensionActionsType
     */
    public function getActions(): \ArrayType\EwsArrayOfSetClientExtensionActionsType
    {
        return $this->Actions;
    }
    /**
     * Set Actions value
     * @param \ArrayType\EwsArrayOfSetClientExtensionActionsType $actions
     * @return \StructType\EwsSetClientExtensionType
     */
    public function setActions(\ArrayType\EwsArrayOfSetClientExtensionActionsType $actions): self
    {
        $this->Actions = $actions;
        
        return $this;
    }
}
