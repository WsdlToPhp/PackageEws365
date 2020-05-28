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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $ExternalSendersEnabled;
    /**
     * The AutoSubscribeNewMembers
     * Meta information extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($externalSendersEnabled, true), gettype($externalSendersEnabled)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($autoSubscribeNewMembers, true), gettype($autoSubscribeNewMembers)), __LINE__);
        }
        $this->AutoSubscribeNewMembers = $autoSubscribeNewMembers;
        return $this;
    }
}
