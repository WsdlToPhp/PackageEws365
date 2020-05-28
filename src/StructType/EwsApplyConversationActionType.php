<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ApplyConversationActionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
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
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfApplyConversationActionType $conversationActions
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
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfApplyConversationActionType $conversationActions
     * @return \Ews\StructType\EwsApplyConversationActionType
     */
    public function setConversationActions(\Ews\ArrayType\EwsNonEmptyArrayOfApplyConversationActionType $conversationActions = null)
    {
        $this->ConversationActions = $conversationActions;
        return $this;
    }
}
