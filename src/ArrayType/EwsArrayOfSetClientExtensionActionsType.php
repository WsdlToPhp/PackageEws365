<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSetClientExtensionActionsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfSetClientExtensionActionsType extends AbstractStructArrayBase
{
    /**
     * The Action
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var array
     */
    public $Action;
    /**
     * Constructor method for ArrayOfSetClientExtensionActionsType
     * @uses EwsArrayOfSetClientExtensionActionsType::setAction()
     * @param array $action
     */
    public function __construct(array $action = array())
    {
        $this
            ->setAction($action);
    }
    /**
     * Get Action value
     * @return array
     */
    public function getAction()
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @param array $action
     * @return \Ews\ArrayType\EwsArrayOfSetClientExtensionActionsType
     */
    public function setAction(array $action = array())
    {
        $this->Action = $action;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsSetClientExtensionActionType
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsSetClientExtensionActionType
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsSetClientExtensionActionType
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsSetClientExtensionActionType
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsSetClientExtensionActionType
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Action
     */
    public function getAttributeName()
    {
        return 'Action';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfSetClientExtensionActionsType
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
