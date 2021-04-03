<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PostItemType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPostItemType extends EwsItemType
{
    /**
     * The ConversationIndex
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ConversationIndex = null;
    /**
     * The ConversationTopic
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ConversationTopic = null;
    /**
     * The From
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsSingleRecipientType|null
     */
    protected ?\StructType\EwsSingleRecipientType $From = null;
    /**
     * The InternetMessageId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InternetMessageId = null;
    /**
     * The IsRead
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsRead = null;
    /**
     * The PostedTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PostedTime = null;
    /**
     * The References
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $References = null;
    /**
     * The Sender
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsSingleRecipientType|null
     */
    protected ?\StructType\EwsSingleRecipientType $Sender = null;
    /**
     * Constructor method for PostItemType
     * @uses EwsPostItemType::setConversationIndex()
     * @uses EwsPostItemType::setConversationTopic()
     * @uses EwsPostItemType::setFrom()
     * @uses EwsPostItemType::setInternetMessageId()
     * @uses EwsPostItemType::setIsRead()
     * @uses EwsPostItemType::setPostedTime()
     * @uses EwsPostItemType::setReferences()
     * @uses EwsPostItemType::setSender()
     * @param string $conversationIndex
     * @param string $conversationTopic
     * @param \StructType\EwsSingleRecipientType $from
     * @param string $internetMessageId
     * @param bool $isRead
     * @param string $postedTime
     * @param string $references
     * @param \StructType\EwsSingleRecipientType $sender
     */
    public function __construct(?string $conversationIndex = null, ?string $conversationTopic = null, ?\StructType\EwsSingleRecipientType $from = null, ?string $internetMessageId = null, ?bool $isRead = null, ?string $postedTime = null, ?string $references = null, ?\StructType\EwsSingleRecipientType $sender = null)
    {
        $this
            ->setConversationIndex($conversationIndex)
            ->setConversationTopic($conversationTopic)
            ->setFrom($from)
            ->setInternetMessageId($internetMessageId)
            ->setIsRead($isRead)
            ->setPostedTime($postedTime)
            ->setReferences($references)
            ->setSender($sender);
    }
    /**
     * Get ConversationIndex value
     * @return string|null
     */
    public function getConversationIndex(): ?string
    {
        return $this->ConversationIndex;
    }
    /**
     * Set ConversationIndex value
     * @param string $conversationIndex
     * @return \StructType\EwsPostItemType
     */
    public function setConversationIndex(?string $conversationIndex = null): self
    {
        // validation for constraint: string
        if (!is_null($conversationIndex) && !is_string($conversationIndex)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($conversationIndex, true), gettype($conversationIndex)), __LINE__);
        }
        $this->ConversationIndex = $conversationIndex;
        
        return $this;
    }
    /**
     * Get ConversationTopic value
     * @return string|null
     */
    public function getConversationTopic(): ?string
    {
        return $this->ConversationTopic;
    }
    /**
     * Set ConversationTopic value
     * @param string $conversationTopic
     * @return \StructType\EwsPostItemType
     */
    public function setConversationTopic(?string $conversationTopic = null): self
    {
        // validation for constraint: string
        if (!is_null($conversationTopic) && !is_string($conversationTopic)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($conversationTopic, true), gettype($conversationTopic)), __LINE__);
        }
        $this->ConversationTopic = $conversationTopic;
        
        return $this;
    }
    /**
     * Get From value
     * @return \StructType\EwsSingleRecipientType|null
     */
    public function getFrom(): ?\StructType\EwsSingleRecipientType
    {
        return $this->From;
    }
    /**
     * Set From value
     * @param \StructType\EwsSingleRecipientType $from
     * @return \StructType\EwsPostItemType
     */
    public function setFrom(?\StructType\EwsSingleRecipientType $from = null): self
    {
        $this->From = $from;
        
        return $this;
    }
    /**
     * Get InternetMessageId value
     * @return string|null
     */
    public function getInternetMessageId(): ?string
    {
        return $this->InternetMessageId;
    }
    /**
     * Set InternetMessageId value
     * @param string $internetMessageId
     * @return \StructType\EwsPostItemType
     */
    public function setInternetMessageId(?string $internetMessageId = null): self
    {
        // validation for constraint: string
        if (!is_null($internetMessageId) && !is_string($internetMessageId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internetMessageId, true), gettype($internetMessageId)), __LINE__);
        }
        $this->InternetMessageId = $internetMessageId;
        
        return $this;
    }
    /**
     * Get IsRead value
     * @return bool|null
     */
    public function getIsRead(): ?bool
    {
        return $this->IsRead;
    }
    /**
     * Set IsRead value
     * @param bool $isRead
     * @return \StructType\EwsPostItemType
     */
    public function setIsRead(?bool $isRead = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isRead) && !is_bool($isRead)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRead, true), gettype($isRead)), __LINE__);
        }
        $this->IsRead = $isRead;
        
        return $this;
    }
    /**
     * Get PostedTime value
     * @return string|null
     */
    public function getPostedTime(): ?string
    {
        return $this->PostedTime;
    }
    /**
     * Set PostedTime value
     * @param string $postedTime
     * @return \StructType\EwsPostItemType
     */
    public function setPostedTime(?string $postedTime = null): self
    {
        // validation for constraint: string
        if (!is_null($postedTime) && !is_string($postedTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postedTime, true), gettype($postedTime)), __LINE__);
        }
        $this->PostedTime = $postedTime;
        
        return $this;
    }
    /**
     * Get References value
     * @return string|null
     */
    public function getReferences(): ?string
    {
        return $this->References;
    }
    /**
     * Set References value
     * @param string $references
     * @return \StructType\EwsPostItemType
     */
    public function setReferences(?string $references = null): self
    {
        // validation for constraint: string
        if (!is_null($references) && !is_string($references)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($references, true), gettype($references)), __LINE__);
        }
        $this->References = $references;
        
        return $this;
    }
    /**
     * Get Sender value
     * @return \StructType\EwsSingleRecipientType|null
     */
    public function getSender(): ?\StructType\EwsSingleRecipientType
    {
        return $this->Sender;
    }
    /**
     * Set Sender value
     * @param \StructType\EwsSingleRecipientType $sender
     * @return \StructType\EwsPostItemType
     */
    public function setSender(?\StructType\EwsSingleRecipientType $sender = null): self
    {
        $this->Sender = $sender;
        
        return $this;
    }
}
