<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsNonEmptyArrayOfFolderNamesType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfFolderNamesType $FolderNames = null;
    /**
     * The Mailbox
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsEmailAddressType|null
     */
    protected ?\StructType\EwsEmailAddressType $Mailbox = null;
    /**
     * Constructor method for CreateManagedFolderRequestType
     * @uses EwsCreateManagedFolderRequestType::setFolderNames()
     * @uses EwsCreateManagedFolderRequestType::setMailbox()
     * @param \ArrayType\EwsNonEmptyArrayOfFolderNamesType $folderNames
     * @param \StructType\EwsEmailAddressType $mailbox
     */
    public function __construct(?\ArrayType\EwsNonEmptyArrayOfFolderNamesType $folderNames = null, ?\StructType\EwsEmailAddressType $mailbox = null)
    {
        $this
            ->setFolderNames($folderNames)
            ->setMailbox($mailbox);
    }
    /**
     * Get FolderNames value
     * @return \ArrayType\EwsNonEmptyArrayOfFolderNamesType|null
     */
    public function getFolderNames(): ?\ArrayType\EwsNonEmptyArrayOfFolderNamesType
    {
        return $this->FolderNames;
    }
    /**
     * Set FolderNames value
     * @param \ArrayType\EwsNonEmptyArrayOfFolderNamesType $folderNames
     * @return \StructType\EwsCreateManagedFolderRequestType
     */
    public function setFolderNames(?\ArrayType\EwsNonEmptyArrayOfFolderNamesType $folderNames = null): self
    {
        $this->FolderNames = $folderNames;
        
        return $this;
    }
    /**
     * Get Mailbox value
     * @return \StructType\EwsEmailAddressType|null
     */
    public function getMailbox(): ?\StructType\EwsEmailAddressType
    {
        return $this->Mailbox;
    }
    /**
     * Set Mailbox value
     * @param \StructType\EwsEmailAddressType $mailbox
     * @return \StructType\EwsCreateManagedFolderRequestType
     */
    public function setMailbox(?\StructType\EwsEmailAddressType $mailbox = null): self
    {
        $this->Mailbox = $mailbox;
        
        return $this;
    }
}
