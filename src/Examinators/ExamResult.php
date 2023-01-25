<?php

namespace Mbtnet\Devcheck\Examinators;

use Illuminate\Support\Collection;

/**
 * The standard result of every Exam.
 *
 * Follows: Get/set design pattern. Method chaining. Constructor promotion (php8).
 */
class ExamResult
{
    public function __construct(
        public string $name,
        public string $class,
        public string $description,
        public array $messages = [])
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
     * Get the value of class
     */
    public function getClass(): string
    {
        return $this->class;
    }

    /**
     * Set the value of class
     *
     * @return  self
     */
    public function setClass($class): self
    {
        $this->class = $class;

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
