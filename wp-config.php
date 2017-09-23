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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'symac');

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
define('AUTH_KEY',         'H=EgY=uiZki:12[x~<];G%LQ?Q{1kg|8UXm/|2gkzBfzAu9&9hTa4nM%TvM<p2lp');
define('SECURE_AUTH_KEY',  'fw],%C+5PFtPl(VlxXQ{)h``mKUs9`d:?@b-j76N11t8ilgnl1$~T_vXxoZv^,5n');
define('LOGGED_IN_KEY',    's[Q5XGs~Ey$`opGX:RmS)_mLCZGyFOc$s]@SAg<b%O=F*#qj+lHpSm;e>R7]pUp{');
define('NONCE_KEY',        'uendY dqEEqb4Vje>[2~JC/wym_b*V`Kt@[+2UJA[qs>Sx])I<xBOT*oiJx$J(xy');
define('AUTH_SALT',        'WO_B*nw>W;``jNubCo26%zf,dgPrU$EyaWr~p{ZRREQNwh{&}T95Rg9NgF5<+X#=');
define('SECURE_AUTH_SALT', 'Ea$LM^4`jH^ZAH9]yrgO[0>kaF?gPDFS,/]s~KmV_^s A5Ul;m}dFsrA^L]b!+Um');
define('LOGGED_IN_SALT',   '(Q<JR|B?%>6!f5~QKQyOiK3rsx*q$sg#[]?.JTG3b8$t,1ufp^78.-#;>-8ZxsPA');
define('NONCE_SALT',       '@GW3A!a%J7l <oOV35=9EKrNzzMvfBpmom>B]V@.u{FVvNMry}@fRSuS$`t.p?Us');
define('FS_METHOD','direct');

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
