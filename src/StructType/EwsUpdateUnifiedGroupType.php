<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateUnifiedGroupType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
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
     * @var boolean
     */
    public $AutoSubscribeNewMembers;
    /**
     * The SenderAuthenticationRequired
     * @var boolean
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
     * @param boolean $autoSubscribeNewMembers
     * @param boolean $senderAuthenticationRequired
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
        $this->CultureName = $cultureName;
        return $this;
    }
    /**
     * Get AutoSubscribeNewMembers value
     * @return boolean|null
     */
    public function getAutoSubscribeNewMembers()
    {
        return $this->AutoSubscribeNewMembers;
    }
    /**
     * Set AutoSubscribeNewMembers value
     * @param boolean $autoSubscribeNewMembers
     * @return \Ews\StructType\EwsUpdateUnifiedGroupType
     */
    public function setAutoSubscribeNewMembers($autoSubscribeNewMembers = null)
    {
        $this->AutoSubscribeNewMembers = $autoSubscribeNewMembers;
        return $this;
    }
    /**
     * Get SenderAuthenticationRequired value
     * @return boolean|null
     */
    public function getSenderAuthenticationRequired()
    {
        return $this->SenderAuthenticationRequired;
    }
    /**
     * Set SenderAuthenticationRequired value
     * @param boolean $senderAuthenticationRequired
     * @return \Ews\StructType\EwsUpdateUnifiedGroupType
     */
    public function setSenderAuthenticationRequired($senderAuthenticationRequired = null)
    {
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
