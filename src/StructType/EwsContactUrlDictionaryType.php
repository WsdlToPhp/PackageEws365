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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setUrl method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUrl method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUrlForArrayConstraintsFromSetUrl(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $contactUrlDictionaryTypeUrlItem) {
            // validation for constraint: itemType
            if (!$contactUrlDictionaryTypeUrlItem instanceof \Ews\StructType\EwsContactUrlDictionaryEntryType) {
                $invalidValues[] = is_object($contactUrlDictionaryTypeUrlItem) ? get_class($contactUrlDictionaryTypeUrlItem) : sprintf('%s(%s)', gettype($contactUrlDictionaryTypeUrlItem), var_export($contactUrlDictionaryTypeUrlItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Url property can only contain items of type \Ews\StructType\EwsContactUrlDictionaryEntryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Url value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsContactUrlDictionaryEntryType[] $url
     * @return \Ews\StructType\EwsContactUrlDictionaryType
     */
    public function setUrl(array $url = array())
    {
        // validation for constraint: array
        if ('' !== ($urlArrayErrorMessage = self::validateUrlForArrayConstraintsFromSetUrl($url))) {
            throw new \InvalidArgumentException($urlArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The Url property can only contain items of type \Ews\StructType\EwsContactUrlDictionaryEntryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Url[] = $item;
        return $this;
    }
}
