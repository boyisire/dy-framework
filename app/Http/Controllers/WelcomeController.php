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
use App\Models\User;
use Illuminate\Database\DatabaseManager;
use Illuminate\Support\Facades\DB;
use Interop\Container\ContainerInterface;

class WelcomeController extends Controller
{
    public function index(Request $request, Response $response)
    {
//        $request->getBody()->write("Hello World ... ");
//        return $response;

        $db = $this->ci->get('db');
        $user = $db->table('user')->first();
        var_dump($user);

        $response->getBody()->write("Hello,world");

        return $response;
    }

}