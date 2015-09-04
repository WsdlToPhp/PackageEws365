<?php

namespace Ews\EnumType;

/**
 * This class stands for ElcFolderType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsElcFolderType
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
    const VALUE_DELETEDITEMS = 'DeletedItems';
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
    const VALUE_JUNKEMAIL = 'JunkEmail';
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
    const VALUE_SENTITEMS = 'SentItems';
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
    const VALUE_MANAGEDCUSTOMFOLDER = 'ManagedCustomFolder';
    /**
     * Constant for value 'RssSubscriptions'
     * @return string 'RssSubscriptions'
     */
    const VALUE_RSSSUBSCRIPTIONS = 'RssSubscriptions';
    /**
     * Constant for value 'SyncIssues'
     * @return string 'SyncIssues'
     */
    const VALUE_SYNCISSUES = 'SyncIssues';
    /**
     * Constant for value 'ConversationHistory'
     * @return string 'ConversationHistory'
     */
    const VALUE_CONVERSATIONHISTORY = 'ConversationHistory';
    /**
     * Constant for value 'Personal'
     * @return string 'Personal'
     */
    const VALUE_PERSONAL = 'Personal';
    /**
     * Constant for value 'RecoverableItems'
     * @return string 'RecoverableItems'
     */
    const VALUE_RECOVERABLEITEMS = 'RecoverableItems';
    /**
     * Constant for value 'NonIpmRoot'
     * @return string 'NonIpmRoot'
     */
    const VALUE_NONIPMROOT = 'NonIpmRoot';
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
     * @uses self::VALUE_CALENDAR
     * @uses self::VALUE_CONTACTS
     * @uses self::VALUE_DELETEDITEMS
     * @uses self::VALUE_DRAFTS
     * @uses self::VALUE_INBOX
     * @uses self::VALUE_JUNKEMAIL
     * @uses self::VALUE_JOURNAL
     * @uses self::VALUE_NOTES
     * @uses self::VALUE_OUTBOX
     * @uses self::VALUE_SENTITEMS
     * @uses self::VALUE_TASKS
     * @uses self::VALUE_ALL
     * @uses self::VALUE_MANAGEDCUSTOMFOLDER
     * @uses self::VALUE_RSSSUBSCRIPTIONS
     * @uses self::VALUE_SYNCISSUES
     * @uses self::VALUE_CONVERSATIONHISTORY
     * @uses self::VALUE_PERSONAL
     * @uses self::VALUE_RECOVERABLEITEMS
     * @uses self::VALUE_NONIPMROOT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CALENDAR,
            self::VALUE_CONTACTS,
            self::VALUE_DELETEDITEMS,
            self::VALUE_DRAFTS,
            self::VALUE_INBOX,
            self::VALUE_JUNKEMAIL,
            self::VALUE_JOURNAL,
            self::VALUE_NOTES,
            self::VALUE_OUTBOX,
            self::VALUE_SENTITEMS,
            self::VALUE_TASKS,
            self::VALUE_ALL,
            self::VALUE_MANAGEDCUSTOMFOLDER,
            self::VALUE_RSSSUBSCRIPTIONS,
            self::VALUE_SYNCISSUES,
            self::VALUE_CONVERSATIONHISTORY,
            self::VALUE_PERSONAL,
            self::VALUE_RECOVERABLEITEMS,
            self::VALUE_NONIPMROOT,
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
