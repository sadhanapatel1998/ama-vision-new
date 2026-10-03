<?php
$site = [
  'name' => 'AMA Vision',
  'email' => 'info@amavision.in',      // [INSERT OFFICIAL EMAIL]
  'phone' => '+91  98765 43210',         // [INSERT OFFICIAL PHONE]
  'instagram' => 'https://instagram.com/', // [INSERT OFFICIAL INSTAGRAM]
  'location' => 'Delhi NCR • Pan-India execution',
];
function img($id, $w = 1600) {
  if (!$id) return '';
  if (strpos($id, '/') !== false || strpos($id, '.') !== false) {
    $filePath = __DIR__ . '/../' . ltrim($id, '/');
    $v = file_exists($filePath) ? '?v=' . filemtime($filePath) : '';
    return $id . $v;
  }
  return "https://images.unsplash.com/$id?auto=format&fit=crop&w=$w&q=70";
}
$IMG = [
  'banner' => 'assets/img/banner/banner-2.jpg',
  'stage' => 'photo-1540575467063-178a50c2df87', 'conf' => 'photo-1505373877841-8d25f7d46678',
  'crowd' => 'photo-1492684223066-81342ee5ff30', 'conf2' => 'photo-1511578314322-379afb476865',
  'cam' => 'photo-1485846234645-a62644f84728', 'film' => 'photo-1478720568477-152d9b164e26',
  'cam2' => 'photo-1492691527719-9d1e07e534b4', 'party' => 'photo-1533174072545-7a4b6ad7a6c3',
  'concert' => 'photo-1501281668745-f7f57925c3b4', 'conf3' => 'photo-1515187029135-18ee286d815b',
  'lights' => 'photo-1470229722913-7c0e2dbbafd3', 'cam3' => 'photo-1492691527719-9d1e07e534b4',
];
$SERVICES = [
 'event-production' => ['Event Production & Execution','stage','Execution-led event production — from brief and run of show to stage, AV and the content the event generates.',
   ['Corporate events and conferences','Government and public-sector events','Summits, conclaves and institutional events','Exhibitions, trade shows and pavilions','Product launches and brand launches','Award ceremonies and recognition events','Experiential events and branded experiences','Live event coverage and show-day content','Stage, AV, décor, manpower and production coordination','On-ground vendor and logistics coordination']],
 'creative-production' => ['Creative Production','film','Ideas shaped into a clear creative direction, a production plan and a visual treatment the whole crew can execute.',
   ['Creative direction','Concept development','Campaign ideation','Event concepts and experience design','Scriptwriting and storyboarding','Visual treatment and production design','Creative decks and production planning']],
 'content-production' => ['Content Production','cam','Films, photography and social-first packages — one shoot planned to feed every platform.',
   ['Corporate films','Brand films and campaign films','Documentary and documentary-style films','Product and service films','Event films and aftermovies','Interviews and testimonial films','Photography and BTS coverage','Social-first content packages','Creator-ready content']],
 'post-production' => ['Post-Production','cam3','From first frame to final master — edit, grade, sound and versioning, including same-day event edits.',
   ['Professional video editing','Short-form / Reels editing','Motion graphics and titles','Color correction and color grading','Sound design and audio finishing','Versioning for multiple platforms','Same-day / fast-turnaround event edits']],
 'experiences-activations' => ['Experiences & Activations','party','Brand moments people walk into, interact with and share — designed for the room and for social.',
   ['Brand activations','Experiential zones','Audience engagement formats','Interactive installations and content moments','Mall and retail experiences','Influencer / creator-led activations','Event content ecosystems designed for social distribution']],
 'production-management' => ['Production Management','conf2','The engine behind every project — crew, equipment, vendors, logistics and quality control under one accountable team.',
   ['End-to-end project management','Crew planning and management','Equipment planning','Location and logistics coordination','Vendor coordination','Run-of-show support','On-ground production supervision','Quality control and final delivery']],
];
$EVENTS = [
 ['G20 Summit','Government / international summit','Large-scale, protocol-sensitive production experience.'],
 ['India Energy Week 2024','Energy / government ecosystem','Held in Goa, 6–9 February 2024.'],
 ['India Energy Week 2025','Energy / corporate / government','Held at Yashobhoomi, New Delhi, 11–14 February 2025.'],
 ['India Energy Week 2026','Energy / global industry','Fourth edition, Goa, 27–30 January 2026 — GAIL and Petronet ecosystem.'],
 ['GRIDCON 2025','Power / energy / exhibition & conference',"POWERGRID's international conference-cum-exhibition, 9–11 March 2025, Yashobhoomi."],
 ['EXL — Three-Day Corporate Event','Corporate / leadership / employee experience','Three-day event experience.'],
 ['Times Black × ICICI Bank — Red Fort','Luxury / corporate / experiential','A premium experiential evening at the Red Fort, 2025.'],
 ['BRICS','Government / international event','International-event credential.'],
 ['Indus Food','Exhibition / trade','Large exhibition and trade environment.'],
 ['DLF CyberHub','Retail / lifestyle / experiential','Brand and experiential environment.'],
 ['India Expo','Exhibition / event production','Exhibition and event-production environment.'],
];
$INDUSTRIES = [
 ['Government & Public Sector','Summits, official events, institutional communications, documentaries and high-protocol productions.','assets/img/industries/government.jpg'],
 ['Energy & Infrastructure','Energy conferences, exhibitions, stakeholder events, corporate films and sector storytelling.','assets/img/industries/energy.jpg'],
 ['Corporate & Enterprise','Conferences, leadership meets, internal events, brand films, launches and employee experiences.','assets/img/industries/corporate.jpg'],
 ['Real Estate','Property storytelling, project films, launch events, digital content and experiential marketing.','assets/img/industries/real-estate.jpg'],
 ['Education','School and institutional films, event coverage, campus stories, admissions content and social assets.','assets/img/industries/education.jpg'],
 ['FMCG & Consumer Brands','Campaign content, product stories, social-first videos, activations and retail content.','assets/img/industries/fmcg.jpg'],
 ['Technology','Product storytelling, corporate content, conferences, launches, demos and digital campaigns.','assets/img/industries/technology.jpg'],
 ['Fashion & Lifestyle','Campaign shoots, lookbook-style films, social content, events and brand storytelling.','assets/img/industries/fashion.jpg'],
 ['Retail & Experiential','Mall activations, store experiences, launches, footfall campaigns and content.','assets/img/industries/retail.jpg'],
 ['Hospitality','Hotel, café, restaurant and lifestyle content, events, brand experiences and promotional films.','assets/img/industries/hospitality.jpg'],
 ['Entertainment','Event coverage, promotional content, social-first edits, artist/event content and visual campaigns.','assets/img/industries/entertainment.jpg'],
];
$WHY = [
 ['End-to-end','Creative, production and post-production under one roof.'],
 ['Execution-led','Understands timelines, crew, vendors, locations, logistics and delivery.'],
 ['Scalable','Production resources scale with project size and geography.'],
 ['Content-first','One production creates multiple useful assets across platforms.'],
 ['Pan-India','Delhi-NCR base with capability to execute across India.'],
 ['Client-focused','Clear communication, accountable coordination and practical solutions.'],
];
