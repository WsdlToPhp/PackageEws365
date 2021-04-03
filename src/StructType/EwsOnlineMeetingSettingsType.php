<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $LobbyBypass = null;
    /**
     * The AccessLevel
     * @var string|null
     */
    protected ?string $AccessLevel = null;
    /**
     * The Presenters
     * @var string|null
     */
    protected ?string $Presenters = null;
    /**
     * Constructor method for OnlineMeetingSettingsType
     * @uses EwsOnlineMeetingSettingsType::setLobbyBypass()
     * @uses EwsOnlineMeetingSettingsType::setAccessLevel()
     * @uses EwsOnlineMeetingSettingsType::setPresenters()
     * @param string $lobbyBypass
     * @param string $accessLevel
     * @param string $presenters
     */
    public function __construct(?string $lobbyBypass = null, ?string $accessLevel = null, ?string $presenters = null)
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
    public function getLobbyBypass(): ?string
    {
        return $this->LobbyBypass;
    }
    /**
     * Set LobbyBypass value
     * @uses \EnumType\EwsLobbyBypassType::valueIsValid()
     * @uses \EnumType\EwsLobbyBypassType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $lobbyBypass
     * @return \StructType\EwsOnlineMeetingSettingsType
     */
    public function setLobbyBypass(?string $lobbyBypass = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsLobbyBypassType::valueIsValid($lobbyBypass)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsLobbyBypassType', is_array($lobbyBypass) ? implode(', ', $lobbyBypass) : var_export($lobbyBypass, true), implode(', ', \EnumType\EwsLobbyBypassType::getValidValues())), __LINE__);
        }
        $this->LobbyBypass = $lobbyBypass;
        
        return $this;
    }
    /**
     * Get AccessLevel value
     * @return string|null
     */
    public function getAccessLevel(): ?string
    {
        return $this->AccessLevel;
    }
    /**
     * Set AccessLevel value
     * @uses \EnumType\EwsOnlineMeetingAccessLevelType::valueIsValid()
     * @uses \EnumType\EwsOnlineMeetingAccessLevelType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $accessLevel
     * @return \StructType\EwsOnlineMeetingSettingsType
     */
    public function setAccessLevel(?string $accessLevel = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsOnlineMeetingAccessLevelType::valueIsValid($accessLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsOnlineMeetingAccessLevelType', is_array($accessLevel) ? implode(', ', $accessLevel) : var_export($accessLevel, true), implode(', ', \EnumType\EwsOnlineMeetingAccessLevelType::getValidValues())), __LINE__);
        }
        $this->AccessLevel = $accessLevel;
        
        return $this;
    }
    /**
     * Get Presenters value
     * @return string|null
     */
    public function getPresenters(): ?string
    {
        return $this->Presenters;
    }
    /**
     * Set Presenters value
     * @uses \EnumType\EwsPresentersType::valueIsValid()
     * @uses \EnumType\EwsPresentersType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $presenters
     * @return \StructType\EwsOnlineMeetingSettingsType
     */
    public function setPresenters(?string $presenters = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsPresentersType::valueIsValid($presenters)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsPresentersType', is_array($presenters) ? implode(', ', $presenters) : var_export($presenters, true), implode(', ', \EnumType\EwsPresentersType::getValidValues())), __LINE__);
        }
        $this->Presenters = $presenters;
        
        return $this;
    }
}
