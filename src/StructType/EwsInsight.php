<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Insight StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsInsight extends AbstractStructBase
{
    /**
     * The InsightType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InsightType = null;
    /**
     * The Rank
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $Rank = null;
    /**
     * The Content
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsInsightContent|null
     */
    protected ?\StructType\EwsInsightContent $Content = null;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Text = null;
    /**
     * The ItemList
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfInsightValue|null
     */
    protected ?\ArrayType\EwsArrayOfInsightValue $ItemList = null;
    /**
     * The RequiresToken
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $RequiresToken = null;
    /**
     * Constructor method for Insight
     * @uses EwsInsight::setInsightType()
     * @uses EwsInsight::setRank()
     * @uses EwsInsight::setContent()
     * @uses EwsInsight::setText()
     * @uses EwsInsight::setItemList()
     * @uses EwsInsight::setRequiresToken()
     * @param string $insightType
     * @param float $rank
     * @param \StructType\EwsInsightContent $content
     * @param string $text
     * @param \ArrayType\EwsArrayOfInsightValue $itemList
     * @param bool $requiresToken
     */
    public function __construct(?string $insightType = null, ?float $rank = null, ?\StructType\EwsInsightContent $content = null, ?string $text = null, ?\ArrayType\EwsArrayOfInsightValue $itemList = null, ?bool $requiresToken = null)
    {
        $this
            ->setInsightType($insightType)
            ->setRank($rank)
            ->setContent($content)
            ->setText($text)
            ->setItemList($itemList)
            ->setRequiresToken($requiresToken);
    }
    /**
     * Get InsightType value
     * @return string|null
     */
    public function getInsightType(): ?string
    {
        return $this->InsightType;
    }
    /**
     * Set InsightType value
     * @param string $insightType
     * @return \StructType\EwsInsight
     */
    public function setInsightType(?string $insightType = null): self
    {
        // validation for constraint: string
        if (!is_null($insightType) && !is_string($insightType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insightType, true), gettype($insightType)), __LINE__);
        }
        $this->InsightType = $insightType;
        
        return $this;
    }
    /**
     * Get Rank value
     * @return float|null
     */
    public function getRank(): ?float
    {
        return $this->Rank;
    }
    /**
     * Set Rank value
     * @param float $rank
     * @return \StructType\EwsInsight
     */
    public function setRank(?float $rank = null): self
    {
        // validation for constraint: float
        if (!is_null($rank) && !(is_float($rank) || is_numeric($rank))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($rank, true), gettype($rank)), __LINE__);
        }
        $this->Rank = $rank;
        
        return $this;
    }
    /**
     * Get Content value
     * @return \StructType\EwsInsightContent|null
     */
    public function getContent(): ?\StructType\EwsInsightContent
    {
        return $this->Content;
    }
    /**
     * Set Content value
     * @param \StructType\EwsInsightContent $content
     * @return \StructType\EwsInsight
     */
    public function setContent(?\StructType\EwsInsightContent $content = null): self
    {
        $this->Content = $content;
        
        return $this;
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \StructType\EwsInsight
     */
    public function setText(?string $text = null): self
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->Text = $text;
        
        return $this;
    }
    /**
     * Get ItemList value
     * @return \ArrayType\EwsArrayOfInsightValue|null
     */
    public function getItemList(): ?\ArrayType\EwsArrayOfInsightValue
    {
        return $this->ItemList;
    }
    /**
     * Set ItemList value
     * @param \ArrayType\EwsArrayOfInsightValue $itemList
     * @return \StructType\EwsInsight
     */
    public function setItemList(?\ArrayType\EwsArrayOfInsightValue $itemList = null): self
    {
        $this->ItemList = $itemList;
        
        return $this;
    }
    /**
     * Get RequiresToken value
     * @return bool|null
     */
    public function getRequiresToken(): ?bool
    {
        return $this->RequiresToken;
    }
    /**
     * Set RequiresToken value
     * @param bool $requiresToken
     * @return \StructType\EwsInsight
     */
    public function setRequiresToken(?bool $requiresToken = null): self
    {
        // validation for constraint: boolean
        if (!is_null($requiresToken) && !is_bool($requiresToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($requiresToken, true), gettype($requiresToken)), __LINE__);
        }
        $this->RequiresToken = $requiresToken;
        
        return $this;
    }
}
