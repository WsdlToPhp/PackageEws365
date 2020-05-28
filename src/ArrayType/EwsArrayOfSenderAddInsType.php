<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsSenderAddInEntityType[]
     */
    public $Microsoft_OutlookServices_SenderApp;
    /**
     * Constructor method for ArrayOfSenderAddInsType
     * @uses EwsArrayOfSenderAddInsType::setMicrosoft_OutlookServices_SenderApp()
     * @param \Ews\StructType\EwsSenderAddInEntityType[] $microsoft_OutlookServices_SenderApp
     */
    public function __construct(array $microsoft_OutlookServices_SenderApp = array())
    {
        $this
            ->setMicrosoft_OutlookServices_SenderApp($microsoft_OutlookServices_SenderApp);
    }
    /**
     * Get Microsoft_OutlookServices_SenderApp value
     * @return \Ews\StructType\EwsSenderAddInEntityType[]|null
     */
    public function getMicrosoft_OutlookServices_SenderApp()
    {
        return $this->{'Microsoft.OutlookServices.SenderApp'};
    }
    /**
     * This method is responsible for validating the values passed to the setMicrosoft_OutlookServices_SenderApp method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMicrosoft_OutlookServices_SenderApp method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMicrosoft_OutlookServices_SenderAppForArrayConstraintsFromSetMicrosoft_OutlookServices_SenderApp(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSenderAddInsTypeMicrosoft_OutlookServices_SenderAppItem) {
            // validation for constraint: itemType
            if (!$arrayOfSenderAddInsTypeMicrosoft_OutlookServices_SenderAppItem instanceof \Ews\StructType\EwsSenderAddInEntityType) {
                $invalidValues[] = is_object($arrayOfSenderAddInsTypeMicrosoft_OutlookServices_SenderAppItem) ? get_class($arrayOfSenderAddInsTypeMicrosoft_OutlookServices_SenderAppItem) : sprintf('%s(%s)', gettype($arrayOfSenderAddInsTypeMicrosoft_OutlookServices_SenderAppItem), var_export($arrayOfSenderAddInsTypeMicrosoft_OutlookServices_SenderAppItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Microsoft_OutlookServices_SenderApp property can only contain items of type \Ews\StructType\EwsSenderAddInEntityType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Microsoft_OutlookServices_SenderApp value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSenderAddInEntityType[] $microsoft_OutlookServices_SenderApp
     * @return \Ews\ArrayType\EwsArrayOfSenderAddInsType
     */
    public function setMicrosoft_OutlookServices_SenderApp(array $microsoft_OutlookServices_SenderApp = array())
    {
        // validation for constraint: array
        if ('' !== ($microsoft_OutlookServices_SenderAppArrayErrorMessage = self::validateMicrosoft_OutlookServices_SenderAppForArrayConstraintsFromSetMicrosoft_OutlookServices_SenderApp($microsoft_OutlookServices_SenderApp))) {
            throw new \InvalidArgumentException($microsoft_OutlookServices_SenderAppArrayErrorMessage, __LINE__);
        }
        $this->Microsoft_OutlookServices_SenderApp = $this->{'Microsoft.OutlookServices.SenderApp'} = $microsoft_OutlookServices_SenderApp;
        return $this;
    }
    /**
     * Add item to Microsoft_OutlookServices_SenderApp value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSenderAddInEntityType $item
     * @return \Ews\ArrayType\EwsArrayOfSenderAddInsType
     */
    public function addToMicrosoft_OutlookServices_SenderApp(\Ews\StructType\EwsSenderAddInEntityType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsSenderAddInEntityType) {
            throw new \InvalidArgumentException(sprintf('The Microsoft_OutlookServices_SenderApp property can only contain items of type \Ews\StructType\EwsSenderAddInEntityType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Microsoft_OutlookServices_SenderApp[] = $this->{'Microsoft.OutlookServices.SenderApp'}[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsSenderAddInEntityType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsSenderAddInEntityType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsSenderAddInEntityType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsSenderAddInEntityType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsSenderAddInEntityType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Microsoft.OutlookServices.SenderApp
     */
    public function getAttributeName()
    {
        return 'Microsoft.OutlookServices.SenderApp';
    }
}
