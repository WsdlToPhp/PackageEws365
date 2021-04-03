<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $CallStartTime;
    /**
     * The CallDuration
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $CallDuration;
    /**
     * The GatewayGuid
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    protected string $GatewayGuid;
    /**
     * The CreationTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $CreationTime;
    /**
     * The CallType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CallType = null;
    /**
     * The CallIdentity
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CallIdentity = null;
    /**
     * The ParentCallIdentity
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ParentCallIdentity = null;
    /**
     * The UMServerName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UMServerName = null;
    /**
     * The DialPlanGuid
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string|null
     */
    protected ?string $DialPlanGuid = null;
    /**
     * The DialPlanName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DialPlanName = null;
    /**
     * The IPGatewayAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $IPGatewayAddress = null;
    /**
     * The IPGatewayName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $IPGatewayName = null;
    /**
     * The CalledPhoneNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CalledPhoneNumber = null;
    /**
     * The CallerPhoneNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CallerPhoneNumber = null;
    /**
     * The OfferResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OfferResult = null;
    /**
     * The DropCallReason
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DropCallReason = null;
    /**
     * The ReasonForCall
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ReasonForCall = null;
    /**
     * The TransferredNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TransferredNumber = null;
    /**
     * The DialedString
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DialedString = null;
    /**
     * The CallerMailboxAlias
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CallerMailboxAlias = null;
    /**
     * The CalleeMailboxAlias
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CalleeMailboxAlias = null;
    /**
     * The CallerLegacyExchangeDN
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CallerLegacyExchangeDN = null;
    /**
     * The CalleeLegacyExchangeDN
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CalleeLegacyExchangeDN = null;
    /**
     * The AutoAttendantName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AutoAttendantName = null;
    /**
     * The AudioQualityMetrics
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsAudioQualityType|null
     */
    protected ?\StructType\EwsAudioQualityType $AudioQualityMetrics = null;
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
     * @param \StructType\EwsAudioQualityType $audioQualityMetrics
     */
    public function __construct(string $callStartTime, int $callDuration, string $gatewayGuid, string $creationTime, ?string $callType = null, ?string $callIdentity = null, ?string $parentCallIdentity = null, ?string $uMServerName = null, ?string $dialPlanGuid = null, ?string $dialPlanName = null, ?string $iPGatewayAddress = null, ?string $iPGatewayName = null, ?string $calledPhoneNumber = null, ?string $callerPhoneNumber = null, ?string $offerResult = null, ?string $dropCallReason = null, ?string $reasonForCall = null, ?string $transferredNumber = null, ?string $dialedString = null, ?string $callerMailboxAlias = null, ?string $calleeMailboxAlias = null, ?string $callerLegacyExchangeDN = null, ?string $calleeLegacyExchangeDN = null, ?string $autoAttendantName = null, ?\StructType\EwsAudioQualityType $audioQualityMetrics = null)
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
    public function getCallStartTime(): string
    {
        return $this->CallStartTime;
    }
    /**
     * Set CallStartTime value
     * @param string $callStartTime
     * @return \StructType\EwsCDRDataType
     */
    public function setCallStartTime(string $callStartTime): self
    {
        // validation for constraint: string
        if (!is_null($callStartTime) && !is_string($callStartTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($callStartTime, true), gettype($callStartTime)), __LINE__);
        }
        $this->CallStartTime = $callStartTime;
        
        return $this;
    }
    /**
     * Get CallDuration value
     * @return int
     */
    public function getCallDuration(): int
    {
        return $this->CallDuration;
    }
    /**
     * Set CallDuration value
     * @param int $callDuration
     * @return \StructType\EwsCDRDataType
     */
    public function setCallDuration(int $callDuration): self
    {
        // validation for constraint: int
        if (!is_null($callDuration) && !(is_int($callDuration) || ctype_digit($callDuration))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($callDuration, true), gettype($callDuration)), __LINE__);
        }
        $this->CallDuration = $callDuration;
        
        return $this;
    }
    /**
     * Get GatewayGuid value
     * @return string
     */
    public function getGatewayGuid(): string
    {
        return $this->GatewayGuid;
    }
    /**
     * Set GatewayGuid value
     * @param string $gatewayGuid
     * @return \StructType\EwsCDRDataType
     */
    public function setGatewayGuid(string $gatewayGuid): self
    {
        // validation for constraint: string
        if (!is_null($gatewayGuid) && !is_string($gatewayGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gatewayGuid, true), gettype($gatewayGuid)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($gatewayGuid) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $gatewayGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($gatewayGuid, true)), __LINE__);
        }
        $this->GatewayGuid = $gatewayGuid;
        
        return $this;
    }
    /**
     * Get CreationTime value
     * @return string
     */
    public function getCreationTime(): string
    {
        return $this->CreationTime;
    }
    /**
     * Set CreationTime value
     * @param string $creationTime
     * @return \StructType\EwsCDRDataType
     */
    public function setCreationTime(string $creationTime): self
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTime, true), gettype($creationTime)), __LINE__);
        }
        $this->CreationTime = $creationTime;
        
        return $this;
    }
    /**
     * Get CallType value
     * @return string|null
     */
    public function getCallType(): ?string
    {
        return $this->CallType;
    }
    /**
     * Set CallType value
     * @param string $callType
     * @return \StructType\EwsCDRDataType
     */
    public function setCallType(?string $callType = null): self
    {
        // validation for constraint: string
        if (!is_null($callType) && !is_string($callType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($callType, true), gettype($callType)), __LINE__);
        }
        $this->CallType = $callType;
        
        return $this;
    }
    /**
     * Get CallIdentity value
     * @return string|null
     */
    public function getCallIdentity(): ?string
    {
        return $this->CallIdentity;
    }
    /**
     * Set CallIdentity value
     * @param string $callIdentity
     * @return \StructType\EwsCDRDataType
     */
    public function setCallIdentity(?string $callIdentity = null): self
    {
        // validation for constraint: string
        if (!is_null($callIdentity) && !is_string($callIdentity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($callIdentity, true), gettype($callIdentity)), __LINE__);
        }
        $this->CallIdentity = $callIdentity;
        
        return $this;
    }
    /**
     * Get ParentCallIdentity value
     * @return string|null
     */
    public function getParentCallIdentity(): ?string
    {
        return $this->ParentCallIdentity;
    }
    /**
     * Set ParentCallIdentity value
     * @param string $parentCallIdentity
     * @return \StructType\EwsCDRDataType
     */
    public function setParentCallIdentity(?string $parentCallIdentity = null): self
    {
        // validation for constraint: string
        if (!is_null($parentCallIdentity) && !is_string($parentCallIdentity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentCallIdentity, true), gettype($parentCallIdentity)), __LINE__);
        }
        $this->ParentCallIdentity = $parentCallIdentity;
        
        return $this;
    }
    /**
     * Get UMServerName value
     * @return string|null
     */
    public function getUMServerName(): ?string
    {
        return $this->UMServerName;
    }
    /**
     * Set UMServerName value
     * @param string $uMServerName
     * @return \StructType\EwsCDRDataType
     */
    public function setUMServerName(?string $uMServerName = null): self
    {
        // validation for constraint: string
        if (!is_null($uMServerName) && !is_string($uMServerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uMServerName, true), gettype($uMServerName)), __LINE__);
        }
        $this->UMServerName = $uMServerName;
        
        return $this;
    }
    /**
     * Get DialPlanGuid value
     * @return string|null
     */
    public function getDialPlanGuid(): ?string
    {
        return $this->DialPlanGuid;
    }
    /**
     * Set DialPlanGuid value
     * @param string $dialPlanGuid
     * @return \StructType\EwsCDRDataType
     */
    public function setDialPlanGuid(?string $dialPlanGuid = null): self
    {
        // validation for constraint: string
        if (!is_null($dialPlanGuid) && !is_string($dialPlanGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dialPlanGuid, true), gettype($dialPlanGuid)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($dialPlanGuid) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $dialPlanGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($dialPlanGuid, true)), __LINE__);
        }
        $this->DialPlanGuid = $dialPlanGuid;
        
        return $this;
    }
    /**
     * Get DialPlanName value
     * @return string|null
     */
    public function getDialPlanName(): ?string
    {
        return $this->DialPlanName;
    }
    /**
     * Set DialPlanName value
     * @param string $dialPlanName
     * @return \StructType\EwsCDRDataType
     */
    public function setDialPlanName(?string $dialPlanName = null): self
    {
        // validation for constraint: string
        if (!is_null($dialPlanName) && !is_string($dialPlanName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dialPlanName, true), gettype($dialPlanName)), __LINE__);
        }
        $this->DialPlanName = $dialPlanName;
        
        return $this;
    }
    /**
     * Get IPGatewayAddress value
     * @return string|null
     */
    public function getIPGatewayAddress(): ?string
    {
        return $this->IPGatewayAddress;
    }
    /**
     * Set IPGatewayAddress value
     * @param string $iPGatewayAddress
     * @return \StructType\EwsCDRDataType
     */
    public function setIPGatewayAddress(?string $iPGatewayAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($iPGatewayAddress) && !is_string($iPGatewayAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iPGatewayAddress, true), gettype($iPGatewayAddress)), __LINE__);
        }
        $this->IPGatewayAddress = $iPGatewayAddress;
        
        return $this;
    }
    /**
     * Get IPGatewayName value
     * @return string|null
     */
    public function getIPGatewayName(): ?string
    {
        return $this->IPGatewayName;
    }
    /**
     * Set IPGatewayName value
     * @param string $iPGatewayName
     * @return \StructType\EwsCDRDataType
     */
    public function setIPGatewayName(?string $iPGatewayName = null): self
    {
        // validation for constraint: string
        if (!is_null($iPGatewayName) && !is_string($iPGatewayName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iPGatewayName, true), gettype($iPGatewayName)), __LINE__);
        }
        $this->IPGatewayName = $iPGatewayName;
        
        return $this;
    }
    /**
     * Get CalledPhoneNumber value
     * @return string|null
     */
    public function getCalledPhoneNumber(): ?string
    {
        return $this->CalledPhoneNumber;
    }
    /**
     * Set CalledPhoneNumber value
     * @param string $calledPhoneNumber
     * @return \StructType\EwsCDRDataType
     */
    public function setCalledPhoneNumber(?string $calledPhoneNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($calledPhoneNumber) && !is_string($calledPhoneNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($calledPhoneNumber, true), gettype($calledPhoneNumber)), __LINE__);
        }
        $this->CalledPhoneNumber = $calledPhoneNumber;
        
        return $this;
    }
    /**
     * Get CallerPhoneNumber value
     * @return string|null
     */
    public function getCallerPhoneNumber(): ?string
    {
        return $this->CallerPhoneNumber;
    }
    /**
     * Set CallerPhoneNumber value
     * @param string $callerPhoneNumber
     * @return \StructType\EwsCDRDataType
     */
    public function setCallerPhoneNumber(?string $callerPhoneNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($callerPhoneNumber) && !is_string($callerPhoneNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($callerPhoneNumber, true), gettype($callerPhoneNumber)), __LINE__);
        }
        $this->CallerPhoneNumber = $callerPhoneNumber;
        
        return $this;
    }
    /**
     * Get OfferResult value
     * @return string|null
     */
    public function getOfferResult(): ?string
    {
        return $this->OfferResult;
    }
    /**
     * Set OfferResult value
     * @param string $offerResult
     * @return \StructType\EwsCDRDataType
     */
    public function setOfferResult(?string $offerResult = null): self
    {
        // validation for constraint: string
        if (!is_null($offerResult) && !is_string($offerResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($offerResult, true), gettype($offerResult)), __LINE__);
        }
        $this->OfferResult = $offerResult;
        
        return $this;
    }
    /**
     * Get DropCallReason value
     * @return string|null
     */
    public function getDropCallReason(): ?string
    {
        return $this->DropCallReason;
    }
    /**
     * Set DropCallReason value
     * @param string $dropCallReason
     * @return \StructType\EwsCDRDataType
     */
    public function setDropCallReason(?string $dropCallReason = null): self
    {
        // validation for constraint: string
        if (!is_null($dropCallReason) && !is_string($dropCallReason)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dropCallReason, true), gettype($dropCallReason)), __LINE__);
        }
        $this->DropCallReason = $dropCallReason;
        
        return $this;
    }
    /**
     * Get ReasonForCall value
     * @return string|null
     */
    public function getReasonForCall(): ?string
    {
        return $this->ReasonForCall;
    }
    /**
     * Set ReasonForCall value
     * @param string $reasonForCall
     * @return \StructType\EwsCDRDataType
     */
    public function setReasonForCall(?string $reasonForCall = null): self
    {
        // validation for constraint: string
        if (!is_null($reasonForCall) && !is_string($reasonForCall)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reasonForCall, true), gettype($reasonForCall)), __LINE__);
        }
        $this->ReasonForCall = $reasonForCall;
        
        return $this;
    }
    /**
     * Get TransferredNumber value
     * @return string|null
     */
    public function getTransferredNumber(): ?string
    {
        return $this->TransferredNumber;
    }
    /**
     * Set TransferredNumber value
     * @param string $transferredNumber
     * @return \StructType\EwsCDRDataType
     */
    public function setTransferredNumber(?string $transferredNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($transferredNumber) && !is_string($transferredNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transferredNumber, true), gettype($transferredNumber)), __LINE__);
        }
        $this->TransferredNumber = $transferredNumber;
        
        return $this;
    }
    /**
     * Get DialedString value
     * @return string|null
     */
    public function getDialedString(): ?string
    {
        return $this->DialedString;
    }
    /**
     * Set DialedString value
     * @param string $dialedString
     * @return \StructType\EwsCDRDataType
     */
    public function setDialedString(?string $dialedString = null): self
    {
        // validation for constraint: string
        if (!is_null($dialedString) && !is_string($dialedString)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dialedString, true), gettype($dialedString)), __LINE__);
        }
        $this->DialedString = $dialedString;
        
        return $this;
    }
    /**
     * Get CallerMailboxAlias value
     * @return string|null
     */
    public function getCallerMailboxAlias(): ?string
    {
        return $this->CallerMailboxAlias;
    }
    /**
     * Set CallerMailboxAlias value
     * @param string $callerMailboxAlias
     * @return \StructType\EwsCDRDataType
     */
    public function setCallerMailboxAlias(?string $callerMailboxAlias = null): self
    {
        // validation for constraint: string
        if (!is_null($callerMailboxAlias) && !is_string($callerMailboxAlias)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($callerMailboxAlias, true), gettype($callerMailboxAlias)), __LINE__);
        }
        $this->CallerMailboxAlias = $callerMailboxAlias;
        
        return $this;
    }
    /**
     * Get CalleeMailboxAlias value
     * @return string|null
     */
    public function getCalleeMailboxAlias(): ?string
    {
        return $this->CalleeMailboxAlias;
    }
    /**
     * Set CalleeMailboxAlias value
     * @param string $calleeMailboxAlias
     * @return \StructType\EwsCDRDataType
     */
    public function setCalleeMailboxAlias(?string $calleeMailboxAlias = null): self
    {
        // validation for constraint: string
        if (!is_null($calleeMailboxAlias) && !is_string($calleeMailboxAlias)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($calleeMailboxAlias, true), gettype($calleeMailboxAlias)), __LINE__);
        }
        $this->CalleeMailboxAlias = $calleeMailboxAlias;
        
        return $this;
    }
    /**
     * Get CallerLegacyExchangeDN value
     * @return string|null
     */
    public function getCallerLegacyExchangeDN(): ?string
    {
        return $this->CallerLegacyExchangeDN;
    }
    /**
     * Set CallerLegacyExchangeDN value
     * @param string $callerLegacyExchangeDN
     * @return \StructType\EwsCDRDataType
     */
    public function setCallerLegacyExchangeDN(?string $callerLegacyExchangeDN = null): self
    {
        // validation for constraint: string
        if (!is_null($callerLegacyExchangeDN) && !is_string($callerLegacyExchangeDN)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($callerLegacyExchangeDN, true), gettype($callerLegacyExchangeDN)), __LINE__);
        }
        $this->CallerLegacyExchangeDN = $callerLegacyExchangeDN;
        
        return $this;
    }
    /**
     * Get CalleeLegacyExchangeDN value
     * @return string|null
     */
    public function getCalleeLegacyExchangeDN(): ?string
    {
        return $this->CalleeLegacyExchangeDN;
    }
    /**
     * Set CalleeLegacyExchangeDN value
     * @param string $calleeLegacyExchangeDN
     * @return \StructType\EwsCDRDataType
     */
    public function setCalleeLegacyExchangeDN(?string $calleeLegacyExchangeDN = null): self
    {
        // validation for constraint: string
        if (!is_null($calleeLegacyExchangeDN) && !is_string($calleeLegacyExchangeDN)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($calleeLegacyExchangeDN, true), gettype($calleeLegacyExchangeDN)), __LINE__);
        }
        $this->CalleeLegacyExchangeDN = $calleeLegacyExchangeDN;
        
        return $this;
    }
    /**
     * Get AutoAttendantName value
     * @return string|null
     */
    public function getAutoAttendantName(): ?string
    {
        return $this->AutoAttendantName;
    }
    /**
     * Set AutoAttendantName value
     * @param string $autoAttendantName
     * @return \StructType\EwsCDRDataType
     */
    public function setAutoAttendantName(?string $autoAttendantName = null): self
    {
        // validation for constraint: string
        if (!is_null($autoAttendantName) && !is_string($autoAttendantName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($autoAttendantName, true), gettype($autoAttendantName)), __LINE__);
        }
        $this->AutoAttendantName = $autoAttendantName;
        
        return $this;
    }
    /**
     * Get AudioQualityMetrics value
     * @return \StructType\EwsAudioQualityType|null
     */
    public function getAudioQualityMetrics(): ?\StructType\EwsAudioQualityType
    {
        return $this->AudioQualityMetrics;
    }
    /**
     * Set AudioQualityMetrics value
     * @param \StructType\EwsAudioQualityType $audioQualityMetrics
     * @return \StructType\EwsCDRDataType
     */
    public function setAudioQualityMetrics(?\StructType\EwsAudioQualityType $audioQualityMetrics = null): self
    {
        $this->AudioQualityMetrics = $audioQualityMetrics;
        
        return $this;
    }
}
