<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserOofSettings StructType
 * Meta information extracted from the WSDL
 * - type: t:UserOofSettings
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUserOofSettings extends AbstractStructBase
{
    /**
     * The OofState
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $OofState;
    /**
     * The ExternalAudience
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $ExternalAudience;
    /**
     * The Duration
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsDuration|null
     */
    protected ?\StructType\EwsDuration $Duration = null;
    /**
     * The InternalReply
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsReplyBody|null
     */
    protected ?\StructType\EwsReplyBody $InternalReply = null;
    /**
     * The ExternalReply
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsReplyBody|null
     */
    protected ?\StructType\EwsReplyBody $ExternalReply = null;
    /**
     * Constructor method for UserOofSettings
     * @uses EwsUserOofSettings::setOofState()
     * @uses EwsUserOofSettings::setExternalAudience()
     * @uses EwsUserOofSettings::setDuration()
     * @uses EwsUserOofSettings::setInternalReply()
     * @uses EwsUserOofSettings::setExternalReply()
     * @param string $oofState
     * @param string $externalAudience
     * @param \StructType\EwsDuration $duration
     * @param \StructType\EwsReplyBody $internalReply
     * @param \StructType\EwsReplyBody $externalReply
     */
    public function __construct(string $oofState, string $externalAudience, ?\StructType\EwsDuration $duration = null, ?\StructType\EwsReplyBody $internalReply = null, ?\StructType\EwsReplyBody $externalReply = null)
    {
        $this
            ->setOofState($oofState)
            ->setExternalAudience($externalAudience)
            ->setDuration($duration)
            ->setInternalReply($internalReply)
            ->setExternalReply($externalReply);
    }
    /**
     * Get OofState value
     * @return string
     */
    public function getOofState(): string
    {
        return $this->OofState;
    }
    /**
     * Set OofState value
     * @uses \EnumType\EwsOofState::valueIsValid()
     * @uses \EnumType\EwsOofState::getValidValues()
     * @throws InvalidArgumentException
     * @param string $oofState
     * @return \StructType\EwsUserOofSettings
     */
    public function setOofState(string $oofState): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsOofState::valueIsValid($oofState)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsOofState', is_array($oofState) ? implode(', ', $oofState) : var_export($oofState, true), implode(', ', \EnumType\EwsOofState::getValidValues())), __LINE__);
        }
        $this->OofState = $oofState;
        
        return $this;
    }
    /**
     * Get ExternalAudience value
     * @return string
     */
    public function getExternalAudience(): string
    {
        return $this->ExternalAudience;
    }
    /**
     * Set ExternalAudience value
     * @uses \EnumType\EwsExternalAudience::valueIsValid()
     * @uses \EnumType\EwsExternalAudience::getValidValues()
     * @throws InvalidArgumentException
     * @param string $externalAudience
     * @return \StructType\EwsUserOofSettings
     */
    public function setExternalAudience(string $externalAudience): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsExternalAudience::valueIsValid($externalAudience)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsExternalAudience', is_array($externalAudience) ? implode(', ', $externalAudience) : var_export($externalAudience, true), implode(', ', \EnumType\EwsExternalAudience::getValidValues())), __LINE__);
        }
        $this->ExternalAudience = $externalAudience;
        
        return $this;
    }
    /**
     * Get Duration value
     * @return \StructType\EwsDuration|null
     */
    public function getDuration(): ?\StructType\EwsDuration
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @param \StructType\EwsDuration $duration
     * @return \StructType\EwsUserOofSettings
     */
    public function setDuration(?\StructType\EwsDuration $duration = null): self
    {
        $this->Duration = $duration;
        
        return $this;
    }
    /**
     * Get InternalReply value
     * @return \StructType\EwsReplyBody|null
     */
    public function getInternalReply(): ?\StructType\EwsReplyBody
    {
        return $this->InternalReply;
    }
    /**
     * Set InternalReply value
     * @param \StructType\EwsReplyBody $internalReply
     * @return \StructType\EwsUserOofSettings
     */
    public function setInternalReply(?\StructType\EwsReplyBody $internalReply = null): self
    {
        $this->InternalReply = $internalReply;
        
        return $this;
    }
    /**
     * Get ExternalReply value
     * @return \StructType\EwsReplyBody|null
     */
    public function getExternalReply(): ?\StructType\EwsReplyBody
    {
        return $this->ExternalReply;
    }
    /**
     * Set ExternalReply value
     * @param \StructType\EwsReplyBody $externalReply
     * @return \StructType\EwsUserOofSettings
     */
    public function setExternalReply(?\StructType\EwsReplyBody $externalReply = null): self
    {
        $this->ExternalReply = $externalReply;
        
        return $this;
    }
}
