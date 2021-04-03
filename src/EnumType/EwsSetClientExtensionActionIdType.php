<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SetClientExtensionActionIdType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetClientExtensionActionIdType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Install'
     * @return string 'Install'
     */
    const VALUE_INSTALL = 'Install';
    /**
     * Constant for value 'Uninstall'
     * @return string 'Uninstall'
     */
    const VALUE_UNINSTALL = 'Uninstall';
    /**
     * Constant for value 'Configure'
     * @return string 'Configure'
     */
    const VALUE_CONFIGURE = 'Configure';
    /**
     * Return allowed values
     * @uses self::VALUE_INSTALL
     * @uses self::VALUE_UNINSTALL
     * @uses self::VALUE_CONFIGURE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_INSTALL,
            self::VALUE_UNINSTALL,
            self::VALUE_CONFIGURE,
        ];
    }
}
