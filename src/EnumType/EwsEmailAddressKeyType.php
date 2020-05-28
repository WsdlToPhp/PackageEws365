<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EmailAddressKeyType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsEmailAddressKeyType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'EmailAddress1'
     * @return string 'EmailAddress1'
     */
    const VALUE_EMAIL_ADDRESS_1 = 'EmailAddress1';
    /**
     * Constant for value 'EmailAddress2'
     * @return string 'EmailAddress2'
     */
    const VALUE_EMAIL_ADDRESS_2 = 'EmailAddress2';
    /**
     * Constant for value 'EmailAddress3'
     * @return string 'EmailAddress3'
     */
    const VALUE_EMAIL_ADDRESS_3 = 'EmailAddress3';
    /**
     * Return allowed values
     * @uses self::VALUE_EMAIL_ADDRESS_1
     * @uses self::VALUE_EMAIL_ADDRESS_2
     * @uses self::VALUE_EMAIL_ADDRESS_3
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EMAIL_ADDRESS_1,
            self::VALUE_EMAIL_ADDRESS_2,
            self::VALUE_EMAIL_ADDRESS_3,
        );
    }
}
