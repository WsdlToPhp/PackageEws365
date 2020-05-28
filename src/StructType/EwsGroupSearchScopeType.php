<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string[]
     */
    public $GroupTypes;
    /**
     * Constructor method for GroupSearchScopeType
     * @uses EwsGroupSearchScopeType::setGroupTypes()
     * @param string[] $groupTypes
     */
    public function __construct(array $groupTypes = array())
    {
        $this
            ->setGroupTypes($groupTypes);
    }
    /**
     * Get GroupTypes value
     * @return string[]|null
     */
    public function getGroupTypes()
    {
        return $this->GroupTypes;
    }
    /**
     * This method is responsible for validating the values passed to the setGroupTypes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGroupTypes method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGroupTypesForArrayConstraintsFromSetGroupTypes(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $groupSearchScopeTypeGroupTypesItem) {
            // validation for constraint: enumeration
            if (!\Ews\EnumType\EwsSearchScopeGroupsType::valueIsValid($groupSearchScopeTypeGroupTypesItem)) {
                $invalidValues[] = is_object($groupSearchScopeTypeGroupTypesItem) ? get_class($groupSearchScopeTypeGroupTypesItem) : sprintf('%s(%s)', gettype($groupSearchScopeTypeGroupTypesItem), var_export($groupSearchScopeTypeGroupTypesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsSearchScopeGroupsType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Ews\EnumType\EwsSearchScopeGroupsType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set GroupTypes value
     * @uses \Ews\EnumType\EwsSearchScopeGroupsType::valueIsValid()
     * @uses \Ews\EnumType\EwsSearchScopeGroupsType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $groupTypes
     * @return \Ews\StructType\EwsGroupSearchScopeType
     */
    public function setGroupTypes(array $groupTypes = array())
    {
        // validation for constraint: list
        if ('' !== ($groupTypesArrayErrorMessage = self::validateGroupTypesForArrayConstraintsFromSetGroupTypes($groupTypes))) {
            throw new \InvalidArgumentException($groupTypesArrayErrorMessage, __LINE__);
        }
        $this->GroupTypes = is_array($groupTypes) ? implode(' ', $groupTypes) : null;
        return $this;
    }
}
