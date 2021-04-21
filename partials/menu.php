<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<header>

    <a  href="#main-menu" id="main-menu-toggle" class="menu-toggle" aria-label="Open main menu">
        <span class="sr-only">Open main menu</span>
        <span class="fa fa-bars" aria-hidden="true"></span>
    </a>

    <!-- <h1 class="logo">hamburgers</h1> -->

    <nav id="main-menu" class="main-menu" aria-label="Main menu">
        <a href="#main-menu-toggle" (click)="closeNav($event)" id="main-menu-close" class="menu-close" aria-label="Close main menu">
            <span class="sr-only">Close main menu</span>
            <span class="fa fa-close" aria-hidden="true"></span>
        </a>
        <ul>
            <li><a href="/" class="<?= ($activePage == 'index') ? 'active':''; ?>">About Us</a>
            </li>
            <li><a href='/our-work.php' class="<?= ($activePage == 'our-work') ? 'active':''; ?>">Our Work</a></li>
            <li><a href='/partners.php' class="<?= ($activePage == 'partners') ? 'active':''; ?>">Partners</a></li>
            <li><a href='/events.php' class="<?= ($activePage == 'events') ? 'active':''; ?>">Events/Calendar</a></li>
            <li><a href='/get-involved.php' class="<?= ($activePage == 'get-involved') ? 'active':''; ?>">Get Involved</a></li>
            <li><a href='/donate.php' class="<?= ($activePage == 'donate') ? 'active':''; ?>">Donate</a></li>
            <li><a href='/contact-us.php' class="<?= ($activePage == 'contact-us') ? 'active':''; ?>">Contact Us</a></li>
        </ul>
    </nav>
    <a  href="#main-menu-toggle" class="backdrop" tabindex="-1" aria-hidden="true" hidden></a>
</header>