<?php

namespace Freezy\Transcriptions;

class Line
{
    public $position;
    public $timestamp;
    public $body;

    public function __construct($position, $timestamp, $body)
    {
        $this->position = $position;
        $this->timestamp = $timestamp;
        $this->body = $body;
    }

    public function toHtml(): string
    {
        return "<a href=\"?time={$this->beginningTimestamp()}\">{$this->body}</a>";
    }

    public function beginningTimestamp(): string
    {
        preg_match('/^\d{2}:(\d{2}:\d{2})\.\d{3}/', $this->timestamp, $matches);

        return $matches[1];
    }
}
