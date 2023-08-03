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
     <link rel="preload" type="text/css" href="css/theme-font.min.css" as="style">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap.css">

     <!-- Main Styles CSS -->
     <link rel="stylesheet" type="text/css" href="css/main.min.css">

     <link rel="stylesheet" href="./css/custom.css">

     <!-- Main RTL CSS -->
     <!-- <link rel="stylesheet" type="text/css" href="css/rtl.min.css"> -->

     <!-- WebP Safari Support -->
     <script src="../../unpkg.com/webp-hero%400.0.0-dev.27/dist-cjs/polyfills.js"></script>
     <script src="../../unpkg.com/webp-hero%400.0.0-dev.27/dist-cjs/webp-hero.bundle.js"></script>
     <!-- Owl Carousel CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

     <!-- Font Awesome CDN link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">



     <style>
          .active {
               background-color: white !important;
               /* color: white; */
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


     <!-- ... end Fixed Sidebar Left -->


     <!-- Header-BP -->

     <header class="header" id="site-header">

          <div class="page-title">
               <h6>Ecom</h6>
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
                                                  <img loading="lazy" src="img/avatar55-sm.webp" alt="author" width="34" height="34">
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
                                                  <img loading="lazy" src="img/avatar56-sm.webp" alt="author" width="34" height="34">
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
                                                  <img loading="lazy" src="img/avatar57-sm.webp" alt="author" width="34" height="34">
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
                                                  <img loading="lazy" src="img/avatar58-sm.webp" alt="author" width="34" height="34">
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
                                                  <img loading="lazy" src="img/avatar59-sm.webp" alt="author" width="34" height="34">
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
                                                  <img loading="lazy" src="img/avatar60-sm.webp" alt="author" width="34" height="34">
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
                                                  <img loading="lazy" src="img/avatar61-sm.webp" alt="author" width="34" height="34">
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
                                                  <img loading="lazy" src="img/avatar11-sm.webp" alt="author" width="16" height="16">
                                                  <img loading="lazy" src="img/avatar12-sm.webp" alt="author" width="16" height="16">
                                                  <img loading="lazy" src="img/avatar13-sm.webp" alt="author" width="16" height="16">
                                                  <img loading="lazy" src="img/avatar10-sm.webp" alt="author" width="36" height="36">
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
                                                  <img loading="lazy" src="img/avatar62-sm.webp" width="34" height="34" alt="author">
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
                                                  <img loading="lazy" src="img/avatar63-sm.webp" alt="author" width="34" height="34">
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
                                                       <img loading="lazy" src="img/avatar64-sm.webp" width="34" height="34" alt="author">
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
                                                  <img loading="lazy" src="img/comment-photo1.webp" alt="photo" width="40" height="40">
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
                                                  <img loading="lazy" src="img/avatar65-sm.webp" alt="author" width="34" height="34">
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
                                                  <img loading="lazy" src="img/avatar66-sm.webp" alt="author" width="34" height="34">
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
                              <img alt="author" src="img/author-page.webp" width="36" height="36" class="avatar">
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
                                        <img loading="lazy" src="img/avatar55-sm.webp" alt="author" width="34" height="34">
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
                                        <img loading="lazy" src="img/avatar56-sm.webp" alt="author" width="34" height="34">
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
                                        <img loading="lazy" src="img/avatar57-sm.webp" alt="author" width="34" height="34">
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
                                        <img loading="lazy" src="img/avatar58-sm.webp" alt="author" width="34" height="34">
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
                                        <img loading="lazy" src="img/avatar59-sm.webp" alt="author" width="34" height="34">
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
                                        <img loading="lazy" src="img/avatar60-sm.webp" alt="author" width="34" height="34">
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
                                        <img loading="lazy" src="img/avatar61-sm.webp" alt="author" width="34" height="34">
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
                                        <img loading="lazy" src="img/avatar11-sm.webp" alt="author" width="16" height="16">
                                        <img loading="lazy" src="img/avatar12-sm.webp" alt="author" width="16" height="16">
                                        <img loading="lazy" src="img/avatar13-sm.webp" alt="author" width="16" height="16">
                                        <img loading="lazy" src="img/avatar10-sm.webp" alt="author" width="36" height="36">
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
                                        <img loading="lazy" src="img/avatar62-sm.webp" width="34" height="34" alt="author">
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
                                        <img loading="lazy" src="img/avatar63-sm.webp" alt="author" width="34" height="34">
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
                                        <div class="author-thumb"><img loading="lazy" src="img/avatar64-sm.webp" width="34" height="34" alt="author"></div>
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
                                   <div class="comment-photo"><img loading="lazy" src="img/comment-photo1.webp" alt="photo" width="40" height="40">
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
                                        <img loading="lazy" src="img/avatar65-sm.webp" alt="author" width="34" height="34">
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
                                        <img loading="lazy" src="img/avatar66-sm.webp" alt="author" width="34" height="34">
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
     <div class="container-fluid">
          <div class="row">
               <div class="content">
                    <div>
                         <?php include('./page3/Carousel.php') ?>
                    </div>
                    <div>
                         <?php include('./page3/featured-products.php') ?>
                    </div>
                    <div>
                         <?php include('./page3/topCollections.php') ?>
                    </div>
                    <div>
                         <?php include('./page3/theBestProduct.php') ?>
                    </div>
                    <div>
                         <?php include('./page3/ourLatestBlogs.php') ?>
                    </div>
                    <div>
                         <?php include('./page3/partner.php') ?>
                    </div>





               </div>


               <!-- Left Sidebar -->



               <!-- ... end Left Sidebar -->


               <!-- Right Sidebar -->



               <!-- ... end Right Sidebar -->

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
                                                  <img loading="lazy" src="img/choose-photo1.webp" alt="photo" width="247" height="166">
                                                  <input type="radio" name="optionsRadios">
                                             </label>
                                        </div>
                                   </div>
                                   <div class="choose-photo-item">
                                        <div class="radio">
                                             <label class="custom-radio">
                                                  <img loading="lazy" src="img/choose-photo2.webp" alt="photo" width="247" height="166">
                                                  <input type="radio" name="optionsRadios">
                                             </label>
                                        </div>
                                   </div>
                                   <div class="choose-photo-item">
                                        <div class="radio">
                                             <label class="custom-radio">
                                                  <img loading="lazy" src="img/choose-photo3.webp" alt="photo" width="247" height="166">
                                                  <input type="radio" name="optionsRadios">
                                             </label>
                                        </div>
                                   </div>

                                   <div class="choose-photo-item">
                                        <div class="radio">
                                             <label class="custom-radio">
                                                  <img loading="lazy" src="img/choose-photo4.webp" alt="photo" width="247" height="166">
                                                  <input type="radio" name="optionsRadios">
                                             </label>
                                        </div>
                                   </div>
                                   <div class="choose-photo-item">
                                        <div class="radio">
                                             <label class="custom-radio">
                                                  <img loading="lazy" src="img/choose-photo5.webp" alt="photo" width="247" height="166">
                                                  <input type="radio" name="optionsRadios">
                                             </label>
                                        </div>
                                   </div>
                                   <div class="choose-photo-item">
                                        <div class="radio">
                                             <label class="custom-radio">
                                                  <img loading="lazy" src="img/choose-photo6.webp" alt="photo" width="247" height="166">
                                                  <input type="radio" name="optionsRadios">
                                             </label>
                                        </div>
                                   </div>

                                   <div class="choose-photo-item">
                                        <div class="radio">
                                             <label class="custom-radio">
                                                  <img loading="lazy" src="img/choose-photo7.webp" alt="photo" width="247" height="166">
                                                  <input type="radio" name="optionsRadios">
                                             </label>
                                        </div>
                                   </div>
                                   <div class="choose-photo-item">
                                        <div class="radio">
                                             <label class="custom-radio">
                                                  <img loading="lazy" src="img/choose-photo8.webp" alt="photo" width="247" height="166">
                                                  <input type="radio" name="optionsRadios">
                                             </label>
                                        </div>
                                   </div>
                                   <div class="choose-photo-item">
                                        <div class="radio">
                                             <label class="custom-radio">
                                                  <img loading="lazy" src="img/choose-photo9.webp" alt="photo" width="247" height="166">
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
                                             <img loading="lazy" src="img/choose-photo10.webp" alt="photo" width="225" height="180">
                                             <figcaption>
                                                  <a href="#">South America Vacations</a>
                                                  <span>Last Added: 2 hours ago</span>
                                             </figcaption>
                                        </figure>
                                   </div>
                                   <div class="choose-photo-item">
                                        <figure>
                                             <img loading="lazy" src="img/choose-photo11.webp" alt="photo" width="225" height="180">
                                             <figcaption>
                                                  <a href="#">Photoshoot Summer 2016</a>
                                                  <span>Last Added: 5 weeks ago</span>
                                             </figcaption>
                                        </figure>
                                   </div>
                                   <div class="choose-photo-item">
                                        <figure>
                                             <img loading="lazy" src="img/choose-photo12.webp" alt="photo" width="225" height="180">
                                             <figcaption>
                                                  <a href="#">Amazing Street Food</a>
                                                  <span>Last Added: 6 mins ago</span>
                                             </figcaption>
                                        </figure>
                                   </div>

                                   <div class="choose-photo-item">
                                        <figure>
                                             <img loading="lazy" src="img/choose-photo13.webp" alt="photo" width="224" height="179">
                                             <figcaption>
                                                  <a href="#">Graffity & Street Art</a>
                                                  <span>Last Added: 16 hours ago</span>
                                             </figcaption>
                                        </figure>
                                   </div>
                                   <div class="choose-photo-item">
                                        <figure>
                                             <img loading="lazy" src="img/choose-photo14.webp" alt="photo" width="225" height="180">
                                             <figcaption>
                                                  <a href="#">Amazing Landscapes</a>
                                                  <span>Last Added: 13 mins ago</span>
                                             </figcaption>
                                        </figure>
                                   </div>
                                   <div class="choose-photo-item">
                                        <figure>
                                             <img loading="lazy" src="img/choose-photo15.webp" alt="photo" width="225" height="180">
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
                                        <img loading="lazy" src="img/playlist19.webp" alt="thumb-composition" width="34" height="34">
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
                                        <img loading="lazy" src="img/playlist6.webp" alt="thumb-composition" width="34" height="34">
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
                                        <img loading="lazy" src="img/playlist7.webp" alt="thumb-composition" width="34" height="34">
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
                                        <img loading="lazy" src="img/playlist8.webp" alt="thumb-composition" width="34" height="34">
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
                                        <img loading="lazy" src="img/playlist9.webp" alt="thumb-composition" width="34" height="34">
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
                                        <img loading="lazy" src="img/playlist10.webp" alt="thumb-composition" width="34" height="34">
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
                                        <img loading="lazy" src="img/avatar14-sm.webp" width="28" height="28" alt="author" class="mCS_img_loaded">
                                   </div>
                                   <div class="notification-event">
                                        <span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
                                   </div>
                              </li>

                              <li>
                                   <div class="author-thumb">
                                        <img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author" class="mCS_img_loaded">
                                   </div>
                                   <div class="notification-event">
                                        <span class="chat-message-item">Don’t worry Mathilda!</span>
                                        <span class="chat-message-item">I already bought everything</span>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
                                   </div>
                              </li>

                              <li>
                                   <div class="author-thumb">
                                        <img loading="lazy" src="img/avatar14-sm.webp" width="28" height="28" alt="author" class="mCS_img_loaded">
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
                                                       <img loading="lazy" src="img/icon-chat1.webp" alt="icon" width="20" height="20">
                                                  </a>
                                             </li>
                                             <li>
                                                  <a href="#">
                                                       <img loading="lazy" src="img/icon-chat2.webp" alt="icon" width="20" height="20">
                                                  </a>
                                             </li>
                                             <li>
                                                  <a href="#">
                                                       <img loading="lazy" src="img/icon-chat3.webp" alt="icon" width="20" height="20">
                                                  </a>
                                             </li>
                                             <li>
                                                  <a href="#">
                                                       <img loading="lazy" src="img/icon-chat4.webp" alt="icon" width="20" height="20">
                                                  </a>
                                             </li>
                                             <li>
                                                  <a href="#">
                                                       <img loading="lazy" src="img/icon-chat5.webp" alt="icon" width="20" height="20">
                                                  </a>
                                             </li>
                                             <li>
                                                  <a href="#">
                                                       <img loading="lazy" src="img/icon-chat6.webp" alt="icon" width="20" height="20">
                                                  </a>
                                             </li>
                                             <li>
                                                  <a href="#">
                                                       <img loading="lazy" src="img/icon-chat7.webp" alt="icon" width="20" height="20">
                                                  </a>
                                             </li>
                                             <li>
                                                  <a href="#">
                                                       <img loading="lazy" src="img/icon-chat8.webp" alt="icon" width="20" height="20">
                                                  </a>
                                             </li>
                                             <li>
                                                  <a href="#">
                                                       <img loading="lazy" src="img/icon-chat9.webp" alt="icon" width="20" height="20">
                                                  </a>
                                             </li>
                                             <li>
                                                  <a href="#">
                                                       <img loading="lazy" src="img/icon-chat10.webp" alt="icon" width="20" height="20">
                                                  </a>
                                             </li>
                                             <li>
                                                  <a href="#">
                                                       <img loading="lazy" src="img/icon-chat11.webp" alt="icon" width="20" height="20">
                                                  </a>
                                             </li>
                                             <li>
                                                  <a href="#">
                                                       <img loading="lazy" src="img/icon-chat12.webp" alt="icon" width="20" height="20">
                                                  </a>
                                             </li>
                                             <li>
                                                  <a href="#">
                                                       <img loading="lazy" src="img/icon-chat13.webp" alt="icon" width="20" height="20">
                                                  </a>
                                             </li>
                                             <li>
                                                  <a href="#">
                                                       <img loading="lazy" src="img/icon-chat14.webp" alt="icon" width="20" height="20">
                                                  </a>
                                             </li>
                                             <li>
                                                  <a href="#">
                                                       <img loading="lazy" src="img/icon-chat15.webp" alt="icon" width="20" height="20">
                                                  </a>
                                             </li>
                                             <li>
                                                  <a href="#">
                                                       <img loading="lazy" src="img/icon-chat16.webp" alt="icon" width="20" height="20">
                                                  </a>
                                             </li>
                                             <li>
                                                  <a href="#">
                                                       <img loading="lazy" src="img/icon-chat17.webp" alt="icon" width="20" height="20">
                                                  </a>
                                             </li>
                                             <li>
                                                  <a href="#">
                                                       <img loading="lazy" src="img/icon-chat18.webp" alt="icon" width="20" height="20">
                                                  </a>
                                             </li>
                                             <li>
                                                  <a href="#">
                                                       <img loading="lazy" src="img/icon-chat19.webp" alt="icon" width="20" height="20">
                                                  </a>
                                             </li>
                                             <li>
                                                  <a href="#">
                                                       <img loading="lazy" src="img/icon-chat20.webp" alt="icon" width="20" height="20">
                                                  </a>
                                             </li>
                                             <li>
                                                  <a href="#">
                                                       <img loading="lazy" src="img/icon-chat21.webp" alt="icon" width="20" height="20">
                                                  </a>
                                             </li>
                                             <li>
                                                  <a href="#">
                                                       <img loading="lazy" src="img/icon-chat22.webp" alt="icon" width="20" height="20">
                                                  </a>
                                             </li>
                                             <li>
                                                  <a href="#">
                                                       <img loading="lazy" src="img/icon-chat23.webp" alt="icon" width="20" height="20">
                                                  </a>
                                             </li>
                                             <li>
                                                  <a href="#">
                                                       <img loading="lazy" src="img/icon-chat24.webp" alt="icon" width="20" height="20">
                                                  </a>
                                             </li>
                                             <li>
                                                  <a href="#">
                                                       <img loading="lazy" src="img/icon-chat25.webp" alt="icon" width="20" height="20">
                                                  </a>
                                             </li>
                                             <li>
                                                  <a href="#">
                                                       <img loading="lazy" src="img/icon-chat26.webp" alt="icon" width="20" height="20">
                                                  </a>
                                             </li>
                                             <li>
                                                  <a href="#">
                                                       <img loading="lazy" src="img/icon-chat27.webp" alt="icon" width="20" height="20">
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


     <!-- JS Scripts -->

     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
               <div class="modal-content">
                    <div class="modal-header border-0">
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                         <div class="d-flex flex-wrap">
                              <div class="content-product">
                                   <div id="sync1" class="owl-big owl-carousel owl-theme">
                                        <div class="item">
                                             <div class="large-image">
                                                  <img itemprop="image" class="product-image-zoom" src="https://demo.smartaddons.com/templates/html/emarket/image/catalog/demo/product/funiture/1.jpg" title="Chicken swinesha" alt="Chicken swinesha">
                                             </div>
                                        </div>
                                        <div class="item">
                                             <div class="large-image">
                                                  <img itemprop="image" class="product-image-zoom" src="https://demo.smartaddons.com/templates/html/emarket/image/catalog/demo/product/funiture/2.jpg" title="Chicken swinesha" alt="Chicken swinesha">
                                             </div>
                                        </div>
                                        <div class="item">
                                             <div class="large-image">
                                                  <img itemprop="image" class="product-image-zoom" src="https://demo.smartaddons.com/templates/html/emarket/image/catalog/demo/product/funiture/3.jpg" title="Chicken swinesha" alt="Chicken swinesha">
                                             </div>
                                        </div>
                                        <div class="item">
                                             <div class="large-image">
                                                  <img itemprop="image" class="product-image-zoom" src="https://demo.smartaddons.com/templates/html/emarket/image/catalog/demo/product/funiture/4.jpg" title="Chicken swinesha" alt="Chicken swinesha">
                                             </div>
                                        </div>
                                        <div class="item">
                                             <div class="large-image">
                                                  <img itemprop="image" class="product-image-zoom" src="https://demo.smartaddons.com/templates/html/emarket/image/catalog/demo/product/funiture/5.jpg" title="Chicken swinesha" alt="Chicken swinesha">
                                             </div>
                                        </div>
                                        <div class="item">
                                             <div class="large-image">
                                                  <img itemprop="image" class="product-image-zoom" src="https://demo.smartaddons.com/templates/html/emarket/image/catalog/demo/product/funiture/1.jpg" title="Chicken swinesha" alt="Chicken swinesha">
                                             </div>
                                        </div>
                                   </div>
                                   <div id="sync2" class="owl-small owl-carousel owl-theme mt-2">
                                        <div class="item">
                                             <a data-index="0" class="img thumbnail active" title="Chicken swinesha">
                                                  <img src="https://demo.smartaddons.com/templates/html/emarket/image/catalog/demo/product/funiture/1.jpg" title="Chicken swinesha" alt="Chicken swinesha">
                                             </a>
                                        </div>
                                        <div class="item">
                                             <a data-index="0" class="img thumbnail " title="Chicken swinesha">
                                                  <img src="https://demo.smartaddons.com/templates/html/emarket/image/catalog/demo/product/funiture/2.jpg" title="Chicken swinesha" alt="Chicken swinesha">
                                             </a>
                                        </div>
                                        <div class="item">
                                             <a data-index="0" class="img thumbnail  " title="Chicken swinesha">
                                                  <img src="https://demo.smartaddons.com/templates/html/emarket/image/catalog/demo/product/funiture/3.jpg" title="Chicken swinesha" alt="Chicken swinesha">
                                             </a>
                                        </div>
                                        <div class="item">
                                             <a data-index="0" class="img thumbnail " title="Chicken swinesha">
                                                  <img src="https://demo.smartaddons.com/templates/html/emarket/image/catalog/demo/product/funiture/4.jpg" title="Chicken swinesha" alt="Chicken swinesha">
                                             </a>
                                        </div>
                                        <div class="item">
                                             <a data-index="0" class="img thumbnail " title="Chicken swinesha">
                                                  <img src="https://demo.smartaddons.com/templates/html/emarket/image/catalog/demo/product/funiture/5.jpg" title="Chicken swinesha" alt="Chicken swinesha">
                                             </a>
                                        </div>
                                        <div class="item">
                                             <a data-index="0" class="img thumbnail " title="Chicken swinesha">
                                                  <img src="https://demo.smartaddons.com/templates/html/emarket/image/catalog/demo/product/funiture/1.jpg" title="Chicken swinesha" alt="Chicken swinesha">
                                             </a>
                                        </div>
                                   </div>
                              </div>
                              <div class="content-product-right content-product">
                                   <div class="title-product">
                                        <h1>Chicken swinesha demo</h1>
                                   </div>
                                   <div class="box-review form-group">
                                        <div class="ratings">
                                             <i class="fa-solid fa-star"></i>
                                             <i class="fa-solid fa-star"></i>
                                             <i class="fa-solid fa-star"></i>
                                             <i class="fa-solid fa-star"></i>
                                             <i class="fa-solid fa-star"></i>
                                        </div>
                                        <a class="reviews_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0 reviews</a> |
                                        <a class="write_review_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Write a review</a>
                                   </div>
                                   <div class="product-label form-group">
                                        <div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
                                             <span class="price-new" itemprop="price">$114.00</span>
                                             <span class="price-old">$122.00</span>
                                        </div>
                                        <div class="stock">
                                             <span>Availability:</span> <span class="status-stock">In Stock</span>
                                        </div>
                                   </div>
                                   <div class="product-box-desc">
                                        <div class="inner-box-desc">
                                             <div class="price-tax"><span>Ex Tax:</span> $60.00</div>
                                             <div class="reward"><span>Price in reward points:</span> 400</div>
                                             <div class="brand"><span>Brand:</span><a href="#">Apple</a> </div>
                                             <div class="model"><span>Product Code:</span> Product 15</div>
                                             <div class="reward"><span>Reward Points:</span> 100</div>
                                        </div>
                                   </div>

                                   <div id="product">
                                        <h4>Available Options</h4>

                                        <div class="d-flex align-items-center">
                                             <div class="image_option_type form-group required">
                                                  <label class="control-label">Colors</label>
                                                  <ul class="product-options clearfix" id="input-option231">
                                                       <li class="radio active">
                                                            <label>
                                                                 <input class="image_radio" type="radio" name="option[231]" value="33">
                                                                 <img src="https://demo.smartaddons.com/templates/html/emarket/image/demo/colors/blue.jpg" data-original-title="blue +$12.00" class="img-thumbnail icon icon-color"> <i class="fa fa-check"></i>
                                                                 <label> </label>
                                                            </label>
                                                       </li>
                                                       <li class="radio">
                                                            <label>
                                                                 <input class="image_radio" type="radio" name="option[231]" value="34">
                                                                 <img src="https://demo.smartaddons.com/templates/html/emarket/image/demo/colors/brown.jpg" data-original-title="brown -$12.00" class="img-thumbnail icon icon-color"> <i class="fa fa-check"></i>
                                                                 <label> </label>
                                                            </label>
                                                       </li>
                                                       <li class="radio">
                                                            <label>
                                                                 <input class="image_radio" type="radio" name="option[231]" value="35"> <img src="https://demo.smartaddons.com/templates/html/emarket/image/demo/colors/green.jpg" data-original-title="green +$12.00" class="img-thumbnail icon icon-color"> <i class="fa fa-check"></i>
                                                                 <label> </label>
                                                            </label>
                                                       </li>
                                                       <li class="selected-option"><span class="label label-success">blue +$12.00</span></li>
                                                  </ul>
                                             </div>
                                        </div>

                                        <div class="box-checkbox form-group required">
                                             <label class="control-label">Checkbox</label>
                                             <div id="input-option232">
                                                  <div class="checkbox">
                                                       <label for="checkbox_1"><input type="checkbox" name="option[232][]" value="36" id="checkbox_1"> Checkbox 1 (+$12.00)</label>
                                                  </div>
                                                  <div class="checkbox">
                                                       <label for="checkbox_2"><input type="checkbox" name="option[232][]" value="36" id="checkbox_2"> Checkbox 2 (+$36.00)</label>
                                                  </div>
                                                  <div class="checkbox">
                                                       <label for="checkbox_3"><input type="checkbox" name="option[232][]" value="36" id="checkbox_3"> Checkbox 3 (+$24.00)</label>
                                                  </div>
                                                  <div class="checkbox">
                                                       <label for="checkbox_4"><input type="checkbox" name="option[232][]" value="36" id="checkbox_4"> Checkbox 4 (+$48.00)</label>
                                                  </div>
                                             </div>
                                        </div>

                                        <div class="form-group box-info-product d-flex flex-wrap">
                                             <div class="option quantity">
                                                  <div class="input-group quantity-control m-0" unselectable="on" style="-webkit-user-select: none;">
                                                       <label>Qty</label>
                                                       <input class="form-control" type="text" name="quantity" value="1">
                                                       <input type="hidden" name="product_id" value="50">
                                                       <span class="input-group-addon product_quantity_down">−</span>
                                                       <span class="input-group-addon product_quantity_up">+</span>
                                                  </div>
                                             </div>
                                             <div class="cart m-0">
                                                  <input type="button" data-toggle="tooltip" title="" value="Add to Cart" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg" onclick="cart.add('42', '1');" data-original-title="Add to Cart">
                                             </div>
                                             <div class="add-to-links wish_comp m-0">
                                                  <ul class="blank list-inline">
                                                       <li class="wishlist">
                                                            <a class="icon" data-toggle="tooltip" title="" onclick="wishlist.add('50');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i>
                                                            </a>
                                                       </li>
                                                       <li class="compare">
                                                            <a class="icon" data-toggle="tooltip" title="" onclick="compare.add('50');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i>
                                                            </a>
                                                       </li>
                                                  </ul>
                                             </div>

                                        </div>

                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>


          <script>
               document.addEventListener("DOMContentLoaded", function() {
                    var webpMachine = new webpHero.WebpMachine()
                    webpMachine.polyfillDocument()
               });
          </script>
          <script src="js/jQuery/jquery-3.5.1.min.js"></script>

          <!-- Owl Carousel JS -->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

          <script src="js/libs/jquery.mousewheel.min.js"></script>
          <script src="js/libs/perfect-scrollbar.min.js"></script>
          <script src="js/libs/imagesloaded.pkgd.min.js"></script>
          <script src="js/libs/material.min.js"></script>
          <script src="js/libs/selectize.min.js"></script>
          <script src="js/libs/isotope.pkgd.min.js"></script>
          <script src="js/libs/ajax-pagination.min.js"></script>
          <script src="js/libs/jquery.magnific-popup.min.js"></script>

          <script src="js/main.js"></script>
          <script src="js/libs-init/libs-init.js"></script>

          <script src="Bootstrap/dist/js/bootstrap.bundle.min.js"></script>

          <!-- SVG icons loader -->
          <script src="js/svg-loader.js"></script>
          <script src="./assets/js/banproduct.js"></script>
          <!-- /SVG icons loader -->


          <script>
               $(document).ready(function() {
                    let sync1 = $("#sync1");
                    let sync2 = $("#sync2");
                    let slidesPerPage = 4; //globaly define number of elements per page
                    let syncedSecondary = true;

                    sync1
                         .owlCarousel({
                              items: 1,
                              slideSpeed: 2000,
                              nav: false,
                              dots: false,
                              responsiveRefreshRate: 200,
                              navText: [
                                   '<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>',
                                   '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>',
                              ],
                         })
                         .on("changed.owl.carousel", syncPosition);

                    sync2
                         .on("initialized.owl.carousel", function() {
                              sync2.find(".owl-item").eq(0).addClass("current");
                         })

                         .owlCarousel({
                              items: slidesPerPage,
                              dots: false,
                              // nav: true,
                              // center:true,
                              smartSpeed: 200,
                              slideSpeed: 500,
                              URLhashListener: true,
                              startPosition: "URLHash",
                              slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
                              responsiveRefreshRate: 100,
                              responsive: {
                                   0: {
                                        items: 4,
                                   },

                                   600: {
                                        items: 4,
                                   },

                                   1000: {
                                        items: 4,
                                   },
                              },
                         })
                         .on("changed.owl.carousel", syncPosition2);

                    function syncPosition(el) {
                         //if you set loop to false, you have to restore this next line
                         let current = el.item.index;

                         sync2
                              .find(".owl-item")
                              .removeClass("current")
                              .eq(current)
                              .addClass("current");

                         let onscreen = sync2.find(".owl-item.active").length - 1;
                         let start = sync2.find(".owl-item.active").first().index();
                         let end = sync2.find(".owl-item.active").last().index();

                         if (current > end) {
                              sync2.data("owl.carousel").to(current, 100, true);
                         }

                         if (current < start) {
                              sync2.data("owl.carousel").to(current - onscreen, 100, true);
                         }
                    }

                    function syncPosition2(el) {
                         if (syncedSecondary) {
                              let number = el.item.index;

                              sync1.data("owl.carousel").to(number, 100, true);
                         }
                    }

                    sync2.on("click", ".owl-item", function(e) {
                         e.preventDefault();
                         let number = $(this).index();
                         sync1.data("owl.carousel").to(number, 300, true);
                    });
               });
          </script>
</body>

<!-- Mirrored from html.crumina.net/html-olympus/02-ProfilePage.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jul 2023 01:25:57 GMT -->

</html>