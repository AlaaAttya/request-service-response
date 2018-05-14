<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Domain\Repositories\MongoDB\PostRepository;
use App\Requests\GetPostViralityRequest;

$klein = new \Klein\Klein();

$klein->respond('GET', '/post/[:postId]/virality',
    function (\Klein\Request $request, \Klein\Response $response, \Klein\ServiceProvider $service) {

        $request   = new GetPostViralityRequest($request, new PostRepository());
        $rateValue = $request->validate()->process();

        $transformedResponseArray = (new \App\Responses\GetPostViralityResponse())->transform(['rate' => $rateValue]);

        return $response->json($transformedResponseArray);
    }
);

$klein->dispatch();
