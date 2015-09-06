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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $InsightType;
    /**
     * The Rank
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var double
     */
    public $Rank;
    /**
     * The Content
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsInsightContent
     */
    public $Content;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Text;
    /**
     * The ItemList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfInsightValue
     */
    public $ItemList;
    /**
     * The RequiresToken
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
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
     * @param double $rank
     * @param \Ews\StructType\EwsInsightContent $content
     * @param string $text
     * @param \Ews\ArrayType\EwsArrayOfInsightValue $itemList
     * @param boolean $requiresToken
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
        $this->InsightType = $insightType;
        return $this;
    }
    /**
     * Get Rank value
     * @return double|null
     */
    public function getRank()
    {
        return $this->Rank;
    }
    /**
     * Set Rank value
     * @param double $rank
     * @return \Ews\StructType\EwsInsight
     */
    public function setRank($rank = null)
    {
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
     * @return boolean|null
     */
    public function getRequiresToken()
    {
        return $this->RequiresToken;
    }
    /**
     * Set RequiresToken value
     * @param boolean $requiresToken
     * @return \Ews\StructType\EwsInsight
     */
    public function setRequiresToken($requiresToken = null)
    {
        $this->RequiresToken = $requiresToken;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsInsight
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
