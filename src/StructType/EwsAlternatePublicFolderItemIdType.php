<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected string $ItemId;
    /**
     * Constructor method for AlternatePublicFolderItemIdType
     * @uses EwsAlternatePublicFolderItemIdType::setItemId()
     * @param string $itemId
     */
    public function __construct(string $itemId)
    {
        $this
            ->setItemId($itemId);
    }
    /**
     * Get ItemId value
     * @return string
     */
    public function getItemId(): string
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param string $itemId
     * @return \StructType\EwsAlternatePublicFolderItemIdType
     */
    public function setItemId(string $itemId): self
    {
        // validation for constraint: string
        if (!is_null($itemId) && !is_string($itemId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->ItemId = $itemId;
        
        return $this;
    }
}
