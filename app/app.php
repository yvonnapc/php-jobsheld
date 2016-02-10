<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/jobs.php";

    session_start();
    if(empty($_SESSION['list_of_jobs'])){
      $_SESSION['list_of_jobs'] = array();
    }
    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
      'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
      return $app['twig']->render('jobs.html.twig', array('jobs' => Job::getAll()));
    });

    // $app->post("/jobs", function() use ($app) {
    //   $job = new Job($_POST['title'], $_POST['description'], $_POST['length']);
    //   $job->save();
    //   return $app['twig']->render('create_job.php', array('newjob' => $job));
    // });
  return $app;
?>
