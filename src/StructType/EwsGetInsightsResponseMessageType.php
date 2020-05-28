<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetInsightsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetInsightsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Insight
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsInsightItemType
     */
    public $Insight;
    /**
     * Constructor method for GetInsightsResponseMessageType
     * @uses EwsGetInsightsResponseMessageType::setInsight()
     * @param \Ews\StructType\EwsInsightItemType $insight
     */
    public function __construct(\Ews\StructType\EwsInsightItemType $insight = null)
    {
        $this
            ->setInsight($insight);
    }
    /**
     * Get Insight value
     * @return \Ews\StructType\EwsInsightItemType
     */
    public function getInsight()
    {
        return $this->Insight;
    }
    /**
     * Set Insight value
     * @param \Ews\StructType\EwsInsightItemType $insight
     * @return \Ews\StructType\EwsGetInsightsResponseMessageType
     */
    public function setInsight(\Ews\StructType\EwsInsightItemType $insight = null)
    {
        $this->Insight = $insight;
        return $this;
    }
}
