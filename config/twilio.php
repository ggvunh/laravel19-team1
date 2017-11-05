<?php

return [

    'twilio' => [

        'default' => 'twilio',

        'connections' => [

            'twilio' => [

                /*
                |--------------------------------------------------------------------------
                | SID
                |--------------------------------------------------------------------------
                |
                | Your Twilio Account SID #
                |
                */

                'sid' => getenv('TWILIO_SID') ?: 'AC4b3bf9d74d7d78c6d9ec87694e62ba34',

                /*
                |--------------------------------------------------------------------------
                | Access Token
                |--------------------------------------------------------------------------
                |
                | Access token that can be found in your Twilio dashboard
                |
                */

                'token' => getenv('TWILIO_TOKEN') ?: 'cf3b104c84ba1c207b0b9b19c4a822ef',

                /*
                |--------------------------------------------------------------------------
                | From Number
                |--------------------------------------------------------------------------
                |
                | The Phone number registered with Twilio that your SMS & Calls will come from
                |
                */

                'from' => getenv('TWILIO_FROM') ?: '+14797778264 ',

                /*
                |--------------------------------------------------------------------------
                | Verify Twilio's SSL Certificates
                |--------------------------------------------------------------------------
                |
                | Allows the client to bypass verifying Twilio's SSL certificates.
                | It is STRONGLY advised to leave this set to true for production environments.
                |
                */

                'ssl_verify' => true,
            ],
        ],
    ],
];
