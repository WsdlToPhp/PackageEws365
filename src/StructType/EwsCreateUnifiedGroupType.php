<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string
     */
    public $Name;
    /**
     * The Alias
     * @var string
     */
    public $Alias;
    /**
     * The AccessType
     * Meta information extracted from the WSDL
     * - ref: t:AccessType
     * @var string
     */
    public $AccessType;
    /**
     * The Description
     * @var string
     */
    public $Description;
    /**
     * The AutoSubscribeNewMembers
     * @var bool
     */
    public $AutoSubscribeNewMembers;
    /**
     * The CultureName
     * @var string
     */
    public $CultureName;
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
    public function __construct($name = null, $alias = null, $accessType = null, $description = null, $autoSubscribeNewMembers = null, $cultureName = null)
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
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Ews\StructType\EwsCreateUnifiedGroupType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Alias value
     * @return string|null
     */
    public function getAlias()
    {
        return $this->Alias;
    }
    /**
     * Set Alias value
     * @param string $alias
     * @return \Ews\StructType\EwsCreateUnifiedGroupType
     */
    public function setAlias($alias = null)
    {
        // validation for constraint: string
        if (!is_null($alias) && !is_string($alias)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($alias, true), gettype($alias)), __LINE__);
        }
        $this->Alias = $alias;
        return $this;
    }
    /**
     * Get AccessType value
     * @return string|null
     */
    public function getAccessType()
    {
        return $this->AccessType;
    }
    /**
     * Set AccessType value
     * @uses \Ews\EnumType\EwsUnifiedGroupAccessType::valueIsValid()
     * @uses \Ews\EnumType\EwsUnifiedGroupAccessType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $accessType
     * @return \Ews\StructType\EwsCreateUnifiedGroupType
     */
    public function setAccessType($accessType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsUnifiedGroupAccessType::valueIsValid($accessType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsUnifiedGroupAccessType', is_array($accessType) ? implode(', ', $accessType) : var_export($accessType, true), implode(', ', \Ews\EnumType\EwsUnifiedGroupAccessType::getValidValues())), __LINE__);
        }
        $this->AccessType = $accessType;
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
     * @return \Ews\StructType\EwsCreateUnifiedGroupType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get AutoSubscribeNewMembers value
     * @return bool|null
     */
    public function getAutoSubscribeNewMembers()
    {
        return $this->AutoSubscribeNewMembers;
    }
    /**
     * Set AutoSubscribeNewMembers value
     * @param bool $autoSubscribeNewMembers
     * @return \Ews\StructType\EwsCreateUnifiedGroupType
     */
    public function setAutoSubscribeNewMembers($autoSubscribeNewMembers = null)
    {
        // validation for constraint: boolean
        if (!is_null($autoSubscribeNewMembers) && !is_bool($autoSubscribeNewMembers)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($autoSubscribeNewMembers, true), gettype($autoSubscribeNewMembers)), __LINE__);
        }
        $this->AutoSubscribeNewMembers = $autoSubscribeNewMembers;
        return $this;
    }
    /**
     * Get CultureName value
     * @return string|null
     */
    public function getCultureName()
    {
        return $this->CultureName;
    }
    /**
     * Set CultureName value
     * @param string $cultureName
     * @return \Ews\StructType\EwsCreateUnifiedGroupType
     */
    public function setCultureName($cultureName = null)
    {
        // validation for constraint: string
        if (!is_null($cultureName) && !is_string($cultureName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureName, true), gettype($cultureName)), __LINE__);
        }
        $this->CultureName = $cultureName;
        return $this;
    }
}
