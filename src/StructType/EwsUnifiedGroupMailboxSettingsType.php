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
     * @var bool
     */
    public $ExternalSendersEnabled;
    /**
     * The AutoSubscribeNewMembers
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $AutoSubscribeNewMembers;
    /**
     * Constructor method for UnifiedGroupMailboxSettingsType
     * @uses EwsUnifiedGroupMailboxSettingsType::setExternalSendersEnabled()
     * @uses EwsUnifiedGroupMailboxSettingsType::setAutoSubscribeNewMembers()
     * @param bool $externalSendersEnabled
     * @param bool $autoSubscribeNewMembers
     */
    public function __construct($externalSendersEnabled = null, $autoSubscribeNewMembers = null)
    {
        $this
            ->setExternalSendersEnabled($externalSendersEnabled)
            ->setAutoSubscribeNewMembers($autoSubscribeNewMembers);
    }
    /**
     * Get ExternalSendersEnabled value
     * @return bool|null
     */
    public function getExternalSendersEnabled()
    {
        return $this->ExternalSendersEnabled;
    }
    /**
     * Set ExternalSendersEnabled value
     * @param bool $externalSendersEnabled
     * @return \Ews\StructType\EwsUnifiedGroupMailboxSettingsType
     */
    public function setExternalSendersEnabled($externalSendersEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($externalSendersEnabled) && !is_bool($externalSendersEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($externalSendersEnabled)), __LINE__);
        }
        $this->ExternalSendersEnabled = $externalSendersEnabled;
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
     * @return \Ews\StructType\EwsUnifiedGroupMailboxSettingsType
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
