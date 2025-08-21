<?php
include 'generate-box.php';
?>

<div class="main flex">
    <div id="sponsored-txt-mobile" class="sponsored-txt flex">
        <a href="https://host2play.pl" class="flex">
            <h2>Powered by</h2>
            <img src="\mvlist\img\host2play\text_dark.png" alt="Text Dark">
        </a>
    </div>
    <div class="category">
        <div class="cat1">
            <div class="players sort flex" onclick="getList('players')">
                <i class="fa-solid fa-user"></i>
                <span>Users</span>
            </div>
            <div class="stars sort flex" onclick="addSoon()">
                <i class="fa-solid fa-star"></i>
                <span>Stars</span>
            </div>
        </div>
        <div class="cat2">
            <div class="title sort flex" onclick="getList('name')">
                <i class="fa-solid fa-font"></i>
                <span>Title</span>
            </div>
            <div class="stars sort flex" onclick="getList('description')">
                <i class="fa-solid fa-circle-info"></i>
                <span>Description</span>
            </div>
        </div>
    </div>
    <div id="boxes" class="boxes flex">
        <?php
        generate_box("https://robohash.org/686158e9edbb4d188e845103b7038e5b?set=set4&bgset=&size=400x400", "testmc.pl", "Lorem Ipsum Dolor Sit Amet", "2/1000", "2/10", "1.12.2-1.20.1", "true");
        generate_box("https://robohash.org/6c565971bb3dd159fa5442f51944e0dd?set=set1&bgset=&size=400x400", "szkolamc.eu", "Lorem Ipsum Dolor Sit Amet", "100/1000", "8/10", "1.8-1.20.1", "true");
        ?>
    </div>
    <div class="sponsored-banner flex">
        <a href="https://host2play.com" class="flex">
            <img src="/mvlist/img/host2play/banner_light.png" alt="sponsored baner">
        </a>
    </div>
    <div class="footer">
        <h3>&copy; Copyright 2024 - MVList not affliated by Mojang - All Rights Reserved</h3>
    </div>
</div>