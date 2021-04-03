<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $DisplayName = null;
    /**
     * The SendPrompt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SendPrompt = null;
    /**
     * Constructor method for VotingOptionDataType
     * @uses EwsVotingOptionDataType::setDisplayName()
     * @uses EwsVotingOptionDataType::setSendPrompt()
     * @param string $displayName
     * @param string $sendPrompt
     */
    public function __construct(?string $displayName = null, ?string $sendPrompt = null)
    {
        $this
            ->setDisplayName($displayName)
            ->setSendPrompt($sendPrompt);
    }
    /**
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName(): ?string
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \StructType\EwsVotingOptionDataType
     */
    public function setDisplayName(?string $displayName = null): self
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        
        return $this;
    }
    /**
     * Get SendPrompt value
     * @return string|null
     */
    public function getSendPrompt(): ?string
    {
        return $this->SendPrompt;
    }
    /**
     * Set SendPrompt value
     * @uses \EnumType\EwsSendPromptType::valueIsValid()
     * @uses \EnumType\EwsSendPromptType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sendPrompt
     * @return \StructType\EwsVotingOptionDataType
     */
    public function setSendPrompt(?string $sendPrompt = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsSendPromptType::valueIsValid($sendPrompt)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsSendPromptType', is_array($sendPrompt) ? implode(', ', $sendPrompt) : var_export($sendPrompt, true), implode(', ', \EnumType\EwsSendPromptType::getValidValues())), __LINE__);
        }
        $this->SendPrompt = $sendPrompt;
        
        return $this;
    }
}
