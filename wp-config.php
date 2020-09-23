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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '*lgXUz-0EL{s%^n`oUSN]r}SUce?Cg@`T4KuqF<6c0h-RS.v0tKt=K|eUwuhe{K,' );
define( 'SECURE_AUTH_KEY',  'Yx9kc5-x?jt~ScaUwHcSL/U]pW^%lD|IK[.4PjAlvV{Xq0k39 H T(@4nros:== ' );
define( 'LOGGED_IN_KEY',    'RR<3S)Mqz,I+q=83U%AuUB}?;LV)+]*6joX|R%,T%U^vWK!7<CL.O~cq;?_r{5 /' );
define( 'NONCE_KEY',        'H|itB?DyZ,f~:^-c$@!>{G3]O@;S_i3Lds7#]1Ob:UvCdC[CNc/7]HpF<?Cm72u!' );
define( 'AUTH_SALT',        ' IIzUP- &,-m[_Y:@Es.Vprd4?uBF=*k!D8#V+;c&lf=nI3_+M[XB5j1!gj*hPTI' );
define( 'SECURE_AUTH_SALT', 'o*~XJ9 XXw5AUVrjM*/ 2LYq-H[QCkxei=C{)Ho1ws:G:OdOD*O*Pw<h<>--=,`t' );
define( 'LOGGED_IN_SALT',   'N2)WmEF@[HM>4+/`7=zD8vZD2[~lhpS~(Is^A-(:Yl=4fzV2fh2;^PBJ{j6Sa7;E' );
define( 'NONCE_SALT',       '!4rYpsi3|+KreDvMYxwilU)QS2-B#57`(HFinV?gk}MW;0uqOMf1BR?{/{r>b`$|' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
