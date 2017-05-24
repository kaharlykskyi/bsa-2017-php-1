<?php

namespace BinaryStudioAcademy\Task2;

class EmojiGenerator
{
    const EMOJI = [
        '😀',
        '😃',
        '😄',
        '😁',
        '😆',
        '😅',
        '😂',
    ];

    public function generate()
    {
        foreach (self::EMOJI as $e) {
            yield $e;
        }
    }
}