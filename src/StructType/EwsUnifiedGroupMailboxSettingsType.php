<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var bool|null
     */
    protected ?bool $ExternalSendersEnabled = null;
    /**
     * The AutoSubscribeNewMembers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $AutoSubscribeNewMembers = null;
    /**
     * Constructor method for UnifiedGroupMailboxSettingsType
     * @uses EwsUnifiedGroupMailboxSettingsType::setExternalSendersEnabled()
     * @uses EwsUnifiedGroupMailboxSettingsType::setAutoSubscribeNewMembers()
     * @param bool $externalSendersEnabled
     * @param bool $autoSubscribeNewMembers
     */
    public function __construct(?bool $externalSendersEnabled = null, ?bool $autoSubscribeNewMembers = null)
    {
        $this
            ->setExternalSendersEnabled($externalSendersEnabled)
            ->setAutoSubscribeNewMembers($autoSubscribeNewMembers);
    }
    /**
     * Get ExternalSendersEnabled value
     * @return bool|null
     */
    public function getExternalSendersEnabled(): ?bool
    {
        return $this->ExternalSendersEnabled;
    }
    /**
     * Set ExternalSendersEnabled value
     * @param bool $externalSendersEnabled
     * @return \StructType\EwsUnifiedGroupMailboxSettingsType
     */
    public function setExternalSendersEnabled(?bool $externalSendersEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($externalSendersEnabled) && !is_bool($externalSendersEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($externalSendersEnabled, true), gettype($externalSendersEnabled)), __LINE__);
        }
        $this->ExternalSendersEnabled = $externalSendersEnabled;
        
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
     * @return \StructType\EwsUnifiedGroupMailboxSettingsType
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
}
