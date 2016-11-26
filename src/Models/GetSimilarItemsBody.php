<?php 
/*
 * SuggestGrid
 *
 * This file was automatically generated for SuggestGrid by APIMATIC v2.0 ( https://apimatic.io ) on 11/26/2016
 */

namespace SuggestGridLib\Models;

use JsonSerializable;

/**
 * The query for similar items.
 */
class GetSimilarItemsBody implements JsonSerializable {
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
     * The item id of the query. Get similar items to given item id. Either item id or item ids must be provided.
     * @maps item_id
     * @var string $itemId public property
     */
    public $itemId;

    /**
     * The item ids of the query. Exactly one of item id or item ids parameters must be provided. Get similar items to given item ids. Either item id or item ids must be provided.
     * @maps item_ids
     * @var array $itemIds public property
     */
    public $itemIds;

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
     * @param   string            $itemId     Initialization value for the property $this->itemId  
     * @param   array             $itemIds    Initialization value for the property $this->itemIds 
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
            $this->itemId   = func_get_arg(2);
            $this->itemIds  = func_get_arg(3);
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
        $json['item_id']  = $this->itemId;
        $json['item_ids'] = $this->itemIds;
        $json['size']     = $this->size;
        $json['fields']   = $this->fields;
        $json['filter']   = $this->filter;
        $json['except']   = $this->except;

        return $json;
    }
}