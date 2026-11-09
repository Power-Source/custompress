# CustomPress

**Deutsch** | [English](README.en.md)

[![Version](https://img.shields.io/badge/Version-1.0.1-2271b1?style=flat-square)](readme.txt)
![PHP](https://img.shields.io/badge/PHP-8.0%2B-777bb4?style=flat-square&logo=php&logoColor=white)
![WordPress](https://img.shields.io/badge/WordPress-bis%207.2.4-21759b?style=flat-square&logo=wordpress&logoColor=white)
![ClassicPress](https://img.shields.io/badge/ClassicPress-2.7.4-03768e?style=flat-square)
[![Lizenz](https://img.shields.io/badge/Lizenz-GPL--2.0--or--later-2ea44f?style=flat-square)](https://www.gnu.org/licenses/gpl-2.0.html)

CustomPress erweitert ClassicPress um eine Verwaltung fuer eigene
Beitragstypen, Taxonomien und benutzerdefinierte Felder. Damit lassen sich
Inhalte wie Produkte, Immobilien, Rezensionen oder Veranstaltungen getrennt
von normalen Blogbeitraegen strukturieren und pflegen.

## Funktionen

- Eigene Beitragstypen mit frei konfigurierbaren Labels und Eigenschaften
- Eigene hierarchische und nicht hierarchische Taxonomien
- Unterstuetzung fuer die Standardtaxonomien Kategorien und Schlagwoerter
- Benutzerdefinierte Felder fuer eigene Beitragstypen
- Einbettungscodes und Shortcodes fuer Taxonomien und Felder
- Optionales Erstellen von Theme-Vorlagen fuer Beitragstypen
- Unterstuetzung fuer ClassicPress-Multisite

## Voraussetzungen

- ClassicPress 2.7 oder neuer
- PHP 8.0 oder neuer

## Installation

1. Das Verzeichnis `custompress` nach
   `wp-content/plugins/custompress/` kopieren oder das Plugin im
   ClassicPress-Backend hochladen.
2. Unter **Plugins** CustomPress aktivieren.
3. Das Menu **CustomPress** im Backend oeffnen.

In einer Multisite kann CustomPress entweder fuer einzelne Websites oder
netzwerkweit aktiviert werden.

## Schnelleinstieg

### 1. Beitragstyp anlegen

1. Zu **CustomPress -> Inhaltstypen** wechseln.
2. **Beitragstyp hinzufuegen** waehlen.
3. Namen, Labels und die benoetigten Funktionen festlegen.
4. Bei Bedarf die Unterstuetzung fuer Kategorien und/oder Schlagwoerter
   aktivieren.
5. Den Beitragstyp speichern.

Der neue Beitragstyp erscheint anschliessend als eigener Menuepunkt im
ClassicPress-Backend.

### 2. Taxonomie anlegen

1. In **CustomPress -> Inhaltstypen** den Bereich **Taxonomien** oeffnen.
2. **Taxonomie hinzufuegen** waehlen.
3. Die Taxonomie dem passenden Beitragstyp zuordnen.
4. Festlegen, ob sie hierarchisch (wie Kategorien) oder nicht hierarchisch
   (wie Schlagwoerter) arbeiten soll.
5. Speichern.

### 3. Benutzerdefinierte Felder anlegen

1. Den Bereich **Benutzerdefinierte Felder** oeffnen.
2. **Benutzerdefiniertes Feld hinzufuegen** waehlen.
3. Feldname, Feldtyp und Ziel-Beitragstyp festlegen.
4. Speichern.

Das Feld wird danach im Bearbeitungsformular des ausgewaehlten Beitragstyps
angezeigt.

## Kategorien, Taxonomien und Pagination

Kategorie-, Schlagwort- und eigene Taxonomiearchive enthalten automatisch alle
oeffentlichen Beitragstypen, die fuer die jeweilige Taxonomie registriert
sind. Das gilt auch fuer passende Beitragstypen anderer Plugins.

Beispiel: Unterstuetzen sowohl normale Beitraege als auch ein eigener
Beitragstyp die Kategorie `News`, erscheinen beide in `/category/news/`.
Die Seitennavigation basiert auf der gemeinsamen Treffermenge und funktioniert
somit auch auf Folgeseiten.

Die eigenen Archive anderer Plugins bleiben dabei unveraendert. Ein
Produkt-, Event- oder anderes CPT-Archiv wird nicht durch CustomPress
umgestellt.

## Anzeigeeinstellungen

Unter **CustomPress -> Einstellungen** kann konfiguriert werden, welche
Beitragstypen auf folgenden Seiten erscheinen:

- Blog-/Home-Seite
- Statische Startseite
- Datums- und Autorenarchive
- Suche

Die Option `default` belaesst die jeweilige Ansicht bei den Standardtypen.
Kategorie-, Schlagwort- und Taxonomiearchive werden davon bewusst nicht
eingeschraenkt; sie richten sich nach der jeweiligen Taxonomiezuordnung.

## Vorlagen und Ausgaben

CustomPress kann Vorlagendateien fuer eigene Beitragstypen erzeugen. Danach
lassen sich die in der Verwaltungsoberflaeche bereitgestellten Einbettungscodes
in die Theme-Schleife aufnehmen.

Fuer benutzerdefinierte Felder steht der Shortcode `ct` zur Verfuegung:

```text
[ct id="_ct_mein_feld" property="value"]
```

Moegliche Eigenschaften sind unter anderem `value`, `title` und
`description`. Fuer Listenansichten sollte die Ausgabe im Theme erfolgen,
weil ein Shortcode dort nur den letzten Beitrag der Schleife ausgeben kann.

## Multisite

Bei einer Netzwerkaktivierung stehen drei Modelle zur Verfuegung:

1. **Netzwerkweite Inhaltstypen:** Alle Websites verwenden dieselben Typen.
2. **Website-spezifische Inhaltstypen:** Jede Website verwaltet eigene Typen.
3. **Kombination:** Netzwerkweite Typen stehen bereit; Websites duerfen
   zusaetzliche eigene Typen anlegen.

Die Optionen befinden sich in der Netzwerkverwaltung unter
**CustomPress -> Einstellungen**.

## Hinweise

- Namen von Beitragstypen und Taxonomien sollten vor der Veroeffentlichung
  sorgfaeltig gewaehlt werden. Eine spaetere Umbenennung kann bestehende URLs,
  Abfragen und Inhalte beeinflussen.
- Oeffentliche Beitragstypen benoetigen bei individuellen Vorlagen ein
  passendes Theme-Template.
- Theme-Verzeichnisse nicht auf unsichere Berechtigungen wie `777` setzen.
  Vorlagen sollten ueber Versionskontrolle, SFTP oder die sichere
  Deployment-Umgebung gepflegt werden.

## Support und Updates

- Projektseite: <https://power-source.github.io/custompress/>
- Diskussionen: <https://github.com/Power-Source/custompress/discussions>
- Releases: <https://github.com/Power-Source/custompress/releases>

## Lizenz

CustomPress steht unter der
[GNU General Public License, Version 2](https://www.gnu.org/licenses/gpl-2.0.html).
