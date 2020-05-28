<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
    public $LegacyDN;
    /**
     * Constructor method for NonEmptyArrayOfLegacyDNsType
     * @uses EwsNonEmptyArrayOfLegacyDNsType::setLegacyDN()
     * @param string[] $legacyDN
     */
    public function __construct(array $legacyDN = array())
    {
        $this
            ->setLegacyDN($legacyDN);
    }
    /**
     * Get LegacyDN value
     * @return string[]
     */
    public function getLegacyDN()
    {
        return $this->LegacyDN;
    }
    /**
     * This method is responsible for validating the values passed to the setLegacyDN method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLegacyDN method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLegacyDNForArrayConstraintsFromSetLegacyDN(array $values = array())
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
     * @throws \InvalidArgumentException
     * @param string[] $legacyDN
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfLegacyDNsType
     */
    public function setLegacyDN(array $legacyDN = array())
    {
        // validation for constraint: array
        if ('' !== ($legacyDNArrayErrorMessage = self::validateLegacyDNForArrayConstraintsFromSetLegacyDN($legacyDN))) {
            throw new \InvalidArgumentException($legacyDNArrayErrorMessage, __LINE__);
        }
        $this->LegacyDN = $legacyDN;
        return $this;
    }
    /**
     * Add item to LegacyDN value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfLegacyDNsType
     */
    public function addToLegacyDN($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The LegacyDN property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->LegacyDN[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LegacyDN
     */
    public function getAttributeName()
    {
        return 'LegacyDN';
    }
}
