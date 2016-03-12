<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactUrlDictionaryType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsContactUrlDictionaryType extends AbstractStructBase
{
    /**
     * The Url
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Ews\StructType\EwsContactUrlDictionaryEntryType[]
     */
    public $Url;
    /**
     * Constructor method for ContactUrlDictionaryType
     * @uses EwsContactUrlDictionaryType::setUrl()
     * @param \Ews\StructType\EwsContactUrlDictionaryEntryType[] $url
     */
    public function __construct(array $url = array())
    {
        $this
            ->setUrl($url);
    }
    /**
     * Get Url value
     * @return \Ews\StructType\EwsContactUrlDictionaryEntryType[]|null
     */
    public function getUrl()
    {
        return $this->Url;
    }
    /**
     * Set Url value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsContactUrlDictionaryEntryType[] $url
     * @return \Ews\StructType\EwsContactUrlDictionaryType
     */
    public function setUrl(array $url = array())
    {
        foreach ($url as $contactUrlDictionaryTypeUrlItem) {
            // validation for constraint: itemType
            if (!$contactUrlDictionaryTypeUrlItem instanceof \Ews\StructType\EwsContactUrlDictionaryEntryType) {
                throw new \InvalidArgumentException(sprintf('The Url property can only contain items of \Ews\StructType\EwsContactUrlDictionaryEntryType, "%s" given', is_object($contactUrlDictionaryTypeUrlItem) ? get_class($contactUrlDictionaryTypeUrlItem) : gettype($contactUrlDictionaryTypeUrlItem)), __LINE__);
            }
        }
        $this->Url = $url;
        return $this;
    }
    /**
     * Add item to Url value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsContactUrlDictionaryEntryType $item
     * @return \Ews\StructType\EwsContactUrlDictionaryType
     */
    public function addToUrl(\Ews\StructType\EwsContactUrlDictionaryEntryType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsContactUrlDictionaryEntryType) {
            throw new \InvalidArgumentException(sprintf('The Url property can only contain items of \Ews\StructType\EwsContactUrlDictionaryEntryType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Url[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsContactUrlDictionaryType
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
