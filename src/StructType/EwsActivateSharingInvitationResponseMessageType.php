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
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * - use: required
     * @var string
     */
    public $SuggestedCalendarName;
    /**
     * The PermissionLevel
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $PermissionLevel;
    /**
     * The FolderId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * - use: required
     * @var string
     */
    public $FolderId;
    /**
     * Constructor method for ActivateSharingInvitationResponseMessageType
     * @uses EwsActivateSharingInvitationResponseMessageType::setSuggestedCalendarName()
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
        // validation for constraint: string
        if (!is_null($suggestedCalendarName) && !is_string($suggestedCalendarName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($suggestedCalendarName, true), gettype($suggestedCalendarName)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($suggestedCalendarName) && mb_strlen($suggestedCalendarName) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($suggestedCalendarName)), __LINE__);
        }
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
     * @throws \InvalidArgumentException
     * @param string $permissionLevel
     * @return \Ews\StructType\EwsActivateSharingInvitationResponseMessageType
     */
    public function setPermissionLevel($permissionLevel = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsSharingInvitationPermissionLevel::valueIsValid($permissionLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsSharingInvitationPermissionLevel', is_array($permissionLevel) ? implode(', ', $permissionLevel) : var_export($permissionLevel, true), implode(', ', \Ews\EnumType\EwsSharingInvitationPermissionLevel::getValidValues())), __LINE__);
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
        // validation for constraint: string
        if (!is_null($folderId) && !is_string($folderId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($folderId, true), gettype($folderId)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($folderId) && mb_strlen($folderId) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($folderId)), __LINE__);
        }
        $this->FolderId = $folderId;
        return $this;
    }
}
