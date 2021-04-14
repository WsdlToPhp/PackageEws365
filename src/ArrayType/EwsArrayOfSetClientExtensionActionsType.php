<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsSetClientExtensionActionType[]
     */
    protected array $Action = [];
    /**
     * Constructor method for ArrayOfSetClientExtensionActionsType
     * @uses EwsArrayOfSetClientExtensionActionsType::setAction()
     * @param \StructType\EwsSetClientExtensionActionType[] $action
     */
    public function __construct(array $action)
    {
        $this
            ->setAction($action);
    }
    /**
     * Get Action value
     * @return \StructType\EwsSetClientExtensionActionType[]
     */
    public function getAction(): array
    {
        return $this->Action;
    }
    /**
     * This method is responsible for validating the values passed to the setAction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateActionForArrayConstraintsFromSetAction(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSetClientExtensionActionsTypeActionItem) {
            // validation for constraint: itemType
            if (!$arrayOfSetClientExtensionActionsTypeActionItem instanceof \StructType\EwsSetClientExtensionActionType) {
                $invalidValues[] = is_object($arrayOfSetClientExtensionActionsTypeActionItem) ? get_class($arrayOfSetClientExtensionActionsTypeActionItem) : sprintf('%s(%s)', gettype($arrayOfSetClientExtensionActionsTypeActionItem), var_export($arrayOfSetClientExtensionActionsTypeActionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Action property can only contain items of type \StructType\EwsSetClientExtensionActionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Action value
     * @throws InvalidArgumentException
     * @param \StructType\EwsSetClientExtensionActionType[] $action
     * @return \ArrayType\EwsArrayOfSetClientExtensionActionsType
     */
    public function setAction(array $action): self
    {
        // validation for constraint: array
        if ('' !== ($actionArrayErrorMessage = self::validateActionForArrayConstraintsFromSetAction($action))) {
            throw new InvalidArgumentException($actionArrayErrorMessage, __LINE__);
        }
        $this->Action = $action;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsSetClientExtensionActionType|null
     */
    public function current(): ?\StructType\EwsSetClientExtensionActionType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsSetClientExtensionActionType|null
     */
    public function item($index): ?\StructType\EwsSetClientExtensionActionType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsSetClientExtensionActionType|null
     */
    public function first(): ?\StructType\EwsSetClientExtensionActionType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsSetClientExtensionActionType|null
     */
    public function last(): ?\StructType\EwsSetClientExtensionActionType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsSetClientExtensionActionType|null
     */
    public function offsetGet($offset): ?\StructType\EwsSetClientExtensionActionType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsSetClientExtensionActionType $item
     * @return \ArrayType\EwsArrayOfSetClientExtensionActionsType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsSetClientExtensionActionType) {
            throw new InvalidArgumentException(sprintf('The Action property can only contain items of type \StructType\EwsSetClientExtensionActionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Action
     */
    public function getAttributeName(): string
    {
        return 'Action';
    }
}
