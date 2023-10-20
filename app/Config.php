<?php
declare(strict_types=1);
namespace App;

final class Config {
    private static $values = null;
    private static $instance = null;

    private function __clone() {}
    public function __wakeup() {
        throw new \Exception("Something wrong.");
    }
    private function __construct() {
        $config = require __DIR__ . '/../config/config.php';
        self::$values = $config;
    }

    public static function init() {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public static function get(string $key, $default = null) {
        self::init();
        return self::$values[$key] ?? $default;
    }
}