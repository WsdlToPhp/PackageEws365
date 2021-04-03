<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfInsightItemType
     */
    protected \ArrayType\EwsArrayOfInsightItemType $Insights;
    /**
     * Constructor method for FindInsightsResponseMessageType
     * @uses EwsFindInsightsResponseMessageType::setInsights()
     * @param \ArrayType\EwsArrayOfInsightItemType $insights
     */
    public function __construct(\ArrayType\EwsArrayOfInsightItemType $insights)
    {
        $this
            ->setInsights($insights);
    }
    /**
     * Get Insights value
     * @return \ArrayType\EwsArrayOfInsightItemType
     */
    public function getInsights(): \ArrayType\EwsArrayOfInsightItemType
    {
        return $this->Insights;
    }
    /**
     * Set Insights value
     * @param \ArrayType\EwsArrayOfInsightItemType $insights
     * @return \StructType\EwsFindInsightsResponseMessageType
     */
    public function setInsights(\ArrayType\EwsArrayOfInsightItemType $insights): self
    {
        $this->Insights = $insights;
        
        return $this;
    }
}
