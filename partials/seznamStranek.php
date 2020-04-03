
<?php

class Stranka {

    protected $menu;
    protected $titulek;
    protected $id;

    function __construct($id, $menu, $titulek) {
        $this->id = $id;
        $this->menu = $menu;
        $this->titulek = $titulek;
    }

    function getTitulek() {
        return $this->titulek;
    }

    function getMenu() {
        return $this->menu;
    }

    function getObsah() {
        return file_get_contents($this->id . ".php");
    }

    function getId() {
        return $this->id;
    }

    function setObsah($obsah) {
        file_put_contents("{$this->id}.php", $obsah);
    }

}

$seznamStranek = array(
    'index' => new Stranka('../index', 'Domů', 'Stránky spolku A dál?'),
//    'uvod' => array(
//        'menu' => 'Domů',
//        'titulek' => 'stránky spolku a dál?',
//    ),
    'pripravovane' => new Stranka('../pripravovane', 'připravované', 'připravované'),
//    'pripravujeme' => array(
//        'menu' => 'Připravujeme',
//        'titulek' => 'Připravujeme',
//    ),
    'projekty' => new Stranka('../projekty', 'naše projekty', 'naše projekty'),

    'spoluporadane' => new Stranka('../spoluporadane', 'spolupořádané', 'spolupořádané'),


    'kalendar' => new Stranka('../kalendar', 'kalendář', 'komunitní kalendář'),
//    'kalendar' => array(
//        'menu' => 'Kalendář',
//        'titulek' => 'Kalendář',
//    ),
    'media' => new Stranka('../media', 'média', 'média'),
//     'media' => array(
//        'menu' => 'Média',
//        'titulek' => 'Média',
//    ),
//    'stahnout' => new Stranka('stahnout', 'Ke stažení', 'Ke stažení'),

    'blog' => new Stranka('../blog', 'blog', 'blog'),
//
    /* '404' => new Stranka('../404', '', 'stránka nenalezena 404'), */
//     '404' => array(
//        'menu' => '',
//        'titulek' => 'Stránka nenalezena',
//    ),
);
?>