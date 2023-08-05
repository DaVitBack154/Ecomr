<style>
    .search-bar {
        margin-left: 515px;
    }
</style>
<header class="header" id="site-header">

    <div class="page-title">
        <h6 class="title">ecom</h6>
    </div>

    <div class="header-content-wrapper">
        <div class="control-block">

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

    <div class="header-content-wrapper align-items-center">
        <div></div>
        <div>
            <p class="mb-0 pb-0 text-mobile title"></p>
        </div>
        <ul class="nav nav-tabs mobile-notification-tabs" id="mobile-notification-tabs" role="tablist" style="display: flex;justify-content: flex-end;">

            <li class="nav-item" role="presentation" style="align-self: flex-end;">
                <a class="nav-link me-2" id="search-tab" data-bs-toggle="tab" href="#search" role="tab" aria-controls="search" aria-selected="false">
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

        <!-- <form class="search-bar w-search notification-list friend-requests">
            <div class="form-group with-button">
                <input class="form-control js-user-search" placeholder="Search here people or pages..." type="text">
            </div>
        </form> -->

    </div>

    </div>
    <!-- ... end  Tab panes -->

</header>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<script>
    let url = $(location).attr('pathname').split("/");
    // index.php
    if (url[2] == "" || url[2] == "index.php") {
        $(".title").text('Homepage');
    } else if (url[2] == "categories.php") {
        $(".title").text('page2');
    } else if (url[2] == "page3.php") {
        $(".title").text('E-industry.Net');
    } else if (url[2] == "page4.php") {
        $(".title").text('page4');
    } else if (url[2] == "page5.php") {
        $(".title").text('page5');
    }
</script>