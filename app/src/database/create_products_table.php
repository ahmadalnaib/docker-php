<?php

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('products', function ($table) {
    $table->increments('id');
    $table->string('name');
    $table->text('description');
    $table->decimal('price', 8, 2);
    $table->timestamps();
});