<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Phrases
    |--------------------------------------------------------------------------
    |
    | Usage examples:
    | - Flash messages
    | - Help text
    | - Success / warning / error messages
    |
    | Text should:
    | - Use sentence case
    | - Only contain one sentence
    | - Not be terminated with a full stop (.)
    */

    // User interface
    'toggle-navigation' => 'Navigation umschalten',
    'is-copyright' => 'ist ©',
    'and-licensed-under' => 'und lizensiert unter',
    'powered-by-steam' => 'Powered by Steam',

    // Account Authentication
    'profile-update-required' => 'Bitte aktualisiere dein Profil um fortzufahren',
    'please-sign-in' => 'Bitte melde dich über Steam an',
    'no-steam-account' => 'Kein Steam Account? Kein Problem!',
    'create-steam-account' => 'Erstelle einen gratis Steam Account',
    'provider-not-supported' => 'Nicht unterstützter Authentifizierung Anbieter ":provider"',
    'user-successfully-logged-in' => 'Benutzer :username erfolgreich angemeldet',
    'user-successfully-logged-out' => 'Benutzer :username erfolgreich abgemeldet',

    // Roles
    'user-already-has-role' => ':user ist bereits der Rolle :role zugeordnet',
    'role-successfully-assigned' => 'Du hast den Benutzer :user der Rolle :role zugeordnet',
    'role-successfully-unassigned' => ':user ist nicht mehr der Rolle :role zugewiesen',
    'cannot-assign-role-to-self' => 'Du kannst dir selbst keine Rollen zuweisen',
    'cannot-unassign-role-from-self' => 'Du kannst dir selbst keine Rollen wegnehmen',
    'cannot-assign-role-to-super-admin' => 'Super Admins können Rollen nicht wechseln',
    'assigned' => 'zugewiesen',

    // Achievements
    'achievement-successfully-awarded' => 'Du hast :user die Errungenschaft ":achievement" verliehen',
    'achievement-successfully-revoked' => 'Du hast die Errungenschaft ":achievement" von :user entzogen',

    // General purpose
    'no-items-found' => 'Kein :item gefunden',
    'the-following-errors-were-encountered' => 'LANager hat die folgenden Fehler gefunden:',
    'item-unpublished' => 'Dieses :item ist nicht veröffentlicht und nur sichtbar für Administratoren',
    'oh-no' => 'Oh nein!',
    'item-name-deleted' => ':Item ":name" gelöscht',
    'are-you-sure-delete' => 'Bist du sicher, dass du dies löschen möchtest?',
    'item-created-successfully' => ':Item erfolgreich erstellt',
    'item-not-found' => ':item nicht gfeunden!',
    'item-already-exists' => ':item existiert bereits!',

    /**
     * Resources
     */
    // Logs
    'minimum-level' => 'Minimum level',
    'mark-as-read' => 'Als gelesen markieren',
    'log-entries-marked-as-read' => 'Protokoll Einträge erfolgreich als gelesen markiert',
    'paste-below-into-github-issue' => 'Den Inhalt von unten bitte in ein GitHub Issue kopieren',

    // Users
    'your-steam-game-details-are-private' => 'Deine Steamdetails sind aktuell privat',
    'please-consider-public-visibility' => 'Das bedeutet, dass Spiele die du spielst nicht in LANager sichtbar sind. Bitte überlege dir, ob du deine Spieledetails nicht öffentlich machen willst, eventuell auch nur für dieses Event. Danke!',
    'edit-steam-profile' => 'Steamprofil bearbeiten',
    'avatar-for-username' => 'Avatar für :username',
    'hours-played-total' => 'Stunden gesamt',
    'hours-played-two-weeks' => 'Stunden in den letzen 2 Wochen',
    'sign-in-to-see-the-games-you-have-in-common-with-username' => 'Anmelden um zu sehen wie viele Spiele du mit :username gemeinsam hast',
    'you-have-no-games-in-common-with-username' => 'Du hast keine Spiele mit :username gemeinsam',
    'username-does-not-own-any-games' => ':username besitzt keine Spiele',
    'usernames-game-details-are-private' => ':username\s Spieledetails sind privat, also kann man keine Spiele sehen die er besitzt oder ihr gemeinsam habt',
    'viewing-user-from-another-lan' => 'Dieser Benutzer nimmt an der aktuellen LAN nicht teil',
    'username-has-not-played-any-games-this-lan' => ':username hat diese LAN noch keine Spiele gespielt',
    'played-for-x' => 'Gespielt für :x',
    'in-game-for-the-past-x' => 'Im Spiel seit :x',

    // Steam Statuses
    'status-in-game' => 'Im Spiel',
    'status-in-game-x' => 'Im Spiel: :x',
    'status-unknown' => 'Status unbekannt',

    // Games
    'x-in-game' => ':x Im Spiel',
    'x-played-recently' => ':x vor kurzem gespielt',
    'x-owners' => ':x Besitzer',
    'view-game-in-steam-store' => ':game im Steam Store ansehen',
    'logo-for-game' => 'Logo für :game',

    // Guides
    'markdown-formatting-help-link' => 'Hilfe für Markdownformatierung',
    'markdown-formatting-help-link-url' => 'https://de.wikipedia.org/wiki/Markdown#Auszeichnungsbeispiele',
    'markdown-help' => 'Tipp: Benutze relative Links, e.g. [Installationsanleitung](/anleitungen/3), um einfach zu anderen Seiten zu verweisen',
    'viewing-guide-from-past-lan' => 'Diese Anleitung ist von einer LAN die bereits vorbei ist. Diese Information könnte also irrelevant und/oder falsch sein',

    // Navigation Links
    'navigation-links-can-only-be-nested-one-level-deep' => 'Du kannst Navigationslinks nur eine Ebene tief verschachteln',
    'a-navigation-link-cannot-be-its-own-parent' => 'Ein Navigationslink kann nicht sein eigenes Elternteil sein',

    // LANs
    'lans-cannot-overlap' => 'LANs können nicht überlappen',

    // Events
    'you-must-create-a-lan-before-creating-events' => 'Du musst eine LAN erstellen bevor du Events erstellen kannst',
    'event-times-must-be-within-lan-times' => 'Events müssen während der LAN Zeiten starten und enden',
    'event-is-not-open-for-signups' => 'Dieses Event ist nicht offen für Anmeldungen',
    'you-can-only-sign-yourself-up-to-event' => 'Du kannst dich nur selbst für ein Event anmelden',
    'timespan-to' => 'bis',
    'upcoming' => 'Bevorstehend',
    'happening-now' => 'Aktuell',
    'ended' => 'Beendet',
    'starting' => 'Beginnend',
    'ending' => 'Endend',
    'ended' => 'Beendet',
    'unknown' => 'Unbekannt',
    'signups' => 'Anmeldungen',
    'not-yet-open' => 'Noch nicht geöffnet',
    'open' => 'Offen',
    'closed' => 'Geschlossen',
    'opening' => 'Öffnung',
    'closing' => 'Schließung',
    'closed' => 'Geschlossen',

    // Images
    'select-files' => 'Dateien auswählen',
    'images-successfully-uploaded' => 'Bild(er) erfolgreich hochgeladen',
    'image-filename-successfully-deleted' => 'Bild :filename erfolgreich gelöscht',
    'submitted-file-was-invalid-image' => 'Abgeschicktes Datei ist ein ungültiges Bild',
    'submitted-file-exceeded-max-file-size-of-x' => 'Abgeschickte Datei überschreitet die maximale Dateigröße von :x',
    'image-already-exists' => 'Ein Bild mit dem gleichen Namen existiert bereits',

    /**
     * Commands & Services
     */
    // General purpose
    'suppress-confirmations' => 'Kommandos ausführen ohne Bestätigung anzufordern',

    // UpdateSteamUserService
    // UpdateSteamUserAppsService
    'one-or-more-steam-ids-must-be-provided' => 'Du musst eine oder mehrere steamID64s angeben',
    'one-or-more-users-must-be-provided' => 'Du musst einen oder mehrere LANager Benutzer angeben',
    'unable-to-update-data-for-user-x' => 'Kann Daten für Benutzer :x nicht aktualisieren - :error',

    // lanager:update-steam-apps
    'update-database-with-apps-from-steam' => 'Aktualisiere die Datenbank mit der neusten Programmliste von Steam',
    'requesting-details-of-all-apps-from-steam' => 'Alle Programmdetails werden von Steam abgefragt',
    'adding-x-steam-apps-to-db' => ':x Programme wurden zur Datenbank hinzugefügt',
    'updating-x-steam-apps-already-in-db-and-adding-y-new' => ':x exisitierende Programme werden aktualisiert und :y neue hinzugefügt',
    'steam-app-update-complete-x-added' => 'Steam Programm Aktualisierung abgeschlossen - :x Programme hinzugefügt',
    'steam-app-update-complete-x-updates-y-new' => 'Steam Programm Aktualisierung abgeschlossen - :x Aktualisierungen, davon waren :y neue Programme',

    // lanager:import-steam-users
    'steamids-to-import-list-or-file' => 'One or more SteamId64(s) for the user(s) to import, or a file containing a list of IDs',
    'import-users-from-steam-into-lanager' => 'Import users from Steam into LANager',
    'no-steam-users-to-import' => 'No Steam users to import',
    'importing-x-users-from-steam' => 'Importing :x users from Steam',
    'successfully-updated-x-of-y-users' => 'Successfully updated :x of :y users',

    // lanager:update-steam-users
    'update-existing-users-profiles-from-steam' => 'Update existing LANager users\' profiles with the latest information from their Steam profile',
    'update-all-users' => 'Update all users, not just those at the current LAN',
    'no-steam-users-to-update' => 'No Steam users to update',
    'updating-profiles-and-online-status-for-x-users-from-steam' => 'Updating profiles and online status for :x users from Steam',
    'successfully-updated-profiles-and-online-status-for-x-of-y-users' => 'Successfully updated profiles and online status for :x of :y users',

    // lanager:update-steam-user-apps
    'update-existing-user-app-ownership' => 'Update existing LANager users\' app ownership data with the latest information from their Steam profile',
    'requesting-app-ownership-data-for-x-users-from-steam' => 'Updating app ownership data for :x users from Steam',
    'successfully-updated-app-ownership-data-for-x-of-y-users' => 'Successfully updated app ownership data for :x of :y users',

    // lanager:prune-steam-user-history
    'delete-steam-user-history-outside-lans' => 'Delete historical Steam user status and gameplay data that did not occur during any of the LANs in the database',
    'pruning-historical-steam-data' => 'Deleting historical Steam user status and gameplay data that did not occur during any of the LANs in the database',
    'x-entries-deleted-and-y-entries-retained' => 'Deleted :x and retained :y historical entries of Steam user status and gameplay',

    // lanager:backup
    'output-dir' => 'Speicherort der Sicherungsdatei',
    'backup-lanager-to-file' => 'Sichert LANager Daten in einer Datei',
    'output-directory-not-writable' => 'Das angegebene Ausgabeverzeichnis ist nicht schreibbar',
    'output-directory-not-empty' => 'Das angegebene Ausgabeverzeichnis ist nicht leer',
    'backup-created-successfully' => 'Sicherung erfolgreich erstellt',
    'process-exit-code-x' => 'Prozess Exitcode: :x',

    // lanager:restore-backup
    'restore-lanager-backup-from-file' => 'LANager Sicherung von einer Datei wiederherstellen',
    'backup-file' => 'Pfad der Sicherungsdatei',
    'backup-file-not-found' => 'Die angegebene Sicherungsdatei konnte nicht gefunden werden',
    'this-will-delete-all-lanager-data' => 'Dieser Vorgang löscht alle LANager Daten!',
    'are-you-sure' => 'Bist du sicher, dass du fortfahren möchtest?',
    'deleting-all-lanager-data' => 'Lösche alle LANager Daten',
    'backup-restored-successfully' => 'Sicherung erfolgreich wiederhergestellt',

    // lanager:upgrade-database
    'upgrade-database' => 'Aktualisiere die LANager Datenbank von v0.5.x, behalte existierende Daten',
    'manually-backup-before-continuing' => 'Sichere deine LANager Datenbank manuell vor dem Fortfahren',
    'database-structure-already-up-to-date' => 'Datenbankstruktur ist bereits auf dem neusten Stand',
    'database-structure-does-not-match-table-x-missing' => 'Datenbankstruktur passt nicht zu v0.5.x - Tabelle :x fehlt',
    'deleting-x' => 'Lösche :x',
    'upgrading-x' => 'Aktualisiere :x',
    'fixing-timestamp-columns' => 'Repariere Zeitstempel Spalten',
    'creating-new-tables' => 'Erstelle neue Tabellen',
    'spoofing-initial-migration' => 'Fälsche initiale Migration',
    'confirm-get-app-ownership-data' => 'Möchtest du die Programmrechte-Daten von jedem Benutzer? (~1 Minute pro 50 Benutzer)',
    'successfully-upgraded-database' => 'Datenbank wurde erfolgreich von v0.5.x auf v1.0.x aktualisiert',

    // make:feature
    'create-files-for-feature' => 'Erstelle erfolderliche Dateien für ein neues Feature',
    'name-of-feature' => 'Der Name des Features, in Einzahl, PascalCase',

    // Slides
    'slides-content-placeholder' => 'Markdownformatierter Text, ein einzelnes Bild, oder eine URL zum einbetten',
    'slides-content-help' => 'Inhalt wird horizontal zentriert, vergrößert, und skaliert um in den Bildschirm zu passen'
];

