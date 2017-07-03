<?php
/*
 * Inicializa as configuração do ambiente
 */

// Inicia o ambiente de desenvolvimento

define('ENVIRONMENT', 'development');

if(ENVIRONMENT == 'development') {
    // Caminho para a raiz
    define( 'SRCPATH', dirname( __FILE__ ) );
    // Caminho para a pasta de uploads
    //define( 'UP_ABSPATH', SRCPATH . '/views/_uploads' );
    // URL da home
    define( 'HOME_URI', 'http://www.k&k.pc' );
    // Nome do host da base de dados
    define( 'HOSTNAME', 'localhost' );
    // Nome do DB
    define( 'DB_NAME', 'kkbd' );
    // Usuário do DB
    define( 'DB_USER', 'root' );
    // Senha do DB
    define( 'DB_PASSWORD', '' );
    // Charset da conexão PDO
    define( 'DB_CHARSET', 'utf8' );

} elseif (ENVIRONMENT == 'debug') {
    
    define( 'SRCPATH', dirname( __FILE__ ) );
    define( 'HOME_URI', 'http://www.kk.pc' );
    define( 'HOSTNAME', 'localhost' );
    define( 'DB_NAME', 'kandk' );
    define( 'DB_USER', 'root' );
    define( 'DB_PASSWORD', '' );
    define( 'DB_CHARSET', 'utf8' );
    
} elseif (ENVIRONMENT == 'host') {
    
    define( 'SRCPATH', dirname( __FILE__ ) );
    define( 'HOME_URI', 'http://www.kk.pc' );
    define( 'HOSTNAME', 'localhost' );
    define( 'DB_NAME', 'kandk' );
    define( 'DB_USER', 'root' );
    define( 'DB_PASSWORD', '' );
    define( 'DB_CHARSET', 'utf8' );
    
}