<?php

$app = new Container();
$app->bind(Logger::class, function () use ($app) {
    return new Logger();
});
$app->bind(User::class, function () use ($app) {
    return new User($app->make(Logger::class));
});

$user = $app->make(User::class);
$user->create('John Doe');
