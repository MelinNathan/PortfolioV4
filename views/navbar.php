<?php
include 'vendor/svg.php';

$age = 21;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title> <?= $title ?> </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
</head>

<body class="body-bg">
  <div class="bg-navbar">
    <nav class="navbar navbar-expand-lg navbar-light mx-5">

      <a class="navbar-brand fs-2" href="index.php?page=index">Nathan Melin</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active fs-3"  href="index.php?page=index">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-3" href="index.php?page=projet">Projet</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-3" href="index.php?page=stage">Stages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-3" href="index.php?page=veille">Veille</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-3" href="index.php?page=skill">Compétences</a>
          </li>
          <li class="nav-item align-content-end btn-dm" style="position: absolute; right: 0;">
            <button class="nav-link fs-3" id="btn-dm" onclick="myFunction()">Mode Nuit</button>
          </li>
        </ul>
      </div>
    </nav>
  </div>