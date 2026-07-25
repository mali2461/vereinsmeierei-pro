# Vereinsmeierei Pro

# Projektstatus

Version: Entwicklung

Aktueller Build: 0002

Stand: 25.07.2026

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

```
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
```

---

# Fertiggestellt

✔ Grundstruktur

✔ Autoloader

✔ Application

✔ Loader

✔ Admin-Menü

✔ Dashboard

✔ Mitgliederübersicht

✔ Formular "Neues Mitglied"

✔ Member Model

✔ Datenbanktabelle MemberTable

✔ Members-Modul

---

# In Arbeit

▶ Mitgliederverwaltung

---

# Geplante Features

## Mitglieder

☐ Repository

☐ Service

☐ Controller

☐ Speichern

☐ Bearbeiten

☐ Löschen

☐ Suche

☐ Filter

☐ Pagination

---

## Weitere Module

☐ Beiträge

☐ Veranstaltungen

☐ Dokumente

☐ Inventar

☐ Kommunikation

☐ Finanzen

---

# Build-Historie

## Build 0001

- Projektstruktur
- Autoloader
- Application
- Loader
- Dashboard

Status: ✔ Abgeschlossen

---

## Build 0002

- Mitglieder-Menü
- Mitgliederübersicht
- Formular "Neues Mitglied"
- Member Model
- MemberTable

Status: ✔ Abgeschlossen

---

## Nächster Build

Build 0003

Ziel:

- Vollständige Mitgliederverwaltung beginnen.

Geplante Funktionen:

- Repository
- Service
- Controller
- Datenbankzugriff

Status:

▶ Geplant

---

# Entwicklungsregeln

- Eine Änderung pro Build.
- Nach jedem Build testen.
- Danach Git-Commit.
- Vollständige Dateien austauschen.
- Keine Geschäftslogik in Views.
- Module bleiben unabhängig.
- Dokumentation immer aktuell halten.

---

# Langfristige Roadmap

Version 0.5

- Mitgliederverwaltung vollständig

Version 0.8

- Beiträge
- Veranstaltungen
- Dokumente

Version 1.0

- Inventar
- Kommunikation
- Finanzen
- Erste Release-Version