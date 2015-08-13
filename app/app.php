<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Scrabble.php";

    $app = new Silex\Application();
    $app['debug']=true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('scrabble_form.html.twig');
    });

    $app->get('/score', function() use ($app) {
        $new = new Scrabble;
        $output_score = $new->scoreWord($_GET['word']);
        $word = $_GET['word'];
        return $app['twig']->render('score.html.twig', array('score' => $output_score, 'word' => $word));
    });

    return $app;

?>
