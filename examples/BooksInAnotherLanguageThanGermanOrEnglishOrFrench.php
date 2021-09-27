<?php

declare(strict_types=1);

namespace Rikta\PhpQuery\Examples;

use Rikta\PhpQuery\Examples\_Data\BookDataRepository;
use Rikta\PhpQuery\QueryInterface;
use Rikta\PhpQuery\Tests\_TestHelper\BookQueryExample;

class BooksInAnotherLanguageThanGermanOrEnglishOrFrench implements BookQueryExample
{
    public function executeQuery(QueryInterface $query, BookDataRepository $data): array
    {
        return $query
            ->onPathValue('.language')->not()->inArray(['German', 'English', 'French'])
            ->getResultsFor($data)
            ->toArray()
        ;
    }

    public function expectedResult(): array
    {
        return [
            1 => [
                'author' => 'Hans Christian Andersen',
                'country' => 'Denmark',
                'language' => 'Danish',
                'link' => 'https://en.wikipedia.org/wiki/Fairy_Tales_Told_for_Children._First_Collection.',
                'pages' => 784,
                'title' => 'Fairy tales',
                'year' => 1836,
            ],
            2 => [
                'author' => 'Dante Alighieri',
                'country' => 'Italy',
                'language' => 'Italian',
                'link' => 'https://en.wikipedia.org/wiki/Divine_Comedy',
                'pages' => 928,
                'title' => 'The Divine Comedy',
                'year' => 1315,
            ],
            3 => [
                'author' => 'Unknown',
                'country' => 'Sumer and Akkadian Empire',
                'language' => 'Akkadian',
                'link' => 'https://en.wikipedia.org/wiki/Epic_of_Gilgamesh',
                'pages' => 160,
                'title' => 'The Epic Of Gilgamesh',
                'year' => -1700,
            ],
            4 => [
                'author' => 'Unknown',
                'country' => 'Achaemenid Empire',
                'language' => 'Hebrew',
                'link' => 'https://en.wikipedia.org/wiki/Book_of_Job',
                'pages' => 176,
                'title' => 'The Book Of Job',
                'year' => -600,
            ],
            5 => [
                'author' => 'Unknown',
                'country' => 'India/Iran/Iraq/Egypt/Tajikistan',
                'language' => 'Arabic',
                'link' => 'https://en.wikipedia.org/wiki/One_Thousand_and_One_Nights',
                'pages' => 288,
                'title' => 'One Thousand and One Nights',
                'year' => 1200,
            ],
            6 => [
                'author' => 'Unknown',
                'country' => 'Iceland',
                'language' => 'Old Norse',
                'link' => 'https://en.wikipedia.org/wiki/Nj%C3%A1ls_saga',
                'pages' => 384,
                'title' => 'Nj\\u00e1l\'s Saga',
                'year' => 1350,
            ],
            9 => [
                'author' => 'Samuel Beckett',
                'country' => 'Republic of Ireland',
                'language' => 'French, English',
                'link' => 'https://en.wikipedia.org/wiki/Molloy_(novel)',
                'pages' => 256,
                'title' => 'Molloy, Malone Dies, The Unnamable, the trilogy',
                'year' => 1952,
            ],
            10 => [
                'author' => 'Giovanni Boccaccio',
                'country' => 'Italy',
                'language' => 'Italian',
                'link' => 'https://en.wikipedia.org/wiki/The_Decameron',
                'pages' => 1024,
                'title' => 'The Decameron',
                'year' => 1351,
            ],
            11 => [
                'author' => 'Jorge Luis Borges',
                'country' => 'Argentina',
                'language' => 'Spanish',
                'link' => 'https://en.wikipedia.org/wiki/Ficciones',
                'pages' => 224,
                'title' => 'Ficciones',
                'year' => 1965,
            ],
            16 => [
                'author' => 'Miguel de Cervantes',
                'country' => 'Spain',
                'language' => 'Spanish',
                'link' => 'https://en.wikipedia.org/wiki/Don_Quixote',
                'pages' => 1056,
                'title' => 'Don Quijote De La Mancha',
                'year' => 1610,
            ],
            18 => [
                'author' => 'Anton Chekhov',
                'country' => 'Russia',
                'language' => 'Russian',
                'link' => 'https://en.wikipedia.org/wiki/List_of_short_stories_by_Anton_Chekhov',
                'pages' => 194,
                'title' => 'Stories',
                'year' => 1886,
            ],
            23 => [
                'author' => 'Fyodor Dostoevsky',
                'country' => 'Russia',
                'language' => 'Russian',
                'link' => 'https://en.wikipedia.org/wiki/Crime_and_Punishment',
                'pages' => 551,
                'title' => 'Crime and Punishment',
                'year' => 1866,
            ],
            24 => [
                'author' => 'Fyodor Dostoevsky',
                'country' => 'Russia',
                'language' => 'Russian',
                'link' => 'https://en.wikipedia.org/wiki/The_Idiot',
                'pages' => 656,
                'title' => 'The Idiot',
                'year' => 1869,
            ],
            25 => [
                'author' => 'Fyodor Dostoevsky',
                'country' => 'Russia',
                'language' => 'Russian',
                'link' => 'https://en.wikipedia.org/wiki/Demons_(Dostoyevsky_novel)',
                'pages' => 768,
                'title' => 'The Possessed',
                'year' => 1872,
            ],
            26 => [
                'author' => 'Fyodor Dostoevsky',
                'country' => 'Russia',
                'language' => 'Russian',
                'link' => 'https://en.wikipedia.org/wiki/The_Brothers_Karamazov',
                'pages' => 824,
                'title' => 'The Brothers Karamazov',
                'year' => 1880,
            ],
            29 => [
                'author' => 'Euripides',
                'country' => 'Greece',
                'language' => 'Greek',
                'link' => 'https://en.wikipedia.org/wiki/Medea_(play)',
                'pages' => 104,
                'title' => 'Medea',
                'year' => -431,
            ],
            34 => [
                'author' => 'Federico Garc\\u00eda Lorca',
                'country' => 'Spain',
                'language' => 'Spanish',
                'link' => 'https://en.wikipedia.org/wiki/Gypsy_Ballads',
                'pages' => 218,
                'title' => 'Gypsy Ballads',
                'year' => 1928,
            ],
            35 => [
                'author' => 'Gabriel Garc\\u00eda M\\u00e1rquez',
                'country' => 'Colombia',
                'language' => 'Spanish',
                'link' => 'https://en.wikipedia.org/wiki/One_Hundred_Years_of_Solitude',
                'pages' => 417,
                'title' => 'One Hundred Years of Solitude',
                'year' => 1967,
            ],
            36 => [
                'author' => 'Gabriel Garc\\u00eda M\\u00e1rquez',
                'country' => 'Colombia',
                'language' => 'Spanish',
                'link' => 'https://en.wikipedia.org/wiki/Love_in_the_Time_of_Cholera',
                'pages' => 368,
                'title' => 'Love in the Time of Cholera',
                'year' => 1985,
            ],
            38 => [
                'author' => 'Nikolai Gogol',
                'country' => 'Russia',
                'language' => 'Russian',
                'link' => 'https://en.wikipedia.org/wiki/Dead_Souls',
                'pages' => 432,
                'title' => 'Dead Souls',
                'year' => 1842,
            ],
            40 => [
                'author' => 'Jo\\u00e3o Guimar\\u00e3es Rosa',
                'country' => 'Brazil',
                'language' => 'Portuguese',
                'link' => 'https://en.wikipedia.org/wiki/The_Devil_to_Pay_in_the_Backlands',
                'pages' => 494,
                'title' => 'The Devil to Pay in the Backlands',
                'year' => 1956,
            ],
            41 => [
                'author' => 'Knut Hamsun',
                'country' => 'Norway',
                'language' => 'Norwegian',
                'link' => 'https://en.wikipedia.org/wiki/Hunger_(Hamsun_novel)',
                'pages' => 176,
                'title' => 'Hunger',
                'year' => 1890,
            ],
            43 => [
                'author' => 'Homer',
                'country' => 'Greece',
                'language' => 'Greek',
                'link' => 'https://en.wikipedia.org/wiki/Iliad',
                'pages' => 608,
                'title' => 'Iliad',
                'year' => -735,
            ],
            44 => [
                'author' => 'Homer',
                'country' => 'Greece',
                'language' => 'Greek',
                'link' => 'https://en.wikipedia.org/wiki/Odyssey',
                'pages' => 374,
                'title' => 'Odyssey',
                'year' => -800,
            ],
            45 => [
                'author' => 'Henrik Ibsen',
                'country' => 'Norway',
                'language' => 'Norwegian',
                'link' => 'https://en.wikipedia.org/wiki/A_Doll%27s_House',
                'pages' => 68,
                'title' => 'A Doll\'s House',
                'year' => 1879,
            ],
            50 => [
                'author' => 'K\\u0101lid\\u0101sa',
                'country' => 'India',
                'language' => 'Sanskrit',
                'link' => 'https://en.wikipedia.org/wiki/Abhij%C3%B1%C4%81na%C5%9B%C4%81kuntalam',
                'pages' => 147,
                'title' => 'The recognition of Shakuntala',
                'year' => 150,
            ],
            51 => [
                'author' => 'Yasunari Kawabata',
                'country' => 'Japan',
                'language' => 'Japanese',
                'link' => 'https://en.wikipedia.org/wiki/The_Sound_of_the_Mountain',
                'pages' => 288,
                'title' => 'The Sound of the Mountain',
                'year' => 1954,
            ],
            52 => [
                'author' => 'Nikos Kazantzakis',
                'country' => 'Greece',
                'language' => 'Greek',
                'link' => 'https://en.wikipedia.org/wiki/Zorba_the_Greek',
                'pages' => 368,
                'title' => 'Zorba the Greek',
                'year' => 1946,
            ],
            54 => [
                'author' => 'Halld\\u00f3r Laxness',
                'country' => 'Iceland',
                'language' => 'Icelandic',
                'link' => 'https://en.wikipedia.org/wiki/Independent_People',
                'pages' => 470,
                'title' => 'Independent People',
                'year' => 1934,
            ],
            55 => [
                'author' => 'Giacomo Leopardi',
                'country' => 'Italy',
                'language' => 'Italian',
                'link' => '',
                'pages' => 184,
                'title' => 'Poems',
                'year' => 1818,
            ],
            57 => [
                'author' => 'Astrid Lindgren',
                'country' => 'Sweden',
                'language' => 'Swedish',
                'link' => 'https://en.wikipedia.org/wiki/Pippi_Longstocking',
                'pages' => 160,
                'title' => 'Pippi Longstocking',
                'year' => 1945,
            ],
            58 => [
                'author' => 'Lu Xun',
                'country' => 'China',
                'language' => 'Chinese',
                'link' => 'https://en.wikipedia.org/wiki/A_Madman%27s_Diary',
                'pages' => 389,
                'title' => 'Diary of a Madman',
                'year' => 1918,
            ],
            59 => [
                'author' => 'Naguib Mahfouz',
                'country' => 'Egypt',
                'language' => 'Arabic',
                'link' => 'https://en.wikipedia.org/wiki/Children_of_Gebelawi',
                'pages' => 355,
                'title' => 'Children of Gebelawi',
                'year' => 1959,
            ],
            64 => [
                'author' => 'Elsa Morante',
                'country' => 'Italy',
                'language' => 'Italian',
                'link' => 'https://en.wikipedia.org/wiki/History_(novel)',
                'pages' => 600,
                'title' => 'History',
                'year' => 1974,
            ],
            66 => [
                'author' => 'Murasaki Shikibu',
                'country' => 'Japan',
                'language' => 'Japanese',
                'link' => 'https://en.wikipedia.org/wiki/The_Tale_of_Genji',
                'pages' => 1360,
                'title' => 'The Tale of Genji',
                'year' => 1006,
            ],
            70 => [
                'author' => 'Ovid',
                'country' => 'Roman Empire',
                'language' => 'Classical Latin',
                'link' => 'https://en.wikipedia.org/wiki/Metamorphoses',
                'pages' => 576,
                'title' => 'Metamorphoses',
                'year' => 100,
            ],
            71 => [
                'author' => 'Fernando Pessoa',
                'country' => 'Portugal',
                'language' => 'Portuguese',
                'link' => 'https://en.wikipedia.org/wiki/The_Book_of_Disquiet',
                'pages' => 272,
                'title' => 'The Book of Disquiet',
                'year' => 1928,
            ],
            75 => [
                'author' => 'Juan Rulfo',
                'country' => 'Mexico',
                'language' => 'Spanish',
                'link' => 'https://en.wikipedia.org/wiki/Pedro_P%C3%A1ramo',
                'pages' => 124,
                'title' => 'Pedro P\\u00e1ramo',
                'year' => 1955,
            ],
            76 => [
                'author' => 'Rumi',
                'country' => 'Sultanate of Rum',
                'language' => 'Persian',
                'link' => 'https://en.wikipedia.org/wiki/Masnavi',
                'pages' => 438,
                'title' => 'The Masnavi',
                'year' => 1236,
            ],
            78 => [
                'author' => 'Saadi',
                'country' => 'Persia, Persian Empire',
                'language' => 'Persian',
                'link' => 'https://en.wikipedia.org/wiki/Bustan_(book)',
                'pages' => 298,
                'title' => 'Bostan',
                'year' => 1257,
            ],
            79 => [
                'author' => 'Tayeb Salih',
                'country' => 'Sudan',
                'language' => 'Arabic',
                'link' => 'https://en.wikipedia.org/wiki/Season_of_Migration_to_the_North',
                'pages' => 139,
                'title' => 'Season of Migration to the North',
                'year' => 1966,
            ],
            80 => [
                'author' => 'Jos\\u00e9 Saramago',
                'country' => 'Portugal',
                'language' => 'Portuguese',
                'link' => 'https://en.wikipedia.org/wiki/Blindness_(novel)',
                'pages' => 352,
                'title' => 'Blindness',
                'year' => 1995,
            ],
            84 => [
                'author' => 'Sophocles',
                'country' => 'Greece',
                'language' => 'Greek',
                'link' => 'https://en.wikipedia.org/wiki/Oedipus_the_King',
                'pages' => 88,
                'title' => 'Oedipus the King',
                'year' => -430,
            ],
            87 => [
                'author' => 'Italo Svevo',
                'country' => 'Italy',
                'language' => 'Italian',
                'link' => 'https://en.wikipedia.org/wiki/Zeno%27s_Conscience',
                'pages' => 412,
                'title' => 'Confessions of Zeno',
                'year' => 1923,
            ],
            89 => [
                'author' => 'Leo Tolstoy',
                'country' => 'Russia',
                'language' => 'Russian',
                'link' => 'https://en.wikipedia.org/wiki/War_and_Peace',
                'pages' => 1296,
                'title' => 'War and Peace',
                'year' => 1867,
            ],
            90 => [
                'author' => 'Leo Tolstoy',
                'country' => 'Russia',
                'language' => 'Russian',
                'link' => 'https://en.wikipedia.org/wiki/Anna_Karenina',
                'pages' => 864,
                'title' => 'Anna Karenina',
                'year' => 1877,
            ],
            91 => [
                'author' => 'Leo Tolstoy',
                'country' => 'Russia',
                'language' => 'Russian',
                'link' => 'https://en.wikipedia.org/wiki/The_Death_of_Ivan_Ilyich',
                'pages' => 92,
                'title' => 'The Death of Ivan Ilyich',
                'year' => 1886,
            ],
            93 => [
                'author' => 'Valmiki',
                'country' => 'India',
                'language' => 'Sanskrit',
                'link' => 'https://en.wikipedia.org/wiki/Ramayana',
                'pages' => 152,
                'title' => 'Ramayana',
                'year' => -450,
            ],
            94 => [
                'author' => 'Virgil',
                'country' => 'Roman Empire',
                'language' => 'Classical Latin',
                'link' => 'https://en.wikipedia.org/wiki/Aeneid',
                'pages' => 442,
                'title' => 'The Aeneid',
                'year' => -23,
            ],
            95 => [
                'author' => 'Vyasa',
                'country' => 'India',
                'language' => 'Sanskrit',
                'link' => 'https://en.wikipedia.org/wiki/Mahabharata',
                'pages' => 276,
                'title' => 'Mahabharata',
                'year' => -700,
            ],
        ];
    }
}
