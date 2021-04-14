<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSenderAddInsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfSenderAddInsType extends AbstractStructArrayBase
{
    /**
     * The Microsoft_OutlookServices_SenderApp
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsSenderAddInEntityType[]
     */
    protected array $Microsoft_OutlookServices_SenderApp = [];
    /**
     * Constructor method for ArrayOfSenderAddInsType
     * @uses EwsArrayOfSenderAddInsType::setMicrosoft_OutlookServices_SenderApp()
     * @param \StructType\EwsSenderAddInEntityType[] $microsoft_OutlookServices_SenderApp
     */
    public function __construct(array $microsoft_OutlookServices_SenderApp = [])
    {
        $this
            ->setMicrosoft_OutlookServices_SenderApp($microsoft_OutlookServices_SenderApp);
    }
    /**
     * Get Microsoft_OutlookServices_SenderApp value
     * @return \StructType\EwsSenderAddInEntityType[]
     */
    public function getMicrosoft_OutlookServices_SenderApp(): array
    {
        return $this->{'Microsoft.OutlookServices.SenderApp'};
    }
    /**
     * This method is responsible for validating the values passed to the setMicrosoft_OutlookServices_SenderApp method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMicrosoft_OutlookServices_SenderApp method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMicrosoft_OutlookServices_SenderAppForArrayConstraintsFromSetMicrosoft_OutlookServices_SenderApp(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSenderAddInsTypeMicrosoft_OutlookServices_SenderAppItem) {
            // validation for constraint: itemType
            if (!$arrayOfSenderAddInsTypeMicrosoft_OutlookServices_SenderAppItem instanceof \StructType\EwsSenderAddInEntityType) {
                $invalidValues[] = is_object($arrayOfSenderAddInsTypeMicrosoft_OutlookServices_SenderAppItem) ? get_class($arrayOfSenderAddInsTypeMicrosoft_OutlookServices_SenderAppItem) : sprintf('%s(%s)', gettype($arrayOfSenderAddInsTypeMicrosoft_OutlookServices_SenderAppItem), var_export($arrayOfSenderAddInsTypeMicrosoft_OutlookServices_SenderAppItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Microsoft_OutlookServices_SenderApp property can only contain items of type \StructType\EwsSenderAddInEntityType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Microsoft_OutlookServices_SenderApp value
     * @throws InvalidArgumentException
     * @param \StructType\EwsSenderAddInEntityType[] $microsoft_OutlookServices_SenderApp
     * @return \ArrayType\EwsArrayOfSenderAddInsType
     */
    public function setMicrosoft_OutlookServices_SenderApp(array $microsoft_OutlookServices_SenderApp = []): self
    {
        // validation for constraint: array
        if ('' !== ($microsoft_OutlookServices_SenderAppArrayErrorMessage = self::validateMicrosoft_OutlookServices_SenderAppForArrayConstraintsFromSetMicrosoft_OutlookServices_SenderApp($microsoft_OutlookServices_SenderApp))) {
            throw new InvalidArgumentException($microsoft_OutlookServices_SenderAppArrayErrorMessage, __LINE__);
        }
        $this->Microsoft_OutlookServices_SenderApp = $this->{'Microsoft.OutlookServices.SenderApp'} = $microsoft_OutlookServices_SenderApp;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsSenderAddInEntityType|null
     */
    public function current(): ?\StructType\EwsSenderAddInEntityType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsSenderAddInEntityType|null
     */
    public function item($index): ?\StructType\EwsSenderAddInEntityType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsSenderAddInEntityType|null
     */
    public function first(): ?\StructType\EwsSenderAddInEntityType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsSenderAddInEntityType|null
     */
    public function last(): ?\StructType\EwsSenderAddInEntityType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsSenderAddInEntityType|null
     */
    public function offsetGet($offset): ?\StructType\EwsSenderAddInEntityType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsSenderAddInEntityType $item
     * @return \ArrayType\EwsArrayOfSenderAddInsType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsSenderAddInEntityType) {
            throw new InvalidArgumentException(sprintf('The Microsoft_OutlookServices_SenderApp property can only contain items of type \StructType\EwsSenderAddInEntityType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Microsoft.OutlookServices.SenderApp
     */
    public function getAttributeName(): string
    {
        return 'Microsoft.OutlookServices.SenderApp';
    }
}
