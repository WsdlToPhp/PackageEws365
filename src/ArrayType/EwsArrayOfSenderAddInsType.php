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
     */
    public $Microsoft_OutlookServices_SenderApp;
    /**
     * Constructor method for ArrayOfSenderAddInsType
     * @uses EwsArrayOfSenderAddInsType::setMicrosoft_OutlookServices_SenderApp()
     * @param \Ews\StructType\EwsSenderAddInEntityType[]
     * $microsoft_OutlookServices_SenderApp
     */
    public function __construct(array $microsoft_OutlookServices_SenderApp = array())
    {
        $this
            ->setMicrosoft_OutlookServices_SenderApp($microsoft_OutlookServices_SenderApp);
    }
    /**
     * Get microsoft_OutlookServices_SenderApp value
     * @return microsoft_OutlookServices_SenderApp
     */
    public function getMicrosoft_OutlookServices_SenderApp()
    {
        return $this->{'Microsoft.OutlookServices.SenderApp'};
    }
    /**
     * Set microsoft_OutlookServices_SenderApp value
     * @param microsoft_OutlookServices_SenderApp $microsoft_OutlookServices_SenderApp
     * @return \Ews\ArrayType\EwsArrayOfSenderAddInsType
     */
    public function setMicrosoft_OutlookServices_SenderApp(array $microsoft_OutlookServices_SenderApp = array())
    {
        foreach ($microsoft_OutlookServices_SenderApp as $arrayOfSenderAddInsTypeMicrosoft_OutlookServices_SenderAppItem) {
            // validation for constraint: itemType
            if (!$arrayOfSenderAddInsTypeMicrosoft_OutlookServices_SenderAppItem instanceof \Ews\StructType\EwsSenderAddInEntityType) {
                throw new \InvalidArgumentException(sprintf('The Microsoft_OutlookServices_SenderApp property can only contain items of \Ews\StructType\EwsSenderAddInEntityType, "%s" given', is_object($arrayOfSenderAddInsTypeMicrosoft_OutlookServices_SenderAppItem) ? get_class($arrayOfSenderAddInsTypeMicrosoft_OutlookServices_SenderAppItem) : gettype($arrayOfSenderAddInsTypeMicrosoft_OutlookServices_SenderAppItem)), __LINE__);
            }
        }
        $this->Microsoft_OutlookServices_SenderApp = $this->{'Microsoft.OutlookServices.SenderApp'} = $microsoft_OutlookServices_SenderApp;
        return $this;
    }
    /**
     */
    public function addToMicrosoft_OutlookServices_SenderApp(\Ews\StructType\EwsSenderAddInEntityType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsSenderAddInEntityType) {
            throw new \InvalidArgumentException(sprintf('The Microsoft_OutlookServices_SenderApp property can only contain items of \Ews\StructType\EwsSenderAddInEntityType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Microsoft_OutlookServices_SenderApp[] = $item;
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfSenderAddInsType
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
