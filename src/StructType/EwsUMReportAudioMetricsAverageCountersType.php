<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UMReportAudioMetricsAverageCountersType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUMReportAudioMetricsAverageCountersType extends AbstractStructBase
{
    /**
     * The TotalAudioQualityCallsSampled
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $TotalAudioQualityCallsSampled;
    /**
     * The NMOS
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsAudioMetricsAverageType|null
     */
    protected ?\StructType\EwsAudioMetricsAverageType $NMOS = null;
    /**
     * The NMOSDegradation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsAudioMetricsAverageType|null
     */
    protected ?\StructType\EwsAudioMetricsAverageType $NMOSDegradation = null;
    /**
     * The Jitter
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsAudioMetricsAverageType|null
     */
    protected ?\StructType\EwsAudioMetricsAverageType $Jitter = null;
    /**
     * The PercentPacketLoss
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsAudioMetricsAverageType|null
     */
    protected ?\StructType\EwsAudioMetricsAverageType $PercentPacketLoss = null;
    /**
     * The RoundTrip
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsAudioMetricsAverageType|null
     */
    protected ?\StructType\EwsAudioMetricsAverageType $RoundTrip = null;
    /**
     * The BurstLossDuration
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsAudioMetricsAverageType|null
     */
    protected ?\StructType\EwsAudioMetricsAverageType $BurstLossDuration = null;
    /**
     * Constructor method for UMReportAudioMetricsAverageCountersType
     * @uses EwsUMReportAudioMetricsAverageCountersType::setTotalAudioQualityCallsSampled()
     * @uses EwsUMReportAudioMetricsAverageCountersType::setNMOS()
     * @uses EwsUMReportAudioMetricsAverageCountersType::setNMOSDegradation()
     * @uses EwsUMReportAudioMetricsAverageCountersType::setJitter()
     * @uses EwsUMReportAudioMetricsAverageCountersType::setPercentPacketLoss()
     * @uses EwsUMReportAudioMetricsAverageCountersType::setRoundTrip()
     * @uses EwsUMReportAudioMetricsAverageCountersType::setBurstLossDuration()
     * @param int $totalAudioQualityCallsSampled
     * @param \StructType\EwsAudioMetricsAverageType $nMOS
     * @param \StructType\EwsAudioMetricsAverageType $nMOSDegradation
     * @param \StructType\EwsAudioMetricsAverageType $jitter
     * @param \StructType\EwsAudioMetricsAverageType $percentPacketLoss
     * @param \StructType\EwsAudioMetricsAverageType $roundTrip
     * @param \StructType\EwsAudioMetricsAverageType $burstLossDuration
     */
    public function __construct(int $totalAudioQualityCallsSampled, ?\StructType\EwsAudioMetricsAverageType $nMOS = null, ?\StructType\EwsAudioMetricsAverageType $nMOSDegradation = null, ?\StructType\EwsAudioMetricsAverageType $jitter = null, ?\StructType\EwsAudioMetricsAverageType $percentPacketLoss = null, ?\StructType\EwsAudioMetricsAverageType $roundTrip = null, ?\StructType\EwsAudioMetricsAverageType $burstLossDuration = null)
    {
        $this
            ->setTotalAudioQualityCallsSampled($totalAudioQualityCallsSampled)
            ->setNMOS($nMOS)
            ->setNMOSDegradation($nMOSDegradation)
            ->setJitter($jitter)
            ->setPercentPacketLoss($percentPacketLoss)
            ->setRoundTrip($roundTrip)
            ->setBurstLossDuration($burstLossDuration);
    }
    /**
     * Get TotalAudioQualityCallsSampled value
     * @return int
     */
    public function getTotalAudioQualityCallsSampled(): int
    {
        return $this->TotalAudioQualityCallsSampled;
    }
    /**
     * Set TotalAudioQualityCallsSampled value
     * @param int $totalAudioQualityCallsSampled
     * @return \StructType\EwsUMReportAudioMetricsAverageCountersType
     */
    public function setTotalAudioQualityCallsSampled(int $totalAudioQualityCallsSampled): self
    {
        // validation for constraint: int
        if (!is_null($totalAudioQualityCallsSampled) && !(is_int($totalAudioQualityCallsSampled) || ctype_digit($totalAudioQualityCallsSampled))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalAudioQualityCallsSampled, true), gettype($totalAudioQualityCallsSampled)), __LINE__);
        }
        $this->TotalAudioQualityCallsSampled = $totalAudioQualityCallsSampled;
        
        return $this;
    }
    /**
     * Get NMOS value
     * @return \StructType\EwsAudioMetricsAverageType|null
     */
    public function getNMOS(): ?\StructType\EwsAudioMetricsAverageType
    {
        return $this->NMOS;
    }
    /**
     * Set NMOS value
     * @param \StructType\EwsAudioMetricsAverageType $nMOS
     * @return \StructType\EwsUMReportAudioMetricsAverageCountersType
     */
    public function setNMOS(?\StructType\EwsAudioMetricsAverageType $nMOS = null): self
    {
        $this->NMOS = $nMOS;
        
        return $this;
    }
    /**
     * Get NMOSDegradation value
     * @return \StructType\EwsAudioMetricsAverageType|null
     */
    public function getNMOSDegradation(): ?\StructType\EwsAudioMetricsAverageType
    {
        return $this->NMOSDegradation;
    }
    /**
     * Set NMOSDegradation value
     * @param \StructType\EwsAudioMetricsAverageType $nMOSDegradation
     * @return \StructType\EwsUMReportAudioMetricsAverageCountersType
     */
    public function setNMOSDegradation(?\StructType\EwsAudioMetricsAverageType $nMOSDegradation = null): self
    {
        $this->NMOSDegradation = $nMOSDegradation;
        
        return $this;
    }
    /**
     * Get Jitter value
     * @return \StructType\EwsAudioMetricsAverageType|null
     */
    public function getJitter(): ?\StructType\EwsAudioMetricsAverageType
    {
        return $this->Jitter;
    }
    /**
     * Set Jitter value
     * @param \StructType\EwsAudioMetricsAverageType $jitter
     * @return \StructType\EwsUMReportAudioMetricsAverageCountersType
     */
    public function setJitter(?\StructType\EwsAudioMetricsAverageType $jitter = null): self
    {
        $this->Jitter = $jitter;
        
        return $this;
    }
    /**
     * Get PercentPacketLoss value
     * @return \StructType\EwsAudioMetricsAverageType|null
     */
    public function getPercentPacketLoss(): ?\StructType\EwsAudioMetricsAverageType
    {
        return $this->PercentPacketLoss;
    }
    /**
     * Set PercentPacketLoss value
     * @param \StructType\EwsAudioMetricsAverageType $percentPacketLoss
     * @return \StructType\EwsUMReportAudioMetricsAverageCountersType
     */
    public function setPercentPacketLoss(?\StructType\EwsAudioMetricsAverageType $percentPacketLoss = null): self
    {
        $this->PercentPacketLoss = $percentPacketLoss;
        
        return $this;
    }
    /**
     * Get RoundTrip value
     * @return \StructType\EwsAudioMetricsAverageType|null
     */
    public function getRoundTrip(): ?\StructType\EwsAudioMetricsAverageType
    {
        return $this->RoundTrip;
    }
    /**
     * Set RoundTrip value
     * @param \StructType\EwsAudioMetricsAverageType $roundTrip
     * @return \StructType\EwsUMReportAudioMetricsAverageCountersType
     */
    public function setRoundTrip(?\StructType\EwsAudioMetricsAverageType $roundTrip = null): self
    {
        $this->RoundTrip = $roundTrip;
        
        return $this;
    }
    /**
     * Get BurstLossDuration value
     * @return \StructType\EwsAudioMetricsAverageType|null
     */
    public function getBurstLossDuration(): ?\StructType\EwsAudioMetricsAverageType
    {
        return $this->BurstLossDuration;
    }
    /**
     * Set BurstLossDuration value
     * @param \StructType\EwsAudioMetricsAverageType $burstLossDuration
     * @return \StructType\EwsUMReportAudioMetricsAverageCountersType
     */
    public function setBurstLossDuration(?\StructType\EwsAudioMetricsAverageType $burstLossDuration = null): self
    {
        $this->BurstLossDuration = $burstLossDuration;
        
        return $this;
    }
}
