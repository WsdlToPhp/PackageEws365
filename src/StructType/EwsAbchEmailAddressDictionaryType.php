<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsAbchEmailAddressDictionaryEntryType[]
     */
    public $Email;
    /**
     * Constructor method for AbchEmailAddressDictionaryType
     * @uses EwsAbchEmailAddressDictionaryType::setEmail()
     * @param \Ews\StructType\EwsAbchEmailAddressDictionaryEntryType[] $email
     */
    public function __construct(array $email = array())
    {
        $this
            ->setEmail($email);
    }
    /**
     * Get Email value
     * @return \Ews\StructType\EwsAbchEmailAddressDictionaryEntryType[]|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * This method is responsible for validating the values passed to the setEmail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmailForArrayConstraintsFromSetEmail(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $abchEmailAddressDictionaryTypeEmailItem) {
            // validation for constraint: itemType
            if (!$abchEmailAddressDictionaryTypeEmailItem instanceof \Ews\StructType\EwsAbchEmailAddressDictionaryEntryType) {
                $invalidValues[] = is_object($abchEmailAddressDictionaryTypeEmailItem) ? get_class($abchEmailAddressDictionaryTypeEmailItem) : sprintf('%s(%s)', gettype($abchEmailAddressDictionaryTypeEmailItem), var_export($abchEmailAddressDictionaryTypeEmailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Email property can only contain items of type \Ews\StructType\EwsAbchEmailAddressDictionaryEntryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Email value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsAbchEmailAddressDictionaryEntryType[] $email
     * @return \Ews\StructType\EwsAbchEmailAddressDictionaryType
     */
    public function setEmail(array $email = array())
    {
        // validation for constraint: array
        if ('' !== ($emailArrayErrorMessage = self::validateEmailForArrayConstraintsFromSetEmail($email))) {
            throw new \InvalidArgumentException($emailArrayErrorMessage, __LINE__);
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Add item to Email value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsAbchEmailAddressDictionaryEntryType $item
     * @return \Ews\StructType\EwsAbchEmailAddressDictionaryType
     */
    public function addToEmail(\Ews\StructType\EwsAbchEmailAddressDictionaryEntryType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsAbchEmailAddressDictionaryEntryType) {
            throw new \InvalidArgumentException(sprintf('The Email property can only contain items of type \Ews\StructType\EwsAbchEmailAddressDictionaryEntryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Email[] = $item;
        return $this;
    }
}
