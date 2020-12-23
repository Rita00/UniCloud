<?php

//Home
Breadcrumbs::for('home', function($trail){
   $trail->push('Home', route('home'));
});

Breadcrumbs::for('degrees', function($trail){
    $trail->parent('home');
    $trail->push("Cursos", route('degrees'));
});

Breadcrumbs::for('disciplinas', function($trail, $curso){
    $trail->parent('degrees');
    $trail->push($curso->nome, route('disciplinas', ['course' => $curso->id]));
});

Breadcrumbs::for('categories', function($trail, $courseBread, $curso){
    $trail->parent('disciplinas', $curso);
    $trail->push($courseBread->nome, route('categories', ['degree' => $courseBread->id]));
});
Breadcrumbs::for('materials', function($trail, $courseBread, $curso, $cat){
    $trail->parent('categories', $courseBread, $curso);
    $trail->push($cat, route('materials'));
});
