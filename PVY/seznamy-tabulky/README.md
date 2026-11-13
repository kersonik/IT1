# Sémantické seznamy a tabulky v HTML

Ukázkový projekt demonstrující sémantické značkování HTML5 seznamů a komplexních tabulek s využitím slučování buněk (`rowspan`, `colspan`) a responzivního stylování v CSS. Projekt vznikl podle zadání (`predloha/predloha.pdf`) na SŠPU Opava.

## Implementované prvky

### 1. HTML Seznamy

Dokument demonstruje čtyři základní typy seznamů:

- **Číslovaný seznam (`<ol>`):** Přehled webových prohlížečů s vlastním číslováním.
- **Nečíslovaný seznam (`<ul>`):** Síťové pojmy a protokoly (IPv4/IPv6 adresy, DNS záznamy, struktura URL).
- **Vnořený víceúrovňový seznam:** Hierarchické členění výpočetní techniky na hardware a software.
- **Popisný seznam (`<dl>`, `<dt>`, `<dd>`):** Slovníček mezinárodních organizací spravujících internetové standardy (ISOC, W3C, IANA).

### 2. Komplexní tabulka

Tabulka zpracovává statistiku počtu žáků na SŠPU Opava v jednotlivých oborech a ročnících:

```text
+-------------------------------------------------------------------------+
|                  SŠPU Opava — Statistika oborů 2016/17                  |
+----------------------+--------------------+-----------------------------+
|                      |   Počet chlapců    |        Počet dívek          |
| Obor vzdělání        +---------+----------+----------+------------------+
|                      | 1. roč. | 2. roč.  | 1. roč.  | 2. roč.          |
+----------------------+---------+----------+----------+------------------+
| Informační technologie      ...                 ...                     |
| Strojírenství               ...                 ...                     |
| Umělecké obory              ...                 ...                     |
+-------------------------------------------------------------------------+
| Celkový součet (tfoot)                          ...                     |
+-------------------------------------------------------------------------+
```

Technické zpracování:
- Důsledné rozdělení na sémantické sekce `<thead>`, `<tbody>` a `<tfoot>`.
- Využití atributů `rowspan` (sdružení buněk přes více řádků) a `colspan` (nadřazené hlavičky kategorií a celkový součet).
- Správné použití hlavičkových buněk `<th>` s definovaným rozsahem.

## Stylování a responzivita (style.css)

- Střídavé podbarvení řádků pro snazší orientaci v datech
- Čistá bezpatková typografie s nastaveným odsazením buněk
- Responzivní pravidla pro menší obrazovky (přizpůsobení a vodorovné posouvání pod 800px)

## Struktura projektu

```text
seznamy-tabulky/
├── index.html       # Hlavní HTML5 dokument
├── style.css        # Kaskádové styly pro tabulky a seznamy
├── predloha/        # Původní zadání a podklady
│   ├── predloha.pdf # Zadávací arch
│   └── predloha.txt # Zdrojová data
└── README.md        # Dokumentace
```

## Otevření v prohlížeči

Projekt nevyžaduje žádné závislosti ani webový server:

- **Linux:** `xdg-open index.html`
- **macOS:** `open index.html`
- **Windows:** poklepáním na `index.html` nebo příkazem `Start-Process index.html` v PowerShellu

## Licence

Školní práce vytvořená na SŠPU Opava.
