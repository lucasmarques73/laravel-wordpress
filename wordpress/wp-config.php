<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'lucas');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '123456');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'U7AkgGiw &m&/XS#7R7KJ8$PM. gvH&K~18TwLG`&`Jki W#ZvSpKN(@kDEV=F?|');
define('SECURE_AUTH_KEY',  'W7}0&LqzEoK7z^L<@~,awwj6oyN?:4C^HN)rw)[|5[7IW&l3=l^_zq!d$&zxgdN*');
define('LOGGED_IN_KEY',    ';Fz/L+ZLKNt6|[uhb7.K9a%~ky`.cXDLunuw7iO:#6i[2C724LE%W^GJi;*TenAd');
define('NONCE_KEY',        '=N?H}9<56PX8Mrg^|?aN_J:RL|GsS!w4v>eESJ{3+70*+wJbm#b/,s=-*VgSarba');
define('AUTH_SALT',        '5!)5Ahe?&TZfkv(h~e7vmi_I<QpbF~1*pHg#9dhvyN_PO.MK(^MxJ%$:[b7&e%?*');
define('SECURE_AUTH_SALT', ':/t;/bU,CU3U[Cn|#yYH>:{X1R]0k)hA%7TEm ${Vo;Q-1%X*zxY>co :w3)<T@{');
define('LOGGED_IN_SALT',   '1Vk=Y?t#&E+q)1B9HSQrBeG)]di4+YA>Lf0gl#]p6z3U8DdoTrM?PWjn(`Bxc?Rw');
define('NONCE_SALT',       '7>5%?a_]/faSw.`~i85i,B`o|X:>rL3X3~zZC-vmDpcnAs]EeREU*`ZbT:rSgGp8');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');