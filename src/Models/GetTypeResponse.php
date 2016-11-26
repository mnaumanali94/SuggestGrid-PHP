<?php 
/*
 * SuggestGrid
 *
 * This file was automatically generated for SuggestGrid by APIMATIC v2.0 ( https://apimatic.io ) on 11/26/2016
 */

namespace SuggestGridLib\Models;

use JsonSerializable;

/**
 * Get type details response.
 */
class GetTypeResponse implements JsonSerializable {
    /**
     * Rating type of the type that is either implicit or explicit.
     * @var string $rating public property
     */
    public $rating;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $rating   Initialization value for the property $this->rating
     */
    public function __construct()
    {
        if(1 == func_num_args())
        {
            $this->rating = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['rating'] = $this->rating;

        return $json;
    }
}