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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'incuca-tech' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         't-]!g{te/F$mcAp#bpQDpCeb+f[QMK72:F!8y`N<~* peYR=%(S}O_T<8]YQN;b+' );
define( 'SECURE_AUTH_KEY',  'H&!fld&,BbC1cne`&<g=o+S<1>#C%@`yTR:Nu_^;=m.;N_t`*V7HQ2HU rYbCbRA' );
define( 'LOGGED_IN_KEY',    '!!>]kI4>t(4p_[Kx*VN%$6U9BF.|9G7/,9uD$Y~>3I<a8:WSL.YR_&Z9kN^2}lsW' );
define( 'NONCE_KEY',        'ujDv;T[{VI::U<$vefT>[p{~TuY^oLnvKp ^ziC~.hU`RboZ~[2g_Y}g.i11H5vP' );
define( 'AUTH_SALT',        '=AiuK7~bQNOmnv5WXl(w5FS!k]^G79oDO/Q2iE 4>2fSbp&zs.qLlZfBXoK=PE_R' );
define( 'SECURE_AUTH_SALT', '4H`0a i9I2rt-[kV<Y${R+84acf7Vx?+UQ#=#~BXIuA_J9&OW:p-`.!B)K:<XPKI' );
define( 'LOGGED_IN_SALT',   'ccz^k1ed9AN[0aSD6Ay!J`K$MB97{v-,TR0B)QQR+t:qPw>%V[j7Chl[BIj#(RD+' );
define( 'NONCE_SALT',       'y)+X[`Iqd%e$?H+wr~dWZ<K?P2+z/{X~5dz.HU36}b^/GIXOuFe}Q~X+g/]%Q<* ' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'cuca_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
