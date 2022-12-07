<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../public/admin.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>
        <div class="app">
                <header>
                        <ul class="navnar">
                                <li><a class="navbar__link " href="../manager.html">
                                                <span class="navnar_icon"><i class="fa-solid
                                fa-house"></i></span>
                                                <span class="navnar_title">Home</span>
                                        </a></li>
                                <li><a class="navbar__link" href="./index.php?act=user">
                                                <span class="navnar_icon"><i class="fa-solid
                                fa-user"></i></span>
                                                <span class="navnar_title">User</span>
                                        </a></li>
                                <li><a class="navbar__link " href="./index.php?act=room">
                                                <span class="navnar_icon"><i class="fa-solid
                                fa-briefcase"></i></span>
                                                <span class="navnar_title">Room</span>
                                        </a></li>
                                <li><a class="navbar__link" href="./index.php?act=cate">
                                                <span class="navnar_icon"><i class="fa-solid
                                fa-list"></i></span>
                                                <span class="navnar_title">Kind of room</span>
                                        </a></li>
                                <li><a class="navbar__link" href="./index.php?act=pay">
                                                <span class="navnar_icon"><i class="fa-solid
                                fa-book"></i></span>
                                                <span class="navnar_title">Booked</span>
                                        </a></li>
                                <li><a class="navbar__link" href="./index.php?act=comment">
                                                <span class="navnar_icon"><i class="fa-solid
                                fa-comment"></i></span>
                                                <span class="navnar_title">Comment</span>
                                        </a></li>
                                <li><a class="navbar__link" href="./index.php?act=staff">
                                                <span class="navnar_icon"><i class="fa-solid
                                fa-user"></i></span>
                                                <span class="navnar_title">Staff</span>
                                        </a></li>
                                <li><a class="navbar__link" href="./index.php?act=image">
                                                <span class="navnar_icon"><i class="fa-solid fa-image"></i></span>
                                                <span class="navnar_title">Image Room</span>
                                        </a></li>
                                <li><a class="navbar__link" href="./index.php?act=statistical">
                                                <span class="navnar_icon"><i class="fa-solid fa-chart-simple"></i></span>
                                                <span class="navnar_title">Statistical</span>
                                        </a></li>
                                <li><a class="navbar__link" href="../view/model.php?act=home">
                                                <span class="navnar_icon"><i class="fa-solid
                                fa-right-from-bracket"></i></span>
                                                <span class="navnar_title">Sign Out</span>
                                        </a></li>
                        </ul>
                </header>