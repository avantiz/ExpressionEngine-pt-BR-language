<?php

$lang = array(
    // All generic CLI lang entries
    'cli_error_no_command_given'                   => 'Nenhum comando fornecido. Tente `php eecli.php list` para uma lista completa de comandos.',
    'cli_error_command_not_found'                  => 'Comando não-encontrado. Tente `php eecli.php list` para uma listagem completa de comandos.',
    'cli_error_ee_not_installed'                   => 'O EE não está atualmente instalado.',
    'cli_error_is_required'                        => 'Campo é obrigatório.',
    'cli_error_is_required_field'                  => 'Campo é obrigatório. Campo: ',
    'cli_option_help'                              => 'Veja o menu de ajuda para o comando inserido',
    'cli_error_the_specified_addon_does_not_exist' => 'O plugin especificado não existe',
    'cli_error_cli_disabled'                       => 'O CLI do ExpressionEngine está desativado no momento. Para utilizar o CLI, você deve ativá-lo nas configurações.',

    // Lang entries for command cache:clear
    'command_cache_clear_description'              => 'Zera todos os caches do ExpressionEngine',
    'command_cache_clear_summary'                  => '',
    'command_cache_clear_option_type'              => 'Digite o cache para zerar (padrão: all)',
    'command_cache_clear_cache_does_not_exist'     => 'O Cache na2o existe. Utilize --help para ver os caches disponíveis.',
    'command_cache_clear_caches_cleared'           => ' caches estão zerados!',

    // Lang entries for command list
    'command_list_description'                  => 'Listar todos os comando disponíveis',
    'command_list_summary'                      => 'Isto fornece uma listagem completa de todos os comandos',
    'command_list_all_available_commands'       => 'Todos os comandos disponíveis:',
    'command_list_run_with_help'                => 'Execute um comando com --help para maiores informações',
    'command_list_command_header'               => 'Comando',
    'command_list_description_header'           => 'Descritivo',

    // Lang entries for command make:addon
    'command_make_addon_description'            => 'Cria um novo plugin',
    'command_make_addon_summary'                => 'Isto gerará de forma interativa um plugin do EE diretamente em sua pasta de usuário',
    'command_make_addon_lets_build_addon'       => 'Vamos construir seu plugin!',
    'command_make_addon_description_question'   => 'descritivo?',
    'command_make_addon_version_question'       => 'versão?',
    'command_make_addon_author_question'        => 'autor?',
    'command_make_addon_author_url_question'    => 'URL do autor?',
    'command_make_addon_have_settings_question' => 'tem configurações?',
    'command_make_addon_lets_build'             => 'Vamos construir!',
    'command_make_addon_created_successfully'   => 'Seu adicional foi criado com sucesso!',
    'command_make_addon_what_hooks_to_use'      => 'Quais hooks você gostaria de utilizar? (Leia mais: https://docs.expressionengine.com/latest/development/extensions.html)',
    'command_make_addon_ext_hooks'              => 'Hooks de Extensão:',
    'command_make_addon_ft_compatibility'       => 'Compatibilidade com Tipo de Campo?',
    'command_make_addon_what_type_of_addon'     => 'Qual tipo de plugin você gostaria de criar?',
    'command_make_addon_select_proper_addon'    => 'Por favor selecione um tipo apropriado de plugin.',
    'command_make_addon_what_is_name'           => 'Qual é o nome do seu plugin?',
    'command_make_addon_does_your'              => 'Faça o seu ',
    'command_make_addon_addon_name_required'    => 'O nome do seu plugin é necessário.',
    // make:addon options
    'command_make_addon_option_extension'       => 'Criar uma extensão',
    'command_make_addon_option_plugin'          => 'Criar um plugin',
    'command_make_addon_option_fieldtype'       => 'Criar um tipo de campo',
    'command_make_addon_option_module'          => 'Criar um módulo',
    'command_make_addon_option_typography'      => 'Deve utilizar a tipografia do plugin',
    'command_make_addon_option_has'             => 'O plugin tem configurações (sim/não)',
    'command_make_addon_option_version'         => 'Versão do plugin',
    'command_make_addon_option_description'     => 'Descritivo do plugin',
    'command_make_addon_option_author'          => 'Autor do plugin',
    'command_make_addon_option_author_url'      => 'URL do Autor do plugin',
    'command_make_addon_option_services'        => 'Serviços para criar. Opção Multi-passe.',
    'command_make_addon_option_models'          => 'Modelos para criar. Opção Multi-passe.',
    'command_make_addon_option_commands'        => 'Comandos para criar. Opção Multi-passe.',
    'command_make_addon_option_consents'        => 'Consentimentos. Opção Multi-passe.',
    'command_make_addon_option_cookies'         => 'Cookies para criar, com dois pontos separando nome e valor (Ex: nome:valor). Opção Multi-passe.',
    'command_make_addon_option_hooks'           => 'Hooks em uso. Opção Multi-passe.',
    'command_make_addon_option_compatibility_mode'  => 'Gera um adicional que é compatível com as versões do ExpressionEngine menores 7.2.0 e mais anteriores à  6.4.0',

    // Lang entries for command make:command
    'command_make_command_description'          => 'Cria um novo comando CLI para um plugin',
    'command_make_command_summary'              => 'Esta interatividade gera um comando CLI para um plugin existente, de terceiros',
    'command_make_command_lets_build_command'   => 'Vamos construir seu comando!',
    'command_make_command_ask_description'      => 'Descritivo do Comando?',
    'command_make_command_ask_signature'        => 'Assinatura do Comando? (Ex: make:magic)',
    'command_make_command_lets_build'           => 'Vamos construir!',
    'command_make_command_created_successfully' => 'Seu comando foi criado com sucesso!',
    'command_make_command_ask_command_name'     => 'Nome do Comando?',
    'command_make_command_ask_addon'            => 'Qual plugin você deseja adicionar isto?',
    // make:command options
    'command_make_command_option_addon'         => 'Pasta do plugin de terceiros que você deseja adicionar o comando',
    'command_make_command_option_description'   => 'Descritivo do comando',
    'command_make_command_option_signature'     => 'Assinatura do comando (ex: make:magic)',

    // Lang entries for command make:migration
    'command_make_migration_description'                        => 'Cria uma nova migração',
    'command_make_migration_summary'                            => 'Isto gera uma nova migração para o núcleo ou para um plugin',
    'command_make_migration_what_is_migration_name'             => 'Qual é o nome da sua migração?',
    'command_make_migration_no_name_specified'                  => 'Nenhum nome de migração foi especificado. Para ajuda com este comando, use --help',
    'command_make_migration_using_migration_name'               => 'Usando o nome de migração:      ',
    'command_make_migration_table_creating_migration'           => 'Criando migração: ',
    'command_make_migration_table_migration_action'             => '  Ação de Migração: ',
    'command_make_migration_table_type_name'                    => '  Nome do tipo:        ',
    'command_make_migration_table_class_name'                   => '  Nome da classe:       ',
    'command_make_migration_table_file_location'                => '  Local do Arquivo:    ',
    'command_make_migration_table_template_name'                => '  Nome do Template:    ',
    'command_make_migration_successfully_wrote_file'            => 'Gravado com sucesso o nomo arquivo de migração.',
    'command_make_migration_what_table_is_migration_for'        => 'Para qual tabela é esta migração?',
    'command_make_migration_ask_migration_action'               => 'Qual é a ação de migração',
    'command_make_migration_ask_migration_category'             => 'Qual é a categoria de migração',
    'command_make_migration_where_to_generate_migration'        => 'Onde deve ser gerada esta migração? (ExpressionEngine ou um plugin existente)',

    // make:migration options
    'command_make_migration_option_name'                        => 'Nome da migração',
    'command_make_migration_option_table'                       => 'Nome da Tabela',
    'command_make_migration_option_status'                      => 'Nome do Status',
    'command_make_migration_option_location'                    => 'Local de Migração. As opções atuais são ExpressionEngine ou o nome curto de um plugin que está instalado atualmente. Padrão é ExpressionEngine.',
    'command_make_migration_option_create'                      => 'Especifica se o comando é um comando de criação',
    'command_make_migration_option_update'                      => 'Especifica se o comando é um comando de atualização',

    // make:migration Error message
    'command_make_migration_missing_required_template_variable' => 'Variável obrigatória faltando para o template de migração: ',

    // Lang entries for command make:prolet
    'command_make_prolet_description'                  => 'Cria um novo prolet para um plugin',
    'command_make_prolet_summary'                      => 'esta interatividade gera um Prolet para o EE para um plugin de terceiros existente',
    'command_make_prolet_lets_build_prolet'            => 'Vamos construir um novo prolet!',
    'command_make_prolet_ask_prolet_name'              => 'Qual é o nome do prolet?',
    'command_make_prolet_ask_addon'                    => 'Em qual plugin o prolet está sendo adicionado?',
    'command_make_prolet_ask_description'              => 'Qual é o descritivo do Prolet?',
    'command_make_prolet_building_prolet'              => 'Construindo o Prolet.',
    'command_make_prolet_created_successfully'         => 'Prolet criado com sucesso!',
    'command_make_prolet_ask_widget_name'              => 'Qual é o nome do widget?',
    'command_make_prolet_generating_widget'            => 'Gerando o widget.',
    'command_make_prolet_widget_created_successfully'  => 'Widget criado com sucesso!',
    'command_make_prolet_error_addon_must_have_module' => 'Para gerar um prolet, o plugin deve ter um arquivo de módulo.',
    'command_make_prolet_error_addon_must_have_icon'   => 'Para gerar um prolet, o plugin deve ter um ícone. Para gerar um ícone padrão, utilize --generate-icon.',

    // make:prolet options
    'command_make_prolet_option_addon'                 => 'Pasta para o plugin de terceiros que você deseja adicionar o prolet',
    'command_make_prolet_option_description'           => 'Descritivo do prolet',
    'command_make_prolet_option_has_widget'            => 'Crie um widget para o plugin após gerar o prolet (opcional)',
    'command_make_prolet_option_widget_name'           => 'Nome do widget',
    'command_make_prolet_option_generate_icon'         => 'Gera um arquivo de ícone do plugin ao criar um prolet',

    // Lang entries for command make:action
    'command_make_action_description'                  => 'Cria uma nova ação para um adicional',
    'command_make_action_summary'                      => 'Isto irá gerar de forma interativa uma Ação do EE para um  adicional de terceiros',
    'command_make_action_lets_build_action'            => 'Vamos construir uma nova ação!',
    'command_make_action_ask_action_name'              => 'Qual é o nome da ação?',
    'command_make_action_ask_addon'                    => 'Qual é o plugin que está sendo adicionado?',
    'command_make_action_building_action'              => 'Construindo a ação.',
    'command_make_action_created_successfully'         => 'Ação criada com sucesso!',
    'command_make_action_error_addon_must_have_module' => 'Para gerar uma ação, o plugin deve ter um arquivo de módulo.',

    // make:action options
    'command_make_action_option_addon'                 => 'Pasta para o plugin de terceiros que você deseja adicionar uma ação',

    // Lang entries for command make:tag
    'command_make_tag_description'                  => 'Cria uma nova tag para um plugin',
    'command_make_tag_summary'                      => 'Isto irá gerar uma Tag do EE de forma interativa, para um plugin de terceiros existente',
    'command_make_tag_lets_build_tag'               => 'Vamos construir uma nova tag!',
    'command_make_tag_ask_tag_name'                 => 'Qual é o nome da tag?',
    'command_make_tag_ask_addon'                    => 'Qual plugin está sendo adicionado na tag?',
    'command_make_tag_building_tag'                 => 'Criando Tag.',
    'command_make_tag_created_successfully'         => 'Tag criada com sucesso!',
    'command_make_tag_error_addon_must_have_module' => 'Para gerar uma tag, o plugin deve ter um arquivo de módulo.',

    // make:tag options
    'command_make_tag_option_addon'                 => 'Pasta para o plugin de terceiros que você deseja que a tag seja adicionada',

    // Lang entries for command make:extension-hook
    'command_make_extension_hook_description'                  => 'Implementa uma Extensão do hook EE em um plugin',
    'command_make_extension_hook_summary'                      => 'Isto implementa de forma interativa, um hook de extensão em um plugin de terceiros',
    'command_make_extension_hook_lets_build_extension_hook'    => 'Vamos implementar um hook de extensão!',
    'command_make_extension_hook_ask_extension_hook_name'      => 'Qual é o nome da hook da extensão?',
    'command_make_extension_hook_ask_addon'                    => 'Para qual plugin o hook da extensão está sendo adicionado?',
    'command_make_extension_hook_building_extension_hook'      => 'Construindo Hook da Extensão.',
    'command_make_extension_hook_created_successfully'         => 'Hook de Extensão criado com sucesso!',

    // make:extension-hook options
    'command_make_extension_hook_option_addon'                 => 'A pasta para o plugin de terceiros que você gostaria de adicionar este hook de extensão',

    // Lang entries for command make:widget
    'command_make_widget_description'                 => 'Gera widgets para plugins existentes.',
    'command_make_widget_lets_build_widget'           => 'Vamos construir um widget!',
    'command_make_widget_ask_widget_name'             => 'Qual é o nome do widget?',
    'command_make_widget_ask_addon'                   => 'Para qual plugin é?',
    'command_make_widget_building_widget'             => 'Construindo Widget.',
    'command_make_widget_created_successfully'        => 'Widget criado com sucesso!',
    'command_make_widget_option_addon'                => 'Nome do plugin',

    // Lang entries for command make:model
    'command_make_model_description'                            => 'Cria um novo modelo para um plugin',
    'command_make_model_summary'                                => 'Esta interatividade gera um modelo EE para um plugin de terceiros',
    'command_make_model_lets_build_model'                       => 'Vamos construir seu modelo!',
    'command_make_model_lets_build'                             => 'Vamos construir!',
    'command_make_model_created_successfully'                   => 'Seu modelo foi criado com sucesso!',
    'command_make_model_ask_model_name'                         => 'Nome do Modelo?',
    'command_make_model_ask_addon'                              => 'Qual plugin você deseja adicionar isto?',
    // make:model options
    'command_make_model_option_addon' => 'Pasta para o plugin de terceiros que você deseja adicionar este modelo',

    // Lang entries for command migrate
    'command_migrate_description'                  => 'Executa as migrações especificadas (tudo, core, ou plugins)',
    'command_migrate_summary'                      => 'Faz um loop através da pasta de migração do core e da pasta de migrações do adicional e executa todas as migrações que nao foram executadas anteriormente. Se executar todas as migrações, as migrações do core serão executadas primeiro, depois as migrações dos plugins. Quando as migrações estão sendo executadas para múltiplos plugins, todas as migrações para cada plugin são agrupadas em conjunto e executadas em conjunto',
    'command_migrate_all_migrations_ran'           => 'Todas as migrações disponíveis já foram executadas.',
    'command_migrate_what_is_location'             => 'Qual é o local da sua migração?',
    'command_migrate_error_please_select_location' => 'Por favor selecione o local da migração utilizando --core, --everything, --addons, ou --addon=addon_name.',
    'command_migrate_migrated'                     => 'Migrado: ',
    'command_migrate_all_migrations_completed'     => 'Todas as migrações foram completadas com sucesso!',
    // migrate options
    'command_migrate_option_steps'                 => 'Defina o número de migrações que serão executadas',
    'command_migrate_option_everything'            => 'Execute todas as migrações. O Core é executado primeiro e todas as outras migrações de plugins, uma de cada vez.',
    'command_migrate_option_all'                   => 'Execute todas as migrações. Alias para --everything',
    'command_migrate_option_core'                  => 'Execute apenas as migrações para o core. Isto exclui todas as migrações de plugins.',
    'command_migrate_option_addon'                 => 'Executar a migração apenas para o plugin especificado.',
    'command_migrate_option_addons'                => 'Executar a migração apenas para os plugins especificados.',

    // Lang entries for command migrate:addon
    'command_migrate_addon_description'               => 'Executa migrações de plugins',
    'command_migrate_addon_summary'                   => 'Dá um loop através das pastas de plugins e executa todas as migrações que ainda não foram previamente executadas.  Se executar todos os plugins, as migrações serão agrupadas por plugin e executadas em conjunto',
    'command_migrate_addon_all_migrations_ran'        => 'Todas as migrações de adicionais já foram executadas.',
    'command_migrate_addon_ask_location_of_migration' => 'Qual é o local da sua migração?',
    'command_migrate_addon_error_no_location_set'     => 'Por favor selecione o local da migração usando --everything, ou --addon=addon_name.',
    'command_migrate_addon_migrated'                  => 'Migrado: ',
    'command_migrate_addon_all_migrations_completed'  => 'Todas as migrações foram completadas com sucesso!',
    // migrate:addon options
    'command_migrate_addon_option_steps'              => 'Defina o número de migrações que serão executadas',
    'command_migrate_addon_option_everything'         => 'Executar todas as migrações de plugins',
    'command_migrate_addon_option_all'                => 'Executar todas as migrações de plugins. Alias para --everything',
    'command_migrate_addon_option_addon'              => 'Executar a migração apenas para o plugin especificado.',

    // Lang entries for command migrate:all
    'command_migrate_all_description'              => 'Executa migrações do core, então cada migração de plugin',
    'command_migrate_all_summary'                  => 'Dá um loop na pasta de migrações do core e na pasta de migrações dos plugins e executa todas as migrações que ainda não foram executadas anteriormente. As migrações do core serão executadas primeiro, então as migrações de plugins. Quando as migrações forem executadas para vários plugins, todas as migrações para cada plugin serão agrupadas em conjunto e serão executadas em conjunto',
    'command_migrate_all_migrated'                 => 'Migrado: ',
    'command_migrate_all_all_migrations_completed' => 'Todas as migrações foram completadas com sucesso!',
    // migrate:all options
    'command_migrate_all_option_steps'             => 'Defina o número de migrações que serão executadas',

    // Lang entries for command migrate:core
    'command_migrate_core_description'                          => 'Executa as migrações do core',
    'command_migrate_core_summary'                              => 'Dá um loop através da pasta de migrações do core e executa todas as migrações que ainda não foram previamente executadas',
    'command_migrate_core_migrated'                             => 'Migrado: ',
    'command_migrate_core_all_migrations_completed'             => 'Todas as migrações foram completadas com sucesso!',
    // migrate:core options
    'command_migrate_core_option_steps'                         => 'Especifique a quantidade de migrações que serão executadas',

    // Lang entries for command migrate:reset
    'command_migrate_reset_description'                         => 'Reverter todas as migrações',
    'command_migrate_reset_summary'                             => 'Reverter todas as migrações de uma vez',
    'command_migrate_reset_no_migrations_to_rollback'           => 'Nenhuma migração para reverter.',
    'command_migrate_reset_rolling_back'                        => 'Revertendo: ',
    'command_migrate_reset_all_migrations_rolled_back'          => 'Todas as migrações foram revertidas com sucesso!',

    // Lang entries for command migrate:rollback
    'command_migrate_rollback_description'                      => 'Reverter o grupo de migração mais recente',
    'command_migrate_rollback_summary'                          => 'Pega o grupo que foi migrado mais recentemente e reverte o processo de migração para o estado anterior',
    'command_migrate_rollback_no_migrations_to_rollback'        => 'Nenhuma migração para reverter.',
    'command_migrate_rollback_rolling_back'                     => 'Revertendo: ',
    'command_migrate_rollback_migrations_executed_successfully' => ' migrações executadas com sucesso.',
    'command_migrate_rollback_all_migrations_rolled_back'       => 'Todas as migrações no grupo foram revertidas com sucesso!',
    // migrate:rollback options
    'command_migrate_rollback_option_steps'                     => 'Defina o número de migrações para retornar',

    // Lang entries for command update
    'command_update_description'                                => 'Atualiza o ExpressionEngine',
    'command_update_summary'                                    => 'Executa todas as atualizações disponíveis do ExpressionEngine',
    'command_update_is_already_up_to_date'                      => ' já está atualizado!',
    'command_update_new_version_available'                      => 'Existe uma nova versão do ExpressionEngine disponível:',
    'command_update_confirm_upgrade'                            => 'Gostaria de fazer o upgrade?',
    'command_update_not_run'                                    => 'Atualização não foi executada.',
    'command_update_success'                                    => 'Sucesso! Crie algo maravilhoso!',
    'command_update_indicated_upgrade_all_addons'               => 'Você indicou que deseja atualizar todos os plugins.',
    'command_update_confirm_addon_upgrade'                      => 'Têm certeza? Esta pode ser uma ação destrutiva.',
    'command_update_addon_update_halted'                        => 'Atualização do plugin suspensa',
    'command_update_getting_info_from_local_env'                => 'Obtendo a informação do upgrade através do seu ambiente local',
    'command_update_getting_info_from_ee_com'                   => 'Obtendo informações do upgrade no ExpressionEngine.com',
    'command_update_updater_failed'                             => 'Atualização falhou',
    'command_update_updating_to_version'                        => 'Atualizando para a versão ',
    'command_update_failed_on_version'                          => 'Falha na versão ',
    'command_update_error_updater_failed_missing_version'       => 'A atualização falhou porque existe uma versão que não foi localizada. Por favor atualize o UpgradeMap. Versão: ',
    'command_update_missing_avatar_path_message'                => 'Seu processo de atualização irá falhar sem definir um caminho para os avatares.',
    'command_update_enter_full_avatar_path'                     => 'Insira o caminho completo da pasta de avatares',
    // update options
    'command_update_option_rollback'                            => 'Retornar para a última atualização',
    'command_update_option_verbose'                             => 'Saída Verbose',
    'command_update_option_microapp'                            => 'Executar como microapp',
    'command_update_option_step'                                => 'Passo em processo (parâmetro necessário)',
    'command_update_option_no_bootstrap'                        => 'Executar sem bootstrap',
    'command_update_option_force_addon_upgrades'                => 'Automaticamente executar todos os updates de plugins ao final da atualização (avançado)',
    'command_update_option_y'                                   => 'Pular todas as confirmações. Não faça isso.',
    'command_update_option_skip_cleanup'                        => 'Pular as etapas de limpeza após o update',

    // Lang entries for command update:prepare
    'command_update_prepare_description'                        => 'Prepare um site para ser atualizado utilizando estes arquivos',
    'command_update_prepare_summary'                            => 'Este comando copia todos os arquivos necessários para atualizar um site ExpressionEngine diferente e reestrutura-o',
    'command_update_prepare_preparing_upgrade_for_site'         => 'Preparando o upgrade para um site.',
    'command_update_prepare_running_ee_upgrade'                 => 'Executando uma atualização do EE',
    'command_update_prepare_process_complete'                   => 'Processo completo!',
    'command_update_prepare_running_preflight_hooks'            => 'Executando hooks de pre-execução',
    'command_update_prepare_running_postflight_hooks'           => 'Executando hooks de pós-execução',
    'command_update_prepare_how_things_are_configured'          => 'Veja como as coisas estão configuradas:',
    'command_update_prepare_notify_moving_files_to_tmp'         => 'Nós estamos prestes a mover o arquivo X para tmp/X e Y para system/Y',
    'command_update_prepare_make_sure_you_have_backups'         => 'Tenha certeza que você possui backups!',
    'command_update_prepare_are_you_sure_you_want_to_proceed'   => 'Tenha certeza que deseja continuar?',
    'command_update_prepare_upgrade_aborted'                    => 'Upgrade cancelado',
    'command_update_prepare_notify_also_upgrade_ee_after'       => 'Você disse que também deseja atualizar o EE após mover estes arquivos.',
    'command_update_prepare_what_is_path_to_upgrade_config'     => 'Qual é o caminho para seu arquivo upgrade.config.php? (padrão para SYSPATH, atualmente ',
    'command_update_prepare_custom_config_not_found'            => 'Config customizado não encontrado.',
    'command_update_prepare_database_file_found_move_to_config' => 'Nós encontramos um arquivo de banco de dados. Por favor mova esta informação para o config.php',
    // update:prepare options
    'command_update_prepare_option_upgrade_ee'                  => 'Inicia o upgrade após mover arquivos',
    'command_update_prepare_option_force_add_on_upgrade'        => 'Após atualizar o EE, executa os upgrades dos plugins',
    'command_update_prepare_option_old_base_path'               => 'Caminho Absoluto do site antigo',
    'command_update_prepare_option_new_base_path'               => 'Caminho Absoluto do novo site',
    'command_update_prepare_option_old_public_path'             => 'Caminho Absoluto do caminho público do site antigo',
    'command_update_prepare_option_new_public_path'             => 'Caminho Absoluto do caminho público do novo site',
    'command_update_prepare_option_no_config_file'              => 'Ignora o arquivo de configuração e não verifica por ele',
    'command_update_prepare_option_ee_version'                  => 'O site atual ',
    'command_update_prepare_option_should_move_system_path'     => 'Se o processo de upgrade deve mover a pasta de sistema antiga para o novo site',
    'command_update_prepare_option_old_system_path'             => 'Caminho absoluto da pasta de sistema do site antigo',
    'command_update_prepare_option_new_system_path'             => 'Caminho absoluto da pasta de sistema do novo site',
    'command_update_prepare_option_should_move_template_path'   => 'Se o processo de upgrade deve mover a pasta de template antiga para o novo site',
    'command_update_prepare_option_old_template_path'           => 'Caminho absoluto da pasta de templates do site antigo',
    'command_update_prepare_option_new_template_path'           => 'Caminho absoluto da pasta de templates do novo site',
    'command_update_prepare_option_should_move_theme_path'      => 'Se o processo de upgrade deve mover a pasta de temas antiga para o novo site',
    'command_update_prepare_option_old_theme_path'              => 'Caminho absoluto da pasta de temas do usuário do site antigo',
    'command_update_prepare_option_new_theme_path'              => 'Caminho absoluto do pasta de temas do usuário do site novo',
    'command_update_prepare_option_run_preflight_hooks'         => 'Se o processo de upgrade deve ser executado com os hooks de pré-execução',
    'command_update_prepare_option_run_postflight_hooks'        => 'Se o processo de upgrade deve ser executado com os hooks de pós-execução',
    'command_update_prepare_option_temp_directory'              => 'A pasta onde fazermos a mágica acontecer',

    // Lang entries for command update:run-hook
    'command_update_run_hook_description'                       => 'Executa os hooks de atualização a partir do seu arquivo upgrade.config.php',
    'command_update_run_hook_summary'                           => 'Isto irá executar um dos hooks de pré-execução ou pós-execução, como definido no arquivo upgrade.config.php. Isto pode ser uma ação destrutiva, então use com cautela',
    'command_update_run_hook_running'                           => 'Executando: ',
    'command_update_run_hook_hook_not_found'                    => 'Hook não encontrado: ',
    'command_update_run_hook_success'                           => 'Sucesso!',
    'command_update_run_hook_what_is_path_to_upgrade_config'    => 'Qual é o caminho para seu arquivo upgrade.config.php? (padrões para SYSPATH)',
    'command_update_run_hook_custom_config_not_found'           => 'Config customizado não-encontrado.',

    // Lang entries for command sync:conditional-fields
    'command_sync_conditional_fields_name'              => 'Sincronizar Lógica Condicional do Campo',
    'command_sync_conditional_fields_description'       => 'Sincronizar lógica condicional da publicação do canal',
    'command_sync_conditional_fields_summary'           => 'Verifica cada publicação do canal para ver se a lógica condicional está correta. Se não, atualiza a lógica condicional e salva a publicação.',

    // sync:conditional-fields options
    'command_sync_conditional_fields_option_channel_id' => 'ID do Canal para sincronizar. Padrão para todos os canais',
    'command_sync_conditional_fields_option_verbose'    => 'Verbose',
    'command_sync_conditional_fields_option_clear'      => 'Limpar',

    // sync:conditional-fields output
    'command_sync_conditional_fields_sync_utility'      => 'Utilitário de sincronia de lógica condicional',
    'command_sync_conditional_fields_syncing'           => 'Sincronizando %d publicações do canal',
    'command_sync_conditional_fields_current_entry'     => 'Publicação atual do Canal: %s',
    'command_sync_conditional_fields_entries_processed' => "Publicações processadas: %d\t%s\t%s",
    'command_sync_conditional_fields_sync_complete'     => "Sincronização completa: %d publicações\t%s\t%s",
    'command_sync_conditional_fields_cleared_all_hidden_fields' => "Limpar todos os campos ocultos",
    'command_sync_conditional_fields_database_info'             => "Banco de Dados: %d queries em %f segundos",
);

// EOF
