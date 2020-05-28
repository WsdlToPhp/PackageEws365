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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $NMOS;
    /**
     * The NMOSDegradation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $NMOSDegradation;
    /**
     * The NMOSDegradationPacketLoss
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $NMOSDegradationPacketLoss;
    /**
     * The NMOSDegradationJitter
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $NMOSDegradationJitter;
    /**
     * The Jitter
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $Jitter;
    /**
     * The PacketLoss
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $PacketLoss;
    /**
     * The RoundTrip
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $RoundTrip;
    /**
     * The BurstDensity
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $BurstDensity;
    /**
     * The BurstDuration
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $BurstDuration;
    /**
     * The AudioCodec
     * Meta information extracted from the WSDL
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
        // validation for constraint: float
        if (!is_null($nMOS) && !(is_float($nMOS) || is_numeric($nMOS))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($nMOS, true), gettype($nMOS)), __LINE__);
        }
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
        // validation for constraint: float
        if (!is_null($nMOSDegradation) && !(is_float($nMOSDegradation) || is_numeric($nMOSDegradation))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($nMOSDegradation, true), gettype($nMOSDegradation)), __LINE__);
        }
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
        // validation for constraint: float
        if (!is_null($nMOSDegradationPacketLoss) && !(is_float($nMOSDegradationPacketLoss) || is_numeric($nMOSDegradationPacketLoss))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($nMOSDegradationPacketLoss, true), gettype($nMOSDegradationPacketLoss)), __LINE__);
        }
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
        // validation for constraint: float
        if (!is_null($nMOSDegradationJitter) && !(is_float($nMOSDegradationJitter) || is_numeric($nMOSDegradationJitter))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($nMOSDegradationJitter, true), gettype($nMOSDegradationJitter)), __LINE__);
        }
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
        // validation for constraint: float
        if (!is_null($jitter) && !(is_float($jitter) || is_numeric($jitter))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($jitter, true), gettype($jitter)), __LINE__);
        }
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
        // validation for constraint: float
        if (!is_null($packetLoss) && !(is_float($packetLoss) || is_numeric($packetLoss))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($packetLoss, true), gettype($packetLoss)), __LINE__);
        }
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
        // validation for constraint: float
        if (!is_null($roundTrip) && !(is_float($roundTrip) || is_numeric($roundTrip))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($roundTrip, true), gettype($roundTrip)), __LINE__);
        }
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
        // validation for constraint: float
        if (!is_null($burstDensity) && !(is_float($burstDensity) || is_numeric($burstDensity))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($burstDensity, true), gettype($burstDensity)), __LINE__);
        }
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
        // validation for constraint: float
        if (!is_null($burstDuration) && !(is_float($burstDuration) || is_numeric($burstDuration))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($burstDuration, true), gettype($burstDuration)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($audioCodec) && !is_string($audioCodec)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($audioCodec, true), gettype($audioCodec)), __LINE__);
        }
        $this->AudioCodec = $audioCodec;
        return $this;
    }
}
