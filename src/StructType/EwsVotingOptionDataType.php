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
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DisplayName;
    /**
     * The SendPrompt
     * Meta informations extracted from the WSDL
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
     * @param string $sendPrompt
     * @return \Ews\StructType\EwsVotingOptionDataType
     */
    public function setSendPrompt($sendPrompt = null)
    {
        if (!\Ews\EnumType\EwsSendPromptType::valueIsValid($sendPrompt)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sendPrompt, implode(', ', \Ews\EnumType\EwsSendPromptType::getValidValues())), __LINE__);
        }
        $this->SendPrompt = $sendPrompt;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsVotingOptionDataType
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
