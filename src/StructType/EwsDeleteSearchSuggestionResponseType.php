<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSearchSuggestionResponseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDeleteSearchSuggestionResponseType extends AbstractStructBase
{
    /**
     * The Success
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $Success;
    /**
     * The StatusMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StatusMessage = null;
    /**
     * The DiagnosticsData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsSearchDiagnosticsType|null
     */
    protected ?\StructType\EwsSearchDiagnosticsType $DiagnosticsData = null;
    /**
     * Constructor method for DeleteSearchSuggestionResponseType
     * @uses EwsDeleteSearchSuggestionResponseType::setSuccess()
     * @uses EwsDeleteSearchSuggestionResponseType::setStatusMessage()
     * @uses EwsDeleteSearchSuggestionResponseType::setDiagnosticsData()
     * @param bool $success
     * @param string $statusMessage
     * @param \StructType\EwsSearchDiagnosticsType $diagnosticsData
     */
    public function __construct(bool $success, ?string $statusMessage = null, ?\StructType\EwsSearchDiagnosticsType $diagnosticsData = null)
    {
        $this
            ->setSuccess($success)
            ->setStatusMessage($statusMessage)
            ->setDiagnosticsData($diagnosticsData);
    }
    /**
     * Get Success value
     * @return bool
     */
    public function getSuccess(): bool
    {
        return $this->Success;
    }
    /**
     * Set Success value
     * @param bool $success
     * @return \StructType\EwsDeleteSearchSuggestionResponseType
     */
    public function setSuccess(bool $success): self
    {
        // validation for constraint: boolean
        if (!is_null($success) && !is_bool($success)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($success, true), gettype($success)), __LINE__);
        }
        $this->Success = $success;
        
        return $this;
    }
    /**
     * Get StatusMessage value
     * @return string|null
     */
    public function getStatusMessage(): ?string
    {
        return $this->StatusMessage;
    }
    /**
     * Set StatusMessage value
     * @param string $statusMessage
     * @return \StructType\EwsDeleteSearchSuggestionResponseType
     */
    public function setStatusMessage(?string $statusMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($statusMessage) && !is_string($statusMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statusMessage, true), gettype($statusMessage)), __LINE__);
        }
        $this->StatusMessage = $statusMessage;
        
        return $this;
    }
    /**
     * Get DiagnosticsData value
     * @return \StructType\EwsSearchDiagnosticsType|null
     */
    public function getDiagnosticsData(): ?\StructType\EwsSearchDiagnosticsType
    {
        return $this->DiagnosticsData;
    }
    /**
     * Set DiagnosticsData value
     * @param \StructType\EwsSearchDiagnosticsType $diagnosticsData
     * @return \StructType\EwsDeleteSearchSuggestionResponseType
     */
    public function setDiagnosticsData(?\StructType\EwsSearchDiagnosticsType $diagnosticsData = null): self
    {
        $this->DiagnosticsData = $diagnosticsData;
        
        return $this;
    }
}
