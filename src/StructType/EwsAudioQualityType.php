<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected float $NMOS;
    /**
     * The NMOSDegradation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $NMOSDegradation;
    /**
     * The NMOSDegradationPacketLoss
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $NMOSDegradationPacketLoss;
    /**
     * The NMOSDegradationJitter
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $NMOSDegradationJitter;
    /**
     * The Jitter
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $Jitter;
    /**
     * The PacketLoss
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $PacketLoss;
    /**
     * The RoundTrip
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $RoundTrip;
    /**
     * The BurstDensity
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $BurstDensity;
    /**
     * The BurstDuration
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $BurstDuration;
    /**
     * The AudioCodec
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AudioCodec = null;
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
    public function __construct(float $nMOS, float $nMOSDegradation, float $nMOSDegradationPacketLoss, float $nMOSDegradationJitter, float $jitter, float $packetLoss, float $roundTrip, float $burstDensity, float $burstDuration, ?string $audioCodec = null)
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
    public function getNMOS(): float
    {
        return $this->NMOS;
    }
    /**
     * Set NMOS value
     * @param float $nMOS
     * @return \StructType\EwsAudioQualityType
     */
    public function setNMOS(float $nMOS): self
    {
        // validation for constraint: float
        if (!is_null($nMOS) && !(is_float($nMOS) || is_numeric($nMOS))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($nMOS, true), gettype($nMOS)), __LINE__);
        }
        $this->NMOS = $nMOS;
        
        return $this;
    }
    /**
     * Get NMOSDegradation value
     * @return float
     */
    public function getNMOSDegradation(): float
    {
        return $this->NMOSDegradation;
    }
    /**
     * Set NMOSDegradation value
     * @param float $nMOSDegradation
     * @return \StructType\EwsAudioQualityType
     */
    public function setNMOSDegradation(float $nMOSDegradation): self
    {
        // validation for constraint: float
        if (!is_null($nMOSDegradation) && !(is_float($nMOSDegradation) || is_numeric($nMOSDegradation))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($nMOSDegradation, true), gettype($nMOSDegradation)), __LINE__);
        }
        $this->NMOSDegradation = $nMOSDegradation;
        
        return $this;
    }
    /**
     * Get NMOSDegradationPacketLoss value
     * @return float
     */
    public function getNMOSDegradationPacketLoss(): float
    {
        return $this->NMOSDegradationPacketLoss;
    }
    /**
     * Set NMOSDegradationPacketLoss value
     * @param float $nMOSDegradationPacketLoss
     * @return \StructType\EwsAudioQualityType
     */
    public function setNMOSDegradationPacketLoss(float $nMOSDegradationPacketLoss): self
    {
        // validation for constraint: float
        if (!is_null($nMOSDegradationPacketLoss) && !(is_float($nMOSDegradationPacketLoss) || is_numeric($nMOSDegradationPacketLoss))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($nMOSDegradationPacketLoss, true), gettype($nMOSDegradationPacketLoss)), __LINE__);
        }
        $this->NMOSDegradationPacketLoss = $nMOSDegradationPacketLoss;
        
        return $this;
    }
    /**
     * Get NMOSDegradationJitter value
     * @return float
     */
    public function getNMOSDegradationJitter(): float
    {
        return $this->NMOSDegradationJitter;
    }
    /**
     * Set NMOSDegradationJitter value
     * @param float $nMOSDegradationJitter
     * @return \StructType\EwsAudioQualityType
     */
    public function setNMOSDegradationJitter(float $nMOSDegradationJitter): self
    {
        // validation for constraint: float
        if (!is_null($nMOSDegradationJitter) && !(is_float($nMOSDegradationJitter) || is_numeric($nMOSDegradationJitter))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($nMOSDegradationJitter, true), gettype($nMOSDegradationJitter)), __LINE__);
        }
        $this->NMOSDegradationJitter = $nMOSDegradationJitter;
        
        return $this;
    }
    /**
     * Get Jitter value
     * @return float
     */
    public function getJitter(): float
    {
        return $this->Jitter;
    }
    /**
     * Set Jitter value
     * @param float $jitter
     * @return \StructType\EwsAudioQualityType
     */
    public function setJitter(float $jitter): self
    {
        // validation for constraint: float
        if (!is_null($jitter) && !(is_float($jitter) || is_numeric($jitter))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($jitter, true), gettype($jitter)), __LINE__);
        }
        $this->Jitter = $jitter;
        
        return $this;
    }
    /**
     * Get PacketLoss value
     * @return float
     */
    public function getPacketLoss(): float
    {
        return $this->PacketLoss;
    }
    /**
     * Set PacketLoss value
     * @param float $packetLoss
     * @return \StructType\EwsAudioQualityType
     */
    public function setPacketLoss(float $packetLoss): self
    {
        // validation for constraint: float
        if (!is_null($packetLoss) && !(is_float($packetLoss) || is_numeric($packetLoss))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($packetLoss, true), gettype($packetLoss)), __LINE__);
        }
        $this->PacketLoss = $packetLoss;
        
        return $this;
    }
    /**
     * Get RoundTrip value
     * @return float
     */
    public function getRoundTrip(): float
    {
        return $this->RoundTrip;
    }
    /**
     * Set RoundTrip value
     * @param float $roundTrip
     * @return \StructType\EwsAudioQualityType
     */
    public function setRoundTrip(float $roundTrip): self
    {
        // validation for constraint: float
        if (!is_null($roundTrip) && !(is_float($roundTrip) || is_numeric($roundTrip))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($roundTrip, true), gettype($roundTrip)), __LINE__);
        }
        $this->RoundTrip = $roundTrip;
        
        return $this;
    }
    /**
     * Get BurstDensity value
     * @return float
     */
    public function getBurstDensity(): float
    {
        return $this->BurstDensity;
    }
    /**
     * Set BurstDensity value
     * @param float $burstDensity
     * @return \StructType\EwsAudioQualityType
     */
    public function setBurstDensity(float $burstDensity): self
    {
        // validation for constraint: float
        if (!is_null($burstDensity) && !(is_float($burstDensity) || is_numeric($burstDensity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($burstDensity, true), gettype($burstDensity)), __LINE__);
        }
        $this->BurstDensity = $burstDensity;
        
        return $this;
    }
    /**
     * Get BurstDuration value
     * @return float
     */
    public function getBurstDuration(): float
    {
        return $this->BurstDuration;
    }
    /**
     * Set BurstDuration value
     * @param float $burstDuration
     * @return \StructType\EwsAudioQualityType
     */
    public function setBurstDuration(float $burstDuration): self
    {
        // validation for constraint: float
        if (!is_null($burstDuration) && !(is_float($burstDuration) || is_numeric($burstDuration))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($burstDuration, true), gettype($burstDuration)), __LINE__);
        }
        $this->BurstDuration = $burstDuration;
        
        return $this;
    }
    /**
     * Get AudioCodec value
     * @return string|null
     */
    public function getAudioCodec(): ?string
    {
        return $this->AudioCodec;
    }
    /**
     * Set AudioCodec value
     * @param string $audioCodec
     * @return \StructType\EwsAudioQualityType
     */
    public function setAudioCodec(?string $audioCodec = null): self
    {
        // validation for constraint: string
        if (!is_null($audioCodec) && !is_string($audioCodec)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($audioCodec, true), gettype($audioCodec)), __LINE__);
        }
        $this->AudioCodec = $audioCodec;
        
        return $this;
    }
}
