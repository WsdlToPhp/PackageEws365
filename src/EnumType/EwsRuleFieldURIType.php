<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for RuleFieldURIType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Rule field URI enumerates all possible rule fields that could trigger validation error
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRuleFieldURIType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'RuleId'
     * @return string 'RuleId'
     */
    const VALUE_RULE_ID = 'RuleId';
    /**
     * Constant for value 'DisplayName'
     * @return string 'DisplayName'
     */
    const VALUE_DISPLAY_NAME = 'DisplayName';
    /**
     * Constant for value 'Priority'
     * @return string 'Priority'
     */
    const VALUE_PRIORITY = 'Priority';
    /**
     * Constant for value 'IsNotSupported'
     * @return string 'IsNotSupported'
     */
    const VALUE_IS_NOT_SUPPORTED = 'IsNotSupported';
    /**
     * Constant for value 'Actions'
     * @return string 'Actions'
     */
    const VALUE_ACTIONS = 'Actions';
    /**
     * Constant for value 'Condition:Categories'
     * @return string 'Condition:Categories'
     */
    const VALUE_CONDITION_CATEGORIES = 'Condition:Categories';
    /**
     * Constant for value 'Condition:ContainsBodyStrings'
     * @return string 'Condition:ContainsBodyStrings'
     */
    const VALUE_CONDITION_CONTAINS_BODY_STRINGS = 'Condition:ContainsBodyStrings';
    /**
     * Constant for value 'Condition:ContainsHeaderStrings'
     * @return string 'Condition:ContainsHeaderStrings'
     */
    const VALUE_CONDITION_CONTAINS_HEADER_STRINGS = 'Condition:ContainsHeaderStrings';
    /**
     * Constant for value 'Condition:ContainsRecipientStrings'
     * @return string 'Condition:ContainsRecipientStrings'
     */
    const VALUE_CONDITION_CONTAINS_RECIPIENT_STRINGS = 'Condition:ContainsRecipientStrings';
    /**
     * Constant for value 'Condition:ContainsSenderStrings'
     * @return string 'Condition:ContainsSenderStrings'
     */
    const VALUE_CONDITION_CONTAINS_SENDER_STRINGS = 'Condition:ContainsSenderStrings';
    /**
     * Constant for value 'Condition:ContainsSubjectOrBodyStrings'
     * @return string 'Condition:ContainsSubjectOrBodyStrings'
     */
    const VALUE_CONDITION_CONTAINS_SUBJECT_OR_BODY_STRINGS = 'Condition:ContainsSubjectOrBodyStrings';
    /**
     * Constant for value 'Condition:ContainsSubjectStrings'
     * @return string 'Condition:ContainsSubjectStrings'
     */
    const VALUE_CONDITION_CONTAINS_SUBJECT_STRINGS = 'Condition:ContainsSubjectStrings';
    /**
     * Constant for value 'Condition:FlaggedForAction'
     * @return string 'Condition:FlaggedForAction'
     */
    const VALUE_CONDITION_FLAGGED_FOR_ACTION = 'Condition:FlaggedForAction';
    /**
     * Constant for value 'Condition:FromAddresses'
     * @return string 'Condition:FromAddresses'
     */
    const VALUE_CONDITION_FROM_ADDRESSES = 'Condition:FromAddresses';
    /**
     * Constant for value 'Condition:FromConnectedAccounts'
     * @return string 'Condition:FromConnectedAccounts'
     */
    const VALUE_CONDITION_FROM_CONNECTED_ACCOUNTS = 'Condition:FromConnectedAccounts';
    /**
     * Constant for value 'Condition:HasAttachments'
     * @return string 'Condition:HasAttachments'
     */
    const VALUE_CONDITION_HAS_ATTACHMENTS = 'Condition:HasAttachments';
    /**
     * Constant for value 'Condition:Importance'
     * @return string 'Condition:Importance'
     */
    const VALUE_CONDITION_IMPORTANCE = 'Condition:Importance';
    /**
     * Constant for value 'Condition:IsApprovalRequest'
     * @return string 'Condition:IsApprovalRequest'
     */
    const VALUE_CONDITION_IS_APPROVAL_REQUEST = 'Condition:IsApprovalRequest';
    /**
     * Constant for value 'Condition:IsAutomaticForward'
     * @return string 'Condition:IsAutomaticForward'
     */
    const VALUE_CONDITION_IS_AUTOMATIC_FORWARD = 'Condition:IsAutomaticForward';
    /**
     * Constant for value 'Condition:IsAutomaticReply'
     * @return string 'Condition:IsAutomaticReply'
     */
    const VALUE_CONDITION_IS_AUTOMATIC_REPLY = 'Condition:IsAutomaticReply';
    /**
     * Constant for value 'Condition:IsEncrypted'
     * @return string 'Condition:IsEncrypted'
     */
    const VALUE_CONDITION_IS_ENCRYPTED = 'Condition:IsEncrypted';
    /**
     * Constant for value 'Condition:IsMeetingRequest'
     * @return string 'Condition:IsMeetingRequest'
     */
    const VALUE_CONDITION_IS_MEETING_REQUEST = 'Condition:IsMeetingRequest';
    /**
     * Constant for value 'Condition:IsMeetingResponse'
     * @return string 'Condition:IsMeetingResponse'
     */
    const VALUE_CONDITION_IS_MEETING_RESPONSE = 'Condition:IsMeetingResponse';
    /**
     * Constant for value 'Condition:IsNDR'
     * @return string 'Condition:IsNDR'
     */
    const VALUE_CONDITION_IS_NDR = 'Condition:IsNDR';
    /**
     * Constant for value 'Condition:IsPermissionControlled'
     * @return string 'Condition:IsPermissionControlled'
     */
    const VALUE_CONDITION_IS_PERMISSION_CONTROLLED = 'Condition:IsPermissionControlled';
    /**
     * Constant for value 'Condition:IsReadReceipt'
     * @return string 'Condition:IsReadReceipt'
     */
    const VALUE_CONDITION_IS_READ_RECEIPT = 'Condition:IsReadReceipt';
    /**
     * Constant for value 'Condition:IsSigned'
     * @return string 'Condition:IsSigned'
     */
    const VALUE_CONDITION_IS_SIGNED = 'Condition:IsSigned';
    /**
     * Constant for value 'Condition:IsVoicemail'
     * @return string 'Condition:IsVoicemail'
     */
    const VALUE_CONDITION_IS_VOICEMAIL = 'Condition:IsVoicemail';
    /**
     * Constant for value 'Condition:ItemClasses'
     * @return string 'Condition:ItemClasses'
     */
    const VALUE_CONDITION_ITEM_CLASSES = 'Condition:ItemClasses';
    /**
     * Constant for value 'Condition:MessageClassifications'
     * @return string 'Condition:MessageClassifications'
     */
    const VALUE_CONDITION_MESSAGE_CLASSIFICATIONS = 'Condition:MessageClassifications';
    /**
     * Constant for value 'Condition:NotSentToMe'
     * @return string 'Condition:NotSentToMe'
     */
    const VALUE_CONDITION_NOT_SENT_TO_ME = 'Condition:NotSentToMe';
    /**
     * Constant for value 'Condition:SentCcMe'
     * @return string 'Condition:SentCcMe'
     */
    const VALUE_CONDITION_SENT_CC_ME = 'Condition:SentCcMe';
    /**
     * Constant for value 'Condition:SentOnlyToMe'
     * @return string 'Condition:SentOnlyToMe'
     */
    const VALUE_CONDITION_SENT_ONLY_TO_ME = 'Condition:SentOnlyToMe';
    /**
     * Constant for value 'Condition:SentToAddresses'
     * @return string 'Condition:SentToAddresses'
     */
    const VALUE_CONDITION_SENT_TO_ADDRESSES = 'Condition:SentToAddresses';
    /**
     * Constant for value 'Condition:SentToMe'
     * @return string 'Condition:SentToMe'
     */
    const VALUE_CONDITION_SENT_TO_ME = 'Condition:SentToMe';
    /**
     * Constant for value 'Condition:SentToOrCcMe'
     * @return string 'Condition:SentToOrCcMe'
     */
    const VALUE_CONDITION_SENT_TO_OR_CC_ME = 'Condition:SentToOrCcMe';
    /**
     * Constant for value 'Condition:Sensitivity'
     * @return string 'Condition:Sensitivity'
     */
    const VALUE_CONDITION_SENSITIVITY = 'Condition:Sensitivity';
    /**
     * Constant for value 'Condition:WithinDateRange'
     * @return string 'Condition:WithinDateRange'
     */
    const VALUE_CONDITION_WITHIN_DATE_RANGE = 'Condition:WithinDateRange';
    /**
     * Constant for value 'Condition:WithinSizeRange'
     * @return string 'Condition:WithinSizeRange'
     */
    const VALUE_CONDITION_WITHIN_SIZE_RANGE = 'Condition:WithinSizeRange';
    /**
     * Constant for value 'Exception:Categories'
     * @return string 'Exception:Categories'
     */
    const VALUE_EXCEPTION_CATEGORIES = 'Exception:Categories';
    /**
     * Constant for value 'Exception:ContainsBodyStrings'
     * @return string 'Exception:ContainsBodyStrings'
     */
    const VALUE_EXCEPTION_CONTAINS_BODY_STRINGS = 'Exception:ContainsBodyStrings';
    /**
     * Constant for value 'Exception:ContainsHeaderStrings'
     * @return string 'Exception:ContainsHeaderStrings'
     */
    const VALUE_EXCEPTION_CONTAINS_HEADER_STRINGS = 'Exception:ContainsHeaderStrings';
    /**
     * Constant for value 'Exception:ContainsRecipientStrings'
     * @return string 'Exception:ContainsRecipientStrings'
     */
    const VALUE_EXCEPTION_CONTAINS_RECIPIENT_STRINGS = 'Exception:ContainsRecipientStrings';
    /**
     * Constant for value 'Exception:ContainsSenderStrings'
     * @return string 'Exception:ContainsSenderStrings'
     */
    const VALUE_EXCEPTION_CONTAINS_SENDER_STRINGS = 'Exception:ContainsSenderStrings';
    /**
     * Constant for value 'Exception:ContainsSubjectOrBodyStrings'
     * @return string 'Exception:ContainsSubjectOrBodyStrings'
     */
    const VALUE_EXCEPTION_CONTAINS_SUBJECT_OR_BODY_STRINGS = 'Exception:ContainsSubjectOrBodyStrings';
    /**
     * Constant for value 'Exception:ContainsSubjectStrings'
     * @return string 'Exception:ContainsSubjectStrings'
     */
    const VALUE_EXCEPTION_CONTAINS_SUBJECT_STRINGS = 'Exception:ContainsSubjectStrings';
    /**
     * Constant for value 'Exception:FlaggedForAction'
     * @return string 'Exception:FlaggedForAction'
     */
    const VALUE_EXCEPTION_FLAGGED_FOR_ACTION = 'Exception:FlaggedForAction';
    /**
     * Constant for value 'Exception:FromAddresses'
     * @return string 'Exception:FromAddresses'
     */
    const VALUE_EXCEPTION_FROM_ADDRESSES = 'Exception:FromAddresses';
    /**
     * Constant for value 'Exception:FromConnectedAccounts'
     * @return string 'Exception:FromConnectedAccounts'
     */
    const VALUE_EXCEPTION_FROM_CONNECTED_ACCOUNTS = 'Exception:FromConnectedAccounts';
    /**
     * Constant for value 'Exception:HasAttachments'
     * @return string 'Exception:HasAttachments'
     */
    const VALUE_EXCEPTION_HAS_ATTACHMENTS = 'Exception:HasAttachments';
    /**
     * Constant for value 'Exception:Importance'
     * @return string 'Exception:Importance'
     */
    const VALUE_EXCEPTION_IMPORTANCE = 'Exception:Importance';
    /**
     * Constant for value 'Exception:IsApprovalRequest'
     * @return string 'Exception:IsApprovalRequest'
     */
    const VALUE_EXCEPTION_IS_APPROVAL_REQUEST = 'Exception:IsApprovalRequest';
    /**
     * Constant for value 'Exception:IsAutomaticForward'
     * @return string 'Exception:IsAutomaticForward'
     */
    const VALUE_EXCEPTION_IS_AUTOMATIC_FORWARD = 'Exception:IsAutomaticForward';
    /**
     * Constant for value 'Exception:IsAutomaticReply'
     * @return string 'Exception:IsAutomaticReply'
     */
    const VALUE_EXCEPTION_IS_AUTOMATIC_REPLY = 'Exception:IsAutomaticReply';
    /**
     * Constant for value 'Exception:IsEncrypted'
     * @return string 'Exception:IsEncrypted'
     */
    const VALUE_EXCEPTION_IS_ENCRYPTED = 'Exception:IsEncrypted';
    /**
     * Constant for value 'Exception:IsMeetingRequest'
     * @return string 'Exception:IsMeetingRequest'
     */
    const VALUE_EXCEPTION_IS_MEETING_REQUEST = 'Exception:IsMeetingRequest';
    /**
     * Constant for value 'Exception:IsMeetingResponse'
     * @return string 'Exception:IsMeetingResponse'
     */
    const VALUE_EXCEPTION_IS_MEETING_RESPONSE = 'Exception:IsMeetingResponse';
    /**
     * Constant for value 'Exception:IsNDR'
     * @return string 'Exception:IsNDR'
     */
    const VALUE_EXCEPTION_IS_NDR = 'Exception:IsNDR';
    /**
     * Constant for value 'Exception:IsPermissionControlled'
     * @return string 'Exception:IsPermissionControlled'
     */
    const VALUE_EXCEPTION_IS_PERMISSION_CONTROLLED = 'Exception:IsPermissionControlled';
    /**
     * Constant for value 'Exception:IsReadReceipt'
     * @return string 'Exception:IsReadReceipt'
     */
    const VALUE_EXCEPTION_IS_READ_RECEIPT = 'Exception:IsReadReceipt';
    /**
     * Constant for value 'Exception:IsSigned'
     * @return string 'Exception:IsSigned'
     */
    const VALUE_EXCEPTION_IS_SIGNED = 'Exception:IsSigned';
    /**
     * Constant for value 'Exception:IsVoicemail'
     * @return string 'Exception:IsVoicemail'
     */
    const VALUE_EXCEPTION_IS_VOICEMAIL = 'Exception:IsVoicemail';
    /**
     * Constant for value 'Exception:ItemClasses'
     * @return string 'Exception:ItemClasses'
     */
    const VALUE_EXCEPTION_ITEM_CLASSES = 'Exception:ItemClasses';
    /**
     * Constant for value 'Exception:MessageClassifications'
     * @return string 'Exception:MessageClassifications'
     */
    const VALUE_EXCEPTION_MESSAGE_CLASSIFICATIONS = 'Exception:MessageClassifications';
    /**
     * Constant for value 'Exception:NotSentToMe'
     * @return string 'Exception:NotSentToMe'
     */
    const VALUE_EXCEPTION_NOT_SENT_TO_ME = 'Exception:NotSentToMe';
    /**
     * Constant for value 'Exception:SentCcMe'
     * @return string 'Exception:SentCcMe'
     */
    const VALUE_EXCEPTION_SENT_CC_ME = 'Exception:SentCcMe';
    /**
     * Constant for value 'Exception:SentOnlyToMe'
     * @return string 'Exception:SentOnlyToMe'
     */
    const VALUE_EXCEPTION_SENT_ONLY_TO_ME = 'Exception:SentOnlyToMe';
    /**
     * Constant for value 'Exception:SentToAddresses'
     * @return string 'Exception:SentToAddresses'
     */
    const VALUE_EXCEPTION_SENT_TO_ADDRESSES = 'Exception:SentToAddresses';
    /**
     * Constant for value 'Exception:SentToMe'
     * @return string 'Exception:SentToMe'
     */
    const VALUE_EXCEPTION_SENT_TO_ME = 'Exception:SentToMe';
    /**
     * Constant for value 'Exception:SentToOrCcMe'
     * @return string 'Exception:SentToOrCcMe'
     */
    const VALUE_EXCEPTION_SENT_TO_OR_CC_ME = 'Exception:SentToOrCcMe';
    /**
     * Constant for value 'Exception:Sensitivity'
     * @return string 'Exception:Sensitivity'
     */
    const VALUE_EXCEPTION_SENSITIVITY = 'Exception:Sensitivity';
    /**
     * Constant for value 'Exception:WithinDateRange'
     * @return string 'Exception:WithinDateRange'
     */
    const VALUE_EXCEPTION_WITHIN_DATE_RANGE = 'Exception:WithinDateRange';
    /**
     * Constant for value 'Exception:WithinSizeRange'
     * @return string 'Exception:WithinSizeRange'
     */
    const VALUE_EXCEPTION_WITHIN_SIZE_RANGE = 'Exception:WithinSizeRange';
    /**
     * Constant for value 'Action:AssignCategories'
     * @return string 'Action:AssignCategories'
     */
    const VALUE_ACTION_ASSIGN_CATEGORIES = 'Action:AssignCategories';
    /**
     * Constant for value 'Action:CopyToFolder'
     * @return string 'Action:CopyToFolder'
     */
    const VALUE_ACTION_COPY_TO_FOLDER = 'Action:CopyToFolder';
    /**
     * Constant for value 'Action:Delete'
     * @return string 'Action:Delete'
     */
    const VALUE_ACTION_DELETE = 'Action:Delete';
    /**
     * Constant for value 'Action:ForwardAsAttachmentToRecipients'
     * @return string 'Action:ForwardAsAttachmentToRecipients'
     */
    const VALUE_ACTION_FORWARD_AS_ATTACHMENT_TO_RECIPIENTS = 'Action:ForwardAsAttachmentToRecipients';
    /**
     * Constant for value 'Action:ForwardToRecipients'
     * @return string 'Action:ForwardToRecipients'
     */
    const VALUE_ACTION_FORWARD_TO_RECIPIENTS = 'Action:ForwardToRecipients';
    /**
     * Constant for value 'Action:MarkImportance'
     * @return string 'Action:MarkImportance'
     */
    const VALUE_ACTION_MARK_IMPORTANCE = 'Action:MarkImportance';
    /**
     * Constant for value 'Action:MarkAsRead'
     * @return string 'Action:MarkAsRead'
     */
    const VALUE_ACTION_MARK_AS_READ = 'Action:MarkAsRead';
    /**
     * Constant for value 'Action:MoveToFolder'
     * @return string 'Action:MoveToFolder'
     */
    const VALUE_ACTION_MOVE_TO_FOLDER = 'Action:MoveToFolder';
    /**
     * Constant for value 'Action:PermanentDelete'
     * @return string 'Action:PermanentDelete'
     */
    const VALUE_ACTION_PERMANENT_DELETE = 'Action:PermanentDelete';
    /**
     * Constant for value 'Action:RedirectToRecipients'
     * @return string 'Action:RedirectToRecipients'
     */
    const VALUE_ACTION_REDIRECT_TO_RECIPIENTS = 'Action:RedirectToRecipients';
    /**
     * Constant for value 'Action:SendSMSAlertToRecipients'
     * @return string 'Action:SendSMSAlertToRecipients'
     */
    const VALUE_ACTION_SEND_SMSALERT_TO_RECIPIENTS = 'Action:SendSMSAlertToRecipients';
    /**
     * Constant for value 'Action:ServerReplyWithMessage'
     * @return string 'Action:ServerReplyWithMessage'
     */
    const VALUE_ACTION_SERVER_REPLY_WITH_MESSAGE = 'Action:ServerReplyWithMessage';
    /**
     * Constant for value 'Action:StopProcessingRules'
     * @return string 'Action:StopProcessingRules'
     */
    const VALUE_ACTION_STOP_PROCESSING_RULES = 'Action:StopProcessingRules';
    /**
     * Constant for value 'IsEnabled'
     * @return string 'IsEnabled'
     */
    const VALUE_IS_ENABLED = 'IsEnabled';
    /**
     * Constant for value 'IsInError'
     * @return string 'IsInError'
     */
    const VALUE_IS_IN_ERROR = 'IsInError';
    /**
     * Constant for value 'Conditions'
     * @return string 'Conditions'
     */
    const VALUE_CONDITIONS = 'Conditions';
    /**
     * Constant for value 'Exceptions'
     * @return string 'Exceptions'
     */
    const VALUE_EXCEPTIONS = 'Exceptions';
    /**
     * Return allowed values
     * @uses self::VALUE_RULE_ID
     * @uses self::VALUE_DISPLAY_NAME
     * @uses self::VALUE_PRIORITY
     * @uses self::VALUE_IS_NOT_SUPPORTED
     * @uses self::VALUE_ACTIONS
     * @uses self::VALUE_CONDITION_CATEGORIES
     * @uses self::VALUE_CONDITION_CONTAINS_BODY_STRINGS
     * @uses self::VALUE_CONDITION_CONTAINS_HEADER_STRINGS
     * @uses self::VALUE_CONDITION_CONTAINS_RECIPIENT_STRINGS
     * @uses self::VALUE_CONDITION_CONTAINS_SENDER_STRINGS
     * @uses self::VALUE_CONDITION_CONTAINS_SUBJECT_OR_BODY_STRINGS
     * @uses self::VALUE_CONDITION_CONTAINS_SUBJECT_STRINGS
     * @uses self::VALUE_CONDITION_FLAGGED_FOR_ACTION
     * @uses self::VALUE_CONDITION_FROM_ADDRESSES
     * @uses self::VALUE_CONDITION_FROM_CONNECTED_ACCOUNTS
     * @uses self::VALUE_CONDITION_HAS_ATTACHMENTS
     * @uses self::VALUE_CONDITION_IMPORTANCE
     * @uses self::VALUE_CONDITION_IS_APPROVAL_REQUEST
     * @uses self::VALUE_CONDITION_IS_AUTOMATIC_FORWARD
     * @uses self::VALUE_CONDITION_IS_AUTOMATIC_REPLY
     * @uses self::VALUE_CONDITION_IS_ENCRYPTED
     * @uses self::VALUE_CONDITION_IS_MEETING_REQUEST
     * @uses self::VALUE_CONDITION_IS_MEETING_RESPONSE
     * @uses self::VALUE_CONDITION_IS_NDR
     * @uses self::VALUE_CONDITION_IS_PERMISSION_CONTROLLED
     * @uses self::VALUE_CONDITION_IS_READ_RECEIPT
     * @uses self::VALUE_CONDITION_IS_SIGNED
     * @uses self::VALUE_CONDITION_IS_VOICEMAIL
     * @uses self::VALUE_CONDITION_ITEM_CLASSES
     * @uses self::VALUE_CONDITION_MESSAGE_CLASSIFICATIONS
     * @uses self::VALUE_CONDITION_NOT_SENT_TO_ME
     * @uses self::VALUE_CONDITION_SENT_CC_ME
     * @uses self::VALUE_CONDITION_SENT_ONLY_TO_ME
     * @uses self::VALUE_CONDITION_SENT_TO_ADDRESSES
     * @uses self::VALUE_CONDITION_SENT_TO_ME
     * @uses self::VALUE_CONDITION_SENT_TO_OR_CC_ME
     * @uses self::VALUE_CONDITION_SENSITIVITY
     * @uses self::VALUE_CONDITION_WITHIN_DATE_RANGE
     * @uses self::VALUE_CONDITION_WITHIN_SIZE_RANGE
     * @uses self::VALUE_EXCEPTION_CATEGORIES
     * @uses self::VALUE_EXCEPTION_CONTAINS_BODY_STRINGS
     * @uses self::VALUE_EXCEPTION_CONTAINS_HEADER_STRINGS
     * @uses self::VALUE_EXCEPTION_CONTAINS_RECIPIENT_STRINGS
     * @uses self::VALUE_EXCEPTION_CONTAINS_SENDER_STRINGS
     * @uses self::VALUE_EXCEPTION_CONTAINS_SUBJECT_OR_BODY_STRINGS
     * @uses self::VALUE_EXCEPTION_CONTAINS_SUBJECT_STRINGS
     * @uses self::VALUE_EXCEPTION_FLAGGED_FOR_ACTION
     * @uses self::VALUE_EXCEPTION_FROM_ADDRESSES
     * @uses self::VALUE_EXCEPTION_FROM_CONNECTED_ACCOUNTS
     * @uses self::VALUE_EXCEPTION_HAS_ATTACHMENTS
     * @uses self::VALUE_EXCEPTION_IMPORTANCE
     * @uses self::VALUE_EXCEPTION_IS_APPROVAL_REQUEST
     * @uses self::VALUE_EXCEPTION_IS_AUTOMATIC_FORWARD
     * @uses self::VALUE_EXCEPTION_IS_AUTOMATIC_REPLY
     * @uses self::VALUE_EXCEPTION_IS_ENCRYPTED
     * @uses self::VALUE_EXCEPTION_IS_MEETING_REQUEST
     * @uses self::VALUE_EXCEPTION_IS_MEETING_RESPONSE
     * @uses self::VALUE_EXCEPTION_IS_NDR
     * @uses self::VALUE_EXCEPTION_IS_PERMISSION_CONTROLLED
     * @uses self::VALUE_EXCEPTION_IS_READ_RECEIPT
     * @uses self::VALUE_EXCEPTION_IS_SIGNED
     * @uses self::VALUE_EXCEPTION_IS_VOICEMAIL
     * @uses self::VALUE_EXCEPTION_ITEM_CLASSES
     * @uses self::VALUE_EXCEPTION_MESSAGE_CLASSIFICATIONS
     * @uses self::VALUE_EXCEPTION_NOT_SENT_TO_ME
     * @uses self::VALUE_EXCEPTION_SENT_CC_ME
     * @uses self::VALUE_EXCEPTION_SENT_ONLY_TO_ME
     * @uses self::VALUE_EXCEPTION_SENT_TO_ADDRESSES
     * @uses self::VALUE_EXCEPTION_SENT_TO_ME
     * @uses self::VALUE_EXCEPTION_SENT_TO_OR_CC_ME
     * @uses self::VALUE_EXCEPTION_SENSITIVITY
     * @uses self::VALUE_EXCEPTION_WITHIN_DATE_RANGE
     * @uses self::VALUE_EXCEPTION_WITHIN_SIZE_RANGE
     * @uses self::VALUE_ACTION_ASSIGN_CATEGORIES
     * @uses self::VALUE_ACTION_COPY_TO_FOLDER
     * @uses self::VALUE_ACTION_DELETE
     * @uses self::VALUE_ACTION_FORWARD_AS_ATTACHMENT_TO_RECIPIENTS
     * @uses self::VALUE_ACTION_FORWARD_TO_RECIPIENTS
     * @uses self::VALUE_ACTION_MARK_IMPORTANCE
     * @uses self::VALUE_ACTION_MARK_AS_READ
     * @uses self::VALUE_ACTION_MOVE_TO_FOLDER
     * @uses self::VALUE_ACTION_PERMANENT_DELETE
     * @uses self::VALUE_ACTION_REDIRECT_TO_RECIPIENTS
     * @uses self::VALUE_ACTION_SEND_SMSALERT_TO_RECIPIENTS
     * @uses self::VALUE_ACTION_SERVER_REPLY_WITH_MESSAGE
     * @uses self::VALUE_ACTION_STOP_PROCESSING_RULES
     * @uses self::VALUE_IS_ENABLED
     * @uses self::VALUE_IS_IN_ERROR
     * @uses self::VALUE_CONDITIONS
     * @uses self::VALUE_EXCEPTIONS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_RULE_ID,
            self::VALUE_DISPLAY_NAME,
            self::VALUE_PRIORITY,
            self::VALUE_IS_NOT_SUPPORTED,
            self::VALUE_ACTIONS,
            self::VALUE_CONDITION_CATEGORIES,
            self::VALUE_CONDITION_CONTAINS_BODY_STRINGS,
            self::VALUE_CONDITION_CONTAINS_HEADER_STRINGS,
            self::VALUE_CONDITION_CONTAINS_RECIPIENT_STRINGS,
            self::VALUE_CONDITION_CONTAINS_SENDER_STRINGS,
            self::VALUE_CONDITION_CONTAINS_SUBJECT_OR_BODY_STRINGS,
            self::VALUE_CONDITION_CONTAINS_SUBJECT_STRINGS,
            self::VALUE_CONDITION_FLAGGED_FOR_ACTION,
            self::VALUE_CONDITION_FROM_ADDRESSES,
            self::VALUE_CONDITION_FROM_CONNECTED_ACCOUNTS,
            self::VALUE_CONDITION_HAS_ATTACHMENTS,
            self::VALUE_CONDITION_IMPORTANCE,
            self::VALUE_CONDITION_IS_APPROVAL_REQUEST,
            self::VALUE_CONDITION_IS_AUTOMATIC_FORWARD,
            self::VALUE_CONDITION_IS_AUTOMATIC_REPLY,
            self::VALUE_CONDITION_IS_ENCRYPTED,
            self::VALUE_CONDITION_IS_MEETING_REQUEST,
            self::VALUE_CONDITION_IS_MEETING_RESPONSE,
            self::VALUE_CONDITION_IS_NDR,
            self::VALUE_CONDITION_IS_PERMISSION_CONTROLLED,
            self::VALUE_CONDITION_IS_READ_RECEIPT,
            self::VALUE_CONDITION_IS_SIGNED,
            self::VALUE_CONDITION_IS_VOICEMAIL,
            self::VALUE_CONDITION_ITEM_CLASSES,
            self::VALUE_CONDITION_MESSAGE_CLASSIFICATIONS,
            self::VALUE_CONDITION_NOT_SENT_TO_ME,
            self::VALUE_CONDITION_SENT_CC_ME,
            self::VALUE_CONDITION_SENT_ONLY_TO_ME,
            self::VALUE_CONDITION_SENT_TO_ADDRESSES,
            self::VALUE_CONDITION_SENT_TO_ME,
            self::VALUE_CONDITION_SENT_TO_OR_CC_ME,
            self::VALUE_CONDITION_SENSITIVITY,
            self::VALUE_CONDITION_WITHIN_DATE_RANGE,
            self::VALUE_CONDITION_WITHIN_SIZE_RANGE,
            self::VALUE_EXCEPTION_CATEGORIES,
            self::VALUE_EXCEPTION_CONTAINS_BODY_STRINGS,
            self::VALUE_EXCEPTION_CONTAINS_HEADER_STRINGS,
            self::VALUE_EXCEPTION_CONTAINS_RECIPIENT_STRINGS,
            self::VALUE_EXCEPTION_CONTAINS_SENDER_STRINGS,
            self::VALUE_EXCEPTION_CONTAINS_SUBJECT_OR_BODY_STRINGS,
            self::VALUE_EXCEPTION_CONTAINS_SUBJECT_STRINGS,
            self::VALUE_EXCEPTION_FLAGGED_FOR_ACTION,
            self::VALUE_EXCEPTION_FROM_ADDRESSES,
            self::VALUE_EXCEPTION_FROM_CONNECTED_ACCOUNTS,
            self::VALUE_EXCEPTION_HAS_ATTACHMENTS,
            self::VALUE_EXCEPTION_IMPORTANCE,
            self::VALUE_EXCEPTION_IS_APPROVAL_REQUEST,
            self::VALUE_EXCEPTION_IS_AUTOMATIC_FORWARD,
            self::VALUE_EXCEPTION_IS_AUTOMATIC_REPLY,
            self::VALUE_EXCEPTION_IS_ENCRYPTED,
            self::VALUE_EXCEPTION_IS_MEETING_REQUEST,
            self::VALUE_EXCEPTION_IS_MEETING_RESPONSE,
            self::VALUE_EXCEPTION_IS_NDR,
            self::VALUE_EXCEPTION_IS_PERMISSION_CONTROLLED,
            self::VALUE_EXCEPTION_IS_READ_RECEIPT,
            self::VALUE_EXCEPTION_IS_SIGNED,
            self::VALUE_EXCEPTION_IS_VOICEMAIL,
            self::VALUE_EXCEPTION_ITEM_CLASSES,
            self::VALUE_EXCEPTION_MESSAGE_CLASSIFICATIONS,
            self::VALUE_EXCEPTION_NOT_SENT_TO_ME,
            self::VALUE_EXCEPTION_SENT_CC_ME,
            self::VALUE_EXCEPTION_SENT_ONLY_TO_ME,
            self::VALUE_EXCEPTION_SENT_TO_ADDRESSES,
            self::VALUE_EXCEPTION_SENT_TO_ME,
            self::VALUE_EXCEPTION_SENT_TO_OR_CC_ME,
            self::VALUE_EXCEPTION_SENSITIVITY,
            self::VALUE_EXCEPTION_WITHIN_DATE_RANGE,
            self::VALUE_EXCEPTION_WITHIN_SIZE_RANGE,
            self::VALUE_ACTION_ASSIGN_CATEGORIES,
            self::VALUE_ACTION_COPY_TO_FOLDER,
            self::VALUE_ACTION_DELETE,
            self::VALUE_ACTION_FORWARD_AS_ATTACHMENT_TO_RECIPIENTS,
            self::VALUE_ACTION_FORWARD_TO_RECIPIENTS,
            self::VALUE_ACTION_MARK_IMPORTANCE,
            self::VALUE_ACTION_MARK_AS_READ,
            self::VALUE_ACTION_MOVE_TO_FOLDER,
            self::VALUE_ACTION_PERMANENT_DELETE,
            self::VALUE_ACTION_REDIRECT_TO_RECIPIENTS,
            self::VALUE_ACTION_SEND_SMSALERT_TO_RECIPIENTS,
            self::VALUE_ACTION_SERVER_REPLY_WITH_MESSAGE,
            self::VALUE_ACTION_STOP_PROCESSING_RULES,
            self::VALUE_IS_ENABLED,
            self::VALUE_IS_IN_ERROR,
            self::VALUE_CONDITIONS,
            self::VALUE_EXCEPTIONS,
        ];
    }
}
