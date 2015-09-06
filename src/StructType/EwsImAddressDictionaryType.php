<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImAddressDictionaryType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsImAddressDictionaryType extends AbstractStructBase
{
    /**
     * The Entry
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Ews\StructType\EwsImAddressDictionaryEntryType
     */
    public $Entry;
    /**
     * Constructor method for ImAddressDictionaryType
     * @uses EwsImAddressDictionaryType::setEntry()
     * @param \Ews\StructType\EwsImAddressDictionaryEntryType $entry
     */
    public function __construct(\Ews\StructType\EwsImAddressDictionaryEntryType $entry = null)
    {
        $this
            ->setEntry($entry);
    }
    /**
     * Get Entry value
     * @return \Ews\StructType\EwsImAddressDictionaryEntryType|null
     */
    public function getEntry()
    {
        return $this->Entry;
    }
    /**
     * Set Entry value
     * @param \Ews\StructType\EwsImAddressDictionaryEntryType $entry
     * @return \Ews\StructType\EwsImAddressDictionaryType
     */
    public function setEntry(\Ews\StructType\EwsImAddressDictionaryEntryType $entry = null)
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
     * @return \Ews\StructType\EwsImAddressDictionaryType
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
