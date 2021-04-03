<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AbchEmailAddressDictionaryType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAbchEmailAddressDictionaryType extends AbstractStructBase
{
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\EwsAbchEmailAddressDictionaryEntryType[]
     */
    protected array $Email = [];
    /**
     * Constructor method for AbchEmailAddressDictionaryType
     * @uses EwsAbchEmailAddressDictionaryType::setEmail()
     * @param \StructType\EwsAbchEmailAddressDictionaryEntryType[] $email
     */
    public function __construct(array $email = [])
    {
        $this
            ->setEmail($email);
    }
    /**
     * Get Email value
     * @return \StructType\EwsAbchEmailAddressDictionaryEntryType[]
     */
    public function getEmail(): array
    {
        return $this->Email;
    }
    /**
     * This method is responsible for validating the values passed to the setEmail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmailForArrayConstraintsFromSetEmail(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $abchEmailAddressDictionaryTypeEmailItem) {
            // validation for constraint: itemType
            if (!$abchEmailAddressDictionaryTypeEmailItem instanceof \StructType\EwsAbchEmailAddressDictionaryEntryType) {
                $invalidValues[] = is_object($abchEmailAddressDictionaryTypeEmailItem) ? get_class($abchEmailAddressDictionaryTypeEmailItem) : sprintf('%s(%s)', gettype($abchEmailAddressDictionaryTypeEmailItem), var_export($abchEmailAddressDictionaryTypeEmailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Email property can only contain items of type \StructType\EwsAbchEmailAddressDictionaryEntryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Email value
     * @throws InvalidArgumentException
     * @param \StructType\EwsAbchEmailAddressDictionaryEntryType[] $email
     * @return \StructType\EwsAbchEmailAddressDictionaryType
     */
    public function setEmail(array $email = []): self
    {
        // validation for constraint: array
        if ('' !== ($emailArrayErrorMessage = self::validateEmailForArrayConstraintsFromSetEmail($email))) {
            throw new InvalidArgumentException($emailArrayErrorMessage, __LINE__);
        }
        $this->Email = $email;
        
        return $this;
    }
    /**
     * Add item to Email value
     * @throws InvalidArgumentException
     * @param \StructType\EwsAbchEmailAddressDictionaryEntryType $item
     * @return \StructType\EwsAbchEmailAddressDictionaryType
     */
    public function addToEmail(\StructType\EwsAbchEmailAddressDictionaryEntryType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsAbchEmailAddressDictionaryEntryType) {
            throw new InvalidArgumentException(sprintf('The Email property can only contain items of type \StructType\EwsAbchEmailAddressDictionaryEntryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Email[] = $item;
        
        return $this;
    }
}
