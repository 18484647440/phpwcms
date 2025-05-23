<?php

declare(strict_types=1);

namespace Algo26\IdnaConvert\EncodingHelper;

interface EncodingHelperInterface
{
    public function convert(
        string $sourceString,
        string $encoding = 'ISO-8859-1',
        bool $safeMode = false
    );
}
