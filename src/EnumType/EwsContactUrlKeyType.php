<?php

namespace Ews\EnumType;

/**
 * This class stands for ContactUrlKeyType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsContactUrlKeyType
{
    /**
     * Constant for value 'Personal'
     * @return string 'Personal'
     */
    const VALUE_PERSONAL = 'Personal';
    /**
     * Constant for value 'Business'
     * @return string 'Business'
     */
    const VALUE_BUSINESS = 'Business';
    /**
     * Constant for value 'Attachment'
     * @return string 'Attachment'
     */
    const VALUE_ATTACHMENT = 'Attachment';
    /**
     * Constant for value 'EbcDisplayDefinition'
     * @return string 'EbcDisplayDefinition'
     */
    const VALUE_EBCDISPLAYDEFINITION = 'EbcDisplayDefinition';
    /**
     * Constant for value 'EbcFinalImage'
     * @return string 'EbcFinalImage'
     */
    const VALUE_EBCFINALIMAGE = 'EbcFinalImage';
    /**
     * Constant for value 'EbcLogo'
     * @return string 'EbcLogo'
     */
    const VALUE_EBCLOGO = 'EbcLogo';
    /**
     * Constant for value 'Feed'
     * @return string 'Feed'
     */
    const VALUE_FEED = 'Feed';
    /**
     * Constant for value 'Image'
     * @return string 'Image'
     */
    const VALUE_IMAGE = 'Image';
    /**
     * Constant for value 'InternalMarker'
     * @return string 'InternalMarker'
     */
    const VALUE_INTERNALMARKER = 'InternalMarker';
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_PERSONAL
     * @uses self::VALUE_BUSINESS
     * @uses self::VALUE_ATTACHMENT
     * @uses self::VALUE_EBCDISPLAYDEFINITION
     * @uses self::VALUE_EBCFINALIMAGE
     * @uses self::VALUE_EBCLOGO
     * @uses self::VALUE_FEED
     * @uses self::VALUE_IMAGE
     * @uses self::VALUE_INTERNALMARKER
     * @uses self::VALUE_OTHER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PERSONAL,
            self::VALUE_BUSINESS,
            self::VALUE_ATTACHMENT,
            self::VALUE_EBCDISPLAYDEFINITION,
            self::VALUE_EBCFINALIMAGE,
            self::VALUE_EBCLOGO,
            self::VALUE_FEED,
            self::VALUE_IMAGE,
            self::VALUE_INTERNALMARKER,
            self::VALUE_OTHER,
        );
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
