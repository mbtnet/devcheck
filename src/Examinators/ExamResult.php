<?php

namespace Mbtnet\Devcheck\Examinators;

use Illuminate\Support\Collection;

/**
 * The standard result of every Exam.
 *
 * Follows: Get/set design pattern. Method chaining.
 */
class ExamResult
{
    public string $name;

    public string $description;

    public array $messages = [];

    public function __construct(string $name, string $description, array $messages = [])
    {
        $this->setName($name);
        $this->setDescription($description);
        $this->setMessages($messages);
    }
    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the array of messages
     */
    public function getMessages(): array
    {
        return $this->messages;
    }

    /**
     * Set the array of messages
     *
     * @return  self
     */
    public function setMessages(array $messages): self
    {
        $this->messages = $messages;

        return $this;
    }
}
