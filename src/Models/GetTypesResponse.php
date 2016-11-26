<?php 
/*
 * SuggestGrid
 *
 * This file was automatically generated for SuggestGrid by APIMATIC v2.0 ( https://apimatic.io ) on 11/26/2016
 */

namespace SuggestGridLib\Models;

use JsonSerializable;

/**
 * Type names response.
 */
class GetTypesResponse implements JsonSerializable {
    /**
     * The list of type names
     * @var array $types public property
     */
    public $types;

    /**
     * Status code of the response. It is not 2XX.
     * @var integer $status public property
     */
    public $status;

    /**
     * Constructor to set initial or default values of member properties
     * @param   array             $types    Initialization value for the property $this->types 
     * @param   integer           $status   Initialization value for the property $this->status
     */
    public function __construct()
    {
        if(2 == func_num_args())
        {
            $this->types  = func_get_arg(0);
            $this->status = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['types']  = $this->types;
        $json['status'] = $this->status;

        return $json;
    }
}