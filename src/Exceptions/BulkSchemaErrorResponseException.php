<?php
/*
 * SuggestGrid
 *
 * This file was automatically generated for SuggestGrid by APIMATIC v2.0 ( https://apimatic.io ) on 11/26/2016
 */

namespace SuggestGridLib\Exceptions;

use SuggestGridLib\APIException;
use SuggestGridLib\APIHelper;
/**
 * Bulk error response.
Returned on bulk post requests with failures.

 */
class BulkSchemaErrorResponseException extends APIException{
    /**
     * Message of the response.
     * @var string $message public property
     */
    public $message;

    /**
     * @todo Write general description for this property
     * @var SchemaErrorResponse[] $errors public property
     */
    public $errors;


    /**
    * Constructor to set initial or default values of member properties 
    */
    public function __construct($reason,$context)
    {
        parent::__construct($reason,$context);
    }

    public function unbox()
    {
        $data = APIHelper::deserialize(self::getResponseBody());
        $message = $data['message'];
        $errors = $data['errors'];
    }
}