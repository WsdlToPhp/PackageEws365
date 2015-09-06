<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonEmptyArrayOfFolderChangeDescriptionsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfFolderChangeDescriptionsType extends AbstractStructBase
{
    /**
     * The AppendToFolderField
     * @var \Ews\StructType\EwsAppendToFolderFieldType
     */
    public $AppendToFolderField;
    /**
     * The SetFolderField
     * @var \Ews\StructType\EwsSetFolderFieldType
     */
    public $SetFolderField;
    /**
     * The DeleteFolderField
     * @var \Ews\StructType\EwsDeleteFolderFieldType
     */
    public $DeleteFolderField;
    /**
     * Constructor method for NonEmptyArrayOfFolderChangeDescriptionsType
     * @uses EwsNonEmptyArrayOfFolderChangeDescriptionsType::setAppendToFolderField()
     * @uses EwsNonEmptyArrayOfFolderChangeDescriptionsType::setSetFolderField()
     * @uses EwsNonEmptyArrayOfFolderChangeDescriptionsType::setDeleteFolderField()
     * @param \Ews\StructType\EwsAppendToFolderFieldType $appendToFolderField
     * @param \Ews\StructType\EwsSetFolderFieldType $setFolderField
     * @param \Ews\StructType\EwsDeleteFolderFieldType $deleteFolderField
     */
    public function __construct(\Ews\StructType\EwsAppendToFolderFieldType $appendToFolderField = null, \Ews\StructType\EwsSetFolderFieldType $setFolderField = null, \Ews\StructType\EwsDeleteFolderFieldType $deleteFolderField = null)
    {
        $this
            ->setAppendToFolderField($appendToFolderField)
            ->setSetFolderField($setFolderField)
            ->setDeleteFolderField($deleteFolderField);
    }
    /**
     * Get AppendToFolderField value
     * @return \Ews\StructType\EwsAppendToFolderFieldType|null
     */
    public function getAppendToFolderField()
    {
        return $this->AppendToFolderField;
    }
    /**
     * Set AppendToFolderField value
     * @param \Ews\StructType\EwsAppendToFolderFieldType $appendToFolderField
     * @return \Ews\StructType\EwsNonEmptyArrayOfFolderChangeDescriptionsType
     */
    public function setAppendToFolderField(\Ews\StructType\EwsAppendToFolderFieldType $appendToFolderField = null)
    {
        $this->AppendToFolderField = $appendToFolderField;
        return $this;
    }
    /**
     * Get SetFolderField value
     * @return \Ews\StructType\EwsSetFolderFieldType|null
     */
    public function getSetFolderField()
    {
        return $this->SetFolderField;
    }
    /**
     * Set SetFolderField value
     * @param \Ews\StructType\EwsSetFolderFieldType $setFolderField
     * @return \Ews\StructType\EwsNonEmptyArrayOfFolderChangeDescriptionsType
     */
    public function setSetFolderField(\Ews\StructType\EwsSetFolderFieldType $setFolderField = null)
    {
        $this->SetFolderField = $setFolderField;
        return $this;
    }
    /**
     * Get DeleteFolderField value
     * @return \Ews\StructType\EwsDeleteFolderFieldType|null
     */
    public function getDeleteFolderField()
    {
        return $this->DeleteFolderField;
    }
    /**
     * Set DeleteFolderField value
     * @param \Ews\StructType\EwsDeleteFolderFieldType $deleteFolderField
     * @return \Ews\StructType\EwsNonEmptyArrayOfFolderChangeDescriptionsType
     */
    public function setDeleteFolderField(\Ews\StructType\EwsDeleteFolderFieldType $deleteFolderField = null)
    {
        $this->DeleteFolderField = $deleteFolderField;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsNonEmptyArrayOfFolderChangeDescriptionsType
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
