<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ActivateSharingInvitationResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsActivateSharingInvitationResponseMessageType extends EwsResponseMessageType
{
    /**
     * The SuggestedCalendarName
     * Meta informations extracted from the WSDL
     * - use: required
     * - minLength: 1
     * @var string
     */
    public $SuggestedCalendarName;
    /**
     * The PermissionLevel
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $PermissionLevel;
    /**
     * The FolderId
     * Meta informations extracted from the WSDL
     * - use: required
     * - minLength: 1
     * @var string
     */
    public $FolderId;
    /**
     * Constructor method for ActivateSharingInvitationResponseMessageType
     * @uses
     * EwsActivateSharingInvitationResponseMessageType::setSuggestedCalendarName()
     * @uses EwsActivateSharingInvitationResponseMessageType::setPermissionLevel()
     * @uses EwsActivateSharingInvitationResponseMessageType::setFolderId()
     * @param string $suggestedCalendarName
     * @param string $permissionLevel
     * @param string $folderId
     */
    public function __construct($suggestedCalendarName = null, $permissionLevel = null, $folderId = null)
    {
        $this
            ->setSuggestedCalendarName($suggestedCalendarName)
            ->setPermissionLevel($permissionLevel)
            ->setFolderId($folderId);
    }
    /**
     * Get SuggestedCalendarName value
     * @return string
     */
    public function getSuggestedCalendarName()
    {
        return $this->SuggestedCalendarName;
    }
    /**
     * Set SuggestedCalendarName value
     * @param string $suggestedCalendarName
     * @return \Ews\StructType\EwsActivateSharingInvitationResponseMessageType
     */
    public function setSuggestedCalendarName($suggestedCalendarName = null)
    {
        $this->SuggestedCalendarName = $suggestedCalendarName;
        return $this;
    }
    /**
     * Get PermissionLevel value
     * @return string
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
     * @return \Ews\StructType\EwsActivateSharingInvitationResponseMessageType
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
     * @return \Ews\StructType\EwsActivateSharingInvitationResponseMessageType
     */
    public function setFolderId($folderId = null)
    {
        $this->FolderId = $folderId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsActivateSharingInvitationResponseMessageType
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
