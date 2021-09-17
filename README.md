# CodeIgniter 3 com migração e propagação de banco de dados
## About
Este é um modelo inicial com CodeIgniter 3.1.x e ferramentas de migração e propagação de banco de dados.

### Recursos
- [x] CodeIgniter Migration with CodeIgniter Command Line Interface (CLI)
- [x] CodeIgniter Database seeding with CodeIgniter Command Line Interface (CLI)
- [x] [Faker PHP Library](https://github.com/fzaninotto/Faker)

### ToDo
- [ ] Pretty CLI commands

### Instalação
1. Clone este repositório
`` git clone https://github.com/aaron5670/CodeIgniter-3-Database-Migration-and-Seeding.git``
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

### Exemplo
Em **application/database/migrations** é um arquivo de migração e em **application/database/seeds** é um arquivo semeador criado para este exemplo.

Digite os seguintes comandos em sua CLI:
1. ``php index.php tools migrate PaisesSeeder``
2. ``php index.php tools migrate``
3. ``php index.php tools seed PaisessSeeder``
4. Verifique as alterações do seu banco de dados
