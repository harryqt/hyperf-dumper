<?php

declare(strict_types=1);

namespace Fangx\Dumper;

use Hyperf\HttpMessage\Server\Response;
use Hyperf\HttpMessage\Stream\SwooleStream;

class HttpResponse extends Response
{
    public static function html(string $content)
    {
        return (new static)
            ->withAddedHeader('content-type', 'text/html; charset=utf-8')
            ->withBody(new SwooleStream($content));
    }
}
