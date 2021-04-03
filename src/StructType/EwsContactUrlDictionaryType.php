<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsContactUrlDictionaryEntryType[]
     */
    protected array $Url = [];
    /**
     * Constructor method for ContactUrlDictionaryType
     * @uses EwsContactUrlDictionaryType::setUrl()
     * @param \StructType\EwsContactUrlDictionaryEntryType[] $url
     */
    public function __construct(array $url = [])
    {
        $this
            ->setUrl($url);
    }
    /**
     * Get Url value
     * @return \StructType\EwsContactUrlDictionaryEntryType[]
     */
    public function getUrl(): array
    {
        return $this->Url;
    }
    /**
     * This method is responsible for validating the values passed to the setUrl method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUrl method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUrlForArrayConstraintsFromSetUrl(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $contactUrlDictionaryTypeUrlItem) {
            // validation for constraint: itemType
            if (!$contactUrlDictionaryTypeUrlItem instanceof \StructType\EwsContactUrlDictionaryEntryType) {
                $invalidValues[] = is_object($contactUrlDictionaryTypeUrlItem) ? get_class($contactUrlDictionaryTypeUrlItem) : sprintf('%s(%s)', gettype($contactUrlDictionaryTypeUrlItem), var_export($contactUrlDictionaryTypeUrlItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Url property can only contain items of type \StructType\EwsContactUrlDictionaryEntryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Url value
     * @throws InvalidArgumentException
     * @param \StructType\EwsContactUrlDictionaryEntryType[] $url
     * @return \StructType\EwsContactUrlDictionaryType
     */
    public function setUrl(array $url = []): self
    {
        // validation for constraint: array
        if ('' !== ($urlArrayErrorMessage = self::validateUrlForArrayConstraintsFromSetUrl($url))) {
            throw new InvalidArgumentException($urlArrayErrorMessage, __LINE__);
        }
        $this->Url = $url;
        
        return $this;
    }
    /**
     * Add item to Url value
     * @throws InvalidArgumentException
     * @param \StructType\EwsContactUrlDictionaryEntryType $item
     * @return \StructType\EwsContactUrlDictionaryType
     */
    public function addToUrl(\StructType\EwsContactUrlDictionaryEntryType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsContactUrlDictionaryEntryType) {
            throw new InvalidArgumentException(sprintf('The Url property can only contain items of type \StructType\EwsContactUrlDictionaryEntryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Url[] = $item;
        
        return $this;
    }
}
