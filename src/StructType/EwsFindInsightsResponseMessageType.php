<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindInsightsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindInsightsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Insights
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfInsightItemType
     */
    public $Insights;
    /**
     * Constructor method for FindInsightsResponseMessageType
     * @uses EwsFindInsightsResponseMessageType::setInsights()
     * @param \Ews\ArrayType\EwsArrayOfInsightItemType $insights
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfInsightItemType $insights = null)
    {
        $this
            ->setInsights($insights);
    }
    /**
     * Get Insights value
     * @return \Ews\ArrayType\EwsArrayOfInsightItemType
     */
    public function getInsights()
    {
        return $this->Insights;
    }
    /**
     * Set Insights value
     * @param \Ews\ArrayType\EwsArrayOfInsightItemType $insights
     * @return \Ews\StructType\EwsFindInsightsResponseMessageType
     */
    public function setInsights(\Ews\ArrayType\EwsArrayOfInsightItemType $insights = null)
    {
        $this->Insights = $insights;
        return $this;
    }
}
