<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ResponseCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Represents the message keys that can be returned by response error messages
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsResponseCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NoError'
     * @return string 'NoError'
     */
    const VALUE_NO_ERROR = 'NoError';
    /**
     * Constant for value 'ErrorAccessDenied'
     * @return string 'ErrorAccessDenied'
     */
    const VALUE_ERROR_ACCESS_DENIED = 'ErrorAccessDenied';
    /**
     * Constant for value 'ErrorAccessModeSpecified'
     * @return string 'ErrorAccessModeSpecified'
     */
    const VALUE_ERROR_ACCESS_MODE_SPECIFIED = 'ErrorAccessModeSpecified';
    /**
     * Constant for value 'ErrorAccountDisabled'
     * @return string 'ErrorAccountDisabled'
     */
    const VALUE_ERROR_ACCOUNT_DISABLED = 'ErrorAccountDisabled';
    /**
     * Constant for value 'ErrorAddDelegatesFailed'
     * @return string 'ErrorAddDelegatesFailed'
     */
    const VALUE_ERROR_ADD_DELEGATES_FAILED = 'ErrorAddDelegatesFailed';
    /**
     * Constant for value 'ErrorAddressSpaceNotFound'
     * @return string 'ErrorAddressSpaceNotFound'
     */
    const VALUE_ERROR_ADDRESS_SPACE_NOT_FOUND = 'ErrorAddressSpaceNotFound';
    /**
     * Constant for value 'ErrorADOperation'
     * @return string 'ErrorADOperation'
     */
    const VALUE_ERROR_ADOPERATION = 'ErrorADOperation';
    /**
     * Constant for value 'ErrorADSessionFilter'
     * @return string 'ErrorADSessionFilter'
     */
    const VALUE_ERROR_ADSESSION_FILTER = 'ErrorADSessionFilter';
    /**
     * Constant for value 'ErrorADUnavailable'
     * @return string 'ErrorADUnavailable'
     */
    const VALUE_ERROR_ADUNAVAILABLE = 'ErrorADUnavailable';
    /**
     * Constant for value 'ErrorAutoDiscoverFailed'
     * @return string 'ErrorAutoDiscoverFailed'
     */
    const VALUE_ERROR_AUTO_DISCOVER_FAILED = 'ErrorAutoDiscoverFailed';
    /**
     * Constant for value 'ErrorAffectedTaskOccurrencesRequired'
     * @return string 'ErrorAffectedTaskOccurrencesRequired'
     */
    const VALUE_ERROR_AFFECTED_TASK_OCCURRENCES_REQUIRED = 'ErrorAffectedTaskOccurrencesRequired';
    /**
     * Constant for value 'ErrorAttachmentNestLevelLimitExceeded'
     * @return string 'ErrorAttachmentNestLevelLimitExceeded'
     */
    const VALUE_ERROR_ATTACHMENT_NEST_LEVEL_LIMIT_EXCEEDED = 'ErrorAttachmentNestLevelLimitExceeded';
    /**
     * Constant for value 'ErrorAttachmentSizeLimitExceeded'
     * @return string 'ErrorAttachmentSizeLimitExceeded'
     */
    const VALUE_ERROR_ATTACHMENT_SIZE_LIMIT_EXCEEDED = 'ErrorAttachmentSizeLimitExceeded';
    /**
     * Constant for value 'ErrorArchiveFolderPathCreation'
     * @return string 'ErrorArchiveFolderPathCreation'
     */
    const VALUE_ERROR_ARCHIVE_FOLDER_PATH_CREATION = 'ErrorArchiveFolderPathCreation';
    /**
     * Constant for value 'ErrorArchiveMailboxNotEnabled'
     * @return string 'ErrorArchiveMailboxNotEnabled'
     */
    const VALUE_ERROR_ARCHIVE_MAILBOX_NOT_ENABLED = 'ErrorArchiveMailboxNotEnabled';
    /**
     * Constant for value 'ErrorArchiveMailboxServiceDiscoveryFailed'
     * @return string 'ErrorArchiveMailboxServiceDiscoveryFailed'
     */
    const VALUE_ERROR_ARCHIVE_MAILBOX_SERVICE_DISCOVERY_FAILED = 'ErrorArchiveMailboxServiceDiscoveryFailed';
    /**
     * Constant for value 'ErrorAvailabilityConfigNotFound'
     * @return string 'ErrorAvailabilityConfigNotFound'
     */
    const VALUE_ERROR_AVAILABILITY_CONFIG_NOT_FOUND = 'ErrorAvailabilityConfigNotFound';
    /**
     * Constant for value 'ErrorBatchProcessingStopped'
     * @return string 'ErrorBatchProcessingStopped'
     */
    const VALUE_ERROR_BATCH_PROCESSING_STOPPED = 'ErrorBatchProcessingStopped';
    /**
     * Constant for value 'ErrorCalendarCannotMoveOrCopyOccurrence'
     * @return string 'ErrorCalendarCannotMoveOrCopyOccurrence'
     */
    const VALUE_ERROR_CALENDAR_CANNOT_MOVE_OR_COPY_OCCURRENCE = 'ErrorCalendarCannotMoveOrCopyOccurrence';
    /**
     * Constant for value 'ErrorCalendarCannotUpdateDeletedItem'
     * @return string 'ErrorCalendarCannotUpdateDeletedItem'
     */
    const VALUE_ERROR_CALENDAR_CANNOT_UPDATE_DELETED_ITEM = 'ErrorCalendarCannotUpdateDeletedItem';
    /**
     * Constant for value 'ErrorCalendarCannotUseIdForOccurrenceId'
     * @return string 'ErrorCalendarCannotUseIdForOccurrenceId'
     */
    const VALUE_ERROR_CALENDAR_CANNOT_USE_ID_FOR_OCCURRENCE_ID = 'ErrorCalendarCannotUseIdForOccurrenceId';
    /**
     * Constant for value 'ErrorCalendarCannotUseIdForRecurringMasterId'
     * @return string 'ErrorCalendarCannotUseIdForRecurringMasterId'
     */
    const VALUE_ERROR_CALENDAR_CANNOT_USE_ID_FOR_RECURRING_MASTER_ID = 'ErrorCalendarCannotUseIdForRecurringMasterId';
    /**
     * Constant for value 'ErrorCalendarDurationIsTooLong'
     * @return string 'ErrorCalendarDurationIsTooLong'
     */
    const VALUE_ERROR_CALENDAR_DURATION_IS_TOO_LONG = 'ErrorCalendarDurationIsTooLong';
    /**
     * Constant for value 'ErrorCalendarEndDateIsEarlierThanStartDate'
     * @return string 'ErrorCalendarEndDateIsEarlierThanStartDate'
     */
    const VALUE_ERROR_CALENDAR_END_DATE_IS_EARLIER_THAN_START_DATE = 'ErrorCalendarEndDateIsEarlierThanStartDate';
    /**
     * Constant for value 'ErrorCalendarFolderIsInvalidForCalendarView'
     * @return string 'ErrorCalendarFolderIsInvalidForCalendarView'
     */
    const VALUE_ERROR_CALENDAR_FOLDER_IS_INVALID_FOR_CALENDAR_VIEW = 'ErrorCalendarFolderIsInvalidForCalendarView';
    /**
     * Constant for value 'ErrorCalendarInvalidAttributeValue'
     * @return string 'ErrorCalendarInvalidAttributeValue'
     */
    const VALUE_ERROR_CALENDAR_INVALID_ATTRIBUTE_VALUE = 'ErrorCalendarInvalidAttributeValue';
    /**
     * Constant for value 'ErrorCalendarInvalidDayForTimeChangePattern'
     * @return string 'ErrorCalendarInvalidDayForTimeChangePattern'
     */
    const VALUE_ERROR_CALENDAR_INVALID_DAY_FOR_TIME_CHANGE_PATTERN = 'ErrorCalendarInvalidDayForTimeChangePattern';
    /**
     * Constant for value 'ErrorCalendarInvalidDayForWeeklyRecurrence'
     * @return string 'ErrorCalendarInvalidDayForWeeklyRecurrence'
     */
    const VALUE_ERROR_CALENDAR_INVALID_DAY_FOR_WEEKLY_RECURRENCE = 'ErrorCalendarInvalidDayForWeeklyRecurrence';
    /**
     * Constant for value 'ErrorCalendarInvalidPropertyState'
     * @return string 'ErrorCalendarInvalidPropertyState'
     */
    const VALUE_ERROR_CALENDAR_INVALID_PROPERTY_STATE = 'ErrorCalendarInvalidPropertyState';
    /**
     * Constant for value 'ErrorCalendarInvalidPropertyValue'
     * @return string 'ErrorCalendarInvalidPropertyValue'
     */
    const VALUE_ERROR_CALENDAR_INVALID_PROPERTY_VALUE = 'ErrorCalendarInvalidPropertyValue';
    /**
     * Constant for value 'ErrorCalendarInvalidRecurrence'
     * @return string 'ErrorCalendarInvalidRecurrence'
     */
    const VALUE_ERROR_CALENDAR_INVALID_RECURRENCE = 'ErrorCalendarInvalidRecurrence';
    /**
     * Constant for value 'ErrorCalendarInvalidTimeZone'
     * @return string 'ErrorCalendarInvalidTimeZone'
     */
    const VALUE_ERROR_CALENDAR_INVALID_TIME_ZONE = 'ErrorCalendarInvalidTimeZone';
    /**
     * Constant for value 'ErrorCalendarIsCancelledForAccept'
     * @return string 'ErrorCalendarIsCancelledForAccept'
     */
    const VALUE_ERROR_CALENDAR_IS_CANCELLED_FOR_ACCEPT = 'ErrorCalendarIsCancelledForAccept';
    /**
     * Constant for value 'ErrorCalendarIsCancelledForDecline'
     * @return string 'ErrorCalendarIsCancelledForDecline'
     */
    const VALUE_ERROR_CALENDAR_IS_CANCELLED_FOR_DECLINE = 'ErrorCalendarIsCancelledForDecline';
    /**
     * Constant for value 'ErrorCalendarIsCancelledForRemove'
     * @return string 'ErrorCalendarIsCancelledForRemove'
     */
    const VALUE_ERROR_CALENDAR_IS_CANCELLED_FOR_REMOVE = 'ErrorCalendarIsCancelledForRemove';
    /**
     * Constant for value 'ErrorCalendarIsCancelledForTentative'
     * @return string 'ErrorCalendarIsCancelledForTentative'
     */
    const VALUE_ERROR_CALENDAR_IS_CANCELLED_FOR_TENTATIVE = 'ErrorCalendarIsCancelledForTentative';
    /**
     * Constant for value 'ErrorCalendarIsDelegatedForAccept'
     * @return string 'ErrorCalendarIsDelegatedForAccept'
     */
    const VALUE_ERROR_CALENDAR_IS_DELEGATED_FOR_ACCEPT = 'ErrorCalendarIsDelegatedForAccept';
    /**
     * Constant for value 'ErrorCalendarIsDelegatedForDecline'
     * @return string 'ErrorCalendarIsDelegatedForDecline'
     */
    const VALUE_ERROR_CALENDAR_IS_DELEGATED_FOR_DECLINE = 'ErrorCalendarIsDelegatedForDecline';
    /**
     * Constant for value 'ErrorCalendarIsDelegatedForRemove'
     * @return string 'ErrorCalendarIsDelegatedForRemove'
     */
    const VALUE_ERROR_CALENDAR_IS_DELEGATED_FOR_REMOVE = 'ErrorCalendarIsDelegatedForRemove';
    /**
     * Constant for value 'ErrorCalendarIsDelegatedForTentative'
     * @return string 'ErrorCalendarIsDelegatedForTentative'
     */
    const VALUE_ERROR_CALENDAR_IS_DELEGATED_FOR_TENTATIVE = 'ErrorCalendarIsDelegatedForTentative';
    /**
     * Constant for value 'ErrorCalendarIsNotOrganizer'
     * @return string 'ErrorCalendarIsNotOrganizer'
     */
    const VALUE_ERROR_CALENDAR_IS_NOT_ORGANIZER = 'ErrorCalendarIsNotOrganizer';
    /**
     * Constant for value 'ErrorCalendarIsOrganizerForAccept'
     * @return string 'ErrorCalendarIsOrganizerForAccept'
     */
    const VALUE_ERROR_CALENDAR_IS_ORGANIZER_FOR_ACCEPT = 'ErrorCalendarIsOrganizerForAccept';
    /**
     * Constant for value 'ErrorCalendarIsOrganizerForDecline'
     * @return string 'ErrorCalendarIsOrganizerForDecline'
     */
    const VALUE_ERROR_CALENDAR_IS_ORGANIZER_FOR_DECLINE = 'ErrorCalendarIsOrganizerForDecline';
    /**
     * Constant for value 'ErrorCalendarIsOrganizerForRemove'
     * @return string 'ErrorCalendarIsOrganizerForRemove'
     */
    const VALUE_ERROR_CALENDAR_IS_ORGANIZER_FOR_REMOVE = 'ErrorCalendarIsOrganizerForRemove';
    /**
     * Constant for value 'ErrorCalendarIsOrganizerForTentative'
     * @return string 'ErrorCalendarIsOrganizerForTentative'
     */
    const VALUE_ERROR_CALENDAR_IS_ORGANIZER_FOR_TENTATIVE = 'ErrorCalendarIsOrganizerForTentative';
    /**
     * Constant for value 'ErrorCalendarOccurrenceIndexIsOutOfRecurrenceRange'
     * @return string 'ErrorCalendarOccurrenceIndexIsOutOfRecurrenceRange'
     */
    const VALUE_ERROR_CALENDAR_OCCURRENCE_INDEX_IS_OUT_OF_RECURRENCE_RANGE = 'ErrorCalendarOccurrenceIndexIsOutOfRecurrenceRange';
    /**
     * Constant for value 'ErrorCalendarOccurrenceIsDeletedFromRecurrence'
     * @return string 'ErrorCalendarOccurrenceIsDeletedFromRecurrence'
     */
    const VALUE_ERROR_CALENDAR_OCCURRENCE_IS_DELETED_FROM_RECURRENCE = 'ErrorCalendarOccurrenceIsDeletedFromRecurrence';
    /**
     * Constant for value 'ErrorCalendarOutOfRange'
     * @return string 'ErrorCalendarOutOfRange'
     */
    const VALUE_ERROR_CALENDAR_OUT_OF_RANGE = 'ErrorCalendarOutOfRange';
    /**
     * Constant for value 'ErrorCalendarMeetingRequestIsOutOfDate'
     * @return string 'ErrorCalendarMeetingRequestIsOutOfDate'
     */
    const VALUE_ERROR_CALENDAR_MEETING_REQUEST_IS_OUT_OF_DATE = 'ErrorCalendarMeetingRequestIsOutOfDate';
    /**
     * Constant for value 'ErrorCalendarViewRangeTooBig'
     * @return string 'ErrorCalendarViewRangeTooBig'
     */
    const VALUE_ERROR_CALENDAR_VIEW_RANGE_TOO_BIG = 'ErrorCalendarViewRangeTooBig';
    /**
     * Constant for value 'ErrorCallerIsInvalidADAccount'
     * @return string 'ErrorCallerIsInvalidADAccount'
     */
    const VALUE_ERROR_CALLER_IS_INVALID_ADACCOUNT = 'ErrorCallerIsInvalidADAccount';
    /**
     * Constant for value 'ErrorCannotArchiveCalendarContactTaskFolderException'
     * @return string 'ErrorCannotArchiveCalendarContactTaskFolderException'
     */
    const VALUE_ERROR_CANNOT_ARCHIVE_CALENDAR_CONTACT_TASK_FOLDER_EXCEPTION = 'ErrorCannotArchiveCalendarContactTaskFolderException';
    /**
     * Constant for value 'ErrorCannotArchiveItemsInPublicFolders'
     * @return string 'ErrorCannotArchiveItemsInPublicFolders'
     */
    const VALUE_ERROR_CANNOT_ARCHIVE_ITEMS_IN_PUBLIC_FOLDERS = 'ErrorCannotArchiveItemsInPublicFolders';
    /**
     * Constant for value 'ErrorCannotArchiveItemsInArchiveMailbox'
     * @return string 'ErrorCannotArchiveItemsInArchiveMailbox'
     */
    const VALUE_ERROR_CANNOT_ARCHIVE_ITEMS_IN_ARCHIVE_MAILBOX = 'ErrorCannotArchiveItemsInArchiveMailbox';
    /**
     * Constant for value 'ErrorCannotCreateCalendarItemInNonCalendarFolder'
     * @return string 'ErrorCannotCreateCalendarItemInNonCalendarFolder'
     */
    const VALUE_ERROR_CANNOT_CREATE_CALENDAR_ITEM_IN_NON_CALENDAR_FOLDER = 'ErrorCannotCreateCalendarItemInNonCalendarFolder';
    /**
     * Constant for value 'ErrorCannotCreateContactInNonContactFolder'
     * @return string 'ErrorCannotCreateContactInNonContactFolder'
     */
    const VALUE_ERROR_CANNOT_CREATE_CONTACT_IN_NON_CONTACT_FOLDER = 'ErrorCannotCreateContactInNonContactFolder';
    /**
     * Constant for value 'ErrorCannotCreatePostItemInNonMailFolder'
     * @return string 'ErrorCannotCreatePostItemInNonMailFolder'
     */
    const VALUE_ERROR_CANNOT_CREATE_POST_ITEM_IN_NON_MAIL_FOLDER = 'ErrorCannotCreatePostItemInNonMailFolder';
    /**
     * Constant for value 'ErrorCannotCreateTaskInNonTaskFolder'
     * @return string 'ErrorCannotCreateTaskInNonTaskFolder'
     */
    const VALUE_ERROR_CANNOT_CREATE_TASK_IN_NON_TASK_FOLDER = 'ErrorCannotCreateTaskInNonTaskFolder';
    /**
     * Constant for value 'ErrorCannotDeleteObject'
     * @return string 'ErrorCannotDeleteObject'
     */
    const VALUE_ERROR_CANNOT_DELETE_OBJECT = 'ErrorCannotDeleteObject';
    /**
     * Constant for value 'ErrorCannotDisableMandatoryExtension'
     * @return string 'ErrorCannotDisableMandatoryExtension'
     */
    const VALUE_ERROR_CANNOT_DISABLE_MANDATORY_EXTENSION = 'ErrorCannotDisableMandatoryExtension';
    /**
     * Constant for value 'ErrorCannotFindUser'
     * @return string 'ErrorCannotFindUser'
     */
    const VALUE_ERROR_CANNOT_FIND_USER = 'ErrorCannotFindUser';
    /**
     * Constant for value 'ErrorCannotGetSourceFolderPath'
     * @return string 'ErrorCannotGetSourceFolderPath'
     */
    const VALUE_ERROR_CANNOT_GET_SOURCE_FOLDER_PATH = 'ErrorCannotGetSourceFolderPath';
    /**
     * Constant for value 'ErrorCannotGetExternalEcpUrl'
     * @return string 'ErrorCannotGetExternalEcpUrl'
     */
    const VALUE_ERROR_CANNOT_GET_EXTERNAL_ECP_URL = 'ErrorCannotGetExternalEcpUrl';
    /**
     * Constant for value 'ErrorCannotOpenFileAttachment'
     * @return string 'ErrorCannotOpenFileAttachment'
     */
    const VALUE_ERROR_CANNOT_OPEN_FILE_ATTACHMENT = 'ErrorCannotOpenFileAttachment';
    /**
     * Constant for value 'ErrorCannotDeleteTaskOccurrence'
     * @return string 'ErrorCannotDeleteTaskOccurrence'
     */
    const VALUE_ERROR_CANNOT_DELETE_TASK_OCCURRENCE = 'ErrorCannotDeleteTaskOccurrence';
    /**
     * Constant for value 'ErrorCannotEmptyFolder'
     * @return string 'ErrorCannotEmptyFolder'
     */
    const VALUE_ERROR_CANNOT_EMPTY_FOLDER = 'ErrorCannotEmptyFolder';
    /**
     * Constant for value 'ErrorCannotSetCalendarPermissionOnNonCalendarFolder'
     * @return string 'ErrorCannotSetCalendarPermissionOnNonCalendarFolder'
     */
    const VALUE_ERROR_CANNOT_SET_CALENDAR_PERMISSION_ON_NON_CALENDAR_FOLDER = 'ErrorCannotSetCalendarPermissionOnNonCalendarFolder';
    /**
     * Constant for value 'ErrorCannotSetNonCalendarPermissionOnCalendarFolder'
     * @return string 'ErrorCannotSetNonCalendarPermissionOnCalendarFolder'
     */
    const VALUE_ERROR_CANNOT_SET_NON_CALENDAR_PERMISSION_ON_CALENDAR_FOLDER = 'ErrorCannotSetNonCalendarPermissionOnCalendarFolder';
    /**
     * Constant for value 'ErrorCannotSetPermissionUnknownEntries'
     * @return string 'ErrorCannotSetPermissionUnknownEntries'
     */
    const VALUE_ERROR_CANNOT_SET_PERMISSION_UNKNOWN_ENTRIES = 'ErrorCannotSetPermissionUnknownEntries';
    /**
     * Constant for value 'ErrorCannotSpecifySearchFolderAsSourceFolder'
     * @return string 'ErrorCannotSpecifySearchFolderAsSourceFolder'
     */
    const VALUE_ERROR_CANNOT_SPECIFY_SEARCH_FOLDER_AS_SOURCE_FOLDER = 'ErrorCannotSpecifySearchFolderAsSourceFolder';
    /**
     * Constant for value 'ErrorCannotUseFolderIdForItemId'
     * @return string 'ErrorCannotUseFolderIdForItemId'
     */
    const VALUE_ERROR_CANNOT_USE_FOLDER_ID_FOR_ITEM_ID = 'ErrorCannotUseFolderIdForItemId';
    /**
     * Constant for value 'ErrorCannotUseItemIdForFolderId'
     * @return string 'ErrorCannotUseItemIdForFolderId'
     */
    const VALUE_ERROR_CANNOT_USE_ITEM_ID_FOR_FOLDER_ID = 'ErrorCannotUseItemIdForFolderId';
    /**
     * Constant for value 'ErrorChangeKeyRequired'
     * @return string 'ErrorChangeKeyRequired'
     */
    const VALUE_ERROR_CHANGE_KEY_REQUIRED = 'ErrorChangeKeyRequired';
    /**
     * Constant for value 'ErrorChangeKeyRequiredForWriteOperations'
     * @return string 'ErrorChangeKeyRequiredForWriteOperations'
     */
    const VALUE_ERROR_CHANGE_KEY_REQUIRED_FOR_WRITE_OPERATIONS = 'ErrorChangeKeyRequiredForWriteOperations';
    /**
     * Constant for value 'ErrorChannelSubscriptionAlreadyExists'
     * @return string 'ErrorChannelSubscriptionAlreadyExists'
     */
    const VALUE_ERROR_CHANNEL_SUBSCRIPTION_ALREADY_EXISTS = 'ErrorChannelSubscriptionAlreadyExists';
    /**
     * Constant for value 'ErrorChannelSubscriptionNotFound'
     * @return string 'ErrorChannelSubscriptionNotFound'
     */
    const VALUE_ERROR_CHANNEL_SUBSCRIPTION_NOT_FOUND = 'ErrorChannelSubscriptionNotFound';
    /**
     * Constant for value 'ErrorClientDisconnected'
     * @return string 'ErrorClientDisconnected'
     */
    const VALUE_ERROR_CLIENT_DISCONNECTED = 'ErrorClientDisconnected';
    /**
     * Constant for value 'ErrorClientIntentInvalidStateDefinition'
     * @return string 'ErrorClientIntentInvalidStateDefinition'
     */
    const VALUE_ERROR_CLIENT_INTENT_INVALID_STATE_DEFINITION = 'ErrorClientIntentInvalidStateDefinition';
    /**
     * Constant for value 'ErrorClientIntentNotFound'
     * @return string 'ErrorClientIntentNotFound'
     */
    const VALUE_ERROR_CLIENT_INTENT_NOT_FOUND = 'ErrorClientIntentNotFound';
    /**
     * Constant for value 'ErrorConnectionFailed'
     * @return string 'ErrorConnectionFailed'
     */
    const VALUE_ERROR_CONNECTION_FAILED = 'ErrorConnectionFailed';
    /**
     * Constant for value 'ErrorContainsFilterWrongType'
     * @return string 'ErrorContainsFilterWrongType'
     */
    const VALUE_ERROR_CONTAINS_FILTER_WRONG_TYPE = 'ErrorContainsFilterWrongType';
    /**
     * Constant for value 'ErrorContentConversionFailed'
     * @return string 'ErrorContentConversionFailed'
     */
    const VALUE_ERROR_CONTENT_CONVERSION_FAILED = 'ErrorContentConversionFailed';
    /**
     * Constant for value 'ErrorContentIndexingNotEnabled'
     * @return string 'ErrorContentIndexingNotEnabled'
     */
    const VALUE_ERROR_CONTENT_INDEXING_NOT_ENABLED = 'ErrorContentIndexingNotEnabled';
    /**
     * Constant for value 'ErrorCorruptData'
     * @return string 'ErrorCorruptData'
     */
    const VALUE_ERROR_CORRUPT_DATA = 'ErrorCorruptData';
    /**
     * Constant for value 'ErrorCreateItemAccessDenied'
     * @return string 'ErrorCreateItemAccessDenied'
     */
    const VALUE_ERROR_CREATE_ITEM_ACCESS_DENIED = 'ErrorCreateItemAccessDenied';
    /**
     * Constant for value 'ErrorCreateManagedFolderPartialCompletion'
     * @return string 'ErrorCreateManagedFolderPartialCompletion'
     */
    const VALUE_ERROR_CREATE_MANAGED_FOLDER_PARTIAL_COMPLETION = 'ErrorCreateManagedFolderPartialCompletion';
    /**
     * Constant for value 'ErrorCreateSubfolderAccessDenied'
     * @return string 'ErrorCreateSubfolderAccessDenied'
     */
    const VALUE_ERROR_CREATE_SUBFOLDER_ACCESS_DENIED = 'ErrorCreateSubfolderAccessDenied';
    /**
     * Constant for value 'ErrorCrossMailboxMoveCopy'
     * @return string 'ErrorCrossMailboxMoveCopy'
     */
    const VALUE_ERROR_CROSS_MAILBOX_MOVE_COPY = 'ErrorCrossMailboxMoveCopy';
    /**
     * Constant for value 'ErrorCrossSiteRequest'
     * @return string 'ErrorCrossSiteRequest'
     */
    const VALUE_ERROR_CROSS_SITE_REQUEST = 'ErrorCrossSiteRequest';
    /**
     * Constant for value 'ErrorDataSizeLimitExceeded'
     * @return string 'ErrorDataSizeLimitExceeded'
     */
    const VALUE_ERROR_DATA_SIZE_LIMIT_EXCEEDED = 'ErrorDataSizeLimitExceeded';
    /**
     * Constant for value 'ErrorDataSourceOperation'
     * @return string 'ErrorDataSourceOperation'
     */
    const VALUE_ERROR_DATA_SOURCE_OPERATION = 'ErrorDataSourceOperation';
    /**
     * Constant for value 'ErrorDelegateAlreadyExists'
     * @return string 'ErrorDelegateAlreadyExists'
     */
    const VALUE_ERROR_DELEGATE_ALREADY_EXISTS = 'ErrorDelegateAlreadyExists';
    /**
     * Constant for value 'ErrorDelegateCannotAddOwner'
     * @return string 'ErrorDelegateCannotAddOwner'
     */
    const VALUE_ERROR_DELEGATE_CANNOT_ADD_OWNER = 'ErrorDelegateCannotAddOwner';
    /**
     * Constant for value 'ErrorDelegateMissingConfiguration'
     * @return string 'ErrorDelegateMissingConfiguration'
     */
    const VALUE_ERROR_DELEGATE_MISSING_CONFIGURATION = 'ErrorDelegateMissingConfiguration';
    /**
     * Constant for value 'ErrorDelegateNoUser'
     * @return string 'ErrorDelegateNoUser'
     */
    const VALUE_ERROR_DELEGATE_NO_USER = 'ErrorDelegateNoUser';
    /**
     * Constant for value 'ErrorDelegateValidationFailed'
     * @return string 'ErrorDelegateValidationFailed'
     */
    const VALUE_ERROR_DELEGATE_VALIDATION_FAILED = 'ErrorDelegateValidationFailed';
    /**
     * Constant for value 'ErrorDeleteDistinguishedFolder'
     * @return string 'ErrorDeleteDistinguishedFolder'
     */
    const VALUE_ERROR_DELETE_DISTINGUISHED_FOLDER = 'ErrorDeleteDistinguishedFolder';
    /**
     * Constant for value 'ErrorDeleteItemsFailed'
     * @return string 'ErrorDeleteItemsFailed'
     */
    const VALUE_ERROR_DELETE_ITEMS_FAILED = 'ErrorDeleteItemsFailed';
    /**
     * Constant for value 'ErrorDeleteUnifiedMessagingPromptFailed'
     * @return string 'ErrorDeleteUnifiedMessagingPromptFailed'
     */
    const VALUE_ERROR_DELETE_UNIFIED_MESSAGING_PROMPT_FAILED = 'ErrorDeleteUnifiedMessagingPromptFailed';
    /**
     * Constant for value 'ErrorDistinguishedUserNotSupported'
     * @return string 'ErrorDistinguishedUserNotSupported'
     */
    const VALUE_ERROR_DISTINGUISHED_USER_NOT_SUPPORTED = 'ErrorDistinguishedUserNotSupported';
    /**
     * Constant for value 'ErrorDistributionListMemberNotExist'
     * @return string 'ErrorDistributionListMemberNotExist'
     */
    const VALUE_ERROR_DISTRIBUTION_LIST_MEMBER_NOT_EXIST = 'ErrorDistributionListMemberNotExist';
    /**
     * Constant for value 'ErrorDuplicateInputFolderNames'
     * @return string 'ErrorDuplicateInputFolderNames'
     */
    const VALUE_ERROR_DUPLICATE_INPUT_FOLDER_NAMES = 'ErrorDuplicateInputFolderNames';
    /**
     * Constant for value 'ErrorDuplicateUserIdsSpecified'
     * @return string 'ErrorDuplicateUserIdsSpecified'
     */
    const VALUE_ERROR_DUPLICATE_USER_IDS_SPECIFIED = 'ErrorDuplicateUserIdsSpecified';
    /**
     * Constant for value 'ErrorEmailAddressMismatch'
     * @return string 'ErrorEmailAddressMismatch'
     */
    const VALUE_ERROR_EMAIL_ADDRESS_MISMATCH = 'ErrorEmailAddressMismatch';
    /**
     * Constant for value 'ErrorEventNotFound'
     * @return string 'ErrorEventNotFound'
     */
    const VALUE_ERROR_EVENT_NOT_FOUND = 'ErrorEventNotFound';
    /**
     * Constant for value 'ErrorExceededChannelSubscriptionCount'
     * @return string 'ErrorExceededChannelSubscriptionCount'
     */
    const VALUE_ERROR_EXCEEDED_CHANNEL_SUBSCRIPTION_COUNT = 'ErrorExceededChannelSubscriptionCount';
    /**
     * Constant for value 'ErrorExceededConnectionCount'
     * @return string 'ErrorExceededConnectionCount'
     */
    const VALUE_ERROR_EXCEEDED_CONNECTION_COUNT = 'ErrorExceededConnectionCount';
    /**
     * Constant for value 'ErrorExceededSubscriptionCount'
     * @return string 'ErrorExceededSubscriptionCount'
     */
    const VALUE_ERROR_EXCEEDED_SUBSCRIPTION_COUNT = 'ErrorExceededSubscriptionCount';
    /**
     * Constant for value 'ErrorExceededFindCountLimit'
     * @return string 'ErrorExceededFindCountLimit'
     */
    const VALUE_ERROR_EXCEEDED_FIND_COUNT_LIMIT = 'ErrorExceededFindCountLimit';
    /**
     * Constant for value 'ErrorExpiredSubscription'
     * @return string 'ErrorExpiredSubscription'
     */
    const VALUE_ERROR_EXPIRED_SUBSCRIPTION = 'ErrorExpiredSubscription';
    /**
     * Constant for value 'ErrorExtensionNotFound'
     * @return string 'ErrorExtensionNotFound'
     */
    const VALUE_ERROR_EXTENSION_NOT_FOUND = 'ErrorExtensionNotFound';
    /**
     * Constant for value 'ErrorFolderCorrupt'
     * @return string 'ErrorFolderCorrupt'
     */
    const VALUE_ERROR_FOLDER_CORRUPT = 'ErrorFolderCorrupt';
    /**
     * Constant for value 'ErrorFolderNotFound'
     * @return string 'ErrorFolderNotFound'
     */
    const VALUE_ERROR_FOLDER_NOT_FOUND = 'ErrorFolderNotFound';
    /**
     * Constant for value 'ErrorFolderPropertRequestFailed'
     * @return string 'ErrorFolderPropertRequestFailed'
     */
    const VALUE_ERROR_FOLDER_PROPERT_REQUEST_FAILED = 'ErrorFolderPropertRequestFailed';
    /**
     * Constant for value 'ErrorFolderSave'
     * @return string 'ErrorFolderSave'
     */
    const VALUE_ERROR_FOLDER_SAVE = 'ErrorFolderSave';
    /**
     * Constant for value 'ErrorFolderSaveFailed'
     * @return string 'ErrorFolderSaveFailed'
     */
    const VALUE_ERROR_FOLDER_SAVE_FAILED = 'ErrorFolderSaveFailed';
    /**
     * Constant for value 'ErrorFolderSavePropertyError'
     * @return string 'ErrorFolderSavePropertyError'
     */
    const VALUE_ERROR_FOLDER_SAVE_PROPERTY_ERROR = 'ErrorFolderSavePropertyError';
    /**
     * Constant for value 'ErrorFolderExists'
     * @return string 'ErrorFolderExists'
     */
    const VALUE_ERROR_FOLDER_EXISTS = 'ErrorFolderExists';
    /**
     * Constant for value 'ErrorFreeBusyGenerationFailed'
     * @return string 'ErrorFreeBusyGenerationFailed'
     */
    const VALUE_ERROR_FREE_BUSY_GENERATION_FAILED = 'ErrorFreeBusyGenerationFailed';
    /**
     * Constant for value 'ErrorGetServerSecurityDescriptorFailed'
     * @return string 'ErrorGetServerSecurityDescriptorFailed'
     */
    const VALUE_ERROR_GET_SERVER_SECURITY_DESCRIPTOR_FAILED = 'ErrorGetServerSecurityDescriptorFailed';
    /**
     * Constant for value 'ErrorImContactLimitReached'
     * @return string 'ErrorImContactLimitReached'
     */
    const VALUE_ERROR_IM_CONTACT_LIMIT_REACHED = 'ErrorImContactLimitReached';
    /**
     * Constant for value 'ErrorImGroupDisplayNameAlreadyExists'
     * @return string 'ErrorImGroupDisplayNameAlreadyExists'
     */
    const VALUE_ERROR_IM_GROUP_DISPLAY_NAME_ALREADY_EXISTS = 'ErrorImGroupDisplayNameAlreadyExists';
    /**
     * Constant for value 'ErrorImGroupLimitReached'
     * @return string 'ErrorImGroupLimitReached'
     */
    const VALUE_ERROR_IM_GROUP_LIMIT_REACHED = 'ErrorImGroupLimitReached';
    /**
     * Constant for value 'ErrorImpersonateUserDenied'
     * @return string 'ErrorImpersonateUserDenied'
     */
    const VALUE_ERROR_IMPERSONATE_USER_DENIED = 'ErrorImpersonateUserDenied';
    /**
     * Constant for value 'ErrorImpersonationDenied'
     * @return string 'ErrorImpersonationDenied'
     */
    const VALUE_ERROR_IMPERSONATION_DENIED = 'ErrorImpersonationDenied';
    /**
     * Constant for value 'ErrorImpersonationFailed'
     * @return string 'ErrorImpersonationFailed'
     */
    const VALUE_ERROR_IMPERSONATION_FAILED = 'ErrorImpersonationFailed';
    /**
     * Constant for value 'ErrorIncorrectSchemaVersion'
     * @return string 'ErrorIncorrectSchemaVersion'
     */
    const VALUE_ERROR_INCORRECT_SCHEMA_VERSION = 'ErrorIncorrectSchemaVersion';
    /**
     * Constant for value 'ErrorIncorrectUpdatePropertyCount'
     * @return string 'ErrorIncorrectUpdatePropertyCount'
     */
    const VALUE_ERROR_INCORRECT_UPDATE_PROPERTY_COUNT = 'ErrorIncorrectUpdatePropertyCount';
    /**
     * Constant for value 'ErrorIndividualMailboxLimitReached'
     * @return string 'ErrorIndividualMailboxLimitReached'
     */
    const VALUE_ERROR_INDIVIDUAL_MAILBOX_LIMIT_REACHED = 'ErrorIndividualMailboxLimitReached';
    /**
     * Constant for value 'ErrorInsufficientResources'
     * @return string 'ErrorInsufficientResources'
     */
    const VALUE_ERROR_INSUFFICIENT_RESOURCES = 'ErrorInsufficientResources';
    /**
     * Constant for value 'ErrorInternalServerError'
     * @return string 'ErrorInternalServerError'
     */
    const VALUE_ERROR_INTERNAL_SERVER_ERROR = 'ErrorInternalServerError';
    /**
     * Constant for value 'ErrorInternalServerTransientError'
     * @return string 'ErrorInternalServerTransientError'
     */
    const VALUE_ERROR_INTERNAL_SERVER_TRANSIENT_ERROR = 'ErrorInternalServerTransientError';
    /**
     * Constant for value 'ErrorInvalidAccessLevel'
     * @return string 'ErrorInvalidAccessLevel'
     */
    const VALUE_ERROR_INVALID_ACCESS_LEVEL = 'ErrorInvalidAccessLevel';
    /**
     * Constant for value 'ErrorInvalidArgument'
     * @return string 'ErrorInvalidArgument'
     */
    const VALUE_ERROR_INVALID_ARGUMENT = 'ErrorInvalidArgument';
    /**
     * Constant for value 'ErrorInvalidAttachmentId'
     * @return string 'ErrorInvalidAttachmentId'
     */
    const VALUE_ERROR_INVALID_ATTACHMENT_ID = 'ErrorInvalidAttachmentId';
    /**
     * Constant for value 'ErrorInvalidAttachmentSubfilter'
     * @return string 'ErrorInvalidAttachmentSubfilter'
     */
    const VALUE_ERROR_INVALID_ATTACHMENT_SUBFILTER = 'ErrorInvalidAttachmentSubfilter';
    /**
     * Constant for value 'ErrorInvalidAttachmentSubfilterTextFilter'
     * @return string 'ErrorInvalidAttachmentSubfilterTextFilter'
     */
    const VALUE_ERROR_INVALID_ATTACHMENT_SUBFILTER_TEXT_FILTER = 'ErrorInvalidAttachmentSubfilterTextFilter';
    /**
     * Constant for value 'ErrorInvalidAuthorizationContext'
     * @return string 'ErrorInvalidAuthorizationContext'
     */
    const VALUE_ERROR_INVALID_AUTHORIZATION_CONTEXT = 'ErrorInvalidAuthorizationContext';
    /**
     * Constant for value 'ErrorInvalidChangeKey'
     * @return string 'ErrorInvalidChangeKey'
     */
    const VALUE_ERROR_INVALID_CHANGE_KEY = 'ErrorInvalidChangeKey';
    /**
     * Constant for value 'ErrorInvalidChannelId'
     * @return string 'ErrorInvalidChannelId'
     */
    const VALUE_ERROR_INVALID_CHANNEL_ID = 'ErrorInvalidChannelId';
    /**
     * Constant for value 'ErrorInvalidChannelSubscriptionId'
     * @return string 'ErrorInvalidChannelSubscriptionId'
     */
    const VALUE_ERROR_INVALID_CHANNEL_SUBSCRIPTION_ID = 'ErrorInvalidChannelSubscriptionId';
    /**
     * Constant for value 'ErrorInvalidClientSecurityContext'
     * @return string 'ErrorInvalidClientSecurityContext'
     */
    const VALUE_ERROR_INVALID_CLIENT_SECURITY_CONTEXT = 'ErrorInvalidClientSecurityContext';
    /**
     * Constant for value 'ErrorInvalidCompleteDate'
     * @return string 'ErrorInvalidCompleteDate'
     */
    const VALUE_ERROR_INVALID_COMPLETE_DATE = 'ErrorInvalidCompleteDate';
    /**
     * Constant for value 'ErrorInvalidContactEmailAddress'
     * @return string 'ErrorInvalidContactEmailAddress'
     */
    const VALUE_ERROR_INVALID_CONTACT_EMAIL_ADDRESS = 'ErrorInvalidContactEmailAddress';
    /**
     * Constant for value 'ErrorInvalidContactEmailIndex'
     * @return string 'ErrorInvalidContactEmailIndex'
     */
    const VALUE_ERROR_INVALID_CONTACT_EMAIL_INDEX = 'ErrorInvalidContactEmailIndex';
    /**
     * Constant for value 'ErrorInvalidCrossForestCredentials'
     * @return string 'ErrorInvalidCrossForestCredentials'
     */
    const VALUE_ERROR_INVALID_CROSS_FOREST_CREDENTIALS = 'ErrorInvalidCrossForestCredentials';
    /**
     * Constant for value 'ErrorInvalidDelegatePermission'
     * @return string 'ErrorInvalidDelegatePermission'
     */
    const VALUE_ERROR_INVALID_DELEGATE_PERMISSION = 'ErrorInvalidDelegatePermission';
    /**
     * Constant for value 'ErrorInvalidDelegateUserId'
     * @return string 'ErrorInvalidDelegateUserId'
     */
    const VALUE_ERROR_INVALID_DELEGATE_USER_ID = 'ErrorInvalidDelegateUserId';
    /**
     * Constant for value 'ErrorInvalidExcludesRestriction'
     * @return string 'ErrorInvalidExcludesRestriction'
     */
    const VALUE_ERROR_INVALID_EXCLUDES_RESTRICTION = 'ErrorInvalidExcludesRestriction';
    /**
     * Constant for value 'ErrorInvalidExpressionTypeForSubFilter'
     * @return string 'ErrorInvalidExpressionTypeForSubFilter'
     */
    const VALUE_ERROR_INVALID_EXPRESSION_TYPE_FOR_SUB_FILTER = 'ErrorInvalidExpressionTypeForSubFilter';
    /**
     * Constant for value 'ErrorInvalidExtendedProperty'
     * @return string 'ErrorInvalidExtendedProperty'
     */
    const VALUE_ERROR_INVALID_EXTENDED_PROPERTY = 'ErrorInvalidExtendedProperty';
    /**
     * Constant for value 'ErrorInvalidExtendedPropertyValue'
     * @return string 'ErrorInvalidExtendedPropertyValue'
     */
    const VALUE_ERROR_INVALID_EXTENDED_PROPERTY_VALUE = 'ErrorInvalidExtendedPropertyValue';
    /**
     * Constant for value 'ErrorInvalidFolderId'
     * @return string 'ErrorInvalidFolderId'
     */
    const VALUE_ERROR_INVALID_FOLDER_ID = 'ErrorInvalidFolderId';
    /**
     * Constant for value 'ErrorInvalidFolderTypeForOperation'
     * @return string 'ErrorInvalidFolderTypeForOperation'
     */
    const VALUE_ERROR_INVALID_FOLDER_TYPE_FOR_OPERATION = 'ErrorInvalidFolderTypeForOperation';
    /**
     * Constant for value 'ErrorInvalidFractionalPagingParameters'
     * @return string 'ErrorInvalidFractionalPagingParameters'
     */
    const VALUE_ERROR_INVALID_FRACTIONAL_PAGING_PARAMETERS = 'ErrorInvalidFractionalPagingParameters';
    /**
     * Constant for value 'ErrorInvalidFreeBusyViewType'
     * @return string 'ErrorInvalidFreeBusyViewType'
     */
    const VALUE_ERROR_INVALID_FREE_BUSY_VIEW_TYPE = 'ErrorInvalidFreeBusyViewType';
    /**
     * Constant for value 'ErrorInvalidId'
     * @return string 'ErrorInvalidId'
     */
    const VALUE_ERROR_INVALID_ID = 'ErrorInvalidId';
    /**
     * Constant for value 'ErrorInvalidIdEmpty'
     * @return string 'ErrorInvalidIdEmpty'
     */
    const VALUE_ERROR_INVALID_ID_EMPTY = 'ErrorInvalidIdEmpty';
    /**
     * Constant for value 'ErrorInvalidIdMalformed'
     * @return string 'ErrorInvalidIdMalformed'
     */
    const VALUE_ERROR_INVALID_ID_MALFORMED = 'ErrorInvalidIdMalformed';
    /**
     * Constant for value 'ErrorInvalidIdMalformedEwsLegacyIdFormat'
     * @return string 'ErrorInvalidIdMalformedEwsLegacyIdFormat'
     */
    const VALUE_ERROR_INVALID_ID_MALFORMED_EWS_LEGACY_ID_FORMAT = 'ErrorInvalidIdMalformedEwsLegacyIdFormat';
    /**
     * Constant for value 'ErrorInvalidIdMonikerTooLong'
     * @return string 'ErrorInvalidIdMonikerTooLong'
     */
    const VALUE_ERROR_INVALID_ID_MONIKER_TOO_LONG = 'ErrorInvalidIdMonikerTooLong';
    /**
     * Constant for value 'ErrorInvalidIdNotAnItemAttachmentId'
     * @return string 'ErrorInvalidIdNotAnItemAttachmentId'
     */
    const VALUE_ERROR_INVALID_ID_NOT_AN_ITEM_ATTACHMENT_ID = 'ErrorInvalidIdNotAnItemAttachmentId';
    /**
     * Constant for value 'ErrorInvalidIdReturnedByResolveNames'
     * @return string 'ErrorInvalidIdReturnedByResolveNames'
     */
    const VALUE_ERROR_INVALID_ID_RETURNED_BY_RESOLVE_NAMES = 'ErrorInvalidIdReturnedByResolveNames';
    /**
     * Constant for value 'ErrorInvalidIdStoreObjectIdTooLong'
     * @return string 'ErrorInvalidIdStoreObjectIdTooLong'
     */
    const VALUE_ERROR_INVALID_ID_STORE_OBJECT_ID_TOO_LONG = 'ErrorInvalidIdStoreObjectIdTooLong';
    /**
     * Constant for value 'ErrorInvalidIdTooManyAttachmentLevels'
     * @return string 'ErrorInvalidIdTooManyAttachmentLevels'
     */
    const VALUE_ERROR_INVALID_ID_TOO_MANY_ATTACHMENT_LEVELS = 'ErrorInvalidIdTooManyAttachmentLevels';
    /**
     * Constant for value 'ErrorInvalidIdXml'
     * @return string 'ErrorInvalidIdXml'
     */
    const VALUE_ERROR_INVALID_ID_XML = 'ErrorInvalidIdXml';
    /**
     * Constant for value 'ErrorInvalidImContactId'
     * @return string 'ErrorInvalidImContactId'
     */
    const VALUE_ERROR_INVALID_IM_CONTACT_ID = 'ErrorInvalidImContactId';
    /**
     * Constant for value 'ErrorInvalidImDistributionGroupSmtpAddress'
     * @return string 'ErrorInvalidImDistributionGroupSmtpAddress'
     */
    const VALUE_ERROR_INVALID_IM_DISTRIBUTION_GROUP_SMTP_ADDRESS = 'ErrorInvalidImDistributionGroupSmtpAddress';
    /**
     * Constant for value 'ErrorInvalidImGroupId'
     * @return string 'ErrorInvalidImGroupId'
     */
    const VALUE_ERROR_INVALID_IM_GROUP_ID = 'ErrorInvalidImGroupId';
    /**
     * Constant for value 'ErrorInvalidIndexedPagingParameters'
     * @return string 'ErrorInvalidIndexedPagingParameters'
     */
    const VALUE_ERROR_INVALID_INDEXED_PAGING_PARAMETERS = 'ErrorInvalidIndexedPagingParameters';
    /**
     * Constant for value 'ErrorInvalidInternetHeaderChildNodes'
     * @return string 'ErrorInvalidInternetHeaderChildNodes'
     */
    const VALUE_ERROR_INVALID_INTERNET_HEADER_CHILD_NODES = 'ErrorInvalidInternetHeaderChildNodes';
    /**
     * Constant for value 'ErrorInvalidItemForOperationArchiveItem'
     * @return string 'ErrorInvalidItemForOperationArchiveItem'
     */
    const VALUE_ERROR_INVALID_ITEM_FOR_OPERATION_ARCHIVE_ITEM = 'ErrorInvalidItemForOperationArchiveItem';
    /**
     * Constant for value 'ErrorInvalidItemForOperationCreateItemAttachment'
     * @return string 'ErrorInvalidItemForOperationCreateItemAttachment'
     */
    const VALUE_ERROR_INVALID_ITEM_FOR_OPERATION_CREATE_ITEM_ATTACHMENT = 'ErrorInvalidItemForOperationCreateItemAttachment';
    /**
     * Constant for value 'ErrorInvalidItemForOperationCreateItem'
     * @return string 'ErrorInvalidItemForOperationCreateItem'
     */
    const VALUE_ERROR_INVALID_ITEM_FOR_OPERATION_CREATE_ITEM = 'ErrorInvalidItemForOperationCreateItem';
    /**
     * Constant for value 'ErrorInvalidItemForOperationAcceptItem'
     * @return string 'ErrorInvalidItemForOperationAcceptItem'
     */
    const VALUE_ERROR_INVALID_ITEM_FOR_OPERATION_ACCEPT_ITEM = 'ErrorInvalidItemForOperationAcceptItem';
    /**
     * Constant for value 'ErrorInvalidItemForOperationDeclineItem'
     * @return string 'ErrorInvalidItemForOperationDeclineItem'
     */
    const VALUE_ERROR_INVALID_ITEM_FOR_OPERATION_DECLINE_ITEM = 'ErrorInvalidItemForOperationDeclineItem';
    /**
     * Constant for value 'ErrorInvalidItemForOperationCancelItem'
     * @return string 'ErrorInvalidItemForOperationCancelItem'
     */
    const VALUE_ERROR_INVALID_ITEM_FOR_OPERATION_CANCEL_ITEM = 'ErrorInvalidItemForOperationCancelItem';
    /**
     * Constant for value 'ErrorInvalidItemForOperationExpandDL'
     * @return string 'ErrorInvalidItemForOperationExpandDL'
     */
    const VALUE_ERROR_INVALID_ITEM_FOR_OPERATION_EXPAND_DL = 'ErrorInvalidItemForOperationExpandDL';
    /**
     * Constant for value 'ErrorInvalidItemForOperationRemoveItem'
     * @return string 'ErrorInvalidItemForOperationRemoveItem'
     */
    const VALUE_ERROR_INVALID_ITEM_FOR_OPERATION_REMOVE_ITEM = 'ErrorInvalidItemForOperationRemoveItem';
    /**
     * Constant for value 'ErrorInvalidItemForOperationSendItem'
     * @return string 'ErrorInvalidItemForOperationSendItem'
     */
    const VALUE_ERROR_INVALID_ITEM_FOR_OPERATION_SEND_ITEM = 'ErrorInvalidItemForOperationSendItem';
    /**
     * Constant for value 'ErrorInvalidItemForOperationTentative'
     * @return string 'ErrorInvalidItemForOperationTentative'
     */
    const VALUE_ERROR_INVALID_ITEM_FOR_OPERATION_TENTATIVE = 'ErrorInvalidItemForOperationTentative';
    /**
     * Constant for value 'ErrorInvalidLogonType'
     * @return string 'ErrorInvalidLogonType'
     */
    const VALUE_ERROR_INVALID_LOGON_TYPE = 'ErrorInvalidLogonType';
    /**
     * Constant for value 'ErrorInvalidLikeRequest'
     * @return string 'ErrorInvalidLikeRequest'
     */
    const VALUE_ERROR_INVALID_LIKE_REQUEST = 'ErrorInvalidLikeRequest';
    /**
     * Constant for value 'ErrorInvalidMailbox'
     * @return string 'ErrorInvalidMailbox'
     */
    const VALUE_ERROR_INVALID_MAILBOX = 'ErrorInvalidMailbox';
    /**
     * Constant for value 'ErrorInvalidManagedFolderProperty'
     * @return string 'ErrorInvalidManagedFolderProperty'
     */
    const VALUE_ERROR_INVALID_MANAGED_FOLDER_PROPERTY = 'ErrorInvalidManagedFolderProperty';
    /**
     * Constant for value 'ErrorInvalidManagedFolderQuota'
     * @return string 'ErrorInvalidManagedFolderQuota'
     */
    const VALUE_ERROR_INVALID_MANAGED_FOLDER_QUOTA = 'ErrorInvalidManagedFolderQuota';
    /**
     * Constant for value 'ErrorInvalidManagedFolderSize'
     * @return string 'ErrorInvalidManagedFolderSize'
     */
    const VALUE_ERROR_INVALID_MANAGED_FOLDER_SIZE = 'ErrorInvalidManagedFolderSize';
    /**
     * Constant for value 'ErrorInvalidMergedFreeBusyInterval'
     * @return string 'ErrorInvalidMergedFreeBusyInterval'
     */
    const VALUE_ERROR_INVALID_MERGED_FREE_BUSY_INTERVAL = 'ErrorInvalidMergedFreeBusyInterval';
    /**
     * Constant for value 'ErrorInvalidNameForNameResolution'
     * @return string 'ErrorInvalidNameForNameResolution'
     */
    const VALUE_ERROR_INVALID_NAME_FOR_NAME_RESOLUTION = 'ErrorInvalidNameForNameResolution';
    /**
     * Constant for value 'ErrorInvalidOperation'
     * @return string 'ErrorInvalidOperation'
     */
    const VALUE_ERROR_INVALID_OPERATION = 'ErrorInvalidOperation';
    /**
     * Constant for value 'ErrorInvalidNetworkServiceContext'
     * @return string 'ErrorInvalidNetworkServiceContext'
     */
    const VALUE_ERROR_INVALID_NETWORK_SERVICE_CONTEXT = 'ErrorInvalidNetworkServiceContext';
    /**
     * Constant for value 'ErrorInvalidOofParameter'
     * @return string 'ErrorInvalidOofParameter'
     */
    const VALUE_ERROR_INVALID_OOF_PARAMETER = 'ErrorInvalidOofParameter';
    /**
     * Constant for value 'ErrorInvalidPagingMaxRows'
     * @return string 'ErrorInvalidPagingMaxRows'
     */
    const VALUE_ERROR_INVALID_PAGING_MAX_ROWS = 'ErrorInvalidPagingMaxRows';
    /**
     * Constant for value 'ErrorInvalidParentFolder'
     * @return string 'ErrorInvalidParentFolder'
     */
    const VALUE_ERROR_INVALID_PARENT_FOLDER = 'ErrorInvalidParentFolder';
    /**
     * Constant for value 'ErrorInvalidPercentCompleteValue'
     * @return string 'ErrorInvalidPercentCompleteValue'
     */
    const VALUE_ERROR_INVALID_PERCENT_COMPLETE_VALUE = 'ErrorInvalidPercentCompleteValue';
    /**
     * Constant for value 'ErrorInvalidPermissionSettings'
     * @return string 'ErrorInvalidPermissionSettings'
     */
    const VALUE_ERROR_INVALID_PERMISSION_SETTINGS = 'ErrorInvalidPermissionSettings';
    /**
     * Constant for value 'ErrorInvalidPhoneCallId'
     * @return string 'ErrorInvalidPhoneCallId'
     */
    const VALUE_ERROR_INVALID_PHONE_CALL_ID = 'ErrorInvalidPhoneCallId';
    /**
     * Constant for value 'ErrorInvalidPhoneNumber'
     * @return string 'ErrorInvalidPhoneNumber'
     */
    const VALUE_ERROR_INVALID_PHONE_NUMBER = 'ErrorInvalidPhoneNumber';
    /**
     * Constant for value 'ErrorInvalidUserInfo'
     * @return string 'ErrorInvalidUserInfo'
     */
    const VALUE_ERROR_INVALID_USER_INFO = 'ErrorInvalidUserInfo';
    /**
     * Constant for value 'ErrorInvalidPropertyAppend'
     * @return string 'ErrorInvalidPropertyAppend'
     */
    const VALUE_ERROR_INVALID_PROPERTY_APPEND = 'ErrorInvalidPropertyAppend';
    /**
     * Constant for value 'ErrorInvalidPropertyDelete'
     * @return string 'ErrorInvalidPropertyDelete'
     */
    const VALUE_ERROR_INVALID_PROPERTY_DELETE = 'ErrorInvalidPropertyDelete';
    /**
     * Constant for value 'ErrorInvalidPropertyForExists'
     * @return string 'ErrorInvalidPropertyForExists'
     */
    const VALUE_ERROR_INVALID_PROPERTY_FOR_EXISTS = 'ErrorInvalidPropertyForExists';
    /**
     * Constant for value 'ErrorInvalidPropertyForOperation'
     * @return string 'ErrorInvalidPropertyForOperation'
     */
    const VALUE_ERROR_INVALID_PROPERTY_FOR_OPERATION = 'ErrorInvalidPropertyForOperation';
    /**
     * Constant for value 'ErrorInvalidPropertyRequest'
     * @return string 'ErrorInvalidPropertyRequest'
     */
    const VALUE_ERROR_INVALID_PROPERTY_REQUEST = 'ErrorInvalidPropertyRequest';
    /**
     * Constant for value 'ErrorInvalidPropertySet'
     * @return string 'ErrorInvalidPropertySet'
     */
    const VALUE_ERROR_INVALID_PROPERTY_SET = 'ErrorInvalidPropertySet';
    /**
     * Constant for value 'ErrorInvalidPropertyUpdateSentMessage'
     * @return string 'ErrorInvalidPropertyUpdateSentMessage'
     */
    const VALUE_ERROR_INVALID_PROPERTY_UPDATE_SENT_MESSAGE = 'ErrorInvalidPropertyUpdateSentMessage';
    /**
     * Constant for value 'ErrorInvalidProxySecurityContext'
     * @return string 'ErrorInvalidProxySecurityContext'
     */
    const VALUE_ERROR_INVALID_PROXY_SECURITY_CONTEXT = 'ErrorInvalidProxySecurityContext';
    /**
     * Constant for value 'ErrorInvalidPullSubscriptionId'
     * @return string 'ErrorInvalidPullSubscriptionId'
     */
    const VALUE_ERROR_INVALID_PULL_SUBSCRIPTION_ID = 'ErrorInvalidPullSubscriptionId';
    /**
     * Constant for value 'ErrorInvalidPushSubscriptionUrl'
     * @return string 'ErrorInvalidPushSubscriptionUrl'
     */
    const VALUE_ERROR_INVALID_PUSH_SUBSCRIPTION_URL = 'ErrorInvalidPushSubscriptionUrl';
    /**
     * Constant for value 'ErrorInvalidRecipients'
     * @return string 'ErrorInvalidRecipients'
     */
    const VALUE_ERROR_INVALID_RECIPIENTS = 'ErrorInvalidRecipients';
    /**
     * Constant for value 'ErrorInvalidRecipientSubfilter'
     * @return string 'ErrorInvalidRecipientSubfilter'
     */
    const VALUE_ERROR_INVALID_RECIPIENT_SUBFILTER = 'ErrorInvalidRecipientSubfilter';
    /**
     * Constant for value 'ErrorInvalidRecipientSubfilterComparison'
     * @return string 'ErrorInvalidRecipientSubfilterComparison'
     */
    const VALUE_ERROR_INVALID_RECIPIENT_SUBFILTER_COMPARISON = 'ErrorInvalidRecipientSubfilterComparison';
    /**
     * Constant for value 'ErrorInvalidRecipientSubfilterOrder'
     * @return string 'ErrorInvalidRecipientSubfilterOrder'
     */
    const VALUE_ERROR_INVALID_RECIPIENT_SUBFILTER_ORDER = 'ErrorInvalidRecipientSubfilterOrder';
    /**
     * Constant for value 'ErrorInvalidRecipientSubfilterTextFilter'
     * @return string 'ErrorInvalidRecipientSubfilterTextFilter'
     */
    const VALUE_ERROR_INVALID_RECIPIENT_SUBFILTER_TEXT_FILTER = 'ErrorInvalidRecipientSubfilterTextFilter';
    /**
     * Constant for value 'ErrorInvalidReferenceItem'
     * @return string 'ErrorInvalidReferenceItem'
     */
    const VALUE_ERROR_INVALID_REFERENCE_ITEM = 'ErrorInvalidReferenceItem';
    /**
     * Constant for value 'ErrorInvalidRequest'
     * @return string 'ErrorInvalidRequest'
     */
    const VALUE_ERROR_INVALID_REQUEST = 'ErrorInvalidRequest';
    /**
     * Constant for value 'ErrorInvalidRestriction'
     * @return string 'ErrorInvalidRestriction'
     */
    const VALUE_ERROR_INVALID_RESTRICTION = 'ErrorInvalidRestriction';
    /**
     * Constant for value 'ErrorInvalidRetentionTagTypeMismatch'
     * @return string 'ErrorInvalidRetentionTagTypeMismatch'
     */
    const VALUE_ERROR_INVALID_RETENTION_TAG_TYPE_MISMATCH = 'ErrorInvalidRetentionTagTypeMismatch';
    /**
     * Constant for value 'ErrorInvalidRetentionTagInvisible'
     * @return string 'ErrorInvalidRetentionTagInvisible'
     */
    const VALUE_ERROR_INVALID_RETENTION_TAG_INVISIBLE = 'ErrorInvalidRetentionTagInvisible';
    /**
     * Constant for value 'ErrorInvalidRetentionTagInheritance'
     * @return string 'ErrorInvalidRetentionTagInheritance'
     */
    const VALUE_ERROR_INVALID_RETENTION_TAG_INHERITANCE = 'ErrorInvalidRetentionTagInheritance';
    /**
     * Constant for value 'ErrorInvalidRetentionTagIdGuid'
     * @return string 'ErrorInvalidRetentionTagIdGuid'
     */
    const VALUE_ERROR_INVALID_RETENTION_TAG_ID_GUID = 'ErrorInvalidRetentionTagIdGuid';
    /**
     * Constant for value 'ErrorInvalidRoutingType'
     * @return string 'ErrorInvalidRoutingType'
     */
    const VALUE_ERROR_INVALID_ROUTING_TYPE = 'ErrorInvalidRoutingType';
    /**
     * Constant for value 'ErrorInvalidScheduledOofDuration'
     * @return string 'ErrorInvalidScheduledOofDuration'
     */
    const VALUE_ERROR_INVALID_SCHEDULED_OOF_DURATION = 'ErrorInvalidScheduledOofDuration';
    /**
     * Constant for value 'ErrorInvalidSchemaVersionForMailboxVersion'
     * @return string 'ErrorInvalidSchemaVersionForMailboxVersion'
     */
    const VALUE_ERROR_INVALID_SCHEMA_VERSION_FOR_MAILBOX_VERSION = 'ErrorInvalidSchemaVersionForMailboxVersion';
    /**
     * Constant for value 'ErrorInvalidSecurityDescriptor'
     * @return string 'ErrorInvalidSecurityDescriptor'
     */
    const VALUE_ERROR_INVALID_SECURITY_DESCRIPTOR = 'ErrorInvalidSecurityDescriptor';
    /**
     * Constant for value 'ErrorInvalidSendItemSaveSettings'
     * @return string 'ErrorInvalidSendItemSaveSettings'
     */
    const VALUE_ERROR_INVALID_SEND_ITEM_SAVE_SETTINGS = 'ErrorInvalidSendItemSaveSettings';
    /**
     * Constant for value 'ErrorInvalidSerializedAccessToken'
     * @return string 'ErrorInvalidSerializedAccessToken'
     */
    const VALUE_ERROR_INVALID_SERIALIZED_ACCESS_TOKEN = 'ErrorInvalidSerializedAccessToken';
    /**
     * Constant for value 'ErrorInvalidServerVersion'
     * @return string 'ErrorInvalidServerVersion'
     */
    const VALUE_ERROR_INVALID_SERVER_VERSION = 'ErrorInvalidServerVersion';
    /**
     * Constant for value 'ErrorInvalidSid'
     * @return string 'ErrorInvalidSid'
     */
    const VALUE_ERROR_INVALID_SID = 'ErrorInvalidSid';
    /**
     * Constant for value 'ErrorInvalidSIPUri'
     * @return string 'ErrorInvalidSIPUri'
     */
    const VALUE_ERROR_INVALID_SIPURI = 'ErrorInvalidSIPUri';
    /**
     * Constant for value 'ErrorInvalidSmtpAddress'
     * @return string 'ErrorInvalidSmtpAddress'
     */
    const VALUE_ERROR_INVALID_SMTP_ADDRESS = 'ErrorInvalidSmtpAddress';
    /**
     * Constant for value 'ErrorInvalidSubfilterType'
     * @return string 'ErrorInvalidSubfilterType'
     */
    const VALUE_ERROR_INVALID_SUBFILTER_TYPE = 'ErrorInvalidSubfilterType';
    /**
     * Constant for value 'ErrorInvalidSubfilterTypeNotAttendeeType'
     * @return string 'ErrorInvalidSubfilterTypeNotAttendeeType'
     */
    const VALUE_ERROR_INVALID_SUBFILTER_TYPE_NOT_ATTENDEE_TYPE = 'ErrorInvalidSubfilterTypeNotAttendeeType';
    /**
     * Constant for value 'ErrorInvalidSubfilterTypeNotRecipientType'
     * @return string 'ErrorInvalidSubfilterTypeNotRecipientType'
     */
    const VALUE_ERROR_INVALID_SUBFILTER_TYPE_NOT_RECIPIENT_TYPE = 'ErrorInvalidSubfilterTypeNotRecipientType';
    /**
     * Constant for value 'ErrorInvalidSubscription'
     * @return string 'ErrorInvalidSubscription'
     */
    const VALUE_ERROR_INVALID_SUBSCRIPTION = 'ErrorInvalidSubscription';
    /**
     * Constant for value 'ErrorInvalidSubscriptionRequest'
     * @return string 'ErrorInvalidSubscriptionRequest'
     */
    const VALUE_ERROR_INVALID_SUBSCRIPTION_REQUEST = 'ErrorInvalidSubscriptionRequest';
    /**
     * Constant for value 'ErrorInvalidSyncStateData'
     * @return string 'ErrorInvalidSyncStateData'
     */
    const VALUE_ERROR_INVALID_SYNC_STATE_DATA = 'ErrorInvalidSyncStateData';
    /**
     * Constant for value 'ErrorInvalidTimeInterval'
     * @return string 'ErrorInvalidTimeInterval'
     */
    const VALUE_ERROR_INVALID_TIME_INTERVAL = 'ErrorInvalidTimeInterval';
    /**
     * Constant for value 'ErrorInvalidUserOofSettings'
     * @return string 'ErrorInvalidUserOofSettings'
     */
    const VALUE_ERROR_INVALID_USER_OOF_SETTINGS = 'ErrorInvalidUserOofSettings';
    /**
     * Constant for value 'ErrorInvalidUserPrincipalName'
     * @return string 'ErrorInvalidUserPrincipalName'
     */
    const VALUE_ERROR_INVALID_USER_PRINCIPAL_NAME = 'ErrorInvalidUserPrincipalName';
    /**
     * Constant for value 'ErrorInvalidUserSid'
     * @return string 'ErrorInvalidUserSid'
     */
    const VALUE_ERROR_INVALID_USER_SID = 'ErrorInvalidUserSid';
    /**
     * Constant for value 'ErrorInvalidUserSidMissingUPN'
     * @return string 'ErrorInvalidUserSidMissingUPN'
     */
    const VALUE_ERROR_INVALID_USER_SID_MISSING_UPN = 'ErrorInvalidUserSidMissingUPN';
    /**
     * Constant for value 'ErrorInvalidValueForProperty'
     * @return string 'ErrorInvalidValueForProperty'
     */
    const VALUE_ERROR_INVALID_VALUE_FOR_PROPERTY = 'ErrorInvalidValueForProperty';
    /**
     * Constant for value 'ErrorInvalidWatermark'
     * @return string 'ErrorInvalidWatermark'
     */
    const VALUE_ERROR_INVALID_WATERMARK = 'ErrorInvalidWatermark';
    /**
     * Constant for value 'ErrorIPGatewayNotFound'
     * @return string 'ErrorIPGatewayNotFound'
     */
    const VALUE_ERROR_IPGATEWAY_NOT_FOUND = 'ErrorIPGatewayNotFound';
    /**
     * Constant for value 'ErrorIrresolvableConflict'
     * @return string 'ErrorIrresolvableConflict'
     */
    const VALUE_ERROR_IRRESOLVABLE_CONFLICT = 'ErrorIrresolvableConflict';
    /**
     * Constant for value 'ErrorItemCorrupt'
     * @return string 'ErrorItemCorrupt'
     */
    const VALUE_ERROR_ITEM_CORRUPT = 'ErrorItemCorrupt';
    /**
     * Constant for value 'ErrorItemNotFound'
     * @return string 'ErrorItemNotFound'
     */
    const VALUE_ERROR_ITEM_NOT_FOUND = 'ErrorItemNotFound';
    /**
     * Constant for value 'ErrorItemPropertyRequestFailed'
     * @return string 'ErrorItemPropertyRequestFailed'
     */
    const VALUE_ERROR_ITEM_PROPERTY_REQUEST_FAILED = 'ErrorItemPropertyRequestFailed';
    /**
     * Constant for value 'ErrorItemSave'
     * @return string 'ErrorItemSave'
     */
    const VALUE_ERROR_ITEM_SAVE = 'ErrorItemSave';
    /**
     * Constant for value 'ErrorItemSavePropertyError'
     * @return string 'ErrorItemSavePropertyError'
     */
    const VALUE_ERROR_ITEM_SAVE_PROPERTY_ERROR = 'ErrorItemSavePropertyError';
    /**
     * Constant for value 'ErrorLegacyMailboxFreeBusyViewTypeNotMerged'
     * @return string 'ErrorLegacyMailboxFreeBusyViewTypeNotMerged'
     */
    const VALUE_ERROR_LEGACY_MAILBOX_FREE_BUSY_VIEW_TYPE_NOT_MERGED = 'ErrorLegacyMailboxFreeBusyViewTypeNotMerged';
    /**
     * Constant for value 'ErrorLocalServerObjectNotFound'
     * @return string 'ErrorLocalServerObjectNotFound'
     */
    const VALUE_ERROR_LOCAL_SERVER_OBJECT_NOT_FOUND = 'ErrorLocalServerObjectNotFound';
    /**
     * Constant for value 'ErrorLogonAsNetworkServiceFailed'
     * @return string 'ErrorLogonAsNetworkServiceFailed'
     */
    const VALUE_ERROR_LOGON_AS_NETWORK_SERVICE_FAILED = 'ErrorLogonAsNetworkServiceFailed';
    /**
     * Constant for value 'ErrorMailboxConfiguration'
     * @return string 'ErrorMailboxConfiguration'
     */
    const VALUE_ERROR_MAILBOX_CONFIGURATION = 'ErrorMailboxConfiguration';
    /**
     * Constant for value 'ErrorMailboxDataArrayEmpty'
     * @return string 'ErrorMailboxDataArrayEmpty'
     */
    const VALUE_ERROR_MAILBOX_DATA_ARRAY_EMPTY = 'ErrorMailboxDataArrayEmpty';
    /**
     * Constant for value 'ErrorMailboxDataArrayTooBig'
     * @return string 'ErrorMailboxDataArrayTooBig'
     */
    const VALUE_ERROR_MAILBOX_DATA_ARRAY_TOO_BIG = 'ErrorMailboxDataArrayTooBig';
    /**
     * Constant for value 'ErrorMailboxHoldNotFound'
     * @return string 'ErrorMailboxHoldNotFound'
     */
    const VALUE_ERROR_MAILBOX_HOLD_NOT_FOUND = 'ErrorMailboxHoldNotFound';
    /**
     * Constant for value 'ErrorMailboxLogonFailed'
     * @return string 'ErrorMailboxLogonFailed'
     */
    const VALUE_ERROR_MAILBOX_LOGON_FAILED = 'ErrorMailboxLogonFailed';
    /**
     * Constant for value 'ErrorMailboxMoveInProgress'
     * @return string 'ErrorMailboxMoveInProgress'
     */
    const VALUE_ERROR_MAILBOX_MOVE_IN_PROGRESS = 'ErrorMailboxMoveInProgress';
    /**
     * Constant for value 'ErrorMailboxStoreUnavailable'
     * @return string 'ErrorMailboxStoreUnavailable'
     */
    const VALUE_ERROR_MAILBOX_STORE_UNAVAILABLE = 'ErrorMailboxStoreUnavailable';
    /**
     * Constant for value 'ErrorMailRecipientNotFound'
     * @return string 'ErrorMailRecipientNotFound'
     */
    const VALUE_ERROR_MAIL_RECIPIENT_NOT_FOUND = 'ErrorMailRecipientNotFound';
    /**
     * Constant for value 'ErrorMailTipsDisabled'
     * @return string 'ErrorMailTipsDisabled'
     */
    const VALUE_ERROR_MAIL_TIPS_DISABLED = 'ErrorMailTipsDisabled';
    /**
     * Constant for value 'ErrorManagedFolderAlreadyExists'
     * @return string 'ErrorManagedFolderAlreadyExists'
     */
    const VALUE_ERROR_MANAGED_FOLDER_ALREADY_EXISTS = 'ErrorManagedFolderAlreadyExists';
    /**
     * Constant for value 'ErrorManagedFolderNotFound'
     * @return string 'ErrorManagedFolderNotFound'
     */
    const VALUE_ERROR_MANAGED_FOLDER_NOT_FOUND = 'ErrorManagedFolderNotFound';
    /**
     * Constant for value 'ErrorManagedFoldersRootFailure'
     * @return string 'ErrorManagedFoldersRootFailure'
     */
    const VALUE_ERROR_MANAGED_FOLDERS_ROOT_FAILURE = 'ErrorManagedFoldersRootFailure';
    /**
     * Constant for value 'ErrorMeetingSuggestionGenerationFailed'
     * @return string 'ErrorMeetingSuggestionGenerationFailed'
     */
    const VALUE_ERROR_MEETING_SUGGESTION_GENERATION_FAILED = 'ErrorMeetingSuggestionGenerationFailed';
    /**
     * Constant for value 'ErrorMessageDispositionRequired'
     * @return string 'ErrorMessageDispositionRequired'
     */
    const VALUE_ERROR_MESSAGE_DISPOSITION_REQUIRED = 'ErrorMessageDispositionRequired';
    /**
     * Constant for value 'ErrorMessageSizeExceeded'
     * @return string 'ErrorMessageSizeExceeded'
     */
    const VALUE_ERROR_MESSAGE_SIZE_EXCEEDED = 'ErrorMessageSizeExceeded';
    /**
     * Constant for value 'ErrorMimeContentConversionFailed'
     * @return string 'ErrorMimeContentConversionFailed'
     */
    const VALUE_ERROR_MIME_CONTENT_CONVERSION_FAILED = 'ErrorMimeContentConversionFailed';
    /**
     * Constant for value 'ErrorMimeContentInvalid'
     * @return string 'ErrorMimeContentInvalid'
     */
    const VALUE_ERROR_MIME_CONTENT_INVALID = 'ErrorMimeContentInvalid';
    /**
     * Constant for value 'ErrorMimeContentInvalidBase64String'
     * @return string 'ErrorMimeContentInvalidBase64String'
     */
    const VALUE_ERROR_MIME_CONTENT_INVALID_BASE_64_STRING = 'ErrorMimeContentInvalidBase64String';
    /**
     * Constant for value 'ErrorMissingArgument'
     * @return string 'ErrorMissingArgument'
     */
    const VALUE_ERROR_MISSING_ARGUMENT = 'ErrorMissingArgument';
    /**
     * Constant for value 'ErrorMissingEmailAddress'
     * @return string 'ErrorMissingEmailAddress'
     */
    const VALUE_ERROR_MISSING_EMAIL_ADDRESS = 'ErrorMissingEmailAddress';
    /**
     * Constant for value 'ErrorMissingEmailAddressForManagedFolder'
     * @return string 'ErrorMissingEmailAddressForManagedFolder'
     */
    const VALUE_ERROR_MISSING_EMAIL_ADDRESS_FOR_MANAGED_FOLDER = 'ErrorMissingEmailAddressForManagedFolder';
    /**
     * Constant for value 'ErrorMissingInformationEmailAddress'
     * @return string 'ErrorMissingInformationEmailAddress'
     */
    const VALUE_ERROR_MISSING_INFORMATION_EMAIL_ADDRESS = 'ErrorMissingInformationEmailAddress';
    /**
     * Constant for value 'ErrorMissingInformationReferenceItemId'
     * @return string 'ErrorMissingInformationReferenceItemId'
     */
    const VALUE_ERROR_MISSING_INFORMATION_REFERENCE_ITEM_ID = 'ErrorMissingInformationReferenceItemId';
    /**
     * Constant for value 'ErrorMissingItemForCreateItemAttachment'
     * @return string 'ErrorMissingItemForCreateItemAttachment'
     */
    const VALUE_ERROR_MISSING_ITEM_FOR_CREATE_ITEM_ATTACHMENT = 'ErrorMissingItemForCreateItemAttachment';
    /**
     * Constant for value 'ErrorMissingManagedFolderId'
     * @return string 'ErrorMissingManagedFolderId'
     */
    const VALUE_ERROR_MISSING_MANAGED_FOLDER_ID = 'ErrorMissingManagedFolderId';
    /**
     * Constant for value 'ErrorMissingRecipients'
     * @return string 'ErrorMissingRecipients'
     */
    const VALUE_ERROR_MISSING_RECIPIENTS = 'ErrorMissingRecipients';
    /**
     * Constant for value 'ErrorMissingUserIdInformation'
     * @return string 'ErrorMissingUserIdInformation'
     */
    const VALUE_ERROR_MISSING_USER_ID_INFORMATION = 'ErrorMissingUserIdInformation';
    /**
     * Constant for value 'ErrorMoreThanOneAccessModeSpecified'
     * @return string 'ErrorMoreThanOneAccessModeSpecified'
     */
    const VALUE_ERROR_MORE_THAN_ONE_ACCESS_MODE_SPECIFIED = 'ErrorMoreThanOneAccessModeSpecified';
    /**
     * Constant for value 'ErrorMoveCopyFailed'
     * @return string 'ErrorMoveCopyFailed'
     */
    const VALUE_ERROR_MOVE_COPY_FAILED = 'ErrorMoveCopyFailed';
    /**
     * Constant for value 'ErrorMoveDistinguishedFolder'
     * @return string 'ErrorMoveDistinguishedFolder'
     */
    const VALUE_ERROR_MOVE_DISTINGUISHED_FOLDER = 'ErrorMoveDistinguishedFolder';
    /**
     * Constant for value 'ErrorMultiLegacyMailboxAccess'
     * @return string 'ErrorMultiLegacyMailboxAccess'
     */
    const VALUE_ERROR_MULTI_LEGACY_MAILBOX_ACCESS = 'ErrorMultiLegacyMailboxAccess';
    /**
     * Constant for value 'ErrorNameResolutionMultipleResults'
     * @return string 'ErrorNameResolutionMultipleResults'
     */
    const VALUE_ERROR_NAME_RESOLUTION_MULTIPLE_RESULTS = 'ErrorNameResolutionMultipleResults';
    /**
     * Constant for value 'ErrorNameResolutionNoMailbox'
     * @return string 'ErrorNameResolutionNoMailbox'
     */
    const VALUE_ERROR_NAME_RESOLUTION_NO_MAILBOX = 'ErrorNameResolutionNoMailbox';
    /**
     * Constant for value 'ErrorNameResolutionNoResults'
     * @return string 'ErrorNameResolutionNoResults'
     */
    const VALUE_ERROR_NAME_RESOLUTION_NO_RESULTS = 'ErrorNameResolutionNoResults';
    /**
     * Constant for value 'ErrorNewChannelConnectionOpened'
     * @return string 'ErrorNewChannelConnectionOpened'
     */
    const VALUE_ERROR_NEW_CHANNEL_CONNECTION_OPENED = 'ErrorNewChannelConnectionOpened';
    /**
     * Constant for value 'ErrorNoApplicableProxyCASServersAvailable'
     * @return string 'ErrorNoApplicableProxyCASServersAvailable'
     */
    const VALUE_ERROR_NO_APPLICABLE_PROXY_CASSERVERS_AVAILABLE = 'ErrorNoApplicableProxyCASServersAvailable';
    /**
     * Constant for value 'ErrorNoCalendar'
     * @return string 'ErrorNoCalendar'
     */
    const VALUE_ERROR_NO_CALENDAR = 'ErrorNoCalendar';
    /**
     * Constant for value 'ErrorNoDestinationCASDueToKerberosRequirements'
     * @return string 'ErrorNoDestinationCASDueToKerberosRequirements'
     */
    const VALUE_ERROR_NO_DESTINATION_CASDUE_TO_KERBEROS_REQUIREMENTS = 'ErrorNoDestinationCASDueToKerberosRequirements';
    /**
     * Constant for value 'ErrorNoDestinationCASDueToSSLRequirements'
     * @return string 'ErrorNoDestinationCASDueToSSLRequirements'
     */
    const VALUE_ERROR_NO_DESTINATION_CASDUE_TO_SSLREQUIREMENTS = 'ErrorNoDestinationCASDueToSSLRequirements';
    /**
     * Constant for value 'ErrorNoDestinationCASDueToVersionMismatch'
     * @return string 'ErrorNoDestinationCASDueToVersionMismatch'
     */
    const VALUE_ERROR_NO_DESTINATION_CASDUE_TO_VERSION_MISMATCH = 'ErrorNoDestinationCASDueToVersionMismatch';
    /**
     * Constant for value 'ErrorNoFolderClassOverride'
     * @return string 'ErrorNoFolderClassOverride'
     */
    const VALUE_ERROR_NO_FOLDER_CLASS_OVERRIDE = 'ErrorNoFolderClassOverride';
    /**
     * Constant for value 'ErrorNoFreeBusyAccess'
     * @return string 'ErrorNoFreeBusyAccess'
     */
    const VALUE_ERROR_NO_FREE_BUSY_ACCESS = 'ErrorNoFreeBusyAccess';
    /**
     * Constant for value 'ErrorNonExistentMailbox'
     * @return string 'ErrorNonExistentMailbox'
     */
    const VALUE_ERROR_NON_EXISTENT_MAILBOX = 'ErrorNonExistentMailbox';
    /**
     * Constant for value 'ErrorNonPrimarySmtpAddress'
     * @return string 'ErrorNonPrimarySmtpAddress'
     */
    const VALUE_ERROR_NON_PRIMARY_SMTP_ADDRESS = 'ErrorNonPrimarySmtpAddress';
    /**
     * Constant for value 'ErrorNoPropertyTagForCustomProperties'
     * @return string 'ErrorNoPropertyTagForCustomProperties'
     */
    const VALUE_ERROR_NO_PROPERTY_TAG_FOR_CUSTOM_PROPERTIES = 'ErrorNoPropertyTagForCustomProperties';
    /**
     * Constant for value 'ErrorNoPublicFolderReplicaAvailable'
     * @return string 'ErrorNoPublicFolderReplicaAvailable'
     */
    const VALUE_ERROR_NO_PUBLIC_FOLDER_REPLICA_AVAILABLE = 'ErrorNoPublicFolderReplicaAvailable';
    /**
     * Constant for value 'ErrorNoPublicFolderServerAvailable'
     * @return string 'ErrorNoPublicFolderServerAvailable'
     */
    const VALUE_ERROR_NO_PUBLIC_FOLDER_SERVER_AVAILABLE = 'ErrorNoPublicFolderServerAvailable';
    /**
     * Constant for value 'ErrorNoRespondingCASInDestinationSite'
     * @return string 'ErrorNoRespondingCASInDestinationSite'
     */
    const VALUE_ERROR_NO_RESPONDING_CASIN_DESTINATION_SITE = 'ErrorNoRespondingCASInDestinationSite';
    /**
     * Constant for value 'ErrorNotDelegate'
     * @return string 'ErrorNotDelegate'
     */
    const VALUE_ERROR_NOT_DELEGATE = 'ErrorNotDelegate';
    /**
     * Constant for value 'ErrorNotEnoughMemory'
     * @return string 'ErrorNotEnoughMemory'
     */
    const VALUE_ERROR_NOT_ENOUGH_MEMORY = 'ErrorNotEnoughMemory';
    /**
     * Constant for value 'ErrorObjectTypeChanged'
     * @return string 'ErrorObjectTypeChanged'
     */
    const VALUE_ERROR_OBJECT_TYPE_CHANGED = 'ErrorObjectTypeChanged';
    /**
     * Constant for value 'ErrorOccurrenceCrossingBoundary'
     * @return string 'ErrorOccurrenceCrossingBoundary'
     */
    const VALUE_ERROR_OCCURRENCE_CROSSING_BOUNDARY = 'ErrorOccurrenceCrossingBoundary';
    /**
     * Constant for value 'ErrorOccurrenceTimeSpanTooBig'
     * @return string 'ErrorOccurrenceTimeSpanTooBig'
     */
    const VALUE_ERROR_OCCURRENCE_TIME_SPAN_TOO_BIG = 'ErrorOccurrenceTimeSpanTooBig';
    /**
     * Constant for value 'ErrorOperationNotAllowedWithPublicFolderRoot'
     * @return string 'ErrorOperationNotAllowedWithPublicFolderRoot'
     */
    const VALUE_ERROR_OPERATION_NOT_ALLOWED_WITH_PUBLIC_FOLDER_ROOT = 'ErrorOperationNotAllowedWithPublicFolderRoot';
    /**
     * Constant for value 'ErrorParentFolderIdRequired'
     * @return string 'ErrorParentFolderIdRequired'
     */
    const VALUE_ERROR_PARENT_FOLDER_ID_REQUIRED = 'ErrorParentFolderIdRequired';
    /**
     * Constant for value 'ErrorParentFolderNotFound'
     * @return string 'ErrorParentFolderNotFound'
     */
    const VALUE_ERROR_PARENT_FOLDER_NOT_FOUND = 'ErrorParentFolderNotFound';
    /**
     * Constant for value 'ErrorPasswordChangeRequired'
     * @return string 'ErrorPasswordChangeRequired'
     */
    const VALUE_ERROR_PASSWORD_CHANGE_REQUIRED = 'ErrorPasswordChangeRequired';
    /**
     * Constant for value 'ErrorPasswordExpired'
     * @return string 'ErrorPasswordExpired'
     */
    const VALUE_ERROR_PASSWORD_EXPIRED = 'ErrorPasswordExpired';
    /**
     * Constant for value 'ErrorPhoneNumberNotDialable'
     * @return string 'ErrorPhoneNumberNotDialable'
     */
    const VALUE_ERROR_PHONE_NUMBER_NOT_DIALABLE = 'ErrorPhoneNumberNotDialable';
    /**
     * Constant for value 'ErrorPropertyUpdate'
     * @return string 'ErrorPropertyUpdate'
     */
    const VALUE_ERROR_PROPERTY_UPDATE = 'ErrorPropertyUpdate';
    /**
     * Constant for value 'ErrorPromptPublishingOperationFailed'
     * @return string 'ErrorPromptPublishingOperationFailed'
     */
    const VALUE_ERROR_PROMPT_PUBLISHING_OPERATION_FAILED = 'ErrorPromptPublishingOperationFailed';
    /**
     * Constant for value 'ErrorPropertyValidationFailure'
     * @return string 'ErrorPropertyValidationFailure'
     */
    const VALUE_ERROR_PROPERTY_VALIDATION_FAILURE = 'ErrorPropertyValidationFailure';
    /**
     * Constant for value 'ErrorProxiedSubscriptionCallFailure'
     * @return string 'ErrorProxiedSubscriptionCallFailure'
     */
    const VALUE_ERROR_PROXIED_SUBSCRIPTION_CALL_FAILURE = 'ErrorProxiedSubscriptionCallFailure';
    /**
     * Constant for value 'ErrorProxyCallFailed'
     * @return string 'ErrorProxyCallFailed'
     */
    const VALUE_ERROR_PROXY_CALL_FAILED = 'ErrorProxyCallFailed';
    /**
     * Constant for value 'ErrorProxyGroupSidLimitExceeded'
     * @return string 'ErrorProxyGroupSidLimitExceeded'
     */
    const VALUE_ERROR_PROXY_GROUP_SID_LIMIT_EXCEEDED = 'ErrorProxyGroupSidLimitExceeded';
    /**
     * Constant for value 'ErrorProxyRequestNotAllowed'
     * @return string 'ErrorProxyRequestNotAllowed'
     */
    const VALUE_ERROR_PROXY_REQUEST_NOT_ALLOWED = 'ErrorProxyRequestNotAllowed';
    /**
     * Constant for value 'ErrorProxyRequestProcessingFailed'
     * @return string 'ErrorProxyRequestProcessingFailed'
     */
    const VALUE_ERROR_PROXY_REQUEST_PROCESSING_FAILED = 'ErrorProxyRequestProcessingFailed';
    /**
     * Constant for value 'ErrorProxyServiceDiscoveryFailed'
     * @return string 'ErrorProxyServiceDiscoveryFailed'
     */
    const VALUE_ERROR_PROXY_SERVICE_DISCOVERY_FAILED = 'ErrorProxyServiceDiscoveryFailed';
    /**
     * Constant for value 'ErrorProxyTokenExpired'
     * @return string 'ErrorProxyTokenExpired'
     */
    const VALUE_ERROR_PROXY_TOKEN_EXPIRED = 'ErrorProxyTokenExpired';
    /**
     * Constant for value 'ErrorPublicFolderMailboxDiscoveryFailed'
     * @return string 'ErrorPublicFolderMailboxDiscoveryFailed'
     */
    const VALUE_ERROR_PUBLIC_FOLDER_MAILBOX_DISCOVERY_FAILED = 'ErrorPublicFolderMailboxDiscoveryFailed';
    /**
     * Constant for value 'ErrorPublicFolderOperationFailed'
     * @return string 'ErrorPublicFolderOperationFailed'
     */
    const VALUE_ERROR_PUBLIC_FOLDER_OPERATION_FAILED = 'ErrorPublicFolderOperationFailed';
    /**
     * Constant for value 'ErrorPublicFolderRequestProcessingFailed'
     * @return string 'ErrorPublicFolderRequestProcessingFailed'
     */
    const VALUE_ERROR_PUBLIC_FOLDER_REQUEST_PROCESSING_FAILED = 'ErrorPublicFolderRequestProcessingFailed';
    /**
     * Constant for value 'ErrorPublicFolderServerNotFound'
     * @return string 'ErrorPublicFolderServerNotFound'
     */
    const VALUE_ERROR_PUBLIC_FOLDER_SERVER_NOT_FOUND = 'ErrorPublicFolderServerNotFound';
    /**
     * Constant for value 'ErrorPublicFolderSyncException'
     * @return string 'ErrorPublicFolderSyncException'
     */
    const VALUE_ERROR_PUBLIC_FOLDER_SYNC_EXCEPTION = 'ErrorPublicFolderSyncException';
    /**
     * Constant for value 'ErrorQueryFilterTooLong'
     * @return string 'ErrorQueryFilterTooLong'
     */
    const VALUE_ERROR_QUERY_FILTER_TOO_LONG = 'ErrorQueryFilterTooLong';
    /**
     * Constant for value 'ErrorQuotaExceeded'
     * @return string 'ErrorQuotaExceeded'
     */
    const VALUE_ERROR_QUOTA_EXCEEDED = 'ErrorQuotaExceeded';
    /**
     * Constant for value 'ErrorReadEventsFailed'
     * @return string 'ErrorReadEventsFailed'
     */
    const VALUE_ERROR_READ_EVENTS_FAILED = 'ErrorReadEventsFailed';
    /**
     * Constant for value 'ErrorReadReceiptNotPending'
     * @return string 'ErrorReadReceiptNotPending'
     */
    const VALUE_ERROR_READ_RECEIPT_NOT_PENDING = 'ErrorReadReceiptNotPending';
    /**
     * Constant for value 'ErrorRecurrenceEndDateTooBig'
     * @return string 'ErrorRecurrenceEndDateTooBig'
     */
    const VALUE_ERROR_RECURRENCE_END_DATE_TOO_BIG = 'ErrorRecurrenceEndDateTooBig';
    /**
     * Constant for value 'ErrorRecurrenceHasNoOccurrence'
     * @return string 'ErrorRecurrenceHasNoOccurrence'
     */
    const VALUE_ERROR_RECURRENCE_HAS_NO_OCCURRENCE = 'ErrorRecurrenceHasNoOccurrence';
    /**
     * Constant for value 'ErrorRemoveDelegatesFailed'
     * @return string 'ErrorRemoveDelegatesFailed'
     */
    const VALUE_ERROR_REMOVE_DELEGATES_FAILED = 'ErrorRemoveDelegatesFailed';
    /**
     * Constant for value 'ErrorRequestAborted'
     * @return string 'ErrorRequestAborted'
     */
    const VALUE_ERROR_REQUEST_ABORTED = 'ErrorRequestAborted';
    /**
     * Constant for value 'ErrorRequestStreamTooBig'
     * @return string 'ErrorRequestStreamTooBig'
     */
    const VALUE_ERROR_REQUEST_STREAM_TOO_BIG = 'ErrorRequestStreamTooBig';
    /**
     * Constant for value 'ErrorRequiredPropertyMissing'
     * @return string 'ErrorRequiredPropertyMissing'
     */
    const VALUE_ERROR_REQUIRED_PROPERTY_MISSING = 'ErrorRequiredPropertyMissing';
    /**
     * Constant for value 'ErrorResolveNamesInvalidFolderType'
     * @return string 'ErrorResolveNamesInvalidFolderType'
     */
    const VALUE_ERROR_RESOLVE_NAMES_INVALID_FOLDER_TYPE = 'ErrorResolveNamesInvalidFolderType';
    /**
     * Constant for value 'ErrorResolveNamesOnlyOneContactsFolderAllowed'
     * @return string 'ErrorResolveNamesOnlyOneContactsFolderAllowed'
     */
    const VALUE_ERROR_RESOLVE_NAMES_ONLY_ONE_CONTACTS_FOLDER_ALLOWED = 'ErrorResolveNamesOnlyOneContactsFolderAllowed';
    /**
     * Constant for value 'ErrorResponseSchemaValidation'
     * @return string 'ErrorResponseSchemaValidation'
     */
    const VALUE_ERROR_RESPONSE_SCHEMA_VALIDATION = 'ErrorResponseSchemaValidation';
    /**
     * Constant for value 'ErrorRestrictionTooLong'
     * @return string 'ErrorRestrictionTooLong'
     */
    const VALUE_ERROR_RESTRICTION_TOO_LONG = 'ErrorRestrictionTooLong';
    /**
     * Constant for value 'ErrorRestrictionTooComplex'
     * @return string 'ErrorRestrictionTooComplex'
     */
    const VALUE_ERROR_RESTRICTION_TOO_COMPLEX = 'ErrorRestrictionTooComplex';
    /**
     * Constant for value 'ErrorResultSetTooBig'
     * @return string 'ErrorResultSetTooBig'
     */
    const VALUE_ERROR_RESULT_SET_TOO_BIG = 'ErrorResultSetTooBig';
    /**
     * Constant for value 'ErrorInvalidExchangeImpersonationHeaderData'
     * @return string 'ErrorInvalidExchangeImpersonationHeaderData'
     */
    const VALUE_ERROR_INVALID_EXCHANGE_IMPERSONATION_HEADER_DATA = 'ErrorInvalidExchangeImpersonationHeaderData';
    /**
     * Constant for value 'ErrorSavedItemFolderNotFound'
     * @return string 'ErrorSavedItemFolderNotFound'
     */
    const VALUE_ERROR_SAVED_ITEM_FOLDER_NOT_FOUND = 'ErrorSavedItemFolderNotFound';
    /**
     * Constant for value 'ErrorSchemaValidation'
     * @return string 'ErrorSchemaValidation'
     */
    const VALUE_ERROR_SCHEMA_VALIDATION = 'ErrorSchemaValidation';
    /**
     * Constant for value 'ErrorSearchFolderNotInitialized'
     * @return string 'ErrorSearchFolderNotInitialized'
     */
    const VALUE_ERROR_SEARCH_FOLDER_NOT_INITIALIZED = 'ErrorSearchFolderNotInitialized';
    /**
     * Constant for value 'ErrorSendAsDenied'
     * @return string 'ErrorSendAsDenied'
     */
    const VALUE_ERROR_SEND_AS_DENIED = 'ErrorSendAsDenied';
    /**
     * Constant for value 'ErrorSendMeetingCancellationsRequired'
     * @return string 'ErrorSendMeetingCancellationsRequired'
     */
    const VALUE_ERROR_SEND_MEETING_CANCELLATIONS_REQUIRED = 'ErrorSendMeetingCancellationsRequired';
    /**
     * Constant for value 'ErrorSendMeetingInvitationsOrCancellationsRequired'
     * @return string 'ErrorSendMeetingInvitationsOrCancellationsRequired'
     */
    const VALUE_ERROR_SEND_MEETING_INVITATIONS_OR_CANCELLATIONS_REQUIRED = 'ErrorSendMeetingInvitationsOrCancellationsRequired';
    /**
     * Constant for value 'ErrorSendMeetingInvitationsRequired'
     * @return string 'ErrorSendMeetingInvitationsRequired'
     */
    const VALUE_ERROR_SEND_MEETING_INVITATIONS_REQUIRED = 'ErrorSendMeetingInvitationsRequired';
    /**
     * Constant for value 'ErrorSentMeetingRequestUpdate'
     * @return string 'ErrorSentMeetingRequestUpdate'
     */
    const VALUE_ERROR_SENT_MEETING_REQUEST_UPDATE = 'ErrorSentMeetingRequestUpdate';
    /**
     * Constant for value 'ErrorSentTaskRequestUpdate'
     * @return string 'ErrorSentTaskRequestUpdate'
     */
    const VALUE_ERROR_SENT_TASK_REQUEST_UPDATE = 'ErrorSentTaskRequestUpdate';
    /**
     * Constant for value 'ErrorServerBusy'
     * @return string 'ErrorServerBusy'
     */
    const VALUE_ERROR_SERVER_BUSY = 'ErrorServerBusy';
    /**
     * Constant for value 'ErrorServiceDiscoveryFailed'
     * @return string 'ErrorServiceDiscoveryFailed'
     */
    const VALUE_ERROR_SERVICE_DISCOVERY_FAILED = 'ErrorServiceDiscoveryFailed';
    /**
     * Constant for value 'ErrorStaleObject'
     * @return string 'ErrorStaleObject'
     */
    const VALUE_ERROR_STALE_OBJECT = 'ErrorStaleObject';
    /**
     * Constant for value 'ErrorSubmissionQuotaExceeded'
     * @return string 'ErrorSubmissionQuotaExceeded'
     */
    const VALUE_ERROR_SUBMISSION_QUOTA_EXCEEDED = 'ErrorSubmissionQuotaExceeded';
    /**
     * Constant for value 'ErrorSubscriptionAccessDenied'
     * @return string 'ErrorSubscriptionAccessDenied'
     */
    const VALUE_ERROR_SUBSCRIPTION_ACCESS_DENIED = 'ErrorSubscriptionAccessDenied';
    /**
     * Constant for value 'ErrorSubscriptionDelegateAccessNotSupported'
     * @return string 'ErrorSubscriptionDelegateAccessNotSupported'
     */
    const VALUE_ERROR_SUBSCRIPTION_DELEGATE_ACCESS_NOT_SUPPORTED = 'ErrorSubscriptionDelegateAccessNotSupported';
    /**
     * Constant for value 'ErrorSubscriptionNotFound'
     * @return string 'ErrorSubscriptionNotFound'
     */
    const VALUE_ERROR_SUBSCRIPTION_NOT_FOUND = 'ErrorSubscriptionNotFound';
    /**
     * Constant for value 'ErrorSubscriptionUnsubscribed'
     * @return string 'ErrorSubscriptionUnsubscribed'
     */
    const VALUE_ERROR_SUBSCRIPTION_UNSUBSCRIBED = 'ErrorSubscriptionUnsubscribed';
    /**
     * Constant for value 'ErrorSyncFolderNotFound'
     * @return string 'ErrorSyncFolderNotFound'
     */
    const VALUE_ERROR_SYNC_FOLDER_NOT_FOUND = 'ErrorSyncFolderNotFound';
    /**
     * Constant for value 'ErrorTeamMailboxNotFound'
     * @return string 'ErrorTeamMailboxNotFound'
     */
    const VALUE_ERROR_TEAM_MAILBOX_NOT_FOUND = 'ErrorTeamMailboxNotFound';
    /**
     * Constant for value 'ErrorTeamMailboxNotLinkedToSharePoint'
     * @return string 'ErrorTeamMailboxNotLinkedToSharePoint'
     */
    const VALUE_ERROR_TEAM_MAILBOX_NOT_LINKED_TO_SHARE_POINT = 'ErrorTeamMailboxNotLinkedToSharePoint';
    /**
     * Constant for value 'ErrorTeamMailboxUrlValidationFailed'
     * @return string 'ErrorTeamMailboxUrlValidationFailed'
     */
    const VALUE_ERROR_TEAM_MAILBOX_URL_VALIDATION_FAILED = 'ErrorTeamMailboxUrlValidationFailed';
    /**
     * Constant for value 'ErrorTeamMailboxNotAuthorizedOwner'
     * @return string 'ErrorTeamMailboxNotAuthorizedOwner'
     */
    const VALUE_ERROR_TEAM_MAILBOX_NOT_AUTHORIZED_OWNER = 'ErrorTeamMailboxNotAuthorizedOwner';
    /**
     * Constant for value 'ErrorTeamMailboxActiveToPendingDelete'
     * @return string 'ErrorTeamMailboxActiveToPendingDelete'
     */
    const VALUE_ERROR_TEAM_MAILBOX_ACTIVE_TO_PENDING_DELETE = 'ErrorTeamMailboxActiveToPendingDelete';
    /**
     * Constant for value 'ErrorTeamMailboxFailedSendingNotifications'
     * @return string 'ErrorTeamMailboxFailedSendingNotifications'
     */
    const VALUE_ERROR_TEAM_MAILBOX_FAILED_SENDING_NOTIFICATIONS = 'ErrorTeamMailboxFailedSendingNotifications';
    /**
     * Constant for value 'ErrorTeamMailboxErrorUnknown'
     * @return string 'ErrorTeamMailboxErrorUnknown'
     */
    const VALUE_ERROR_TEAM_MAILBOX_ERROR_UNKNOWN = 'ErrorTeamMailboxErrorUnknown';
    /**
     * Constant for value 'ErrorTimeIntervalTooBig'
     * @return string 'ErrorTimeIntervalTooBig'
     */
    const VALUE_ERROR_TIME_INTERVAL_TOO_BIG = 'ErrorTimeIntervalTooBig';
    /**
     * Constant for value 'ErrorTimeoutExpired'
     * @return string 'ErrorTimeoutExpired'
     */
    const VALUE_ERROR_TIMEOUT_EXPIRED = 'ErrorTimeoutExpired';
    /**
     * Constant for value 'ErrorTimeZone'
     * @return string 'ErrorTimeZone'
     */
    const VALUE_ERROR_TIME_ZONE = 'ErrorTimeZone';
    /**
     * Constant for value 'ErrorToFolderNotFound'
     * @return string 'ErrorToFolderNotFound'
     */
    const VALUE_ERROR_TO_FOLDER_NOT_FOUND = 'ErrorToFolderNotFound';
    /**
     * Constant for value 'ErrorTokenSerializationDenied'
     * @return string 'ErrorTokenSerializationDenied'
     */
    const VALUE_ERROR_TOKEN_SERIALIZATION_DENIED = 'ErrorTokenSerializationDenied';
    /**
     * Constant for value 'ErrorTooManyObjectsOpened'
     * @return string 'ErrorTooManyObjectsOpened'
     */
    const VALUE_ERROR_TOO_MANY_OBJECTS_OPENED = 'ErrorTooManyObjectsOpened';
    /**
     * Constant for value 'ErrorUpdatePropertyMismatch'
     * @return string 'ErrorUpdatePropertyMismatch'
     */
    const VALUE_ERROR_UPDATE_PROPERTY_MISMATCH = 'ErrorUpdatePropertyMismatch';
    /**
     * Constant for value 'ErrorUnifiedGroupMailboxAADCreationFailed'
     * @return string 'ErrorUnifiedGroupMailboxAADCreationFailed'
     */
    const VALUE_ERROR_UNIFIED_GROUP_MAILBOX_AADCREATION_FAILED = 'ErrorUnifiedGroupMailboxAADCreationFailed';
    /**
     * Constant for value 'ErrorUnifiedGroupMailboxAADDeleteFailed'
     * @return string 'ErrorUnifiedGroupMailboxAADDeleteFailed'
     */
    const VALUE_ERROR_UNIFIED_GROUP_MAILBOX_AADDELETE_FAILED = 'ErrorUnifiedGroupMailboxAADDeleteFailed';
    /**
     * Constant for value 'ErrorUnifiedGroupMailboxNamingPolicy'
     * @return string 'ErrorUnifiedGroupMailboxNamingPolicy'
     */
    const VALUE_ERROR_UNIFIED_GROUP_MAILBOX_NAMING_POLICY = 'ErrorUnifiedGroupMailboxNamingPolicy';
    /**
     * Constant for value 'ErrorUnifiedGroupMailboxDeleteFailed'
     * @return string 'ErrorUnifiedGroupMailboxDeleteFailed'
     */
    const VALUE_ERROR_UNIFIED_GROUP_MAILBOX_DELETE_FAILED = 'ErrorUnifiedGroupMailboxDeleteFailed';
    /**
     * Constant for value 'ErrorUnifiedGroupMailboxNotFound'
     * @return string 'ErrorUnifiedGroupMailboxNotFound'
     */
    const VALUE_ERROR_UNIFIED_GROUP_MAILBOX_NOT_FOUND = 'ErrorUnifiedGroupMailboxNotFound';
    /**
     * Constant for value 'ErrorUnifiedGroupMailboxUpdateDelayed'
     * @return string 'ErrorUnifiedGroupMailboxUpdateDelayed'
     */
    const VALUE_ERROR_UNIFIED_GROUP_MAILBOX_UPDATE_DELAYED = 'ErrorUnifiedGroupMailboxUpdateDelayed';
    /**
     * Constant for value 'ErrorUnifiedGroupMailboxUpdatedPartialProperties'
     * @return string 'ErrorUnifiedGroupMailboxUpdatedPartialProperties'
     */
    const VALUE_ERROR_UNIFIED_GROUP_MAILBOX_UPDATED_PARTIAL_PROPERTIES = 'ErrorUnifiedGroupMailboxUpdatedPartialProperties';
    /**
     * Constant for value 'ErrorUnifiedGroupMailboxUpdateFailed'
     * @return string 'ErrorUnifiedGroupMailboxUpdateFailed'
     */
    const VALUE_ERROR_UNIFIED_GROUP_MAILBOX_UPDATE_FAILED = 'ErrorUnifiedGroupMailboxUpdateFailed';
    /**
     * Constant for value 'ErrorUnifiedGroupMailboxProvisionFailed'
     * @return string 'ErrorUnifiedGroupMailboxProvisionFailed'
     */
    const VALUE_ERROR_UNIFIED_GROUP_MAILBOX_PROVISION_FAILED = 'ErrorUnifiedGroupMailboxProvisionFailed';
    /**
     * Constant for value 'ErrorUnifiedMessagingDialPlanNotFound'
     * @return string 'ErrorUnifiedMessagingDialPlanNotFound'
     */
    const VALUE_ERROR_UNIFIED_MESSAGING_DIAL_PLAN_NOT_FOUND = 'ErrorUnifiedMessagingDialPlanNotFound';
    /**
     * Constant for value 'ErrorUnifiedMessagingReportDataNotFound'
     * @return string 'ErrorUnifiedMessagingReportDataNotFound'
     */
    const VALUE_ERROR_UNIFIED_MESSAGING_REPORT_DATA_NOT_FOUND = 'ErrorUnifiedMessagingReportDataNotFound';
    /**
     * Constant for value 'ErrorUnifiedMessagingPromptNotFound'
     * @return string 'ErrorUnifiedMessagingPromptNotFound'
     */
    const VALUE_ERROR_UNIFIED_MESSAGING_PROMPT_NOT_FOUND = 'ErrorUnifiedMessagingPromptNotFound';
    /**
     * Constant for value 'ErrorUnifiedMessagingRequestFailed'
     * @return string 'ErrorUnifiedMessagingRequestFailed'
     */
    const VALUE_ERROR_UNIFIED_MESSAGING_REQUEST_FAILED = 'ErrorUnifiedMessagingRequestFailed';
    /**
     * Constant for value 'ErrorUnifiedMessagingServerNotFound'
     * @return string 'ErrorUnifiedMessagingServerNotFound'
     */
    const VALUE_ERROR_UNIFIED_MESSAGING_SERVER_NOT_FOUND = 'ErrorUnifiedMessagingServerNotFound';
    /**
     * Constant for value 'ErrorUnableToGetUserOofSettings'
     * @return string 'ErrorUnableToGetUserOofSettings'
     */
    const VALUE_ERROR_UNABLE_TO_GET_USER_OOF_SETTINGS = 'ErrorUnableToGetUserOofSettings';
    /**
     * Constant for value 'ErrorUnableToRemoveImContactFromGroup'
     * @return string 'ErrorUnableToRemoveImContactFromGroup'
     */
    const VALUE_ERROR_UNABLE_TO_REMOVE_IM_CONTACT_FROM_GROUP = 'ErrorUnableToRemoveImContactFromGroup';
    /**
     * Constant for value 'ErrorUnsupportedSubFilter'
     * @return string 'ErrorUnsupportedSubFilter'
     */
    const VALUE_ERROR_UNSUPPORTED_SUB_FILTER = 'ErrorUnsupportedSubFilter';
    /**
     * Constant for value 'ErrorUnsupportedCulture'
     * @return string 'ErrorUnsupportedCulture'
     */
    const VALUE_ERROR_UNSUPPORTED_CULTURE = 'ErrorUnsupportedCulture';
    /**
     * Constant for value 'ErrorUnsupportedMapiPropertyType'
     * @return string 'ErrorUnsupportedMapiPropertyType'
     */
    const VALUE_ERROR_UNSUPPORTED_MAPI_PROPERTY_TYPE = 'ErrorUnsupportedMapiPropertyType';
    /**
     * Constant for value 'ErrorUnsupportedMimeConversion'
     * @return string 'ErrorUnsupportedMimeConversion'
     */
    const VALUE_ERROR_UNSUPPORTED_MIME_CONVERSION = 'ErrorUnsupportedMimeConversion';
    /**
     * Constant for value 'ErrorUnsupportedPathForQuery'
     * @return string 'ErrorUnsupportedPathForQuery'
     */
    const VALUE_ERROR_UNSUPPORTED_PATH_FOR_QUERY = 'ErrorUnsupportedPathForQuery';
    /**
     * Constant for value 'ErrorUnsupportedPathForSortGroup'
     * @return string 'ErrorUnsupportedPathForSortGroup'
     */
    const VALUE_ERROR_UNSUPPORTED_PATH_FOR_SORT_GROUP = 'ErrorUnsupportedPathForSortGroup';
    /**
     * Constant for value 'ErrorUnsupportedPropertyDefinition'
     * @return string 'ErrorUnsupportedPropertyDefinition'
     */
    const VALUE_ERROR_UNSUPPORTED_PROPERTY_DEFINITION = 'ErrorUnsupportedPropertyDefinition';
    /**
     * Constant for value 'ErrorUnsupportedQueryFilter'
     * @return string 'ErrorUnsupportedQueryFilter'
     */
    const VALUE_ERROR_UNSUPPORTED_QUERY_FILTER = 'ErrorUnsupportedQueryFilter';
    /**
     * Constant for value 'ErrorUnsupportedRecurrence'
     * @return string 'ErrorUnsupportedRecurrence'
     */
    const VALUE_ERROR_UNSUPPORTED_RECURRENCE = 'ErrorUnsupportedRecurrence';
    /**
     * Constant for value 'ErrorUnsupportedTypeForConversion'
     * @return string 'ErrorUnsupportedTypeForConversion'
     */
    const VALUE_ERROR_UNSUPPORTED_TYPE_FOR_CONVERSION = 'ErrorUnsupportedTypeForConversion';
    /**
     * Constant for value 'ErrorUpdateDelegatesFailed'
     * @return string 'ErrorUpdateDelegatesFailed'
     */
    const VALUE_ERROR_UPDATE_DELEGATES_FAILED = 'ErrorUpdateDelegatesFailed';
    /**
     * Constant for value 'ErrorUserNotUnifiedMessagingEnabled'
     * @return string 'ErrorUserNotUnifiedMessagingEnabled'
     */
    const VALUE_ERROR_USER_NOT_UNIFIED_MESSAGING_ENABLED = 'ErrorUserNotUnifiedMessagingEnabled';
    /**
     * Constant for value 'ErrorVoiceMailNotImplemented'
     * @return string 'ErrorVoiceMailNotImplemented'
     */
    const VALUE_ERROR_VOICE_MAIL_NOT_IMPLEMENTED = 'ErrorVoiceMailNotImplemented';
    /**
     * Constant for value 'ErrorValueOutOfRange'
     * @return string 'ErrorValueOutOfRange'
     */
    const VALUE_ERROR_VALUE_OUT_OF_RANGE = 'ErrorValueOutOfRange';
    /**
     * Constant for value 'ErrorVirusDetected'
     * @return string 'ErrorVirusDetected'
     */
    const VALUE_ERROR_VIRUS_DETECTED = 'ErrorVirusDetected';
    /**
     * Constant for value 'ErrorVirusMessageDeleted'
     * @return string 'ErrorVirusMessageDeleted'
     */
    const VALUE_ERROR_VIRUS_MESSAGE_DELETED = 'ErrorVirusMessageDeleted';
    /**
     * Constant for value 'ErrorWebRequestInInvalidState'
     * @return string 'ErrorWebRequestInInvalidState'
     */
    const VALUE_ERROR_WEB_REQUEST_IN_INVALID_STATE = 'ErrorWebRequestInInvalidState';
    /**
     * Constant for value 'ErrorWin32InteropError'
     * @return string 'ErrorWin32InteropError'
     */
    const VALUE_ERROR_WIN_32_INTEROP_ERROR = 'ErrorWin32InteropError';
    /**
     * Constant for value 'ErrorWorkingHoursSaveFailed'
     * @return string 'ErrorWorkingHoursSaveFailed'
     */
    const VALUE_ERROR_WORKING_HOURS_SAVE_FAILED = 'ErrorWorkingHoursSaveFailed';
    /**
     * Constant for value 'ErrorWorkingHoursXmlMalformed'
     * @return string 'ErrorWorkingHoursXmlMalformed'
     */
    const VALUE_ERROR_WORKING_HOURS_XML_MALFORMED = 'ErrorWorkingHoursXmlMalformed';
    /**
     * Constant for value 'ErrorWrongServerVersion'
     * @return string 'ErrorWrongServerVersion'
     */
    const VALUE_ERROR_WRONG_SERVER_VERSION = 'ErrorWrongServerVersion';
    /**
     * Constant for value 'ErrorWrongServerVersionDelegate'
     * @return string 'ErrorWrongServerVersionDelegate'
     */
    const VALUE_ERROR_WRONG_SERVER_VERSION_DELEGATE = 'ErrorWrongServerVersionDelegate';
    /**
     * Constant for value 'ErrorMissingInformationSharingFolderId'
     * @return string 'ErrorMissingInformationSharingFolderId'
     */
    const VALUE_ERROR_MISSING_INFORMATION_SHARING_FOLDER_ID = 'ErrorMissingInformationSharingFolderId';
    /**
     * Constant for value 'ErrorDuplicateSOAPHeader'
     * @return string 'ErrorDuplicateSOAPHeader'
     */
    const VALUE_ERROR_DUPLICATE_SOAPHEADER = 'ErrorDuplicateSOAPHeader';
    /**
     * Constant for value 'ErrorSharingSynchronizationFailed'
     * @return string 'ErrorSharingSynchronizationFailed'
     */
    const VALUE_ERROR_SHARING_SYNCHRONIZATION_FAILED = 'ErrorSharingSynchronizationFailed';
    /**
     * Constant for value 'ErrorSharingNoExternalEwsAvailable'
     * @return string 'ErrorSharingNoExternalEwsAvailable'
     */
    const VALUE_ERROR_SHARING_NO_EXTERNAL_EWS_AVAILABLE = 'ErrorSharingNoExternalEwsAvailable';
    /**
     * Constant for value 'ErrorFreeBusyDLLimitReached'
     * @return string 'ErrorFreeBusyDLLimitReached'
     */
    const VALUE_ERROR_FREE_BUSY_DLLIMIT_REACHED = 'ErrorFreeBusyDLLimitReached';
    /**
     * Constant for value 'ErrorInvalidGetSharingFolderRequest'
     * @return string 'ErrorInvalidGetSharingFolderRequest'
     */
    const VALUE_ERROR_INVALID_GET_SHARING_FOLDER_REQUEST = 'ErrorInvalidGetSharingFolderRequest';
    /**
     * Constant for value 'ErrorNotAllowedExternalSharingByPolicy'
     * @return string 'ErrorNotAllowedExternalSharingByPolicy'
     */
    const VALUE_ERROR_NOT_ALLOWED_EXTERNAL_SHARING_BY_POLICY = 'ErrorNotAllowedExternalSharingByPolicy';
    /**
     * Constant for value 'ErrorUserNotAllowedByPolicy'
     * @return string 'ErrorUserNotAllowedByPolicy'
     */
    const VALUE_ERROR_USER_NOT_ALLOWED_BY_POLICY = 'ErrorUserNotAllowedByPolicy';
    /**
     * Constant for value 'ErrorPermissionNotAllowedByPolicy'
     * @return string 'ErrorPermissionNotAllowedByPolicy'
     */
    const VALUE_ERROR_PERMISSION_NOT_ALLOWED_BY_POLICY = 'ErrorPermissionNotAllowedByPolicy';
    /**
     * Constant for value 'ErrorOrganizationNotFederated'
     * @return string 'ErrorOrganizationNotFederated'
     */
    const VALUE_ERROR_ORGANIZATION_NOT_FEDERATED = 'ErrorOrganizationNotFederated';
    /**
     * Constant for value 'ErrorMailboxFailover'
     * @return string 'ErrorMailboxFailover'
     */
    const VALUE_ERROR_MAILBOX_FAILOVER = 'ErrorMailboxFailover';
    /**
     * Constant for value 'ErrorInvalidExternalSharingInitiator'
     * @return string 'ErrorInvalidExternalSharingInitiator'
     */
    const VALUE_ERROR_INVALID_EXTERNAL_SHARING_INITIATOR = 'ErrorInvalidExternalSharingInitiator';
    /**
     * Constant for value 'ErrorMessageTrackingPermanentError'
     * @return string 'ErrorMessageTrackingPermanentError'
     */
    const VALUE_ERROR_MESSAGE_TRACKING_PERMANENT_ERROR = 'ErrorMessageTrackingPermanentError';
    /**
     * Constant for value 'ErrorMessageTrackingTransientError'
     * @return string 'ErrorMessageTrackingTransientError'
     */
    const VALUE_ERROR_MESSAGE_TRACKING_TRANSIENT_ERROR = 'ErrorMessageTrackingTransientError';
    /**
     * Constant for value 'ErrorMessageTrackingNoSuchDomain'
     * @return string 'ErrorMessageTrackingNoSuchDomain'
     */
    const VALUE_ERROR_MESSAGE_TRACKING_NO_SUCH_DOMAIN = 'ErrorMessageTrackingNoSuchDomain';
    /**
     * Constant for value 'ErrorUserWithoutFederatedProxyAddress'
     * @return string 'ErrorUserWithoutFederatedProxyAddress'
     */
    const VALUE_ERROR_USER_WITHOUT_FEDERATED_PROXY_ADDRESS = 'ErrorUserWithoutFederatedProxyAddress';
    /**
     * Constant for value 'ErrorInvalidOrganizationRelationshipForFreeBusy'
     * @return string 'ErrorInvalidOrganizationRelationshipForFreeBusy'
     */
    const VALUE_ERROR_INVALID_ORGANIZATION_RELATIONSHIP_FOR_FREE_BUSY = 'ErrorInvalidOrganizationRelationshipForFreeBusy';
    /**
     * Constant for value 'ErrorInvalidFederatedOrganizationId'
     * @return string 'ErrorInvalidFederatedOrganizationId'
     */
    const VALUE_ERROR_INVALID_FEDERATED_ORGANIZATION_ID = 'ErrorInvalidFederatedOrganizationId';
    /**
     * Constant for value 'ErrorInvalidExternalSharingSubscriber'
     * @return string 'ErrorInvalidExternalSharingSubscriber'
     */
    const VALUE_ERROR_INVALID_EXTERNAL_SHARING_SUBSCRIBER = 'ErrorInvalidExternalSharingSubscriber';
    /**
     * Constant for value 'ErrorInvalidSharingData'
     * @return string 'ErrorInvalidSharingData'
     */
    const VALUE_ERROR_INVALID_SHARING_DATA = 'ErrorInvalidSharingData';
    /**
     * Constant for value 'ErrorInvalidSharingMessage'
     * @return string 'ErrorInvalidSharingMessage'
     */
    const VALUE_ERROR_INVALID_SHARING_MESSAGE = 'ErrorInvalidSharingMessage';
    /**
     * Constant for value 'ErrorNotSupportedSharingMessage'
     * @return string 'ErrorNotSupportedSharingMessage'
     */
    const VALUE_ERROR_NOT_SUPPORTED_SHARING_MESSAGE = 'ErrorNotSupportedSharingMessage';
    /**
     * Constant for value 'ErrorApplyConversationActionFailed'
     * @return string 'ErrorApplyConversationActionFailed'
     */
    const VALUE_ERROR_APPLY_CONVERSATION_ACTION_FAILED = 'ErrorApplyConversationActionFailed';
    /**
     * Constant for value 'ErrorInboxRulesValidationError'
     * @return string 'ErrorInboxRulesValidationError'
     */
    const VALUE_ERROR_INBOX_RULES_VALIDATION_ERROR = 'ErrorInboxRulesValidationError';
    /**
     * Constant for value 'ErrorOutlookRuleBlobExists'
     * @return string 'ErrorOutlookRuleBlobExists'
     */
    const VALUE_ERROR_OUTLOOK_RULE_BLOB_EXISTS = 'ErrorOutlookRuleBlobExists';
    /**
     * Constant for value 'ErrorRulesOverQuota'
     * @return string 'ErrorRulesOverQuota'
     */
    const VALUE_ERROR_RULES_OVER_QUOTA = 'ErrorRulesOverQuota';
    /**
     * Constant for value 'ErrorNewEventStreamConnectionOpened'
     * @return string 'ErrorNewEventStreamConnectionOpened'
     */
    const VALUE_ERROR_NEW_EVENT_STREAM_CONNECTION_OPENED = 'ErrorNewEventStreamConnectionOpened';
    /**
     * Constant for value 'ErrorMissedNotificationEvents'
     * @return string 'ErrorMissedNotificationEvents'
     */
    const VALUE_ERROR_MISSED_NOTIFICATION_EVENTS = 'ErrorMissedNotificationEvents';
    /**
     * Constant for value 'ErrorDuplicateLegacyDistinguishedName'
     * @return string 'ErrorDuplicateLegacyDistinguishedName'
     */
    const VALUE_ERROR_DUPLICATE_LEGACY_DISTINGUISHED_NAME = 'ErrorDuplicateLegacyDistinguishedName';
    /**
     * Constant for value 'ErrorInvalidClientAccessTokenRequest'
     * @return string 'ErrorInvalidClientAccessTokenRequest'
     */
    const VALUE_ERROR_INVALID_CLIENT_ACCESS_TOKEN_REQUEST = 'ErrorInvalidClientAccessTokenRequest';
    /**
     * Constant for value 'ErrorNoSpeechDetected'
     * @return string 'ErrorNoSpeechDetected'
     */
    const VALUE_ERROR_NO_SPEECH_DETECTED = 'ErrorNoSpeechDetected';
    /**
     * Constant for value 'ErrorUMServerUnavailable'
     * @return string 'ErrorUMServerUnavailable'
     */
    const VALUE_ERROR_UMSERVER_UNAVAILABLE = 'ErrorUMServerUnavailable';
    /**
     * Constant for value 'ErrorRecipientNotFound'
     * @return string 'ErrorRecipientNotFound'
     */
    const VALUE_ERROR_RECIPIENT_NOT_FOUND = 'ErrorRecipientNotFound';
    /**
     * Constant for value 'ErrorRecognizerNotInstalled'
     * @return string 'ErrorRecognizerNotInstalled'
     */
    const VALUE_ERROR_RECOGNIZER_NOT_INSTALLED = 'ErrorRecognizerNotInstalled';
    /**
     * Constant for value 'ErrorSpeechGrammarError'
     * @return string 'ErrorSpeechGrammarError'
     */
    const VALUE_ERROR_SPEECH_GRAMMAR_ERROR = 'ErrorSpeechGrammarError';
    /**
     * Constant for value 'ErrorInvalidManagementRoleHeader'
     * @return string 'ErrorInvalidManagementRoleHeader'
     */
    const VALUE_ERROR_INVALID_MANAGEMENT_ROLE_HEADER = 'ErrorInvalidManagementRoleHeader';
    /**
     * Constant for value 'ErrorLocationServicesDisabled'
     * @return string 'ErrorLocationServicesDisabled'
     */
    const VALUE_ERROR_LOCATION_SERVICES_DISABLED = 'ErrorLocationServicesDisabled';
    /**
     * Constant for value 'ErrorLocationServicesRequestTimedOut'
     * @return string 'ErrorLocationServicesRequestTimedOut'
     */
    const VALUE_ERROR_LOCATION_SERVICES_REQUEST_TIMED_OUT = 'ErrorLocationServicesRequestTimedOut';
    /**
     * Constant for value 'ErrorLocationServicesRequestFailed'
     * @return string 'ErrorLocationServicesRequestFailed'
     */
    const VALUE_ERROR_LOCATION_SERVICES_REQUEST_FAILED = 'ErrorLocationServicesRequestFailed';
    /**
     * Constant for value 'ErrorLocationServicesInvalidRequest'
     * @return string 'ErrorLocationServicesInvalidRequest'
     */
    const VALUE_ERROR_LOCATION_SERVICES_INVALID_REQUEST = 'ErrorLocationServicesInvalidRequest';
    /**
     * Constant for value 'ErrorWeatherServiceDisabled'
     * @return string 'ErrorWeatherServiceDisabled'
     */
    const VALUE_ERROR_WEATHER_SERVICE_DISABLED = 'ErrorWeatherServiceDisabled';
    /**
     * Constant for value 'ErrorMailboxScopeNotAllowedWithoutQueryString'
     * @return string 'ErrorMailboxScopeNotAllowedWithoutQueryString'
     */
    const VALUE_ERROR_MAILBOX_SCOPE_NOT_ALLOWED_WITHOUT_QUERY_STRING = 'ErrorMailboxScopeNotAllowedWithoutQueryString';
    /**
     * Constant for value 'ErrorArchiveMailboxSearchFailed'
     * @return string 'ErrorArchiveMailboxSearchFailed'
     */
    const VALUE_ERROR_ARCHIVE_MAILBOX_SEARCH_FAILED = 'ErrorArchiveMailboxSearchFailed';
    /**
     * Constant for value 'ErrorGetRemoteArchiveFolderFailed'
     * @return string 'ErrorGetRemoteArchiveFolderFailed'
     */
    const VALUE_ERROR_GET_REMOTE_ARCHIVE_FOLDER_FAILED = 'ErrorGetRemoteArchiveFolderFailed';
    /**
     * Constant for value 'ErrorFindRemoteArchiveFolderFailed'
     * @return string 'ErrorFindRemoteArchiveFolderFailed'
     */
    const VALUE_ERROR_FIND_REMOTE_ARCHIVE_FOLDER_FAILED = 'ErrorFindRemoteArchiveFolderFailed';
    /**
     * Constant for value 'ErrorGetRemoteArchiveItemFailed'
     * @return string 'ErrorGetRemoteArchiveItemFailed'
     */
    const VALUE_ERROR_GET_REMOTE_ARCHIVE_ITEM_FAILED = 'ErrorGetRemoteArchiveItemFailed';
    /**
     * Constant for value 'ErrorExportRemoteArchiveItemsFailed'
     * @return string 'ErrorExportRemoteArchiveItemsFailed'
     */
    const VALUE_ERROR_EXPORT_REMOTE_ARCHIVE_ITEMS_FAILED = 'ErrorExportRemoteArchiveItemsFailed';
    /**
     * Constant for value 'ErrorInvalidPhotoSize'
     * @return string 'ErrorInvalidPhotoSize'
     */
    const VALUE_ERROR_INVALID_PHOTO_SIZE = 'ErrorInvalidPhotoSize';
    /**
     * Constant for value 'ErrorSearchQueryHasTooManyKeywords'
     * @return string 'ErrorSearchQueryHasTooManyKeywords'
     */
    const VALUE_ERROR_SEARCH_QUERY_HAS_TOO_MANY_KEYWORDS = 'ErrorSearchQueryHasTooManyKeywords';
    /**
     * Constant for value 'ErrorSearchTooManyMailboxes'
     * @return string 'ErrorSearchTooManyMailboxes'
     */
    const VALUE_ERROR_SEARCH_TOO_MANY_MAILBOXES = 'ErrorSearchTooManyMailboxes';
    /**
     * Constant for value 'ErrorInvalidRetentionTagNone'
     * @return string 'ErrorInvalidRetentionTagNone'
     */
    const VALUE_ERROR_INVALID_RETENTION_TAG_NONE = 'ErrorInvalidRetentionTagNone';
    /**
     * Constant for value 'ErrorDiscoverySearchesDisabled'
     * @return string 'ErrorDiscoverySearchesDisabled'
     */
    const VALUE_ERROR_DISCOVERY_SEARCHES_DISABLED = 'ErrorDiscoverySearchesDisabled';
    /**
     * Constant for value 'ErrorCalendarSeekToConditionNotSupported'
     * @return string 'ErrorCalendarSeekToConditionNotSupported'
     */
    const VALUE_ERROR_CALENDAR_SEEK_TO_CONDITION_NOT_SUPPORTED = 'ErrorCalendarSeekToConditionNotSupported';
    /**
     * Constant for value 'ErrorCalendarIsGroupMailboxForAccept'
     * @return string 'ErrorCalendarIsGroupMailboxForAccept'
     */
    const VALUE_ERROR_CALENDAR_IS_GROUP_MAILBOX_FOR_ACCEPT = 'ErrorCalendarIsGroupMailboxForAccept';
    /**
     * Constant for value 'ErrorCalendarIsGroupMailboxForDecline'
     * @return string 'ErrorCalendarIsGroupMailboxForDecline'
     */
    const VALUE_ERROR_CALENDAR_IS_GROUP_MAILBOX_FOR_DECLINE = 'ErrorCalendarIsGroupMailboxForDecline';
    /**
     * Constant for value 'ErrorCalendarIsGroupMailboxForTentative'
     * @return string 'ErrorCalendarIsGroupMailboxForTentative'
     */
    const VALUE_ERROR_CALENDAR_IS_GROUP_MAILBOX_FOR_TENTATIVE = 'ErrorCalendarIsGroupMailboxForTentative';
    /**
     * Constant for value 'ErrorCalendarIsGroupMailboxForSuppressReadReceipt'
     * @return string 'ErrorCalendarIsGroupMailboxForSuppressReadReceipt'
     */
    const VALUE_ERROR_CALENDAR_IS_GROUP_MAILBOX_FOR_SUPPRESS_READ_RECEIPT = 'ErrorCalendarIsGroupMailboxForSuppressReadReceipt';
    /**
     * Constant for value 'ErrorOrganizationAccessBlocked'
     * @return string 'ErrorOrganizationAccessBlocked'
     */
    const VALUE_ERROR_ORGANIZATION_ACCESS_BLOCKED = 'ErrorOrganizationAccessBlocked';
    /**
     * Constant for value 'ErrorInvalidLicense'
     * @return string 'ErrorInvalidLicense'
     */
    const VALUE_ERROR_INVALID_LICENSE = 'ErrorInvalidLicense';
    /**
     * Constant for value 'ErrorMessagePerFolderCountReceiveQuotaExceeded'
     * @return string 'ErrorMessagePerFolderCountReceiveQuotaExceeded'
     */
    const VALUE_ERROR_MESSAGE_PER_FOLDER_COUNT_RECEIVE_QUOTA_EXCEEDED = 'ErrorMessagePerFolderCountReceiveQuotaExceeded';
    /**
     * Constant for value 'ErrorInvalidBulkActionType'
     * @return string 'ErrorInvalidBulkActionType'
     */
    const VALUE_ERROR_INVALID_BULK_ACTION_TYPE = 'ErrorInvalidBulkActionType';
    /**
     * Constant for value 'ErrorInvalidKeepNCount'
     * @return string 'ErrorInvalidKeepNCount'
     */
    const VALUE_ERROR_INVALID_KEEP_NCOUNT = 'ErrorInvalidKeepNCount';
    /**
     * Constant for value 'ErrorInvalidKeepNType'
     * @return string 'ErrorInvalidKeepNType'
     */
    const VALUE_ERROR_INVALID_KEEP_NTYPE = 'ErrorInvalidKeepNType';
    /**
     * Constant for value 'ErrorNoOAuthServerAvailableForRequest'
     * @return string 'ErrorNoOAuthServerAvailableForRequest'
     */
    const VALUE_ERROR_NO_OAUTH_SERVER_AVAILABLE_FOR_REQUEST = 'ErrorNoOAuthServerAvailableForRequest';
    /**
     * Constant for value 'ErrorInstantSearchSessionExpired'
     * @return string 'ErrorInstantSearchSessionExpired'
     */
    const VALUE_ERROR_INSTANT_SEARCH_SESSION_EXPIRED = 'ErrorInstantSearchSessionExpired';
    /**
     * Constant for value 'ErrorInstantSearchTimeout'
     * @return string 'ErrorInstantSearchTimeout'
     */
    const VALUE_ERROR_INSTANT_SEARCH_TIMEOUT = 'ErrorInstantSearchTimeout';
    /**
     * Constant for value 'ErrorInstantSearchFailed'
     * @return string 'ErrorInstantSearchFailed'
     */
    const VALUE_ERROR_INSTANT_SEARCH_FAILED = 'ErrorInstantSearchFailed';
    /**
     * Constant for value 'ErrorUnsupportedUserForExecuteSearch'
     * @return string 'ErrorUnsupportedUserForExecuteSearch'
     */
    const VALUE_ERROR_UNSUPPORTED_USER_FOR_EXECUTE_SEARCH = 'ErrorUnsupportedUserForExecuteSearch';
    /**
     * Constant for value 'ErrorMissingExchangePrincipal'
     * @return string 'ErrorMissingExchangePrincipal'
     */
    const VALUE_ERROR_MISSING_EXCHANGE_PRINCIPAL = 'ErrorMissingExchangePrincipal';
    /**
     * Constant for value 'ErrorUnexpectedUnifiedGroupsCount'
     * @return string 'ErrorUnexpectedUnifiedGroupsCount'
     */
    const VALUE_ERROR_UNEXPECTED_UNIFIED_GROUPS_COUNT = 'ErrorUnexpectedUnifiedGroupsCount';
    /**
     * Constant for value 'ErrorParsingXMLResponse'
     * @return string 'ErrorParsingXMLResponse'
     */
    const VALUE_ERROR_PARSING_XMLRESPONSE = 'ErrorParsingXMLResponse';
    /**
     * Constant for value 'ErrorInvalidFederationOrganizationIdentifier'
     * @return string 'ErrorInvalidFederationOrganizationIdentifier'
     */
    const VALUE_ERROR_INVALID_FEDERATION_ORGANIZATION_IDENTIFIER = 'ErrorInvalidFederationOrganizationIdentifier';
    /**
     * Constant for value 'ErrorInvalidSweepRule'
     * @return string 'ErrorInvalidSweepRule'
     */
    const VALUE_ERROR_INVALID_SWEEP_RULE = 'ErrorInvalidSweepRule';
    /**
     * Constant for value 'ErrorInvalidSweepRuleOperationType'
     * @return string 'ErrorInvalidSweepRuleOperationType'
     */
    const VALUE_ERROR_INVALID_SWEEP_RULE_OPERATION_TYPE = 'ErrorInvalidSweepRuleOperationType';
    /**
     * Constant for value 'ErrorTargetDomainNotSupported'
     * @return string 'ErrorTargetDomainNotSupported'
     */
    const VALUE_ERROR_TARGET_DOMAIN_NOT_SUPPORTED = 'ErrorTargetDomainNotSupported';
    /**
     * Constant for value 'ErrorInvalidInternetWebProxyOnLocalServer'
     * @return string 'ErrorInvalidInternetWebProxyOnLocalServer'
     */
    const VALUE_ERROR_INVALID_INTERNET_WEB_PROXY_ON_LOCAL_SERVER = 'ErrorInvalidInternetWebProxyOnLocalServer';
    /**
     * Constant for value 'ErrorNoSenderRestrictionsSettingsFoundInRequest'
     * @return string 'ErrorNoSenderRestrictionsSettingsFoundInRequest'
     */
    const VALUE_ERROR_NO_SENDER_RESTRICTIONS_SETTINGS_FOUND_IN_REQUEST = 'ErrorNoSenderRestrictionsSettingsFoundInRequest';
    /**
     * Constant for value 'ErrorDuplicateSenderRestrictionsInputFound'
     * @return string 'ErrorDuplicateSenderRestrictionsInputFound'
     */
    const VALUE_ERROR_DUPLICATE_SENDER_RESTRICTIONS_INPUT_FOUND = 'ErrorDuplicateSenderRestrictionsInputFound';
    /**
     * Constant for value 'ErrorSenderRestrictionsUpdateFailed'
     * @return string 'ErrorSenderRestrictionsUpdateFailed'
     */
    const VALUE_ERROR_SENDER_RESTRICTIONS_UPDATE_FAILED = 'ErrorSenderRestrictionsUpdateFailed';
    /**
     * Constant for value 'ErrorMessageSubmissionBlocked'
     * @return string 'ErrorMessageSubmissionBlocked'
     */
    const VALUE_ERROR_MESSAGE_SUBMISSION_BLOCKED = 'ErrorMessageSubmissionBlocked';
    /**
     * Constant for value 'ErrorExceededMessageLimit'
     * @return string 'ErrorExceededMessageLimit'
     */
    const VALUE_ERROR_EXCEEDED_MESSAGE_LIMIT = 'ErrorExceededMessageLimit';
    /**
     * Constant for value 'ErrorExceededMaxRecipientLimitBlock'
     * @return string 'ErrorExceededMaxRecipientLimitBlock'
     */
    const VALUE_ERROR_EXCEEDED_MAX_RECIPIENT_LIMIT_BLOCK = 'ErrorExceededMaxRecipientLimitBlock';
    /**
     * Constant for value 'ErrorAccountSuspend'
     * @return string 'ErrorAccountSuspend'
     */
    const VALUE_ERROR_ACCOUNT_SUSPEND = 'ErrorAccountSuspend';
    /**
     * Constant for value 'ErrorExceededMaxRecipientLimit'
     * @return string 'ErrorExceededMaxRecipientLimit'
     */
    const VALUE_ERROR_EXCEEDED_MAX_RECIPIENT_LIMIT = 'ErrorExceededMaxRecipientLimit';
    /**
     * Constant for value 'ErrorMessageBlocked'
     * @return string 'ErrorMessageBlocked'
     */
    const VALUE_ERROR_MESSAGE_BLOCKED = 'ErrorMessageBlocked';
    /**
     * Constant for value 'ErrorAccountSuspendShowTierUpgrade'
     * @return string 'ErrorAccountSuspendShowTierUpgrade'
     */
    const VALUE_ERROR_ACCOUNT_SUSPEND_SHOW_TIER_UPGRADE = 'ErrorAccountSuspendShowTierUpgrade';
    /**
     * Constant for value 'ErrorExceededMessageLimitShowTierUpgrade'
     * @return string 'ErrorExceededMessageLimitShowTierUpgrade'
     */
    const VALUE_ERROR_EXCEEDED_MESSAGE_LIMIT_SHOW_TIER_UPGRADE = 'ErrorExceededMessageLimitShowTierUpgrade';
    /**
     * Constant for value 'ErrorExceededMaxRecipientLimitShowTierUpgrade'
     * @return string 'ErrorExceededMaxRecipientLimitShowTierUpgrade'
     */
    const VALUE_ERROR_EXCEEDED_MAX_RECIPIENT_LIMIT_SHOW_TIER_UPGRADE = 'ErrorExceededMaxRecipientLimitShowTierUpgrade';
    /**
     * Constant for value 'ErrorInvalidLongitude'
     * @return string 'ErrorInvalidLongitude'
     */
    const VALUE_ERROR_INVALID_LONGITUDE = 'ErrorInvalidLongitude';
    /**
     * Constant for value 'ErrorInvalidLatitude'
     * @return string 'ErrorInvalidLatitude'
     */
    const VALUE_ERROR_INVALID_LATITUDE = 'ErrorInvalidLatitude';
    /**
     * Return allowed values
     * @uses self::VALUE_NO_ERROR
     * @uses self::VALUE_ERROR_ACCESS_DENIED
     * @uses self::VALUE_ERROR_ACCESS_MODE_SPECIFIED
     * @uses self::VALUE_ERROR_ACCOUNT_DISABLED
     * @uses self::VALUE_ERROR_ADD_DELEGATES_FAILED
     * @uses self::VALUE_ERROR_ADDRESS_SPACE_NOT_FOUND
     * @uses self::VALUE_ERROR_ADOPERATION
     * @uses self::VALUE_ERROR_ADSESSION_FILTER
     * @uses self::VALUE_ERROR_ADUNAVAILABLE
     * @uses self::VALUE_ERROR_AUTO_DISCOVER_FAILED
     * @uses self::VALUE_ERROR_AFFECTED_TASK_OCCURRENCES_REQUIRED
     * @uses self::VALUE_ERROR_ATTACHMENT_NEST_LEVEL_LIMIT_EXCEEDED
     * @uses self::VALUE_ERROR_ATTACHMENT_SIZE_LIMIT_EXCEEDED
     * @uses self::VALUE_ERROR_ARCHIVE_FOLDER_PATH_CREATION
     * @uses self::VALUE_ERROR_ARCHIVE_MAILBOX_NOT_ENABLED
     * @uses self::VALUE_ERROR_ARCHIVE_MAILBOX_SERVICE_DISCOVERY_FAILED
     * @uses self::VALUE_ERROR_AVAILABILITY_CONFIG_NOT_FOUND
     * @uses self::VALUE_ERROR_BATCH_PROCESSING_STOPPED
     * @uses self::VALUE_ERROR_CALENDAR_CANNOT_MOVE_OR_COPY_OCCURRENCE
     * @uses self::VALUE_ERROR_CALENDAR_CANNOT_UPDATE_DELETED_ITEM
     * @uses self::VALUE_ERROR_CALENDAR_CANNOT_USE_ID_FOR_OCCURRENCE_ID
     * @uses self::VALUE_ERROR_CALENDAR_CANNOT_USE_ID_FOR_RECURRING_MASTER_ID
     * @uses self::VALUE_ERROR_CALENDAR_DURATION_IS_TOO_LONG
     * @uses self::VALUE_ERROR_CALENDAR_END_DATE_IS_EARLIER_THAN_START_DATE
     * @uses self::VALUE_ERROR_CALENDAR_FOLDER_IS_INVALID_FOR_CALENDAR_VIEW
     * @uses self::VALUE_ERROR_CALENDAR_INVALID_ATTRIBUTE_VALUE
     * @uses self::VALUE_ERROR_CALENDAR_INVALID_DAY_FOR_TIME_CHANGE_PATTERN
     * @uses self::VALUE_ERROR_CALENDAR_INVALID_DAY_FOR_WEEKLY_RECURRENCE
     * @uses self::VALUE_ERROR_CALENDAR_INVALID_PROPERTY_STATE
     * @uses self::VALUE_ERROR_CALENDAR_INVALID_PROPERTY_VALUE
     * @uses self::VALUE_ERROR_CALENDAR_INVALID_RECURRENCE
     * @uses self::VALUE_ERROR_CALENDAR_INVALID_TIME_ZONE
     * @uses self::VALUE_ERROR_CALENDAR_IS_CANCELLED_FOR_ACCEPT
     * @uses self::VALUE_ERROR_CALENDAR_IS_CANCELLED_FOR_DECLINE
     * @uses self::VALUE_ERROR_CALENDAR_IS_CANCELLED_FOR_REMOVE
     * @uses self::VALUE_ERROR_CALENDAR_IS_CANCELLED_FOR_TENTATIVE
     * @uses self::VALUE_ERROR_CALENDAR_IS_DELEGATED_FOR_ACCEPT
     * @uses self::VALUE_ERROR_CALENDAR_IS_DELEGATED_FOR_DECLINE
     * @uses self::VALUE_ERROR_CALENDAR_IS_DELEGATED_FOR_REMOVE
     * @uses self::VALUE_ERROR_CALENDAR_IS_DELEGATED_FOR_TENTATIVE
     * @uses self::VALUE_ERROR_CALENDAR_IS_NOT_ORGANIZER
     * @uses self::VALUE_ERROR_CALENDAR_IS_ORGANIZER_FOR_ACCEPT
     * @uses self::VALUE_ERROR_CALENDAR_IS_ORGANIZER_FOR_DECLINE
     * @uses self::VALUE_ERROR_CALENDAR_IS_ORGANIZER_FOR_REMOVE
     * @uses self::VALUE_ERROR_CALENDAR_IS_ORGANIZER_FOR_TENTATIVE
     * @uses self::VALUE_ERROR_CALENDAR_OCCURRENCE_INDEX_IS_OUT_OF_RECURRENCE_RANGE
     * @uses self::VALUE_ERROR_CALENDAR_OCCURRENCE_IS_DELETED_FROM_RECURRENCE
     * @uses self::VALUE_ERROR_CALENDAR_OUT_OF_RANGE
     * @uses self::VALUE_ERROR_CALENDAR_MEETING_REQUEST_IS_OUT_OF_DATE
     * @uses self::VALUE_ERROR_CALENDAR_VIEW_RANGE_TOO_BIG
     * @uses self::VALUE_ERROR_CALLER_IS_INVALID_ADACCOUNT
     * @uses self::VALUE_ERROR_CANNOT_ARCHIVE_CALENDAR_CONTACT_TASK_FOLDER_EXCEPTION
     * @uses self::VALUE_ERROR_CANNOT_ARCHIVE_ITEMS_IN_PUBLIC_FOLDERS
     * @uses self::VALUE_ERROR_CANNOT_ARCHIVE_ITEMS_IN_ARCHIVE_MAILBOX
     * @uses self::VALUE_ERROR_CANNOT_CREATE_CALENDAR_ITEM_IN_NON_CALENDAR_FOLDER
     * @uses self::VALUE_ERROR_CANNOT_CREATE_CONTACT_IN_NON_CONTACT_FOLDER
     * @uses self::VALUE_ERROR_CANNOT_CREATE_POST_ITEM_IN_NON_MAIL_FOLDER
     * @uses self::VALUE_ERROR_CANNOT_CREATE_TASK_IN_NON_TASK_FOLDER
     * @uses self::VALUE_ERROR_CANNOT_DELETE_OBJECT
     * @uses self::VALUE_ERROR_CANNOT_DISABLE_MANDATORY_EXTENSION
     * @uses self::VALUE_ERROR_CANNOT_FIND_USER
     * @uses self::VALUE_ERROR_CANNOT_GET_SOURCE_FOLDER_PATH
     * @uses self::VALUE_ERROR_CANNOT_GET_EXTERNAL_ECP_URL
     * @uses self::VALUE_ERROR_CANNOT_OPEN_FILE_ATTACHMENT
     * @uses self::VALUE_ERROR_CANNOT_DELETE_TASK_OCCURRENCE
     * @uses self::VALUE_ERROR_CANNOT_EMPTY_FOLDER
     * @uses self::VALUE_ERROR_CANNOT_SET_CALENDAR_PERMISSION_ON_NON_CALENDAR_FOLDER
     * @uses self::VALUE_ERROR_CANNOT_SET_NON_CALENDAR_PERMISSION_ON_CALENDAR_FOLDER
     * @uses self::VALUE_ERROR_CANNOT_SET_PERMISSION_UNKNOWN_ENTRIES
     * @uses self::VALUE_ERROR_CANNOT_SPECIFY_SEARCH_FOLDER_AS_SOURCE_FOLDER
     * @uses self::VALUE_ERROR_CANNOT_USE_FOLDER_ID_FOR_ITEM_ID
     * @uses self::VALUE_ERROR_CANNOT_USE_ITEM_ID_FOR_FOLDER_ID
     * @uses self::VALUE_ERROR_CHANGE_KEY_REQUIRED
     * @uses self::VALUE_ERROR_CHANGE_KEY_REQUIRED_FOR_WRITE_OPERATIONS
     * @uses self::VALUE_ERROR_CHANNEL_SUBSCRIPTION_ALREADY_EXISTS
     * @uses self::VALUE_ERROR_CHANNEL_SUBSCRIPTION_NOT_FOUND
     * @uses self::VALUE_ERROR_CLIENT_DISCONNECTED
     * @uses self::VALUE_ERROR_CLIENT_INTENT_INVALID_STATE_DEFINITION
     * @uses self::VALUE_ERROR_CLIENT_INTENT_NOT_FOUND
     * @uses self::VALUE_ERROR_CONNECTION_FAILED
     * @uses self::VALUE_ERROR_CONTAINS_FILTER_WRONG_TYPE
     * @uses self::VALUE_ERROR_CONTENT_CONVERSION_FAILED
     * @uses self::VALUE_ERROR_CONTENT_INDEXING_NOT_ENABLED
     * @uses self::VALUE_ERROR_CORRUPT_DATA
     * @uses self::VALUE_ERROR_CREATE_ITEM_ACCESS_DENIED
     * @uses self::VALUE_ERROR_CREATE_MANAGED_FOLDER_PARTIAL_COMPLETION
     * @uses self::VALUE_ERROR_CREATE_SUBFOLDER_ACCESS_DENIED
     * @uses self::VALUE_ERROR_CROSS_MAILBOX_MOVE_COPY
     * @uses self::VALUE_ERROR_CROSS_SITE_REQUEST
     * @uses self::VALUE_ERROR_DATA_SIZE_LIMIT_EXCEEDED
     * @uses self::VALUE_ERROR_DATA_SOURCE_OPERATION
     * @uses self::VALUE_ERROR_DELEGATE_ALREADY_EXISTS
     * @uses self::VALUE_ERROR_DELEGATE_CANNOT_ADD_OWNER
     * @uses self::VALUE_ERROR_DELEGATE_MISSING_CONFIGURATION
     * @uses self::VALUE_ERROR_DELEGATE_NO_USER
     * @uses self::VALUE_ERROR_DELEGATE_VALIDATION_FAILED
     * @uses self::VALUE_ERROR_DELETE_DISTINGUISHED_FOLDER
     * @uses self::VALUE_ERROR_DELETE_ITEMS_FAILED
     * @uses self::VALUE_ERROR_DELETE_UNIFIED_MESSAGING_PROMPT_FAILED
     * @uses self::VALUE_ERROR_DISTINGUISHED_USER_NOT_SUPPORTED
     * @uses self::VALUE_ERROR_DISTRIBUTION_LIST_MEMBER_NOT_EXIST
     * @uses self::VALUE_ERROR_DUPLICATE_INPUT_FOLDER_NAMES
     * @uses self::VALUE_ERROR_DUPLICATE_USER_IDS_SPECIFIED
     * @uses self::VALUE_ERROR_EMAIL_ADDRESS_MISMATCH
     * @uses self::VALUE_ERROR_EVENT_NOT_FOUND
     * @uses self::VALUE_ERROR_EXCEEDED_CHANNEL_SUBSCRIPTION_COUNT
     * @uses self::VALUE_ERROR_EXCEEDED_CONNECTION_COUNT
     * @uses self::VALUE_ERROR_EXCEEDED_SUBSCRIPTION_COUNT
     * @uses self::VALUE_ERROR_EXCEEDED_FIND_COUNT_LIMIT
     * @uses self::VALUE_ERROR_EXPIRED_SUBSCRIPTION
     * @uses self::VALUE_ERROR_EXTENSION_NOT_FOUND
     * @uses self::VALUE_ERROR_FOLDER_CORRUPT
     * @uses self::VALUE_ERROR_FOLDER_NOT_FOUND
     * @uses self::VALUE_ERROR_FOLDER_PROPERT_REQUEST_FAILED
     * @uses self::VALUE_ERROR_FOLDER_SAVE
     * @uses self::VALUE_ERROR_FOLDER_SAVE_FAILED
     * @uses self::VALUE_ERROR_FOLDER_SAVE_PROPERTY_ERROR
     * @uses self::VALUE_ERROR_FOLDER_EXISTS
     * @uses self::VALUE_ERROR_FREE_BUSY_GENERATION_FAILED
     * @uses self::VALUE_ERROR_GET_SERVER_SECURITY_DESCRIPTOR_FAILED
     * @uses self::VALUE_ERROR_IM_CONTACT_LIMIT_REACHED
     * @uses self::VALUE_ERROR_IM_GROUP_DISPLAY_NAME_ALREADY_EXISTS
     * @uses self::VALUE_ERROR_IM_GROUP_LIMIT_REACHED
     * @uses self::VALUE_ERROR_IMPERSONATE_USER_DENIED
     * @uses self::VALUE_ERROR_IMPERSONATION_DENIED
     * @uses self::VALUE_ERROR_IMPERSONATION_FAILED
     * @uses self::VALUE_ERROR_INCORRECT_SCHEMA_VERSION
     * @uses self::VALUE_ERROR_INCORRECT_UPDATE_PROPERTY_COUNT
     * @uses self::VALUE_ERROR_INDIVIDUAL_MAILBOX_LIMIT_REACHED
     * @uses self::VALUE_ERROR_INSUFFICIENT_RESOURCES
     * @uses self::VALUE_ERROR_INTERNAL_SERVER_ERROR
     * @uses self::VALUE_ERROR_INTERNAL_SERVER_TRANSIENT_ERROR
     * @uses self::VALUE_ERROR_INVALID_ACCESS_LEVEL
     * @uses self::VALUE_ERROR_INVALID_ARGUMENT
     * @uses self::VALUE_ERROR_INVALID_ATTACHMENT_ID
     * @uses self::VALUE_ERROR_INVALID_ATTACHMENT_SUBFILTER
     * @uses self::VALUE_ERROR_INVALID_ATTACHMENT_SUBFILTER_TEXT_FILTER
     * @uses self::VALUE_ERROR_INVALID_AUTHORIZATION_CONTEXT
     * @uses self::VALUE_ERROR_INVALID_CHANGE_KEY
     * @uses self::VALUE_ERROR_INVALID_CHANNEL_ID
     * @uses self::VALUE_ERROR_INVALID_CHANNEL_SUBSCRIPTION_ID
     * @uses self::VALUE_ERROR_INVALID_CLIENT_SECURITY_CONTEXT
     * @uses self::VALUE_ERROR_INVALID_COMPLETE_DATE
     * @uses self::VALUE_ERROR_INVALID_CONTACT_EMAIL_ADDRESS
     * @uses self::VALUE_ERROR_INVALID_CONTACT_EMAIL_INDEX
     * @uses self::VALUE_ERROR_INVALID_CROSS_FOREST_CREDENTIALS
     * @uses self::VALUE_ERROR_INVALID_DELEGATE_PERMISSION
     * @uses self::VALUE_ERROR_INVALID_DELEGATE_USER_ID
     * @uses self::VALUE_ERROR_INVALID_EXCLUDES_RESTRICTION
     * @uses self::VALUE_ERROR_INVALID_EXPRESSION_TYPE_FOR_SUB_FILTER
     * @uses self::VALUE_ERROR_INVALID_EXTENDED_PROPERTY
     * @uses self::VALUE_ERROR_INVALID_EXTENDED_PROPERTY_VALUE
     * @uses self::VALUE_ERROR_INVALID_FOLDER_ID
     * @uses self::VALUE_ERROR_INVALID_FOLDER_TYPE_FOR_OPERATION
     * @uses self::VALUE_ERROR_INVALID_FRACTIONAL_PAGING_PARAMETERS
     * @uses self::VALUE_ERROR_INVALID_FREE_BUSY_VIEW_TYPE
     * @uses self::VALUE_ERROR_INVALID_ID
     * @uses self::VALUE_ERROR_INVALID_ID_EMPTY
     * @uses self::VALUE_ERROR_INVALID_ID_MALFORMED
     * @uses self::VALUE_ERROR_INVALID_ID_MALFORMED_EWS_LEGACY_ID_FORMAT
     * @uses self::VALUE_ERROR_INVALID_ID_MONIKER_TOO_LONG
     * @uses self::VALUE_ERROR_INVALID_ID_NOT_AN_ITEM_ATTACHMENT_ID
     * @uses self::VALUE_ERROR_INVALID_ID_RETURNED_BY_RESOLVE_NAMES
     * @uses self::VALUE_ERROR_INVALID_ID_STORE_OBJECT_ID_TOO_LONG
     * @uses self::VALUE_ERROR_INVALID_ID_TOO_MANY_ATTACHMENT_LEVELS
     * @uses self::VALUE_ERROR_INVALID_ID_XML
     * @uses self::VALUE_ERROR_INVALID_IM_CONTACT_ID
     * @uses self::VALUE_ERROR_INVALID_IM_DISTRIBUTION_GROUP_SMTP_ADDRESS
     * @uses self::VALUE_ERROR_INVALID_IM_GROUP_ID
     * @uses self::VALUE_ERROR_INVALID_INDEXED_PAGING_PARAMETERS
     * @uses self::VALUE_ERROR_INVALID_INTERNET_HEADER_CHILD_NODES
     * @uses self::VALUE_ERROR_INVALID_ITEM_FOR_OPERATION_ARCHIVE_ITEM
     * @uses self::VALUE_ERROR_INVALID_ITEM_FOR_OPERATION_CREATE_ITEM_ATTACHMENT
     * @uses self::VALUE_ERROR_INVALID_ITEM_FOR_OPERATION_CREATE_ITEM
     * @uses self::VALUE_ERROR_INVALID_ITEM_FOR_OPERATION_ACCEPT_ITEM
     * @uses self::VALUE_ERROR_INVALID_ITEM_FOR_OPERATION_DECLINE_ITEM
     * @uses self::VALUE_ERROR_INVALID_ITEM_FOR_OPERATION_CANCEL_ITEM
     * @uses self::VALUE_ERROR_INVALID_ITEM_FOR_OPERATION_EXPAND_DL
     * @uses self::VALUE_ERROR_INVALID_ITEM_FOR_OPERATION_REMOVE_ITEM
     * @uses self::VALUE_ERROR_INVALID_ITEM_FOR_OPERATION_SEND_ITEM
     * @uses self::VALUE_ERROR_INVALID_ITEM_FOR_OPERATION_TENTATIVE
     * @uses self::VALUE_ERROR_INVALID_LOGON_TYPE
     * @uses self::VALUE_ERROR_INVALID_LIKE_REQUEST
     * @uses self::VALUE_ERROR_INVALID_MAILBOX
     * @uses self::VALUE_ERROR_INVALID_MANAGED_FOLDER_PROPERTY
     * @uses self::VALUE_ERROR_INVALID_MANAGED_FOLDER_QUOTA
     * @uses self::VALUE_ERROR_INVALID_MANAGED_FOLDER_SIZE
     * @uses self::VALUE_ERROR_INVALID_MERGED_FREE_BUSY_INTERVAL
     * @uses self::VALUE_ERROR_INVALID_NAME_FOR_NAME_RESOLUTION
     * @uses self::VALUE_ERROR_INVALID_OPERATION
     * @uses self::VALUE_ERROR_INVALID_NETWORK_SERVICE_CONTEXT
     * @uses self::VALUE_ERROR_INVALID_OOF_PARAMETER
     * @uses self::VALUE_ERROR_INVALID_PAGING_MAX_ROWS
     * @uses self::VALUE_ERROR_INVALID_PARENT_FOLDER
     * @uses self::VALUE_ERROR_INVALID_PERCENT_COMPLETE_VALUE
     * @uses self::VALUE_ERROR_INVALID_PERMISSION_SETTINGS
     * @uses self::VALUE_ERROR_INVALID_PHONE_CALL_ID
     * @uses self::VALUE_ERROR_INVALID_PHONE_NUMBER
     * @uses self::VALUE_ERROR_INVALID_USER_INFO
     * @uses self::VALUE_ERROR_INVALID_PROPERTY_APPEND
     * @uses self::VALUE_ERROR_INVALID_PROPERTY_DELETE
     * @uses self::VALUE_ERROR_INVALID_PROPERTY_FOR_EXISTS
     * @uses self::VALUE_ERROR_INVALID_PROPERTY_FOR_OPERATION
     * @uses self::VALUE_ERROR_INVALID_PROPERTY_REQUEST
     * @uses self::VALUE_ERROR_INVALID_PROPERTY_SET
     * @uses self::VALUE_ERROR_INVALID_PROPERTY_UPDATE_SENT_MESSAGE
     * @uses self::VALUE_ERROR_INVALID_PROXY_SECURITY_CONTEXT
     * @uses self::VALUE_ERROR_INVALID_PULL_SUBSCRIPTION_ID
     * @uses self::VALUE_ERROR_INVALID_PUSH_SUBSCRIPTION_URL
     * @uses self::VALUE_ERROR_INVALID_RECIPIENTS
     * @uses self::VALUE_ERROR_INVALID_RECIPIENT_SUBFILTER
     * @uses self::VALUE_ERROR_INVALID_RECIPIENT_SUBFILTER_COMPARISON
     * @uses self::VALUE_ERROR_INVALID_RECIPIENT_SUBFILTER_ORDER
     * @uses self::VALUE_ERROR_INVALID_RECIPIENT_SUBFILTER_TEXT_FILTER
     * @uses self::VALUE_ERROR_INVALID_REFERENCE_ITEM
     * @uses self::VALUE_ERROR_INVALID_REQUEST
     * @uses self::VALUE_ERROR_INVALID_RESTRICTION
     * @uses self::VALUE_ERROR_INVALID_RETENTION_TAG_TYPE_MISMATCH
     * @uses self::VALUE_ERROR_INVALID_RETENTION_TAG_INVISIBLE
     * @uses self::VALUE_ERROR_INVALID_RETENTION_TAG_INHERITANCE
     * @uses self::VALUE_ERROR_INVALID_RETENTION_TAG_ID_GUID
     * @uses self::VALUE_ERROR_INVALID_ROUTING_TYPE
     * @uses self::VALUE_ERROR_INVALID_SCHEDULED_OOF_DURATION
     * @uses self::VALUE_ERROR_INVALID_SCHEMA_VERSION_FOR_MAILBOX_VERSION
     * @uses self::VALUE_ERROR_INVALID_SECURITY_DESCRIPTOR
     * @uses self::VALUE_ERROR_INVALID_SEND_ITEM_SAVE_SETTINGS
     * @uses self::VALUE_ERROR_INVALID_SERIALIZED_ACCESS_TOKEN
     * @uses self::VALUE_ERROR_INVALID_SERVER_VERSION
     * @uses self::VALUE_ERROR_INVALID_SID
     * @uses self::VALUE_ERROR_INVALID_SIPURI
     * @uses self::VALUE_ERROR_INVALID_SMTP_ADDRESS
     * @uses self::VALUE_ERROR_INVALID_SUBFILTER_TYPE
     * @uses self::VALUE_ERROR_INVALID_SUBFILTER_TYPE_NOT_ATTENDEE_TYPE
     * @uses self::VALUE_ERROR_INVALID_SUBFILTER_TYPE_NOT_RECIPIENT_TYPE
     * @uses self::VALUE_ERROR_INVALID_SUBSCRIPTION
     * @uses self::VALUE_ERROR_INVALID_SUBSCRIPTION_REQUEST
     * @uses self::VALUE_ERROR_INVALID_SYNC_STATE_DATA
     * @uses self::VALUE_ERROR_INVALID_TIME_INTERVAL
     * @uses self::VALUE_ERROR_INVALID_USER_OOF_SETTINGS
     * @uses self::VALUE_ERROR_INVALID_USER_PRINCIPAL_NAME
     * @uses self::VALUE_ERROR_INVALID_USER_SID
     * @uses self::VALUE_ERROR_INVALID_USER_SID_MISSING_UPN
     * @uses self::VALUE_ERROR_INVALID_VALUE_FOR_PROPERTY
     * @uses self::VALUE_ERROR_INVALID_WATERMARK
     * @uses self::VALUE_ERROR_IPGATEWAY_NOT_FOUND
     * @uses self::VALUE_ERROR_IRRESOLVABLE_CONFLICT
     * @uses self::VALUE_ERROR_ITEM_CORRUPT
     * @uses self::VALUE_ERROR_ITEM_NOT_FOUND
     * @uses self::VALUE_ERROR_ITEM_PROPERTY_REQUEST_FAILED
     * @uses self::VALUE_ERROR_ITEM_SAVE
     * @uses self::VALUE_ERROR_ITEM_SAVE_PROPERTY_ERROR
     * @uses self::VALUE_ERROR_LEGACY_MAILBOX_FREE_BUSY_VIEW_TYPE_NOT_MERGED
     * @uses self::VALUE_ERROR_LOCAL_SERVER_OBJECT_NOT_FOUND
     * @uses self::VALUE_ERROR_LOGON_AS_NETWORK_SERVICE_FAILED
     * @uses self::VALUE_ERROR_MAILBOX_CONFIGURATION
     * @uses self::VALUE_ERROR_MAILBOX_DATA_ARRAY_EMPTY
     * @uses self::VALUE_ERROR_MAILBOX_DATA_ARRAY_TOO_BIG
     * @uses self::VALUE_ERROR_MAILBOX_HOLD_NOT_FOUND
     * @uses self::VALUE_ERROR_MAILBOX_LOGON_FAILED
     * @uses self::VALUE_ERROR_MAILBOX_MOVE_IN_PROGRESS
     * @uses self::VALUE_ERROR_MAILBOX_STORE_UNAVAILABLE
     * @uses self::VALUE_ERROR_MAIL_RECIPIENT_NOT_FOUND
     * @uses self::VALUE_ERROR_MAIL_TIPS_DISABLED
     * @uses self::VALUE_ERROR_MANAGED_FOLDER_ALREADY_EXISTS
     * @uses self::VALUE_ERROR_MANAGED_FOLDER_NOT_FOUND
     * @uses self::VALUE_ERROR_MANAGED_FOLDERS_ROOT_FAILURE
     * @uses self::VALUE_ERROR_MEETING_SUGGESTION_GENERATION_FAILED
     * @uses self::VALUE_ERROR_MESSAGE_DISPOSITION_REQUIRED
     * @uses self::VALUE_ERROR_MESSAGE_SIZE_EXCEEDED
     * @uses self::VALUE_ERROR_MIME_CONTENT_CONVERSION_FAILED
     * @uses self::VALUE_ERROR_MIME_CONTENT_INVALID
     * @uses self::VALUE_ERROR_MIME_CONTENT_INVALID_BASE_64_STRING
     * @uses self::VALUE_ERROR_MISSING_ARGUMENT
     * @uses self::VALUE_ERROR_MISSING_EMAIL_ADDRESS
     * @uses self::VALUE_ERROR_MISSING_EMAIL_ADDRESS_FOR_MANAGED_FOLDER
     * @uses self::VALUE_ERROR_MISSING_INFORMATION_EMAIL_ADDRESS
     * @uses self::VALUE_ERROR_MISSING_INFORMATION_REFERENCE_ITEM_ID
     * @uses self::VALUE_ERROR_MISSING_ITEM_FOR_CREATE_ITEM_ATTACHMENT
     * @uses self::VALUE_ERROR_MISSING_MANAGED_FOLDER_ID
     * @uses self::VALUE_ERROR_MISSING_RECIPIENTS
     * @uses self::VALUE_ERROR_MISSING_USER_ID_INFORMATION
     * @uses self::VALUE_ERROR_MORE_THAN_ONE_ACCESS_MODE_SPECIFIED
     * @uses self::VALUE_ERROR_MOVE_COPY_FAILED
     * @uses self::VALUE_ERROR_MOVE_DISTINGUISHED_FOLDER
     * @uses self::VALUE_ERROR_MULTI_LEGACY_MAILBOX_ACCESS
     * @uses self::VALUE_ERROR_NAME_RESOLUTION_MULTIPLE_RESULTS
     * @uses self::VALUE_ERROR_NAME_RESOLUTION_NO_MAILBOX
     * @uses self::VALUE_ERROR_NAME_RESOLUTION_NO_RESULTS
     * @uses self::VALUE_ERROR_NEW_CHANNEL_CONNECTION_OPENED
     * @uses self::VALUE_ERROR_NO_APPLICABLE_PROXY_CASSERVERS_AVAILABLE
     * @uses self::VALUE_ERROR_NO_CALENDAR
     * @uses self::VALUE_ERROR_NO_DESTINATION_CASDUE_TO_KERBEROS_REQUIREMENTS
     * @uses self::VALUE_ERROR_NO_DESTINATION_CASDUE_TO_SSLREQUIREMENTS
     * @uses self::VALUE_ERROR_NO_DESTINATION_CASDUE_TO_VERSION_MISMATCH
     * @uses self::VALUE_ERROR_NO_FOLDER_CLASS_OVERRIDE
     * @uses self::VALUE_ERROR_NO_FREE_BUSY_ACCESS
     * @uses self::VALUE_ERROR_NON_EXISTENT_MAILBOX
     * @uses self::VALUE_ERROR_NON_PRIMARY_SMTP_ADDRESS
     * @uses self::VALUE_ERROR_NO_PROPERTY_TAG_FOR_CUSTOM_PROPERTIES
     * @uses self::VALUE_ERROR_NO_PUBLIC_FOLDER_REPLICA_AVAILABLE
     * @uses self::VALUE_ERROR_NO_PUBLIC_FOLDER_SERVER_AVAILABLE
     * @uses self::VALUE_ERROR_NO_RESPONDING_CASIN_DESTINATION_SITE
     * @uses self::VALUE_ERROR_NOT_DELEGATE
     * @uses self::VALUE_ERROR_NOT_ENOUGH_MEMORY
     * @uses self::VALUE_ERROR_OBJECT_TYPE_CHANGED
     * @uses self::VALUE_ERROR_OCCURRENCE_CROSSING_BOUNDARY
     * @uses self::VALUE_ERROR_OCCURRENCE_TIME_SPAN_TOO_BIG
     * @uses self::VALUE_ERROR_OPERATION_NOT_ALLOWED_WITH_PUBLIC_FOLDER_ROOT
     * @uses self::VALUE_ERROR_PARENT_FOLDER_ID_REQUIRED
     * @uses self::VALUE_ERROR_PARENT_FOLDER_NOT_FOUND
     * @uses self::VALUE_ERROR_PASSWORD_CHANGE_REQUIRED
     * @uses self::VALUE_ERROR_PASSWORD_EXPIRED
     * @uses self::VALUE_ERROR_PHONE_NUMBER_NOT_DIALABLE
     * @uses self::VALUE_ERROR_PROPERTY_UPDATE
     * @uses self::VALUE_ERROR_PROMPT_PUBLISHING_OPERATION_FAILED
     * @uses self::VALUE_ERROR_PROPERTY_VALIDATION_FAILURE
     * @uses self::VALUE_ERROR_PROXIED_SUBSCRIPTION_CALL_FAILURE
     * @uses self::VALUE_ERROR_PROXY_CALL_FAILED
     * @uses self::VALUE_ERROR_PROXY_GROUP_SID_LIMIT_EXCEEDED
     * @uses self::VALUE_ERROR_PROXY_REQUEST_NOT_ALLOWED
     * @uses self::VALUE_ERROR_PROXY_REQUEST_PROCESSING_FAILED
     * @uses self::VALUE_ERROR_PROXY_SERVICE_DISCOVERY_FAILED
     * @uses self::VALUE_ERROR_PROXY_TOKEN_EXPIRED
     * @uses self::VALUE_ERROR_PUBLIC_FOLDER_MAILBOX_DISCOVERY_FAILED
     * @uses self::VALUE_ERROR_PUBLIC_FOLDER_OPERATION_FAILED
     * @uses self::VALUE_ERROR_PUBLIC_FOLDER_REQUEST_PROCESSING_FAILED
     * @uses self::VALUE_ERROR_PUBLIC_FOLDER_SERVER_NOT_FOUND
     * @uses self::VALUE_ERROR_PUBLIC_FOLDER_SYNC_EXCEPTION
     * @uses self::VALUE_ERROR_QUERY_FILTER_TOO_LONG
     * @uses self::VALUE_ERROR_QUOTA_EXCEEDED
     * @uses self::VALUE_ERROR_READ_EVENTS_FAILED
     * @uses self::VALUE_ERROR_READ_RECEIPT_NOT_PENDING
     * @uses self::VALUE_ERROR_RECURRENCE_END_DATE_TOO_BIG
     * @uses self::VALUE_ERROR_RECURRENCE_HAS_NO_OCCURRENCE
     * @uses self::VALUE_ERROR_REMOVE_DELEGATES_FAILED
     * @uses self::VALUE_ERROR_REQUEST_ABORTED
     * @uses self::VALUE_ERROR_REQUEST_STREAM_TOO_BIG
     * @uses self::VALUE_ERROR_REQUIRED_PROPERTY_MISSING
     * @uses self::VALUE_ERROR_RESOLVE_NAMES_INVALID_FOLDER_TYPE
     * @uses self::VALUE_ERROR_RESOLVE_NAMES_ONLY_ONE_CONTACTS_FOLDER_ALLOWED
     * @uses self::VALUE_ERROR_RESPONSE_SCHEMA_VALIDATION
     * @uses self::VALUE_ERROR_RESTRICTION_TOO_LONG
     * @uses self::VALUE_ERROR_RESTRICTION_TOO_COMPLEX
     * @uses self::VALUE_ERROR_RESULT_SET_TOO_BIG
     * @uses self::VALUE_ERROR_INVALID_EXCHANGE_IMPERSONATION_HEADER_DATA
     * @uses self::VALUE_ERROR_SAVED_ITEM_FOLDER_NOT_FOUND
     * @uses self::VALUE_ERROR_SCHEMA_VALIDATION
     * @uses self::VALUE_ERROR_SEARCH_FOLDER_NOT_INITIALIZED
     * @uses self::VALUE_ERROR_SEND_AS_DENIED
     * @uses self::VALUE_ERROR_SEND_MEETING_CANCELLATIONS_REQUIRED
     * @uses self::VALUE_ERROR_SEND_MEETING_INVITATIONS_OR_CANCELLATIONS_REQUIRED
     * @uses self::VALUE_ERROR_SEND_MEETING_INVITATIONS_REQUIRED
     * @uses self::VALUE_ERROR_SENT_MEETING_REQUEST_UPDATE
     * @uses self::VALUE_ERROR_SENT_TASK_REQUEST_UPDATE
     * @uses self::VALUE_ERROR_SERVER_BUSY
     * @uses self::VALUE_ERROR_SERVICE_DISCOVERY_FAILED
     * @uses self::VALUE_ERROR_STALE_OBJECT
     * @uses self::VALUE_ERROR_SUBMISSION_QUOTA_EXCEEDED
     * @uses self::VALUE_ERROR_SUBSCRIPTION_ACCESS_DENIED
     * @uses self::VALUE_ERROR_SUBSCRIPTION_DELEGATE_ACCESS_NOT_SUPPORTED
     * @uses self::VALUE_ERROR_SUBSCRIPTION_NOT_FOUND
     * @uses self::VALUE_ERROR_SUBSCRIPTION_UNSUBSCRIBED
     * @uses self::VALUE_ERROR_SYNC_FOLDER_NOT_FOUND
     * @uses self::VALUE_ERROR_TEAM_MAILBOX_NOT_FOUND
     * @uses self::VALUE_ERROR_TEAM_MAILBOX_NOT_LINKED_TO_SHARE_POINT
     * @uses self::VALUE_ERROR_TEAM_MAILBOX_URL_VALIDATION_FAILED
     * @uses self::VALUE_ERROR_TEAM_MAILBOX_NOT_AUTHORIZED_OWNER
     * @uses self::VALUE_ERROR_TEAM_MAILBOX_ACTIVE_TO_PENDING_DELETE
     * @uses self::VALUE_ERROR_TEAM_MAILBOX_FAILED_SENDING_NOTIFICATIONS
     * @uses self::VALUE_ERROR_TEAM_MAILBOX_ERROR_UNKNOWN
     * @uses self::VALUE_ERROR_TIME_INTERVAL_TOO_BIG
     * @uses self::VALUE_ERROR_TIMEOUT_EXPIRED
     * @uses self::VALUE_ERROR_TIME_ZONE
     * @uses self::VALUE_ERROR_TO_FOLDER_NOT_FOUND
     * @uses self::VALUE_ERROR_TOKEN_SERIALIZATION_DENIED
     * @uses self::VALUE_ERROR_TOO_MANY_OBJECTS_OPENED
     * @uses self::VALUE_ERROR_UPDATE_PROPERTY_MISMATCH
     * @uses self::VALUE_ERROR_UNIFIED_GROUP_MAILBOX_AADCREATION_FAILED
     * @uses self::VALUE_ERROR_UNIFIED_GROUP_MAILBOX_AADDELETE_FAILED
     * @uses self::VALUE_ERROR_UNIFIED_GROUP_MAILBOX_NAMING_POLICY
     * @uses self::VALUE_ERROR_UNIFIED_GROUP_MAILBOX_DELETE_FAILED
     * @uses self::VALUE_ERROR_UNIFIED_GROUP_MAILBOX_NOT_FOUND
     * @uses self::VALUE_ERROR_UNIFIED_GROUP_MAILBOX_UPDATE_DELAYED
     * @uses self::VALUE_ERROR_UNIFIED_GROUP_MAILBOX_UPDATED_PARTIAL_PROPERTIES
     * @uses self::VALUE_ERROR_UNIFIED_GROUP_MAILBOX_UPDATE_FAILED
     * @uses self::VALUE_ERROR_UNIFIED_GROUP_MAILBOX_PROVISION_FAILED
     * @uses self::VALUE_ERROR_UNIFIED_MESSAGING_DIAL_PLAN_NOT_FOUND
     * @uses self::VALUE_ERROR_UNIFIED_MESSAGING_REPORT_DATA_NOT_FOUND
     * @uses self::VALUE_ERROR_UNIFIED_MESSAGING_PROMPT_NOT_FOUND
     * @uses self::VALUE_ERROR_UNIFIED_MESSAGING_REQUEST_FAILED
     * @uses self::VALUE_ERROR_UNIFIED_MESSAGING_SERVER_NOT_FOUND
     * @uses self::VALUE_ERROR_UNABLE_TO_GET_USER_OOF_SETTINGS
     * @uses self::VALUE_ERROR_UNABLE_TO_REMOVE_IM_CONTACT_FROM_GROUP
     * @uses self::VALUE_ERROR_UNSUPPORTED_SUB_FILTER
     * @uses self::VALUE_ERROR_UNSUPPORTED_CULTURE
     * @uses self::VALUE_ERROR_UNSUPPORTED_MAPI_PROPERTY_TYPE
     * @uses self::VALUE_ERROR_UNSUPPORTED_MIME_CONVERSION
     * @uses self::VALUE_ERROR_UNSUPPORTED_PATH_FOR_QUERY
     * @uses self::VALUE_ERROR_UNSUPPORTED_PATH_FOR_SORT_GROUP
     * @uses self::VALUE_ERROR_UNSUPPORTED_PROPERTY_DEFINITION
     * @uses self::VALUE_ERROR_UNSUPPORTED_QUERY_FILTER
     * @uses self::VALUE_ERROR_UNSUPPORTED_RECURRENCE
     * @uses self::VALUE_ERROR_UNSUPPORTED_TYPE_FOR_CONVERSION
     * @uses self::VALUE_ERROR_UPDATE_DELEGATES_FAILED
     * @uses self::VALUE_ERROR_USER_NOT_UNIFIED_MESSAGING_ENABLED
     * @uses self::VALUE_ERROR_VOICE_MAIL_NOT_IMPLEMENTED
     * @uses self::VALUE_ERROR_VALUE_OUT_OF_RANGE
     * @uses self::VALUE_ERROR_VIRUS_DETECTED
     * @uses self::VALUE_ERROR_VIRUS_MESSAGE_DELETED
     * @uses self::VALUE_ERROR_WEB_REQUEST_IN_INVALID_STATE
     * @uses self::VALUE_ERROR_WIN_32_INTEROP_ERROR
     * @uses self::VALUE_ERROR_WORKING_HOURS_SAVE_FAILED
     * @uses self::VALUE_ERROR_WORKING_HOURS_XML_MALFORMED
     * @uses self::VALUE_ERROR_WRONG_SERVER_VERSION
     * @uses self::VALUE_ERROR_WRONG_SERVER_VERSION_DELEGATE
     * @uses self::VALUE_ERROR_MISSING_INFORMATION_SHARING_FOLDER_ID
     * @uses self::VALUE_ERROR_DUPLICATE_SOAPHEADER
     * @uses self::VALUE_ERROR_SHARING_SYNCHRONIZATION_FAILED
     * @uses self::VALUE_ERROR_SHARING_NO_EXTERNAL_EWS_AVAILABLE
     * @uses self::VALUE_ERROR_FREE_BUSY_DLLIMIT_REACHED
     * @uses self::VALUE_ERROR_INVALID_GET_SHARING_FOLDER_REQUEST
     * @uses self::VALUE_ERROR_NOT_ALLOWED_EXTERNAL_SHARING_BY_POLICY
     * @uses self::VALUE_ERROR_USER_NOT_ALLOWED_BY_POLICY
     * @uses self::VALUE_ERROR_PERMISSION_NOT_ALLOWED_BY_POLICY
     * @uses self::VALUE_ERROR_ORGANIZATION_NOT_FEDERATED
     * @uses self::VALUE_ERROR_MAILBOX_FAILOVER
     * @uses self::VALUE_ERROR_INVALID_EXTERNAL_SHARING_INITIATOR
     * @uses self::VALUE_ERROR_MESSAGE_TRACKING_PERMANENT_ERROR
     * @uses self::VALUE_ERROR_MESSAGE_TRACKING_TRANSIENT_ERROR
     * @uses self::VALUE_ERROR_MESSAGE_TRACKING_NO_SUCH_DOMAIN
     * @uses self::VALUE_ERROR_USER_WITHOUT_FEDERATED_PROXY_ADDRESS
     * @uses self::VALUE_ERROR_INVALID_ORGANIZATION_RELATIONSHIP_FOR_FREE_BUSY
     * @uses self::VALUE_ERROR_INVALID_FEDERATED_ORGANIZATION_ID
     * @uses self::VALUE_ERROR_INVALID_EXTERNAL_SHARING_SUBSCRIBER
     * @uses self::VALUE_ERROR_INVALID_SHARING_DATA
     * @uses self::VALUE_ERROR_INVALID_SHARING_MESSAGE
     * @uses self::VALUE_ERROR_NOT_SUPPORTED_SHARING_MESSAGE
     * @uses self::VALUE_ERROR_APPLY_CONVERSATION_ACTION_FAILED
     * @uses self::VALUE_ERROR_INBOX_RULES_VALIDATION_ERROR
     * @uses self::VALUE_ERROR_OUTLOOK_RULE_BLOB_EXISTS
     * @uses self::VALUE_ERROR_RULES_OVER_QUOTA
     * @uses self::VALUE_ERROR_NEW_EVENT_STREAM_CONNECTION_OPENED
     * @uses self::VALUE_ERROR_MISSED_NOTIFICATION_EVENTS
     * @uses self::VALUE_ERROR_DUPLICATE_LEGACY_DISTINGUISHED_NAME
     * @uses self::VALUE_ERROR_INVALID_CLIENT_ACCESS_TOKEN_REQUEST
     * @uses self::VALUE_ERROR_NO_SPEECH_DETECTED
     * @uses self::VALUE_ERROR_UMSERVER_UNAVAILABLE
     * @uses self::VALUE_ERROR_RECIPIENT_NOT_FOUND
     * @uses self::VALUE_ERROR_RECOGNIZER_NOT_INSTALLED
     * @uses self::VALUE_ERROR_SPEECH_GRAMMAR_ERROR
     * @uses self::VALUE_ERROR_INVALID_MANAGEMENT_ROLE_HEADER
     * @uses self::VALUE_ERROR_LOCATION_SERVICES_DISABLED
     * @uses self::VALUE_ERROR_LOCATION_SERVICES_REQUEST_TIMED_OUT
     * @uses self::VALUE_ERROR_LOCATION_SERVICES_REQUEST_FAILED
     * @uses self::VALUE_ERROR_LOCATION_SERVICES_INVALID_REQUEST
     * @uses self::VALUE_ERROR_WEATHER_SERVICE_DISABLED
     * @uses self::VALUE_ERROR_MAILBOX_SCOPE_NOT_ALLOWED_WITHOUT_QUERY_STRING
     * @uses self::VALUE_ERROR_ARCHIVE_MAILBOX_SEARCH_FAILED
     * @uses self::VALUE_ERROR_GET_REMOTE_ARCHIVE_FOLDER_FAILED
     * @uses self::VALUE_ERROR_FIND_REMOTE_ARCHIVE_FOLDER_FAILED
     * @uses self::VALUE_ERROR_GET_REMOTE_ARCHIVE_ITEM_FAILED
     * @uses self::VALUE_ERROR_EXPORT_REMOTE_ARCHIVE_ITEMS_FAILED
     * @uses self::VALUE_ERROR_INVALID_PHOTO_SIZE
     * @uses self::VALUE_ERROR_SEARCH_QUERY_HAS_TOO_MANY_KEYWORDS
     * @uses self::VALUE_ERROR_SEARCH_TOO_MANY_MAILBOXES
     * @uses self::VALUE_ERROR_INVALID_RETENTION_TAG_NONE
     * @uses self::VALUE_ERROR_DISCOVERY_SEARCHES_DISABLED
     * @uses self::VALUE_ERROR_CALENDAR_SEEK_TO_CONDITION_NOT_SUPPORTED
     * @uses self::VALUE_ERROR_CALENDAR_IS_GROUP_MAILBOX_FOR_ACCEPT
     * @uses self::VALUE_ERROR_CALENDAR_IS_GROUP_MAILBOX_FOR_DECLINE
     * @uses self::VALUE_ERROR_CALENDAR_IS_GROUP_MAILBOX_FOR_TENTATIVE
     * @uses self::VALUE_ERROR_CALENDAR_IS_GROUP_MAILBOX_FOR_SUPPRESS_READ_RECEIPT
     * @uses self::VALUE_ERROR_ORGANIZATION_ACCESS_BLOCKED
     * @uses self::VALUE_ERROR_INVALID_LICENSE
     * @uses self::VALUE_ERROR_MESSAGE_PER_FOLDER_COUNT_RECEIVE_QUOTA_EXCEEDED
     * @uses self::VALUE_ERROR_INVALID_BULK_ACTION_TYPE
     * @uses self::VALUE_ERROR_INVALID_KEEP_NCOUNT
     * @uses self::VALUE_ERROR_INVALID_KEEP_NTYPE
     * @uses self::VALUE_ERROR_NO_OAUTH_SERVER_AVAILABLE_FOR_REQUEST
     * @uses self::VALUE_ERROR_INSTANT_SEARCH_SESSION_EXPIRED
     * @uses self::VALUE_ERROR_INSTANT_SEARCH_TIMEOUT
     * @uses self::VALUE_ERROR_INSTANT_SEARCH_FAILED
     * @uses self::VALUE_ERROR_UNSUPPORTED_USER_FOR_EXECUTE_SEARCH
     * @uses self::VALUE_ERROR_MISSING_EXCHANGE_PRINCIPAL
     * @uses self::VALUE_ERROR_UNEXPECTED_UNIFIED_GROUPS_COUNT
     * @uses self::VALUE_ERROR_PARSING_XMLRESPONSE
     * @uses self::VALUE_ERROR_INVALID_FEDERATION_ORGANIZATION_IDENTIFIER
     * @uses self::VALUE_ERROR_INVALID_SWEEP_RULE
     * @uses self::VALUE_ERROR_INVALID_SWEEP_RULE_OPERATION_TYPE
     * @uses self::VALUE_ERROR_TARGET_DOMAIN_NOT_SUPPORTED
     * @uses self::VALUE_ERROR_INVALID_INTERNET_WEB_PROXY_ON_LOCAL_SERVER
     * @uses self::VALUE_ERROR_NO_SENDER_RESTRICTIONS_SETTINGS_FOUND_IN_REQUEST
     * @uses self::VALUE_ERROR_DUPLICATE_SENDER_RESTRICTIONS_INPUT_FOUND
     * @uses self::VALUE_ERROR_SENDER_RESTRICTIONS_UPDATE_FAILED
     * @uses self::VALUE_ERROR_MESSAGE_SUBMISSION_BLOCKED
     * @uses self::VALUE_ERROR_EXCEEDED_MESSAGE_LIMIT
     * @uses self::VALUE_ERROR_EXCEEDED_MAX_RECIPIENT_LIMIT_BLOCK
     * @uses self::VALUE_ERROR_ACCOUNT_SUSPEND
     * @uses self::VALUE_ERROR_EXCEEDED_MAX_RECIPIENT_LIMIT
     * @uses self::VALUE_ERROR_MESSAGE_BLOCKED
     * @uses self::VALUE_ERROR_ACCOUNT_SUSPEND_SHOW_TIER_UPGRADE
     * @uses self::VALUE_ERROR_EXCEEDED_MESSAGE_LIMIT_SHOW_TIER_UPGRADE
     * @uses self::VALUE_ERROR_EXCEEDED_MAX_RECIPIENT_LIMIT_SHOW_TIER_UPGRADE
     * @uses self::VALUE_ERROR_INVALID_LONGITUDE
     * @uses self::VALUE_ERROR_INVALID_LATITUDE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NO_ERROR,
            self::VALUE_ERROR_ACCESS_DENIED,
            self::VALUE_ERROR_ACCESS_MODE_SPECIFIED,
            self::VALUE_ERROR_ACCOUNT_DISABLED,
            self::VALUE_ERROR_ADD_DELEGATES_FAILED,
            self::VALUE_ERROR_ADDRESS_SPACE_NOT_FOUND,
            self::VALUE_ERROR_ADOPERATION,
            self::VALUE_ERROR_ADSESSION_FILTER,
            self::VALUE_ERROR_ADUNAVAILABLE,
            self::VALUE_ERROR_AUTO_DISCOVER_FAILED,
            self::VALUE_ERROR_AFFECTED_TASK_OCCURRENCES_REQUIRED,
            self::VALUE_ERROR_ATTACHMENT_NEST_LEVEL_LIMIT_EXCEEDED,
            self::VALUE_ERROR_ATTACHMENT_SIZE_LIMIT_EXCEEDED,
            self::VALUE_ERROR_ARCHIVE_FOLDER_PATH_CREATION,
            self::VALUE_ERROR_ARCHIVE_MAILBOX_NOT_ENABLED,
            self::VALUE_ERROR_ARCHIVE_MAILBOX_SERVICE_DISCOVERY_FAILED,
            self::VALUE_ERROR_AVAILABILITY_CONFIG_NOT_FOUND,
            self::VALUE_ERROR_BATCH_PROCESSING_STOPPED,
            self::VALUE_ERROR_CALENDAR_CANNOT_MOVE_OR_COPY_OCCURRENCE,
            self::VALUE_ERROR_CALENDAR_CANNOT_UPDATE_DELETED_ITEM,
            self::VALUE_ERROR_CALENDAR_CANNOT_USE_ID_FOR_OCCURRENCE_ID,
            self::VALUE_ERROR_CALENDAR_CANNOT_USE_ID_FOR_RECURRING_MASTER_ID,
            self::VALUE_ERROR_CALENDAR_DURATION_IS_TOO_LONG,
            self::VALUE_ERROR_CALENDAR_END_DATE_IS_EARLIER_THAN_START_DATE,
            self::VALUE_ERROR_CALENDAR_FOLDER_IS_INVALID_FOR_CALENDAR_VIEW,
            self::VALUE_ERROR_CALENDAR_INVALID_ATTRIBUTE_VALUE,
            self::VALUE_ERROR_CALENDAR_INVALID_DAY_FOR_TIME_CHANGE_PATTERN,
            self::VALUE_ERROR_CALENDAR_INVALID_DAY_FOR_WEEKLY_RECURRENCE,
            self::VALUE_ERROR_CALENDAR_INVALID_PROPERTY_STATE,
            self::VALUE_ERROR_CALENDAR_INVALID_PROPERTY_VALUE,
            self::VALUE_ERROR_CALENDAR_INVALID_RECURRENCE,
            self::VALUE_ERROR_CALENDAR_INVALID_TIME_ZONE,
            self::VALUE_ERROR_CALENDAR_IS_CANCELLED_FOR_ACCEPT,
            self::VALUE_ERROR_CALENDAR_IS_CANCELLED_FOR_DECLINE,
            self::VALUE_ERROR_CALENDAR_IS_CANCELLED_FOR_REMOVE,
            self::VALUE_ERROR_CALENDAR_IS_CANCELLED_FOR_TENTATIVE,
            self::VALUE_ERROR_CALENDAR_IS_DELEGATED_FOR_ACCEPT,
            self::VALUE_ERROR_CALENDAR_IS_DELEGATED_FOR_DECLINE,
            self::VALUE_ERROR_CALENDAR_IS_DELEGATED_FOR_REMOVE,
            self::VALUE_ERROR_CALENDAR_IS_DELEGATED_FOR_TENTATIVE,
            self::VALUE_ERROR_CALENDAR_IS_NOT_ORGANIZER,
            self::VALUE_ERROR_CALENDAR_IS_ORGANIZER_FOR_ACCEPT,
            self::VALUE_ERROR_CALENDAR_IS_ORGANIZER_FOR_DECLINE,
            self::VALUE_ERROR_CALENDAR_IS_ORGANIZER_FOR_REMOVE,
            self::VALUE_ERROR_CALENDAR_IS_ORGANIZER_FOR_TENTATIVE,
            self::VALUE_ERROR_CALENDAR_OCCURRENCE_INDEX_IS_OUT_OF_RECURRENCE_RANGE,
            self::VALUE_ERROR_CALENDAR_OCCURRENCE_IS_DELETED_FROM_RECURRENCE,
            self::VALUE_ERROR_CALENDAR_OUT_OF_RANGE,
            self::VALUE_ERROR_CALENDAR_MEETING_REQUEST_IS_OUT_OF_DATE,
            self::VALUE_ERROR_CALENDAR_VIEW_RANGE_TOO_BIG,
            self::VALUE_ERROR_CALLER_IS_INVALID_ADACCOUNT,
            self::VALUE_ERROR_CANNOT_ARCHIVE_CALENDAR_CONTACT_TASK_FOLDER_EXCEPTION,
            self::VALUE_ERROR_CANNOT_ARCHIVE_ITEMS_IN_PUBLIC_FOLDERS,
            self::VALUE_ERROR_CANNOT_ARCHIVE_ITEMS_IN_ARCHIVE_MAILBOX,
            self::VALUE_ERROR_CANNOT_CREATE_CALENDAR_ITEM_IN_NON_CALENDAR_FOLDER,
            self::VALUE_ERROR_CANNOT_CREATE_CONTACT_IN_NON_CONTACT_FOLDER,
            self::VALUE_ERROR_CANNOT_CREATE_POST_ITEM_IN_NON_MAIL_FOLDER,
            self::VALUE_ERROR_CANNOT_CREATE_TASK_IN_NON_TASK_FOLDER,
            self::VALUE_ERROR_CANNOT_DELETE_OBJECT,
            self::VALUE_ERROR_CANNOT_DISABLE_MANDATORY_EXTENSION,
            self::VALUE_ERROR_CANNOT_FIND_USER,
            self::VALUE_ERROR_CANNOT_GET_SOURCE_FOLDER_PATH,
            self::VALUE_ERROR_CANNOT_GET_EXTERNAL_ECP_URL,
            self::VALUE_ERROR_CANNOT_OPEN_FILE_ATTACHMENT,
            self::VALUE_ERROR_CANNOT_DELETE_TASK_OCCURRENCE,
            self::VALUE_ERROR_CANNOT_EMPTY_FOLDER,
            self::VALUE_ERROR_CANNOT_SET_CALENDAR_PERMISSION_ON_NON_CALENDAR_FOLDER,
            self::VALUE_ERROR_CANNOT_SET_NON_CALENDAR_PERMISSION_ON_CALENDAR_FOLDER,
            self::VALUE_ERROR_CANNOT_SET_PERMISSION_UNKNOWN_ENTRIES,
            self::VALUE_ERROR_CANNOT_SPECIFY_SEARCH_FOLDER_AS_SOURCE_FOLDER,
            self::VALUE_ERROR_CANNOT_USE_FOLDER_ID_FOR_ITEM_ID,
            self::VALUE_ERROR_CANNOT_USE_ITEM_ID_FOR_FOLDER_ID,
            self::VALUE_ERROR_CHANGE_KEY_REQUIRED,
            self::VALUE_ERROR_CHANGE_KEY_REQUIRED_FOR_WRITE_OPERATIONS,
            self::VALUE_ERROR_CHANNEL_SUBSCRIPTION_ALREADY_EXISTS,
            self::VALUE_ERROR_CHANNEL_SUBSCRIPTION_NOT_FOUND,
            self::VALUE_ERROR_CLIENT_DISCONNECTED,
            self::VALUE_ERROR_CLIENT_INTENT_INVALID_STATE_DEFINITION,
            self::VALUE_ERROR_CLIENT_INTENT_NOT_FOUND,
            self::VALUE_ERROR_CONNECTION_FAILED,
            self::VALUE_ERROR_CONTAINS_FILTER_WRONG_TYPE,
            self::VALUE_ERROR_CONTENT_CONVERSION_FAILED,
            self::VALUE_ERROR_CONTENT_INDEXING_NOT_ENABLED,
            self::VALUE_ERROR_CORRUPT_DATA,
            self::VALUE_ERROR_CREATE_ITEM_ACCESS_DENIED,
            self::VALUE_ERROR_CREATE_MANAGED_FOLDER_PARTIAL_COMPLETION,
            self::VALUE_ERROR_CREATE_SUBFOLDER_ACCESS_DENIED,
            self::VALUE_ERROR_CROSS_MAILBOX_MOVE_COPY,
            self::VALUE_ERROR_CROSS_SITE_REQUEST,
            self::VALUE_ERROR_DATA_SIZE_LIMIT_EXCEEDED,
            self::VALUE_ERROR_DATA_SOURCE_OPERATION,
            self::VALUE_ERROR_DELEGATE_ALREADY_EXISTS,
            self::VALUE_ERROR_DELEGATE_CANNOT_ADD_OWNER,
            self::VALUE_ERROR_DELEGATE_MISSING_CONFIGURATION,
            self::VALUE_ERROR_DELEGATE_NO_USER,
            self::VALUE_ERROR_DELEGATE_VALIDATION_FAILED,
            self::VALUE_ERROR_DELETE_DISTINGUISHED_FOLDER,
            self::VALUE_ERROR_DELETE_ITEMS_FAILED,
            self::VALUE_ERROR_DELETE_UNIFIED_MESSAGING_PROMPT_FAILED,
            self::VALUE_ERROR_DISTINGUISHED_USER_NOT_SUPPORTED,
            self::VALUE_ERROR_DISTRIBUTION_LIST_MEMBER_NOT_EXIST,
            self::VALUE_ERROR_DUPLICATE_INPUT_FOLDER_NAMES,
            self::VALUE_ERROR_DUPLICATE_USER_IDS_SPECIFIED,
            self::VALUE_ERROR_EMAIL_ADDRESS_MISMATCH,
            self::VALUE_ERROR_EVENT_NOT_FOUND,
            self::VALUE_ERROR_EXCEEDED_CHANNEL_SUBSCRIPTION_COUNT,
            self::VALUE_ERROR_EXCEEDED_CONNECTION_COUNT,
            self::VALUE_ERROR_EXCEEDED_SUBSCRIPTION_COUNT,
            self::VALUE_ERROR_EXCEEDED_FIND_COUNT_LIMIT,
            self::VALUE_ERROR_EXPIRED_SUBSCRIPTION,
            self::VALUE_ERROR_EXTENSION_NOT_FOUND,
            self::VALUE_ERROR_FOLDER_CORRUPT,
            self::VALUE_ERROR_FOLDER_NOT_FOUND,
            self::VALUE_ERROR_FOLDER_PROPERT_REQUEST_FAILED,
            self::VALUE_ERROR_FOLDER_SAVE,
            self::VALUE_ERROR_FOLDER_SAVE_FAILED,
            self::VALUE_ERROR_FOLDER_SAVE_PROPERTY_ERROR,
            self::VALUE_ERROR_FOLDER_EXISTS,
            self::VALUE_ERROR_FREE_BUSY_GENERATION_FAILED,
            self::VALUE_ERROR_GET_SERVER_SECURITY_DESCRIPTOR_FAILED,
            self::VALUE_ERROR_IM_CONTACT_LIMIT_REACHED,
            self::VALUE_ERROR_IM_GROUP_DISPLAY_NAME_ALREADY_EXISTS,
            self::VALUE_ERROR_IM_GROUP_LIMIT_REACHED,
            self::VALUE_ERROR_IMPERSONATE_USER_DENIED,
            self::VALUE_ERROR_IMPERSONATION_DENIED,
            self::VALUE_ERROR_IMPERSONATION_FAILED,
            self::VALUE_ERROR_INCORRECT_SCHEMA_VERSION,
            self::VALUE_ERROR_INCORRECT_UPDATE_PROPERTY_COUNT,
            self::VALUE_ERROR_INDIVIDUAL_MAILBOX_LIMIT_REACHED,
            self::VALUE_ERROR_INSUFFICIENT_RESOURCES,
            self::VALUE_ERROR_INTERNAL_SERVER_ERROR,
            self::VALUE_ERROR_INTERNAL_SERVER_TRANSIENT_ERROR,
            self::VALUE_ERROR_INVALID_ACCESS_LEVEL,
            self::VALUE_ERROR_INVALID_ARGUMENT,
            self::VALUE_ERROR_INVALID_ATTACHMENT_ID,
            self::VALUE_ERROR_INVALID_ATTACHMENT_SUBFILTER,
            self::VALUE_ERROR_INVALID_ATTACHMENT_SUBFILTER_TEXT_FILTER,
            self::VALUE_ERROR_INVALID_AUTHORIZATION_CONTEXT,
            self::VALUE_ERROR_INVALID_CHANGE_KEY,
            self::VALUE_ERROR_INVALID_CHANNEL_ID,
            self::VALUE_ERROR_INVALID_CHANNEL_SUBSCRIPTION_ID,
            self::VALUE_ERROR_INVALID_CLIENT_SECURITY_CONTEXT,
            self::VALUE_ERROR_INVALID_COMPLETE_DATE,
            self::VALUE_ERROR_INVALID_CONTACT_EMAIL_ADDRESS,
            self::VALUE_ERROR_INVALID_CONTACT_EMAIL_INDEX,
            self::VALUE_ERROR_INVALID_CROSS_FOREST_CREDENTIALS,
            self::VALUE_ERROR_INVALID_DELEGATE_PERMISSION,
            self::VALUE_ERROR_INVALID_DELEGATE_USER_ID,
            self::VALUE_ERROR_INVALID_EXCLUDES_RESTRICTION,
            self::VALUE_ERROR_INVALID_EXPRESSION_TYPE_FOR_SUB_FILTER,
            self::VALUE_ERROR_INVALID_EXTENDED_PROPERTY,
            self::VALUE_ERROR_INVALID_EXTENDED_PROPERTY_VALUE,
            self::VALUE_ERROR_INVALID_FOLDER_ID,
            self::VALUE_ERROR_INVALID_FOLDER_TYPE_FOR_OPERATION,
            self::VALUE_ERROR_INVALID_FRACTIONAL_PAGING_PARAMETERS,
            self::VALUE_ERROR_INVALID_FREE_BUSY_VIEW_TYPE,
            self::VALUE_ERROR_INVALID_ID,
            self::VALUE_ERROR_INVALID_ID_EMPTY,
            self::VALUE_ERROR_INVALID_ID_MALFORMED,
            self::VALUE_ERROR_INVALID_ID_MALFORMED_EWS_LEGACY_ID_FORMAT,
            self::VALUE_ERROR_INVALID_ID_MONIKER_TOO_LONG,
            self::VALUE_ERROR_INVALID_ID_NOT_AN_ITEM_ATTACHMENT_ID,
            self::VALUE_ERROR_INVALID_ID_RETURNED_BY_RESOLVE_NAMES,
            self::VALUE_ERROR_INVALID_ID_STORE_OBJECT_ID_TOO_LONG,
            self::VALUE_ERROR_INVALID_ID_TOO_MANY_ATTACHMENT_LEVELS,
            self::VALUE_ERROR_INVALID_ID_XML,
            self::VALUE_ERROR_INVALID_IM_CONTACT_ID,
            self::VALUE_ERROR_INVALID_IM_DISTRIBUTION_GROUP_SMTP_ADDRESS,
            self::VALUE_ERROR_INVALID_IM_GROUP_ID,
            self::VALUE_ERROR_INVALID_INDEXED_PAGING_PARAMETERS,
            self::VALUE_ERROR_INVALID_INTERNET_HEADER_CHILD_NODES,
            self::VALUE_ERROR_INVALID_ITEM_FOR_OPERATION_ARCHIVE_ITEM,
            self::VALUE_ERROR_INVALID_ITEM_FOR_OPERATION_CREATE_ITEM_ATTACHMENT,
            self::VALUE_ERROR_INVALID_ITEM_FOR_OPERATION_CREATE_ITEM,
            self::VALUE_ERROR_INVALID_ITEM_FOR_OPERATION_ACCEPT_ITEM,
            self::VALUE_ERROR_INVALID_ITEM_FOR_OPERATION_DECLINE_ITEM,
            self::VALUE_ERROR_INVALID_ITEM_FOR_OPERATION_CANCEL_ITEM,
            self::VALUE_ERROR_INVALID_ITEM_FOR_OPERATION_EXPAND_DL,
            self::VALUE_ERROR_INVALID_ITEM_FOR_OPERATION_REMOVE_ITEM,
            self::VALUE_ERROR_INVALID_ITEM_FOR_OPERATION_SEND_ITEM,
            self::VALUE_ERROR_INVALID_ITEM_FOR_OPERATION_TENTATIVE,
            self::VALUE_ERROR_INVALID_LOGON_TYPE,
            self::VALUE_ERROR_INVALID_LIKE_REQUEST,
            self::VALUE_ERROR_INVALID_MAILBOX,
            self::VALUE_ERROR_INVALID_MANAGED_FOLDER_PROPERTY,
            self::VALUE_ERROR_INVALID_MANAGED_FOLDER_QUOTA,
            self::VALUE_ERROR_INVALID_MANAGED_FOLDER_SIZE,
            self::VALUE_ERROR_INVALID_MERGED_FREE_BUSY_INTERVAL,
            self::VALUE_ERROR_INVALID_NAME_FOR_NAME_RESOLUTION,
            self::VALUE_ERROR_INVALID_OPERATION,
            self::VALUE_ERROR_INVALID_NETWORK_SERVICE_CONTEXT,
            self::VALUE_ERROR_INVALID_OOF_PARAMETER,
            self::VALUE_ERROR_INVALID_PAGING_MAX_ROWS,
            self::VALUE_ERROR_INVALID_PARENT_FOLDER,
            self::VALUE_ERROR_INVALID_PERCENT_COMPLETE_VALUE,
            self::VALUE_ERROR_INVALID_PERMISSION_SETTINGS,
            self::VALUE_ERROR_INVALID_PHONE_CALL_ID,
            self::VALUE_ERROR_INVALID_PHONE_NUMBER,
            self::VALUE_ERROR_INVALID_USER_INFO,
            self::VALUE_ERROR_INVALID_PROPERTY_APPEND,
            self::VALUE_ERROR_INVALID_PROPERTY_DELETE,
            self::VALUE_ERROR_INVALID_PROPERTY_FOR_EXISTS,
            self::VALUE_ERROR_INVALID_PROPERTY_FOR_OPERATION,
            self::VALUE_ERROR_INVALID_PROPERTY_REQUEST,
            self::VALUE_ERROR_INVALID_PROPERTY_SET,
            self::VALUE_ERROR_INVALID_PROPERTY_UPDATE_SENT_MESSAGE,
            self::VALUE_ERROR_INVALID_PROXY_SECURITY_CONTEXT,
            self::VALUE_ERROR_INVALID_PULL_SUBSCRIPTION_ID,
            self::VALUE_ERROR_INVALID_PUSH_SUBSCRIPTION_URL,
            self::VALUE_ERROR_INVALID_RECIPIENTS,
            self::VALUE_ERROR_INVALID_RECIPIENT_SUBFILTER,
            self::VALUE_ERROR_INVALID_RECIPIENT_SUBFILTER_COMPARISON,
            self::VALUE_ERROR_INVALID_RECIPIENT_SUBFILTER_ORDER,
            self::VALUE_ERROR_INVALID_RECIPIENT_SUBFILTER_TEXT_FILTER,
            self::VALUE_ERROR_INVALID_REFERENCE_ITEM,
            self::VALUE_ERROR_INVALID_REQUEST,
            self::VALUE_ERROR_INVALID_RESTRICTION,
            self::VALUE_ERROR_INVALID_RETENTION_TAG_TYPE_MISMATCH,
            self::VALUE_ERROR_INVALID_RETENTION_TAG_INVISIBLE,
            self::VALUE_ERROR_INVALID_RETENTION_TAG_INHERITANCE,
            self::VALUE_ERROR_INVALID_RETENTION_TAG_ID_GUID,
            self::VALUE_ERROR_INVALID_ROUTING_TYPE,
            self::VALUE_ERROR_INVALID_SCHEDULED_OOF_DURATION,
            self::VALUE_ERROR_INVALID_SCHEMA_VERSION_FOR_MAILBOX_VERSION,
            self::VALUE_ERROR_INVALID_SECURITY_DESCRIPTOR,
            self::VALUE_ERROR_INVALID_SEND_ITEM_SAVE_SETTINGS,
            self::VALUE_ERROR_INVALID_SERIALIZED_ACCESS_TOKEN,
            self::VALUE_ERROR_INVALID_SERVER_VERSION,
            self::VALUE_ERROR_INVALID_SID,
            self::VALUE_ERROR_INVALID_SIPURI,
            self::VALUE_ERROR_INVALID_SMTP_ADDRESS,
            self::VALUE_ERROR_INVALID_SUBFILTER_TYPE,
            self::VALUE_ERROR_INVALID_SUBFILTER_TYPE_NOT_ATTENDEE_TYPE,
            self::VALUE_ERROR_INVALID_SUBFILTER_TYPE_NOT_RECIPIENT_TYPE,
            self::VALUE_ERROR_INVALID_SUBSCRIPTION,
            self::VALUE_ERROR_INVALID_SUBSCRIPTION_REQUEST,
            self::VALUE_ERROR_INVALID_SYNC_STATE_DATA,
            self::VALUE_ERROR_INVALID_TIME_INTERVAL,
            self::VALUE_ERROR_INVALID_USER_OOF_SETTINGS,
            self::VALUE_ERROR_INVALID_USER_PRINCIPAL_NAME,
            self::VALUE_ERROR_INVALID_USER_SID,
            self::VALUE_ERROR_INVALID_USER_SID_MISSING_UPN,
            self::VALUE_ERROR_INVALID_VALUE_FOR_PROPERTY,
            self::VALUE_ERROR_INVALID_WATERMARK,
            self::VALUE_ERROR_IPGATEWAY_NOT_FOUND,
            self::VALUE_ERROR_IRRESOLVABLE_CONFLICT,
            self::VALUE_ERROR_ITEM_CORRUPT,
            self::VALUE_ERROR_ITEM_NOT_FOUND,
            self::VALUE_ERROR_ITEM_PROPERTY_REQUEST_FAILED,
            self::VALUE_ERROR_ITEM_SAVE,
            self::VALUE_ERROR_ITEM_SAVE_PROPERTY_ERROR,
            self::VALUE_ERROR_LEGACY_MAILBOX_FREE_BUSY_VIEW_TYPE_NOT_MERGED,
            self::VALUE_ERROR_LOCAL_SERVER_OBJECT_NOT_FOUND,
            self::VALUE_ERROR_LOGON_AS_NETWORK_SERVICE_FAILED,
            self::VALUE_ERROR_MAILBOX_CONFIGURATION,
            self::VALUE_ERROR_MAILBOX_DATA_ARRAY_EMPTY,
            self::VALUE_ERROR_MAILBOX_DATA_ARRAY_TOO_BIG,
            self::VALUE_ERROR_MAILBOX_HOLD_NOT_FOUND,
            self::VALUE_ERROR_MAILBOX_LOGON_FAILED,
            self::VALUE_ERROR_MAILBOX_MOVE_IN_PROGRESS,
            self::VALUE_ERROR_MAILBOX_STORE_UNAVAILABLE,
            self::VALUE_ERROR_MAIL_RECIPIENT_NOT_FOUND,
            self::VALUE_ERROR_MAIL_TIPS_DISABLED,
            self::VALUE_ERROR_MANAGED_FOLDER_ALREADY_EXISTS,
            self::VALUE_ERROR_MANAGED_FOLDER_NOT_FOUND,
            self::VALUE_ERROR_MANAGED_FOLDERS_ROOT_FAILURE,
            self::VALUE_ERROR_MEETING_SUGGESTION_GENERATION_FAILED,
            self::VALUE_ERROR_MESSAGE_DISPOSITION_REQUIRED,
            self::VALUE_ERROR_MESSAGE_SIZE_EXCEEDED,
            self::VALUE_ERROR_MIME_CONTENT_CONVERSION_FAILED,
            self::VALUE_ERROR_MIME_CONTENT_INVALID,
            self::VALUE_ERROR_MIME_CONTENT_INVALID_BASE_64_STRING,
            self::VALUE_ERROR_MISSING_ARGUMENT,
            self::VALUE_ERROR_MISSING_EMAIL_ADDRESS,
            self::VALUE_ERROR_MISSING_EMAIL_ADDRESS_FOR_MANAGED_FOLDER,
            self::VALUE_ERROR_MISSING_INFORMATION_EMAIL_ADDRESS,
            self::VALUE_ERROR_MISSING_INFORMATION_REFERENCE_ITEM_ID,
            self::VALUE_ERROR_MISSING_ITEM_FOR_CREATE_ITEM_ATTACHMENT,
            self::VALUE_ERROR_MISSING_MANAGED_FOLDER_ID,
            self::VALUE_ERROR_MISSING_RECIPIENTS,
            self::VALUE_ERROR_MISSING_USER_ID_INFORMATION,
            self::VALUE_ERROR_MORE_THAN_ONE_ACCESS_MODE_SPECIFIED,
            self::VALUE_ERROR_MOVE_COPY_FAILED,
            self::VALUE_ERROR_MOVE_DISTINGUISHED_FOLDER,
            self::VALUE_ERROR_MULTI_LEGACY_MAILBOX_ACCESS,
            self::VALUE_ERROR_NAME_RESOLUTION_MULTIPLE_RESULTS,
            self::VALUE_ERROR_NAME_RESOLUTION_NO_MAILBOX,
            self::VALUE_ERROR_NAME_RESOLUTION_NO_RESULTS,
            self::VALUE_ERROR_NEW_CHANNEL_CONNECTION_OPENED,
            self::VALUE_ERROR_NO_APPLICABLE_PROXY_CASSERVERS_AVAILABLE,
            self::VALUE_ERROR_NO_CALENDAR,
            self::VALUE_ERROR_NO_DESTINATION_CASDUE_TO_KERBEROS_REQUIREMENTS,
            self::VALUE_ERROR_NO_DESTINATION_CASDUE_TO_SSLREQUIREMENTS,
            self::VALUE_ERROR_NO_DESTINATION_CASDUE_TO_VERSION_MISMATCH,
            self::VALUE_ERROR_NO_FOLDER_CLASS_OVERRIDE,
            self::VALUE_ERROR_NO_FREE_BUSY_ACCESS,
            self::VALUE_ERROR_NON_EXISTENT_MAILBOX,
            self::VALUE_ERROR_NON_PRIMARY_SMTP_ADDRESS,
            self::VALUE_ERROR_NO_PROPERTY_TAG_FOR_CUSTOM_PROPERTIES,
            self::VALUE_ERROR_NO_PUBLIC_FOLDER_REPLICA_AVAILABLE,
            self::VALUE_ERROR_NO_PUBLIC_FOLDER_SERVER_AVAILABLE,
            self::VALUE_ERROR_NO_RESPONDING_CASIN_DESTINATION_SITE,
            self::VALUE_ERROR_NOT_DELEGATE,
            self::VALUE_ERROR_NOT_ENOUGH_MEMORY,
            self::VALUE_ERROR_OBJECT_TYPE_CHANGED,
            self::VALUE_ERROR_OCCURRENCE_CROSSING_BOUNDARY,
            self::VALUE_ERROR_OCCURRENCE_TIME_SPAN_TOO_BIG,
            self::VALUE_ERROR_OPERATION_NOT_ALLOWED_WITH_PUBLIC_FOLDER_ROOT,
            self::VALUE_ERROR_PARENT_FOLDER_ID_REQUIRED,
            self::VALUE_ERROR_PARENT_FOLDER_NOT_FOUND,
            self::VALUE_ERROR_PASSWORD_CHANGE_REQUIRED,
            self::VALUE_ERROR_PASSWORD_EXPIRED,
            self::VALUE_ERROR_PHONE_NUMBER_NOT_DIALABLE,
            self::VALUE_ERROR_PROPERTY_UPDATE,
            self::VALUE_ERROR_PROMPT_PUBLISHING_OPERATION_FAILED,
            self::VALUE_ERROR_PROPERTY_VALIDATION_FAILURE,
            self::VALUE_ERROR_PROXIED_SUBSCRIPTION_CALL_FAILURE,
            self::VALUE_ERROR_PROXY_CALL_FAILED,
            self::VALUE_ERROR_PROXY_GROUP_SID_LIMIT_EXCEEDED,
            self::VALUE_ERROR_PROXY_REQUEST_NOT_ALLOWED,
            self::VALUE_ERROR_PROXY_REQUEST_PROCESSING_FAILED,
            self::VALUE_ERROR_PROXY_SERVICE_DISCOVERY_FAILED,
            self::VALUE_ERROR_PROXY_TOKEN_EXPIRED,
            self::VALUE_ERROR_PUBLIC_FOLDER_MAILBOX_DISCOVERY_FAILED,
            self::VALUE_ERROR_PUBLIC_FOLDER_OPERATION_FAILED,
            self::VALUE_ERROR_PUBLIC_FOLDER_REQUEST_PROCESSING_FAILED,
            self::VALUE_ERROR_PUBLIC_FOLDER_SERVER_NOT_FOUND,
            self::VALUE_ERROR_PUBLIC_FOLDER_SYNC_EXCEPTION,
            self::VALUE_ERROR_QUERY_FILTER_TOO_LONG,
            self::VALUE_ERROR_QUOTA_EXCEEDED,
            self::VALUE_ERROR_READ_EVENTS_FAILED,
            self::VALUE_ERROR_READ_RECEIPT_NOT_PENDING,
            self::VALUE_ERROR_RECURRENCE_END_DATE_TOO_BIG,
            self::VALUE_ERROR_RECURRENCE_HAS_NO_OCCURRENCE,
            self::VALUE_ERROR_REMOVE_DELEGATES_FAILED,
            self::VALUE_ERROR_REQUEST_ABORTED,
            self::VALUE_ERROR_REQUEST_STREAM_TOO_BIG,
            self::VALUE_ERROR_REQUIRED_PROPERTY_MISSING,
            self::VALUE_ERROR_RESOLVE_NAMES_INVALID_FOLDER_TYPE,
            self::VALUE_ERROR_RESOLVE_NAMES_ONLY_ONE_CONTACTS_FOLDER_ALLOWED,
            self::VALUE_ERROR_RESPONSE_SCHEMA_VALIDATION,
            self::VALUE_ERROR_RESTRICTION_TOO_LONG,
            self::VALUE_ERROR_RESTRICTION_TOO_COMPLEX,
            self::VALUE_ERROR_RESULT_SET_TOO_BIG,
            self::VALUE_ERROR_INVALID_EXCHANGE_IMPERSONATION_HEADER_DATA,
            self::VALUE_ERROR_SAVED_ITEM_FOLDER_NOT_FOUND,
            self::VALUE_ERROR_SCHEMA_VALIDATION,
            self::VALUE_ERROR_SEARCH_FOLDER_NOT_INITIALIZED,
            self::VALUE_ERROR_SEND_AS_DENIED,
            self::VALUE_ERROR_SEND_MEETING_CANCELLATIONS_REQUIRED,
            self::VALUE_ERROR_SEND_MEETING_INVITATIONS_OR_CANCELLATIONS_REQUIRED,
            self::VALUE_ERROR_SEND_MEETING_INVITATIONS_REQUIRED,
            self::VALUE_ERROR_SENT_MEETING_REQUEST_UPDATE,
            self::VALUE_ERROR_SENT_TASK_REQUEST_UPDATE,
            self::VALUE_ERROR_SERVER_BUSY,
            self::VALUE_ERROR_SERVICE_DISCOVERY_FAILED,
            self::VALUE_ERROR_STALE_OBJECT,
            self::VALUE_ERROR_SUBMISSION_QUOTA_EXCEEDED,
            self::VALUE_ERROR_SUBSCRIPTION_ACCESS_DENIED,
            self::VALUE_ERROR_SUBSCRIPTION_DELEGATE_ACCESS_NOT_SUPPORTED,
            self::VALUE_ERROR_SUBSCRIPTION_NOT_FOUND,
            self::VALUE_ERROR_SUBSCRIPTION_UNSUBSCRIBED,
            self::VALUE_ERROR_SYNC_FOLDER_NOT_FOUND,
            self::VALUE_ERROR_TEAM_MAILBOX_NOT_FOUND,
            self::VALUE_ERROR_TEAM_MAILBOX_NOT_LINKED_TO_SHARE_POINT,
            self::VALUE_ERROR_TEAM_MAILBOX_URL_VALIDATION_FAILED,
            self::VALUE_ERROR_TEAM_MAILBOX_NOT_AUTHORIZED_OWNER,
            self::VALUE_ERROR_TEAM_MAILBOX_ACTIVE_TO_PENDING_DELETE,
            self::VALUE_ERROR_TEAM_MAILBOX_FAILED_SENDING_NOTIFICATIONS,
            self::VALUE_ERROR_TEAM_MAILBOX_ERROR_UNKNOWN,
            self::VALUE_ERROR_TIME_INTERVAL_TOO_BIG,
            self::VALUE_ERROR_TIMEOUT_EXPIRED,
            self::VALUE_ERROR_TIME_ZONE,
            self::VALUE_ERROR_TO_FOLDER_NOT_FOUND,
            self::VALUE_ERROR_TOKEN_SERIALIZATION_DENIED,
            self::VALUE_ERROR_TOO_MANY_OBJECTS_OPENED,
            self::VALUE_ERROR_UPDATE_PROPERTY_MISMATCH,
            self::VALUE_ERROR_UNIFIED_GROUP_MAILBOX_AADCREATION_FAILED,
            self::VALUE_ERROR_UNIFIED_GROUP_MAILBOX_AADDELETE_FAILED,
            self::VALUE_ERROR_UNIFIED_GROUP_MAILBOX_NAMING_POLICY,
            self::VALUE_ERROR_UNIFIED_GROUP_MAILBOX_DELETE_FAILED,
            self::VALUE_ERROR_UNIFIED_GROUP_MAILBOX_NOT_FOUND,
            self::VALUE_ERROR_UNIFIED_GROUP_MAILBOX_UPDATE_DELAYED,
            self::VALUE_ERROR_UNIFIED_GROUP_MAILBOX_UPDATED_PARTIAL_PROPERTIES,
            self::VALUE_ERROR_UNIFIED_GROUP_MAILBOX_UPDATE_FAILED,
            self::VALUE_ERROR_UNIFIED_GROUP_MAILBOX_PROVISION_FAILED,
            self::VALUE_ERROR_UNIFIED_MESSAGING_DIAL_PLAN_NOT_FOUND,
            self::VALUE_ERROR_UNIFIED_MESSAGING_REPORT_DATA_NOT_FOUND,
            self::VALUE_ERROR_UNIFIED_MESSAGING_PROMPT_NOT_FOUND,
            self::VALUE_ERROR_UNIFIED_MESSAGING_REQUEST_FAILED,
            self::VALUE_ERROR_UNIFIED_MESSAGING_SERVER_NOT_FOUND,
            self::VALUE_ERROR_UNABLE_TO_GET_USER_OOF_SETTINGS,
            self::VALUE_ERROR_UNABLE_TO_REMOVE_IM_CONTACT_FROM_GROUP,
            self::VALUE_ERROR_UNSUPPORTED_SUB_FILTER,
            self::VALUE_ERROR_UNSUPPORTED_CULTURE,
            self::VALUE_ERROR_UNSUPPORTED_MAPI_PROPERTY_TYPE,
            self::VALUE_ERROR_UNSUPPORTED_MIME_CONVERSION,
            self::VALUE_ERROR_UNSUPPORTED_PATH_FOR_QUERY,
            self::VALUE_ERROR_UNSUPPORTED_PATH_FOR_SORT_GROUP,
            self::VALUE_ERROR_UNSUPPORTED_PROPERTY_DEFINITION,
            self::VALUE_ERROR_UNSUPPORTED_QUERY_FILTER,
            self::VALUE_ERROR_UNSUPPORTED_RECURRENCE,
            self::VALUE_ERROR_UNSUPPORTED_TYPE_FOR_CONVERSION,
            self::VALUE_ERROR_UPDATE_DELEGATES_FAILED,
            self::VALUE_ERROR_USER_NOT_UNIFIED_MESSAGING_ENABLED,
            self::VALUE_ERROR_VOICE_MAIL_NOT_IMPLEMENTED,
            self::VALUE_ERROR_VALUE_OUT_OF_RANGE,
            self::VALUE_ERROR_VIRUS_DETECTED,
            self::VALUE_ERROR_VIRUS_MESSAGE_DELETED,
            self::VALUE_ERROR_WEB_REQUEST_IN_INVALID_STATE,
            self::VALUE_ERROR_WIN_32_INTEROP_ERROR,
            self::VALUE_ERROR_WORKING_HOURS_SAVE_FAILED,
            self::VALUE_ERROR_WORKING_HOURS_XML_MALFORMED,
            self::VALUE_ERROR_WRONG_SERVER_VERSION,
            self::VALUE_ERROR_WRONG_SERVER_VERSION_DELEGATE,
            self::VALUE_ERROR_MISSING_INFORMATION_SHARING_FOLDER_ID,
            self::VALUE_ERROR_DUPLICATE_SOAPHEADER,
            self::VALUE_ERROR_SHARING_SYNCHRONIZATION_FAILED,
            self::VALUE_ERROR_SHARING_NO_EXTERNAL_EWS_AVAILABLE,
            self::VALUE_ERROR_FREE_BUSY_DLLIMIT_REACHED,
            self::VALUE_ERROR_INVALID_GET_SHARING_FOLDER_REQUEST,
            self::VALUE_ERROR_NOT_ALLOWED_EXTERNAL_SHARING_BY_POLICY,
            self::VALUE_ERROR_USER_NOT_ALLOWED_BY_POLICY,
            self::VALUE_ERROR_PERMISSION_NOT_ALLOWED_BY_POLICY,
            self::VALUE_ERROR_ORGANIZATION_NOT_FEDERATED,
            self::VALUE_ERROR_MAILBOX_FAILOVER,
            self::VALUE_ERROR_INVALID_EXTERNAL_SHARING_INITIATOR,
            self::VALUE_ERROR_MESSAGE_TRACKING_PERMANENT_ERROR,
            self::VALUE_ERROR_MESSAGE_TRACKING_TRANSIENT_ERROR,
            self::VALUE_ERROR_MESSAGE_TRACKING_NO_SUCH_DOMAIN,
            self::VALUE_ERROR_USER_WITHOUT_FEDERATED_PROXY_ADDRESS,
            self::VALUE_ERROR_INVALID_ORGANIZATION_RELATIONSHIP_FOR_FREE_BUSY,
            self::VALUE_ERROR_INVALID_FEDERATED_ORGANIZATION_ID,
            self::VALUE_ERROR_INVALID_EXTERNAL_SHARING_SUBSCRIBER,
            self::VALUE_ERROR_INVALID_SHARING_DATA,
            self::VALUE_ERROR_INVALID_SHARING_MESSAGE,
            self::VALUE_ERROR_NOT_SUPPORTED_SHARING_MESSAGE,
            self::VALUE_ERROR_APPLY_CONVERSATION_ACTION_FAILED,
            self::VALUE_ERROR_INBOX_RULES_VALIDATION_ERROR,
            self::VALUE_ERROR_OUTLOOK_RULE_BLOB_EXISTS,
            self::VALUE_ERROR_RULES_OVER_QUOTA,
            self::VALUE_ERROR_NEW_EVENT_STREAM_CONNECTION_OPENED,
            self::VALUE_ERROR_MISSED_NOTIFICATION_EVENTS,
            self::VALUE_ERROR_DUPLICATE_LEGACY_DISTINGUISHED_NAME,
            self::VALUE_ERROR_INVALID_CLIENT_ACCESS_TOKEN_REQUEST,
            self::VALUE_ERROR_NO_SPEECH_DETECTED,
            self::VALUE_ERROR_UMSERVER_UNAVAILABLE,
            self::VALUE_ERROR_RECIPIENT_NOT_FOUND,
            self::VALUE_ERROR_RECOGNIZER_NOT_INSTALLED,
            self::VALUE_ERROR_SPEECH_GRAMMAR_ERROR,
            self::VALUE_ERROR_INVALID_MANAGEMENT_ROLE_HEADER,
            self::VALUE_ERROR_LOCATION_SERVICES_DISABLED,
            self::VALUE_ERROR_LOCATION_SERVICES_REQUEST_TIMED_OUT,
            self::VALUE_ERROR_LOCATION_SERVICES_REQUEST_FAILED,
            self::VALUE_ERROR_LOCATION_SERVICES_INVALID_REQUEST,
            self::VALUE_ERROR_WEATHER_SERVICE_DISABLED,
            self::VALUE_ERROR_MAILBOX_SCOPE_NOT_ALLOWED_WITHOUT_QUERY_STRING,
            self::VALUE_ERROR_ARCHIVE_MAILBOX_SEARCH_FAILED,
            self::VALUE_ERROR_GET_REMOTE_ARCHIVE_FOLDER_FAILED,
            self::VALUE_ERROR_FIND_REMOTE_ARCHIVE_FOLDER_FAILED,
            self::VALUE_ERROR_GET_REMOTE_ARCHIVE_ITEM_FAILED,
            self::VALUE_ERROR_EXPORT_REMOTE_ARCHIVE_ITEMS_FAILED,
            self::VALUE_ERROR_INVALID_PHOTO_SIZE,
            self::VALUE_ERROR_SEARCH_QUERY_HAS_TOO_MANY_KEYWORDS,
            self::VALUE_ERROR_SEARCH_TOO_MANY_MAILBOXES,
            self::VALUE_ERROR_INVALID_RETENTION_TAG_NONE,
            self::VALUE_ERROR_DISCOVERY_SEARCHES_DISABLED,
            self::VALUE_ERROR_CALENDAR_SEEK_TO_CONDITION_NOT_SUPPORTED,
            self::VALUE_ERROR_CALENDAR_IS_GROUP_MAILBOX_FOR_ACCEPT,
            self::VALUE_ERROR_CALENDAR_IS_GROUP_MAILBOX_FOR_DECLINE,
            self::VALUE_ERROR_CALENDAR_IS_GROUP_MAILBOX_FOR_TENTATIVE,
            self::VALUE_ERROR_CALENDAR_IS_GROUP_MAILBOX_FOR_SUPPRESS_READ_RECEIPT,
            self::VALUE_ERROR_ORGANIZATION_ACCESS_BLOCKED,
            self::VALUE_ERROR_INVALID_LICENSE,
            self::VALUE_ERROR_MESSAGE_PER_FOLDER_COUNT_RECEIVE_QUOTA_EXCEEDED,
            self::VALUE_ERROR_INVALID_BULK_ACTION_TYPE,
            self::VALUE_ERROR_INVALID_KEEP_NCOUNT,
            self::VALUE_ERROR_INVALID_KEEP_NTYPE,
            self::VALUE_ERROR_NO_OAUTH_SERVER_AVAILABLE_FOR_REQUEST,
            self::VALUE_ERROR_INSTANT_SEARCH_SESSION_EXPIRED,
            self::VALUE_ERROR_INSTANT_SEARCH_TIMEOUT,
            self::VALUE_ERROR_INSTANT_SEARCH_FAILED,
            self::VALUE_ERROR_UNSUPPORTED_USER_FOR_EXECUTE_SEARCH,
            self::VALUE_ERROR_MISSING_EXCHANGE_PRINCIPAL,
            self::VALUE_ERROR_UNEXPECTED_UNIFIED_GROUPS_COUNT,
            self::VALUE_ERROR_PARSING_XMLRESPONSE,
            self::VALUE_ERROR_INVALID_FEDERATION_ORGANIZATION_IDENTIFIER,
            self::VALUE_ERROR_INVALID_SWEEP_RULE,
            self::VALUE_ERROR_INVALID_SWEEP_RULE_OPERATION_TYPE,
            self::VALUE_ERROR_TARGET_DOMAIN_NOT_SUPPORTED,
            self::VALUE_ERROR_INVALID_INTERNET_WEB_PROXY_ON_LOCAL_SERVER,
            self::VALUE_ERROR_NO_SENDER_RESTRICTIONS_SETTINGS_FOUND_IN_REQUEST,
            self::VALUE_ERROR_DUPLICATE_SENDER_RESTRICTIONS_INPUT_FOUND,
            self::VALUE_ERROR_SENDER_RESTRICTIONS_UPDATE_FAILED,
            self::VALUE_ERROR_MESSAGE_SUBMISSION_BLOCKED,
            self::VALUE_ERROR_EXCEEDED_MESSAGE_LIMIT,
            self::VALUE_ERROR_EXCEEDED_MAX_RECIPIENT_LIMIT_BLOCK,
            self::VALUE_ERROR_ACCOUNT_SUSPEND,
            self::VALUE_ERROR_EXCEEDED_MAX_RECIPIENT_LIMIT,
            self::VALUE_ERROR_MESSAGE_BLOCKED,
            self::VALUE_ERROR_ACCOUNT_SUSPEND_SHOW_TIER_UPGRADE,
            self::VALUE_ERROR_EXCEEDED_MESSAGE_LIMIT_SHOW_TIER_UPGRADE,
            self::VALUE_ERROR_EXCEEDED_MAX_RECIPIENT_LIMIT_SHOW_TIER_UPGRADE,
            self::VALUE_ERROR_INVALID_LONGITUDE,
            self::VALUE_ERROR_INVALID_LATITUDE,
        );
    }
}
