<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfVotingOptionDataType|null
     */
    protected ?\ArrayType\EwsArrayOfVotingOptionDataType $UserOptions = null;
    /**
     * The VotingResponse
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $VotingResponse = null;
    /**
     * Constructor method for VotingInformationType
     * @uses EwsVotingInformationType::setUserOptions()
     * @uses EwsVotingInformationType::setVotingResponse()
     * @param \ArrayType\EwsArrayOfVotingOptionDataType $userOptions
     * @param string $votingResponse
     */
    public function __construct(?\ArrayType\EwsArrayOfVotingOptionDataType $userOptions = null, ?string $votingResponse = null)
    {
        $this
            ->setUserOptions($userOptions)
            ->setVotingResponse($votingResponse);
    }
    /**
     * Get UserOptions value
     * @return \ArrayType\EwsArrayOfVotingOptionDataType|null
     */
    public function getUserOptions(): ?\ArrayType\EwsArrayOfVotingOptionDataType
    {
        return $this->UserOptions;
    }
    /**
     * Set UserOptions value
     * @param \ArrayType\EwsArrayOfVotingOptionDataType $userOptions
     * @return \StructType\EwsVotingInformationType
     */
    public function setUserOptions(?\ArrayType\EwsArrayOfVotingOptionDataType $userOptions = null): self
    {
        $this->UserOptions = $userOptions;
        
        return $this;
    }
    /**
     * Get VotingResponse value
     * @return string|null
     */
    public function getVotingResponse(): ?string
    {
        return $this->VotingResponse;
    }
    /**
     * Set VotingResponse value
     * @param string $votingResponse
     * @return \StructType\EwsVotingInformationType
     */
    public function setVotingResponse(?string $votingResponse = null): self
    {
        // validation for constraint: string
        if (!is_null($votingResponse) && !is_string($votingResponse)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($votingResponse, true), gettype($votingResponse)), __LINE__);
        }
        $this->VotingResponse = $votingResponse;
        
        return $this;
    }
}
