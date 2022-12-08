<?php

namespace Luka\Signup\Model\Data;

use Luka\Signup\Api\Data\UserInterface;
use Magento\Framework\DataObject;

class User extends DataObject implements UserInterface
{
    /**
     * Getter for Name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->getData(self::NAME);
    }

    /**
     * Setter for Name.
     *
     * @param string|null $name
     *
     * @return void
     */
    public function setName(?string $name): void
    {
        $this->setData(self::NAME, $name);
    }

    /**
     * Getter for Date.
     *
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->getData(self::DATE);
    }

    /**
     * Setter for Date.
     *
     * @param string|null $date
     *
     * @return void
     */
    public function setDate(?string $date): void
    {
        $this->setData(self::DATE, $date);
    }
}
