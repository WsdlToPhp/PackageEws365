<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UMReportRawCountersType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUMReportRawCountersType extends AbstractStructBase
{
    /**
     * The AutoAttendantCalls
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $AutoAttendantCalls;
    /**
     * The FailedCalls
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $FailedCalls;
    /**
     * The FaxCalls
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $FaxCalls;
    /**
     * The MissedCalls
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $MissedCalls;
    /**
     * The OtherCalls
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $OtherCalls;
    /**
     * The OutboundCalls
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $OutboundCalls;
    /**
     * The SubscriberAccessCalls
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $SubscriberAccessCalls;
    /**
     * The VoiceMailCalls
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $VoiceMailCalls;
    /**
     * The TotalCalls
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $TotalCalls;
    /**
     * The Date
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Date;
    /**
     * The AudioMetricsAverages
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsUMReportAudioMetricsAverageCountersType
     */
    public $AudioMetricsAverages;
    /**
     * Constructor method for UMReportRawCountersType
     * @uses EwsUMReportRawCountersType::setAutoAttendantCalls()
     * @uses EwsUMReportRawCountersType::setFailedCalls()
     * @uses EwsUMReportRawCountersType::setFaxCalls()
     * @uses EwsUMReportRawCountersType::setMissedCalls()
     * @uses EwsUMReportRawCountersType::setOtherCalls()
     * @uses EwsUMReportRawCountersType::setOutboundCalls()
     * @uses EwsUMReportRawCountersType::setSubscriberAccessCalls()
     * @uses EwsUMReportRawCountersType::setVoiceMailCalls()
     * @uses EwsUMReportRawCountersType::setTotalCalls()
     * @uses EwsUMReportRawCountersType::setDate()
     * @uses EwsUMReportRawCountersType::setAudioMetricsAverages()
     * @param int $autoAttendantCalls
     * @param int $failedCalls
     * @param int $faxCalls
     * @param int $missedCalls
     * @param int $otherCalls
     * @param int $outboundCalls
     * @param int $subscriberAccessCalls
     * @param int $voiceMailCalls
     * @param int $totalCalls
     * @param string $date
     * @param \Ews\StructType\EwsUMReportAudioMetricsAverageCountersType $audioMetricsAverages
     */
    public function __construct($autoAttendantCalls = null, $failedCalls = null, $faxCalls = null, $missedCalls = null, $otherCalls = null, $outboundCalls = null, $subscriberAccessCalls = null, $voiceMailCalls = null, $totalCalls = null, $date = null, \Ews\StructType\EwsUMReportAudioMetricsAverageCountersType $audioMetricsAverages = null)
    {
        $this
            ->setAutoAttendantCalls($autoAttendantCalls)
            ->setFailedCalls($failedCalls)
            ->setFaxCalls($faxCalls)
            ->setMissedCalls($missedCalls)
            ->setOtherCalls($otherCalls)
            ->setOutboundCalls($outboundCalls)
            ->setSubscriberAccessCalls($subscriberAccessCalls)
            ->setVoiceMailCalls($voiceMailCalls)
            ->setTotalCalls($totalCalls)
            ->setDate($date)
            ->setAudioMetricsAverages($audioMetricsAverages);
    }
    /**
     * Get AutoAttendantCalls value
     * @return int
     */
    public function getAutoAttendantCalls()
    {
        return $this->AutoAttendantCalls;
    }
    /**
     * Set AutoAttendantCalls value
     * @param int $autoAttendantCalls
     * @return \Ews\StructType\EwsUMReportRawCountersType
     */
    public function setAutoAttendantCalls($autoAttendantCalls = null)
    {
        // validation for constraint: int
        if (!is_null($autoAttendantCalls) && !is_numeric($autoAttendantCalls)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($autoAttendantCalls)), __LINE__);
        }
        $this->AutoAttendantCalls = $autoAttendantCalls;
        return $this;
    }
    /**
     * Get FailedCalls value
     * @return int
     */
    public function getFailedCalls()
    {
        return $this->FailedCalls;
    }
    /**
     * Set FailedCalls value
     * @param int $failedCalls
     * @return \Ews\StructType\EwsUMReportRawCountersType
     */
    public function setFailedCalls($failedCalls = null)
    {
        // validation for constraint: int
        if (!is_null($failedCalls) && !is_numeric($failedCalls)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($failedCalls)), __LINE__);
        }
        $this->FailedCalls = $failedCalls;
        return $this;
    }
    /**
     * Get FaxCalls value
     * @return int
     */
    public function getFaxCalls()
    {
        return $this->FaxCalls;
    }
    /**
     * Set FaxCalls value
     * @param int $faxCalls
     * @return \Ews\StructType\EwsUMReportRawCountersType
     */
    public function setFaxCalls($faxCalls = null)
    {
        // validation for constraint: int
        if (!is_null($faxCalls) && !is_numeric($faxCalls)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($faxCalls)), __LINE__);
        }
        $this->FaxCalls = $faxCalls;
        return $this;
    }
    /**
     * Get MissedCalls value
     * @return int
     */
    public function getMissedCalls()
    {
        return $this->MissedCalls;
    }
    /**
     * Set MissedCalls value
     * @param int $missedCalls
     * @return \Ews\StructType\EwsUMReportRawCountersType
     */
    public function setMissedCalls($missedCalls = null)
    {
        // validation for constraint: int
        if (!is_null($missedCalls) && !is_numeric($missedCalls)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($missedCalls)), __LINE__);
        }
        $this->MissedCalls = $missedCalls;
        return $this;
    }
    /**
     * Get OtherCalls value
     * @return int
     */
    public function getOtherCalls()
    {
        return $this->OtherCalls;
    }
    /**
     * Set OtherCalls value
     * @param int $otherCalls
     * @return \Ews\StructType\EwsUMReportRawCountersType
     */
    public function setOtherCalls($otherCalls = null)
    {
        // validation for constraint: int
        if (!is_null($otherCalls) && !is_numeric($otherCalls)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($otherCalls)), __LINE__);
        }
        $this->OtherCalls = $otherCalls;
        return $this;
    }
    /**
     * Get OutboundCalls value
     * @return int
     */
    public function getOutboundCalls()
    {
        return $this->OutboundCalls;
    }
    /**
     * Set OutboundCalls value
     * @param int $outboundCalls
     * @return \Ews\StructType\EwsUMReportRawCountersType
     */
    public function setOutboundCalls($outboundCalls = null)
    {
        // validation for constraint: int
        if (!is_null($outboundCalls) && !is_numeric($outboundCalls)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($outboundCalls)), __LINE__);
        }
        $this->OutboundCalls = $outboundCalls;
        return $this;
    }
    /**
     * Get SubscriberAccessCalls value
     * @return int
     */
    public function getSubscriberAccessCalls()
    {
        return $this->SubscriberAccessCalls;
    }
    /**
     * Set SubscriberAccessCalls value
     * @param int $subscriberAccessCalls
     * @return \Ews\StructType\EwsUMReportRawCountersType
     */
    public function setSubscriberAccessCalls($subscriberAccessCalls = null)
    {
        // validation for constraint: int
        if (!is_null($subscriberAccessCalls) && !is_numeric($subscriberAccessCalls)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($subscriberAccessCalls)), __LINE__);
        }
        $this->SubscriberAccessCalls = $subscriberAccessCalls;
        return $this;
    }
    /**
     * Get VoiceMailCalls value
     * @return int
     */
    public function getVoiceMailCalls()
    {
        return $this->VoiceMailCalls;
    }
    /**
     * Set VoiceMailCalls value
     * @param int $voiceMailCalls
     * @return \Ews\StructType\EwsUMReportRawCountersType
     */
    public function setVoiceMailCalls($voiceMailCalls = null)
    {
        // validation for constraint: int
        if (!is_null($voiceMailCalls) && !is_numeric($voiceMailCalls)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($voiceMailCalls)), __LINE__);
        }
        $this->VoiceMailCalls = $voiceMailCalls;
        return $this;
    }
    /**
     * Get TotalCalls value
     * @return int
     */
    public function getTotalCalls()
    {
        return $this->TotalCalls;
    }
    /**
     * Set TotalCalls value
     * @param int $totalCalls
     * @return \Ews\StructType\EwsUMReportRawCountersType
     */
    public function setTotalCalls($totalCalls = null)
    {
        // validation for constraint: int
        if (!is_null($totalCalls) && !is_numeric($totalCalls)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalCalls)), __LINE__);
        }
        $this->TotalCalls = $totalCalls;
        return $this;
    }
    /**
     * Get Date value
     * @return string
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \Ews\StructType\EwsUMReportRawCountersType
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->Date = $date;
        return $this;
    }
    /**
     * Get AudioMetricsAverages value
     * @return \Ews\StructType\EwsUMReportAudioMetricsAverageCountersType|null
     */
    public function getAudioMetricsAverages()
    {
        return $this->AudioMetricsAverages;
    }
    /**
     * Set AudioMetricsAverages value
     * @param \Ews\StructType\EwsUMReportAudioMetricsAverageCountersType $audioMetricsAverages
     * @return \Ews\StructType\EwsUMReportRawCountersType
     */
    public function setAudioMetricsAverages(\Ews\StructType\EwsUMReportAudioMetricsAverageCountersType $audioMetricsAverages = null)
    {
        $this->AudioMetricsAverages = $audioMetricsAverages;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUMReportRawCountersType
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
