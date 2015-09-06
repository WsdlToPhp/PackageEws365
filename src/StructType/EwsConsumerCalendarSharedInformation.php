<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsumerCalendarSharedInformation StructType
 * Meta informations extracted from the WSDL
 * - documentation: Shared information about a consumer calendar. This is reserved for a select number of server-2-server calls.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsConsumerCalendarSharedInformation extends AbstractStructBase
{
    /**
     * The FolderId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Identifier for a fully resolved folder
     * @var \Ews\StructType\EwsFolderIdType
     */
    public $FolderId;
    /**
     * The PermissionLevel
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PermissionLevel;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Description;
    /**
     * Constructor method for ConsumerCalendarSharedInformation
     * @uses EwsConsumerCalendarSharedInformation::setFolderId()
     * @uses EwsConsumerCalendarSharedInformation::setPermissionLevel()
     * @uses EwsConsumerCalendarSharedInformation::setDescription()
     * @param \Ews\StructType\EwsFolderIdType $folderId
     * @param string $permissionLevel
     * @param string $description
     */
    public function __construct(\Ews\StructType\EwsFolderIdType $folderId = null, $permissionLevel = null, $description = null)
    {
        $this
            ->setFolderId($folderId)
            ->setPermissionLevel($permissionLevel)
            ->setDescription($description);
    }
    /**
     * Get FolderId value
     * @return \Ews\StructType\EwsFolderIdType|null
     */
    public function getFolderId()
    {
        return $this->FolderId;
    }
    /**
     * Set FolderId value
     * @param \Ews\StructType\EwsFolderIdType $folderId
     * @return \Ews\StructType\EwsConsumerCalendarSharedInformation
     */
    public function setFolderId(\Ews\StructType\EwsFolderIdType $folderId = null)
    {
        $this->FolderId = $folderId;
        return $this;
    }
    /**
     * Get PermissionLevel value
     * @return string|null
     */
    public function getPermissionLevel()
    {
        return $this->PermissionLevel;
    }
    /**
     * Set PermissionLevel value
     * @uses \Ews\EnumType\EwsSharingInvitationPermissionLevel::valueIsValid()
     * @uses \Ews\EnumType\EwsSharingInvitationPermissionLevel::getValidValues()
     * @param string $permissionLevel
     * @return \Ews\StructType\EwsConsumerCalendarSharedInformation
     */
    public function setPermissionLevel($permissionLevel = null)
    {
        if (!\Ews\EnumType\EwsSharingInvitationPermissionLevel::valueIsValid($permissionLevel)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $permissionLevel, implode(', ', \Ews\EnumType\EwsSharingInvitationPermissionLevel::getValidValues())), __LINE__);
        }
        $this->PermissionLevel = $permissionLevel;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Ews\StructType\EwsConsumerCalendarSharedInformation
     */
    public function setDescription($description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsConsumerCalendarSharedInformation
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
