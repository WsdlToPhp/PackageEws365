<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ActivateSharingInvitationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsActivateSharingInvitationType extends EwsBaseSharingInvitationRequestType
{
    /**
     * The EmailAddressInInvitation
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * - use: required
     * @var string
     */
    public $EmailAddressInInvitation;
    /**
     * Constructor method for ActivateSharingInvitationType
     * @uses EwsActivateSharingInvitationType::setEmailAddressInInvitation()
     * @param string $emailAddressInInvitation
     */
    public function __construct($emailAddressInInvitation = null)
    {
        $this
            ->setEmailAddressInInvitation($emailAddressInInvitation);
    }
    /**
     * Get EmailAddressInInvitation value
     * @return string
     */
    public function getEmailAddressInInvitation()
    {
        return $this->EmailAddressInInvitation;
    }
    /**
     * Set EmailAddressInInvitation value
     * @param string $emailAddressInInvitation
     * @return \Ews\StructType\EwsActivateSharingInvitationType
     */
    public function setEmailAddressInInvitation($emailAddressInInvitation = null)
    {
        // validation for constraint: string
        if (!is_null($emailAddressInInvitation) && !is_string($emailAddressInInvitation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailAddressInInvitation, true), gettype($emailAddressInInvitation)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($emailAddressInInvitation) && mb_strlen($emailAddressInInvitation) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($emailAddressInInvitation)), __LINE__);
        }
        $this->EmailAddressInInvitation = $emailAddressInInvitation;
        return $this;
    }
}
