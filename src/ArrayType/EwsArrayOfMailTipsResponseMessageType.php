<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMailTipsResponseMessageType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfMailTipsResponseMessageType extends AbstractStructArrayBase
{
    /**
     * The MailTipsResponseMessageType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\EwsMailTipsResponseMessageType[]
     */
    protected array $MailTipsResponseMessageType = [];
    /**
     * Constructor method for ArrayOfMailTipsResponseMessageType
     * @uses EwsArrayOfMailTipsResponseMessageType::setMailTipsResponseMessageType()
     * @param \StructType\EwsMailTipsResponseMessageType[] $mailTipsResponseMessageType
     */
    public function __construct(array $mailTipsResponseMessageType)
    {
        $this
            ->setMailTipsResponseMessageType($mailTipsResponseMessageType);
    }
    /**
     * Get MailTipsResponseMessageType value
     * @return \StructType\EwsMailTipsResponseMessageType[]
     */
    public function getMailTipsResponseMessageType(): array
    {
        return $this->MailTipsResponseMessageType;
    }
    /**
     * This method is responsible for validating the values passed to the setMailTipsResponseMessageType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMailTipsResponseMessageType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMailTipsResponseMessageTypeForArrayConstraintsFromSetMailTipsResponseMessageType(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfMailTipsResponseMessageTypeMailTipsResponseMessageTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfMailTipsResponseMessageTypeMailTipsResponseMessageTypeItem instanceof \StructType\EwsMailTipsResponseMessageType) {
                $invalidValues[] = is_object($arrayOfMailTipsResponseMessageTypeMailTipsResponseMessageTypeItem) ? get_class($arrayOfMailTipsResponseMessageTypeMailTipsResponseMessageTypeItem) : sprintf('%s(%s)', gettype($arrayOfMailTipsResponseMessageTypeMailTipsResponseMessageTypeItem), var_export($arrayOfMailTipsResponseMessageTypeMailTipsResponseMessageTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MailTipsResponseMessageType property can only contain items of type \StructType\EwsMailTipsResponseMessageType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MailTipsResponseMessageType value
     * @throws InvalidArgumentException
     * @param \StructType\EwsMailTipsResponseMessageType[] $mailTipsResponseMessageType
     * @return \ArrayType\EwsArrayOfMailTipsResponseMessageType
     */
    public function setMailTipsResponseMessageType(array $mailTipsResponseMessageType): self
    {
        // validation for constraint: array
        if ('' !== ($mailTipsResponseMessageTypeArrayErrorMessage = self::validateMailTipsResponseMessageTypeForArrayConstraintsFromSetMailTipsResponseMessageType($mailTipsResponseMessageType))) {
            throw new InvalidArgumentException($mailTipsResponseMessageTypeArrayErrorMessage, __LINE__);
        }
        $this->MailTipsResponseMessageType = $mailTipsResponseMessageType;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsMailTipsResponseMessageType|null
     */
    public function current(): ?\StructType\EwsMailTipsResponseMessageType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsMailTipsResponseMessageType|null
     */
    public function item($index): ?\StructType\EwsMailTipsResponseMessageType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsMailTipsResponseMessageType|null
     */
    public function first(): ?\StructType\EwsMailTipsResponseMessageType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsMailTipsResponseMessageType|null
     */
    public function last(): ?\StructType\EwsMailTipsResponseMessageType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsMailTipsResponseMessageType|null
     */
    public function offsetGet($offset): ?\StructType\EwsMailTipsResponseMessageType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsMailTipsResponseMessageType $item
     * @return \ArrayType\EwsArrayOfMailTipsResponseMessageType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsMailTipsResponseMessageType) {
            throw new InvalidArgumentException(sprintf('The MailTipsResponseMessageType property can only contain items of type \StructType\EwsMailTipsResponseMessageType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MailTipsResponseMessageType
     */
    public function getAttributeName(): string
    {
        return 'MailTipsResponseMessageType';
    }
}
