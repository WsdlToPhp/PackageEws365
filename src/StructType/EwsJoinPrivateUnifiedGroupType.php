<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JoinPrivateUnifiedGroupType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsJoinPrivateUnifiedGroupType extends EwsUnifiedGroupBaseRequestType
{
    /**
     * The MessageBody
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsBodyContentType|null
     */
    protected ?\StructType\EwsBodyContentType $MessageBody = null;
    /**
     * Constructor method for JoinPrivateUnifiedGroupType
     * @uses EwsJoinPrivateUnifiedGroupType::setMessageBody()
     * @param \StructType\EwsBodyContentType $messageBody
     */
    public function __construct(?\StructType\EwsBodyContentType $messageBody = null)
    {
        $this
            ->setMessageBody($messageBody);
    }
    /**
     * Get MessageBody value
     * @return \StructType\EwsBodyContentType|null
     */
    public function getMessageBody(): ?\StructType\EwsBodyContentType
    {
        return $this->MessageBody;
    }
    /**
     * Set MessageBody value
     * @param \StructType\EwsBodyContentType $messageBody
     * @return \StructType\EwsJoinPrivateUnifiedGroupType
     */
    public function setMessageBody(?\StructType\EwsBodyContentType $messageBody = null): self
    {
        $this->MessageBody = $messageBody;
        
        return $this;
    }
}
