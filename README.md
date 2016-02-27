# Loginscript 
Dies ist ein simpler Loginscript inklusive Registrierung und internem Bereich. Eine ausführliche Dokumentation und Schritt-für-Schritt-Anleitung ist auf [http://www.php-einfach.de/experte/php-codebeispiele/loginscript/](PHP-Einfach.de - Loginscript) zu finden.

## Installation
Nach dem Download des [](ZIP-Archiv) müsst ihr zuerst die notwendige Datenbanktabelle erstellen. Die SQL-Befehle findet ihr in der Datei `users.sql` oder alternativ führt die folgenden SQL-Befehle in z.B. phpMyAdmin aus:

```sql
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passwort` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vorname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nachname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `passwortcode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `passwortcode_time` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`), UNIQUE (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
```


Als nächsten Stritt müsst ihr die Verbindungsdaten zu eurer Datenbank anpassen. Öffnet dazu die `inc/config.inc.php` und tragt dort den Benutzernamen, das Passwort, und den Datenbanknamen eurer MySQL-Datenbank ein.
