<?php 
/*
 * SuggestGrid
 *
 * This file was automatically generated for SuggestGrid by APIMATIC v2.0 ( https://apimatic.io ) on 11/26/2016
 */

namespace SuggestGridLib\Models;

use JsonSerializable;

/**
 * A basic response.
 */
class MessageResponse implements JsonSerializable {
    /**
     * Message of the response.
     * @var string $message public property
     */
    public $message;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $message   Initialization value for the property $this->message
     */
    public function __construct()
    {
        if(1 == func_num_args())
        {
            $this->message = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['message'] = $this->message;

        return $json;
    }
}