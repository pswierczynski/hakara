# Hakara — Interactive Storytelling Platform

> A collaborative fiction platform where a curated group of amateur writers build a shared speculative story together.

---

## Overview

**Hakara** is a PHP/MySQL web application built around collaborative storytelling. Writers apply through a recruitment process, and once accepted, contribute chapters and texts to a single shared narrative universe. The project is named after the in-universe deity "Hakara" — a divine entity born in human form whose return sets the tone for the story's world.

The platform spans a post-WWIII speculative setting in which humanity has achieved unprecedented technological progress, begun to decode consciousness, and now stands at the threshold of a new evolutionary stage.

---

## Features

- **Story browser** — browse chapters (`katalog`) and individual texts with view counters
- **Recruitment system** — applicants submit sample works; administrators approve or reject them
- **User profiles** — participant pages and a public participant listing
- **Notebook** (`notatnik`) — personal notes for logged-in writers
- **Comment system** — readers and writers can comment on texts
- **Admin panel** — content management via dedicated `strona-*` pages
- **Lore page** (`fabula.php`) — in-universe background/worldbuilding
- **Rules page** (`zasady.php`) — community guidelines and participation terms
- **Contact page** (`kontakt.php`)
- **Live statistics** on the homepage — chapter count, text count, comment count, total reads, participant slots

---

## Tech Stack

| Layer | Technology |
|---|---|
| Backend | PHP (procedural) |
| Database | MySQL via `mysqli` |
| Frontend | HTML, CSS (`style.css`) |
| JS utilities | jQuery, slimScroll |
| Analytics | Google Analytics (UA legacy) |

---

## Project Structure

```
hakara/
├── index.php               # Homepage — stats, announcements
├── fabula.php              # In-universe lore / worldbuilding
├── zasady.php              # Rules and participation guidelines
├── teksty.php              # Text listing / story browser
├── wpis.php                # Single text entry view
├── wpis2.php               # Text entry variant (e.g. with comments)
├── wpis3.php               # Text entry variant
├── dodaj.php               # Add new text (step 1)
├── dodaj2.php              # Add new text (step 2 / confirm)
├── rekrutacja.php          # Recruitment — submission listing
├── rekrutacja-dodaj.php    # Recruitment — submit application
├── rekrutacja-wpis.php     # Recruitment — single application view
├── rejestracja.php         # User registration
├── profil.php              # User profile page
├── uczestnicy.php          # Participant listing
├── notatnik.php            # Personal notebook for writers
├── kontakt.php             # Contact page
├── inne.php                # Miscellaneous / other content
├── strona-edycja.php       # Admin: edit page content
├── strona-rekrutacja.php   # Admin: manage recruitment
├── strona-teksty.php       # Admin: manage texts
├── style.css               # Global stylesheet
└── modules/
    ├── head.php            # Shared HTML head + DB connection
    └── foot.php            # Shared HTML footer
```

---

## Database Schema

The application uses the following tables (inferred from source):

| Table | Description |
|---|---|
| `katalog` | Story chapters / categories |
| `tekst` | Individual story texts; includes `wyswietlen` (view counter) |
| `kom` | Comments |
| `users` / participants | Writer accounts (implied by profile/registration pages) |

> **Note:** No migration files or schema dump is included in the repository. You will need to reconstruct the schema from the PHP queries or create it manually.

---

## Installation

### Requirements

- PHP 7.x or 8.x
- MySQL 5.7+ / MariaDB
- Apache or Nginx with `mod_rewrite` (optional)
- Web server with PHP support (e.g. XAMPP, LAMP, WAMP, or a shared host)

### Steps

1. Clone the repository:
   ```bash
   git clone https://github.com/pswierczynski/hakara.git
   ```

2. Copy the project to your web server's document root (e.g. `htdocs/` or `/var/www/html/`).

3. Create a MySQL database:
   ```sql
   CREATE DATABASE hakara CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
   ```

4. Configure the database connection in `modules/head.php`. Look for the `mysqli_connect()` call and update the credentials:
   ```php
   $conn = mysqli_connect("localhost", "your_user", "your_password", "hakara");
   ```

5. Create the required tables. Since no SQL dump is provided, refer to the queries in `index.php`, `teksty.php`, and `rekrutacja.php` to reconstruct the schema.

6. Open the application in a browser:
   ```
   http://localhost/hakara/
   ```

---

## Context & History

The project was active roughly between **2006 and 2012**, as evidenced by the hardcoded announcements on the homepage. It was a collaborative creative writing project with approximately 6 participants (3 active writers, 2 organizers) and a capacity for up to 20 writers.

The story is set in a future world recovering from WWIII (which began in 2021 in-universe), exploring themes of transhumanism, artificial consciousness, and the boundary between human and divine.

---

## Known Limitations

- No SQL schema file is included — database setup requires manual reconstruction
- No `.htaccess` or routing configuration is included
- Uses legacy Google Analytics (Universal Analytics, `UA-` prefix) — no longer functional
- Authentication and session handling implementation is not visible in the current files (likely in `modules/head.php`)
- Inline styles are used throughout — no component-based CSS architecture
- No CSRF protection or input sanitization visible in the public files

---

## License

No license is specified in this repository. All rights to the story content and code are presumed to belong to the original author(s).

---

## Author

**Przemek Świerczyński** — [github.com/pswierczynski](https://github.com/pswierczynski)
