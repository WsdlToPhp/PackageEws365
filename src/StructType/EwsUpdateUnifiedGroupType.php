<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateUnifiedGroupType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUpdateUnifiedGroupType extends EwsUnifiedGroupBaseRequestType
{
    /**
     * The Name
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Description
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The CultureName
     * @var string|null
     */
    protected ?string $CultureName = null;
    /**
     * The AutoSubscribeNewMembers
     * @var bool|null
     */
    protected ?bool $AutoSubscribeNewMembers = null;
    /**
     * The SenderAuthenticationRequired
     * @var bool|null
     */
    protected ?bool $SenderAuthenticationRequired = null;
    /**
     * Constructor method for UpdateUnifiedGroupType
     * @uses EwsUpdateUnifiedGroupType::setName()
     * @uses EwsUpdateUnifiedGroupType::setDescription()
     * @uses EwsUpdateUnifiedGroupType::setCultureName()
     * @uses EwsUpdateUnifiedGroupType::setAutoSubscribeNewMembers()
     * @uses EwsUpdateUnifiedGroupType::setSenderAuthenticationRequired()
     * @param string $name
     * @param string $description
     * @param string $cultureName
     * @param bool $autoSubscribeNewMembers
     * @param bool $senderAuthenticationRequired
     */
    public function __construct(?string $name = null, ?string $description = null, ?string $cultureName = null, ?bool $autoSubscribeNewMembers = null, ?bool $senderAuthenticationRequired = null)
    {
        $this
            ->setName($name)
            ->setDescription($description)
            ->setCultureName($cultureName)
            ->setAutoSubscribeNewMembers($autoSubscribeNewMembers)
            ->setSenderAuthenticationRequired($senderAuthenticationRequired);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\EwsUpdateUnifiedGroupType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \StructType\EwsUpdateUnifiedGroupType
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        
        return $this;
    }
    /**
     * Get CultureName value
     * @return string|null
     */
    public function getCultureName(): ?string
    {
        return $this->CultureName;
    }
    /**
     * Set CultureName value
     * @param string $cultureName
     * @return \StructType\EwsUpdateUnifiedGroupType
     */
    public function setCultureName(?string $cultureName = null): self
    {
        // validation for constraint: string
        if (!is_null($cultureName) && !is_string($cultureName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureName, true), gettype($cultureName)), __LINE__);
        }
        $this->CultureName = $cultureName;
        
        return $this;
    }
    /**
     * Get AutoSubscribeNewMembers value
     * @return bool|null
     */
    public function getAutoSubscribeNewMembers(): ?bool
    {
        return $this->AutoSubscribeNewMembers;
    }
    /**
     * Set AutoSubscribeNewMembers value
     * @param bool $autoSubscribeNewMembers
     * @return \StructType\EwsUpdateUnifiedGroupType
     */
    public function setAutoSubscribeNewMembers(?bool $autoSubscribeNewMembers = null): self
    {
        // validation for constraint: boolean
        if (!is_null($autoSubscribeNewMembers) && !is_bool($autoSubscribeNewMembers)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($autoSubscribeNewMembers, true), gettype($autoSubscribeNewMembers)), __LINE__);
        }
        $this->AutoSubscribeNewMembers = $autoSubscribeNewMembers;
        
        return $this;
    }
    /**
     * Get SenderAuthenticationRequired value
     * @return bool|null
     */
    public function getSenderAuthenticationRequired(): ?bool
    {
        return $this->SenderAuthenticationRequired;
    }
    /**
     * Set SenderAuthenticationRequired value
     * @param bool $senderAuthenticationRequired
     * @return \StructType\EwsUpdateUnifiedGroupType
     */
    public function setSenderAuthenticationRequired(?bool $senderAuthenticationRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($senderAuthenticationRequired) && !is_bool($senderAuthenticationRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($senderAuthenticationRequired, true), gettype($senderAuthenticationRequired)), __LINE__);
        }
        $this->SenderAuthenticationRequired = $senderAuthenticationRequired;
        
        return $this;
    }
}
