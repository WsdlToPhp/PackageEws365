<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AlternatePublicFolderIdType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Represents an alternate public folder Id.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAlternatePublicFolderIdType extends EwsAlternateIdBaseType
{
    /**
     * The FolderId
     * Meta informations extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($folderId)), __LINE__);
        }
        $this->FolderId = $folderId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsAlternatePublicFolderIdType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
