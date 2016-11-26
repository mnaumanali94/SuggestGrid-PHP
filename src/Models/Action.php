<?php 
/*
 * SuggestGrid
 *
 * This file was automatically generated for SuggestGrid by APIMATIC v2.0 ( https://apimatic.io ) on 11/26/2016
 */

namespace SuggestGridLib\Models;

use JsonSerializable;

/**
 * An action object represents a user's action on an item.
All actions belong to a type that gives meaning to actions.

 */
class Action implements JsonSerializable {
    /**
     * The type that the action belongs to.
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * The user id of the performer of the action.
     * @required
     * @maps user_id
     * @var string $userId public property
     */
    public $userId;

    /**
     * The item id of the item the action is performed on.
     * @required
     * @maps item_id
     * @var string $itemId public property
     */
    public $itemId;

    /**
     * The optional rating given by the user, if the type is explicit.
     * @var double $rating public property
     */
    public $rating;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $type      Initialization value for the property $this->type   
     * @param   string            $userId    Initialization value for the property $this->userId 
     * @param   string            $itemId    Initialization value for the property $this->itemId 
     * @param   double            $rating    Initialization value for the property $this->rating 
     */
    public function __construct()
    {
        if(4 == func_num_args())
        {
            $this->type    = func_get_arg(0);
            $this->userId  = func_get_arg(1);
            $this->itemId  = func_get_arg(2);
            $this->rating  = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['type']    = $this->type;
        $json['user_id'] = $this->userId;
        $json['item_id'] = $this->itemId;
        $json['rating']  = $this->rating;

        return $json;
    }
}