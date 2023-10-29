<?php

$email = filter_var($_GET['email'], FILTER_SANITIZE_STRING);
$password = filter_var($_GET['password'], FILTER_SANITIZE_STRING);
$domains = [
    'hotmail.com', 'live.com', 'hotmail.ca', 'proton.me', 'bell.ca', 'sasltel.com',
    'sasktel.ca', 'yahoo.ca', 'yahoo.com', 'outlook.com', 'gmail.com', 'shaw.ca',
    'telus.net', 'msn.ca', 'msn.com', 'live.ca', 'outlook.ca'
];

function generate_combinations($email_prefix, $password, $domains, $given_domain) {
    $combinations = [];

    // Generate combinations for each domain
    foreach ($domains as $domain) {
        if ($domain !== $given_domain) {
            $combinations[] = $email_prefix . '@' . $domain . ':' . $password;
        }
    }


    // Add variations of password
$password_variations = [
    // Capitalization variations
    ucfirst($password),
    lcfirst($password),

    // Appending numbers
    '12' . $password,
    '10' . $password,
    '9' . $password,
    '8' . $password,
    '7' . $password,
    '6' . $password,
    '5' . $password,
    '4' . $password,
    '3' . $password,
    '2' . $password,
    '1' . $password,

    // Prepending and appending characters
    $password . '12',
    '!' . $password . '!',
    $password . '?',
    'fuckoff',
    'Fuckyou123',
    'FUCKOFF!@#',
    '$' . $password . '$',
    '@' . $password . '@',
    '&' . $password . '&',
    '#' . $password . '#',
    '~' . $password . '~',
    '+' . $password . '+',
    '^' . $password . '^',
    '%' . $password . '%',
    '-' . $password . '-',
    '_' . $password . '_',
    '=' . $password . '=',
    '.' . $password . '.',
    '>' . $password . '>',
    '<' . $password . '<',
    '!' . $password . '!',
    $password . '?' . $password,
    '$$' . $password . '$$',

    // Appending common passwords and patterns
    $password . '123',
    $password . '*',
    $password . '!',
    $password . '?',
    $password . '$',
    $password . '@',
    $password . '&',
    $password . '#',
    $password . '~',
    $password . '+',
    $password . '^',
    $password . '%',
    $password . '-',
    $password . '.',
    $password . ',',
    $password . ';',
    $password . ':',
    $password . '`',
    $password . '>',
    $password . '<',
    $password . '!',
    $password . '@#$%',
    $password . 'qwerty',
    $password . 'password',
    $password . '1',
    $password . '2',
    $password . '3',
    $password . '4',
    $password . '5',
    $password . '6',
    $password . '7',
    $password . '8',
    $password . '9',
    $password . '11',
    $password . 'fuck',
    $password . '69',
    $password . '654321',
    $password . 'pass',
    $password . 'word',
    $password . '1q2w3',
    $password . '1q2w',
    $password . '1q',
    $password . '12q',
    $password . '123',
    $password . '1234',
    $password . '96',

    // Deleting last digit up to 4 backspaces
    substr($password, 0, -1),
    substr($password, 0, -2),
    substr($password, 0, -3),
    substr($password, 0, -4),

    // Replacing characters with similar ones
    str_replace('a', '4', $password),
    str_replace('e', '3', $password),
    str_replace('i', '1', $password),
    str_replace('o', '0', $password),
    str_replace('s', '5', $password),
    str_replace('b', '8', $password),
    str_replace('t', '7', $password),
    str_replace('g', '9', $password),

    // Reversing the password
    strrev($password),

    // Duplicating and concatenating
    $password . $password,
    $password . '123' . $password,
    $password . $password . '!' . $password . $password,

    // Randomizing characters
    str_shuffle($password),

    // Common keyboard patterns
    'qaz' . $password . 'wsx',
    '1qaz' . $password . '2wsx',
    '1qaz2wsx' . $password . '3edc4rfv',
    'qwerty' . $password . 'asdf',
    'qwer' . $password . 'ty',
    'zaq1' . $password . 'xsw2',
    '1q2w3e' . $password . '4r5t6y',
    'qwe' . $password . 'rty',
    'password' . $password . '123',
    'admin' . $password . '123',
    'iloveyou' . $password . '123',
    'letmein' . $password . '123',
    'welcome' . $password . '123',

    // Date-based patterns
    $password . date('Y'),
    $password . date('y'),
    $password . date('Y') . date('m'),
    $password . date('m') . date('d'),
    $password . date('d') . date('Y'),

    // Personal information
    $password . 'name',
    $password . 'birth',
    $password . 'address',
    $password . 'phone',
    $password . 'nickname',
    $password . 'petname',
    $password . 'school',
    $password . 'hobby',
    $password . 'favorite',
    $password . 'team',

    // Random words and phrases
    $password . 'random',
    $password . 'phrase',
    'random' . $password . 'phrase',
    'this' . $password . 'is' . $password . 'random',
    'password' . $password . 'is' . $password . 'weak',
    'change' . $password . 'me' . $password . 'now',

    // Song and movie references
    $password . 'song',
    $password . 'lyrics',
    $password . 'movie',
    $password . 'character',
    $password . 'quote',
    'password' . $password . 'rockandroll',
    'letit' . $password . 'be',
    'maythe' . $password . 'forcebewithyou',

    // Sequential and repetitive patterns
    $password . $password . $password,
    $password . $password . $password . $password,
    $password . $password . $password . $password . $password,
    $password . $password . $password . $password . $password . $password,
    'abc' . $password . 'def',
    '123' . $password . '456',
    'aaa' . $password . 'bbb',
    'zzz' . $password . 'yyy',
    'abc' . $password . 'cba',
    '123' . $password . '321',
    'aaa' . $password . 'aaa',
    'zzz' . $password . 'zzz',

    // Common phrases and idioms
    'easyas' . $password . '123',
    'strong' . $password . 'password',
    'thequickbrown' . $password . 'fox',
    'password' . $password . 'isweak',
    'safety' . $password . 'first',
    'make' . $password . 'it' . $password . 'count',
    'better' . $password . 'safe' . $password . 'than' . $password . 'sorry',
    'now' . $password . 'ornever',
    'life' . $password . 'is' . $password . 'short',
    'love' . $password . 'yourself',

    // Miscellaneous variations
    $password . '123!',
    $password . '!' . $password . '!',
    $password . '###',
    '123' . $password . '456',
    '111' . $password . '111',
    '99' . $password . '99',
    '000' . $password . '000',
    '##' . $password . '##',
    '***' . $password . '***',
    '!!' . $password . '!!',
    '&&' . $password . '&&',
    '~~' . $password . '~~',
    '--' . $password . '--',
    '__' . $password . '__',
    '**' . $password . '**',
    '^^' . $password . '^^',
    '%%' . $password . '%%',
    '()' . $password . '()',
    '[]' . $password . '[]',
    '{}'. $password . '{}',
    '<>' . $password . '<>',

    // Deleting last digit up to 4 backspaces
    substr($password, 0, -1),
    substr($password, 0, -2),
    substr($password, 0, -3),
    substr($password, 0, -4),

    // Replacing characters with similar ones
    str_replace('a', '4', $password),
    str_replace('e', '3', $password),
    str_replace('i', '1', $password),
    str_replace('o', '0', $password),
    str_replace('s', '5', $password),
    str_replace('b', '8', $password),
    str_replace('t', '7', $password),
    str_replace('g', '9', $password),

    // Reversing the password
    strrev($password),

    // Duplicating and concatenating
    $password . $password,
    $password . '123' . $password,
    $password . $password . '!' . $password . $password,

    // Randomizing characters
    str_shuffle($password),

    // Common keyboard patterns
    'qaz' . $password . 'wsx',
    '1qaz' . $password . '2wsx',
    '1qaz2wsx' . $password . '3edc4rfv',
    'qwerty' . $password . 'asdf',
    'qwer' . $password . 'ty',
    'zaq1' . $password . 'xsw2',
    '1q2w3e' . $password . '4r5t6y',
    'qwe' . $password . 'rty',
    'password' . $password . '123',
    'admin' . $password . '123',
    'iloveyou' . $password . '123',
    'letmein' . $password . '123',
    'welcome' . $password . '123',

    // Date-based patterns
    $password . date('Y'),
    $password . date('y'),
    $password . date('Y') . date('m'),
    $password . date('m') . date('d'),
    $password . date('d') . date('Y'),

    // Personal information
    $password . 'name',
    $password . 'birth',
    $password . 'address',
    $password . 'phone',
    $password . 'nickname',
    $password . 'petname',
    $password . 'school',
    $password . 'hobby',
    $password . 'favorite',
    $password . 'team',

    // Random words and phrases
    $password . 'random',
    $password . 'phrase',
    'random' . $password . 'phrase',
    'this' . $password . 'is' . $password . 'random',
    'password' . $password . 'is' . $password . 'weak',
    'change' . $password . 'me' . $password . 'now',

    // Song and movie references
    $password . 'song',
    $password . 'lyrics',
    $password . 'movie',
    $password . 'character',
    $password . 'quote',
    'password' . $password . 'rockandroll',
    'letit' . $password . 'be',
    'maythe' . $password . 'forcebewithyou',

    // Sequential and repetitive patterns
    $password . $password . $password,
    $password . $password . $password . $password,
    $password . $password . $password . $password . $password,
    $password . $password . $password . $password . $password . $password,
    'abc' . $password . 'def',
    '123' . $password . '456',
    'aaa' . $password . 'bbb',
    'zzz' . $password . 'yyy',
    'abc' . $password . 'cba',
    '123' . $password . '321',
    'aaa' . $password . 'aaa',
    'zzz' . $password . 'zzz',

    // Common password mistakes and variations
    $password . '123!',
    '!' . $password . '!',
    $password . 'abc',
    'abc' . $password . 'abc',
    'qwe' . $password . 'rty',
    $password . 'qwe',
    'qwe' . $password . 'qwe',
    $password . '123456',
    '654321' . $password . '654321',
    'password123' . $password . 'password123',
    $password . 'pass',
    'pass' . $password . 'pass',
    $password . 'word',
    'word' . $password . 'word',
    $password . 'secret',
    'secret' . $password . 'secret',
    $password . 'login',
    'login' . $password . 'login',
    $password . 'test',
    'test' . $password . 'test',
    $password . '12345678',
    '87654321' . $password . '87654321',
    '1234' . $password . '5678',
    'qwerty' . $password . 'uiop',
    'asdf' . $password . 'jkl;',
    'zxcv' . $password . 'bnm,',
    $password . 'qazwsx',
    'qazwsx' . $password . 'edcrfv',
    '1qaz' . $password . '2wsx',
    '1qaz2wsx' . $password . '3edc',
    'zaq1' . $password . 'xsw2',
    'qwe' . $password . 'asd',
    'asd' . $password . 'zxc',
    $password . '1234',
    '1234' . $password . '5678',
    '0000' . $password . '9999',
    $password . 'abcd',
    'abcd' . $password . 'abcd',

    // Deleting last digit up to 4 backspaces
    substr($password, 0, -1),
    substr($password, 0, -2),
    substr($password, 0, -3),
    substr($password, 0, -4),
];

// Shuffle the password variations
shuffle($password_variations);

// Select the first 1000 variations
$password_variations = array_slice($password_variations, 0, 1000);

// Output the password variations
foreach ($password_variations as $variation) {
        // Add variations with non-given domains
        foreach ($domains as $domain) {
            if ($domain !== $given_domain) {
                $combinations[] = $email_prefix . '@' . $domain . ':' . $variation;
            }
        }
    }

    return $combinations;
}

function save_combinations($combinations, $email_prefix) {
    $all_filename = '../../../Database/' . $email_prefix . '_all_domains.txt';
    $all_file_contents = implode("\n", $combinations);
    file_put_contents($all_filename, $all_file_contents);
}

$email_parts = explode('@', $email);
$email_prefix = $email_parts[0];
$given_domain = $email_parts[1];

$combinations = generate_combinations($email_prefix, $password, $domains, $given_domain);

save_combinations($combinations, $email_prefix);
?>