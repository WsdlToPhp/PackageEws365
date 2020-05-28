<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateManagedFolderRequestType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCreateManagedFolderRequestType extends EwsBaseRequestType
{
    /**
     * The FolderNames
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfFolderNamesType
     */
    public $FolderNames;
    /**
     * The Mailbox
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsEmailAddressType
     */
    public $Mailbox;
    /**
     * Constructor method for CreateManagedFolderRequestType
     * @uses EwsCreateManagedFolderRequestType::setFolderNames()
     * @uses EwsCreateManagedFolderRequestType::setMailbox()
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfFolderNamesType $folderNames
     * @param \Ews\StructType\EwsEmailAddressType $mailbox
     */
    public function __construct(\Ews\ArrayType\EwsNonEmptyArrayOfFolderNamesType $folderNames = null, \Ews\StructType\EwsEmailAddressType $mailbox = null)
    {
        $this
            ->setFolderNames($folderNames)
            ->setMailbox($mailbox);
    }
    /**
     * Get FolderNames value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfFolderNamesType|null
     */
    public function getFolderNames()
    {
        return $this->FolderNames;
    }
    /**
     * Set FolderNames value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfFolderNamesType $folderNames
     * @return \Ews\StructType\EwsCreateManagedFolderRequestType
     */
    public function setFolderNames(\Ews\ArrayType\EwsNonEmptyArrayOfFolderNamesType $folderNames = null)
    {
        $this->FolderNames = $folderNames;
        return $this;
    }
    /**
     * Get Mailbox value
     * @return \Ews\StructType\EwsEmailAddressType|null
     */
    public function getMailbox()
    {
        return $this->Mailbox;
    }
    /**
     * Set Mailbox value
     * @param \Ews\StructType\EwsEmailAddressType $mailbox
     * @return \Ews\StructType\EwsCreateManagedFolderRequestType
     */
    public function setMailbox(\Ews\StructType\EwsEmailAddressType $mailbox = null)
    {
        $this->Mailbox = $mailbox;
        return $this;
    }
}
