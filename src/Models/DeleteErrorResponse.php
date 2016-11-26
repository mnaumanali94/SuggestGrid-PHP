<?php 
/*
 * SuggestGrid
 *
 * This file was automatically generated for SuggestGrid by APIMATIC v2.0 ( https://apimatic.io ) on 11/26/2016
 */

namespace SuggestGridLib\Models;

use JsonSerializable;

/**
 * Error response with found, deleted, and failed parameters.
 */
class DeleteErrorResponse implements JsonSerializable {
    /**
     * Message of the response.
     * @maps error_text
     * @var string $errorText public property
     */
    public $errorText;

    /**
     * Description of the response.
     * @maps error_description
     * @var string $errorDescription public property
     */
    public $errorDescription;

    /**
     * URI of the response for more details.
     * @maps error_uri
     * @var string $errorUri public property
     */
    public $errorUri;

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
     * @param   string            $errorText           Initialization value for the property $this->errorText        
     * @param   string            $errorDescription    Initialization value for the property $this->errorDescription 
     * @param   string            $errorUri            Initialization value for the property $this->errorUri         
     * @param   integer           $found               Initialization value for the property $this->found            
     * @param   integer           $deleted             Initialization value for the property $this->deleted          
     * @param   integer           $failed              Initialization value for the property $this->failed           
     */
    public function __construct()
    {
        if(6 == func_num_args())
        {
            $this->errorText         = func_get_arg(0);
            $this->errorDescription  = func_get_arg(1);
            $this->errorUri          = func_get_arg(2);
            $this->found             = func_get_arg(3);
            $this->deleted           = func_get_arg(4);
            $this->failed            = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['error_text']        = $this->errorText;
        $json['error_description'] = $this->errorDescription;
        $json['error_uri']         = $this->errorUri;
        $json['found']             = $this->found;
        $json['deleted']           = $this->deleted;
        $json['failed']            = $this->failed;

        return $json;
    }
}