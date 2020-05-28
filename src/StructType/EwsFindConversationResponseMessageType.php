<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindConversationResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindConversationResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Conversations
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfConversationsType
     */
    public $Conversations;
    /**
     * The HighlightTerms
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfHighlightTermsType
     */
    public $HighlightTerms;
    /**
     * The TotalConversationsInView
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TotalConversationsInView;
    /**
     * The IndexedOffset
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $IndexedOffset;
    /**
     * Constructor method for FindConversationResponseMessageType
     * @uses EwsFindConversationResponseMessageType::setConversations()
     * @uses EwsFindConversationResponseMessageType::setHighlightTerms()
     * @uses EwsFindConversationResponseMessageType::setTotalConversationsInView()
     * @uses EwsFindConversationResponseMessageType::setIndexedOffset()
     * @param \Ews\ArrayType\EwsArrayOfConversationsType $conversations
     * @param \Ews\ArrayType\EwsArrayOfHighlightTermsType $highlightTerms
     * @param int $totalConversationsInView
     * @param int $indexedOffset
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfConversationsType $conversations = null, \Ews\ArrayType\EwsArrayOfHighlightTermsType $highlightTerms = null, $totalConversationsInView = null, $indexedOffset = null)
    {
        $this
            ->setConversations($conversations)
            ->setHighlightTerms($highlightTerms)
            ->setTotalConversationsInView($totalConversationsInView)
            ->setIndexedOffset($indexedOffset);
    }
    /**
     * Get Conversations value
     * @return \Ews\ArrayType\EwsArrayOfConversationsType|null
     */
    public function getConversations()
    {
        return $this->Conversations;
    }
    /**
     * Set Conversations value
     * @param \Ews\ArrayType\EwsArrayOfConversationsType $conversations
     * @return \Ews\StructType\EwsFindConversationResponseMessageType
     */
    public function setConversations(\Ews\ArrayType\EwsArrayOfConversationsType $conversations = null)
    {
        $this->Conversations = $conversations;
        return $this;
    }
    /**
     * Get HighlightTerms value
     * @return \Ews\ArrayType\EwsArrayOfHighlightTermsType|null
     */
    public function getHighlightTerms()
    {
        return $this->HighlightTerms;
    }
    /**
     * Set HighlightTerms value
     * @param \Ews\ArrayType\EwsArrayOfHighlightTermsType $highlightTerms
     * @return \Ews\StructType\EwsFindConversationResponseMessageType
     */
    public function setHighlightTerms(\Ews\ArrayType\EwsArrayOfHighlightTermsType $highlightTerms = null)
    {
        $this->HighlightTerms = $highlightTerms;
        return $this;
    }
    /**
     * Get TotalConversationsInView value
     * @return int|null
     */
    public function getTotalConversationsInView()
    {
        return $this->TotalConversationsInView;
    }
    /**
     * Set TotalConversationsInView value
     * @param int $totalConversationsInView
     * @return \Ews\StructType\EwsFindConversationResponseMessageType
     */
    public function setTotalConversationsInView($totalConversationsInView = null)
    {
        // validation for constraint: int
        if (!is_null($totalConversationsInView) && !(is_int($totalConversationsInView) || ctype_digit($totalConversationsInView))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalConversationsInView, true), gettype($totalConversationsInView)), __LINE__);
        }
        $this->TotalConversationsInView = $totalConversationsInView;
        return $this;
    }
    /**
     * Get IndexedOffset value
     * @return int|null
     */
    public function getIndexedOffset()
    {
        return $this->IndexedOffset;
    }
    /**
     * Set IndexedOffset value
     * @param int $indexedOffset
     * @return \Ews\StructType\EwsFindConversationResponseMessageType
     */
    public function setIndexedOffset($indexedOffset = null)
    {
        // validation for constraint: int
        if (!is_null($indexedOffset) && !(is_int($indexedOffset) || ctype_digit($indexedOffset))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($indexedOffset, true), gettype($indexedOffset)), __LINE__);
        }
        $this->IndexedOffset = $indexedOffset;
        return $this;
    }
}
