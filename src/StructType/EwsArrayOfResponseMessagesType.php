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
     * @var \Ews\StructType\EwsItemInfoResponseMessageType
     */
    public $CreateItemResponseMessage;
    /**
     * The DeleteItemResponseMessage
     * @var \Ews\StructType\EwsDeleteItemResponseMessageType
     */
    public $DeleteItemResponseMessage;
    /**
     * The GetItemResponseMessage
     * @var \Ews\StructType\EwsItemInfoResponseMessageType
     */
    public $GetItemResponseMessage;
    /**
     * The UpdateItemResponseMessage
     * @var \Ews\StructType\EwsUpdateItemResponseMessageType
     */
    public $UpdateItemResponseMessage;
    /**
     * The UpdateItemInRecoverableItemsResponseMessage
     * @var \Ews\StructType\EwsUpdateItemInRecoverableItemsResponseMessageType
     */
    public $UpdateItemInRecoverableItemsResponseMessage;
    /**
     * The SendItemResponseMessage
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $SendItemResponseMessage;
    /**
     * The DeleteFolderResponseMessage
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $DeleteFolderResponseMessage;
    /**
     * The EmptyFolderResponseMessage
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $EmptyFolderResponseMessage;
    /**
     * The CreateFolderResponseMessage
     * @var \Ews\StructType\EwsFolderInfoResponseMessageType
     */
    public $CreateFolderResponseMessage;
    /**
     * The GetFolderResponseMessage
     * @var \Ews\StructType\EwsFolderInfoResponseMessageType
     */
    public $GetFolderResponseMessage;
    /**
     * The FindFolderResponseMessage
     * @var \Ews\StructType\EwsFindFolderResponseMessageType
     */
    public $FindFolderResponseMessage;
    /**
     * The UpdateFolderResponseMessage
     * @var \Ews\StructType\EwsFolderInfoResponseMessageType
     */
    public $UpdateFolderResponseMessage;
    /**
     * The MoveFolderResponseMessage
     * @var \Ews\StructType\EwsFolderInfoResponseMessageType
     */
    public $MoveFolderResponseMessage;
    /**
     * The CopyFolderResponseMessage
     * @var \Ews\StructType\EwsFolderInfoResponseMessageType
     */
    public $CopyFolderResponseMessage;
    /**
     * The CreateFolderPathResponseMessage
     * @var \Ews\StructType\EwsFolderInfoResponseMessageType
     */
    public $CreateFolderPathResponseMessage;
    /**
     * The CreateAttachmentResponseMessage
     * @var \Ews\StructType\EwsAttachmentInfoResponseMessageType
     */
    public $CreateAttachmentResponseMessage;
    /**
     * The DeleteAttachmentResponseMessage
     * @var \Ews\StructType\EwsDeleteAttachmentResponseMessageType
     */
    public $DeleteAttachmentResponseMessage;
    /**
     * The GetAttachmentResponseMessage
     * @var \Ews\StructType\EwsAttachmentInfoResponseMessageType
     */
    public $GetAttachmentResponseMessage;
    /**
     * The UploadItemsResponseMessage
     * @var \Ews\StructType\EwsUploadItemsResponseMessageType
     */
    public $UploadItemsResponseMessage;
    /**
     * The ExportItemsResponseMessage
     * @var \Ews\StructType\EwsExportItemsResponseMessageType
     */
    public $ExportItemsResponseMessage;
    /**
     * The MarkAllItemsAsReadResponseMessage
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $MarkAllItemsAsReadResponseMessage;
    /**
     * The GetClientAccessTokenResponseMessage
     * @var \Ews\StructType\EwsGetClientAccessTokenResponseMessageType
     */
    public $GetClientAccessTokenResponseMessage;
    /**
     * The GetAppManifestsResponseMessage
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $GetAppManifestsResponseMessage;
    /**
     * The GetClientExtensionResponseMessage
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $GetClientExtensionResponseMessage;
    /**
     * The SetClientExtensionResponseMessage
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $SetClientExtensionResponseMessage;
    /**
     * The GetEncryptionConfigurationResponseMessage
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $GetEncryptionConfigurationResponseMessage;
    /**
     * The SetEncryptionConfigurationResponseMessage
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $SetEncryptionConfigurationResponseMessage;
    /**
     * The GetOMEConfigurationResponseMessage
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $GetOMEConfigurationResponseMessage;
    /**
     * The SetOMEConfigurationResponseMessage
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $SetOMEConfigurationResponseMessage;
    /**
     * The FindItemResponseMessage
     * @var \Ews\StructType\EwsFindItemResponseMessageType
     */
    public $FindItemResponseMessage;
    /**
     * The MoveItemResponseMessage
     * @var \Ews\StructType\EwsItemInfoResponseMessageType
     */
    public $MoveItemResponseMessage;
    /**
     * The ArchiveItemResponseMessage
     * @var \Ews\StructType\EwsItemInfoResponseMessageType
     */
    public $ArchiveItemResponseMessage;
    /**
     * The CopyItemResponseMessage
     * @var \Ews\StructType\EwsItemInfoResponseMessageType
     */
    public $CopyItemResponseMessage;
    /**
     * The ResolveNamesResponseMessage
     * @var \Ews\StructType\EwsResolveNamesResponseMessageType
     */
    public $ResolveNamesResponseMessage;
    /**
     * The ExpandDLResponseMessage
     * @var \Ews\StructType\EwsExpandDLResponseMessageType
     */
    public $ExpandDLResponseMessage;
    /**
     * The GetServerTimeZonesResponseMessage
     * @var \Ews\StructType\EwsGetServerTimeZonesResponseMessageType
     */
    public $GetServerTimeZonesResponseMessage;
    /**
     * The GetEventsResponseMessage
     * @var \Ews\StructType\EwsGetEventsResponseMessageType
     */
    public $GetEventsResponseMessage;
    /**
     * The GetStreamingEventsResponseMessage
     * @var \Ews\StructType\EwsGetStreamingEventsResponseMessageType
     */
    public $GetStreamingEventsResponseMessage;
    /**
     * The SubscribeResponseMessage
     * @var \Ews\StructType\EwsSubscribeResponseMessageType
     */
    public $SubscribeResponseMessage;
    /**
     * The UnsubscribeResponseMessage
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $UnsubscribeResponseMessage;
    /**
     * The GetChannelEventsResponseMessage
     * @var \Ews\StructType\EwsGetChannelEventsResponseMessageType
     */
    public $GetChannelEventsResponseMessage;
    /**
     * The ChannelSubscribeResponseMessage
     * @var \Ews\StructType\EwsChannelSubscribeResponseMessageType
     */
    public $ChannelSubscribeResponseMessage;
    /**
     * The ChannelUnsubscribeResponseMessage
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $ChannelUnsubscribeResponseMessage;
    /**
     * The SendNotificationResponseMessage
     * @var \Ews\StructType\EwsSendNotificationResponseMessageType
     */
    public $SendNotificationResponseMessage;
    /**
     * The SyncFolderHierarchyResponseMessage
     * @var \Ews\StructType\EwsSyncFolderHierarchyResponseMessageType
     */
    public $SyncFolderHierarchyResponseMessage;
    /**
     * The SyncFolderItemsResponseMessage
     * @var \Ews\StructType\EwsSyncFolderItemsResponseMessageType
     */
    public $SyncFolderItemsResponseMessage;
    /**
     * The CreateManagedFolderResponseMessage
     * @var \Ews\StructType\EwsFolderInfoResponseMessageType
     */
    public $CreateManagedFolderResponseMessage;
    /**
     * The ConvertIdResponseMessage
     * @var \Ews\StructType\EwsConvertIdResponseMessageType
     */
    public $ConvertIdResponseMessage;
    /**
     * The GetSharingMetadataResponseMessage
     * @var \Ews\StructType\EwsGetSharingMetadataResponseMessageType
     */
    public $GetSharingMetadataResponseMessage;
    /**
     * The RefreshSharingFolderResponseMessage
     * @var \Ews\StructType\EwsRefreshSharingFolderResponseMessageType
     */
    public $RefreshSharingFolderResponseMessage;
    /**
     * The GetSharingFolderResponseMessage
     * @var \Ews\StructType\EwsGetSharingFolderResponseMessageType
     */
    public $GetSharingFolderResponseMessage;
    /**
     * The CreateUserConfigurationResponseMessage
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $CreateUserConfigurationResponseMessage;
    /**
     * The DeleteUserConfigurationResponseMessage
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $DeleteUserConfigurationResponseMessage;
    /**
     * The GetUserConfigurationResponseMessage
     * @var \Ews\StructType\EwsGetUserConfigurationResponseMessageType
     */
    public $GetUserConfigurationResponseMessage;
    /**
     * The UpdateUserConfigurationResponseMessage
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $UpdateUserConfigurationResponseMessage;
    /**
     * The GetRoomListsResponse
     * @var \Ews\StructType\EwsGetRoomListsResponseMessageType
     */
    public $GetRoomListsResponse;
    /**
     * The GetRoomsResponse
     * @var \Ews\StructType\EwsGetRoomsResponseMessageType
     */
    public $GetRoomsResponse;
    /**
     * The GetRemindersResponse
     * @var \Ews\StructType\EwsGetRemindersResponseMessageType
     */
    public $GetRemindersResponse;
    /**
     * The PerformReminderActionResponse
     * @var \Ews\StructType\EwsPerformReminderActionResponseMessageType
     */
    public $PerformReminderActionResponse;
    /**
     * The ApplyConversationActionResponseMessage
     * @var \Ews\StructType\EwsApplyConversationActionResponseMessageType
     */
    public $ApplyConversationActionResponseMessage;
    /**
     * The FindMailboxStatisticsByKeywordsResponseMessage
     * @var \Ews\StructType\EwsFindMailboxStatisticsByKeywordsResponseMessageType
     */
    public $FindMailboxStatisticsByKeywordsResponseMessage;
    /**
     * The GetSearchableMailboxesResponseMessage
     * @var \Ews\StructType\EwsGetSearchableMailboxesResponseMessageType
     */
    public $GetSearchableMailboxesResponseMessage;
    /**
     * The SearchMailboxesResponseMessage
     * @var \Ews\StructType\EwsSearchMailboxesResponseMessageType
     */
    public $SearchMailboxesResponseMessage;
    /**
     * The GetDiscoverySearchConfigurationResponseMessage
     * @var \Ews\StructType\EwsGetDiscoverySearchConfigurationResponseMessageType
     */
    public $GetDiscoverySearchConfigurationResponseMessage;
    /**
     * The GetHoldOnMailboxesResponseMessage
     * @var \Ews\StructType\EwsGetHoldOnMailboxesResponseMessageType
     */
    public $GetHoldOnMailboxesResponseMessage;
    /**
     * The SetHoldOnMailboxesResponseMessage
     * @var \Ews\StructType\EwsSetHoldOnMailboxesResponseMessageType
     */
    public $SetHoldOnMailboxesResponseMessage;
    /**
     * The GetNonIndexableItemStatisticsResponseMessage
     * @var \Ews\StructType\EwsGetNonIndexableItemStatisticsResponseMessageType
     */
    public $GetNonIndexableItemStatisticsResponseMessage;
    /**
     * The GetNonIndexableItemDetailsResponseMessage
     * @var \Ews\StructType\EwsGetNonIndexableItemDetailsResponseMessageType
     */
    public $GetNonIndexableItemDetailsResponseMessage;
    /**
     * The FindPeopleResponseMessage
     * @var \Ews\StructType\EwsFindPeopleResponseMessageType
     */
    public $FindPeopleResponseMessage;
    /**
     * The GetPasswordExpirationDateResponse
     * @var \Ews\StructType\EwsGetPasswordExpirationDateResponseMessageType
     */
    public $GetPasswordExpirationDateResponse;
    /**
     * The GetPersonaResponseMessage
     * @var \Ews\StructType\EwsGetPersonaResponseMessageType
     */
    public $GetPersonaResponseMessage;
    /**
     * The GetConversationItemsResponseMessage
     * @var \Ews\StructType\EwsGetConversationItemsResponseMessageType
     */
    public $GetConversationItemsResponseMessage;
    /**
     * The GetUserRetentionPolicyTagsResponseMessage
     * @var \Ews\StructType\EwsGetUserRetentionPolicyTagsResponseMessageType
     */
    public $GetUserRetentionPolicyTagsResponseMessage;
    /**
     * The GetUserPhotoResponseMessage
     * @var \Ews\StructType\EwsGetUserPhotoResponseMessageType
     */
    public $GetUserPhotoResponseMessage;
    /**
     * The MarkAsJunkResponseMessage
     * @var \Ews\StructType\EwsMarkAsJunkResponseMessageType
     */
    public $MarkAsJunkResponseMessage;
    /**
     * The UpdateMailboxAssociationResponseMessage
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $UpdateMailboxAssociationResponseMessage;
    /**
     * The UpdateGroupMailboxResponseMessage
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $UpdateGroupMailboxResponseMessage;
    /**
     * The PostModernGroupItemResponseMessage
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $PostModernGroupItemResponseMessage;
    /**
     * The GetUnifiedGroupUnseenDataResponseMessage
     * @var \Ews\StructType\EwsGetUnifiedGroupUnseenDataResponseMessageType
     */
    public $GetUnifiedGroupUnseenDataResponseMessage;
    /**
     * Constructor method for ArrayOfResponseMessagesType
     * @uses EwsArrayOfResponseMessagesType::setCreateItemResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setDeleteItemResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setGetItemResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setUpdateItemResponseMessage()
     * @uses
     * EwsArrayOfResponseMessagesType::setUpdateItemInRecoverableItemsResponseMessage()
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
     * @uses
     * EwsArrayOfResponseMessagesType::setGetEncryptionConfigurationResponseMessage()
     * @uses
     * EwsArrayOfResponseMessagesType::setSetEncryptionConfigurationResponseMessage()
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
     * @uses
     * EwsArrayOfResponseMessagesType::setCreateUserConfigurationResponseMessage()
     * @uses
     * EwsArrayOfResponseMessagesType::setDeleteUserConfigurationResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setGetUserConfigurationResponseMessage()
     * @uses
     * EwsArrayOfResponseMessagesType::setUpdateUserConfigurationResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setGetRoomListsResponse()
     * @uses EwsArrayOfResponseMessagesType::setGetRoomsResponse()
     * @uses EwsArrayOfResponseMessagesType::setGetRemindersResponse()
     * @uses EwsArrayOfResponseMessagesType::setPerformReminderActionResponse()
     * @uses
     * EwsArrayOfResponseMessagesType::setApplyConversationActionResponseMessage()
     * @uses
     * EwsArrayOfResponseMessagesType::setFindMailboxStatisticsByKeywordsResponseMessag
     * e()
     * @uses EwsArrayOfResponseMessagesType::setGetSearchableMailboxesResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setSearchMailboxesResponseMessage()
     * @uses
     * EwsArrayOfResponseMessagesType::setGetDiscoverySearchConfigurationResponseMessag
     * e()
     * @uses EwsArrayOfResponseMessagesType::setGetHoldOnMailboxesResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setSetHoldOnMailboxesResponseMessage()
     * @uses
     * EwsArrayOfResponseMessagesType::setGetNonIndexableItemStatisticsResponseMessage(
     * )
     * @uses
     * EwsArrayOfResponseMessagesType::setGetNonIndexableItemDetailsResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setFindPeopleResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setGetPasswordExpirationDateResponse()
     * @uses EwsArrayOfResponseMessagesType::setGetPersonaResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setGetConversationItemsResponseMessage()
     * @uses
     * EwsArrayOfResponseMessagesType::setGetUserRetentionPolicyTagsResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setGetUserPhotoResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setMarkAsJunkResponseMessage()
     * @uses
     * EwsArrayOfResponseMessagesType::setUpdateMailboxAssociationResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setUpdateGroupMailboxResponseMessage()
     * @uses EwsArrayOfResponseMessagesType::setPostModernGroupItemResponseMessage()
     * @uses
     * EwsArrayOfResponseMessagesType::setGetUnifiedGroupUnseenDataResponseMessage()
     * @param \Ews\StructType\EwsItemInfoResponseMessageType $createItemResponseMessage
     * @param \Ews\StructType\EwsDeleteItemResponseMessageType
     * $deleteItemResponseMessage
     * @param \Ews\StructType\EwsItemInfoResponseMessageType $getItemResponseMessage
     * @param \Ews\StructType\EwsUpdateItemResponseMessageType
     * $updateItemResponseMessage
     * @param \Ews\StructType\EwsUpdateItemInRecoverableItemsResponseMessageType
     * $updateItemInRecoverableItemsResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType $sendItemResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType $deleteFolderResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType $emptyFolderResponseMessage
     * @param \Ews\StructType\EwsFolderInfoResponseMessageType
     * $createFolderResponseMessage
     * @param \Ews\StructType\EwsFolderInfoResponseMessageType
     * $getFolderResponseMessage
     * @param \Ews\StructType\EwsFindFolderResponseMessageType
     * $findFolderResponseMessage
     * @param \Ews\StructType\EwsFolderInfoResponseMessageType
     * $updateFolderResponseMessage
     * @param \Ews\StructType\EwsFolderInfoResponseMessageType
     * $moveFolderResponseMessage
     * @param \Ews\StructType\EwsFolderInfoResponseMessageType
     * $copyFolderResponseMessage
     * @param \Ews\StructType\EwsFolderInfoResponseMessageType
     * $createFolderPathResponseMessage
     * @param \Ews\StructType\EwsAttachmentInfoResponseMessageType
     * $createAttachmentResponseMessage
     * @param \Ews\StructType\EwsDeleteAttachmentResponseMessageType
     * $deleteAttachmentResponseMessage
     * @param \Ews\StructType\EwsAttachmentInfoResponseMessageType
     * $getAttachmentResponseMessage
     * @param \Ews\StructType\EwsUploadItemsResponseMessageType
     * $uploadItemsResponseMessage
     * @param \Ews\StructType\EwsExportItemsResponseMessageType
     * $exportItemsResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType $markAllItemsAsReadResponseMessage
     * @param \Ews\StructType\EwsGetClientAccessTokenResponseMessageType
     * $getClientAccessTokenResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType $getAppManifestsResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType $getClientExtensionResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType $setClientExtensionResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType
     * $getEncryptionConfigurationResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType
     * $setEncryptionConfigurationResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType
     * $getOMEConfigurationResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType
     * $setOMEConfigurationResponseMessage
     * @param \Ews\StructType\EwsFindItemResponseMessageType $findItemResponseMessage
     * @param \Ews\StructType\EwsItemInfoResponseMessageType $moveItemResponseMessage
     * @param \Ews\StructType\EwsItemInfoResponseMessageType
     * $archiveItemResponseMessage
     * @param \Ews\StructType\EwsItemInfoResponseMessageType $copyItemResponseMessage
     * @param \Ews\StructType\EwsResolveNamesResponseMessageType
     * $resolveNamesResponseMessage
     * @param \Ews\StructType\EwsExpandDLResponseMessageType $expandDLResponseMessage
     * @param \Ews\StructType\EwsGetServerTimeZonesResponseMessageType
     * $getServerTimeZonesResponseMessage
     * @param \Ews\StructType\EwsGetEventsResponseMessageType $getEventsResponseMessage
     * @param \Ews\StructType\EwsGetStreamingEventsResponseMessageType
     * $getStreamingEventsResponseMessage
     * @param \Ews\StructType\EwsSubscribeResponseMessageType $subscribeResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType $unsubscribeResponseMessage
     * @param \Ews\StructType\EwsGetChannelEventsResponseMessageType
     * $getChannelEventsResponseMessage
     * @param \Ews\StructType\EwsChannelSubscribeResponseMessageType
     * $channelSubscribeResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType $channelUnsubscribeResponseMessage
     * @param \Ews\StructType\EwsSendNotificationResponseMessageType
     * $sendNotificationResponseMessage
     * @param \Ews\StructType\EwsSyncFolderHierarchyResponseMessageType
     * $syncFolderHierarchyResponseMessage
     * @param \Ews\StructType\EwsSyncFolderItemsResponseMessageType
     * $syncFolderItemsResponseMessage
     * @param \Ews\StructType\EwsFolderInfoResponseMessageType
     * $createManagedFolderResponseMessage
     * @param \Ews\StructType\EwsConvertIdResponseMessageType $convertIdResponseMessage
     * @param \Ews\StructType\EwsGetSharingMetadataResponseMessageType
     * $getSharingMetadataResponseMessage
     * @param \Ews\StructType\EwsRefreshSharingFolderResponseMessageType
     * $refreshSharingFolderResponseMessage
     * @param \Ews\StructType\EwsGetSharingFolderResponseMessageType
     * $getSharingFolderResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType
     * $createUserConfigurationResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType
     * $deleteUserConfigurationResponseMessage
     * @param \Ews\StructType\EwsGetUserConfigurationResponseMessageType
     * $getUserConfigurationResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType
     * $updateUserConfigurationResponseMessage
     * @param \Ews\StructType\EwsGetRoomListsResponseMessageType $getRoomListsResponse
     * @param \Ews\StructType\EwsGetRoomsResponseMessageType $getRoomsResponse
     * @param \Ews\StructType\EwsGetRemindersResponseMessageType $getRemindersResponse
     * @param \Ews\StructType\EwsPerformReminderActionResponseMessageType
     * $performReminderActionResponse
     * @param \Ews\StructType\EwsApplyConversationActionResponseMessageType
     * $applyConversationActionResponseMessage
     * @param \Ews\StructType\EwsFindMailboxStatisticsByKeywordsResponseMessageType
     * $findMailboxStatisticsByKeywordsResponseMessage
     * @param \Ews\StructType\EwsGetSearchableMailboxesResponseMessageType
     * $getSearchableMailboxesResponseMessage
     * @param \Ews\StructType\EwsSearchMailboxesResponseMessageType
     * $searchMailboxesResponseMessage
     * @param \Ews\StructType\EwsGetDiscoverySearchConfigurationResponseMessageType
     * $getDiscoverySearchConfigurationResponseMessage
     * @param \Ews\StructType\EwsGetHoldOnMailboxesResponseMessageType
     * $getHoldOnMailboxesResponseMessage
     * @param \Ews\StructType\EwsSetHoldOnMailboxesResponseMessageType
     * $setHoldOnMailboxesResponseMessage
     * @param \Ews\StructType\EwsGetNonIndexableItemStatisticsResponseMessageType
     * $getNonIndexableItemStatisticsResponseMessage
     * @param \Ews\StructType\EwsGetNonIndexableItemDetailsResponseMessageType
     * $getNonIndexableItemDetailsResponseMessage
     * @param \Ews\StructType\EwsFindPeopleResponseMessageType
     * $findPeopleResponseMessage
     * @param \Ews\StructType\EwsGetPasswordExpirationDateResponseMessageType
     * $getPasswordExpirationDateResponse
     * @param \Ews\StructType\EwsGetPersonaResponseMessageType
     * $getPersonaResponseMessage
     * @param \Ews\StructType\EwsGetConversationItemsResponseMessageType
     * $getConversationItemsResponseMessage
     * @param \Ews\StructType\EwsGetUserRetentionPolicyTagsResponseMessageType
     * $getUserRetentionPolicyTagsResponseMessage
     * @param \Ews\StructType\EwsGetUserPhotoResponseMessageType
     * $getUserPhotoResponseMessage
     * @param \Ews\StructType\EwsMarkAsJunkResponseMessageType
     * $markAsJunkResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType
     * $updateMailboxAssociationResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType $updateGroupMailboxResponseMessage
     * @param \Ews\StructType\EwsResponseMessageType
     * $postModernGroupItemResponseMessage
     * @param \Ews\StructType\EwsGetUnifiedGroupUnseenDataResponseMessageType
     * $getUnifiedGroupUnseenDataResponseMessage
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
        return $this->CreateItemResponseMessage;
    }
    /**
     * Set CreateItemResponseMessage value
     * @param \Ews\StructType\EwsItemInfoResponseMessageType $createItemResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setCreateItemResponseMessage(\Ews\StructType\EwsItemInfoResponseMessageType $createItemResponseMessage = null)
    {
        $this->CreateItemResponseMessage = $createItemResponseMessage;
        return $this;
    }
    /**
     * Get DeleteItemResponseMessage value
     * @return \Ews\StructType\EwsDeleteItemResponseMessageType|null
     */
    public function getDeleteItemResponseMessage()
    {
        return $this->DeleteItemResponseMessage;
    }
    /**
     * Set DeleteItemResponseMessage value
     * @param \Ews\StructType\EwsDeleteItemResponseMessageType
     * $deleteItemResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setDeleteItemResponseMessage(\Ews\StructType\EwsDeleteItemResponseMessageType $deleteItemResponseMessage = null)
    {
        $this->DeleteItemResponseMessage = $deleteItemResponseMessage;
        return $this;
    }
    /**
     * Get GetItemResponseMessage value
     * @return \Ews\StructType\EwsItemInfoResponseMessageType|null
     */
    public function getGetItemResponseMessage()
    {
        return $this->GetItemResponseMessage;
    }
    /**
     * Set GetItemResponseMessage value
     * @param \Ews\StructType\EwsItemInfoResponseMessageType $getItemResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetItemResponseMessage(\Ews\StructType\EwsItemInfoResponseMessageType $getItemResponseMessage = null)
    {
        $this->GetItemResponseMessage = $getItemResponseMessage;
        return $this;
    }
    /**
     * Get UpdateItemResponseMessage value
     * @return \Ews\StructType\EwsUpdateItemResponseMessageType|null
     */
    public function getUpdateItemResponseMessage()
    {
        return $this->UpdateItemResponseMessage;
    }
    /**
     * Set UpdateItemResponseMessage value
     * @param \Ews\StructType\EwsUpdateItemResponseMessageType
     * $updateItemResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setUpdateItemResponseMessage(\Ews\StructType\EwsUpdateItemResponseMessageType $updateItemResponseMessage = null)
    {
        $this->UpdateItemResponseMessage = $updateItemResponseMessage;
        return $this;
    }
    /**
     * Get UpdateItemInRecoverableItemsResponseMessage value
     * @return \Ews\StructType\EwsUpdateItemInRecoverableItemsResponseMessageType|null
     */
    public function getUpdateItemInRecoverableItemsResponseMessage()
    {
        return $this->UpdateItemInRecoverableItemsResponseMessage;
    }
    /**
     * Set UpdateItemInRecoverableItemsResponseMessage value
     * @param \Ews\StructType\EwsUpdateItemInRecoverableItemsResponseMessageType
     * $updateItemInRecoverableItemsResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setUpdateItemInRecoverableItemsResponseMessage(\Ews\StructType\EwsUpdateItemInRecoverableItemsResponseMessageType $updateItemInRecoverableItemsResponseMessage = null)
    {
        $this->UpdateItemInRecoverableItemsResponseMessage = $updateItemInRecoverableItemsResponseMessage;
        return $this;
    }
    /**
     * Get SendItemResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getSendItemResponseMessage()
    {
        return $this->SendItemResponseMessage;
    }
    /**
     * Set SendItemResponseMessage value
     * @param \Ews\StructType\EwsResponseMessageType $sendItemResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setSendItemResponseMessage(\Ews\StructType\EwsResponseMessageType $sendItemResponseMessage = null)
    {
        $this->SendItemResponseMessage = $sendItemResponseMessage;
        return $this;
    }
    /**
     * Get DeleteFolderResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getDeleteFolderResponseMessage()
    {
        return $this->DeleteFolderResponseMessage;
    }
    /**
     * Set DeleteFolderResponseMessage value
     * @param \Ews\StructType\EwsResponseMessageType $deleteFolderResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setDeleteFolderResponseMessage(\Ews\StructType\EwsResponseMessageType $deleteFolderResponseMessage = null)
    {
        $this->DeleteFolderResponseMessage = $deleteFolderResponseMessage;
        return $this;
    }
    /**
     * Get EmptyFolderResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getEmptyFolderResponseMessage()
    {
        return $this->EmptyFolderResponseMessage;
    }
    /**
     * Set EmptyFolderResponseMessage value
     * @param \Ews\StructType\EwsResponseMessageType $emptyFolderResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setEmptyFolderResponseMessage(\Ews\StructType\EwsResponseMessageType $emptyFolderResponseMessage = null)
    {
        $this->EmptyFolderResponseMessage = $emptyFolderResponseMessage;
        return $this;
    }
    /**
     * Get CreateFolderResponseMessage value
     * @return \Ews\StructType\EwsFolderInfoResponseMessageType|null
     */
    public function getCreateFolderResponseMessage()
    {
        return $this->CreateFolderResponseMessage;
    }
    /**
     * Set CreateFolderResponseMessage value
     * @param \Ews\StructType\EwsFolderInfoResponseMessageType
     * $createFolderResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setCreateFolderResponseMessage(\Ews\StructType\EwsFolderInfoResponseMessageType $createFolderResponseMessage = null)
    {
        $this->CreateFolderResponseMessage = $createFolderResponseMessage;
        return $this;
    }
    /**
     * Get GetFolderResponseMessage value
     * @return \Ews\StructType\EwsFolderInfoResponseMessageType|null
     */
    public function getGetFolderResponseMessage()
    {
        return $this->GetFolderResponseMessage;
    }
    /**
     * Set GetFolderResponseMessage value
     * @param \Ews\StructType\EwsFolderInfoResponseMessageType
     * $getFolderResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetFolderResponseMessage(\Ews\StructType\EwsFolderInfoResponseMessageType $getFolderResponseMessage = null)
    {
        $this->GetFolderResponseMessage = $getFolderResponseMessage;
        return $this;
    }
    /**
     * Get FindFolderResponseMessage value
     * @return \Ews\StructType\EwsFindFolderResponseMessageType|null
     */
    public function getFindFolderResponseMessage()
    {
        return $this->FindFolderResponseMessage;
    }
    /**
     * Set FindFolderResponseMessage value
     * @param \Ews\StructType\EwsFindFolderResponseMessageType
     * $findFolderResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setFindFolderResponseMessage(\Ews\StructType\EwsFindFolderResponseMessageType $findFolderResponseMessage = null)
    {
        $this->FindFolderResponseMessage = $findFolderResponseMessage;
        return $this;
    }
    /**
     * Get UpdateFolderResponseMessage value
     * @return \Ews\StructType\EwsFolderInfoResponseMessageType|null
     */
    public function getUpdateFolderResponseMessage()
    {
        return $this->UpdateFolderResponseMessage;
    }
    /**
     * Set UpdateFolderResponseMessage value
     * @param \Ews\StructType\EwsFolderInfoResponseMessageType
     * $updateFolderResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setUpdateFolderResponseMessage(\Ews\StructType\EwsFolderInfoResponseMessageType $updateFolderResponseMessage = null)
    {
        $this->UpdateFolderResponseMessage = $updateFolderResponseMessage;
        return $this;
    }
    /**
     * Get MoveFolderResponseMessage value
     * @return \Ews\StructType\EwsFolderInfoResponseMessageType|null
     */
    public function getMoveFolderResponseMessage()
    {
        return $this->MoveFolderResponseMessage;
    }
    /**
     * Set MoveFolderResponseMessage value
     * @param \Ews\StructType\EwsFolderInfoResponseMessageType
     * $moveFolderResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setMoveFolderResponseMessage(\Ews\StructType\EwsFolderInfoResponseMessageType $moveFolderResponseMessage = null)
    {
        $this->MoveFolderResponseMessage = $moveFolderResponseMessage;
        return $this;
    }
    /**
     * Get CopyFolderResponseMessage value
     * @return \Ews\StructType\EwsFolderInfoResponseMessageType|null
     */
    public function getCopyFolderResponseMessage()
    {
        return $this->CopyFolderResponseMessage;
    }
    /**
     * Set CopyFolderResponseMessage value
     * @param \Ews\StructType\EwsFolderInfoResponseMessageType
     * $copyFolderResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setCopyFolderResponseMessage(\Ews\StructType\EwsFolderInfoResponseMessageType $copyFolderResponseMessage = null)
    {
        $this->CopyFolderResponseMessage = $copyFolderResponseMessage;
        return $this;
    }
    /**
     * Get CreateFolderPathResponseMessage value
     * @return \Ews\StructType\EwsFolderInfoResponseMessageType|null
     */
    public function getCreateFolderPathResponseMessage()
    {
        return $this->CreateFolderPathResponseMessage;
    }
    /**
     * Set CreateFolderPathResponseMessage value
     * @param \Ews\StructType\EwsFolderInfoResponseMessageType
     * $createFolderPathResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setCreateFolderPathResponseMessage(\Ews\StructType\EwsFolderInfoResponseMessageType $createFolderPathResponseMessage = null)
    {
        $this->CreateFolderPathResponseMessage = $createFolderPathResponseMessage;
        return $this;
    }
    /**
     * Get CreateAttachmentResponseMessage value
     * @return \Ews\StructType\EwsAttachmentInfoResponseMessageType|null
     */
    public function getCreateAttachmentResponseMessage()
    {
        return $this->CreateAttachmentResponseMessage;
    }
    /**
     * Set CreateAttachmentResponseMessage value
     * @param \Ews\StructType\EwsAttachmentInfoResponseMessageType
     * $createAttachmentResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setCreateAttachmentResponseMessage(\Ews\StructType\EwsAttachmentInfoResponseMessageType $createAttachmentResponseMessage = null)
    {
        $this->CreateAttachmentResponseMessage = $createAttachmentResponseMessage;
        return $this;
    }
    /**
     * Get DeleteAttachmentResponseMessage value
     * @return \Ews\StructType\EwsDeleteAttachmentResponseMessageType|null
     */
    public function getDeleteAttachmentResponseMessage()
    {
        return $this->DeleteAttachmentResponseMessage;
    }
    /**
     * Set DeleteAttachmentResponseMessage value
     * @param \Ews\StructType\EwsDeleteAttachmentResponseMessageType
     * $deleteAttachmentResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setDeleteAttachmentResponseMessage(\Ews\StructType\EwsDeleteAttachmentResponseMessageType $deleteAttachmentResponseMessage = null)
    {
        $this->DeleteAttachmentResponseMessage = $deleteAttachmentResponseMessage;
        return $this;
    }
    /**
     * Get GetAttachmentResponseMessage value
     * @return \Ews\StructType\EwsAttachmentInfoResponseMessageType|null
     */
    public function getGetAttachmentResponseMessage()
    {
        return $this->GetAttachmentResponseMessage;
    }
    /**
     * Set GetAttachmentResponseMessage value
     * @param \Ews\StructType\EwsAttachmentInfoResponseMessageType
     * $getAttachmentResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetAttachmentResponseMessage(\Ews\StructType\EwsAttachmentInfoResponseMessageType $getAttachmentResponseMessage = null)
    {
        $this->GetAttachmentResponseMessage = $getAttachmentResponseMessage;
        return $this;
    }
    /**
     * Get UploadItemsResponseMessage value
     * @return \Ews\StructType\EwsUploadItemsResponseMessageType|null
     */
    public function getUploadItemsResponseMessage()
    {
        return $this->UploadItemsResponseMessage;
    }
    /**
     * Set UploadItemsResponseMessage value
     * @param \Ews\StructType\EwsUploadItemsResponseMessageType
     * $uploadItemsResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setUploadItemsResponseMessage(\Ews\StructType\EwsUploadItemsResponseMessageType $uploadItemsResponseMessage = null)
    {
        $this->UploadItemsResponseMessage = $uploadItemsResponseMessage;
        return $this;
    }
    /**
     * Get ExportItemsResponseMessage value
     * @return \Ews\StructType\EwsExportItemsResponseMessageType|null
     */
    public function getExportItemsResponseMessage()
    {
        return $this->ExportItemsResponseMessage;
    }
    /**
     * Set ExportItemsResponseMessage value
     * @param \Ews\StructType\EwsExportItemsResponseMessageType
     * $exportItemsResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setExportItemsResponseMessage(\Ews\StructType\EwsExportItemsResponseMessageType $exportItemsResponseMessage = null)
    {
        $this->ExportItemsResponseMessage = $exportItemsResponseMessage;
        return $this;
    }
    /**
     * Get MarkAllItemsAsReadResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getMarkAllItemsAsReadResponseMessage()
    {
        return $this->MarkAllItemsAsReadResponseMessage;
    }
    /**
     * Set MarkAllItemsAsReadResponseMessage value
     * @param \Ews\StructType\EwsResponseMessageType $markAllItemsAsReadResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setMarkAllItemsAsReadResponseMessage(\Ews\StructType\EwsResponseMessageType $markAllItemsAsReadResponseMessage = null)
    {
        $this->MarkAllItemsAsReadResponseMessage = $markAllItemsAsReadResponseMessage;
        return $this;
    }
    /**
     * Get GetClientAccessTokenResponseMessage value
     * @return \Ews\StructType\EwsGetClientAccessTokenResponseMessageType|null
     */
    public function getGetClientAccessTokenResponseMessage()
    {
        return $this->GetClientAccessTokenResponseMessage;
    }
    /**
     * Set GetClientAccessTokenResponseMessage value
     * @param \Ews\StructType\EwsGetClientAccessTokenResponseMessageType
     * $getClientAccessTokenResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetClientAccessTokenResponseMessage(\Ews\StructType\EwsGetClientAccessTokenResponseMessageType $getClientAccessTokenResponseMessage = null)
    {
        $this->GetClientAccessTokenResponseMessage = $getClientAccessTokenResponseMessage;
        return $this;
    }
    /**
     * Get GetAppManifestsResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getGetAppManifestsResponseMessage()
    {
        return $this->GetAppManifestsResponseMessage;
    }
    /**
     * Set GetAppManifestsResponseMessage value
     * @param \Ews\StructType\EwsResponseMessageType $getAppManifestsResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetAppManifestsResponseMessage(\Ews\StructType\EwsResponseMessageType $getAppManifestsResponseMessage = null)
    {
        $this->GetAppManifestsResponseMessage = $getAppManifestsResponseMessage;
        return $this;
    }
    /**
     * Get GetClientExtensionResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getGetClientExtensionResponseMessage()
    {
        return $this->GetClientExtensionResponseMessage;
    }
    /**
     * Set GetClientExtensionResponseMessage value
     * @param \Ews\StructType\EwsResponseMessageType $getClientExtensionResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetClientExtensionResponseMessage(\Ews\StructType\EwsResponseMessageType $getClientExtensionResponseMessage = null)
    {
        $this->GetClientExtensionResponseMessage = $getClientExtensionResponseMessage;
        return $this;
    }
    /**
     * Get SetClientExtensionResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getSetClientExtensionResponseMessage()
    {
        return $this->SetClientExtensionResponseMessage;
    }
    /**
     * Set SetClientExtensionResponseMessage value
     * @param \Ews\StructType\EwsResponseMessageType $setClientExtensionResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setSetClientExtensionResponseMessage(\Ews\StructType\EwsResponseMessageType $setClientExtensionResponseMessage = null)
    {
        $this->SetClientExtensionResponseMessage = $setClientExtensionResponseMessage;
        return $this;
    }
    /**
     * Get GetEncryptionConfigurationResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getGetEncryptionConfigurationResponseMessage()
    {
        return $this->GetEncryptionConfigurationResponseMessage;
    }
    /**
     * Set GetEncryptionConfigurationResponseMessage value
     * @param \Ews\StructType\EwsResponseMessageType
     * $getEncryptionConfigurationResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetEncryptionConfigurationResponseMessage(\Ews\StructType\EwsResponseMessageType $getEncryptionConfigurationResponseMessage = null)
    {
        $this->GetEncryptionConfigurationResponseMessage = $getEncryptionConfigurationResponseMessage;
        return $this;
    }
    /**
     * Get SetEncryptionConfigurationResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getSetEncryptionConfigurationResponseMessage()
    {
        return $this->SetEncryptionConfigurationResponseMessage;
    }
    /**
     * Set SetEncryptionConfigurationResponseMessage value
     * @param \Ews\StructType\EwsResponseMessageType
     * $setEncryptionConfigurationResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setSetEncryptionConfigurationResponseMessage(\Ews\StructType\EwsResponseMessageType $setEncryptionConfigurationResponseMessage = null)
    {
        $this->SetEncryptionConfigurationResponseMessage = $setEncryptionConfigurationResponseMessage;
        return $this;
    }
    /**
     * Get GetOMEConfigurationResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getGetOMEConfigurationResponseMessage()
    {
        return $this->GetOMEConfigurationResponseMessage;
    }
    /**
     * Set GetOMEConfigurationResponseMessage value
     * @param \Ews\StructType\EwsResponseMessageType
     * $getOMEConfigurationResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetOMEConfigurationResponseMessage(\Ews\StructType\EwsResponseMessageType $getOMEConfigurationResponseMessage = null)
    {
        $this->GetOMEConfigurationResponseMessage = $getOMEConfigurationResponseMessage;
        return $this;
    }
    /**
     * Get SetOMEConfigurationResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getSetOMEConfigurationResponseMessage()
    {
        return $this->SetOMEConfigurationResponseMessage;
    }
    /**
     * Set SetOMEConfigurationResponseMessage value
     * @param \Ews\StructType\EwsResponseMessageType
     * $setOMEConfigurationResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setSetOMEConfigurationResponseMessage(\Ews\StructType\EwsResponseMessageType $setOMEConfigurationResponseMessage = null)
    {
        $this->SetOMEConfigurationResponseMessage = $setOMEConfigurationResponseMessage;
        return $this;
    }
    /**
     * Get FindItemResponseMessage value
     * @return \Ews\StructType\EwsFindItemResponseMessageType|null
     */
    public function getFindItemResponseMessage()
    {
        return $this->FindItemResponseMessage;
    }
    /**
     * Set FindItemResponseMessage value
     * @param \Ews\StructType\EwsFindItemResponseMessageType $findItemResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setFindItemResponseMessage(\Ews\StructType\EwsFindItemResponseMessageType $findItemResponseMessage = null)
    {
        $this->FindItemResponseMessage = $findItemResponseMessage;
        return $this;
    }
    /**
     * Get MoveItemResponseMessage value
     * @return \Ews\StructType\EwsItemInfoResponseMessageType|null
     */
    public function getMoveItemResponseMessage()
    {
        return $this->MoveItemResponseMessage;
    }
    /**
     * Set MoveItemResponseMessage value
     * @param \Ews\StructType\EwsItemInfoResponseMessageType $moveItemResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setMoveItemResponseMessage(\Ews\StructType\EwsItemInfoResponseMessageType $moveItemResponseMessage = null)
    {
        $this->MoveItemResponseMessage = $moveItemResponseMessage;
        return $this;
    }
    /**
     * Get ArchiveItemResponseMessage value
     * @return \Ews\StructType\EwsItemInfoResponseMessageType|null
     */
    public function getArchiveItemResponseMessage()
    {
        return $this->ArchiveItemResponseMessage;
    }
    /**
     * Set ArchiveItemResponseMessage value
     * @param \Ews\StructType\EwsItemInfoResponseMessageType
     * $archiveItemResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setArchiveItemResponseMessage(\Ews\StructType\EwsItemInfoResponseMessageType $archiveItemResponseMessage = null)
    {
        $this->ArchiveItemResponseMessage = $archiveItemResponseMessage;
        return $this;
    }
    /**
     * Get CopyItemResponseMessage value
     * @return \Ews\StructType\EwsItemInfoResponseMessageType|null
     */
    public function getCopyItemResponseMessage()
    {
        return $this->CopyItemResponseMessage;
    }
    /**
     * Set CopyItemResponseMessage value
     * @param \Ews\StructType\EwsItemInfoResponseMessageType $copyItemResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setCopyItemResponseMessage(\Ews\StructType\EwsItemInfoResponseMessageType $copyItemResponseMessage = null)
    {
        $this->CopyItemResponseMessage = $copyItemResponseMessage;
        return $this;
    }
    /**
     * Get ResolveNamesResponseMessage value
     * @return \Ews\StructType\EwsResolveNamesResponseMessageType|null
     */
    public function getResolveNamesResponseMessage()
    {
        return $this->ResolveNamesResponseMessage;
    }
    /**
     * Set ResolveNamesResponseMessage value
     * @param \Ews\StructType\EwsResolveNamesResponseMessageType
     * $resolveNamesResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setResolveNamesResponseMessage(\Ews\StructType\EwsResolveNamesResponseMessageType $resolveNamesResponseMessage = null)
    {
        $this->ResolveNamesResponseMessage = $resolveNamesResponseMessage;
        return $this;
    }
    /**
     * Get ExpandDLResponseMessage value
     * @return \Ews\StructType\EwsExpandDLResponseMessageType|null
     */
    public function getExpandDLResponseMessage()
    {
        return $this->ExpandDLResponseMessage;
    }
    /**
     * Set ExpandDLResponseMessage value
     * @param \Ews\StructType\EwsExpandDLResponseMessageType $expandDLResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setExpandDLResponseMessage(\Ews\StructType\EwsExpandDLResponseMessageType $expandDLResponseMessage = null)
    {
        $this->ExpandDLResponseMessage = $expandDLResponseMessage;
        return $this;
    }
    /**
     * Get GetServerTimeZonesResponseMessage value
     * @return \Ews\StructType\EwsGetServerTimeZonesResponseMessageType|null
     */
    public function getGetServerTimeZonesResponseMessage()
    {
        return $this->GetServerTimeZonesResponseMessage;
    }
    /**
     * Set GetServerTimeZonesResponseMessage value
     * @param \Ews\StructType\EwsGetServerTimeZonesResponseMessageType
     * $getServerTimeZonesResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetServerTimeZonesResponseMessage(\Ews\StructType\EwsGetServerTimeZonesResponseMessageType $getServerTimeZonesResponseMessage = null)
    {
        $this->GetServerTimeZonesResponseMessage = $getServerTimeZonesResponseMessage;
        return $this;
    }
    /**
     * Get GetEventsResponseMessage value
     * @return \Ews\StructType\EwsGetEventsResponseMessageType|null
     */
    public function getGetEventsResponseMessage()
    {
        return $this->GetEventsResponseMessage;
    }
    /**
     * Set GetEventsResponseMessage value
     * @param \Ews\StructType\EwsGetEventsResponseMessageType $getEventsResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetEventsResponseMessage(\Ews\StructType\EwsGetEventsResponseMessageType $getEventsResponseMessage = null)
    {
        $this->GetEventsResponseMessage = $getEventsResponseMessage;
        return $this;
    }
    /**
     * Get GetStreamingEventsResponseMessage value
     * @return \Ews\StructType\EwsGetStreamingEventsResponseMessageType|null
     */
    public function getGetStreamingEventsResponseMessage()
    {
        return $this->GetStreamingEventsResponseMessage;
    }
    /**
     * Set GetStreamingEventsResponseMessage value
     * @param \Ews\StructType\EwsGetStreamingEventsResponseMessageType
     * $getStreamingEventsResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetStreamingEventsResponseMessage(\Ews\StructType\EwsGetStreamingEventsResponseMessageType $getStreamingEventsResponseMessage = null)
    {
        $this->GetStreamingEventsResponseMessage = $getStreamingEventsResponseMessage;
        return $this;
    }
    /**
     * Get SubscribeResponseMessage value
     * @return \Ews\StructType\EwsSubscribeResponseMessageType|null
     */
    public function getSubscribeResponseMessage()
    {
        return $this->SubscribeResponseMessage;
    }
    /**
     * Set SubscribeResponseMessage value
     * @param \Ews\StructType\EwsSubscribeResponseMessageType $subscribeResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setSubscribeResponseMessage(\Ews\StructType\EwsSubscribeResponseMessageType $subscribeResponseMessage = null)
    {
        $this->SubscribeResponseMessage = $subscribeResponseMessage;
        return $this;
    }
    /**
     * Get UnsubscribeResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getUnsubscribeResponseMessage()
    {
        return $this->UnsubscribeResponseMessage;
    }
    /**
     * Set UnsubscribeResponseMessage value
     * @param \Ews\StructType\EwsResponseMessageType $unsubscribeResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setUnsubscribeResponseMessage(\Ews\StructType\EwsResponseMessageType $unsubscribeResponseMessage = null)
    {
        $this->UnsubscribeResponseMessage = $unsubscribeResponseMessage;
        return $this;
    }
    /**
     * Get GetChannelEventsResponseMessage value
     * @return \Ews\StructType\EwsGetChannelEventsResponseMessageType|null
     */
    public function getGetChannelEventsResponseMessage()
    {
        return $this->GetChannelEventsResponseMessage;
    }
    /**
     * Set GetChannelEventsResponseMessage value
     * @param \Ews\StructType\EwsGetChannelEventsResponseMessageType
     * $getChannelEventsResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetChannelEventsResponseMessage(\Ews\StructType\EwsGetChannelEventsResponseMessageType $getChannelEventsResponseMessage = null)
    {
        $this->GetChannelEventsResponseMessage = $getChannelEventsResponseMessage;
        return $this;
    }
    /**
     * Get ChannelSubscribeResponseMessage value
     * @return \Ews\StructType\EwsChannelSubscribeResponseMessageType|null
     */
    public function getChannelSubscribeResponseMessage()
    {
        return $this->ChannelSubscribeResponseMessage;
    }
    /**
     * Set ChannelSubscribeResponseMessage value
     * @param \Ews\StructType\EwsChannelSubscribeResponseMessageType
     * $channelSubscribeResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setChannelSubscribeResponseMessage(\Ews\StructType\EwsChannelSubscribeResponseMessageType $channelSubscribeResponseMessage = null)
    {
        $this->ChannelSubscribeResponseMessage = $channelSubscribeResponseMessage;
        return $this;
    }
    /**
     * Get ChannelUnsubscribeResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getChannelUnsubscribeResponseMessage()
    {
        return $this->ChannelUnsubscribeResponseMessage;
    }
    /**
     * Set ChannelUnsubscribeResponseMessage value
     * @param \Ews\StructType\EwsResponseMessageType $channelUnsubscribeResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setChannelUnsubscribeResponseMessage(\Ews\StructType\EwsResponseMessageType $channelUnsubscribeResponseMessage = null)
    {
        $this->ChannelUnsubscribeResponseMessage = $channelUnsubscribeResponseMessage;
        return $this;
    }
    /**
     * Get SendNotificationResponseMessage value
     * @return \Ews\StructType\EwsSendNotificationResponseMessageType|null
     */
    public function getSendNotificationResponseMessage()
    {
        return $this->SendNotificationResponseMessage;
    }
    /**
     * Set SendNotificationResponseMessage value
     * @param \Ews\StructType\EwsSendNotificationResponseMessageType
     * $sendNotificationResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setSendNotificationResponseMessage(\Ews\StructType\EwsSendNotificationResponseMessageType $sendNotificationResponseMessage = null)
    {
        $this->SendNotificationResponseMessage = $sendNotificationResponseMessage;
        return $this;
    }
    /**
     * Get SyncFolderHierarchyResponseMessage value
     * @return \Ews\StructType\EwsSyncFolderHierarchyResponseMessageType|null
     */
    public function getSyncFolderHierarchyResponseMessage()
    {
        return $this->SyncFolderHierarchyResponseMessage;
    }
    /**
     * Set SyncFolderHierarchyResponseMessage value
     * @param \Ews\StructType\EwsSyncFolderHierarchyResponseMessageType
     * $syncFolderHierarchyResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setSyncFolderHierarchyResponseMessage(\Ews\StructType\EwsSyncFolderHierarchyResponseMessageType $syncFolderHierarchyResponseMessage = null)
    {
        $this->SyncFolderHierarchyResponseMessage = $syncFolderHierarchyResponseMessage;
        return $this;
    }
    /**
     * Get SyncFolderItemsResponseMessage value
     * @return \Ews\StructType\EwsSyncFolderItemsResponseMessageType|null
     */
    public function getSyncFolderItemsResponseMessage()
    {
        return $this->SyncFolderItemsResponseMessage;
    }
    /**
     * Set SyncFolderItemsResponseMessage value
     * @param \Ews\StructType\EwsSyncFolderItemsResponseMessageType
     * $syncFolderItemsResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setSyncFolderItemsResponseMessage(\Ews\StructType\EwsSyncFolderItemsResponseMessageType $syncFolderItemsResponseMessage = null)
    {
        $this->SyncFolderItemsResponseMessage = $syncFolderItemsResponseMessage;
        return $this;
    }
    /**
     * Get CreateManagedFolderResponseMessage value
     * @return \Ews\StructType\EwsFolderInfoResponseMessageType|null
     */
    public function getCreateManagedFolderResponseMessage()
    {
        return $this->CreateManagedFolderResponseMessage;
    }
    /**
     * Set CreateManagedFolderResponseMessage value
     * @param \Ews\StructType\EwsFolderInfoResponseMessageType
     * $createManagedFolderResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setCreateManagedFolderResponseMessage(\Ews\StructType\EwsFolderInfoResponseMessageType $createManagedFolderResponseMessage = null)
    {
        $this->CreateManagedFolderResponseMessage = $createManagedFolderResponseMessage;
        return $this;
    }
    /**
     * Get ConvertIdResponseMessage value
     * @return \Ews\StructType\EwsConvertIdResponseMessageType|null
     */
    public function getConvertIdResponseMessage()
    {
        return $this->ConvertIdResponseMessage;
    }
    /**
     * Set ConvertIdResponseMessage value
     * @param \Ews\StructType\EwsConvertIdResponseMessageType $convertIdResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setConvertIdResponseMessage(\Ews\StructType\EwsConvertIdResponseMessageType $convertIdResponseMessage = null)
    {
        $this->ConvertIdResponseMessage = $convertIdResponseMessage;
        return $this;
    }
    /**
     * Get GetSharingMetadataResponseMessage value
     * @return \Ews\StructType\EwsGetSharingMetadataResponseMessageType|null
     */
    public function getGetSharingMetadataResponseMessage()
    {
        return $this->GetSharingMetadataResponseMessage;
    }
    /**
     * Set GetSharingMetadataResponseMessage value
     * @param \Ews\StructType\EwsGetSharingMetadataResponseMessageType
     * $getSharingMetadataResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetSharingMetadataResponseMessage(\Ews\StructType\EwsGetSharingMetadataResponseMessageType $getSharingMetadataResponseMessage = null)
    {
        $this->GetSharingMetadataResponseMessage = $getSharingMetadataResponseMessage;
        return $this;
    }
    /**
     * Get RefreshSharingFolderResponseMessage value
     * @return \Ews\StructType\EwsRefreshSharingFolderResponseMessageType|null
     */
    public function getRefreshSharingFolderResponseMessage()
    {
        return $this->RefreshSharingFolderResponseMessage;
    }
    /**
     * Set RefreshSharingFolderResponseMessage value
     * @param \Ews\StructType\EwsRefreshSharingFolderResponseMessageType
     * $refreshSharingFolderResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setRefreshSharingFolderResponseMessage(\Ews\StructType\EwsRefreshSharingFolderResponseMessageType $refreshSharingFolderResponseMessage = null)
    {
        $this->RefreshSharingFolderResponseMessage = $refreshSharingFolderResponseMessage;
        return $this;
    }
    /**
     * Get GetSharingFolderResponseMessage value
     * @return \Ews\StructType\EwsGetSharingFolderResponseMessageType|null
     */
    public function getGetSharingFolderResponseMessage()
    {
        return $this->GetSharingFolderResponseMessage;
    }
    /**
     * Set GetSharingFolderResponseMessage value
     * @param \Ews\StructType\EwsGetSharingFolderResponseMessageType
     * $getSharingFolderResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetSharingFolderResponseMessage(\Ews\StructType\EwsGetSharingFolderResponseMessageType $getSharingFolderResponseMessage = null)
    {
        $this->GetSharingFolderResponseMessage = $getSharingFolderResponseMessage;
        return $this;
    }
    /**
     * Get CreateUserConfigurationResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getCreateUserConfigurationResponseMessage()
    {
        return $this->CreateUserConfigurationResponseMessage;
    }
    /**
     * Set CreateUserConfigurationResponseMessage value
     * @param \Ews\StructType\EwsResponseMessageType
     * $createUserConfigurationResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setCreateUserConfigurationResponseMessage(\Ews\StructType\EwsResponseMessageType $createUserConfigurationResponseMessage = null)
    {
        $this->CreateUserConfigurationResponseMessage = $createUserConfigurationResponseMessage;
        return $this;
    }
    /**
     * Get DeleteUserConfigurationResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getDeleteUserConfigurationResponseMessage()
    {
        return $this->DeleteUserConfigurationResponseMessage;
    }
    /**
     * Set DeleteUserConfigurationResponseMessage value
     * @param \Ews\StructType\EwsResponseMessageType
     * $deleteUserConfigurationResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setDeleteUserConfigurationResponseMessage(\Ews\StructType\EwsResponseMessageType $deleteUserConfigurationResponseMessage = null)
    {
        $this->DeleteUserConfigurationResponseMessage = $deleteUserConfigurationResponseMessage;
        return $this;
    }
    /**
     * Get GetUserConfigurationResponseMessage value
     * @return \Ews\StructType\EwsGetUserConfigurationResponseMessageType|null
     */
    public function getGetUserConfigurationResponseMessage()
    {
        return $this->GetUserConfigurationResponseMessage;
    }
    /**
     * Set GetUserConfigurationResponseMessage value
     * @param \Ews\StructType\EwsGetUserConfigurationResponseMessageType
     * $getUserConfigurationResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetUserConfigurationResponseMessage(\Ews\StructType\EwsGetUserConfigurationResponseMessageType $getUserConfigurationResponseMessage = null)
    {
        $this->GetUserConfigurationResponseMessage = $getUserConfigurationResponseMessage;
        return $this;
    }
    /**
     * Get UpdateUserConfigurationResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getUpdateUserConfigurationResponseMessage()
    {
        return $this->UpdateUserConfigurationResponseMessage;
    }
    /**
     * Set UpdateUserConfigurationResponseMessage value
     * @param \Ews\StructType\EwsResponseMessageType
     * $updateUserConfigurationResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setUpdateUserConfigurationResponseMessage(\Ews\StructType\EwsResponseMessageType $updateUserConfigurationResponseMessage = null)
    {
        $this->UpdateUserConfigurationResponseMessage = $updateUserConfigurationResponseMessage;
        return $this;
    }
    /**
     * Get GetRoomListsResponse value
     * @return \Ews\StructType\EwsGetRoomListsResponseMessageType|null
     */
    public function getGetRoomListsResponse()
    {
        return $this->GetRoomListsResponse;
    }
    /**
     * Set GetRoomListsResponse value
     * @param \Ews\StructType\EwsGetRoomListsResponseMessageType $getRoomListsResponse
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetRoomListsResponse(\Ews\StructType\EwsGetRoomListsResponseMessageType $getRoomListsResponse = null)
    {
        $this->GetRoomListsResponse = $getRoomListsResponse;
        return $this;
    }
    /**
     * Get GetRoomsResponse value
     * @return \Ews\StructType\EwsGetRoomsResponseMessageType|null
     */
    public function getGetRoomsResponse()
    {
        return $this->GetRoomsResponse;
    }
    /**
     * Set GetRoomsResponse value
     * @param \Ews\StructType\EwsGetRoomsResponseMessageType $getRoomsResponse
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetRoomsResponse(\Ews\StructType\EwsGetRoomsResponseMessageType $getRoomsResponse = null)
    {
        $this->GetRoomsResponse = $getRoomsResponse;
        return $this;
    }
    /**
     * Get GetRemindersResponse value
     * @return \Ews\StructType\EwsGetRemindersResponseMessageType|null
     */
    public function getGetRemindersResponse()
    {
        return $this->GetRemindersResponse;
    }
    /**
     * Set GetRemindersResponse value
     * @param \Ews\StructType\EwsGetRemindersResponseMessageType $getRemindersResponse
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetRemindersResponse(\Ews\StructType\EwsGetRemindersResponseMessageType $getRemindersResponse = null)
    {
        $this->GetRemindersResponse = $getRemindersResponse;
        return $this;
    }
    /**
     * Get PerformReminderActionResponse value
     * @return \Ews\StructType\EwsPerformReminderActionResponseMessageType|null
     */
    public function getPerformReminderActionResponse()
    {
        return $this->PerformReminderActionResponse;
    }
    /**
     * Set PerformReminderActionResponse value
     * @param \Ews\StructType\EwsPerformReminderActionResponseMessageType
     * $performReminderActionResponse
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setPerformReminderActionResponse(\Ews\StructType\EwsPerformReminderActionResponseMessageType $performReminderActionResponse = null)
    {
        $this->PerformReminderActionResponse = $performReminderActionResponse;
        return $this;
    }
    /**
     * Get ApplyConversationActionResponseMessage value
     * @return \Ews\StructType\EwsApplyConversationActionResponseMessageType|null
     */
    public function getApplyConversationActionResponseMessage()
    {
        return $this->ApplyConversationActionResponseMessage;
    }
    /**
     * Set ApplyConversationActionResponseMessage value
     * @param \Ews\StructType\EwsApplyConversationActionResponseMessageType
     * $applyConversationActionResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setApplyConversationActionResponseMessage(\Ews\StructType\EwsApplyConversationActionResponseMessageType $applyConversationActionResponseMessage = null)
    {
        $this->ApplyConversationActionResponseMessage = $applyConversationActionResponseMessage;
        return $this;
    }
    /**
     * Get FindMailboxStatisticsByKeywordsResponseMessage value
     * @return
     * \Ews\StructType\EwsFindMailboxStatisticsByKeywordsResponseMessageType|null
     */
    public function getFindMailboxStatisticsByKeywordsResponseMessage()
    {
        return $this->FindMailboxStatisticsByKeywordsResponseMessage;
    }
    /**
     * Set FindMailboxStatisticsByKeywordsResponseMessage value
     * @param \Ews\StructType\EwsFindMailboxStatisticsByKeywordsResponseMessageType
     * $findMailboxStatisticsByKeywordsResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setFindMailboxStatisticsByKeywordsResponseMessage(\Ews\StructType\EwsFindMailboxStatisticsByKeywordsResponseMessageType $findMailboxStatisticsByKeywordsResponseMessage = null)
    {
        $this->FindMailboxStatisticsByKeywordsResponseMessage = $findMailboxStatisticsByKeywordsResponseMessage;
        return $this;
    }
    /**
     * Get GetSearchableMailboxesResponseMessage value
     * @return \Ews\StructType\EwsGetSearchableMailboxesResponseMessageType|null
     */
    public function getGetSearchableMailboxesResponseMessage()
    {
        return $this->GetSearchableMailboxesResponseMessage;
    }
    /**
     * Set GetSearchableMailboxesResponseMessage value
     * @param \Ews\StructType\EwsGetSearchableMailboxesResponseMessageType
     * $getSearchableMailboxesResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetSearchableMailboxesResponseMessage(\Ews\StructType\EwsGetSearchableMailboxesResponseMessageType $getSearchableMailboxesResponseMessage = null)
    {
        $this->GetSearchableMailboxesResponseMessage = $getSearchableMailboxesResponseMessage;
        return $this;
    }
    /**
     * Get SearchMailboxesResponseMessage value
     * @return \Ews\StructType\EwsSearchMailboxesResponseMessageType|null
     */
    public function getSearchMailboxesResponseMessage()
    {
        return $this->SearchMailboxesResponseMessage;
    }
    /**
     * Set SearchMailboxesResponseMessage value
     * @param \Ews\StructType\EwsSearchMailboxesResponseMessageType
     * $searchMailboxesResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setSearchMailboxesResponseMessage(\Ews\StructType\EwsSearchMailboxesResponseMessageType $searchMailboxesResponseMessage = null)
    {
        $this->SearchMailboxesResponseMessage = $searchMailboxesResponseMessage;
        return $this;
    }
    /**
     * Get GetDiscoverySearchConfigurationResponseMessage value
     * @return
     * \Ews\StructType\EwsGetDiscoverySearchConfigurationResponseMessageType|null
     */
    public function getGetDiscoverySearchConfigurationResponseMessage()
    {
        return $this->GetDiscoverySearchConfigurationResponseMessage;
    }
    /**
     * Set GetDiscoverySearchConfigurationResponseMessage value
     * @param \Ews\StructType\EwsGetDiscoverySearchConfigurationResponseMessageType
     * $getDiscoverySearchConfigurationResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetDiscoverySearchConfigurationResponseMessage(\Ews\StructType\EwsGetDiscoverySearchConfigurationResponseMessageType $getDiscoverySearchConfigurationResponseMessage = null)
    {
        $this->GetDiscoverySearchConfigurationResponseMessage = $getDiscoverySearchConfigurationResponseMessage;
        return $this;
    }
    /**
     * Get GetHoldOnMailboxesResponseMessage value
     * @return \Ews\StructType\EwsGetHoldOnMailboxesResponseMessageType|null
     */
    public function getGetHoldOnMailboxesResponseMessage()
    {
        return $this->GetHoldOnMailboxesResponseMessage;
    }
    /**
     * Set GetHoldOnMailboxesResponseMessage value
     * @param \Ews\StructType\EwsGetHoldOnMailboxesResponseMessageType
     * $getHoldOnMailboxesResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetHoldOnMailboxesResponseMessage(\Ews\StructType\EwsGetHoldOnMailboxesResponseMessageType $getHoldOnMailboxesResponseMessage = null)
    {
        $this->GetHoldOnMailboxesResponseMessage = $getHoldOnMailboxesResponseMessage;
        return $this;
    }
    /**
     * Get SetHoldOnMailboxesResponseMessage value
     * @return \Ews\StructType\EwsSetHoldOnMailboxesResponseMessageType|null
     */
    public function getSetHoldOnMailboxesResponseMessage()
    {
        return $this->SetHoldOnMailboxesResponseMessage;
    }
    /**
     * Set SetHoldOnMailboxesResponseMessage value
     * @param \Ews\StructType\EwsSetHoldOnMailboxesResponseMessageType
     * $setHoldOnMailboxesResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setSetHoldOnMailboxesResponseMessage(\Ews\StructType\EwsSetHoldOnMailboxesResponseMessageType $setHoldOnMailboxesResponseMessage = null)
    {
        $this->SetHoldOnMailboxesResponseMessage = $setHoldOnMailboxesResponseMessage;
        return $this;
    }
    /**
     * Get GetNonIndexableItemStatisticsResponseMessage value
     * @return \Ews\StructType\EwsGetNonIndexableItemStatisticsResponseMessageType|null
     */
    public function getGetNonIndexableItemStatisticsResponseMessage()
    {
        return $this->GetNonIndexableItemStatisticsResponseMessage;
    }
    /**
     * Set GetNonIndexableItemStatisticsResponseMessage value
     * @param \Ews\StructType\EwsGetNonIndexableItemStatisticsResponseMessageType
     * $getNonIndexableItemStatisticsResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetNonIndexableItemStatisticsResponseMessage(\Ews\StructType\EwsGetNonIndexableItemStatisticsResponseMessageType $getNonIndexableItemStatisticsResponseMessage = null)
    {
        $this->GetNonIndexableItemStatisticsResponseMessage = $getNonIndexableItemStatisticsResponseMessage;
        return $this;
    }
    /**
     * Get GetNonIndexableItemDetailsResponseMessage value
     * @return \Ews\StructType\EwsGetNonIndexableItemDetailsResponseMessageType|null
     */
    public function getGetNonIndexableItemDetailsResponseMessage()
    {
        return $this->GetNonIndexableItemDetailsResponseMessage;
    }
    /**
     * Set GetNonIndexableItemDetailsResponseMessage value
     * @param \Ews\StructType\EwsGetNonIndexableItemDetailsResponseMessageType
     * $getNonIndexableItemDetailsResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetNonIndexableItemDetailsResponseMessage(\Ews\StructType\EwsGetNonIndexableItemDetailsResponseMessageType $getNonIndexableItemDetailsResponseMessage = null)
    {
        $this->GetNonIndexableItemDetailsResponseMessage = $getNonIndexableItemDetailsResponseMessage;
        return $this;
    }
    /**
     * Get FindPeopleResponseMessage value
     * @return \Ews\StructType\EwsFindPeopleResponseMessageType|null
     */
    public function getFindPeopleResponseMessage()
    {
        return $this->FindPeopleResponseMessage;
    }
    /**
     * Set FindPeopleResponseMessage value
     * @param \Ews\StructType\EwsFindPeopleResponseMessageType
     * $findPeopleResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setFindPeopleResponseMessage(\Ews\StructType\EwsFindPeopleResponseMessageType $findPeopleResponseMessage = null)
    {
        $this->FindPeopleResponseMessage = $findPeopleResponseMessage;
        return $this;
    }
    /**
     * Get GetPasswordExpirationDateResponse value
     * @return \Ews\StructType\EwsGetPasswordExpirationDateResponseMessageType|null
     */
    public function getGetPasswordExpirationDateResponse()
    {
        return $this->GetPasswordExpirationDateResponse;
    }
    /**
     * Set GetPasswordExpirationDateResponse value
     * @param \Ews\StructType\EwsGetPasswordExpirationDateResponseMessageType
     * $getPasswordExpirationDateResponse
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetPasswordExpirationDateResponse(\Ews\StructType\EwsGetPasswordExpirationDateResponseMessageType $getPasswordExpirationDateResponse = null)
    {
        $this->GetPasswordExpirationDateResponse = $getPasswordExpirationDateResponse;
        return $this;
    }
    /**
     * Get GetPersonaResponseMessage value
     * @return \Ews\StructType\EwsGetPersonaResponseMessageType|null
     */
    public function getGetPersonaResponseMessage()
    {
        return $this->GetPersonaResponseMessage;
    }
    /**
     * Set GetPersonaResponseMessage value
     * @param \Ews\StructType\EwsGetPersonaResponseMessageType
     * $getPersonaResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetPersonaResponseMessage(\Ews\StructType\EwsGetPersonaResponseMessageType $getPersonaResponseMessage = null)
    {
        $this->GetPersonaResponseMessage = $getPersonaResponseMessage;
        return $this;
    }
    /**
     * Get GetConversationItemsResponseMessage value
     * @return \Ews\StructType\EwsGetConversationItemsResponseMessageType|null
     */
    public function getGetConversationItemsResponseMessage()
    {
        return $this->GetConversationItemsResponseMessage;
    }
    /**
     * Set GetConversationItemsResponseMessage value
     * @param \Ews\StructType\EwsGetConversationItemsResponseMessageType
     * $getConversationItemsResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetConversationItemsResponseMessage(\Ews\StructType\EwsGetConversationItemsResponseMessageType $getConversationItemsResponseMessage = null)
    {
        $this->GetConversationItemsResponseMessage = $getConversationItemsResponseMessage;
        return $this;
    }
    /**
     * Get GetUserRetentionPolicyTagsResponseMessage value
     * @return \Ews\StructType\EwsGetUserRetentionPolicyTagsResponseMessageType|null
     */
    public function getGetUserRetentionPolicyTagsResponseMessage()
    {
        return $this->GetUserRetentionPolicyTagsResponseMessage;
    }
    /**
     * Set GetUserRetentionPolicyTagsResponseMessage value
     * @param \Ews\StructType\EwsGetUserRetentionPolicyTagsResponseMessageType
     * $getUserRetentionPolicyTagsResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetUserRetentionPolicyTagsResponseMessage(\Ews\StructType\EwsGetUserRetentionPolicyTagsResponseMessageType $getUserRetentionPolicyTagsResponseMessage = null)
    {
        $this->GetUserRetentionPolicyTagsResponseMessage = $getUserRetentionPolicyTagsResponseMessage;
        return $this;
    }
    /**
     * Get GetUserPhotoResponseMessage value
     * @return \Ews\StructType\EwsGetUserPhotoResponseMessageType|null
     */
    public function getGetUserPhotoResponseMessage()
    {
        return $this->GetUserPhotoResponseMessage;
    }
    /**
     * Set GetUserPhotoResponseMessage value
     * @param \Ews\StructType\EwsGetUserPhotoResponseMessageType
     * $getUserPhotoResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetUserPhotoResponseMessage(\Ews\StructType\EwsGetUserPhotoResponseMessageType $getUserPhotoResponseMessage = null)
    {
        $this->GetUserPhotoResponseMessage = $getUserPhotoResponseMessage;
        return $this;
    }
    /**
     * Get MarkAsJunkResponseMessage value
     * @return \Ews\StructType\EwsMarkAsJunkResponseMessageType|null
     */
    public function getMarkAsJunkResponseMessage()
    {
        return $this->MarkAsJunkResponseMessage;
    }
    /**
     * Set MarkAsJunkResponseMessage value
     * @param \Ews\StructType\EwsMarkAsJunkResponseMessageType
     * $markAsJunkResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setMarkAsJunkResponseMessage(\Ews\StructType\EwsMarkAsJunkResponseMessageType $markAsJunkResponseMessage = null)
    {
        $this->MarkAsJunkResponseMessage = $markAsJunkResponseMessage;
        return $this;
    }
    /**
     * Get UpdateMailboxAssociationResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getUpdateMailboxAssociationResponseMessage()
    {
        return $this->UpdateMailboxAssociationResponseMessage;
    }
    /**
     * Set UpdateMailboxAssociationResponseMessage value
     * @param \Ews\StructType\EwsResponseMessageType
     * $updateMailboxAssociationResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setUpdateMailboxAssociationResponseMessage(\Ews\StructType\EwsResponseMessageType $updateMailboxAssociationResponseMessage = null)
    {
        $this->UpdateMailboxAssociationResponseMessage = $updateMailboxAssociationResponseMessage;
        return $this;
    }
    /**
     * Get UpdateGroupMailboxResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getUpdateGroupMailboxResponseMessage()
    {
        return $this->UpdateGroupMailboxResponseMessage;
    }
    /**
     * Set UpdateGroupMailboxResponseMessage value
     * @param \Ews\StructType\EwsResponseMessageType $updateGroupMailboxResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setUpdateGroupMailboxResponseMessage(\Ews\StructType\EwsResponseMessageType $updateGroupMailboxResponseMessage = null)
    {
        $this->UpdateGroupMailboxResponseMessage = $updateGroupMailboxResponseMessage;
        return $this;
    }
    /**
     * Get PostModernGroupItemResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getPostModernGroupItemResponseMessage()
    {
        return $this->PostModernGroupItemResponseMessage;
    }
    /**
     * Set PostModernGroupItemResponseMessage value
     * @param \Ews\StructType\EwsResponseMessageType
     * $postModernGroupItemResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setPostModernGroupItemResponseMessage(\Ews\StructType\EwsResponseMessageType $postModernGroupItemResponseMessage = null)
    {
        $this->PostModernGroupItemResponseMessage = $postModernGroupItemResponseMessage;
        return $this;
    }
    /**
     * Get GetUnifiedGroupUnseenDataResponseMessage value
     * @return \Ews\StructType\EwsGetUnifiedGroupUnseenDataResponseMessageType|null
     */
    public function getGetUnifiedGroupUnseenDataResponseMessage()
    {
        return $this->GetUnifiedGroupUnseenDataResponseMessage;
    }
    /**
     * Set GetUnifiedGroupUnseenDataResponseMessage value
     * @param \Ews\StructType\EwsGetUnifiedGroupUnseenDataResponseMessageType
     * $getUnifiedGroupUnseenDataResponseMessage
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public function setGetUnifiedGroupUnseenDataResponseMessage(\Ews\StructType\EwsGetUnifiedGroupUnseenDataResponseMessageType $getUnifiedGroupUnseenDataResponseMessage = null)
    {
        $this->GetUnifiedGroupUnseenDataResponseMessage = $getUnifiedGroupUnseenDataResponseMessage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
