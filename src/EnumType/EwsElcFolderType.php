<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ElcFolderType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsElcFolderType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Calendar'
     * @return string 'Calendar'
     */
    const VALUE_CALENDAR = 'Calendar';
    /**
     * Constant for value 'Contacts'
     * @return string 'Contacts'
     */
    const VALUE_CONTACTS = 'Contacts';
    /**
     * Constant for value 'DeletedItems'
     * @return string 'DeletedItems'
     */
    const VALUE_DELETED_ITEMS = 'DeletedItems';
    /**
     * Constant for value 'Drafts'
     * @return string 'Drafts'
     */
    const VALUE_DRAFTS = 'Drafts';
    /**
     * Constant for value 'Inbox'
     * @return string 'Inbox'
     */
    const VALUE_INBOX = 'Inbox';
    /**
     * Constant for value 'JunkEmail'
     * @return string 'JunkEmail'
     */
    const VALUE_JUNK_EMAIL = 'JunkEmail';
    /**
     * Constant for value 'Journal'
     * @return string 'Journal'
     */
    const VALUE_JOURNAL = 'Journal';
    /**
     * Constant for value 'Notes'
     * @return string 'Notes'
     */
    const VALUE_NOTES = 'Notes';
    /**
     * Constant for value 'Outbox'
     * @return string 'Outbox'
     */
    const VALUE_OUTBOX = 'Outbox';
    /**
     * Constant for value 'SentItems'
     * @return string 'SentItems'
     */
    const VALUE_SENT_ITEMS = 'SentItems';
    /**
     * Constant for value 'Tasks'
     * @return string 'Tasks'
     */
    const VALUE_TASKS = 'Tasks';
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Constant for value 'ManagedCustomFolder'
     * @return string 'ManagedCustomFolder'
     */
    const VALUE_MANAGED_CUSTOM_FOLDER = 'ManagedCustomFolder';
    /**
     * Constant for value 'RssSubscriptions'
     * @return string 'RssSubscriptions'
     */
    const VALUE_RSS_SUBSCRIPTIONS = 'RssSubscriptions';
    /**
     * Constant for value 'SyncIssues'
     * @return string 'SyncIssues'
     */
    const VALUE_SYNC_ISSUES = 'SyncIssues';
    /**
     * Constant for value 'ConversationHistory'
     * @return string 'ConversationHistory'
     */
    const VALUE_CONVERSATION_HISTORY = 'ConversationHistory';
    /**
     * Constant for value 'Personal'
     * @return string 'Personal'
     */
    const VALUE_PERSONAL = 'Personal';
    /**
     * Constant for value 'RecoverableItems'
     * @return string 'RecoverableItems'
     */
    const VALUE_RECOVERABLE_ITEMS = 'RecoverableItems';
    /**
     * Constant for value 'NonIpmRoot'
     * @return string 'NonIpmRoot'
     */
    const VALUE_NON_IPM_ROOT = 'NonIpmRoot';
    /**
     * Return allowed values
     * @uses self::VALUE_CALENDAR
     * @uses self::VALUE_CONTACTS
     * @uses self::VALUE_DELETED_ITEMS
     * @uses self::VALUE_DRAFTS
     * @uses self::VALUE_INBOX
     * @uses self::VALUE_JUNK_EMAIL
     * @uses self::VALUE_JOURNAL
     * @uses self::VALUE_NOTES
     * @uses self::VALUE_OUTBOX
     * @uses self::VALUE_SENT_ITEMS
     * @uses self::VALUE_TASKS
     * @uses self::VALUE_ALL
     * @uses self::VALUE_MANAGED_CUSTOM_FOLDER
     * @uses self::VALUE_RSS_SUBSCRIPTIONS
     * @uses self::VALUE_SYNC_ISSUES
     * @uses self::VALUE_CONVERSATION_HISTORY
     * @uses self::VALUE_PERSONAL
     * @uses self::VALUE_RECOVERABLE_ITEMS
     * @uses self::VALUE_NON_IPM_ROOT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CALENDAR,
            self::VALUE_CONTACTS,
            self::VALUE_DELETED_ITEMS,
            self::VALUE_DRAFTS,
            self::VALUE_INBOX,
            self::VALUE_JUNK_EMAIL,
            self::VALUE_JOURNAL,
            self::VALUE_NOTES,
            self::VALUE_OUTBOX,
            self::VALUE_SENT_ITEMS,
            self::VALUE_TASKS,
            self::VALUE_ALL,
            self::VALUE_MANAGED_CUSTOM_FOLDER,
            self::VALUE_RSS_SUBSCRIPTIONS,
            self::VALUE_SYNC_ISSUES,
            self::VALUE_CONVERSATION_HISTORY,
            self::VALUE_PERSONAL,
            self::VALUE_RECOVERABLE_ITEMS,
            self::VALUE_NON_IPM_ROOT,
        );
    }
}
