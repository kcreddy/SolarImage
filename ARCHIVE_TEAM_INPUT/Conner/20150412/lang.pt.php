<?php
/**
* Please note: we can use unencoded characters like ö, é etc here as we use the html5 doctype with utf8 encoding
* in the application's header (in views/_header.php). To add new languages simply copy this file,
* and create a language switch in your root files.
*/

// Portuguese Language File

$lang = array();

// login & registration classes
$lang['MESSAGE_ACCOUNT_LOGIN'] = 'Por favor faça o login ou registre-se nova conta na Sessão de enlace para a direita';
$lang['MESSAGE_ACCOUNT_NOT_ACTIVATED'] = "Sua conta será ativada com este formulário e, em seguida, verificado com um e-mail de confirmação.";
$lang['MESSAGE_CAPTCHA_WRONG'] = "Captcha incorreto!";
$lang['MESSAGE_COOKIE_INVALID'] = "Cookie inválido";
$lang['MESSAGE_DATABASE_ERROR'] = "Erro de conexão com o banco de dados.";
$lang['MESSAGE_EMAIL_ALREADY_EXISTS'] = "Este e-mail já está registrado. Tente usar a \"recuperação de senha\".";
$lang['MESSAGE_EMAIL_CHANGE_FAILED'] = "Desculpe, a alteração de e-mail falhou.";
$lang['MESSAGE_EMAIL_CHANGED_SUCCESSFULLY'] = "Seu e-mail foi alterado com sucesso. Novo e-mail é ";
$lang['MESSAGE_EMAIL_EMPTY'] = "Email não pode ficar em branco";
$lang['MESSAGE_EMAIL_INVALID'] = "Seu e-mail possui um formato inválido";
$lang['MESSAGE_EMAIL_SAME_LIKE_OLD_ONE'] = "Desculpe, este email é o mesmo do atual. Por favor informe outro email.";
$lang['MESSAGE_EMAIL_TOO_LONG'] = "Email não pode ter mais de 64 caracteres";
$lang['MESSAGE_LINK_PARAMETER_EMPTY'] = "Link vazio.";
$lang['MESSAGE_LOGGED_OUT'] = "Você saiu..";
// The "login failed"-message is a security improved feedback that doesn't show a potential attacker if the user exists or not
$lang['MESSAGE_LOGIN_FAILED'] = "Login falhou.";
$lang['MESSAGE_OLD_PASSWORD_WRONG'] = "Sua senha antiga está incorreta.";
$lang['MESSAGE_PASSWORD_BAD_CONFIRM'] = "As senhas informadas não coincidem";
$lang['MESSAGE_PASSWORD_CHANGE_FAILED'] = "Desculpe, a alteração de senha falhou.";
$lang['MESSAGE_PASSWORD_CHANGED_SUCCESSFULLY'] = "Senha alterada com sucesso!";
$lang['MESSAGE_PASSWORD_EMPTY'] = "Senha está em branco";
$lang['MESSAGE_PASSWORD_RESET_MAIL_FAILED'] = "Email de recuperação de senha não foi enviado! Erro: ";
$lang['MESSAGE_PASSWORD_RESET_MAIL_SUCCESSFULLY_SENT'] = "Email de recuperação de senha enviado!";
$lang['MESSAGE_PASSWORD_TOO_SHORT'] = "Tamanho mínimo da senha é de 6 caracteres";
$lang['MESSAGE_PASSWORD_WRONG'] = "Senha incorreta. Tente novamente.";
$lang['MESSAGE_PASSWORD_WRONG_3_TIMES'] = "Você inseriu uma senha incorreta 3 vezes ou mais. Favor aguardar 30 segundos e tente novamente.";
$lang['MESSAGE_REGISTRATION_ACTIVATION_NOT_SUCCESSFUL'] = "Desculpe, nenhum id encontrado...";
$lang['MESSAGE_REGISTRATION_ACTIVATION_SUCCESSFUL'] = "Ativação bem sucedida! Você pode entrar agora!";
$lang['MESSAGE_REGISTRATION_FAILED'] = "Desculpe, seu registro falhou. Volte e tente novamente.";
$lang['MESSAGE_RESET_LINK_HAS_EXPIRED'] = "Este link de recuperação expirou. Use o link sempre em menos de uma hora.";
$lang['MESSAGE_VERIFICATION_MAIL_ERROR'] = "Desculpe, não foi possível enviar um email de verificação. Sua conta não foi criada.";
$lang['MESSAGE_VERIFICATION_MAIL_NOT_SENT'] = "Email de verificação não foi enviado! Erro: ";
$lang['MESSAGE_VERIFICATION_MAIL_SENT'] = "Sua conta foi criada e enviamos um email. Clique no link de verificação deste email.";
$lang['MESSAGE_USER_DOES_NOT_EXIST'] = "Este usuário não existe";
$lang['MESSAGE_USERNAME_BAD_LENGTH'] = "Usuário não pode conter menos que 2 caracteres ou mais que 64";
$lang['MESSAGE_USERNAME_CHANGE_FAILED'] = "Desculpe, a alteração do nome de usuário falhou";
$lang['MESSAGE_USERNAME_CHANGED_SUCCESSFULLY'] = "Seu nome de usuário foi alterado com sucesso. Novo nome de usuário é - ";
$lang['MESSAGE_USERNAME_EMPTY'] = "Campo nome de usuário está vazio";
$lang['MESSAGE_USERNAME_EXISTS'] = "Desculpe, este nome de usuário já foi utilizado. Escolha outro.";
$lang['MESSAGE_USERNAME_INVALID'] = "Nome de usuário fora do padrão: somente a-Z e números são permitidos, 2 a 64 caracteres";
$lang['MESSAGE_USERNAME_SAME_LIKE_OLD_ONE'] = "Desculpe, o nome de usuário é o mesmo atual. Escolha outro.";
//  Common Wording/Messages in Pages
$lang['MESSAGE_WELCOME'] = "Bem-vindo";
$lang['MESSAGE_CARINA'] = "Collaborative Solar Imagem Anotação";
$lang['MESSAGE_LOG_IN_PAGE'] = "Entrar Página";
$lang['MESSAGE_CONSTELLATION'] = "Constelação";
$lang['MESSAGE_CONSTELLATION_INTRO'] = "Carina Constellation no céu do sul, o que significa \"a quilha de um navio\" .  Carina contém a segunda estrela mais brilhante no céu noturno.";
$lang['MESSAGE_AIM'] = "Nosso objetivo é";
$lang['MESSAGE_AIM_DEDICATION'] = "Dedicado";
$lang['MESSAGE_AIM_INTRO'] = "Para criar uma aplicação web de código aberto que irá coletar dados valiosos sobre buracos coronais.";
$lang['MESSAGE_LOBO'] = "Todo mundo é um";
$lang['MESSAGE_LOBO_INTRO'] = "A Universidade de Electrotécnica e de Computadores Engenheiros do Novo México gostaria de introduzir Carina!";
$lang['MESSAGE_MISSION'] = "Nossa Missão";
$lang['MESSAGE_CARINA_MISSION'] = 'Missão CARINA';
$lang['MESSAGE_MISSION_1'] = "O objetivo deste projeto é oferecer um aplicativo de internet colaborativa 
                            (web app), em que os usuários serão capazes de anotar imagens observacionais 
                            solares. Os usuários vão usar um mouse
                            clicar ao longo do perímetro de furos nas imagens coronais.
                            Os dados anotados será juntado com sua respectiva imagem
                            e disponibilizados para análise adicional pelo prestador de imagem.";
