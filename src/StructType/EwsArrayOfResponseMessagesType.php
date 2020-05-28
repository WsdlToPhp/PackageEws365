<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArrayOfResponseMessagesType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfResponseMessagesType extends AbstractStructBase
{
    /**
     * The CreateItemResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsItemInfoResponseMessageType
     */
    public $CreateItemResponseMessage;
    /**
     * The DeleteItemResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsDeleteItemResponseMessageType
     */
    public $DeleteItemResponseMessage;
    /**
     * The GetItemResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsItemInfoResponseMessageType
     */
    public $GetItemResponseMessage;
    /**
     * The UpdateItemResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsUpdateItemResponseMessageType
     */
    public $UpdateItemResponseMessage;
    /**
     * The UpdateItemInRecoverableItemsResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsUpdateItemInRecoverableItemsResponseMessageType
     */
    public $UpdateItemInRecoverableItemsResponseMessage;
    /**
     * The SendItemResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $SendItemResponseMessage;
    /**
     * The DeleteFolderResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $DeleteFolderResponseMessage;
    /**
     * The EmptyFolderResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $EmptyFolderResponseMessage;
    /**
     * The CreateFolderResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsFolderInfoResponseMessageType
     */
    public $CreateFolderResponseMessage;
    /**
     * The GetFolderResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsFolderInfoResponseMessageType
     */
    public $GetFolderResponseMessage;
    /**
     * The FindFolderResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsFindFolderResponseMessageType
     */
    public $FindFolderResponseMessage;
    /**
     * The UpdateFolderResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsFolderInfoResponseMessageType
     */
    public $UpdateFolderResponseMessage;
    /**
     * The MoveFolderResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsFolderInfoResponseMessageType
     */
    public $MoveFolderResponseMessage;
    /**
     * The CopyFolderResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsFolderInfoResponseMessageType
     */
    public $CopyFolderResponseMessage;
    /**
     * The CreateFolderPathResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsFolderInfoResponseMessageType
     */
    public $CreateFolderPathResponseMessage;
    /**
     * The CreateAttachmentResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsAttachmentInfoResponseMessageType
     */
    public $CreateAttachmentResponseMessage;
    /**
     * The DeleteAttachmentResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsDeleteAttachmentResponseMessageType
     */
    public $DeleteAttachmentResponseMessage;
    /**
     * The GetAttachmentResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsAttachmentInfoResponseMessageType
     */
    public $GetAttachmentResponseMessage;
    /**
     * The UploadItemsResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsUploadItemsResponseMessageType
     */
    public $UploadItemsResponseMessage;
    /**
     * The ExportItemsResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsExportItemsResponseMessageType
     */
    public $ExportItemsResponseMessage;
    /**
     * The MarkAllItemsAsReadResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $MarkAllItemsAsReadResponseMessage;
    /**
     * The GetClientAccessTokenResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsGetClientAccessTokenResponseMessageType
     */
    public $GetClientAccessTokenResponseMessage;
    /**
     * The GetAppManifestsResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $GetAppManifestsResponseMessage;
    /**
     * The GetClientExtensionResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $GetClientExtensionResponseMessage;
    /**
     * The SetClientExtensionResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $SetClientExtensionResponseMessage;
    /**
     * The GetEncryptionConfigurationResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $GetEncryptionConfigurationResponseMessage;
    /**
     * The SetEncryptionConfigurationResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $SetEncryptionConfigurationResponseMessage;
    /**
     * The GetOMEConfigurationResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $GetOMEConfigurationResponseMessage;
    /**
     * The SetOMEConfigurationResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $SetOMEConfigurationResponseMessage;
    /**
     * The FindItemResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsFindItemResponseMessageType
     */
    public $FindItemResponseMessage;
    /**
     * The MoveItemResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsItemInfoResponseMessageType
     */
    public $MoveItemResponseMessage;
    /**
     * The ArchiveItemResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsItemInfoResponseMessageType
     */
    public $ArchiveItemResponseMessage;
    /**
     * The CopyItemResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsItemInfoResponseMessageType
     */
    public $CopyItemResponseMessage;
    /**
     * The ResolveNamesResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsResolveNamesResponseMessageType
     */
    public $ResolveNamesResponseMessage;
    /**
     * The ExpandDLResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsExpandDLResponseMessageType
     */
    public $ExpandDLResponseMessage;
    /**
     * The GetServerTimeZonesResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsGetServerTimeZonesResponseMessageType
     */
    public $GetServerTimeZonesResponseMessage;
    /**
     * The GetEventsResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsGetEventsResponseMessageType
     */
    public $GetEventsResponseMessage;
    /**
     * The GetStreamingEventsResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsGetStreamingEventsResponseMessageType
     */
    public $GetStreamingEventsResponseMessage;
    /**
     * The SubscribeResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsSubscribeResponseMessageType
     */
    public $SubscribeResponseMessage;
    /**
     * The UnsubscribeResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $UnsubscribeResponseMessage;
    /**
     * The GetChannelEventsResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsGetChannelEventsResponseMessageType
     */
    public $GetChannelEventsResponseMessage;
    /**
     * The ChannelSubscribeResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsChannelSubscribeResponseMessageType
     */
    public $ChannelSubscribeResponseMessage;
    /**
     * The ChannelUnsubscribeResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $ChannelUnsubscribeResponseMessage;
    /**
     * The SendNotificationResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsSendNotificationResponseMessageType
     */
    public $SendNotificationResponseMessage;
    /**
     * The SyncFolderHierarchyResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsSyncFolderHierarchyResponseMessageType
     */
    public $SyncFolderHierarchyResponseMessage;
    /**
     * The SyncFolderItemsResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsSyncFolderItemsResponseMessageType
     */
    public $SyncFolderItemsResponseMessage;
    /**
     * The CreateManagedFolderResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsFolderInfoResponseMessageType
     */
    public $CreateManagedFolderResponseMessage;
    /**
     * The ConvertIdResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsConvertIdResponseMessageType
     */
    public $ConvertIdResponseMessage;
    /**
     * The GetSharingMetadataResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsGetSharingMetadataResponseMessageType
     */
    public $GetSharingMetadataResponseMessage;
    /**
     * The RefreshSharingFolderResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsRefreshSharingFolderResponseMessageType
     */
    public $RefreshSharingFolderResponseMessage;
    /**
     * The GetSharingFolderResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsGetSharingFolderResponseMessageType
     */
    public $GetSharingFolderResponseMessage;
    /**
     * The CreateUserConfigurationResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $CreateUserConfigurationResponseMessage;
    /**
     * The DeleteUserConfigurationResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $DeleteUserConfigurationResponseMessage;
    /**
     * The GetUserConfigurationResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsGetUserConfigurationResponseMessageType
     */
    public $GetUserConfigurationResponseMessage;
    /**
     * The UpdateUserConfigurationResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $UpdateUserConfigurationResponseMessage;
    /**
     * The GetRoomListsResponse
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsGetRoomListsResponseMessageType
     */
    public $GetRoomListsResponse;
    /**
     * The GetRoomsResponse
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsGetRoomsResponseMessageType
     */
    public $GetRoomsResponse;
    /**
     * The GetRemindersResponse
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsGetRemindersResponseMessageType
     */
    public $GetRemindersResponse;
    /**
     * The PerformReminderActionResponse
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsPerformReminderActionResponseMessageType
     */
    public $PerformReminderActionResponse;
    /**
     * The ApplyConversationActionResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsApplyConversationActionResponseMessageType
     */
    public $ApplyConversationActionResponseMessage;
    /**
     * The FindMailboxStatisticsByKeywordsResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsFindMailboxStatisticsByKeywordsResponseMessageType
     */
    public $FindMailboxStatisticsByKeywordsResponseMessage;
    /**
     * The GetSearchableMailboxesResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsGetSearchableMailboxesResponseMessageType
     */
    public $GetSearchableMailboxesResponseMessage;
    /**
     * The SearchMailboxesResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsSearchMailboxesResponseMessageType
     */
    public $SearchMailboxesResponseMessage;
    /**
     * The GetDiscoverySearchConfigurationResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsGetDiscoverySearchConfigurationResponseMessageType
     */
    public $GetDiscoverySearchConfigurationResponseMessage;
    /**
     * The GetHoldOnMailboxesResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsGetHoldOnMailboxesResponseMessageType
     */
    public $GetHoldOnMailboxesResponseMessage;
    /**
     * The SetHoldOnMailboxesResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsSetHoldOnMailboxesResponseMessageType
     */
    public $SetHoldOnMailboxesResponseMessage;
    /**
     * The GetNonIndexableItemStatisticsResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsGetNonIndexableItemStatisticsResponseMessageType
     */
    public $GetNonIndexableItemStatisticsResponseMessage;
    /**
     * The GetNonIndexableItemDetailsResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsGetNonIndexableItemDetailsResponseMessageType
     */
    public $GetNonIndexableItemDetailsResponseMessage;
    /**
     * The FindPeopleResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsFindPeopleResponseMessageType
     */
    public $FindPeopleResponseMessage;
    /**
     * The GetPasswordExpirationDateResponse
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsGetPasswordExpirationDateResponseMessageType
     */
    public $GetPasswordExpirationDateResponse;
    /**
     * The GetPersonaResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsGetPersonaResponseMessageType
     */
    public $GetPersonaResponseMessage;
    /**
     * The GetConversationItemsResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsGetConversationItemsResponseMessageType
     */
    public $GetConversationItemsResponseMessage;
    /**
     * The GetUserRetentionPolicyTagsResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsGetUserRetentionPolicyTagsResponseMessageType
     */
    public $GetUserRetentionPolicyTagsResponseMessage;
    /**
     * The GetUserPhotoResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsGetUserPhotoResponseMessageType
     */
    public $GetUserPhotoResponseMessage;
    /**
     * The MarkAsJunkResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsMarkAsJunkResponseMessageType
     */
    public $MarkAsJunkResponseMessage;
    /**
     * The UpdateMailboxAssociationResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $UpdateMailboxAssociationResponseMessage;
    /**
     * The UpdateGroupMailboxResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $UpdateGroupMailboxResponseMessage;
    /**
     * The PostModernGroupItemResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $PostModernGroupItemResponseMessage;
    /**
     * The GetUnifiedGroupUnseenDataResponseMessage
     * Meta information extracted from the WSDL
     * - choice: CreateItemResponseMessage | DeleteItemResponseMessage | GetItemResponseMessage | UpdateItemResponseMessage | UpdateItemInRecoverableItemsResponseMessage | SendItemResponseMessage | DeleteFolderResponseMessage | EmptyFolderResponseMessage |
     * CreateFolderResponseMessage | GetFolderResponseMessage | FindFolderResponseMessage | UpdateFolderResponseMessage | MoveFolderResponseMessage | CopyFolderResponseMessage | CreateFolderPathResponseMessage | CreateAttachmentResponseMessage |
     * DeleteAttachmentResponseMessage | GetAttachmentResponseMessage | UploadItemsResponseMessage | ExportItemsResponseMessage | MarkAllItemsAsReadResponseMessage | GetClientAccessTokenResponseMessage | GetAppManifestsResponseMessage |
     * GetClientExtensionResponseMessage | SetClientExtensionResponseMessage | GetEncryptionConfigurationResponseMessage | SetEncryptionConfigurationResponseMessage | GetOMEConfigurationResponseMessage | SetOMEConfigurationResponseMessage |
     * FindItemResponseMessage | MoveItemResponseMessage | ArchiveItemResponseMessage | CopyItemResponseMessage | ResolveNamesResponseMessage | ExpandDLResponseMessage | GetServerTimeZonesResponseMessage | GetEventsResponseMessage |
     * GetStreamingEventsResponseMessage | SubscribeResponseMessage | UnsubscribeResponseMessage | GetChannelEventsResponseMessage | ChannelSubscribeResponseMessage | ChannelUnsubscribeResponseMessage | SendNotificationResponseMessage |
     * SyncFolderHierarchyResponseMessage | SyncFolderItemsResponseMessage | CreateManagedFolderResponseMessage | ConvertIdResponseMessage | GetSharingMetadataResponseMessage | RefreshSharingFolderResponseMessage | GetSharingFolderResponseMessage |
     * CreateUserConfigurationResponseMessage | DeleteUserConfigurationResponseMessage | GetUserConfigurationResponseMessage | UpdateUserConfigurationResponseMessage | GetRoomListsResponse | GetRoomsResponse | GetRemindersResponse |
     * PerformReminderActionResponse | ApplyConversationActionResponseMessage | FindMailboxStatisticsByKeywordsResponseMessage | GetSearchableMailboxesResponseMessage | SearchMailboxesResponseMessage | GetDiscoverySearchConfigurationResponseMessage |
     * GetHoldOnMailboxesResponseMessage | SetHoldOnMailboxesResponseMessage | GetNonIndexableItemStatisticsResponseMessage | GetNonIndexableItemDetailsResponseMessage | FindPeopleResponseMessage | GetPasswordExpirationDateResponse |
     * GetPersonaResponseMessage | GetConversationItemsResponseMessage | GetUserRetentionPolicyTagsResponseMessage | GetUserPhotoResponseMessage | MarkAsJunkResponseMessage | UpdateMailboxAssociationResponseMessage | UpdateGroupMailboxResponseMessage |
     * PostModernGroupItemResponseMessage | GetUnifiedGroupUnseenDataResponseMessage
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsGetUnifiedGroupUnseenDataResponseMessageType
     */
    public $GetUnifiedGroupUnseenDataResponseMessage;
    /**
     * Constructor method for ArrayOfResponseMessagesType
     * @uses EwsArrayOfResponseMessagesType::setCreateItemResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setDeleteItemResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setGetItemResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setUpdateItemResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setUpdateItemInRecoverableItemsResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setSendItemResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setDeleteFolderResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setEmptyFolderResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setCreateFolderResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setGetFolderResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setFindFolderResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setUpdateFolderResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setMoveFolderResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setCopyFolderResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setCreateFolderPathResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setCreateAttachmentResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setDeleteAttachmentResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setGetAttachmentResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setUploadItemsResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setExportItemsResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setMarkAllItemsAsReadResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setGetClientAccessTokenResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setGetAppManifestsResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setGetClientExtensionResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setSetClientExtensionResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setGetEncryptionConfigurationResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setSetEncryptionConfigurationResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setGetOMEConfigurationResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setSetOMEConfigurationResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setFindItemResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setMoveItemResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setArchiveItemResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setCopyItemResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setResolveNamesResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setExpandDLResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setGetServerTimeZonesResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setGetEventsResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setGetStreamingEventsResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setSubscribeResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setUnsubscribeResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setGetChannelEventsResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setChannelSubscribeResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setChannelUnsubscribeResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setSendNotificationResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setSyncFolderHierarchyResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setSyncFolderItemsResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setCreateManagedFolderResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setConvertIdResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setGetSharingMetadataResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setRefreshSharingFolderResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setGetSharingFolderResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setCreateUserConfigurationResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setDeleteUserConfigurationResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setGetUserConfigurationResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setUpdateUserConfigurationResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setGetRoomListsResponse()
     * @uses EwsArrayOfResponseMessagesType::setGetRoomsResponse()
     * @uses EwsArrayOfResponseMessagesType::setGetRemindersResponse()
     * @uses EwsArrayOfResponseMessagesType::setPerformReminderActionResponse()
     * @uses EwsArrayOfResponseMessagesType::setApplyConversationActionResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setFindMailboxStatisticsByKeywordsResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setGetSearchableMailboxesResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setSearchMailboxesResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setGetDiscoverySearchConfigurationResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setGetHoldOnMailboxesResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setSetHoldOnMailboxesResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setGetNonIndexableItemStatisticsResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setGetNonIndexableItemDetailsResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setFindPeopleResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setGetPasswordExpirationDateResponse()
     * @uses EwsArrayOfResponseMessagesType::setGetPersonaResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setGetConversationItemsResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setGetUserRetentionPolicyTagsResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setGetUserPhotoResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setMarkAsJunkResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setUpdateMailboxAssociationResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setUpdateGroupMailboxResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setPostModernGroupItemResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setGetUnifiedGroupUnseenDataResponseMessage()
     * @param \Ews\StructType\EwsItemInfoResponseMessageType $createItemResponseMessage
     * @param \Ews\StructType\EwsDeleteItemResponseMessageType $deleteItemResponseMessage
     * @param \Ews\StructType\EwsItemInfoResponseMessageType $getItemResponseMessage
     * @param \Ews\StructType\EwsUpdateItemResponseMessageType $updateItemResponseMessage
     * @param \Ews\StructType\EwsUpdateItemInRecoverableItemsResponseMessageType $updateItemInRecoverableItemsResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType $sendItemResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType $deleteFolderResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType $emptyFolderResponseMessage
     * @param \Ews\StructType\EwsFolderInfoResponseMessageType $createFolderResponseMessage
     * @param \Ews\StructType\EwsFolderInfoResponseMessageType $getFolderResponseMessage
     * @param \Ews\StructType\EwsFindFolderResponseMessageType $findFolderResponseMessage
     * @param \Ews\StructType\EwsFolderInfoResponseMessageType $updateFolderResponseMessage
     * @param \Ews\StructType\EwsFolderInfoResponseMessageType $moveFolderResponseMessage
     * @param \Ews\StructType\EwsFolderInfoResponseMessageType $copyFolderResponseMessage
     * @param \Ews\StructType\EwsFolderInfoResponseMessageType $createFolderPathResponseMessage
     * @param \Ews\StructType\EwsAttachmentInfoResponseMessageType $createAttachmentResponseMessage
     * @param \Ews\StructType\EwsDeleteAttachmentResponseMessageType $deleteAttachmentResponseMessage
     * @param \Ews\StructType\EwsAttachmentInfoResponseMessageType $getAttachmentResponseMessage
     * @param \Ews\StructType\EwsUploadItemsResponseMessageType $uploadItemsResponseMessage
     * @param \Ews\StructType\EwsExportItemsResponseMessageType $exportItemsResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType $markAllItemsAsReadResponseMessage
     * @param \Ews\StructType\EwsGetClientAccessTokenResponseMessageType $getClientAccessTokenResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType $getAppManifestsResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType $getClientExtensionResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType $setClientExtensionResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType $getEncryptionConfigurationResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType $setEncryptionConfigurationResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType $getOMEConfigurationResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType $setOMEConfigurationResponseMessage
     * @param \Ews\StructType\EwsFindItemResponseMessageType $findItemResponseMessage
     * @param \Ews\StructType\EwsItemInfoResponseMessageType $moveItemResponseMessage
     * @param \Ews\StructType\EwsItemInfoResponseMessageType $archiveItemResponseMessage
     * @param \Ews\StructType\EwsItemInfoResponseMessageType $copyItemResponseMessage
     * @param \Ews\StructType\EwsResolveNamesResponseMessageType $resolveNamesResponseMessage
     * @param \Ews\StructType\EwsExpandDLResponseMessageType $expandDLResponseMessage
     * @param \Ews\StructType\EwsGetServerTimeZonesResponseMessageType $getServerTimeZonesResponseMessage
     * @param \Ews\StructType\EwsGetEventsResponseMessageType $getEventsResponseMessage
     * @param \Ews\StructType\EwsGetStreamingEventsResponseMessageType $getStreamingEventsResponseMessage
     * @param \Ews\StructType\EwsSubscribeResponseMessageType $subscribeResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType $unsubscribeResponseMessage
     * @param \Ews\StructType\EwsGetChannelEventsResponseMessageType $getChannelEventsResponseMessage
     * @param \Ews\StructType\EwsChannelSubscribeResponseMessageType $channelSubscribeResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType $channelUnsubscribeResponseMessage
     * @param \Ews\StructType\EwsSendNotificationResponseMessageType $sendNotificationResponseMessage
     * @param \Ews\StructType\EwsSyncFolderHierarchyResponseMessageType $syncFolderHierarchyResponseMessage
     * @param \Ews\StructType\EwsSyncFolderItemsResponseMessageType $syncFolderItemsResponseMessage
     * @param \Ews\StructType\EwsFolderInfoResponseMessageType $createManagedFolderResponseMessage
     * @param \Ews\StructType\EwsConvertIdResponseMessageType $convertIdResponseMessage
     * @param \Ews\StructType\EwsGetSharingMetadataResponseMessageType $getSharingMetadataResponseMessage
     * @param \Ews\StructType\EwsRefreshSharingFolderResponseMessageType $refreshSharingFolderResponseMessage
     * @param \Ews\StructType\EwsGetSharingFolderResponseMessageType $getSharingFolderResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType $createUserConfigurationResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType $deleteUserConfigurationResponseMessage
     * @param \Ews\StructType\EwsGetUserConfigurationResponseMessageType $getUserConfigurationResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType $updateUserConfigurationResponseMessage
     * @param \Ews\StructType\EwsGetRoomListsResponseMessageType $getRoomListsResponse
     * @param \Ews\StructType\EwsGetRoomsResponseMessageType $getRoomsResponse
     * @param \Ews\StructType\EwsGetRemindersResponseMessageType $getRemindersResponse
     * @param \Ews\StructType\EwsPerformReminderActionResponseMessageType $performReminderActionResponse
     * @param \Ews\StructType\EwsApplyConversationActionResponseMessageType $applyConversationActionResponseMessage
     * @param \Ews\StructType\EwsFindMailboxStatisticsByKeywordsResponseMessageType $findMailboxStatisticsByKeywordsResponseMessage
     * @param \Ews\StructType\EwsGetSearchableMailboxesResponseMessageType $getSearchableMailboxesResponseMessage
     * @param \Ews\StructType\EwsSearchMailboxesResponseMessageType $searchMailboxesResponseMessage
     * @param \Ews\StructType\EwsGetDiscoverySearchConfigurationResponseMessageType $getDiscoverySearchConfigurationResponseMessage
     * @param \Ews\StructType\EwsGetHoldOnMailboxesResponseMessageType $getHoldOnMailboxesResponseMessage
     * @param \Ews\StructType\EwsSetHoldOnMailboxesResponseMessageType $setHoldOnMailboxesResponseMessage
     * @param \Ews\StructType\EwsGetNonIndexableItemStatisticsResponseMessageType $getNonIndexableItemStatisticsResponseMessage
     * @param \Ews\StructType\EwsGetNonIndexableItemDetailsResponseMessageType $getNonIndexableItemDetailsResponseMessage
     * @param \Ews\StructType\EwsFindPeopleResponseMessageType $findPeopleResponseMessage
     * @param \Ews\StructType\EwsGetPasswordExpirationDateResponseMessageType $getPasswordExpirationDateResponse
     * @param \Ews\StructType\EwsGetPersonaResponseMessageType $getPersonaResponseMessage
     * @param \Ews\StructType\EwsGetConversationItemsResponseMessageType $getConversationItemsResponseMessage
     * @param \Ews\StructType\EwsGetUserRetentionPolicyTagsResponseMessageType $getUserRetentionPolicyTagsResponseMessage
     * @param \Ews\StructType\EwsGetUserPhotoResponseMessageType $getUserPhotoResponseMessage
     * @param \Ews\StructType\EwsMarkAsJunkResponseMessageType $markAsJunkResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType $updateMailboxAssociationResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType $updateGroupMailboxResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType $postModernGroupItemResponseMessage
     * @param \Ews\StructType\EwsGetUnifiedGroupUnseenDataResponseMessageType $getUnifiedGroupUnseenDataResponseMessage
     */
    public function __construct(\Ews\StructType\EwsItemInfoResponseMessageType $createItemResponseMessage = null, \Ews\StructType\EwsDeleteItemResponseMessageType $deleteItemResponseMessage = null, \Ews\StructType\EwsItemInfoResponseMessageType $getItemResponseMessage = null, \Ews\StructType\EwsUpdateItemResponseMessageType $updateItemResponseMessage = null, \Ews\StructType\EwsUpdateItemInRecoverableItemsResponseMessageType $updateItemInRecoverableItemsResponseMessage = null, \Ews\StructType\EwsResponseMessageType $sendItemResponseMessage = null, \Ews\StructType\EwsResponseMessageType $deleteFolderResponseMessage = null, \Ews\StructType\EwsResponseMessageType $emptyFolderResponseMessage = null, \Ews\StructType\EwsFolderInfoResponseMessageType $createFolderResponseMessage = null, \Ews\StructType\EwsFolderInfoResponseMessageType $getFolderResponseMessage = null, \Ews\StructType\EwsFindFolderResponseMessageType $findFolderResponseMessage = null, \Ews\StructType\EwsFolderInfoResponseMessageType $updateFolderResponseMessage = null, \Ews\StructType\EwsFolderInfoResponseMessageType $moveFolderResponseMessage = null, \Ews\StructType\EwsFolderInfoResponseMessageType $copyFolderResponseMessage = null, \Ews\StructType\EwsFolderInfoResponseMessageType $createFolderPathResponseMessage = null, \Ews\StructType\EwsAttachmentInfoResponseMessageType $createAttachmentResponseMessage = null, \Ews\StructType\EwsDeleteAttachmentResponseMessageType $deleteAttachmentResponseMessage = null, \Ews\StructType\EwsAttachmentInfoResponseMessageType $getAttachmentResponseMessage = null, \Ews\StructType\EwsUploadItemsResponseMessageType $uploadItemsResponseMessage = null, \Ews\StructType\EwsExportItemsResponseMessageType $exportItemsResponseMessage = null, \Ews\StructType\EwsResponseMessageType $markAllItemsAsReadResponseMessage = null, \Ews\StructType\EwsGetClientAccessTokenResponseMessageType $getClientAccessTokenResponseMessage = null, \Ews\StructType\EwsResponseMessageType $getAppManifestsResponseMessage = null, \Ews\StructType\EwsResponseMessageType $getClientExtensionResponseMessage = null, \Ews\StructType\EwsResponseMessageType $setClientExtensionResponseMessage = null, \Ews\StructType\EwsResponseMessageType $getEncryptionConfigurationResponseMessage = null, \Ews\StructType\EwsResponseMessageType $setEncryptionConfigurationResponseMessage = null, \Ews\StructType\EwsResponseMessageType $getOMEConfigurationResponseMessage = null, \Ews\StructType\EwsResponseMessageType $setOMEConfigurationResponseMessage = null, \Ews\StructType\EwsFindItemResponseMessageType $findItemResponseMessage = null, \Ews\StructType\EwsItemInfoResponseMessageType $moveItemResponseMessage = null, \Ews\StructType\EwsItemInfoResponseMessageType $archiveItemResponseMessage = null, \Ews\StructType\EwsItemInfoResponseMessageType $copyItemResponseMessage = null, \Ews\StructType\EwsResolveNamesResponseMessageType $resolveNamesResponseMessage = null, \Ews\StructType\EwsExpandDLResponseMessageType $expandDLResponseMessage = null, \Ews\StructType\EwsGetServerTimeZonesResponseMessageType $getServerTimeZonesResponseMessage = null, \Ews\StructType\EwsGetEventsResponseMessageType $getEventsResponseMessage = null, \Ews\StructType\EwsGetStreamingEventsResponseMessageType $getStreamingEventsResponseMessage = null, \Ews\StructType\EwsSubscribeResponseMessageType $subscribeResponseMessage = null, \Ews\StructType\EwsResponseMessageType $unsubscribeResponseMessage = null, \Ews\StructType\EwsGetChannelEventsResponseMessageType $getChannelEventsResponseMessage = null, \Ews\StructType\EwsChannelSubscribeResponseMessageType $channelSubscribeResponseMessage = null, \Ews\StructType\EwsResponseMessageType $channelUnsubscribeResponseMessage = null, \Ews\StructType\EwsSendNotificationResponseMessageType $sendNotificationResponseMessage = null, \Ews\StructType\EwsSyncFolderHierarchyResponseMessageType $syncFolderHierarchyResponseMessage = null, \Ews\StructType\EwsSyncFolderItemsResponseMessageType $syncFolderItemsResponseMessage = null, \Ews\StructType\EwsFolderInfoResponseMessageType $createManagedFolderResponseMessage = null, \Ews\StructType\EwsConvertIdResponseMessageType $convertIdResponseMessage = null, \Ews\StructType\EwsGetSharingMetadataResponseMessageType $getSharingMetadataResponseMessage = null, \Ews\StructType\EwsRefreshSharingFolderResponseMessageType $refreshSharingFolderResponseMessage = null, \Ews\StructType\EwsGetSharingFolderResponseMessageType $getSharingFolderResponseMessage = null, \Ews\StructType\EwsResponseMessageType $createUserConfigurationResponseMessage = null, \Ews\StructType\EwsResponseMessageType $deleteUserConfigurationResponseMessage = null, \Ews\StructType\EwsGetUserConfigurationResponseMessageType $getUserConfigurationResponseMessage = null, \Ews\StructType\EwsResponseMessageType $updateUserConfigurationResponseMessage = null, \Ews\StructType\EwsGetRoomListsResponseMessageType $getRoomListsResponse = null, \Ews\StructType\EwsGetRoomsResponseMessageType $getRoomsResponse = null, \Ews\StructType\EwsGetRemindersResponseMessageType $getRemindersResponse = null, \Ews\StructType\EwsPerformReminderActionResponseMessageType $performReminderActionResponse = null, \Ews\StructType\EwsApplyConversationActionResponseMessageType $applyConversationActionResponseMessage = null, \Ews\StructType\EwsFindMailboxStatisticsByKeywordsResponseMessageType $findMailboxStatisticsByKeywordsResponseMessage = null, \Ews\StructType\EwsGetSearchableMailboxesResponseMessageType $getSearchableMailboxesResponseMessage = null, \Ews\StructType\EwsSearchMailboxesResponseMessageType $searchMailboxesResponseMessage = null, \Ews\StructType\EwsGetDiscoverySearchConfigurationResponseMessageType $getDiscoverySearchConfigurationResponseMessage = null, \Ews\StructType\EwsGetHoldOnMailboxesResponseMessageType $getHoldOnMailboxesResponseMessage = null, \Ews\StructType\EwsSetHoldOnMailboxesResponseMessageType $setHoldOnMailboxesResponseMessage = null, \Ews\StructType\EwsGetNonIndexableItemStatisticsResponseMessageType $getNonIndexableItemStatisticsResponseMessage = null, \Ews\StructType\EwsGetNonIndexableItemDetailsResponseMessageType $getNonIndexableItemDetailsResponseMessage = null, \Ews\StructType\EwsFindPeopleResponseMessageType $findPeopleResponseMessage = null, \Ews\StructType\EwsGetPasswordExpirationDateResponseMessageType $getPasswordExpirationDateResponse = null, \Ews\StructType\EwsGetPersonaResponseMessageType $getPersonaResponseMessage = null, \Ews\StructType\EwsGetConversationItemsResponseMessageType $getConversationItemsResponseMessage = null, \Ews\StructType\EwsGetUserRetentionPolicyTagsResponseMessageType $getUserRetentionPolicyTagsResponseMessage = null, \Ews\StructType\EwsGetUserPhotoResponseMessageType $getUserPhotoResponseMessage = null, \Ews\StructType\EwsMarkAsJunkResponseMessageType $markAsJunkResponseMessage = null, \Ews\StructType\EwsResponseMessageType $updateMailboxAssociationResponseMessage = null, \Ews\StructType\EwsResponseMessageType $updateGroupMailboxResponseMessage = null, \Ews\StructType\EwsResponseMessageType $postModernGroupItemResponseMessage = null, \Ews\StructType\EwsGetUnifiedGroupUnseenDataResponseMessageType $getUnifiedGroupUnseenDataResponseMessage = null)
    {
        $this
            ->setCreateItemResponseMessage($createItemResponseMessage)
            ->setDeleteItemResponseMessage($deleteItemResponseMessage)
            ->setGetItemResponseMessage($getItemResponseMessage)
            ->setUpdateItemResponseMessage($updateItemResponseMessage)
            ->setUpdateItemInRecoverableItemsResponseMessage($updateItemInRecoverableItemsResponseMessage)
            ->setSendItemResponseMessage($sendItemResponseMessage)
            ->setDeleteFolderResponseMessage($deleteFolderResponseMessage)
            ->setEmptyFolderResponseMessage($emptyFolderResponseMessage)
            ->setCreateFolderResponseMessage($createFolderResponseMessage)
            ->setGetFolderResponseMessage($getFolderResponseMessage)
            ->setFindFolderResponseMessage($findFolderResponseMessage)
            ->setUpdateFolderResponseMessage($updateFolderResponseMessage)
            ->setMoveFolderResponseMessage($moveFolderResponseMessage)
            ->setCopyFolderResponseMessage($copyFolderResponseMessage)
            ->setCreateFolderPathResponseMessage($createFolderPathResponseMessage)
            ->setCreateAttachmentResponseMessage($createAttachmentResponseMessage)
            ->setDeleteAttachmentResponseMessage($deleteAttachmentResponseMessage)
            ->setGetAttachmentResponseMessage($getAttachmentResponseMessage)
            ->setUploadItemsResponseMessage($uploadItemsResponseMessage)
            ->setExportItemsResponseMessage($exportItemsResponseMessage)
            ->setMarkAllItemsAsReadResponseMessage($markAllItemsAsReadResponseMessage)
            ->setGetClientAccessTokenResponseMessage($getClientAccessTokenResponseMessage)
            ->setGetAppManifestsResponseMessage($getAppManifestsResponseMessage)
            ->setGetClientExtensionResponseMessage($getClientExtensionResponseMessage)
            ->setSetClientExtensionResponseMessage($setClientExtensionResponseMessage)
            ->setGetEncryptionConfigurationResponseMessage($getEncryptionConfigurationResponseMessage)
            ->setSetEncryptionConfigurationResponseMessage($setEncryptionConfigurationResponseMessage)
            ->setGetOMEConfigurationResponseMessage($getOMEConfigurationResponseMessage)
            ->setSetOMEConfigurationResponseMessage($setOMEConfigurationResponseMessage)
            ->setFindItemResponseMessage($findItemResponseMessage)
            ->setMoveItemResponseMessage($moveItemResponseMessage)
            ->setArchiveItemResponseMessage($archiveItemResponseMessage)
            ->setCopyItemResponseMessage($copyItemResponseMessage)
            ->setResolveNamesResponseMessage($resolveNamesResponseMessage)
            ->setExpandDLResponseMessage($expandDLResponseMessage)
            ->setGetServerTimeZonesResponseMessage($getServerTimeZonesResponseMessage)
            ->setGetEventsResponseMessage($getEventsResponseMessage)
            ->setGetStreamingEventsResponseMessage($getStreamingEventsResponseMessage)
            ->setSubscribeResponseMessage($subscribeResponseMessage)
            ->setUnsubscribeResponseMessage($unsubscribeResponseMessage)
            ->setGetChannelEventsResponseMessage($getChannelEventsResponseMessage)
            ->setChannelSubscribeResponseMessage($channelSubscribeResponseMessage)
            ->setChannelUnsubscribeResponseMessage($channelUnsubscribeResponseMessage)
            ->setSendNotificationResponseMessage($sendNotificationResponseMessage)
            ->setSyncFolderHierarchyResponseMessage($syncFolderHierarchyResponseMessage)
            ->setSyncFolderItemsResponseMessage($syncFolderItemsResponseMessage)
            ->setCreateManagedFolderResponseMessage($createManagedFolderResponseMessage)
            ->setConvertIdResponseMessage($convertIdResponseMessage)
            ->setGetSharingMetadataResponseMessage($getSharingMetadataResponseMessage)
            ->setRefreshSharingFolderResponseMessage($refreshSharingFolderResponseMessage)
            ->setGetSharingFolderResponseMessage($getSharingFolderResponseMessage)
            ->setCreateUserConfigurationResponseMessage($createUserConfigurationResponseMessage)
            ->setDeleteUserConfigurationResponseMessage($deleteUserConfigurationResponseMessage)
            ->setGetUserConfigurationResponseMessage($getUserConfigurationResponseMessage)
            ->setUpdateUserConfigurationResponseMessage($updateUserConfigurationResponseMessage)
            ->setGetRoomListsResponse($getRoomListsResponse)
            ->setGetRoomsResponse($getRoomsResponse)
            ->setGetRemindersResponse($getRemindersResponse)
            ->setPerformReminderActionResponse($performReminderActionResponse)
            ->setApplyConversationActionResponseMessage($applyConversationActionResponseMessage)
            ->setFindMailboxStatisticsByKeywordsResponseMessage($findMailboxStatisticsByKeywordsResponseMessage)
            ->setGetSearchableMailboxesResponseMessage($getSearchableMailboxesResponseMessage)
            ->setSearchMailboxesResponseMessage($searchMailboxesResponseMessage)
            ->setGetDiscoverySearchConfigurationResponseMessage($getDiscoverySearchConfigurationResponseMessage)
            ->setGetHoldOnMailboxesResponseMessage($getHoldOnMailboxesResponseMessage)
            ->setSetHoldOnMailboxesResponseMessage($setHoldOnMailboxesResponseMessage)
            ->setGetNonIndexableItemStatisticsResponseMessage($getNonIndexableItemStatisticsResponseMessage)
            ->setGetNonIndexableItemDetailsResponseMessage($getNonIndexableItemDetailsResponseMessage)
            ->setFindPeopleResponseMessage($findPeopleResponseMessage)
            ->setGetPasswordExpirationDateResponse($getPasswordExpirationDateResponse)
            ->setGetPersonaResponseMessage($getPersonaResponseMessage)
            ->setGetConversationItemsResponseMessage($getConversationItemsResponseMessage)
            ->setGetUserRetentionPolicyTagsResponseMessage($getUserRetentionPolicyTagsResponseMessage)
            ->setGetUserPhotoResponseMessage($getUserPhotoResponseMessage)
            ->setMarkAsJunkResponseMessage($markAsJunkResponseMessage)
            ->setUpdateMailboxAssociationResponseMessage($updateMailboxAssociationResponseMessage)
            ->setUpdateGroupMailboxResponseMessage($updateGroupMailboxResponseMessage)
            ->setPostModernGroupItemResponseMessage($postModernGroupItemResponseMessage)
            ->setGetUnifiedGroupUnseenDataResponseMessage($getUnifiedGroupUnseenDataResponseMessage);
    }
    /**
     * Get CreateItemResponseMessage value
     * @return \Ews\StructType\EwsItemInfoResponseMessageType|null
     */
    public function getCreateItemResponseMessage()
    {
        return isset($this->CreateItemResponseMessage) ? $this->CreateItemResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCreateItemResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCreateItemResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCreateItemResponseMessageForChoiceConstraintsFromSetCreateItemResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property CreateItemResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: CreateItemResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set CreateItemResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsItemInfoResponseMessageType $createItemResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setCreateItemResponseMessage(\Ews\StructType\EwsItemInfoResponseMessageType $createItemResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($createItemResponseMessageChoiceErrorMessage = self::validateCreateItemResponseMessageForChoiceConstraintsFromSetCreateItemResponseMessage($createItemResponseMessage))) {
            throw new \InvalidArgumentException($createItemResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($createItemResponseMessage) || (is_array($createItemResponseMessage) && empty($createItemResponseMessage))) {
            unset($this->CreateItemResponseMessage);
        } else {
            $this->CreateItemResponseMessage = $createItemResponseMessage;
        }
        return $this;
    }
    /**
     * Get DeleteItemResponseMessage value
     * @return \Ews\StructType\EwsDeleteItemResponseMessageType|null
     */
    public function getDeleteItemResponseMessage()
    {
        return isset($this->DeleteItemResponseMessage) ? $this->DeleteItemResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDeleteItemResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeleteItemResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDeleteItemResponseMessageForChoiceConstraintsFromSetDeleteItemResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property DeleteItemResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: DeleteItemResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set DeleteItemResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsDeleteItemResponseMessageType $deleteItemResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setDeleteItemResponseMessage(\Ews\StructType\EwsDeleteItemResponseMessageType $deleteItemResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($deleteItemResponseMessageChoiceErrorMessage = self::validateDeleteItemResponseMessageForChoiceConstraintsFromSetDeleteItemResponseMessage($deleteItemResponseMessage))) {
            throw new \InvalidArgumentException($deleteItemResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($deleteItemResponseMessage) || (is_array($deleteItemResponseMessage) && empty($deleteItemResponseMessage))) {
            unset($this->DeleteItemResponseMessage);
        } else {
            $this->DeleteItemResponseMessage = $deleteItemResponseMessage;
        }
        return $this;
    }
    /**
     * Get GetItemResponseMessage value
     * @return \Ews\StructType\EwsItemInfoResponseMessageType|null
     */
    public function getGetItemResponseMessage()
    {
        return isset($this->GetItemResponseMessage) ? $this->GetItemResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setGetItemResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetItemResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGetItemResponseMessageForChoiceConstraintsFromSetGetItemResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property GetItemResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: GetItemResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set GetItemResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsItemInfoResponseMessageType $getItemResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetItemResponseMessage(\Ews\StructType\EwsItemInfoResponseMessageType $getItemResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($getItemResponseMessageChoiceErrorMessage = self::validateGetItemResponseMessageForChoiceConstraintsFromSetGetItemResponseMessage($getItemResponseMessage))) {
            throw new \InvalidArgumentException($getItemResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($getItemResponseMessage) || (is_array($getItemResponseMessage) && empty($getItemResponseMessage))) {
            unset($this->GetItemResponseMessage);
        } else {
            $this->GetItemResponseMessage = $getItemResponseMessage;
        }
        return $this;
    }
    /**
     * Get UpdateItemResponseMessage value
     * @return \Ews\StructType\EwsUpdateItemResponseMessageType|null
     */
    public function getUpdateItemResponseMessage()
    {
        return isset($this->UpdateItemResponseMessage) ? $this->UpdateItemResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setUpdateItemResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUpdateItemResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateUpdateItemResponseMessageForChoiceConstraintsFromSetUpdateItemResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property UpdateItemResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: UpdateItemResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set UpdateItemResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUpdateItemResponseMessageType $updateItemResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setUpdateItemResponseMessage(\Ews\StructType\EwsUpdateItemResponseMessageType $updateItemResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($updateItemResponseMessageChoiceErrorMessage = self::validateUpdateItemResponseMessageForChoiceConstraintsFromSetUpdateItemResponseMessage($updateItemResponseMessage))) {
            throw new \InvalidArgumentException($updateItemResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($updateItemResponseMessage) || (is_array($updateItemResponseMessage) && empty($updateItemResponseMessage))) {
            unset($this->UpdateItemResponseMessage);
        } else {
            $this->UpdateItemResponseMessage = $updateItemResponseMessage;
        }
        return $this;
    }
    /**
     * Get UpdateItemInRecoverableItemsResponseMessage value
     * @return \Ews\StructType\EwsUpdateItemInRecoverableItemsResponseMessageType|null
     */
    public function getUpdateItemInRecoverableItemsResponseMessage()
    {
        return isset($this->UpdateItemInRecoverableItemsResponseMessage) ? $this->UpdateItemInRecoverableItemsResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setUpdateItemInRecoverableItemsResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUpdateItemInRecoverableItemsResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateUpdateItemInRecoverableItemsResponseMessageForChoiceConstraintsFromSetUpdateItemInRecoverableItemsResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property UpdateItemInRecoverableItemsResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: UpdateItemInRecoverableItemsResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set UpdateItemInRecoverableItemsResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUpdateItemInRecoverableItemsResponseMessageType $updateItemInRecoverableItemsResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setUpdateItemInRecoverableItemsResponseMessage(\Ews\StructType\EwsUpdateItemInRecoverableItemsResponseMessageType $updateItemInRecoverableItemsResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($updateItemInRecoverableItemsResponseMessageChoiceErrorMessage = self::validateUpdateItemInRecoverableItemsResponseMessageForChoiceConstraintsFromSetUpdateItemInRecoverableItemsResponseMessage($updateItemInRecoverableItemsResponseMessage))) {
            throw new \InvalidArgumentException($updateItemInRecoverableItemsResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($updateItemInRecoverableItemsResponseMessage) || (is_array($updateItemInRecoverableItemsResponseMessage) && empty($updateItemInRecoverableItemsResponseMessage))) {
            unset($this->UpdateItemInRecoverableItemsResponseMessage);
        } else {
            $this->UpdateItemInRecoverableItemsResponseMessage = $updateItemInRecoverableItemsResponseMessage;
        }
        return $this;
    }
    /**
     * Get SendItemResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getSendItemResponseMessage()
    {
        return isset($this->SendItemResponseMessage) ? $this->SendItemResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setSendItemResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSendItemResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSendItemResponseMessageForChoiceConstraintsFromSetSendItemResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property SendItemResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: SendItemResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set SendItemResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsResponseMessageType $sendItemResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setSendItemResponseMessage(\Ews\StructType\EwsResponseMessageType $sendItemResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($sendItemResponseMessageChoiceErrorMessage = self::validateSendItemResponseMessageForChoiceConstraintsFromSetSendItemResponseMessage($sendItemResponseMessage))) {
            throw new \InvalidArgumentException($sendItemResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($sendItemResponseMessage) || (is_array($sendItemResponseMessage) && empty($sendItemResponseMessage))) {
            unset($this->SendItemResponseMessage);
        } else {
            $this->SendItemResponseMessage = $sendItemResponseMessage;
        }
        return $this;
    }
    /**
     * Get DeleteFolderResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getDeleteFolderResponseMessage()
    {
        return isset($this->DeleteFolderResponseMessage) ? $this->DeleteFolderResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDeleteFolderResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeleteFolderResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDeleteFolderResponseMessageForChoiceConstraintsFromSetDeleteFolderResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property DeleteFolderResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: DeleteFolderResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set DeleteFolderResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsResponseMessageType $deleteFolderResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setDeleteFolderResponseMessage(\Ews\StructType\EwsResponseMessageType $deleteFolderResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($deleteFolderResponseMessageChoiceErrorMessage = self::validateDeleteFolderResponseMessageForChoiceConstraintsFromSetDeleteFolderResponseMessage($deleteFolderResponseMessage))) {
            throw new \InvalidArgumentException($deleteFolderResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($deleteFolderResponseMessage) || (is_array($deleteFolderResponseMessage) && empty($deleteFolderResponseMessage))) {
            unset($this->DeleteFolderResponseMessage);
        } else {
            $this->DeleteFolderResponseMessage = $deleteFolderResponseMessage;
        }
        return $this;
    }
    /**
     * Get EmptyFolderResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getEmptyFolderResponseMessage()
    {
        return isset($this->EmptyFolderResponseMessage) ? $this->EmptyFolderResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setEmptyFolderResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmptyFolderResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateEmptyFolderResponseMessageForChoiceConstraintsFromSetEmptyFolderResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property EmptyFolderResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: EmptyFolderResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set EmptyFolderResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsResponseMessageType $emptyFolderResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setEmptyFolderResponseMessage(\Ews\StructType\EwsResponseMessageType $emptyFolderResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($emptyFolderResponseMessageChoiceErrorMessage = self::validateEmptyFolderResponseMessageForChoiceConstraintsFromSetEmptyFolderResponseMessage($emptyFolderResponseMessage))) {
            throw new \InvalidArgumentException($emptyFolderResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($emptyFolderResponseMessage) || (is_array($emptyFolderResponseMessage) && empty($emptyFolderResponseMessage))) {
            unset($this->EmptyFolderResponseMessage);
        } else {
            $this->EmptyFolderResponseMessage = $emptyFolderResponseMessage;
        }
        return $this;
    }
    /**
     * Get CreateFolderResponseMessage value
     * @return \Ews\StructType\EwsFolderInfoResponseMessageType|null
     */
    public function getCreateFolderResponseMessage()
    {
        return isset($this->CreateFolderResponseMessage) ? $this->CreateFolderResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCreateFolderResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCreateFolderResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCreateFolderResponseMessageForChoiceConstraintsFromSetCreateFolderResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property CreateFolderResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: CreateFolderResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set CreateFolderResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFolderInfoResponseMessageType $createFolderResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setCreateFolderResponseMessage(\Ews\StructType\EwsFolderInfoResponseMessageType $createFolderResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($createFolderResponseMessageChoiceErrorMessage = self::validateCreateFolderResponseMessageForChoiceConstraintsFromSetCreateFolderResponseMessage($createFolderResponseMessage))) {
            throw new \InvalidArgumentException($createFolderResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($createFolderResponseMessage) || (is_array($createFolderResponseMessage) && empty($createFolderResponseMessage))) {
            unset($this->CreateFolderResponseMessage);
        } else {
            $this->CreateFolderResponseMessage = $createFolderResponseMessage;
        }
        return $this;
    }
    /**
     * Get GetFolderResponseMessage value
     * @return \Ews\StructType\EwsFolderInfoResponseMessageType|null
     */
    public function getGetFolderResponseMessage()
    {
        return isset($this->GetFolderResponseMessage) ? $this->GetFolderResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setGetFolderResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetFolderResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGetFolderResponseMessageForChoiceConstraintsFromSetGetFolderResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property GetFolderResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: GetFolderResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set GetFolderResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFolderInfoResponseMessageType $getFolderResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetFolderResponseMessage(\Ews\StructType\EwsFolderInfoResponseMessageType $getFolderResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($getFolderResponseMessageChoiceErrorMessage = self::validateGetFolderResponseMessageForChoiceConstraintsFromSetGetFolderResponseMessage($getFolderResponseMessage))) {
            throw new \InvalidArgumentException($getFolderResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($getFolderResponseMessage) || (is_array($getFolderResponseMessage) && empty($getFolderResponseMessage))) {
            unset($this->GetFolderResponseMessage);
        } else {
            $this->GetFolderResponseMessage = $getFolderResponseMessage;
        }
        return $this;
    }
    /**
     * Get FindFolderResponseMessage value
     * @return \Ews\StructType\EwsFindFolderResponseMessageType|null
     */
    public function getFindFolderResponseMessage()
    {
        return isset($this->FindFolderResponseMessage) ? $this->FindFolderResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setFindFolderResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFindFolderResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateFindFolderResponseMessageForChoiceConstraintsFromSetFindFolderResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property FindFolderResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: FindFolderResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set FindFolderResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFindFolderResponseMessageType $findFolderResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setFindFolderResponseMessage(\Ews\StructType\EwsFindFolderResponseMessageType $findFolderResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($findFolderResponseMessageChoiceErrorMessage = self::validateFindFolderResponseMessageForChoiceConstraintsFromSetFindFolderResponseMessage($findFolderResponseMessage))) {
            throw new \InvalidArgumentException($findFolderResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($findFolderResponseMessage) || (is_array($findFolderResponseMessage) && empty($findFolderResponseMessage))) {
            unset($this->FindFolderResponseMessage);
        } else {
            $this->FindFolderResponseMessage = $findFolderResponseMessage;
        }
        return $this;
    }
    /**
     * Get UpdateFolderResponseMessage value
     * @return \Ews\StructType\EwsFolderInfoResponseMessageType|null
     */
    public function getUpdateFolderResponseMessage()
    {
        return isset($this->UpdateFolderResponseMessage) ? $this->UpdateFolderResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setUpdateFolderResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUpdateFolderResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateUpdateFolderResponseMessageForChoiceConstraintsFromSetUpdateFolderResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property UpdateFolderResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: UpdateFolderResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set UpdateFolderResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFolderInfoResponseMessageType $updateFolderResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setUpdateFolderResponseMessage(\Ews\StructType\EwsFolderInfoResponseMessageType $updateFolderResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($updateFolderResponseMessageChoiceErrorMessage = self::validateUpdateFolderResponseMessageForChoiceConstraintsFromSetUpdateFolderResponseMessage($updateFolderResponseMessage))) {
            throw new \InvalidArgumentException($updateFolderResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($updateFolderResponseMessage) || (is_array($updateFolderResponseMessage) && empty($updateFolderResponseMessage))) {
            unset($this->UpdateFolderResponseMessage);
        } else {
            $this->UpdateFolderResponseMessage = $updateFolderResponseMessage;
        }
        return $this;
    }
    /**
     * Get MoveFolderResponseMessage value
     * @return \Ews\StructType\EwsFolderInfoResponseMessageType|null
     */
    public function getMoveFolderResponseMessage()
    {
        return isset($this->MoveFolderResponseMessage) ? $this->MoveFolderResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setMoveFolderResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMoveFolderResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateMoveFolderResponseMessageForChoiceConstraintsFromSetMoveFolderResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property MoveFolderResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: MoveFolderResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set MoveFolderResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFolderInfoResponseMessageType $moveFolderResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setMoveFolderResponseMessage(\Ews\StructType\EwsFolderInfoResponseMessageType $moveFolderResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($moveFolderResponseMessageChoiceErrorMessage = self::validateMoveFolderResponseMessageForChoiceConstraintsFromSetMoveFolderResponseMessage($moveFolderResponseMessage))) {
            throw new \InvalidArgumentException($moveFolderResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($moveFolderResponseMessage) || (is_array($moveFolderResponseMessage) && empty($moveFolderResponseMessage))) {
            unset($this->MoveFolderResponseMessage);
        } else {
            $this->MoveFolderResponseMessage = $moveFolderResponseMessage;
        }
        return $this;
    }
    /**
     * Get CopyFolderResponseMessage value
     * @return \Ews\StructType\EwsFolderInfoResponseMessageType|null
     */
    public function getCopyFolderResponseMessage()
    {
        return isset($this->CopyFolderResponseMessage) ? $this->CopyFolderResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCopyFolderResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCopyFolderResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCopyFolderResponseMessageForChoiceConstraintsFromSetCopyFolderResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property CopyFolderResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: CopyFolderResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set CopyFolderResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFolderInfoResponseMessageType $copyFolderResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setCopyFolderResponseMessage(\Ews\StructType\EwsFolderInfoResponseMessageType $copyFolderResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($copyFolderResponseMessageChoiceErrorMessage = self::validateCopyFolderResponseMessageForChoiceConstraintsFromSetCopyFolderResponseMessage($copyFolderResponseMessage))) {
            throw new \InvalidArgumentException($copyFolderResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($copyFolderResponseMessage) || (is_array($copyFolderResponseMessage) && empty($copyFolderResponseMessage))) {
            unset($this->CopyFolderResponseMessage);
        } else {
            $this->CopyFolderResponseMessage = $copyFolderResponseMessage;
        }
        return $this;
    }
    /**
     * Get CreateFolderPathResponseMessage value
     * @return \Ews\StructType\EwsFolderInfoResponseMessageType|null
     */
    public function getCreateFolderPathResponseMessage()
    {
        return isset($this->CreateFolderPathResponseMessage) ? $this->CreateFolderPathResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCreateFolderPathResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCreateFolderPathResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCreateFolderPathResponseMessageForChoiceConstraintsFromSetCreateFolderPathResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property CreateFolderPathResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: CreateFolderPathResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set CreateFolderPathResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFolderInfoResponseMessageType $createFolderPathResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setCreateFolderPathResponseMessage(\Ews\StructType\EwsFolderInfoResponseMessageType $createFolderPathResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($createFolderPathResponseMessageChoiceErrorMessage = self::validateCreateFolderPathResponseMessageForChoiceConstraintsFromSetCreateFolderPathResponseMessage($createFolderPathResponseMessage))) {
            throw new \InvalidArgumentException($createFolderPathResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($createFolderPathResponseMessage) || (is_array($createFolderPathResponseMessage) && empty($createFolderPathResponseMessage))) {
            unset($this->CreateFolderPathResponseMessage);
        } else {
            $this->CreateFolderPathResponseMessage = $createFolderPathResponseMessage;
        }
        return $this;
    }
    /**
     * Get CreateAttachmentResponseMessage value
     * @return \Ews\StructType\EwsAttachmentInfoResponseMessageType|null
     */
    public function getCreateAttachmentResponseMessage()
    {
        return isset($this->CreateAttachmentResponseMessage) ? $this->CreateAttachmentResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCreateAttachmentResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCreateAttachmentResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCreateAttachmentResponseMessageForChoiceConstraintsFromSetCreateAttachmentResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property CreateAttachmentResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: CreateAttachmentResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set CreateAttachmentResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsAttachmentInfoResponseMessageType $createAttachmentResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setCreateAttachmentResponseMessage(\Ews\StructType\EwsAttachmentInfoResponseMessageType $createAttachmentResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($createAttachmentResponseMessageChoiceErrorMessage = self::validateCreateAttachmentResponseMessageForChoiceConstraintsFromSetCreateAttachmentResponseMessage($createAttachmentResponseMessage))) {
            throw new \InvalidArgumentException($createAttachmentResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($createAttachmentResponseMessage) || (is_array($createAttachmentResponseMessage) && empty($createAttachmentResponseMessage))) {
            unset($this->CreateAttachmentResponseMessage);
        } else {
            $this->CreateAttachmentResponseMessage = $createAttachmentResponseMessage;
        }
        return $this;
    }
    /**
     * Get DeleteAttachmentResponseMessage value
     * @return \Ews\StructType\EwsDeleteAttachmentResponseMessageType|null
     */
    public function getDeleteAttachmentResponseMessage()
    {
        return isset($this->DeleteAttachmentResponseMessage) ? $this->DeleteAttachmentResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDeleteAttachmentResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeleteAttachmentResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDeleteAttachmentResponseMessageForChoiceConstraintsFromSetDeleteAttachmentResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property DeleteAttachmentResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: DeleteAttachmentResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set DeleteAttachmentResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsDeleteAttachmentResponseMessageType $deleteAttachmentResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setDeleteAttachmentResponseMessage(\Ews\StructType\EwsDeleteAttachmentResponseMessageType $deleteAttachmentResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($deleteAttachmentResponseMessageChoiceErrorMessage = self::validateDeleteAttachmentResponseMessageForChoiceConstraintsFromSetDeleteAttachmentResponseMessage($deleteAttachmentResponseMessage))) {
            throw new \InvalidArgumentException($deleteAttachmentResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($deleteAttachmentResponseMessage) || (is_array($deleteAttachmentResponseMessage) && empty($deleteAttachmentResponseMessage))) {
            unset($this->DeleteAttachmentResponseMessage);
        } else {
            $this->DeleteAttachmentResponseMessage = $deleteAttachmentResponseMessage;
        }
        return $this;
    }
    /**
     * Get GetAttachmentResponseMessage value
     * @return \Ews\StructType\EwsAttachmentInfoResponseMessageType|null
     */
    public function getGetAttachmentResponseMessage()
    {
        return isset($this->GetAttachmentResponseMessage) ? $this->GetAttachmentResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setGetAttachmentResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetAttachmentResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGetAttachmentResponseMessageForChoiceConstraintsFromSetGetAttachmentResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property GetAttachmentResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: GetAttachmentResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set GetAttachmentResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsAttachmentInfoResponseMessageType $getAttachmentResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetAttachmentResponseMessage(\Ews\StructType\EwsAttachmentInfoResponseMessageType $getAttachmentResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($getAttachmentResponseMessageChoiceErrorMessage = self::validateGetAttachmentResponseMessageForChoiceConstraintsFromSetGetAttachmentResponseMessage($getAttachmentResponseMessage))) {
            throw new \InvalidArgumentException($getAttachmentResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($getAttachmentResponseMessage) || (is_array($getAttachmentResponseMessage) && empty($getAttachmentResponseMessage))) {
            unset($this->GetAttachmentResponseMessage);
        } else {
            $this->GetAttachmentResponseMessage = $getAttachmentResponseMessage;
        }
        return $this;
    }
    /**
     * Get UploadItemsResponseMessage value
     * @return \Ews\StructType\EwsUploadItemsResponseMessageType|null
     */
    public function getUploadItemsResponseMessage()
    {
        return isset($this->UploadItemsResponseMessage) ? $this->UploadItemsResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setUploadItemsResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUploadItemsResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateUploadItemsResponseMessageForChoiceConstraintsFromSetUploadItemsResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property UploadItemsResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: UploadItemsResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set UploadItemsResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUploadItemsResponseMessageType $uploadItemsResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setUploadItemsResponseMessage(\Ews\StructType\EwsUploadItemsResponseMessageType $uploadItemsResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($uploadItemsResponseMessageChoiceErrorMessage = self::validateUploadItemsResponseMessageForChoiceConstraintsFromSetUploadItemsResponseMessage($uploadItemsResponseMessage))) {
            throw new \InvalidArgumentException($uploadItemsResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($uploadItemsResponseMessage) || (is_array($uploadItemsResponseMessage) && empty($uploadItemsResponseMessage))) {
            unset($this->UploadItemsResponseMessage);
        } else {
            $this->UploadItemsResponseMessage = $uploadItemsResponseMessage;
        }
        return $this;
    }
    /**
     * Get ExportItemsResponseMessage value
     * @return \Ews\StructType\EwsExportItemsResponseMessageType|null
     */
    public function getExportItemsResponseMessage()
    {
        return isset($this->ExportItemsResponseMessage) ? $this->ExportItemsResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setExportItemsResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExportItemsResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateExportItemsResponseMessageForChoiceConstraintsFromSetExportItemsResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property ExportItemsResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: ExportItemsResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set ExportItemsResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsExportItemsResponseMessageType $exportItemsResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setExportItemsResponseMessage(\Ews\StructType\EwsExportItemsResponseMessageType $exportItemsResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($exportItemsResponseMessageChoiceErrorMessage = self::validateExportItemsResponseMessageForChoiceConstraintsFromSetExportItemsResponseMessage($exportItemsResponseMessage))) {
            throw new \InvalidArgumentException($exportItemsResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($exportItemsResponseMessage) || (is_array($exportItemsResponseMessage) && empty($exportItemsResponseMessage))) {
            unset($this->ExportItemsResponseMessage);
        } else {
            $this->ExportItemsResponseMessage = $exportItemsResponseMessage;
        }
        return $this;
    }
    /**
     * Get MarkAllItemsAsReadResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getMarkAllItemsAsReadResponseMessage()
    {
        return isset($this->MarkAllItemsAsReadResponseMessage) ? $this->MarkAllItemsAsReadResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setMarkAllItemsAsReadResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMarkAllItemsAsReadResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateMarkAllItemsAsReadResponseMessageForChoiceConstraintsFromSetMarkAllItemsAsReadResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property MarkAllItemsAsReadResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: MarkAllItemsAsReadResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set MarkAllItemsAsReadResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsResponseMessageType $markAllItemsAsReadResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setMarkAllItemsAsReadResponseMessage(\Ews\StructType\EwsResponseMessageType $markAllItemsAsReadResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($markAllItemsAsReadResponseMessageChoiceErrorMessage = self::validateMarkAllItemsAsReadResponseMessageForChoiceConstraintsFromSetMarkAllItemsAsReadResponseMessage($markAllItemsAsReadResponseMessage))) {
            throw new \InvalidArgumentException($markAllItemsAsReadResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($markAllItemsAsReadResponseMessage) || (is_array($markAllItemsAsReadResponseMessage) && empty($markAllItemsAsReadResponseMessage))) {
            unset($this->MarkAllItemsAsReadResponseMessage);
        } else {
            $this->MarkAllItemsAsReadResponseMessage = $markAllItemsAsReadResponseMessage;
        }
        return $this;
    }
    /**
     * Get GetClientAccessTokenResponseMessage value
     * @return \Ews\StructType\EwsGetClientAccessTokenResponseMessageType|null
     */
    public function getGetClientAccessTokenResponseMessage()
    {
        return isset($this->GetClientAccessTokenResponseMessage) ? $this->GetClientAccessTokenResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setGetClientAccessTokenResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetClientAccessTokenResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGetClientAccessTokenResponseMessageForChoiceConstraintsFromSetGetClientAccessTokenResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property GetClientAccessTokenResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: GetClientAccessTokenResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set GetClientAccessTokenResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsGetClientAccessTokenResponseMessageType $getClientAccessTokenResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetClientAccessTokenResponseMessage(\Ews\StructType\EwsGetClientAccessTokenResponseMessageType $getClientAccessTokenResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($getClientAccessTokenResponseMessageChoiceErrorMessage = self::validateGetClientAccessTokenResponseMessageForChoiceConstraintsFromSetGetClientAccessTokenResponseMessage($getClientAccessTokenResponseMessage))) {
            throw new \InvalidArgumentException($getClientAccessTokenResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($getClientAccessTokenResponseMessage) || (is_array($getClientAccessTokenResponseMessage) && empty($getClientAccessTokenResponseMessage))) {
            unset($this->GetClientAccessTokenResponseMessage);
        } else {
            $this->GetClientAccessTokenResponseMessage = $getClientAccessTokenResponseMessage;
        }
        return $this;
    }
    /**
     * Get GetAppManifestsResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getGetAppManifestsResponseMessage()
    {
        return isset($this->GetAppManifestsResponseMessage) ? $this->GetAppManifestsResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setGetAppManifestsResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetAppManifestsResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGetAppManifestsResponseMessageForChoiceConstraintsFromSetGetAppManifestsResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property GetAppManifestsResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: GetAppManifestsResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set GetAppManifestsResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsResponseMessageType $getAppManifestsResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetAppManifestsResponseMessage(\Ews\StructType\EwsResponseMessageType $getAppManifestsResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($getAppManifestsResponseMessageChoiceErrorMessage = self::validateGetAppManifestsResponseMessageForChoiceConstraintsFromSetGetAppManifestsResponseMessage($getAppManifestsResponseMessage))) {
            throw new \InvalidArgumentException($getAppManifestsResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($getAppManifestsResponseMessage) || (is_array($getAppManifestsResponseMessage) && empty($getAppManifestsResponseMessage))) {
            unset($this->GetAppManifestsResponseMessage);
        } else {
            $this->GetAppManifestsResponseMessage = $getAppManifestsResponseMessage;
        }
        return $this;
    }
    /**
     * Get GetClientExtensionResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getGetClientExtensionResponseMessage()
    {
        return isset($this->GetClientExtensionResponseMessage) ? $this->GetClientExtensionResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setGetClientExtensionResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetClientExtensionResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGetClientExtensionResponseMessageForChoiceConstraintsFromSetGetClientExtensionResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property GetClientExtensionResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: GetClientExtensionResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set GetClientExtensionResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsResponseMessageType $getClientExtensionResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetClientExtensionResponseMessage(\Ews\StructType\EwsResponseMessageType $getClientExtensionResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($getClientExtensionResponseMessageChoiceErrorMessage = self::validateGetClientExtensionResponseMessageForChoiceConstraintsFromSetGetClientExtensionResponseMessage($getClientExtensionResponseMessage))) {
            throw new \InvalidArgumentException($getClientExtensionResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($getClientExtensionResponseMessage) || (is_array($getClientExtensionResponseMessage) && empty($getClientExtensionResponseMessage))) {
            unset($this->GetClientExtensionResponseMessage);
        } else {
            $this->GetClientExtensionResponseMessage = $getClientExtensionResponseMessage;
        }
        return $this;
    }
    /**
     * Get SetClientExtensionResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getSetClientExtensionResponseMessage()
    {
        return isset($this->SetClientExtensionResponseMessage) ? $this->SetClientExtensionResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setSetClientExtensionResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSetClientExtensionResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSetClientExtensionResponseMessageForChoiceConstraintsFromSetSetClientExtensionResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property SetClientExtensionResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: SetClientExtensionResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set SetClientExtensionResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsResponseMessageType $setClientExtensionResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setSetClientExtensionResponseMessage(\Ews\StructType\EwsResponseMessageType $setClientExtensionResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($setClientExtensionResponseMessageChoiceErrorMessage = self::validateSetClientExtensionResponseMessageForChoiceConstraintsFromSetSetClientExtensionResponseMessage($setClientExtensionResponseMessage))) {
            throw new \InvalidArgumentException($setClientExtensionResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($setClientExtensionResponseMessage) || (is_array($setClientExtensionResponseMessage) && empty($setClientExtensionResponseMessage))) {
            unset($this->SetClientExtensionResponseMessage);
        } else {
            $this->SetClientExtensionResponseMessage = $setClientExtensionResponseMessage;
        }
        return $this;
    }
    /**
     * Get GetEncryptionConfigurationResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getGetEncryptionConfigurationResponseMessage()
    {
        return isset($this->GetEncryptionConfigurationResponseMessage) ? $this->GetEncryptionConfigurationResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setGetEncryptionConfigurationResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetEncryptionConfigurationResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGetEncryptionConfigurationResponseMessageForChoiceConstraintsFromSetGetEncryptionConfigurationResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property GetEncryptionConfigurationResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: GetEncryptionConfigurationResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set GetEncryptionConfigurationResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsResponseMessageType $getEncryptionConfigurationResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetEncryptionConfigurationResponseMessage(\Ews\StructType\EwsResponseMessageType $getEncryptionConfigurationResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($getEncryptionConfigurationResponseMessageChoiceErrorMessage = self::validateGetEncryptionConfigurationResponseMessageForChoiceConstraintsFromSetGetEncryptionConfigurationResponseMessage($getEncryptionConfigurationResponseMessage))) {
            throw new \InvalidArgumentException($getEncryptionConfigurationResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($getEncryptionConfigurationResponseMessage) || (is_array($getEncryptionConfigurationResponseMessage) && empty($getEncryptionConfigurationResponseMessage))) {
            unset($this->GetEncryptionConfigurationResponseMessage);
        } else {
            $this->GetEncryptionConfigurationResponseMessage = $getEncryptionConfigurationResponseMessage;
        }
        return $this;
    }
    /**
     * Get SetEncryptionConfigurationResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getSetEncryptionConfigurationResponseMessage()
    {
        return isset($this->SetEncryptionConfigurationResponseMessage) ? $this->SetEncryptionConfigurationResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setSetEncryptionConfigurationResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSetEncryptionConfigurationResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSetEncryptionConfigurationResponseMessageForChoiceConstraintsFromSetSetEncryptionConfigurationResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property SetEncryptionConfigurationResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: SetEncryptionConfigurationResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set SetEncryptionConfigurationResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsResponseMessageType $setEncryptionConfigurationResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setSetEncryptionConfigurationResponseMessage(\Ews\StructType\EwsResponseMessageType $setEncryptionConfigurationResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($setEncryptionConfigurationResponseMessageChoiceErrorMessage = self::validateSetEncryptionConfigurationResponseMessageForChoiceConstraintsFromSetSetEncryptionConfigurationResponseMessage($setEncryptionConfigurationResponseMessage))) {
            throw new \InvalidArgumentException($setEncryptionConfigurationResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($setEncryptionConfigurationResponseMessage) || (is_array($setEncryptionConfigurationResponseMessage) && empty($setEncryptionConfigurationResponseMessage))) {
            unset($this->SetEncryptionConfigurationResponseMessage);
        } else {
            $this->SetEncryptionConfigurationResponseMessage = $setEncryptionConfigurationResponseMessage;
        }
        return $this;
    }
    /**
     * Get GetOMEConfigurationResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getGetOMEConfigurationResponseMessage()
    {
        return isset($this->GetOMEConfigurationResponseMessage) ? $this->GetOMEConfigurationResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setGetOMEConfigurationResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetOMEConfigurationResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGetOMEConfigurationResponseMessageForChoiceConstraintsFromSetGetOMEConfigurationResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property GetOMEConfigurationResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: GetOMEConfigurationResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set GetOMEConfigurationResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsResponseMessageType $getOMEConfigurationResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetOMEConfigurationResponseMessage(\Ews\StructType\EwsResponseMessageType $getOMEConfigurationResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($getOMEConfigurationResponseMessageChoiceErrorMessage = self::validateGetOMEConfigurationResponseMessageForChoiceConstraintsFromSetGetOMEConfigurationResponseMessage($getOMEConfigurationResponseMessage))) {
            throw new \InvalidArgumentException($getOMEConfigurationResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($getOMEConfigurationResponseMessage) || (is_array($getOMEConfigurationResponseMessage) && empty($getOMEConfigurationResponseMessage))) {
            unset($this->GetOMEConfigurationResponseMessage);
        } else {
            $this->GetOMEConfigurationResponseMessage = $getOMEConfigurationResponseMessage;
        }
        return $this;
    }
    /**
     * Get SetOMEConfigurationResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getSetOMEConfigurationResponseMessage()
    {
        return isset($this->SetOMEConfigurationResponseMessage) ? $this->SetOMEConfigurationResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setSetOMEConfigurationResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSetOMEConfigurationResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSetOMEConfigurationResponseMessageForChoiceConstraintsFromSetSetOMEConfigurationResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property SetOMEConfigurationResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: SetOMEConfigurationResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set SetOMEConfigurationResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsResponseMessageType $setOMEConfigurationResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setSetOMEConfigurationResponseMessage(\Ews\StructType\EwsResponseMessageType $setOMEConfigurationResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($setOMEConfigurationResponseMessageChoiceErrorMessage = self::validateSetOMEConfigurationResponseMessageForChoiceConstraintsFromSetSetOMEConfigurationResponseMessage($setOMEConfigurationResponseMessage))) {
            throw new \InvalidArgumentException($setOMEConfigurationResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($setOMEConfigurationResponseMessage) || (is_array($setOMEConfigurationResponseMessage) && empty($setOMEConfigurationResponseMessage))) {
            unset($this->SetOMEConfigurationResponseMessage);
        } else {
            $this->SetOMEConfigurationResponseMessage = $setOMEConfigurationResponseMessage;
        }
        return $this;
    }
    /**
     * Get FindItemResponseMessage value
     * @return \Ews\StructType\EwsFindItemResponseMessageType|null
     */
    public function getFindItemResponseMessage()
    {
        return isset($this->FindItemResponseMessage) ? $this->FindItemResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setFindItemResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFindItemResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateFindItemResponseMessageForChoiceConstraintsFromSetFindItemResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property FindItemResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: FindItemResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set FindItemResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFindItemResponseMessageType $findItemResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setFindItemResponseMessage(\Ews\StructType\EwsFindItemResponseMessageType $findItemResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($findItemResponseMessageChoiceErrorMessage = self::validateFindItemResponseMessageForChoiceConstraintsFromSetFindItemResponseMessage($findItemResponseMessage))) {
            throw new \InvalidArgumentException($findItemResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($findItemResponseMessage) || (is_array($findItemResponseMessage) && empty($findItemResponseMessage))) {
            unset($this->FindItemResponseMessage);
        } else {
            $this->FindItemResponseMessage = $findItemResponseMessage;
        }
        return $this;
    }
    /**
     * Get MoveItemResponseMessage value
     * @return \Ews\StructType\EwsItemInfoResponseMessageType|null
     */
    public function getMoveItemResponseMessage()
    {
        return isset($this->MoveItemResponseMessage) ? $this->MoveItemResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setMoveItemResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMoveItemResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateMoveItemResponseMessageForChoiceConstraintsFromSetMoveItemResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property MoveItemResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: MoveItemResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set MoveItemResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsItemInfoResponseMessageType $moveItemResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setMoveItemResponseMessage(\Ews\StructType\EwsItemInfoResponseMessageType $moveItemResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($moveItemResponseMessageChoiceErrorMessage = self::validateMoveItemResponseMessageForChoiceConstraintsFromSetMoveItemResponseMessage($moveItemResponseMessage))) {
            throw new \InvalidArgumentException($moveItemResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($moveItemResponseMessage) || (is_array($moveItemResponseMessage) && empty($moveItemResponseMessage))) {
            unset($this->MoveItemResponseMessage);
        } else {
            $this->MoveItemResponseMessage = $moveItemResponseMessage;
        }
        return $this;
    }
    /**
     * Get ArchiveItemResponseMessage value
     * @return \Ews\StructType\EwsItemInfoResponseMessageType|null
     */
    public function getArchiveItemResponseMessage()
    {
        return isset($this->ArchiveItemResponseMessage) ? $this->ArchiveItemResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setArchiveItemResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setArchiveItemResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateArchiveItemResponseMessageForChoiceConstraintsFromSetArchiveItemResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property ArchiveItemResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: ArchiveItemResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set ArchiveItemResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsItemInfoResponseMessageType $archiveItemResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setArchiveItemResponseMessage(\Ews\StructType\EwsItemInfoResponseMessageType $archiveItemResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($archiveItemResponseMessageChoiceErrorMessage = self::validateArchiveItemResponseMessageForChoiceConstraintsFromSetArchiveItemResponseMessage($archiveItemResponseMessage))) {
            throw new \InvalidArgumentException($archiveItemResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($archiveItemResponseMessage) || (is_array($archiveItemResponseMessage) && empty($archiveItemResponseMessage))) {
            unset($this->ArchiveItemResponseMessage);
        } else {
            $this->ArchiveItemResponseMessage = $archiveItemResponseMessage;
        }
        return $this;
    }
    /**
     * Get CopyItemResponseMessage value
     * @return \Ews\StructType\EwsItemInfoResponseMessageType|null
     */
    public function getCopyItemResponseMessage()
    {
        return isset($this->CopyItemResponseMessage) ? $this->CopyItemResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCopyItemResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCopyItemResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCopyItemResponseMessageForChoiceConstraintsFromSetCopyItemResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property CopyItemResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: CopyItemResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set CopyItemResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsItemInfoResponseMessageType $copyItemResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setCopyItemResponseMessage(\Ews\StructType\EwsItemInfoResponseMessageType $copyItemResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($copyItemResponseMessageChoiceErrorMessage = self::validateCopyItemResponseMessageForChoiceConstraintsFromSetCopyItemResponseMessage($copyItemResponseMessage))) {
            throw new \InvalidArgumentException($copyItemResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($copyItemResponseMessage) || (is_array($copyItemResponseMessage) && empty($copyItemResponseMessage))) {
            unset($this->CopyItemResponseMessage);
        } else {
            $this->CopyItemResponseMessage = $copyItemResponseMessage;
        }
        return $this;
    }
    /**
     * Get ResolveNamesResponseMessage value
     * @return \Ews\StructType\EwsResolveNamesResponseMessageType|null
     */
    public function getResolveNamesResponseMessage()
    {
        return isset($this->ResolveNamesResponseMessage) ? $this->ResolveNamesResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setResolveNamesResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResolveNamesResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateResolveNamesResponseMessageForChoiceConstraintsFromSetResolveNamesResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property ResolveNamesResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: ResolveNamesResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set ResolveNamesResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsResolveNamesResponseMessageType $resolveNamesResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setResolveNamesResponseMessage(\Ews\StructType\EwsResolveNamesResponseMessageType $resolveNamesResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($resolveNamesResponseMessageChoiceErrorMessage = self::validateResolveNamesResponseMessageForChoiceConstraintsFromSetResolveNamesResponseMessage($resolveNamesResponseMessage))) {
            throw new \InvalidArgumentException($resolveNamesResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($resolveNamesResponseMessage) || (is_array($resolveNamesResponseMessage) && empty($resolveNamesResponseMessage))) {
            unset($this->ResolveNamesResponseMessage);
        } else {
            $this->ResolveNamesResponseMessage = $resolveNamesResponseMessage;
        }
        return $this;
    }
    /**
     * Get ExpandDLResponseMessage value
     * @return \Ews\StructType\EwsExpandDLResponseMessageType|null
     */
    public function getExpandDLResponseMessage()
    {
        return isset($this->ExpandDLResponseMessage) ? $this->ExpandDLResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setExpandDLResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExpandDLResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateExpandDLResponseMessageForChoiceConstraintsFromSetExpandDLResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property ExpandDLResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: ExpandDLResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set ExpandDLResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsExpandDLResponseMessageType $expandDLResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setExpandDLResponseMessage(\Ews\StructType\EwsExpandDLResponseMessageType $expandDLResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($expandDLResponseMessageChoiceErrorMessage = self::validateExpandDLResponseMessageForChoiceConstraintsFromSetExpandDLResponseMessage($expandDLResponseMessage))) {
            throw new \InvalidArgumentException($expandDLResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($expandDLResponseMessage) || (is_array($expandDLResponseMessage) && empty($expandDLResponseMessage))) {
            unset($this->ExpandDLResponseMessage);
        } else {
            $this->ExpandDLResponseMessage = $expandDLResponseMessage;
        }
        return $this;
    }
    /**
     * Get GetServerTimeZonesResponseMessage value
     * @return \Ews\StructType\EwsGetServerTimeZonesResponseMessageType|null
     */
    public function getGetServerTimeZonesResponseMessage()
    {
        return isset($this->GetServerTimeZonesResponseMessage) ? $this->GetServerTimeZonesResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setGetServerTimeZonesResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetServerTimeZonesResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGetServerTimeZonesResponseMessageForChoiceConstraintsFromSetGetServerTimeZonesResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property GetServerTimeZonesResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: GetServerTimeZonesResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set GetServerTimeZonesResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsGetServerTimeZonesResponseMessageType $getServerTimeZonesResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetServerTimeZonesResponseMessage(\Ews\StructType\EwsGetServerTimeZonesResponseMessageType $getServerTimeZonesResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($getServerTimeZonesResponseMessageChoiceErrorMessage = self::validateGetServerTimeZonesResponseMessageForChoiceConstraintsFromSetGetServerTimeZonesResponseMessage($getServerTimeZonesResponseMessage))) {
            throw new \InvalidArgumentException($getServerTimeZonesResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($getServerTimeZonesResponseMessage) || (is_array($getServerTimeZonesResponseMessage) && empty($getServerTimeZonesResponseMessage))) {
            unset($this->GetServerTimeZonesResponseMessage);
        } else {
            $this->GetServerTimeZonesResponseMessage = $getServerTimeZonesResponseMessage;
        }
        return $this;
    }
    /**
     * Get GetEventsResponseMessage value
     * @return \Ews\StructType\EwsGetEventsResponseMessageType|null
     */
    public function getGetEventsResponseMessage()
    {
        return isset($this->GetEventsResponseMessage) ? $this->GetEventsResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setGetEventsResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetEventsResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGetEventsResponseMessageForChoiceConstraintsFromSetGetEventsResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property GetEventsResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: GetEventsResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set GetEventsResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsGetEventsResponseMessageType $getEventsResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetEventsResponseMessage(\Ews\StructType\EwsGetEventsResponseMessageType $getEventsResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($getEventsResponseMessageChoiceErrorMessage = self::validateGetEventsResponseMessageForChoiceConstraintsFromSetGetEventsResponseMessage($getEventsResponseMessage))) {
            throw new \InvalidArgumentException($getEventsResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($getEventsResponseMessage) || (is_array($getEventsResponseMessage) && empty($getEventsResponseMessage))) {
            unset($this->GetEventsResponseMessage);
        } else {
            $this->GetEventsResponseMessage = $getEventsResponseMessage;
        }
        return $this;
    }
    /**
     * Get GetStreamingEventsResponseMessage value
     * @return \Ews\StructType\EwsGetStreamingEventsResponseMessageType|null
     */
    public function getGetStreamingEventsResponseMessage()
    {
        return isset($this->GetStreamingEventsResponseMessage) ? $this->GetStreamingEventsResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setGetStreamingEventsResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetStreamingEventsResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGetStreamingEventsResponseMessageForChoiceConstraintsFromSetGetStreamingEventsResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property GetStreamingEventsResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: GetStreamingEventsResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set GetStreamingEventsResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsGetStreamingEventsResponseMessageType $getStreamingEventsResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetStreamingEventsResponseMessage(\Ews\StructType\EwsGetStreamingEventsResponseMessageType $getStreamingEventsResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($getStreamingEventsResponseMessageChoiceErrorMessage = self::validateGetStreamingEventsResponseMessageForChoiceConstraintsFromSetGetStreamingEventsResponseMessage($getStreamingEventsResponseMessage))) {
            throw new \InvalidArgumentException($getStreamingEventsResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($getStreamingEventsResponseMessage) || (is_array($getStreamingEventsResponseMessage) && empty($getStreamingEventsResponseMessage))) {
            unset($this->GetStreamingEventsResponseMessage);
        } else {
            $this->GetStreamingEventsResponseMessage = $getStreamingEventsResponseMessage;
        }
        return $this;
    }
    /**
     * Get SubscribeResponseMessage value
     * @return \Ews\StructType\EwsSubscribeResponseMessageType|null
     */
    public function getSubscribeResponseMessage()
    {
        return isset($this->SubscribeResponseMessage) ? $this->SubscribeResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setSubscribeResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSubscribeResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSubscribeResponseMessageForChoiceConstraintsFromSetSubscribeResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property SubscribeResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: SubscribeResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set SubscribeResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSubscribeResponseMessageType $subscribeResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setSubscribeResponseMessage(\Ews\StructType\EwsSubscribeResponseMessageType $subscribeResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($subscribeResponseMessageChoiceErrorMessage = self::validateSubscribeResponseMessageForChoiceConstraintsFromSetSubscribeResponseMessage($subscribeResponseMessage))) {
            throw new \InvalidArgumentException($subscribeResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($subscribeResponseMessage) || (is_array($subscribeResponseMessage) && empty($subscribeResponseMessage))) {
            unset($this->SubscribeResponseMessage);
        } else {
            $this->SubscribeResponseMessage = $subscribeResponseMessage;
        }
        return $this;
    }
    /**
     * Get UnsubscribeResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getUnsubscribeResponseMessage()
    {
        return isset($this->UnsubscribeResponseMessage) ? $this->UnsubscribeResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setUnsubscribeResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnsubscribeResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateUnsubscribeResponseMessageForChoiceConstraintsFromSetUnsubscribeResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property UnsubscribeResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: UnsubscribeResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set UnsubscribeResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsResponseMessageType $unsubscribeResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setUnsubscribeResponseMessage(\Ews\StructType\EwsResponseMessageType $unsubscribeResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($unsubscribeResponseMessageChoiceErrorMessage = self::validateUnsubscribeResponseMessageForChoiceConstraintsFromSetUnsubscribeResponseMessage($unsubscribeResponseMessage))) {
            throw new \InvalidArgumentException($unsubscribeResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($unsubscribeResponseMessage) || (is_array($unsubscribeResponseMessage) && empty($unsubscribeResponseMessage))) {
            unset($this->UnsubscribeResponseMessage);
        } else {
            $this->UnsubscribeResponseMessage = $unsubscribeResponseMessage;
        }
        return $this;
    }
    /**
     * Get GetChannelEventsResponseMessage value
     * @return \Ews\StructType\EwsGetChannelEventsResponseMessageType|null
     */
    public function getGetChannelEventsResponseMessage()
    {
        return isset($this->GetChannelEventsResponseMessage) ? $this->GetChannelEventsResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setGetChannelEventsResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetChannelEventsResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGetChannelEventsResponseMessageForChoiceConstraintsFromSetGetChannelEventsResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property GetChannelEventsResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: GetChannelEventsResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set GetChannelEventsResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsGetChannelEventsResponseMessageType $getChannelEventsResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetChannelEventsResponseMessage(\Ews\StructType\EwsGetChannelEventsResponseMessageType $getChannelEventsResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($getChannelEventsResponseMessageChoiceErrorMessage = self::validateGetChannelEventsResponseMessageForChoiceConstraintsFromSetGetChannelEventsResponseMessage($getChannelEventsResponseMessage))) {
            throw new \InvalidArgumentException($getChannelEventsResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($getChannelEventsResponseMessage) || (is_array($getChannelEventsResponseMessage) && empty($getChannelEventsResponseMessage))) {
            unset($this->GetChannelEventsResponseMessage);
        } else {
            $this->GetChannelEventsResponseMessage = $getChannelEventsResponseMessage;
        }
        return $this;
    }
    /**
     * Get ChannelSubscribeResponseMessage value
     * @return \Ews\StructType\EwsChannelSubscribeResponseMessageType|null
     */
    public function getChannelSubscribeResponseMessage()
    {
        return isset($this->ChannelSubscribeResponseMessage) ? $this->ChannelSubscribeResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setChannelSubscribeResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChannelSubscribeResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateChannelSubscribeResponseMessageForChoiceConstraintsFromSetChannelSubscribeResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property ChannelSubscribeResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: ChannelSubscribeResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set ChannelSubscribeResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsChannelSubscribeResponseMessageType $channelSubscribeResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setChannelSubscribeResponseMessage(\Ews\StructType\EwsChannelSubscribeResponseMessageType $channelSubscribeResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($channelSubscribeResponseMessageChoiceErrorMessage = self::validateChannelSubscribeResponseMessageForChoiceConstraintsFromSetChannelSubscribeResponseMessage($channelSubscribeResponseMessage))) {
            throw new \InvalidArgumentException($channelSubscribeResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($channelSubscribeResponseMessage) || (is_array($channelSubscribeResponseMessage) && empty($channelSubscribeResponseMessage))) {
            unset($this->ChannelSubscribeResponseMessage);
        } else {
            $this->ChannelSubscribeResponseMessage = $channelSubscribeResponseMessage;
        }
        return $this;
    }
    /**
     * Get ChannelUnsubscribeResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getChannelUnsubscribeResponseMessage()
    {
        return isset($this->ChannelUnsubscribeResponseMessage) ? $this->ChannelUnsubscribeResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setChannelUnsubscribeResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChannelUnsubscribeResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateChannelUnsubscribeResponseMessageForChoiceConstraintsFromSetChannelUnsubscribeResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property ChannelUnsubscribeResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: ChannelUnsubscribeResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set ChannelUnsubscribeResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsResponseMessageType $channelUnsubscribeResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setChannelUnsubscribeResponseMessage(\Ews\StructType\EwsResponseMessageType $channelUnsubscribeResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($channelUnsubscribeResponseMessageChoiceErrorMessage = self::validateChannelUnsubscribeResponseMessageForChoiceConstraintsFromSetChannelUnsubscribeResponseMessage($channelUnsubscribeResponseMessage))) {
            throw new \InvalidArgumentException($channelUnsubscribeResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($channelUnsubscribeResponseMessage) || (is_array($channelUnsubscribeResponseMessage) && empty($channelUnsubscribeResponseMessage))) {
            unset($this->ChannelUnsubscribeResponseMessage);
        } else {
            $this->ChannelUnsubscribeResponseMessage = $channelUnsubscribeResponseMessage;
        }
        return $this;
    }
    /**
     * Get SendNotificationResponseMessage value
     * @return \Ews\StructType\EwsSendNotificationResponseMessageType|null
     */
    public function getSendNotificationResponseMessage()
    {
        return isset($this->SendNotificationResponseMessage) ? $this->SendNotificationResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setSendNotificationResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSendNotificationResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSendNotificationResponseMessageForChoiceConstraintsFromSetSendNotificationResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property SendNotificationResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: SendNotificationResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set SendNotificationResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSendNotificationResponseMessageType $sendNotificationResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setSendNotificationResponseMessage(\Ews\StructType\EwsSendNotificationResponseMessageType $sendNotificationResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($sendNotificationResponseMessageChoiceErrorMessage = self::validateSendNotificationResponseMessageForChoiceConstraintsFromSetSendNotificationResponseMessage($sendNotificationResponseMessage))) {
            throw new \InvalidArgumentException($sendNotificationResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($sendNotificationResponseMessage) || (is_array($sendNotificationResponseMessage) && empty($sendNotificationResponseMessage))) {
            unset($this->SendNotificationResponseMessage);
        } else {
            $this->SendNotificationResponseMessage = $sendNotificationResponseMessage;
        }
        return $this;
    }
    /**
     * Get SyncFolderHierarchyResponseMessage value
     * @return \Ews\StructType\EwsSyncFolderHierarchyResponseMessageType|null
     */
    public function getSyncFolderHierarchyResponseMessage()
    {
        return isset($this->SyncFolderHierarchyResponseMessage) ? $this->SyncFolderHierarchyResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setSyncFolderHierarchyResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSyncFolderHierarchyResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSyncFolderHierarchyResponseMessageForChoiceConstraintsFromSetSyncFolderHierarchyResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property SyncFolderHierarchyResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: SyncFolderHierarchyResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set SyncFolderHierarchyResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSyncFolderHierarchyResponseMessageType $syncFolderHierarchyResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setSyncFolderHierarchyResponseMessage(\Ews\StructType\EwsSyncFolderHierarchyResponseMessageType $syncFolderHierarchyResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($syncFolderHierarchyResponseMessageChoiceErrorMessage = self::validateSyncFolderHierarchyResponseMessageForChoiceConstraintsFromSetSyncFolderHierarchyResponseMessage($syncFolderHierarchyResponseMessage))) {
            throw new \InvalidArgumentException($syncFolderHierarchyResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($syncFolderHierarchyResponseMessage) || (is_array($syncFolderHierarchyResponseMessage) && empty($syncFolderHierarchyResponseMessage))) {
            unset($this->SyncFolderHierarchyResponseMessage);
        } else {
            $this->SyncFolderHierarchyResponseMessage = $syncFolderHierarchyResponseMessage;
        }
        return $this;
    }
    /**
     * Get SyncFolderItemsResponseMessage value
     * @return \Ews\StructType\EwsSyncFolderItemsResponseMessageType|null
     */
    public function getSyncFolderItemsResponseMessage()
    {
        return isset($this->SyncFolderItemsResponseMessage) ? $this->SyncFolderItemsResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setSyncFolderItemsResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSyncFolderItemsResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSyncFolderItemsResponseMessageForChoiceConstraintsFromSetSyncFolderItemsResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property SyncFolderItemsResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: SyncFolderItemsResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set SyncFolderItemsResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSyncFolderItemsResponseMessageType $syncFolderItemsResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setSyncFolderItemsResponseMessage(\Ews\StructType\EwsSyncFolderItemsResponseMessageType $syncFolderItemsResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($syncFolderItemsResponseMessageChoiceErrorMessage = self::validateSyncFolderItemsResponseMessageForChoiceConstraintsFromSetSyncFolderItemsResponseMessage($syncFolderItemsResponseMessage))) {
            throw new \InvalidArgumentException($syncFolderItemsResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($syncFolderItemsResponseMessage) || (is_array($syncFolderItemsResponseMessage) && empty($syncFolderItemsResponseMessage))) {
            unset($this->SyncFolderItemsResponseMessage);
        } else {
            $this->SyncFolderItemsResponseMessage = $syncFolderItemsResponseMessage;
        }
        return $this;
    }
    /**
     * Get CreateManagedFolderResponseMessage value
     * @return \Ews\StructType\EwsFolderInfoResponseMessageType|null
     */
    public function getCreateManagedFolderResponseMessage()
    {
        return isset($this->CreateManagedFolderResponseMessage) ? $this->CreateManagedFolderResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCreateManagedFolderResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCreateManagedFolderResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCreateManagedFolderResponseMessageForChoiceConstraintsFromSetCreateManagedFolderResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property CreateManagedFolderResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: CreateManagedFolderResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set CreateManagedFolderResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFolderInfoResponseMessageType $createManagedFolderResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setCreateManagedFolderResponseMessage(\Ews\StructType\EwsFolderInfoResponseMessageType $createManagedFolderResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($createManagedFolderResponseMessageChoiceErrorMessage = self::validateCreateManagedFolderResponseMessageForChoiceConstraintsFromSetCreateManagedFolderResponseMessage($createManagedFolderResponseMessage))) {
            throw new \InvalidArgumentException($createManagedFolderResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($createManagedFolderResponseMessage) || (is_array($createManagedFolderResponseMessage) && empty($createManagedFolderResponseMessage))) {
            unset($this->CreateManagedFolderResponseMessage);
        } else {
            $this->CreateManagedFolderResponseMessage = $createManagedFolderResponseMessage;
        }
        return $this;
    }
    /**
     * Get ConvertIdResponseMessage value
     * @return \Ews\StructType\EwsConvertIdResponseMessageType|null
     */
    public function getConvertIdResponseMessage()
    {
        return isset($this->ConvertIdResponseMessage) ? $this->ConvertIdResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setConvertIdResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setConvertIdResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateConvertIdResponseMessageForChoiceConstraintsFromSetConvertIdResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property ConvertIdResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: ConvertIdResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set ConvertIdResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsConvertIdResponseMessageType $convertIdResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setConvertIdResponseMessage(\Ews\StructType\EwsConvertIdResponseMessageType $convertIdResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($convertIdResponseMessageChoiceErrorMessage = self::validateConvertIdResponseMessageForChoiceConstraintsFromSetConvertIdResponseMessage($convertIdResponseMessage))) {
            throw new \InvalidArgumentException($convertIdResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($convertIdResponseMessage) || (is_array($convertIdResponseMessage) && empty($convertIdResponseMessage))) {
            unset($this->ConvertIdResponseMessage);
        } else {
            $this->ConvertIdResponseMessage = $convertIdResponseMessage;
        }
        return $this;
    }
    /**
     * Get GetSharingMetadataResponseMessage value
     * @return \Ews\StructType\EwsGetSharingMetadataResponseMessageType|null
     */
    public function getGetSharingMetadataResponseMessage()
    {
        return isset($this->GetSharingMetadataResponseMessage) ? $this->GetSharingMetadataResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setGetSharingMetadataResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetSharingMetadataResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGetSharingMetadataResponseMessageForChoiceConstraintsFromSetGetSharingMetadataResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property GetSharingMetadataResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: GetSharingMetadataResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set GetSharingMetadataResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsGetSharingMetadataResponseMessageType $getSharingMetadataResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetSharingMetadataResponseMessage(\Ews\StructType\EwsGetSharingMetadataResponseMessageType $getSharingMetadataResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($getSharingMetadataResponseMessageChoiceErrorMessage = self::validateGetSharingMetadataResponseMessageForChoiceConstraintsFromSetGetSharingMetadataResponseMessage($getSharingMetadataResponseMessage))) {
            throw new \InvalidArgumentException($getSharingMetadataResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($getSharingMetadataResponseMessage) || (is_array($getSharingMetadataResponseMessage) && empty($getSharingMetadataResponseMessage))) {
            unset($this->GetSharingMetadataResponseMessage);
        } else {
            $this->GetSharingMetadataResponseMessage = $getSharingMetadataResponseMessage;
        }
        return $this;
    }
    /**
     * Get RefreshSharingFolderResponseMessage value
     * @return \Ews\StructType\EwsRefreshSharingFolderResponseMessageType|null
     */
    public function getRefreshSharingFolderResponseMessage()
    {
        return isset($this->RefreshSharingFolderResponseMessage) ? $this->RefreshSharingFolderResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setRefreshSharingFolderResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRefreshSharingFolderResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRefreshSharingFolderResponseMessageForChoiceConstraintsFromSetRefreshSharingFolderResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property RefreshSharingFolderResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: RefreshSharingFolderResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set RefreshSharingFolderResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsRefreshSharingFolderResponseMessageType $refreshSharingFolderResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setRefreshSharingFolderResponseMessage(\Ews\StructType\EwsRefreshSharingFolderResponseMessageType $refreshSharingFolderResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($refreshSharingFolderResponseMessageChoiceErrorMessage = self::validateRefreshSharingFolderResponseMessageForChoiceConstraintsFromSetRefreshSharingFolderResponseMessage($refreshSharingFolderResponseMessage))) {
            throw new \InvalidArgumentException($refreshSharingFolderResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($refreshSharingFolderResponseMessage) || (is_array($refreshSharingFolderResponseMessage) && empty($refreshSharingFolderResponseMessage))) {
            unset($this->RefreshSharingFolderResponseMessage);
        } else {
            $this->RefreshSharingFolderResponseMessage = $refreshSharingFolderResponseMessage;
        }
        return $this;
    }
    /**
     * Get GetSharingFolderResponseMessage value
     * @return \Ews\StructType\EwsGetSharingFolderResponseMessageType|null
     */
    public function getGetSharingFolderResponseMessage()
    {
        return isset($this->GetSharingFolderResponseMessage) ? $this->GetSharingFolderResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setGetSharingFolderResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetSharingFolderResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGetSharingFolderResponseMessageForChoiceConstraintsFromSetGetSharingFolderResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property GetSharingFolderResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: GetSharingFolderResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set GetSharingFolderResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsGetSharingFolderResponseMessageType $getSharingFolderResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetSharingFolderResponseMessage(\Ews\StructType\EwsGetSharingFolderResponseMessageType $getSharingFolderResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($getSharingFolderResponseMessageChoiceErrorMessage = self::validateGetSharingFolderResponseMessageForChoiceConstraintsFromSetGetSharingFolderResponseMessage($getSharingFolderResponseMessage))) {
            throw new \InvalidArgumentException($getSharingFolderResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($getSharingFolderResponseMessage) || (is_array($getSharingFolderResponseMessage) && empty($getSharingFolderResponseMessage))) {
            unset($this->GetSharingFolderResponseMessage);
        } else {
            $this->GetSharingFolderResponseMessage = $getSharingFolderResponseMessage;
        }
        return $this;
    }
    /**
     * Get CreateUserConfigurationResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getCreateUserConfigurationResponseMessage()
    {
        return isset($this->CreateUserConfigurationResponseMessage) ? $this->CreateUserConfigurationResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCreateUserConfigurationResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCreateUserConfigurationResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCreateUserConfigurationResponseMessageForChoiceConstraintsFromSetCreateUserConfigurationResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property CreateUserConfigurationResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: CreateUserConfigurationResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set CreateUserConfigurationResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsResponseMessageType $createUserConfigurationResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setCreateUserConfigurationResponseMessage(\Ews\StructType\EwsResponseMessageType $createUserConfigurationResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($createUserConfigurationResponseMessageChoiceErrorMessage = self::validateCreateUserConfigurationResponseMessageForChoiceConstraintsFromSetCreateUserConfigurationResponseMessage($createUserConfigurationResponseMessage))) {
            throw new \InvalidArgumentException($createUserConfigurationResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($createUserConfigurationResponseMessage) || (is_array($createUserConfigurationResponseMessage) && empty($createUserConfigurationResponseMessage))) {
            unset($this->CreateUserConfigurationResponseMessage);
        } else {
            $this->CreateUserConfigurationResponseMessage = $createUserConfigurationResponseMessage;
        }
        return $this;
    }
    /**
     * Get DeleteUserConfigurationResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getDeleteUserConfigurationResponseMessage()
    {
        return isset($this->DeleteUserConfigurationResponseMessage) ? $this->DeleteUserConfigurationResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDeleteUserConfigurationResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeleteUserConfigurationResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDeleteUserConfigurationResponseMessageForChoiceConstraintsFromSetDeleteUserConfigurationResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property DeleteUserConfigurationResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: DeleteUserConfigurationResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set DeleteUserConfigurationResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsResponseMessageType $deleteUserConfigurationResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setDeleteUserConfigurationResponseMessage(\Ews\StructType\EwsResponseMessageType $deleteUserConfigurationResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($deleteUserConfigurationResponseMessageChoiceErrorMessage = self::validateDeleteUserConfigurationResponseMessageForChoiceConstraintsFromSetDeleteUserConfigurationResponseMessage($deleteUserConfigurationResponseMessage))) {
            throw new \InvalidArgumentException($deleteUserConfigurationResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($deleteUserConfigurationResponseMessage) || (is_array($deleteUserConfigurationResponseMessage) && empty($deleteUserConfigurationResponseMessage))) {
            unset($this->DeleteUserConfigurationResponseMessage);
        } else {
            $this->DeleteUserConfigurationResponseMessage = $deleteUserConfigurationResponseMessage;
        }
        return $this;
    }
    /**
     * Get GetUserConfigurationResponseMessage value
     * @return \Ews\StructType\EwsGetUserConfigurationResponseMessageType|null
     */
    public function getGetUserConfigurationResponseMessage()
    {
        return isset($this->GetUserConfigurationResponseMessage) ? $this->GetUserConfigurationResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setGetUserConfigurationResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetUserConfigurationResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGetUserConfigurationResponseMessageForChoiceConstraintsFromSetGetUserConfigurationResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property GetUserConfigurationResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: GetUserConfigurationResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set GetUserConfigurationResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsGetUserConfigurationResponseMessageType $getUserConfigurationResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetUserConfigurationResponseMessage(\Ews\StructType\EwsGetUserConfigurationResponseMessageType $getUserConfigurationResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($getUserConfigurationResponseMessageChoiceErrorMessage = self::validateGetUserConfigurationResponseMessageForChoiceConstraintsFromSetGetUserConfigurationResponseMessage($getUserConfigurationResponseMessage))) {
            throw new \InvalidArgumentException($getUserConfigurationResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($getUserConfigurationResponseMessage) || (is_array($getUserConfigurationResponseMessage) && empty($getUserConfigurationResponseMessage))) {
            unset($this->GetUserConfigurationResponseMessage);
        } else {
            $this->GetUserConfigurationResponseMessage = $getUserConfigurationResponseMessage;
        }
        return $this;
    }
    /**
     * Get UpdateUserConfigurationResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getUpdateUserConfigurationResponseMessage()
    {
        return isset($this->UpdateUserConfigurationResponseMessage) ? $this->UpdateUserConfigurationResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setUpdateUserConfigurationResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUpdateUserConfigurationResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateUpdateUserConfigurationResponseMessageForChoiceConstraintsFromSetUpdateUserConfigurationResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property UpdateUserConfigurationResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: UpdateUserConfigurationResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set UpdateUserConfigurationResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsResponseMessageType $updateUserConfigurationResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setUpdateUserConfigurationResponseMessage(\Ews\StructType\EwsResponseMessageType $updateUserConfigurationResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($updateUserConfigurationResponseMessageChoiceErrorMessage = self::validateUpdateUserConfigurationResponseMessageForChoiceConstraintsFromSetUpdateUserConfigurationResponseMessage($updateUserConfigurationResponseMessage))) {
            throw new \InvalidArgumentException($updateUserConfigurationResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($updateUserConfigurationResponseMessage) || (is_array($updateUserConfigurationResponseMessage) && empty($updateUserConfigurationResponseMessage))) {
            unset($this->UpdateUserConfigurationResponseMessage);
        } else {
            $this->UpdateUserConfigurationResponseMessage = $updateUserConfigurationResponseMessage;
        }
        return $this;
    }
    /**
     * Get GetRoomListsResponse value
     * @return \Ews\StructType\EwsGetRoomListsResponseMessageType|null
     */
    public function getGetRoomListsResponse()
    {
        return isset($this->GetRoomListsResponse) ? $this->GetRoomListsResponse : null;
    }
    /**
     * This method is responsible for validating the value passed to the setGetRoomListsResponse method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetRoomListsResponse method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGetRoomListsResponseForChoiceConstraintsFromSetGetRoomListsResponse($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property GetRoomListsResponse can\'t be set as the property %s is already set. Only one property must be set among these properties: GetRoomListsResponse, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set GetRoomListsResponse value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsGetRoomListsResponseMessageType $getRoomListsResponse
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetRoomListsResponse(\Ews\StructType\EwsGetRoomListsResponseMessageType $getRoomListsResponse = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($getRoomListsResponseChoiceErrorMessage = self::validateGetRoomListsResponseForChoiceConstraintsFromSetGetRoomListsResponse($getRoomListsResponse))) {
            throw new \InvalidArgumentException($getRoomListsResponseChoiceErrorMessage, __LINE__);
        }
        if (is_null($getRoomListsResponse) || (is_array($getRoomListsResponse) && empty($getRoomListsResponse))) {
            unset($this->GetRoomListsResponse);
        } else {
            $this->GetRoomListsResponse = $getRoomListsResponse;
        }
        return $this;
    }
    /**
     * Get GetRoomsResponse value
     * @return \Ews\StructType\EwsGetRoomsResponseMessageType|null
     */
    public function getGetRoomsResponse()
    {
        return isset($this->GetRoomsResponse) ? $this->GetRoomsResponse : null;
    }
    /**
     * This method is responsible for validating the value passed to the setGetRoomsResponse method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetRoomsResponse method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGetRoomsResponseForChoiceConstraintsFromSetGetRoomsResponse($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property GetRoomsResponse can\'t be set as the property %s is already set. Only one property must be set among these properties: GetRoomsResponse, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set GetRoomsResponse value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsGetRoomsResponseMessageType $getRoomsResponse
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetRoomsResponse(\Ews\StructType\EwsGetRoomsResponseMessageType $getRoomsResponse = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($getRoomsResponseChoiceErrorMessage = self::validateGetRoomsResponseForChoiceConstraintsFromSetGetRoomsResponse($getRoomsResponse))) {
            throw new \InvalidArgumentException($getRoomsResponseChoiceErrorMessage, __LINE__);
        }
        if (is_null($getRoomsResponse) || (is_array($getRoomsResponse) && empty($getRoomsResponse))) {
            unset($this->GetRoomsResponse);
        } else {
            $this->GetRoomsResponse = $getRoomsResponse;
        }
        return $this;
    }
    /**
     * Get GetRemindersResponse value
     * @return \Ews\StructType\EwsGetRemindersResponseMessageType|null
     */
    public function getGetRemindersResponse()
    {
        return isset($this->GetRemindersResponse) ? $this->GetRemindersResponse : null;
    }
    /**
     * This method is responsible for validating the value passed to the setGetRemindersResponse method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetRemindersResponse method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGetRemindersResponseForChoiceConstraintsFromSetGetRemindersResponse($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property GetRemindersResponse can\'t be set as the property %s is already set. Only one property must be set among these properties: GetRemindersResponse, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set GetRemindersResponse value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsGetRemindersResponseMessageType $getRemindersResponse
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetRemindersResponse(\Ews\StructType\EwsGetRemindersResponseMessageType $getRemindersResponse = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($getRemindersResponseChoiceErrorMessage = self::validateGetRemindersResponseForChoiceConstraintsFromSetGetRemindersResponse($getRemindersResponse))) {
            throw new \InvalidArgumentException($getRemindersResponseChoiceErrorMessage, __LINE__);
        }
        if (is_null($getRemindersResponse) || (is_array($getRemindersResponse) && empty($getRemindersResponse))) {
            unset($this->GetRemindersResponse);
        } else {
            $this->GetRemindersResponse = $getRemindersResponse;
        }
        return $this;
    }
    /**
     * Get PerformReminderActionResponse value
     * @return \Ews\StructType\EwsPerformReminderActionResponseMessageType|null
     */
    public function getPerformReminderActionResponse()
    {
        return isset($this->PerformReminderActionResponse) ? $this->PerformReminderActionResponse : null;
    }
    /**
     * This method is responsible for validating the value passed to the setPerformReminderActionResponse method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPerformReminderActionResponse method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePerformReminderActionResponseForChoiceConstraintsFromSetPerformReminderActionResponse($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property PerformReminderActionResponse can\'t be set as the property %s is already set. Only one property must be set among these properties: PerformReminderActionResponse, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set PerformReminderActionResponse value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPerformReminderActionResponseMessageType $performReminderActionResponse
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setPerformReminderActionResponse(\Ews\StructType\EwsPerformReminderActionResponseMessageType $performReminderActionResponse = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($performReminderActionResponseChoiceErrorMessage = self::validatePerformReminderActionResponseForChoiceConstraintsFromSetPerformReminderActionResponse($performReminderActionResponse))) {
            throw new \InvalidArgumentException($performReminderActionResponseChoiceErrorMessage, __LINE__);
        }
        if (is_null($performReminderActionResponse) || (is_array($performReminderActionResponse) && empty($performReminderActionResponse))) {
            unset($this->PerformReminderActionResponse);
        } else {
            $this->PerformReminderActionResponse = $performReminderActionResponse;
        }
        return $this;
    }
    /**
     * Get ApplyConversationActionResponseMessage value
     * @return \Ews\StructType\EwsApplyConversationActionResponseMessageType|null
     */
    public function getApplyConversationActionResponseMessage()
    {
        return isset($this->ApplyConversationActionResponseMessage) ? $this->ApplyConversationActionResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setApplyConversationActionResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setApplyConversationActionResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateApplyConversationActionResponseMessageForChoiceConstraintsFromSetApplyConversationActionResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property ApplyConversationActionResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: ApplyConversationActionResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set ApplyConversationActionResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsApplyConversationActionResponseMessageType $applyConversationActionResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setApplyConversationActionResponseMessage(\Ews\StructType\EwsApplyConversationActionResponseMessageType $applyConversationActionResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($applyConversationActionResponseMessageChoiceErrorMessage = self::validateApplyConversationActionResponseMessageForChoiceConstraintsFromSetApplyConversationActionResponseMessage($applyConversationActionResponseMessage))) {
            throw new \InvalidArgumentException($applyConversationActionResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($applyConversationActionResponseMessage) || (is_array($applyConversationActionResponseMessage) && empty($applyConversationActionResponseMessage))) {
            unset($this->ApplyConversationActionResponseMessage);
        } else {
            $this->ApplyConversationActionResponseMessage = $applyConversationActionResponseMessage;
        }
        return $this;
    }
    /**
     * Get FindMailboxStatisticsByKeywordsResponseMessage value
     * @return \Ews\StructType\EwsFindMailboxStatisticsByKeywordsResponseMessageType|null
     */
    public function getFindMailboxStatisticsByKeywordsResponseMessage()
    {
        return isset($this->FindMailboxStatisticsByKeywordsResponseMessage) ? $this->FindMailboxStatisticsByKeywordsResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setFindMailboxStatisticsByKeywordsResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFindMailboxStatisticsByKeywordsResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateFindMailboxStatisticsByKeywordsResponseMessageForChoiceConstraintsFromSetFindMailboxStatisticsByKeywordsResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property FindMailboxStatisticsByKeywordsResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: FindMailboxStatisticsByKeywordsResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set FindMailboxStatisticsByKeywordsResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFindMailboxStatisticsByKeywordsResponseMessageType $findMailboxStatisticsByKeywordsResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setFindMailboxStatisticsByKeywordsResponseMessage(\Ews\StructType\EwsFindMailboxStatisticsByKeywordsResponseMessageType $findMailboxStatisticsByKeywordsResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($findMailboxStatisticsByKeywordsResponseMessageChoiceErrorMessage = self::validateFindMailboxStatisticsByKeywordsResponseMessageForChoiceConstraintsFromSetFindMailboxStatisticsByKeywordsResponseMessage($findMailboxStatisticsByKeywordsResponseMessage))) {
            throw new \InvalidArgumentException($findMailboxStatisticsByKeywordsResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($findMailboxStatisticsByKeywordsResponseMessage) || (is_array($findMailboxStatisticsByKeywordsResponseMessage) && empty($findMailboxStatisticsByKeywordsResponseMessage))) {
            unset($this->FindMailboxStatisticsByKeywordsResponseMessage);
        } else {
            $this->FindMailboxStatisticsByKeywordsResponseMessage = $findMailboxStatisticsByKeywordsResponseMessage;
        }
        return $this;
    }
    /**
     * Get GetSearchableMailboxesResponseMessage value
     * @return \Ews\StructType\EwsGetSearchableMailboxesResponseMessageType|null
     */
    public function getGetSearchableMailboxesResponseMessage()
    {
        return isset($this->GetSearchableMailboxesResponseMessage) ? $this->GetSearchableMailboxesResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setGetSearchableMailboxesResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetSearchableMailboxesResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGetSearchableMailboxesResponseMessageForChoiceConstraintsFromSetGetSearchableMailboxesResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property GetSearchableMailboxesResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: GetSearchableMailboxesResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set GetSearchableMailboxesResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsGetSearchableMailboxesResponseMessageType $getSearchableMailboxesResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetSearchableMailboxesResponseMessage(\Ews\StructType\EwsGetSearchableMailboxesResponseMessageType $getSearchableMailboxesResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($getSearchableMailboxesResponseMessageChoiceErrorMessage = self::validateGetSearchableMailboxesResponseMessageForChoiceConstraintsFromSetGetSearchableMailboxesResponseMessage($getSearchableMailboxesResponseMessage))) {
            throw new \InvalidArgumentException($getSearchableMailboxesResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($getSearchableMailboxesResponseMessage) || (is_array($getSearchableMailboxesResponseMessage) && empty($getSearchableMailboxesResponseMessage))) {
            unset($this->GetSearchableMailboxesResponseMessage);
        } else {
            $this->GetSearchableMailboxesResponseMessage = $getSearchableMailboxesResponseMessage;
        }
        return $this;
    }
    /**
     * Get SearchMailboxesResponseMessage value
     * @return \Ews\StructType\EwsSearchMailboxesResponseMessageType|null
     */
    public function getSearchMailboxesResponseMessage()
    {
        return isset($this->SearchMailboxesResponseMessage) ? $this->SearchMailboxesResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setSearchMailboxesResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchMailboxesResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSearchMailboxesResponseMessageForChoiceConstraintsFromSetSearchMailboxesResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property SearchMailboxesResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: SearchMailboxesResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set SearchMailboxesResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSearchMailboxesResponseMessageType $searchMailboxesResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setSearchMailboxesResponseMessage(\Ews\StructType\EwsSearchMailboxesResponseMessageType $searchMailboxesResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($searchMailboxesResponseMessageChoiceErrorMessage = self::validateSearchMailboxesResponseMessageForChoiceConstraintsFromSetSearchMailboxesResponseMessage($searchMailboxesResponseMessage))) {
            throw new \InvalidArgumentException($searchMailboxesResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($searchMailboxesResponseMessage) || (is_array($searchMailboxesResponseMessage) && empty($searchMailboxesResponseMessage))) {
            unset($this->SearchMailboxesResponseMessage);
        } else {
            $this->SearchMailboxesResponseMessage = $searchMailboxesResponseMessage;
        }
        return $this;
    }
    /**
     * Get GetDiscoverySearchConfigurationResponseMessage value
     * @return \Ews\StructType\EwsGetDiscoverySearchConfigurationResponseMessageType|null
     */
    public function getGetDiscoverySearchConfigurationResponseMessage()
    {
        return isset($this->GetDiscoverySearchConfigurationResponseMessage) ? $this->GetDiscoverySearchConfigurationResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setGetDiscoverySearchConfigurationResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetDiscoverySearchConfigurationResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGetDiscoverySearchConfigurationResponseMessageForChoiceConstraintsFromSetGetDiscoverySearchConfigurationResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property GetDiscoverySearchConfigurationResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: GetDiscoverySearchConfigurationResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set GetDiscoverySearchConfigurationResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsGetDiscoverySearchConfigurationResponseMessageType $getDiscoverySearchConfigurationResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetDiscoverySearchConfigurationResponseMessage(\Ews\StructType\EwsGetDiscoverySearchConfigurationResponseMessageType $getDiscoverySearchConfigurationResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($getDiscoverySearchConfigurationResponseMessageChoiceErrorMessage = self::validateGetDiscoverySearchConfigurationResponseMessageForChoiceConstraintsFromSetGetDiscoverySearchConfigurationResponseMessage($getDiscoverySearchConfigurationResponseMessage))) {
            throw new \InvalidArgumentException($getDiscoverySearchConfigurationResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($getDiscoverySearchConfigurationResponseMessage) || (is_array($getDiscoverySearchConfigurationResponseMessage) && empty($getDiscoverySearchConfigurationResponseMessage))) {
            unset($this->GetDiscoverySearchConfigurationResponseMessage);
        } else {
            $this->GetDiscoverySearchConfigurationResponseMessage = $getDiscoverySearchConfigurationResponseMessage;
        }
        return $this;
    }
    /**
     * Get GetHoldOnMailboxesResponseMessage value
     * @return \Ews\StructType\EwsGetHoldOnMailboxesResponseMessageType|null
     */
    public function getGetHoldOnMailboxesResponseMessage()
    {
        return isset($this->GetHoldOnMailboxesResponseMessage) ? $this->GetHoldOnMailboxesResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setGetHoldOnMailboxesResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetHoldOnMailboxesResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGetHoldOnMailboxesResponseMessageForChoiceConstraintsFromSetGetHoldOnMailboxesResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property GetHoldOnMailboxesResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: GetHoldOnMailboxesResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set GetHoldOnMailboxesResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsGetHoldOnMailboxesResponseMessageType $getHoldOnMailboxesResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetHoldOnMailboxesResponseMessage(\Ews\StructType\EwsGetHoldOnMailboxesResponseMessageType $getHoldOnMailboxesResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($getHoldOnMailboxesResponseMessageChoiceErrorMessage = self::validateGetHoldOnMailboxesResponseMessageForChoiceConstraintsFromSetGetHoldOnMailboxesResponseMessage($getHoldOnMailboxesResponseMessage))) {
            throw new \InvalidArgumentException($getHoldOnMailboxesResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($getHoldOnMailboxesResponseMessage) || (is_array($getHoldOnMailboxesResponseMessage) && empty($getHoldOnMailboxesResponseMessage))) {
            unset($this->GetHoldOnMailboxesResponseMessage);
        } else {
            $this->GetHoldOnMailboxesResponseMessage = $getHoldOnMailboxesResponseMessage;
        }
        return $this;
    }
    /**
     * Get SetHoldOnMailboxesResponseMessage value
     * @return \Ews\StructType\EwsSetHoldOnMailboxesResponseMessageType|null
     */
    public function getSetHoldOnMailboxesResponseMessage()
    {
        return isset($this->SetHoldOnMailboxesResponseMessage) ? $this->SetHoldOnMailboxesResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setSetHoldOnMailboxesResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSetHoldOnMailboxesResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSetHoldOnMailboxesResponseMessageForChoiceConstraintsFromSetSetHoldOnMailboxesResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property SetHoldOnMailboxesResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: SetHoldOnMailboxesResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set SetHoldOnMailboxesResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSetHoldOnMailboxesResponseMessageType $setHoldOnMailboxesResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setSetHoldOnMailboxesResponseMessage(\Ews\StructType\EwsSetHoldOnMailboxesResponseMessageType $setHoldOnMailboxesResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($setHoldOnMailboxesResponseMessageChoiceErrorMessage = self::validateSetHoldOnMailboxesResponseMessageForChoiceConstraintsFromSetSetHoldOnMailboxesResponseMessage($setHoldOnMailboxesResponseMessage))) {
            throw new \InvalidArgumentException($setHoldOnMailboxesResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($setHoldOnMailboxesResponseMessage) || (is_array($setHoldOnMailboxesResponseMessage) && empty($setHoldOnMailboxesResponseMessage))) {
            unset($this->SetHoldOnMailboxesResponseMessage);
        } else {
            $this->SetHoldOnMailboxesResponseMessage = $setHoldOnMailboxesResponseMessage;
        }
        return $this;
    }
    /**
     * Get GetNonIndexableItemStatisticsResponseMessage value
     * @return \Ews\StructType\EwsGetNonIndexableItemStatisticsResponseMessageType|null
     */
    public function getGetNonIndexableItemStatisticsResponseMessage()
    {
        return isset($this->GetNonIndexableItemStatisticsResponseMessage) ? $this->GetNonIndexableItemStatisticsResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setGetNonIndexableItemStatisticsResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetNonIndexableItemStatisticsResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGetNonIndexableItemStatisticsResponseMessageForChoiceConstraintsFromSetGetNonIndexableItemStatisticsResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property GetNonIndexableItemStatisticsResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: GetNonIndexableItemStatisticsResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set GetNonIndexableItemStatisticsResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsGetNonIndexableItemStatisticsResponseMessageType $getNonIndexableItemStatisticsResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetNonIndexableItemStatisticsResponseMessage(\Ews\StructType\EwsGetNonIndexableItemStatisticsResponseMessageType $getNonIndexableItemStatisticsResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($getNonIndexableItemStatisticsResponseMessageChoiceErrorMessage = self::validateGetNonIndexableItemStatisticsResponseMessageForChoiceConstraintsFromSetGetNonIndexableItemStatisticsResponseMessage($getNonIndexableItemStatisticsResponseMessage))) {
            throw new \InvalidArgumentException($getNonIndexableItemStatisticsResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($getNonIndexableItemStatisticsResponseMessage) || (is_array($getNonIndexableItemStatisticsResponseMessage) && empty($getNonIndexableItemStatisticsResponseMessage))) {
            unset($this->GetNonIndexableItemStatisticsResponseMessage);
        } else {
            $this->GetNonIndexableItemStatisticsResponseMessage = $getNonIndexableItemStatisticsResponseMessage;
        }
        return $this;
    }
    /**
     * Get GetNonIndexableItemDetailsResponseMessage value
     * @return \Ews\StructType\EwsGetNonIndexableItemDetailsResponseMessageType|null
     */
    public function getGetNonIndexableItemDetailsResponseMessage()
    {
        return isset($this->GetNonIndexableItemDetailsResponseMessage) ? $this->GetNonIndexableItemDetailsResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setGetNonIndexableItemDetailsResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetNonIndexableItemDetailsResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGetNonIndexableItemDetailsResponseMessageForChoiceConstraintsFromSetGetNonIndexableItemDetailsResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property GetNonIndexableItemDetailsResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: GetNonIndexableItemDetailsResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set GetNonIndexableItemDetailsResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsGetNonIndexableItemDetailsResponseMessageType $getNonIndexableItemDetailsResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetNonIndexableItemDetailsResponseMessage(\Ews\StructType\EwsGetNonIndexableItemDetailsResponseMessageType $getNonIndexableItemDetailsResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($getNonIndexableItemDetailsResponseMessageChoiceErrorMessage = self::validateGetNonIndexableItemDetailsResponseMessageForChoiceConstraintsFromSetGetNonIndexableItemDetailsResponseMessage($getNonIndexableItemDetailsResponseMessage))) {
            throw new \InvalidArgumentException($getNonIndexableItemDetailsResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($getNonIndexableItemDetailsResponseMessage) || (is_array($getNonIndexableItemDetailsResponseMessage) && empty($getNonIndexableItemDetailsResponseMessage))) {
            unset($this->GetNonIndexableItemDetailsResponseMessage);
        } else {
            $this->GetNonIndexableItemDetailsResponseMessage = $getNonIndexableItemDetailsResponseMessage;
        }
        return $this;
    }
    /**
     * Get FindPeopleResponseMessage value
     * @return \Ews\StructType\EwsFindPeopleResponseMessageType|null
     */
    public function getFindPeopleResponseMessage()
    {
        return isset($this->FindPeopleResponseMessage) ? $this->FindPeopleResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setFindPeopleResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFindPeopleResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateFindPeopleResponseMessageForChoiceConstraintsFromSetFindPeopleResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property FindPeopleResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: FindPeopleResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set FindPeopleResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFindPeopleResponseMessageType $findPeopleResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setFindPeopleResponseMessage(\Ews\StructType\EwsFindPeopleResponseMessageType $findPeopleResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($findPeopleResponseMessageChoiceErrorMessage = self::validateFindPeopleResponseMessageForChoiceConstraintsFromSetFindPeopleResponseMessage($findPeopleResponseMessage))) {
            throw new \InvalidArgumentException($findPeopleResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($findPeopleResponseMessage) || (is_array($findPeopleResponseMessage) && empty($findPeopleResponseMessage))) {
            unset($this->FindPeopleResponseMessage);
        } else {
            $this->FindPeopleResponseMessage = $findPeopleResponseMessage;
        }
        return $this;
    }
    /**
     * Get GetPasswordExpirationDateResponse value
     * @return \Ews\StructType\EwsGetPasswordExpirationDateResponseMessageType|null
     */
    public function getGetPasswordExpirationDateResponse()
    {
        return isset($this->GetPasswordExpirationDateResponse) ? $this->GetPasswordExpirationDateResponse : null;
    }
    /**
     * This method is responsible for validating the value passed to the setGetPasswordExpirationDateResponse method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetPasswordExpirationDateResponse method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGetPasswordExpirationDateResponseForChoiceConstraintsFromSetGetPasswordExpirationDateResponse($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property GetPasswordExpirationDateResponse can\'t be set as the property %s is already set. Only one property must be set among these properties: GetPasswordExpirationDateResponse, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set GetPasswordExpirationDateResponse value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsGetPasswordExpirationDateResponseMessageType $getPasswordExpirationDateResponse
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetPasswordExpirationDateResponse(\Ews\StructType\EwsGetPasswordExpirationDateResponseMessageType $getPasswordExpirationDateResponse = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($getPasswordExpirationDateResponseChoiceErrorMessage = self::validateGetPasswordExpirationDateResponseForChoiceConstraintsFromSetGetPasswordExpirationDateResponse($getPasswordExpirationDateResponse))) {
            throw new \InvalidArgumentException($getPasswordExpirationDateResponseChoiceErrorMessage, __LINE__);
        }
        if (is_null($getPasswordExpirationDateResponse) || (is_array($getPasswordExpirationDateResponse) && empty($getPasswordExpirationDateResponse))) {
            unset($this->GetPasswordExpirationDateResponse);
        } else {
            $this->GetPasswordExpirationDateResponse = $getPasswordExpirationDateResponse;
        }
        return $this;
    }
    /**
     * Get GetPersonaResponseMessage value
     * @return \Ews\StructType\EwsGetPersonaResponseMessageType|null
     */
    public function getGetPersonaResponseMessage()
    {
        return isset($this->GetPersonaResponseMessage) ? $this->GetPersonaResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setGetPersonaResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetPersonaResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGetPersonaResponseMessageForChoiceConstraintsFromSetGetPersonaResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property GetPersonaResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: GetPersonaResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set GetPersonaResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsGetPersonaResponseMessageType $getPersonaResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetPersonaResponseMessage(\Ews\StructType\EwsGetPersonaResponseMessageType $getPersonaResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($getPersonaResponseMessageChoiceErrorMessage = self::validateGetPersonaResponseMessageForChoiceConstraintsFromSetGetPersonaResponseMessage($getPersonaResponseMessage))) {
            throw new \InvalidArgumentException($getPersonaResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($getPersonaResponseMessage) || (is_array($getPersonaResponseMessage) && empty($getPersonaResponseMessage))) {
            unset($this->GetPersonaResponseMessage);
        } else {
            $this->GetPersonaResponseMessage = $getPersonaResponseMessage;
        }
        return $this;
    }
    /**
     * Get GetConversationItemsResponseMessage value
     * @return \Ews\StructType\EwsGetConversationItemsResponseMessageType|null
     */
    public function getGetConversationItemsResponseMessage()
    {
        return isset($this->GetConversationItemsResponseMessage) ? $this->GetConversationItemsResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setGetConversationItemsResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetConversationItemsResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGetConversationItemsResponseMessageForChoiceConstraintsFromSetGetConversationItemsResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property GetConversationItemsResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: GetConversationItemsResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set GetConversationItemsResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsGetConversationItemsResponseMessageType $getConversationItemsResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetConversationItemsResponseMessage(\Ews\StructType\EwsGetConversationItemsResponseMessageType $getConversationItemsResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($getConversationItemsResponseMessageChoiceErrorMessage = self::validateGetConversationItemsResponseMessageForChoiceConstraintsFromSetGetConversationItemsResponseMessage($getConversationItemsResponseMessage))) {
            throw new \InvalidArgumentException($getConversationItemsResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($getConversationItemsResponseMessage) || (is_array($getConversationItemsResponseMessage) && empty($getConversationItemsResponseMessage))) {
            unset($this->GetConversationItemsResponseMessage);
        } else {
            $this->GetConversationItemsResponseMessage = $getConversationItemsResponseMessage;
        }
        return $this;
    }
    /**
     * Get GetUserRetentionPolicyTagsResponseMessage value
     * @return \Ews\StructType\EwsGetUserRetentionPolicyTagsResponseMessageType|null
     */
    public function getGetUserRetentionPolicyTagsResponseMessage()
    {
        return isset($this->GetUserRetentionPolicyTagsResponseMessage) ? $this->GetUserRetentionPolicyTagsResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setGetUserRetentionPolicyTagsResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetUserRetentionPolicyTagsResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGetUserRetentionPolicyTagsResponseMessageForChoiceConstraintsFromSetGetUserRetentionPolicyTagsResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property GetUserRetentionPolicyTagsResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: GetUserRetentionPolicyTagsResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set GetUserRetentionPolicyTagsResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsGetUserRetentionPolicyTagsResponseMessageType $getUserRetentionPolicyTagsResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetUserRetentionPolicyTagsResponseMessage(\Ews\StructType\EwsGetUserRetentionPolicyTagsResponseMessageType $getUserRetentionPolicyTagsResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($getUserRetentionPolicyTagsResponseMessageChoiceErrorMessage = self::validateGetUserRetentionPolicyTagsResponseMessageForChoiceConstraintsFromSetGetUserRetentionPolicyTagsResponseMessage($getUserRetentionPolicyTagsResponseMessage))) {
            throw new \InvalidArgumentException($getUserRetentionPolicyTagsResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($getUserRetentionPolicyTagsResponseMessage) || (is_array($getUserRetentionPolicyTagsResponseMessage) && empty($getUserRetentionPolicyTagsResponseMessage))) {
            unset($this->GetUserRetentionPolicyTagsResponseMessage);
        } else {
            $this->GetUserRetentionPolicyTagsResponseMessage = $getUserRetentionPolicyTagsResponseMessage;
        }
        return $this;
    }
    /**
     * Get GetUserPhotoResponseMessage value
     * @return \Ews\StructType\EwsGetUserPhotoResponseMessageType|null
     */
    public function getGetUserPhotoResponseMessage()
    {
        return isset($this->GetUserPhotoResponseMessage) ? $this->GetUserPhotoResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setGetUserPhotoResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetUserPhotoResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGetUserPhotoResponseMessageForChoiceConstraintsFromSetGetUserPhotoResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property GetUserPhotoResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: GetUserPhotoResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set GetUserPhotoResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsGetUserPhotoResponseMessageType $getUserPhotoResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetUserPhotoResponseMessage(\Ews\StructType\EwsGetUserPhotoResponseMessageType $getUserPhotoResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($getUserPhotoResponseMessageChoiceErrorMessage = self::validateGetUserPhotoResponseMessageForChoiceConstraintsFromSetGetUserPhotoResponseMessage($getUserPhotoResponseMessage))) {
            throw new \InvalidArgumentException($getUserPhotoResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($getUserPhotoResponseMessage) || (is_array($getUserPhotoResponseMessage) && empty($getUserPhotoResponseMessage))) {
            unset($this->GetUserPhotoResponseMessage);
        } else {
            $this->GetUserPhotoResponseMessage = $getUserPhotoResponseMessage;
        }
        return $this;
    }
    /**
     * Get MarkAsJunkResponseMessage value
     * @return \Ews\StructType\EwsMarkAsJunkResponseMessageType|null
     */
    public function getMarkAsJunkResponseMessage()
    {
        return isset($this->MarkAsJunkResponseMessage) ? $this->MarkAsJunkResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setMarkAsJunkResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMarkAsJunkResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateMarkAsJunkResponseMessageForChoiceConstraintsFromSetMarkAsJunkResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property MarkAsJunkResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: MarkAsJunkResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set MarkAsJunkResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMarkAsJunkResponseMessageType $markAsJunkResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setMarkAsJunkResponseMessage(\Ews\StructType\EwsMarkAsJunkResponseMessageType $markAsJunkResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($markAsJunkResponseMessageChoiceErrorMessage = self::validateMarkAsJunkResponseMessageForChoiceConstraintsFromSetMarkAsJunkResponseMessage($markAsJunkResponseMessage))) {
            throw new \InvalidArgumentException($markAsJunkResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($markAsJunkResponseMessage) || (is_array($markAsJunkResponseMessage) && empty($markAsJunkResponseMessage))) {
            unset($this->MarkAsJunkResponseMessage);
        } else {
            $this->MarkAsJunkResponseMessage = $markAsJunkResponseMessage;
        }
        return $this;
    }
    /**
     * Get UpdateMailboxAssociationResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getUpdateMailboxAssociationResponseMessage()
    {
        return isset($this->UpdateMailboxAssociationResponseMessage) ? $this->UpdateMailboxAssociationResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setUpdateMailboxAssociationResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUpdateMailboxAssociationResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateUpdateMailboxAssociationResponseMessageForChoiceConstraintsFromSetUpdateMailboxAssociationResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property UpdateMailboxAssociationResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: UpdateMailboxAssociationResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set UpdateMailboxAssociationResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsResponseMessageType $updateMailboxAssociationResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setUpdateMailboxAssociationResponseMessage(\Ews\StructType\EwsResponseMessageType $updateMailboxAssociationResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($updateMailboxAssociationResponseMessageChoiceErrorMessage = self::validateUpdateMailboxAssociationResponseMessageForChoiceConstraintsFromSetUpdateMailboxAssociationResponseMessage($updateMailboxAssociationResponseMessage))) {
            throw new \InvalidArgumentException($updateMailboxAssociationResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($updateMailboxAssociationResponseMessage) || (is_array($updateMailboxAssociationResponseMessage) && empty($updateMailboxAssociationResponseMessage))) {
            unset($this->UpdateMailboxAssociationResponseMessage);
        } else {
            $this->UpdateMailboxAssociationResponseMessage = $updateMailboxAssociationResponseMessage;
        }
        return $this;
    }
    /**
     * Get UpdateGroupMailboxResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getUpdateGroupMailboxResponseMessage()
    {
        return isset($this->UpdateGroupMailboxResponseMessage) ? $this->UpdateGroupMailboxResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setUpdateGroupMailboxResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUpdateGroupMailboxResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateUpdateGroupMailboxResponseMessageForChoiceConstraintsFromSetUpdateGroupMailboxResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'PostModernGroupItemResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property UpdateGroupMailboxResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: UpdateGroupMailboxResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set UpdateGroupMailboxResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsResponseMessageType $updateGroupMailboxResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setUpdateGroupMailboxResponseMessage(\Ews\StructType\EwsResponseMessageType $updateGroupMailboxResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($updateGroupMailboxResponseMessageChoiceErrorMessage = self::validateUpdateGroupMailboxResponseMessageForChoiceConstraintsFromSetUpdateGroupMailboxResponseMessage($updateGroupMailboxResponseMessage))) {
            throw new \InvalidArgumentException($updateGroupMailboxResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($updateGroupMailboxResponseMessage) || (is_array($updateGroupMailboxResponseMessage) && empty($updateGroupMailboxResponseMessage))) {
            unset($this->UpdateGroupMailboxResponseMessage);
        } else {
            $this->UpdateGroupMailboxResponseMessage = $updateGroupMailboxResponseMessage;
        }
        return $this;
    }
    /**
     * Get PostModernGroupItemResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getPostModernGroupItemResponseMessage()
    {
        return isset($this->PostModernGroupItemResponseMessage) ? $this->PostModernGroupItemResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setPostModernGroupItemResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPostModernGroupItemResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePostModernGroupItemResponseMessageForChoiceConstraintsFromSetPostModernGroupItemResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'GetUnifiedGroupUnseenDataResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property PostModernGroupItemResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: PostModernGroupItemResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set PostModernGroupItemResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsResponseMessageType $postModernGroupItemResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setPostModernGroupItemResponseMessage(\Ews\StructType\EwsResponseMessageType $postModernGroupItemResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($postModernGroupItemResponseMessageChoiceErrorMessage = self::validatePostModernGroupItemResponseMessageForChoiceConstraintsFromSetPostModernGroupItemResponseMessage($postModernGroupItemResponseMessage))) {
            throw new \InvalidArgumentException($postModernGroupItemResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($postModernGroupItemResponseMessage) || (is_array($postModernGroupItemResponseMessage) && empty($postModernGroupItemResponseMessage))) {
            unset($this->PostModernGroupItemResponseMessage);
        } else {
            $this->PostModernGroupItemResponseMessage = $postModernGroupItemResponseMessage;
        }
        return $this;
    }
    /**
     * Get GetUnifiedGroupUnseenDataResponseMessage value
     * @return \Ews\StructType\EwsGetUnifiedGroupUnseenDataResponseMessageType|null
     */
    public function getGetUnifiedGroupUnseenDataResponseMessage()
    {
        return isset($this->GetUnifiedGroupUnseenDataResponseMessage) ? $this->GetUnifiedGroupUnseenDataResponseMessage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setGetUnifiedGroupUnseenDataResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetUnifiedGroupUnseenDataResponseMessage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGetUnifiedGroupUnseenDataResponseMessageForChoiceConstraintsFromSetGetUnifiedGroupUnseenDataResponseMessage($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateItemResponseMessage',
            'DeleteItemResponseMessage',
            'GetItemResponseMessage',
            'UpdateItemResponseMessage',
            'UpdateItemInRecoverableItemsResponseMessage',
            'SendItemResponseMessage',
            'DeleteFolderResponseMessage',
            'EmptyFolderResponseMessage',
            'CreateFolderResponseMessage',
            'GetFolderResponseMessage',
            'FindFolderResponseMessage',
            'UpdateFolderResponseMessage',
            'MoveFolderResponseMessage',
            'CopyFolderResponseMessage',
            'CreateFolderPathResponseMessage',
            'CreateAttachmentResponseMessage',
            'DeleteAttachmentResponseMessage',
            'GetAttachmentResponseMessage',
            'UploadItemsResponseMessage',
            'ExportItemsResponseMessage',
            'MarkAllItemsAsReadResponseMessage',
            'GetClientAccessTokenResponseMessage',
            'GetAppManifestsResponseMessage',
            'GetClientExtensionResponseMessage',
            'SetClientExtensionResponseMessage',
            'GetEncryptionConfigurationResponseMessage',
            'SetEncryptionConfigurationResponseMessage',
            'GetOMEConfigurationResponseMessage',
            'SetOMEConfigurationResponseMessage',
            'FindItemResponseMessage',
            'MoveItemResponseMessage',
            'ArchiveItemResponseMessage',
            'CopyItemResponseMessage',
            'ResolveNamesResponseMessage',
            'ExpandDLResponseMessage',
            'GetServerTimeZonesResponseMessage',
            'GetEventsResponseMessage',
            'GetStreamingEventsResponseMessage',
            'SubscribeResponseMessage',
            'UnsubscribeResponseMessage',
            'GetChannelEventsResponseMessage',
            'ChannelSubscribeResponseMessage',
            'ChannelUnsubscribeResponseMessage',
            'SendNotificationResponseMessage',
            'SyncFolderHierarchyResponseMessage',
            'SyncFolderItemsResponseMessage',
            'CreateManagedFolderResponseMessage',
            'ConvertIdResponseMessage',
            'GetSharingMetadataResponseMessage',
            'RefreshSharingFolderResponseMessage',
            'GetSharingFolderResponseMessage',
            'CreateUserConfigurationResponseMessage',
            'DeleteUserConfigurationResponseMessage',
            'GetUserConfigurationResponseMessage',
            'UpdateUserConfigurationResponseMessage',
            'GetRoomListsResponse',
            'GetRoomsResponse',
            'GetRemindersResponse',
            'PerformReminderActionResponse',
            'ApplyConversationActionResponseMessage',
            'FindMailboxStatisticsByKeywordsResponseMessage',
            'GetSearchableMailboxesResponseMessage',
            'SearchMailboxesResponseMessage',
            'GetDiscoverySearchConfigurationResponseMessage',
            'GetHoldOnMailboxesResponseMessage',
            'SetHoldOnMailboxesResponseMessage',
            'GetNonIndexableItemStatisticsResponseMessage',
            'GetNonIndexableItemDetailsResponseMessage',
            'FindPeopleResponseMessage',
            'GetPasswordExpirationDateResponse',
            'GetPersonaResponseMessage',
            'GetConversationItemsResponseMessage',
            'GetUserRetentionPolicyTagsResponseMessage',
            'GetUserPhotoResponseMessage',
            'MarkAsJunkResponseMessage',
            'UpdateMailboxAssociationResponseMessage',
            'UpdateGroupMailboxResponseMessage',
            'PostModernGroupItemResponseMessage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property GetUnifiedGroupUnseenDataResponseMessage can\'t be set as the property %s is already set. Only one property must be set among these properties: GetUnifiedGroupUnseenDataResponseMessage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set GetUnifiedGroupUnseenDataResponseMessage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsGetUnifiedGroupUnseenDataResponseMessageType $getUnifiedGroupUnseenDataResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetUnifiedGroupUnseenDataResponseMessage(\Ews\StructType\EwsGetUnifiedGroupUnseenDataResponseMessageType $getUnifiedGroupUnseenDataResponseMessage = null)
    {
        // validation for constraint: choice(CreateItemResponseMessage, DeleteItemResponseMessage, GetItemResponseMessage, UpdateItemResponseMessage, UpdateItemInRecoverableItemsResponseMessage, SendItemResponseMessage, DeleteFolderResponseMessage, EmptyFolderResponseMessage, CreateFolderResponseMessage, GetFolderResponseMessage, FindFolderResponseMessage, UpdateFolderResponseMessage, MoveFolderResponseMessage, CopyFolderResponseMessage, CreateFolderPathResponseMessage, CreateAttachmentResponseMessage, DeleteAttachmentResponseMessage, GetAttachmentResponseMessage, UploadItemsResponseMessage, ExportItemsResponseMessage, MarkAllItemsAsReadResponseMessage, GetClientAccessTokenResponseMessage, GetAppManifestsResponseMessage, GetClientExtensionResponseMessage, SetClientExtensionResponseMessage, GetEncryptionConfigurationResponseMessage, SetEncryptionConfigurationResponseMessage, GetOMEConfigurationResponseMessage, SetOMEConfigurationResponseMessage, FindItemResponseMessage, MoveItemResponseMessage, ArchiveItemResponseMessage, CopyItemResponseMessage, ResolveNamesResponseMessage, ExpandDLResponseMessage, GetServerTimeZonesResponseMessage, GetEventsResponseMessage, GetStreamingEventsResponseMessage, SubscribeResponseMessage, UnsubscribeResponseMessage, GetChannelEventsResponseMessage, ChannelSubscribeResponseMessage, ChannelUnsubscribeResponseMessage, SendNotificationResponseMessage, SyncFolderHierarchyResponseMessage, SyncFolderItemsResponseMessage, CreateManagedFolderResponseMessage, ConvertIdResponseMessage, GetSharingMetadataResponseMessage, RefreshSharingFolderResponseMessage, GetSharingFolderResponseMessage, CreateUserConfigurationResponseMessage, DeleteUserConfigurationResponseMessage, GetUserConfigurationResponseMessage, UpdateUserConfigurationResponseMessage, GetRoomListsResponse, GetRoomsResponse, GetRemindersResponse, PerformReminderActionResponse, ApplyConversationActionResponseMessage, FindMailboxStatisticsByKeywordsResponseMessage, GetSearchableMailboxesResponseMessage, SearchMailboxesResponseMessage, GetDiscoverySearchConfigurationResponseMessage, GetHoldOnMailboxesResponseMessage, SetHoldOnMailboxesResponseMessage, GetNonIndexableItemStatisticsResponseMessage, GetNonIndexableItemDetailsResponseMessage, FindPeopleResponseMessage, GetPasswordExpirationDateResponse, GetPersonaResponseMessage, GetConversationItemsResponseMessage, GetUserRetentionPolicyTagsResponseMessage, GetUserPhotoResponseMessage, MarkAsJunkResponseMessage, UpdateMailboxAssociationResponseMessage, UpdateGroupMailboxResponseMessage, PostModernGroupItemResponseMessage, GetUnifiedGroupUnseenDataResponseMessage)
        if ('' !== ($getUnifiedGroupUnseenDataResponseMessageChoiceErrorMessage = self::validateGetUnifiedGroupUnseenDataResponseMessageForChoiceConstraintsFromSetGetUnifiedGroupUnseenDataResponseMessage($getUnifiedGroupUnseenDataResponseMessage))) {
            throw new \InvalidArgumentException($getUnifiedGroupUnseenDataResponseMessageChoiceErrorMessage, __LINE__);
        }
        if (is_null($getUnifiedGroupUnseenDataResponseMessage) || (is_array($getUnifiedGroupUnseenDataResponseMessage) && empty($getUnifiedGroupUnseenDataResponseMessage))) {
            unset($this->GetUnifiedGroupUnseenDataResponseMessage);
        } else {
            $this->GetUnifiedGroupUnseenDataResponseMessage = $getUnifiedGroupUnseenDataResponseMessage;
        }
        return $this;
    }
}
