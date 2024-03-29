<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for InvalidRecipientResponseCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Represents the message keys that can be returned for invalid recipients
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsInvalidRecipientResponseCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'OtherError'
     * @return string 'OtherError'
     */
    const VALUE_OTHER_ERROR = 'OtherError';
    /**
     * Constant for value 'RecipientOrganizationNotFederated'
     * @return string 'RecipientOrganizationNotFederated'
     */
    const VALUE_RECIPIENT_ORGANIZATION_NOT_FEDERATED = 'RecipientOrganizationNotFederated';
    /**
     * Constant for value 'CannotObtainTokenFromSTS'
     * @return string 'CannotObtainTokenFromSTS'
     */
    const VALUE_CANNOT_OBTAIN_TOKEN_FROM_STS = 'CannotObtainTokenFromSTS';
    /**
     * Constant for value 'SystemPolicyBlocksSharingWithThisRecipient'
     * @return string 'SystemPolicyBlocksSharingWithThisRecipient'
     */
    const VALUE_SYSTEM_POLICY_BLOCKS_SHARING_WITH_THIS_RECIPIENT = 'SystemPolicyBlocksSharingWithThisRecipient';
    /**
     * Constant for value 'RecipientOrganizationFederatedWithUnknownTokenIssuer'
     * @return string 'RecipientOrganizationFederatedWithUnknownTokenIssuer'
     */
    const VALUE_RECIPIENT_ORGANIZATION_FEDERATED_WITH_UNKNOWN_TOKEN_ISSUER = 'RecipientOrganizationFederatedWithUnknownTokenIssuer';
    /**
     * Return allowed values
     * @uses self::VALUE_OTHER_ERROR
     * @uses self::VALUE_RECIPIENT_ORGANIZATION_NOT_FEDERATED
     * @uses self::VALUE_CANNOT_OBTAIN_TOKEN_FROM_STS
     * @uses self::VALUE_SYSTEM_POLICY_BLOCKS_SHARING_WITH_THIS_RECIPIENT
     * @uses self::VALUE_RECIPIENT_ORGANIZATION_FEDERATED_WITH_UNKNOWN_TOKEN_ISSUER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_OTHER_ERROR,
            self::VALUE_RECIPIENT_ORGANIZATION_NOT_FEDERATED,
            self::VALUE_CANNOT_OBTAIN_TOKEN_FROM_STS,
            self::VALUE_SYSTEM_POLICY_BLOCKS_SHARING_WITH_THIS_RECIPIENT,
            self::VALUE_RECIPIENT_ORGANIZATION_FEDERATED_WITH_UNKNOWN_TOKEN_ISSUER,
        ];
    }
}
