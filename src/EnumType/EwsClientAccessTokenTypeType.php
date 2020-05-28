<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ClientAccessTokenTypeType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsClientAccessTokenTypeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'CallerIdentity'
     * @return string 'CallerIdentity'
     */
    const VALUE_CALLER_IDENTITY = 'CallerIdentity';
    /**
     * Constant for value 'ExtensionCallback'
     * @return string 'ExtensionCallback'
     */
    const VALUE_EXTENSION_CALLBACK = 'ExtensionCallback';
    /**
     * Constant for value 'ScopedToken'
     * @return string 'ScopedToken'
     */
    const VALUE_SCOPED_TOKEN = 'ScopedToken';
    /**
     * Return allowed values
     * @uses self::VALUE_CALLER_IDENTITY
     * @uses self::VALUE_EXTENSION_CALLBACK
     * @uses self::VALUE_SCOPED_TOKEN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CALLER_IDENTITY,
            self::VALUE_EXTENSION_CALLBACK,
            self::VALUE_SCOPED_TOKEN,
        );
    }
}
