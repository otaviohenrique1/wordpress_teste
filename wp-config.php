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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress_teste' );

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
define( 'AUTH_KEY',         '?FZAq;inkpFyNg%HO!;b{QIG3:_[^m3iTc=z#<O_56I9EqgU0<_Kgzi*x%f/^u0B' );
define( 'SECURE_AUTH_KEY',  ']EMA:3d`Th;L]:(BS=Ay~Mu[`?Vd!,|V7C1K3+A9>*kYc@A-M+$b@jRK>{e|b8d%' );
define( 'LOGGED_IN_KEY',    'ym?6`g*)CHH[se_x2$*NI.o9(}/HedS0{-M)#s@w|CL<Kg<`6^b{USHhMvlutX5w' );
define( 'NONCE_KEY',        'Wm@Jd$2xB0q$j#!3]6NZ.!msw_~t9tNr$=gA^FU@S!6t~s#b<yt.ycz+Dx/trO`<' );
define( 'AUTH_SALT',        'NJI@-/V)jpE1o&`7s<(Z@>BrD2uX/~3SDjr(q9R&Xp4=;GAxIBzN*0D|C<UHLs[{' );
define( 'SECURE_AUTH_SALT', '-7LSqgk/KQj{X=Y4{me0vQtZHL+H1ZV?Ej8{%gn)q.c2Ddw.W0EUcEiD,8Ft)GF-' );
define( 'LOGGED_IN_SALT',   ':vdk6K$IP&0f7+1zX|U`MFb1QL3m2W8nwr-s929Ky9;PKrY93pO@>BzQt_o+DzvP' );
define( 'NONCE_SALT',       '+X-YjWhLmgA+xF@,+6$1QqmYYvT?Fd*&=!7~;(kAS:[_J d/i1. ij@L`lbKz v6' );

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
