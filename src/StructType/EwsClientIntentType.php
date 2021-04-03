<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsItemIdType
     */
    protected \StructType\EwsItemIdType $ItemId;
    /**
     * The Intent
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $Intent;
    /**
     * The ItemVersion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $ItemVersion;
    /**
     * The WouldRepair
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $WouldRepair;
    /**
     * The PredictedAction
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PredictedAction = null;
    /**
     * Constructor method for ClientIntentType
     * @uses EwsClientIntentType::setItemId()
     * @uses EwsClientIntentType::setIntent()
     * @uses EwsClientIntentType::setItemVersion()
     * @uses EwsClientIntentType::setWouldRepair()
     * @uses EwsClientIntentType::setPredictedAction()
     * @param \StructType\EwsItemIdType $itemId
     * @param int $intent
     * @param int $itemVersion
     * @param bool $wouldRepair
     * @param string $predictedAction
     */
    public function __construct(\StructType\EwsItemIdType $itemId, int $intent, int $itemVersion, bool $wouldRepair, ?string $predictedAction = null)
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
     * @return \StructType\EwsItemIdType
     */
    public function getItemId(): \StructType\EwsItemIdType
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \StructType\EwsItemIdType $itemId
     * @return \StructType\EwsClientIntentType
     */
    public function setItemId(\StructType\EwsItemIdType $itemId): self
    {
        $this->ItemId = $itemId;
        
        return $this;
    }
    /**
     * Get Intent value
     * @return int
     */
    public function getIntent(): int
    {
        return $this->Intent;
    }
    /**
     * Set Intent value
     * @param int $intent
     * @return \StructType\EwsClientIntentType
     */
    public function setIntent(int $intent): self
    {
        // validation for constraint: int
        if (!is_null($intent) && !(is_int($intent) || ctype_digit($intent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($intent, true), gettype($intent)), __LINE__);
        }
        $this->Intent = $intent;
        
        return $this;
    }
    /**
     * Get ItemVersion value
     * @return int
     */
    public function getItemVersion(): int
    {
        return $this->ItemVersion;
    }
    /**
     * Set ItemVersion value
     * @param int $itemVersion
     * @return \StructType\EwsClientIntentType
     */
    public function setItemVersion(int $itemVersion): self
    {
        // validation for constraint: int
        if (!is_null($itemVersion) && !(is_int($itemVersion) || ctype_digit($itemVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemVersion, true), gettype($itemVersion)), __LINE__);
        }
        $this->ItemVersion = $itemVersion;
        
        return $this;
    }
    /**
     * Get WouldRepair value
     * @return bool
     */
    public function getWouldRepair(): bool
    {
        return $this->WouldRepair;
    }
    /**
     * Set WouldRepair value
     * @param bool $wouldRepair
     * @return \StructType\EwsClientIntentType
     */
    public function setWouldRepair(bool $wouldRepair): self
    {
        // validation for constraint: boolean
        if (!is_null($wouldRepair) && !is_bool($wouldRepair)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($wouldRepair, true), gettype($wouldRepair)), __LINE__);
        }
        $this->WouldRepair = $wouldRepair;
        
        return $this;
    }
    /**
     * Get PredictedAction value
     * @return string|null
     */
    public function getPredictedAction(): ?string
    {
        return $this->PredictedAction;
    }
    /**
     * Set PredictedAction value
     * @uses \EnumType\EwsClientIntentMeetingInquiryActionType::valueIsValid()
     * @uses \EnumType\EwsClientIntentMeetingInquiryActionType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $predictedAction
     * @return \StructType\EwsClientIntentType
     */
    public function setPredictedAction(?string $predictedAction = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsClientIntentMeetingInquiryActionType::valueIsValid($predictedAction)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsClientIntentMeetingInquiryActionType', is_array($predictedAction) ? implode(', ', $predictedAction) : var_export($predictedAction, true), implode(', ', \EnumType\EwsClientIntentMeetingInquiryActionType::getValidValues())), __LINE__);
        }
        $this->PredictedAction = $predictedAction;
        
        return $this;
    }
}
