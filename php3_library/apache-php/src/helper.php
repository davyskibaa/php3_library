<?php
    const
        host = 'db',
        users = 'users',
        name = 'name',
        dbUser = 'user',
        password = 'password',
        db = 'appDB',
        catalog = 'catalog',
        id = 'ID',
        author = 'author',
        book = 'book';

    function openMysqli(): mysqli {
        return new mysqli(
        host, dbUser, password, db
    ); }
?>
