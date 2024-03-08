# Amoedo SGE (Sistema de Gerenciamento de Eventos)

## Introdução

Bem-vindo à documentação do Sistema de gerenciamento de eventos da Amoedo Distribuidora.  O sistema foi desenvolvido utilizando o PHP, versão mais recente (8.2.4), e utiliza o banco de dados MySQL (8.0) para armazenar os dados.

## Instalação e Configuração do Projeto

### Pré-requisitos

Antes de começar, certifique-se de ter os seguintes requisitos instalados em seu sistema:

1. [Composer](https://getcomposer.org/): Um gerenciador de dependências para PHP.
2. [XAMPP](https://www.apachefriends.org/index.html) ou outro servidor MySQL e PHP.
3. [Git](https://git-scm.com/downloads): Para controle de versão.

### Passos para Instalação

1. Clone o repositório:

    ```bash
    git clone https://github.com/Amoedo-SGE/sistema-amoedo.git
    ```

2. Navegue até o diretório do seu projeto:

    ```bash
    cd sistema-amoedo
    ```

3. Inicie o json do Composer:

    ```bash
    composer init
    ```

    
4. Instale as dependências do Composer:

    ```bash
    composer install
    ```

5.  Abra o arquivo `config.php` e configure as variáveis de ambiente, especialmente as relacionadas à conexão com o banco de dados.

       ```dotenv
      $servername = "seuserver";
      $username = "seuusuario";
      $password = "suasenha";
      $dbname = "seubdd";
       ```
       
6. Importe o arquivo sql `amoedo_sge.sql` para criar as tabelas do banco de dados
