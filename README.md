# PROJETO - TESTE ARIZONA - CODEIGNITER 3 / MIGRATIONS / SIGLAS_PAISES
## Sobre
Este é um modelo inicial com CodeIgniter 3.1.x e ferramentas de migração e propagação de banco de dados.

### Recursos
- [x] CodeIgniter Migration with CodeIgniter Command Line Interface (CLI)
- [x] CodeIgniter Database seeding with CodeIgniter Command Line Interface (CLI)
- [x] [Faker PHP Library](https://github.com/fzaninotto/Faker)

### Configuração banco de dados / localhost
- application/config/config.php
   - $config['base_url'] = 'http://localhost/teste_arizona/'; |

- application/config/database.php
  - 'hostname' => 'localhost',
  - 'username' => 'root',
  - 'password' => '',
  - 'database' => 'test-arizona',
  - 'dbdriver' => 'mysqli',
  

### Para Fazer
- [ ] Pretty CLI commands

### Instalação
1. Clone este repositório
`` git clone https://github.com/thamiresandradee/arizona-test-dev-php.git``
2. Instale todos os pacotes necessários com o Composer com sua CLI: `` composer install``.
3. Configurar **application/config/config.php**.
4. Configurar **application/config/database.php**.


### CLI Commands
| Comandos da interface de linha de comando (CLI) disponíveis | Descrição                                       |
|-----------------------------------------------------------------|-----------------------------------------------------|
| php index.php tools migration "file_name"                       | Create new migration file                           |
| php index.php tools migrate ["version_number"]                  | Run all migrations. The version number is optional. |
| php index.php tools seeder "file_name"                          | Creates a new seed file.                            |
| php index.php tools seed "file_name"                            | Run the specified seed file.                        |

### Rodar a MIGRATION
Em **application/database/migrations** é um arquivo de migração e em **application/database/seeds** é um arquivo semeador criado para este exemplo.

Digite os seguintes comandos em sua CLI:
1. ``php index.php tools migrate PaisesSeeder``
2. ``php index.php tools migrate``
3. ``php index.php tools seed PaisessSeeder``
4. Verifique as alterações do seu banco de dados
