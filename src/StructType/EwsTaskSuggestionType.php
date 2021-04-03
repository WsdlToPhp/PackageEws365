<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaskSuggestionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsTaskSuggestionType extends EwsEntityType
{
    /**
     * The TaskString
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TaskString = null;
    /**
     * The Assignees
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfEmailUsersType|null
     */
    protected ?\ArrayType\EwsArrayOfEmailUsersType $Assignees = null;
    /**
     * Constructor method for TaskSuggestionType
     * @uses EwsTaskSuggestionType::setTaskString()
     * @uses EwsTaskSuggestionType::setAssignees()
     * @param string $taskString
     * @param \ArrayType\EwsArrayOfEmailUsersType $assignees
     */
    public function __construct(?string $taskString = null, ?\ArrayType\EwsArrayOfEmailUsersType $assignees = null)
    {
        $this
            ->setTaskString($taskString)
            ->setAssignees($assignees);
    }
    /**
     * Get TaskString value
     * @return string|null
     */
    public function getTaskString(): ?string
    {
        return $this->TaskString;
    }
    /**
     * Set TaskString value
     * @param string $taskString
     * @return \StructType\EwsTaskSuggestionType
     */
    public function setTaskString(?string $taskString = null): self
    {
        // validation for constraint: string
        if (!is_null($taskString) && !is_string($taskString)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taskString, true), gettype($taskString)), __LINE__);
        }
        $this->TaskString = $taskString;
        
        return $this;
    }
    /**
     * Get Assignees value
     * @return \ArrayType\EwsArrayOfEmailUsersType|null
     */
    public function getAssignees(): ?\ArrayType\EwsArrayOfEmailUsersType
    {
        return $this->Assignees;
    }
    /**
     * Set Assignees value
     * @param \ArrayType\EwsArrayOfEmailUsersType $assignees
     * @return \StructType\EwsTaskSuggestionType
     */
    public function setAssignees(?\ArrayType\EwsArrayOfEmailUsersType $assignees = null): self
    {
        $this->Assignees = $assignees;
        
        return $this;
    }
}
