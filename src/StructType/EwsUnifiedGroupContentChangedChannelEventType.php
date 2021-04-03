<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnifiedGroupContentChangedChannelEventType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedGroupContentChangedChannelEventType extends EwsSubscriptionLevelChannelEventType
{
    /**
     * The DistinguishedFolderId
     * @var \StructType\EwsDistinguishedFolderIdType|null
     */
    protected ?\StructType\EwsDistinguishedFolderIdType $DistinguishedFolderId = null;
    /**
     * Constructor method for UnifiedGroupContentChangedChannelEventType
     * @uses EwsUnifiedGroupContentChangedChannelEventType::setDistinguishedFolderId()
     * @param \StructType\EwsDistinguishedFolderIdType $distinguishedFolderId
     */
    public function __construct(?\StructType\EwsDistinguishedFolderIdType $distinguishedFolderId = null)
    {
        $this
            ->setDistinguishedFolderId($distinguishedFolderId);
    }
    /**
     * Get DistinguishedFolderId value
     * @return \StructType\EwsDistinguishedFolderIdType|null
     */
    public function getDistinguishedFolderId(): ?\StructType\EwsDistinguishedFolderIdType
    {
        return $this->DistinguishedFolderId;
    }
    /**
     * Set DistinguishedFolderId value
     * @param \StructType\EwsDistinguishedFolderIdType $distinguishedFolderId
     * @return \StructType\EwsUnifiedGroupContentChangedChannelEventType
     */
    public function setDistinguishedFolderId(?\StructType\EwsDistinguishedFolderIdType $distinguishedFolderId = null): self
    {
        $this->DistinguishedFolderId = $distinguishedFolderId;
        
        return $this;
    }
}
