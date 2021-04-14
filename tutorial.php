<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => '/var/www/wsdl/services.updated.wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => '/var/www/wsdl/services.updated.wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => EwsClassMap::get(),
];
/**
 * Samples for Resolve ServiceType
 */
$resolve = new \ServiceType\EwsResolve($options);
$resolve->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$resolve->setSoapHeaderMailboxCulture($MailboxCulture);
$resolve->setSoapHeaderRequestServerVersion(new \StructType\EwsRequestServerVersion());
/**
 * Sample call for ResolveNames operation/method
 */
if ($resolve->ResolveNames(new \StructType\EwsResolveNamesType()) !== false) {
    print_r($resolve->getResult());
} else {
    print_r($resolve->getLastError());
}
/**
 * Samples for Expand ServiceType
 */
$expand = new \ServiceType\EwsExpand($options);
$expand->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$expand->setSoapHeaderMailboxCulture($MailboxCulture);
$expand->setSoapHeaderRequestServerVersion(new \StructType\EwsRequestServerVersion());
/**
 * Sample call for ExpandDL operation/method
 */
if ($expand->ExpandDL(new \StructType\EwsExpandDLType()) !== false) {
    print_r($expand->getResult());
} else {
    print_r($expand->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \ServiceType\EwsGet($options);
$get->setSoapHeaderMailboxCulture($MailboxCulture);
$get->setSoapHeaderRequestServerVersion(new \StructType\EwsRequestServerVersion());
$get->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$get->setSoapHeaderTimeZoneContext($TimeZoneContext);
$get->setSoapHeaderManagementRole($ManagementRole);
$get->setSoapHeaderDateTimePrecision($DateTimePrecision);
/**
 * Sample call for GetServerTimeZones operation/method
 */
if ($get->GetServerTimeZones(new \StructType\EwsGetServerTimeZonesType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetFolder operation/method
 */
if ($get->GetFolder(new \StructType\EwsGetFolderType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetEvents operation/method
 */
if ($get->GetEvents(new \StructType\EwsGetEventsType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetStreamingEvents operation/method
 */
if ($get->GetStreamingEvents(new \StructType\EwsGetStreamingEventsType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetItem operation/method
 */
if ($get->GetItem(new \StructType\EwsGetItemType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAttachment operation/method
 */
if ($get->GetAttachment(new \StructType\EwsGetAttachmentType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetClientAccessToken operation/method
 */
if ($get->GetClientAccessToken(new \StructType\EwsGetClientAccessTokenType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetDelegate operation/method
 */
if ($get->GetDelegate(new \StructType\EwsGetDelegateType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetUserConfiguration operation/method
 */
if ($get->GetUserConfiguration(new \StructType\EwsGetUserConfigurationType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetUserAvailability operation/method
 */
if ($get->GetUserAvailability(new \StructType\EwsGetUserAvailabilityRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetUserOofSettings operation/method
 */
if ($get->GetUserOofSettings(new \StructType\EwsGetUserOofSettingsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetServiceConfiguration operation/method
 */
if ($get->GetServiceConfiguration(new \StructType\EwsGetServiceConfigurationType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetMailTips operation/method
 */
if ($get->GetMailTips(new \StructType\EwsGetMailTipsType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetPhoneCallInformation operation/method
 */
if ($get->GetPhoneCallInformation(new \StructType\EwsGetPhoneCallInformationType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSharingMetadata operation/method
 */
if ($get->GetSharingMetadata(new \StructType\EwsGetSharingMetadataType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSharingFolder operation/method
 */
if ($get->GetSharingFolder(new \StructType\EwsGetSharingFolderType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetRoomLists operation/method
 */
if ($get->GetRoomLists(new \StructType\EwsGetRoomListsType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetRooms operation/method
 */
if ($get->GetRooms(new \StructType\EwsGetRoomsType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetMessageTrackingReport operation/method
 */
if ($get->GetMessageTrackingReport(new \StructType\EwsGetMessageTrackingReportRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetConversationItems operation/method
 */
if ($get->GetConversationItems(new \StructType\EwsGetConversationItemsType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetPersona operation/method
 */
if ($get->GetPersona(new \StructType\EwsGetPersonaType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetInboxRules operation/method
 */
if ($get->GetInboxRules(new \StructType\EwsGetInboxRulesRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetPasswordExpirationDate operation/method
 */
if ($get->GetPasswordExpirationDate(new \StructType\EwsGetPasswordExpirationDateType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetDiscoverySearchConfiguration operation/method
 */
if ($get->GetDiscoverySearchConfiguration(new \StructType\EwsGetDiscoverySearchConfigurationType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSearchableMailboxes operation/method
 */
if ($get->GetSearchableMailboxes(new \StructType\EwsGetSearchableMailboxesType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetHoldOnMailboxes operation/method
 */
if ($get->GetHoldOnMailboxes(new \StructType\EwsGetHoldOnMailboxesType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetNonIndexableItemStatistics operation/method
 */
if ($get->GetNonIndexableItemStatistics(new \StructType\EwsGetNonIndexableItemStatisticsType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetNonIndexableItemDetails operation/method
 */
if ($get->GetNonIndexableItemDetails(new \StructType\EwsGetNonIndexableItemDetailsType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAppManifests operation/method
 */
if ($get->GetAppManifests(new \StructType\EwsGetAppManifestsType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetImItemList operation/method
 */
if ($get->GetImItemList(new \StructType\EwsGetImItemListType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetImItems operation/method
 */
if ($get->GetImItems(new \StructType\EwsGetImItemsType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetUserRetentionPolicyTags operation/method
 */
if ($get->GetUserRetentionPolicyTags(new \StructType\EwsGetUserRetentionPolicyTagsType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAppMarketplaceUrl operation/method
 */
if ($get->GetAppMarketplaceUrl(new \StructType\EwsGetAppMarketplaceUrlType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetUserPhoto operation/method
 */
if ($get->GetUserPhoto(new \StructType\EwsGetUserPhotoType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Find ServiceType
 */
$find = new \ServiceType\EwsFind($options);
$find->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$find->setSoapHeaderMailboxCulture($MailboxCulture);
$find->setSoapHeaderRequestServerVersion(new \StructType\EwsRequestServerVersion());
$find->setSoapHeaderTimeZoneContext($TimeZoneContext);
$find->setSoapHeaderManagementRole($ManagementRole);
$find->setSoapHeaderDateTimePrecision($DateTimePrecision);
/**
 * Sample call for FindFolder operation/method
 */
if ($find->FindFolder(new \StructType\EwsFindFolderType()) !== false) {
    print_r($find->getResult());
} else {
    print_r($find->getLastError());
}
/**
 * Sample call for FindItem operation/method
 */
if ($find->FindItem(new \StructType\EwsFindItemType()) !== false) {
    print_r($find->getResult());
} else {
    print_r($find->getLastError());
}
/**
 * Sample call for FindMessageTrackingReport operation/method
 */
if ($find->FindMessageTrackingReport(new \StructType\EwsFindMessageTrackingReportRequestType()) !== false) {
    print_r($find->getResult());
} else {
    print_r($find->getLastError());
}
/**
 * Sample call for FindConversation operation/method
 */
if ($find->FindConversation(new \StructType\EwsFindConversationType()) !== false) {
    print_r($find->getResult());
} else {
    print_r($find->getLastError());
}
/**
 * Sample call for FindPeople operation/method
 */
if ($find->FindPeople(new \StructType\EwsFindPeopleType()) !== false) {
    print_r($find->getResult());
} else {
    print_r($find->getLastError());
}
/**
 * Sample call for FindAvailableMeetingTimes operation/method
 */
if ($find->FindAvailableMeetingTimes(new \StructType\EwsFindAvailableMeetingTimesType()) !== false) {
    print_r($find->getResult());
} else {
    print_r($find->getLastError());
}
/**
 * Sample call for FindMeetingTimeCandidates operation/method
 */
if ($find->FindMeetingTimeCandidates(new \StructType\EwsFindMeetingTimeCandidatesType()) !== false) {
    print_r($find->getResult());
} else {
    print_r($find->getLastError());
}
/**
 * Samples for Convert ServiceType
 */
$convert = new \ServiceType\EwsConvert($options);
$convert->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$convert->setSoapHeaderRequestServerVersion(new \StructType\EwsRequestServerVersion());
/**
 * Sample call for ConvertId operation/method
 */
if ($convert->ConvertId(new \StructType\EwsConvertIdType()) !== false) {
    print_r($convert->getResult());
} else {
    print_r($convert->getLastError());
}
/**
 * Samples for Upload ServiceType
 */
$upload = new \ServiceType\EwsUpload($options);
$upload->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$upload->setSoapHeaderMailboxCulture($MailboxCulture);
$upload->setSoapHeaderRequestServerVersion(new \StructType\EwsRequestServerVersion());
/**
 * Sample call for UploadItems operation/method
 */
if ($upload->UploadItems(new \StructType\EwsUploadItemsType()) !== false) {
    print_r($upload->getResult());
} else {
    print_r($upload->getLastError());
}
/**
 * Samples for Export ServiceType
 */
$export = new \ServiceType\EwsExport($options);
$export->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$export->setSoapHeaderMailboxCulture($MailboxCulture);
$export->setSoapHeaderRequestServerVersion(new \StructType\EwsRequestServerVersion());
$export->setSoapHeaderManagementRole($ManagementRole);
/**
 * Sample call for ExportItems operation/method
 */
if ($export->ExportItems(new \StructType\EwsExportItemsType()) !== false) {
    print_r($export->getResult());
} else {
    print_r($export->getLastError());
}
/**
 * Samples for Create ServiceType
 */
$create = new \ServiceType\EwsCreate($options);
$create->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$create->setSoapHeaderMailboxCulture($MailboxCulture);
$create->setSoapHeaderRequestServerVersion(new \StructType\EwsRequestServerVersion());
$create->setSoapHeaderTimeZoneContext($TimeZoneContext);
/**
 * Sample call for CreateFolderPath operation/method
 */
if ($create->CreateFolderPath(new \StructType\EwsCreateFolderPathType()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateFolder operation/method
 */
if ($create->CreateFolder(new \StructType\EwsCreateFolderType()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateItem operation/method
 */
if ($create->CreateItem(new \StructType\EwsCreateItemType()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateAttachment operation/method
 */
if ($create->CreateAttachment(new \StructType\EwsCreateAttachmentType()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateManagedFolder operation/method
 */
if ($create->CreateManagedFolder(new \StructType\EwsCreateManagedFolderRequestType()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateUserConfiguration operation/method
 */
if ($create->CreateUserConfiguration(new \StructType\EwsCreateUserConfigurationType()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Samples for Delete ServiceType
 */
$delete = new \ServiceType\EwsDelete($options);
$delete->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$delete->setSoapHeaderMailboxCulture($MailboxCulture);
$delete->setSoapHeaderRequestServerVersion(new \StructType\EwsRequestServerVersion());
/**
 * Sample call for DeleteFolder operation/method
 */
if ($delete->DeleteFolder(new \StructType\EwsDeleteFolderType()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteItem operation/method
 */
if ($delete->DeleteItem(new \StructType\EwsDeleteItemType()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteAttachment operation/method
 */
if ($delete->DeleteAttachment(new \StructType\EwsDeleteAttachmentType()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteUserConfiguration operation/method
 */
if ($delete->DeleteUserConfiguration(new \StructType\EwsDeleteUserConfigurationType()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Samples for Empty ServiceType
 */
$empty = new \ServiceType\EwsEmpty($options);
$empty->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$empty->setSoapHeaderMailboxCulture($MailboxCulture);
$empty->setSoapHeaderRequestServerVersion(new \StructType\EwsRequestServerVersion());
/**
 * Sample call for EmptyFolder operation/method
 */
if ($empty->EmptyFolder(new \StructType\EwsEmptyFolderType()) !== false) {
    print_r($empty->getResult());
} else {
    print_r($empty->getLastError());
}
/**
 * Samples for Update ServiceType
 */
$update = new \ServiceType\EwsUpdate($options);
$update->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$update->setSoapHeaderMailboxCulture($MailboxCulture);
$update->setSoapHeaderRequestServerVersion(new \StructType\EwsRequestServerVersion());
$update->setSoapHeaderTimeZoneContext($TimeZoneContext);
$update->setSoapHeaderManagementRole($ManagementRole);
/**
 * Sample call for UpdateFolder operation/method
 */
if ($update->UpdateFolder(new \StructType\EwsUpdateFolderType()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateItem operation/method
 */
if ($update->UpdateItem(new \StructType\EwsUpdateItemType()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateItemInRecoverableItems operation/method
 */
if ($update->UpdateItemInRecoverableItems(new \StructType\EwsUpdateItemInRecoverableItemsType()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateDelegate operation/method
 */
if ($update->UpdateDelegate(new \StructType\EwsUpdateDelegateType()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateUserConfiguration operation/method
 */
if ($update->UpdateUserConfiguration(new \StructType\EwsUpdateUserConfigurationType()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateInboxRules operation/method
 */
if ($update->UpdateInboxRules(new \StructType\EwsUpdateInboxRulesRequestType()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Samples for Move ServiceType
 */
$move = new \ServiceType\EwsMove($options);
$move->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$move->setSoapHeaderMailboxCulture($MailboxCulture);
$move->setSoapHeaderRequestServerVersion(new \StructType\EwsRequestServerVersion());
/**
 * Sample call for MoveFolder operation/method
 */
if ($move->MoveFolder(new \StructType\EwsMoveFolderType()) !== false) {
    print_r($move->getResult());
} else {
    print_r($move->getLastError());
}
/**
 * Sample call for MoveItem operation/method
 */
if ($move->MoveItem(new \StructType\EwsMoveItemType()) !== false) {
    print_r($move->getResult());
} else {
    print_r($move->getLastError());
}
/**
 * Samples for Copy ServiceType
 */
$copy = new \ServiceType\EwsCopy($options);
$copy->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$copy->setSoapHeaderMailboxCulture($MailboxCulture);
$copy->setSoapHeaderRequestServerVersion(new \StructType\EwsRequestServerVersion());
/**
 * Sample call for CopyFolder operation/method
 */
if ($copy->CopyFolder(new \StructType\EwsCopyFolderType()) !== false) {
    print_r($copy->getResult());
} else {
    print_r($copy->getLastError());
}
/**
 * Sample call for CopyItem operation/method
 */
if ($copy->CopyItem(new \StructType\EwsCopyItemType()) !== false) {
    print_r($copy->getResult());
} else {
    print_r($copy->getLastError());
}
/**
 * Samples for Subscribe ServiceType
 */
$subscribe = new \ServiceType\EwsSubscribe($options);
$subscribe->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$subscribe->setSoapHeaderMailboxCulture($MailboxCulture);
$subscribe->setSoapHeaderRequestServerVersion(new \StructType\EwsRequestServerVersion());
/**
 * Sample call for Subscribe operation/method
 */
if ($subscribe->Subscribe(new \StructType\EwsSubscribeType()) !== false) {
    print_r($subscribe->getResult());
} else {
    print_r($subscribe->getLastError());
}
/**
 * Samples for Unsubscribe ServiceType
 */
$unsubscribe = new \ServiceType\EwsUnsubscribe($options);
$unsubscribe->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$unsubscribe->setSoapHeaderMailboxCulture($MailboxCulture);
$unsubscribe->setSoapHeaderRequestServerVersion(new \StructType\EwsRequestServerVersion());
/**
 * Sample call for Unsubscribe operation/method
 */
if ($unsubscribe->Unsubscribe(new \StructType\EwsUnsubscribeType()) !== false) {
    print_r($unsubscribe->getResult());
} else {
    print_r($unsubscribe->getLastError());
}
/**
 * Samples for Sync ServiceType
 */
$sync = new \ServiceType\EwsSync($options);
$sync->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$sync->setSoapHeaderMailboxCulture($MailboxCulture);
$sync->setSoapHeaderRequestServerVersion(new \StructType\EwsRequestServerVersion());
/**
 * Sample call for SyncFolderHierarchy operation/method
 */
if ($sync->SyncFolderHierarchy(new \StructType\EwsSyncFolderHierarchyType()) !== false) {
    print_r($sync->getResult());
} else {
    print_r($sync->getLastError());
}
/**
 * Sample call for SyncFolderItems operation/method
 */
if ($sync->SyncFolderItems(new \StructType\EwsSyncFolderItemsType()) !== false) {
    print_r($sync->getResult());
} else {
    print_r($sync->getLastError());
}
/**
 * Samples for Send ServiceType
 */
$send = new \ServiceType\EwsSend($options);
$send->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$send->setSoapHeaderMailboxCulture($MailboxCulture);
$send->setSoapHeaderRequestServerVersion(new \StructType\EwsRequestServerVersion());
/**
 * Sample call for SendItem operation/method
 */
if ($send->SendItem(new \StructType\EwsSendItemType()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Samples for Archive ServiceType
 */
$archive = new \ServiceType\EwsArchive($options);
$archive->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$archive->setSoapHeaderMailboxCulture($MailboxCulture);
$archive->setSoapHeaderRequestServerVersion(new \StructType\EwsRequestServerVersion());
/**
 * Sample call for ArchiveItem operation/method
 */
if ($archive->ArchiveItem(new \StructType\EwsArchiveItemType()) !== false) {
    print_r($archive->getResult());
} else {
    print_r($archive->getLastError());
}
/**
 * Samples for Add ServiceType
 */
$add = new \ServiceType\EwsAdd($options);
$add->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$add->setSoapHeaderMailboxCulture($MailboxCulture);
$add->setSoapHeaderRequestServerVersion(new \StructType\EwsRequestServerVersion());
/**
 * Sample call for AddDelegate operation/method
 */
if ($add->AddDelegate(new \StructType\EwsAddDelegateType()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddNewImContactToGroup operation/method
 */
if ($add->AddNewImContactToGroup(new \StructType\EwsAddNewImContactToGroupType()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddNewTelUriContactToGroup operation/method
 */
if ($add->AddNewTelUriContactToGroup(new \StructType\EwsAddNewTelUriContactToGroupType()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddImContactToGroup operation/method
 */
if ($add->AddImContactToGroup(new \StructType\EwsAddImContactToGroupType()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddImGroup operation/method
 */
if ($add->AddImGroup(new \StructType\EwsAddImGroupType()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddDistributionGroupToImList operation/method
 */
if ($add->AddDistributionGroupToImList(new \StructType\EwsAddDistributionGroupToImListType()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Samples for Remove ServiceType
 */
$remove = new \ServiceType\EwsRemove($options);
$remove->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$remove->setSoapHeaderMailboxCulture($MailboxCulture);
$remove->setSoapHeaderRequestServerVersion(new \StructType\EwsRequestServerVersion());
/**
 * Sample call for RemoveDelegate operation/method
 */
if ($remove->RemoveDelegate(new \StructType\EwsRemoveDelegateType()) !== false) {
    print_r($remove->getResult());
} else {
    print_r($remove->getLastError());
}
/**
 * Sample call for RemoveImContactFromGroup operation/method
 */
if ($remove->RemoveImContactFromGroup(new \StructType\EwsRemoveImContactFromGroupType()) !== false) {
    print_r($remove->getResult());
} else {
    print_r($remove->getLastError());
}
/**
 * Sample call for RemoveContactFromImList operation/method
 */
if ($remove->RemoveContactFromImList(new \StructType\EwsRemoveContactFromImListType()) !== false) {
    print_r($remove->getResult());
} else {
    print_r($remove->getLastError());
}
/**
 * Sample call for RemoveDistributionGroupFromImList operation/method
 */
if ($remove->RemoveDistributionGroupFromImList(new \StructType\EwsRemoveDistributionGroupFromImListType()) !== false) {
    print_r($remove->getResult());
} else {
    print_r($remove->getLastError());
}
/**
 * Sample call for RemoveImGroup operation/method
 */
if ($remove->RemoveImGroup(new \StructType\EwsRemoveImGroupType()) !== false) {
    print_r($remove->getResult());
} else {
    print_r($remove->getLastError());
}
/**
 * Samples for Set ServiceType
 */
$set = new \ServiceType\EwsSet($options);
$set->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$set->setSoapHeaderRequestServerVersion(new \StructType\EwsRequestServerVersion());
$set->setSoapHeaderManagementRole($ManagementRole);
$set->setSoapHeaderMailboxCulture($MailboxCulture);
/**
 * Sample call for SetUserOofSettings operation/method
 */
if ($set->SetUserOofSettings(new \StructType\EwsSetUserOofSettingsRequest()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetTeamMailbox operation/method
 */
if ($set->SetTeamMailbox(new \StructType\EwsSetTeamMailboxRequestType()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetHoldOnMailboxes operation/method
 */
if ($set->SetHoldOnMailboxes(new \StructType\EwsSetHoldOnMailboxesType()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetImGroup operation/method
 */
if ($set->SetImGroup(new \StructType\EwsSetImGroupType()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetImListMigrationCompleted operation/method
 */
if ($set->SetImListMigrationCompleted(new \StructType\EwsSetImListMigrationCompletedType()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetUserPhoto operation/method
 */
if ($set->SetUserPhoto(new \StructType\EwsSetUserPhotoType()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Samples for Play ServiceType
 */
$play = new \ServiceType\EwsPlay($options);
$play->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$play->setSoapHeaderMailboxCulture($MailboxCulture);
$play->setSoapHeaderRequestServerVersion(new \StructType\EwsRequestServerVersion());
/**
 * Sample call for PlayOnPhone operation/method
 */
if ($play->PlayOnPhone(new \StructType\EwsPlayOnPhoneType()) !== false) {
    print_r($play->getResult());
} else {
    print_r($play->getLastError());
}
/**
 * Samples for Disconnect ServiceType
 */
$disconnect = new \ServiceType\EwsDisconnect($options);
$disconnect->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$disconnect->setSoapHeaderMailboxCulture($MailboxCulture);
$disconnect->setSoapHeaderRequestServerVersion(new \StructType\EwsRequestServerVersion());
/**
 * Sample call for DisconnectPhoneCall operation/method
 */
if ($disconnect->DisconnectPhoneCall(new \StructType\EwsDisconnectPhoneCallType()) !== false) {
    print_r($disconnect->getResult());
} else {
    print_r($disconnect->getLastError());
}
/**
 * Samples for Refresh ServiceType
 */
$refresh = new \ServiceType\EwsRefresh($options);
$refresh->setSoapHeaderRequestServerVersion(new \StructType\EwsRequestServerVersion());
/**
 * Sample call for RefreshSharingFolder operation/method
 */
if ($refresh->RefreshSharingFolder(new \StructType\EwsRefreshSharingFolderType()) !== false) {
    print_r($refresh->getResult());
} else {
    print_r($refresh->getLastError());
}
/**
 * Samples for Unpin ServiceType
 */
$unpin = new \ServiceType\EwsUnpin($options);
$unpin->setSoapHeaderRequestServerVersion(new \StructType\EwsRequestServerVersion());
/**
 * Sample call for UnpinTeamMailbox operation/method
 */
if ($unpin->UnpinTeamMailbox(new \StructType\EwsUnpinTeamMailboxRequestType()) !== false) {
    print_r($unpin->getResult());
} else {
    print_r($unpin->getLastError());
}
/**
 * Samples for Apply ServiceType
 */
$apply = new \ServiceType\EwsApply($options);
$apply->setSoapHeaderRequestServerVersion(new \StructType\EwsRequestServerVersion());
$apply->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
/**
 * Sample call for ApplyConversationAction operation/method
 */
if ($apply->ApplyConversationAction(new \StructType\EwsApplyConversationActionType()) !== false) {
    print_r($apply->getResult());
} else {
    print_r($apply->getLastError());
}
/**
 * Samples for Search ServiceType
 */
$search = new \ServiceType\EwsSearch($options);
$search->setSoapHeaderRequestServerVersion(new \StructType\EwsRequestServerVersion());
$search->setSoapHeaderManagementRole($ManagementRole);
/**
 * Sample call for SearchMailboxes operation/method
 */
if ($search->SearchMailboxes(new \StructType\EwsSearchMailboxesType()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Samples for Mark ServiceType
 */
$mark = new \ServiceType\EwsMark($options);
$mark->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$mark->setSoapHeaderMailboxCulture($MailboxCulture);
$mark->setSoapHeaderRequestServerVersion(new \StructType\EwsRequestServerVersion());
/**
 * Sample call for MarkAllItemsAsRead operation/method
 */
if ($mark->MarkAllItemsAsRead(new \StructType\EwsMarkAllItemsAsReadType()) !== false) {
    print_r($mark->getResult());
} else {
    print_r($mark->getLastError());
}
/**
 * Sample call for MarkAsJunk operation/method
 */
if ($mark->MarkAsJunk(new \StructType\EwsMarkAsJunkType()) !== false) {
    print_r($mark->getResult());
} else {
    print_r($mark->getLastError());
}
/**
 * Samples for Disable ServiceType
 */
$disable = new \ServiceType\EwsDisable($options);
$disable->setSoapHeaderRequestServerVersion(new \StructType\EwsRequestServerVersion());
/**
 * Sample call for DisableApp operation/method
 */
if ($disable->DisableApp(new \StructType\EwsDisableAppType()) !== false) {
    print_r($disable->getResult());
} else {
    print_r($disable->getLastError());
}
/**
 * Samples for Install ServiceType
 */
$install = new \ServiceType\EwsInstall($options);
$install->setSoapHeaderRequestServerVersion(new \StructType\EwsRequestServerVersion());
/**
 * Sample call for InstallApp operation/method
 */
if ($install->InstallApp(new \StructType\EwsInstallAppType()) !== false) {
    print_r($install->getResult());
} else {
    print_r($install->getLastError());
}
/**
 * Samples for Uninstall ServiceType
 */
$uninstall = new \ServiceType\EwsUninstall($options);
$uninstall->setSoapHeaderRequestServerVersion(new \StructType\EwsRequestServerVersion());
/**
 * Sample call for UninstallApp operation/method
 */
if ($uninstall->UninstallApp(new \StructType\EwsUninstallAppType()) !== false) {
    print_r($uninstall->getResult());
} else {
    print_r($uninstall->getLastError());
}