$lang['MESSAGE_MISSION_2'] = "O campo astronômico está na necessidade de este tipo de tecnologia colaborativa. 
                            Com a ajuda desta aplicação anotação solar, os cientistas têm a capacidade de 
                            trocar idéias e melhor compreender a dinâmica do sol que levam a essas ejeções de massa coronal .";

// views
$lang['WORDING_BACK_TO_LOGIN'] = "Voltar ao Login";
$lang['WORDING_BACK_TO_HOME'] = 'Voltar à Página Principal';
$lang['WORDING_CHANGE_EMAIL'] = "Alterar email";
$lang['WORDING_CHANGE_PASSWORD'] = "Alterar senha";
$lang['WORDING_CHANGE_USERNAME'] = "Alterar nome de usuário";
$lang['WORDING_CURRENTLY'] = "atualmente";
$lang['WORDING_EDIT_USER_DATA'] = "Editar dados do usuário";
$lang['WORDING_EDIT_YOUR_CREDENTIALS'] = "Você está logado e pode editar suas informações aqui";
$lang['WORDING_FORGOT_MY_PASSWORD'] = "Esqueci minha senha";
$lang['WORDING_LOGIN'] = "Entrar";
$lang['WORDING_LOGOUT'] = "Sair";
$lang['WORDING_NEW_EMAIL'] = "Novo email";
$lang['WORDING_NEW_PASSWORD'] = "Nova senha";
$lang['WORDING_NEW_PASSWORD_REPEAT'] = "Repetir nova senha";
$lang['WORDING_NEW_USERNAME'] = "Novo nome de usuário (não pode ficar vazio e deve ser azAZ09 e possuir 2-64 caracteres)";
$lang['WORDING_OLD_PASSWORD'] = "Sua senha antiga";
$lang['WORDING_PASSWORD'] = "Senha";
$lang['WORDING_PROFILE_PICTURE'] = "Sua foto de perfil (do gravatar):";
$lang['WORDING_REGISTER'] = "Registrar";
$lang['WORDING_REGISTER_NEW_ACCOUNT'] = "Registrar nova conta";
$lang['WORDING_REGISTRATION_CAPTCHA'] = "Digite os caracteres";
$lang['WORDING_REGISTRATION_EMAIL'] = "Email do usuário (informe um email real, enviaremos um email de confirmação com link de ativação)";
$lang['WORDING_REGISTRATION_PASSWORD'] = "Senha (min. 6 caracteres!)";
$lang['WORDING_REGISTRATION_PASSWORD_REPEAT'] = "Repita a senha";
$lang['WORDING_REGISTRATION_USERNAME'] = "Nome de usuário (comente letras e numeros, 2 a 64 caracteres)";
$lang['WORDING_REMEMBER_ME'] = "Manter logado (por 2 semanas)";
$lang['WORDING_REQUEST_PASSWORD_RESET'] = "Solicitar recuperação de senha. Informe seu nome de usuário e enviaremos um email com instruções:";
$lang['WORDING_RESET_PASSWORD'] = "recuperar senha";
$lang['WORDING_SUBMIT_NEW_PASSWORD'] = "Enviar nova senha";
$lang['WORDING_USERNAME'] = "Nome de usuário";
$lang['WORDING_YOU_ARE_LOGGED_IN_AS'] = "Você está logado como - ";
$lang['WORDING_ADMIN_LOGIN'] = "Adminstrator Entrar";
// MENU
$lang['WORDING_MENU_HOME_PAGE'] = 'Casa Pagina';
$lang['WORDING_MENU_GALLERY'] = 'Galeria';
$lang['WORDING_MENU_SERVICES'] = 'Serviços';
$lang['WORDING_MENU_HELP'] = 'Socorro';
$lang['WORDING_MENU_CONTACT'] = 'Entre Em Contato Conosco';
//  LANGUAGE FLAG TAGS
$lang['LANGUAGE_FLAG_ENGLISH'] = 'INGLÊS';
$lang['LANGUAGE_FLAG_GREEK'] = 'GREGO';
$lang['LANGUAGE_FLAG_ITALIAN'] = 'ITALIANA';
$lang['LANGUAGE_FLAG_SPANISH'] = 'ESPANHOL';
$lang['LANGUAGE_FLAG_CATALAN'] = 'CATALÃO';
$lang['LANGUAGE_FLAG_PORTUGUESE'] = 'PORTUGUÊS';
$lang['LANGUAGE_FLAG_TAGALOG'] = 'TAGALOG';
//  SERVICES PAGE
$lang['WORDING_OUR_SERVICES'] = 'Nossos Serviços';
$lang['WORDING_UPLOAD_A_PHOTO'] = 'Carregar Uma Foto';
$lang['WORDING_UPLOAD_DESCRIPTION'] = ' - Esta seção permitirá ao usuário fazer upload de '
                                       . 'uma imagem localização de uma fonte externa para '
                                       . 'anotações. Vai salvar o local no banco de dados os '
                                       . 'usuários para o trabalho futuro.';
