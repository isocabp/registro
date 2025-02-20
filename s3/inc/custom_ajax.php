<?php

/**/
//Adiciona um script para o WordPress
add_action( 'wp_enqueue_scripts', 'secure_enqueue_script' );
function secure_enqueue_script() {
    wp_register_script( 'secure-ajax-access', esc_url( add_query_arg( array( 'js_global' => 1 ), site_url() ) ) );
    wp_enqueue_script( 'secure-ajax-access' );
}

//Joga o nonce e a url para as requisições para dentro do Javascript criado acima
add_action( 'template_redirect', 'javascript_variaveis' );
function javascript_variaveis() {
    if ( !isset( $_GET[ 'js_global' ] ) ) return;

    $nonce = wp_create_nonce('mais_categorias_nonce');

    $variaveis_javascript = array(
        'mais_categorias_nonce' => $nonce, //Esta função cria um nonce para nossa requisição para buscar mais notícias, por exemplo.
        'xhr_url'             => admin_url('admin-ajax.php') // Forma para pegar a url para as consultas dinamicamente.
    );

    $new_array = array();
    foreach( $variaveis_javascript as $var => $value ) $new_array[] = esc_js( $var ) . " : '" . esc_js( $value ) . "'";

    header("Content-type: application/x-javascript");
    printf('var %s = {%s};', 'js_global', implode( ',', $new_array ) );
    exit;
}

add_action('wp_ajax_nopriv_mais_categorias', 'mais_categorias');
add_action('wp_ajax_mais_categorias', 'mais_categorias');

function mais_categorias() {
    if( ! wp_verify_nonce( $_POST['mais_categorias_nonce'], 'mais_categorias_nonce' ) ) {
        echo '401'; // Caso não seja verificado o nonce enviado, a requisição vai retornar 401
        die();
    }
    //Busca os dados que queremos
    $terms = get_terms("categorias",
        array( 'parent' => $_POST['paged'], 'orderby' => 'slug', 'hide_empty' => false ) );

    $options = "<option value=''>Selecionar</option>";
    foreach($terms as $cat){
        $options .= "<option value='".$cat->term_id."'>".$cat->name."</option>";
    }

    //Caso tenha os dados, retorna-os / Caso não tenha retorna 402 para tratarmos no frontend
    if(empty($terms)){
        echo 401;
    }else{
        echo  $options;
    }
    exit;
}
