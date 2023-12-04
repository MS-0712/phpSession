<?php
// header('refresh: 1');
// interface MyInterface{
//     public static function hello();
// }
// trait MyTrait{}

class User
{
    private $username;
    function getUserName(): string {
        return $this->username;
    }
}
enum UserStatus: int
{
        // use MyTrait;
    case Active = 1;
    case Pending = 2;
    case Deleted = 3;

    public const ARCHIVED = self::Deleted;

    public function text()
    {
        return match ($this) {
            self::Active => 'User is active',
            self::Pending => 'User is pending',
            self::Deleted => 'User is deleted',
        };
    }

    // public static function staticMethod()
    // {
    //     return "Hello from static";
    // }

    public static function hello()
    {
        return "hello from interface";
    }
}

echo '<pre>';
// var_dump(UserStatus::cases());
print_r(UserStatus::cases());
// var_dump(UserStatus::Pending->hello());

// var_dump(UserStatus::hello());

// var_dump(UserStatus::Active->text());
// var_dump(UserStatus::Pending->text());
