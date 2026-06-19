<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    private function getFaqs()
    {
        return [
            ['question' => 'What technologies do you use for web development?', 'answer' => 'We specialize in PHP Laravel for the backend, and Tailwind CSS along with Alpine.js or Vue/React for the frontend. This ensures high performance and scalability.'],
            ['question' => 'Do you build custom websites or use templates?', 'answer' => 'We build 100% custom websites from scratch. We do not use pre-made WordPress themes or drag-and-drop page builders. Everything is hand-coded for your specific needs.'],
            ['question' => 'How long does it take to build a website or web app?', 'answer' => 'A standard custom website usually takes 3 to 6 weeks. Complex web applications, CRMs, or AI integrations can take anywhere from 2 to 4 months depending on the scope.'],
            ['question' => 'What kind of AI tools can you integrate?', 'answer' => 'We integrate OpenAI (GPT-4) and Anthropic models to create custom chatbots, automated customer support systems, content generators, and data analysis tools tailored to your business.'],
            ['question' => 'Do you provide ongoing maintenance and support?', 'answer' => 'Yes! We offer flexible monthly retainers and ongoing support packages to ensure your system stays secure, updated, and performs optimally as your business grows.'],
            ['question' => 'Can you help redesign an existing website?', 'answer' => 'Absolutely. We can audit your current website and rebuild it using modern technologies like Laravel and Tailwind CSS to drastically improve load times, SEO, and conversion rates.'],
            ['question' => 'Are your websites optimized for SEO and mobile?', 'answer' => 'Yes. Every website we build is mobile-first, fully responsive, and structured with SEO best practices (semantic HTML, fast load speeds, proper meta tags) right out of the box.'],
            ['question' => 'How do you handle project management and communication?', 'answer' => 'We maintain transparent communication through regular updates via email, Slack, or Zoom. You will always know what stage your project is in and what the next steps are.'],
            ['question' => 'Do you build eCommerce stores?', 'answer' => 'Yes, we build robust, custom eCommerce solutions directly in Laravel with seamless payment gateway integrations (Stripe, PayPal) and custom inventory management systems.'],
            ['question' => 'What are your payment terms?', 'answer' => 'Typically, we require a 50% deposit to commence work, with the remaining balance due upon project completion and your final approval before launch. Custom milestones can be arranged for larger projects.'],
        ];
    }

    private function getStats()
    {
        return [
            ['number' => '20+', 'label' => 'Projects Delivered'],
            ['number' => '100%', 'label' => 'Client Satisfaction'],
            ['number' => '3+', 'label' => 'Years Experience'],
            ['number' => '15+', 'label' => 'Technologies'],
        ];
    }

    public function home()
    {
        $faqs = $this->getFaqs();
        $stats = $this->getStats();

        $services = [
            ['slug' => 'custom-websites', 'icon' => 'globe', 'title' => 'Custom Websites', 'desc' => 'Fast, mobile-first websites built with Laravel + Tailwind CSS that rank and convert.'],
            ['slug' => 'web-applications', 'icon' => 'cog', 'title' => 'Web Applications', 'desc' => 'CRMs, dashboards, booking systems, and business management tools.'],
            ['slug' => 'ai-tools', 'icon' => 'cpu', 'title' => 'AI-Powered Tools', 'desc' => 'Chatbots, automation tools, and AI integrations to make your business smarter.'],
            ['slug' => 'ecommerce', 'icon' => 'shopping-cart', 'title' => 'eCommerce Development', 'desc' => 'Full-featured online stores with payment gateways and inventory management.'],
            ['slug' => 'api-development', 'icon' => 'link', 'title' => 'API Development', 'desc' => 'Connect your platforms and automate workflows with custom REST APIs.'],
            ['slug' => 'business-systems', 'icon' => 'chart-bar', 'title' => 'Business Systems', 'desc' => 'Custom ERP, inventory, HR, and operations management systems.'],
        ];

        $projects = array_values($this->getDetailedProjects());

        $posts = $this->getBlogPosts();
        return view('pages.home', compact('stats', 'services', 'projects', 'faqs', 'posts'));
    }

    public function services()
    {
        $faqs = $this->getFaqs();
        $stats = $this->getStats();
        $services = [
            [
                'slug' => 'custom-websites',
                'title' => 'Custom Website Development',
                'icon' => 'globe',
                'description' => 'We design and develop fast, SEO-ready, mobile-first websites using PHP Laravel and Tailwind CSS. Every site is hand-coded — no page builders, no templates.',
                'technologies' => ['PHP', 'Laravel', 'Blade', 'Tailwind CSS', 'MySQL', 'JavaScript'],
            ],
            [
                'slug' => 'web-applications',
                'title' => 'Web Application Development',
                'icon' => 'cog',
                'description' => 'From CRMs to booking systems to dashboards — we build powerful, scalable web applications that automate your operations and delight your users.',
                'technologies' => ['Laravel', 'Livewire', 'Alpine.js', 'MySQL', 'REST API', 'Tailwind CSS'],
            ],
            [
                'slug' => 'ai-tools',
                'title' => 'AI Tool Integration',
                'icon' => 'cpu',
                'description' => 'We integrate GPT-powered chatbots, AI content tools, and automation systems directly into your existing web platform or as standalone products.',
                'technologies' => ['OpenAI API', 'Laravel', 'Python', 'REST API', 'JavaScript'],
            ],
            [
                'slug' => 'ecommerce',
                'title' => 'eCommerce Development',
                'icon' => 'shopping-cart',
                'description' => 'Full-featured online stores with shopping carts, payment gateways (Stripe, PayPal), inventory management, and order tracking — all built in Laravel.',
                'technologies' => ['Laravel', 'Stripe', 'PayPal API', 'MySQL', 'Tailwind CSS'],
            ],
            [
                'slug' => 'api-development',
                'title' => 'API Development & Integration',
                'icon' => 'link',
                'description' => 'We build clean, well-documented REST APIs and integrate third‑party services — payment gateways, CRMs, shipping providers, and more.',
                'technologies' => ['Laravel Sanctum', 'REST API', 'JSON', 'Postman', 'OAuth'],
            ],
            [
                'slug' => 'business-systems',
                'title' => 'Business Management Systems',
                'icon' => 'chart-bar',
                'description' => 'Custom ERP systems, inventory trackers, HR management tools, and operations dashboards — built exactly for your workflow.',
                'technologies' => ['Laravel', 'MySQL', 'Livewire', 'Charts.js', 'Tailwind CSS'],
            ],
        ];

        return view('pages.services', compact('services', 'faqs', 'stats'));
    }

    public function serviceDetail($slug)
    {
        $allServices = [
            'custom-websites' => [
                'slug' => 'custom-websites',
                'icon' => 'globe',
                'title' => 'Custom Website Development',
                'hero_title' => 'Custom Websites Built for <span class="text-brand-blue">Performance & Conversion</span>',
                'description' => 'Fast, mobile-first websites built with Laravel & Tailwind CSS that rank and convert.',
                'long_description' => 'We design and develop bespoke websites from the ground up. No bloated page builders, no generic templates. Every line of code is written with speed, SEO, and user experience in mind, ensuring your brand stands out and drives actual customer actions.',
                'technologies' => ['PHP', 'Laravel', 'Blade', 'Tailwind CSS', 'Alpine.js', 'MySQL', 'SEO Best Practices'],
                'features' => [
                    ['title' => 'Tailored Brand Design', 'desc' => 'We create a unique design language matching your exact identity instead of adapting pre-made layouts.'],
                    ['title' => 'SEO & Speed Optimized', 'desc' => 'Ultra-fast loading speeds out of the box, with structured semantic HTML to rank higher on search engines.'],
                    ['title' => 'Responsive Mobile-First', 'desc' => 'Perfect layout adjustments for desktops, tablets, and smartphones for a flawless user experience everywhere.'],
                    ['title' => 'Clean & Scalable Code', 'desc' => 'Built on Laravel, making it simple to add features like client portals, databases, or API integrations later.']
                ],
                'faqs' => [
                    ['question' => 'Do you use WordPress or website builders?', 'answer' => 'No. We hand-code our websites using PHP Laravel and Tailwind CSS. This guarantees top-tier speed, complete design freedom, and clean, hacker-resistant security.'],
                    ['question' => 'Will I be able to update my website content?', 'answer' => 'Yes. We integrate easy-to-use custom content management panels or headless CMSs so you can update blogs, services, images, and text yourself.'],
                    ['question' => 'How long does a custom website take to build?', 'answer' => 'A standard custom website usually takes between 3 to 5 weeks from initial wireframe to live deployment.']
                ],
                'cta_title' => 'Need a Website That Actually Converts?',
                'cta_desc' => 'Let\'s build a custom high-performance website tailored to your business goals.'
            ],
            'web-applications' => [
                'slug' => 'web-applications',
                'icon' => 'cog',
                'title' => 'Web Application Development',
                'hero_title' => 'Scalable & Powerful <span class="text-brand-blue">Web Applications</span>',
                'description' => 'CRMs, administrative portals, booking platforms, and custom business management software.',
                'long_description' => 'Standard off-the-shelf software rarely fits a unique business workflow. We build custom SaaS platforms, customer relationship portals, administrative systems, and workflows that adapt to your team and grow seamlessly as you scale.',
                'technologies' => ['Laravel', 'Livewire', 'Alpine.js', 'MySQL', 'React / Vue', 'Tailwind CSS'],
                'features' => [
                    ['title' => 'Dynamic Admin Dashboards', 'desc' => 'Get real-time insights, operational tracking, and custom data charts for quick decision making.'],
                    ['title' => 'User Roles & Permissions', 'desc' => 'Granular security levels to manage employees, customers, partners, and vendors on the same system.'],
                    ['title' => 'Automated Workflows', 'desc' => 'Connect email dispatch, PDF report generation, and scheduling alerts automatically.'],
                    ['title' => 'Secure Database Architecture', 'desc' => 'Relational database designs built for maximum performance, security, and integrity.']
                ],
                'faqs' => [
                    ['question' => 'What is Laravel and why do you use it?', 'answer' => 'Laravel is the leading PHP framework. It is chosen for its robust built-in security, excellent performance, clean MVC structure, and high scalability, making it ideal for business-critical software.'],
                    ['question' => 'Can your app integrate with our existing systems?', 'answer' => 'Absolutely. We specialize in connecting platforms using custom REST APIs, databases, or webhook handlers.'],
                    ['question' => 'Do you provide maintenance for custom web apps?', 'answer' => 'Yes, we offer ongoing support and updates to ensure your web app stays secure, fast, and operational.']
                ],
                'cta_title' => 'Ready to Automate Your Business Operations?',
                'cta_desc' => 'Let\'s collaborate to map out and develop a custom system built exactly for your workflow.'
            ],
            'ai-tools' => [
                'slug' => 'ai-tools',
                'icon' => 'cpu',
                'title' => 'AI Tool Integration',
                'hero_title' => 'AI-Powered Tools & <span class="text-brand-blue">Intelligent Automation</span>',
                'description' => 'Integrate advanced OpenAI, Anthropic, or custom AI models directly into your business processes.',
                'long_description' => 'Leverage the power of generative AI to transform customer service, content generation, data analysis, and workflow automation. We integrate secure AI capabilities directly into your Laravel web apps or stand-alone tools.',
                'technologies' => ['OpenAI API', 'Anthropic Claude', 'Laravel', 'LangChain', 'Python', 'Vector DBs'],
                'features' => [
                    ['title' => 'AI Support Chatbots', 'desc' => '24/7 automated customer support trained on your company knowledge base to handle inquiries instantly.'],
                    ['title' => 'Automated Data Extraction', 'desc' => 'Summarize long documents, parse PDFs, and categorize unstructured textual data automatically.'],
                    ['title' => 'Smart Content Generation', 'desc' => 'Draft emails, write product descriptions, or generate copy instantly via custom prompt interfaces.'],
                    ['title' => 'Predictive Data Widgets', 'desc' => 'Use machine learning APIs to project customer trends, behaviors, and financial projections.']
                ],
                'faqs' => [
                    ['question' => 'Is our company data shared with public AI models?', 'answer' => 'No. We configure integrations using official enterprise APIs (like OpenAI API), which ensure that your data is encrypted, secure, and never used to train public models.'],
                    ['question' => 'Can the AI chatbot answer custom questions about our products?', 'answer' => 'Yes. We build Retrieval-Augmented Generation (RAG) systems that connect the AI chatbot to your specific catalogs, documents, or databases for precise, contextual answers.'],
                    ['question' => 'How much does running an AI integration cost?', 'answer' => 'We optimize prompts and API calls to keep operating token costs minimal, and implement usage rate limits to prevent unexpected spikes.']
                ],
                'cta_title' => 'Ready to Power Up with AI?',
                'cta_desc' => 'Harness generative AI to save hours of manual operations and delight your users.'
            ],
            'ecommerce' => [
                'slug' => 'ecommerce',
                'icon' => 'shopping-cart',
                'title' => 'eCommerce Development',
                'hero_title' => 'High-Converting <span class="text-brand-blue">eCommerce Platforms</span>',
                'description' => 'Full-featured custom online stores, smooth checkout funnels, and payment gateways.',
                'long_description' => 'Standard eCommerce platforms restrict your catalog flexibility and charge high transaction fees. We build bespoke eCommerce platforms directly in Laravel, giving you complete checkout control, custom order states, and seamless database speed.',
                'technologies' => ['Laravel', 'Stripe API', 'PayPal API', 'MySQL', 'Livewire', 'Tailwind CSS'],
                'features' => [
                    ['title' => 'Optimized Checkout Funnels', 'desc' => 'Minimize cart abandonment with lightning-fast checkouts, guest checkouts, and single-page flows.'],
                    ['title' => 'Inventory Management', 'desc' => 'Track stock levels, variants, low-stock warnings, and barcode tracking in real time.'],
                    ['title' => 'Flexible Payment Gateways', 'desc' => 'Integrate Stripe, PayPal, Apple Pay, Google Pay, and localized bank transfers securely.'],
                    ['title' => 'Promo & Discount Engines', 'desc' => 'Launch granular coupon rules, buy-one-get-one deals, and seasonal discounts easily.']
                ],
                'faqs' => [
                    ['question' => 'Why choose custom eCommerce over Shopify?', 'answer' => 'Custom eCommerce stores are faster, have zero monthly transaction fees or forced app subscriptions, and offer unlimited flexibility for subscription models, custom product builders, and layout tweaks.'],
                    ['question' => 'How do you ensure transaction security?', 'answer' => 'We build using secure SSL/TLS protocols and never store raw credit card details on your servers. We utilize Stripe Tokenization and official secure API integrations.'],
                    ['question' => 'Can it sync with accounting and shipping tools?', 'answer' => 'Yes. We can integrate third-party APIs like Quickbooks, FedEx, DHL, or shipping aggregators directly into your admin panel.']
                ],
                'cta_title' => 'Sell Without Restrictions',
                'cta_desc' => 'Launch a lightning-fast custom eCommerce store with zero platform fees.'
            ],
            'api-development' => [
                'slug' => 'api-development',
                'icon' => 'link',
                'title' => 'API Development & Integration',
                'hero_title' => 'Secure & Robust <span class="text-brand-blue">API Solutions</span>',
                'description' => 'Custom RESTful APIs, third-party integrations, and web service connections.',
                'long_description' => 'Connect separate software architectures smoothly. We develop well-documented, secure, and fast REST APIs, and integrate external services (CRMs, payment processors, maps, shipping APIs) to automate data synchronization.',
                'technologies' => ['Laravel Sanctum', 'RESTful API', 'JSON', 'OAuth 2.0', 'Postman', 'Webhooks'],
                'features' => [
                    ['title' => 'Custom RESTful APIs', 'desc' => 'Clean API controllers returning structured JSON data for mobile apps or third-party client integrations.'],
                    ['title' => 'Secure Authentication', 'desc' => 'Utilize token-based authentications like Laravel Sanctum or full OAuth protocols to protect endpoints.'],
                    ['title' => 'Third-Party Syncing', 'desc' => 'Connect Hubspot, Salesforce, shipping providers, or messaging APIs to sync datasets in real-time.'],
                    ['title' => 'API Rate Limiting', 'desc' => 'Secure systems from DDoS attacks or scrapers by setting limits on requests per minute.']
                ],
                'faqs' => [
                    ['question' => 'Do you provide API documentation?', 'answer' => 'Yes. We provide complete, well-documented API specifications using tools like Postman or Swagger, making it easy for frontend or mobile app developers to build integrations.'],
                    ['question' => 'How secure are the APIs?', 'answer' => 'We implement strict encryption, HTTPS communication, tokenized headers (Sanctum/JWT), CORS validation, and SQL injection prevention.'],
                    ['question' => 'Can you connect platforms that don\'t have modern APIs?', 'answer' => 'Usually yes. We can build custom parsing microservices, webhook listeners, or SFTP automation to bridge older software legacy architectures.']
                ],
                'cta_title' => 'Ready to Bridge Your Systems?',
                'cta_desc' => 'Let\'s build high-performance APIs to connect your platforms seamlessly.'
            ],
            'business-systems' => [
                'slug' => 'business-systems',
                'icon' => 'chart-bar',
                'title' => 'Business Management Systems',
                'hero_title' => 'Bespoke <span class="text-brand-blue">ERP & Business Software</span>',
                'description' => 'Custom inventory systems, employee portals, customer pipelines, and HR tools.',
                'long_description' => 'Generic ERP software is often expensive and filled with features you do not need. We build lightweight, fast, and exact business management systems that align perfectly with your internal operations and staffing structure.',
                'technologies' => ['Laravel', 'MySQL', 'Livewire', 'Charts.js', 'PDF Generation', 'Tailwind CSS'],
                'features' => [
                    ['title' => 'Custom ERP Platforms', 'desc' => 'Consolidate inventory, payroll, client records, and task monitoring in one single application.'],
                    ['title' => 'HR & Employee Trackers', 'desc' => 'Monitor attendance, tasks, commissions, profiles, and leaves easily.'],
                    ['title' => 'Dynamic PDF Reporting', 'desc' => 'Export invoices, payroll slips, inventory audits, and operational statements with one click.'],
                    ['title' => 'Client Portals', 'desc' => 'Provide a secure login space for your clients to view project timelines, download documents, and pay bills.']
                ],
                'faqs' => [
                    ['question' => 'Is our company business system cloud-hosted?', 'answer' => 'Yes. We configure cloud servers (AWS, DigitalOcean) with automated backups so your team can access the system securely from anywhere in the world.'],
                    ['question' => 'Can we add features to the system later?', 'answer' => 'Yes. Because we hand-code in Laravel, the architecture is fully modular. We can expand features, append databases, or connect new tools at any time.'],
                    ['question' => 'How long does a custom ERP or business system take to develop?', 'answer' => 'Depending on the depth (HR, inventory, billing, etc.), development takes between 6 to 12 weeks with step-by-step milestones.']
                ],
                'cta_title' => 'Scale Your Business Smarter',
                'cta_desc' => 'Stop fighting generic tools. Build a custom management system that works for your team.'
            ]
        ];

        if (!array_key_exists($slug, $allServices)) {
            abort(404);
        }

        $service = $allServices[$slug];
        $faqs = $service['faqs'];

        return view('pages.service-detail', compact('service', 'faqs'));
    }

    public function work()
    {
        $faqs = $this->getFaqs();
        $stats = $this->getStats();
        $projects = array_values($this->getDetailedProjects());

        $categories = ['All', 'Website', 'Web App', 'AI Tool', 'eCommerce'];

        return view('pages.work', compact('projects', 'categories', 'faqs', 'stats'));
    }

    public function workDetail($slug)
    {
        $allProjects = $this->getDetailedProjects();
        if (!array_key_exists($slug, $allProjects)) {
            abort(404);
        }
        $project = $allProjects[$slug];
        $faqs = $this->getFaqs();
        return view('pages.work-detail', compact('project', 'faqs'));
    }

    private function getDetailedProjects()
    {
        return [
            'law-firm-website' => [
                'slug' => 'law-firm-website',
                'title' => 'Law Firm Website',
                'category' => 'Website',
                'tag' => 'Legal',
                'industry' => 'Legal Services',
                'desc' => 'Modern, SEO-optimized website for an international law firm. Includes attorney profiles, practice areas, and contact form.',
                'image' => 'project-1.jpg',
                'tags' => ['Laravel', 'Tailwind CSS', 'Alpine.js', 'SEO'],
                'challenge' => 'The client, a boutique international law firm, was running on an outdated WordPress template. The site suffered from slow loading speeds (over 5 seconds), was difficult to navigate on mobile, and failed to capture potential clients looking for consultation services.',
                'solution' => 'We designed and hand-coded a custom website in PHP Laravel and Tailwind CSS. We built a fast attorney profile directory, responsive practice area cards, and a direct, secure consult inquiry funnel.',
                'results' => 'Decreased loading times to under 1.2s, saw a 45% increase in local organic search rankings (SEO) within the first 60 days, and increased direct form leads by 30%.'
            ],
            'business-management-system' => [
                'slug' => 'business-management-system',
                'title' => 'Business Management System',
                'category' => 'Web App',
                'tag' => 'Business',
                'industry' => 'Business',
                'desc' => 'Full internal ERP with employee management, task assignment, and reporting dashboard.',
                'image' => 'project-2.jpg',
                'tags' => ['Laravel', 'MySQL', 'Livewire', 'Charts.js'],
                'challenge' => 'A scaling logistics service provider was paying over $1,200/month for multiple siloed SaaS platforms. Employees had to manually transfer data between separate invoicing, scheduling, and payroll tools, leading to frequent data mismatches and overhead delays.',
                'solution' => 'We built a bespoke administrative ERP portal in Laravel and Livewire. We integrated a centralized dashboard showing employee timesheets, job task assignments, real-time client invoicing pipelines, and automatic PDF payslip generators.',
                'results' => 'Saved the client $14,000+ in annual licensing costs, completely centralized operational data, and reduced administrative task-delegation overhead by 50%.'
            ],
            'ai-chatbot-integration' => [
                'slug' => 'ai-chatbot-integration',
                'title' => 'AI Chatbot Integration',
                'category' => 'AI Tool',
                'tag' => 'AI',
                'industry' => 'Tech / SaaS',
                'desc' => "GPT-4 powered chatbot embedded into a client's website for 24/7 automated customer support.",
                'image' => 'project-3.jpg',
                'tags' => ['OpenAI API', 'Vector DB', 'Laravel', 'JS'],
                'challenge' => 'A fast-growing online booking platform was overwhelmed by customer support tickets. Repetitive queries about booking conditions and documentation delayed support responses, driving client churn.',
                'solution' => 'We integrated a GPT-4 powered support assistant via the OpenAI API. We structured their support manuals into mathematical vector embeddings (RAG) using pgvector, enabling the bot to answer platform-specific inquiries accurately in real-time.',
                'results' => 'Autonomously resolved 70% of inbound customer queries without support team handoff, providing 24/7 instant support coverage and raising customer satisfaction scores.'
            ],
            'ecommerce-store' => [
                'slug' => 'ecommerce-store',
                'title' => 'eCommerce Store',
                'category' => 'eCommerce',
                'tag' => 'Retail',
                'industry' => 'Retail',
                'desc' => 'Full eCommerce platform with Stripe integration, product catalog, cart, and order management.',
                'image' => 'project-4.jpg',
                'tags' => ['Laravel', 'Stripe API', 'MySQL', 'Tailwind CSS'],
                'challenge' => 'An online custom merchandise boutique wanted to move away from Shopify due to restrictive design templates, high app subscription fees, and transaction rate percentages that cut directly into margins.',
                'solution' => 'We built a custom eCommerce storefront in Laravel. We designed an optimized single-page checkout flow, secure Stripe payments, discount coupon code controllers, and a simple inventory manager for their admin team.',
                'results' => 'Reduced shopping cart abandonment by 18%, saved the company from Shopify transaction fees, and achieved page load speeds 3x faster than their old store.'
            ],
            'booking-system' => [
                'slug' => 'booking-system',
                'title' => 'Booking System',
                'category' => 'Web App',
                'tag' => 'Healthcare',
                'industry' => 'Healthcare',
                'desc' => 'Online appointment booking system for a clinic with real-time availability and email notifications.',
                'image' => 'project-5.jpg',
                'tags' => ['Laravel', 'Livewire', 'Tailwind CSS', 'Mail'],
                'challenge' => 'A clinic managed patient appointments manually via call-ins, leading to double-bookings, receptionist strain, and a high rate of client no-shows (around 25%).',
                'solution' => 'We developed an online scheduling application in Laravel Livewire. Patients can check real-time doctor availability and select slots. We set up automated email notifications and Twilio SMS reminders.',
                'results' => 'Reduced clinic call volumes by 40%, completely eliminated double-bookings, and reduced patient no-show rates down to 8%.'
            ],
            'inventory-management-system' => [
                'slug' => 'inventory-management-system',
                'title' => 'Inventory Management System',
                'category' => 'Web App',
                'tag' => 'Logistics',
                'industry' => 'Logistics',
                'desc' => 'Real-time inventory tracking with barcode support, low-stock alerts, and PDF reports.',
                'image' => 'project-6.jpg',
                'tags' => ['Laravel', 'MySQL', 'Charts.js', 'PDF Builder'],
                'challenge' => 'A warehouse distributor suffered from inventory discrepancies and delayed orders because stock audits were done on paper twice a week, which led to incorrect stock levels on their sales portal.',
                'solution' => 'We engineered a warehouse inventory database with barcode scanner compatibility. The system records stock changes in real-time, fires email alerts when items hit reorder thresholds, and generates one-click PDF audits.',
                'results' => 'Brought warehouse tracking accuracy to 99.8%, saved staff 15 hours of manual audits per week, and eliminated sales delay errors completely.'
            ]
        ];
    }

    public function about()
    {
        $faqs = $this->getFaqs();
        $stats = $this->getStats();
        $technologies = [
            'PHP', 'Laravel', 'MySQL', 'JavaScript', 'HTML5', 'CSS3',
            'Bootstrap', 'Tailwind CSS', 'Alpine.js', 'Livewire', 'REST API', 'Git',
        ];

        $values = [
            ['icon' => 'lightbulb', 'title' => 'Clarity Over Complexity', 'desc' => 'We build clean, maintainable systems that your team can actually use and grow with.'],
            ['icon' => 'target', 'title' => 'Results Over Aesthetics', 'desc' => 'Your site should be beautiful AND generate leads. We never sacrifice function for form.'],
            ['icon' => 'handshake', 'title' => 'Partnership Over Transaction', 'desc' => 'We treat every project like our own business is on the line. Your growth is our goal.'],
        ];

        return view('pages.about', compact('technologies', 'values', 'faqs', 'stats'));
    }

    public function contact()
    {
        $faqs = $this->getFaqs();
        $stats = $this->getStats();
        return view('pages.contact', compact('faqs', 'stats'));
    }

    private function getBlogPosts()
    {
        return [
            'clean-laravel-vs-wordpress' => [
                'slug'      => 'clean-laravel-vs-wordpress',
                'title'     => 'Why Clean Laravel Architecture Beats WordPress for Growing Agencies',
                'category'  => 'Engineering',
                'read_time' => '6 min read',
                'date'      => 'June 12, 2026',
                'author'    => 'Zaid Shahid',
                'summary'   => 'We break down why hand-coded PHP Laravel systems offer superior page speed, customized administrative control, and bulletproof security compared to bloated WordPress templates.',
                'image'     => 'blog-1.jpg',
                'content'   => '<p>For years, WordPress has been the default recommendation for business websites. It’s easy to see why: drag-and-drop page builders and thousands of plugins allow relatively non-technical developers to stand up basic pages quickly. But as your business scales, this initial ease-of-use turns into a liability of sluggish page speeds, recurring security vulnerabilities, and layout limitations.</p>

<h3>The Problem with WordPress Bloat</h3>
<p>When you use a WordPress builder (like Elementor or Divi), you are loading megabytes of unoptimized CSS and JS files for simple layout components. Combine that with 15–20 active plugins for SEO, contact forms, custom fields, and backups, and your server response time plummets. Slow page speeds damage your Google rankings (Core Web Vitals) and frustrate potential clients.</p>

<h3>Why PHP Laravel is Superior</h3>
<p>Laravel is a robust, developer-first MVC framework designed for scalability. Here is how it transforms your digital presence:</p>
<ul>
    <li><strong>Raw Speed:</strong> Laravel renders pages in fractions of a second because it only loads the exact controller code and database queries needed for that page. Out-of-the-box support for redis caching and optimized query builders ensures blazing load times.</li>
    <li><strong>Security:</strong> WordPress remains the #1 target for script bots due to insecure plugin code. Laravel includes built-in defenses against SQL Injection, Cross-Site Scripting (XSS), and CSRF attacks by default.</li>
    <li><strong>Design Freedom:</strong> Instead of fighting a pre-made template stylesheet, Laravel Blade templates coupled with Tailwind CSS allow us to write tailored, pixel-perfect UI experiences that load instantly.</li>
</ul>

<h3>The Bottom Line</h3>
<p>If you only need a simple, single-page brochure site, WordPress might suffice. But if your goal is an ultra-fast, modular website that can later integrate customer pipelines, client portal logins, or AI workflows, building in Laravel from Day 1 is the smartest investment you can make.</p>'
            ],
            'laravel-openai-integration-guide' => [
                'slug'      => 'laravel-openai-integration-guide',
                'title'     => 'Integrating GPT-4 & LLMs into Laravel Web Apps: A Practical Guide',
                'category'  => 'AI & Automation',
                'read_time' => '8 min read',
                'date'      => 'May 28, 2026',
                'author'    => 'Zaid Shahid',
                'summary'   => 'Learn the step-by-step process of securely connecting OpenAI\'s API to your Laravel application, including vector database setups, prompt routing, and cost management.',
                'image'     => 'blog-2.jpg',
                'content'   => '<p>Generative AI is no longer a gimmick. Modern companies are integrating OpenAI APIs and local LLMs directly into their operations to automate data processing, summarize text, and power automated support agents. Laravel\'s modular design makes it the perfect framework to bridge these cutting-edge AI models with your company\'s business logic.</p>

<h3>Establishing a Secure Connection</h3>
<p>The first rule of API integrations: never expose your private API tokens. Laravel makes environment variables management simple. By registering the OpenAI SDK inside a Service Provider and utilizing `.env` variables, you can instantiate the AI client dynamically across your jobs and controllers.</p>

<pre><code>// Example OpenAI client call inside a Laravel Job
$response = OpenAI::client(config(\'services.openai.key\'))
    ->chat()
    ->create([
        \'model\' => \'gpt-4-turbo\',
        \'messages\' => [
            [\'role\' => \'system\', \'content\' => \'You are a helpful customer support agent.\'],
            [\'role\' => \'user\', \'content\' => $message]
        ]
    ]);
</code></pre>

<h3>Enhancing Answers with RAG (Retrieval-Augmented Generation)</h3>
<p>Raw LLMs don’t know your business data. To make an AI helper answer custom questions about your services, we implement Retrieval-Augmented Generation (RAG). We convert your policy PDFs, product catalogues, and documentation pages into mathematical vectors (embeddings) and store them in a vector database like Pinecone or pgvector. When a customer inputs a question, we query the vector DB first, extract relevant context, and append it to the prompt sent to GPT-4. This guarantees accurate, personalized, and hacker-safe responses.</p>

<h3>Managing Execution and Token Costs</h3>
<p>API responses can be slow and expensive if not managed properly. To keep your application responsive, always dispatch AI queries asynchronously using <strong>Laravel Queues</strong>. Furthermore, implement rate limits and token count boundaries inside your validation layer to prevent API cost spikes from unexpected client requests.</p>'
            ],
            'building-custom-crm-laravel' => [
                'slug'      => 'building-custom-crm-laravel',
                'title'     => 'How to Build a Custom CRM that Your Sales Team Will Actually Use',
                'category'  => 'Business Systems',
                'read_time' => '5 min read',
                'date'      => 'April 15, 2026',
                'author'    => 'Zaid Shahid',
                'summary'   => 'Generic CRM software is expensive and rarely fits unique sales pipelines. Here\'s how building a modular CRM using Livewire and Alpine.js drives higher staff adoption.',
                'image'     => 'blog-3.jpg',
                'content'   => '<p>Most businesses start tracking leads using a simple spreadsheet. As they grow, they sign up for heavy CRMs like Salesforce or HubSpot. However, after spending thousands of dollars on setup and monthly seats, they realize their employees are ignoring the tool because it is too complex and clunky for their actual daily tasks.</p>

<h3>The Failure of Off-the-Shelf CRMs</h3>
<p>Generic CRMs are bloated because they try to satisfy every industry at once. Your team is forced to click through dozens of irrelevant tabs, manually input data that should be automated, and deal with slow loading speeds. When software is frustrating, employees revert to spreadsheets or notepad files, causing client data fragmentation.</p>

<h3>Building Custom & Modular CRMs</h3>
<p>A custom CRM built on Laravel is designed to fit your existing sales pipeline like a glove. Rather than adapting your business to the software, the software adapts to you. Here is why custom builds win:</p>
<ul>
    <li><strong>Only the Features You Need:</strong> A clean, intuitive layout with your exact sales stages, lead forms, and communication logs. No unused tabs or confusing inputs.</li>
    <li><strong>Automated Data Syncing:</strong> Automatically pull lead data from your contact form, social campaigns, and emails directly into the CRM database with no manual transcription needed.</li>
    <li><strong>Zero Seat Fees:</strong> Stop paying monthly licensing fees for every new employee. Since you own the system, you can add unlimited users at no extra cost.</li>
</ul>

<h3>Creating Interactive Dashboards with Livewire</h3>
<p>By leveraging Laravel Livewire and Alpine.js, we can build a fully responsive, real-time lead pipeline dashboard (like a kanban board) that lets users drag and drop lead cards across stages seamlessly. The page updates instantly in the database without requiring full browser reloads, providing a desktop-app-like experience directly in the web browser.</p>'
            ]
        ];
    }

    public function aiSolutions()
    {
        $faqs = $this->getFaqs();
        $stats = $this->getStats();
        return view('pages.ai-solutions', compact('faqs', 'stats'));
    }

    public function blog()
    {
        $posts = $this->getBlogPosts();
        $faqs = $this->getFaqs();
        $stats = $this->getStats();
        return view('pages.blog', compact('posts', 'faqs', 'stats'));
    }

    public function blogDetail($slug)
    {
        $posts = $this->getBlogPosts();
        if (!array_key_exists($slug, $posts)) {
            abort(404);
        }
        $post = $posts[$slug];
        $faqs = $this->getFaqs();
        return view('pages.blog-detail', compact('post', 'posts', 'faqs'));
    }

    public function privacy()
    {
        $faqs = $this->getFaqs();
        $stats = $this->getStats();
        return view('pages.privacy', compact('faqs', 'stats'));
    }

    public function terms()
    {
        $faqs = $this->getFaqs();
        $stats = $this->getStats();
        return view('pages.terms', compact('faqs', 'stats'));
    }

    public function sitemap()
    {
        $faqs = $this->getFaqs();
        $stats = $this->getStats();
        $projects = array_values($this->getDetailedProjects());
        $services = [
            ['slug' => 'custom-websites', 'title' => 'Custom Website Development'],
            ['slug' => 'web-applications', 'title' => 'Web Application Development'],
            ['slug' => 'ai-tools', 'title' => 'AI Tool Integration'],
            ['slug' => 'ecommerce', 'title' => 'eCommerce Development'],
            ['slug' => 'api-development', 'title' => 'API Development & Integration'],
            ['slug' => 'business-systems', 'title' => 'Business Management Systems'],
        ];
        $posts = $this->getBlogPosts();
        return view('pages.sitemap', compact('faqs', 'stats', 'projects', 'services', 'posts'));
    }

    public function sitemapXml()
    {
        $urls = [
            ['loc' => route('home'), 'lastmod' => now()->startOfMonth()->toAtomString(), 'changefreq' => 'weekly', 'priority' => '1.0'],
            ['loc' => route('services'), 'lastmod' => now()->startOfMonth()->toAtomString(), 'changefreq' => 'weekly', 'priority' => '0.8'],
            ['loc' => route('ai-solutions'), 'lastmod' => now()->startOfMonth()->toAtomString(), 'changefreq' => 'weekly', 'priority' => '0.8'],
            ['loc' => route('work'), 'lastmod' => now()->startOfMonth()->toAtomString(), 'changefreq' => 'weekly', 'priority' => '0.8'],
            ['loc' => route('blog'), 'lastmod' => now()->startOfWeek()->toAtomString(), 'changefreq' => 'daily', 'priority' => '0.8'],
            ['loc' => route('about'), 'lastmod' => now()->startOfMonth()->toAtomString(), 'changefreq' => 'monthly', 'priority' => '0.5'],
            ['loc' => route('contact'), 'lastmod' => now()->startOfMonth()->toAtomString(), 'changefreq' => 'monthly', 'priority' => '0.5'],
            ['loc' => route('privacy'), 'lastmod' => now()->startOfMonth()->toAtomString(), 'changefreq' => 'monthly', 'priority' => '0.3'],
            ['loc' => route('terms'), 'lastmod' => now()->startOfMonth()->toAtomString(), 'changefreq' => 'monthly', 'priority' => '0.3'],
            ['loc' => route('sitemap'), 'lastmod' => now()->startOfMonth()->toAtomString(), 'changefreq' => 'monthly', 'priority' => '0.3'],
        ];

        // Add services
        $services = ['custom-websites', 'web-applications', 'ai-tools', 'ecommerce', 'api-development', 'business-systems'];
        foreach ($services as $service) {
            $urls[] = [
                'loc' => route('services.detail', $service),
                'lastmod' => now()->startOfMonth()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.7'
            ];
        }

        // Add works
        $projects = array_keys($this->getDetailedProjects());
        foreach ($projects as $project) {
            $urls[] = [
                'loc' => route('work.detail', $project),
                'lastmod' => now()->startOfMonth()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.6'
            ];
        }

        // Add blog posts
        $posts = array_keys($this->getBlogPosts());
        foreach ($posts as $post) {
            $urls[] = [
                'loc' => route('blog.detail', $post),
                'lastmod' => now()->startOfWeek()->toAtomString(),
                'changefreq' => 'weekly',
                'priority' => '0.6'
            ];
        }

        return response()->view('pages.sitemap-xml', compact('urls'))->header('Content-Type', 'text/xml');
    }
}
