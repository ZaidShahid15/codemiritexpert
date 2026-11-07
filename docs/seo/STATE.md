# SEO Project State: codemiritexpert.online

- **Current Branch:** `seo-keywords`
- **PHP Version:** 8.3.36
- **Laravel Version:** 12.62.0
- **Status:** Phase 3 (Controller & Meta Execution) COMPLETE. All 11 meta title/description changes applied across 5 blade views and PageController.php. Baseline regenerated. 4/4 tests passing (119 assertions). Phase 4 is LOCKED awaiting "go phase 4".

---

## 1. Baseline & Regression Suite Status

- **Baseline Snapshot:** `docs/seo/baseline.json` (28 routes total: 27 HTML pages, 1 XML sitemap). **Regenerated after Phase 3 edits (2026-11-07).**
- **Public Routes Status:** All return HTTP 200.
- **H1 Verification:** Exactly one `<h1>` element per HTML page.
- **Canonical URLs:** 100% matched to defined domain URLs.
- **Internal Links Monitored:** 1,412 total internal link instances (href + anchor pairs).
- **Baseline Checksums:**
  - `public/robots.txt` SHA256: `71dfa504b648eb2e9d246ef878f8969ea2fa1bfa73ee799febe4c113292c09df`
  - `/sitemap.xml` SHA256: `a7fe211ee2218aa6fbc65c07d1e2d65977a1dc7b9b581d8a23696aefc79bfe86`
- **Regression Test:** `tests/Feature/SeoRegressionTest.php`
  - Asserts HTTP 200, single H1, unchanged canonicals, `public/robots.txt` SHA256, `/sitemap.xml` SHA256, and sorted internal links `(href, anchor)`.
  - Test suite status: `PASS` (4 tests, 119 assertions — 2026-11-07).

---

## 2. Phase 3 Changes Applied (2026-11-07)

### Blade View Changes
| File | New Title (chars) | Desc (chars) |
|---|---|---|
| `home.blade.php` | Custom Web Development Agency \| Codemir IT Experts (50) | 143 |
| `services.blade.php` | Laravel Web Development Services \| Codemir IT Experts (53) | 135 |
| `ai-solutions.blade.php` | AI Workflow & RAG Automation \| Codemir IT Experts (53) | 149 |
| `work.blade.php` | Web Development Portfolio & Case Studies \| Codemir (54) | NO CHANGE |
| `landing-clinic.blade.php` | Clinic Website Development \| Codemir IT Experts (47) | 143 |

### PageController.php Service meta_title Changes
| Slug | New meta_title |
|---|---|
| `custom-websites` | Hand-Coded Website Development \| Codemir IT Experts |
| `web-applications` | Custom Web Application Development \| Codemir IT Experts |
| `ai-tools` | Custom AI Chatbot Integration \| Codemir IT Experts |
| `ecommerce` | Custom eCommerce Web Development \| Codemir IT Experts |
| `api-development` | Custom API Development Services \| Codemir IT Experts |
| `business-systems` | Custom Business Management Software \| Codemir IT Experts |

Also: replaced "GPT-4" with "OpenAI" in `ai-tools` description and long_description.

---

## 3. Confirmed Project Decisions & Inputs

1. **Global `ProfessionalService` JSON-LD:** `areaServed` includes "Pakistan" alongside US, UK, Australia. **Decision: KEEP as-is in code**. No modifications made to global layout or JSON-LD.

2. **Keyword Data Source (Phase 1):**
   - 17 keywords have real top-10 results from a non-Google US search tool.
   - 27 rows remain `NOT COLLECTED / NOT VERIFIED / UNVERIFIED (hypothesis: ...)`.
   - **All volumes are UNKNOWN** until Keyword Planner / Search Console exports are added to `docs/seo/data/`.

---

## 4. Open Items & Next Steps

### Next Step: Phase 4 (Schema + Sitemap)
- **Phase 4 is LOCKED** until user says "go phase 4".
- Planned work:
  - Add page-level `Service` / `FAQPage` / `BreadcrumbList` JSON-LD blocks (service pages, landings, case studies).
  - Verify XML sitemap is comprehensive and priorities correct.

### Open Items
- **Verify 5 keywords on Google by hand** (optional, for future keyword research):
  1. `law firm website development`
  2. `attorney website development`
  3. `clinic website development`
  4. `clinic website design with online booking`
  5. `nonprofit website development`
