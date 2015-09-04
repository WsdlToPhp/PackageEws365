<?php

namespace Ews\EnumType;

/**
 * This class stands for PredictedActionReasonType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsPredictedActionReasonType
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
    const VALUE_CONVERSATIONSTARTERISYOU = 'ConversationStarterIsYou';
    /**
     * Constant for value 'OnlyRecipient'
     * @return string 'OnlyRecipient'
     */
    const VALUE_ONLYRECIPIENT = 'OnlyRecipient';
    /**
     * Constant for value 'ConversationContributions'
     * @return string 'ConversationContributions'
     */
    const VALUE_CONVERSATIONCONTRIBUTIONS = 'ConversationContributions';
    /**
     * Constant for value 'MarkedImportantBySender'
     * @return string 'MarkedImportantBySender'
     */
    const VALUE_MARKEDIMPORTANTBYSENDER = 'MarkedImportantBySender';
    /**
     * Constant for value 'SenderIsManager'
     * @return string 'SenderIsManager'
     */
    const VALUE_SENDERISMANAGER = 'SenderIsManager';
    /**
     * Constant for value 'SenderIsInManagementChain'
     * @return string 'SenderIsInManagementChain'
     */
    const VALUE_SENDERISINMANAGEMENTCHAIN = 'SenderIsInManagementChain';
    /**
     * Constant for value 'SenderIsDirectReport'
     * @return string 'SenderIsDirectReport'
     */
    const VALUE_SENDERISDIRECTREPORT = 'SenderIsDirectReport';
    /**
     * Constant for value 'ActionBasedOnSender'
     * @return string 'ActionBasedOnSender'
     */
    const VALUE_ACTIONBASEDONSENDER = 'ActionBasedOnSender';
    /**
     * Constant for value 'NameOnToLine'
     * @return string 'NameOnToLine'
     */
    const VALUE_NAMEONTOLINE = 'NameOnToLine';
    /**
     * Constant for value 'NameOnCcLine'
     * @return string 'NameOnCcLine'
     */
    const VALUE_NAMEONCCLINE = 'NameOnCcLine';
    /**
     * Constant for value 'ManagerPosition'
     * @return string 'ManagerPosition'
     */
    const VALUE_MANAGERPOSITION = 'ManagerPosition';
    /**
     * Constant for value 'ReplyToAMessageFromMe'
     * @return string 'ReplyToAMessageFromMe'
     */
    const VALUE_REPLYTOAMESSAGEFROMME = 'ReplyToAMessageFromMe';
    /**
     * Constant for value 'PreviouslyFlagged'
     * @return string 'PreviouslyFlagged'
     */
    const VALUE_PREVIOUSLYFLAGGED = 'PreviouslyFlagged';
    /**
     * Constant for value 'ActionBasedOnRecipients'
     * @return string 'ActionBasedOnRecipients'
     */
    const VALUE_ACTIONBASEDONRECIPIENTS = 'ActionBasedOnRecipients';
    /**
     * Constant for value 'ActionBasedOnSubjectWords'
     * @return string 'ActionBasedOnSubjectWords'
     */
    const VALUE_ACTIONBASEDONSUBJECTWORDS = 'ActionBasedOnSubjectWords';
    /**
     * Constant for value 'ActionBasedOnBasedOnBodyWords'
     * @return string 'ActionBasedOnBasedOnBodyWords'
     */
    const VALUE_ACTIONBASEDONBASEDONBODYWORDS = 'ActionBasedOnBasedOnBodyWords';
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
     * @uses self::VALUE_CONVERSATIONSTARTERISYOU
     * @uses self::VALUE_ONLYRECIPIENT
     * @uses self::VALUE_CONVERSATIONCONTRIBUTIONS
     * @uses self::VALUE_MARKEDIMPORTANTBYSENDER
     * @uses self::VALUE_SENDERISMANAGER
     * @uses self::VALUE_SENDERISINMANAGEMENTCHAIN
     * @uses self::VALUE_SENDERISDIRECTREPORT
     * @uses self::VALUE_ACTIONBASEDONSENDER
     * @uses self::VALUE_NAMEONTOLINE
     * @uses self::VALUE_NAMEONCCLINE
     * @uses self::VALUE_MANAGERPOSITION
     * @uses self::VALUE_REPLYTOAMESSAGEFROMME
     * @uses self::VALUE_PREVIOUSLYFLAGGED
     * @uses self::VALUE_ACTIONBASEDONRECIPIENTS
     * @uses self::VALUE_ACTIONBASEDONSUBJECTWORDS
     * @uses self::VALUE_ACTIONBASEDONBASEDONBODYWORDS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_CONVERSATIONSTARTERISYOU,
            self::VALUE_ONLYRECIPIENT,
            self::VALUE_CONVERSATIONCONTRIBUTIONS,
            self::VALUE_MARKEDIMPORTANTBYSENDER,
            self::VALUE_SENDERISMANAGER,
            self::VALUE_SENDERISINMANAGEMENTCHAIN,
            self::VALUE_SENDERISDIRECTREPORT,
            self::VALUE_ACTIONBASEDONSENDER,
            self::VALUE_NAMEONTOLINE,
            self::VALUE_NAMEONCCLINE,
            self::VALUE_MANAGERPOSITION,
            self::VALUE_REPLYTOAMESSAGEFROMME,
            self::VALUE_PREVIOUSLYFLAGGED,
            self::VALUE_ACTIONBASEDONRECIPIENTS,
            self::VALUE_ACTIONBASEDONSUBJECTWORDS,
            self::VALUE_ACTIONBASEDONBASEDONBODYWORDS,
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
