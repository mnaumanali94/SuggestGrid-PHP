<?php 
/*
 * SuggestGrid
 *
 * This file was automatically generated for SuggestGrid by APIMATIC v2.0 ( https://apimatic.io ) on 11/26/2016
 */

namespace SuggestGridLib\Models;

use JsonSerializable;

/**
 * Error response returned due to Schema validations.
 */
class SchemaErrorResponse implements JsonSerializable {
    /**
     * Message of the response.
     * @var string $message public property
     */
    public $message;

    /**
     * The cause of the error.
     * @var object $value public property
     */
    public $value;

    /**
     * Programatic description of the error.
     * @var object $error public property
     */
    public $error;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $message   Initialization value for the property $this->message
     * @param   object            $value     Initialization value for the property $this->value  
     * @param   object            $error     Initialization value for the property $this->error  
     */
    public function __construct()
    {
        if(3 == func_num_args())
        {
            $this->message = func_get_arg(0);
            $this->value   = func_get_arg(1);
            $this->error   = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['message'] = $this->message;
        $json['value']   = $this->value;
        $json['error']   = $this->error;

        return $json;
    }
}