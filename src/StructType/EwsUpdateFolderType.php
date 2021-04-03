<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateFolderType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUpdateFolderType extends EwsBaseRequestType
{
    /**
     * The FolderChanges
     * @var \ArrayType\EwsNonEmptyArrayOfFolderChangesType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfFolderChangesType $FolderChanges = null;
    /**
     * Constructor method for UpdateFolderType
     * @uses EwsUpdateFolderType::setFolderChanges()
     * @param \ArrayType\EwsNonEmptyArrayOfFolderChangesType $folderChanges
     */
    public function __construct(?\ArrayType\EwsNonEmptyArrayOfFolderChangesType $folderChanges = null)
    {
        $this
            ->setFolderChanges($folderChanges);
    }
    /**
     * Get FolderChanges value
     * @return \ArrayType\EwsNonEmptyArrayOfFolderChangesType|null
     */
    public function getFolderChanges(): ?\ArrayType\EwsNonEmptyArrayOfFolderChangesType
    {
        return $this->FolderChanges;
    }
    /**
     * Set FolderChanges value
     * @param \ArrayType\EwsNonEmptyArrayOfFolderChangesType $folderChanges
     * @return \StructType\EwsUpdateFolderType
     */
    public function setFolderChanges(?\ArrayType\EwsNonEmptyArrayOfFolderChangesType $folderChanges = null): self
    {
        $this->FolderChanges = $folderChanges;
        
        return $this;
    }
}
