<?php
// Translated into English by Yaro2709;
// All rights reserved from 2020;
// Company 1367.

//NAVIGATION:
//{IDs_0001} General variables
//{IDs_0002} Introduction
//{IDs_0003} Update
//{IDs_0004} Test for minimum requirements
//{IDs_0005} Connect to the database
//{IDs_0006} Results of connecting to the database
//{IDs_0007} Database creation
//{IDs_0008} Create an account
//{IDs_0009} Complete the installation
//{IDs_0010} Installation summary
//{IDs_0011} Messages
//{IDs_0012} Carousels

//{IDs_0001} General variables
$LNG['game_name']                                    = 'New-Star';
$LNG['nav_lang']                                     = 'Lenguaje';
$LNG['footer_up']                                    = 'Regresar a Arriba';
$LNG['back']                                         = 'Atras';
$LNG['continue']                                     = 'Siguente';
$LNG['login']                                        = 'Ir al Panel de Admin';
$LNG['title_install']                                = 'Instalador';
$LNG['previous']                                     = '';
$LNG['next']                                         = '';
//{IDs_0002} Introduction
$LNG['intro_install']                                = 'Instalar';
$LNG['intro_welcome']                                = 'Bienvenido a '.$LNG['game_name'].'!';
$LNG['intro_text']                                   = ''.$LNG['game_name'].' - uno de los mejores motores de estrategia en navegador web, basado en 2Moons v1.8. '.$LNG['game_name'].' el cual es el mas estable en desarrollo hasta el momento. Esperamos que '.$LNG['game_name'].' supere sus espectativas. Si tiene alguna pregunta, consultenosla. '.$LNG['game_name'].' es un proyecto de codigo abierto y licenciado bajo GNU GPL v3. Antes de instalar, se realizara una pequeña prueba de compatibilidad para comprobar que cumples todos los requisitos para instalar. ';
//{IDs_0003} Update
$LNG['upgrade_title']                                = 'Actualizar';
$LNG['upgrade_header']                               = 'Asistente de actualizacion de la base de datos.';
$LNG['upgrade_text']                                 = 'Esta listo para instalar '.$LNG['game_name'].' y actualizar este? Puedes actualizar tu vieja base de datos con unos clicks! ';
$LNG['upgrade_success']                              = 'La base de datos fue actualizada a la version %s.';
$LNG['upgrade_nothingtodo']                          = 'No se requieren acciones, la base de datos tiene la revision %s.';
$LNG['upgrade_available']                            = 'Actualización disponible. Puedes actualizar la version actual %s a la version %s. ';
$LNG['upgrade_notavailable']                         = 'Se esta usando la mas reciente version %s.';
//{IDs_0004} Test for minimum requirements
$LNG['req_head']                                     = 'Modulos requeridos';
$LNG['req_text']                                     = 'Antes de proceder con la instalacion '.$LNG['game_name'].' will check the configuration files of your server for compliance with the necessary requirements for the use of '.$LNG['game_name'].'. Please read the results carefully and do not continue the installation until the verification is completed on all points. If you want to use any of the functions of the modules listed below, you must make sure that the verification is passed.';
$LNG['req_requirements']                             = 'Requerimientos';
$LNG['req_status']                                   = 'Estado';
$LNG['reg_yes']                                      = 'Si';
$LNG['reg_no']                                       = 'No';
$LNG['reg_writable']                                 = '(CHMOD 777)';
$LNG['reg_not_writable']                             = 'Sin permisos de escritura';
$LNG['reg_file']                                     = 'Es el archivo "%s" escribible?';
$LNG['reg_dir']                                      = 'Es la carpeta "%s" escribible?';
$LNG['req_php_need']                                 = 'Version instalada de "PHP"';
$LNG['req_php_need_desc']                            = 'PHP es el lenguaje en el que esta escrito este juego. '.$LNG['game_name'].' tarbaja usando PHP v5.6-7.3';
$LNG['reg_gd_need']                                  = 'Version instalada de la libreria grafica "gdlib"';
$LNG['reg_gd_desc']                                  = 'La libreria grafica "gdlib" es responsable de la generacion dinamica de imagenes. Sin esta libreria, algunas funcionalidades no estaran disponibles. ';
$LNG['reg_pdo_active']                               = 'Soporta la extencion "PDO"';
$LNG['reg_pdo_desc']                                 = 'Debes de proveer soporte PDO en PHP.';
$LNG['reg_json_need']                                = 'Esta la extencion "JSON" disponibles?';
$LNG['reg_iniset_need']                              = 'Esta la funcion PHP "ini_set" activa?';
$LNG['reg_global_need']                              = 'Esta el parametro "register_globals" desactivado?';
$LNG['reg_global_desc']                              = ''.$LNG['game_name'].' puede trabajar corectamente con esta opcion habilitada. Pero es reomendado, por razones de seguridad, desactivar register_globals en la configuracion de PHP. ';
$LNG['req_ftp_head']                                 = 'FTP';
$LNG['req_ftp_desc']                                 = 'Please enter your FTP details so that the installer automatically fixes the errors. In addition, you can also manually assign write permissions.';
$LNG['req_ftp_host']                                 = 'FTP host';
$LNG['req_ftp_username']                             = 'FTP login';
$LNG['req_ftp_password']                             = 'FTP password';
$LNG['req_ftp_dir']                                  = 'FTP path to '.$LNG['game_name'].'';
$LNG['req_ftp_send']                                 = 'Set permissions of CHMOD 777';
$LNG['req_ftp_error_data']                           = 'It was not possible to connect to the FTP server with the provided credentials.';
$LNG['req_ftp_error_dir']                            = 'The folder is specified incorrectly.';
//{IDs_0005} Connect to the database
$LNG['step1_head']                                   = 'Configurando el acceso a la base de datos';
$LNG['step1_text']                                   = ''.$LNG['game_name'].' puede ser instalado en tu servidor, pero debes de especificar como acceder a la base de datos. Si no conoces como conectar la base de datos contacte al soporte tecnico de '.$LNG['game_name'].' para preguntarle. Cuando introdusca los datos, asegurate que todo esta bien antes de proceder.';
$LNG['step1_mysql_server']                           = 'Servidor de DB';
$LNG['step1_mysql_port']                             = 'Puerto';
$LNG['step1_mysql_dbuser']                           = 'Usuario de la BD';
$LNG['step1_mysql_dbpass']                           = 'Password de la BD';
$LNG['step1_mysql_dbname']                           = 'Nombre de la BD';
$LNG['step1_mysql_prefix']                           = 'Prefijo para la tabla';
//{IDs_0006} Results of connecting to the database
$LNG['step2_prefix_invalid']                         = 'El prefijo solo puede tener caracteres alfanumericos.';
$LNG['step2_db_no_dbname']                           = 'No especifico el nombre de la BD.';
$LNG['step2_db_too_long']                            = 'El prefijo es demasidado largo. El maximo es 36 caracteres. ';
$LNG['step2_db_con_fail']                            = 'N se puede conectar a la BD. Detalles abajo. ';
$LNG['step2_config_exists']                          = 'config.php ya existe.';
$LNG['step2_conf_op_fail']                           = 'Permisos de escritura no han sido establecidos a config.php.';
$LNG['step2_db_done']                                = 'La conexion a la BD fue establecida.';
//{IDs_0007} Database creation
$LNG['step3_head']                                   = 'Crear Tablas en la BD';
$LNG['step3_text']                                   = 'Las Tablas fueron creadas. Continuar al siguiente paso para finalizar la instalacion de '.$LNG['game_name'].'.';
$LNG['step3_db_error']                               = 'Fallo al crear las siguintes tablas:';
//{IDs_0008} Create an account
$LNG['step4_head']				                     = 'Cuenta del Administrador';
$LNG['step4_text']				                     = 'El asistente de instalacion creara una cuenta de Administrador para ti. Escribe los datos a usar';
$LNG['step4_admin_name']		                     = 'Nombre del Administrador:';
$LNG['step4_admin_name_desc']	                     = 'Entre 3 a 20 caracteres';
$LNG['step4_admin_pass']		                     = 'Password del Administrador:';
$LNG['step4_admin_pass_desc']	                     = 'Entre 6 a 30 caracteres';
$LNG['step4_admin_mail']		                     = 'E-mail:';
//{IDs_0009} Complete the installation
$LNG['step6_head']                                   = 'Felicidades! Se ha configurado '.$LNG['game_name'].' :) ';
$LNG['step6_text']                                   = 'Clic en el boton de abajo para ir al Panel de Administracion. Te tomara un momento familiarizarte con la configuracion. Elimina el archivo "includes/ENABLE_INSTALL_TOOL" o renombralo para usar el juego. Si este archivo permanece, el juego esta en potencial riesgo de seguridad!';
$LNG['step8_need_fields']                            = 'Debes llenar todos los campos.';
//{IDs_0010} Installation summary
$LNG['sql_close_reason']                             = 'El servidor esta actualmente desactivado';
$LNG['sql_welcome']                                  = 'Bienvenido a '.$LNG ['game_name'].' v';
//{IDs_0011} Messages
$LNG['locked_upgrade']                               = 'Es requerido actualizar la BD! Para activar el proceso de actualizacion, debes crear un archivo llamado "ENABLE_INSTALL_TOOL" en la carpeta "include". El nombre debe ser en mayusculas. El archivo puede estar vacio.';
$LNG['locked_install']                               = 'El instalador esta bloqueado! En la carpeta "includes", crea una archivo llamado "ENABLE_INSTALL_TOOL". El nombre debe ser en mayusculas. El archivo puede estar vacio. El archivo debe ser eliminado una vez que la instalacion se complete';
//{IDs_0012} Carousels
$LNG['carousel_project_head']                        = 'Projecto.';
$LNG['carousel_project_text']                        = 'El juego esta basado en 2Moons v1.8. Se ha reescrito mas del 30%! ';
$LNG['carousel_mods_head']                           = 'Modificaciones.';
$LNG['carousel_mods_text']                           = 'Se han desarrollado mas de 15 nuevas modificaiones y se han reescrito mas de 10!';
$LNG['carousel_design_head']                         = 'Diseño Receptivo.';
$LNG['carousel_design_text']                         = 'Usamos al bien conocido bootstrap.';
$LNG['carousel_support_head']                        = 'Soporte activo.';
$LNG['carousel_support_text']                        = 'El soporte esta basado en los foros de 2Moons y al proyesto de github.';
$LNG['carousel_version_info_head']                   = 'Algo Nuevo?';
$LNG['carousel_version_info_text']                   = '¡Claro que si! Para enterarse, necesitas instalar el juego :) ';