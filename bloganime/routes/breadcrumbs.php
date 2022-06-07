<?php // routes/breadcrumbs.php


// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push ('INICIO', route('home'));
});

// Home > posts
Breadcrumbs::for('posts', function ($trail) {
    $trail->parent('home');
    $trail->push('POSTS', route('posts'));
  });

  // Home > Login
Breadcrumbs::for('login', function ($trail) {
  $trail->parent('home');
  $trail->push('INICIAR SESIÓN', route('login'));
});

// Home > sobre el blog
Breadcrumbs::for('blog', function ($trail) {
    $trail->parent('home');
    $trail->push('SOBRE EL BLOG', route('blog'));
});

// Home > nosotros
Breadcrumbs::for('nosotros', function ($trail) {
  $trail->parent('home');
  $trail->push('NOSOTROS', route('nosotros'));
});

//HOME > Registrarse
Breadcrumbs::for('register', function ($trail) {
  $trail->parent('home');
  $trail->push('REGISTRARME', route('register'));
});

// Home > historia del anime
Breadcrumbs::for('historia', function ($trail) {
  $trail->parent('home');
  $trail->push('¿QUÉ ES EL ANIME?', route('historia'));
});

// Home > Posts > Postsone
Breadcrumbs::for('postsone', function ($trail) {
  $trail->parent('posts');
  $trail->push('Platinum End プラチナエンド', route('postsone'));
});

// Home > noticia
Breadcrumbs::for('noticia', function ($trail) {
  $trail->parent('postsone');
  $trail->push('NOTICIAS', route('noticia'));
});


