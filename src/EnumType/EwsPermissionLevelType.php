<?php

namespace Ews\EnumType;

/**
 * This class stands for PermissionLevelType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsPermissionLevelType
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
    const VALUE_PUBLISHINGEDITOR = 'PublishingEditor';
    /**
     * Constant for value 'Editor'
     * @return string 'Editor'
     */
    const VALUE_EDITOR = 'Editor';
    /**
     * Constant for value 'PublishingAuthor'
     * @return string 'PublishingAuthor'
     */
    const VALUE_PUBLISHINGAUTHOR = 'PublishingAuthor';
    /**
     * Constant for value 'Author'
     * @return string 'Author'
     */
    const VALUE_AUTHOR = 'Author';
    /**
     * Constant for value 'NoneditingAuthor'
     * @return string 'NoneditingAuthor'
     */
    const VALUE_NONEDITINGAUTHOR = 'NoneditingAuthor';
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
     * Constant for value 'Custom'
     * @return string 'Custom'
     */
    const VALUE_CUSTOM = 'Custom';
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_OWNER
     * @uses self::VALUE_PUBLISHINGEDITOR
     * @uses self::VALUE_EDITOR
     * @uses self::VALUE_PUBLISHINGAUTHOR
     * @uses self::VALUE_AUTHOR
     * @uses self::VALUE_NONEDITINGAUTHOR
     * @uses self::VALUE_REVIEWER
     * @uses self::VALUE_CONTRIBUTOR
     * @uses self::VALUE_CUSTOM
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_OWNER,
            self::VALUE_PUBLISHINGEDITOR,
            self::VALUE_EDITOR,
            self::VALUE_PUBLISHINGAUTHOR,
            self::VALUE_AUTHOR,
            self::VALUE_NONEDITINGAUTHOR,
            self::VALUE_REVIEWER,
            self::VALUE_CONTRIBUTOR,
            self::VALUE_CUSTOM,
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
