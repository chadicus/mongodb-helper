<?php

namespace SubjectivePHPTest\MongoDB\GridFS\Options;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use SubjectivePHP\MongoDB\GridFS\Options\OpenUploadStreamOptions;

/**
 * @coversDefaultClass \SubjectivePHP\MongoDB\GridFS\Options\OpenUploadStreamOptions
 */
final class OpenUploadStreamOptionsTest extends TestCase
{
    /**
     * @test
     */
    public function classOffersCorrectOptions()
    {
        $expected = [
            'CHUNK_SIZE_BYTES' => 'chunkSizeBytes',
            'DISABLE_MD5' => 'disableMD5',
            'ID' => '_id',
            'METADATA' => 'metadata',
        ];

        $actual = (new ReflectionClass(OpenUploadStreamOptions::class))->getConstants();
        ksort($actual);
        $this->assertSame($expected, $actual);
    }
}
