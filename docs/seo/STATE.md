# SEO Project State: codemiritexpert.online

- **Current Branch:** `seo-keywords`
- **PHP Version:** 8.3.36
- **Laravel Version:** 12.62.0
- **Status:** Phase 1 (Keyword Research) PARTLY COMPLETE. 17 keywords have real top-10 evidence from a non-Google US search tool (approximate). The rest are NOT COLLECTED (Google CAPTCHA). Standing by for user to verify 5 keywords by hand and then say "go" for Phase 2.

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

## 2. Confirmed Project Decisions & Inputs

1. **Global `ProfessionalService` JSON-LD:**
   - `areaServed` includes "Pakistan" alongside US, UK, Australia. **Decision: KEEP as-is in code**. No modifications made to global layout or JSON-LD.
   - Factual accuracy confirmed: Brand (Codemir IT Experts), founder (Zaid Shahid, Lead Developer), locality (Faisalabad, PK), languages (English, Urdu), social entities (GitHub, LinkedIn, Facebook, Instagram).
   - Google Knowledge Graph / Maps search URLs in `sameAs` noted for Phase 5 cleanup suggestion only; code remains untouched.

2. **Phase 3 Controller Edit Scope:**
   - Permitted: updating values of `meta_title`, `title`, `description`, and `summary` within `PageController.php` arrays (`$allServices`, `$allProjects`, `$posts`).
   - Forbidden: modifying array keys, slugs, routes, method names, or controller execution logic.

3. **Keyword Data Source (Phase 1):**
   - Pre-check verified `docs/seo/data/` had no exports.
   - Decision Applied: "No exports are available. Label every volume UNKNOWN."
   - Automated Google lookups were blocked by Google's anti-bot CAPTCHA. Data source is explicitly labeled `NOT COLLECTED (Google CAPTCHA, no results seen)` for 27 rows.
   - 17 keywords now have real top-10 results from a non-Google US search tool (`docs/seo/data/keyword-research-websearch.csv` and `docs/seo/data/serp-websearch-us.md`, both approximate; Google NOT checked).
   - **All volumes are UNKNOWN** until Keyword Planner / Search Console exports are added to `docs/seo/data/`.
   - **Note:** `custom api development services` returned only 7 results; its top 10 is NOT fully verified.

4. **Phase 1 Correction 2 & Import Status:**
   - Headless Chrome / automated curl requests to Google triggered Enterprise reCAPTCHA block (Rule 8 — NOT bypassed).
   - 41 raw SERP files in `docs/seo/data/serp/<slug>.txt` document the CAPTCHA block; rank 1–10 remain `NOT VERIFIED` for the 27 non-imported rows.
   - `docs/seo/keyword-research.csv` header: `keyword,data source,volume,competition,serp_location,top10_domains,intent,relevant_page,competition_reasoning`.
   - Total rows: 44 (41 original + 3 new: `law firm website development`, `clinic website development`, `nonprofit website development`).
   - 17 rows now have real `top10_domains`, real `competition` rating, and `competition_reasoning` from the WebSearch import.
   - 27 rows remain `NOT COLLECTED / NOT VERIFIED / UNVERIFIED (hypothesis: …)`.
   - Zero site code or layout files touched.

---

## 3. Open Items & Next Step

### Open Items
- **Verify these 5 keywords on Google by hand** and paste rank, title, and full URL for positions 1–10 into `docs/seo/data/serp/<slug>.txt`:
  1. `law firm website development` → `law-firm-website-development.txt`
  2. `attorney website development` → `attorney-website-development.txt`
  3. `clinic website development` → `clinic-website-development.txt`
  4. `clinic website design with online booking` → `clinic-website-design-with-online-booking.txt`
  5. `nonprofit website development` → `nonprofit-website-development.txt` *(create this file)*

- **All volumes are UNKNOWN** until Keyword Planner / Search Console exports are added to `docs/seo/data/`.

### Next Step
- **STOPPED:** Awaiting user's Google hand-verification of the 5 above keywords and/or explicit "go" to proceed to **Phase 2: Keyword Map** (`docs/seo/keyword-map.md`).
