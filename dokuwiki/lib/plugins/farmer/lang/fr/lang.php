<?php

/**
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 *
 * @author Schplurtz le Déboulonné <Schplurtz@laposte.net>
 * @author Schplurtz le Déboulonné <Schlurtz@laposte.net>
 * @author ubibene <services.m@benard.info>
 */
$lang['menu']                  = 'Élevage';
$lang['tab_setup']             = 'Configuration de la ferme';
$lang['tab_info']              = 'Info';
$lang['tab_config']            = 'Configuration';
$lang['tab_plugins']           = 'Gestion des greffons';
$lang['tab_new']               = 'Ajouter un animal';
$lang['tab_delete']            = 'Supprimer un animal';
$lang['preloadPHPForm']        = 'Initialiser la ferme';
$lang['farm dir']              = 'Dossier des animaux';
$lang['htaccess setup']        = 'Ajouter le code d\'élevage au .htaccess ?';
$lang['submit']                = 'Envoyer';
$lang['farmdir_missing']       = 'Veuillez entrer un dossier où stocker les animaux.';
$lang['farmdir_in_dokuwiki']   = 'le dossier des animaux (%s) doit se trouver hors de la ferme DokuWiki';
$lang['farmdir_uncreatable']   = 'Impossible de créer le dossier (%s). Les permissions sont-elles correctes ?';
$lang['farmdir_unwritable']    = 'Veuillez vous assurer que le serveur web dispose d\'un accès en écriture au dossier des animaux (%s)';
$lang['farmdir_notEmpty']      = 'Le dossier des animaux (%s) doit être vide';
$lang['preload creation success'] = 'Configuration de la ferme réalisée.';
$lang['preload creation error'] = 'Il y a eu une erreur lors de l\'initialisation de l\'élevage';
$lang['overwrite_preload']     = 'Attention, votre fichier existant inc/preload.php va être écrasé si vous continuez';
$lang['animal']                = 'Nom d\'animal / Domaine';
$lang['thisis']                = 'L\'instance est';
$lang['thisis.farmer']         = 'Le fermier!';
$lang['thisis.animal']         = 'Un animal!';
$lang['baseinstall']           = 'Installation de la ferme';
$lang['animals']               = 'Animaux';
$lang['confdir']               = 'Dossier de configuration de l\'instance';
$lang['savedir']               = 'Dossier des données de l\'instance';
$lang['plugins']               = 'Greffons actifs dans cette instance';
$lang['base']                  = 'Configuration de base';
$lang['farm host']             = 'Nom d\'hôte du fermier';
$lang['base domain']           = 'Domaine de base pour les animaux par sous-domaine';
$lang['conf_inherit']          = 'Réglage dont les animaux vont hériter';
$lang['conf_inherit_main']     = 'Options de configuraton';
$lang['conf_inherit_acronyms'] = 'Définitions des acronymes';
$lang['conf_inherit_entities'] = 'Définitions des entités';
$lang['conf_inherit_interwiki'] = 'Liens interwiki';
$lang['conf_inherit_license']  = 'Licence du contenu';
$lang['conf_inherit_mime']     = 'Types MIME';
$lang['conf_inherit_scheme']   = 'Schémas d\'URL';
$lang['conf_inherit_smileys']  = 'Frimousses';
$lang['conf_inherit_wordblock'] = 'Liste noir des spammeurs';
$lang['conf_inherit_userstyle'] = 'Styles utilisateur';
$lang['conf_inherit_userscript'] = 'Scripts utilisateur';
$lang['conf_inherit_users']    = 'utilisateurs (Auth texte seulement)';
$lang['conf_inherit_plugins']  = 'État des greffons';
$lang['conf_inherit_yes']      = 'hérité du fermier';
$lang['conf_inherit_no']       = 'indépendant du fermier';
$lang['conf_notfound']         = 'Comportement lors d\'un accès à un animal inexistant';
$lang['conf_notfound_farmer']  = 'Montrer le wiki fermier';
$lang['conf_notfound_404']     = 'Montrer une page 404';
$lang['conf_notfound_list']    = 'Montrer la liste des animaux disponibles';
$lang['conf_notfound_redirect'] = 'Rediriger vers l\'URL ci-dessous';
$lang['conf_notfound_url']     = 'URL de redirection si sélectionné ci-dessus';
$lang['save']                  = 'Enregistrer';
$lang['animal template']       = 'Copier un animal existant';
$lang['animal creation success'] = 'L\'animal "%s" a été créé avec succès';
$lang['animal creation error'] = 'Il y a eu une erreur lors de la création de l\'animal.';
$lang['animal configuration']  = 'Configuration de base de l\'animal';
$lang['inherit user registration'] = 'Hériter le réglage d\'enregistrement des utilisateurs.';
$lang['enable user registration'] = 'Autoriser les utilisateurs à s\'enregistrer';
$lang['disable user registration'] = 'Désactiver l\'enregistrement des utilisateurs';
$lang['animal administrator']  = 'Administrateur d\'animal';
$lang['noUsers']               = 'Ne pas créer d\'utilisateur';
$lang['importUsers']           = 'Exporter les utilisateurs du fermier vers l\'animal';
$lang['currentAdmin']          = 'Définir l\'utilisateur courant comme admin';
$lang['newAdmin']              = 'Créer un nouvel administrateur "admin"';
$lang['admin password']        = 'Mot de passe du nouvel admin';
$lang['animalname_missing']    = 'Veuillez saisir le nom du nouvel animal';
$lang['animalname_invalid']    = 'Le nom de l\'animal ne doit contenir que des caractères alphanumériqes et les points et tirets (mais pas en premier ou en dernier.)';
$lang['animalname_preexisting'] = 'Un animal avec ce nom existe déjà.';
$lang['adminPassword_empty']   = 'Le mot de passe du nouvel administrateur ne peux pas être vide';
$lang['animal template copy error'] = 'Il y a eu un problème en copiant %s de l\'animal existant vers le nouveau.';
$lang['aclpolicy missing/bad'] = 'Veuillez choisir une politique d\'ACL initiale.';
$lang['bulkSingleSwitcher']    = 'Modifier un seul animal ou tout le troupeau ?';
$lang['bulkEdit']              = 'Modifier tout le troupeau';
$lang['singleEdit']            = 'Modifier un seul animal';
$lang['bulkEditForm']          = 'Activer ou désactiver un greffon sur tout le troupeau.';
$lang['matrixEdit']            = 'Modifier la matrice Animal/Plugin';
$lang['default']               = 'Hériter du fermier';
$lang['activate']              = 'Activer';
$lang['deactivate']            = 'Désactiver';
$lang['singleEditForm']        = 'Éditer les greffons d\'un animal particulier';
$lang['plugindone']            = 'État du greffon mis à jour';
$lang['plugin']                = 'Greffon';
$lang['plugin_on']             = 'marche';
$lang['plugin_off']            = 'arrêt';
$lang['plugin_default']        = 'Herité';
$lang['plugin_enabled']        = 'Activé';
$lang['plugin_disabled']       = 'Désactivé';
$lang['js']['animalSelect']    = 'Sélectionnez un animal';
$lang['js']['pluginSelect']    = 'Sélectionnez un greffon';
$lang['disable_new_plugins']   = 'Le greffon est par défaut désactivé. Vous pouvez l\'activer ici ou pour certains animaux spécifiques seulement.';
$lang['delete_animal']         = 'Sélectionnez l\'animal à détruire';
$lang['delete_confirm']        = 'Veuillez taper le nom de l\'animal pour confirmer';
$lang['delete']                = 'Détruire l\'animal et toutes ses données';
$lang['delete_noanimal']       = 'Veuillez sélectionner l\'animal à détruire';
$lang['delete_mismatch']       = 'La confirmation ne correspond pas à l\'animal. Destruction annulée';
$lang['delete_invalid']        = 'Nom d\'animal invalide. Destruction annulée';
$lang['delete_success']        = 'Animal supprimé avec succès.';
$lang['delete_fail']           = 'Quelques fichiers n\'ont pu être supprimés. Vous devriez faire le ménage à la main';
