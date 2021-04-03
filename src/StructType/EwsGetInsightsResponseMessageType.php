<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsInsightItemType
     */
    protected \StructType\EwsInsightItemType $Insight;
    /**
     * Constructor method for GetInsightsResponseMessageType
     * @uses EwsGetInsightsResponseMessageType::setInsight()
     * @param \StructType\EwsInsightItemType $insight
     */
    public function __construct(\StructType\EwsInsightItemType $insight)
    {
        $this
            ->setInsight($insight);
    }
    /**
     * Get Insight value
     * @return \StructType\EwsInsightItemType
     */
    public function getInsight(): \StructType\EwsInsightItemType
    {
        return $this->Insight;
    }
    /**
     * Set Insight value
     * @param \StructType\EwsInsightItemType $insight
     * @return \StructType\EwsGetInsightsResponseMessageType
     */
    public function setInsight(\StructType\EwsInsightItemType $insight): self
    {
        $this->Insight = $insight;
        
        return $this;
    }
}
