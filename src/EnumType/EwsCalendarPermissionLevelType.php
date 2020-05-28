<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CalendarPermissionLevelType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCalendarPermissionLevelType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Owner'
     * @return string 'Owner'
     */
    const VALUE_OWNER = 'Owner';
    /**
     * Constant for value 'PublishingEditor'
     * @return string 'PublishingEditor'
     */
    const VALUE_PUBLISHING_EDITOR = 'PublishingEditor';
    /**
     * Constant for value 'Editor'
     * @return string 'Editor'
     */
    const VALUE_EDITOR = 'Editor';
    /**
     * Constant for value 'PublishingAuthor'
     * @return string 'PublishingAuthor'
     */
    const VALUE_PUBLISHING_AUTHOR = 'PublishingAuthor';
    /**
     * Constant for value 'Author'
     * @return string 'Author'
     */
    const VALUE_AUTHOR = 'Author';
    /**
     * Constant for value 'NoneditingAuthor'
     * @return string 'NoneditingAuthor'
     */
    const VALUE_NONEDITING_AUTHOR = 'NoneditingAuthor';
    /**
     * Constant for value 'Reviewer'
     * @return string 'Reviewer'
     */
    const VALUE_REVIEWER = 'Reviewer';
    /**
     * Constant for value 'Contributor'
     * @return string 'Contributor'
     */
    const VALUE_CONTRIBUTOR = 'Contributor';
    /**
     * Constant for value 'FreeBusyTimeOnly'
     * @return string 'FreeBusyTimeOnly'
     */
    const VALUE_FREE_BUSY_TIME_ONLY = 'FreeBusyTimeOnly';
    /**
     * Constant for value 'FreeBusyTimeAndSubjectAndLocation'
     * @return string 'FreeBusyTimeAndSubjectAndLocation'
     */
    const VALUE_FREE_BUSY_TIME_AND_SUBJECT_AND_LOCATION = 'FreeBusyTimeAndSubjectAndLocation';
    /**
     * Constant for value 'Custom'
     * @return string 'Custom'
     */
    const VALUE_CUSTOM = 'Custom';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_OWNER
     * @uses self::VALUE_PUBLISHING_EDITOR
     * @uses self::VALUE_EDITOR
     * @uses self::VALUE_PUBLISHING_AUTHOR
     * @uses self::VALUE_AUTHOR
     * @uses self::VALUE_NONEDITING_AUTHOR
     * @uses self::VALUE_REVIEWER
     * @uses self::VALUE_CONTRIBUTOR
     * @uses self::VALUE_FREE_BUSY_TIME_ONLY
     * @uses self::VALUE_FREE_BUSY_TIME_AND_SUBJECT_AND_LOCATION
     * @uses self::VALUE_CUSTOM
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_OWNER,
            self::VALUE_PUBLISHING_EDITOR,
            self::VALUE_EDITOR,
            self::VALUE_PUBLISHING_AUTHOR,
            self::VALUE_AUTHOR,
            self::VALUE_NONEDITING_AUTHOR,
            self::VALUE_REVIEWER,
            self::VALUE_CONTRIBUTOR,
            self::VALUE_FREE_BUSY_TIME_ONLY,
            self::VALUE_FREE_BUSY_TIME_AND_SUBJECT_AND_LOCATION,
            self::VALUE_CUSTOM,
        );
    }
}
