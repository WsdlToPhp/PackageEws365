<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateUnifiedGroupType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCreateUnifiedGroupType extends EwsBaseRequestType
{
    /**
     * The Name
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Alias
     * @var string|null
     */
    protected ?string $Alias = null;
    /**
     * The AccessType
     * Meta information extracted from the WSDL
     * - ref: t:AccessType
     * @var string|null
     */
    protected ?string $AccessType = null;
    /**
     * The Description
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The AutoSubscribeNewMembers
     * @var bool|null
     */
    protected ?bool $AutoSubscribeNewMembers = null;
    /**
     * The CultureName
     * @var string|null
     */
    protected ?string $CultureName = null;
    /**
     * Constructor method for CreateUnifiedGroupType
     * @uses EwsCreateUnifiedGroupType::setName()
     * @uses EwsCreateUnifiedGroupType::setAlias()
     * @uses EwsCreateUnifiedGroupType::setAccessType()
     * @uses EwsCreateUnifiedGroupType::setDescription()
     * @uses EwsCreateUnifiedGroupType::setAutoSubscribeNewMembers()
     * @uses EwsCreateUnifiedGroupType::setCultureName()
     * @param string $name
     * @param string $alias
     * @param string $accessType
     * @param string $description
     * @param bool $autoSubscribeNewMembers
     * @param string $cultureName
     */
    public function __construct(?string $name = null, ?string $alias = null, ?string $accessType = null, ?string $description = null, ?bool $autoSubscribeNewMembers = null, ?string $cultureName = null)
    {
        $this
            ->setName($name)
            ->setAlias($alias)
            ->setAccessType($accessType)
            ->setDescription($description)
            ->setAutoSubscribeNewMembers($autoSubscribeNewMembers)
            ->setCultureName($cultureName);
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
     * @return \StructType\EwsCreateUnifiedGroupType
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
     * Get Alias value
     * @return string|null
     */
    public function getAlias(): ?string
    {
        return $this->Alias;
    }
    /**
     * Set Alias value
     * @param string $alias
     * @return \StructType\EwsCreateUnifiedGroupType
     */
    public function setAlias(?string $alias = null): self
    {
        // validation for constraint: string
        if (!is_null($alias) && !is_string($alias)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($alias, true), gettype($alias)), __LINE__);
        }
        $this->Alias = $alias;
        
        return $this;
    }
    /**
     * Get AccessType value
     * @return string|null
     */
    public function getAccessType(): ?string
    {
        return $this->AccessType;
    }
    /**
     * Set AccessType value
     * @uses \EnumType\EwsUnifiedGroupAccessType::valueIsValid()
     * @uses \EnumType\EwsUnifiedGroupAccessType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $accessType
     * @return \StructType\EwsCreateUnifiedGroupType
     */
    public function setAccessType(?string $accessType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsUnifiedGroupAccessType::valueIsValid($accessType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsUnifiedGroupAccessType', is_array($accessType) ? implode(', ', $accessType) : var_export($accessType, true), implode(', ', \EnumType\EwsUnifiedGroupAccessType::getValidValues())), __LINE__);
        }
        $this->AccessType = $accessType;
        
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
     * @return \StructType\EwsCreateUnifiedGroupType
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
     * @return \StructType\EwsCreateUnifiedGroupType
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
     * @return \StructType\EwsCreateUnifiedGroupType
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
}
