<?php
/**
 * Created by PhpStorm.
 * User: daye
 * Date: 18-3-5
 * Time: 下午2:44
 */
namespace App\Http\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;

class WelcomeController extends Controller
{
    public function index(Request $request, Response $response)
    {
        $request->getBody()->write("Hello World ... ");
        return $response;
    }

}