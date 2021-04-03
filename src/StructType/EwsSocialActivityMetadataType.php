<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $TargetGroupName = null;
    /**
     * The MessagePreview
     * @var string|null
     */
    protected ?string $MessagePreview = null;
    /**
     * Constructor method for SocialActivityMetadataType
     * @uses EwsSocialActivityMetadataType::setTargetGroupName()
     * @uses EwsSocialActivityMetadataType::setMessagePreview()
     * @param string $targetGroupName
     * @param string $messagePreview
     */
    public function __construct(?string $targetGroupName = null, ?string $messagePreview = null)
    {
        $this
            ->setTargetGroupName($targetGroupName)
            ->setMessagePreview($messagePreview);
    }
    /**
     * Get TargetGroupName value
     * @return string|null
     */
    public function getTargetGroupName(): ?string
    {
        return $this->TargetGroupName;
    }
    /**
     * Set TargetGroupName value
     * @param string $targetGroupName
     * @return \StructType\EwsSocialActivityMetadataType
     */
    public function setTargetGroupName(?string $targetGroupName = null): self
    {
        // validation for constraint: string
        if (!is_null($targetGroupName) && !is_string($targetGroupName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetGroupName, true), gettype($targetGroupName)), __LINE__);
        }
        $this->TargetGroupName = $targetGroupName;
        
        return $this;
    }
    /**
     * Get MessagePreview value
     * @return string|null
     */
    public function getMessagePreview(): ?string
    {
        return $this->MessagePreview;
    }
    /**
     * Set MessagePreview value
     * @param string $messagePreview
     * @return \StructType\EwsSocialActivityMetadataType
     */
    public function setMessagePreview(?string $messagePreview = null): self
    {
        // validation for constraint: string
        if (!is_null($messagePreview) && !is_string($messagePreview)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messagePreview, true), gettype($messagePreview)), __LINE__);
        }
        $this->MessagePreview = $messagePreview;
        
        return $this;
    }
}
