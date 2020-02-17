<?php

namespace App\Classes;

class Post
{
    private PostId $id;
    private PostStatus $status;
    private string $title;
    private string $text;

    public static function draft(PostId $id, string $title, string $text): Post
    {
        return new self(
          $id,
          PostStatus::fromString(PostStatus::STATE_DRAFT),
          $title,
          $text,
        );
    }

    public static function fromState(array $state): Post
    {
        return new self(
            PostId::fromInt($state['id']),
            PostStatus::fromInt($state['statusId']),
            $state['title'],
            $state['text']
        );
    }

    private function __construct(PostId $id, PostStatus $status, string $title, string $text)
    {
        $this->id = $id;
        $this->status = $status;
        $this->text = $text;
        $this->title = $title;
    }

    /**
     * @return PostId
     */
    public function getId(): PostId
    {
        return $this->id;
    }

    /**
     * @return PostStatus
     */
    public function getStatus(): PostStatus
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
}
