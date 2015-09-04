<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetClientExtensionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsSetClientExtensionType extends EwsBaseRequestType
{
    /**
     * The Actions
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSetClientExtensionType
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
