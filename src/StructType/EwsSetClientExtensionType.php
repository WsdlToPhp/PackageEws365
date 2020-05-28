<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\ArrayType\EwsArrayOfSetClientExtensionActionsType
     */
    public $Actions;
    /**
     * Constructor method for SetClientExtensionType
     * @uses EwsSetClientExtensionType::setActions()
     * @param \Ews\ArrayType\EwsArrayOfSetClientExtensionActionsType $actions
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfSetClientExtensionActionsType $actions = null)
    {
        $this
            ->setActions($actions);
    }
    /**
     * Get Actions value
     * @return \Ews\ArrayType\EwsArrayOfSetClientExtensionActionsType
     */
    public function getActions()
    {
        return $this->Actions;
    }
    /**
     * Set Actions value
     * @param \Ews\ArrayType\EwsArrayOfSetClientExtensionActionsType $actions
     * @return \Ews\StructType\EwsSetClientExtensionType
     */
    public function setActions(\Ews\ArrayType\EwsArrayOfSetClientExtensionActionsType $actions = null)
    {
        $this->Actions = $actions;
        return $this;
    }
}
