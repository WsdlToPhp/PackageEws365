<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AlternatePublicFolderItemIdType StructType
 * Meta information extracted from the WSDL
 * - documentation: Represents an alternate public folder item Id.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAlternatePublicFolderItemIdType extends EwsAlternatePublicFolderIdType
{
    /**
     * The ItemId
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $ItemId;
    /**
     * Constructor method for AlternatePublicFolderItemIdType
     * @uses EwsAlternatePublicFolderItemIdType::setItemId()
     * @param string $itemId
     */
    public function __construct($itemId = null)
    {
        $this
            ->setItemId($itemId);
    }
    /**
     * Get ItemId value
     * @return string
     */
    public function getItemId()
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param string $itemId
     * @return \Ews\StructType\EwsAlternatePublicFolderItemIdType
     */
    public function setItemId($itemId = null)
    {
        // validation for constraint: string
        if (!is_null($itemId) && !is_string($itemId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->ItemId = $itemId;
        return $this;
    }
}
