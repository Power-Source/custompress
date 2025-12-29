<?php
/*
Plugin Name: CustomPress
Plugin URI: https://cp-psource.github.io/custompress/
Description: CustomPress - Benutzerdefinierter Post-, Taxonomie- und Feldmanager.
Version: 1.0.0
Author: PSOURCE
Author URI: https://github.com/Power-Source
Text Domain: custompress
Domain Path: languages
License: GNU General Public License (Version 2 - GPLv2)
Network: false
*/



/*
Copyright 2020-2026 PSOURCE, (https://github.com/Power-Source)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License (Version 2 - GPLv2) as published by
the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/
// PS Update Manager - Hinweis wenn nicht installiert
add_action( 'admin_notices', function() {
    // Prüfe ob Update Manager aktiv ist
    if ( ! function_exists( 'ps_register_product' ) && current_user_can( 'install_plugins' ) ) {
        $screen = get_current_screen();
        if ( $screen && in_array( $screen->id, array( 'plugins', 'plugins-network' ) ) ) {
            // Prüfe ob bereits installiert aber inaktiv
            $plugin_file = 'ps-update-manager/ps-update-manager.php';
            $all_plugins = get_plugins();
            $is_installed = isset( $all_plugins[ $plugin_file ] );
            
            echo '<div class="notice notice-warning is-dismissible"><p>';
            echo '<strong>PSOURCE MANAGER:</strong> ';
            
            if ( $is_installed ) {
                // Installiert aber inaktiv - Aktivierungs-Link
                $activate_url = wp_nonce_url(
                    admin_url( 'plugins.php?action=activate&plugin=' . urlencode( $plugin_file ) ),
                    'activate-plugin_' . $plugin_file
                );
                echo sprintf(
                    __( 'Aktiviere den <a href="%s">PS Update Manager</a> für automatische Updates von GitHub.', 'psource-chat' ),
                    esc_url( $activate_url )
                );
            } else {
                // Nicht installiert - Download-Link
                echo sprintf(
                    __( 'Installiere den <a href="%s" target="_blank">PS Update Manager</a> für automatische Updates aller PSource Plugins & Themes.', 'psource-chat' ),
                    'https://github.com/Power-Source/ps-update-manager/releases/latest'
                );
            }
            
            echo '</p></div>';
        }
    }
});

/* Define plugin version */
if( !defined('CPT_VERSION') ) define ( 'CPT_VERSION', '1.0.0' );
/* define the plugin folder url */
if( !defined('CPT_PLUGIN_URL') ) define ( 'CPT_PLUGIN_URL', plugin_dir_url(__FILE__) );
/* define the plugin folder dir */
if( !defined('CPT_PLUGIN_DIR') ) define ( 'CPT_PLUGIN_DIR', plugin_dir_path(__FILE__) );
/* define the text domain for CustomPress */
if( !defined('CPT_TEXT_DOMAIN') ) define ( 'CPT_TEXT_DOMAIN', 'custompress' );

//define('CT_ALLOW_IMPORT', true);


/* include CustomPress files */
include_once 'core/core.php';
include_once 'core/content-types.php';
include_once 'core/functions.php';

if ( is_admin() ) include_once 'core/admin.php';


