<?php

namespace App\Message;

class CommentMessage
{
    public function __construct(
        private int $id,
        private string $reviewUrl,
        private array $context = [],
    ) {
    }

    public function getReviewUrl(): string
    {
        return $this->reviewUrl;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getContext()
    {
        return $this->context;
    }
}
