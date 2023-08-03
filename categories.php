<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.crumina.net/html-olympus/02-ProfilePage.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jul 2023 01:25:13 GMT -->

<head>

    <title>Profile Page</title>

    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

<!-- Theme Font -->
<link rel="preload" type="text/css" href="./assets/css/theme-font.min.css" as="style">

<!-- Bootstrap CSS -->
<?php include('./cdn.php') ?>

<!-- Main Styles CSS -->
<link rel="stylesheet" type="text/css" href="./assets/css/main.min.css">

<link rel="stylesheet" href="./assets/css/responsive.css">

<link rel="stylesheet" href="./assets/css/lib.css">

    <!-- Main RTL CSS -->
    <!-- <link rel="stylesheet" type="text/css" href="css/rtl.min.css"> -->

    <!-- WebP Safari Support -->
    <script src="../../unpkg.com/webp-hero%400.0.0-dev.27/dist-cjs/polyfills.js"></script>
    <script src="../../unpkg.com/webp-hero%400.0.0-dev.27/dist-cjs/webp-hero.bundle.js"></script>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        .active {
            background-color: white !important;
            color: white;
        }
    </style>

</head>

<body class="page-has-left-panels page-has-right-panels">


    <!-- Preloader -->

    <div id="hellopreloader">
        <div class="preloader">
            <svg width="45" height="45" stroke="#fff">
                <g fill="none" fill-rule="evenodd" stroke-width="2" transform="translate(1 1)">
                    <circle cx="22" cy="22" r="6" stroke="none">
                        <animate attributeName="r" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22" />
                        <animate attributeName="stroke-opacity" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0" />
                        <animate attributeName="stroke-width" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0" />
                    </circle>
                    <circle cx="22" cy="22" r="6" stroke="none">
                        <animate attributeName="r" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22" />
                        <animate attributeName="stroke-opacity" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0" />
                        <animate attributeName="stroke-width" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0" />
                    </circle>
                    <circle cx="22" cy="22" r="8">
                        <animate attributeName="r" begin="0s" calcMode="linear" dur="1.5s" repeatCount="indefinite" values="6;1;2;3;4;5;6" />
                    </circle>
                </g>
            </svg>

            <div class="text">Loading ...</div>
        </div>
    </div>

    <!-- ... end Preloader -->


    <?php include('./components/sidebar.php') ?>



    <!-- Fixed Sidebar Left -->

    <div class="fixed-sidebar left fixed-sidebar-responsive">

        <div class="fixed-sidebar-left sidebar--small" id="sidebar-left-responsive">
            <a href="#" class="logo js-sidebar-open">
                <img loading="lazy" src="./assets/img/logo.webp" alt="Olympus" width="34" height="34">
            </a>

        </div>

        <div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1-responsive">
            <a href="#" class="logo">
                <div class="img-wrap">
                    <img loading="lazy" src="./assets/img/logo.webp" alt="Olympus" width="34" height="34">
                </div>
                <div class="title-block">
                    <h6 class="logo-title">olympus</h6>
                </div>
            </a>

            <div class="mCustomScrollbar" data-mcs-theme="dark">

                <div class="control-block">
                    <div class="author-page author vcard inline-items">
                        <div class="author-thumb">
                            <img alt="author" src="./assets/img/author-page.webp" width="36" height="36" class="avatar">
                            <span class="icon-status online"></span>
                        </div>
                        <a href="02-ProfilePage.html" class="author-name fn">
                            <div class="author-title">
                                James Spiegel
                                <svg class="olymp-dropdown-arrow-icon">
                                    <use xlink:href="#olymp-dropdown-arrow-icon"></use>
                                </svg>
                            </div>
                            <span class="author-subtitle">SPACE COWBOY</span>
                        </a>
                    </div>
                </div>

                <div class="ui-block-title ui-block-title-small">
                    <h6 class="title">MAIN SECTIONS</h6>
                </div>

                <ul class="left-menu">
                    <li>
                        <a href="#" class="js-sidebar-open">
                            <svg class="olymp-close-icon left-menu-icon">
                                <use xlink:href="#olymp-close-icon"></use>
                            </svg>
                            <span class="left-menu-title">Collapse Menu</span>
                        </a>
                    </li>
                    <li>
                        <a href="mobile-index.html">
                            <svg class="olymp-newsfeed-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="NEWSFEED">
                                <use xlink:href="#olymp-newsfeed-icon"></use>
                            </svg>
                            <span class="left-menu-title">Newsfeed</span>
                        </a>
                    </li>
                    <li>
                        <a href="Mobile-28-YourAccount-PersonalInformation.html">
                            <svg class="olymp-star-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="FAV PAGE">
                                <use xlink:href="#olymp-star-icon"></use>
                            </svg>
                            <span class="left-menu-title">Fav Pages Feed</span>
                        </a>
                    </li>
                    <li>
                        <a href="mobile-29-YourAccount-AccountSettings.html">
                            <svg class="olymp-happy-faces-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="FRIEND GROUPS">
                                <use xlink:href="#olymp-happy-faces-icon"></use>
                            </svg>
                            <span class="left-menu-title">Friend Groups</span>
                        </a>
                    </li>
                    <li>
                        <a href="Mobile-30-YourAccount-ChangePassword.html">
                            <svg class="olymp-headphones-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="MUSIC&PLAYLISTS">
                                <use xlink:href="#olymp-headphones-icon"></use>
                            </svg>
                            <span class="left-menu-title">Music & Playlists</span>
                        </a>
                    </li>
                    <li>
                        <a href="Mobile-31-YourAccount-HobbiesAndInterests.html">
                            <svg class="olymp-weather-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="WEATHER APP">
                                <use xlink:href="#olymp-weather-icon"></use>
                            </svg>
                            <span class="left-menu-title">Weather App</span>
                        </a>
                    </li>
                    <li>
                        <a href="Mobile-32-YourAccount-EducationAndEmployement.html">
                            <svg class="olymp-calendar-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="CALENDAR AND EVENTS">
                                <use xlink:href="#olymp-calendar-icon"></use>
                            </svg>
                            <span class="left-menu-title">Calendar and Events</span>
                        </a>
                    </li>
                    <li>
                        <a href="Mobile-33-YourAccount-Notifications.html">
                            <svg class="olymp-badge-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Community Badges">
                                <use xlink:href="#olymp-badge-icon"></use>
                            </svg>
                            <span class="left-menu-title">Community Badges</span>
                        </a>
                    </li>
                    <li>
                        <a href="Mobile-34-YourAccount-ChatMessages.html">
                            <svg class="olymp-cupcake-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Friends Birthdays">
                                <use xlink:href="#olymp-cupcake-icon"></use>
                            </svg>
                            <span class="left-menu-title">Friends Birthdays</span>
                        </a>
                    </li>
                    <li>
                        <a href="Mobile-35-YourAccount-FriendsRequests.html">
                            <svg class="olymp-stats-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Account Stats">
                                <use xlink:href="#olymp-stats-icon"></use>
                            </svg>
                            <span class="left-menu-title">Account Stats</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg class="olymp-manage-widgets-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Manage Widgets">
                                <use xlink:href="#olymp-manage-widgets-icon"></use>
                            </svg>
                            <span class="left-menu-title">Manage Widgets</span>
                        </a>
                    </li>
                </ul>

                <div class="ui-block-title ui-block-title-small">
                    <h6 class="title">YOUR ACCOUNT</h6>
                </div>

                <ul class="account-settings">
                    <li>
                        <a href="#">

                            <svg class="olymp-menu-icon">
                                <use xlink:href="#olymp-menu-icon"></use>
                            </svg>

                            <span>Profile Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg class="olymp-star-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="FAV PAGE">
                                <use xlink:href="#olymp-star-icon"></use>
                            </svg>

                            <span>Create Fav Page</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg class="olymp-logout-icon">
                                <use xlink:href="#olymp-logout-icon"></use>
                            </svg>

                            <span>Log Out</span>
                        </a>
                    </li>
                </ul>

                <div class="ui-block-title ui-block-title-small">
                    <h6 class="title">About Olympus</h6>
                </div>

                <ul class="about-olympus">
                    <li>
                        <a href="#">
                            <span>Terms and Conditions</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>FAQs</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>Careers</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>Contact</span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>

    <!-- ... end Fixed Sidebar Left -->







    <!-- Header-BP -->

    <header class="header" id="site-header">

        <div class="page-title">
            <h6>Profile Page</h6>
        </div>

        <div class="header-content-wrapper">
            <form class="search-bar w-search notification-list friend-requests">
                <div class="form-group with-button">
                    <input class="form-control js-user-search" placeholder="Search here people or pages..." type="text">
                    <button>
                        <svg class="olymp-magnifying-glass-icon">
                            <use xlink:href="#olymp-magnifying-glass-icon"></use>
                        </svg>
                    </button>
                </div>
            </form>

            <a href="#" class="link-find-friend">Find Friends</a>

            <div class="control-block">

                <div class="control-icon more has-items">
                    <svg class="olymp-happy-face-icon">
                        <use xlink:href="#olymp-happy-face-icon"></use>
                    </svg>
                    <div class="label-avatar bg-blue">6</div>

                    <div class="more-dropdown more-with-triangle triangle-top-center">
                        <div class="ui-block-title ui-block-title-small">
                            <h6 class="title">FRIEND REQUESTS</h6>
                            <a href="#">Find Friends</a>
                            <a href="#">Settings</a>
                        </div>

                        <div class="mCustomScrollbar" data-mcs-theme="dark">
                            <ul class="notification-list friend-requests">
                                <li>
                                    <div class="author-thumb">
                                        <img loading="lazy" src="./assets/img/avatar55-sm.webp" alt="author" width="34" height="34">
                                    </div>
                                    <div class="notification-event">
                                        <a href="#" class="h6 notification-friend">Tamara Romanoff</a>
                                        <span class="chat-message-item">Mutual Friend: Sarah Hetfield</span>
                                    </div>
                                    <span class="notification-icon">
                                        <a href="#" class="accept-request">
                                            <span class="icon-add without-text">
                                                <svg class="olymp-happy-face-icon">
                                                    <use xlink:href="#olymp-happy-face-icon"></use>
                                                </svg>
                                            </span>
                                        </a>

                                        <a href="#" class="accept-request request-del">
                                            <span class="icon-minus">
                                                <svg class="olymp-happy-face-icon">
                                                    <use xlink:href="#olymp-happy-face-icon"></use>
                                                </svg>
                                            </span>
                                        </a>

                                    </span>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon">
                                            <use xlink:href="#olymp-three-dots-icon"></use>
                                        </svg>
                                    </div>
                                </li>

                                <li>
                                    <div class="author-thumb">
                                        <img loading="lazy" src="./assets/img/avatar56-sm.webp" alt="author" width="34" height="34">
                                    </div>
                                    <div class="notification-event">
                                        <a href="#" class="h6 notification-friend">Tony Stevens</a>
                                        <span class="chat-message-item">4 Friends in Common</span>
                                    </div>
                                    <span class="notification-icon">
                                        <a href="#" class="accept-request">
                                            <span class="icon-add without-text">
                                                <svg class="olymp-happy-face-icon">
                                                    <use xlink:href="#olymp-happy-face-icon"></use>
                                                </svg>
                                            </span>
                                        </a>

                                        <a href="#" class="accept-request request-del">
                                            <span class="icon-minus">
                                                <svg class="olymp-happy-face-icon">
                                                    <use xlink:href="#olymp-happy-face-icon"></use>
                                                </svg>
                                            </span>
                                        </a>

                                    </span>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon">
                                            <use xlink:href="#olymp-three-dots-icon"></use>
                                        </svg>
                                    </div>
                                </li>

                                <li class="accepted">
                                    <div class="author-thumb">
                                        <img loading="lazy" src="./assets/img/avatar57-sm.webp" alt="author" width="34" height="34">
                                    </div>
                                    <div class="notification-event">
                                        You and
                                        <a href="#" class="h6 notification-friend">Mary Jane Stark</a> just became friends. Write on
                                        <a href="#" class="notification-link">her wall</a>.
                                    </div>
                                    <span class="notification-icon">
                                        <svg class="olymp-happy-face-icon">
                                            <use xlink:href="#olymp-happy-face-icon"></use>
                                        </svg>
                                    </span>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon">
                                            <use xlink:href="#olymp-three-dots-icon"></use>
                                        </svg>
                                        <svg class="olymp-little-delete">
                                            <use xlink:href="#olymp-little-delete"></use>
                                        </svg>
                                    </div>
                                </li>

                                <li>
                                    <div class="author-thumb">
                                        <img loading="lazy" src="./assets/img/avatar58-sm.webp" alt="author" width="34" height="34">
                                    </div>
                                    <div class="notification-event">
                                        <a href="#" class="h6 notification-friend">Stagg Clothing</a>
                                        <span class="chat-message-item">9 Friends in Common</span>
                                    </div>
                                    <span class="notification-icon">
                                        <a href="#" class="accept-request">
                                            <span class="icon-add without-text">
                                                <svg class="olymp-happy-face-icon">
                                                    <use xlink:href="#olymp-happy-face-icon"></use>
                                                </svg>
                                            </span>
                                        </a>

                                        <a href="#" class="accept-request request-del">
                                            <span class="icon-minus">
                                                <svg class="olymp-happy-face-icon">
                                                    <use xlink:href="#olymp-happy-face-icon"></use>
                                                </svg>
                                            </span>
                                        </a>

                                    </span>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon">
                                            <use xlink:href="#olymp-three-dots-icon"></use>
                                        </svg>
                                    </div>
                                </li>

                            </ul>
                        </div>

                        <a href="#" class="view-all bg-blue">Check all your Events</a>
                    </div>
                </div>

                <div class="control-icon more has-items">
                    <svg class="olymp-chat---messages-icon">
                        <use xlink:href="#olymp-chat---messages-icon"></use>
                    </svg>
                    <div class="label-avatar bg-purple">2</div>

                    <div class="more-dropdown more-with-triangle triangle-top-center">
                        <div class="ui-block-title ui-block-title-small">
                            <h6 class="title">Chat / Messages</h6>
                            <a href="#">Mark all as read</a>
                            <a href="#">Settings</a>
                        </div>

                        <div class="mCustomScrollbar" data-mcs-theme="dark">
                            <ul class="notification-list chat-message">
                                <li class="message-unread">
                                    <div class="author-thumb">
                                        <img loading="lazy" src="./assets/img/avatar59-sm.webp" alt="author" width="34" height="34">
                                    </div>
                                    <div class="notification-event">
                                        <a href="#" class="h6 notification-friend">Diana Jameson</a>
                                        <span class="chat-message-item">Hi James! It’s Diana, I just wanted to let you know that we have to reschedule...</span>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
                                    </div>
                                    <span class="notification-icon">
                                        <svg class="olymp-chat---messages-icon">
                                            <use xlink:href="#olymp-chat---messages-icon"></use>
                                        </svg>
                                    </span>
                                    <div class="more">
                                        <svg class="olymp-three-dots-icon">
                                            <use xlink:href="#olymp-three-dots-icon"></use>
                                        </svg>
                                    </div>
                                </li>

                                <li>
                                    <div class="author-thumb">
                                        <img loading="lazy" src="./assets/img/avatar60-sm.webp" alt="author" width="34" height="34">
                                    </div>
                                    <div class="notification-event">
                                        <a href="#" class="h6 notification-friend">Jake Parker</a>
                                        <span class="chat-message-item">Great, I’ll see you tomorrow!.</span>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
                                    </div>
                                    <span class="notification-icon">
                                        <svg class="olymp-chat---messages-icon">
                                            <use xlink:href="#olymp-chat---messages-icon"></use>
                                        </svg>
                                    </span>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon">
                                            <use xlink:href="#olymp-three-dots-icon"></use>
                                        </svg>
                                    </div>
                                </li>
                                <li>
                                    <div class="author-thumb">
                                        <img loading="lazy" src="./assets/img/avatar61-sm.webp" alt="author" width="34" height="34">
                                    </div>
                                    <div class="notification-event">
                                        <a href="#" class="h6 notification-friend">Elaine Dreyfuss</a>
                                        <span class="chat-message-item">We’ll have to check that at the office and see if the client is on board with...</span>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 9:56pm</time></span>
                                    </div>
                                    <span class="notification-icon">
                                        <svg class="olymp-chat---messages-icon">
                                            <use xlink:href="#olymp-chat---messages-icon"></use>
                                        </svg>
                                    </span>
                                    <div class="more">
                                        <svg class="olymp-three-dots-icon">
                                            <use xlink:href="#olymp-three-dots-icon"></use>
                                        </svg>
                                    </div>
                                </li>

                                <li class="chat-group">
                                    <div class="author-thumb">
                                        <img loading="lazy" src="./assets/img/avatar11-sm.webp" alt="author" width="16" height="16">
                                        <img loading="lazy" src="./assets/img/avatar12-sm.webp" alt="author" width="16" height="16">
                                        <img loading="lazy" src="./assets/img/avatar13-sm.webp" alt="author" width="16" height="16">
                                        <img loading="lazy" src="./assets/img/avatar10-sm.webp" alt="author" width="36" height="36">
                                    </div>
                                    <div class="notification-event">
                                        <a href="#" class="h6 notification-friend">You, Faye, Ed &amp; Jet +3</a>
                                        <span class="last-message-author">Ed:</span>
                                        <span class="chat-message-item">Yeah! Seems fine by me!</span>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 16th at 10:23am</time></span>
                                    </div>
                                    <span class="notification-icon">
                                        <svg class="olymp-chat---messages-icon">
                                            <use xlink:href="#olymp-chat---messages-icon"></use>
                                        </svg>
                                    </span>
                                    <div class="more">
                                        <svg class="olymp-three-dots-icon">
                                            <use xlink:href="#olymp-three-dots-icon"></use>
                                        </svg>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <a href="#" class="view-all bg-purple">View All Messages</a>
                    </div>
                </div>

                <div class="control-icon more has-items">
                    <svg class="olymp-thunder-icon">
                        <use xlink:href="#olymp-thunder-icon"></use>
                    </svg>

                    <div class="label-avatar bg-primary">8</div>

                    <div class="more-dropdown more-with-triangle triangle-top-center">
                        <div class="ui-block-title ui-block-title-small">
                            <h6 class="title">Notifications</h6>
                            <a href="#">Mark all as read</a>
                            <a href="#">Settings</a>
                        </div>

                        <div class="mCustomScrollbar" data-mcs-theme="dark">
                            <ul class="notification-list">
                                <li>
                                    <div class="author-thumb">
                                        <img loading="lazy" src="./assets/img/avatar62-sm.webp" width="34" height="34" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <div>
                                            <a href="#" class="h6 notification-friend">Mathilda Brinker</a> commented on your new
                                            <a href="#" class="notification-link">profile status</a>.
                                        </div>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
                                    </div>
                                    <span class="notification-icon">
                                        <svg class="olymp-comments-post-icon">
                                            <use xlink:href="#olymp-comments-post-icon"></use>
                                        </svg>
                                    </span>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon">
                                            <use xlink:href="#olymp-three-dots-icon"></use>
                                        </svg>
                                        <svg class="olymp-little-delete">
                                            <use xlink:href="#olymp-little-delete"></use>
                                        </svg>
                                    </div>
                                </li>

                                <li class="un-read">
                                    <div class="author-thumb">
                                        <img loading="lazy" src="./assets/img/avatar63-sm.webp" alt="author" width="34" height="34">
                                    </div>
                                    <div class="notification-event">
                                        <div>You and
                                            <a href="#" class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on
                                            <a href="#" class="notification-link">his wall</a>.
                                        </div>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time></span>
                                    </div>
                                    <span class="notification-icon">
                                        <svg class="olymp-happy-face-icon">
                                            <use xlink:href="#olymp-happy-face-icon"></use>
                                        </svg>
                                    </span>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon">
                                            <use xlink:href="#olymp-three-dots-icon"></use>
                                        </svg>
                                        <svg class="olymp-little-delete">
                                            <use xlink:href="#olymp-little-delete"></use>
                                        </svg>
                                    </div>
                                </li>

                                <li class="with-comment-photo-wrap">
                                    <div class="with-comment-photo">
                                        <div class="author-thumb">
                                            <img loading="lazy" src="./assets/img/avatar64-sm.webp" width="34" height="34" alt="author">
                                        </div>
                                        <div class="notification-event">
                                            <div>
                                                <a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your
                                                <a href="#" class="notification-link">photo</a>.
                                            </div>
                                            <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
                                        </div>
                                        <span class="notification-icon"> <svg class="olymp-comments-post-icon">
                                                <use xlink:href="#olymp-comments-post-icon"></use>
                                            </svg> </span>
                                    </div>
                                    <div class="comment-photo">
                                        <img loading="lazy" src="./assets/img/comment-photo1.webp" alt="photo" width="40" height="40">
                                        <span>“She looks incredible in that outfit! We should see each...”</span>
                                    </div>
                                    <div class="more">
                                        <svg class="olymp-three-dots-icon">
                                            <use xlink:href="#olymp-three-dots-icon"></use>
                                        </svg>
                                        <svg class="olymp-little-delete">
                                            <use xlink:href="#olymp-little-delete"></use>
                                        </svg>
                                    </div>
                                </li>

                                <li>
                                    <div class="author-thumb">
                                        <img loading="lazy" src="./assets/img/avatar65-sm.webp" alt="author" width="34" height="34">
                                    </div>
                                    <div class="notification-event">
                                        <div>
                                            <a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in
                                            <a href="#" class="notification-link">Gotham Bar</a>.
                                        </div>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
                                    </div>
                                    <span class="notification-icon">
                                        <svg class="olymp-happy-face-icon">
                                            <use xlink:href="#olymp-happy-face-icon"></use>
                                        </svg>
                                    </span>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon">
                                            <use xlink:href="#olymp-three-dots-icon"></use>
                                        </svg>
                                        <svg class="olymp-little-delete">
                                            <use xlink:href="#olymp-little-delete"></use>
                                        </svg>
                                    </div>
                                </li>

                                <li>
                                    <div class="author-thumb">
                                        <img loading="lazy" src="./assets/img/avatar66-sm.webp" alt="author" width="34" height="34">
                                    </div>
                                    <div class="notification-event">
                                        <div>
                                            <a href="#" class="h6 notification-friend">James Summers</a> commented on your new
                                            <a href="#" class="notification-link">profile status</a>.
                                        </div>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
                                    </div>
                                    <span class="notification-icon">
                                        <svg class="olymp-heart-icon">
                                            <use xlink:href="#olymp-heart-icon"></use>
                                        </svg>
                                    </span>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon">
                                            <use xlink:href="#olymp-three-dots-icon"></use>
                                        </svg>
                                        <svg class="olymp-little-delete">
                                            <use xlink:href="#olymp-little-delete"></use>
                                        </svg>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <a href="#" class="view-all bg-primary">View All Notifications</a>
                    </div>
                </div>

                <div class="author-page author vcard inline-items more">
                    <div class="author-thumb">
                        <img alt="author" src="./assets/img/author-page.webp" width="36" height="36" class="avatar">
                        <span class="icon-status online"></span>
                        <div class="more-dropdown more-with-triangle">
                            <div class="mCustomScrollbar" data-mcs-theme="dark">
                                <div class="ui-block-title ui-block-title-small">
                                    <h6 class="title">Your Account</h6>
                                </div>

                                <ul class="account-settings">
                                    <li>
                                        <a href="29-YourAccount-AccountSettings.html">

                                            <svg class="olymp-menu-icon">
                                                <use xlink:href="#olymp-menu-icon"></use>
                                            </svg>

                                            <span>Profile Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="36-FavPage-SettingsAndCreatePopup.html">
                                            <svg class="olymp-star-icon left-menu-icon" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="FAV PAGE">
                                                <use xlink:href="#olymp-star-icon"></use>
                                            </svg>

                                            <span>Create Fav Page</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg class="olymp-logout-icon">
                                                <use xlink:href="#olymp-logout-icon"></use>
                                            </svg>

                                            <span>Log Out</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="ui-block-title ui-block-title-small">
                                    <h6 class="title">Chat Settings</h6>
                                </div>

                                <ul class="chat-settings">
                                    <li>
                                        <a href="#">
                                            <span class="icon-status online"></span>
                                            <span>Online</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon-status away"></span>
                                            <span>Away</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon-status disconected"></span>
                                            <span>Disconnected</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <span class="icon-status status-invisible"></span>
                                            <span>Invisible</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="ui-block-title ui-block-title-small">
                                    <h6 class="title">Custom Status</h6>
                                </div>

                                <form class="form-group with-button custom-status">
                                    <input class="form-control" placeholder="" type="text" value="Space Cowboy">

                                    <button class="bg-purple">
                                        <svg class="olymp-check-icon">
                                            <use xlink:href="#olymp-check-icon"></use>
                                        </svg>
                                    </button>
                                </form>

                                <div class="ui-block-title ui-block-title-small">
                                    <h6 class="title">About Olympus</h6>
                                </div>

                                <ul>
                                    <li>
                                        <a href="#">
                                            <span>Terms and Conditions</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>FAQs</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Careers</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Contact</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <a href="02-ProfilePage.html" class="author-name fn">
                        <div class="author-title">
                            James Spiegel
                            <svg class="olymp-dropdown-arrow-icon">
                                <use xlink:href="#olymp-dropdown-arrow-icon"></use>
                            </svg>
                        </div>
                        <span class="author-subtitle">SPACE COWBOY</span>
                    </a>
                </div>

            </div>
        </div>

    </header>

    <!-- ... end Header-BP -->


    <!-- Responsive Header-BP -->

    <header class="header header-responsive" id="site-header-responsive">

        <div class="header-content-wrapper">
            <ul class="nav nav-tabs mobile-notification-tabs" id="mobile-notification-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="request-tab" data-bs-toggle="tab" href="#request" role="tab" aria-controls="request" aria-selected="false">
                        <div class="control-icon has-items">
                            <svg class="olymp-happy-face-icon">
                                <use xlink:href="#olymp-happy-face-icon"></use>
                            </svg>
                            <div class="label-avatar bg-blue">6</div>
                        </div>
                    </a>
                </li>

                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="chat-tab" data-bs-toggle="tab" href="#chat" role="tab" aria-controls="chat" aria-selected="false">
                        <div class="control-icon has-items">
                            <svg class="olymp-chat---messages-icon">
                                <use xlink:href="#olymp-chat---messages-icon"></use>
                            </svg>
                            <div class="label-avatar bg-purple">2</div>
                        </div>
                    </a>
                </li>

                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="notification-tab" data-bs-toggle="tab" href="#notification" role="tab" aria-controls="notification" aria-selected="false">
                        <div class="control-icon has-items">
                            <svg class="olymp-thunder-icon">
                                <use xlink:href="#olymp-thunder-icon"></use>
                            </svg>
                            <div class="label-avatar bg-primary">8</div>
                        </div>
                    </a>
                </li>

                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="search-tab" data-bs-toggle="tab" href="#search" role="tab" aria-controls="search" aria-selected="false">
                        <svg class="olymp-magnifying-glass-icon">
                            <use xlink:href="#olymp-magnifying-glass-icon"></use>
                        </svg>
                        <svg class="olymp-close-icon">
                            <use xlink:href="#olymp-close-icon"></use>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Tab panes -->
        <div class="tab-content tab-content-responsive">

            <div class="tab-pane fade" id="request" role="tabpanel" aria-labelledby="request-tab">

                <div class="mCustomScrollbar" data-mcs-theme="dark">
                    <div class="ui-block-title ui-block-title-small">
                        <h6 class="title">FRIEND REQUESTS</h6>
                        <a href="#">Find Friends</a>
                        <a href="#">Settings</a>
                    </div>
                    <ul class="notification-list friend-requests">
                        <li>
                            <div class="author-thumb">
                                <img loading="lazy" src="./assets/img/avatar55-sm.webp" alt="author" width="34" height="34">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">Tamara Romanoff</a>
                                <span class="chat-message-item">Mutual Friend: Sarah Hetfield</span>
                            </div>
                            <span class="notification-icon">
                                <a href="#" class="accept-request">
                                    <span class="icon-add without-text">
                                        <svg class="olymp-happy-face-icon">
                                            <use xlink:href="#olymp-happy-face-icon"></use>
                                        </svg>
                                    </span>
                                </a>

                                <a href="#" class="accept-request request-del">
                                    <span class="icon-minus">
                                        <svg class="olymp-happy-face-icon">
                                            <use xlink:href="#olymp-happy-face-icon"></use>
                                        </svg>
                                    </span>
                                </a>

                            </span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon">
                                    <use xlink:href="#olymp-three-dots-icon"></use>
                                </svg>
                            </div>
                        </li>
                        <li>
                            <div class="author-thumb">
                                <img loading="lazy" src="./assets/img/avatar56-sm.webp" alt="author" width="34" height="34">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">Tony Stevens</a>
                                <span class="chat-message-item">4 Friends in Common</span>
                            </div>
                            <span class="notification-icon">
                                <a href="#" class="accept-request">
                                    <span class="icon-add without-text">
                                        <svg class="olymp-happy-face-icon">
                                            <use xlink:href="#olymp-happy-face-icon"></use>
                                        </svg>
                                    </span>
                                </a>

                                <a href="#" class="accept-request request-del">
                                    <span class="icon-minus">
                                        <svg class="olymp-happy-face-icon">
                                            <use xlink:href="#olymp-happy-face-icon"></use>
                                        </svg>
                                    </span>
                                </a>

                            </span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon">
                                    <use xlink:href="#olymp-three-dots-icon"></use>
                                </svg>
                            </div>
                        </li>
                        <li class="accepted">
                            <div class="author-thumb">
                                <img loading="lazy" src="./assets/img/avatar57-sm.webp" alt="author" width="34" height="34">
                            </div>
                            <div class="notification-event">
                                You and
                                <a href="#" class="h6 notification-friend">Mary Jane Stark</a> just became friends. Write on
                                <a href="#" class="notification-link">her wall</a>.
                            </div>
                            <span class="notification-icon">
                                <svg class="olymp-happy-face-icon">
                                    <use xlink:href="#olymp-happy-face-icon"></use>
                                </svg>
                            </span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon">
                                    <use xlink:href="#olymp-three-dots-icon"></use>
                                </svg>
                                <svg class="olymp-little-delete">
                                    <use xlink:href="#olymp-little-delete"></use>
                                </svg>
                            </div>
                        </li>
                        <li>
                            <div class="author-thumb">
                                <img loading="lazy" src="./assets/img/avatar58-sm.webp" alt="author" width="34" height="34">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">Stagg Clothing</a>
                                <span class="chat-message-item">9 Friends in Common</span>
                            </div>
                            <span class="notification-icon">
                                <a href="#" class="accept-request">
                                    <span class="icon-add without-text">
                                        <svg class="olymp-happy-face-icon">
                                            <use xlink:href="#olymp-happy-face-icon"></use>
                                        </svg>
                                    </span>
                                </a>

                                <a href="#" class="accept-request request-del">
                                    <span class="icon-minus">
                                        <svg class="olymp-happy-face-icon">
                                            <use xlink:href="#olymp-happy-face-icon"></use>
                                        </svg>
                                    </span>
                                </a>

                            </span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon">
                                    <use xlink:href="#olymp-three-dots-icon"></use>
                                </svg>
                            </div>
                        </li>
                    </ul>
                    <a href="#" class="view-all bg-blue">Check all your Events</a>
                </div>

            </div>

            <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="chat-tab">

                <div class="mCustomScrollbar" data-mcs-theme="dark">
                    <div class="ui-block-title ui-block-title-small">
                        <h6 class="title">Chat / Messages</h6>
                        <a href="#">Mark all as read</a>
                        <a href="#">Settings</a>
                    </div>

                    <ul class="notification-list chat-message">
                        <li class="message-unread">
                            <div class="author-thumb">
                                <img loading="lazy" src="./assets/img/avatar59-sm.webp" alt="author" width="34" height="34">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">Diana Jameson</a>
                                <span class="chat-message-item">Hi James! It’s Diana, I just wanted to let you know that we have to reschedule...</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
                            </div>
                            <span class="notification-icon">
                                <svg class="olymp-chat---messages-icon">
                                    <use xlink:href="#olymp-chat---messages-icon"></use>
                                </svg>
                            </span>
                            <div class="more">
                                <svg class="olymp-three-dots-icon">
                                    <use xlink:href="#olymp-three-dots-icon"></use>
                                </svg>
                            </div>
                        </li>

                        <li>
                            <div class="author-thumb">
                                <img loading="lazy" src="./assets/img/avatar60-sm.webp" alt="author" width="34" height="34">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">Jake Parker</a>
                                <span class="chat-message-item">Great, I’ll see you tomorrow!.</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
                            </div>
                            <span class="notification-icon">
                                <svg class="olymp-chat---messages-icon">
                                    <use xlink:href="#olymp-chat---messages-icon"></use>
                                </svg>
                            </span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon">
                                    <use xlink:href="#olymp-three-dots-icon"></use>
                                </svg>
                            </div>
                        </li>
                        <li>
                            <div class="author-thumb">
                                <img loading="lazy" src="./assets/img/avatar61-sm.webp" alt="author" width="34" height="34">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">Elaine Dreyfuss</a>
                                <span class="chat-message-item">We’ll have to check that at the office and see if the client is on board with...</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 9:56pm</time></span>
                            </div>
                            <span class="notification-icon">
                                <svg class="olymp-chat---messages-icon">
                                    <use xlink:href="#olymp-chat---messages-icon"></use>
                                </svg>
                            </span>
                            <div class="more">
                                <svg class="olymp-three-dots-icon">
                                    <use xlink:href="#olymp-three-dots-icon"></use>
                                </svg>
                            </div>
                        </li>

                        <li class="chat-group">
                            <div class="author-thumb">
                                <img loading="lazy" src="./assets/img/avatar11-sm.webp" alt="author" width="16" height="16">
                                <img loading="lazy" src="./assets/img/avatar12-sm.webp" alt="author" width="16" height="16">
                                <img loading="lazy" src="./assets/img/avatar13-sm.webp" alt="author" width="16" height="16">
                                <img loading="lazy" src="./assets/img/avatar10-sm.webp" alt="author" width="36" height="36">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">You, Faye, Ed &amp; Jet +3</a>
                                <span class="last-message-author">Ed:</span>
                                <span class="chat-message-item">Yeah! Seems fine by me!</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 16th at 10:23am</time></span>
                            </div>
                            <span class="notification-icon">
                                <svg class="olymp-chat---messages-icon">
                                    <use xlink:href="#olymp-chat---messages-icon"></use>
                                </svg>
                            </span>
                            <div class="more">
                                <svg class="olymp-three-dots-icon">
                                    <use xlink:href="#olymp-three-dots-icon"></use>
                                </svg>
                            </div>
                        </li>
                    </ul>

                    <a href="#" class="view-all bg-purple">View All Messages</a>
                </div>

            </div>

            <div class="tab-pane fade" id="notification" role="tabpanel" aria-labelledby="notification-tab">

                <div class="mCustomScrollbar" data-mcs-theme="dark">
                    <div class="ui-block-title ui-block-title-small">
                        <h6 class="title">Notifications</h6>
                        <a href="#">Mark all as read</a>
                        <a href="#">Settings</a>
                    </div>

                    <ul class="notification-list">
                        <li>
                            <div class="author-thumb">
                                <img loading="lazy" src="./assets/img/avatar62-sm.webp" width="34" height="34" alt="author">
                            </div>
                            <div class="notification-event">
                                <div><a href="#" class="h6 notification-friend">Mathilda Brinker</a> commented on your new
                                    <a href="#" class="notification-link">profile status</a>.
                                </div>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
                            </div>
                            <span class="notification-icon">
                                <svg class="olymp-comments-post-icon">
                                    <use xlink:href="#olymp-comments-post-icon"></use>
                                </svg>
                            </span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon">
                                    <use xlink:href="#olymp-three-dots-icon"></use>
                                </svg>
                                <svg class="olymp-little-delete">
                                    <use xlink:href="#olymp-little-delete"></use>
                                </svg>
                            </div>
                        </li>

                        <li class="un-read">
                            <div class="author-thumb">
                                <img loading="lazy" src="./assets/img/avatar63-sm.webp" alt="author" width="34" height="34">
                            </div>
                            <div class="notification-event">
                                <div>You and
                                    <a href="#" class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on
                                    <a href="#" class="notification-link">his wall</a>.
                                </div>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time></span>
                            </div>
                            <span class="notification-icon">
                                <svg class="olymp-happy-face-icon">
                                    <use xlink:href="#olymp-happy-face-icon"></use>
                                </svg>
                            </span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon">
                                    <use xlink:href="#olymp-three-dots-icon"></use>
                                </svg>
                                <svg class="olymp-little-delete">
                                    <use xlink:href="#olymp-little-delete"></use>
                                </svg>
                            </div>
                        </li>

                        <li class="with-comment-photo-wrap">
                            <div class="with-comment-photo">
                                <div class="author-thumb"><img loading="lazy" src="./assets/img/avatar64-sm.webp" width="34" height="34" alt="author"></div>
                                <div class="notification-event">
                                    <div><a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your
                                        <a href="#" class="notification-link">photo</a>.
                                    </div>
                                    <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
                                </div>
                                <span class="notification-icon"> <svg class="olymp-comments-post-icon">
                                        <use xlink:href="#olymp-comments-post-icon"></use>
                                    </svg> </span>
                            </div>
                            <div class="comment-photo"><img loading="lazy" src="./assets/img/comment-photo1.webp" alt="photo" width="40" height="40">
                                <span>“She looks incredible in that outfit! We should see each...”</span>
                            </div>
                            <div class="more">
                                <svg class="olymp-three-dots-icon">
                                    <use xlink:href="#olymp-three-dots-icon"></use>
                                </svg>
                                <svg class="olymp-little-delete">
                                    <use xlink:href="#olymp-little-delete"></use>
                                </svg>
                            </div>
                        </li>

                        <li>
                            <div class="author-thumb">
                                <img loading="lazy" src="./assets/img/avatar65-sm.webp" alt="author" width="34" height="34">
                            </div>
                            <div class="notification-event">
                                <div>
                                    <a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in
                                    <a href="#" class="notification-link">Gotham Bar</a>.
                                </div>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
                            </div>
                            <span class="notification-icon">
                                <svg class="olymp-happy-face-icon">
                                    <use xlink:href="#olymp-happy-face-icon"></use>
                                </svg>
                            </span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon">
                                    <use xlink:href="#olymp-three-dots-icon"></use>
                                </svg>
                                <svg class="olymp-little-delete">
                                    <use xlink:href="#olymp-little-delete"></use>
                                </svg>
                            </div>
                        </li>

                        <li>
                            <div class="author-thumb">
                                <img loading="lazy" src="./assets/img/avatar66-sm.webp" alt="author" width="34" height="34">
                            </div>
                            <div class="notification-event">
                                <div><a href="#" class="h6 notification-friend">James Summers</a> commented on your new
                                    <a href="#" class="notification-link">profile status</a>.
                                </div>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
                            </div>
                            <span class="notification-icon">
                                <svg class="olymp-heart-icon">
                                    <use xlink:href="#olymp-heart-icon"></use>
                                </svg>
                            </span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon">
                                    <use xlink:href="#olymp-three-dots-icon"></use>
                                </svg>
                                <svg class="olymp-little-delete">
                                    <use xlink:href="#olymp-little-delete"></use>
                                </svg>
                            </div>
                        </li>
                    </ul>

                    <a href="#" class="view-all bg-primary">View All Notifications</a>
                </div>

            </div>

            <div class="tab-pane fade" id="search" role="tabpanel" aria-labelledby="search-tab">

                <form class="search-bar w-search notification-list friend-requests">
                    <div class="form-group with-button">
                        <input class="form-control js-user-search" placeholder="Search here people or pages..." type="text">
                    </div>
                </form>

            </div>

        </div>
        <!-- ... end  Tab panes -->

    </header>

    <!-- ... end Responsive Header-BP -->
    <div class="header-spacer"></div>


    <!-- Top Header-Profile -->



    <!-- ... end Top Header-Profile -->
    <div class="container">
        <div class="row">


            <div class="container">
                <br>
                <div>
                    <?php include('./page/page2/list_title.php') ?>
                </div>
                <div class="mt-5">
                    <?php include('./page/page2/product.php') ?>
                </div>


            </div>



        </div>
    </div>

    <!-- Window-popup Update Header Photo -->

    <div class="modal fade" id="update-header-photo" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">
        <div class="modal-dialog window-popup update-header-photo" role="document">
            <div class="modal-content">
                <a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
                    <svg class="olymp-close-icon">
                        <use xlink:href="#olymp-close-icon"></use>
                    </svg>
                </a>

                <div class="modal-header">
                    <h6 class="title">Update Header Photo</h6>
                </div>

                <div class="modal-body">
                    <a href="#" class="upload-photo-item">
                        <svg class="olymp-computer-icon">
                            <use xlink:href="#olymp-computer-icon"></use>
                        </svg>

                        <h6>Upload Photo</h6>
                        <span>Browse your computer.</span>
                    </a>

                    <a href="#" class="upload-photo-item" data-bs-toggle="modal" data-bs-target="#choose-from-my-photo">

                        <svg class="olymp-photos-icon">
                            <use xlink:href="#olymp-photos-icon"></use>
                        </svg>

                        <h6>Choose from My Photos</h6>
                        <span>Choose from your uploaded photos</span>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- ... end Window-popup Update Header Photo -->

    <!-- Window-popup Choose from my Photo -->

    <div class="modal fade" id="choose-from-my-photo" tabindex="-1" role="dialog" aria-labelledby="choose-from-my-photo" aria-hidden="true">
        <div class="modal-dialog window-popup choose-from-my-photo" role="document">

            <div class="modal-content">
                <a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
                    <svg class="olymp-close-icon">
                        <use xlink:href="#olymp-close-icon"></use>
                    </svg>
                </a>
                <div class="modal-header">
                    <h6 class="title">Choose from My Photos</h6>

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab" aria-expanded="true">
                                <svg class="olymp-photos-icon">
                                    <use xlink:href="#olymp-photos-icon"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab" aria-expanded="false">
                                <svg class="olymp-albums-icon">
                                    <use xlink:href="#olymp-albums-icon"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="modal-body">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="home" role="tabpanel" aria-expanded="true">

                            <div class="choose-photo-item">
                                <div class="radio">
                                    <label class="custom-radio">
                                        <img loading="lazy" src="./assets/img/choose-photo1.webp" alt="photo" width="247" height="166">
                                        <input type="radio" name="optionsRadios">
                                    </label>
                                </div>
                            </div>
                            <div class="choose-photo-item">
                                <div class="radio">
                                    <label class="custom-radio">
                                        <img loading="lazy" src="./assets/img/choose-photo2.webp" alt="photo" width="247" height="166">
                                        <input type="radio" name="optionsRadios">
                                    </label>
                                </div>
                            </div>
                            <div class="choose-photo-item">
                                <div class="radio">
                                    <label class="custom-radio">
                                        <img loading="lazy" src="./assets/img/choose-photo3.webp" alt="photo" width="247" height="166">
                                        <input type="radio" name="optionsRadios">
                                    </label>
                                </div>
                            </div>

                            <div class="choose-photo-item">
                                <div class="radio">
                                    <label class="custom-radio">
                                        <img loading="lazy" src="./assets/img/choose-photo4.webp" alt="photo" width="247" height="166">
                                        <input type="radio" name="optionsRadios">
                                    </label>
                                </div>
                            </div>
                            <div class="choose-photo-item">
                                <div class="radio">
                                    <label class="custom-radio">
                                        <img loading="lazy" src="./assets/img/choose-photo5.webp" alt="photo" width="247" height="166">
                                        <input type="radio" name="optionsRadios">
                                    </label>
                                </div>
                            </div>
                            <div class="choose-photo-item">
                                <div class="radio">
                                    <label class="custom-radio">
                                        <img loading="lazy" src="./assets/img/choose-photo6.webp" alt="photo" width="247" height="166">
                                        <input type="radio" name="optionsRadios">
                                    </label>
                                </div>
                            </div>

                            <div class="choose-photo-item">
                                <div class="radio">
                                    <label class="custom-radio">
                                        <img loading="lazy" src="./assets/img/choose-photo7.webp" alt="photo" width="247" height="166">
                                        <input type="radio" name="optionsRadios">
                                    </label>
                                </div>
                            </div>
                            <div class="choose-photo-item">
                                <div class="radio">
                                    <label class="custom-radio">
                                        <img loading="lazy" src="./assets/img/choose-photo8.webp" alt="photo" width="247" height="166">
                                        <input type="radio" name="optionsRadios">
                                    </label>
                                </div>
                            </div>
                            <div class="choose-photo-item">
                                <div class="radio">
                                    <label class="custom-radio">
                                        <img loading="lazy" src="./assets/img/choose-photo9.webp" alt="photo" width="247" height="166">
                                        <input type="radio" name="optionsRadios">
                                    </label>
                                </div>
                            </div>


                            <a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
                            <a href="#" class="btn btn-primary btn-lg btn--half-width">Confirm Photo</a>

                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-expanded="false">

                            <div class="choose-photo-item">
                                <figure>
                                    <img loading="lazy" src="./assets/img/choose-photo10.webp" alt="photo" width="225" height="180">
                                    <figcaption>
                                        <a href="#">South America Vacations</a>
                                        <span>Last Added: 2 hours ago</span>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="choose-photo-item">
                                <figure>
                                    <img loading="lazy" src="./assets/img/choose-photo11.webp" alt="photo" width="225" height="180">
                                    <figcaption>
                                        <a href="#">Photoshoot Summer 2016</a>
                                        <span>Last Added: 5 weeks ago</span>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="choose-photo-item">
                                <figure>
                                    <img loading="lazy" src="./assets/img/choose-photo12.webp" alt="photo" width="225" height="180">
                                    <figcaption>
                                        <a href="#">Amazing Street Food</a>
                                        <span>Last Added: 6 mins ago</span>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="choose-photo-item">
                                <figure>
                                    <img loading="lazy" src="./assets/img/choose-photo13.webp" alt="photo" width="224" height="179">
                                    <figcaption>
                                        <a href="#">Graffity & Street Art</a>
                                        <span>Last Added: 16 hours ago</span>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="choose-photo-item">
                                <figure>
                                    <img loading="lazy" src="./assets/img/choose-photo14.webp" alt="photo" width="225" height="180">
                                    <figcaption>
                                        <a href="#">Amazing Landscapes</a>
                                        <span>Last Added: 13 mins ago</span>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="choose-photo-item">
                                <figure>
                                    <img loading="lazy" src="./assets/img/choose-photo15.webp" alt="photo" width="225" height="180">
                                    <figcaption>
                                        <a href="#">The Majestic Canyon</a>
                                        <span>Last Added: 57 mins ago</span>
                                    </figcaption>
                                </figure>
                            </div>


                            <a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
                            <a href="#" class="btn btn-primary btn-lg disabled btn--half-width">Confirm Photo</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- ... end Window-popup Choose from my Photo -->

    <!-- Playlist Popup -->

    <div class="window-popup playlist-popup" tabindex="-1" role="dialog" aria-labelledby="playlist-popup" aria-hidden="true">

        <a href="#" class="icon-close js-close-popup">
            <svg class="olymp-close-icon">
                <use xlink:href="#olymp-close-icon"></use>
            </svg>
        </a>

        <div class="mCustomScrollbar">
            <table class="playlist-popup-table">

                <thead>

                    <tr>

                        <th class="play">
                            PLAY
                        </th>

                        <th class="cover">
                            COVER
                        </th>

                        <th class="song-artist">
                            SONG AND ARTIST
                        </th>

                        <th class="album">
                            ALBUM
                        </th>

                        <th class="released">
                            RELEASED
                        </th>

                        <th class="duration">
                            DURATION
                        </th>

                        <th class="spotify">
                            GET IT ON SPOTIFY
                        </th>

                        <th class="remove">
                            REMOVE
                        </th>
                    </tr>

                </thead>

                <tbody>
                    <tr>
                        <td class="play">
                            <a href="#" class="play-icon">
                                <svg class="olymp-music-play-icon-big">
                                    <use xlink:href="#olymp-music-play-icon-big"></use>
                                </svg>
                            </a>
                        </td>
                        <td class="cover">
                            <div class="playlist-thumb">
                                <img loading="lazy" src="./assets/img/playlist19.webp" alt="thumb-composition" width="34" height="34">
                            </div>
                        </td>
                        <td class="song-artist">
                            <div class="composition">
                                <a href="#" class="composition-name">We Can Be Heroes</a>
                                <a href="#" class="composition-author">Jason Bowie</a>
                            </div>
                        </td>
                        <td class="album">
                            <a href="#" class="album-composition">Ziggy Firedust</a>
                        </td>
                        <td class="released">
                            <div class="release-year">2014</div>
                        </td>
                        <td class="duration">
                            <div class="composition-time">
                                <time class="published" datetime="2017-03-24T18:18">6:17</time>
                            </div>
                        </td>
                        <td class="spotify">
                            <svg class="composition-icon" width="22" height="22">
                                <use xlink:href="#olymp-spotify-icon"></use>
                            </svg>
                        </td>
                        <td class="remove">
                            <a href="#" class="remove-icon">
                                <svg class="olymp-close-icon">
                                    <use xlink:href="#olymp-close-icon"></use>
                                </svg>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="play">
                            <a href="#" class="play-icon">
                                <svg class="olymp-music-play-icon-big">
                                    <use xlink:href="#olymp-music-play-icon-big"></use>
                                </svg>
                            </a>
                        </td>
                        <td class="cover">
                            <div class="playlist-thumb">
                                <img loading="lazy" src="./assets/img/playlist6.webp" alt="thumb-composition" width="34" height="34">
                            </div>
                        </td>
                        <td class="song-artist">
                            <div class="composition">
                                <a href="#" class="composition-name">The Past Starts Slow and Ends</a>
                                <a href="#" class="composition-author">System of a Revenge</a>
                            </div>
                        </td>
                        <td class="album">
                            <a href="#" class="album-composition">Wonderize</a>
                        </td>
                        <td class="released">
                            <div class="release-year">2014</div>
                        </td>
                        <td class="duration">
                            <div class="composition-time">
                                <time class="published" datetime="2017-03-24T18:18">6:17</time>
                            </div>
                        </td>
                        <td class="spotify">
                            <svg class="composition-icon" width="22" height="22">
                                <use xlink:href="#olymp-spotify-icon"></use>
                            </svg>
                        </td>
                        <td class="remove">
                            <a href="#" class="remove-icon">
                                <svg class="olymp-close-icon">
                                    <use xlink:href="#olymp-close-icon"></use>
                                </svg>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="play">
                            <a href="#" class="play-icon">
                                <svg class="olymp-music-play-icon-big">
                                    <use xlink:href="#olymp-music-play-icon-big"></use>
                                </svg>
                            </a>
                        </td>
                        <td class="cover">
                            <div class="playlist-thumb">
                                <img loading="lazy" src="./assets/img/playlist7.webp" alt="thumb-composition" width="34" height="34">
                            </div>
                        </td>
                        <td class="song-artist">
                            <div class="composition">
                                <a href="#" class="composition-name">The Pretender</a>
                                <a href="#" class="composition-author">Kung Fighters</a>
                            </div>
                        </td>
                        <td class="album">
                            <a href="#" class="album-composition">Warping Lights</a>
                        </td>
                        <td class="released">
                            <div class="release-year">2014</div>
                        </td>
                        <td class="duration">
                            <div class="composition-time">
                                <time class="published" datetime="2017-03-24T18:18">6:17</time>
                            </div>
                        </td>
                        <td class="spotify">
                            <svg class="composition-icon" width="22" height="22">
                                <use xlink:href="#olymp-spotify-icon"></use>
                            </svg>
                        </td>
                        <td class="remove">
                            <a href="#" class="remove-icon">
                                <svg class="olymp-close-icon">
                                    <use xlink:href="#olymp-close-icon"></use>
                                </svg>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="play">
                            <a href="#" class="play-icon">
                                <svg class="olymp-music-play-icon-big">
                                    <use xlink:href="#olymp-music-play-icon-big"></use>
                                </svg>
                            </a>
                        </td>
                        <td class="cover">
                            <div class="playlist-thumb">
                                <img loading="lazy" src="./assets/img/playlist8.webp" alt="thumb-composition" width="34" height="34">
                            </div>
                        </td>
                        <td class="song-artist">
                            <div class="composition">
                                <a href="#" class="composition-name">Seven Nation Army</a>
                                <a href="#" class="composition-author">The Black Stripes</a>
                            </div>
                        </td>
                        <td class="album">
                            <a href="#" class="album-composition ">Icky Strung (LIVE at Cube Garden)</a>
                        </td>
                        <td class="released">
                            <div class="release-year">2014</div>
                        </td>
                        <td class="duration">
                            <div class="composition-time">
                                <time class="published" datetime="2017-03-24T18:18">6:17</time>
                            </div>
                        </td>
                        <td class="spotify">
                            <svg class="composition-icon" width="22" height="22">
                                <use xlink:href="#olymp-spotify-icon"></use>
                            </svg>
                        </td>
                        <td class="remove">
                            <a href="#" class="remove-icon">
                                <svg class="olymp-close-icon">
                                    <use xlink:href="#olymp-close-icon"></use>
                                </svg>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="play">
                            <a href="#" class="play-icon">
                                <svg class="olymp-music-play-icon-big">
                                    <use xlink:href="#olymp-music-play-icon-big"></use>
                                </svg>
                            </a>
                        </td>
                        <td class="cover">
                            <div class="playlist-thumb">
                                <img loading="lazy" src="./assets/img/playlist9.webp" alt="thumb-composition" width="34" height="34">
                            </div>
                        </td>
                        <td class="song-artist">
                            <div class="composition">
                                <a href="#" class="composition-name">Leap of Faith</a>
                                <a href="#" class="composition-author">Eden Artifact</a>
                            </div>
                        </td>
                        <td class="album">
                            <a href="#" class="album-composition">The Assassins’s Soundtrack</a>
                        </td>
                        <td class="released">
                            <div class="release-year">2014</div>
                        </td>
                        <td class="duration">
                            <div class="composition-time">
                                <time class="published" datetime="2017-03-24T18:18">6:17</time>
                            </div>
                        </td>
                        <td class="spotify">
                            <svg class="composition-icon" width="22" height="22">
                                <use xlink:href="#olymp-spotify-icon"></use>
                            </svg>
                        </td>
                        <td class="remove">
                            <a href="#" class="remove-icon">
                                <svg class="olymp-close-icon">
                                    <use xlink:href="#olymp-close-icon"></use>
                                </svg>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="play">
                            <a href="#" class="play-icon">
                                <svg class="olymp-music-play-icon-big">
                                    <use xlink:href="#olymp-music-play-icon-big"></use>
                                </svg>
                            </a>
                        </td>
                        <td class="cover">
                            <div class="playlist-thumb">
                                <img loading="lazy" src="./assets/img/playlist10.webp" alt="thumb-composition" width="34" height="34">
                            </div>
                        </td>
                        <td class="song-artist">
                            <div class="composition">
                                <a href="#" class="composition-name">Killer Queen</a>
                                <a href="#" class="composition-author">Archiduke</a>
                            </div>
                        </td>
                        <td class="album">
                            <a href="#" class="album-composition ">News of the Universe</a>
                        </td>
                        <td class="released">
                            <div class="release-year">2014</div>
                        </td>
                        <td class="duration">
                            <div class="composition-time">
                                <time class="published" datetime="2017-03-24T18:18">6:17</time>
                            </div>
                        </td>
                        <td class="spotify">
                            <svg class="composition-icon" width="22" height="22">
                                <use xlink:href="#olymp-spotify-icon"></use>
                            </svg>
                        </td>
                        <td class="remove">
                            <a href="#" class="remove-icon">
                                <svg class="olymp-close-icon">
                                    <use xlink:href="#olymp-close-icon"></use>
                                </svg>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!----------------------------------------------- MediaPlayer ----------------------------------------------------->

        <audio id="mediaplayer" data-showplaylist="true">
            <source src="mp3/Twice.html" title="Track 1" data-poster="track1.webp" type="audio/mpeg">
            <source src="mp3/Twice.html" title="Track 2" data-poster="track2.webp" type="audio/mpeg">
            <source src="mp3/Twice.html" title="Track 3" data-poster="track3.webp" type="audio/mpeg">
            <source src="mp3/Twice.html" title="Track 4" data-poster="track4.webp" type="audio/mpeg">
        </audio>

        <!-- JS library for MediaPlayer -->
        <script defer src="js/libs/mediaelement-and-player.min.js"></script>
        <script defer src="js/libs/mediaelement-playlist-plugin.min.js"></script>
        <!-- ...end JS library for MediaPlayer -->

        <!------------------------------------------------ ... end MediaPlayer -------------------------------------------->

    </div>

    <!-- ... end Playlist Popup -->


    <a class="back-to-top" href="#">
        <svg class="back-icon" width="14" height="18">
            <use xlink:href="#olymp-back-to-top"></use>
        </svg>
    </a>


    <!-- Window-popup-CHAT for responsive min-width: 768px -->

    <div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog" aria-labelledby="popup-chat-responsive" aria-hidden="true">

        <div class="modal-content">
            <div class="modal-header">
                <span class="icon-status online"></span>
                <h6 class="title">Chat</h6>
                <div class="more">
                    <svg class="olymp-three-dots-icon">
                        <use xlink:href="#olymp-three-dots-icon"></use>
                    </svg>
                    <svg class="olymp-little-delete js-chat-open">
                        <use xlink:href="#olymp-little-delete"></use>
                    </svg>
                </div>
            </div>
            <div class="modal-body">
                <div class="mCustomScrollbar">
                    <ul class="notification-list chat-message chat-message-field">
                        <li>
                            <div class="author-thumb">
                                <img loading="lazy" src="./assets/img/avatar14-sm.webp" width="28" height="28" alt="author" class="mCS_img_loaded">
                            </div>
                            <div class="notification-event">
                                <span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
                            </div>
                        </li>

                        <li>
                            <div class="author-thumb">
                                <img loading="lazy" src="./assets/img/author-page.webp" width="36" height="36" alt="author" class="mCS_img_loaded">
                            </div>
                            <div class="notification-event">
                                <span class="chat-message-item">Don’t worry Mathilda!</span>
                                <span class="chat-message-item">I already bought everything</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
                            </div>
                        </li>

                        <li>
                            <div class="author-thumb">
                                <img loading="lazy" src="./assets/img/avatar14-sm.webp" width="28" height="28" alt="author" class="mCS_img_loaded">
                            </div>
                            <div class="notification-event">
                                <span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
                            </div>
                        </li>
                    </ul>
                </div>

                <form class="need-validation">

                    <div class="form-group">
                        <textarea class="form-control" placeholder="Press enter to post..."></textarea>
                        <div class="add-options-message">
                            <a href="#" class="options-message">
                                <svg class="olymp-computer-icon">
                                    <use xlink:href="#olymp-computer-icon"></use>
                                </svg>
                            </a>
                            <div class="options-message smile-block">

                                <svg class="olymp-happy-sticker-icon">
                                    <use xlink:href="#olymp-happy-sticker-icon"></use>
                                </svg>

                                <ul class="more-dropdown more-with-triangle triangle-bottom-right">
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="./assets/img/icon-chat1.webp" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="./assets/img/icon-chat2.webp" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="./assets/img/icon-chat3.webp" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="./assets/img/icon-chat4.webp" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="./assets/img/icon-chat5.webp" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="./assets/img/icon-chat6.webp" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="./assets/img/icon-chat7.webp" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="./assets/img/icon-chat8.webp" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="./assets/img/icon-chat9.webp" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="./assets/img/icon-chat10.webp" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="./assets/img/icon-chat11.webp" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="./assets/img/icon-chat12.webp" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="./assets/img/icon-chat13.webp" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="./assets/img/icon-chat14.webp" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="./assets/img/icon-chat15.webp" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="./assets/img/icon-chat16.webp" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="./assets/img/icon-chat17.webp" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="./assets/img/icon-chat18.webp" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="./assets/img/icon-chat19.webp" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="./assets/img/icon-chat20.webp" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="./assets/img/icon-chat21.webp" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="./assets/img/icon-chat22.webp" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="./assets/img/icon-chat23.webp" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="./assets/img/icon-chat24.webp" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="./assets/img/icon-chat25.webp" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="./assets/img/icon-chat26.webp" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="./assets/img/icon-chat27.webp" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>

    <!-- ... end Window-popup-CHAT for responsive min-width: 768px -->

    <?php include('./components/footer.php'); ?>

    <!-- JS Scripts -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var webpMachine = new webpHero.WebpMachine()
            webpMachine.polyfillDocument()
        });
    </script>
    <script src="./assets/js/jQuery/jquery-3.5.1.min.js"></script>

<script src="./assets/js/libs/jquery.mousewheel.min.js"></script>
<script src="./assets/js/libs/perfect-scrollbar.min.js"></script>
<script src="./assets/js/libs/imagesloaded.pkgd.min.js"></script>
<script src="./assets/js/libs/material.min.js"></script>
<script src="./assets/js/libs/selectize.min.js"></script>
<script src="./assets/js/libs/isotope.pkgd.min.js"></script>
<script src="./assets/js/libs/ajax-pagination.min.js"></script>
<script src="./assets/js/libs/jquery.magnific-popup.min.js"></script>

<script src="./assets/js/main.js"></script>
<script src="./assets/js/libs-init/libs-init.js"></script>

<script src="./js/bootstrap.bundle.js"></script>

<!-- SVG icons loader -->
<script src="./assets/js/svg-loader.js"></script>
<!-- /SVG icons loader -->

</body>

<!-- Mirrored from html.crumina.net/html-olympus/02-ProfilePage.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jul 2023 01:25:57 GMT -->

</html>