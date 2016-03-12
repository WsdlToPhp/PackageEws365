<?php

namespace Ews\EnumType;

/**
 * This class stands for ContactUrlKeyType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
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
    const VALUE_EBC_DISPLAY_DEFINITION = 'EbcDisplayDefinition';
    /**
     * Constant for value 'EbcFinalImage'
     * @return string 'EbcFinalImage'
     */
    const VALUE_EBC_FINAL_IMAGE = 'EbcFinalImage';
    /**
     * Constant for value 'EbcLogo'
     * @return string 'EbcLogo'
     */
    const VALUE_EBC_LOGO = 'EbcLogo';
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
    const VALUE_INTERNAL_MARKER = 'InternalMarker';
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
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_PERSONAL
     * @uses self::VALUE_BUSINESS
     * @uses self::VALUE_ATTACHMENT
     * @uses self::VALUE_EBC_DISPLAY_DEFINITION
     * @uses self::VALUE_EBC_FINAL_IMAGE
     * @uses self::VALUE_EBC_LOGO
     * @uses self::VALUE_FEED
     * @uses self::VALUE_IMAGE
     * @uses self::VALUE_INTERNAL_MARKER
     * @uses self::VALUE_OTHER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PERSONAL,
            self::VALUE_BUSINESS,
            self::VALUE_ATTACHMENT,
            self::VALUE_EBC_DISPLAY_DEFINITION,
            self::VALUE_EBC_FINAL_IMAGE,
            self::VALUE_EBC_LOGO,
            self::VALUE_FEED,
            self::VALUE_IMAGE,
            self::VALUE_INTERNAL_MARKER,
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
