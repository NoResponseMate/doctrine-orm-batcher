<?php

declare(strict_types=1);

namespace Tests\Setono\DoctrineORMBatcher\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 *
 * @ORM\Table(name="entity")
 */
#[ORM\Entity]
#[ORM\Table('entity')]
class Entity
{
    /**
     * @ORM\Id()
     *
     * @ORM\Column(type="integer")
     */
    #[ORM\Id()]
    #[ORM\Column('integer')]
    protected int $id;

    /** @ORM\Column(type="boolean") */
    #[ORM\Column('boolean')]
    protected bool $enabled;

    public function __construct(int $id, bool $enabled = true)
    {
        $this->id = $id;
        $this->enabled = $enabled;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function isEnabled(): bool
    {
        return $this->enabled;
    }
}
