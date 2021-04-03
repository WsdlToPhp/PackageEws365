<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindFolderResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindFolderResponseMessageType extends EwsResponseMessageType
{
    /**
     * The RootFolder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsFindFolderParentType|null
     */
    protected ?\StructType\EwsFindFolderParentType $RootFolder = null;
    /**
     * Constructor method for FindFolderResponseMessageType
     * @uses EwsFindFolderResponseMessageType::setRootFolder()
     * @param \StructType\EwsFindFolderParentType $rootFolder
     */
    public function __construct(?\StructType\EwsFindFolderParentType $rootFolder = null)
    {
        $this
            ->setRootFolder($rootFolder);
    }
    /**
     * Get RootFolder value
     * @return \StructType\EwsFindFolderParentType|null
     */
    public function getRootFolder(): ?\StructType\EwsFindFolderParentType
    {
        return $this->RootFolder;
    }
    /**
     * Set RootFolder value
     * @param \StructType\EwsFindFolderParentType $rootFolder
     * @return \StructType\EwsFindFolderResponseMessageType
     */
    public function setRootFolder(?\StructType\EwsFindFolderParentType $rootFolder = null): self
    {
        $this->RootFolder = $rootFolder;
        
        return $this;
    }
}
