<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SocialActivityMetadataType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSocialActivityMetadataType extends AbstractStructBase
{
    /**
     * The TargetGroupName
     * @var string
     */
    public $TargetGroupName;
    /**
     * The MessagePreview
     * @var string
     */
    public $MessagePreview;
    /**
     * Constructor method for SocialActivityMetadataType
     * @uses EwsSocialActivityMetadataType::setTargetGroupName()
     * @uses EwsSocialActivityMetadataType::setMessagePreview()
     * @param string $targetGroupName
     * @param string $messagePreview
     */
    public function __construct($targetGroupName = null, $messagePreview = null)
    {
        $this
            ->setTargetGroupName($targetGroupName)
            ->setMessagePreview($messagePreview);
    }
    /**
     * Get TargetGroupName value
     * @return string|null
     */
    public function getTargetGroupName()
    {
        return $this->TargetGroupName;
    }
    /**
     * Set TargetGroupName value
     * @param string $targetGroupName
     * @return \Ews\StructType\EwsSocialActivityMetadataType
     */
    public function setTargetGroupName($targetGroupName = null)
    {
        // validation for constraint: string
        if (!is_null($targetGroupName) && !is_string($targetGroupName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetGroupName, true), gettype($targetGroupName)), __LINE__);
        }
        $this->TargetGroupName = $targetGroupName;
        return $this;
    }
    /**
     * Get MessagePreview value
     * @return string|null
     */
    public function getMessagePreview()
    {
        return $this->MessagePreview;
    }
    /**
     * Set MessagePreview value
     * @param string $messagePreview
     * @return \Ews\StructType\EwsSocialActivityMetadataType
     */
    public function setMessagePreview($messagePreview = null)
    {
        // validation for constraint: string
        if (!is_null($messagePreview) && !is_string($messagePreview)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messagePreview, true), gettype($messagePreview)), __LINE__);
        }
        $this->MessagePreview = $messagePreview;
        return $this;
    }
}
