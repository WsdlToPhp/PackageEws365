<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSingleRecipientType
     */
    public $Sender;
    /**
     * The ToRecipients
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfRecipientsType
     */
    public $ToRecipients;
    /**
     * The CcRecipients
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfRecipientsType
     */
    public $CcRecipients;
    /**
     * The BccRecipients
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfRecipientsType
     */
    public $BccRecipients;
    /**
     * The IsReadReceiptRequested
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsReadReceiptRequested;
    /**
     * The IsDeliveryReceiptRequested
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsDeliveryReceiptRequested;
    /**
     * The ConversationIndex
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ConversationIndex;
    /**
     * The ConversationTopic
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ConversationTopic;
    /**
     * The From
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSingleRecipientType
     */
    public $From;
    /**
     * The InternetMessageId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $InternetMessageId;
    /**
     * The IsRead
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsRead;
    /**
     * The IsResponseRequested
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsResponseRequested;
    /**
     * The References
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $References;
    /**
     * The ReplyTo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfRecipientsType
     */
    public $ReplyTo;
    /**
     * The ReceivedBy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSingleRecipientType
     */
    public $ReceivedBy;
    /**
     * The ReceivedRepresenting
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSingleRecipientType
     */
    public $ReceivedRepresenting;
    /**
     * The ApprovalRequestData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsApprovalRequestDataType
     */
    public $ApprovalRequestData;
    /**
     * The VotingInformation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsVotingInformationType
     */
    public $VotingInformation;
    /**
     * The ReminderMessageData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsReminderMessageDataType
     */
    public $ReminderMessageData;
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
     * @param \Ews\StructType\EwsSingleRecipientType $sender
     * @param \Ews\ArrayType\EwsArrayOfRecipientsType $toRecipients
     * @param \Ews\ArrayType\EwsArrayOfRecipientsType $ccRecipients
     * @param \Ews\ArrayType\EwsArrayOfRecipientsType $bccRecipients
     * @param bool $isReadReceiptRequested
     * @param bool $isDeliveryReceiptRequested
     * @param string $conversationIndex
     * @param string $conversationTopic
     * @param \Ews\StructType\EwsSingleRecipientType $from
     * @param string $internetMessageId
     * @param bool $isRead
     * @param bool $isResponseRequested
     * @param string $references
     * @param \Ews\ArrayType\EwsArrayOfRecipientsType $replyTo
     * @param \Ews\StructType\EwsSingleRecipientType $receivedBy
     * @param \Ews\StructType\EwsSingleRecipientType $receivedRepresenting
     * @param \Ews\StructType\EwsApprovalRequestDataType $approvalRequestData
     * @param \Ews\StructType\EwsVotingInformationType $votingInformation
     * @param \Ews\StructType\EwsReminderMessageDataType $reminderMessageData
     */
    public function __construct(\Ews\StructType\EwsSingleRecipientType $sender = null, \Ews\ArrayType\EwsArrayOfRecipientsType $toRecipients = null, \Ews\ArrayType\EwsArrayOfRecipientsType $ccRecipients = null, \Ews\ArrayType\EwsArrayOfRecipientsType $bccRecipients = null, $isReadReceiptRequested = null, $isDeliveryReceiptRequested = null, $conversationIndex = null, $conversationTopic = null, \Ews\StructType\EwsSingleRecipientType $from = null, $internetMessageId = null, $isRead = null, $isResponseRequested = null, $references = null, \Ews\ArrayType\EwsArrayOfRecipientsType $replyTo = null, \Ews\StructType\EwsSingleRecipientType $receivedBy = null, \Ews\StructType\EwsSingleRecipientType $receivedRepresenting = null, \Ews\StructType\EwsApprovalRequestDataType $approvalRequestData = null, \Ews\StructType\EwsVotingInformationType $votingInformation = null, \Ews\StructType\EwsReminderMessageDataType $reminderMessageData = null)
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
     * @return \Ews\StructType\EwsSingleRecipientType|null
     */
    public function getSender()
    {
        return $this->Sender;
    }
    /**
     * Set Sender value
     * @param \Ews\StructType\EwsSingleRecipientType $sender
     * @return \Ews\StructType\EwsMessageType
     */
    public function setSender(\Ews\StructType\EwsSingleRecipientType $sender = null)
    {
        $this->Sender = $sender;
        return $this;
    }
    /**
     * Get ToRecipients value
     * @return \Ews\ArrayType\EwsArrayOfRecipientsType|null
     */
    public function getToRecipients()
    {
        return $this->ToRecipients;
    }
    /**
     * Set ToRecipients value
     * @param \Ews\ArrayType\EwsArrayOfRecipientsType $toRecipients
     * @return \Ews\StructType\EwsMessageType
     */
    public function setToRecipients(\Ews\ArrayType\EwsArrayOfRecipientsType $toRecipients = null)
    {
        $this->ToRecipients = $toRecipients;
        return $this;
    }
    /**
     * Get CcRecipients value
     * @return \Ews\ArrayType\EwsArrayOfRecipientsType|null
     */
    public function getCcRecipients()
    {
        return $this->CcRecipients;
    }
    /**
     * Set CcRecipients value
     * @param \Ews\ArrayType\EwsArrayOfRecipientsType $ccRecipients
     * @return \Ews\StructType\EwsMessageType
     */
    public function setCcRecipients(\Ews\ArrayType\EwsArrayOfRecipientsType $ccRecipients = null)
    {
        $this->CcRecipients = $ccRecipients;
        return $this;
    }
    /**
     * Get BccRecipients value
     * @return \Ews\ArrayType\EwsArrayOfRecipientsType|null
     */
    public function getBccRecipients()
    {
        return $this->BccRecipients;
    }
    /**
     * Set BccRecipients value
     * @param \Ews\ArrayType\EwsArrayOfRecipientsType $bccRecipients
     * @return \Ews\StructType\EwsMessageType
     */
    public function setBccRecipients(\Ews\ArrayType\EwsArrayOfRecipientsType $bccRecipients = null)
    {
        $this->BccRecipients = $bccRecipients;
        return $this;
    }
    /**
     * Get IsReadReceiptRequested value
     * @return bool|null
     */
    public function getIsReadReceiptRequested()
    {
        return $this->IsReadReceiptRequested;
    }
    /**
     * Set IsReadReceiptRequested value
     * @param bool $isReadReceiptRequested
     * @return \Ews\StructType\EwsMessageType
     */
    public function setIsReadReceiptRequested($isReadReceiptRequested = null)
    {
        // validation for constraint: boolean
        if (!is_null($isReadReceiptRequested) && !is_bool($isReadReceiptRequested)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isReadReceiptRequested)), __LINE__);
        }
        $this->IsReadReceiptRequested = $isReadReceiptRequested;
        return $this;
    }
    /**
     * Get IsDeliveryReceiptRequested value
     * @return bool|null
     */
    public function getIsDeliveryReceiptRequested()
    {
        return $this->IsDeliveryReceiptRequested;
    }
    /**
     * Set IsDeliveryReceiptRequested value
     * @param bool $isDeliveryReceiptRequested
     * @return \Ews\StructType\EwsMessageType
     */
    public function setIsDeliveryReceiptRequested($isDeliveryReceiptRequested = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDeliveryReceiptRequested) && !is_bool($isDeliveryReceiptRequested)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isDeliveryReceiptRequested)), __LINE__);
        }
        $this->IsDeliveryReceiptRequested = $isDeliveryReceiptRequested;
        return $this;
    }
    /**
     * Get ConversationIndex value
     * @return string|null
     */
    public function getConversationIndex()
    {
        return $this->ConversationIndex;
    }
    /**
     * Set ConversationIndex value
     * @param string $conversationIndex
     * @return \Ews\StructType\EwsMessageType
     */
    public function setConversationIndex($conversationIndex = null)
    {
        // validation for constraint: string
        if (!is_null($conversationIndex) && !is_string($conversationIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($conversationIndex)), __LINE__);
        }
        $this->ConversationIndex = $conversationIndex;
        return $this;
    }
    /**
     * Get ConversationTopic value
     * @return string|null
     */
    public function getConversationTopic()
    {
        return $this->ConversationTopic;
    }
    /**
     * Set ConversationTopic value
     * @param string $conversationTopic
     * @return \Ews\StructType\EwsMessageType
     */
    public function setConversationTopic($conversationTopic = null)
    {
        // validation for constraint: string
        if (!is_null($conversationTopic) && !is_string($conversationTopic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($conversationTopic)), __LINE__);
        }
        $this->ConversationTopic = $conversationTopic;
        return $this;
    }
    /**
     * Get From value
     * @return \Ews\StructType\EwsSingleRecipientType|null
     */
    public function getFrom()
    {
        return $this->From;
    }
    /**
     * Set From value
     * @param \Ews\StructType\EwsSingleRecipientType $from
     * @return \Ews\StructType\EwsMessageType
     */
    public function setFrom(\Ews\StructType\EwsSingleRecipientType $from = null)
    {
        $this->From = $from;
        return $this;
    }
    /**
     * Get InternetMessageId value
     * @return string|null
     */
    public function getInternetMessageId()
    {
        return $this->InternetMessageId;
    }
    /**
     * Set InternetMessageId value
     * @param string $internetMessageId
     * @return \Ews\StructType\EwsMessageType
     */
    public function setInternetMessageId($internetMessageId = null)
    {
        // validation for constraint: string
        if (!is_null($internetMessageId) && !is_string($internetMessageId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($internetMessageId)), __LINE__);
        }
        $this->InternetMessageId = $internetMessageId;
        return $this;
    }
    /**
     * Get IsRead value
     * @return bool|null
     */
    public function getIsRead()
    {
        return $this->IsRead;
    }
    /**
     * Set IsRead value
     * @param bool $isRead
     * @return \Ews\StructType\EwsMessageType
     */
    public function setIsRead($isRead = null)
    {
        // validation for constraint: boolean
        if (!is_null($isRead) && !is_bool($isRead)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isRead)), __LINE__);
        }
        $this->IsRead = $isRead;
        return $this;
    }
    /**
     * Get IsResponseRequested value
     * @return bool|null
     */
    public function getIsResponseRequested()
    {
        return $this->IsResponseRequested;
    }
    /**
     * Set IsResponseRequested value
     * @param bool $isResponseRequested
     * @return \Ews\StructType\EwsMessageType
     */
    public function setIsResponseRequested($isResponseRequested = null)
    {
        // validation for constraint: boolean
        if (!is_null($isResponseRequested) && !is_bool($isResponseRequested)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isResponseRequested)), __LINE__);
        }
        $this->IsResponseRequested = $isResponseRequested;
        return $this;
    }
    /**
     * Get References value
     * @return string|null
     */
    public function getReferences()
    {
        return $this->References;
    }
    /**
     * Set References value
     * @param string $references
     * @return \Ews\StructType\EwsMessageType
     */
    public function setReferences($references = null)
    {
        // validation for constraint: string
        if (!is_null($references) && !is_string($references)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($references)), __LINE__);
        }
        $this->References = $references;
        return $this;
    }
    /**
     * Get ReplyTo value
     * @return \Ews\ArrayType\EwsArrayOfRecipientsType|null
     */
    public function getReplyTo()
    {
        return $this->ReplyTo;
    }
    /**
     * Set ReplyTo value
     * @param \Ews\ArrayType\EwsArrayOfRecipientsType $replyTo
     * @return \Ews\StructType\EwsMessageType
     */
    public function setReplyTo(\Ews\ArrayType\EwsArrayOfRecipientsType $replyTo = null)
    {
        $this->ReplyTo = $replyTo;
        return $this;
    }
    /**
     * Get ReceivedBy value
     * @return \Ews\StructType\EwsSingleRecipientType|null
     */
    public function getReceivedBy()
    {
        return $this->ReceivedBy;
    }
    /**
     * Set ReceivedBy value
     * @param \Ews\StructType\EwsSingleRecipientType $receivedBy
     * @return \Ews\StructType\EwsMessageType
     */
    public function setReceivedBy(\Ews\StructType\EwsSingleRecipientType $receivedBy = null)
    {
        $this->ReceivedBy = $receivedBy;
        return $this;
    }
    /**
     * Get ReceivedRepresenting value
     * @return \Ews\StructType\EwsSingleRecipientType|null
     */
    public function getReceivedRepresenting()
    {
        return $this->ReceivedRepresenting;
    }
    /**
     * Set ReceivedRepresenting value
     * @param \Ews\StructType\EwsSingleRecipientType $receivedRepresenting
     * @return \Ews\StructType\EwsMessageType
     */
    public function setReceivedRepresenting(\Ews\StructType\EwsSingleRecipientType $receivedRepresenting = null)
    {
        $this->ReceivedRepresenting = $receivedRepresenting;
        return $this;
    }
    /**
     * Get ApprovalRequestData value
     * @return \Ews\StructType\EwsApprovalRequestDataType|null
     */
    public function getApprovalRequestData()
    {
        return $this->ApprovalRequestData;
    }
    /**
     * Set ApprovalRequestData value
     * @param \Ews\StructType\EwsApprovalRequestDataType $approvalRequestData
     * @return \Ews\StructType\EwsMessageType
     */
    public function setApprovalRequestData(\Ews\StructType\EwsApprovalRequestDataType $approvalRequestData = null)
    {
        $this->ApprovalRequestData = $approvalRequestData;
        return $this;
    }
    /**
     * Get VotingInformation value
     * @return \Ews\StructType\EwsVotingInformationType|null
     */
    public function getVotingInformation()
    {
        return $this->VotingInformation;
    }
    /**
     * Set VotingInformation value
     * @param \Ews\StructType\EwsVotingInformationType $votingInformation
     * @return \Ews\StructType\EwsMessageType
     */
    public function setVotingInformation(\Ews\StructType\EwsVotingInformationType $votingInformation = null)
    {
        $this->VotingInformation = $votingInformation;
        return $this;
    }
    /**
     * Get ReminderMessageData value
     * @return \Ews\StructType\EwsReminderMessageDataType|null
     */
    public function getReminderMessageData()
    {
        return $this->ReminderMessageData;
    }
    /**
     * Set ReminderMessageData value
     * @param \Ews\StructType\EwsReminderMessageDataType $reminderMessageData
     * @return \Ews\StructType\EwsMessageType
     */
    public function setReminderMessageData(\Ews\StructType\EwsReminderMessageDataType $reminderMessageData = null)
    {
        $this->ReminderMessageData = $reminderMessageData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMessageType
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
