<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string
     */
    public $Name;
    /**
     * The Description
     * @var string
     */
    public $Description;
    /**
     * The CultureName
     * @var string
     */
    public $CultureName;
    /**
     * The AutoSubscribeNewMembers
     * @var bool
     */
    public $AutoSubscribeNewMembers;
    /**
     * The SenderAuthenticationRequired
     * @var bool
     */
    public $SenderAuthenticationRequired;
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
    public function __construct($name = null, $description = null, $cultureName = null, $autoSubscribeNewMembers = null, $senderAuthenticationRequired = null)
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
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Ews\StructType\EwsUpdateUnifiedGroupType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
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
     * @return \Ews\StructType\EwsUpdateUnifiedGroupType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
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
     * @return \Ews\StructType\EwsUpdateUnifiedGroupType
     */
    public function setCultureName($cultureName = null)
    {
        // validation for constraint: string
        if (!is_null($cultureName) && !is_string($cultureName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cultureName)), __LINE__);
        }
        $this->CultureName = $cultureName;
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
     * @return \Ews\StructType\EwsUpdateUnifiedGroupType
     */
    public function setAutoSubscribeNewMembers($autoSubscribeNewMembers = null)
    {
        // validation for constraint: boolean
        if (!is_null($autoSubscribeNewMembers) && !is_bool($autoSubscribeNewMembers)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($autoSubscribeNewMembers)), __LINE__);
        }
        $this->AutoSubscribeNewMembers = $autoSubscribeNewMembers;
        return $this;
    }
    /**
     * Get SenderAuthenticationRequired value
     * @return bool|null
     */
    public function getSenderAuthenticationRequired()
    {
        return $this->SenderAuthenticationRequired;
    }
    /**
     * Set SenderAuthenticationRequired value
     * @param bool $senderAuthenticationRequired
     * @return \Ews\StructType\EwsUpdateUnifiedGroupType
     */
    public function setSenderAuthenticationRequired($senderAuthenticationRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($senderAuthenticationRequired) && !is_bool($senderAuthenticationRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($senderAuthenticationRequired)), __LINE__);
        }
        $this->SenderAuthenticationRequired = $senderAuthenticationRequired;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUpdateUnifiedGroupType
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
