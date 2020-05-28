<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OnlineMeetingSettingsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsOnlineMeetingSettingsType extends AbstractStructBase
{
    /**
     * The LobbyBypass
     * @var string
     */
    public $LobbyBypass;
    /**
     * The AccessLevel
     * @var string
     */
    public $AccessLevel;
    /**
     * The Presenters
     * @var string
     */
    public $Presenters;
    /**
     * Constructor method for OnlineMeetingSettingsType
     * @uses EwsOnlineMeetingSettingsType::setLobbyBypass()
     * @uses EwsOnlineMeetingSettingsType::setAccessLevel()
     * @uses EwsOnlineMeetingSettingsType::setPresenters()
     * @param string $lobbyBypass
     * @param string $accessLevel
     * @param string $presenters
     */
    public function __construct($lobbyBypass = null, $accessLevel = null, $presenters = null)
    {
        $this
            ->setLobbyBypass($lobbyBypass)
            ->setAccessLevel($accessLevel)
            ->setPresenters($presenters);
    }
    /**
     * Get LobbyBypass value
     * @return string|null
     */
    public function getLobbyBypass()
    {
        return $this->LobbyBypass;
    }
    /**
     * Set LobbyBypass value
     * @uses \Ews\EnumType\EwsLobbyBypassType::valueIsValid()
     * @uses \Ews\EnumType\EwsLobbyBypassType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $lobbyBypass
     * @return \Ews\StructType\EwsOnlineMeetingSettingsType
     */
    public function setLobbyBypass($lobbyBypass = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsLobbyBypassType::valueIsValid($lobbyBypass)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsLobbyBypassType', is_array($lobbyBypass) ? implode(', ', $lobbyBypass) : var_export($lobbyBypass, true), implode(', ', \Ews\EnumType\EwsLobbyBypassType::getValidValues())), __LINE__);
        }
        $this->LobbyBypass = $lobbyBypass;
        return $this;
    }
    /**
     * Get AccessLevel value
     * @return string|null
     */
    public function getAccessLevel()
    {
        return $this->AccessLevel;
    }
    /**
     * Set AccessLevel value
     * @uses \Ews\EnumType\EwsOnlineMeetingAccessLevelType::valueIsValid()
     * @uses \Ews\EnumType\EwsOnlineMeetingAccessLevelType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $accessLevel
     * @return \Ews\StructType\EwsOnlineMeetingSettingsType
     */
    public function setAccessLevel($accessLevel = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsOnlineMeetingAccessLevelType::valueIsValid($accessLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsOnlineMeetingAccessLevelType', is_array($accessLevel) ? implode(', ', $accessLevel) : var_export($accessLevel, true), implode(', ', \Ews\EnumType\EwsOnlineMeetingAccessLevelType::getValidValues())), __LINE__);
        }
        $this->AccessLevel = $accessLevel;
        return $this;
    }
    /**
     * Get Presenters value
     * @return string|null
     */
    public function getPresenters()
    {
        return $this->Presenters;
    }
    /**
     * Set Presenters value
     * @uses \Ews\EnumType\EwsPresentersType::valueIsValid()
     * @uses \Ews\EnumType\EwsPresentersType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $presenters
     * @return \Ews\StructType\EwsOnlineMeetingSettingsType
     */
    public function setPresenters($presenters = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsPresentersType::valueIsValid($presenters)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsPresentersType', is_array($presenters) ? implode(', ', $presenters) : var_export($presenters, true), implode(', ', \Ews\EnumType\EwsPresentersType::getValidValues())), __LINE__);
        }
        $this->Presenters = $presenters;
        return $this;
    }
}
