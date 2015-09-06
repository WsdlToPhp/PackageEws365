<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnifiedGroupMailboxSettingsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedGroupMailboxSettingsType extends AbstractStructBase
{
    /**
     * The ExternalSendersEnabled
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $ExternalSendersEnabled;
    /**
     * The AutoSubscribeNewMembers
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $AutoSubscribeNewMembers;
    /**
     * Constructor method for UnifiedGroupMailboxSettingsType
     * @uses EwsUnifiedGroupMailboxSettingsType::setExternalSendersEnabled()
     * @uses EwsUnifiedGroupMailboxSettingsType::setAutoSubscribeNewMembers()
     * @param boolean $externalSendersEnabled
     * @param boolean $autoSubscribeNewMembers
     */
    public function __construct($externalSendersEnabled = null, $autoSubscribeNewMembers = null)
    {
        $this
            ->setExternalSendersEnabled($externalSendersEnabled)
            ->setAutoSubscribeNewMembers($autoSubscribeNewMembers);
    }
    /**
     * Get ExternalSendersEnabled value
     * @return boolean|null
     */
    public function getExternalSendersEnabled()
    {
        return $this->ExternalSendersEnabled;
    }
    /**
     * Set ExternalSendersEnabled value
     * @param boolean $externalSendersEnabled
     * @return \Ews\StructType\EwsUnifiedGroupMailboxSettingsType
     */
    public function setExternalSendersEnabled($externalSendersEnabled = null)
    {
        $this->ExternalSendersEnabled = $externalSendersEnabled;
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
     * @return \Ews\StructType\EwsUnifiedGroupMailboxSettingsType
     */
    public function setAutoSubscribeNewMembers($autoSubscribeNewMembers = null)
    {
        $this->AutoSubscribeNewMembers = $autoSubscribeNewMembers;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUnifiedGroupMailboxSettingsType
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
