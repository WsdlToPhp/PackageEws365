<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsBodyContentType
     */
    public $MessageBody;
    /**
     * Constructor method for JoinPrivateUnifiedGroupType
     * @uses EwsJoinPrivateUnifiedGroupType::setMessageBody()
     * @param \Ews\StructType\EwsBodyContentType $messageBody
     */
    public function __construct(\Ews\StructType\EwsBodyContentType $messageBody = null)
    {
        $this
            ->setMessageBody($messageBody);
    }
    /**
     * Get MessageBody value
     * @return \Ews\StructType\EwsBodyContentType|null
     */
    public function getMessageBody()
    {
        return $this->MessageBody;
    }
    /**
     * Set MessageBody value
     * @param \Ews\StructType\EwsBodyContentType $messageBody
     * @return \Ews\StructType\EwsJoinPrivateUnifiedGroupType
     */
    public function setMessageBody(\Ews\StructType\EwsBodyContentType $messageBody = null)
    {
        $this->MessageBody = $messageBody;
        return $this;
    }
}
