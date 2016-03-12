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
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $lobbyBypass, implode(', ', \Ews\EnumType\EwsLobbyBypassType::getValidValues())), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $accessLevel, implode(', ', \Ews\EnumType\EwsOnlineMeetingAccessLevelType::getValidValues())), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $presenters, implode(', ', \Ews\EnumType\EwsPresentersType::getValidValues())), __LINE__);
        }
        $this->Presenters = $presenters;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsOnlineMeetingSettingsType
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
