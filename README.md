# Hakara

**Interactive storytelling platform** — a collaborative writing project where invited authors contribute to a branching story composed of chapters and texts reviewed by the community.

---

## About

Hakara is a web platform for a group of amateur writers to collaboratively build an interactive story. The project uses a recruitment system — new authors submit a sample piece which is reviewed by administrators. Once accepted, an author can add texts within existing chapters or propose new ones.

The platform displays live stats: number of chapters, texts, comments, and total reads.

---

## Tech Stack

| Layer | Technology |
|---|---|
| Backend | PHP (vanilla, no framework) |
| Database | MySQL / MariaDB |
| Frontend | HTML, CSS (custom `style.css`) |
| Scroll UI | jQuery + SlimScroll |
| Analytics | Google Analytics (UA) |

---

## File Structure

```
hakara/
├── index.php               # Home page — project description, stats, announcements
├── zasady.php              # Participation rules
├── rejestracja.php         # User registration form
├── rekrutacja.php          # List of recruitment submissions
├── rekrutacja-dodaj.php    # Add recruitment submission form
├── rekrutacja-wpis.php     # Single recruitment submission view
├── teksty.php              # Full text listing
├── wpis.php                # Text view
├── wpis2.php               # Text view (variant)
├── wpis3.php               # Text view (variant)
├── dodaj.php               # Add text form
├── dodaj2.php              # Add text form (variant)
├── fabula.php              # Story structure / chapter map
├── profil.php              # User profile
├── notatnik.php            # Author's notepad
├── uczestnicy.php          # Participants list
├── inne.php                # Miscellaneous content
├── kontakt.php             # Contact form
├── strona-edycja.php       # Page editor (admin panel)
├── strona-rekrutacja.php   # Recruitment panel (admin)
├── strona-teksty.php       # Text management panel (admin)
├── style.css               # Stylesheet
└── modules/
    ├── head.php            # HTML header (include)
    └── foot.php            # HTML footer (include)
```

---

## Database Schema

Based on queries found in the source code, the project requires at least the following tables:

| Table | Description |
|---|---|
| `katalog` | Story chapters |
| `tekst` | Author texts (columns include: `wyswietlen`, and others) |
| `kom` | Comments on texts |

> **Note:** No SQL schema file is included in the repository. Tables must be created manually before running the app.

---

## Requirements

- PHP >= 5.6 (uses `mysqli_*` functions)
- MySQL / MariaDB
- HTTP server: Apache or Nginx
- jQuery (loaded via `head.php`)
- jQuery SlimScroll

---

## Installation

1. **Clone the repository:**

```bash
git clone https://github.com/pswierczynski/hakara.git
cd hakara
```

2. **Create the database:**

```sql
CREATE DATABASE hakara CHARACTER SET utf8 COLLATE utf8_polish_ci;
```

3. **Configure the database connection:**

Locate the connection config (likely inside `modules/head.php`) and fill in your credentials:

```php
$conn = mysqli_connect('localhost', 'username', 'password', 'hakara');
```

4. **Create the required tables** according to the schema described above.

5. **Deploy files to your server** (e.g. `public_html` or `htdocs`).

6. **Open in browser:** `http://localhost/hakara/`

---

## Features

- Home page with dynamic statistics (chapters, texts, comments, reads)
- Author recruitment system with admin review
- Adding and browsing literary texts
- Story structure / chapter map view
- Author profiles
- Author notepad
- Admin panel (text management, recruitment, page editing)
- Contact form
- Google Analytics integration

---

## Project History

| Date | Event |
|---|---|
| 05/08/2006 | Hakara project launched |
| 04/09/2006 | First recruitment submissions received |
| 15/09/2007 | First texts published |
| 16/05/2007 | 10 texts across 3 chapters |
| 09/11/2008 | 20 texts across 5 chapters |
| 10/11/2012 | New refreshed site design |

---

## Author

**Przemek Świerczyński**
[github.com/pswierczynski](https://github.com/pswierczynski)

---

## License

No license is explicitly defined in this repository. All rights reserved by the author.
