<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnifiedGroupSenderRestrictionSetting StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedGroupSenderRestrictionSetting extends AbstractStructBase
{
    /**
     * The RestrictionAction
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $RestrictionAction;
    /**
     * The Restriction
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Restriction;
    /**
     * The SenderList
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfSmtpAddressType
     */
    public $SenderList;
    /**
     * Constructor method for UnifiedGroupSenderRestrictionSetting
     * @uses EwsUnifiedGroupSenderRestrictionSetting::setRestrictionAction()
     * @uses EwsUnifiedGroupSenderRestrictionSetting::setRestriction()
     * @uses EwsUnifiedGroupSenderRestrictionSetting::setSenderList()
     * @param string $restrictionAction
     * @param string $restriction
     * @param \Ews\ArrayType\EwsArrayOfSmtpAddressType $senderList
     */
    public function __construct($restrictionAction = null, $restriction = null, \Ews\ArrayType\EwsArrayOfSmtpAddressType $senderList = null)
    {
        $this
            ->setRestrictionAction($restrictionAction)
            ->setRestriction($restriction)
            ->setSenderList($senderList);
    }
    /**
     * Get RestrictionAction value
     * @return string
     */
    public function getRestrictionAction()
    {
        return $this->RestrictionAction;
    }
    /**
     * Set RestrictionAction value
     * @uses \Ews\EnumType\EwsSenderRestrictionActionType::valueIsValid()
     * @uses \Ews\EnumType\EwsSenderRestrictionActionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $restrictionAction
     * @return \Ews\StructType\EwsUnifiedGroupSenderRestrictionSetting
     */
    public function setRestrictionAction($restrictionAction = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsSenderRestrictionActionType::valueIsValid($restrictionAction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsSenderRestrictionActionType', is_array($restrictionAction) ? implode(', ', $restrictionAction) : var_export($restrictionAction, true), implode(', ', \Ews\EnumType\EwsSenderRestrictionActionType::getValidValues())), __LINE__);
        }
        $this->RestrictionAction = $restrictionAction;
        return $this;
    }
    /**
     * Get Restriction value
     * @return string
     */
    public function getRestriction()
    {
        return $this->Restriction;
    }
    /**
     * Set Restriction value
     * @uses \Ews\EnumType\EwsSenderRestrictionType::valueIsValid()
     * @uses \Ews\EnumType\EwsSenderRestrictionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $restriction
     * @return \Ews\StructType\EwsUnifiedGroupSenderRestrictionSetting
     */
    public function setRestriction($restriction = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsSenderRestrictionType::valueIsValid($restriction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsSenderRestrictionType', is_array($restriction) ? implode(', ', $restriction) : var_export($restriction, true), implode(', ', \Ews\EnumType\EwsSenderRestrictionType::getValidValues())), __LINE__);
        }
        $this->Restriction = $restriction;
        return $this;
    }
    /**
     * Get SenderList value
     * @return \Ews\ArrayType\EwsArrayOfSmtpAddressType
     */
    public function getSenderList()
    {
        return $this->SenderList;
    }
    /**
     * Set SenderList value
     * @param \Ews\ArrayType\EwsArrayOfSmtpAddressType $senderList
     * @return \Ews\StructType\EwsUnifiedGroupSenderRestrictionSetting
     */
    public function setSenderList(\Ews\ArrayType\EwsArrayOfSmtpAddressType $senderList = null)
    {
        $this->SenderList = $senderList;
        return $this;
    }
}
