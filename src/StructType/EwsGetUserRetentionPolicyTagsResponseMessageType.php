<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserRetentionPolicyTagsResponseMessageType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response message type for the GetUserRetentionPolicyTags web method.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUserRetentionPolicyTagsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The RetentionPolicyTags
     * @var \ArrayType\EwsArrayOfRetentionPolicyTagsType|null
     */
    protected ?\ArrayType\EwsArrayOfRetentionPolicyTagsType $RetentionPolicyTags = null;
    /**
     * Constructor method for GetUserRetentionPolicyTagsResponseMessageType
     * @uses EwsGetUserRetentionPolicyTagsResponseMessageType::setRetentionPolicyTags()
     * @param \ArrayType\EwsArrayOfRetentionPolicyTagsType $retentionPolicyTags
     */
    public function __construct(?\ArrayType\EwsArrayOfRetentionPolicyTagsType $retentionPolicyTags = null)
    {
        $this
            ->setRetentionPolicyTags($retentionPolicyTags);
    }
    /**
     * Get RetentionPolicyTags value
     * @return \ArrayType\EwsArrayOfRetentionPolicyTagsType|null
     */
    public function getRetentionPolicyTags(): ?\ArrayType\EwsArrayOfRetentionPolicyTagsType
    {
        return $this->RetentionPolicyTags;
    }
    /**
     * Set RetentionPolicyTags value
     * @param \ArrayType\EwsArrayOfRetentionPolicyTagsType $retentionPolicyTags
     * @return \StructType\EwsGetUserRetentionPolicyTagsResponseMessageType
     */
    public function setRetentionPolicyTags(?\ArrayType\EwsArrayOfRetentionPolicyTagsType $retentionPolicyTags = null): self
    {
        $this->RetentionPolicyTags = $retentionPolicyTags;
        
        return $this;
    }
}
