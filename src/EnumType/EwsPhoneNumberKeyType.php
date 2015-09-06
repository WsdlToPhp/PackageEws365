<?php

namespace Ews\EnumType;

/**
 * This class stands for PhoneNumberKeyType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPhoneNumberKeyType
{
    /**
     * Constant for value 'AssistantPhone'
     * @return string 'AssistantPhone'
     */
    const VALUE_ASSISTANTPHONE = 'AssistantPhone';
    /**
     * Constant for value 'BusinessFax'
     * @return string 'BusinessFax'
     */
    const VALUE_BUSINESSFAX = 'BusinessFax';
    /**
     * Constant for value 'BusinessPhone'
     * @return string 'BusinessPhone'
     */
    const VALUE_BUSINESSPHONE = 'BusinessPhone';
    /**
     * Constant for value 'BusinessPhone2'
     * @return string 'BusinessPhone2'
     */
    const VALUE_BUSINESSPHONE2 = 'BusinessPhone2';
    /**
     * Constant for value 'Callback'
     * @return string 'Callback'
     */
    const VALUE_CALLBACK = 'Callback';
    /**
     * Constant for value 'CarPhone'
     * @return string 'CarPhone'
     */
    const VALUE_CARPHONE = 'CarPhone';
    /**
     * Constant for value 'CompanyMainPhone'
     * @return string 'CompanyMainPhone'
     */
    const VALUE_COMPANYMAINPHONE = 'CompanyMainPhone';
    /**
     * Constant for value 'HomeFax'
     * @return string 'HomeFax'
     */
    const VALUE_HOMEFAX = 'HomeFax';
    /**
     * Constant for value 'HomePhone'
     * @return string 'HomePhone'
     */
    const VALUE_HOMEPHONE = 'HomePhone';
    /**
     * Constant for value 'HomePhone2'
     * @return string 'HomePhone2'
     */
    const VALUE_HOMEPHONE2 = 'HomePhone2';
    /**
     * Constant for value 'Isdn'
     * @return string 'Isdn'
     */
    const VALUE_ISDN = 'Isdn';
    /**
     * Constant for value 'MobilePhone'
     * @return string 'MobilePhone'
     */
    const VALUE_MOBILEPHONE = 'MobilePhone';
    /**
     * Constant for value 'OtherFax'
     * @return string 'OtherFax'
     */
    const VALUE_OTHERFAX = 'OtherFax';
    /**
     * Constant for value 'OtherTelephone'
     * @return string 'OtherTelephone'
     */
    const VALUE_OTHERTELEPHONE = 'OtherTelephone';
    /**
     * Constant for value 'Pager'
     * @return string 'Pager'
     */
    const VALUE_PAGER = 'Pager';
    /**
     * Constant for value 'PrimaryPhone'
     * @return string 'PrimaryPhone'
     */
    const VALUE_PRIMARYPHONE = 'PrimaryPhone';
    /**
     * Constant for value 'RadioPhone'
     * @return string 'RadioPhone'
     */
    const VALUE_RADIOPHONE = 'RadioPhone';
    /**
     * Constant for value 'Telex'
     * @return string 'Telex'
     */
    const VALUE_TELEX = 'Telex';
    /**
     * Constant for value 'TtyTddPhone'
     * @return string 'TtyTddPhone'
     */
    const VALUE_TTYTDDPHONE = 'TtyTddPhone';
    /**
     * Constant for value 'BusinessMobile'
     * @return string 'BusinessMobile'
     */
    const VALUE_BUSINESSMOBILE = 'BusinessMobile';
    /**
     * Constant for value 'IPPhone'
     * @return string 'IPPhone'
     */
    const VALUE_IPPHONE = 'IPPhone';
    /**
     * Constant for value 'Mms'
     * @return string 'Mms'
     */
    const VALUE_MMS = 'Mms';
    /**
     * Constant for value 'Msn'
     * @return string 'Msn'
     */
    const VALUE_MSN = 'Msn';
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
     * @uses self::VALUE_ASSISTANTPHONE
     * @uses self::VALUE_BUSINESSFAX
     * @uses self::VALUE_BUSINESSPHONE
     * @uses self::VALUE_BUSINESSPHONE2
     * @uses self::VALUE_CALLBACK
     * @uses self::VALUE_CARPHONE
     * @uses self::VALUE_COMPANYMAINPHONE
     * @uses self::VALUE_HOMEFAX
     * @uses self::VALUE_HOMEPHONE
     * @uses self::VALUE_HOMEPHONE2
     * @uses self::VALUE_ISDN
     * @uses self::VALUE_MOBILEPHONE
     * @uses self::VALUE_OTHERFAX
     * @uses self::VALUE_OTHERTELEPHONE
     * @uses self::VALUE_PAGER
     * @uses self::VALUE_PRIMARYPHONE
     * @uses self::VALUE_RADIOPHONE
     * @uses self::VALUE_TELEX
     * @uses self::VALUE_TTYTDDPHONE
     * @uses self::VALUE_BUSINESSMOBILE
     * @uses self::VALUE_IPPHONE
     * @uses self::VALUE_MMS
     * @uses self::VALUE_MSN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ASSISTANTPHONE,
            self::VALUE_BUSINESSFAX,
            self::VALUE_BUSINESSPHONE,
            self::VALUE_BUSINESSPHONE2,
            self::VALUE_CALLBACK,
            self::VALUE_CARPHONE,
            self::VALUE_COMPANYMAINPHONE,
            self::VALUE_HOMEFAX,
            self::VALUE_HOMEPHONE,
            self::VALUE_HOMEPHONE2,
            self::VALUE_ISDN,
            self::VALUE_MOBILEPHONE,
            self::VALUE_OTHERFAX,
            self::VALUE_OTHERTELEPHONE,
            self::VALUE_PAGER,
            self::VALUE_PRIMARYPHONE,
            self::VALUE_RADIOPHONE,
            self::VALUE_TELEX,
            self::VALUE_TTYTDDPHONE,
            self::VALUE_BUSINESSMOBILE,
            self::VALUE_IPPHONE,
            self::VALUE_MMS,
            self::VALUE_MSN,
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
