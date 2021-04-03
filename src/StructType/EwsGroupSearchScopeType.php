<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GroupSearchScopeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGroupSearchScopeType extends AbstractStructBase
{
    /**
     * The GroupTypes
     * @var string
     */
    protected ?string $GroupTypes = null;
    /**
     * Constructor method for GroupSearchScopeType
     * @uses EwsGroupSearchScopeType::setGroupTypes()
     * @param array|string $groupTypes
     */
    public function __construct($groupTypes = [])
    {
        $this
            ->setGroupTypes($groupTypes);
    }
    /**
     * Get GroupTypes value
     * @return string
     */
    public function getGroupTypes(): ?string
    {
        return $this->GroupTypes;
    }
    /**
     * This method is responsible for validating the values passed to the setGroupTypes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGroupTypes method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGroupTypesForArrayConstraintsFromSetGroupTypes(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $groupSearchScopeTypeGroupTypesItem) {
            // validation for constraint: enumeration
            if (!\EnumType\EwsSearchScopeGroupsType::valueIsValid($groupSearchScopeTypeGroupTypesItem)) {
                $invalidValues[] = is_object($groupSearchScopeTypeGroupTypesItem) ? get_class($groupSearchScopeTypeGroupTypesItem) : sprintf('%s(%s)', gettype($groupSearchScopeTypeGroupTypesItem), var_export($groupSearchScopeTypeGroupTypesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsSearchScopeGroupsType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\EwsSearchScopeGroupsType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set GroupTypes value
     * @uses \EnumType\EwsSearchScopeGroupsType::valueIsValid()
     * @uses \EnumType\EwsSearchScopeGroupsType::getValidValues()
     * @throws InvalidArgumentException
     * @param array|string $groupTypes
     * @return \StructType\EwsGroupSearchScopeType
     */
    public function setGroupTypes($groupTypes = []): self
    {
        // validation for constraint: list
        if ('' !== ($groupTypesArrayErrorMessage = self::validateGroupTypesForArrayConstraintsFromSetGroupTypes(is_string($groupTypes) ? explode(' ', $groupTypes) : $groupTypes))) {
            throw new InvalidArgumentException($groupTypesArrayErrorMessage, __LINE__);
        }
        $this->GroupTypes = is_array($groupTypes) ? implode(' ', $groupTypes) : $groupTypes;
        
        return $this;
    }
}
