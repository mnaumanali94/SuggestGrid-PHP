<?php 
/*
 * SuggestGrid
 *
 * This file was automatically generated for SuggestGrid by APIMATIC v2.0 ( https://apimatic.io ) on 11/26/2016
 */

namespace SuggestGridLib\Models;

use JsonSerializable;

/**
 * A metadata for a user or an item.
 */
class Metadata implements JsonSerializable {
    /**
     * The id of the user or the item that the metadata is associated with.
     * Id parameter is necessary for all metadata.
     * @required
     * @var string $id public property
     */
    public $id;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $id   Initialization value for the property $this->id
     */
    public function __construct()
    {
        if(1 == func_num_args())
        {
            $this->id = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id'] = $this->id;

        return $json;
    }
}