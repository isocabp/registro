<?php
/* Posts mais visualizados */
// Verifica se não existe nenhuma função com o nome tutsup_session_start
if (!function_exists('tutsup_session_start')) {
    // Cria a função
    function tutsup_session_start()
    {
        // Inicia uma sessão PHP
        if (!session_id()) session_start();
    }
    // Executa a ação
    add_action('init', 'tutsup_session_start');
}
// Verifica se não existe nenhuma função com o nome tp_count_post_views
if (!function_exists('tp_count_post_views')) {
    // Conta os views do post
    function tp_count_post_views()
    {
        // Garante que vamos tratar apenas de posts
        if (is_single()) {

            // Precisamos da variável $post global para obter o ID do post
            global $post;

            // Se a sessão daquele posts não estiver vazia
            if (empty($_SESSION['tp_post_counter_' . $post->ID])) {

                // Cria a sessão do posts
                $_SESSION['tp_post_counter_' . $post->ID] = true;

                // Cria ou obtém o valor da chave para contarmos
                $key = 'tp_post_counter';
                $key_value = get_post_meta($post->ID, $key, true);

                // Se a chave estiver vazia, valor será 1
                if (empty($key_value)) { // Verifica o valor
                    $key_value = 1;
                    update_post_meta($post->ID, $key, $key_value);
                } else {
                    // Caso contrário, o valor atual + 1
                    $key_value += 1;
                    update_post_meta($post->ID, $key, $key_value);
                } // Verifica o valor

            } // Checa a sessão

        } // is_single

        return;
    }
    add_action('get_header', 'tp_count_post_views');
}

function s3_title()
{
    if (is_front_page()) {
        bloginfo('name');
        if (get_bloginfo('description')) {
            echo ' | ' . get_bloginfo('description');
        }
    } else if (is_tax() || is_category()) {
        single_term_title('', true);
        echo " | ";
        bloginfo('name');
    } else if (is_archive()) {
        post_type_archive_title();
        echo " | ";
        bloginfo('name');
    } else if (is_single()) {
        single_post_title('', true);
        echo " | ";
        bloginfo('name');
    } else {
        wp_title('', true);
        echo " | ";
        bloginfo('name');
    }
}

function nomeAgencia()
{
    echo 'Agência S3';
}

function s3_cliente_title()
{
    bloginfo('name');
    if (get_bloginfo('description')) {
        echo ' | ' . get_bloginfo('description');
    }
}

function s3_clamp($texto, $limite = 360, $quebra = false)
{

    $tamanho = strlen($texto);
    if (!empty($texto)) {
        if ($tamanho <= $limite) {
            $novo_texto = $texto;
        } else {
            if ($quebra == true) {
                $novo_texto = trim(substr($texto, 0, $limite)) . ' ...'; 
            } else {
                $ultimo_espaco = strrpos(substr($texto, 0, $limite), ' ');
                $novo_texto = trim(substr($texto, 0, $ultimo_espaco)) . ' ...';
            }
        }
    }
    echo $novo_texto;
}

function s3_contact_link($contato)
{
    if ($contato['referencia'] == 'tel:' || $contato['referencia'] == 'https://wa.me/55') {
        echo $contato['referencia'] . str_replace(['(', ')', '-', '.', ' '], '', $contato['contato']);
    } else if ($contato['referencia'] == 'mailto:') {
        echo $contato['referencia'] . $contato['contato'];
    } else {
        echo $contato['link'];
    }
}

function youtube($video){
    $video = explode("?v=", $video);
    return $video[1];
}