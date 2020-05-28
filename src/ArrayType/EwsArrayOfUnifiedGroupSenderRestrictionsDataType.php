<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsUnifiedGroupSenderRestrictionsDataType[]
     */
    public $Sender;
    /**
     * Constructor method for ArrayOfUnifiedGroupSenderRestrictionsDataType
     * @uses EwsArrayOfUnifiedGroupSenderRestrictionsDataType::setSender()
     * @param \Ews\StructType\EwsUnifiedGroupSenderRestrictionsDataType[] $sender
     */
    public function __construct(array $sender = array())
    {
        $this
            ->setSender($sender);
    }
    /**
     * Get Sender value
     * @return \Ews\StructType\EwsUnifiedGroupSenderRestrictionsDataType[]|null
     */
    public function getSender()
    {
        return $this->Sender;
    }
    /**
     * This method is responsible for validating the values passed to the setSender method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSender method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSenderForArrayConstraintsFromSetSender(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfUnifiedGroupSenderRestrictionsDataTypeSenderItem) {
            // validation for constraint: itemType
            if (!$arrayOfUnifiedGroupSenderRestrictionsDataTypeSenderItem instanceof \Ews\StructType\EwsUnifiedGroupSenderRestrictionsDataType) {
                $invalidValues[] = is_object($arrayOfUnifiedGroupSenderRestrictionsDataTypeSenderItem) ? get_class($arrayOfUnifiedGroupSenderRestrictionsDataTypeSenderItem) : sprintf('%s(%s)', gettype($arrayOfUnifiedGroupSenderRestrictionsDataTypeSenderItem), var_export($arrayOfUnifiedGroupSenderRestrictionsDataTypeSenderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Sender property can only contain items of type \Ews\StructType\EwsUnifiedGroupSenderRestrictionsDataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Sender value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUnifiedGroupSenderRestrictionsDataType[] $sender
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType
     */
    public function setSender(array $sender = array())
    {
        // validation for constraint: array
        if ('' !== ($senderArrayErrorMessage = self::validateSenderForArrayConstraintsFromSetSender($sender))) {
            throw new \InvalidArgumentException($senderArrayErrorMessage, __LINE__);
        }
        $this->Sender = $sender;
        return $this;
    }
    /**
     * Add item to Sender value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUnifiedGroupSenderRestrictionsDataType $item
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionsDataType
     */
    public function addToSender(\Ews\StructType\EwsUnifiedGroupSenderRestrictionsDataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsUnifiedGroupSenderRestrictionsDataType) {
            throw new \InvalidArgumentException(sprintf('The Sender property can only contain items of type \Ews\StructType\EwsUnifiedGroupSenderRestrictionsDataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Sender[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsUnifiedGroupSenderRestrictionsDataType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsUnifiedGroupSenderRestrictionsDataType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsUnifiedGroupSenderRestrictionsDataType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsUnifiedGroupSenderRestrictionsDataType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsUnifiedGroupSenderRestrictionsDataType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Sender
     */
    public function getAttributeName()
    {
        return 'Sender';
    }
}
