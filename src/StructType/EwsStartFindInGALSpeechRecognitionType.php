<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StartFindInGALSpeechRecognitionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsStartFindInGALSpeechRecognitionType extends EwsBaseRequestType
{
    /**
     * The Culture
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Culture;
    /**
     * The TimeZone
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $TimeZone;
    /**
     * The UserObjectGuid
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    protected string $UserObjectGuid;
    /**
     * The TenantGuid
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    protected string $TenantGuid;
    /**
     * Constructor method for StartFindInGALSpeechRecognitionType
     * @uses EwsStartFindInGALSpeechRecognitionType::setCulture()
     * @uses EwsStartFindInGALSpeechRecognitionType::setTimeZone()
     * @uses EwsStartFindInGALSpeechRecognitionType::setUserObjectGuid()
     * @uses EwsStartFindInGALSpeechRecognitionType::setTenantGuid()
     * @param string $culture
     * @param string $timeZone
     * @param string $userObjectGuid
     * @param string $tenantGuid
     */
    public function __construct(string $culture, string $timeZone, string $userObjectGuid, string $tenantGuid)
    {
        $this
            ->setCulture($culture)
            ->setTimeZone($timeZone)
            ->setUserObjectGuid($userObjectGuid)
            ->setTenantGuid($tenantGuid);
    }
    /**
     * Get Culture value
     * @return string
     */
    public function getCulture(): string
    {
        return $this->Culture;
    }
    /**
     * Set Culture value
     * @param string $culture
     * @return \StructType\EwsStartFindInGALSpeechRecognitionType
     */
    public function setCulture(string $culture): self
    {
        // validation for constraint: string
        if (!is_null($culture) && !is_string($culture)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($culture, true), gettype($culture)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($culture) && mb_strlen((string) $culture) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $culture)), __LINE__);
        }
        $this->Culture = $culture;
        
        return $this;
    }
    /**
     * Get TimeZone value
     * @return string
     */
    public function getTimeZone(): string
    {
        return $this->TimeZone;
    }
    /**
     * Set TimeZone value
     * @param string $timeZone
     * @return \StructType\EwsStartFindInGALSpeechRecognitionType
     */
    public function setTimeZone(string $timeZone): self
    {
        // validation for constraint: string
        if (!is_null($timeZone) && !is_string($timeZone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeZone, true), gettype($timeZone)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($timeZone) && mb_strlen((string) $timeZone) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $timeZone)), __LINE__);
        }
        $this->TimeZone = $timeZone;
        
        return $this;
    }
    /**
     * Get UserObjectGuid value
     * @return string
     */
    public function getUserObjectGuid(): string
    {
        return $this->UserObjectGuid;
    }
    /**
     * Set UserObjectGuid value
     * @param string $userObjectGuid
     * @return \StructType\EwsStartFindInGALSpeechRecognitionType
     */
    public function setUserObjectGuid(string $userObjectGuid): self
    {
        // validation for constraint: string
        if (!is_null($userObjectGuid) && !is_string($userObjectGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userObjectGuid, true), gettype($userObjectGuid)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($userObjectGuid) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $userObjectGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($userObjectGuid, true)), __LINE__);
        }
        $this->UserObjectGuid = $userObjectGuid;
        
        return $this;
    }
    /**
     * Get TenantGuid value
     * @return string
     */
    public function getTenantGuid(): string
    {
        return $this->TenantGuid;
    }
    /**
     * Set TenantGuid value
     * @param string $tenantGuid
     * @return \StructType\EwsStartFindInGALSpeechRecognitionType
     */
    public function setTenantGuid(string $tenantGuid): self
    {
        // validation for constraint: string
        if (!is_null($tenantGuid) && !is_string($tenantGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tenantGuid, true), gettype($tenantGuid)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($tenantGuid) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $tenantGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($tenantGuid, true)), __LINE__);
        }
        $this->TenantGuid = $tenantGuid;
        
        return $this;
    }
}
