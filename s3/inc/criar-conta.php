<?php
add_action( 'admin_post_nopriv_cadastro_form', 'cadastro_form_data' );
add_action( 'admin_post_cadastro_form', 'cadastro_form_data' );
function cadastro_form_data() {
    $nome = $_POST["name"];
    $username = $_POST["email"];
    $password = $_POST["senha"];
    $email_address = $_POST["email"];
    if (!username_exists($username)) {
        $userdata = array(
            'user_login' => $username,
            'user_pass' => $password,
            "first_name" => $nome,
            "user_email" => $email_address
        );

        $user_id = wp_insert_user($userdata);

        global $wpdb;
        $wpdb->insert('s3_users_dados', array(
            'user_id' => $user_id,
            'cpf' => $_POST["cpf"],
            'cep' => $_POST["cep"],
            'telefone' => $_POST["telefone"],
            'endereco' => $_POST["endereco"],
            'numero' => $_POST["numero"],
            'complemento' => $_POST["complemento"],
            'bairro' => $_POST["bairro"],
            'estado' => 1,
            'cidade' => 1
        ));

        wp_safe_redirect( home_url()."/login?mensagem=sucesso" );
    } else {
        wp_safe_redirect( home_url()."/login?mensagem=erro" );
    }
}