<div class="tab-pane fade" id="settings">			
    <div class="settings">
        <div class="profile">
            <img class="avatar-xl" src="./asset/img/avatars/avatar-male-1.jpg" alt="avatar">
            <h1><a href="#">Michael Knudsen</a></h1>
            <span>Helena, Montana</span>
            <div class="stats">
                <div class="item">
                    <h2>122</h2>
                    <h3>Fellas</h3>
                </div>
                <div class="item">
                    <h2>305</h2>
                    <h3>Chats</h3>
                </div>
                <div class="item">
                    <h2>1538</h2>
                    <h3>Posts</h3>
                </div>
            </div>
        </div>
        <div class="categories" id="accordionSettings">
            <h1>Settings</h1>

            <!-- Start of My Account -->
            <?php require_once SITE_ROOT."/Views/layout/sidebar/settings/my-account.php"; ?>
            <!-- End of My Account -->

            <!-- Start of Chat History -->
            <?php require_once SITE_ROOT."/Views/layout/sidebar/settings/chat-history.php"; ?>
            <!-- End of Chat History -->

            <!-- Start of Notifications Settings -->
            <?php require_once SITE_ROOT."/Views/layout/sidebar/settings/notifications-settings.php"; ?>
            <!-- End of Notifications Settings -->

            <!-- Start of Connections -->
            <!-- <?php require_once SITE_ROOT."/Views/layout/sidebar/settings/connections.php"; ?> -->
            <!-- End of Connections -->

            <!-- Start of Appearance Settings -->
            <!-- <?php require_once SITE_ROOT."/Views/layout/sidebar/settings/appearance-settings.php"; ?> -->
            <!-- End of Appearance Settings -->

            <!-- Start of Language -->
            <!-- <?php require_once SITE_ROOT."/Views/layout/sidebar/settings/language.php"; ?> -->
            <!-- End of Language -->

            <!-- Start of Privacy & Safety -->
            <?php require_once SITE_ROOT."/Views/layout/sidebar/settings/privacy-safety.php"; ?>
            <!-- End of Privacy & Safety -->

            <!-- Start of Logout -->
            <div class="category">
                <a href="/?signin" class="title collapsed">
                    <i class="material-icons md-30 online">power_settings_new</i>
                    <div class="data">
                        <h5>Power Off</h5>
                        <p>Log out of your account</p>
                    </div>
                    <i class="material-icons">keyboard_arrow_right</i>
                </a>
            </div>
            <!-- End of Logout -->
        </div>
    </div>
</div>