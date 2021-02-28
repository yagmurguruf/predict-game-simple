<?php
require_once __DIR__ . '/Router.php';
require_once __DIR__ . '/../../vendor/autoload.php';

ini_set("memory_limit", "-1");

@session_start();

$router = new Router();

$router->set404(function () {
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    echo '404, route not found!';
});

$router->mount('/site', function () use ($router) {
    $router->before('GET|POST', '/(.*)', function ($slug) use ($router) {

        //her post ve get ile gelen request için ortak bi şey yazılabilir.
    });

    $router->get("/getPage/([0-9]+)", function ($id) use ($router) {

        switch ($id) {
            case 0:
                echo json_encode(array("status" => "success",
                    "question" => "Aklından birini tut ve tahmin etmem için bana ip uçları ver",
                    "answer"=>array("1"=>"İnsan", "2"=>"Hayvan","3"=>"Comer")));

                break;
            case 1:
                echo json_encode(array("status" => "success",
                    "question" => "Tahmin ettiğin şey canlı mı?",
                    "answer"=>array("1"=>"Evet", "2"=>"Hayır")));

                break;

            case "11":
                echo json_encode(array("status" => "success",
                    "question" => "Bu şey düşünebilir mi?",
                    "answer"=>array("1"=>"Evet", "2"=>"Hayır")));

                break;
            case "112":
                echo json_encode(array("status" => "success",
                    "question" => "Bu şey miyavlar mı?",
                    "answer"=>array("1"=>"Evet", "2"=>"Hayır")));

                break;
            case "1121":
                echo json_encode(array("status" => "success",
                    "question" => "KEDİ",
                    "answer"=>array("1"=>"", "2"=>"")));

                break;
            case "12":
                echo json_encode(array("status" => "success",
                    "question" => "Bu şey bir yazılım mı?",
                    "answer"=>array("1"=>"Evet", "2"=>"Hayır")));

                break;
            case "121":
                echo json_encode(array("status" => "success",
                    "question" => "COMER",
                    "answer"=>array("1"=>"", "2"=>"")));

                break;
            case "111":
                echo json_encode(array("status" => "success",
                    "question" => "İNSAN",
                    "answer"=>array("1"=>"", "2"=>"")));

                break;
            default:
                echo json_encode(array("status" => "success",
                    "question" => "Aklından birini tut ve tahmin etmem için bana ip uçları ver",
                    "answer"=>array("1"=>"İnsan", "2"=>"Hayvan","3"=>"Comer")));

                break;
        }
        exit();

    });

});
$router->run();






