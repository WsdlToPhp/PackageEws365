<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string
     */
    protected ?string $ArchiveTypes = null;
    /**
     * Constructor method for LargeArchiveSearchScopeType
     * @uses EwsLargeArchiveSearchScopeType::setArchiveTypes()
     * @param array|string $archiveTypes
     */
    public function __construct($archiveTypes = [])
    {
        $this
            ->setArchiveTypes($archiveTypes);
    }
    /**
     * Get ArchiveTypes value
     * @return string
     */
    public function getArchiveTypes(): ?string
    {
        return $this->ArchiveTypes;
    }
    /**
     * This method is responsible for validating the values passed to the setArchiveTypes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setArchiveTypes method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateArchiveTypesForArrayConstraintsFromSetArchiveTypes(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $largeArchiveSearchScopeTypeArchiveTypesItem) {
            // validation for constraint: enumeration
            if (!\EnumType\EwsSearchScopeArchivesType::valueIsValid($largeArchiveSearchScopeTypeArchiveTypesItem)) {
                $invalidValues[] = is_object($largeArchiveSearchScopeTypeArchiveTypesItem) ? get_class($largeArchiveSearchScopeTypeArchiveTypesItem) : sprintf('%s(%s)', gettype($largeArchiveSearchScopeTypeArchiveTypesItem), var_export($largeArchiveSearchScopeTypeArchiveTypesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsSearchScopeArchivesType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\EwsSearchScopeArchivesType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ArchiveTypes value
     * @uses \EnumType\EwsSearchScopeArchivesType::valueIsValid()
     * @uses \EnumType\EwsSearchScopeArchivesType::getValidValues()
     * @throws InvalidArgumentException
     * @param array|string $archiveTypes
     * @return \StructType\EwsLargeArchiveSearchScopeType
     */
    public function setArchiveTypes($archiveTypes = []): self
    {
        // validation for constraint: list
        if ('' !== ($archiveTypesArrayErrorMessage = self::validateArchiveTypesForArrayConstraintsFromSetArchiveTypes(is_string($archiveTypes) ? explode(' ', $archiveTypes) : $archiveTypes))) {
            throw new InvalidArgumentException($archiveTypesArrayErrorMessage, __LINE__);
        }
        $this->ArchiveTypes = is_array($archiveTypes) ? implode(' ', $archiveTypes) : $archiveTypes;
        
        return $this;
    }
}
