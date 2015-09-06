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
     * Meta informations extracted from the WSDL
     * - documentation: Identifier for a distinguished folder
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUnifiedGroupContentChangedChannelEventType
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
