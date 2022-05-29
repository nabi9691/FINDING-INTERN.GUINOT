<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'admins' => [[], ['_controller' => 'App\\Controller\\AdminsController::index'], [], [['text', '/admins']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\AuthentificationController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\AuthentificationController::logout'], [], [['text', '/logout']], [], []],
    'contacts_index' => [[], ['_controller' => 'App\\Controller\\ContactsController::index'], [], [['text', '/contacts/']], [], []],
    'formulaireContacts_index' => [[], ['_controller' => 'App\\Controller\\ContactsController::formulaireContacts'], [], [['text', '/contacts/formulaireContacts']], [], []],
    'nouveauContacts_index' => [[], ['_controller' => 'App\\Controller\\ContactsController::nouveauContacts'], [], [['text', '/contacts/nouveauContacts']], [], []],
    'afficherContacts_index' => [['id'], ['_controller' => 'App\\Controller\\ContactsController::afficherContacts'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/contacts/afficherContacts']], [], []],
    'modifierContacts_index' => [['id'], ['_controller' => 'App\\Controller\\ContactsController::modifierContacts'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/contacts/modifierContacts']], [], []],
    'supprimerContacts_index' => [['id'], ['_controller' => 'App\\Controller\\ContactsController::supprimerContacts'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/contacts/supprimerContacts']], [], []],
    'accueil_index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'medias_index' => [[], ['_controller' => 'App\\Controller\\MediasController::index'], [], [['text', '/medias/']], [], []],
    'rechercheMedias_index' => [['id'], ['_controller' => 'App\\Controller\\MediasController::rechercheMedias'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/medias/recherchesMedias']], [], []],
    'formulaireMedias_index' => [[], ['_controller' => 'App\\Controller\\MediasController::formulaireMedias'], [], [['text', '/medias/formulaireMedias']], [], []],
    'nouveauMedias_index' => [[], ['_controller' => 'App\\Controller\\MediasController::nouveauMedias'], [], [['text', '/medias/nouveauMedias']], [], []],
    'afficherMedias_index' => [['id'], ['_controller' => 'App\\Controller\\MediasController::afficherMedias'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/medias/afficherMedias']], [], []],
    'modifierMedias_index' => [['id'], ['_controller' => 'App\\Controller\\MediasController::modifierMedias'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/medias/modifierMedias']], [], []],
    'supprimerMedias_index' => [['id'], ['_controller' => 'App\\Controller\\MediasController::supprimerMedias'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/medias/supprimerMedias']], [], []],
    'pageAccueilGuinot_index' => [[], ['_controller' => 'App\\Controller\\MediasController::pageAccueilGuinot'], [], [['text', '/mediaspageAccueilGuinot']], [], []],
    'motDuPresidentDeGuinot_index' => [[], ['_controller' => 'App\\Controller\\MediasController::motDuPresidentDeGuinot'], [], [['text', '/mediasmotDuPresidentDeGuinot']], [], []],
    'historiqueGuinot_index' => [[], ['_controller' => 'App\\Controller\\MediasController::historiqueGuinot'], [], [['text', '/mediashistoriqueDeGuinot']], [], []],
    'introductionGuinot_index' => [[], ['_controller' => 'App\\Controller\\MediasController::introductionGuinot'], [], [['text', '/mediasintroductionSurGuinot']], [], []],
    'masseurGuinot_index' => [[], ['_controller' => 'App\\Controller\\MediasController::masseurGuinot'], [], [['text', '/mediasformationMasseurGuinot']], [], []],
    'formationGuinot_index' => [[], ['_controller' => 'App\\Controller\\MediasController::formationGuinot'], [], [['text', '/mediasformationGuinot']], [], []],
    'developpeurGuinot_index' => [[], ['_controller' => 'App\\Controller\\MediasController::developpeurGuinot'], [], [['text', '/mediasformationDeveloppeurGuinot']], [], []],
    'conseillerGuinot_index' => [[], ['_controller' => 'App\\Controller\\MediasController::conseillerGuinot'], [], [['text', '/mediasformationConseillerGuinot']], [], []],
    'temoignages_index' => [[], ['_controller' => 'App\\Controller\\MediasController::temoignages'], [], [['text', '/mediastemoignages']], [], []],
    'message_index' => [[], ['_controller' => 'App\\Controller\\MessagesController::index'], [], [['text', '/messages/']], [], []],
    'formulaireMessages_index' => [[], ['_controller' => 'App\\Controller\\MessagesController::formulaireMessages'], [], [['text', '/messages/formulaireMessages']], [], []],
    'nouveauMessage_index' => [[], ['_controller' => 'App\\Controller\\MessagesController::nouveauMessages'], [], [['text', '/messages/nouveauMessages']], [], []],
    'afficherMessage_index' => [['id'], ['_controller' => 'App\\Controller\\MessagesController::afficherMessage'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/messages/afficherMessage']], [], []],
    'modifierMessage_index' => [['id'], ['_controller' => 'App\\Controller\\MessagesController::modifierMessages'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/messages/modifierMessages']], [], []],
    'supprimerMessage_index' => [['id'], ['_controller' => 'App\\Controller\\MessagesController::supprimerMessages'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/messages/supprimerMessages']], [], []],
    'messagesEnvoyer_index' => [[], ['_controller' => 'App\\Controller\\MessagesController::messageEnvoyer'], [], [['text', '/messages/messagesEnvoyer']], [], []],
    'messagesRecu_index' => [[], ['_controller' => 'App\\Controller\\MessagesController::messageReçu'], [], [['text', '/messages/messagesRecu']], [], []],
    'listeMessagesEnvoyer_index' => [[], ['_controller' => 'App\\Controller\\MessagesController::listeMessagesEnvoyer'], [], [['text', '/messages/listeMessagesEnvoyer']], [], []],
    'listeMessagesRecu_index' => [[], ['_controller' => 'App\\Controller\\MessagesController::listeMessagesRecu'], [], [['text', '/messages/listeMessagesRecu']], [], []],
    'messagesLu_index' => [['id'], ['_controller' => 'App\\Controller\\MessagesController::messageLu'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/messages/messagesLu']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'app_register_admin' => [[], ['_controller' => 'App\\Controller\\RegistrationController::registerAdmin'], [], [['text', '/register-admin']], [], []],
    'app_register_abonner' => [[], ['_controller' => 'App\\Controller\\RegistrationController::registerAbonner'], [], [['text', '/register-abonner']], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], []],
    'utilisateur_index' => [[], ['_controller' => 'App\\Controller\\UtilisateursController::index'], [], [['text', '/utilisateur']], [], []],
    'rechercheUtilisateur_index' => [['id'], ['_controller' => 'App\\Controller\\UtilisateursController::rechercheUtilisateur'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/rechercheUtilisateur']], [], []],
    'formulaireUtilisateur_index' => [[], ['_controller' => 'App\\Controller\\UtilisateursController::formulaireUtilisateur'], [], [['text', '/formulaireUtilisateur']], [], []],
    'nouvelUtilisateur_index' => [[], ['_controller' => 'App\\Controller\\UtilisateursController::nouvelUtilisateur'], [], [['text', '/nouvelUtilisateur']], [], []],
    'afficherUtilisateur_index' => [['id'], ['_controller' => 'App\\Controller\\UtilisateursController::afficherUtilisateur'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/afficherUtilisateur']], [], []],
    'modifierUtilisateur_index' => [['id'], ['_controller' => 'App\\Controller\\UtilisateursController::modifierUtilisateur'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/modifierUtilisateur']], [], []],
    'supprimerUtilisateur_index' => [['id'], ['_controller' => 'App\\Controller\\UtilisateursController::supprimerUtilisateur'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/supprimerUtilisateur']], [], []],
    'monEspacePersonel_index' => [[], ['_controller' => 'App\\Controller\\UtilisateursController::monEspacePersonnel'], [], [['text', '/abonner']], [], []],
    'pageAccueilEspacePerso_index' => [[], ['_controller' => 'App\\Controller\\UtilisateursController::pageAccueilEspacePersonnel'], [], [['text', '/abonner']], [], []],
    'expediteur_index' => [['id'], ['_controller' => 'App\\Controller\\UtilisateursController::expediteur'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/expediteur']], [], []],
    'destinataire_index' => [['id'], ['_controller' => 'App\\Controller\\UtilisateursController::destinataire'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/destinataire']], [], []],
    'ef_connect' => [['instance', 'homeFolder'], ['_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::load', 'instance' => 'default', 'homeFolder' => ''], [], [['variable', '/', '[^/]++', 'homeFolder'], ['variable', '/', '[^/]++', 'instance'], ['text', '/efconnect']], [], []],
    'ef_main_js' => [[], ['_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::mainJS'], [], [['text', '/elfinder.main.js']], [], []],
    'elfinder' => [['instance', 'homeFolder'], ['_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::show', 'instance' => 'default', 'homeFolder' => ''], [], [['variable', '/', '[^/]++', 'homeFolder'], ['variable', '/', '[^/]++', 'instance'], ['text', '/elfinder']], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
];
