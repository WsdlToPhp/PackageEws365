<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfExtractedEmailAddresses ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfExtractedEmailAddresses extends AbstractStructArrayBase
{
    /**
     * The EmailAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $EmailAddress = [];
    /**
     * Constructor method for ArrayOfExtractedEmailAddresses
     * @uses EwsArrayOfExtractedEmailAddresses::setEmailAddress()
     * @param string[] $emailAddress
     */
    public function __construct(array $emailAddress = [])
    {
        $this
            ->setEmailAddress($emailAddress);
    }
    /**
     * Get EmailAddress value
     * @return string[]
     */
    public function getEmailAddress(): array
    {
        return $this->EmailAddress;
    }
    /**
     * This method is responsible for validating the values passed to the setEmailAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmailAddress method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmailAddressForArrayConstraintsFromSetEmailAddress(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfExtractedEmailAddressesEmailAddressItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfExtractedEmailAddressesEmailAddressItem)) {
                $invalidValues[] = is_object($arrayOfExtractedEmailAddressesEmailAddressItem) ? get_class($arrayOfExtractedEmailAddressesEmailAddressItem) : sprintf('%s(%s)', gettype($arrayOfExtractedEmailAddressesEmailAddressItem), var_export($arrayOfExtractedEmailAddressesEmailAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EmailAddress property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set EmailAddress value
     * @throws InvalidArgumentException
     * @param string[] $emailAddress
     * @return \ArrayType\EwsArrayOfExtractedEmailAddresses
     */
    public function setEmailAddress(array $emailAddress = []): self
    {
        // validation for constraint: array
        if ('' !== ($emailAddressArrayErrorMessage = self::validateEmailAddressForArrayConstraintsFromSetEmailAddress($emailAddress))) {
            throw new InvalidArgumentException($emailAddressArrayErrorMessage, __LINE__);
        }
        $this->EmailAddress = $emailAddress;
        
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
     * @return string EmailAddress
     */
    public function getAttributeName(): string
    {
        return 'EmailAddress';
    }
}
