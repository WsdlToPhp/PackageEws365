<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsTransitionTargetType|null
     */
    protected ?\StructType\EwsTransitionTargetType $To = null;
    /**
     * Constructor method for TransitionType
     * @uses EwsTransitionType::setTo()
     * @param \StructType\EwsTransitionTargetType $to
     */
    public function __construct(?\StructType\EwsTransitionTargetType $to = null)
    {
        $this
            ->setTo($to);
    }
    /**
     * Get To value
     * @return \StructType\EwsTransitionTargetType|null
     */
    public function getTo(): ?\StructType\EwsTransitionTargetType
    {
        return $this->To;
    }
    /**
     * Set To value
     * @param \StructType\EwsTransitionTargetType $to
     * @return \StructType\EwsTransitionType
     */
    public function setTo(?\StructType\EwsTransitionTargetType $to = null): self
    {
        $this->To = $to;
        
        return $this;
    }
}
