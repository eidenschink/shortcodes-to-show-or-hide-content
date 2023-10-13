<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;
use Rector\Core\ValueObject\PhpVersion;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Php54\Rector\Array_\LongArrayToShortArrayRector;
use Rector\CodeQuality\Rector\FuncCall\SimplifyRegexPatternRector;
use Rector\CodeQuality\Rector\Include_\AbsolutizeRequireAndIncludePathRector;
use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths(
        [
        __DIR__ . '/',
        __DIR__ . '/includes',
        ]
    );

    $rectorConfig->skip(
        [
        LongArrayToShortArrayRector::class, // because of WP code style.
        AbsolutizeRequireAndIncludePathRector::class,
        SimplifyRegexPatternRector::class,
        ]
    );

    // register a single rule
    $rectorConfig->rule(InlineConstructorDefaultToPropertyRector::class);

    // define sets of rules
    $rectorConfig->sets(
        [
        SetList::CODE_QUALITY,
        SetList::DEAD_CODE,
        SetList::CODING_STYLE,
        LevelSetList::UP_TO_PHP_82,
        ]
    );
    $rectorConfig->phpVersion(PhpVersion::PHP_82);
};
