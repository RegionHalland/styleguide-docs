---
extends: _layouts.documentation
title: "Installation & användning"
description: "Kom igång med Region Hallands Styleguide"
---

## Vad är styleguiden?

Styleguiden är i grund och botten ett CSS-ramverk. Vill du uppdatera någon av våra komponenter är det styleguiden du bör jobba i. Styleguiden levererar CSS till flera av Regionens webbplatser via en s.k. CDN-lösning. 

## Vad är dokumentationen?

Dokumentationen är kodexempel och beskrivningar av våra komponenter och utilityklasser. När du bygger en webbplats är dokumentationen en bra plats att börja på. Här kan du kopiera färdiga komponenter som du sedan kan använda i ditt projekt. 

## Jag vill göra ändringar i styleguiden

---

### Steg 1 - Hämta styleguiden

För att komma igång med att göra ändringar till styleguiden behöver du först klona hem senaste versionen från Region Hallands Github repository. Du hittar filerna du behöver här: [https://github.com/RegionHalland/styleguide-v2](https://github.com/RegionHalland/styleguide-v2)

### Steg 2 - Att jobba i styleguiden

Vi använder [Yarn](https://yarnpkg.com/lang/en/) för att hantera dependencies. Känner du dig osäker på hur Yarn fungerar rekommenderar vi att du tittar på deras dokumentation innan du fortsätter. Har du inte Yarn installerat på din maskin sedan tidigare kommer du enkelt igång här: [https://yarnpkg.com/en/docs/getting-started](https://yarnpkg.com/en/docs/getting-started)

### Steg 3 - Skapa en branch

För att vi ska kunna hålla ordning på ändringarna som görs i vår styleguide skapar alla kollaboratörer en s.k. *feature branch*. En feature branch döps baserat på vilka ändringar som ska göras. Ska exempelvis storleken på en knapp ändras skapar vi en branch som heter *buttons* där vi gör våra ändringar.  

---

**Installera dependencies**

Navigera till projektmappen och kör kommandot `yarn`. När du kör `yarn` så installeras de dependencies som krävs för att jobba med projektet. 

---

**Lyssna efter ändringar** 

Innan du börjar göra ändringar i projektet behöver du köra kommandot `yarn start`. Kommandot lyssnar efter filändringar och genererar main.min.css samt den sprite som används för våra ikoner. 

---

**Se dina ändringar i dokumentationen**

Vill du se dina ändringar i vår dokumentation? I så fall behöver du köra kommandot `yarn serve`. Kommandot ser till att det finns en lokal url tillgänglig så att den lokala versionen av dokumentationen kan läsa in din CSS. 

---

### Steg 4 - Skapa en pull request

När du är nöjd med dina ändringar behöver du skapa en pull request. En pull request berättar för administratören att det finns nya ändringar som är redo att tas in styleguiden. Administratören kan välja att godkänna eller neka dina ändringar. 

## Publicera en ny version av styleguiden

---

Eftersom vår styleguide är ett levande dokument så är det viktigt att ändringar kontrolleras noggrant inför publicering av en ny version. För att säkerställa att våra webbplatser inte går sönder vid publiceringen av nya versioner så är möjligheten att publicera ändringar begränsad till en administratör. I dagsläget är rättigheten att publicera begränsad till David Öhlin. 

### **Såhär publicerar du ändringar**

När du kontrollerat ändringarna som gjorts i projektet så är det dags att publicera. Kör `npm deploy` för att starta processen.

## Jag vill uppdatera dokumentationen

---

Dokumentationen, d.v.s. webbplatsen för kodexempel och beskrivningar av våra komponenter och utilityklasser, läser in vår styleguide för att fungera. 

### Steg 1 - Hämta dokumentationen

För att komma igång med att göra ändringar i dokumentationen behöver du först klona hem senaste versionen från Region Hallands Github repository. Du hittar filerna du behöver här: [https://github.com/RegionHalland/styleguide-docs](https://github.com/RegionHalland/styleguide-docs). 

### Steg 2 - Att jobba i dokumentationen

Vi använder [Yarn](https://yarnpkg.com/lang/en/) och Composer för att hantera dependencies. Känner du dig osäker på hur Yarn eller Composer fungerar rekommenderar vi att du tittar på deras dokumentation innan du fortsätter.

### Steg 3 - Skapa branch

För att vi ska kunna hålla ordning på ändringarna som görs i vår dokumentation skapar alla kollaboratörer en s.k. *feature branch*. En feature branch döps baserat på vilka ändringar som ska göras. Ska vi exempelvis lägga till en typ av navigation i vår dokumentation bör vår branch heta *navigation*.

---

**Installera dependencies**

Navigera till projektmappen och kör kommandot `composer install`. Kör därefter kommandot `yarn`. När du kör `composer install` och  `yarn` så installeras de dependencies som krävs för att jobba med projektet. 

---

**Bygg projektet**

Kör kommandot `yarn production` för att bygga dokumentationen. 

---

**Starta en lokal server och lyssna efter ändringar**

För att komma åt projektet lokalt behöver du köra kommandot `yarn start`. När du gjort detta kommer du åt dokumentationen på `localhost:3000`. 

---

### Steg 4 - Gör ändringar

Dokumentationen är skriven i formatet markdown. För att lägga till en komponent så behöver du skapa en ny markdown fil. Dessa filer sparas i `/source/docs/`. Navigationen i vår dokumentation styrs av filen `navigation.php`. Har du skapat en ny komponent behöver du lägga till den i navigationen manuellt.

### Steg 5 - Skapa pull request

När du är nöjd med dina ändringar behöver du skapa en pull request. En pull request berättar för administratören att det finns nya ändringar som är redo att tas in styleguiden. Administratören kan välja att godkänna eller neka dina ändringar. 

## Publicera en ny version av dokumentationen

---

I dagsläget är rättigheten att publicera ändringar av dokumentationen begränsad till David Öhlin.

### **Såhär publicerar du ändringar**

När du kontrollerat ändringarna som gjorts i dokumentationen så är det dags att publicera. Vi använder Travis CI för att sköta automatisk deployment av dokumentationen när koden i vår master branch uppdateras.