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
define('DB_NAME', 'infork');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '8Y(CsKl3xj6TQ8{NTZ%.W>U_@m8,g8(se24<X(/dI4/:gk<[LLC7VdovFC< #)41');
define('SECURE_AUTH_KEY',  'xQ`:~vc>;06Xdks>C~Cwjm&A-0,G49UDAeSqcU6}sIt!@;g{>lA*Ic$:cwswkTF ');
define('LOGGED_IN_KEY',    '{SC=cLAM:)|N+yaSaK2[9|E?;7Y1eT:YL#0k[ME<^3D1R6%8<MA;yQ:s/fw|?wbF');
define('NONCE_KEY',        'nxmBUBMKJ&,6!$VMUG6u?@3(Kndw^Bh%W*eJq6B@w!MaCaBu_{wD^fZ/8B6m?3H7');
define('AUTH_SALT',        'p*&=J9`P<($P*4tTrmMIlnock0O3y_l+!9B$A{UY#1gMzA?`W~+4}-j/aGsDfI!G');
define('SECURE_AUTH_SALT', 'cQHBK#q/<=D~b_FW*(f0u/H|6PPLlii;K1:gulj~=J}@ltu9%|55:`d;$OGS) t&');
define('LOGGED_IN_SALT',   'q[uwx8N,gR=RlHNmlnlaY!m>`a$^lp0<s/*L9^9MGy1UKq<b0tSY^x{(iBREDaw9');
define('NONCE_SALT',       ']axf|haV_<zX8JzshRk6e}|5v8mu)p)8V}K>9MI$@jt4X)vc~[!w4#6g>!/D :%O');

define('JWT_AUTH_SECRET_KEY', '7_}V@ O|ThT3DWg9!,GbM#QX..CZ^/C0_R>hc@Ymo?_J`N|8(!o3D0`[2y1@uCaq');
define('JWT_AUTH_CORS_ENABLE', true);

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'infork_';

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
