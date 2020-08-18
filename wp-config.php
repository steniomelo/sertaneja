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
define( 'DB_NAME', 'sertaneja2' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'XRp%,m!d4D 3z)4SDp-9PAqG.Jgy5=-ZQ|C_x3; xV6QG;soZ/-(PFS,fwJPW*wB' );
define( 'SECURE_AUTH_KEY',  'ttx>b/#:9cCh~}>ZX`?eJeunodk~`;rYYH~~-1[?@Fg p VTw`_/t=lWD?-QCQxu' );
define( 'LOGGED_IN_KEY',    '^^=&8.zX9{|WZ4CRua|^n ?FLyPPnP>5%M.PWsawLy:=N$]Qz##uRN4N]MRmdaF&' );
define( 'NONCE_KEY',        '(wCed]~^E4MWNWwgi54u awLyo,*fP}&GbO7TXf.S|[A8 NTfmfmWKw,UGHt`XF7' );
define( 'AUTH_SALT',        'IazPPjI)|Ks9d@S=Zhgu r)bB0$r&kiq6;F:6V-)<[BI]`Xm+!6-*)/DWp#){$(j' );
define( 'SECURE_AUTH_SALT', 'vA(/:;L4Q$]!s~9Bb#=,e)SB#XxzPCCO,pk)MLi5uC1X[tJ]bP?!e/3FuP@)T#([' );
define( 'LOGGED_IN_SALT',   '+z`&#7>K&Su:+_<>O&~;Ck+/VrUiXpm2:zkl5^E&<opdJZj2:tMU-]bG<Ri#f{I5' );
define( 'NONCE_SALT',       'HVojW?(ef4sX[|s{:>8i0Jg:B+.vq/M37B=Y%0F0fJO2`Do43^4(E[+o!OkAlz>&' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
