<?php
$site = [
    'name' => 'AMA Vision',
    'email' => 'aman@amavision.in',
    'email2' => 'nitish@amavision.in',
    'instagram' => 'https://www.instagram.com/amavision__/',
    'instagram_handle' => '@amavision__',
    'location' => 'Delhi NCR + Pan India Execution',
];
function img($id, $w = 1600)
{
    if (!$id)
        return '';
    if (strpos($id, '/') !== false || strpos($id, '.') !== false) {
        $filePath = __DIR__ . '/../' . ltrim($id, '/');
        $v = file_exists($filePath) ? '?v=' . filemtime($filePath) : '';
        return $id . $v;
    }
    return "https://images.unsplash.com/$id?auto=format&fit=crop&w=$w&q=70";
}
$IMG = [
    'banner' => 'assets/img/banner/banner-2.jpg',
    'stage' => 'assets/img/banner/banner-4.jpg',
    'conf' => 'assets/img/banner/banner-5.jpg',
    'crowd' => 'assets/img/banner/banner-6.jpg',
    'conf2' => 'assets/img/banner/banner-1.jpg',
    'cam' => 'assets/img/banner/banner-3.jpg',
    'film' => 'assets/img/banner/banner-4.jpg',
    'cam2' => 'assets/img/banner/banner-5.jpg',
    'party' => 'assets/img/banner/banner-6.jpg',
    'concert' => 'assets/img/banner/banner-2.jpg',
    'conf3' => 'assets/img/portfolio/iew-gail-2.jpg',
    'lights' => 'assets/img/portfolio/iew-igl-2.jpg',
    'cam3' => 'assets/img/portfolio/exl-2.jpg',
    // Service visuals: real AMA Vision event/production photos (replace any file in assets/img to swap)
    'svc-event' => 'assets/img/banner/banner-5.jpg',
    'svc-creative' => 'assets/img/banner/banner-2.jpg',
    'svc-content' => 'assets/img/about-img.jpg',
    'svc-post' => 'assets/img/banner/banner-1.jpg',
    'svc-experience' => 'assets/img/portfolio/red-fort.jpg',
    'svc-management' => 'assets/img/portfolio/gridcon.jpg',
];
$SERVICES = [
    'event-production' => [
        'Event Production & Execution',
        'svc-event',
        'Execution-led event production — from brief and run of show to stage, AV and the content the event generates.',
        ['Corporate events and conferences', 'Government and public-sector events', 'Summits, conclaves and institutional events', 'Exhibitions, trade shows and pavilions', 'Product launches and brand launches', 'Award ceremonies and recognition events', 'Experiential events and branded experiences', 'Live event coverage and show-day content', 'Stage, AV, décor, manpower and production coordination', 'On-ground vendor and logistics coordination']
    ],
    'creative-production' => [
        'Creative Production',
        'svc-creative',
        'Ideas shaped into a clear creative direction, a production plan and a visual treatment the whole crew can execute.',
        ['Creative direction', 'Concept development', 'Campaign ideation', 'Event concepts and experience design', 'Scriptwriting and storyboarding', 'Visual treatment and production design', 'Creative decks and production planning']
    ],
    'content-production' => [
        'Content Production',
        'svc-content',
        'Films, photography and social-first packages — one shoot planned to feed every platform.',
        ['Corporate films', 'Brand films and campaign films', 'Documentary and documentary-style films', 'Product and service films', 'Event films and aftermovies', 'Interviews and testimonial films', 'Photography and BTS coverage', 'Social-first content packages', 'Creator-ready content']
    ],
    'post-production' => [
        'Post-Production',
        'svc-post',
        'From first frame to final master — edit, grade, sound and versioning, including same-day event edits.',
        ['Professional video editing', 'Short-form / Reels editing', 'Motion graphics and titles', 'Color correction and color grading', 'Sound design and audio finishing', 'Versioning for multiple platforms', 'Same-day / fast-turnaround event edits']
    ],
    'experiences-activations' => [
        'Experiences & Activations',
        'svc-experience',
        'Brand moments people walk into, interact with and share — designed for the room and for social.',
        ['Brand activations', 'Experiential zones', 'Audience engagement formats', 'Interactive installations and content moments', 'Mall and retail experiences', 'Influencer / creator-led activations', 'Event content ecosystems designed for social distribution']
    ],
    'production-management' => [
        'Production Management',
        'svc-management',
        'The engine behind every project — crew, equipment, vendors, logistics and quality control under one accountable team.',
        ['End-to-end project management', 'Crew planning and management', 'Equipment planning', 'Location and logistics coordination', 'Vendor coordination', 'Run-of-show support', 'On-ground production supervision', 'Quality control and final delivery']
    ],
];
$EVENTS = [
    ['G20 Summit', 'Government / international summit', 'Large-scale, protocol-sensitive production experience.'],
    ['India Energy Week 2024', 'Energy / government ecosystem', 'Held in Goa, 6–9 February 2024.'],
    ['India Energy Week 2025', 'Energy / corporate / government', 'Held at Yashobhoomi, New Delhi, 11–14 February 2025.'],
    ['India Energy Week 2026', 'Energy / global industry', 'Fourth edition, Goa, 27–30 January 2026 — GAIL and Petronet ecosystem.'],
    ['GRIDCON 2025', 'Power / energy / exhibition & conference', "POWERGRID's international conference-cum-exhibition, 9–11 March 2025, Yashobhoomi."],
    ['EXL — Three-Day Corporate Event', 'Corporate / leadership / employee experience', 'Three-day event experience.'],
    ['Times Black × ICICI Bank — Red Fort', 'Luxury / corporate / experiential', 'A premium experiential evening at the Red Fort, 2025.'],
    ['BRICS', 'Government / international event', 'International-event credential, India.'],
    ['Indus Food 2025', 'Food & Beverage Exhibition', 'International food trade exhibition featuring leading brands and industry professionals.'],
    ['Indus Food 2026', 'Food & Beverage Exhibition', 'Global food and beverage trade event connecting brands, buyers, and industry professionals.'],
    ['India Expo', 'Exhibition / event production', 'Exhibition and event-production environment.'],
];
$INDUSTRIES = [
    ['Government & Public Sector', 'Summits, official events, institutional communications, documentaries and high-protocol productions.', 'assets/img/industries/government.jpg'],
    ['Energy & Infrastructure', 'Energy conferences, exhibitions, stakeholder events, corporate films and sector storytelling.', 'assets/img/industries/energy.jpg'],
    ['Corporate & Enterprise', 'Conferences, leadership meets, internal events, brand films, launches and employee experiences.', 'assets/img/industries/corporate.jpg'],
    ['Real Estate', 'Property storytelling, project films, launch events, digital content and experiential marketing.', 'assets/img/industries/real-estate.jpg'],
    ['Education', 'School and institutional films, event coverage, campus stories, admissions content and social assets.', 'assets/img/industries/education.jpg'],
    ['FMCG & Consumer Brands', 'Campaign content, product stories, social-first videos, activations and retail content.', 'assets/img/industries/fmcg.jpg'],
    ['Technology', 'Product storytelling, corporate content, conferences, launches, demos and digital campaigns.', 'assets/img/industries/technology.jpg'],
    ['Fashion & Lifestyle', 'Campaign shoots, lookbook-style films, social content, events and brand storytelling.', 'assets/img/industries/fashion.jpg'],
    ['Retail & Experiential', 'Mall activations, store experiences, launches, footfall campaigns and content.', 'assets/img/industries/retail.jpg'],
    ['Hospitality', 'Hotel, café, restaurant and lifestyle content, events, brand experiences and promotional films.', 'assets/img/industries/hospitality.jpg'],
    ['Entertainment', 'Event coverage, promotional content, social-first edits, artist/event content and visual campaigns.', 'assets/img/industries/entertainment.jpg'],
    ['Global Summits & International Events', 'BRICS, G20 and high-protocol international summits, official events, delegate experiences and large-scale event productions.', 'assets/img/portfolio/g20.jpg'],
];
$WHY = [
    ['End-to-end', 'Creative, production and post-production under one roof.'],
    ['Execution-led', 'Understands timelines, crew, vendors, locations, logistics and delivery.'],
    ['Scalable', 'Production resources scale with project size and geography.'],
    ['Content-first', 'One production creates multiple useful assets across platforms.'],
    ['Pan-India', 'Delhi-NCR base with capability to execute across India.'],
    ['Client-focused', 'Clear communication, accountable coordination and practical solutions.'],
];



