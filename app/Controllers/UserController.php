<?php

namespace App\Controllers;

use App\Libraries\OAuth2;
use CodeIgniter\API\ResponseTrait;
use App\Controllers\BaseController;
use \OAuth2\Request;

class UserController extends BaseController
{
    use ResponseTrait;

    public function loginUser()
    {
        $oauth = new OAuth2();
        $request = new Request();
        $respond = $oauth->server->handleTokenRequest($request->createFromGlobals());

        $code = $respond->getStatusCode();
        $body = $respond->getResponseBody();
        return $this->respond(json_decode($body), $code);
    }   
}
