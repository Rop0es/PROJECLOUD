<?php
/**
 * Plugin Name: Forzar Configuración y Botón Nextcloud SSO (Redirección Directa)
 * Description: Envía al usuario directamente a Nextcloud saltándose intermediarios de WordPress.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// 1. Inyección de opciones en la base de datos
add_action('init', function() {
    $nextcloud_url = 'https://cloud.projecloud.cat/'; 
    
    update_option('tims_nextcloud_sso_url', $nextcloud_url);
    update_option('tims_nextcloud_sso_client_id', 'iU5Nc7xQ8hUcl6kwmElAXxz6ai5lP7WfLJpGFag4ZcPwwa2hGOYrUDGKIEl6jy8r');
    update_option('tims_nextcloud_sso_client_secret', 'XPqQWVlS8XhmOdoCprApD0PMGxW13BsHKwoAxXhrFKMxwY7PBRIszBjxX3KWUC9m');
    update_option('tims_nextcloud_sso_login_button', '1');
    update_option('tims_nextcloud_sso_default_role', 'subscriber');
});

// 2. Captura del clic y salto inmediato hacia tu Nextcloud
add_action('init', function() {
    if (isset($_GET['sso_action']) && $_GET['sso_action'] === 'nextcloud_login') {
        
        $client_id = 'iU5Nc7xQ8hUcl6kwmElAXxz6ai5lP7WfLJpGFag4ZcPwwa2hGOYrUDGKIEl6jy8r';
        $redirect_uri = urlencode('https://projecloud.cat/wp-json/tims-nextcloud-sso/callback');
        $state = md5(uniqid(rand(), true));
        
        // Creamos una sesión efímera para guardar el estado de seguridad (evita ataques CSRF)
        if (!session_id()) { session_start(); }
        $_SESSION['oauth2state'] = $state;

        // Construimos la URL exacta que tu Nextcloud necesita para pedir login
        $oauth_url = "https://cloud.projecloud.cat/index.php/apps/oauth2/authorize?response_type=code&client_id={$client_id}&redirect_uri={$redirect_uri}&state={$state}";
        
        // Forzamos la salida de la web hacia Nextcloud
        wp_redirect($oauth_url);
        exit;
    }
});

// 3. Dibujar el botón en la pantalla de acceso
add_action('login_form', function() {
    echo '<div style="margin-bottom: 20px; text-align: center; width: 100%; display: block; clear: both;">';
    echo '<hr style="border: 0; border-top: 1px solid #ddd; margin: 20px 0;">';
    echo '<a href="' . esc_url(site_url('wp-login.php?sso_action=nextcloud_login')) . '" class="button button-primary button-large" style="background:#0082c9; border-color:#0082c9; width:100%; text-align:center; display:block; padding: 5px 0; font-size: 14px; font-weight: bold;">Iniciar sesión con Nextcloud</a>';
    echo '</div>';
});

// 4. Corrección SSL obligatoria para Dinahosting
add_action('wp_loaded', function() {
    if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
        $_SERVER['HTTPS'] = 'on';
    }
});