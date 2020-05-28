<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransitionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsTransitionType extends AbstractStructBase
{
    /**
     * The To
     * @var \Ews\StructType\EwsTransitionTargetType
     */
    public $To;
    /**
     * Constructor method for TransitionType
     * @uses EwsTransitionType::setTo()
     * @param \Ews\StructType\EwsTransitionTargetType $to
     */
    public function __construct(\Ews\StructType\EwsTransitionTargetType $to = null)
    {
        $this
            ->setTo($to);
    }
    /**
     * Get To value
     * @return \Ews\StructType\EwsTransitionTargetType|null
     */
    public function getTo()
    {
        return $this->To;
    }
    /**
     * Set To value
     * @param \Ews\StructType\EwsTransitionTargetType $to
     * @return \Ews\StructType\EwsTransitionType
     */
    public function setTo(\Ews\StructType\EwsTransitionTargetType $to = null)
    {
        $this->To = $to;
        return $this;
    }
}
