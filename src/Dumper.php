<?php

declare(strict_types=1);

namespace Harryqt\Dumper;

use Symfony\Component\VarDumper\Caster\ReflectionCaster;
use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider;
use Symfony\Component\VarDumper\Dumper\HtmlDumper;
use Symfony\Component\VarDumper\VarDumper;

class Dumper extends VarDumper
{
    public static function hd($var)
    {
        $cloner = new VarCloner;
        $cloner->addCasters(ReflectionCaster::UNSET_CLOSURE_FILE_INFO);

        $data = $cloner->cloneVar($var)->withContext([
            SourceContextProvider::class => (new SourceContextProvider)->getContext(),
        ]);

        return HttpResponse::html((new HtmlDumper)->dump($data, true));
    }
}
