<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use Kleysonmadruga\BuscadorCursos\Buscador;
use Symfony\Component\DomCrawler\Crawler;

$httpClient = new Client(['base_uri' => 'https://www.alura.com.br']);
$crawler = new Crawler();

$buscador = new Buscador($httpClient, $crawler);

$cursos = $buscador->buscar('/cursos-online-programacao/php');

foreach($cursos as $curso) {
  exibeMensagem($curso);
}