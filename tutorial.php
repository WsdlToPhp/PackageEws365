<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => __DIR__ . '/wsdl/services.updated.wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => __DIR__ . '/wsdl/services.updated.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Ews\EwsClassMap::get(),
);
/**
 * Samples for Resolve ServiceType
 */
$resolve = new \Ews\ServiceType\EwsResolve($options);
$resolve->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$resolve->setSoapHeaderMailboxCulture($MailboxCulture);
$resolve->setSoapHeaderRequestServerVersion(new \Ews\StructType\EwsRequestServerVersion());
/**
 * Sample call for ResolveNames operation/method
 */
if ($resolve->ResolveNames(new \Ews\StructType\EwsResolveNamesType()) !== false) {
    print_r($resolve->getResult());
} else {
    print_r($resolve->getLastError());
}
/**
 * Samples for Expand ServiceType
 */
$expand = new \Ews\ServiceType\EwsExpand($options);
$expand->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$expand->setSoapHeaderMailboxCulture($MailboxCulture);
$expand->setSoapHeaderRequestServerVersion(new \Ews\StructType\EwsRequestServerVersion());
/**
 * Sample call for ExpandDL operation/method
 */
if ($expand->ExpandDL(new \Ews\StructType\EwsExpandDLType()) !== false) {
    print_r($expand->getResult());
} else {
    print_r($expand->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \Ews\ServiceType\EwsGet($options);
$get->setSoapHeaderMailboxCulture($MailboxCulture);
$get->setSoapHeaderRequestServerVersion(new \Ews\StructType\EwsRequestServerVersion());
$get->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$get->setSoapHeaderTimeZoneContext($TimeZoneContext);
$get->setSoapHeaderManagementRole($ManagementRole);
$get->setSoapHeaderDateTimePrecision($DateTimePrecision);
/**
 * Sample call for GetServerTimeZones operation/method
 */
if ($get->GetServerTimeZones(new \Ews\StructType\EwsGetServerTimeZonesType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetFolder operation/method
 */
if ($get->GetFolder(new \Ews\StructType\EwsGetFolderType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetEvents operation/method
 */
if ($get->GetEvents(new \Ews\StructType\EwsGetEventsType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetStreamingEvents operation/method
 */
if ($get->GetStreamingEvents(new \Ews\StructType\EwsGetStreamingEventsType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetItem operation/method
 */
if ($get->GetItem(new \Ews\StructType\EwsGetItemType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAttachment operation/method
 */
if ($get->GetAttachment(new \Ews\StructType\EwsGetAttachmentType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetClientAccessToken operation/method
 */
if ($get->GetClientAccessToken(new \Ews\StructType\EwsGetClientAccessTokenType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetDelegate operation/method
 */
if ($get->GetDelegate(new \Ews\StructType\EwsGetDelegateType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetUserConfiguration operation/method
 */
if ($get->GetUserConfiguration(new \Ews\StructType\EwsGetUserConfigurationType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetUserAvailability operation/method
 */
if ($get->GetUserAvailability(new \Ews\StructType\EwsGetUserAvailabilityRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetUserOofSettings operation/method
 */
if ($get->GetUserOofSettings(new \Ews\StructType\EwsGetUserOofSettingsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetServiceConfiguration operation/method
 */
if ($get->GetServiceConfiguration(new \Ews\StructType\EwsGetServiceConfigurationType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetMailTips operation/method
 */
if ($get->GetMailTips(new \Ews\StructType\EwsGetMailTipsType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetPhoneCallInformation operation/method
 */
if ($get->GetPhoneCallInformation(new \Ews\StructType\EwsGetPhoneCallInformationType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSharingMetadata operation/method
 */
if ($get->GetSharingMetadata(new \Ews\StructType\EwsGetSharingMetadataType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSharingFolder operation/method
 */
if ($get->GetSharingFolder(new \Ews\StructType\EwsGetSharingFolderType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetRoomLists operation/method
 */
if ($get->GetRoomLists(new \Ews\StructType\EwsGetRoomListsType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetRooms operation/method
 */
if ($get->GetRooms(new \Ews\StructType\EwsGetRoomsType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetMessageTrackingReport operation/method
 */
if ($get->GetMessageTrackingReport(new \Ews\StructType\EwsGetMessageTrackingReportRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetConversationItems operation/method
 */
if ($get->GetConversationItems(new \Ews\StructType\EwsGetConversationItemsType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetPersona operation/method
 */
if ($get->GetPersona(new \Ews\StructType\EwsGetPersonaType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetInboxRules operation/method
 */
if ($get->GetInboxRules(new \Ews\StructType\EwsGetInboxRulesRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetPasswordExpirationDate operation/method
 */
if ($get->GetPasswordExpirationDate(new \Ews\StructType\EwsGetPasswordExpirationDateType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetDiscoverySearchConfiguration operation/method
 */
if ($get->GetDiscoverySearchConfiguration(new \Ews\StructType\EwsGetDiscoverySearchConfigurationType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSearchableMailboxes operation/method
 */
if ($get->GetSearchableMailboxes(new \Ews\StructType\EwsGetSearchableMailboxesType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetHoldOnMailboxes operation/method
 */
if ($get->GetHoldOnMailboxes(new \Ews\StructType\EwsGetHoldOnMailboxesType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetNonIndexableItemStatistics operation/method
 */
if ($get->GetNonIndexableItemStatistics(new \Ews\StructType\EwsGetNonIndexableItemStatisticsType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetNonIndexableItemDetails operation/method
 */
if ($get->GetNonIndexableItemDetails(new \Ews\StructType\EwsGetNonIndexableItemDetailsType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAppManifests operation/method
 */
if ($get->GetAppManifests(new \Ews\StructType\EwsGetAppManifestsType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetImItemList operation/method
 */
if ($get->GetImItemList(new \Ews\StructType\EwsGetImItemListType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetImItems operation/method
 */
if ($get->GetImItems(new \Ews\StructType\EwsGetImItemsType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetUserRetentionPolicyTags operation/method
 */
if ($get->GetUserRetentionPolicyTags(new \Ews\StructType\EwsGetUserRetentionPolicyTagsType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAppMarketplaceUrl operation/method
 */
if ($get->GetAppMarketplaceUrl(new \Ews\StructType\EwsGetAppMarketplaceUrlType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetUserPhoto operation/method
 */
if ($get->GetUserPhoto(new \Ews\StructType\EwsGetUserPhotoType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Find ServiceType
 */
$find = new \Ews\ServiceType\EwsFind($options);
$find->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$find->setSoapHeaderMailboxCulture($MailboxCulture);
$find->setSoapHeaderRequestServerVersion(new \Ews\StructType\EwsRequestServerVersion());
$find->setSoapHeaderTimeZoneContext($TimeZoneContext);
$find->setSoapHeaderManagementRole($ManagementRole);
$find->setSoapHeaderDateTimePrecision($DateTimePrecision);
/**
 * Sample call for FindFolder operation/method
 */
if ($find->FindFolder(new \Ews\StructType\EwsFindFolderType()) !== false) {
    print_r($find->getResult());
} else {
    print_r($find->getLastError());
}
/**
 * Sample call for FindItem operation/method
 */
if ($find->FindItem(new \Ews\StructType\EwsFindItemType()) !== false) {
    print_r($find->getResult());
} else {
    print_r($find->getLastError());
}
/**
 * Sample call for FindMessageTrackingReport operation/method
 */
if ($find->FindMessageTrackingReport(new \Ews\StructType\EwsFindMessageTrackingReportRequestType()) !== false) {
    print_r($find->getResult());
} else {
    print_r($find->getLastError());
}
/**
 * Sample call for FindConversation operation/method
 */
if ($find->FindConversation(new \Ews\StructType\EwsFindConversationType()) !== false) {
    print_r($find->getResult());
} else {
    print_r($find->getLastError());
}
/**
 * Sample call for FindPeople operation/method
 */
if ($find->FindPeople(new \Ews\StructType\EwsFindPeopleType()) !== false) {
    print_r($find->getResult());
} else {
    print_r($find->getLastError());
}
/**
 * Sample call for FindAvailableMeetingTimes operation/method
 */
if ($find->FindAvailableMeetingTimes(new \Ews\StructType\EwsFindAvailableMeetingTimesType()) !== false) {
    print_r($find->getResult());
} else {
    print_r($find->getLastError());
}
/**
 * Sample call for FindMeetingTimeCandidates operation/method
 */
if ($find->FindMeetingTimeCandidates(new \Ews\StructType\EwsFindMeetingTimeCandidatesType()) !== false) {
    print_r($find->getResult());
} else {
    print_r($find->getLastError());
}
/**
 * Samples for Convert ServiceType
 */
$convert = new \Ews\ServiceType\EwsConvert($options);
$convert->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$convert->setSoapHeaderRequestServerVersion(new \Ews\StructType\EwsRequestServerVersion());
/**
 * Sample call for ConvertId operation/method
 */
if ($convert->ConvertId(new \Ews\StructType\EwsConvertIdType()) !== false) {
    print_r($convert->getResult());
} else {
    print_r($convert->getLastError());
}
/**
 * Samples for Upload ServiceType
 */
$upload = new \Ews\ServiceType\EwsUpload($options);
$upload->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$upload->setSoapHeaderMailboxCulture($MailboxCulture);
$upload->setSoapHeaderRequestServerVersion(new \Ews\StructType\EwsRequestServerVersion());
/**
 * Sample call for UploadItems operation/method
 */
if ($upload->UploadItems(new \Ews\StructType\EwsUploadItemsType()) !== false) {
    print_r($upload->getResult());
} else {
    print_r($upload->getLastError());
}
/**
 * Samples for Export ServiceType
 */
$export = new \Ews\ServiceType\EwsExport($options);
$export->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$export->setSoapHeaderMailboxCulture($MailboxCulture);
$export->setSoapHeaderRequestServerVersion(new \Ews\StructType\EwsRequestServerVersion());
$export->setSoapHeaderManagementRole($ManagementRole);
/**
 * Sample call for ExportItems operation/method
 */
if ($export->ExportItems(new \Ews\StructType\EwsExportItemsType()) !== false) {
    print_r($export->getResult());
} else {
    print_r($export->getLastError());
}
/**
 * Samples for Create ServiceType
 */
$create = new \Ews\ServiceType\EwsCreate($options);
$create->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$create->setSoapHeaderMailboxCulture($MailboxCulture);
$create->setSoapHeaderRequestServerVersion(new \Ews\StructType\EwsRequestServerVersion());
$create->setSoapHeaderTimeZoneContext($TimeZoneContext);
/**
 * Sample call for CreateFolderPath operation/method
 */
if ($create->CreateFolderPath(new \Ews\StructType\EwsCreateFolderPathType()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateFolder operation/method
 */
if ($create->CreateFolder(new \Ews\StructType\EwsCreateFolderType()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateItem operation/method
 */
if ($create->CreateItem(new \Ews\StructType\EwsCreateItemType()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateAttachment operation/method
 */
if ($create->CreateAttachment(new \Ews\StructType\EwsCreateAttachmentType()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateManagedFolder operation/method
 */
if ($create->CreateManagedFolder(new \Ews\StructType\EwsCreateManagedFolderRequestType()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateUserConfiguration operation/method
 */
if ($create->CreateUserConfiguration(new \Ews\StructType\EwsCreateUserConfigurationType()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Samples for Delete ServiceType
 */
$delete = new \Ews\ServiceType\EwsDelete($options);
$delete->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$delete->setSoapHeaderMailboxCulture($MailboxCulture);
$delete->setSoapHeaderRequestServerVersion(new \Ews\StructType\EwsRequestServerVersion());
/**
 * Sample call for DeleteFolder operation/method
 */
if ($delete->DeleteFolder(new \Ews\StructType\EwsDeleteFolderType()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteItem operation/method
 */
if ($delete->DeleteItem(new \Ews\StructType\EwsDeleteItemType()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteAttachment operation/method
 */
if ($delete->DeleteAttachment(new \Ews\StructType\EwsDeleteAttachmentType()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteUserConfiguration operation/method
 */
if ($delete->DeleteUserConfiguration(new \Ews\StructType\EwsDeleteUserConfigurationType()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Samples for Empty ServiceType
 */
$empty = new \Ews\ServiceType\EwsEmpty($options);
$empty->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$empty->setSoapHeaderMailboxCulture($MailboxCulture);
$empty->setSoapHeaderRequestServerVersion(new \Ews\StructType\EwsRequestServerVersion());
/**
 * Sample call for EmptyFolder operation/method
 */
if ($empty->EmptyFolder(new \Ews\StructType\EwsEmptyFolderType()) !== false) {
    print_r($empty->getResult());
} else {
    print_r($empty->getLastError());
}
/**
 * Samples for Update ServiceType
 */
$update = new \Ews\ServiceType\EwsUpdate($options);
$update->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$update->setSoapHeaderMailboxCulture($MailboxCulture);
$update->setSoapHeaderRequestServerVersion(new \Ews\StructType\EwsRequestServerVersion());
$update->setSoapHeaderTimeZoneContext($TimeZoneContext);
$update->setSoapHeaderManagementRole($ManagementRole);
/**
 * Sample call for UpdateFolder operation/method
 */
if ($update->UpdateFolder(new \Ews\StructType\EwsUpdateFolderType()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateItem operation/method
 */
if ($update->UpdateItem(new \Ews\StructType\EwsUpdateItemType()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateItemInRecoverableItems operation/method
 */
if ($update->UpdateItemInRecoverableItems(new \Ews\StructType\EwsUpdateItemInRecoverableItemsType()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateDelegate operation/method
 */
if ($update->UpdateDelegate(new \Ews\StructType\EwsUpdateDelegateType()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateUserConfiguration operation/method
 */
if ($update->UpdateUserConfiguration(new \Ews\StructType\EwsUpdateUserConfigurationType()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateInboxRules operation/method
 */
if ($update->UpdateInboxRules(new \Ews\StructType\EwsUpdateInboxRulesRequestType()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Samples for Move ServiceType
 */
$move = new \Ews\ServiceType\EwsMove($options);
$move->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$move->setSoapHeaderMailboxCulture($MailboxCulture);
$move->setSoapHeaderRequestServerVersion(new \Ews\StructType\EwsRequestServerVersion());
/**
 * Sample call for MoveFolder operation/method
 */
if ($move->MoveFolder(new \Ews\StructType\EwsMoveFolderType()) !== false) {
    print_r($move->getResult());
} else {
    print_r($move->getLastError());
}
/**
 * Sample call for MoveItem operation/method
 */
if ($move->MoveItem(new \Ews\StructType\EwsMoveItemType()) !== false) {
    print_r($move->getResult());
} else {
    print_r($move->getLastError());
}
/**
 * Samples for Copy ServiceType
 */
$copy = new \Ews\ServiceType\EwsCopy($options);
$copy->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$copy->setSoapHeaderMailboxCulture($MailboxCulture);
$copy->setSoapHeaderRequestServerVersion(new \Ews\StructType\EwsRequestServerVersion());
/**
 * Sample call for CopyFolder operation/method
 */
if ($copy->CopyFolder(new \Ews\StructType\EwsCopyFolderType()) !== false) {
    print_r($copy->getResult());
} else {
    print_r($copy->getLastError());
}
/**
 * Sample call for CopyItem operation/method
 */
if ($copy->CopyItem(new \Ews\StructType\EwsCopyItemType()) !== false) {
    print_r($copy->getResult());
} else {
    print_r($copy->getLastError());
}
/**
 * Samples for Subscribe ServiceType
 */
$subscribe = new \Ews\ServiceType\EwsSubscribe($options);
$subscribe->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$subscribe->setSoapHeaderMailboxCulture($MailboxCulture);
$subscribe->setSoapHeaderRequestServerVersion(new \Ews\StructType\EwsRequestServerVersion());
/**
 * Sample call for Subscribe operation/method
 */
if ($subscribe->Subscribe(new \Ews\StructType\EwsSubscribeType()) !== false) {
    print_r($subscribe->getResult());
} else {
    print_r($subscribe->getLastError());
}
/**
 * Samples for Unsubscribe ServiceType
 */
$unsubscribe = new \Ews\ServiceType\EwsUnsubscribe($options);
$unsubscribe->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$unsubscribe->setSoapHeaderMailboxCulture($MailboxCulture);
$unsubscribe->setSoapHeaderRequestServerVersion(new \Ews\StructType\EwsRequestServerVersion());
/**
 * Sample call for Unsubscribe operation/method
 */
if ($unsubscribe->Unsubscribe(new \Ews\StructType\EwsUnsubscribeType()) !== false) {
    print_r($unsubscribe->getResult());
} else {
    print_r($unsubscribe->getLastError());
}
/**
 * Samples for Sync ServiceType
 */
$sync = new \Ews\ServiceType\EwsSync($options);
$sync->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$sync->setSoapHeaderMailboxCulture($MailboxCulture);
$sync->setSoapHeaderRequestServerVersion(new \Ews\StructType\EwsRequestServerVersion());
/**
 * Sample call for SyncFolderHierarchy operation/method
 */
if ($sync->SyncFolderHierarchy(new \Ews\StructType\EwsSyncFolderHierarchyType()) !== false) {
    print_r($sync->getResult());
} else {
    print_r($sync->getLastError());
}
/**
 * Sample call for SyncFolderItems operation/method
 */
if ($sync->SyncFolderItems(new \Ews\StructType\EwsSyncFolderItemsType()) !== false) {
    print_r($sync->getResult());
} else {
    print_r($sync->getLastError());
}
/**
 * Samples for Send ServiceType
 */
$send = new \Ews\ServiceType\EwsSend($options);
$send->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$send->setSoapHeaderMailboxCulture($MailboxCulture);
$send->setSoapHeaderRequestServerVersion(new \Ews\StructType\EwsRequestServerVersion());
/**
 * Sample call for SendItem operation/method
 */
if ($send->SendItem(new \Ews\StructType\EwsSendItemType()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Samples for Archive ServiceType
 */
$archive = new \Ews\ServiceType\EwsArchive($options);
$archive->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$archive->setSoapHeaderMailboxCulture($MailboxCulture);
$archive->setSoapHeaderRequestServerVersion(new \Ews\StructType\EwsRequestServerVersion());
/**
 * Sample call for ArchiveItem operation/method
 */
if ($archive->ArchiveItem(new \Ews\StructType\EwsArchiveItemType()) !== false) {
    print_r($archive->getResult());
} else {
    print_r($archive->getLastError());
}
/**
 * Samples for Add ServiceType
 */
$add = new \Ews\ServiceType\EwsAdd($options);
$add->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$add->setSoapHeaderMailboxCulture($MailboxCulture);
$add->setSoapHeaderRequestServerVersion(new \Ews\StructType\EwsRequestServerVersion());
/**
 * Sample call for AddDelegate operation/method
 */
if ($add->AddDelegate(new \Ews\StructType\EwsAddDelegateType()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddNewImContactToGroup operation/method
 */
if ($add->AddNewImContactToGroup(new \Ews\StructType\EwsAddNewImContactToGroupType()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddNewTelUriContactToGroup operation/method
 */
if ($add->AddNewTelUriContactToGroup(new \Ews\StructType\EwsAddNewTelUriContactToGroupType()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddImContactToGroup operation/method
 */
if ($add->AddImContactToGroup(new \Ews\StructType\EwsAddImContactToGroupType()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddImGroup operation/method
 */
if ($add->AddImGroup(new \Ews\StructType\EwsAddImGroupType()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddDistributionGroupToImList operation/method
 */
if ($add->AddDistributionGroupToImList(new \Ews\StructType\EwsAddDistributionGroupToImListType()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Samples for Remove ServiceType
 */
$remove = new \Ews\ServiceType\EwsRemove($options);
$remove->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$remove->setSoapHeaderMailboxCulture($MailboxCulture);
$remove->setSoapHeaderRequestServerVersion(new \Ews\StructType\EwsRequestServerVersion());
/**
 * Sample call for RemoveDelegate operation/method
 */
if ($remove->RemoveDelegate(new \Ews\StructType\EwsRemoveDelegateType()) !== false) {
    print_r($remove->getResult());
} else {
    print_r($remove->getLastError());
}
/**
 * Sample call for RemoveImContactFromGroup operation/method
 */
if ($remove->RemoveImContactFromGroup(new \Ews\StructType\EwsRemoveImContactFromGroupType()) !== false) {
    print_r($remove->getResult());
} else {
    print_r($remove->getLastError());
}
/**
 * Sample call for RemoveContactFromImList operation/method
 */
if ($remove->RemoveContactFromImList(new \Ews\StructType\EwsRemoveContactFromImListType()) !== false) {
    print_r($remove->getResult());
} else {
    print_r($remove->getLastError());
}
/**
 * Sample call for RemoveDistributionGroupFromImList operation/method
 */
if ($remove->RemoveDistributionGroupFromImList(new \Ews\StructType\EwsRemoveDistributionGroupFromImListType()) !== false) {
    print_r($remove->getResult());
} else {
    print_r($remove->getLastError());
}
/**
 * Sample call for RemoveImGroup operation/method
 */
if ($remove->RemoveImGroup(new \Ews\StructType\EwsRemoveImGroupType()) !== false) {
    print_r($remove->getResult());
} else {
    print_r($remove->getLastError());
}
/**
 * Samples for Set ServiceType
 */
$set = new \Ews\ServiceType\EwsSet($options);
$set->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$set->setSoapHeaderRequestServerVersion(new \Ews\StructType\EwsRequestServerVersion());
$set->setSoapHeaderManagementRole($ManagementRole);
$set->setSoapHeaderMailboxCulture($MailboxCulture);
/**
 * Sample call for SetUserOofSettings operation/method
 */
if ($set->SetUserOofSettings(new \Ews\StructType\EwsSetUserOofSettingsRequest()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetTeamMailbox operation/method
 */
if ($set->SetTeamMailbox(new \Ews\StructType\EwsSetTeamMailboxRequestType()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetHoldOnMailboxes operation/method
 */
if ($set->SetHoldOnMailboxes(new \Ews\StructType\EwsSetHoldOnMailboxesType()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetImGroup operation/method
 */
if ($set->SetImGroup(new \Ews\StructType\EwsSetImGroupType()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetImListMigrationCompleted operation/method
 */
if ($set->SetImListMigrationCompleted(new \Ews\StructType\EwsSetImListMigrationCompletedType()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetUserPhoto operation/method
 */
if ($set->SetUserPhoto(new \Ews\StructType\EwsSetUserPhotoType()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Samples for Play ServiceType
 */
$play = new \Ews\ServiceType\EwsPlay($options);
$play->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$play->setSoapHeaderMailboxCulture($MailboxCulture);
$play->setSoapHeaderRequestServerVersion(new \Ews\StructType\EwsRequestServerVersion());
/**
 * Sample call for PlayOnPhone operation/method
 */
if ($play->PlayOnPhone(new \Ews\StructType\EwsPlayOnPhoneType()) !== false) {
    print_r($play->getResult());
} else {
    print_r($play->getLastError());
}
/**
 * Samples for Disconnect ServiceType
 */
$disconnect = new \Ews\ServiceType\EwsDisconnect($options);
$disconnect->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$disconnect->setSoapHeaderMailboxCulture($MailboxCulture);
$disconnect->setSoapHeaderRequestServerVersion(new \Ews\StructType\EwsRequestServerVersion());
/**
 * Sample call for DisconnectPhoneCall operation/method
 */
if ($disconnect->DisconnectPhoneCall(new \Ews\StructType\EwsDisconnectPhoneCallType()) !== false) {
    print_r($disconnect->getResult());
} else {
    print_r($disconnect->getLastError());
}
/**
 * Samples for Refresh ServiceType
 */
$refresh = new \Ews\ServiceType\EwsRefresh($options);
$refresh->setSoapHeaderRequestServerVersion(new \Ews\StructType\EwsRequestServerVersion());
/**
 * Sample call for RefreshSharingFolder operation/method
 */
if ($refresh->RefreshSharingFolder(new \Ews\StructType\EwsRefreshSharingFolderType()) !== false) {
    print_r($refresh->getResult());
} else {
    print_r($refresh->getLastError());
}
/**
 * Samples for Unpin ServiceType
 */
$unpin = new \Ews\ServiceType\EwsUnpin($options);
$unpin->setSoapHeaderRequestServerVersion(new \Ews\StructType\EwsRequestServerVersion());
/**
 * Sample call for UnpinTeamMailbox operation/method
 */
if ($unpin->UnpinTeamMailbox(new \Ews\StructType\EwsUnpinTeamMailboxRequestType()) !== false) {
    print_r($unpin->getResult());
} else {
    print_r($unpin->getLastError());
}
/**
 * Samples for Apply ServiceType
 */
$apply = new \Ews\ServiceType\EwsApply($options);
$apply->setSoapHeaderRequestServerVersion(new \Ews\StructType\EwsRequestServerVersion());
$apply->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
/**
 * Sample call for ApplyConversationAction operation/method
 */
if ($apply->ApplyConversationAction(new \Ews\StructType\EwsApplyConversationActionType()) !== false) {
    print_r($apply->getResult());
} else {
    print_r($apply->getLastError());
}
/**
 * Samples for Search ServiceType
 */
$search = new \Ews\ServiceType\EwsSearch($options);
$search->setSoapHeaderRequestServerVersion(new \Ews\StructType\EwsRequestServerVersion());
$search->setSoapHeaderManagementRole($ManagementRole);
/**
 * Sample call for SearchMailboxes operation/method
 */
if ($search->SearchMailboxes(new \Ews\StructType\EwsSearchMailboxesType()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Samples for Mark ServiceType
 */
$mark = new \Ews\ServiceType\EwsMark($options);
$mark->setSoapHeaderExchangeImpersonation($ExchangeImpersonation);
$mark->setSoapHeaderMailboxCulture($MailboxCulture);
$mark->setSoapHeaderRequestServerVersion(new \Ews\StructType\EwsRequestServerVersion());
/**
 * Sample call for MarkAllItemsAsRead operation/method
 */
if ($mark->MarkAllItemsAsRead(new \Ews\StructType\EwsMarkAllItemsAsReadType()) !== false) {
    print_r($mark->getResult());
} else {
    print_r($mark->getLastError());
}
/**
 * Sample call for MarkAsJunk operation/method
 */
if ($mark->MarkAsJunk(new \Ews\StructType\EwsMarkAsJunkType()) !== false) {
    print_r($mark->getResult());
} else {
    print_r($mark->getLastError());
}
/**
 * Samples for Disable ServiceType
 */
$disable = new \Ews\ServiceType\EwsDisable($options);
$disable->setSoapHeaderRequestServerVersion(new \Ews\StructType\EwsRequestServerVersion());
/**
 * Sample call for DisableApp operation/method
 */
if ($disable->DisableApp(new \Ews\StructType\EwsDisableAppType()) !== false) {
    print_r($disable->getResult());
} else {
    print_r($disable->getLastError());
}
/**
 * Samples for Install ServiceType
 */
$install = new \Ews\ServiceType\EwsInstall($options);
$install->setSoapHeaderRequestServerVersion(new \Ews\StructType\EwsRequestServerVersion());
/**
 * Sample call for InstallApp operation/method
 */
if ($install->InstallApp(new \Ews\StructType\EwsInstallAppType()) !== false) {
    print_r($install->getResult());
} else {
    print_r($install->getLastError());
}
/**
 * Samples for Uninstall ServiceType
 */
$uninstall = new \Ews\ServiceType\EwsUninstall($options);
$uninstall->setSoapHeaderRequestServerVersion(new \Ews\StructType\EwsRequestServerVersion());
/**
 * Sample call for UninstallApp operation/method
 */
if ($uninstall->UninstallApp(new \Ews\StructType\EwsUninstallAppType()) !== false) {
    print_r($uninstall->getResult());
} else {
    print_r($uninstall->getLastError());
}
