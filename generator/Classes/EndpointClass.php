<?php

declare(strict_types=1);

namespace JacobDeKeizer\CcvGenerator\Classes;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;
use JacobDeKeizer\Ccv\Support\Str;
use JacobDeKeizer\CcvGenerator\Writers\CodeWriter;

class EndpointClass
{
    private string $title;

    /**
     * @var EndpointMethod[]
     */
    private array $endpointMethods;

    /**
     * @param EndpointMethod[] $endpointMethods
     */
    public function __construct(string $title, array $endpointMethods = [])
    {
        $this->title = $title;
        $this->endpointMethods = $endpointMethods;
    }

    public function addEndpointMethod(EndpointMethod $endpointMethod): void
    {
        $this->endpointMethods[] = $endpointMethod;
    }

    /**
     * @return EndpointMethod[]
     */
    public function getEndpointMethods(): array
    {
        return $this->endpointMethods;
    }

    public function getClassName(): string
    {
        return $this->getTitle() . 'Endpoint';
    }

    public function getTitle(): string
    {
        return Str::studly($this->title);
    }

    public function toString(): string
    {
        $codeWriter = new CodeWriter();

        $codeWriter->startPhpFile('JacobDeKeizer\Ccv\Endpoints');

        $codeWriter->useClass(CcvShopException::class);

        $codeWriter->insertNewLine();

        $codeWriter->openClass('class ' . $this->getClassName() . ' extends BaseEndpoint');

        $count = count($this->endpointMethods);

        for ($i = 0; $i < $count; $i++) {
            $this->endpointMethods[$i]->write($codeWriter);

            if ($i < $count - 1) {
                $codeWriter->insertNewLine();
            }
        }

        $codeWriter->closeClass();

        return $codeWriter->content();
    }
}
