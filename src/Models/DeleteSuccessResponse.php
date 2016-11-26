<?php 
/*
 * SuggestGrid
 *
 * This file was automatically generated for SuggestGrid by APIMATIC v2.0 ( https://apimatic.io ) on 11/26/2016
 */

namespace SuggestGridLib\Models;

use JsonSerializable;

/**
 * Successful delete response with found, deleted, and failed parameters.
 */
class DeleteSuccessResponse implements JsonSerializable {
    /**
     * Message of the response.
     * @var string $message public property
     */
    public $message;

    /**
     * The number of records found for the delete query.
     * @var integer $found public property
     */
    public $found;

    /**
     * The number of records deleted for the delete query.
     * @var integer $deleted public property
     */
    public $deleted;

    /**
     * The number of records found but not deleted for the delete query.
     * @var integer $failed public property
     */
    public $failed;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $message   Initialization value for the property $this->message
     * @param   integer           $found     Initialization value for the property $this->found  
     * @param   integer           $deleted   Initialization value for the property $this->deleted
     * @param   integer           $failed    Initialization value for the property $this->failed 
     */
    public function __construct()
    {
        if(4 == func_num_args())
        {
            $this->message = func_get_arg(0);
            $this->found   = func_get_arg(1);
            $this->deleted = func_get_arg(2);
            $this->failed  = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['message'] = $this->message;
        $json['found']   = $this->found;
        $json['deleted'] = $this->deleted;
        $json['failed']  = $this->failed;

        return $json;
    }
}