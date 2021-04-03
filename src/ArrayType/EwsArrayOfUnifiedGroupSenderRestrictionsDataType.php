<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUnifiedGroupSenderRestrictionsDataType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfUnifiedGroupSenderRestrictionsDataType extends AbstractStructArrayBase
{
    /**
     * The Sender
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsUnifiedGroupSenderRestrictionsDataType[]
     */
    protected array $Sender = [];
    /**
     * Constructor method for ArrayOfUnifiedGroupSenderRestrictionsDataType
     * @uses EwsArrayOfUnifiedGroupSenderRestrictionsDataType::setSender()
     * @param \StructType\EwsUnifiedGroupSenderRestrictionsDataType[] $sender
     */
    public function __construct(array $sender = [])
    {
        $this
            ->setSender($sender);
    }
    /**
     * Get Sender value
     * @return \StructType\EwsUnifiedGroupSenderRestrictionsDataType[]
     */
    public function getSender(): array
    {
        return $this->Sender;
    }
    /**
     * This method is responsible for validating the values passed to the setSender method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSender method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSenderForArrayConstraintsFromSetSender(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfUnifiedGroupSenderRestrictionsDataTypeSenderItem) {
            // validation for constraint: itemType
            if (!$arrayOfUnifiedGroupSenderRestrictionsDataTypeSenderItem instanceof \StructType\EwsUnifiedGroupSenderRestrictionsDataType) {
                $invalidValues[] = is_object($arrayOfUnifiedGroupSenderRestrictionsDataTypeSenderItem) ? get_class($arrayOfUnifiedGroupSenderRestrictionsDataTypeSenderItem) : sprintf('%s(%s)', gettype($arrayOfUnifiedGroupSenderRestrictionsDataTypeSenderItem), var_export($arrayOfUnifiedGroupSenderRestrictionsDataTypeSenderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Sender property can only contain items of type \StructType\EwsUnifiedGroupSenderRestrictionsDataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Sender value
     * @throws InvalidArgumentException
     * @param \StructType\EwsUnifiedGroupSenderRestrictionsDataType[] $sender
     * @return \ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType
     */
    public function setSender(array $sender = []): self
    {
        // validation for constraint: array
        if ('' !== ($senderArrayErrorMessage = self::validateSenderForArrayConstraintsFromSetSender($sender))) {
            throw new InvalidArgumentException($senderArrayErrorMessage, __LINE__);
        }
        $this->Sender = $sender;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsUnifiedGroupSenderRestrictionsDataType|null
     */
    public function current(): ?\StructType\EwsUnifiedGroupSenderRestrictionsDataType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsUnifiedGroupSenderRestrictionsDataType|null
     */
    public function item($index): ?\StructType\EwsUnifiedGroupSenderRestrictionsDataType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsUnifiedGroupSenderRestrictionsDataType|null
     */
    public function first(): ?\StructType\EwsUnifiedGroupSenderRestrictionsDataType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsUnifiedGroupSenderRestrictionsDataType|null
     */
    public function last(): ?\StructType\EwsUnifiedGroupSenderRestrictionsDataType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsUnifiedGroupSenderRestrictionsDataType|null
     */
    public function offsetGet($offset): ?\StructType\EwsUnifiedGroupSenderRestrictionsDataType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsUnifiedGroupSenderRestrictionsDataType $item
     * @return \ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType
     */
    public function add(\StructType\EwsUnifiedGroupSenderRestrictionsDataType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Sender
     */
    public function getAttributeName(): string
    {
        return 'Sender';
    }
}
