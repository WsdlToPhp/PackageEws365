<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UMReportRawCountersType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsUMReportRawCountersType extends AbstractStructBase
{
    /**
     * The AutoAttendantCalls
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var long
     */
    public $AutoAttendantCalls;
    /**
     * The FailedCalls
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var long
     */
    public $FailedCalls;
    /**
     * The FaxCalls
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var long
     */
    public $FaxCalls;
    /**
     * The MissedCalls
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var long
     */
    public $MissedCalls;
    /**
     * The OtherCalls
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var long
     */
    public $OtherCalls;
    /**
     * The OutboundCalls
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var long
     */
    public $OutboundCalls;
    /**
     * The SubscriberAccessCalls
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var long
     */
    public $SubscriberAccessCalls;
    /**
     * The VoiceMailCalls
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var long
     */
    public $VoiceMailCalls;
    /**
     * The TotalCalls
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var long
     */
    public $TotalCalls;
    /**
     * The Date
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var dateTime
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
     * @param long $autoAttendantCalls
     * @param long $failedCalls
     * @param long $faxCalls
     * @param long $missedCalls
     * @param long $otherCalls
     * @param long $outboundCalls
     * @param long $subscriberAccessCalls
     * @param long $voiceMailCalls
     * @param long $totalCalls
     * @param dateTime $date
     * @param \Ews\StructType\EwsUMReportAudioMetricsAverageCountersType
     * $audioMetricsAverages
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
     * @return long
     */
    public function getAutoAttendantCalls()
    {
        return $this->AutoAttendantCalls;
    }
    /**
     * Set AutoAttendantCalls value
     * @param long $autoAttendantCalls
     * @return \Ews\StructType\EwsUMReportRawCountersType
     */
    public function setAutoAttendantCalls($autoAttendantCalls = null)
    {
        $this->AutoAttendantCalls = $autoAttendantCalls;
        return $this;
    }
    /**
     * Get FailedCalls value
     * @return long
     */
    public function getFailedCalls()
    {
        return $this->FailedCalls;
    }
    /**
     * Set FailedCalls value
     * @param long $failedCalls
     * @return \Ews\StructType\EwsUMReportRawCountersType
     */
    public function setFailedCalls($failedCalls = null)
    {
        $this->FailedCalls = $failedCalls;
        return $this;
    }
    /**
     * Get FaxCalls value
     * @return long
     */
    public function getFaxCalls()
    {
        return $this->FaxCalls;
    }
    /**
     * Set FaxCalls value
     * @param long $faxCalls
     * @return \Ews\StructType\EwsUMReportRawCountersType
     */
    public function setFaxCalls($faxCalls = null)
    {
        $this->FaxCalls = $faxCalls;
        return $this;
    }
    /**
     * Get MissedCalls value
     * @return long
     */
    public function getMissedCalls()
    {
        return $this->MissedCalls;
    }
    /**
     * Set MissedCalls value
     * @param long $missedCalls
     * @return \Ews\StructType\EwsUMReportRawCountersType
     */
    public function setMissedCalls($missedCalls = null)
    {
        $this->MissedCalls = $missedCalls;
        return $this;
    }
    /**
     * Get OtherCalls value
     * @return long
     */
    public function getOtherCalls()
    {
        return $this->OtherCalls;
    }
    /**
     * Set OtherCalls value
     * @param long $otherCalls
     * @return \Ews\StructType\EwsUMReportRawCountersType
     */
    public function setOtherCalls($otherCalls = null)
    {
        $this->OtherCalls = $otherCalls;
        return $this;
    }
    /**
     * Get OutboundCalls value
     * @return long
     */
    public function getOutboundCalls()
    {
        return $this->OutboundCalls;
    }
    /**
     * Set OutboundCalls value
     * @param long $outboundCalls
     * @return \Ews\StructType\EwsUMReportRawCountersType
     */
    public function setOutboundCalls($outboundCalls = null)
    {
        $this->OutboundCalls = $outboundCalls;
        return $this;
    }
    /**
     * Get SubscriberAccessCalls value
     * @return long
     */
    public function getSubscriberAccessCalls()
    {
        return $this->SubscriberAccessCalls;
    }
    /**
     * Set SubscriberAccessCalls value
     * @param long $subscriberAccessCalls
     * @return \Ews\StructType\EwsUMReportRawCountersType
     */
    public function setSubscriberAccessCalls($subscriberAccessCalls = null)
    {
        $this->SubscriberAccessCalls = $subscriberAccessCalls;
        return $this;
    }
    /**
     * Get VoiceMailCalls value
     * @return long
     */
    public function getVoiceMailCalls()
    {
        return $this->VoiceMailCalls;
    }
    /**
     * Set VoiceMailCalls value
     * @param long $voiceMailCalls
     * @return \Ews\StructType\EwsUMReportRawCountersType
     */
    public function setVoiceMailCalls($voiceMailCalls = null)
    {
        $this->VoiceMailCalls = $voiceMailCalls;
        return $this;
    }
    /**
     * Get TotalCalls value
     * @return long
     */
    public function getTotalCalls()
    {
        return $this->TotalCalls;
    }
    /**
     * Set TotalCalls value
     * @param long $totalCalls
     * @return \Ews\StructType\EwsUMReportRawCountersType
     */
    public function setTotalCalls($totalCalls = null)
    {
        $this->TotalCalls = $totalCalls;
        return $this;
    }
    /**
     * Get Date value
     * @return dateTime
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param dateTime $date
     * @return \Ews\StructType\EwsUMReportRawCountersType
     */
    public function setDate($date = null)
    {
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
     * @param \Ews\StructType\EwsUMReportAudioMetricsAverageCountersType
     * $audioMetricsAverages
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
