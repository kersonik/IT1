# Pololetní projekt — Základy informatiky

Webový výukový portál shrnující vybrané tematické okruhy informatiky: architekturu počítačů, historii výpočetní techniky, hardware, software a kyberbezpečnost, počítačové sítě, umělou inteligenci a superpočítače.

Projekt vznikl jako pololetní práce v rámci studia na SŠPU Opava s důrazem na sémantické HTML5, čistou navigaci a přehledné zpracování témat.

## Přehled stránek a témat

| Soubor | Téma | Obsah |
| :--- | :--- | :--- |
| `index.html` | Úvod | Rozcestník portálu, pojem algoritmus a datové struktury |
| `historie.html` | Historie počítačů | Pět generací počítačů (elektronky, tranzistory, integrované obvody, mikroprocesory, paralelní architektury) |
| `hardware.html` | Hardware | Přehled komponent: CPU, GPU, RAM, paměťová média (SSD / HDD), sběrnice a základní deska |
| `software.html` | Software a bezpečnost | Rozdělení softwaru (systémový vs. aplikační), typy malwaru a bezpečnostní zásady |
| `site.html` | Počítačové sítě | Modely OSI a TCP/IP, přepojování paketů a okruhů, topologie, klient-server a P2P |
| `ai.html` | Umělá inteligence | Strojové učení, hluboké neuronové sítě, NLP a legislativa (EU AI Act) |
| `super.html` | Superpočítače | Principy HPC, Flynn taxonomy, distribuované výpočty (BOINC) a známé systémy |

## Vlastnosti a technologie

- Sémantické značkování HTML5 (`<header>`, `<nav>`, `<main>`, `<article>`, `<section>`, `<footer>`)
- Jednotná navigační lišta napříč všemi stránkami
- Vlastní stylování v CSS a doprovodná grafika v `img/` a `gif/`
- Čistě statický web bez externích závislostí a buildovacího procesu

## Struktura projektu

```text
pololetni-projekt/
├── index.html        # Úvodní stránka
├── historie.html     # Historie výpočetní techniky
├── hardware.html     # Hardwarové komponenty
├── software.html     # Software a kyberbezpečnost
├── site.html         # Počítačové sítě a protokoly
├── ai.html           # Umělá inteligence a strojové učení
├── super.html        # Superpočítače a distribuované výpočty
├── css/              # Kaskádové styly
├── img/              # Schémata a fotografie
├── gif/              # Animace a ukázky
└── README.md         # Dokumentace
```

## Spuštění a náhled

Web lze otevřít přímo v prohlížeči:

- **Linux:** `xdg-open index.html`
- **macOS:** `open index.html`
- **Windows:** poklepáním na `index.html` nebo příkazem `Start-Process index.html` v PowerShellu

Lokální spuštění přes HTTP server:

```bash
python3 -m http.server 8080
```
Poté otevřete adresu `http://localhost:8080`.

## Licence

Školní projekt vytvořený na SŠPU Opava.
