<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VotingInformationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsVotingInformationType extends AbstractStructBase
{
    /**
     * The UserOptions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfVotingOptionDataType
     */
    public $UserOptions;
    /**
     * The VotingResponse
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $VotingResponse;
    /**
     * Constructor method for VotingInformationType
     * @uses EwsVotingInformationType::setUserOptions()
     * @uses EwsVotingInformationType::setVotingResponse()
     * @param \Ews\ArrayType\EwsArrayOfVotingOptionDataType $userOptions
     * @param string $votingResponse
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfVotingOptionDataType $userOptions = null, $votingResponse = null)
    {
        $this
            ->setUserOptions($userOptions)
            ->setVotingResponse($votingResponse);
    }
    /**
     * Get UserOptions value
     * @return \Ews\ArrayType\EwsArrayOfVotingOptionDataType|null
     */
    public function getUserOptions()
    {
        return $this->UserOptions;
    }
    /**
     * Set UserOptions value
     * @param \Ews\ArrayType\EwsArrayOfVotingOptionDataType $userOptions
     * @return \Ews\StructType\EwsVotingInformationType
     */
    public function setUserOptions(\Ews\ArrayType\EwsArrayOfVotingOptionDataType $userOptions = null)
    {
        $this->UserOptions = $userOptions;
        return $this;
    }
    /**
     * Get VotingResponse value
     * @return string|null
     */
    public function getVotingResponse()
    {
        return $this->VotingResponse;
    }
    /**
     * Set VotingResponse value
     * @param string $votingResponse
     * @return \Ews\StructType\EwsVotingInformationType
     */
    public function setVotingResponse($votingResponse = null)
    {
        // validation for constraint: string
        if (!is_null($votingResponse) && !is_string($votingResponse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($votingResponse)), __LINE__);
        }
        $this->VotingResponse = $votingResponse;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsVotingInformationType
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
