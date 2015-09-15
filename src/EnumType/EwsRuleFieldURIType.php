<?php

namespace Ews\EnumType;

/**
 * This class stands for RuleFieldURIType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Rule field URI enumerates all possible rule fields that could trigger validation error
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRuleFieldURIType
{
    /**
     * Constant for value 'RuleId'
     * @return string 'RuleId'
     */
    const VALUE_RULEID = 'RuleId';
    /**
     * Constant for value 'DisplayName'
     * @return string 'DisplayName'
     */
    const VALUE_DISPLAYNAME = 'DisplayName';
    /**
     * Constant for value 'Priority'
     * @return string 'Priority'
     */
    const VALUE_PRIORITY = 'Priority';
    /**
     * Constant for value 'IsNotSupported'
     * @return string 'IsNotSupported'
     */
    const VALUE_ISNOTSUPPORTED = 'IsNotSupported';
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
    const VALUE_CONDITION_CONTAINSBODYSTRINGS = 'Condition:ContainsBodyStrings';
    /**
     * Constant for value 'Condition:ContainsHeaderStrings'
     * @return string 'Condition:ContainsHeaderStrings'
     */
    const VALUE_CONDITION_CONTAINSHEADERSTRINGS = 'Condition:ContainsHeaderStrings';
    /**
     * Constant for value 'Condition:ContainsRecipientStrings'
     * @return string 'Condition:ContainsRecipientStrings'
     */
    const VALUE_CONDITION_CONTAINSRECIPIENTSTRINGS = 'Condition:ContainsRecipientStrings';
    /**
     * Constant for value 'Condition:ContainsSenderStrings'
     * @return string 'Condition:ContainsSenderStrings'
     */
    const VALUE_CONDITION_CONTAINSSENDERSTRINGS = 'Condition:ContainsSenderStrings';
    /**
     * Constant for value 'Condition:ContainsSubjectOrBodyStrings'
     * @return string 'Condition:ContainsSubjectOrBodyStrings'
     */
    const VALUE_CONDITION_CONTAINSSUBJECTORBODYSTRINGS = 'Condition:ContainsSubjectOrBodyStrings';
    /**
     * Constant for value 'Condition:ContainsSubjectStrings'
     * @return string 'Condition:ContainsSubjectStrings'
     */
    const VALUE_CONDITION_CONTAINSSUBJECTSTRINGS = 'Condition:ContainsSubjectStrings';
    /**
     * Constant for value 'Condition:FlaggedForAction'
     * @return string 'Condition:FlaggedForAction'
     */
    const VALUE_CONDITION_FLAGGEDFORACTION = 'Condition:FlaggedForAction';
    /**
     * Constant for value 'Condition:FromAddresses'
     * @return string 'Condition:FromAddresses'
     */
    const VALUE_CONDITION_FROMADDRESSES = 'Condition:FromAddresses';
    /**
     * Constant for value 'Condition:FromConnectedAccounts'
     * @return string 'Condition:FromConnectedAccounts'
     */
    const VALUE_CONDITION_FROMCONNECTEDACCOUNTS = 'Condition:FromConnectedAccounts';
    /**
     * Constant for value 'Condition:HasAttachments'
     * @return string 'Condition:HasAttachments'
     */
    const VALUE_CONDITION_HASATTACHMENTS = 'Condition:HasAttachments';
    /**
     * Constant for value 'Condition:Importance'
     * @return string 'Condition:Importance'
     */
    const VALUE_CONDITION_IMPORTANCE = 'Condition:Importance';
    /**
     * Constant for value 'Condition:IsApprovalRequest'
     * @return string 'Condition:IsApprovalRequest'
     */
    const VALUE_CONDITION_ISAPPROVALREQUEST = 'Condition:IsApprovalRequest';
    /**
     * Constant for value 'Condition:IsAutomaticForward'
     * @return string 'Condition:IsAutomaticForward'
     */
    const VALUE_CONDITION_ISAUTOMATICFORWARD = 'Condition:IsAutomaticForward';
    /**
     * Constant for value 'Condition:IsAutomaticReply'
     * @return string 'Condition:IsAutomaticReply'
     */
    const VALUE_CONDITION_ISAUTOMATICREPLY = 'Condition:IsAutomaticReply';
    /**
     * Constant for value 'Condition:IsEncrypted'
     * @return string 'Condition:IsEncrypted'
     */
    const VALUE_CONDITION_ISENCRYPTED = 'Condition:IsEncrypted';
    /**
     * Constant for value 'Condition:IsMeetingRequest'
     * @return string 'Condition:IsMeetingRequest'
     */
    const VALUE_CONDITION_ISMEETINGREQUEST = 'Condition:IsMeetingRequest';
    /**
     * Constant for value 'Condition:IsMeetingResponse'
     * @return string 'Condition:IsMeetingResponse'
     */
    const VALUE_CONDITION_ISMEETINGRESPONSE = 'Condition:IsMeetingResponse';
    /**
     * Constant for value 'Condition:IsNDR'
     * @return string 'Condition:IsNDR'
     */
    const VALUE_CONDITION_ISNDR = 'Condition:IsNDR';
    /**
     * Constant for value 'Condition:IsPermissionControlled'
     * @return string 'Condition:IsPermissionControlled'
     */
    const VALUE_CONDITION_ISPERMISSIONCONTROLLED = 'Condition:IsPermissionControlled';
    /**
     * Constant for value 'Condition:IsReadReceipt'
     * @return string 'Condition:IsReadReceipt'
     */
    const VALUE_CONDITION_ISREADRECEIPT = 'Condition:IsReadReceipt';
    /**
     * Constant for value 'Condition:IsSigned'
     * @return string 'Condition:IsSigned'
     */
    const VALUE_CONDITION_ISSIGNED = 'Condition:IsSigned';
    /**
     * Constant for value 'Condition:IsVoicemail'
     * @return string 'Condition:IsVoicemail'
     */
    const VALUE_CONDITION_ISVOICEMAIL = 'Condition:IsVoicemail';
    /**
     * Constant for value 'Condition:ItemClasses'
     * @return string 'Condition:ItemClasses'
     */
    const VALUE_CONDITION_ITEMCLASSES = 'Condition:ItemClasses';
    /**
     * Constant for value 'Condition:MessageClassifications'
     * @return string 'Condition:MessageClassifications'
     */
    const VALUE_CONDITION_MESSAGECLASSIFICATIONS = 'Condition:MessageClassifications';
    /**
     * Constant for value 'Condition:NotSentToMe'
     * @return string 'Condition:NotSentToMe'
     */
    const VALUE_CONDITION_NOTSENTTOME = 'Condition:NotSentToMe';
    /**
     * Constant for value 'Condition:SentCcMe'
     * @return string 'Condition:SentCcMe'
     */
    const VALUE_CONDITION_SENTCCME = 'Condition:SentCcMe';
    /**
     * Constant for value 'Condition:SentOnlyToMe'
     * @return string 'Condition:SentOnlyToMe'
     */
    const VALUE_CONDITION_SENTONLYTOME = 'Condition:SentOnlyToMe';
    /**
     * Constant for value 'Condition:SentToAddresses'
     * @return string 'Condition:SentToAddresses'
     */
    const VALUE_CONDITION_SENTTOADDRESSES = 'Condition:SentToAddresses';
    /**
     * Constant for value 'Condition:SentToMe'
     * @return string 'Condition:SentToMe'
     */
    const VALUE_CONDITION_SENTTOME = 'Condition:SentToMe';
    /**
     * Constant for value 'Condition:SentToOrCcMe'
     * @return string 'Condition:SentToOrCcMe'
     */
    const VALUE_CONDITION_SENTTOORCCME = 'Condition:SentToOrCcMe';
    /**
     * Constant for value 'Condition:Sensitivity'
     * @return string 'Condition:Sensitivity'
     */
    const VALUE_CONDITION_SENSITIVITY = 'Condition:Sensitivity';
    /**
     * Constant for value 'Condition:WithinDateRange'
     * @return string 'Condition:WithinDateRange'
     */
    const VALUE_CONDITION_WITHINDATERANGE = 'Condition:WithinDateRange';
    /**
     * Constant for value 'Condition:WithinSizeRange'
     * @return string 'Condition:WithinSizeRange'
     */
    const VALUE_CONDITION_WITHINSIZERANGE = 'Condition:WithinSizeRange';
    /**
     * Constant for value 'Exception:Categories'
     * @return string 'Exception:Categories'
     */
    const VALUE_EXCEPTION_CATEGORIES = 'Exception:Categories';
    /**
     * Constant for value 'Exception:ContainsBodyStrings'
     * @return string 'Exception:ContainsBodyStrings'
     */
    const VALUE_EXCEPTION_CONTAINSBODYSTRINGS = 'Exception:ContainsBodyStrings';
    /**
     * Constant for value 'Exception:ContainsHeaderStrings'
     * @return string 'Exception:ContainsHeaderStrings'
     */
    const VALUE_EXCEPTION_CONTAINSHEADERSTRINGS = 'Exception:ContainsHeaderStrings';
    /**
     * Constant for value 'Exception:ContainsRecipientStrings'
     * @return string 'Exception:ContainsRecipientStrings'
     */
    const VALUE_EXCEPTION_CONTAINSRECIPIENTSTRINGS = 'Exception:ContainsRecipientStrings';
    /**
     * Constant for value 'Exception:ContainsSenderStrings'
     * @return string 'Exception:ContainsSenderStrings'
     */
    const VALUE_EXCEPTION_CONTAINSSENDERSTRINGS = 'Exception:ContainsSenderStrings';
    /**
     * Constant for value 'Exception:ContainsSubjectOrBodyStrings'
     * @return string 'Exception:ContainsSubjectOrBodyStrings'
     */
    const VALUE_EXCEPTION_CONTAINSSUBJECTORBODYSTRINGS = 'Exception:ContainsSubjectOrBodyStrings';
    /**
     * Constant for value 'Exception:ContainsSubjectStrings'
     * @return string 'Exception:ContainsSubjectStrings'
     */
    const VALUE_EXCEPTION_CONTAINSSUBJECTSTRINGS = 'Exception:ContainsSubjectStrings';
    /**
     * Constant for value 'Exception:FlaggedForAction'
     * @return string 'Exception:FlaggedForAction'
     */
    const VALUE_EXCEPTION_FLAGGEDFORACTION = 'Exception:FlaggedForAction';
    /**
     * Constant for value 'Exception:FromAddresses'
     * @return string 'Exception:FromAddresses'
     */
    const VALUE_EXCEPTION_FROMADDRESSES = 'Exception:FromAddresses';
    /**
     * Constant for value 'Exception:FromConnectedAccounts'
     * @return string 'Exception:FromConnectedAccounts'
     */
    const VALUE_EXCEPTION_FROMCONNECTEDACCOUNTS = 'Exception:FromConnectedAccounts';
    /**
     * Constant for value 'Exception:HasAttachments'
     * @return string 'Exception:HasAttachments'
     */
    const VALUE_EXCEPTION_HASATTACHMENTS = 'Exception:HasAttachments';
    /**
     * Constant for value 'Exception:Importance'
     * @return string 'Exception:Importance'
     */
    const VALUE_EXCEPTION_IMPORTANCE = 'Exception:Importance';
    /**
     * Constant for value 'Exception:IsApprovalRequest'
     * @return string 'Exception:IsApprovalRequest'
     */
    const VALUE_EXCEPTION_ISAPPROVALREQUEST = 'Exception:IsApprovalRequest';
    /**
     * Constant for value 'Exception:IsAutomaticForward'
     * @return string 'Exception:IsAutomaticForward'
     */
    const VALUE_EXCEPTION_ISAUTOMATICFORWARD = 'Exception:IsAutomaticForward';
    /**
     * Constant for value 'Exception:IsAutomaticReply'
     * @return string 'Exception:IsAutomaticReply'
     */
    const VALUE_EXCEPTION_ISAUTOMATICREPLY = 'Exception:IsAutomaticReply';
    /**
     * Constant for value 'Exception:IsEncrypted'
     * @return string 'Exception:IsEncrypted'
     */
    const VALUE_EXCEPTION_ISENCRYPTED = 'Exception:IsEncrypted';
    /**
     * Constant for value 'Exception:IsMeetingRequest'
     * @return string 'Exception:IsMeetingRequest'
     */
    const VALUE_EXCEPTION_ISMEETINGREQUEST = 'Exception:IsMeetingRequest';
    /**
     * Constant for value 'Exception:IsMeetingResponse'
     * @return string 'Exception:IsMeetingResponse'
     */
    const VALUE_EXCEPTION_ISMEETINGRESPONSE = 'Exception:IsMeetingResponse';
    /**
     * Constant for value 'Exception:IsNDR'
     * @return string 'Exception:IsNDR'
     */
    const VALUE_EXCEPTION_ISNDR = 'Exception:IsNDR';
    /**
     * Constant for value 'Exception:IsPermissionControlled'
     * @return string 'Exception:IsPermissionControlled'
     */
    const VALUE_EXCEPTION_ISPERMISSIONCONTROLLED = 'Exception:IsPermissionControlled';
    /**
     * Constant for value 'Exception:IsReadReceipt'
     * @return string 'Exception:IsReadReceipt'
     */
    const VALUE_EXCEPTION_ISREADRECEIPT = 'Exception:IsReadReceipt';
    /**
     * Constant for value 'Exception:IsSigned'
     * @return string 'Exception:IsSigned'
     */
    const VALUE_EXCEPTION_ISSIGNED = 'Exception:IsSigned';
    /**
     * Constant for value 'Exception:IsVoicemail'
     * @return string 'Exception:IsVoicemail'
     */
    const VALUE_EXCEPTION_ISVOICEMAIL = 'Exception:IsVoicemail';
    /**
     * Constant for value 'Exception:ItemClasses'
     * @return string 'Exception:ItemClasses'
     */
    const VALUE_EXCEPTION_ITEMCLASSES = 'Exception:ItemClasses';
    /**
     * Constant for value 'Exception:MessageClassifications'
     * @return string 'Exception:MessageClassifications'
     */
    const VALUE_EXCEPTION_MESSAGECLASSIFICATIONS = 'Exception:MessageClassifications';
    /**
     * Constant for value 'Exception:NotSentToMe'
     * @return string 'Exception:NotSentToMe'
     */
    const VALUE_EXCEPTION_NOTSENTTOME = 'Exception:NotSentToMe';
    /**
     * Constant for value 'Exception:SentCcMe'
     * @return string 'Exception:SentCcMe'
     */
    const VALUE_EXCEPTION_SENTCCME = 'Exception:SentCcMe';
    /**
     * Constant for value 'Exception:SentOnlyToMe'
     * @return string 'Exception:SentOnlyToMe'
     */
    const VALUE_EXCEPTION_SENTONLYTOME = 'Exception:SentOnlyToMe';
    /**
     * Constant for value 'Exception:SentToAddresses'
     * @return string 'Exception:SentToAddresses'
     */
    const VALUE_EXCEPTION_SENTTOADDRESSES = 'Exception:SentToAddresses';
    /**
     * Constant for value 'Exception:SentToMe'
     * @return string 'Exception:SentToMe'
     */
    const VALUE_EXCEPTION_SENTTOME = 'Exception:SentToMe';
    /**
     * Constant for value 'Exception:SentToOrCcMe'
     * @return string 'Exception:SentToOrCcMe'
     */
    const VALUE_EXCEPTION_SENTTOORCCME = 'Exception:SentToOrCcMe';
    /**
     * Constant for value 'Exception:Sensitivity'
     * @return string 'Exception:Sensitivity'
     */
    const VALUE_EXCEPTION_SENSITIVITY = 'Exception:Sensitivity';
    /**
     * Constant for value 'Exception:WithinDateRange'
     * @return string 'Exception:WithinDateRange'
     */
    const VALUE_EXCEPTION_WITHINDATERANGE = 'Exception:WithinDateRange';
    /**
     * Constant for value 'Exception:WithinSizeRange'
     * @return string 'Exception:WithinSizeRange'
     */
    const VALUE_EXCEPTION_WITHINSIZERANGE = 'Exception:WithinSizeRange';
    /**
     * Constant for value 'Action:AssignCategories'
     * @return string 'Action:AssignCategories'
     */
    const VALUE_ACTION_ASSIGNCATEGORIES = 'Action:AssignCategories';
    /**
     * Constant for value 'Action:CopyToFolder'
     * @return string 'Action:CopyToFolder'
     */
    const VALUE_ACTION_COPYTOFOLDER = 'Action:CopyToFolder';
    /**
     * Constant for value 'Action:Delete'
     * @return string 'Action:Delete'
     */
    const VALUE_ACTION_DELETE = 'Action:Delete';
    /**
     * Constant for value 'Action:ForwardAsAttachmentToRecipients'
     * @return string 'Action:ForwardAsAttachmentToRecipients'
     */
    const VALUE_ACTION_FORWARDASATTACHMENTTORECIPIENTS = 'Action:ForwardAsAttachmentToRecipients';
    /**
     * Constant for value 'Action:ForwardToRecipients'
     * @return string 'Action:ForwardToRecipients'
     */
    const VALUE_ACTION_FORWARDTORECIPIENTS = 'Action:ForwardToRecipients';
    /**
     * Constant for value 'Action:MarkImportance'
     * @return string 'Action:MarkImportance'
     */
    const VALUE_ACTION_MARKIMPORTANCE = 'Action:MarkImportance';
    /**
     * Constant for value 'Action:MarkAsRead'
     * @return string 'Action:MarkAsRead'
     */
    const VALUE_ACTION_MARKASREAD = 'Action:MarkAsRead';
    /**
     * Constant for value 'Action:MoveToFolder'
     * @return string 'Action:MoveToFolder'
     */
    const VALUE_ACTION_MOVETOFOLDER = 'Action:MoveToFolder';
    /**
     * Constant for value 'Action:PermanentDelete'
     * @return string 'Action:PermanentDelete'
     */
    const VALUE_ACTION_PERMANENTDELETE = 'Action:PermanentDelete';
    /**
     * Constant for value 'Action:RedirectToRecipients'
     * @return string 'Action:RedirectToRecipients'
     */
    const VALUE_ACTION_REDIRECTTORECIPIENTS = 'Action:RedirectToRecipients';
    /**
     * Constant for value 'Action:SendSMSAlertToRecipients'
     * @return string 'Action:SendSMSAlertToRecipients'
     */
    const VALUE_ACTION_SENDSMSALERTTORECIPIENTS = 'Action:SendSMSAlertToRecipients';
    /**
     * Constant for value 'Action:ServerReplyWithMessage'
     * @return string 'Action:ServerReplyWithMessage'
     */
    const VALUE_ACTION_SERVERREPLYWITHMESSAGE = 'Action:ServerReplyWithMessage';
    /**
     * Constant for value 'Action:StopProcessingRules'
     * @return string 'Action:StopProcessingRules'
     */
    const VALUE_ACTION_STOPPROCESSINGRULES = 'Action:StopProcessingRules';
    /**
     * Constant for value 'IsEnabled'
     * @return string 'IsEnabled'
     */
    const VALUE_ISENABLED = 'IsEnabled';
    /**
     * Constant for value 'IsInError'
     * @return string 'IsInError'
     */
    const VALUE_ISINERROR = 'IsInError';
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
     * @uses self::VALUE_RULEID
     * @uses self::VALUE_DISPLAYNAME
     * @uses self::VALUE_PRIORITY
     * @uses self::VALUE_ISNOTSUPPORTED
     * @uses self::VALUE_ACTIONS
     * @uses self::VALUE_CONDITION_CATEGORIES
     * @uses self::VALUE_CONDITION_CONTAINSBODYSTRINGS
     * @uses self::VALUE_CONDITION_CONTAINSHEADERSTRINGS
     * @uses self::VALUE_CONDITION_CONTAINSRECIPIENTSTRINGS
     * @uses self::VALUE_CONDITION_CONTAINSSENDERSTRINGS
     * @uses self::VALUE_CONDITION_CONTAINSSUBJECTORBODYSTRINGS
     * @uses self::VALUE_CONDITION_CONTAINSSUBJECTSTRINGS
     * @uses self::VALUE_CONDITION_FLAGGEDFORACTION
     * @uses self::VALUE_CONDITION_FROMADDRESSES
     * @uses self::VALUE_CONDITION_FROMCONNECTEDACCOUNTS
     * @uses self::VALUE_CONDITION_HASATTACHMENTS
     * @uses self::VALUE_CONDITION_IMPORTANCE
     * @uses self::VALUE_CONDITION_ISAPPROVALREQUEST
     * @uses self::VALUE_CONDITION_ISAUTOMATICFORWARD
     * @uses self::VALUE_CONDITION_ISAUTOMATICREPLY
     * @uses self::VALUE_CONDITION_ISENCRYPTED
     * @uses self::VALUE_CONDITION_ISMEETINGREQUEST
     * @uses self::VALUE_CONDITION_ISMEETINGRESPONSE
     * @uses self::VALUE_CONDITION_ISNDR
     * @uses self::VALUE_CONDITION_ISPERMISSIONCONTROLLED
     * @uses self::VALUE_CONDITION_ISREADRECEIPT
     * @uses self::VALUE_CONDITION_ISSIGNED
     * @uses self::VALUE_CONDITION_ISVOICEMAIL
     * @uses self::VALUE_CONDITION_ITEMCLASSES
     * @uses self::VALUE_CONDITION_MESSAGECLASSIFICATIONS
     * @uses self::VALUE_CONDITION_NOTSENTTOME
     * @uses self::VALUE_CONDITION_SENTCCME
     * @uses self::VALUE_CONDITION_SENTONLYTOME
     * @uses self::VALUE_CONDITION_SENTTOADDRESSES
     * @uses self::VALUE_CONDITION_SENTTOME
     * @uses self::VALUE_CONDITION_SENTTOORCCME
     * @uses self::VALUE_CONDITION_SENSITIVITY
     * @uses self::VALUE_CONDITION_WITHINDATERANGE
     * @uses self::VALUE_CONDITION_WITHINSIZERANGE
     * @uses self::VALUE_EXCEPTION_CATEGORIES
     * @uses self::VALUE_EXCEPTION_CONTAINSBODYSTRINGS
     * @uses self::VALUE_EXCEPTION_CONTAINSHEADERSTRINGS
     * @uses self::VALUE_EXCEPTION_CONTAINSRECIPIENTSTRINGS
     * @uses self::VALUE_EXCEPTION_CONTAINSSENDERSTRINGS
     * @uses self::VALUE_EXCEPTION_CONTAINSSUBJECTORBODYSTRINGS
     * @uses self::VALUE_EXCEPTION_CONTAINSSUBJECTSTRINGS
     * @uses self::VALUE_EXCEPTION_FLAGGEDFORACTION
     * @uses self::VALUE_EXCEPTION_FROMADDRESSES
     * @uses self::VALUE_EXCEPTION_FROMCONNECTEDACCOUNTS
     * @uses self::VALUE_EXCEPTION_HASATTACHMENTS
     * @uses self::VALUE_EXCEPTION_IMPORTANCE
     * @uses self::VALUE_EXCEPTION_ISAPPROVALREQUEST
     * @uses self::VALUE_EXCEPTION_ISAUTOMATICFORWARD
     * @uses self::VALUE_EXCEPTION_ISAUTOMATICREPLY
     * @uses self::VALUE_EXCEPTION_ISENCRYPTED
     * @uses self::VALUE_EXCEPTION_ISMEETINGREQUEST
     * @uses self::VALUE_EXCEPTION_ISMEETINGRESPONSE
     * @uses self::VALUE_EXCEPTION_ISNDR
     * @uses self::VALUE_EXCEPTION_ISPERMISSIONCONTROLLED
     * @uses self::VALUE_EXCEPTION_ISREADRECEIPT
     * @uses self::VALUE_EXCEPTION_ISSIGNED
     * @uses self::VALUE_EXCEPTION_ISVOICEMAIL
     * @uses self::VALUE_EXCEPTION_ITEMCLASSES
     * @uses self::VALUE_EXCEPTION_MESSAGECLASSIFICATIONS
     * @uses self::VALUE_EXCEPTION_NOTSENTTOME
     * @uses self::VALUE_EXCEPTION_SENTCCME
     * @uses self::VALUE_EXCEPTION_SENTONLYTOME
     * @uses self::VALUE_EXCEPTION_SENTTOADDRESSES
     * @uses self::VALUE_EXCEPTION_SENTTOME
     * @uses self::VALUE_EXCEPTION_SENTTOORCCME
     * @uses self::VALUE_EXCEPTION_SENSITIVITY
     * @uses self::VALUE_EXCEPTION_WITHINDATERANGE
     * @uses self::VALUE_EXCEPTION_WITHINSIZERANGE
     * @uses self::VALUE_ACTION_ASSIGNCATEGORIES
     * @uses self::VALUE_ACTION_COPYTOFOLDER
     * @uses self::VALUE_ACTION_DELETE
     * @uses self::VALUE_ACTION_FORWARDASATTACHMENTTORECIPIENTS
     * @uses self::VALUE_ACTION_FORWARDTORECIPIENTS
     * @uses self::VALUE_ACTION_MARKIMPORTANCE
     * @uses self::VALUE_ACTION_MARKASREAD
     * @uses self::VALUE_ACTION_MOVETOFOLDER
     * @uses self::VALUE_ACTION_PERMANENTDELETE
     * @uses self::VALUE_ACTION_REDIRECTTORECIPIENTS
     * @uses self::VALUE_ACTION_SENDSMSALERTTORECIPIENTS
     * @uses self::VALUE_ACTION_SERVERREPLYWITHMESSAGE
     * @uses self::VALUE_ACTION_STOPPROCESSINGRULES
     * @uses self::VALUE_ISENABLED
     * @uses self::VALUE_ISINERROR
     * @uses self::VALUE_CONDITIONS
     * @uses self::VALUE_EXCEPTIONS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_RULEID,
            self::VALUE_DISPLAYNAME,
            self::VALUE_PRIORITY,
            self::VALUE_ISNOTSUPPORTED,
            self::VALUE_ACTIONS,
            self::VALUE_CONDITION_CATEGORIES,
            self::VALUE_CONDITION_CONTAINSBODYSTRINGS,
            self::VALUE_CONDITION_CONTAINSHEADERSTRINGS,
            self::VALUE_CONDITION_CONTAINSRECIPIENTSTRINGS,
            self::VALUE_CONDITION_CONTAINSSENDERSTRINGS,
            self::VALUE_CONDITION_CONTAINSSUBJECTORBODYSTRINGS,
            self::VALUE_CONDITION_CONTAINSSUBJECTSTRINGS,
            self::VALUE_CONDITION_FLAGGEDFORACTION,
            self::VALUE_CONDITION_FROMADDRESSES,
            self::VALUE_CONDITION_FROMCONNECTEDACCOUNTS,
            self::VALUE_CONDITION_HASATTACHMENTS,
            self::VALUE_CONDITION_IMPORTANCE,
            self::VALUE_CONDITION_ISAPPROVALREQUEST,
            self::VALUE_CONDITION_ISAUTOMATICFORWARD,
            self::VALUE_CONDITION_ISAUTOMATICREPLY,
            self::VALUE_CONDITION_ISENCRYPTED,
            self::VALUE_CONDITION_ISMEETINGREQUEST,
            self::VALUE_CONDITION_ISMEETINGRESPONSE,
            self::VALUE_CONDITION_ISNDR,
            self::VALUE_CONDITION_ISPERMISSIONCONTROLLED,
            self::VALUE_CONDITION_ISREADRECEIPT,
            self::VALUE_CONDITION_ISSIGNED,
            self::VALUE_CONDITION_ISVOICEMAIL,
            self::VALUE_CONDITION_ITEMCLASSES,
            self::VALUE_CONDITION_MESSAGECLASSIFICATIONS,
            self::VALUE_CONDITION_NOTSENTTOME,
            self::VALUE_CONDITION_SENTCCME,
            self::VALUE_CONDITION_SENTONLYTOME,
            self::VALUE_CONDITION_SENTTOADDRESSES,
            self::VALUE_CONDITION_SENTTOME,
            self::VALUE_CONDITION_SENTTOORCCME,
            self::VALUE_CONDITION_SENSITIVITY,
            self::VALUE_CONDITION_WITHINDATERANGE,
            self::VALUE_CONDITION_WITHINSIZERANGE,
            self::VALUE_EXCEPTION_CATEGORIES,
            self::VALUE_EXCEPTION_CONTAINSBODYSTRINGS,
            self::VALUE_EXCEPTION_CONTAINSHEADERSTRINGS,
            self::VALUE_EXCEPTION_CONTAINSRECIPIENTSTRINGS,
            self::VALUE_EXCEPTION_CONTAINSSENDERSTRINGS,
            self::VALUE_EXCEPTION_CONTAINSSUBJECTORBODYSTRINGS,
            self::VALUE_EXCEPTION_CONTAINSSUBJECTSTRINGS,
            self::VALUE_EXCEPTION_FLAGGEDFORACTION,
            self::VALUE_EXCEPTION_FROMADDRESSES,
            self::VALUE_EXCEPTION_FROMCONNECTEDACCOUNTS,
            self::VALUE_EXCEPTION_HASATTACHMENTS,
            self::VALUE_EXCEPTION_IMPORTANCE,
            self::VALUE_EXCEPTION_ISAPPROVALREQUEST,
            self::VALUE_EXCEPTION_ISAUTOMATICFORWARD,
            self::VALUE_EXCEPTION_ISAUTOMATICREPLY,
            self::VALUE_EXCEPTION_ISENCRYPTED,
            self::VALUE_EXCEPTION_ISMEETINGREQUEST,
            self::VALUE_EXCEPTION_ISMEETINGRESPONSE,
            self::VALUE_EXCEPTION_ISNDR,
            self::VALUE_EXCEPTION_ISPERMISSIONCONTROLLED,
            self::VALUE_EXCEPTION_ISREADRECEIPT,
            self::VALUE_EXCEPTION_ISSIGNED,
            self::VALUE_EXCEPTION_ISVOICEMAIL,
            self::VALUE_EXCEPTION_ITEMCLASSES,
            self::VALUE_EXCEPTION_MESSAGECLASSIFICATIONS,
            self::VALUE_EXCEPTION_NOTSENTTOME,
            self::VALUE_EXCEPTION_SENTCCME,
            self::VALUE_EXCEPTION_SENTONLYTOME,
            self::VALUE_EXCEPTION_SENTTOADDRESSES,
            self::VALUE_EXCEPTION_SENTTOME,
            self::VALUE_EXCEPTION_SENTTOORCCME,
            self::VALUE_EXCEPTION_SENSITIVITY,
            self::VALUE_EXCEPTION_WITHINDATERANGE,
            self::VALUE_EXCEPTION_WITHINSIZERANGE,
            self::VALUE_ACTION_ASSIGNCATEGORIES,
            self::VALUE_ACTION_COPYTOFOLDER,
            self::VALUE_ACTION_DELETE,
            self::VALUE_ACTION_FORWARDASATTACHMENTTORECIPIENTS,
            self::VALUE_ACTION_FORWARDTORECIPIENTS,
            self::VALUE_ACTION_MARKIMPORTANCE,
            self::VALUE_ACTION_MARKASREAD,
            self::VALUE_ACTION_MOVETOFOLDER,
            self::VALUE_ACTION_PERMANENTDELETE,
            self::VALUE_ACTION_REDIRECTTORECIPIENTS,
            self::VALUE_ACTION_SENDSMSALERTTORECIPIENTS,
            self::VALUE_ACTION_SERVERREPLYWITHMESSAGE,
            self::VALUE_ACTION_STOPPROCESSINGRULES,
            self::VALUE_ISENABLED,
            self::VALUE_ISINERROR,
            self::VALUE_CONDITIONS,
            self::VALUE_EXCEPTIONS,
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
