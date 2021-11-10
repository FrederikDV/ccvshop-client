<?php

declare(strict_types=1);

namespace JacobDeKeizer\CcvGenerator\Writers;

use JacobDeKeizer\CcvGenerator\Properties\Property;

class PropertiesWriter
{
    /**
     * @param Property[] $properties
     */
    public static function writeProperties(CodeWriter $codeWriter, array $properties, bool $initialize = false): void
    {
        foreach ($properties as $property) {
            $codeWriter->insertNewLine();
            $property->writeProperty($codeWriter, $initialize);
        }
    }

    /**
     * @param Property[] $properties
     */
    public static function writeMethods(CodeWriter $codeWriter, array $properties): void
    {
        foreach ($properties as $property) {
            $codeWriter->insertNewLine();
            $property->writeGetter($codeWriter);
        }

        foreach ($properties as $property) {
            $codeWriter->insertNewLine();
            $property->writeSetter($codeWriter);
        }
    }
}
