<?php
require_once __DIR__ . '/../Model/movie.php';
require_once __DIR__ . '/../Model/genre.php';

$movies = [
    new Movie('Star Wars', 1977, 'https://www.movieposters.com/cdn/shop/products/6cd691e19fffbe57b353cb120deaeb8f_8489d7bf-24ba-4848-9d0f-11f20cb35025_480x.progressive.jpg?v=1573613877', new Genre(['Fantascienza', 'Azione'])),
    new Movie('Il Padrino', 1972, 'https://www.movieposters.com/cdn/shop/products/b5282f72126e4919911509e034a61f66_6ce2486d-e0da-4b7a-9148-722cdde610b8_480x.progressive.jpg?v=1573616025', new Genre(['Drammatico'])),
    new Movie('Inception', 2010, 'https://www.movieposters.com/cdn/shop/files/inception.mpw.123395_9e0000d1-bc7f-400a-b488-15fa9e60a10c_480x.progressive.jpg?v=1708527589', new Genre(['Fantascienza', 'Thriller'])),
    new Movie('Titanic', 1997, 'https://www.movieposters.com/cdn/shop/files/Titanic.mpw.102378_480x.progressive.jpg?v=1709331723', new Genre(['Romantico', 'Drammatico', 'Storico']))
];