$lang['WORDING_ANNOTATE_DEMO'] = 'Annotate DEMO Image';
$lang['WORDING_ANNOTATE_DEMO_DETAILS'] = 'Practice Annotating Administrator Supplied Image';
$lang['WORDING_SOLAR_RESOURCES'] ='SOLAR DYNAMICS & IMAGES RESOURCES';
$lang['WORDING_SOLAR_RESOURCES_DETAILS'] = " - Research and find images for annotations.";
$lang['WORDING_SOLAR_RESOURCES_LINK_1'] ='SDO | Solar Dynamics Observatory';
$lang['WORDING_SOLAR_RESOURCES_LINK_2'] ='SDO | Browse IMage Directories';
$lang['WORDING_SOLAR_RESOURCES_LINK_3'] ='NASA Solar Dynamics Observatory';
$lang['WORDING_SOLAR_RESOURCES_LINK_4'] ='Stanford Solar Center';
$lang['WORDING_SOLAR_RESOURCES_LINK_5'] ='SOHO - Solar And Heliospheric Observatory';
$lang['WORDING_BROWSE_FOR_IMAGE'] = 'Navegue Album Para selecionar a imagem';
$lang['WORDING_BROWSE_IMAGE_DESCRIPTION'] = " - Selecione uma imagem em álbuns para anotar.";
$lang['WORDING_COLLABORATE'] = 'Colaborar';
$lang['WORDING_COLLABORATE_DESCRIPTION'] = " - Contato outros usuários para discutir imagens.";
$lang['WORDING_MY_PROFILE'] = 'Meu Perfil';
$lang['WORDING_MY_PROFILE_DESCRIPTION'] = " - Atualizar informações de perfil de usuário.";
$lang['WORDING_DATA_EXPORT'] = "Anotações Export";
$lang['WORDING_DATA_EXPORT_DETAILS'] = " - Dados de anotação de saída em arquivo formatado CSV. "
                                         . "Usuário solicitado para a localização do arquivo de saída.";

