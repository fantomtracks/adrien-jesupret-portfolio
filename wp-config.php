<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'adrien-jesupret' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '$.lOY5tk|x3kl49p`SFGp7Pogtr(h>;z9.v?ZQkjg[tDpeuB6P&d/?q5FoJ(~Cpx' );
define( 'SECURE_AUTH_KEY',  'mLa4V*`,?e*x43o`Ono+0z@q7:,j@xwKO.%OtYyU?nApP[y}:eB-b_}3}A.!Ds>7' );
define( 'LOGGED_IN_KEY',    '?Q4a-hYkA7V`RHOd&<^mMOV<iadymRwR!5 @2>8x4^@jz=mz{1<;h;gp9s;k#{ZJ' );
define( 'NONCE_KEY',        'Gfzq:Uu_Pj;$xt6?oX(mp@>M:P{5/:}C-XEqpG*Rn,2Ut50J.saL01Kq?#q:7ZjI' );
define( 'AUTH_SALT',        'kDh30;3steqai>dgVfFVxIOt@c=Ct%bbyU7Sy7#&6~l}>dizpJ$#J-(jEF?FFKtj' );
define( 'SECURE_AUTH_SALT', '%Y!ZNaXb(!$;=%/|k4?o@bXem!F1jDT#(x:vE5$2B,>1H(QFt(A|gwn(<rA=pN4M' );
define( 'LOGGED_IN_SALT',   's-yZfBbiS63Hh|J#)B2K@hGkCTWvO#l>TR?@n2A,E^Xd;<4-$j}.2!-{1]qbY+7E' );
define( 'NONCE_SALT',       'uw]n4RJ0~b(wm,ojbv4Vmu=YeM/#$wMq0 nHsL~9cFArRja].O1zvA%^cH{#ZvG#' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
