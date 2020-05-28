<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string
     */
    public $TaskString;
    /**
     * The Assignees
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfEmailUsersType
     */
    public $Assignees;
    /**
     * Constructor method for TaskSuggestionType
     * @uses EwsTaskSuggestionType::setTaskString()
     * @uses EwsTaskSuggestionType::setAssignees()
     * @param string $taskString
     * @param \Ews\ArrayType\EwsArrayOfEmailUsersType $assignees
     */
    public function __construct($taskString = null, \Ews\ArrayType\EwsArrayOfEmailUsersType $assignees = null)
    {
        $this
            ->setTaskString($taskString)
            ->setAssignees($assignees);
    }
    /**
     * Get TaskString value
     * @return string|null
     */
    public function getTaskString()
    {
        return $this->TaskString;
    }
    /**
     * Set TaskString value
     * @param string $taskString
     * @return \Ews\StructType\EwsTaskSuggestionType
     */
    public function setTaskString($taskString = null)
    {
        // validation for constraint: string
        if (!is_null($taskString) && !is_string($taskString)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taskString, true), gettype($taskString)), __LINE__);
        }
        $this->TaskString = $taskString;
        return $this;
    }
    /**
     * Get Assignees value
     * @return \Ews\ArrayType\EwsArrayOfEmailUsersType|null
     */
    public function getAssignees()
    {
        return $this->Assignees;
    }
    /**
     * Set Assignees value
     * @param \Ews\ArrayType\EwsArrayOfEmailUsersType $assignees
     * @return \Ews\StructType\EwsTaskSuggestionType
     */
    public function setAssignees(\Ews\ArrayType\EwsArrayOfEmailUsersType $assignees = null)
    {
        $this->Assignees = $assignees;
        return $this;
    }
}
