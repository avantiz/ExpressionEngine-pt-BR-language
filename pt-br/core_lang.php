<?php

$lang = array(

    /* General word list */
    'and' => 'e',

    'and_n_others' => 'e %d outros...',

    'at' => 'em',

    'auto_redirection' => 'Você será redirecionado(a) automaticamente em %x segundos',

    'back' => 'Voltar',

    'by' => 'por',

    'click_if_no_redirect' => 'Clique aqui se você não for redirecionado(a) automaticamente',

    'disabled' => 'desativado',

    'dot' => 'ponto',

    'enabled' => 'ativado',

    'encoded_email' => '(O JavaScript deve estar ativado para poder visualizar este endereço de e-mail)',

    'first' => 'Primeira',

    'id' => 'ID',

    'last' => 'Última',

    'next' => 'Próxima',

    'no' => 'Não',

    'not_authorized' => 'Você não está autorizado(a) a executar esta ação',

    'not_available' => 'Não disponível',

    'of' => 'de',

    'off' => 'desativado',

    'on' => 'ativado',

    'or' => 'ou',

    'pag_first_link' => '&lsaquo; Primeira',

    'pag_last_link' => 'Última &rsaquo;',

    'page' => 'Página',

    'preference' => 'Preferência',

    'prev' => 'Anterior',

    'return_to_previous' => 'Retornar à Página Anterior',

    'search' => 'Busca',

    'setting' => 'Configuração',

    'site_homepage' => 'Homepage do Site',

    'submit' => 'Enviar',

    'system_off_msg' => 'Este site atualmente está inativo.',

    'thank_you' => 'Obrigado!',

    'update' => 'Atualizar',

    'updating' => 'Atualizando',

    'yes' => 'Sim',

    'required_fields' => 'Campos Obrigatórios',

    'edit_this' => 'Editar isto',

    /* Erros */
    'captcha_incorrect' => 'Você não forneceu a palavra exatamente como ela é exibida na imagem',

    'captcha_required' => 'Você deve digitar a palavra que aparece na imagem',

    'recaptcha_required' => 'A verificação reCAPTCHA não passou',

    'checksum_changed_accept' => 'Aceitar Alterações',

    'checksum_changed_warning' => 'Um ou mais arquivos do sistema principal foram alterados:',

    'checksum_email_message' => 'ExpressionEngine detectou uma modificação de um arquivo do sistema em: {url}

Os seguintes arquivos foram afetados:
{changed}

Se você efetuou estas alterações, por favor aceite as modificações na homepage do seu painel de controle. Se você não alterou estes arquivos, isso pode indicar uma tentativa de hacking. Verifique seus arquivos em busca de qualquer conteúdo suspeito (JavaScript ou iFrames) e veja: '.DOC_URL.'troubleshooting/error_messages/expressionengine_has_detected_the_modification_of_a_core_file.html',

    'checksum_email_subject' => 'Um arquivo principal do sistema foi modificado em seu site.',

    'warning_system_status_title' => 'Por favor, verifique o status de sistema online',

    'warning_system_status_message' => 'O status do seu sistema está definido como <b>%s</b>. Se você precisar alterar isto, por favor, vá em <a href="%s">Configurações do Sistema</a> ou clique no botão abaixo.',

    'warning_system_status_button' => 'Definir Sistema %s',

    'csrf_token_expired' => 'Este formulário expirou. Por favor atualize e tente novamente.',

    'cookie_domain_mismatch' => 'O cookie configurado para o domínio não corresponde à URL do site',

    'current_password_incorrect' => 'Sua senha atual não está correta.',

    'current_password_required' => 'É necessário que você insira sua senha atual.',

    'curl_not_installed' => 'cURL não está instalado em seu servidor',

    'error' => 'Erro',

    'file_not_found' => 'O Arquivo %s não existe.',

    'general_error' => 'Os seguintes erros foram encontrados',

    'generic_fatal_error' => 'Algo deu errado e esta URL não pode ser processada neste momento.',

    'invalid_action' => 'A ação que você solicitou é inválida.',

    'invalid_url' => 'A URL que você enviou não é válida.',

    'missing_encryption_key' => 'Você não possui um valor definido para <code>%s</code> em seu arquivo config.php. Isto pode deixar seu sistema aberto para falhas de segurança. Restaure as chaves ou <a href="%s">entre em contato para suporte</a> para ajuda.',

    'el_folder_present' => 'A pasta <code>%s</code> está presente no seu servidor. Por favor, tenha certeza que você fez a substituição do <code>index.php</code> e <code>admin.php</code> de acordo com as <a href="%s">instruções de atualização</a> e removeu esta pasta.',

    'missing_mime_config' => 'Não foi possível importar sua lista segura de tipos MIME: o arquivo %s não existe ou não pode ser lido.',

    'new_version_error' => 'Aconteceu um erro inesperado ao tentar baixar a versão atual do ExpressionEngine. Veja este <a href="%s" rel="external noreferrer">guia para resolução de problemas</a>, para maiores informações.',

    'nonexistent_page' => 'A página que você solicitou não foi encontrada',

    'redirect_xss_fail' => 'O link para o qual você está sendo redirecionado pode conter código perigoso ou malicioso. Nós recomendamos que você clique no botão voltar e envie um e-mail para %s para relatar o link que gerou esta mensagem.',

    'redirect_warning_header' => 'Alerta de Redirecionamento',

    'redirect_description' => 'Você está abrindo uma nova página web que direciona para o host <b>%s</b> que não é parte de',

    'redirect_check_address' => 'Por favor verifique novamente se o endereço está correto.',

    'redirect_cancel' => 'Cancelar',

    'submission_error' => 'o formulário que você enviou contém os seguintes erros',

    'theme_folder_wrong' => 'Sua pasta de tema está incorreta. Por favor vá para as <a href="%s">Configurar URL e Caminho</a> e verifique o <mark>Caminho das Temas</mark> e <mark>URL dos Temas</mark>.',

    'unable_to_load_field_type' => 'Não foi possível carregar o arquivo do tipo de campo: %s.<br /> Confirme se o arquivo do tipo de campo está localizado na pasta /system/user/addons/ ',

    'unwritable_cache_folder' => 'Sua pasta de cache não possui as permissões apropriadas.<br />Para reparar: Defina as permissões da pasta de cache (/system/user/cache/) para 777 (ou o equivalente em seu servidor).',

    'unwritable_config_file' => 'Seu arquivo de configuração não possui as permissões apropriadas.<br />Para reparar: Defina as permissões do arquivo de configuração (/'.SYSDIR.'/user/config/config.php) para 666 (ou o equivalente em seu servidor).',

    'version_mismatch' => 'A versão de instalação do ExpressionEngine (%s) não é consistente com a versão reportada (%s). <a href="'.DOC_URL.'installation/update.html" rel="external">Por favor atualize a instalação do ExpressionEngine novamente</a>.',

    'php72_intl_error' => 'Sua extensão PHP <code>intl</code> está desatualizada. Por favor tenha certeza que você possui a versão <code>ICU 4.6</code> instalada, ou a mais recente.',

    /* Grupos de Membros */
    'banned' => 'Banidos',

    'guests' => 'Visitantes',

    'members' => 'Membros',

    'pending' => 'Pendentes',

    'super_admins' => 'Super Admins',

    'anonymous' => 'Anônimo',

    /* Template.php */
    'error_fix_module_processing' => 'Por favor verifique se o módulo \'%x\' está instalado e que \'%y\' é um método disponível no módulo',

    'error_fix_install_addon' => 'Por favor verifique se o plugin \'%x\' está instalado.',

    'error_fix_syntax' => 'Por favor corrija a sintaxe no seu template.',

    'error_invalid_conditional' => 'Você tem uma condicional inválida em seu template. Por favor revise suas condicionais por strings não-fechadas, operadores inválidos, um } perdido ou um {/if} perdido.',

    'error_layout_too_late' => 'A tag do plugin ou módulo antes da declaração do layout. Por favor mova a tag do layout para o topo do seu template.',

    'error_multiple_layouts' => 'Múltiplos Layouts foram encontrados, por favor tenha certeza que você tem apenas uma tag de layout por template',

    'error_tag_module_processing' => 'A seguinte tag não pode ser processada:',

    'error_tag_syntax' => 'A seguinte tag tem um erro de sintaxe:',

    'layout_contents_reserved' => 'A palavra "contents" é reservada para os dados do template e não pode ser usada como uma variável de layout (Ex: {layout:set name="contents"} ou {layout="foo/bar" contents=""}).',

    'template_load_order' => 'Ordem de Carregamento do Template',

    'template_loop' => 'Você provocou um loop de template devido a sub-templates aninhados indevidamente (\'%s\' chamado recursivamente)',

    'route_not_found' => 'A Rota de Template não foi localizada.',

    /* E-mail */
    'error_sending_email' => 'Não foi possível enviar e-mail neste momento.',

    'forgotten_email_sent' => 'Se este endereço de e-mail estiver associado à uma conta, as instruções para redefinir sua senha foram enviadas para esse e-mail.',

    'no_email_found' => 'O endereço de e-mail que você forneceu não foi localizado no banco de dados.',

    'password_has_been_reset' => 'Sua senha foi alterada e uma nova foi enviada para você, por e-mail.',

    'password_reset_flood_lock' => 'Você tentou redefinir sua senha muitas vezes hoje. Por favor verifique sua caixa de entrada e pastas de spam para solicitações anteriores, ou entre em contato com o administrador do site.',

    'forgotten_username_email_sent' => 'Se este endereço de e-mail estiver associado à uma conta, um e-mail contendo seu nome de usuário já foi enviado para você.',

    'your_new_login_info' => 'Informações de Login',

    /* Timezone */
    'invalid_date_format' => 'O formato de data que você forneceu é inválido.',

    'invalid_timezone' => 'O fuso de horário que você forneceu é inválido.',

    'no_timezones' => 'Sem Fusos Horários',

    'select_timezone' => 'Selecionar Fuso Horário',

    /* Data */
    'singular' => 'um',

    'less_than' => 'menos que',

    'about' => 'sobre',

    'past' => '%s atrás',

    'future' => 'em %s',

    'ago' => '%x atrás',

    'year' => 'ano',

    'years' => 'anos',

    'month' => 'mês',

    'months' => 'meses',

    'fortnight' => 'quinzena',

    'fortnights' => 'quinzenas',

    'week' => 'semana',

    'weeks' => 'semanas',

    'day' => 'dia',

    'days' => 'dias',

    'hour' => 'hora',

    'hours' => 'horas',

    'minute' => 'minuto',

    'minutes' => 'minutos',

    'second' => 'segundo',

    'seconds' => 'segundos',

    'am' => 'am',

    'pm' => 'pm',

    'AM' => 'AM',

    'PM' => 'PM',

    'Sun' => 'Dom',

    'Mon' => 'Seg',

    'Tue' => 'Ter',

    'Wed' => 'Qua',

    'Thu' => 'Qui',

    'Fri' => 'Sex',

    'Sat' => 'Sáb',

    'Su' => 'D',

    'Mo' => 'S',

    'Tu' => 'T',

    'We' => 'Q',

    'Th' => 'Q',

    'Fr' => 'S',

    'Sa' => 'S',

    'Sunday' => 'Domingo',

    'Monday' => 'Segunda',

    'Tuesday' => 'Terça',

    'Wednesday' => 'Quarta',

    'Thursday' => 'Quinta',

    'Friday' => 'Sexta',

    'Saturday' => 'Sábado',

    'Jan' => 'Jan',

    'Feb' => 'Fev',

    'Mar' => 'Mar',

    'Apr' => 'Abr',

    'May' => 'Mai',

    'Jun' => 'Jun',

    'Jul' => 'Jul',

    'Aug' => 'Ago',

    'Sep' => 'Set',

    'Oct' => 'Out',

    'Nov' => 'Nov',

    'Dec' => 'Dez',

    'January' => 'Janeiro',

    'February' => 'Fevereiro',

    'March' => 'Março',

    'April' => 'Abril',

    'May_l' => 'Maio',

    'June' => 'Junho',

    'July' => 'Julho',

    'August' => 'Agosto',

    'September' => 'Setembro',

    'October' => 'Outubro',

    'November' => 'Novembro',

    'December' => 'Dezembro',

    'UM12' => '(UTC -12:00) Baker/Howland Island',

    'UM11' => '(UTC -11:00) Niue',

    'UM10' => '(UTC -10:00) Hawaii-Aleutian Standard Time, Cook Islands, Tahiti',

    'UM95' => '(UTC -9:30) Marquesas Islands',

    'UM9' => '(UTC -9:00) Alaska Standard Time, Gambier Islands',

    'UM8' => '(UTC -8:00) Pacific Standard Time, Clipperton Island',

    'UM7' => '(UTC -7:00) Mountain Standard Time',

    'UM6' => '(UTC -6:00) Central Standard Time',

    'UM5' => '(UTC -5:00) Eastern Standard Time, Western Caribbean Standard Time',

    'UM45' => '(UTC -4:30) Venezuelan Standard Time',

    'UM4' => '(UTC -4:00) Campo Grande, Atlantic Standard Time, Eastern Caribbean Standard Time',

    'UM35' => '(UTC -3:30) Newfoundland Standard Time',

    'UM3' => '(UTC -3:00) Argentina, Brazil, French Guiana, Uruguay',

    'UM2' => '(UTC -2:00) South Georgia/South Sandwich Islands',

    'UM1' => '(UTC -1:00) Azores, Cape Verde Islands',

    'UTC' => '(UTC) Greenwich Mean Time, Western European Time',

    'UP1' => '(UTC +1:00) Central European Time, West Africa Time',

    'UP2' => '(UTC +2:00) Central Africa Time, Eastern European Time, Kaliningrad Time',

    'UP3' => '(UTC +3:00) East Africa Time, Arabia Standard Time',

    'UP35' => '(UTC +3:30) Iran Standard Time',

    'UP4' => '(UTC +4:00) Moscow Time, Azerbaijan Standard Time',

    'UP45' => '(UTC +4:30) Afghanistan',

    'UP5' => '(UTC +5:00) Pakistan Standard Time, Yekaterinburg Time',

    'UP55' => '(UTC +5:30) Indian Standard Time, Sri Lanka Time',

    'UP575' => '(UTC +5:45) Nepal Time',

    'UP6' => '(UTC +6:00) Bangladesh Standard Time, Bhutan Time, Omsk Time',

    'UP65' => '(UTC +6:30) Cocos Islands, Myanmar',

    'UP7' => '(UTC +7:00) Krasnoyarsk Time, Cambodia, Laos, Thailand, Vietnam',

    'UP8' => '(UTC +8:00) Australian Western Standard Time, Beijing Time, Irkutsk Time',

    'UP875' => '(UTC +8:45) Australian Central Western Standard Time',

    'UP9' => '(UTC +9:00) Japan Standard Time, Korea Standard Time, Yakutsk Time',

    'UP95' => '(UTC +9:30) Australian Central Standard Time',

    'UP10' => '(UTC +10:00) Australian Eastern Standard Time, Vladivostok Time',

    'UP105' => '(UTC +10:30) Lord Howe Island',

    'UP11' => '(UTC +11:00) Magadan Time, Solomon Islands, Vanuatu',

    'UP115' => '(UTC +11:30) Norfolk Island',

    'UP12' => '(UTC +12:00) Fiji, Gilbert Islands, Kamchatka Time, New Zealand Standard Time',

    'UP1275' => '(UTC +12:45) Chatham Islands Standard Time',

    'UP13' => '(UTC +13:00) Samoa Time Zone, Phoenix Islands Time, Tonga',

    'UP14' => '(UTC +14:00) Line Islands',

    /* Cookies */

    'cookie_csrf_token' => 'Token CSRF',
    'cookie_csrf_token_desc' => 'Um cookie de segurança utilizado para identificar o usuário e prevenir ataques do tipo "Cross Site Request Forgery".',

    'cookie_flash' => 'Dados Flash',
    'cookie_flash_desc' => 'Mensagens de feedback do Usuário, encriptadas para segurança.',

    'cookie_remember' => 'Lembre-me',
    'cookie_remember_desc' => 'Determina se um usuário fica logado automaticamente, assim que visita o site.',

    'cookie_sessionid' => 'ID de Sessão',
    'cookie_sessionid_desc' => 'ID de Sessão, usado para associar um usu[ario logado, com seus dados.',

    'cookie_visitor_consents' => 'Consentimentos de Visitante',
    'cookie_visitor_consents_desc' => 'Salva as respostas das requisições para Consentimento para os visitantes ou não-logados',

    'cookie_last_activity' => 'Última Atividade',
    'cookie_last_activity_desc' => 'Grava a tempo da última página carregada. Utilizado no cálculo das sessões ativas.',

    'cookie_last_visit' => 'Última Visita',
    'cookie_last_visit_desc' => 'Data da última visita do usuário, baseados no cookie last_activity. Pode ser exibido como uma estatística para membros e usado pelo forum e comentários para mostrar tópicos não-lidos para ambos membros e visitantes.',

    'cookie_anon' => 'Anonimizar',
    'cookie_anon_desc' => 'Determina se o nome de usuário é exibido na lista de membros logados no momento.',

    'cookie_tracker' => 'Tracker',
    'cookie_tracker_desc' => 'Contém as últimas 5 páginas visualizadas, encriptadas por segurança. Tipicamente utilizado para formulários ou retorno de mensagens de erro.',

    'cookie_viewtype' => 'Tipo de Visualização do Gerenciador de Arquivos',
    'cookie_viewtype_desc' => 'Determina o Tipo de Visualização que será usada no Gerenciador de Arquivos (tabela ou visualização de miniaturas)',

    'cookie_cp_last_site_id' => 'ID do Painel de Controle do Último Site',
    'cookie_cp_last_site_id_desc' => 'Cookie do MSM indicando qual foi o último site acessado no Painel de Controle.',

    'cookie_collapsed_nav' => 'Navegação Minimizada',
    'cookie_collapsed_nav_desc' => 'Determina se a barra de navegação lateral do painel de controle pode ser minimizada.',

    'cookie_ee_cp_viewmode' => 'Modo de Visualização do Painel de Controle',
    'cookie_ee_cp_viewmode_desc' => 'Determina o modo de visualização para o painel de controle.',

    'cp' => 'Painel de Controle',

    

);

// EOF
