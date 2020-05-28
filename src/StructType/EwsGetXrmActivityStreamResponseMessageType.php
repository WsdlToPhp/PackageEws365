<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetXrmActivityStreamResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetXrmActivityStreamResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Activity
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsXrmActivityStreamType
     */
    public $Activity;
    /**
     * Constructor method for GetXrmActivityStreamResponseMessageType
     * @uses EwsGetXrmActivityStreamResponseMessageType::setActivity()
     * @param \Ews\StructType\EwsXrmActivityStreamType $activity
     */
    public function __construct(\Ews\StructType\EwsXrmActivityStreamType $activity = null)
    {
        $this
            ->setActivity($activity);
    }
    /**
     * Get Activity value
     * @return \Ews\StructType\EwsXrmActivityStreamType|null
     */
    public function getActivity()
    {
        return $this->Activity;
    }
    /**
     * Set Activity value
     * @param \Ews\StructType\EwsXrmActivityStreamType $activity
     * @return \Ews\StructType\EwsGetXrmActivityStreamResponseMessageType
     */
    public function setActivity(\Ews\StructType\EwsXrmActivityStreamType $activity = null)
    {
        $this->Activity = $activity;
        return $this;
    }
}
