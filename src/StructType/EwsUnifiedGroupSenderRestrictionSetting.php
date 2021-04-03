<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected string $RestrictionAction;
    /**
     * The Restriction
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Restriction;
    /**
     * The SenderList
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ArrayType\EwsArrayOfSmtpAddressType
     */
    protected \ArrayType\EwsArrayOfSmtpAddressType $SenderList;
    /**
     * Constructor method for UnifiedGroupSenderRestrictionSetting
     * @uses EwsUnifiedGroupSenderRestrictionSetting::setRestrictionAction()
     * @uses EwsUnifiedGroupSenderRestrictionSetting::setRestriction()
     * @uses EwsUnifiedGroupSenderRestrictionSetting::setSenderList()
     * @param string $restrictionAction
     * @param string $restriction
     * @param \ArrayType\EwsArrayOfSmtpAddressType $senderList
     */
    public function __construct(string $restrictionAction, string $restriction, \ArrayType\EwsArrayOfSmtpAddressType $senderList)
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
    public function getRestrictionAction(): string
    {
        return $this->RestrictionAction;
    }
    /**
     * Set RestrictionAction value
     * @uses \EnumType\EwsSenderRestrictionActionType::valueIsValid()
     * @uses \EnumType\EwsSenderRestrictionActionType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $restrictionAction
     * @return \StructType\EwsUnifiedGroupSenderRestrictionSetting
     */
    public function setRestrictionAction(string $restrictionAction): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsSenderRestrictionActionType::valueIsValid($restrictionAction)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsSenderRestrictionActionType', is_array($restrictionAction) ? implode(', ', $restrictionAction) : var_export($restrictionAction, true), implode(', ', \EnumType\EwsSenderRestrictionActionType::getValidValues())), __LINE__);
        }
        $this->RestrictionAction = $restrictionAction;
        
        return $this;
    }
    /**
     * Get Restriction value
     * @return string
     */
    public function getRestriction(): string
    {
        return $this->Restriction;
    }
    /**
     * Set Restriction value
     * @uses \EnumType\EwsSenderRestrictionType::valueIsValid()
     * @uses \EnumType\EwsSenderRestrictionType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $restriction
     * @return \StructType\EwsUnifiedGroupSenderRestrictionSetting
     */
    public function setRestriction(string $restriction): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsSenderRestrictionType::valueIsValid($restriction)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsSenderRestrictionType', is_array($restriction) ? implode(', ', $restriction) : var_export($restriction, true), implode(', ', \EnumType\EwsSenderRestrictionType::getValidValues())), __LINE__);
        }
        $this->Restriction = $restriction;
        
        return $this;
    }
    /**
     * Get SenderList value
     * @return \ArrayType\EwsArrayOfSmtpAddressType
     */
    public function getSenderList(): \ArrayType\EwsArrayOfSmtpAddressType
    {
        return $this->SenderList;
    }
    /**
     * Set SenderList value
     * @param \ArrayType\EwsArrayOfSmtpAddressType $senderList
     * @return \StructType\EwsUnifiedGroupSenderRestrictionSetting
     */
    public function setSenderList(\ArrayType\EwsArrayOfSmtpAddressType $senderList): self
    {
        $this->SenderList = $senderList;
        
        return $this;
    }
}
