<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework;

use function file_get_contents;
use PHPUnit\Framework\Attributes\CoversMethod;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\Attributes\TestDox;

#[CoversMethod(Assert::class, 'assertStringEqualsFile')]
#[TestDox('assertStringEqualsFile()')]
#[Small]
final class assertStringEqualsFileTest extends TestCase
{
    public function testSucceedsWhenConstraintEvaluatesToTrue(): void
    {
        $this->assertStringEqualsFile(
            TEST_FILES_PATH . 'foo.xml',
            file_get_contents(TEST_FILES_PATH . 'foo.xml'),
        );
    }

    public function testFailsWhenConstraintEvaluatesToFalse(): void
    {
        $this->expectException(AssertionFailedError::class);

        $this->assertStringEqualsFile(
            TEST_FILES_PATH . 'foo.xml',
            file_get_contents(TEST_FILES_PATH . 'bar.xml'),
        );
    }
}