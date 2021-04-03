<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected array $Position = [];
    /**
     * Constructor method for EntityType
     * @uses EwsEntityType::setPosition()
     * @param string[] $position
     */
    public function __construct(array $position = [])
    {
        $this
            ->setPosition($position);
    }
    /**
     * Get Position value
     * @return string[]
     */
    public function getPosition(): array
    {
        return $this->Position;
    }
    /**
     * This method is responsible for validating the values passed to the setPosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPosition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePositionForArrayConstraintsFromSetPosition(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $entityTypePositionItem) {
            // validation for constraint: enumeration
            if (!\EnumType\EwsEmailPositionType::valueIsValid($entityTypePositionItem)) {
                $invalidValues[] = is_object($entityTypePositionItem) ? get_class($entityTypePositionItem) : sprintf('%s(%s)', gettype($entityTypePositionItem), var_export($entityTypePositionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsEmailPositionType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\EwsEmailPositionType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Position value
     * @uses \EnumType\EwsEmailPositionType::valueIsValid()
     * @uses \EnumType\EwsEmailPositionType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $position
     * @return \StructType\EwsEntityType
     */
    public function setPosition(array $position = []): self
    {
        // validation for constraint: array
        if ('' !== ($positionArrayErrorMessage = self::validatePositionForArrayConstraintsFromSetPosition($position))) {
            throw new InvalidArgumentException($positionArrayErrorMessage, __LINE__);
        }
        $this->Position = $position;
        
        return $this;
    }
    /**
     * Add item to Position value
     * @uses \EnumType\EwsEmailPositionType::valueIsValid()
     * @uses \EnumType\EwsEmailPositionType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\EwsEntityType
     */
    public function addToPosition(string $item): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsEmailPositionType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsEmailPositionType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\EwsEmailPositionType::getValidValues())), __LINE__);
        }
        $this->Position[] = $item;
        
        return $this;
    }
}
