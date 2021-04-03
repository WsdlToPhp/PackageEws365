<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSharingInvitation ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfSharingInvitation extends AbstractStructArrayBase
{
    /**
     * The SharingInvitation
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\EwsSharingInvitation[]
     */
    protected array $SharingInvitation = [];
    /**
     * Constructor method for ArrayOfSharingInvitation
     * @uses EwsArrayOfSharingInvitation::setSharingInvitation()
     * @param \StructType\EwsSharingInvitation[] $sharingInvitation
     */
    public function __construct(array $sharingInvitation = [])
    {
        $this
            ->setSharingInvitation($sharingInvitation);
    }
    /**
     * Get SharingInvitation value
     * @return \StructType\EwsSharingInvitation[]
     */
    public function getSharingInvitation(): array
    {
        return $this->SharingInvitation;
    }
    /**
     * This method is responsible for validating the values passed to the setSharingInvitation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSharingInvitation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSharingInvitationForArrayConstraintsFromSetSharingInvitation(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSharingInvitationSharingInvitationItem) {
            // validation for constraint: itemType
            if (!$arrayOfSharingInvitationSharingInvitationItem instanceof \StructType\EwsSharingInvitation) {
                $invalidValues[] = is_object($arrayOfSharingInvitationSharingInvitationItem) ? get_class($arrayOfSharingInvitationSharingInvitationItem) : sprintf('%s(%s)', gettype($arrayOfSharingInvitationSharingInvitationItem), var_export($arrayOfSharingInvitationSharingInvitationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SharingInvitation property can only contain items of type \StructType\EwsSharingInvitation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SharingInvitation value
     * @throws InvalidArgumentException
     * @param \StructType\EwsSharingInvitation[] $sharingInvitation
     * @return \ArrayType\EwsArrayOfSharingInvitation
     */
    public function setSharingInvitation(array $sharingInvitation = []): self
    {
        // validation for constraint: array
        if ('' !== ($sharingInvitationArrayErrorMessage = self::validateSharingInvitationForArrayConstraintsFromSetSharingInvitation($sharingInvitation))) {
            throw new InvalidArgumentException($sharingInvitationArrayErrorMessage, __LINE__);
        }
        $this->SharingInvitation = $sharingInvitation;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsSharingInvitation|null
     */
    public function current(): ?\StructType\EwsSharingInvitation
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsSharingInvitation|null
     */
    public function item($index): ?\StructType\EwsSharingInvitation
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsSharingInvitation|null
     */
    public function first(): ?\StructType\EwsSharingInvitation
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsSharingInvitation|null
     */
    public function last(): ?\StructType\EwsSharingInvitation
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsSharingInvitation|null
     */
    public function offsetGet($offset): ?\StructType\EwsSharingInvitation
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsSharingInvitation $item
     * @return \ArrayType\EwsArrayOfSharingInvitation
     */
    public function add(\StructType\EwsSharingInvitation $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SharingInvitation
     */
    public function getAttributeName(): string
    {
        return 'SharingInvitation';
    }
}
