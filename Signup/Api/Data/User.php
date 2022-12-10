<?php

namespace Luka\Signup\Api\Data;

interface SignupInterface {
    /**
     * String constants for property names
     */
    const NAME = "name";
    const DATE = "date";

    /**
     * Getter for Name.
     *
     * @return string|null
     */
    public function getName(): ?string;

    /**
     * Setter for Name.
     *
     * @param string|null $name
     *
     * @return void
     */
    public function setName(?string $name): void;

    /**
     * Getter for Date.
     *
     * @return string|null
     */
    public function getDate(): ?string;

    /**
     * Setter for Date.
     *
     * @param string|null $date
     *
     * @return void
     */
    public function setDate(?string $date): void;
}
