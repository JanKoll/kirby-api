# Kirby + Api Workshop
Willkommen in unserem Repo, wir werden über den Workshop hinweg mit mehreren Braches arbeiten. Damit du dir bereits vorab alle herunterladen könnt, schau dir den **Getting started** teil unten an.

> _Nach_ dem Herunterladen versuch am besten das Projekt einmal zu starten und in deinem Browser aufzurufen. Wie das funktioniert, findest du [hier](https://getkirby.com/docs/guide/quickstart).


## Getting started

1. Repo clonen
```bash
git clone https://github.com/JanKoll/kirby-api.git
cd kirby-api
```

2. Alle Remote Branches herunterladen
```bash
git branch -r | grep -v '\->' | sed "s,\x1B\[[0-9;]*[a-zA-Z],,g" | while read remote; do git branch --track "${remote#origin/}" "$remote"; done
git fetch --all
git pull --all
```
3. Erste Aufgabe _auschecken_

```bash
git checkout '#1-Aufgabe-Frontend'
```

### Besonderheiten

**Mac:** Unter macOS Monterey ist PHP nicht mehr standardmäßig installiert, schaut euch dazu die Anleitung von [php.net](https://www.php.net/manual/de/install.macosx.packages.php) an.

**Windows:** Bei uns ist es zu Problemen mit PHP gekommen, wenn es bei dir nicht funktioniert nutz bitte [XAMMP](https://www.apachefriends.org/de/download.html) (Git Repo muss in den “htdocs” Ordner von XAMPP abgelegt werden). 