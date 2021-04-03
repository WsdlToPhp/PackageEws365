<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfConversationsType|null
     */
    protected ?\ArrayType\EwsArrayOfConversationsType $Conversations = null;
    /**
     * The HighlightTerms
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfHighlightTermsType|null
     */
    protected ?\ArrayType\EwsArrayOfHighlightTermsType $HighlightTerms = null;
    /**
     * The TotalConversationsInView
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TotalConversationsInView = null;
    /**
     * The IndexedOffset
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $IndexedOffset = null;
    /**
     * Constructor method for FindConversationResponseMessageType
     * @uses EwsFindConversationResponseMessageType::setConversations()
     * @uses EwsFindConversationResponseMessageType::setHighlightTerms()
     * @uses EwsFindConversationResponseMessageType::setTotalConversationsInView()
     * @uses EwsFindConversationResponseMessageType::setIndexedOffset()
     * @param \ArrayType\EwsArrayOfConversationsType $conversations
     * @param \ArrayType\EwsArrayOfHighlightTermsType $highlightTerms
     * @param int $totalConversationsInView
     * @param int $indexedOffset
     */
    public function __construct(?\ArrayType\EwsArrayOfConversationsType $conversations = null, ?\ArrayType\EwsArrayOfHighlightTermsType $highlightTerms = null, ?int $totalConversationsInView = null, ?int $indexedOffset = null)
    {
        $this
            ->setConversations($conversations)
            ->setHighlightTerms($highlightTerms)
            ->setTotalConversationsInView($totalConversationsInView)
            ->setIndexedOffset($indexedOffset);
    }
    /**
     * Get Conversations value
     * @return \ArrayType\EwsArrayOfConversationsType|null
     */
    public function getConversations(): ?\ArrayType\EwsArrayOfConversationsType
    {
        return $this->Conversations;
    }
    /**
     * Set Conversations value
     * @param \ArrayType\EwsArrayOfConversationsType $conversations
     * @return \StructType\EwsFindConversationResponseMessageType
     */
    public function setConversations(?\ArrayType\EwsArrayOfConversationsType $conversations = null): self
    {
        $this->Conversations = $conversations;
        
        return $this;
    }
    /**
     * Get HighlightTerms value
     * @return \ArrayType\EwsArrayOfHighlightTermsType|null
     */
    public function getHighlightTerms(): ?\ArrayType\EwsArrayOfHighlightTermsType
    {
        return $this->HighlightTerms;
    }
    /**
     * Set HighlightTerms value
     * @param \ArrayType\EwsArrayOfHighlightTermsType $highlightTerms
     * @return \StructType\EwsFindConversationResponseMessageType
     */
    public function setHighlightTerms(?\ArrayType\EwsArrayOfHighlightTermsType $highlightTerms = null): self
    {
        $this->HighlightTerms = $highlightTerms;
        
        return $this;
    }
    /**
     * Get TotalConversationsInView value
     * @return int|null
     */
    public function getTotalConversationsInView(): ?int
    {
        return $this->TotalConversationsInView;
    }
    /**
     * Set TotalConversationsInView value
     * @param int $totalConversationsInView
     * @return \StructType\EwsFindConversationResponseMessageType
     */
    public function setTotalConversationsInView(?int $totalConversationsInView = null): self
    {
        // validation for constraint: int
        if (!is_null($totalConversationsInView) && !(is_int($totalConversationsInView) || ctype_digit($totalConversationsInView))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalConversationsInView, true), gettype($totalConversationsInView)), __LINE__);
        }
        $this->TotalConversationsInView = $totalConversationsInView;
        
        return $this;
    }
    /**
     * Get IndexedOffset value
     * @return int|null
     */
    public function getIndexedOffset(): ?int
    {
        return $this->IndexedOffset;
    }
    /**
     * Set IndexedOffset value
     * @param int $indexedOffset
     * @return \StructType\EwsFindConversationResponseMessageType
     */
    public function setIndexedOffset(?int $indexedOffset = null): self
    {
        // validation for constraint: int
        if (!is_null($indexedOffset) && !(is_int($indexedOffset) || ctype_digit($indexedOffset))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($indexedOffset, true), gettype($indexedOffset)), __LINE__);
        }
        $this->IndexedOffset = $indexedOffset;
        
        return $this;
    }
}
