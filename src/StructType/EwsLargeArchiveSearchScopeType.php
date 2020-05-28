<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LargeArchiveSearchScopeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsLargeArchiveSearchScopeType extends AbstractStructBase
{
    /**
     * The ArchiveTypes
     * @var string[]
     */
    public $ArchiveTypes;
    /**
     * Constructor method for LargeArchiveSearchScopeType
     * @uses EwsLargeArchiveSearchScopeType::setArchiveTypes()
     * @param string[] $archiveTypes
     */
    public function __construct(array $archiveTypes = array())
    {
        $this
            ->setArchiveTypes($archiveTypes);
    }
    /**
     * Get ArchiveTypes value
     * @return string[]|null
     */
    public function getArchiveTypes()
    {
        return $this->ArchiveTypes;
    }
    /**
     * This method is responsible for validating the values passed to the setArchiveTypes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setArchiveTypes method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateArchiveTypesForArrayConstraintsFromSetArchiveTypes(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $largeArchiveSearchScopeTypeArchiveTypesItem) {
            // validation for constraint: enumeration
            if (!\Ews\EnumType\EwsSearchScopeArchivesType::valueIsValid($largeArchiveSearchScopeTypeArchiveTypesItem)) {
                $invalidValues[] = is_object($largeArchiveSearchScopeTypeArchiveTypesItem) ? get_class($largeArchiveSearchScopeTypeArchiveTypesItem) : sprintf('%s(%s)', gettype($largeArchiveSearchScopeTypeArchiveTypesItem), var_export($largeArchiveSearchScopeTypeArchiveTypesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsSearchScopeArchivesType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Ews\EnumType\EwsSearchScopeArchivesType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ArchiveTypes value
     * @uses \Ews\EnumType\EwsSearchScopeArchivesType::valueIsValid()
     * @uses \Ews\EnumType\EwsSearchScopeArchivesType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $archiveTypes
     * @return \Ews\StructType\EwsLargeArchiveSearchScopeType
     */
    public function setArchiveTypes(array $archiveTypes = array())
    {
        // validation for constraint: list
        if ('' !== ($archiveTypesArrayErrorMessage = self::validateArchiveTypesForArrayConstraintsFromSetArchiveTypes($archiveTypes))) {
            throw new \InvalidArgumentException($archiveTypesArrayErrorMessage, __LINE__);
        }
        $this->ArchiveTypes = is_array($archiveTypes) ? implode(' ', $archiveTypes) : null;
        return $this;
    }
}
