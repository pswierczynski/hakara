# Hakara

**Platforma interaktywnego opowiadania** — wspólny projekt pisarski, w którym zaproszeni autorzy tworzą rozgałęzione opowiadanie złożone z rozdziałów i tekstów ocenianych przez społeczność.

---

## Opis projektu

Hakara to webowa platforma umożliwiająca grupie pisarzy amatorów wspólne tworzenie interaktywnego opowiadania. Projekt oparty jest na systemie rekrutacji — nowi autorzy składają przykładową pracę, która jest oceniana przez administratorów. Po przyjęciu autor może dodawać własne teksty w ramach istniejących rozdziałów lub tworzyć nowe.

Platforma wyświetla statystyki w czasie rzeczywistym: liczbę rozdziałów, tekstów, komentarzy i odczytań.

---

## Stack technologiczny

| Warstwa | Technologia |
|---|---|
| Backend | PHP (natywny, bez frameworka) |
| Baza danych | MySQL / MariaDB |
| Frontend | HTML, CSS (własny `style.css`) |
| Scroll UI | jQuery + SlimScroll |
| Analityka | Google Analytics (UA) |

---

## Struktura plików

```
hakara/
├── index.php               # Strona główna — opis projektu, statystyki, ogłoszenia
├── zasady.php              # Zasady uczestnictwa
├── rejestracja.php         # Formularz rejestracji użytkownika
├── rekrutacja.php          # Lista prac rekrutacyjnych
├── rekrutacja-dodaj.php    # Formularz dodawania pracy rekrutacyjnej
├── rekrutacja-wpis.php     # Podgląd pojedynczej pracy rekrutacyjnej
├── teksty.php              # Lista wszystkich tekstów
├── wpis.php                # Podgląd tekstu
├── wpis2.php               # Podgląd tekstu (wariant)
├── wpis3.php               # Podgląd tekstu (wariant)
├── dodaj.php               # Formularz dodawania tekstu
├── dodaj2.php              # Formularz dodawania tekstu (wariant)
├── fabula.php              # Struktura fabularna / mapa rozdziałów
├── profil.php              # Profil użytkownika
├── notatnik.php            # Notatnik autora
├── uczestnicy.php          # Lista uczestników projektu
├── inne.php                # Dodatkowe treści
├── kontakt.php             # Formularz kontaktowy
├── strona-edycja.php       # Edycja strony (panel admina)
├── strona-rekrutacja.php   # Panel rekrutacji (admin)
├── strona-teksty.php       # Panel zarządzania tekstami (admin)
├── style.css               # Arkusz stylów
└── modules/
    ├── head.php            # Nagłówek HTML (include)
    └── foot.php            # Stopka HTML (include)
```

---

## Schemat bazy danych

Na podstawie zapytań w kodzie projekt wymaga co najmniej następujących tabel:

| Tabela | Opis |
|---|---|
| `katalog` | Rozdziały opowiadania |
| `tekst` | Teksty autorów (kolumny: `wyswietlen`, i inne) |
| `kom` | Komentarze do tekstów |

> **Uwaga:** Plik SQL z definicją schematu bazy nie jest dołączony do repozytorium. Przed uruchomieniem należy ręcznie utworzyć tabele.

---

## Wymagania

- PHP >= 5.6 (używa `mysqli_*`)
- MySQL / MariaDB
- Serwer HTTP: Apache lub Nginx
- jQuery (wczytywany przez `head.php`)
- jQuery SlimScroll

---

## Instalacja

1. **Sklonuj repozytorium:**

```bash
git clone https://github.com/pswierczynski/hakara.git
cd hakara
```

2. **Utwórz bazę danych:**

```sql
CREATE DATABASE hakara CHARACTER SET utf8 COLLATE utf8_polish_ci;
```

3. **Skonfiguruj połączenie z bazą:**

Znajdź plik konfiguracyjny połączenia (prawdopodobnie w `modules/head.php` lub osobnym pliku `config.php`) i uzupełnij dane dostępowe:

```php
$conn = mysqli_connect('localhost', 'uzytkownik', 'haslo', 'hakara');
```

4. **Utwórz tabele** zgodnie ze schematem opisanym powyżej.

5. **Wgraj pliki na serwer** (np. do katalogu `public_html` lub `htdocs`).

6. **Otwórz w przeglądarce:** `http://localhost/hakara/`

---

## Funkcjonalności

- Strona główna z dynamicznymi statystykami (rozdziały, teksty, komentarze, odczytania)
- System rekrutacji nowych autorów
- Dodawanie i przeglądanie tekstów literackich
- Podgląd struktury fabularnej opowiadania
- Profile uczestników
- Notatnik autora
- Panel administracyjny (zarządzanie tekstami, rekrutacją, stroną)
- Formularz kontaktowy
- Integracja z Google Analytics

---

## Historia projektu

| Data | Zdarzenie |
|---|---|
| 05/08/2006 | Projekt Hakara został rozpoczęty |
| 04/09/2006 | Pierwsze złożone prace rekrutacyjne |
| 15/09/2007 | Pierwsze teksty w dziale "teksty" |
| 16/05/2007 | 10 tekstów w 3 rozdziałach |
| 09/11/2008 | 20 tekstów w 5 rozdziałach |
| 10/11/2012 | Nowy, odświeżony wygląd strony |

---

## Autor

**Przemek Świerczyński**
[github.com/pswierczynski](https://github.com/pswierczynski)

---

## Licencja

Projekt nie posiada jawnie zdefiniowanej licencji. Wszelkie prawa zastrzeżone przez autora.
