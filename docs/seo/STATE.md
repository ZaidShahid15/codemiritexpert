# SEO Project State: codemiritexpert.online

- **Current Branch:** `seo-keywords`
- **PHP Version:** 8.3.36
- **Laravel Version:** 12.62.0
- **Status:** Phase 1 (Keyword Research) Completed. Standing by for user review before Phase 2.

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
   - Pre-check verified `docs/seo/data/` is currently empty.
   - Decision Applied: "No exports are available. Label every volume UNKNOWN."
   - Data gathered via live SERP observation, analyzing actual ranking domains, query intent, and organic competitive patterns.

4. **Phase 1 & Correction Output:**
   - Generated `docs/seo/keyword-research.csv` covering all 24 site pages + Phase 5 nonprofit landing page idea.
   - All search volumes labeled `UNKNOWN` per non-negotiable Rule 2 (no exports present in `docs/seo/data/`).
   - Re-verified candidate keywords for United States SERP (`gl=us&hl=en`), capturing 10 live ranking domains per keyword in `top10_domains`.
   - Search intent strictly classified: developer/tutorial results (GitHub, Packagist, YouTube, Dev.to, Medium) labeled `Informational (Developer/Tutorial)` and segregated from commercial buyer queries.
   - Genuine buyer queries added for law firms, medical clinics, and nonprofits (`law firm website design`, `medical practice website design`, `nonprofit website design`, `nonprofit website with donations`) and rated honestly as `HIGH` competition.
   - Zero site code or layout files touched.

---

## 3. Next Step
- **STOPPED:** Phase 1 Correction complete on branch `seo-keywords`. Awaiting user's review and approval ("go") to proceed to **Phase 2: Keyword Map** (`docs/seo/keyword-map.md`).
