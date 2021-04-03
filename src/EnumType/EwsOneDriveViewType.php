<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for OneDriveViewType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsOneDriveViewType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'SharedWithMe'
     * @return string 'SharedWithMe'
     */
    const VALUE_SHARED_WITH_ME = 'SharedWithMe';
    /**
     * Constant for value 'MyDocuments'
     * @return string 'MyDocuments'
     */
    const VALUE_MY_DOCUMENTS = 'MyDocuments';
    /**
     * Constant for value 'RecycleBin'
     * @return string 'RecycleBin'
     */
    const VALUE_RECYCLE_BIN = 'RecycleBin';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_SHARED_WITH_ME
     * @uses self::VALUE_MY_DOCUMENTS
     * @uses self::VALUE_RECYCLE_BIN
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_SHARED_WITH_ME,
            self::VALUE_MY_DOCUMENTS,
            self::VALUE_RECYCLE_BIN,
        ];
    }
}