$works = [

    [
        'title' => 'G20 Summit',
        'category' => 'Events',
        'categories' => ['Events', 'Documentaries'],
        'year' => '2023',
        'client' => 'Government / International',
        'location' => 'New Delhi',
        'description' => 'Large-scale, protocol-sensitive production experience.',
        'image' => 'assets/img/portfolio/g20.jpg',
        'gallery' => [
            'assets/img/portfolio/g20.jpg',
            'assets/img/portfolio/g20-02.jpg',
            'assets/img/portfolio/g20-03.jpg',
            'assets/img/portfolio/g20-04.jpg',
        ],
    ],

    [
        'title' => 'India Energy Week',
        'category' => 'Events',
        'categories' => ['Events', 'Content'],
        'year' => '',
        'client' => 'GAIL, Petronet & IGL',
        'location' => '',
        'description' => 'Fourth edition of India Energy Week - event production and on-ground content.',
        'image' => 'assets/img/portfolio/iew-gail.jpg',
        'gallery' => [
            'assets/img/portfolio/iew-gail-2.jpg',
            'assets/img/portfolio/iew-gail-3.jpg',
            'assets/img/portfolio/iew-igl.jpg',
            'assets/img/portfolio/iew-igl-2.jpg',
            'assets/img/portfolio/iew-petronet.jpg',
            'assets/img/portfolio/iew-petronet-2.jpg',
        ],
    ],
    [
        'title' => 'BAE Systems',
        'category' => 'Events',
        'categories' => ['Events', 'Brand Films'],
        'year' => '2025',
        'client' => 'BAE Systems',
        'location' => 'New Delhi',
        'description' => 'Event production and content for BAE Systems.',
        'image' => 'assets/img/portfolio/bae-system.jpg',
        'gallery' => [
            'assets/img/portfolio/bae-system.jpg',
            'assets/img/portfolio/bae-system-2.jpg',
            'assets/img/portfolio/bae-system-3.jpg',
        ],
    ],

    [
        'title' => 'BRICS',
        'category' => 'Events',
        'categories' => ['Events', 'Documentaries'],
        'year' => '',
        'client' => 'Government / International',
        'location' => 'India',
        'description' => 'International event credential and high-level protocol production in India.',
        'image' => 'assets/img/portfolio/brics.jpg',
        'gallery' => [
            'assets/img/portfolio/brics.jpg',
            'assets/img/portfolio/brics-2.jpg',
            'assets/img/portfolio/brics-3.jpg',
            'assets/img/portfolio/brics-4.jpg',
        ],
    ],
    [
        'title' => 'EXL Three-Day Event',
        'category' => 'Events',
        'categories' => ['Events', 'Experiences'],
        'year' => '2025',
        'client' => 'Corporate',
        'location' => 'Gurgaon',
        'description' => 'Three-day leadership and employee experience.',
        'image' => 'assets/img/portfolio/exl-2.jpg',
        'gallery' => [
            'assets/img/portfolio/exl-2.jpg',
            'assets/img/portfolio/exl.jpg',
            'assets/img/portfolio/exl-3.jpg',
            'assets/img/portfolio/exl-4.jpg',
        ],
    ],

    [
        'title' => 'GRIDCON 2025',
        'category' => 'Events',
        'categories' => ['Events', 'Brand Films'],
        'year' => '2025',
        'client' => 'POWERGRID',
        'location' => 'Yashobhoomi, New Delhi',
        'description' => 'International conference-cum-exhibition - production and content.',
        'image' => 'assets/img/portfolio/gridcon.jpg',
        'gallery' => [
            'assets/img/portfolio/gridcon.jpg',
            'assets/img/portfolio/gridcon-2.jpg',
            'assets/img/portfolio/gridcon-3.jpg',
            'assets/img/portfolio/gridcon-4.jpg',
        ],
    ],

    [
        'title' => 'Times Black x ICICI Bank',
        'category' => 'Experiences',
        'categories' => ['Experiences', 'Brand Films'],
        'year' => '2025',
        'client' => 'Luxury experiential',
        'location' => 'Red Fort, Delhi',
        'description' => 'A premium experiential evening at the Red Fort.',
        'image' => 'assets/img/portfolio/red-fort.jpg',
        'gallery' => [
            'assets/img/portfolio/red-fort.jpg',
            'assets/img/portfolio/tb-icici-bank-2.jpg',
            'assets/img/portfolio/tb-icici-bank-3.jpg',
            'assets/img/portfolio/tb-icici-bank-4.jpg',
        ],
    ],
    [
        'title' => 'Mela Mela Anime Japan',
        'category' => 'Events',
        'categories' => ['Events', 'Content'],
        'year' => '',
        'client' => '',
        'location' => 'Japan',
        'description' => 'Anime and Japanese pop-culture event production and on-ground content.',
        'image' => 'assets/img/portfolio/mela-mela-anime-japan.jpg',
        'gallery' => [
            'assets/img/portfolio/mela-mela-anime-japan.jpg',
            'assets/img/portfolio/mela-mela-anime-japan-2.jpg',
            'assets/img/portfolio/mela-mela-anime-japan-3.jpg',
            'assets/img/portfolio/mela-mela-anime-japan-4.jpg',
        ],
    ],
    [
        'title' => 'Nykaaland',
        'category' => 'Events',
        'categories' => ['Events', 'Content'],
        'year' => '',
        'client' => 'Nykaa',
        'location' => '',
        'description' => 'Beauty and lifestyle event production and on-ground content.',
        'image' => 'assets/img/portfolio/nykaaland.jpg',
        'gallery' => [
            'assets/img/portfolio/nykaaland.jpg',
            'assets/img/portfolio/nykaaland-2.jpg',
            'assets/img/portfolio/nykaaland-3.jpg',
        ],
    ],
    // [
    //     'title' => 'Indus Food 2026',
    //     'category' => 'Content',
    //     'categories' => ['Content', 'Campaigns'],
    //     'year' => '2026',
    //     'client' => 'Exhibition / Trade',
    //     'location' => 'India Expo Mart',
    //     'description' => 'On-ground content across a multi-hall trade show.',
    //     'image' => 'assets/img/portfolio/indus-food-2026.jpg',
    //     'gallery' => [
    //         'assets/img/portfolio/indus-food-2026.jpg',
    //     ],
    // ],

    // [
    //     'title' => 'India Expo',
    //     'category' => 'Content',
    //     'categories' => ['Content', 'Events', 'Campaigns'],
    //     'year' => '2024',
    //     'client' => 'Exhibition / Trade',
    //     'location' => 'Yashobhoomi · Pragati Maidan · India Expo Mart',
    //     'description' => 'Exhibition and event production across Yashobhoomi, Pragati Maidan and India Expo Mart, Greater Noida.',
    //     'image' => 'assets/img/portfolio/india-expo.jpg',
    //     'gallery' => [
    //         'assets/img/portfolio/india-expo.jpg',
    //     ],
    // ],

];


/* =========================================
   CREATE UNIQUE FILTER CATEGORIES
========================================= */

$filterCategories = [];
foreach ($works as $work) {
    foreach ($work['categories'] as $category) {
        if (!in_array($category, $filterCategories)) {
            $filterCategories[] = $category;
        }
    }
}
?>