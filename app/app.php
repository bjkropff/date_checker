<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/DateFormatter.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/view_date", function() use($app) {
        $date_to_format = new DateFormatter;
        $changed_date = $date_to_format->changeDate($_GET['start_date'],$_GET['end_date']);
        return $app['twig']->render('date.html.twig', array('result' => $changed_date));
    });

    return $app;
?>
