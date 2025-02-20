<?php
add_action( 'admin_post_nopriv_login_form', 'login_form_data' );
add_action( 'admin_post_login_form', 'login_form_data' );
function login_form_data() {
    $login = $_POST["login"];
    $password = $_POST["senha"];
    $creds = array(
        'user_login'    => $login,
        'user_password' => $password,
        'remember'      => true
    );
    $user = wp_signon( $creds, false );
    wp_safe_redirect( home_url() );
}