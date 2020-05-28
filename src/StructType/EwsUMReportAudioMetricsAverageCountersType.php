<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
    public $TotalAudioQualityCallsSampled;
    /**
     * The NMOS
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsAudioMetricsAverageType
     */
    public $NMOS;
    /**
     * The NMOSDegradation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsAudioMetricsAverageType
     */
    public $NMOSDegradation;
    /**
     * The Jitter
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsAudioMetricsAverageType
     */
    public $Jitter;
    /**
     * The PercentPacketLoss
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsAudioMetricsAverageType
     */
    public $PercentPacketLoss;
    /**
     * The RoundTrip
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsAudioMetricsAverageType
     */
    public $RoundTrip;
    /**
     * The BurstLossDuration
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsAudioMetricsAverageType
     */
    public $BurstLossDuration;
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
     * @param \Ews\StructType\EwsAudioMetricsAverageType $nMOS
     * @param \Ews\StructType\EwsAudioMetricsAverageType $nMOSDegradation
     * @param \Ews\StructType\EwsAudioMetricsAverageType $jitter
     * @param \Ews\StructType\EwsAudioMetricsAverageType $percentPacketLoss
     * @param \Ews\StructType\EwsAudioMetricsAverageType $roundTrip
     * @param \Ews\StructType\EwsAudioMetricsAverageType $burstLossDuration
     */
    public function __construct($totalAudioQualityCallsSampled = null, \Ews\StructType\EwsAudioMetricsAverageType $nMOS = null, \Ews\StructType\EwsAudioMetricsAverageType $nMOSDegradation = null, \Ews\StructType\EwsAudioMetricsAverageType $jitter = null, \Ews\StructType\EwsAudioMetricsAverageType $percentPacketLoss = null, \Ews\StructType\EwsAudioMetricsAverageType $roundTrip = null, \Ews\StructType\EwsAudioMetricsAverageType $burstLossDuration = null)
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
    public function getTotalAudioQualityCallsSampled()
    {
        return $this->TotalAudioQualityCallsSampled;
    }
    /**
     * Set TotalAudioQualityCallsSampled value
     * @param int $totalAudioQualityCallsSampled
     * @return \Ews\StructType\EwsUMReportAudioMetricsAverageCountersType
     */
    public function setTotalAudioQualityCallsSampled($totalAudioQualityCallsSampled = null)
    {
        // validation for constraint: int
        if (!is_null($totalAudioQualityCallsSampled) && !(is_int($totalAudioQualityCallsSampled) || ctype_digit($totalAudioQualityCallsSampled))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalAudioQualityCallsSampled, true), gettype($totalAudioQualityCallsSampled)), __LINE__);
        }
        $this->TotalAudioQualityCallsSampled = $totalAudioQualityCallsSampled;
        return $this;
    }
    /**
     * Get NMOS value
     * @return \Ews\StructType\EwsAudioMetricsAverageType|null
     */
    public function getNMOS()
    {
        return $this->NMOS;
    }
    /**
     * Set NMOS value
     * @param \Ews\StructType\EwsAudioMetricsAverageType $nMOS
     * @return \Ews\StructType\EwsUMReportAudioMetricsAverageCountersType
     */
    public function setNMOS(\Ews\StructType\EwsAudioMetricsAverageType $nMOS = null)
    {
        $this->NMOS = $nMOS;
        return $this;
    }
    /**
     * Get NMOSDegradation value
     * @return \Ews\StructType\EwsAudioMetricsAverageType|null
     */
    public function getNMOSDegradation()
    {
        return $this->NMOSDegradation;
    }
    /**
     * Set NMOSDegradation value
     * @param \Ews\StructType\EwsAudioMetricsAverageType $nMOSDegradation
     * @return \Ews\StructType\EwsUMReportAudioMetricsAverageCountersType
     */
    public function setNMOSDegradation(\Ews\StructType\EwsAudioMetricsAverageType $nMOSDegradation = null)
    {
        $this->NMOSDegradation = $nMOSDegradation;
        return $this;
    }
    /**
     * Get Jitter value
     * @return \Ews\StructType\EwsAudioMetricsAverageType|null
     */
    public function getJitter()
    {
        return $this->Jitter;
    }
    /**
     * Set Jitter value
     * @param \Ews\StructType\EwsAudioMetricsAverageType $jitter
     * @return \Ews\StructType\EwsUMReportAudioMetricsAverageCountersType
     */
    public function setJitter(\Ews\StructType\EwsAudioMetricsAverageType $jitter = null)
    {
        $this->Jitter = $jitter;
        return $this;
    }
    /**
     * Get PercentPacketLoss value
     * @return \Ews\StructType\EwsAudioMetricsAverageType|null
     */
    public function getPercentPacketLoss()
    {
        return $this->PercentPacketLoss;
    }
    /**
     * Set PercentPacketLoss value
     * @param \Ews\StructType\EwsAudioMetricsAverageType $percentPacketLoss
     * @return \Ews\StructType\EwsUMReportAudioMetricsAverageCountersType
     */
    public function setPercentPacketLoss(\Ews\StructType\EwsAudioMetricsAverageType $percentPacketLoss = null)
    {
        $this->PercentPacketLoss = $percentPacketLoss;
        return $this;
    }
    /**
     * Get RoundTrip value
     * @return \Ews\StructType\EwsAudioMetricsAverageType|null
     */
    public function getRoundTrip()
    {
        return $this->RoundTrip;
    }
    /**
     * Set RoundTrip value
     * @param \Ews\StructType\EwsAudioMetricsAverageType $roundTrip
     * @return \Ews\StructType\EwsUMReportAudioMetricsAverageCountersType
     */
    public function setRoundTrip(\Ews\StructType\EwsAudioMetricsAverageType $roundTrip = null)
    {
        $this->RoundTrip = $roundTrip;
        return $this;
    }
    /**
     * Get BurstLossDuration value
     * @return \Ews\StructType\EwsAudioMetricsAverageType|null
     */
    public function getBurstLossDuration()
    {
        return $this->BurstLossDuration;
    }
    /**
     * Set BurstLossDuration value
     * @param \Ews\StructType\EwsAudioMetricsAverageType $burstLossDuration
     * @return \Ews\StructType\EwsUMReportAudioMetricsAverageCountersType
     */
    public function setBurstLossDuration(\Ews\StructType\EwsAudioMetricsAverageType $burstLossDuration = null)
    {
        $this->BurstLossDuration = $burstLossDuration;
        return $this;
    }
}
