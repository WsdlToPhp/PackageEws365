<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfLegacyDNsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfLegacyDNsType extends AbstractStructArrayBase
{
    /**
     * The LegacyDN
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $LegacyDN = [];
    /**
     * Constructor method for NonEmptyArrayOfLegacyDNsType
     * @uses EwsNonEmptyArrayOfLegacyDNsType::setLegacyDN()
     * @param string[] $legacyDN
     */
    public function __construct(array $legacyDN)
    {
        $this
            ->setLegacyDN($legacyDN);
    }
    /**
     * Get LegacyDN value
     * @return string[]
     */
    public function getLegacyDN(): array
    {
        return $this->LegacyDN;
    }
    /**
     * This method is responsible for validating the values passed to the setLegacyDN method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLegacyDN method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLegacyDNForArrayConstraintsFromSetLegacyDN(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfLegacyDNsTypeLegacyDNItem) {
            // validation for constraint: itemType
            if (!is_string($nonEmptyArrayOfLegacyDNsTypeLegacyDNItem)) {
                $invalidValues[] = is_object($nonEmptyArrayOfLegacyDNsTypeLegacyDNItem) ? get_class($nonEmptyArrayOfLegacyDNsTypeLegacyDNItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfLegacyDNsTypeLegacyDNItem), var_export($nonEmptyArrayOfLegacyDNsTypeLegacyDNItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LegacyDN property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LegacyDN value
     * @throws InvalidArgumentException
     * @param string[] $legacyDN
     * @return \ArrayType\EwsNonEmptyArrayOfLegacyDNsType
     */
    public function setLegacyDN(array $legacyDN): self
    {
        // validation for constraint: array
        if ('' !== ($legacyDNArrayErrorMessage = self::validateLegacyDNForArrayConstraintsFromSetLegacyDN($legacyDN))) {
            throw new InvalidArgumentException($legacyDNArrayErrorMessage, __LINE__);
        }
        $this->LegacyDN = $legacyDN;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current(): ?string
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index): ?string
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first(): ?string
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last(): ?string
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset): ?string
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LegacyDN
     */
    public function getAttributeName(): string
    {
        return 'LegacyDN';
    }
}
