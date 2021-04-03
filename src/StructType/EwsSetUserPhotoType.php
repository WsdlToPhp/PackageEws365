<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetUserPhotoType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetUserPhotoType extends EwsBaseRequestType
{
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Email;
    /**
     * The Content
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Content;
    /**
     * Constructor method for SetUserPhotoType
     * @uses EwsSetUserPhotoType::setEmail()
     * @uses EwsSetUserPhotoType::setContent()
     * @param string $email
     * @param string $content
     */
    public function __construct(string $email, string $content)
    {
        $this
            ->setEmail($email)
            ->setContent($content);
    }
    /**
     * Get Email value
     * @return string
     */
    public function getEmail(): string
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \StructType\EwsSetUserPhotoType
     */
    public function setEmail(string $email): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($email) && mb_strlen((string) $email) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $email)), __LINE__);
        }
        $this->Email = $email;
        
        return $this;
    }
    /**
     * Get Content value
     * @return string
     */
    public function getContent(): string
    {
        return $this->Content;
    }
    /**
     * Set Content value
     * @param string $content
     * @return \StructType\EwsSetUserPhotoType
     */
    public function setContent(string $content): self
    {
        // validation for constraint: string
        if (!is_null($content) && !is_string($content)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content, true), gettype($content)), __LINE__);
        }
        $this->Content = $content;
        
        return $this;
    }
}
