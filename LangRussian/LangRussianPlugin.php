<?php declare(strict_types=1);

namespace Plugin\LangRussian;

use App\Domain\AbstractPlugin;
use Psr\Container\ContainerInterface;
use Slim\Psr7\Request;
use Slim\Psr7\Response;

class LangRussianPlugin extends AbstractPlugin
{
    const NAME = 'LangRussianPlugin';
    const TITLE = 'Русский язык';

    public function __construct(ContainerInterface $container)
    {
        parent::__construct($container);

        $this->addLocaleFromFile('ru-RU', __DIR__ . '/Locale/_.php');
    }
}
