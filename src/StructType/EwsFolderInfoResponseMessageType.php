<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FolderInfoResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFolderInfoResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Folders
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsArrayOfFoldersType|null
     */
    protected ?\StructType\EwsArrayOfFoldersType $Folders = null;
    /**
     * Constructor method for FolderInfoResponseMessageType
     * @uses EwsFolderInfoResponseMessageType::setFolders()
     * @param \StructType\EwsArrayOfFoldersType $folders
     */
    public function __construct(?\StructType\EwsArrayOfFoldersType $folders = null)
    {
        $this
            ->setFolders($folders);
    }
    /**
     * Get Folders value
     * @return \StructType\EwsArrayOfFoldersType|null
     */
    public function getFolders(): ?\StructType\EwsArrayOfFoldersType
    {
        return $this->Folders;
    }
    /**
     * Set Folders value
     * @param \StructType\EwsArrayOfFoldersType $folders
     * @return \StructType\EwsFolderInfoResponseMessageType
     */
    public function setFolders(?\StructType\EwsArrayOfFoldersType $folders = null): self
    {
        $this->Folders = $folders;
        
        return $this;
    }
}
