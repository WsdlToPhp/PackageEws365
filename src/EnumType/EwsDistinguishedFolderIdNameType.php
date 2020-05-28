<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DistinguishedFolderIdNameType EnumType
 * Meta information extracted from the WSDL
 * - documentation: URIs for the distinguished folders accessible from a mailbox
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDistinguishedFolderIdNameType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'calendar'
     * @return string 'calendar'
     */
    const VALUE_CALENDAR = 'calendar';
    /**
     * Constant for value 'contacts'
     * @return string 'contacts'
     */
    const VALUE_CONTACTS = 'contacts';
    /**
     * Constant for value 'deleteditems'
     * @return string 'deleteditems'
     */
    const VALUE_DELETEDITEMS = 'deleteditems';
    /**
     * Constant for value 'drafts'
     * @return string 'drafts'
     */
    const VALUE_DRAFTS = 'drafts';
    /**
     * Constant for value 'inbox'
     * @return string 'inbox'
     */
    const VALUE_INBOX = 'inbox';
    /**
     * Constant for value 'journal'
     * @return string 'journal'
     */
    const VALUE_JOURNAL = 'journal';
    /**
     * Constant for value 'notes'
     * @return string 'notes'
     */
    const VALUE_NOTES = 'notes';
    /**
     * Constant for value 'outbox'
     * @return string 'outbox'
     */
    const VALUE_OUTBOX = 'outbox';
    /**
     * Constant for value 'sentitems'
     * @return string 'sentitems'
     */
    const VALUE_SENTITEMS = 'sentitems';
    /**
     * Constant for value 'tasks'
     * @return string 'tasks'
     */
    const VALUE_TASKS = 'tasks';
    /**
     * Constant for value 'msgfolderroot'
     * @return string 'msgfolderroot'
     */
    const VALUE_MSGFOLDERROOT = 'msgfolderroot';
    /**
     * Constant for value 'publicfoldersroot'
     * @return string 'publicfoldersroot'
     */
    const VALUE_PUBLICFOLDERSROOT = 'publicfoldersroot';
    /**
     * Constant for value 'root'
     * @return string 'root'
     */
    const VALUE_ROOT = 'root';
    /**
     * Constant for value 'junkemail'
     * @return string 'junkemail'
     */
    const VALUE_JUNKEMAIL = 'junkemail';
    /**
     * Constant for value 'searchfolders'
     * @return string 'searchfolders'
     */
    const VALUE_SEARCHFOLDERS = 'searchfolders';
    /**
     * Constant for value 'voicemail'
     * @return string 'voicemail'
     */
    const VALUE_VOICEMAIL = 'voicemail';
    /**
     * Constant for value 'recoverableitemsroot'
     * @return string 'recoverableitemsroot'
     */
    const VALUE_RECOVERABLEITEMSROOT = 'recoverableitemsroot';
    /**
     * Constant for value 'recoverableitemsdeletions'
     * @return string 'recoverableitemsdeletions'
     */
    const VALUE_RECOVERABLEITEMSDELETIONS = 'recoverableitemsdeletions';
    /**
     * Constant for value 'recoverableitemsversions'
     * @return string 'recoverableitemsversions'
     */
    const VALUE_RECOVERABLEITEMSVERSIONS = 'recoverableitemsversions';
    /**
     * Constant for value 'recoverableitemspurges'
     * @return string 'recoverableitemspurges'
     */
    const VALUE_RECOVERABLEITEMSPURGES = 'recoverableitemspurges';
    /**
     * Constant for value 'recoverableitemsdiscoveryholds'
     * @return string 'recoverableitemsdiscoveryholds'
     */
    const VALUE_RECOVERABLEITEMSDISCOVERYHOLDS = 'recoverableitemsdiscoveryholds';
    /**
     * Constant for value 'archiveroot'
     * @return string 'archiveroot'
     */
    const VALUE_ARCHIVEROOT = 'archiveroot';
    /**
     * Constant for value 'archivemsgfolderroot'
     * @return string 'archivemsgfolderroot'
     */
    const VALUE_ARCHIVEMSGFOLDERROOT = 'archivemsgfolderroot';
    /**
     * Constant for value 'archivedeleteditems'
     * @return string 'archivedeleteditems'
     */
    const VALUE_ARCHIVEDELETEDITEMS = 'archivedeleteditems';
    /**
     * Constant for value 'archiveinbox'
     * @return string 'archiveinbox'
     */
    const VALUE_ARCHIVEINBOX = 'archiveinbox';
    /**
     * Constant for value 'archiverecoverableitemsroot'
     * @return string 'archiverecoverableitemsroot'
     */
    const VALUE_ARCHIVERECOVERABLEITEMSROOT = 'archiverecoverableitemsroot';
    /**
     * Constant for value 'archiverecoverableitemsdeletions'
     * @return string 'archiverecoverableitemsdeletions'
     */
    const VALUE_ARCHIVERECOVERABLEITEMSDELETIONS = 'archiverecoverableitemsdeletions';
    /**
     * Constant for value 'archiverecoverableitemsversions'
     * @return string 'archiverecoverableitemsversions'
     */
    const VALUE_ARCHIVERECOVERABLEITEMSVERSIONS = 'archiverecoverableitemsversions';
    /**
     * Constant for value 'archiverecoverableitemspurges'
     * @return string 'archiverecoverableitemspurges'
     */
    const VALUE_ARCHIVERECOVERABLEITEMSPURGES = 'archiverecoverableitemspurges';
    /**
     * Constant for value 'archiverecoverableitemsdiscoveryholds'
     * @return string 'archiverecoverableitemsdiscoveryholds'
     */
    const VALUE_ARCHIVERECOVERABLEITEMSDISCOVERYHOLDS = 'archiverecoverableitemsdiscoveryholds';
    /**
     * Constant for value 'syncissues'
     * @return string 'syncissues'
     */
    const VALUE_SYNCISSUES = 'syncissues';
    /**
     * Constant for value 'conflicts'
     * @return string 'conflicts'
     */
    const VALUE_CONFLICTS = 'conflicts';
    /**
     * Constant for value 'localfailures'
     * @return string 'localfailures'
     */
    const VALUE_LOCALFAILURES = 'localfailures';
    /**
     * Constant for value 'serverfailures'
     * @return string 'serverfailures'
     */
    const VALUE_SERVERFAILURES = 'serverfailures';
    /**
     * Constant for value 'recipientcache'
     * @return string 'recipientcache'
     */
    const VALUE_RECIPIENTCACHE = 'recipientcache';
    /**
     * Constant for value 'quickcontacts'
     * @return string 'quickcontacts'
     */
    const VALUE_QUICKCONTACTS = 'quickcontacts';
    /**
     * Constant for value 'conversationhistory'
     * @return string 'conversationhistory'
     */
    const VALUE_CONVERSATIONHISTORY = 'conversationhistory';
    /**
     * Constant for value 'adminauditlogs'
     * @return string 'adminauditlogs'
     */
    const VALUE_ADMINAUDITLOGS = 'adminauditlogs';
    /**
     * Constant for value 'todosearch'
     * @return string 'todosearch'
     */
    const VALUE_TODOSEARCH = 'todosearch';
    /**
     * Constant for value 'mycontacts'
     * @return string 'mycontacts'
     */
    const VALUE_MYCONTACTS = 'mycontacts';
    /**
     * Constant for value 'directory'
     * @return string 'directory'
     */
    const VALUE_DIRECTORY = 'directory';
    /**
     * Constant for value 'imcontactlist'
     * @return string 'imcontactlist'
     */
    const VALUE_IMCONTACTLIST = 'imcontactlist';
    /**
     * Constant for value 'peopleconnect'
     * @return string 'peopleconnect'
     */
    const VALUE_PEOPLECONNECT = 'peopleconnect';
    /**
     * Constant for value 'favorites'
     * @return string 'favorites'
     */
    const VALUE_FAVORITES = 'favorites';
    /**
     * Constant for value 'mecontact'
     * @return string 'mecontact'
     */
    const VALUE_MECONTACT = 'mecontact';
    /**
     * Constant for value 'personmetadata'
     * @return string 'personmetadata'
     */
    const VALUE_PERSONMETADATA = 'personmetadata';
    /**
     * Return allowed values
     * @uses self::VALUE_CALENDAR
     * @uses self::VALUE_CONTACTS
     * @uses self::VALUE_DELETEDITEMS
     * @uses self::VALUE_DRAFTS
     * @uses self::VALUE_INBOX
     * @uses self::VALUE_JOURNAL
     * @uses self::VALUE_NOTES
     * @uses self::VALUE_OUTBOX
     * @uses self::VALUE_SENTITEMS
     * @uses self::VALUE_TASKS
     * @uses self::VALUE_MSGFOLDERROOT
     * @uses self::VALUE_PUBLICFOLDERSROOT
     * @uses self::VALUE_ROOT
     * @uses self::VALUE_JUNKEMAIL
     * @uses self::VALUE_SEARCHFOLDERS
     * @uses self::VALUE_VOICEMAIL
     * @uses self::VALUE_RECOVERABLEITEMSROOT
     * @uses self::VALUE_RECOVERABLEITEMSDELETIONS
     * @uses self::VALUE_RECOVERABLEITEMSVERSIONS
     * @uses self::VALUE_RECOVERABLEITEMSPURGES
     * @uses self::VALUE_RECOVERABLEITEMSDISCOVERYHOLDS
     * @uses self::VALUE_ARCHIVEROOT
     * @uses self::VALUE_ARCHIVEMSGFOLDERROOT
     * @uses self::VALUE_ARCHIVEDELETEDITEMS
     * @uses self::VALUE_ARCHIVEINBOX
     * @uses self::VALUE_ARCHIVERECOVERABLEITEMSROOT
     * @uses self::VALUE_ARCHIVERECOVERABLEITEMSDELETIONS
     * @uses self::VALUE_ARCHIVERECOVERABLEITEMSVERSIONS
     * @uses self::VALUE_ARCHIVERECOVERABLEITEMSPURGES
     * @uses self::VALUE_ARCHIVERECOVERABLEITEMSDISCOVERYHOLDS
     * @uses self::VALUE_SYNCISSUES
     * @uses self::VALUE_CONFLICTS
     * @uses self::VALUE_LOCALFAILURES
     * @uses self::VALUE_SERVERFAILURES
     * @uses self::VALUE_RECIPIENTCACHE
     * @uses self::VALUE_QUICKCONTACTS
     * @uses self::VALUE_CONVERSATIONHISTORY
     * @uses self::VALUE_ADMINAUDITLOGS
     * @uses self::VALUE_TODOSEARCH
     * @uses self::VALUE_MYCONTACTS
     * @uses self::VALUE_DIRECTORY
     * @uses self::VALUE_IMCONTACTLIST
     * @uses self::VALUE_PEOPLECONNECT
     * @uses self::VALUE_FAVORITES
     * @uses self::VALUE_MECONTACT
     * @uses self::VALUE_PERSONMETADATA
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
            self::VALUE_JOURNAL,
            self::VALUE_NOTES,
            self::VALUE_OUTBOX,
            self::VALUE_SENTITEMS,
            self::VALUE_TASKS,
            self::VALUE_MSGFOLDERROOT,
            self::VALUE_PUBLICFOLDERSROOT,
            self::VALUE_ROOT,
            self::VALUE_JUNKEMAIL,
            self::VALUE_SEARCHFOLDERS,
            self::VALUE_VOICEMAIL,
            self::VALUE_RECOVERABLEITEMSROOT,
            self::VALUE_RECOVERABLEITEMSDELETIONS,
            self::VALUE_RECOVERABLEITEMSVERSIONS,
            self::VALUE_RECOVERABLEITEMSPURGES,
            self::VALUE_RECOVERABLEITEMSDISCOVERYHOLDS,
            self::VALUE_ARCHIVEROOT,
            self::VALUE_ARCHIVEMSGFOLDERROOT,
            self::VALUE_ARCHIVEDELETEDITEMS,
            self::VALUE_ARCHIVEINBOX,
            self::VALUE_ARCHIVERECOVERABLEITEMSROOT,
            self::VALUE_ARCHIVERECOVERABLEITEMSDELETIONS,
            self::VALUE_ARCHIVERECOVERABLEITEMSVERSIONS,
            self::VALUE_ARCHIVERECOVERABLEITEMSPURGES,
            self::VALUE_ARCHIVERECOVERABLEITEMSDISCOVERYHOLDS,
            self::VALUE_SYNCISSUES,
            self::VALUE_CONFLICTS,
            self::VALUE_LOCALFAILURES,
            self::VALUE_SERVERFAILURES,
            self::VALUE_RECIPIENTCACHE,
            self::VALUE_QUICKCONTACTS,
            self::VALUE_CONVERSATIONHISTORY,
            self::VALUE_ADMINAUDITLOGS,
            self::VALUE_TODOSEARCH,
            self::VALUE_MYCONTACTS,
            self::VALUE_DIRECTORY,
            self::VALUE_IMCONTACTLIST,
            self::VALUE_PEOPLECONNECT,
            self::VALUE_FAVORITES,
            self::VALUE_MECONTACT,
            self::VALUE_PERSONMETADATA,
        );
    }
}