$lang['WORDING_ANNOTATE_A_PHOTO'] = 'Anotar Uma Foto';
$lang['WORDING_ANNOTATE_WITH_A_PARTNER'] ='Anotar Com Um Parceiro';
$lang['WORDING_ANNOTATE_PHOTO_DESCRIPTION'] = " - O usuário pode localizar um local imagem salva e , em seguida, anotar .";
$lang['WORDING_ANNOTATE_WITH_A_PARTNER_DESCRIPTION'] = " - Colabore atividade anotação.";
$lang['WORDING_UNM'] = "University of New Mexico - Escola Ano 2014 - 2015";
$lang['WORDING_SDP-SIC'] = "Senior Project Design - Collaboration Imagem Solar";
$lang['WORDING_TEAM'] = "equipe";
$lang['WORDING_UNM-SDPW'] = "Projectos de Design UNM Senior website";
//  GALLERY PAGE
$lang['WORDING_LATEST_IMAGE'] = 'Última Imagem';
$lang['WORDING_ARCHIVE_SUMMARY'] = 'Arquivo Summary';
$lang['WORDING_COMPLETE_ARCHIVE_SOLAR_IMAGES'] = 'Arquivo completo de imagens solares por ano e mês .';
$lang['WORDING_PREVIOUS_YEARS'] = 'Exercícios Anteriores';
$lang['WORDING_ARCHIVE'] = 'Arquivo';
//  ANNOTATE PHOTO PAGE
$lang['WORDING_ANNOTATE_PHOTO'] = 'Anotar Foto';
$lang['WORDING_OPERATIONS'] = 'OPERAÇÕES:  ';
$lang['WORDING_ANNOTATE'] = 'ANOTAR';
$lang['WORDING_DELETE_LAST_ANNOTATION_POINT'] = 'APAGAR ÚLTIMO PONTO ANNOTATION';
$lang['WORDING_DELETE_ALL_POINTS'] = 'EXCLUIR TODOS OS PONTOS';
$lang['MESSAGE_ARE_YOU_CERTAIN'] = 'TEM A CERTEZA?!';
$lang['MESSAGE_CLICK_ANNOTATE_TO_RESUME'] = 'Clique ANOTAR para retomar';
$lang['WORDING_ANNOTATION_SAVE'] = 'SALVAR';
$lang['WORDING_ANNOTATION_CANCEL'] = 'CANCELAR';
$lang['WORDING_ANNOTATION_SUBMIT'] = 'ENVIAR ANOTAÇÕES';
$lang['WORDING_ANNOTATION_REQUEST'] = 'ANOTAÇÕES DE REQUISIÇÃO';
$lang['WORDING_ANNOTATION_QUIT'] = 'Retornar para Serviços - todas as anotações REJEITADOS';
$lang['WORDING_CONNECT'] = 'Ative Ligue Anotações';
//  ANNOTATION DATA RETRIEVE
$lang['MESSAGE_ANNOTATION_DATA_RETRIEVED'] = 'Dados de Anotação Recuperado Para Image File: ';
//  HELP PAGE
$lang['WORDING_HELP_WHAT_IS'] = 'O que é um buraco coronal?';
$lang['WORDING_HELP_WHAT_IS_DETAILS'] = 'Corona do nosso Sol é desigual não uniforme. Partes mais escuras mais frios
                                    da coroa são conhecidos como buracos coronais. Nestes refrigerador
                                    seções mais escuras há mais baixos níveis de gás e energia do que
                                    a área circundante. Devido a isso, o sol de magnético
                                    campo será arco causando partículas solares para fugir do sol
                                    sob a forma de vento solar. Se os buracos coronais se tornar grande o suficiente
                                    coronal carro ejeções de massa ocorrer. O que é uma má notícia para nós na Terra.';
