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
     * Meta informations extracted from the WSDL
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
     * Set Email value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsAbchEmailAddressDictionaryEntryType[] $email
     * @return \Ews\StructType\EwsAbchEmailAddressDictionaryType
     */
    public function setEmail(array $email = array())
    {
        foreach ($email as $abchEmailAddressDictionaryTypeEmailItem) {
            // validation for constraint: itemType
            if (!$abchEmailAddressDictionaryTypeEmailItem instanceof \Ews\StructType\EwsAbchEmailAddressDictionaryEntryType) {
                throw new \InvalidArgumentException(sprintf('The Email property can only contain items of \Ews\StructType\EwsAbchEmailAddressDictionaryEntryType, "%s" given', is_object($abchEmailAddressDictionaryTypeEmailItem) ? get_class($abchEmailAddressDictionaryTypeEmailItem) : gettype($abchEmailAddressDictionaryTypeEmailItem)), __LINE__);
            }
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
            throw new \InvalidArgumentException(sprintf('The Email property can only contain items of \Ews\StructType\EwsAbchEmailAddressDictionaryEntryType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Email[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsAbchEmailAddressDictionaryType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
