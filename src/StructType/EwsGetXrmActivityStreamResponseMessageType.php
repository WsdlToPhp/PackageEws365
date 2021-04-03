<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsXrmActivityStreamType|null
     */
    protected ?\StructType\EwsXrmActivityStreamType $Activity = null;
    /**
     * Constructor method for GetXrmActivityStreamResponseMessageType
     * @uses EwsGetXrmActivityStreamResponseMessageType::setActivity()
     * @param \StructType\EwsXrmActivityStreamType $activity
     */
    public function __construct(?\StructType\EwsXrmActivityStreamType $activity = null)
    {
        $this
            ->setActivity($activity);
    }
    /**
     * Get Activity value
     * @return \StructType\EwsXrmActivityStreamType|null
     */
    public function getActivity(): ?\StructType\EwsXrmActivityStreamType
    {
        return $this->Activity;
    }
    /**
     * Set Activity value
     * @param \StructType\EwsXrmActivityStreamType $activity
     * @return \StructType\EwsGetXrmActivityStreamResponseMessageType
     */
    public function setActivity(?\StructType\EwsXrmActivityStreamType $activity = null): self
    {
        $this->Activity = $activity;
        
        return $this;
    }
}
