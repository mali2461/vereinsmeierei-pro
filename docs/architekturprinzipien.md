# Architekturprinzipien

Dieses Dokument beschreibt die grundlegenden Architekturentscheidungen von Vereinsmeierei Pro.

Es erklärt nicht nur, *wie* etwas umgesetzt wird, sondern vor allem *warum* wir uns für eine bestimmte Lösung entschieden haben.

---

# Rollen und Funktionen

## Grundsatz

Vereinsmeierei Pro kennt keine fest im Programm verankerten Vereinsfunktionen.

Jeder Verein entscheidet selbst, welche Funktionen benötigt werden und welche Bezeichnungen verwendet werden.

## Begründung

Jeder Verein organisiert sich anders.

Während ein Sportverein beispielsweise Trainer und Jugendwarte verwaltet, benötigt ein Wassersportverein Stegwarte oder Hafenmeister. Ein Kulturverein arbeitet vielleicht mit Projektleitern, ein Kangoo-Jump-Verein mit Coaches.

Eine feste Liste würde Vereine einschränken.

Deshalb werden Rollen und Funktionen vollständig konfigurierbar umgesetzt.

## Mehrfachfunktionen

Ein Mitglied kann beliebig viele Funktionen gleichzeitig übernehmen.

Beispiele:

- Mitglied
- Trainer
- Kassierer
- Gerätewart
- Jugendwart

Diese Funktionen schließen sich nicht gegenseitig aus.

## Vorteile

- Keine Programmänderungen bei neuen Vereinsfunktionen.
- Hohe Flexibilität.
- Zukunftssichere Architektur.
- Für Vereine jeder Art geeignet.

## Leitsatz

> Die Software passt sich dem Verein an – nicht der Verein der Software.