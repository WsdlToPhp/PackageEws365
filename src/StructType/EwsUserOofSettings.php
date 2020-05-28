<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
    public $OofState;
    /**
     * The ExternalAudience
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ExternalAudience;
    /**
     * The Duration
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsDuration
     */
    public $Duration;
    /**
     * The InternalReply
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsReplyBody
     */
    public $InternalReply;
    /**
     * The ExternalReply
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsReplyBody
     */
    public $ExternalReply;
    /**
     * Constructor method for UserOofSettings
     * @uses EwsUserOofSettings::setOofState()
     * @uses EwsUserOofSettings::setExternalAudience()
     * @uses EwsUserOofSettings::setDuration()
     * @uses EwsUserOofSettings::setInternalReply()
     * @uses EwsUserOofSettings::setExternalReply()
     * @param string $oofState
     * @param string $externalAudience
     * @param \Ews\StructType\EwsDuration $duration
     * @param \Ews\StructType\EwsReplyBody $internalReply
     * @param \Ews\StructType\EwsReplyBody $externalReply
     */
    public function __construct($oofState = null, $externalAudience = null, \Ews\StructType\EwsDuration $duration = null, \Ews\StructType\EwsReplyBody $internalReply = null, \Ews\StructType\EwsReplyBody $externalReply = null)
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
    public function getOofState()
    {
        return $this->OofState;
    }
    /**
     * Set OofState value
     * @uses \Ews\EnumType\EwsOofState::valueIsValid()
     * @uses \Ews\EnumType\EwsOofState::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $oofState
     * @return \Ews\StructType\EwsUserOofSettings
     */
    public function setOofState($oofState = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsOofState::valueIsValid($oofState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsOofState', is_array($oofState) ? implode(', ', $oofState) : var_export($oofState, true), implode(', ', \Ews\EnumType\EwsOofState::getValidValues())), __LINE__);
        }
        $this->OofState = $oofState;
        return $this;
    }
    /**
     * Get ExternalAudience value
     * @return string
     */
    public function getExternalAudience()
    {
        return $this->ExternalAudience;
    }
    /**
     * Set ExternalAudience value
     * @uses \Ews\EnumType\EwsExternalAudience::valueIsValid()
     * @uses \Ews\EnumType\EwsExternalAudience::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $externalAudience
     * @return \Ews\StructType\EwsUserOofSettings
     */
    public function setExternalAudience($externalAudience = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsExternalAudience::valueIsValid($externalAudience)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsExternalAudience', is_array($externalAudience) ? implode(', ', $externalAudience) : var_export($externalAudience, true), implode(', ', \Ews\EnumType\EwsExternalAudience::getValidValues())), __LINE__);
        }
        $this->ExternalAudience = $externalAudience;
        return $this;
    }
    /**
     * Get Duration value
     * @return \Ews\StructType\EwsDuration|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @param \Ews\StructType\EwsDuration $duration
     * @return \Ews\StructType\EwsUserOofSettings
     */
    public function setDuration(\Ews\StructType\EwsDuration $duration = null)
    {
        $this->Duration = $duration;
        return $this;
    }
    /**
     * Get InternalReply value
     * @return \Ews\StructType\EwsReplyBody|null
     */
    public function getInternalReply()
    {
        return $this->InternalReply;
    }
    /**
     * Set InternalReply value
     * @param \Ews\StructType\EwsReplyBody $internalReply
     * @return \Ews\StructType\EwsUserOofSettings
     */
    public function setInternalReply(\Ews\StructType\EwsReplyBody $internalReply = null)
    {
        $this->InternalReply = $internalReply;
        return $this;
    }
    /**
     * Get ExternalReply value
     * @return \Ews\StructType\EwsReplyBody|null
     */
    public function getExternalReply()
    {
        return $this->ExternalReply;
    }
    /**
     * Set ExternalReply value
     * @param \Ews\StructType\EwsReplyBody $externalReply
     * @return \Ews\StructType\EwsUserOofSettings
     */
    public function setExternalReply(\Ews\StructType\EwsReplyBody $externalReply = null)
    {
        $this->ExternalReply = $externalReply;
        return $this;
    }
}
