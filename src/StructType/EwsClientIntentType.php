<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClientIntentType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsClientIntentType extends AbstractStructBase
{
    /**
     * The ItemId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ItemId;
    /**
     * The Intent
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Intent;
    /**
     * The ItemVersion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ItemVersion;
    /**
     * The WouldRepair
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $WouldRepair;
    /**
     * The PredictedAction
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PredictedAction;
    /**
     * Constructor method for ClientIntentType
     * @uses EwsClientIntentType::setItemId()
     * @uses EwsClientIntentType::setIntent()
     * @uses EwsClientIntentType::setItemVersion()
     * @uses EwsClientIntentType::setWouldRepair()
     * @uses EwsClientIntentType::setPredictedAction()
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @param int $intent
     * @param int $itemVersion
     * @param bool $wouldRepair
     * @param string $predictedAction
     */
    public function __construct(\Ews\StructType\EwsItemIdType $itemId = null, $intent = null, $itemVersion = null, $wouldRepair = null, $predictedAction = null)
    {
        $this
            ->setItemId($itemId)
            ->setIntent($intent)
            ->setItemVersion($itemVersion)
            ->setWouldRepair($wouldRepair)
            ->setPredictedAction($predictedAction);
    }
    /**
     * Get ItemId value
     * @return \Ews\StructType\EwsItemIdType
     */
    public function getItemId()
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @return \Ews\StructType\EwsClientIntentType
     */
    public function setItemId(\Ews\StructType\EwsItemIdType $itemId = null)
    {
        $this->ItemId = $itemId;
        return $this;
    }
    /**
     * Get Intent value
     * @return int
     */
    public function getIntent()
    {
        return $this->Intent;
    }
    /**
     * Set Intent value
     * @param int $intent
     * @return \Ews\StructType\EwsClientIntentType
     */
    public function setIntent($intent = null)
    {
        // validation for constraint: int
        if (!is_null($intent) && !(is_int($intent) || ctype_digit($intent))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($intent, true), gettype($intent)), __LINE__);
        }
        $this->Intent = $intent;
        return $this;
    }
    /**
     * Get ItemVersion value
     * @return int
     */
    public function getItemVersion()
    {
        return $this->ItemVersion;
    }
    /**
     * Set ItemVersion value
     * @param int $itemVersion
     * @return \Ews\StructType\EwsClientIntentType
     */
    public function setItemVersion($itemVersion = null)
    {
        // validation for constraint: int
        if (!is_null($itemVersion) && !(is_int($itemVersion) || ctype_digit($itemVersion))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemVersion, true), gettype($itemVersion)), __LINE__);
        }
        $this->ItemVersion = $itemVersion;
        return $this;
    }
    /**
     * Get WouldRepair value
     * @return bool
     */
    public function getWouldRepair()
    {
        return $this->WouldRepair;
    }
    /**
     * Set WouldRepair value
     * @param bool $wouldRepair
     * @return \Ews\StructType\EwsClientIntentType
     */
    public function setWouldRepair($wouldRepair = null)
    {
        // validation for constraint: boolean
        if (!is_null($wouldRepair) && !is_bool($wouldRepair)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($wouldRepair, true), gettype($wouldRepair)), __LINE__);
        }
        $this->WouldRepair = $wouldRepair;
        return $this;
    }
    /**
     * Get PredictedAction value
     * @return string|null
     */
    public function getPredictedAction()
    {
        return $this->PredictedAction;
    }
    /**
     * Set PredictedAction value
     * @uses \Ews\EnumType\EwsClientIntentMeetingInquiryActionType::valueIsValid()
     * @uses \Ews\EnumType\EwsClientIntentMeetingInquiryActionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $predictedAction
     * @return \Ews\StructType\EwsClientIntentType
     */
    public function setPredictedAction($predictedAction = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsClientIntentMeetingInquiryActionType::valueIsValid($predictedAction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsClientIntentMeetingInquiryActionType', is_array($predictedAction) ? implode(', ', $predictedAction) : var_export($predictedAction, true), implode(', ', \Ews\EnumType\EwsClientIntentMeetingInquiryActionType::getValidValues())), __LINE__);
        }
        $this->PredictedAction = $predictedAction;
        return $this;
    }
}
