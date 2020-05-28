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
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Ews\StructType\EwsSetClientExtensionActionType[]
     */
    public $Action;
    /**
     * Constructor method for ArrayOfSetClientExtensionActionsType
     * @uses EwsArrayOfSetClientExtensionActionsType::setAction()
     * @param \Ews\StructType\EwsSetClientExtensionActionType[] $action
     */
    public function __construct(array $action = array())
    {
        $this
            ->setAction($action);
    }
    /**
     * Get Action value
     * @return \Ews\StructType\EwsSetClientExtensionActionType[]
     */
    public function getAction()
    {
        return $this->Action;
    }
    /**
     * This method is responsible for validating the values passed to the setAction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateActionForArrayConstraintsFromSetAction(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSetClientExtensionActionsTypeActionItem) {
            // validation for constraint: itemType
            if (!$arrayOfSetClientExtensionActionsTypeActionItem instanceof \Ews\StructType\EwsSetClientExtensionActionType) {
                $invalidValues[] = is_object($arrayOfSetClientExtensionActionsTypeActionItem) ? get_class($arrayOfSetClientExtensionActionsTypeActionItem) : sprintf('%s(%s)', gettype($arrayOfSetClientExtensionActionsTypeActionItem), var_export($arrayOfSetClientExtensionActionsTypeActionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Action property can only contain items of type \Ews\StructType\EwsSetClientExtensionActionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Action value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSetClientExtensionActionType[] $action
     * @return \Ews\ArrayType\EwsArrayOfSetClientExtensionActionsType
     */
    public function setAction(array $action = array())
    {
        // validation for constraint: array
        if ('' !== ($actionArrayErrorMessage = self::validateActionForArrayConstraintsFromSetAction($action))) {
            throw new \InvalidArgumentException($actionArrayErrorMessage, __LINE__);
        }
        $this->Action = $action;
        return $this;
    }
    /**
     * Add item to Action value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSetClientExtensionActionType $item
     * @return \Ews\ArrayType\EwsArrayOfSetClientExtensionActionsType
     */
    public function addToAction(\Ews\StructType\EwsSetClientExtensionActionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsSetClientExtensionActionType) {
            throw new \InvalidArgumentException(sprintf('The Action property can only contain items of type \Ews\StructType\EwsSetClientExtensionActionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Action[] = $item;
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
}
