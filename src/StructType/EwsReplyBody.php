<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReplyBody StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsReplyBody extends AbstractStructBase
{
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Message = null;
    /**
     * The lang
     * Meta information extracted from the WSDL
     * - ref: xml:lang
     * - use: optional
     * @var string|null
     */
    protected ?string $lang = null;
    /**
     * Constructor method for ReplyBody
     * @uses EwsReplyBody::setMessage()
     * @uses EwsReplyBody::setLang()
     * @param string $message
     * @param string $lang
     */
    public function __construct(?string $message = null, ?string $lang = null)
    {
        $this
            ->setMessage($message)
            ->setLang($lang);
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \StructType\EwsReplyBody
     */
    public function setMessage(?string $message = null): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->Message = $message;
        
        return $this;
    }
    /**
     * Get lang value
     * @return string|null
     */
    public function getLang(): ?string
    {
        return $this->lang;
    }
    /**
     * Set lang value
     * @param string $lang
     * @return \StructType\EwsReplyBody
     */
    public function setLang(?string $lang = null): self
    {
        // validation for constraint: string
        if (!is_null($lang) && !is_string($lang)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lang, true), gettype($lang)), __LINE__);
        }
        $this->lang = $lang;
        
        return $this;
    }
}
