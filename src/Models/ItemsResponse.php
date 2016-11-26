<?php 
/*
 * SuggestGrid
 *
 * This file was automatically generated for SuggestGrid by APIMATIC v2.0 ( https://apimatic.io ) on 11/26/2016
 */

namespace SuggestGridLib\Models;

use JsonSerializable;

/**
 * Items response.
 */
class ItemsResponse implements JsonSerializable {
    /**
     * The number of items in the response.
     * @var integer $count public property
     */
    public $count;

    /**
     * @todo Write general description for this property
     * @var Metadata[] $items public property
     */
    public $items;

    /**
     * Constructor to set initial or default values of member properties
     * @param   integer           $count   Initialization value for the property $this->count
     * @param   array             $items   Initialization value for the property $this->items
     */
    public function __construct()
    {
        if(2 == func_num_args())
        {
            $this->count = func_get_arg(0);
            $this->items = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['count'] = $this->count;
        $json['items'] = $this->items;

        return $json;
    }
}