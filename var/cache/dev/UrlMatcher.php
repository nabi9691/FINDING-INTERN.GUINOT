<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admins' => [[['_route' => 'admins', '_controller' => 'App\\Controller\\AdminsController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\AuthentificationController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\AuthentificationController::logout'], null, null, null, false, false, null]],
        '/contacts' => [[['_route' => 'contacts_index', '_controller' => 'App\\Controller\\ContactsController::index'], null, null, null, true, false, null]],
        '/contacts/formulaireContacts' => [[['_route' => 'formulaireContacts_index', '_controller' => 'App\\Controller\\ContactsController::formulaireContacts'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contacts/nouveauContacts' => [[['_route' => 'nouveauContacts_index', '_controller' => 'App\\Controller\\ContactsController::nouveauContacts'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [
            [['_route' => 'accueil_index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
            [['_route' => 'index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
        ],
        '/medias' => [[['_route' => 'medias_index', '_controller' => 'App\\Controller\\MediasController::index'], null, null, null, true, false, null]],
        '/medias/formulaireMedias' => [[['_route' => 'formulaireMedias_index', '_controller' => 'App\\Controller\\MediasController::formulaireMedias'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/medias/nouveauMedias' => [[['_route' => 'nouveauMedias_index', '_controller' => 'App\\Controller\\MediasController::nouveauMedias'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/mediaspageAccueilGuinot' => [[['_route' => 'pageAccueilGuinot_index', '_controller' => 'App\\Controller\\MediasController::pageAccueilGuinot'], null, ['GET' => 0], null, false, false, null]],
        '/mediasmotDuPresidentDeGuinot' => [[['_route' => 'motDuPresidentDeGuinot_index', '_controller' => 'App\\Controller\\MediasController::motDuPresidentDeGuinot'], null, ['GET' => 0], null, false, false, null]],
        '/mediashistoriqueDeGuinot' => [[['_route' => 'historiqueGuinot_index', '_controller' => 'App\\Controller\\MediasController::historiqueGuinot'], null, ['GET' => 0], null, false, false, null]],
        '/mediasintroductionSurGuinot' => [[['_route' => 'introductionGuinot_index', '_controller' => 'App\\Controller\\MediasController::introductionGuinot'], null, ['GET' => 0], null, false, false, null]],
        '/mediasformationMasseurGuinot' => [[['_route' => 'masseurGuinot_index', '_controller' => 'App\\Controller\\MediasController::masseurGuinot'], null, ['GET' => 0], null, false, false, null]],
        '/mediasformationGuinot' => [[['_route' => 'formationGuinot_index', '_controller' => 'App\\Controller\\MediasController::formationGuinot'], null, ['GET' => 0], null, false, false, null]],
        '/mediasformationDeveloppeurGuinot' => [[['_route' => 'developpeurGuinot_index', '_controller' => 'App\\Controller\\MediasController::developpeurGuinot'], null, ['GET' => 0], null, false, false, null]],
        '/mediasformationConseillerGuinot' => [[['_route' => 'conseillerGuinot_index', '_controller' => 'App\\Controller\\MediasController::conseillerGuinot'], null, ['GET' => 0], null, false, false, null]],
        '/mediastemoignages' => [[['_route' => 'temoignages_index', '_controller' => 'App\\Controller\\MediasController::temoignages'], null, ['GET' => 0], null, false, false, null]],
        '/messages' => [[['_route' => 'message_index', '_controller' => 'App\\Controller\\MessagesController::index'], null, null, null, true, false, null]],
        '/messages/formulaireMessages' => [[['_route' => 'formulaireMessages_index', '_controller' => 'App\\Controller\\MessagesController::formulaireMessages'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/messages/nouveauMessages' => [[['_route' => 'nouveauMessage_index', '_controller' => 'App\\Controller\\MessagesController::nouveauMessages'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/messages/messagesEnvoyer' => [[['_route' => 'messagesEnvoyer_index', '_controller' => 'App\\Controller\\MessagesController::messageEnvoyer'], null, null, null, false, false, null]],
        '/messages/messagesRecu' => [[['_route' => 'messagesRecu_index', '_controller' => 'App\\Controller\\MessagesController::messageReçu'], null, null, null, false, false, null]],
        '/messages/listeMessagesEnvoyer' => [[['_route' => 'listeMessagesEnvoyer_index', '_controller' => 'App\\Controller\\MessagesController::listeMessagesEnvoyer'], null, null, null, false, false, null]],
        '/messages/listeMessagesRecu' => [[['_route' => 'listeMessagesRecu_index', '_controller' => 'App\\Controller\\MessagesController::listeMessagesRecu'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/register-admin' => [[['_route' => 'app_register_admin', '_controller' => 'App\\Controller\\RegistrationController::registerAdmin'], null, null, null, false, false, null]],
        '/register-stagiaire' => [[['_route' => 'app_register_stagiaire', '_controller' => 'App\\Controller\\RegistrationController::registerStagiaire'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/utilisateur' => [[['_route' => 'utilisateur_index', '_controller' => 'App\\Controller\\UtilisateursController::index'], null, ['GET' => 0], null, false, false, null]],
        '/formulaireUtilisateur' => [[['_route' => 'formulaireUtilisateur_index', '_controller' => 'App\\Controller\\UtilisateursController::formulaireUtilisateur'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/nouvelUtilisateur' => [[['_route' => 'nouvelUtilisateur_index', '_controller' => 'App\\Controller\\UtilisateursController::nouvelUtilisateur'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/stagiaire' => [[['_route' => 'pageAccueilEspacePerso_index', '_controller' => 'App\\Controller\\UtilisateursController::pageAccueilEspacePersonnel'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/expediteur' => [[['_route' => 'expediteur_index', '_controller' => 'App\\Controller\\UtilisateursController::expediteur'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/destinataire' => [[['_route' => 'destinataire_index', '_controller' => 'App\\Controller\\UtilisateursController::destinataire'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/elfinder.main.js' => [[['_route' => 'ef_main_js', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::mainJS'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/contacts/(?'
                    .'|afficherContacts/([^/]++)(*:207)'
                    .'|modifierContacts/([^/]++)(*:240)'
                    .'|supprimerContacts/([^/]++)(*:274)'
                .')'
                .'|/m(?'
                    .'|e(?'
                        .'|dias/(?'
                            .'|recherchesMedias/([^/]++)(*:325)'
                            .'|afficherMedias/([^/]++)(*:356)'
                            .'|modifierMedias/([^/]++)(*:387)'
                            .'|supprimerMedias/([^/]++)(*:419)'
                        .')'
                        .'|ssages/(?'
                            .'|afficherMessage/([^/]++)(*:462)'
                            .'|m(?'
                                .'|odifierMessages/([^/]++)(*:498)'
                                .'|essagesLu/([^/]++)(*:524)'
                            .')'
                            .'|supprimerMessages/([^/]++)(*:559)'
                        .')'
                    .')'
                    .'|odifierUtilisateur/([^/]++)(*:596)'
                .')'
                .'|/rechercheUtilisateur/([^/]++)(*:635)'
                .'|/afficherUtilisateur/([^/]++)(*:672)'
                .'|/supprimerUtilisateur/([^/]++)(*:710)'
                .'|/e(?'
                    .'|fconnect(?:/([^/]++)(?:/([^/]++))?)?(*:759)'
                    .'|lfinder(?:/([^/]++)(?:/([^/]++))?)?(*:802)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        207 => [[['_route' => 'afficherContacts_index', '_controller' => 'App\\Controller\\ContactsController::afficherContacts'], ['id'], ['GET' => 0], null, false, true, null]],
        240 => [[['_route' => 'modifierContacts_index', '_controller' => 'App\\Controller\\ContactsController::modifierContacts'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        274 => [[['_route' => 'supprimerContacts_index', '_controller' => 'App\\Controller\\ContactsController::supprimerContacts'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        325 => [[['_route' => 'rechercheMedias_index', '_controller' => 'App\\Controller\\MediasController::rechercheMedias'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        356 => [[['_route' => 'afficherMedias_index', '_controller' => 'App\\Controller\\MediasController::afficherMedias'], ['id'], ['GET' => 0], null, false, true, null]],
        387 => [[['_route' => 'modifierMedias_index', '_controller' => 'App\\Controller\\MediasController::modifierMedias'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        419 => [[['_route' => 'supprimerMedias_index', '_controller' => 'App\\Controller\\MediasController::supprimerMedias'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        462 => [[['_route' => 'afficherMessage_index', '_controller' => 'App\\Controller\\MessagesController::afficherMessage'], ['id'], ['GET' => 0], null, false, true, null]],
        498 => [[['_route' => 'modifierMessage_index', '_controller' => 'App\\Controller\\MessagesController::modifierMessages'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        524 => [[['_route' => 'messagesLu_index', '_controller' => 'App\\Controller\\MessagesController::messageLu'], ['id'], null, null, false, true, null]],
        559 => [[['_route' => 'supprimerMessage_index', '_controller' => 'App\\Controller\\MessagesController::supprimerMessages'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        596 => [[['_route' => 'modifierUtilisateur_index', '_controller' => 'App\\Controller\\UtilisateursController::modifierUtilisateur'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        635 => [[['_route' => 'rechercheUtilisateur_index', '_controller' => 'App\\Controller\\UtilisateursController::rechercheUtilisateur'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        672 => [[['_route' => 'afficherUtilisateur_index', '_controller' => 'App\\Controller\\UtilisateursController::afficherUtilisateur'], ['id'], ['GET' => 0], null, false, true, null]],
        710 => [[['_route' => 'supprimerUtilisateur_index', '_controller' => 'App\\Controller\\UtilisateursController::supprimerUtilisateur'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        759 => [[['_route' => 'ef_connect', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::load', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        802 => [
            [['_route' => 'elfinder', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::show', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