$lang['WORDING_HELP_WHAT_DOES'] = 'O que CARINA tem a ver com o sol?';
$lang['WORDING_HELP_WHAT_DOES_DETAILS'] = 'Carina utiliza a grande base de usuários da internet para estudar, analisar,
                                 e, mais importante anotar imagens do sol para fazer registros desses
                                 buracos coronais. As anotações dessas imagens são registradas em um banco de dados
                                 onde eles podem ser analisados ​​mais tarde. Saber o que o nosso sol está fazendo é vital para
                                 a compreensão do tempo solar para proteger nossos satélites, energia e comunicação
                                 sistemas e outros sistemas eletrônicos vitais.';
$lang['WORDING_HELP_HOW_DO'] = 'Como faço para começar?';
$lang['WORDING_HELP_HOW_DO_DETAILS'] = 'Você começa criando uma conta gratuita. A partir daqui você pode fazer logon no acesso a
                                   conjunto de ferramentas na guia serviços. Aqui é onde você pode editar o nosso perfil
                                   informações, fazer upload de uma foto, anotar uma foto, dados de anotação de exportação, e
                                   acessar a sala de chat IRC #carina em Mibbit.';
$lang['WORDING_HELP_UPLOADING'] = 'Carregar uma foto';
$lang['WORDING_HELP_UPLOADING_DETAILS'] = 'Na guia serviços clicando no Carregar um link Foto irá levá-lo
                                           para a página de upload, onde você pode selecionar o arquivo desejado e carregá-lo.';
$lang['WORDING_HELP_ANNOTATE'] = 'Anote a Photo';
$lang['WORDING_HELP_ANNOTATE_DETAILS'] = 'Clicando no Browse Album para Selecione o link imagem ou procure Álbum para
                                          Selecionar Imagem da página de Serviços irá levá-lo para a anotação
                                          ferramenta. A partir daí você pode selecionar uma imagem para anotar e começar a olhar
                                          para buracos coronais. Comece por colocar o cursor do mouse sobre a imagem.
                                          Suas coordenadas do mouse são vistas em tempo real, acima da imagem. Clique
                                          e colocar em torno dos pontos de passagem coronal buracos na imagem. Você pode apagar
                                          seu último waypoint, apagar todos os pontos, conectam pontos, e pedido
                                          annotattions. Mostrando conexões nos waypoints é útil para vê-
                                          o furo coronal. Quando você está feliz com o seu trabalho clique em Enviar Anotações
                                          para escrever suas anotações para o banco de dados.';
$lang['WORDING_HELP_COMMUNICATE'] = 'Comunique-se com os outros no IRC';
$lang['WORDING_HELP_COMMUNICATE_DETAILS'] = 'Que melhor maneira de obter ajuda e perguntas respondidas de comunicação
                                             com os pares. O link Colaboração na guia Serviços irá levá-lo para
                                             a página de colaboração com um link para acessar o chat #carina no
                                             lado direito. A sala de chat irá aparecer em uma nova janela. daqui
                                             você pode usar um apelido auto-gerada ou fazer o seu próprio original. enquanto Que
                                             on-line você pode falar com os outros na sala de chat principal, ou PM (Personal
                                             Mensagem) indivíduos. Clique aqui para iniciar o #carina IRC Chatroom.';
$lang['WORDING_HELP_EXPORTING'] = 'Exportação de anotação de dados';
$lang['WORDING_HELP_EXPORTING_DETAILS'] = 'O conteúdo da base de dados da anotação pode ser exportado para posterior análise.';