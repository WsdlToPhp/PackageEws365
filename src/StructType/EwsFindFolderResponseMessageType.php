<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsFindFolderParentType
     */
    public $RootFolder;
    /**
     * Constructor method for FindFolderResponseMessageType
     * @uses EwsFindFolderResponseMessageType::setRootFolder()
     * @param \Ews\StructType\EwsFindFolderParentType $rootFolder
     */
    public function __construct(\Ews\StructType\EwsFindFolderParentType $rootFolder = null)
    {
        $this
            ->setRootFolder($rootFolder);
    }
    /**
     * Get RootFolder value
     * @return \Ews\StructType\EwsFindFolderParentType|null
     */
    public function getRootFolder()
    {
        return $this->RootFolder;
    }
    /**
     * Set RootFolder value
     * @param \Ews\StructType\EwsFindFolderParentType $rootFolder
     * @return \Ews\StructType\EwsFindFolderResponseMessageType
     */
    public function setRootFolder(\Ews\StructType\EwsFindFolderParentType $rootFolder = null)
    {
        $this->RootFolder = $rootFolder;
        return $this;
    }
}
