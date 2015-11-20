<?php

$header =  <<<EOF

/**
 * This file is part of the Jfx project.
 *
 * (c) Jérôme Fix <jerome.fix@zapoyok.info>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

EOF;

Symfony\CS\Fixer\Contrib\HeaderCommentFixer::setHeader($header);

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->in('src')
    ->in('tests')
;

return Symfony\CS\Config\Config::create()
    ->level(Symfony\CS\FixerInterface::SYMFONY_LEVEL)
    ->fixers(array(
        '-unalign_double_arrow',
        '-unalign_equals',
        'align_double_arrow',
        'align_equals',
        'newline_after_open_tag',
        'unused_use',
        'indentation',
        'ordered_use',
        'linefeed',
        'concat_with_spaces',
        'short_array_syntax',
        'phpdoc_order'
    ))
    ->setUsingCache(true)
    ->finder($finder)
;
