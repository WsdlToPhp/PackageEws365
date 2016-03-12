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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ItemId;
    /**
     * The Intent
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Intent;
    /**
     * The ItemVersion
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ItemVersion;
    /**
     * The WouldRepair
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $WouldRepair;
    /**
     * The PredictedAction
     * Meta informations extracted from the WSDL
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
        if (!is_null($intent) && !is_int($intent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($intent)), __LINE__);
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
        if (!is_null($itemVersion) && !is_int($itemVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($itemVersion)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $predictedAction, implode(', ', \Ews\EnumType\EwsClientIntentMeetingInquiryActionType::getValidValues())), __LINE__);
        }
        $this->PredictedAction = $predictedAction;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsClientIntentType
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
