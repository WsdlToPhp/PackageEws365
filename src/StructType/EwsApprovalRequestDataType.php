<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $IsUndecidedApprovalRequest;
    /**
     * The ApprovalDecision
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ApprovalDecision;
    /**
     * The ApprovalDecisionMaker
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ApprovalDecisionMaker;
    /**
     * The ApprovalDecisionTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $ApprovalDecisionTime;
    /**
     * Constructor method for ApprovalRequestDataType
     * @uses EwsApprovalRequestDataType::setIsUndecidedApprovalRequest()
     * @uses EwsApprovalRequestDataType::setApprovalDecision()
     * @uses EwsApprovalRequestDataType::setApprovalDecisionMaker()
     * @uses EwsApprovalRequestDataType::setApprovalDecisionTime()
     * @param boolean $isUndecidedApprovalRequest
     * @param int $approvalDecision
     * @param string $approvalDecisionMaker
     * @param dateTime $approvalDecisionTime
     */
    public function __construct($isUndecidedApprovalRequest = null, $approvalDecision = null, $approvalDecisionMaker = null, $approvalDecisionTime = null)
    {
        $this
            ->setIsUndecidedApprovalRequest($isUndecidedApprovalRequest)
            ->setApprovalDecision($approvalDecision)
            ->setApprovalDecisionMaker($approvalDecisionMaker)
            ->setApprovalDecisionTime($approvalDecisionTime);
    }
    /**
     * Get IsUndecidedApprovalRequest value
     * @return boolean|null
     */
    public function getIsUndecidedApprovalRequest()
    {
        return $this->IsUndecidedApprovalRequest;
    }
    /**
     * Set IsUndecidedApprovalRequest value
     * @param boolean $isUndecidedApprovalRequest
     * @return \Ews\StructType\EwsApprovalRequestDataType
     */
    public function setIsUndecidedApprovalRequest($isUndecidedApprovalRequest = null)
    {
        $this->IsUndecidedApprovalRequest = $isUndecidedApprovalRequest;
        return $this;
    }
    /**
     * Get ApprovalDecision value
     * @return int|null
     */
    public function getApprovalDecision()
    {
        return $this->ApprovalDecision;
    }
    /**
     * Set ApprovalDecision value
     * @param int $approvalDecision
     * @return \Ews\StructType\EwsApprovalRequestDataType
     */
    public function setApprovalDecision($approvalDecision = null)
    {
        $this->ApprovalDecision = $approvalDecision;
        return $this;
    }
    /**
     * Get ApprovalDecisionMaker value
     * @return string|null
     */
    public function getApprovalDecisionMaker()
    {
        return $this->ApprovalDecisionMaker;
    }
    /**
     * Set ApprovalDecisionMaker value
     * @param string $approvalDecisionMaker
     * @return \Ews\StructType\EwsApprovalRequestDataType
     */
    public function setApprovalDecisionMaker($approvalDecisionMaker = null)
    {
        $this->ApprovalDecisionMaker = $approvalDecisionMaker;
        return $this;
    }
    /**
     * Get ApprovalDecisionTime value
     * @return dateTime|null
     */
    public function getApprovalDecisionTime()
    {
        return $this->ApprovalDecisionTime;
    }
    /**
     * Set ApprovalDecisionTime value
     * @param dateTime $approvalDecisionTime
     * @return \Ews\StructType\EwsApprovalRequestDataType
     */
    public function setApprovalDecisionTime($approvalDecisionTime = null)
    {
        $this->ApprovalDecisionTime = $approvalDecisionTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsApprovalRequestDataType
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
