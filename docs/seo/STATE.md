# SEO Project State: codemiritexpert.online

- **Current Branch:** `seo-keywords`
- **PHP Version:** 8.3.36
- **Laravel Version:** 12.62.0
- **Status:** Phase 0 Completed & Verified. Standing by for Phase 1.

---

## 1. Baseline & Regression Suite Status

- **Baseline Snapshot:** `docs/seo/baseline.json` (28 routes total: 27 HTML pages, 1 XML sitemap).
- **Public Routes Status:** All return HTTP 200.
- **H1 Verification:** Exactly one `<h1>` element per HTML page.
- **Canonical URLs:** 100% matched to defined domain URLs.
- **Internal Links Monitored:** 1,412 total internal link instances (href + anchor pairs).
- **Baseline Checksums:**
  - `public/robots.txt` SHA256: `71dfa504b648eb2e9d246ef878f8969ea2fa1bfa73ee799febe4c113292c09df`
  - `/sitemap.xml` SHA256: `a7fe211ee2218aa6fbc65c07d1e2d65977a1dc7b9b581d8a23696aefc79bfe86`
- **Regression Test:** `tests/Feature/SeoRegressionTest.php`
  - Asserts HTTP 200, single H1, unchanged canonicals, `public/robots.txt` SHA256, `/sitemap.xml` SHA256, and sorted internal links `(href, anchor)` with duplicate count verification.
  - Test suite status: `PASS` (4 tests, 119 assertions).
  - Proven failure mode verified: intentional anchor text alteration fails regression test immediately.

---

## 2. Confirmed Project Decisions

1. **Global `ProfessionalService` JSON-LD:**
   - `areaServed` includes "Pakistan" alongside US, UK, Australia. **Decision: KEEP as-is in code**. No modifications made to global layout or JSON-LD.
   - Factual accuracy confirmed: Brand (Codemir IT Experts), founder (Zaid Shahid, Lead Developer), locality (Faisalabad, PK), languages (English, Urdu), social entities (GitHub, LinkedIn, Facebook, Instagram).
   - Google Knowledge Graph / Maps search URLs in `sameAs` noted for Phase 5 cleanup suggestion only; code remains untouched.

2. **Phase 3 Controller Edit Scope:**
   - Permitted: updating values of `meta_title`, `title`, `description`, and `summary` within `PageController.php` arrays (`$allServices`, `$allProjects`, `$posts`).
   - Forbidden: modifying array keys, slugs, routes, method names, or controller execution logic.

3. **Keyword Data Source:**
   - Search Console and Google Keyword Planner exports will be placed in `docs/seo/data/`.
   - Phase 1 research will not begin until files are provided and the explicit "go" command is given.

4. **Phase 5 Additional Scope:**
   - Dedicated landing page idea for **Nonprofit Website Development** (online donations, donor UX, recurring giving workflows) to be researched with low-competition keyword evidence.

---

## 3. Data Directory
- `docs/seo/data/`: Created. Currently empty, awaiting Search Console & Keyword Planner exports.

---

## 4. Next Step
- **STOPPED:** Awaiting user "go" and export files before starting Phase 1 (Keyword Research).
