<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonEmptyArrayOfChannelSubscriptionsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfChannelSubscriptionsType extends AbstractStructBase
{
    /**
     * The UnifiedGroupUnseenChangedSubscription
     * Meta information extracted from the WSDL
     * - choice: UnifiedGroupUnseenChangedSubscription | UnifiedGroupContentChangedSubscription | UserMembershipChangedSubscription | NewSocialActivityAddedSubscription
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsUnifiedGroupUnseenChangedChannelSubscriptionType|null
     */
    protected ?\StructType\EwsUnifiedGroupUnseenChangedChannelSubscriptionType $UnifiedGroupUnseenChangedSubscription = null;
    /**
     * The UnifiedGroupContentChangedSubscription
     * Meta information extracted from the WSDL
     * - choice: UnifiedGroupUnseenChangedSubscription | UnifiedGroupContentChangedSubscription | UserMembershipChangedSubscription | NewSocialActivityAddedSubscription
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsUnifiedGroupContentChangedChannelSubscriptionType|null
     */
    protected ?\StructType\EwsUnifiedGroupContentChangedChannelSubscriptionType $UnifiedGroupContentChangedSubscription = null;
    /**
     * The UserMembershipChangedSubscription
     * Meta information extracted from the WSDL
     * - choice: UnifiedGroupUnseenChangedSubscription | UnifiedGroupContentChangedSubscription | UserMembershipChangedSubscription | NewSocialActivityAddedSubscription
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsUserMembershipChangedChannelSubscriptionType|null
     */
    protected ?\StructType\EwsUserMembershipChangedChannelSubscriptionType $UserMembershipChangedSubscription = null;
    /**
     * The NewSocialActivityAddedSubscription
     * Meta information extracted from the WSDL
     * - choice: UnifiedGroupUnseenChangedSubscription | UnifiedGroupContentChangedSubscription | UserMembershipChangedSubscription | NewSocialActivityAddedSubscription
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsNewSocialActivityAddedSubscriptionType|null
     */
    protected ?\StructType\EwsNewSocialActivityAddedSubscriptionType $NewSocialActivityAddedSubscription = null;
    /**
     * Constructor method for NonEmptyArrayOfChannelSubscriptionsType
     * @uses EwsNonEmptyArrayOfChannelSubscriptionsType::setUnifiedGroupUnseenChangedSubscription()
     * @uses EwsNonEmptyArrayOfChannelSubscriptionsType::setUnifiedGroupContentChangedSubscription()
     * @uses EwsNonEmptyArrayOfChannelSubscriptionsType::setUserMembershipChangedSubscription()
     * @uses EwsNonEmptyArrayOfChannelSubscriptionsType::setNewSocialActivityAddedSubscription()
     * @param \StructType\EwsUnifiedGroupUnseenChangedChannelSubscriptionType $unifiedGroupUnseenChangedSubscription
     * @param \StructType\EwsUnifiedGroupContentChangedChannelSubscriptionType $unifiedGroupContentChangedSubscription
     * @param \StructType\EwsUserMembershipChangedChannelSubscriptionType $userMembershipChangedSubscription
     * @param \StructType\EwsNewSocialActivityAddedSubscriptionType $newSocialActivityAddedSubscription
     */
    public function __construct(?\StructType\EwsUnifiedGroupUnseenChangedChannelSubscriptionType $unifiedGroupUnseenChangedSubscription = null, ?\StructType\EwsUnifiedGroupContentChangedChannelSubscriptionType $unifiedGroupContentChangedSubscription = null, ?\StructType\EwsUserMembershipChangedChannelSubscriptionType $userMembershipChangedSubscription = null, ?\StructType\EwsNewSocialActivityAddedSubscriptionType $newSocialActivityAddedSubscription = null)
    {
        $this
            ->setUnifiedGroupUnseenChangedSubscription($unifiedGroupUnseenChangedSubscription)
            ->setUnifiedGroupContentChangedSubscription($unifiedGroupContentChangedSubscription)
            ->setUserMembershipChangedSubscription($userMembershipChangedSubscription)
            ->setNewSocialActivityAddedSubscription($newSocialActivityAddedSubscription);
    }
    /**
     * Get UnifiedGroupUnseenChangedSubscription value
     * @return \StructType\EwsUnifiedGroupUnseenChangedChannelSubscriptionType|null
     */
    public function getUnifiedGroupUnseenChangedSubscription(): ?\StructType\EwsUnifiedGroupUnseenChangedChannelSubscriptionType
    {
        return isset($this->UnifiedGroupUnseenChangedSubscription) ? $this->UnifiedGroupUnseenChangedSubscription : null;
    }
    /**
     * This method is responsible for validating the value passed to the setUnifiedGroupUnseenChangedSubscription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnifiedGroupUnseenChangedSubscription method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateUnifiedGroupUnseenChangedSubscriptionForChoiceConstraintsFromSetUnifiedGroupUnseenChangedSubscription($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'UnifiedGroupContentChangedSubscription',
            'UserMembershipChangedSubscription',
            'NewSocialActivityAddedSubscription',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property UnifiedGroupUnseenChangedSubscription can\'t be set as the property %s is already set. Only one property must be set among these properties: UnifiedGroupUnseenChangedSubscription, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set UnifiedGroupUnseenChangedSubscription value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsUnifiedGroupUnseenChangedChannelSubscriptionType $unifiedGroupUnseenChangedSubscription
     * @return \StructType\EwsNonEmptyArrayOfChannelSubscriptionsType
     */
    public function setUnifiedGroupUnseenChangedSubscription(?\StructType\EwsUnifiedGroupUnseenChangedChannelSubscriptionType $unifiedGroupUnseenChangedSubscription = null): self
    {
        // validation for constraint: choice(UnifiedGroupUnseenChangedSubscription, UnifiedGroupContentChangedSubscription, UserMembershipChangedSubscription, NewSocialActivityAddedSubscription)
        if ('' !== ($unifiedGroupUnseenChangedSubscriptionChoiceErrorMessage = self::validateUnifiedGroupUnseenChangedSubscriptionForChoiceConstraintsFromSetUnifiedGroupUnseenChangedSubscription($unifiedGroupUnseenChangedSubscription))) {
            throw new InvalidArgumentException($unifiedGroupUnseenChangedSubscriptionChoiceErrorMessage, __LINE__);
        }
        if (is_null($unifiedGroupUnseenChangedSubscription) || (is_array($unifiedGroupUnseenChangedSubscription) && empty($unifiedGroupUnseenChangedSubscription))) {
            unset($this->UnifiedGroupUnseenChangedSubscription);
        } else {
            $this->UnifiedGroupUnseenChangedSubscription = $unifiedGroupUnseenChangedSubscription;
        }
        
        return $this;
    }
    /**
     * Get UnifiedGroupContentChangedSubscription value
     * @return \StructType\EwsUnifiedGroupContentChangedChannelSubscriptionType|null
     */
    public function getUnifiedGroupContentChangedSubscription(): ?\StructType\EwsUnifiedGroupContentChangedChannelSubscriptionType
    {
        return isset($this->UnifiedGroupContentChangedSubscription) ? $this->UnifiedGroupContentChangedSubscription : null;
    }
    /**
     * This method is responsible for validating the value passed to the setUnifiedGroupContentChangedSubscription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnifiedGroupContentChangedSubscription method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateUnifiedGroupContentChangedSubscriptionForChoiceConstraintsFromSetUnifiedGroupContentChangedSubscription($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'UnifiedGroupUnseenChangedSubscription',
            'UserMembershipChangedSubscription',
            'NewSocialActivityAddedSubscription',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property UnifiedGroupContentChangedSubscription can\'t be set as the property %s is already set. Only one property must be set among these properties: UnifiedGroupContentChangedSubscription, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set UnifiedGroupContentChangedSubscription value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsUnifiedGroupContentChangedChannelSubscriptionType $unifiedGroupContentChangedSubscription
     * @return \StructType\EwsNonEmptyArrayOfChannelSubscriptionsType
     */
    public function setUnifiedGroupContentChangedSubscription(?\StructType\EwsUnifiedGroupContentChangedChannelSubscriptionType $unifiedGroupContentChangedSubscription = null): self
    {
        // validation for constraint: choice(UnifiedGroupUnseenChangedSubscription, UnifiedGroupContentChangedSubscription, UserMembershipChangedSubscription, NewSocialActivityAddedSubscription)
        if ('' !== ($unifiedGroupContentChangedSubscriptionChoiceErrorMessage = self::validateUnifiedGroupContentChangedSubscriptionForChoiceConstraintsFromSetUnifiedGroupContentChangedSubscription($unifiedGroupContentChangedSubscription))) {
            throw new InvalidArgumentException($unifiedGroupContentChangedSubscriptionChoiceErrorMessage, __LINE__);
        }
        if (is_null($unifiedGroupContentChangedSubscription) || (is_array($unifiedGroupContentChangedSubscription) && empty($unifiedGroupContentChangedSubscription))) {
            unset($this->UnifiedGroupContentChangedSubscription);
        } else {
            $this->UnifiedGroupContentChangedSubscription = $unifiedGroupContentChangedSubscription;
        }
        
        return $this;
    }
    /**
     * Get UserMembershipChangedSubscription value
     * @return \StructType\EwsUserMembershipChangedChannelSubscriptionType|null
     */
    public function getUserMembershipChangedSubscription(): ?\StructType\EwsUserMembershipChangedChannelSubscriptionType
    {
        return isset($this->UserMembershipChangedSubscription) ? $this->UserMembershipChangedSubscription : null;
    }
    /**
     * This method is responsible for validating the value passed to the setUserMembershipChangedSubscription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUserMembershipChangedSubscription method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateUserMembershipChangedSubscriptionForChoiceConstraintsFromSetUserMembershipChangedSubscription($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'UnifiedGroupUnseenChangedSubscription',
            'UnifiedGroupContentChangedSubscription',
            'NewSocialActivityAddedSubscription',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property UserMembershipChangedSubscription can\'t be set as the property %s is already set. Only one property must be set among these properties: UserMembershipChangedSubscription, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set UserMembershipChangedSubscription value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsUserMembershipChangedChannelSubscriptionType $userMembershipChangedSubscription
     * @return \StructType\EwsNonEmptyArrayOfChannelSubscriptionsType
     */
    public function setUserMembershipChangedSubscription(?\StructType\EwsUserMembershipChangedChannelSubscriptionType $userMembershipChangedSubscription = null): self
    {
        // validation for constraint: choice(UnifiedGroupUnseenChangedSubscription, UnifiedGroupContentChangedSubscription, UserMembershipChangedSubscription, NewSocialActivityAddedSubscription)
        if ('' !== ($userMembershipChangedSubscriptionChoiceErrorMessage = self::validateUserMembershipChangedSubscriptionForChoiceConstraintsFromSetUserMembershipChangedSubscription($userMembershipChangedSubscription))) {
            throw new InvalidArgumentException($userMembershipChangedSubscriptionChoiceErrorMessage, __LINE__);
        }
        if (is_null($userMembershipChangedSubscription) || (is_array($userMembershipChangedSubscription) && empty($userMembershipChangedSubscription))) {
            unset($this->UserMembershipChangedSubscription);
        } else {
            $this->UserMembershipChangedSubscription = $userMembershipChangedSubscription;
        }
        
        return $this;
    }
    /**
     * Get NewSocialActivityAddedSubscription value
     * @return \StructType\EwsNewSocialActivityAddedSubscriptionType|null
     */
    public function getNewSocialActivityAddedSubscription(): ?\StructType\EwsNewSocialActivityAddedSubscriptionType
    {
        return isset($this->NewSocialActivityAddedSubscription) ? $this->NewSocialActivityAddedSubscription : null;
    }
    /**
     * This method is responsible for validating the value passed to the setNewSocialActivityAddedSubscription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNewSocialActivityAddedSubscription method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateNewSocialActivityAddedSubscriptionForChoiceConstraintsFromSetNewSocialActivityAddedSubscription($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'UnifiedGroupUnseenChangedSubscription',
            'UnifiedGroupContentChangedSubscription',
            'UserMembershipChangedSubscription',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property NewSocialActivityAddedSubscription can\'t be set as the property %s is already set. Only one property must be set among these properties: NewSocialActivityAddedSubscription, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set NewSocialActivityAddedSubscription value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsNewSocialActivityAddedSubscriptionType $newSocialActivityAddedSubscription
     * @return \StructType\EwsNonEmptyArrayOfChannelSubscriptionsType
     */
    public function setNewSocialActivityAddedSubscription(?\StructType\EwsNewSocialActivityAddedSubscriptionType $newSocialActivityAddedSubscription = null): self
    {
        // validation for constraint: choice(UnifiedGroupUnseenChangedSubscription, UnifiedGroupContentChangedSubscription, UserMembershipChangedSubscription, NewSocialActivityAddedSubscription)
        if ('' !== ($newSocialActivityAddedSubscriptionChoiceErrorMessage = self::validateNewSocialActivityAddedSubscriptionForChoiceConstraintsFromSetNewSocialActivityAddedSubscription($newSocialActivityAddedSubscription))) {
            throw new InvalidArgumentException($newSocialActivityAddedSubscriptionChoiceErrorMessage, __LINE__);
        }
        if (is_null($newSocialActivityAddedSubscription) || (is_array($newSocialActivityAddedSubscription) && empty($newSocialActivityAddedSubscription))) {
            unset($this->NewSocialActivityAddedSubscription);
        } else {
            $this->NewSocialActivityAddedSubscription = $newSocialActivityAddedSubscription;
        }
        
        return $this;
    }
}
