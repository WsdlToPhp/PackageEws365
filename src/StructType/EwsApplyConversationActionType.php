<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsNonEmptyArrayOfApplyConversationActionType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfApplyConversationActionType $ConversationActions = null;
    /**
     * Constructor method for ApplyConversationActionType
     * @uses EwsApplyConversationActionType::setConversationActions()
     * @param \ArrayType\EwsNonEmptyArrayOfApplyConversationActionType $conversationActions
     */
    public function __construct(?\ArrayType\EwsNonEmptyArrayOfApplyConversationActionType $conversationActions = null)
    {
        $this
            ->setConversationActions($conversationActions);
    }
    /**
     * Get ConversationActions value
     * @return \ArrayType\EwsNonEmptyArrayOfApplyConversationActionType|null
     */
    public function getConversationActions(): ?\ArrayType\EwsNonEmptyArrayOfApplyConversationActionType
    {
        return $this->ConversationActions;
    }
    /**
     * Set ConversationActions value
     * @param \ArrayType\EwsNonEmptyArrayOfApplyConversationActionType $conversationActions
     * @return \StructType\EwsApplyConversationActionType
     */
    public function setConversationActions(?\ArrayType\EwsNonEmptyArrayOfApplyConversationActionType $conversationActions = null): self
    {
        $this->ConversationActions = $conversationActions;
        
        return $this;
    }
}
