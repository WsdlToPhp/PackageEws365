<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ApplyConversationActionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsApplyConversationActionType extends EwsBaseRequestType
{
    /**
     * The ConversationActions
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfApplyConversationActionType
     */
    public $ConversationActions;
    /**
     * Constructor method for ApplyConversationActionType
     * @uses EwsApplyConversationActionType::setConversationActions()
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfApplyConversationActionType
     * $conversationActions
     */
    public function __construct(\Ews\ArrayType\EwsNonEmptyArrayOfApplyConversationActionType $conversationActions = null)
    {
        $this
            ->setConversationActions($conversationActions);
    }
    /**
     * Get ConversationActions value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfApplyConversationActionType|null
     */
    public function getConversationActions()
    {
        return $this->ConversationActions;
    }
    /**
     * Set ConversationActions value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfApplyConversationActionType
     * $conversationActions
     * @return \Ews\StructType\EwsApplyConversationActionType
     */
    public function setConversationActions(\Ews\ArrayType\EwsNonEmptyArrayOfApplyConversationActionType $conversationActions = null)
    {
        $this->ConversationActions = $conversationActions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsApplyConversationActionType
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
