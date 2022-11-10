<?php

namespace ApolloClient;

use Exception;

class ApploClientException extends Exception
{
    public $messageData;

    function __construct($msg = '', int $code = null, array $messageData = [])
    {
        $code = $code ?: config('error.default');

        $this->messageData = [
            'requestType'   => data_get($messageData, 'requestType'),
            'requestData'   => data_get($messageData, 'requestData'),
            'responseData'  => data_get($messageData, 'responseData'),
        ];

        parent::__construct($msg, $code, null);
    }
}
