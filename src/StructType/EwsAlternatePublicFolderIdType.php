<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AlternatePublicFolderIdType StructType
 * Meta information extracted from the WSDL
 * - documentation: Represents an alternate public folder Id.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAlternatePublicFolderIdType extends EwsAlternateIdBaseType
{
    /**
     * The FolderId
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $FolderId;
    /**
     * Constructor method for AlternatePublicFolderIdType
     * @uses EwsAlternatePublicFolderIdType::setFolderId()
     * @param string $folderId
     */
    public function __construct($folderId = null)
    {
        $this
            ->setFolderId($folderId);
    }
    /**
     * Get FolderId value
     * @return string
     */
    public function getFolderId()
    {
        return $this->FolderId;
    }
    /**
     * Set FolderId value
     * @param string $folderId
     * @return \Ews\StructType\EwsAlternatePublicFolderIdType
     */
    public function setFolderId($folderId = null)
    {
        // validation for constraint: string
        if (!is_null($folderId) && !is_string($folderId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($folderId, true), gettype($folderId)), __LINE__);
        }
        $this->FolderId = $folderId;
        return $this;
    }
}
