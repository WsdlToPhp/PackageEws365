<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string
     */
    public $InsightType;
    /**
     * The Rank
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $Rank;
    /**
     * The Content
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsInsightContent
     */
    public $Content;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Text;
    /**
     * The ItemList
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfInsightValue
     */
    public $ItemList;
    /**
     * The RequiresToken
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $RequiresToken;
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
     * @param \Ews\StructType\EwsInsightContent $content
     * @param string $text
     * @param \Ews\ArrayType\EwsArrayOfInsightValue $itemList
     * @param bool $requiresToken
     */
    public function __construct($insightType = null, $rank = null, \Ews\StructType\EwsInsightContent $content = null, $text = null, \Ews\ArrayType\EwsArrayOfInsightValue $itemList = null, $requiresToken = null)
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
    public function getInsightType()
    {
        return $this->InsightType;
    }
    /**
     * Set InsightType value
     * @param string $insightType
     * @return \Ews\StructType\EwsInsight
     */
    public function setInsightType($insightType = null)
    {
        // validation for constraint: string
        if (!is_null($insightType) && !is_string($insightType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insightType, true), gettype($insightType)), __LINE__);
        }
        $this->InsightType = $insightType;
        return $this;
    }
    /**
     * Get Rank value
     * @return float|null
     */
    public function getRank()
    {
        return $this->Rank;
    }
    /**
     * Set Rank value
     * @param float $rank
     * @return \Ews\StructType\EwsInsight
     */
    public function setRank($rank = null)
    {
        // validation for constraint: float
        if (!is_null($rank) && !(is_float($rank) || is_numeric($rank))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($rank, true), gettype($rank)), __LINE__);
        }
        $this->Rank = $rank;
        return $this;
    }
    /**
     * Get Content value
     * @return \Ews\StructType\EwsInsightContent|null
     */
    public function getContent()
    {
        return $this->Content;
    }
    /**
     * Set Content value
     * @param \Ews\StructType\EwsInsightContent $content
     * @return \Ews\StructType\EwsInsight
     */
    public function setContent(\Ews\StructType\EwsInsightContent $content = null)
    {
        $this->Content = $content;
        return $this;
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \Ews\StructType\EwsInsight
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->Text = $text;
        return $this;
    }
    /**
     * Get ItemList value
     * @return \Ews\ArrayType\EwsArrayOfInsightValue|null
     */
    public function getItemList()
    {
        return $this->ItemList;
    }
    /**
     * Set ItemList value
     * @param \Ews\ArrayType\EwsArrayOfInsightValue $itemList
     * @return \Ews\StructType\EwsInsight
     */
    public function setItemList(\Ews\ArrayType\EwsArrayOfInsightValue $itemList = null)
    {
        $this->ItemList = $itemList;
        return $this;
    }
    /**
     * Get RequiresToken value
     * @return bool|null
     */
    public function getRequiresToken()
    {
        return $this->RequiresToken;
    }
    /**
     * Set RequiresToken value
     * @param bool $requiresToken
     * @return \Ews\StructType\EwsInsight
     */
    public function setRequiresToken($requiresToken = null)
    {
        // validation for constraint: boolean
        if (!is_null($requiresToken) && !is_bool($requiresToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($requiresToken, true), gettype($requiresToken)), __LINE__);
        }
        $this->RequiresToken = $requiresToken;
        return $this;
    }
}
