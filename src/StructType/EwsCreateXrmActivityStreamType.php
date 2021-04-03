<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateXrmActivityStreamType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCreateXrmActivityStreamType extends EwsBaseRequestType
{
    /**
     * The Activity
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsXrmActivityStreamType
     */
    protected \StructType\EwsXrmActivityStreamType $Activity;
    /**
     * Constructor method for CreateXrmActivityStreamType
     * @uses EwsCreateXrmActivityStreamType::setActivity()
     * @param \StructType\EwsXrmActivityStreamType $activity
     */
    public function __construct(\StructType\EwsXrmActivityStreamType $activity)
    {
        $this
            ->setActivity($activity);
    }
    /**
     * Get Activity value
     * @return \StructType\EwsXrmActivityStreamType
     */
    public function getActivity(): \StructType\EwsXrmActivityStreamType
    {
        return $this->Activity;
    }
    /**
     * Set Activity value
     * @param \StructType\EwsXrmActivityStreamType $activity
     * @return \StructType\EwsCreateXrmActivityStreamType
     */
    public function setActivity(\StructType\EwsXrmActivityStreamType $activity): self
    {
        $this->Activity = $activity;
        
        return $this;
    }
}
