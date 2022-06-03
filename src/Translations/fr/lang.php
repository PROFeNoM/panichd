<?php

return [

    /*
  *  Constants
  */

    'nav-new-tickets'                  => 'Nouveau',
    'nav-new-tickets-title'            => 'Nouveau ticket',
    'nav-new-dd-list'                  => 'Liste',
    'nav-new-dd-list-title'            => 'Liste des nouveaux tickets',
    'nav-new-dd-create'                => 'Créer',
    'nav-create-ticket'                => 'Créer un ticket',
    'nav-create-ticket-title'          => 'Créer un ticket',
    'nav-notices-number-title'         => 'Il y  a :num avis',
    'nav-active-tickets-title'         => 'Tickets Ouverts',
    'nav-completed-tickets-title'      => 'Tickets Fermés',
    'nav-active-tickets'               => 'Tickets Ouverts',
    'nav-completed-tickets'            => 'Tickets Fermés',

    // Tables
    'table-id'                         => '#',
    'table-subject'                    => 'Sujet',
    'table-owner'                      => 'Propriétaire',
    'table-status'                     => 'Statut',
    'table-last-updated'               => 'Dernière mise à jour',
    'table-priority'                   => 'Priorité',
    'table-agent'                      => 'Agent',
    'table-category'                   => 'Catégorie',

    // Datatables
    'table-decimal'                    => '',
    'table-empty'                      => 'Aucune entrée disponible',
    'table-info'                       => 'Entrées de _START_ à _END_ sur un total de _TOTAL_ ',
    'table-info-empty'                 => 'Entrées de 0 à 0 sur un total de 0',
    'table-info-filtered'              => '(filtré sur un total de _MAX_ entrées)',
    'table-info-postfix'               => '',
    'table-thousands'                  => ',',
    'table-length-menu'                => 'Voir _MENU_ entrées',
    'table-loading-results'            => 'Chargement...',
    'table-processing'                 => 'Calcul en cours...',
    'table-search'                     => 'Recherche:',
    'table-zero-records'               => 'Aucune correspondance trouvée',
    'table-paginate-first'             => 'Premier',
    'table-paginate-last'              => 'Dernier',
    'table-paginate-next'              => 'Suivant',
    'table-paginate-prev'              => 'Précédent',
    'table-aria-sort-asc'              => ': activation du tri croissant',
    'table-aria-sort-desc'             => ': activation du tru décroissant',

    'btn-back'                         => 'Retour',
    'btn-cancel'                       => 'Annuler', // NEW
    'btn-close'                        => 'Fermer',
    'btn-delete'                       => 'Supprimer',
    'btn-edit'                         => 'Editer',
    'btn-mark-complete'                => 'Marquer fermée',
    'btn-submit'                       => 'Envoyer',

    'active-tickets-adjective'         => 'Ouvert',
    'agent'                            => 'Agent',
    'agents'                           => 'Agents',
    'category'                         => 'Categorie',
    'colon'                            => ': ',
    'comments'                         => 'Commentaires',
    'created'                          => 'Créé',
    'description'                      => 'Description',
    'flash-x'                          => '×', // &times;
    'last-update'                      => 'Dernière mise à jour',
    'no-replies'                       => 'Pas de réponse',
    'owner'                            => 'Propriétaire',
    'priority'                         => 'Priorité',
    'reopen-ticket'                    => 'Réouverture du Ticket',
    'reply'                            => 'Répondre',
    'responsible'                      => 'Responsable',
    'status'                           => 'Statut',
    'subject'                          => 'Sujet',

    // Regular expressions
    'regex-text-inline'                => '/^(?=.*[A-Za-z]+[\'\-¡!¿?\s,;.:]*)[a-zA-Z\'0-9¡!¿?,;.:\-\s]*$/',

    // Tables
    'table-department'                 => 'Département',
    'table-description'                => 'Description',
    'table-intervention'               => 'Intevention',
    'table-calendar'                   => 'Calendrier',
    'table-completed_at'               => 'Fermé à',
    'table-tags'                       => 'Tags',

    'no-tickets-yet'                   => 'Aucun ticket pour le moment', // Pending to move old admin.index-empty-records in other languages
    'list-no-tickets'                  => 'Il n\'y a pas de ticket dans cette liste',
    'updated-by-other'                 => 'Modifié par un autre membre',
    'mark-as-read'                     => 'Marquer ce ticket comme lu',
    'mark-as-unread'                   => 'Marquer et vérouiller ce ticket comme non lu',
    'read-validation-error'            => 'Le ticket n\'a pas pu être marqué comme lu \ non lu',
    'read-validation-ok-read'          => 'Ticket marqué comme lu',
    'read-validation-ok-unread'        => 'Ticket marqué comme non lu',

    'table-info-attachments-total'     => ':num pièces jointes',
    'table-info-comments-total'        => ':num commentaires',
    'table-info-comments-recent'       => ':num récentes',
    'table-info-notes-total'           => ':num notes internes',

    'calendar-active'                  => 'A commencé :description',
    'calendar-active-today'            => 'A commencé :description',
    'calendar-active-future'           => 'Commence :description',
    'calendar-expired'                 => 'Expire :description',
    'calendar-expired-today'           => 'A expiré aujourd\'hui à :time',
    'calendar-expiration'              => 'Expire :description',
    'calendar-expires-today'           => 'Expire aujourd\'hui à :hour',
    'calendar-scheduled'               => 'Programmé le :date de :time1 à :time2H',
    'calendar-scheduled-today'         => 'Programmé aujourd\'hui de :time1 à :time2H',
    'calendar-scheduled-period'        => 'Programmé du :date1 au :date2',

    // Agent related
    'table-change-agent'               => 'Changer l\'agent',
    'table-one-agent'                  => 'Il y a un agent dans cette catégorie',
    'table-agent-status-check'         => 'Changer le status à ":status"',

    // list AJAX changes
    'table-change-priority'            => 'Changer la priorité',
    'table-change-status'              => 'Changer le status',

    // Datatables
    'filter-removeall-title'           => 'Retirer tous les filtres',
    'filter-pov'                       => 'Voir en tant que',
    'filter-pov-member-title'          => 'Voir en tant que membre',
    'filter-pov-agent-title'           => 'Voir en tant qu\'agent',
    'filter-year-all'                  => 'Toute',
    'filter-calendar'                  => 'Calendrier',
    'filter-calendar-all'              => 'Tout',
    'filter-calendar-expired'          => 'Expiré',
    'filter-calendar-not-scheduled'    => 'Pas programmé',
    'filter-calendar-today'            => 'Expire aujourd\'hui',
    'filter-calendar-tomorrow'         => 'Expire demain',
    'filter-calendar-week'             => 'Ce week-end',
    'filter-calendar-month'            => 'Ce mois-ci',
    'filter-calendar-within-7-days'    => 'Dans 7 jours',
    'filter-calendar-within-14-days'   => 'Dans 14 jours',
    'filter-category'                  => 'Catégorie',
    'filter-category-all'              => 'Toutes',
    'filter-owner-all'                 => 'Tous',
    'filter-agent'                     => 'Agent',
    'filter-agent-all'                 => 'Tous',

    'btn-add'                          => 'Ajouter',
    'btn-change'                       => 'Changer',
    'btn-download'                     => 'Télécharger',

    // Vocabulary
    'all-depts'                        => 'Tous',
    'attached-images'                  => 'Images attachées',
    'attached-files'                   => 'Fichiers attachés',
    'attachments'                      => 'Pièces jointes',
    'closing-reason'                   => 'Raison de fermeture',
    'closing-clarifications'           => 'Clarifications',
    'complete'                         => 'Fermer',
    'complete-tickets-adjective'       => 'Fermé',
    'creation-date'                    => 'Créé le :date',
    'crop-image'                       => 'Rogner l\'image',
    'date-format'                      => 'A-m-j',
    'datetime-format'                  => 'A-m-j H:i',
    'datetimepicker-format'            => 'AAAA-MM-JJ HH:mm',
    'datetime-text'                    => ':date, :timeh',
    'deleted-member'                   => 'Membre supprimé',
    'department'                       => 'Département',
    'department-shortening'            => 'Dpt.',
    'dept-descendant'                  => 'Sous-département',
    'discard'                          => 'Annuler',
    'email'                            => 'E-mail',
    'email-resend-abbr'                => 'FW',
    'intervention'                     => 'Intervention',
    'limit-date'                       => 'Date limite',
    'list'                             => 'Liste',
    'mark-complete'                    => 'Marquer comme fermée',
    'member'                           => 'Membre',
    'name'                             => 'Nom',
    'newest-tickets-adjective'         => 'Nouveau',
    'no'                               => 'Non',
    'start-date'                       => 'Date de début',
    'tags'                             => 'Tags',
    'ticket'                           => 'Ticket',
    'tickets'                          => 'Tickets',
    'today'                            => 'Aujourd\'hui',
    'tomorrow'                         => 'Demain',
    'update'                           => 'Mettre à jour',
    'updated-date'                     => 'Modifié :date',
    'user'                             => 'Utilisateur',
    'year'                             => 'Année',
    'yes'                              => 'Oui',
    'yesterday'                        => 'Hier',

    // Days of week
    'day_1'                            => 'Lundi',
    'day_2'                            => 'Mardi',
    'day_3'                            => 'Mercredi',
    'day_4'                            => 'Jeudi',
    'day_5'                            => 'Vendredi',
    'day_6'                            => 'Samedi',
    'day_7'                            => 'Dimanche',
    'day_0'                            => 'Lundi',

    // Time units abbreviations
    'second-abbr'                      => 's.',
    'minute-abbr'                      => 'mi.',
    'hour-abbr'                        => 'h.',
    'day-abbr'                         => 'j.',
    'week-abbr'                        => 'sem.',
    'month-abbr'                       => 'mo.',

    /*
  *  Page specific
  */

    // ____
    'index-title'                      => 'Helpdesk Accueil',

    // tickets/____
    'index-my-tickets'                 => 'Mes Tickets',
    'btn-create-new-ticket'            => 'Créer un nouveau ticket',
    'index-complete-none'              => 'Aucun ticket fermé',
    'index-active-check'               => 'Merci de vérifier les tickets ouverts si vous ne trouvez pas votre ticket.',
    'index-active-none'                => 'Aucun ticket ouvert,',
    'index-create-new-ticket'          => 'Créer un nouveau ticket',
    'index-complete-check'             => 'Merci de vérifier les tickets fermés si vous ne trouvez pas votre ticket.',
    'ticket-notices-title'              => 'Avis',
    'ticket-notices-empty'              => 'Aucun avis',

    'create-new-ticket'                => 'Créer un nouveau ticket',
    'create-ticket-brief-issue'        => 'Résumé de votre demande',
    'create-ticket-describe-issue'     => 'Description de votre demande avec les détails',

    'show-ticket-title'                => 'Ticket',
    'show-ticket-js-delete'            => 'Confirmer la suppression: ',
    'show-ticket-modal-delete-title'   => 'Supprimer le ticket',
    'show-ticket-modal-delete-message' => 'Confirmer la suppression du ticket: :subject?',

    /*
  *  Controllers
  */

    // AdministratorsController
    'administrators-are-added-to-administrators'      => 'Les administrateurs :names ont été ajoutés comme administrateurs', //New
    'administrators-is-removed-from-team'             => 'Le(s) administrateurs :name ont été retirés de l\'équipe des administrateurs', // New

    // AgentsController
    'agents-are-added-to-agents'                      => 'Les agents :names ont été ajoutés comme agents',
    'agents-joined-categories-ok'                     => 'Catégorie jointe avec succès',
    'agents-is-removed-from-team'                     => 'Le(s) agent\\s :name ont été retirés de l\'équipe des agents',

    // CategoriesController
    'category-name-has-been-created'   => 'La catégorie :name a été créée !',
    'category-name-has-been-modified'  => 'La catégorie :name a été modifiée !',
    'category-name-has-been-deleted'   => 'La catégorie :name a été supprimée !',

    // PrioritiesController
    'priority-name-has-been-created'   => 'La priorité :name a été créée !',
    'priority-name-has-been-modified'  => 'La priorité :name a été modifiée !',
    'priority-name-has-been-deleted'   => 'La priorité :name a été supprimée !',
    'priority-all-tickets-here'        => 'Voici tous les tickets de cette priorité',

    // StatusesController
    'status-name-has-been-created'   => 'Le statut :name a été créé !',
    'status-name-has-been-modified'  => 'Le statut :name a été modifié !',
    'status-name-has-been-deleted'   => 'Le statut :name a été supprimé !',
    'status-all-tickets-here'        => 'Voici tous les tickets avec ce statut',

    // CommentsController
    'comment-has-been-added-ok'        => 'Votre commentaire a bien été rajouté',
    'comment-has-been-updated'         => 'Votre commentaire a bien été mis à jour',
    'comment-has-been-deleted'         => 'Votre commentaire a bien été supprimé',

    // NotificationsController
    'notify-new-comment-from'          => 'Nouveau commentaire de la part de ',
    'notify-on'                        => ' à propos du ticket ',
    'notify-status-to-complete'        => ' statut mis à fermé',
    'notify-status-to'                 => ' statut mis à ',
    'notify-transferred'               => ' transféré ',
    'notify-to-you'                    => ' à vous',
    'notify-created-ticket'            => ' ticket créé ',
    'notify-updated'                   => ' mis à jour ',

    // TicketsController
    'the-ticket-has-been-created'      => 'Le ticket a été créé ! <a href=":link" title=":title"><u>:name</u></a>',
    'the-ticket-has-been-modified'     => 'Le ticket a été modifié !',
    'the-ticket-has-been-deleted'      => 'Le ticket :name a été supprimé !',
    'the-ticket-has-been-completed'    => 'Le ticket :name a été fermé ! <a href=":link" title=":title"><u>:name</u></a>',
    'the-ticket-has-been-reopened'     => 'Le ticket :name a été réouvert ! <a href=":link" title=":title"><u>:name</u></a>',
    'ticket-status-link-title'         => 'Voir le ticket',
    'you-are-not-permitted-to-do-this' => 'vous n\'êtes pas autorisé à faire cette action !',

    // AuthController
    'auth.failed'                      => 'Echec de l\'authentification !',

    /*
 *  Middlewares
 */

    //  IsAdminMiddleware IsAgentMiddleware UserAccessMiddleware
    'you-are-not-permitted-to-access'     => 'Vous n\'avez pas de le droit d\'accéder à cette page !',

    // EnvironmentReadyMiddleware
    'environment-not-ready'                => 'L\'administrateur n\'a pas fini de configurer l\'environnement !',

    // Newest tickets page reload Modal
    'reload-countdown'                 => 'La table des tickets va recharger dans <kbd class=":num_class"><span id="counter">:num</span></kbd> secondes.',
    'reload-reloading'                 => 'La table des tickets recharge... Merci de patienter.',

    // Ticket forms messages
    'update-agent-same'                => 'L\'agent n\'a pas été modifié ! Ticket <a href=":link" title=":title"><u>:name</u></a>',
    'update-agent-ok'                  => 'Agent changé à ":new_agent" pour le ticket <a href=":link" title=":title"><u>:name</u></a>',
    'update-priority-same'             => 'La priorité n\'a pas été modifiée ! Ticket <a href=":link" title=":title"><u>:name</u></a>',
    'update-priority-ok'               => 'La prorité a été changé à ":new" pour le ticket <a href=":link" title=":title"><u>:name</u></a>',
    'update-status-same'               => 'Le status n\'a pas été modifiée ! Ticket <a href=":link" title=":title"><u>:name</u></a>',
    'update-status-ok'                 => 'Status modifié à ":new" pour le ticket <a href=":link" title=":title"><u>:name</u></a>',

    // tickets/create
    'create-ticket-notices'            => 'Avis',
    'ticket-owner-deleted-warning'     => 'L\'utilisateur est supprimé et n\'apparaitra pas dans la liste d\'édition des propriétaires',
    'ticket-owner-no-email'            => '(Aucun e-mail)',
    'ticket-owner-no-email-warning'    => 'L\'utilisateur n\'a pas d\'e-mail et ne recevra pas de notification.',
    'create-ticket-owner-help'         => 'Vous pouvez choisir de qui est le ticket ou qui est-ce qu\'il affecte',
    'create-ticket-visible'            => 'Visible',
    'create-ticket-visible-help'       => 'Choix de la visibilité du ticket pour le propriétaire assigné',
    'create-ticket-change-list'        => 'Changement de la liste',
    'create-ticket-info-start-date'    => 'Défaut: Maintenant',
    'create-ticket-info-limit-date'    => 'Défaut: Aucune limite',
    'create-ticket-intervention-help'  => 'Actions prises pour la résolution du ticket',
    'create-ticket-switch-to-note'     => 'Changer à note interne',
    'create-ticket-switch-to-comment'  => 'Changer à répondre à l\'utilisateur',

    'attach-files'                     => 'Attacher des fichiers',
    'pending-attachment'               => 'Ce fichier sera joint après mise-à-jour du ticket',
    'attachment-new-name'              => 'Nouveau nom',

    'edit-ticket'                      => 'Editer le ticket',
    'attachment-edit'                  => 'Editer la pièce jointe',
    'attachment-edit-original-filename'=> 'Nom de fichier initial',
    'attachment-edit-new-filename'     => 'Nouveau nom de fichier',
    'attachment-edit-crop-info'        => 'Sélectionner une zone de l\'image pour la réduire. Le traitement sera effectué après que les champs attachés sont enregistrés.',

    'attachment-update-not-valid-name' => 'Le nouveau nom de fichier pour ":file" doit être d\'au moins 3 caractères. HTML n\'est pas autorisé.',
    'attachment-error-equal-name'      => 'Le nom et la description pour le fichier ":file" ne peuvent pas être identiques',
    'attachment-update-not-valid-mime' => 'Le ficheir ":file" n\'est pas un fichier de type valide',
    'attachment-update-crop-error'     => 'L\'image n\'a pas pu être réduite',

    'show-ticket-creator'              => 'Créé par',
    'show-ticket-modal-edit-fields'    => 'Editer plus de champs',

    'show-ticket-modal-complete-blank-intervention-check' => 'Laisser vide si aucune intervention',
    'show-ticket-complete-blank-intervention-alert'       => 'Pourterminer le ticket, vous devez confirmer que vous laissez l\'intervention vide',
    'show-ticket-modal-complete-blank-reason-alert'       => 'Pour fermer le ticket, vous devez indiquer une raison.',
    'show-ticket-complete-bad-status'                     => 'Le ticket n\'a pas été fermé: Le statut indiqué n\'est pas valide',
    'show-ticket-complete-bad-reason-id'                  => 'Le ticket n\'a pas été fermé: La raison indiquée n\'est pas valide',

    'complete-by-user'                 => 'Ticket fermé par :user.',
    'reopened-by-user'                 => 'Ticket réouvert par :user.',

    'ticket-error-not-valid-file'                => 'Un fichier invalide a été attaché',
    'ticket-error-not-valid-object'              => 'Le fichier :name n\' pas pu être trouvé',
    'ticket-error-max-size-reached'              => 'Le fichier ":name" et ce quit suit ne peuvent pas être attachés car ils dépassent la taille maximale autorisée, qui est de :available_MB MB',
    'ticket-error-max-attachments-count-reached' => 'Le fichier ":name" et ce qui suit ne peuvent pas être attachés car ils dépassent le nombre maximum de fichiers attachés à ce ticket, qui est de :max_count',
    'ticket-error-delete-files'                  => 'Certains fichiers n\'ont pas pu être supprimés',
    'ticket-error-file-not-found'                => 'Le fichier ":name" n\'a pas été trouvé',
    'ticket-error-file-not-deleted'              => 'Le fichier ":name" n\'a pas pu être supprimé',

    // Tiquet visible / no visible
    'ticket-visible'                => 'Ticket visible',
    'ticket-hidden'                 => 'Ticket caché',
    'ticket-hidden-button-title'    => 'Changer la visibilité utilisateur',
    'ticket-visibility-changed'     => 'La visibilité du ticket a été changée',
    'ticket-hidden-0-comment-title' => 'Changé à visible par <b>:agent</b>',
    'ticket-hidden-0-comment'       => 'Le ticket est maintenant visible <b>visible</b> pour le propriétaire',
    'ticket-hidden-1-comment-title' => 'Caché par <b>:agent</b>',
    'ticket-hidden-1-comment'       => 'Le ticket est maintenant caché <b>hidden</b> pour le propriétaire',

    // Comments
    'comment'                    => 'Commenter',
    'note'                       => 'Note interne',
    'comment-reply-title'        => 'Message visible pour les utilisateurs',
    'comment-reply-from-owner'   => 'Réponse de <b>:owner</b>',
    'reply-from-owner-to'        => 'Réponse de <b>:owner</b> à <b>:recipients</b>',

    'comment-note-title'         => 'Note utilisateur cachée',
    'comment-note-from-agent'    => 'Note de <b>:agent</b>',
    'comment-note-from-agent-to' => 'Note de <b>:agent</b> à <b>:recipients</b>',

    'comment-completetx-title'   => 'Ticket fermé',
    'comment-complete-by'        => 'Ticket fermé par <b>:owner</b>',

    'comment-reopen-title'       => 'Ticket réouvert',
    'comment-reopen-by'          => 'Réouverture par <b>:owner</b>',

    'show-ticket-add-comment'                => 'Ajouter un commentaire',
    'show-ticket-add-note'                   => 'AJouter une note interne',
    'show-ticket-add-comment-type'           => 'Type',
    'show-ticket-add-comment-note'           => 'Note interne',
    'show-ticket-add-comment-reply'          => 'Répondre à l\'utilisateur',
    'show-ticket-add-comment-notificate'     => 'Notifier',
    'show-ticket-add-com-check-email-text'   => 'Ajouter un commentaire dans la notification utilisateur',
    'show-ticket-add-com-check-intervention' => 'Ajouter ce texte dans le champ intervention (visible par l\'utilisateur)',
    'show-ticket-add-com-check-resolve'      => 'Fermer le ticket et appliquer le statut',
    'add-comment-confirm-blank-intervention' => 'Le champ "intervention" est vide. Souhaitez-vous fermer le ticket ?',

    'edit-internal-note-title'         => 'Editer la note interne',
    'show-ticket-edit-com-check-int'   => 'Ajouter du texte au champ intervention',
    'show-ticket-delete-comment'       => 'Supprimer le commentaire',
    'show-ticket-delete-comment-msg'   => 'Etes-vous sure de vouloir supprimer le commentaire ?',
    'show-ticket-email-resend'         => 'Renvoyer l\'email',
    'show-ticket-email-resend-agent'   => '(Agent du ticket)',
    'show-ticket-email-resend-owner'   => '(Propriétaire du ticket)',
    'notification-resend-confirmation' => 'Les notifications ont été renvoyées !',
    'notification-resend-no-recipients'=> 'Aucun destinataire n\'a été sélectionné !',

    // Validations
    'validation-error'                 => 'La requête n\'a pas pu être traitée !',
    'validate-ticket-subject.required' => 'Un sujet est requis. Merci de renseigner en quelques mots la demande.',
    'validate-ticket-subject.min'      => 'Le sujet doit être plus long.',
    'validate-ticket-content.required' => 'Une description est requise. Si vous attaché une image, vous devez quand même ajouter une description textuelle.',
    'validate-ticket-content.min'      => 'La description doit être plus longue.',
    'validate-ticket-start_date-format'=> 'Le format de la date de début n\'est pas valide. Le format correct est: ":format"',
    'validate-ticket-start_date'       => 'L\'année de début n\'est pas valide',
    'validate-ticket-limit_date-format'=> 'Le format de la date de fin n\'est pas valide. Le format correct est: ":format"',
    'validate-ticket-limit_date'       => 'L\'année de fin n\'est pas valide',
    'validate-ticket-limit_date-lower' => 'La date de fin ne peut pas être antérieure à la date de début',

    'ticket-destroy-error'             => 'Le ticket n\'a pas pu être supprimé :error',
    'comment-destroy-error'            => 'Le commentaire n\'a pas pu être supprimé: :error',

    // Comment form
    'validate-comment-required'        => 'Vous devez entrer un commentaire',
    'validate-comment-min'             => 'Vous devez entrer un commentaire plus long',

    // Ticket search form
    'searchform-nav-text'             => 'Chercher',
    'searchform-title'                => 'Chercher un ticket',

    'searchform-creator'              => 'Créateur',
    'searchform-department'           => 'Département',
    'searchform-comments'             => 'Commentaire',
    'searchform-attachment_text'      => 'Texte attaché',
    'searchform-any_text_field'       => 'Texte',
    'searchform-created_at'           => 'Date de création',
    'searchform-completed_at'         => 'Date de complétion',
    'searchform-updated_at'           => 'Dernière mise-à-jour',
    'searchform-read_by_agent'        => 'Vu par l\'agent assigné',

    'searchform-help-creator'         => 'Personne ayant créé le ticket (Parfois un agent au nom d\'un membre)',
    'searchform-help-owner'           => 'Membre propriétaire du ticket',
    'searchform-help-department'      => 'Département propriétaire',
    'searchform-help-any_text_field'  => 'Chercher dans le texte: Sujet, Description, Intervention, Commentaire ou Pièce-jointe',

    'searchform-creator-none'         => '- vide -',
    'searchform-owner-none'           => '- vide -',
    'searchform-department-none'      => '- vide -',
    'searchform-list-none'            => '- vide -',

    'searchform-status-none'          => '- vide -',
    'searchform-status-rule-any'      => 'Un parmis les sélectionnés',
    'searchform-status-rule-none'     => 'Aucun des sélectionnés',

    'searchform-priority-none'        => '- vide -',
    'searchform-priority-rule-any'    => 'Un parmis les sélectionnés',
    'searchform-priority-rule-none'   => 'Aucun des sélectionnés',

    'searchform-category-none'        => '- vide -',
    'searchform-agent-none'           => '- vide -',

    'searchform-tags-rule-no-filter'   => 'Ne pas filter',
    'searchform-tags-rule-has_not_tags'=> 'Sans tags',
    'searchform-tags-rule-has_any_tag' => 'Avec n\'importe quel tag',
    'searchform-tags-rule-any'         => 'Un parmis les sélectionnés',
    'searchform-tags-rule-all'         => 'Tout les sélectionnés',
    'searchform-tags-rule-none'        => 'Aucun des sélectionnés',

    'searchform-date-type-from'       => 'Depuis spécifié',
    'searchform-date-type-until'      => 'Jusqu\'à spécifié',
    'searchform-date-type-exact_year' => 'Année exacte',
    'searchform-date-type-exact_month'=> 'Année, Mois',
    'searchform-date-type-exact_day'  => 'Jour exacte',

    'searchform-read_by_agent-none'   => 'Ne pas filtrer',
    'searchform-read_by_agent-yes'    => 'Oui',
    'searchform-read_by_agent-no'     => 'Non',

    'searchform-btn-submit'           => 'Chercher',

    'searchform-validation-no-field'  => 'Aucun champ n\' été introduit',
    'searchform-validation-success'   => ':num champs de recherche enregistrés',

    'searchform-results-title'        => 'Résultats de la recherche',
    'searchform-btn-edit'             => 'Editer la rechercher',
    'searchform-btn-web'              => 'Chercher adresse web',
    'searchform-help-btn-web'         => 'Ceci est un lien permanent vers cette recherche',

];
