<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmailAddressDictionaryType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsEmailAddressDictionaryType extends AbstractStructBase
{
    /**
     * The Entry
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Ews\StructType\EwsEmailAddressDictionaryEntryType
     */
    public $Entry;
    /**
     * Constructor method for EmailAddressDictionaryType
     * @uses EwsEmailAddressDictionaryType::setEntry()
     * @param \Ews\StructType\EwsEmailAddressDictionaryEntryType $entry
     */
    public function __construct(\Ews\StructType\EwsEmailAddressDictionaryEntryType $entry = null)
    {
        $this
            ->setEntry($entry);
    }
    /**
     * Get Entry value
     * @return \Ews\StructType\EwsEmailAddressDictionaryEntryType|null
     */
    public function getEntry()
    {
        return $this->Entry;
    }
    /**
     * Set Entry value
     * @param \Ews\StructType\EwsEmailAddressDictionaryEntryType $entry
     * @return \Ews\StructType\EwsEmailAddressDictionaryType
     */
    public function setEntry(\Ews\StructType\EwsEmailAddressDictionaryEntryType $entry = null)
    {
        $this->Entry = $entry;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsEmailAddressDictionaryType
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
