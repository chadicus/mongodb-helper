<?php

namespace SubjectivePHPTest\MongoDB\Operation\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\Operation\Options\ModifyCollectionOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\Operation\Options\ModifyCollectionOptions
 */
final class ModifyCollectionOptionsTest extends TestCase
{
    /**
     * @test
     */
    public function classOffersCorrectOptions()
    {
        $expected = [
            'SESSION' => 'session',
            'TYPE_MAP' => 'typeMap',
            'WRITE_CONCERN' => 'writeConcern',
        ];

        $actual = (new ReflectionClass(ModifyCollectionOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
