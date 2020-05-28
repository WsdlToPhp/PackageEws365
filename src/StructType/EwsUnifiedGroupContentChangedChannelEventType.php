<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsDistinguishedFolderIdType
     */
    public $DistinguishedFolderId;
    /**
     * Constructor method for UnifiedGroupContentChangedChannelEventType
     * @uses EwsUnifiedGroupContentChangedChannelEventType::setDistinguishedFolderId()
     * @param \Ews\StructType\EwsDistinguishedFolderIdType $distinguishedFolderId
     */
    public function __construct(\Ews\StructType\EwsDistinguishedFolderIdType $distinguishedFolderId = null)
    {
        $this
            ->setDistinguishedFolderId($distinguishedFolderId);
    }
    /**
     * Get DistinguishedFolderId value
     * @return \Ews\StructType\EwsDistinguishedFolderIdType|null
     */
    public function getDistinguishedFolderId()
    {
        return $this->DistinguishedFolderId;
    }
    /**
     * Set DistinguishedFolderId value
     * @param \Ews\StructType\EwsDistinguishedFolderIdType $distinguishedFolderId
     * @return \Ews\StructType\EwsUnifiedGroupContentChangedChannelEventType
     */
    public function setDistinguishedFolderId(\Ews\StructType\EwsDistinguishedFolderIdType $distinguishedFolderId = null)
    {
        $this->DistinguishedFolderId = $distinguishedFolderId;
        return $this;
    }
}
