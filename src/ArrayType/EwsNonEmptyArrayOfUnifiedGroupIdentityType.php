<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfUnifiedGroupIdentityType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfUnifiedGroupIdentityType extends AbstractStructArrayBase
{
    /**
     * The GroupIdentity
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Ews\StructType\EwsUnifiedGroupIdentity[]
     */
    public $GroupIdentity;
    /**
     * Constructor method for NonEmptyArrayOfUnifiedGroupIdentityType
     * @uses EwsNonEmptyArrayOfUnifiedGroupIdentityType::setGroupIdentity()
     * @param \Ews\StructType\EwsUnifiedGroupIdentity[] $groupIdentity
     */
    public function __construct(array $groupIdentity = array())
    {
        $this
            ->setGroupIdentity($groupIdentity);
    }
    /**
     * Get GroupIdentity value
     * @return \Ews\StructType\EwsUnifiedGroupIdentity[]
     */
    public function getGroupIdentity()
    {
        return $this->GroupIdentity;
    }
    /**
     * This method is responsible for validating the values passed to the setGroupIdentity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGroupIdentity method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGroupIdentityForArrayConstraintsFromSetGroupIdentity(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfUnifiedGroupIdentityTypeGroupIdentityItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfUnifiedGroupIdentityTypeGroupIdentityItem instanceof \Ews\StructType\EwsUnifiedGroupIdentity) {
                $invalidValues[] = is_object($nonEmptyArrayOfUnifiedGroupIdentityTypeGroupIdentityItem) ? get_class($nonEmptyArrayOfUnifiedGroupIdentityTypeGroupIdentityItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfUnifiedGroupIdentityTypeGroupIdentityItem), var_export($nonEmptyArrayOfUnifiedGroupIdentityTypeGroupIdentityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GroupIdentity property can only contain items of type \Ews\StructType\EwsUnifiedGroupIdentity, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set GroupIdentity value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUnifiedGroupIdentity[] $groupIdentity
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfUnifiedGroupIdentityType
     */
    public function setGroupIdentity(array $groupIdentity = array())
    {
        // validation for constraint: array
        if ('' !== ($groupIdentityArrayErrorMessage = self::validateGroupIdentityForArrayConstraintsFromSetGroupIdentity($groupIdentity))) {
            throw new \InvalidArgumentException($groupIdentityArrayErrorMessage, __LINE__);
        }
        $this->GroupIdentity = $groupIdentity;
        return $this;
    }
    /**
     * Add item to GroupIdentity value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUnifiedGroupIdentity $item
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfUnifiedGroupIdentityType
     */
    public function addToGroupIdentity(\Ews\StructType\EwsUnifiedGroupIdentity $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsUnifiedGroupIdentity) {
            throw new \InvalidArgumentException(sprintf('The GroupIdentity property can only contain items of type \Ews\StructType\EwsUnifiedGroupIdentity, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->GroupIdentity[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsUnifiedGroupIdentity
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsUnifiedGroupIdentity
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsUnifiedGroupIdentity
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsUnifiedGroupIdentity
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsUnifiedGroupIdentity
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string GroupIdentity
     */
    public function getAttributeName()
    {
        return 'GroupIdentity';
    }
}
