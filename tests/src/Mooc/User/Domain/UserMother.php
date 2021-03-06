<?php

declare(strict_types = 1);

namespace CodelyTv\Test\Mooc\User\Domain;

use CodelyTv\Mooc\User\Domain\TotalVideosCreated;
use CodelyTv\Mooc\User\Domain\User;
use CodelyTv\Mooc\User\Domain\UserId;
use CodelyTv\Mooc\User\Domain\UserName;

final class UserMother
{
    public static function create(UserId $id, UserName $name, TotalVideosCreated $totalPendingVideos)
    {
        return new User($id, $name, $totalPendingVideos);
    }

    public static function withId(UserId $id)
    {
        return self::create($id, UserNameMother::random(), TotalVideosCreatedMother::random());
    }

    public static function withValues(string $id, string $name, int $totalPendingVideos)
    {
        return self::create(
            UserIdMother::create($id),
            UserNameMother::create($name),
            TotalVideosCreatedMother::create($totalPendingVideos)
        );
    }

    public static function random()
    {
        return self::create(UserIdMother::random(), UserNameMother::random(), TotalVideosCreatedMother::random());
    }
}
