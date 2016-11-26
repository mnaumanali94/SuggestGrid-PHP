<?php 
/*
 * SuggestGrid
 *
 * This file was automatically generated for SuggestGrid by APIMATIC v2.0 ( https://apimatic.io ) on 11/26/2016
 */

namespace SuggestGridLib\Models;

use JsonSerializable;

/**
 * The query for similar users.
 */
class GetSimilarUsersBody implements JsonSerializable {
    /**
     * The type of the query.
     * @var string $type public property
     */
    public $type;

    /**
     * The types of the query. Exactly one of type or types parameters must be provided.
     * @var string $types public property
     */
    public $types;

    /**
     * The user id of the query.
     * @maps user_id
     * @var string $userId public property
     */
    public $userId;

    /**
     * The user ids of the query. Exactly one of user id or user ids parameters must be provided.
     * @maps user_ids
     * @var array $userIds public property
     */
    public $userIds;

    /**
     * The number of users asked to return in the response.
     * @var integer $size public property
     */
    public $size;

    /**
     * The metadata fields that are to be included in returned users.
     * @var array $fields public property
     */
    public $fields;

    /**
     * Contraints on the returned users or items. 
     * Filter structure is defined in [the filter parameter documentation](http://www.suggestgrid.com/docs/concepts#filters-parameter).
     * @var object $filter public property
     */
    public $filter;

    /**
     * These user ids that will not be included in the response.
     * @var array $except public property
     */
    public $except;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $type       Initialization value for the property $this->type    
     * @param   string            $types      Initialization value for the property $this->types   
     * @param   string            $userId     Initialization value for the property $this->userId  
     * @param   array             $userIds    Initialization value for the property $this->userIds 
     * @param   integer           $size       Initialization value for the property $this->size    
     * @param   array             $fields     Initialization value for the property $this->fields  
     * @param   object            $filter     Initialization value for the property $this->filter  
     * @param   array             $except     Initialization value for the property $this->except  
     */
    public function __construct()
    {
        if(8 == func_num_args())
        {
            $this->type     = func_get_arg(0);
            $this->types    = func_get_arg(1);
            $this->userId   = func_get_arg(2);
            $this->userIds  = func_get_arg(3);
            $this->size     = func_get_arg(4);
            $this->fields   = func_get_arg(5);
            $this->filter   = func_get_arg(6);
            $this->except   = func_get_arg(7);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['type']     = $this->type;
        $json['types']    = $this->types;
        $json['user_id']  = $this->userId;
        $json['user_ids'] = $this->userIds;
        $json['size']     = $this->size;
        $json['fields']   = $this->fields;
        $json['filter']   = $this->filter;
        $json['except']   = $this->except;

        return $json;
    }
}