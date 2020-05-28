<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VotingOptionDataType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsVotingOptionDataType extends AbstractStructBase
{
    /**
     * The DisplayName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DisplayName;
    /**
     * The SendPrompt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SendPrompt;
    /**
     * Constructor method for VotingOptionDataType
     * @uses EwsVotingOptionDataType::setDisplayName()
     * @uses EwsVotingOptionDataType::setSendPrompt()
     * @param string $displayName
     * @param string $sendPrompt
     */
    public function __construct($displayName = null, $sendPrompt = null)
    {
        $this
            ->setDisplayName($displayName)
            ->setSendPrompt($sendPrompt);
    }
    /**
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \Ews\StructType\EwsVotingOptionDataType
     */
    public function setDisplayName($displayName = null)
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Get SendPrompt value
     * @return string|null
     */
    public function getSendPrompt()
    {
        return $this->SendPrompt;
    }
    /**
     * Set SendPrompt value
     * @uses \Ews\EnumType\EwsSendPromptType::valueIsValid()
     * @uses \Ews\EnumType\EwsSendPromptType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sendPrompt
     * @return \Ews\StructType\EwsVotingOptionDataType
     */
    public function setSendPrompt($sendPrompt = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsSendPromptType::valueIsValid($sendPrompt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsSendPromptType', is_array($sendPrompt) ? implode(', ', $sendPrompt) : var_export($sendPrompt, true), implode(', ', \Ews\EnumType\EwsSendPromptType::getValidValues())), __LINE__);
        }
        $this->SendPrompt = $sendPrompt;
        return $this;
    }
}
