<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * The PostedTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PostedTime;
    /**
     * The References
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $References;
    /**
     * The Sender
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSingleRecipientType
     */
    public $Sender;
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
     * @param \Ews\StructType\EwsSingleRecipientType $from
     * @param string $internetMessageId
     * @param bool $isRead
     * @param string $postedTime
     * @param string $references
     * @param \Ews\StructType\EwsSingleRecipientType $sender
     */
    public function __construct($conversationIndex = null, $conversationTopic = null, \Ews\StructType\EwsSingleRecipientType $from = null, $internetMessageId = null, $isRead = null, $postedTime = null, $references = null, \Ews\StructType\EwsSingleRecipientType $sender = null)
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
    public function getConversationIndex()
    {
        return $this->ConversationIndex;
    }
    /**
     * Set ConversationIndex value
     * @param string $conversationIndex
     * @return \Ews\StructType\EwsPostItemType
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
     * @return \Ews\StructType\EwsPostItemType
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
     * @return \Ews\StructType\EwsPostItemType
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
     * @return \Ews\StructType\EwsPostItemType
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
     * @return \Ews\StructType\EwsPostItemType
     */
    public function setIsRead($isRead = null)
    {
        $this->IsRead = $isRead;
        return $this;
    }
    /**
     * Get PostedTime value
     * @return string|null
     */
    public function getPostedTime()
    {
        return $this->PostedTime;
    }
    /**
     * Set PostedTime value
     * @param string $postedTime
     * @return \Ews\StructType\EwsPostItemType
     */
    public function setPostedTime($postedTime = null)
    {
        // validation for constraint: string
        if (!is_null($postedTime) && !is_string($postedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postedTime)), __LINE__);
        }
        $this->PostedTime = $postedTime;
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
     * @return \Ews\StructType\EwsPostItemType
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
     * @return \Ews\StructType\EwsPostItemType
     */
    public function setSender(\Ews\StructType\EwsSingleRecipientType $sender = null)
    {
        $this->Sender = $sender;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsPostItemType
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
