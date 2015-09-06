<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserOofSettings StructType
 * Meta informations extracted from the WSDL
 * - type: t:UserOofSettings
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUserOofSettings extends AbstractStructBase
{
    /**
     * The OofState
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $OofState;
    /**
     * The ExternalAudience
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ExternalAudience;
    /**
     * The Duration
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsDuration
     */
    public $Duration;
    /**
     * The InternalReply
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: xml:lang
     * - use: optional
     * @var \Ews\StructType\EwsReplyBody
     */
    public $InternalReply;
    /**
     * The ExternalReply
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: xml:lang
     * - use: optional
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
     * @param string $oofState
     * @return \Ews\StructType\EwsUserOofSettings
     */
    public function setOofState($oofState = null)
    {
        if (!\Ews\EnumType\EwsOofState::valueIsValid($oofState)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $oofState, implode(', ', \Ews\EnumType\EwsOofState::getValidValues())), __LINE__);
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
     * @param string $externalAudience
     * @return \Ews\StructType\EwsUserOofSettings
     */
    public function setExternalAudience($externalAudience = null)
    {
        if (!\Ews\EnumType\EwsExternalAudience::valueIsValid($externalAudience)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $externalAudience, implode(', ', \Ews\EnumType\EwsExternalAudience::getValidValues())), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUserOofSettings
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
