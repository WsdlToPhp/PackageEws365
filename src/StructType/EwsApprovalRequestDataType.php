<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ApprovalRequestDataType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsApprovalRequestDataType extends AbstractStructBase
{
    /**
     * The IsUndecidedApprovalRequest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsUndecidedApprovalRequest = null;
    /**
     * The ApprovalDecision
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ApprovalDecision = null;
    /**
     * The ApprovalDecisionMaker
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ApprovalDecisionMaker = null;
    /**
     * The ApprovalDecisionTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ApprovalDecisionTime = null;
    /**
     * Constructor method for ApprovalRequestDataType
     * @uses EwsApprovalRequestDataType::setIsUndecidedApprovalRequest()
     * @uses EwsApprovalRequestDataType::setApprovalDecision()
     * @uses EwsApprovalRequestDataType::setApprovalDecisionMaker()
     * @uses EwsApprovalRequestDataType::setApprovalDecisionTime()
     * @param bool $isUndecidedApprovalRequest
     * @param int $approvalDecision
     * @param string $approvalDecisionMaker
     * @param string $approvalDecisionTime
     */
    public function __construct(?bool $isUndecidedApprovalRequest = null, ?int $approvalDecision = null, ?string $approvalDecisionMaker = null, ?string $approvalDecisionTime = null)
    {
        $this
            ->setIsUndecidedApprovalRequest($isUndecidedApprovalRequest)
            ->setApprovalDecision($approvalDecision)
            ->setApprovalDecisionMaker($approvalDecisionMaker)
            ->setApprovalDecisionTime($approvalDecisionTime);
    }
    /**
     * Get IsUndecidedApprovalRequest value
     * @return bool|null
     */
    public function getIsUndecidedApprovalRequest(): ?bool
    {
        return $this->IsUndecidedApprovalRequest;
    }
    /**
     * Set IsUndecidedApprovalRequest value
     * @param bool $isUndecidedApprovalRequest
     * @return \StructType\EwsApprovalRequestDataType
     */
    public function setIsUndecidedApprovalRequest(?bool $isUndecidedApprovalRequest = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isUndecidedApprovalRequest) && !is_bool($isUndecidedApprovalRequest)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isUndecidedApprovalRequest, true), gettype($isUndecidedApprovalRequest)), __LINE__);
        }
        $this->IsUndecidedApprovalRequest = $isUndecidedApprovalRequest;
        
        return $this;
    }
    /**
     * Get ApprovalDecision value
     * @return int|null
     */
    public function getApprovalDecision(): ?int
    {
        return $this->ApprovalDecision;
    }
    /**
     * Set ApprovalDecision value
     * @param int $approvalDecision
     * @return \StructType\EwsApprovalRequestDataType
     */
    public function setApprovalDecision(?int $approvalDecision = null): self
    {
        // validation for constraint: int
        if (!is_null($approvalDecision) && !(is_int($approvalDecision) || ctype_digit($approvalDecision))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($approvalDecision, true), gettype($approvalDecision)), __LINE__);
        }
        $this->ApprovalDecision = $approvalDecision;
        
        return $this;
    }
    /**
     * Get ApprovalDecisionMaker value
     * @return string|null
     */
    public function getApprovalDecisionMaker(): ?string
    {
        return $this->ApprovalDecisionMaker;
    }
    /**
     * Set ApprovalDecisionMaker value
     * @param string $approvalDecisionMaker
     * @return \StructType\EwsApprovalRequestDataType
     */
    public function setApprovalDecisionMaker(?string $approvalDecisionMaker = null): self
    {
        // validation for constraint: string
        if (!is_null($approvalDecisionMaker) && !is_string($approvalDecisionMaker)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approvalDecisionMaker, true), gettype($approvalDecisionMaker)), __LINE__);
        }
        $this->ApprovalDecisionMaker = $approvalDecisionMaker;
        
        return $this;
    }
    /**
     * Get ApprovalDecisionTime value
     * @return string|null
     */
    public function getApprovalDecisionTime(): ?string
    {
        return $this->ApprovalDecisionTime;
    }
    /**
     * Set ApprovalDecisionTime value
     * @param string $approvalDecisionTime
     * @return \StructType\EwsApprovalRequestDataType
     */
    public function setApprovalDecisionTime(?string $approvalDecisionTime = null): self
    {
        // validation for constraint: string
        if (!is_null($approvalDecisionTime) && !is_string($approvalDecisionTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approvalDecisionTime, true), gettype($approvalDecisionTime)), __LINE__);
        }
        $this->ApprovalDecisionTime = $approvalDecisionTime;
        
        return $this;
    }
}
