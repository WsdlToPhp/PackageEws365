<?php

namespace Ews\EnumType;

/**
 * This class stands for ClientIdType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsClientIdType
{
    /**
     * Constant for value 'Web'
     * @return string 'Web'
     */
    const VALUE_WEB = 'Web';
    /**
     * Constant for value 'Mobile'
     * @return string 'Mobile'
     */
    const VALUE_MOBILE = 'Mobile';
    /**
     * Constant for value 'Tablet'
     * @return string 'Tablet'
     */
    const VALUE_TABLET = 'Tablet';
    /**
     * Constant for value 'Desktop'
     * @return string 'Desktop'
     */
    const VALUE_DESKTOP = 'Desktop';
    /**
     * Constant for value 'Exchange'
     * @return string 'Exchange'
     */
    const VALUE_EXCHANGE = 'Exchange';
    /**
     * Constant for value 'Outlook'
     * @return string 'Outlook'
     */
    const VALUE_OUTLOOK = 'Outlook';
    /**
     * Constant for value 'MacOutlook'
     * @return string 'MacOutlook'
     */
    const VALUE_MACOUTLOOK = 'MacOutlook';
    /**
     * Constant for value 'POP3'
     * @return string 'POP3'
     */
    const VALUE_POP3 = 'POP3';
    /**
     * Constant for value 'IMAP4'
     * @return string 'IMAP4'
     */
    const VALUE_IMAP4 = 'IMAP4';
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Constant for value 'Lync'
     * @return string 'Lync'
     */
    const VALUE_LYNC = 'Lync';
    /**
     * Constant for value 'OutlookService'
     * @return string 'OutlookService'
     */
    const VALUE_OUTLOOKSERVICE = 'OutlookService';
    /**
     * Constant for value 'MacMail'
     * @return string 'MacMail'
     */
    const VALUE_MACMAIL = 'MacMail';
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
     * @uses self::VALUE_WEB
     * @uses self::VALUE_MOBILE
     * @uses self::VALUE_TABLET
     * @uses self::VALUE_DESKTOP
     * @uses self::VALUE_EXCHANGE
     * @uses self::VALUE_OUTLOOK
     * @uses self::VALUE_MACOUTLOOK
     * @uses self::VALUE_POP3
     * @uses self::VALUE_IMAP4
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_LYNC
     * @uses self::VALUE_OUTLOOKSERVICE
     * @uses self::VALUE_MACMAIL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WEB,
            self::VALUE_MOBILE,
            self::VALUE_TABLET,
            self::VALUE_DESKTOP,
            self::VALUE_EXCHANGE,
            self::VALUE_OUTLOOK,
            self::VALUE_MACOUTLOOK,
            self::VALUE_POP3,
            self::VALUE_IMAP4,
            self::VALUE_OTHER,
            self::VALUE_LYNC,
            self::VALUE_OUTLOOKSERVICE,
            self::VALUE_MACMAIL,
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
