<?php

namespace Ews\EnumType;

/**
 * This class stands for InvalidRecipientResponseCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Represents the message keys that can be returned for invalid recipients
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsInvalidRecipientResponseCodeType
{
    /**
     * Constant for value 'OtherError'
     * @return string 'OtherError'
     */
    const VALUE_OTHERERROR = 'OtherError';
    /**
     * Constant for value 'RecipientOrganizationNotFederated'
     * @return string 'RecipientOrganizationNotFederated'
     */
    const VALUE_RECIPIENTORGANIZATIONNOTFEDERATED = 'RecipientOrganizationNotFederated';
    /**
     * Constant for value 'CannotObtainTokenFromSTS'
     * @return string 'CannotObtainTokenFromSTS'
     */
    const VALUE_CANNOTOBTAINTOKENFROMSTS = 'CannotObtainTokenFromSTS';
    /**
     * Constant for value 'SystemPolicyBlocksSharingWithThisRecipient'
     * @return string 'SystemPolicyBlocksSharingWithThisRecipient'
     */
    const VALUE_SYSTEMPOLICYBLOCKSSHARINGWITHTHISRECIPIENT = 'SystemPolicyBlocksSharingWithThisRecipient';
    /**
     * Constant for value 'RecipientOrganizationFederatedWithUnknownTokenIssuer'
     * @return string 'RecipientOrganizationFederatedWithUnknownTokenIssuer'
     */
    const VALUE_RECIPIENTORGANIZATIONFEDERATEDWITHUNKNOWNTOKENISSUER = 'RecipientOrganizationFederatedWithUnknownTokenIssuer';
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
     * @uses self::VALUE_OTHERERROR
     * @uses self::VALUE_RECIPIENTORGANIZATIONNOTFEDERATED
     * @uses self::VALUE_CANNOTOBTAINTOKENFROMSTS
     * @uses self::VALUE_SYSTEMPOLICYBLOCKSSHARINGWITHTHISRECIPIENT
     * @uses self::VALUE_RECIPIENTORGANIZATIONFEDERATEDWITHUNKNOWNTOKENISSUER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OTHERERROR,
            self::VALUE_RECIPIENTORGANIZATIONNOTFEDERATED,
            self::VALUE_CANNOTOBTAINTOKENFROMSTS,
            self::VALUE_SYSTEMPOLICYBLOCKSSHARINGWITHTHISRECIPIENT,
            self::VALUE_RECIPIENTORGANIZATIONFEDERATEDWITHUNKNOWNTOKENISSUER,
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
