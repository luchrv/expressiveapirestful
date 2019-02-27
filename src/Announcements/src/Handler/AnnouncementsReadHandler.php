<?php

declare(strict_types=1);

namespace Announcements\Handler;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\Response\JsonResponse;

class AnnouncementsReadHandler implements RequestHandlerInterface
{
    public function handle(ServerRequestInterface $request) : ResponseInterface
    {
        $result['_embedded'] = [1 => 'test', 2 => 'test2'];

        return new JsonResponse($result);
    }
}
