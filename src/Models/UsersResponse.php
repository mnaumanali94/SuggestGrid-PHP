<?php 
/*
 * SuggestGrid
 *
 * This file was automatically generated for SuggestGrid by APIMATIC v2.0 ( https://apimatic.io ) on 11/26/2016
 */

namespace SuggestGridLib\Models;

use JsonSerializable;

/**
 * Users response.
 */
class UsersResponse implements JsonSerializable {
    /**
     * The number of users in the response.
     * @var integer $count public property
     */
    public $count;

    /**
     * @todo Write general description for this property
     * @var Metadata[] $users public property
     */
    public $users;

    /**
     * Constructor to set initial or default values of member properties
     * @param   integer           $count   Initialization value for the property $this->count
     * @param   array             $users   Initialization value for the property $this->users
     */
    public function __construct()
    {
        if(2 == func_num_args())
        {
            $this->count = func_get_arg(0);
            $this->users = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['count'] = $this->count;
        $json['users'] = $this->users;

        return $json;
    }
}