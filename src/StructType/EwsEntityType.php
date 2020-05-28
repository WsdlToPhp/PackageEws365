<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EntityType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsEntityType extends AbstractStructBase
{
    /**
     * The Position
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Position;
    /**
     * Constructor method for EntityType
     * @uses EwsEntityType::setPosition()
     * @param string[] $position
     */
    public function __construct(array $position = array())
    {
        $this
            ->setPosition($position);
    }
    /**
     * Get Position value
     * @return string[]|null
     */
    public function getPosition()
    {
        return $this->Position;
    }
    /**
     * This method is responsible for validating the values passed to the setPosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPosition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePositionForArrayConstraintsFromSetPosition(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $entityTypePositionItem) {
            // validation for constraint: enumeration
            if (!\Ews\EnumType\EwsEmailPositionType::valueIsValid($entityTypePositionItem)) {
                $invalidValues[] = is_object($entityTypePositionItem) ? get_class($entityTypePositionItem) : sprintf('%s(%s)', gettype($entityTypePositionItem), var_export($entityTypePositionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsEmailPositionType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Ews\EnumType\EwsEmailPositionType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Position value
     * @uses \Ews\EnumType\EwsEmailPositionType::valueIsValid()
     * @uses \Ews\EnumType\EwsEmailPositionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $position
     * @return \Ews\StructType\EwsEntityType
     */
    public function setPosition(array $position = array())
    {
        // validation for constraint: array
        if ('' !== ($positionArrayErrorMessage = self::validatePositionForArrayConstraintsFromSetPosition($position))) {
            throw new \InvalidArgumentException($positionArrayErrorMessage, __LINE__);
        }
        $this->Position = $position;
        return $this;
    }
    /**
     * Add item to Position value
     * @uses \Ews\EnumType\EwsEmailPositionType::valueIsValid()
     * @uses \Ews\EnumType\EwsEmailPositionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Ews\StructType\EwsEntityType
     */
    public function addToPosition($item)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsEmailPositionType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsEmailPositionType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \Ews\EnumType\EwsEmailPositionType::getValidValues())), __LINE__);
        }
        $this->Position[] = $item;
        return $this;
    }
}
