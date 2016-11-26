<?php 
/*
 * SuggestGrid
 *
 * This file was automatically generated for SuggestGrid by APIMATIC v2.0 ( https://apimatic.io ) on 11/26/2016
 */

namespace SuggestGridLib\Models;

use JsonSerializable;

/**
 * Metadata iformation response.
 */
class MetadataInformationResponse implements JsonSerializable {
    /**
     * The number of users or items with metadata.
     * @var integer $count public property
     */
    public $count;

    /**
     * Constructor to set initial or default values of member properties
     * @param   integer           $count   Initialization value for the property $this->count
     */
    public function __construct()
    {
        if(1 == func_num_args())
        {
            $this->count = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['count'] = $this->count;

        return $json;
    }
}