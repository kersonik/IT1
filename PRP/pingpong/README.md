# Ping Pong (Pygame)

Klasická arkádová hra pro dva hráče nebo jednoho hráče proti počítači (AI), naprogramovaná v Pythonu s využitím knihovny Pygame.

## Herní režimy a funkce

- **Hra pro jednoho hráče:** Zápas proti počítači. AI odhaduje trajektorii míčku včetně odrazů od horní a dolní stěny a reaguje podle zvolené obtížnosti.
- **Hra pro dva hráče:** Lokální hra pro dva hráče na jedné klávesnici.
- **Nastavení obtížnosti AI:** Volba mezi režimy Easy, Medium a Hard (upravuje rychlost reakce a toleranci chyb AI).
- **Nastavení zobrazení a výkonu:** Možnost volby cílové snímkové frekvence (30 / 60 / 120 FPS), přepnutí na celou obrazovku a zobrazení FPS počítadla.
- **Plynulá fyzika:** Pevný časový krok pro konzistentní chování odrazů nezávisle na výkonu počítače. Míček postupně zrychluje s každým úspěšným odrazem.

## Ovládání

### Hra

| Akce | Hráč 1 (Levé pálka) | Hráč 2 (Pravá pálka) |
| :--- | :--- | :--- |
| **Pohyb nahoru** | `W` | Šipka nahoru `▲` |
| **Pohyb dolů** | `S` | Šipka dolů `▼` |

### Menu a navigace

| Klávesa | Akce |
| :--- | :--- |
| Šipky / `W` / `S` | Pohyb v nabídce |
| `Enter` | Potvrzení volby |
| `Escape` | Návrat do menu / Pauza hry |

## Požadavky a spuštění

- Python 3.8+
- Pygame

```bash
# Instalace závislostí
pip install -r requirements.txt

# Spuštění hry
python game.py
```

## Struktura projektu

```text
pingpong/
├── game.py          # Herní smyčka, menu, AI logika a vykreslování
├── requirements.txt # Python knihovny (pygame)
└── README.md        # Dokumentace
```

## Licence

MIT
