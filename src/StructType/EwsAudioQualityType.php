<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AudioQualityType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAudioQualityType extends AbstractStructBase
{
    /**
     * The NMOS
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $NMOS;
    /**
     * The NMOSDegradation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $NMOSDegradation;
    /**
     * The NMOSDegradationPacketLoss
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $NMOSDegradationPacketLoss;
    /**
     * The NMOSDegradationJitter
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $NMOSDegradationJitter;
    /**
     * The Jitter
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $Jitter;
    /**
     * The PacketLoss
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $PacketLoss;
    /**
     * The RoundTrip
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $RoundTrip;
    /**
     * The BurstDensity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $BurstDensity;
    /**
     * The BurstDuration
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $BurstDuration;
    /**
     * The AudioCodec
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AudioCodec;
    /**
     * Constructor method for AudioQualityType
     * @uses EwsAudioQualityType::setNMOS()
     * @uses EwsAudioQualityType::setNMOSDegradation()
     * @uses EwsAudioQualityType::setNMOSDegradationPacketLoss()
     * @uses EwsAudioQualityType::setNMOSDegradationJitter()
     * @uses EwsAudioQualityType::setJitter()
     * @uses EwsAudioQualityType::setPacketLoss()
     * @uses EwsAudioQualityType::setRoundTrip()
     * @uses EwsAudioQualityType::setBurstDensity()
     * @uses EwsAudioQualityType::setBurstDuration()
     * @uses EwsAudioQualityType::setAudioCodec()
     * @param float $nMOS
     * @param float $nMOSDegradation
     * @param float $nMOSDegradationPacketLoss
     * @param float $nMOSDegradationJitter
     * @param float $jitter
     * @param float $packetLoss
     * @param float $roundTrip
     * @param float $burstDensity
     * @param float $burstDuration
     * @param string $audioCodec
     */
    public function __construct($nMOS = null, $nMOSDegradation = null, $nMOSDegradationPacketLoss = null, $nMOSDegradationJitter = null, $jitter = null, $packetLoss = null, $roundTrip = null, $burstDensity = null, $burstDuration = null, $audioCodec = null)
    {
        $this
            ->setNMOS($nMOS)
            ->setNMOSDegradation($nMOSDegradation)
            ->setNMOSDegradationPacketLoss($nMOSDegradationPacketLoss)
            ->setNMOSDegradationJitter($nMOSDegradationJitter)
            ->setJitter($jitter)
            ->setPacketLoss($packetLoss)
            ->setRoundTrip($roundTrip)
            ->setBurstDensity($burstDensity)
            ->setBurstDuration($burstDuration)
            ->setAudioCodec($audioCodec);
    }
    /**
     * Get NMOS value
     * @return float
     */
    public function getNMOS()
    {
        return $this->NMOS;
    }
    /**
     * Set NMOS value
     * @param float $nMOS
     * @return \Ews\StructType\EwsAudioQualityType
     */
    public function setNMOS($nMOS = null)
    {
        $this->NMOS = $nMOS;
        return $this;
    }
    /**
     * Get NMOSDegradation value
     * @return float
     */
    public function getNMOSDegradation()
    {
        return $this->NMOSDegradation;
    }
    /**
     * Set NMOSDegradation value
     * @param float $nMOSDegradation
     * @return \Ews\StructType\EwsAudioQualityType
     */
    public function setNMOSDegradation($nMOSDegradation = null)
    {
        $this->NMOSDegradation = $nMOSDegradation;
        return $this;
    }
    /**
     * Get NMOSDegradationPacketLoss value
     * @return float
     */
    public function getNMOSDegradationPacketLoss()
    {
        return $this->NMOSDegradationPacketLoss;
    }
    /**
     * Set NMOSDegradationPacketLoss value
     * @param float $nMOSDegradationPacketLoss
     * @return \Ews\StructType\EwsAudioQualityType
     */
    public function setNMOSDegradationPacketLoss($nMOSDegradationPacketLoss = null)
    {
        $this->NMOSDegradationPacketLoss = $nMOSDegradationPacketLoss;
        return $this;
    }
    /**
     * Get NMOSDegradationJitter value
     * @return float
     */
    public function getNMOSDegradationJitter()
    {
        return $this->NMOSDegradationJitter;
    }
    /**
     * Set NMOSDegradationJitter value
     * @param float $nMOSDegradationJitter
     * @return \Ews\StructType\EwsAudioQualityType
     */
    public function setNMOSDegradationJitter($nMOSDegradationJitter = null)
    {
        $this->NMOSDegradationJitter = $nMOSDegradationJitter;
        return $this;
    }
    /**
     * Get Jitter value
     * @return float
     */
    public function getJitter()
    {
        return $this->Jitter;
    }
    /**
     * Set Jitter value
     * @param float $jitter
     * @return \Ews\StructType\EwsAudioQualityType
     */
    public function setJitter($jitter = null)
    {
        $this->Jitter = $jitter;
        return $this;
    }
    /**
     * Get PacketLoss value
     * @return float
     */
    public function getPacketLoss()
    {
        return $this->PacketLoss;
    }
    /**
     * Set PacketLoss value
     * @param float $packetLoss
     * @return \Ews\StructType\EwsAudioQualityType
     */
    public function setPacketLoss($packetLoss = null)
    {
        $this->PacketLoss = $packetLoss;
        return $this;
    }
    /**
     * Get RoundTrip value
     * @return float
     */
    public function getRoundTrip()
    {
        return $this->RoundTrip;
    }
    /**
     * Set RoundTrip value
     * @param float $roundTrip
     * @return \Ews\StructType\EwsAudioQualityType
     */
    public function setRoundTrip($roundTrip = null)
    {
        $this->RoundTrip = $roundTrip;
        return $this;
    }
    /**
     * Get BurstDensity value
     * @return float
     */
    public function getBurstDensity()
    {
        return $this->BurstDensity;
    }
    /**
     * Set BurstDensity value
     * @param float $burstDensity
     * @return \Ews\StructType\EwsAudioQualityType
     */
    public function setBurstDensity($burstDensity = null)
    {
        $this->BurstDensity = $burstDensity;
        return $this;
    }
    /**
     * Get BurstDuration value
     * @return float
     */
    public function getBurstDuration()
    {
        return $this->BurstDuration;
    }
    /**
     * Set BurstDuration value
     * @param float $burstDuration
     * @return \Ews\StructType\EwsAudioQualityType
     */
    public function setBurstDuration($burstDuration = null)
    {
        $this->BurstDuration = $burstDuration;
        return $this;
    }
    /**
     * Get AudioCodec value
     * @return string|null
     */
    public function getAudioCodec()
    {
        return $this->AudioCodec;
    }
    /**
     * Set AudioCodec value
     * @param string $audioCodec
     * @return \Ews\StructType\EwsAudioQualityType
     */
    public function setAudioCodec($audioCodec = null)
    {
        $this->AudioCodec = $audioCodec;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsAudioQualityType
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
