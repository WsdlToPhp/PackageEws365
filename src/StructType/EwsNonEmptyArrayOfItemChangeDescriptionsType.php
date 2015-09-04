<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonEmptyArrayOfItemChangeDescriptionsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsNonEmptyArrayOfItemChangeDescriptionsType extends AbstractStructBase
{
    /**
     * The AppendToItemField
     * @var \Ews\StructType\EwsAppendToItemFieldType
     */
    public $AppendToItemField;
    /**
     * The SetItemField
     * @var \Ews\StructType\EwsSetItemFieldType
     */
    public $SetItemField;
    /**
     * The DeleteItemField
     * @var \Ews\StructType\EwsDeleteItemFieldType
     */
    public $DeleteItemField;
    /**
     * Constructor method for NonEmptyArrayOfItemChangeDescriptionsType
     * @uses EwsNonEmptyArrayOfItemChangeDescriptionsType::setAppendToItemField()
     * @uses EwsNonEmptyArrayOfItemChangeDescriptionsType::setSetItemField()
     * @uses EwsNonEmptyArrayOfItemChangeDescriptionsType::setDeleteItemField()
     * @param \Ews\StructType\EwsAppendToItemFieldType $appendToItemField
     * @param \Ews\StructType\EwsSetItemFieldType $setItemField
     * @param \Ews\StructType\EwsDeleteItemFieldType $deleteItemField
     */
    public function __construct(\Ews\StructType\EwsAppendToItemFieldType $appendToItemField = null, \Ews\StructType\EwsSetItemFieldType $setItemField = null, \Ews\StructType\EwsDeleteItemFieldType $deleteItemField = null)
    {
        $this
            ->setAppendToItemField($appendToItemField)
            ->setSetItemField($setItemField)
            ->setDeleteItemField($deleteItemField);
    }
    /**
     * Get AppendToItemField value
     * @return \Ews\StructType\EwsAppendToItemFieldType|null
     */
    public function getAppendToItemField()
    {
        return $this->AppendToItemField;
    }
    /**
     * Set AppendToItemField value
     * @param \Ews\StructType\EwsAppendToItemFieldType $appendToItemField
     * @return \Ews\StructType\EwsNonEmptyArrayOfItemChangeDescriptionsType
     */
    public function setAppendToItemField(\Ews\StructType\EwsAppendToItemFieldType $appendToItemField = null)
    {
        $this->AppendToItemField = $appendToItemField;
        return $this;
    }
    /**
     * Get SetItemField value
     * @return \Ews\StructType\EwsSetItemFieldType|null
     */
    public function getSetItemField()
    {
        return $this->SetItemField;
    }
    /**
     * Set SetItemField value
     * @param \Ews\StructType\EwsSetItemFieldType $setItemField
     * @return \Ews\StructType\EwsNonEmptyArrayOfItemChangeDescriptionsType
     */
    public function setSetItemField(\Ews\StructType\EwsSetItemFieldType $setItemField = null)
    {
        $this->SetItemField = $setItemField;
        return $this;
    }
    /**
     * Get DeleteItemField value
     * @return \Ews\StructType\EwsDeleteItemFieldType|null
     */
    public function getDeleteItemField()
    {
        return $this->DeleteItemField;
    }
    /**
     * Set DeleteItemField value
     * @param \Ews\StructType\EwsDeleteItemFieldType $deleteItemField
     * @return \Ews\StructType\EwsNonEmptyArrayOfItemChangeDescriptionsType
     */
    public function setDeleteItemField(\Ews\StructType\EwsDeleteItemFieldType $deleteItemField = null)
    {
        $this->DeleteItemField = $deleteItemField;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsNonEmptyArrayOfItemChangeDescriptionsType
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
