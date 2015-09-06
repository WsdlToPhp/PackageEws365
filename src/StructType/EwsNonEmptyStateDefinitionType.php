<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonEmptyStateDefinitionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyStateDefinitionType extends AbstractStructBase
{
    /**
     * The DeletedOccurrenceStateDefinition
     * @var \Ews\StructType\EwsDeletedOccurrenceStateDefinitionType
     */
    public $DeletedOccurrenceStateDefinition;
    /**
     * The DeleteFromFolderStateDefinition
     * @var \Ews\StructType\EwsDeleteFromFolderStateDefinitionType
     */
    public $DeleteFromFolderStateDefinition;
    /**
     * The LocationBasedStateDefinition
     * @var \Ews\StructType\EwsLocationBasedStateDefinitionType
     */
    public $LocationBasedStateDefinition;
    /**
     * Constructor method for NonEmptyStateDefinitionType
     * @uses EwsNonEmptyStateDefinitionType::setDeletedOccurrenceStateDefinition()
     * @uses EwsNonEmptyStateDefinitionType::setDeleteFromFolderStateDefinition()
     * @uses EwsNonEmptyStateDefinitionType::setLocationBasedStateDefinition()
     * @param \Ews\StructType\EwsDeletedOccurrenceStateDefinitionType
     * $deletedOccurrenceStateDefinition
     * @param \Ews\StructType\EwsDeleteFromFolderStateDefinitionType
     * $deleteFromFolderStateDefinition
     * @param \Ews\StructType\EwsLocationBasedStateDefinitionType
     * $locationBasedStateDefinition
     */
    public function __construct(\Ews\StructType\EwsDeletedOccurrenceStateDefinitionType $deletedOccurrenceStateDefinition = null, \Ews\StructType\EwsDeleteFromFolderStateDefinitionType $deleteFromFolderStateDefinition = null, \Ews\StructType\EwsLocationBasedStateDefinitionType $locationBasedStateDefinition = null)
    {
        $this
            ->setDeletedOccurrenceStateDefinition($deletedOccurrenceStateDefinition)
            ->setDeleteFromFolderStateDefinition($deleteFromFolderStateDefinition)
            ->setLocationBasedStateDefinition($locationBasedStateDefinition);
    }
    /**
     * Get DeletedOccurrenceStateDefinition value
     * @return \Ews\StructType\EwsDeletedOccurrenceStateDefinitionType|null
     */
    public function getDeletedOccurrenceStateDefinition()
    {
        return $this->DeletedOccurrenceStateDefinition;
    }
    /**
     * Set DeletedOccurrenceStateDefinition value
     * @param \Ews\StructType\EwsDeletedOccurrenceStateDefinitionType
     * $deletedOccurrenceStateDefinition
     * @return \Ews\StructType\EwsNonEmptyStateDefinitionType
     */
    public function setDeletedOccurrenceStateDefinition(\Ews\StructType\EwsDeletedOccurrenceStateDefinitionType $deletedOccurrenceStateDefinition = null)
    {
        $this->DeletedOccurrenceStateDefinition = $deletedOccurrenceStateDefinition;
        return $this;
    }
    /**
     * Get DeleteFromFolderStateDefinition value
     * @return \Ews\StructType\EwsDeleteFromFolderStateDefinitionType|null
     */
    public function getDeleteFromFolderStateDefinition()
    {
        return $this->DeleteFromFolderStateDefinition;
    }
    /**
     * Set DeleteFromFolderStateDefinition value
     * @param \Ews\StructType\EwsDeleteFromFolderStateDefinitionType
     * $deleteFromFolderStateDefinition
     * @return \Ews\StructType\EwsNonEmptyStateDefinitionType
     */
    public function setDeleteFromFolderStateDefinition(\Ews\StructType\EwsDeleteFromFolderStateDefinitionType $deleteFromFolderStateDefinition = null)
    {
        $this->DeleteFromFolderStateDefinition = $deleteFromFolderStateDefinition;
        return $this;
    }
    /**
     * Get LocationBasedStateDefinition value
     * @return \Ews\StructType\EwsLocationBasedStateDefinitionType|null
     */
    public function getLocationBasedStateDefinition()
    {
        return $this->LocationBasedStateDefinition;
    }
    /**
     * Set LocationBasedStateDefinition value
     * @param \Ews\StructType\EwsLocationBasedStateDefinitionType
     * $locationBasedStateDefinition
     * @return \Ews\StructType\EwsNonEmptyStateDefinitionType
     */
    public function setLocationBasedStateDefinition(\Ews\StructType\EwsLocationBasedStateDefinitionType $locationBasedStateDefinition = null)
    {
        $this->LocationBasedStateDefinition = $locationBasedStateDefinition;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsNonEmptyStateDefinitionType
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
