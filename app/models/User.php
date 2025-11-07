<?php
require_once __DIR__ . '/../core/Database.php';

class User
{
    public static function create(string $name, string $email, string $password): bool
    {
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare('INSERT INTO users (name, email, password) VALUES (?, ?, ?)');
        $hash = password_hash($password, PASSWORD_BCRYPT);
        return $stmt->execute([$name, $email, $hash]);
    }

    public static function findByEmail(string $email): ?array
    {
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user ?: null;
    }
}