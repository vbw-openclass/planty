<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'uC ro=ji$.A+8%poQkk5KXXcbPD7=Q+OsC2_D:F48l,u3{3chRgUpk*,H%Xq=$e5' );
define( 'SECURE_AUTH_KEY',  ',`B6Z`o5uI}t{(}gckF0;:b@w0V4uGZF~-+9f5;%Eq--H5i{*Pn9tNT P@5+1IW$' );
define( 'LOGGED_IN_KEY',    'Rz= yY/jp[x+c~4brDb/$,nUaz3P|^&=WSz!]15N;b.^ydcl0=:eT^pl F2CiI/!' );
define( 'NONCE_KEY',        'v_jUnvrY:4=-0^v,MZ7$|p/yCT8;o7_^PA1O,vTn|Ho6bh,wEV;}#O-`mHB*ZQ:^' );
define( 'AUTH_SALT',        'h~mqsiBRGjqt5kJN&4Qsk^c]G:wF% z5:sGs6-K=h$XU7,LO2i.tj_vv_4NFT5BU' );
define( 'SECURE_AUTH_SALT', '-W9]z=tu/+^-cqcm&Dz_ |%=Ij1.id$e YF3fn6HR.>.DQ]$&|[?,lJuI>m1}p{7' );
define( 'LOGGED_IN_SALT',   'T^2-{nPip0Rf.EF&s&u7jfh3a/!x;:>#k`v[0Bs}li Ts&uHU1-&)&I[Pt}rdp6y' );
define( 'NONCE_SALT',       '|:N=I2D#x;js(FXWU0uc1lKGM ]J|}q~S}2`Uo`(6u3ihs`H]$}>])+d:WEpkeBQ' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
