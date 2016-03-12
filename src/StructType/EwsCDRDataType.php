<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CDRDataType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCDRDataType extends AbstractStructBase
{
    /**
     * The CallStartTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $CallStartTime;
    /**
     * The CallDuration
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $CallDuration;
    /**
     * The GatewayGuid
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $GatewayGuid;
    /**
     * The CreationTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $CreationTime;
    /**
     * The CallType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CallType;
    /**
     * The CallIdentity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CallIdentity;
    /**
     * The ParentCallIdentity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ParentCallIdentity;
    /**
     * The UMServerName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UMServerName;
    /**
     * The DialPlanGuid
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $DialPlanGuid;
    /**
     * The DialPlanName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DialPlanName;
    /**
     * The IPGatewayAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $IPGatewayAddress;
    /**
     * The IPGatewayName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $IPGatewayName;
    /**
     * The CalledPhoneNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CalledPhoneNumber;
    /**
     * The CallerPhoneNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CallerPhoneNumber;
    /**
     * The OfferResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OfferResult;
    /**
     * The DropCallReason
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DropCallReason;
    /**
     * The ReasonForCall
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReasonForCall;
    /**
     * The TransferredNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TransferredNumber;
    /**
     * The DialedString
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DialedString;
    /**
     * The CallerMailboxAlias
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CallerMailboxAlias;
    /**
     * The CalleeMailboxAlias
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CalleeMailboxAlias;
    /**
     * The CallerLegacyExchangeDN
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CallerLegacyExchangeDN;
    /**
     * The CalleeLegacyExchangeDN
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CalleeLegacyExchangeDN;
    /**
     * The AutoAttendantName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AutoAttendantName;
    /**
     * The AudioQualityMetrics
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsAudioQualityType
     */
    public $AudioQualityMetrics;
    /**
     * Constructor method for CDRDataType
     * @uses EwsCDRDataType::setCallStartTime()
     * @uses EwsCDRDataType::setCallDuration()
     * @uses EwsCDRDataType::setGatewayGuid()
     * @uses EwsCDRDataType::setCreationTime()
     * @uses EwsCDRDataType::setCallType()
     * @uses EwsCDRDataType::setCallIdentity()
     * @uses EwsCDRDataType::setParentCallIdentity()
     * @uses EwsCDRDataType::setUMServerName()
     * @uses EwsCDRDataType::setDialPlanGuid()
     * @uses EwsCDRDataType::setDialPlanName()
     * @uses EwsCDRDataType::setIPGatewayAddress()
     * @uses EwsCDRDataType::setIPGatewayName()
     * @uses EwsCDRDataType::setCalledPhoneNumber()
     * @uses EwsCDRDataType::setCallerPhoneNumber()
     * @uses EwsCDRDataType::setOfferResult()
     * @uses EwsCDRDataType::setDropCallReason()
     * @uses EwsCDRDataType::setReasonForCall()
     * @uses EwsCDRDataType::setTransferredNumber()
     * @uses EwsCDRDataType::setDialedString()
     * @uses EwsCDRDataType::setCallerMailboxAlias()
     * @uses EwsCDRDataType::setCalleeMailboxAlias()
     * @uses EwsCDRDataType::setCallerLegacyExchangeDN()
     * @uses EwsCDRDataType::setCalleeLegacyExchangeDN()
     * @uses EwsCDRDataType::setAutoAttendantName()
     * @uses EwsCDRDataType::setAudioQualityMetrics()
     * @param string $callStartTime
     * @param int $callDuration
     * @param string $gatewayGuid
     * @param string $creationTime
     * @param string $callType
     * @param string $callIdentity
     * @param string $parentCallIdentity
     * @param string $uMServerName
     * @param string $dialPlanGuid
     * @param string $dialPlanName
     * @param string $iPGatewayAddress
     * @param string $iPGatewayName
     * @param string $calledPhoneNumber
     * @param string $callerPhoneNumber
     * @param string $offerResult
     * @param string $dropCallReason
     * @param string $reasonForCall
     * @param string $transferredNumber
     * @param string $dialedString
     * @param string $callerMailboxAlias
     * @param string $calleeMailboxAlias
     * @param string $callerLegacyExchangeDN
     * @param string $calleeLegacyExchangeDN
     * @param string $autoAttendantName
     * @param \Ews\StructType\EwsAudioQualityType $audioQualityMetrics
     */
    public function __construct($callStartTime = null, $callDuration = null, $gatewayGuid = null, $creationTime = null, $callType = null, $callIdentity = null, $parentCallIdentity = null, $uMServerName = null, $dialPlanGuid = null, $dialPlanName = null, $iPGatewayAddress = null, $iPGatewayName = null, $calledPhoneNumber = null, $callerPhoneNumber = null, $offerResult = null, $dropCallReason = null, $reasonForCall = null, $transferredNumber = null, $dialedString = null, $callerMailboxAlias = null, $calleeMailboxAlias = null, $callerLegacyExchangeDN = null, $calleeLegacyExchangeDN = null, $autoAttendantName = null, \Ews\StructType\EwsAudioQualityType $audioQualityMetrics = null)
    {
        $this
            ->setCallStartTime($callStartTime)
            ->setCallDuration($callDuration)
            ->setGatewayGuid($gatewayGuid)
            ->setCreationTime($creationTime)
            ->setCallType($callType)
            ->setCallIdentity($callIdentity)
            ->setParentCallIdentity($parentCallIdentity)
            ->setUMServerName($uMServerName)
            ->setDialPlanGuid($dialPlanGuid)
            ->setDialPlanName($dialPlanName)
            ->setIPGatewayAddress($iPGatewayAddress)
            ->setIPGatewayName($iPGatewayName)
            ->setCalledPhoneNumber($calledPhoneNumber)
            ->setCallerPhoneNumber($callerPhoneNumber)
            ->setOfferResult($offerResult)
            ->setDropCallReason($dropCallReason)
            ->setReasonForCall($reasonForCall)
            ->setTransferredNumber($transferredNumber)
            ->setDialedString($dialedString)
            ->setCallerMailboxAlias($callerMailboxAlias)
            ->setCalleeMailboxAlias($calleeMailboxAlias)
            ->setCallerLegacyExchangeDN($callerLegacyExchangeDN)
            ->setCalleeLegacyExchangeDN($calleeLegacyExchangeDN)
            ->setAutoAttendantName($autoAttendantName)
            ->setAudioQualityMetrics($audioQualityMetrics);
    }
    /**
     * Get CallStartTime value
     * @return string
     */
    public function getCallStartTime()
    {
        return $this->CallStartTime;
    }
    /**
     * Set CallStartTime value
     * @param string $callStartTime
     * @return \Ews\StructType\EwsCDRDataType
     */
    public function setCallStartTime($callStartTime = null)
    {
        // validation for constraint: string
        if (!is_null($callStartTime) && !is_string($callStartTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($callStartTime)), __LINE__);
        }
        $this->CallStartTime = $callStartTime;
        return $this;
    }
    /**
     * Get CallDuration value
     * @return int
     */
    public function getCallDuration()
    {
        return $this->CallDuration;
    }
    /**
     * Set CallDuration value
     * @param int $callDuration
     * @return \Ews\StructType\EwsCDRDataType
     */
    public function setCallDuration($callDuration = null)
    {
        // validation for constraint: int
        if (!is_null($callDuration) && !is_int($callDuration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($callDuration)), __LINE__);
        }
        $this->CallDuration = $callDuration;
        return $this;
    }
    /**
     * Get GatewayGuid value
     * @return string
     */
    public function getGatewayGuid()
    {
        return $this->GatewayGuid;
    }
    /**
     * Set GatewayGuid value
     * @param string $gatewayGuid
     * @return \Ews\StructType\EwsCDRDataType
     */
    public function setGatewayGuid($gatewayGuid = null)
    {
        // validation for constraint: pattern
        if (!is_null($gatewayGuid) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $gatewayGuid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($gatewayGuid)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($gatewayGuid) && !is_string($gatewayGuid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gatewayGuid)), __LINE__);
        }
        $this->GatewayGuid = $gatewayGuid;
        return $this;
    }
    /**
     * Get CreationTime value
     * @return string
     */
    public function getCreationTime()
    {
        return $this->CreationTime;
    }
    /**
     * Set CreationTime value
     * @param string $creationTime
     * @return \Ews\StructType\EwsCDRDataType
     */
    public function setCreationTime($creationTime = null)
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creationTime)), __LINE__);
        }
        $this->CreationTime = $creationTime;
        return $this;
    }
    /**
     * Get CallType value
     * @return string|null
     */
    public function getCallType()
    {
        return $this->CallType;
    }
    /**
     * Set CallType value
     * @param string $callType
     * @return \Ews\StructType\EwsCDRDataType
     */
    public function setCallType($callType = null)
    {
        // validation for constraint: string
        if (!is_null($callType) && !is_string($callType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($callType)), __LINE__);
        }
        $this->CallType = $callType;
        return $this;
    }
    /**
     * Get CallIdentity value
     * @return string|null
     */
    public function getCallIdentity()
    {
        return $this->CallIdentity;
    }
    /**
     * Set CallIdentity value
     * @param string $callIdentity
     * @return \Ews\StructType\EwsCDRDataType
     */
    public function setCallIdentity($callIdentity = null)
    {
        // validation for constraint: string
        if (!is_null($callIdentity) && !is_string($callIdentity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($callIdentity)), __LINE__);
        }
        $this->CallIdentity = $callIdentity;
        return $this;
    }
    /**
     * Get ParentCallIdentity value
     * @return string|null
     */
    public function getParentCallIdentity()
    {
        return $this->ParentCallIdentity;
    }
    /**
     * Set ParentCallIdentity value
     * @param string $parentCallIdentity
     * @return \Ews\StructType\EwsCDRDataType
     */
    public function setParentCallIdentity($parentCallIdentity = null)
    {
        // validation for constraint: string
        if (!is_null($parentCallIdentity) && !is_string($parentCallIdentity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($parentCallIdentity)), __LINE__);
        }
        $this->ParentCallIdentity = $parentCallIdentity;
        return $this;
    }
    /**
     * Get UMServerName value
     * @return string|null
     */
    public function getUMServerName()
    {
        return $this->UMServerName;
    }
    /**
     * Set UMServerName value
     * @param string $uMServerName
     * @return \Ews\StructType\EwsCDRDataType
     */
    public function setUMServerName($uMServerName = null)
    {
        // validation for constraint: string
        if (!is_null($uMServerName) && !is_string($uMServerName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uMServerName)), __LINE__);
        }
        $this->UMServerName = $uMServerName;
        return $this;
    }
    /**
     * Get DialPlanGuid value
     * @return string|null
     */
    public function getDialPlanGuid()
    {
        return $this->DialPlanGuid;
    }
    /**
     * Set DialPlanGuid value
     * @param string $dialPlanGuid
     * @return \Ews\StructType\EwsCDRDataType
     */
    public function setDialPlanGuid($dialPlanGuid = null)
    {
        // validation for constraint: pattern
        if (!is_null($dialPlanGuid) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $dialPlanGuid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($dialPlanGuid)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($dialPlanGuid) && !is_string($dialPlanGuid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dialPlanGuid)), __LINE__);
        }
        $this->DialPlanGuid = $dialPlanGuid;
        return $this;
    }
    /**
     * Get DialPlanName value
     * @return string|null
     */
    public function getDialPlanName()
    {
        return $this->DialPlanName;
    }
    /**
     * Set DialPlanName value
     * @param string $dialPlanName
     * @return \Ews\StructType\EwsCDRDataType
     */
    public function setDialPlanName($dialPlanName = null)
    {
        // validation for constraint: string
        if (!is_null($dialPlanName) && !is_string($dialPlanName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dialPlanName)), __LINE__);
        }
        $this->DialPlanName = $dialPlanName;
        return $this;
    }
    /**
     * Get IPGatewayAddress value
     * @return string|null
     */
    public function getIPGatewayAddress()
    {
        return $this->IPGatewayAddress;
    }
    /**
     * Set IPGatewayAddress value
     * @param string $iPGatewayAddress
     * @return \Ews\StructType\EwsCDRDataType
     */
    public function setIPGatewayAddress($iPGatewayAddress = null)
    {
        // validation for constraint: string
        if (!is_null($iPGatewayAddress) && !is_string($iPGatewayAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iPGatewayAddress)), __LINE__);
        }
        $this->IPGatewayAddress = $iPGatewayAddress;
        return $this;
    }
    /**
     * Get IPGatewayName value
     * @return string|null
     */
    public function getIPGatewayName()
    {
        return $this->IPGatewayName;
    }
    /**
     * Set IPGatewayName value
     * @param string $iPGatewayName
     * @return \Ews\StructType\EwsCDRDataType
     */
    public function setIPGatewayName($iPGatewayName = null)
    {
        // validation for constraint: string
        if (!is_null($iPGatewayName) && !is_string($iPGatewayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iPGatewayName)), __LINE__);
        }
        $this->IPGatewayName = $iPGatewayName;
        return $this;
    }
    /**
     * Get CalledPhoneNumber value
     * @return string|null
     */
    public function getCalledPhoneNumber()
    {
        return $this->CalledPhoneNumber;
    }
    /**
     * Set CalledPhoneNumber value
     * @param string $calledPhoneNumber
     * @return \Ews\StructType\EwsCDRDataType
     */
    public function setCalledPhoneNumber($calledPhoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($calledPhoneNumber) && !is_string($calledPhoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($calledPhoneNumber)), __LINE__);
        }
        $this->CalledPhoneNumber = $calledPhoneNumber;
        return $this;
    }
    /**
     * Get CallerPhoneNumber value
     * @return string|null
     */
    public function getCallerPhoneNumber()
    {
        return $this->CallerPhoneNumber;
    }
    /**
     * Set CallerPhoneNumber value
     * @param string $callerPhoneNumber
     * @return \Ews\StructType\EwsCDRDataType
     */
    public function setCallerPhoneNumber($callerPhoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($callerPhoneNumber) && !is_string($callerPhoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($callerPhoneNumber)), __LINE__);
        }
        $this->CallerPhoneNumber = $callerPhoneNumber;
        return $this;
    }
    /**
     * Get OfferResult value
     * @return string|null
     */
    public function getOfferResult()
    {
        return $this->OfferResult;
    }
    /**
     * Set OfferResult value
     * @param string $offerResult
     * @return \Ews\StructType\EwsCDRDataType
     */
    public function setOfferResult($offerResult = null)
    {
        // validation for constraint: string
        if (!is_null($offerResult) && !is_string($offerResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offerResult)), __LINE__);
        }
        $this->OfferResult = $offerResult;
        return $this;
    }
    /**
     * Get DropCallReason value
     * @return string|null
     */
    public function getDropCallReason()
    {
        return $this->DropCallReason;
    }
    /**
     * Set DropCallReason value
     * @param string $dropCallReason
     * @return \Ews\StructType\EwsCDRDataType
     */
    public function setDropCallReason($dropCallReason = null)
    {
        // validation for constraint: string
        if (!is_null($dropCallReason) && !is_string($dropCallReason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dropCallReason)), __LINE__);
        }
        $this->DropCallReason = $dropCallReason;
        return $this;
    }
    /**
     * Get ReasonForCall value
     * @return string|null
     */
    public function getReasonForCall()
    {
        return $this->ReasonForCall;
    }
    /**
     * Set ReasonForCall value
     * @param string $reasonForCall
     * @return \Ews\StructType\EwsCDRDataType
     */
    public function setReasonForCall($reasonForCall = null)
    {
        // validation for constraint: string
        if (!is_null($reasonForCall) && !is_string($reasonForCall)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reasonForCall)), __LINE__);
        }
        $this->ReasonForCall = $reasonForCall;
        return $this;
    }
    /**
     * Get TransferredNumber value
     * @return string|null
     */
    public function getTransferredNumber()
    {
        return $this->TransferredNumber;
    }
    /**
     * Set TransferredNumber value
     * @param string $transferredNumber
     * @return \Ews\StructType\EwsCDRDataType
     */
    public function setTransferredNumber($transferredNumber = null)
    {
        // validation for constraint: string
        if (!is_null($transferredNumber) && !is_string($transferredNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transferredNumber)), __LINE__);
        }
        $this->TransferredNumber = $transferredNumber;
        return $this;
    }
    /**
     * Get DialedString value
     * @return string|null
     */
    public function getDialedString()
    {
        return $this->DialedString;
    }
    /**
     * Set DialedString value
     * @param string $dialedString
     * @return \Ews\StructType\EwsCDRDataType
     */
    public function setDialedString($dialedString = null)
    {
        // validation for constraint: string
        if (!is_null($dialedString) && !is_string($dialedString)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dialedString)), __LINE__);
        }
        $this->DialedString = $dialedString;
        return $this;
    }
    /**
     * Get CallerMailboxAlias value
     * @return string|null
     */
    public function getCallerMailboxAlias()
    {
        return $this->CallerMailboxAlias;
    }
    /**
     * Set CallerMailboxAlias value
     * @param string $callerMailboxAlias
     * @return \Ews\StructType\EwsCDRDataType
     */
    public function setCallerMailboxAlias($callerMailboxAlias = null)
    {
        // validation for constraint: string
        if (!is_null($callerMailboxAlias) && !is_string($callerMailboxAlias)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($callerMailboxAlias)), __LINE__);
        }
        $this->CallerMailboxAlias = $callerMailboxAlias;
        return $this;
    }
    /**
     * Get CalleeMailboxAlias value
     * @return string|null
     */
    public function getCalleeMailboxAlias()
    {
        return $this->CalleeMailboxAlias;
    }
    /**
     * Set CalleeMailboxAlias value
     * @param string $calleeMailboxAlias
     * @return \Ews\StructType\EwsCDRDataType
     */
    public function setCalleeMailboxAlias($calleeMailboxAlias = null)
    {
        // validation for constraint: string
        if (!is_null($calleeMailboxAlias) && !is_string($calleeMailboxAlias)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($calleeMailboxAlias)), __LINE__);
        }
        $this->CalleeMailboxAlias = $calleeMailboxAlias;
        return $this;
    }
    /**
     * Get CallerLegacyExchangeDN value
     * @return string|null
     */
    public function getCallerLegacyExchangeDN()
    {
        return $this->CallerLegacyExchangeDN;
    }
    /**
     * Set CallerLegacyExchangeDN value
     * @param string $callerLegacyExchangeDN
     * @return \Ews\StructType\EwsCDRDataType
     */
    public function setCallerLegacyExchangeDN($callerLegacyExchangeDN = null)
    {
        // validation for constraint: string
        if (!is_null($callerLegacyExchangeDN) && !is_string($callerLegacyExchangeDN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($callerLegacyExchangeDN)), __LINE__);
        }
        $this->CallerLegacyExchangeDN = $callerLegacyExchangeDN;
        return $this;
    }
    /**
     * Get CalleeLegacyExchangeDN value
     * @return string|null
     */
    public function getCalleeLegacyExchangeDN()
    {
        return $this->CalleeLegacyExchangeDN;
    }
    /**
     * Set CalleeLegacyExchangeDN value
     * @param string $calleeLegacyExchangeDN
     * @return \Ews\StructType\EwsCDRDataType
     */
    public function setCalleeLegacyExchangeDN($calleeLegacyExchangeDN = null)
    {
        // validation for constraint: string
        if (!is_null($calleeLegacyExchangeDN) && !is_string($calleeLegacyExchangeDN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($calleeLegacyExchangeDN)), __LINE__);
        }
        $this->CalleeLegacyExchangeDN = $calleeLegacyExchangeDN;
        return $this;
    }
    /**
     * Get AutoAttendantName value
     * @return string|null
     */
    public function getAutoAttendantName()
    {
        return $this->AutoAttendantName;
    }
    /**
     * Set AutoAttendantName value
     * @param string $autoAttendantName
     * @return \Ews\StructType\EwsCDRDataType
     */
    public function setAutoAttendantName($autoAttendantName = null)
    {
        // validation for constraint: string
        if (!is_null($autoAttendantName) && !is_string($autoAttendantName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($autoAttendantName)), __LINE__);
        }
        $this->AutoAttendantName = $autoAttendantName;
        return $this;
    }
    /**
     * Get AudioQualityMetrics value
     * @return \Ews\StructType\EwsAudioQualityType|null
     */
    public function getAudioQualityMetrics()
    {
        return $this->AudioQualityMetrics;
    }
    /**
     * Set AudioQualityMetrics value
     * @param \Ews\StructType\EwsAudioQualityType $audioQualityMetrics
     * @return \Ews\StructType\EwsCDRDataType
     */
    public function setAudioQualityMetrics(\Ews\StructType\EwsAudioQualityType $audioQualityMetrics = null)
    {
        $this->AudioQualityMetrics = $audioQualityMetrics;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsCDRDataType
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
