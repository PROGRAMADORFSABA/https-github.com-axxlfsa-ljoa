<?php 

class Config
{
    /*INFORMÃÇÕES BÁSICAS DO SITE
    const SITE_URL = 'http://localhost:8081/lojaphp';
    const SITE_PASTA = 'lojaphp';
    const SITE_NOME = 'Loja do Freitas - PHP 7 e Mysqli';
    const SITE_EMAIL_ADM = 'lojavirtualfreitas@gmail.com';
    const BD_LIMIT_POR_PAG = 6;
    const SITE_CEP = '31535522';*/

    /*INFORMAÇÕES DO BANCO DE DADOS
    const BD_HOST = 'localhost';
    const BD_USER = 'root';
    const BD_SENHA = 'root';
    const BD_BANCO = 'qc_loja';
    const BD_PREFIX = 'qc_';*/

    //INFORMÃÇÕES BÁSICAS DO SITE HOSPEDADO
    const SITE_URL = 'http://www.devnogueira.online/';
    const SITE_PASTA = '';
    const SITE_NOME = 'Site em Desenvolvimento ';
    const SITE_EMAIL_ADM = 'tec.alexnogueira@gmail.com';
    const BD_LIMIT_POR_PAG = 6;
    const SITE_CEP = '31535522';

    //INFORMAÇÕES DO BANCO DE DADOS HOSPEDADO
    const BD_HOST = 'sql179.main-hosting.eu.';
    const BD_USER = 'u325780549_teste';
    const BD_SENHA = 'Bruna2012*';
    const BD_BANCO = 'u325780549_teste';
    const BD_PREFIX = 'u325780549_';

    //INFORMAÇÕES PARA PHP MAILLER
    const EMAIL_HOST = 'smtp.gmail.com';
    const EMAIL_USER = 'tec.alexnogueira@gmail.com';
    const EMAIL_NOME = 'Developer Alex';
    const EMAIL_SENHA = '88130512';
    const EMAIL_PORTA = 587;
    const EMAIL_SMTPAUTH = true;
    const EMAIL_SMTPSECURE = 'tls';
    const EMAIL_COPIA = 'suporte@alexnogueira.tech';

    //CONSTANTES PARA O PAGSEGURO
    const PS_EMAIL = 'silvalov@gmail.com'; // email pagseguro
    const PS_TOKEN = 'A5482902462F4CF58C23A5E140A39DF6'; // token produção
    const PS_TOKEN_SBX = '1FB4D7860EA9491BA7AB4A9D9336C275';  // token do sandbox
    const PS_AMBIENTE = 'production'; // production   /  sandbox
}
 ?>

