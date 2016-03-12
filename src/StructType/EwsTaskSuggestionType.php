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
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TaskString;
    /**
     * The Assignees
     * Meta informations extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($taskString)), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsTaskSuggestionType
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
