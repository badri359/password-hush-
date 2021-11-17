<?php
$hash = [ //sebuah nama variabel array untuk menampung nilai cost nya
    'cost' => 10, //parameter untuk menentukan banyaknya hash dilakukan
];

echo password_hash("ahmad nur badri", PASSWORD_DEFAULT, $hash); // untuk melakukan hashing dengan password dan menggunakan algoritma BCRYPT