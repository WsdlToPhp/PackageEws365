<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMessageType extends EwsItemType
{
    /**
     * The Sender
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsSingleRecipientType|null
     */
    protected ?\StructType\EwsSingleRecipientType $Sender = null;
    /**
     * The ToRecipients
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfRecipientsType|null
     */
    protected ?\ArrayType\EwsArrayOfRecipientsType $ToRecipients = null;
    /**
     * The CcRecipients
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfRecipientsType|null
     */
    protected ?\ArrayType\EwsArrayOfRecipientsType $CcRecipients = null;
    /**
     * The BccRecipients
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfRecipientsType|null
     */
    protected ?\ArrayType\EwsArrayOfRecipientsType $BccRecipients = null;
    /**
     * The IsReadReceiptRequested
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsReadReceiptRequested = null;
    /**
     * The IsDeliveryReceiptRequested
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsDeliveryReceiptRequested = null;
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
     * The IsResponseRequested
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsResponseRequested = null;
    /**
     * The References
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $References = null;
    /**
     * The ReplyTo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfRecipientsType|null
     */
    protected ?\ArrayType\EwsArrayOfRecipientsType $ReplyTo = null;
    /**
     * The ReceivedBy
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsSingleRecipientType|null
     */
    protected ?\StructType\EwsSingleRecipientType $ReceivedBy = null;
    /**
     * The ReceivedRepresenting
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsSingleRecipientType|null
     */
    protected ?\StructType\EwsSingleRecipientType $ReceivedRepresenting = null;
    /**
     * The ApprovalRequestData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsApprovalRequestDataType|null
     */
    protected ?\StructType\EwsApprovalRequestDataType $ApprovalRequestData = null;
    /**
     * The VotingInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsVotingInformationType|null
     */
    protected ?\StructType\EwsVotingInformationType $VotingInformation = null;
    /**
     * The ReminderMessageData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsReminderMessageDataType|null
     */
    protected ?\StructType\EwsReminderMessageDataType $ReminderMessageData = null;
    /**
     * Constructor method for MessageType
     * @uses EwsMessageType::setSender()
     * @uses EwsMessageType::setToRecipients()
     * @uses EwsMessageType::setCcRecipients()
     * @uses EwsMessageType::setBccRecipients()
     * @uses EwsMessageType::setIsReadReceiptRequested()
     * @uses EwsMessageType::setIsDeliveryReceiptRequested()
     * @uses EwsMessageType::setConversationIndex()
     * @uses EwsMessageType::setConversationTopic()
     * @uses EwsMessageType::setFrom()
     * @uses EwsMessageType::setInternetMessageId()
     * @uses EwsMessageType::setIsRead()
     * @uses EwsMessageType::setIsResponseRequested()
     * @uses EwsMessageType::setReferences()
     * @uses EwsMessageType::setReplyTo()
     * @uses EwsMessageType::setReceivedBy()
     * @uses EwsMessageType::setReceivedRepresenting()
     * @uses EwsMessageType::setApprovalRequestData()
     * @uses EwsMessageType::setVotingInformation()
     * @uses EwsMessageType::setReminderMessageData()
     * @param \StructType\EwsSingleRecipientType $sender
     * @param \ArrayType\EwsArrayOfRecipientsType $toRecipients
     * @param \ArrayType\EwsArrayOfRecipientsType $ccRecipients
     * @param \ArrayType\EwsArrayOfRecipientsType $bccRecipients
     * @param bool $isReadReceiptRequested
     * @param bool $isDeliveryReceiptRequested
     * @param string $conversationIndex
     * @param string $conversationTopic
     * @param \StructType\EwsSingleRecipientType $from
     * @param string $internetMessageId
     * @param bool $isRead
     * @param bool $isResponseRequested
     * @param string $references
     * @param \ArrayType\EwsArrayOfRecipientsType $replyTo
     * @param \StructType\EwsSingleRecipientType $receivedBy
     * @param \StructType\EwsSingleRecipientType $receivedRepresenting
     * @param \StructType\EwsApprovalRequestDataType $approvalRequestData
     * @param \StructType\EwsVotingInformationType $votingInformation
     * @param \StructType\EwsReminderMessageDataType $reminderMessageData
     */
    public function __construct(?\StructType\EwsSingleRecipientType $sender = null, ?\ArrayType\EwsArrayOfRecipientsType $toRecipients = null, ?\ArrayType\EwsArrayOfRecipientsType $ccRecipients = null, ?\ArrayType\EwsArrayOfRecipientsType $bccRecipients = null, ?bool $isReadReceiptRequested = null, ?bool $isDeliveryReceiptRequested = null, ?string $conversationIndex = null, ?string $conversationTopic = null, ?\StructType\EwsSingleRecipientType $from = null, ?string $internetMessageId = null, ?bool $isRead = null, ?bool $isResponseRequested = null, ?string $references = null, ?\ArrayType\EwsArrayOfRecipientsType $replyTo = null, ?\StructType\EwsSingleRecipientType $receivedBy = null, ?\StructType\EwsSingleRecipientType $receivedRepresenting = null, ?\StructType\EwsApprovalRequestDataType $approvalRequestData = null, ?\StructType\EwsVotingInformationType $votingInformation = null, ?\StructType\EwsReminderMessageDataType $reminderMessageData = null)
    {
        $this
            ->setSender($sender)
            ->setToRecipients($toRecipients)
            ->setCcRecipients($ccRecipients)
            ->setBccRecipients($bccRecipients)
            ->setIsReadReceiptRequested($isReadReceiptRequested)
            ->setIsDeliveryReceiptRequested($isDeliveryReceiptRequested)
            ->setConversationIndex($conversationIndex)
            ->setConversationTopic($conversationTopic)
            ->setFrom($from)
            ->setInternetMessageId($internetMessageId)
            ->setIsRead($isRead)
            ->setIsResponseRequested($isResponseRequested)
            ->setReferences($references)
            ->setReplyTo($replyTo)
            ->setReceivedBy($receivedBy)
            ->setReceivedRepresenting($receivedRepresenting)
            ->setApprovalRequestData($approvalRequestData)
            ->setVotingInformation($votingInformation)
            ->setReminderMessageData($reminderMessageData);
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
     * @return \StructType\EwsMessageType
     */
    public function setSender(?\StructType\EwsSingleRecipientType $sender = null): self
    {
        $this->Sender = $sender;
        
        return $this;
    }
    /**
     * Get ToRecipients value
     * @return \ArrayType\EwsArrayOfRecipientsType|null
     */
    public function getToRecipients(): ?\ArrayType\EwsArrayOfRecipientsType
    {
        return $this->ToRecipients;
    }
    /**
     * Set ToRecipients value
     * @param \ArrayType\EwsArrayOfRecipientsType $toRecipients
     * @return \StructType\EwsMessageType
     */
    public function setToRecipients(?\ArrayType\EwsArrayOfRecipientsType $toRecipients = null): self
    {
        $this->ToRecipients = $toRecipients;
        
        return $this;
    }
    /**
     * Get CcRecipients value
     * @return \ArrayType\EwsArrayOfRecipientsType|null
     */
    public function getCcRecipients(): ?\ArrayType\EwsArrayOfRecipientsType
    {
        return $this->CcRecipients;
    }
    /**
     * Set CcRecipients value
     * @param \ArrayType\EwsArrayOfRecipientsType $ccRecipients
     * @return \StructType\EwsMessageType
     */
    public function setCcRecipients(?\ArrayType\EwsArrayOfRecipientsType $ccRecipients = null): self
    {
        $this->CcRecipients = $ccRecipients;
        
        return $this;
    }
    /**
     * Get BccRecipients value
     * @return \ArrayType\EwsArrayOfRecipientsType|null
     */
    public function getBccRecipients(): ?\ArrayType\EwsArrayOfRecipientsType
    {
        return $this->BccRecipients;
    }
    /**
     * Set BccRecipients value
     * @param \ArrayType\EwsArrayOfRecipientsType $bccRecipients
     * @return \StructType\EwsMessageType
     */
    public function setBccRecipients(?\ArrayType\EwsArrayOfRecipientsType $bccRecipients = null): self
    {
        $this->BccRecipients = $bccRecipients;
        
        return $this;
    }
    /**
     * Get IsReadReceiptRequested value
     * @return bool|null
     */
    public function getIsReadReceiptRequested(): ?bool
    {
        return $this->IsReadReceiptRequested;
    }
    /**
     * Set IsReadReceiptRequested value
     * @param bool $isReadReceiptRequested
     * @return \StructType\EwsMessageType
     */
    public function setIsReadReceiptRequested(?bool $isReadReceiptRequested = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isReadReceiptRequested) && !is_bool($isReadReceiptRequested)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isReadReceiptRequested, true), gettype($isReadReceiptRequested)), __LINE__);
        }
        $this->IsReadReceiptRequested = $isReadReceiptRequested;
        
        return $this;
    }
    /**
     * Get IsDeliveryReceiptRequested value
     * @return bool|null
     */
    public function getIsDeliveryReceiptRequested(): ?bool
    {
        return $this->IsDeliveryReceiptRequested;
    }
    /**
     * Set IsDeliveryReceiptRequested value
     * @param bool $isDeliveryReceiptRequested
     * @return \StructType\EwsMessageType
     */
    public function setIsDeliveryReceiptRequested(?bool $isDeliveryReceiptRequested = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDeliveryReceiptRequested) && !is_bool($isDeliveryReceiptRequested)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDeliveryReceiptRequested, true), gettype($isDeliveryReceiptRequested)), __LINE__);
        }
        $this->IsDeliveryReceiptRequested = $isDeliveryReceiptRequested;
        
        return $this;
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
     * @return \StructType\EwsMessageType
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
     * @return \StructType\EwsMessageType
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
     * @return \StructType\EwsMessageType
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
     * @return \StructType\EwsMessageType
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
     * @return \StructType\EwsMessageType
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
     * Get IsResponseRequested value
     * @return bool|null
     */
    public function getIsResponseRequested(): ?bool
    {
        return $this->IsResponseRequested;
    }
    /**
     * Set IsResponseRequested value
     * @param bool $isResponseRequested
     * @return \StructType\EwsMessageType
     */
    public function setIsResponseRequested(?bool $isResponseRequested = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isResponseRequested) && !is_bool($isResponseRequested)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isResponseRequested, true), gettype($isResponseRequested)), __LINE__);
        }
        $this->IsResponseRequested = $isResponseRequested;
        
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
     * @return \StructType\EwsMessageType
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
     * Get ReplyTo value
     * @return \ArrayType\EwsArrayOfRecipientsType|null
     */
    public function getReplyTo(): ?\ArrayType\EwsArrayOfRecipientsType
    {
        return $this->ReplyTo;
    }
    /**
     * Set ReplyTo value
     * @param \ArrayType\EwsArrayOfRecipientsType $replyTo
     * @return \StructType\EwsMessageType
     */
    public function setReplyTo(?\ArrayType\EwsArrayOfRecipientsType $replyTo = null): self
    {
        $this->ReplyTo = $replyTo;
        
        return $this;
    }
    /**
     * Get ReceivedBy value
     * @return \StructType\EwsSingleRecipientType|null
     */
    public function getReceivedBy(): ?\StructType\EwsSingleRecipientType
    {
        return $this->ReceivedBy;
    }
    /**
     * Set ReceivedBy value
     * @param \StructType\EwsSingleRecipientType $receivedBy
     * @return \StructType\EwsMessageType
     */
    public function setReceivedBy(?\StructType\EwsSingleRecipientType $receivedBy = null): self
    {
        $this->ReceivedBy = $receivedBy;
        
        return $this;
    }
    /**
     * Get ReceivedRepresenting value
     * @return \StructType\EwsSingleRecipientType|null
     */
    public function getReceivedRepresenting(): ?\StructType\EwsSingleRecipientType
    {
        return $this->ReceivedRepresenting;
    }
    /**
     * Set ReceivedRepresenting value
     * @param \StructType\EwsSingleRecipientType $receivedRepresenting
     * @return \StructType\EwsMessageType
     */
    public function setReceivedRepresenting(?\StructType\EwsSingleRecipientType $receivedRepresenting = null): self
    {
        $this->ReceivedRepresenting = $receivedRepresenting;
        
        return $this;
    }
    /**
     * Get ApprovalRequestData value
     * @return \StructType\EwsApprovalRequestDataType|null
     */
    public function getApprovalRequestData(): ?\StructType\EwsApprovalRequestDataType
    {
        return $this->ApprovalRequestData;
    }
    /**
     * Set ApprovalRequestData value
     * @param \StructType\EwsApprovalRequestDataType $approvalRequestData
     * @return \StructType\EwsMessageType
     */
    public function setApprovalRequestData(?\StructType\EwsApprovalRequestDataType $approvalRequestData = null): self
    {
        $this->ApprovalRequestData = $approvalRequestData;
        
        return $this;
    }
    /**
     * Get VotingInformation value
     * @return \StructType\EwsVotingInformationType|null
     */
    public function getVotingInformation(): ?\StructType\EwsVotingInformationType
    {
        return $this->VotingInformation;
    }
    /**
     * Set VotingInformation value
     * @param \StructType\EwsVotingInformationType $votingInformation
     * @return \StructType\EwsMessageType
     */
    public function setVotingInformation(?\StructType\EwsVotingInformationType $votingInformation = null): self
    {
        $this->VotingInformation = $votingInformation;
        
        return $this;
    }
    /**
     * Get ReminderMessageData value
     * @return \StructType\EwsReminderMessageDataType|null
     */
    public function getReminderMessageData(): ?\StructType\EwsReminderMessageDataType
    {
        return $this->ReminderMessageData;
    }
    /**
     * Set ReminderMessageData value
     * @param \StructType\EwsReminderMessageDataType $reminderMessageData
     * @return \StructType\EwsMessageType
     */
    public function setReminderMessageData(?\StructType\EwsReminderMessageDataType $reminderMessageData = null): self
    {
        $this->ReminderMessageData = $reminderMessageData;
        
        return $this;
    }
}
