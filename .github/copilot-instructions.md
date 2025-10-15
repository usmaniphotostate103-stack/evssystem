## Quick orientation for AI coding agents

This small repository is a plain PHP (no framework) authentication/demo site. The active application files live under the `php/` folder and use simple PHP includes and Bootstrap via CDN.

Keep changes minimal and follow existing patterns (relative includes, page-per-file, POST handlers in same folder).

### Big picture (why & structure)
- Purpose: simple auth pages (login/register/home) built with core PHP and Bootstrap.
- Primary files:
  - `php/index.php` — login page (contains a form). Note: this file currently labels the form "Login Here" but posts to `register_handler.php` and the submit button reads "Register" — treat this as a likely copy/paste inconsistency unless the user asks to change it.
  - `php/register.php` — register page skeleton.
  - `php/home.php` — landing page skeleton.
  - `php/includes/header.php` and `php/includes/footer.php` — shared header/footer. Header loads Bootstrap from CDN (`https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/...`).

### How the app runs (developer workflow)
- This project is designed to run on XAMPP/Apache. Typical dev steps:
  1. Start XAMPP Apache service.
  2. Open the app in a browser at `http://localhost/evssystem/php/index.php` (or `http://localhost/evssystem/` if you mapped differently).

Debugging: no test runner or build step. To see PHP errors during development, enable errors in php.ini or add at the top of a page for temporary debugging:

  ini_set('display_errors', 1);
  error_reporting(E_ALL);

Prefer adding those lines only during development.

### Project-specific conventions and patterns
- Files are plain PHP pages that include header/footer using relative paths (example: `<?php include('./includes/header.php'); ?>`). Keep relative include style when adding new pages.
- Forms post to *handler* PHP files expected to live alongside pages (example: `action="register_handler.php"` in `index.php`). Search the `php/` folder for handler files before creating duplicates.
- Shared UI is in `includes/header.php` (navigation uses `home.php`, `index.php`, `register.php`), so add new routes/pages by adding them to the nav and creating corresponding views in `php/`.
- No composer, no package.json, and no database connection file were found. If you add DB code, centralize the connection in `php/includes/db.php` and include it where needed.

### Integration points and missing files to watch for
- `index.php` posts to `register_handler.php` — that handler is not present in the repo snapshot. Before implementing features that rely on registration/login behavior, either locate or add these handler files in `php/`.
- No persistent session or DB code is present. If implementing authentication, call `session_start()` at the top of pages that read/write session data.

### Guidelines for making edits (practical rules)
- Preserve header/footer include pattern. New pages or handlers should begin with `<?php include('./includes/header.php'); ?>` and end with `<?php include('./includes/footer.php'); ?>`.
- Use POST for credential submission and validate with `isset($_POST['...'])` before use. After handling, redirect with `header('Location: home.php'); exit;`.
- Keep Bootstrap CDN version unchanged unless the change explicitly updates the UI—note the repo currently references `5.3.3`.
- When adding files, put them under `php/` so paths in the nav and includes stay consistent.

### Example small task contract (implement `register_handler.php`)
- Inputs: POST `email`, `password` from `index.php` or `register.php` forms.
- Outputs: on success redirect to `home.php`; on validation/error show a message within the same UI (or redirect back with query error flag).
- Error modes: missing fields, invalid email format, duplicate user (if DB added).

### Minimal safety & quality notes (discoverable facts)
- There is no CSRF handling or password hashing present in the current code. If you add authentication, use `password_hash()` / `password_verify()` and consider CSRF tokens for forms.

If anything in this file is unclear, or you want me to generate a specific handler (for example a minimal `register_handler.php` that saves to a new SQLite or MySQL DB), tell me which storage and flow you want and I'll add it.

---
Please review these instructions and tell me if you want more detail (DB conventions, sample handlers, or a tiny test harness). I can iterate quickly.
