<?php

declare(strict_types = 1);

namespace CodelyTv\Mooc\User\Domain;

use CodelyTv\Shared\Domain\ValueObject\IntValueObject;

final class TotalVideosCreated extends IntValueObject
{
    public function increase(): self
    {
        return new self($this->value() + 1);
    }
}
