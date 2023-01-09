<?php

class Movie {
    public $nome;
    public $regista;
    public $descrizione;
    public $durata;

    public function getInfo() {
        $info = '<ul>
                   <li>Titolo: '.$this->nome.'</li>
                   <li>Regista: '.$this->regista.'</li>
                   <li>Descrizione: '.$this->descrizione.'</li>
                   <li>Durata: '.$this->durata.'</li>
                </ul>';

        return $info;
    }

}

$inception = new Movie();
$inception->nome = 'Inception';
$inception->regista = 'Christopher Nolan';
$inception->descrizione = 'Il film, un thriller fantascientifico che esplora il concetto onirico, ha un cast composto da Leonardo DiCaprio, Tom Hardy, Ken Watanabe, Joseph Gordon-Levitt, Ellen Page, Marion Cotillard e Cillian Murphy.';
$inception->durata = '148 min';

$shutterIsland = new Movie();
$shutterIsland->nome = 'Shutter Island';
$shutterIsland->regista = 'Martin Scorsese';
$shutterIsland->descrizione = 'Il film, con Leonardo DiCaprio, Mark Ruffalo, Ben Kingsley, Michelle Williams, Emily Mortimer e Max von Sydow, è tratto dal romanzo del 2003 L\'isola della paura (Shutter Island) di Dennis Lehane.';
$shutterIsland->durata = '139 min';

echo '<h1>Film 1</h1>';
echo $inception->getInfo();
echo '<h1>Film 2</h1>';
echo $shutterIsland->getInfo();

?>