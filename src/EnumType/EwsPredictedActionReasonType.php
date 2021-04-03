<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PredictedActionReasonType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPredictedActionReasonType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'ConversationStarterIsYou'
     * @return string 'ConversationStarterIsYou'
     */
    const VALUE_CONVERSATION_STARTER_IS_YOU = 'ConversationStarterIsYou';
    /**
     * Constant for value 'OnlyRecipient'
     * @return string 'OnlyRecipient'
     */
    const VALUE_ONLY_RECIPIENT = 'OnlyRecipient';
    /**
     * Constant for value 'ConversationContributions'
     * @return string 'ConversationContributions'
     */
    const VALUE_CONVERSATION_CONTRIBUTIONS = 'ConversationContributions';
    /**
     * Constant for value 'MarkedImportantBySender'
     * @return string 'MarkedImportantBySender'
     */
    const VALUE_MARKED_IMPORTANT_BY_SENDER = 'MarkedImportantBySender';
    /**
     * Constant for value 'SenderIsManager'
     * @return string 'SenderIsManager'
     */
    const VALUE_SENDER_IS_MANAGER = 'SenderIsManager';
    /**
     * Constant for value 'SenderIsInManagementChain'
     * @return string 'SenderIsInManagementChain'
     */
    const VALUE_SENDER_IS_IN_MANAGEMENT_CHAIN = 'SenderIsInManagementChain';
    /**
     * Constant for value 'SenderIsDirectReport'
     * @return string 'SenderIsDirectReport'
     */
    const VALUE_SENDER_IS_DIRECT_REPORT = 'SenderIsDirectReport';
    /**
     * Constant for value 'ActionBasedOnSender'
     * @return string 'ActionBasedOnSender'
     */
    const VALUE_ACTION_BASED_ON_SENDER = 'ActionBasedOnSender';
    /**
     * Constant for value 'NameOnToLine'
     * @return string 'NameOnToLine'
     */
    const VALUE_NAME_ON_TO_LINE = 'NameOnToLine';
    /**
     * Constant for value 'NameOnCcLine'
     * @return string 'NameOnCcLine'
     */
    const VALUE_NAME_ON_CC_LINE = 'NameOnCcLine';
    /**
     * Constant for value 'ManagerPosition'
     * @return string 'ManagerPosition'
     */
    const VALUE_MANAGER_POSITION = 'ManagerPosition';
    /**
     * Constant for value 'ReplyToAMessageFromMe'
     * @return string 'ReplyToAMessageFromMe'
     */
    const VALUE_REPLY_TO_AMESSAGE_FROM_ME = 'ReplyToAMessageFromMe';
    /**
     * Constant for value 'PreviouslyFlagged'
     * @return string 'PreviouslyFlagged'
     */
    const VALUE_PREVIOUSLY_FLAGGED = 'PreviouslyFlagged';
    /**
     * Constant for value 'ActionBasedOnRecipients'
     * @return string 'ActionBasedOnRecipients'
     */
    const VALUE_ACTION_BASED_ON_RECIPIENTS = 'ActionBasedOnRecipients';
    /**
     * Constant for value 'ActionBasedOnSubjectWords'
     * @return string 'ActionBasedOnSubjectWords'
     */
    const VALUE_ACTION_BASED_ON_SUBJECT_WORDS = 'ActionBasedOnSubjectWords';
    /**
     * Constant for value 'ActionBasedOnBasedOnBodyWords'
     * @return string 'ActionBasedOnBasedOnBodyWords'
     */
    const VALUE_ACTION_BASED_ON_BASED_ON_BODY_WORDS = 'ActionBasedOnBasedOnBodyWords';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_CONVERSATION_STARTER_IS_YOU
     * @uses self::VALUE_ONLY_RECIPIENT
     * @uses self::VALUE_CONVERSATION_CONTRIBUTIONS
     * @uses self::VALUE_MARKED_IMPORTANT_BY_SENDER
     * @uses self::VALUE_SENDER_IS_MANAGER
     * @uses self::VALUE_SENDER_IS_IN_MANAGEMENT_CHAIN
     * @uses self::VALUE_SENDER_IS_DIRECT_REPORT
     * @uses self::VALUE_ACTION_BASED_ON_SENDER
     * @uses self::VALUE_NAME_ON_TO_LINE
     * @uses self::VALUE_NAME_ON_CC_LINE
     * @uses self::VALUE_MANAGER_POSITION
     * @uses self::VALUE_REPLY_TO_AMESSAGE_FROM_ME
     * @uses self::VALUE_PREVIOUSLY_FLAGGED
     * @uses self::VALUE_ACTION_BASED_ON_RECIPIENTS
     * @uses self::VALUE_ACTION_BASED_ON_SUBJECT_WORDS
     * @uses self::VALUE_ACTION_BASED_ON_BASED_ON_BODY_WORDS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_CONVERSATION_STARTER_IS_YOU,
            self::VALUE_ONLY_RECIPIENT,
            self::VALUE_CONVERSATION_CONTRIBUTIONS,
            self::VALUE_MARKED_IMPORTANT_BY_SENDER,
            self::VALUE_SENDER_IS_MANAGER,
            self::VALUE_SENDER_IS_IN_MANAGEMENT_CHAIN,
            self::VALUE_SENDER_IS_DIRECT_REPORT,
            self::VALUE_ACTION_BASED_ON_SENDER,
            self::VALUE_NAME_ON_TO_LINE,
            self::VALUE_NAME_ON_CC_LINE,
            self::VALUE_MANAGER_POSITION,
            self::VALUE_REPLY_TO_AMESSAGE_FROM_ME,
            self::VALUE_PREVIOUSLY_FLAGGED,
            self::VALUE_ACTION_BASED_ON_RECIPIENTS,
            self::VALUE_ACTION_BASED_ON_SUBJECT_WORDS,
            self::VALUE_ACTION_BASED_ON_BASED_ON_BODY_WORDS,
        ];
    }
}
