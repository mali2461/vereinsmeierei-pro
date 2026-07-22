# Vereinsmeierei Pro
## Projektstatus

Stand: 20.07.2026

---

# Projektphilosophie

Vereinsmeierei Pro soll Vereine unterstützen, nicht bevormunden.

Administration ist Mittel zum Zweck.

Der Mensch steht im Mittelpunkt.

Module sollen unabhängig voneinander funktionieren.

Die Bedienung orientiert sich an WordPress und soll für Ehrenamtliche einfach verständlich sein.

---

# Architektur

Plugin

vereinsmeierei-pro.php

↓

Application

↓

Loader

↓

Module

↓

Views / Services / Repository / Models

---

# Aktuelle Ordnerstruktur

app/

Admin/

Core/

Database/

Helpers/

Models/

Modules/

Services/

Views/

docs/

---

# Bereits umgesetzt

✔ Autoloader

✔ Application

✔ Loader

✔ Admin-Menü

✔ Dashboard

✔ Mitgliederseite

✔ Formular "Neues Mitglied"

✔ Member Model

✔ MemberTable

✔ Members-Modul

---

# Nächste Entwicklungsschritte

## Mitglieder

- Repository erstellen
- Service erstellen
- Controller erstellen
- Datenbankanbindung
- Mitglied speichern
- Mitglieder bearbeiten
- Mitglieder löschen
- Suche
- Filter
- Pagination

---

## Weitere Module

- Beiträge
- Veranstaltungen
- Dokumente
- Inventar
- Kommunikation
- Finanzen

---

# Entwicklungsregeln

- Keine Geschäftslogik in Views.

- Admin enthält nur WordPress-Menüs.

- Module enthalten ihre eigene Logik.

- Kleine testbare Schritte.

- Nach jedem Schritt testen.

- Änderungen möglichst als vollständige Dateien austauschen.

---

# Versionen

## Build 0001

Grundstruktur erstellt.

Adminbereich funktionsfähig.

Erste Mitgliederseiten vorhanden.

---

# Aktuelles Ziel

Eine vollständige Mitgliederverwaltung entwickeln.

Erstes Ziel:

Mitglied anlegen

↓

In Datenbank speichern

↓

Mitgliederliste anzeigen

↓

Bearbeiten

↓

Löschen