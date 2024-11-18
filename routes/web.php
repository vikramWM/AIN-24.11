<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\HomeController;
use App\Models\Add;
use App\Models\Order;
use App\Models\User;
use App\Models\FeedbackOrder;
use App\Models\Leads;
use App\Http\Controllers\CallController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\WhatsappController;
use App\Http\Controllers\ApiControllerForLetsLearn;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Cache;

use Carbon\Carbon;


function generateSchema($title, $description, $canonical, $priceRanges)
{
  return json_encode([
    "@context" => "https://schema.org/",
    "@type" => "Product",
    "name" => $title,
    "description" => $description,
    "brand" => [
      "@type" => "EducationalOrganization",
      "name" => "Assignment In Need",
      "logo" => "https://www.assignnmentinneed.com/assets/media/avatars/assignment_logo.png"
    ],
    "offers" => array_map(function ($range) {
      return [
        "@type" => "AggregateOffer",
        "url" => "https://www.assignnmentinneed.com/Offers",
        "priceCurrency" => $range['currency'],
        "lowPrice" => $range['low'],
        "highPrice" => $range['high'],
        "offerCount" => "6"
      ];
    }, $priceRanges),
    "aggregateRating" => [
      "@type" => "AggregateRating",
      "ratingValue" => "4.5",
      "ratingCount" => "100" // Adjust this count as needed
    ],
    "url" => $canonical
  ], JSON_UNESCAPED_SLASHES);
}

function generateFaqSchema(array $faqEntries)
{
  $mainEntity = array_map(function ($entry) {
    return [
      "@type" => "Question",
      "name" => $entry['question'],
      "acceptedAnswer" => [
        "@type" => "Answer",
        "text" => $entry['answer']
      ]
    ];
  }, $faqEntries);

  return json_encode([
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => $mainEntity
  ]);
}


function generateWebsiteSchema()
{
  return json_encode([
    "@context" => "https://schema.org",
    "@type" => "WebSite",
    "name" => "Assignment In Need",
    "url" => "https://www.assignnmentinneed.com",
    "potentialAction" => [
      "@type" => "SearchAction",
      "target" => "https://www.assignnmentinneed.com/search?q={search_term_string}",
      "query-input" => "required name=search_term_string"
    ]
  ]);
}

// Function to generate organization schema
function generateOrganizationSchema()
{
  return json_encode([
    "@context" => "https://schema.org",
    "@type" => "Organization",
    "name" => "Assignment In Need",
    "url" => "https://www.assignnmentinneed.com",
    "logo" => "https://www.assignnmentinneed.com/assets/media/avatars/assignment_logo.png",
    "contactPoint" => [
      "@type" => "ContactPoint",
      "telephone" => "+44 7435256433",
      "contactType" => "Customer Service",
      "availableLanguage" => ["English"]
    ],
    "sameAs" => [
      "https://www.facebook.com/assignmentinneed",
      "https://www.instagram.com/p/CXN_t7ALYGH/",
      "https://twitter.com/assignment_in"
    ]
  ]);
}


// Route::get('/', function () {
//   $data = [
//     'title' => 'Assignment help Online Writing Service- 40% Off & Get Free CV',
//     'description' => 'Get #1 Online Assignment writing help services from PHD experts! Enjoy 24/7 assistance for essays, research papers, homework help and more By Assignment In Need',
//     'keyword' => 'assignment writing help, assignment writing service, assignment writing services',
//     'canonical' => 'https://www.assignnmentinneed.com',
//     'website' => generateWebsiteSchema(),
//     'org' => generateOrganizationSchema(),
//   ];
//   $priceRanges = [
//     ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
//     ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
//   ];

//   $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);
//   $data['Faqschema'] = generateFaqSchema([
//     [
//       "question" => "What types of academic help can you provide for students around the world?",
//       "answer" => "We offer a wide range of academic assistance including assignment writing help, dissertation writing support, essay writing services, research paper help, and homework assistance. Whether you\'re in the UK, Canada, Australia, Spain, Malaysia, or the UAE, our expert team is here to support your academic needs."
//     ],
//     [
//       "question" => "How do I get started with your assignment help services?",
//       "answer" => "Getting started is easy! Simply select the type of service you need—whether it\'s assignment writing, dissertation help, or essay assistance—provide the necessary details about your assignment, and our team will match you with a qualified expert. We ensure timely delivery and high-quality work."
//     ],
//     [
//       "question" => "Can you help with urgent assignment requests?",
//       "answer" => "Yes, we offer expedited services for urgent assignment requests. Whether you need help with an assignment, homework, or a research paper on a tight deadline, our team is equipped to handle quick turnarounds while maintaining quality."
//     ],
//     [
//       "question" => "What makes your dissertation writing services stand out?",
//       "answer" => "Our dissertation writing services stand out due to our commitment to academic excellence and personalized support. We provide comprehensive assistance, from research and writing to editing and defense preparation, ensuring your dissertation meets all academic standards."
//     ],
//     [
//       "question" => "How do you ensure the originality of the work you provide?",
//       "answer" => "We guarantee originality by writing all content from scratch and using advanced plagiarism detection tools to ensure the work is unique. Our commitment to academic integrity ensures that your assignments, essays, and research papers are free from plagiarism."
//     ],
//     [
//       "question" => "Can I communicate directly with the writer working on my assignment?",
//       "answer" => "Yes, our platform allows you to communicate directly with your writer. This ensures that you can provide additional details, ask questions, and receive updates throughout the writing process to ensure the final work meets your expectations."
//     ],
//     [
//       "question" => "Do you offer discounts for multiple assignments or long-term projects?",
//       "answer" => "Yes, we offer discounts for multiple assignments and long-term projects. For example, place five orders and get one free of cost. Contact us to learn more about our discount offers and how we can support your ongoing academic needs."
//     ],
//     [
//       "question" => "What subjects and academic levels do you cover?",
//       "answer" => "We cover a wide range of subjects and academic levels, from high school to university. Whether you need help with mathematics, chemistry, English, history, law, linguistics, nursing, physics, accounting, sociology, engineering, finance, or programming, our experts are here to assist."
//     ],
//     [
//       "question" => "How can students in different countries access your services?",
//       "answer" => "Students from various countries, including the UK, Australia, Spain, Canada, Malaysia, and the UAE, can access our services online. Simply visit our website, choose your service, and provide the necessary details to get started."
//     ],
//     [
//       "question" => "What is your refund policy if I’m not satisfied with the work?",
//       "answer" => "We offer a 120% money-back guarantee if we miss the delivery deadline or fail to meet your expectations. Your satisfaction is our priority, and we ensure that you receive the highest quality work or your money back."
//     ],
//     [
//       "question" => "Can I hire someone to help with my case study?",
//       "answer" => "Yes, you can hire our expert writers to help with your case study assignment writing. Simply visit our website, and provide the necessary details about your assignment, Our team is dedicated to delivering high-quality, customized case study assignment help in every subject."
//     ],
//     [
//       "question" => "Do you offer help with writing a CV?",
//       "answer" => "Yes, we provide assistance with writing a professional CV that highlights your skills and experiences. Our resume writing service helps to get the best job in any filled employer. "
//     ],
//     [
//       "question" => "How Can I pay someone to write my dissertation for me? ",
//       "answer" => "Yes, You can pay someone for your dissertation. We offer a range of writing services to meet your university and academic needs."
//     ],
//     [
//       "question" => "How quickly can I get instant writing help?",
//       "answer" => "Our instant writing help is available to meet your urgent helps. You can receive support for your assignment or any writing task almost immediately after placing your order."
//     ],

//   ]);

//   $advertisements = Add::orderBy('id', 'desc')->first();

//   return view('welcome', compact('data', 'advertisements'));
// });
Route::get('/', function () {
    $data = Cache::remember('home_meta_data', 60, function () {
        $title = 'Assignment help Online Writing Service- 40% Off & Get Free CV';
        $description = 'Get #1 Online Assignment writing help services from PHD experts! Enjoy 24/7 assistance for essays, research papers, homework help and more By Assignment In Need';
        $keyword = 'assignment writing help, assignment writing service, assignment writing services';
        $canonical = 'https://www.assignnmentinneed.com';
        $website = generateWebsiteSchema();
        $org = generateOrganizationSchema();
        $priceRanges = [
            ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
            ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
        ];
        $schema = generateSchema($title, $description, $canonical, $priceRanges);
        $Faqschema = generateFaqSchema([
            [
              "question" => "What types of academic help can you provide for students around the world?",
              "answer" => "We offer a wide range of academic assistance including assignment writing help, dissertation writing support, essay writing services, research paper help, and homework assistance. Whether you\'re in the UK, Canada, Australia, Spain, Malaysia, or the UAE, our expert team is here to support your academic needs."
            ],
            [
              "question" => "How do I get started with your assignment help services?",
              "answer" => "Getting started is easy! Simply select the type of service you need—whether it\'s assignment writing, dissertation help, or essay assistance—provide the necessary details about your assignment, and our team will match you with a qualified expert. We ensure timely delivery and high-quality work."
            ],
            [
              "question" => "Can you help with urgent assignment requests?",
              "answer" => "Yes, we offer expedited services for urgent assignment requests. Whether you need help with an assignment, homework, or a research paper on a tight deadline, our team is equipped to handle quick turnarounds while maintaining quality."
            ],
            [
              "question" => "What makes your dissertation writing services stand out?",
              "answer" => "Our dissertation writing services stand out due to our commitment to academic excellence and personalized support. We provide comprehensive assistance, from research and writing to editing and defense preparation, ensuring your dissertation meets all academic standards."
            ],
            [
              "question" => "How do you ensure the originality of the work you provide?",
              "answer" => "We guarantee originality by writing all content from scratch and using advanced plagiarism detection tools to ensure the work is unique. Our commitment to academic integrity ensures that your assignments, essays, and research papers are free from plagiarism."
            ],
            [
              "question" => "Can I communicate directly with the writer working on my assignment?",
              "answer" => "Yes, our platform allows you to communicate directly with your writer. This ensures that you can provide additional details, ask questions, and receive updates throughout the writing process to ensure the final work meets your expectations."
            ],
            [
              "question" => "Do you offer discounts for multiple assignments or long-term projects?",
              "answer" => "Yes, we offer discounts for multiple assignments and long-term projects. For example, place five orders and get one free of cost. Contact us to learn more about our discount offers and how we can support your ongoing academic needs."
            ],
            [
              "question" => "What subjects and academic levels do you cover?",
              "answer" => "We cover a wide range of subjects and academic levels, from high school to university. Whether you need help with mathematics, chemistry, English, history, law, linguistics, nursing, physics, accounting, sociology, engineering, finance, or programming, our experts are here to assist."
            ],
            [
              "question" => "How can students in different countries access your services?",
              "answer" => "Students from various countries, including the UK, Australia, Spain, Canada, Malaysia, and the UAE, can access our services online. Simply visit our website, choose your service, and provide the necessary details to get started."
            ],
            [
              "question" => "What is your refund policy if I’m not satisfied with the work?",
              "answer" => "We offer a 120% money-back guarantee if we miss the delivery deadline or fail to meet your expectations. Your satisfaction is our priority, and we ensure that you receive the highest quality work or your money back."
            ],
            [
              "question" => "Can I hire someone to help with my case study?",
              "answer" => "Yes, you can hire our expert writers to help with your case study assignment writing. Simply visit our website, and provide the necessary details about your assignment, Our team is dedicated to delivering high-quality, customized case study assignment help in every subject."
            ],
            [
              "question" => "Do you offer help with writing a CV?",
              "answer" => "Yes, we provide assistance with writing a professional CV that highlights your skills and experiences. Our resume writing service helps to get the best job in any filled employer. "
            ],
            [
              "question" => "How Can I pay someone to write my dissertation for me? ",
              "answer" => "Yes, You can pay someone for your dissertation. We offer a range of writing services to meet your university and academic needs."
            ],
            [
              "question" => "How quickly can I get instant writing help?",
              "answer" => "Our instant writing help is available to meet your urgent helps. You can receive support for your assignment or any writing task almost immediately after placing your order."
            ],
        
          ]);

        return compact('title', 'description', 'keyword', 'canonical', 'website', 'org', 'schema', 'Faqschema');
    });

    $advertisements = Cache::remember('latest_ad', 60, function () {
        return Add::orderBy('id', 'desc')->first();
    });

    return view('welcome', ['data' => $data, 'advertisements' => $advertisements]);
});


Route::post('/writer-login', [UserController::class, 'Login']);



Route::get('/click2call', function () {
  return view('api.clic2call');
});
Route::get(
  '/Offers',
  function () {
    $data['title'] = 'Offers - Assignment In Need';
    $data['description'] = '';
    $data['keyword'] = '';
    $data['canonical'] = 'https://www.assignnmentinneed.com/Offers';
    return view('frontend.offers', compact('data'));
  }
);

Route::post('/neworder-fromhome', [LeadsController::class, 'FrontEndLeads'])->name('neworder.create');
Route::post('/placeNewOrder', [LeadsController::class, 'FrontEndLeadsNew']);
Route::get('/get-files-by-order', [LeadsController::class, 'findfiles'])->name('get-files-by-order');
Route::get('thank-you', [HomeController::class, 'thankyou'])->name('thank-you');

route::get('place-your-order', function(){
  $data['title'] ='Online Assignment Help Service @ 40% Off & Get a Free CV!';
  $data['description']='Easily order your assignments help today. Just select your service, share the details, and access a wide range of assignment assistance today';
  $data['keyword'] = '';
  $data['canonical']='https://www.assignnmentinneed.com/place-your-order ';
  return view('frontend.header.place-your-order' , compact('data'));
 });




Route::get(
  '/PrivacyPolicy',
  function () {
    $data['title'] = 'Privacy Policy - Assignment In Need';
    $data['description'] = '';
    $data['keyword'] = '';
    $data['canonical'] = 'https://www.assignnmentinneed.com/PrivacyPolicy';
    return view('Policy.PrivacyPolicy', compact('data'));
  }
);
Route::get(
  '/Terms-Conditions',
  function () {
    $data['title'] = 'Terms &amp; Conditions - Assignment In Need';
    $data['description'] = '';
    $data['keyword'] = '';
    $data['canonical'] = 'https://www.assignnmentinneed.com/Terms-Conditions';
    return view('Policy.Terms&Conditions', compact('data'));
  }
);
Route::get(
  '/RefundPolicy',
  function () {
    $data['title'] = 'Refund Policy - Assignment In Need';
    $data['description'] = '';
    $data['keyword'] = '';
    $data['canonical'] = 'https://www.assignnmentinneed.com/RefundPolicy';
    return view('Policy.RefundPolicy', compact('data'));
  }
);
Route::get(
  '/GuaranteedPolicy',
  function () {
    $data['title'] = 'Guarantee Policy - Assignment In Need';
    $data['description'] = '';
    $data['keyword'] = '';
    $data['canonical'] = 'https://www.assignnmentinneed.com/GuaranteedPolicy';
    return view('Policy.GuaranteedPolicy', compact('data'));
  }
);
Route::get(
  '/CancellationPolicy',
  function () {
    $data['title'] = 'Cancellation Policy - Assignment In Need';
    $data['description'] = '';
    $data['keyword'] = '';
    $data['canonical'] = 'https://www.assignnmentinneed.com/CancellationPolicy';
    return view('Policy.CancellationPolicy', compact('data'));
  }
);
//     Route::get('/MyOrders',
//     function () {
//        $data['title'] = 'Assignment Writing Help in London,UK | Assignment Writing Service in UK';
//        $data['description'] = '';
//        $data['keyword'] = '';
//        return view('frontend.my-orders',compact('data'));
//    });
Route::get('/MyOrders', [OrderController::class, 'myOrder'])->middleware(['auth'])->name('MyOrders');

// header pages
Route::get('/about', function () {
  $data = [
    'title' => '',
    'description' => '',
    'keyword' => '',
    'canonical' => '',
  ];
  return view('frontend/header/company/about', compact('data'));

});
Route::get('/what-we-are', function () {
  $data = [
    'title' => 'Assignment Writing Help By 100% Unique Writing Experts @40% Off',
    'description' => 'Top Assignment Writing Help from Assignment In Need. 100% unique writing and Affordable support with 120% refund: If we don’t deliver, get 120% of your money back.',
    'keyword' => '',
    'canonical' => 'https://www.assignnmentinneed.com/what-we-are',
  ];

  return view('frontend.header.company.what-we-are', compact('data'));
});


Route::get('/assignment-help-expert-uk', function () {
  return redirect()->to('https://www.assignnmentinneed.com/what-we-are', 301);
});


Route::get('/why-choose-us', function () {
  $data = [
    'title' => 'Online Assignment Writing Service @ 40% Off - Assignment In Need',
    'description' => 'Expert Assignment Writers from Assignment In Need. Pay for Assignment writing help with 120% refund: If we fail to meet your needs, get 120% of your money back.',
    'keyword' => '',
    'canonical' => 'https://www.assignnmentinneed.com/why-choose-us',
  ];

  return view('frontend.header.company.why-choose-us', compact('data'));
});
///24-10-2024 made new page of Best Online Assignment Writing Service by navneet


Route::get('/assignment-writing-help-services', function () {
  $data = [
    'title' => 'Online Assignment Writing Help Services @ 40% Off & Free CV',
    'description' => '#1 Assignment Writing Help Services · Get expert writing services from verified professionals. We assist students who ask, "Can you write my assignment for me?".',
    'keyword' => 'assignment writing help service in london, cheap assignment help uk, assignment writing services',
    'canonical' => 'https://www.assignnmentinneed.com/assignment-writing-help-services',
  ];

  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
    ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
  ];

  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);

  $data['Faqschema'] = generateFaqSchema([
    [
      "question" => "How can I get help with my assignment?",
      "answer" => "You can get help by visiting our website and filling out the request form with your assignment details. We will then match you with an expert who can assist you."
    ],
    [
      "question" => "What types of assignments do you assist with?",
      "answer" => "We assist with a wide range of assignments including essays, research papers, case studies, lab reports, and more."
    ],
    [
      "question" => "How do you ensure my assignment will be plagiarism-free?",
      "answer" => "We use advanced plagiarism detection tools and write each assignment from scratch based on your specific requirements."
    ],
    [
      "question" => "Who can help me write my assignment?",
      "answer" => "Our team of experienced professionals can help you write your assignment. They are experts in various fields with advanced degrees and extensive academic writing experience, ensuring you receive high-quality and relevant assistance."
    ],
    [
      "question" => "Is there any refund guarantee in case you don’t do my assignment?",
      "answer" => "Yes, we offer a 120% money-back guarantee. If we miss the delivery deadline, including our minimal time frame, you will receive 120% of your money back. We aim to ensure your satisfaction with our service."
    ],
    [
      "question" => "How do you ensure the academic quality of the assignments?",
      "answer" => "We ensure quality by employing experienced writers, conducting thorough research, and following your specific guidelines. Each assignment is reviewed before delivery."
    ],
    [
      "question" => "Why should I trust your online assignment help service?",
      "answer" => "You can trust our service because we have a team of qualified experts with advanced degrees and extensive experience in academic writing. We ensure high-quality, original work tailored to your specific needs. Additionally, we offer secure transactions, confidentiality, and a satisfaction guarantee to provide you with peace of mind."
    ],
    [
      "question" => "How can an online assignment writing service for students help in academics?",
      "answer" => "Our online assignment writing service helps students by providing expert assistance, saving time, and reducing stress. We help you understand complex topics, improve your writing skills, and achieve better grades by delivering high-quality assignments that meet academic standards."
    ],
    [
      "question" => "Do you offer discounts for multiple assignments?",
      "answer" => "Yes, we offer a special discount for multiple assignments. Place 5 orders and get 1 free of cost. This offer is designed to provide you with affordable and continuous support for your academic needs."
    ]
  ]);

  return view('frontend.header.services.assignment-writing', compact('data'));
});

route::redirect('assignment-writing-uk', 'assignment-writing-help-services', 301);




Route::get('/chemistry-assignment-writing-help', function () {
  $data = [
    'title' => 'Chemistry Assignment Writing Help Services 40% Off & Free CV',
    'description' => 'Struggling with chemistry assignments? Get expert help from professional writers at affordable prices. Achieve top grades with our comprehensive chemistry support.',
    'keyword' => '',
    'canonical' => 'https://www.assignnmentinneed.com/chemistry-assignment-writing-help'
  ];

  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
    ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
  ];

  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);

  return view('frontend.header.services.sub.chemistry', compact('data'));
});

Route::get('/math-assignment-help', function () {
  $data = [
    'title' => 'Best Math Assignment Writing Help Online- 40% Off & Free CV',
    'description' => 'Need help with your math assignment writing help? Our experts at Instant Assignment Help provide reliable support for complex problems and real-life applications.',
    'keyword' => '',
    'canonical' => 'https://www.assignnmentinneed.com/math-assignment-help'
  ];

  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
    ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
  ];

  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);

  return view('frontend.header.services.sub.math', compact('data'));
});



Route::get('/economic-assignment-writing-help', function () {
  $data['title'] = 'Best Economic Assignment Writing Help- Get 40% Off & Free CV';
  $data['description'] = 'Economics assignment help, expert assignment writing service, Microeconomics, and Macroeconomics delivering custom-written assignments tailored to your needs.';
  $data['keyword'] = '';
  $data['canonical'] = 'https://www.assignnmentinneed.com/economic-assignment-writing-help';
  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
    ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
  ];

  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);
  return view('frontend.header.services.sub.eco', compact('data'));
});

Route::get('/english-assignment-writing-help', function () {
  $data['title'] = 'English Assignment Writing Help Services- 40% Off & Free CV';
  $data['description'] = 'Get top-quality English assignment writing help from expert writers. Whether for essays or literature analysis, our tailored support ensures academic success.';
  $data['keyword'] = '';
  $data['canonical'] = 'https://www.assignnmentinneed.com/english-assignment-writing-help';
  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
    ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
  ];
  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);
  return view('frontend.header.services.sub.english', compact('data'));
});

Route::get('/history-assignment-writing-help', function () {
  $data['title'] = 'Best History Assignment Writing Help Online 40% Off & Free CV';
  $data['description'] = 'Get expert best History assignment writing help on Political, Diplomatic, and Social History. Our professional writers ensure high-quality work for top grades.';
  $data['keyword'] = '';
  $data['canonical'] = 'https://www.assignnmentinneed.com/history-assignment-writing-help';
  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
    ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
  ];
  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);
  return view('frontend.header.services.sub.history', compact('data'));
});

Route::get('/geography-assignment-writing-help', function () {
  $data['title'] = 'Best Geography Assignment Writing Help- 40% Off & Free CV';
  $data['description'] = 'Get expert Geography assignment writing help services covering Physical and Human Geography. Plagiarism-free, accurate documents with 24/7 support for students';
  $data['keyword'] = '';
  $data['canonical'] = 'https://www.assignnmentinneed.com/geography-assignment-writing-help';
  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
    ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
  ];
  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);
  return view('frontend.header.services.sub.geography', compact('data'));
});

Route::get('/law-assignment-writing-help', function () {
  $data['title'] = 'Law Assignment Writing Help Online 40% Off & Free CV';
  $data['description'] = 'Looking for law assignment help? Our expert writers provide professional, plagiarism-free assistance in Criminal, Taxation, and Civil Law to ensure top grades.';
  $data['keyword'] = '';
  $data['canonical'] = 'https://www.assignnmentinneed.com/law-assignment-writing-help';
  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
    ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
  ];
  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);
  return view('frontend.header.services.sub.law', compact('data'));
});

Route::get('/linguistic-assignment-writing-help', function () {
  $data['title'] = 'Linguistic Assignment Writing Help Online 40% Off & Free CV';
  $data['description'] = 'Linguistics assignment writing help service online tailored to your needs. Our skilled writers cover Syntax, Semantics, and Phonology for your academic success.';
  $data['keyword'] = '';
  $data['canonical'] = 'https://www.assignnmentinneed.com/linguistic-assignment-writing-help';
  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
    ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
  ];
  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);
  return view('frontend.header.services.sub.linguistic', compact('data'));
});

Route::get('/physics-assignment-writing-help', function () {
  $data['title'] = 'Physics Assignment Writing Help Services 40% Off & Free CV';
  $data['description'] = 'Get 24/7 expert Physics assignment help on Classical Mechanics, Quantum Physics, and more. Enjoy affordable, plagiarism-free support with unlimited revisions!';
  $data['keyword'] = '';
  $data['canonical'] = 'https://www.assignnmentinneed.com/physics-assignment-writing-help';
  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
    ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
  ];
  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);
  return view('frontend.header.services.sub.physics', compact('data'));
});

Route::get('/sociology-assignment-writing-help', function () {
  $data['title'] = 'Best Sociology Assignment Writing Help- Get 40% Off & Free CV';
  $data['description'] = 'Sociology assignment writing helps with Social Theory, Cultural Studies, and Research Methods. Get specialised support for your academic needs. Archive A+ Grade';
  $data['keyword'] = '';
  $data['canonical'] = 'https://www.assignnmentinneed.com/sociology-assignment-writing-help';
  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
    ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
  ];
  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);
  return view('frontend.header.services.sub.sociology', compact('data'));
});

// 29-aug-24 update for new pages
// nursing page
Route::get('/nursing-assignment-writing-help', function () {
  $data['title'] = 'Nursing Assignment Writing help Services 40% Off & Free CV';
  $data['description'] = 'Get expert nursing assignment writing help on Patient Care, Pharmacology, and more. Our experienced writers provide tailored support for your academic success.';
  $data['keyword'] = '';
  $data['canonical'] = 'https://www.assignnmentinneed.com/nursing-assignment-writing-help';
  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
    ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
  ];
  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);
  return view('frontend.header.services.sub.nursing', compact('data'));
});
// philosophy page
Route::get('/philosophy-assignment-writing-help', function () {
  $data['title'] = 'Best Philosophy Assignment Writing Help - 40% Off & Free CV';
  $data['description'] = 'Get expert Philosophy assignment writing help on Metaphysics, Ethics, and more. Our PhD-qualified writers provide tailored support with 24/7 live assistance!';
  $data['keyword'] = '';
  $data['canonical'] = 'https://www.assignnmentinneed.com/philosophy-assignment-writing-help';
  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
    ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
  ];
  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);
  return view('frontend.header.services.sub.philosophy', compact('data'));
});

// statistics page
Route::get('/statistics-assignment-writing-help', function () {
  $data['title'] = 'Statistics Assignment Writing help Service- 40% Off & Free CV';
  $data['description'] = 'Get expert Statistics assignment help in Probability, Regression, and Data Analysis. Our writers ensure top A+ grades, 24/7 support, and Plagiarism-Free work.';
  $data['keyword'] = '';
  $data['canonical'] = 'https://www.assignnmentinneed.com/statistics-assignment-writing-help';
  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
    ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
  ];
  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);
  return view('frontend.header.services.sub.statistics', compact('data'));
});
// accounting page
Route::get('/accounting-assignment-writing-help', function () {
  $data['title'] = 'Accounting Assignment Writing help online 40% Off & Free CV';
  $data['description'] = 'Best Accounting assignment writing help online in Financial Accounting, Auditing, and Taxation. Get quality solutions on time from expert accounting writers!';
  $data['keyword'] = '';
  $data['canonical'] = 'https://www.assignnmentinneed.com/accounting-assignment-writing-help';
  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
    ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
  ];
  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);
  return view('frontend.header.services.sub.accounting', compact('data'));
});

// marketing page
Route::get('/marketing-assignment-writing-help', function () {
  $data['title'] = 'Best Marketing Assignment Writing help- Get 40% Off & Free CV';
  $data['description'] = 'Marketing assignment help From marketing experts for research to consumer behaviour we handle all types of marketing assignments with 100% plagiarism-free work.';
  $data['keyword'] = '';
  $data['canonical'] = 'https://www.assignnmentinneed.com/marketing-assignment-writing-help';
  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
    ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
  ];
  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);
  return view('frontend.header.services.sub.marketing', compact('data'));
});
// cscience page
Route::get('/computer-science-assignment-writing-help', function () {
  $data['title'] = 'Computer Science Assignment Writing help 40% Off & Free CV';
  $data['description'] = 'Get computer science assignment writing help from qualified Ph.D. experts. Enjoy 100% plagiarism-free work on algorithms, programming, and database assignments.';
  $data['keyword'] = '';
  $data['canonical'] = 'https://www.assignnmentinneed.com/computer-science-assignment-writing-help';
  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
    ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
  ];
  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);
  return view('frontend.header.services.sub.cscience', compact('data'));
});

// finance page

Route::get('/finance-assignment-writing-help', function () {
  $data['title'] = 'Finance Assignment Writing help Sevices @ 40% Off & Free CV';
  $data['description'] = 'Best finance assignment writing help with financial analysis and investment. Ensure academic success with plagiarism-free homework assistance from professionals.';
  $data['keyword'] = '';
  $data['canonical'] = 'https://www.assignnmentinneed.com/finance-assignment-writing-help';
  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
    ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
  ];
  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);
  return view('frontend.header.services.sub.finance', compact('data'));
});
// programming page
Route::get('/programming-assignment-writing-help', function () {
  $data['title'] = 'Programming Assignment Writing help 40% Off & Get Free CV';
  $data['description'] = 'Programming assignment writing helps online with coding, algorithms, and software development. Our programing experts deliver, quality assistance for all levels.';
  $data['keyword'] = '';
  $data['canonical'] = 'https://www.assignnmentinneed.com/programming-assignment-writing-help';
  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
    ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
  ];
  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);
  return view('frontend.header.services.sub.programming', compact('data'));
});
Route::get('/engineering-assignment-writing-help', function () {
  $data['title'] = 'Engineering Assignment Writing help @ 40 % off & Get Free CV';
  $data['description'] = 'Receive expert engineering assignment writing help services from top Ph.D. writers. Get quality, plagiarism-free work and 24/7 support tailored to your needs.';
  $data['keyword'] = '';
  $data['canonical'] = 'https://www.assignnmentinneed.com/engineering-assignment-writing-help';
  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
    ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
  ];
  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);
  return view('frontend.header.services.sub.engineering-assignment-writing-help', compact('data'));
});

// cheap page
Route::get('/cheap-assignment-writing-help', function () {
  $data['title'] = 'Cheap Assignment Writing help Sevices 40% Off & Get Free CV';
  $data['description'] = 'Cheap assignment writing help online for all types of assignments and Homework Help. Budget-friendly assistance to achieve A+ Grades in your academic success.';
  $data['keyword'] = '';
  $data['canonical'] = 'https://www.assignnmentinneed.com/cheap-assignment-writing-help';
  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
    ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
  ];
  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);
  return view('frontend.header.services.sub.cheap', compact('data'));
});

// 31-aug-24 made new page  helpwith by navneet, live on-05-sept-24
Route::get('/help-with-assignment-online', function () {
  $data['title'] = 'Help Me With Assignment Online @ 40% Off & Get Free CV';
  $data['description'] = 'Get expert tutors for detailed, step-by-step solutions with 0% plagiarism-free work. Our assignment helpers, with Master’s and Ph.D.’s, ensure error-free work! ';
  $data['keyword'] = '';
  $data['canonical'] = 'https://www.assignnmentinneed.com/help-with-assignment-online';
  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
    ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
  ];
  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);

  return view('frontend.header.services.sub.help-with-assignment-online', compact('data'));
});
// 29-aug-24 update for new pages
// 17-sep-24 update for new pages start
Route::get('/expert-assignment-writing-help', function () {
  $data['title'] = 'Expert Assignment Writers Online @ 40% Off & Get Free CV';
  $data['description'] = 'Looking for expert assignment writers? Our experienced writers provide expert assistance at cheap prices, get well-researched essays and homework to your needs.';
  $data['keyword'] = '';
  $data['canonical'] = 'https://www.assignnmentinneed.com/expert-assignment-writing-help';
  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
    ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
  ];
  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);
  return view('frontend.header.services.sub.expert-assignment-writing-help', compact('data'));
});

Route::get('/assignment-helper', function () {
  $data['title'] = 'Assignment Helper Online @ 40% Off & Get Free CV';
  $data['description'] = 'Looking for an assignment helper? Our Phd experts offers top assistance in 200+ subjects, with 24/7 support and 100% plagiarism-free work - Assignment In Need';
  $data['keyword'] = '';
  $data['canonical'] = 'https://www.assignnmentinneed.com/assignment-helper';
  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
    ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
  ];
  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);
  return view('frontend.header.services.sub.assignment-helper-writing-help', compact('data'));
});


Route::get('/pay-for-assignment-help', function () {
  $data['title'] = 'Pay Someone to Do My Assignment Help @ 40% Off & Get Free CV';
  $data['description'] = 'Need help with assignments? Pay someone to do my Assignment and Homework Help at Assignment in Need. Get secure, top-notch all types of assignment help today.';
  $data['keyword'] = '';
  $data['canonical'] = 'https://www.assignnmentinneed.com/pay-for-assignment-help';
  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
    ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
  ];
  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);
  return view('frontend.header.services.sub.pay-for-assignment-help', compact('data'));
});



Route::get('/engineering-assignment-writing-help', function () {
  $data['title'] = 'Engineering Assignment Writing help @ 40 % off & Get Free CV';
  $data['description'] = 'Receive expert engineering assignment writing help services from top Ph.D. writers. Get quality, plagiarism-free work and 24/7 support tailored to your needs.';
  $data['keyword'] = '';
  $data['canonical'] = 'https://www.assignnmentinneed.com/engineering-assignment-writing-help';
  return view('frontend.header.services.sub.engineering-assignment-writing-help', compact('data'));
});


// 17-sep-24 update for new pages end

Route::get('/best-online-assignment-writing-service', function () {
  $data['title'] = 'Best Online Assignment Writing Service-40% Off & Get Free CV';
  $data['description'] = 'Best online assignment writing service at Assignment In Need! Our Experts help you with the best assignment help. Place Order and get the best assignment help services.';
  $data['keyword'] = '';
  $data['canonical'] = 'https://www.assignnmentinneed.com/best-online-assignment-writing-service';
  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
    ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
  ];
  return view('frontend.header.services.sub.best-online-assignment-writing-service', compact('data'));
});

///25-10-24 made new page of Do my Assignment for me by navneet
Route::get('/do-my-assignment-for-me', function () {
  $data['title'] = 'Do my Assignment For Me | Do My Homework @ 40% Off & Free CV';
  $data['description'] = 'Need help with your Can someone do my assignment for me and do my Homework? Assignment In Need offers expert writing services to your needs for essays, research papers, and more.';
  $data['keyword'] = '';
  $data['canonical'] = 'https://www.assignnmentinneed.com/do-my-assignment-for-me';
  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
    ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
  ];
  return view('frontend.header.services.sub.do-my-assignment-for-me', compact('data'));
});

/// 25-10--24 made new page of Academic Assignment Writing Help Service by navneet
Route::get('academic-assignment-writing-help-service', function () {
  $data['title'] = 'Academic Assignment Writing Help Service @ 40% Off & Free CV';
  $data['description'] = 'Leave academic worries behind with Assignment In Need! Our expert writers are here to do your assignments for you, providing top-notch help for any subject For Student ';
  $data['keyword'] = '';
  $data['canonical'] = 'https://www.assignnmentinneed.com/academic-assignment-writing-help-service';
  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
    ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
  ];
  return view('frontend.header.services.sub.academic-assignment-writing-help-service', compact('data'));
});

/// 25-10-25 made new page of Top Assignment Writing Help Service by navneet
Route::get('top-assignment-writing-help-service', function () {
  $data['title'] = 'Top Assignment Writing Help Service- @ 40% Off & Get Free CV';
  $data['description'] = 'Top assignment writing help services is here! At Assignment In Need, our expert team is ready to do your assignment for you, ensuring quality support 24/7 and plagiarism-free content';
  $data['keyword'] = '';
  $data['canonical'] = 'https://www.assignnmentinneed.com/top-assignment-writing-help-service';
  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
    ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
  ];
  return view('frontend.header.services.sub.top-assignment-writing-help-service', compact('data'));

});


Route::get('/dissertation-writing-help-services', function () {
  $data = [
    'title' => 'Best Dissertation Writing Help Services- Get 40% Off & Free CV',
    'description' => 'Get expert dissertation writing help from PhD writers. We offer affordable, high-quality support for university students, ensuring timely delivery and success.',
    'keyword' => 'Dissertation Writing Services in London, Dissertation Writing Services, Dissertation Writing',
    'canonical' => 'https://www.assignnmentinneed.com/dissertation-writing-help-services',
  ];

  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
    ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
  ];

  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);

  $data['Faqschema'] = generateFaqSchema([
    [
      "question" => "How can your service help me with my dissertation?",
      "answer" => "Our service can help you with every stage of your dissertation, from selecting a topic and conducting research to writing, editing, and formatting. Our experts provide guidance and support to ensure your dissertation meets academic standards and helps you achieve your academic goals."
    ],
    [
      "question" => "Do you have experts in my field of study to assist with my dissertation?",
      "answer" => "Yes, we have experts across a wide range of fields and disciplines. Our team includes professionals with advanced degrees who are well-versed in various subjects, ensuring that we can match you with an expert in your specific field of study."
    ],
    [
      "question" => "What if I need revisions for my dissertation?",
      "answer" => "We offer a revision policy that allows you to request changes to your dissertation if it does not meet your expectations. Our experts will make the necessary adjustments based on your feedback to ensure you are satisfied with the final product."
    ],
    [
      "question" => "Can you get help writing a dissertation?",
      "answer" => "Yes, you can get comprehensive help with writing your dissertation from our expert team. We assist with everything from topic selection and research to writing, editing, and formatting to ensure your dissertation meets academic standards."
    ],
    [
      "question" => "What is the best dissertation help website?",
      "answer" => "While we believe our website offers top-notch dissertation help, it’s important to choose a service that meets your specific needs. Look for features such as qualified experts, originality guarantees, timely delivery, and positive reviews to determine the best fit for you."
    ],
    [
      "question" => "I will already written my dissertation – can you help me with proofreading?",
      "answer" => "Absolutely! We offer proofreading and editing services to help refine your dissertation. Our experts will review your work for grammatical errors, coherence, and adherence to academic standards to ensure it is polished and ready for submission."
    ],

  ]);



  return view('frontend.header.services.dissertation-writing-services', compact('data'));
});

route::redirect('dissertation-writing-services-uk', 'dissertation-writing-help-services', 301);


Route::get('/essay-writing-help-services', function () {
  // Define metadata for the page
  $data = [
    'title' => 'Essay Writing Help Service | Write My Essay for Me @ 40% Off',
    'description' => 'Get professional essay writing help services. Enjoy fast, high-quality, human-written essays tailored to your needs. Easily monitor progress and request revisions.',
    'keyword' => 'Essay Writing Help in London, Essay Writing Help, Essay Writing',
    'canonical' => 'https://www.assignnmentinneed.com/essay-writing-help-services',
  ];

  // Define pricing ranges
  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
    ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
  ];

  // Generate FAQ schema
  $data['Faqschema'] = generateFaqSchema([
    [
      "question" => "Can you help with writing essays for specific academic disciplines, like literature or science?",
      "answer" => "Yes, we provide specialized essay writing help across various academic disciplines, including literature, science, social sciences, and more. Our writers have expertise in a wide range of subjects to meet your academic needs."
    ],
    [
      "question" => "Can you help with understanding and implementing specific essay requirements from my professor?",
      "answer" => "Yes, we can help you understand and implement specific essay requirements from your professor. Provide us with the details and guidelines given by your professor, and our writers will ensure that your essay meets those requirements precisely."
    ],
    [
      "question" => "Can I pay someone to do my essay?",
      "answer" => "Yes, you can pay for professional essay writing services. Our team of experienced writers can assist you with crafting high-quality essays based on your specific requirements. Simply provide details about your essay, and we will handle the writing process for you."
    ],
    [
      "question" => "What helps you write an essay?",
      "answer" => "Key factors include a clear understanding of the topic, a structured outline, a strong thesis statement, thorough research, and effective writing tools."
    ],
    [
      "question" => "What if I need assistance with multiple revisions?",
      "answer" => "If you need multiple revisions, we provide ongoing support to make the necessary changes. You can request as many revisions as needed to ensure your essay meets your requirements and academic expectations."
    ],
    [
      "question" => "What steps do you take to ensure the essay is well-researched?",
      "answer" => "Our writers conduct thorough research using credible sources relevant to your topic. We ensure that all necessary information is gathered and integrated into the essay to support your arguments and meet academic standards."
    ],
  ]);

  // Generate schema for the service
  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);

  // Return the view with the data
  return view('frontend.header.services.essay-writing-help', compact('data'));
});


route::redirect('essay-writing-help-uk', 'essay-writing-help-services', 301);


Route::get('/research-paper-writing-services', function () {
  $data = [
    'title' => 'Research Paper Writing Help Services- Get 40% Off & Free CV',
    'description' => 'We provide reliable research paper writing help for PhD dissertations. Our expert team collaborates with you to create high-quality manuscripts for publication.',
    'keyword' => 'Research Paper Writing Help in London, Research Paper Writing, Research Paper Writing Services',
    'canonical' => 'https://www.assignnmentinneed.com/research-paper-writing-services',
  ];
  // Define pricing ranges
  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
    ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
  ];

  // Generate FAQ schema
  $data['Faqschema'] = generateFaqSchema([
    [
      "question" => "What is research paper writing?",
      "answer" => "Research paper writing involves creating an in-depth, scholarly document that investigates a specific topic through thorough research, analysis, and critical thinking. It typically includes a clear thesis, structured sections (such as introduction, literature review, methodology, results, and conclusion), and proper citations to support and present findings in a formal academic format."
    ],
    [
      "question" => "How many words is a research paper?",
      "answer" => "The length of a research paper varies depending on the level of study and the specific requirements of the assignment. Typically, a research paper ranges from 3,000 to 7,000 words, but it can be shorter or longer depending on the scope and depth of the research. Always check your assignment guidelines for specific word count requirements."
    ],
    [
      "question" => "How can your service help with writing a research paper?",
      "answer" => "We assist with all stages of research paper writing, including topic selection, research, writing, and editing. Our experts ensure that your paper is well-structured, thoroughly researched, and meets academic standards."
    ],
    [
      "question" => "What should I provide to get help with my research paper?",
      "answer" => "Provide us with your research paper topic, requirements, guidelines, and deadline. Any additional information or specific instructions will also be helpful."
    ],
    [
      "question" => "Can you help with specific sections of my research paper, like the literature review or methodology?",
      "answer" => "Yes, we can assist with specific sections such as the literature review, methodology, data analysis, and conclusion, ensuring each part meets academic standards."
    ],
    [
      "question" => "How do you handle complex research topics or interdisciplinary papers?",
      "answer" => "For complex or interdisciplinary topics, we assign writers with relevant expertise who conduct in-depth research and provide comprehensive analysis to address the topic effectively."
    ],
    [
      "question" => "What if I need revisions for my research paper?",
      "answer" => "You can request revisions if needed. We offer revision services to make necessary adjustments based on your feedback and ensure the paper meets your expectations."
    ],
    [
      "question" => "How do you ensure timely delivery of my research paper?",
      "answer" => "We manage deadlines effectively by prioritizing your research paper and working efficiently to ensure it is delivered on time, without compromising on quality."
    ],
  ]);

  // Generate schema for the service
  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);

  // Return the view with the data

  return view('frontend.header.services.research-paper-writing', compact('data'));
});

route::redirect('research-paper-writing-uk', 'research-paper-writing-services', 301);



Route::get('/homework-writing-help-services', function () {
  // Define page metadata
  $data = [
    'title' => 'Best Homework Help | Do My Homework For Me - 40% Off & Free CV',
    'description' => 'Make impossible deadlines possible with our 100% original college homework help. Access expert guidance in various subjects and programming languages with 24/7 support.',
    'keyword' => 'Homework Writing Help in London, Homework Writing, Homework Writing Help',
    'canonical' => 'https://www.assignnmentinneed.com/homework-writing-help-services',
  ];

  // Define pricing ranges
  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
    ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
  ];

  // Generate FAQ schema
  $data['Faqschema'] = generateFaqSchema([
    [
      "question" => "How can you assist with my homework?",
      "answer" => "We provide assistance with various types of homework, offering help in understanding assignments, completing tasks, and providing detailed explanations. Our experts ensure your homework meets the required standards and deadlines."
    ],
    [
      "question" => "What types of homework can you help with?",
      "answer" => "We can assist with a wide range of homework, including math problems, essays, research assignments, science projects, and more. Our experts are skilled in various subjects and academic levels."
    ],
    [
      "question" => "Can I get help with homework on a tight deadline?",
      "answer" => "Yes, we offer urgent homework help services. Just specify your deadline when placing an order, and we will prioritize your request to ensure timely completion without sacrificing quality."
    ],
    [
      "question" => "How do you ensure that my homework is original and free from plagiarism?",
      "answer" => "We guarantee originality by completing your homework from scratch and utilizing plagiarism detection tools to verify that the work is unique. A plagiarism report can be provided upon request."
    ],
    [
      "question" => "Can I request revisions if the homework doesn't meet my expectations?",
      "answer" => "Yes, you can request revisions if the homework does not meet your expectations. We offer revision services to make the necessary adjustments based on your feedback."
    ],
    [
      "question" => "How do you match me with a homework helper?",
      "answer" => "We match you with a homework helper based on the subject, academic level, and specific requirements of your assignment. Our team reviews your request to ensure you are paired with an expert suited to your needs."
    ],
    [
      "question" => "What should I provide to get help with my homework?",
      "answer" => "Please provide details about your homework assignment, including the topic, instructions, and deadline. Any additional materials or notes will assist our experts in completing the task effectively."
    ],
    [
      "question" => "Can I communicate with the person helping with my homework?",
      "answer" => "Yes, you can communicate with your homework helper through our platform. This allows you to provide updates, ask questions, and discuss any specific requirements."
    ],
    [
      "question" => "What if I need help with multiple subjects or assignments?",
      "answer" => "We can assist with multiple subjects or assignments. Just specify your needs for each task, and we will ensure you receive support from experts in the relevant fields."
    ],
  ]);
  // Generate schema for the service
  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);

  // Return the view with the data
  return view('frontend.header.services.homework-writing-help', compact('data'));
});


route::redirect('homework-writing-help-uk', 'homework-writing-help-services', 301);


Route::get('uk/birmingham/assignment-help', function () {
  $data = [
    'title' => 'Assignment Help Online in Birmingham - Get 40% Off & Free CV',
    'description' => 'Need quality assignment help in Birmingham? Our professional team offers original, plagiarism-free work with timely delivery and 24/7 support. Contact us today!',
    'keyword' => 'Assignment Help in Birmingham, Assignment Writing Help, Birmingham Assignment Assistance',
    'canonical' => 'https://www.assignnmentinneed.com/uk/birmingham/assignment-help',
    
    'Faqschema' => generateFaqSchema([
      [
        "question" => "How can Birmingham students benefit from your assignment writing help?",
        "answer" => "Birmingham students can receive expert assistance with assignments, including research, writing, and editing, tailored to local academic requirements and deadlines."
      ],
      [
        "question" => "What if I need urgent assignment help in Birmingham?",
        "answer" => "If you're in Birmingham and have an urgent assignment, you can request expedited help to ensure timely completion, even under tight deadlines."
      ],
      [
        "question" => "What types of assignments can you assist with for Birmingham students?",
        "answer" => "We help with various types of assignments, including essays, reports, case studies, and more, tailored to the specific needs of Birmingham students."
      ],
      [
        "question" => "How do you handle dissertation deadlines for Birmingham students?",
        "answer" => "We prioritize dissertation projects to meet deadlines, ensuring timely delivery while maintaining high quality."
      ],
      [
        "question" => "How can Birmingham students get help with writing essays?",
        "answer" => "Birmingham students can receive expert assistance with essay writing, including brainstorming, drafting, and editing, to meet their specific academic requirements."
      ],
      [
        "question" => "Can you assist Birmingham students with different types of essays?",
        "answer" => "Yes, we help with various essay types, including argumentative, descriptive, and narrative essays, tailored to Birmingham students’ needs."
      ],
      [
        "question" => "How do you ensure that essays for Birmingham students are unique?",
        "answer" => "We ensure uniqueness by writing essays from scratch and using plagiarism detection tools to verify originality."
      ]
    ])
  ];
   $data['website'] = generateWebsiteSchema();
  $data['org'] = generateOrganizationSchema();
  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
 
  ];

  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);

  return view('frontend.header.country.birmingham', compact('data'));
});


Route::redirect('assignment-help-in-birmingham', 'uk/birmingham/assignment-help', 301);



Route::get('/uk/manchester/assignment-help', function () {
  $data['title'] = 'Best Assignment Writing Help in Manchester -40% Off & Free CV';
  $data['description'] = 'We offer affordable assignment writing help service in Manchester! Our expert writers provide top-notch assistance across all subjects for your academic success.';
  $data['keyword'] = 'Assignment Help in Manchester, Assignment Writing Help, Manchester Assignment Assistance';
  $data['canonical'] = 'https://www.assignnmentinneed.com/uk/manchester/assignment-help';
  $data['Faqschema'] = generateFaqSchema([
    [
      "question" => "How can Manchester students benefit from your assignment writing service?",
      "answer" => "Manchester students can access expert assistance for all types of assignments, including research, writing, and editing, ensuring high-quality work that meets local academic standards."
    ],
    [
      "question" => "What options are available for urgent assignment help in Manchester?",
      "answer" => "For urgent assignments, Manchester students can request expedited service to ensure their work is completed on time, even with tight deadlines."
    ],
    [
      "question" => "What types of assignments can you help with for students in Manchester?",
      "answer" => "We assist with a variety of assignments such as essays, reports, case studies, and more, tailored to the specific needs of Manchester students."
    ],
    [
      "question" => "How do you ensure that assignments for Manchester students are original?",
      "answer" => "We write all assignments from scratch and use plagiarism detection tools to guarantee originality and adherence to Manchester’s academic standards."
    ],
    [
      "question" => "Can Manchester students receive help with different parts of their dissertation?",
      "answer" => "Yes, Manchester students can get support with various sections of their dissertation, including the introduction, methodology, and literature review."
    ],
    [
      "question" => "What makes your dissertation writing service suitable for Manchester students?",
      "answer" => "Our service provides expert research, writing, and editing, tailored to the specific requirements and academic standards of Manchester students."
    ],
    [
      "question" => "How can Manchester students get help with their essays?",
      "answer" => "Manchester students can receive expert help with essay writing, including brainstorming, drafting, and editing to meet their academic requirements."
    ],
    [
      "question" => "Do you assist with different types of essays for Manchester students?",
      "answer" => "Yes, we help with various types of essays, including argumentative, descriptive, and narrative essays, customized to Manchester students’ needs."
    ],
    [
      "question" => "How do you ensure that essays for Manchester students are unique?",
      "answer" => "We ensure essays are original by writing from scratch and using plagiarism detection tools to verify that all work is unique."
    ]

  ]);
    $data['website'] = generateWebsiteSchema();
  $data['org'] = generateOrganizationSchema();
  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
 
  ];

  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);

  return view('frontend.header.country.manchester', compact('data'));
});


Route::redirect('best-assignment-writing-help-in-manchester', 'uk/manchester/assignment-help', 301);

route::get('/uk/london', function () {
  $data['title'] = 'Best Assignment Help Services in London - 40% Off & Free CV';
  $data['description'] = 'Get top-quality assignment writing help in London from expert British writers. Essays, research papers, dissertations, and more—plagiarism-free and affordable!';
  $data['keyword'] = '';
  $data['canonical'] = 'https://www.assignnmentinneed.com/uk/london ';
  $data['website'] = generateWebsiteSchema();
  $data['org'] = generateOrganizationSchema();
  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
 
  ];

  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);
  $data['Faqschema'] = generateFaqSchema([
    [
      "question" => " Do you offer assignment writing services in London?",
      "answer" => "Yes, Assignment In Need provides comprehensive assignment writing services for students in London. Our team of expert writers is familiar with the academic standards and requirements of universities in London, ensuring top-quality work tailored to your needs."
    ],
    [
      "question" => "What subjects do you cover for assignment help in London?",
      "answer" => "We cover a wide range of subjects for students in London, including but not limited to:
                    1. Business and Management
                    2. Engineering
                    3. Law
                    4. Nursing
                    5. Economics
                    6. Literature
                    7. History
                    8. Computer Science Our diverse team of writers ensures that we can handle assignments in virtually any subject area."
    ],
    [
      "question" => "Can I get a discount on my first order for assignment help in London?",
      "answer" => "Yes, we offer special discounts for first-time customers in London. Check our website for the latest promotions and discount codes, and take advantage of our affordable pricing on your first order.

"
    ],
    [
      "question" => " Do you have London-based writers for local insights?",
      "answer" => "While our team consists of writers from various backgrounds, we have several London-based writers who provide local insights and understand the specific requirements of London universities. This ensures that your assignment is tailored to meet the expectations of your institution."
    ],
    [
      "question" => " Do you have London-based writers for local insights?",
      "answer" => "While our team consists of writers from various backgrounds, we have several London-based writers who provide local insights and understand the specific requirements of London universities. This ensures that your assignment is tailored to meet the expectations of your institution."
    ],
    [
      "question" => "What if I'm not satisfied with the assignment help I receive in London?",
      "answer" => "We strive to ensure complete satisfaction with our services. If you're not happy with the quality of your assignment, we offer free revisions to make necessary adjustments. Additionally, we have a money-back guarantee if the work does not meet your requirements."
    ],
   
    [
      "question" => "Do you offer proofreading and editing services for students in London?",
      "answer" => "Yes, in addition to our writing services, Assignment In Need offers proofreading and editing services to help refine and perfect your assignments. Our expert editors will ensure that your work is error-free and adheres to the required academic standards."
    ],
    [
      "question" => "Can I get a discount on assignment help services in London?",
      "answer" => "Yes, we often offer special discounts and promotions for students in London. Check our website for the latest offers and discounts on assignment help services."
    ],
  
    [
      "question" => "How do you ensure the quality of assignments?",
      "answer" => "We have a team of experienced and qualified writers who are experts in their respective fields. Each assignment undergoes a rigorous quality check to ensure it meets academic standards and is free of plagiarism."
    ],
    [
      "question" => "Is your service confidential?",
      "answer" => "Yes, we prioritize your privacy and confidentiality. All your personal information and order details are kept secure and are never shared with third parties."
    ],

  ]);
  return view('frontend.header.country.london', compact('data'));
});


//  uk page
route::get('/uk', function () {
  $data['title'] = 'UK Assignment Writing Help - 40% Off & Free CV On All Assignment';
  $data['description'] = 'Get expert assignment writing help in the UK. Our dedicated writers ensure high-quality, original content and provide 24/7 support for your academic success';
  $data['keyword'] = '';
  $data['canonical'] = 'https://www.assignnmentinneed.com/uk';
  $data['website'] = generateWebsiteSchema();
  $data['org'] = generateOrganizationSchema();
  $priceRanges = [
    ['currency' => 'GBP', 'low' => '7.99', 'high' => '9.99'],
 
  ];

  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);
  $data['Faqschema'] = generateFaqSchema([
    [
      "question" => " How can I get affordable homework help in the UK?",
      "answer" => "We offer budget-friendly homework help for UK students without compromising quality. Check our pricing options and student discounts to make homework assistance affordable."
    ],
    [
      "question" => " What subjects does your cheap homework help cover?",
      "answer" => "Our homework help covers a wide range of subjects, including maths, English, science, history, and more, ensuring support across all academic areas."
    ],
    [
      "question" => "Can I get last-minute homework help at a low cost?",
      "answer" => "We offer express homework help options in the UK for urgent deadlines, and we strive to keep these services as affordable as possible."
    ],
    [
      "question" => "What makes your 'write my essay for me' service the best in the UK?",
      "answer" => "Our service combines expert writers, affordable pricing, and free revisions, ensuring UK students receive high-quality, custom essays suited to their needs."
    ],
    [
      "question" => "Can I order a custom essay for any topic or academic level?",
      "answer" => "Yes, our UK essay writing service is fully customizable. We cater to all topics, structures, and academic levels, from GCSE to postgraduate"
    ],
   
    [
      "question" => "How much does it cost to have an essay written in the UK?",
      "answer" => "Our prices vary based on complexity, length, and urgency. We also offer student discounts, making our service affordable for all UK students."
    ],
    [
      "question" => "Can I get expert help with my dissertation in the UK?",
      "answer" => "Yes, we specialize in UK dissertation support, including help with research, writing, editing, and specific sections like literature reviews or methodology."
    ],
  

  ]);
  return view('frontend.header.country.uk', compact('data'));
});


//05/11/24 new page in uk country homework help service 
route::get('/uk/homework-help-service' , function ()
{
    $data['title'] = 'Online Homework Help Service in Uk - 40% Off & Get Free CV ';
    $data['description'] = 'Get top Online homework helpers in the UK. Expert tutors for school, higher education and university homework help. Get cheap Help With 400+ British writers.';
    $data['keyword'] = '';
    $data['canonical'] = 'https://www.assignnmentinneed.com/uk/homework-help-service';
    return view('frontend.header.country.uk.homework-help-service' , compact('data'));
});

/// 06/11/24 new page in uk country reseach paper writing help
route::get('/uk/reseach-paper-writing-help', function()
{
    $data['title']='Reseach Paper Writing Help In Uk- 40% Off & Get Free CV ';
    $data['description']= 'Get professional Research Paper Writing Help in the UK. Expert writers offer custom and plagiarism-free research papers for all subjects, theses, and dissertations.';
    $data['keyword']='';
    $data['canonical']='https://www.assignnmentinneed.com/uk/reseach-paper-writing-help';
    return view('frontend.header.country.uk.reseach-paper-writing-help' , compact('data'));

});

// 06/11/24 new page in uk country essay writing help
route::get('/uk/essay-writing-help', function()
{
    $data['title']='Online Essay Writing Help Services in UK - 40% Off & Free CV';
    $data['description']='Get Top Essay Writing Help in the UK. Expert writers, timely delivery, and plagiarism-free content at affordable rates. Perfect for your university and academic essays';
    $data['keyword']='';
    $data['canonical']='https://www.assignnmentinneed.com/uk/essay-writing-help';
    return view('frontend.header.country.uk.essay-writing-help' , compact('data'));
});

// 07/11/24 new page in uk country university assignment writing help
route::get('/uk/university-assignment-writing-help', function()
{
    $data['title']= 'University Assignment Writing Help in Uk- 40% Off & Free CV ';
    $data['description']= 'Get expert University Assignment Help in the UK. Our writers provide academic help to achieve better marks and meet deadlines for all types of university assignments. ';
    $data['keyword']='';
    $data['canonical']= 'https://www.assignnmentinneed.com/uk/university-assignment-writing-help';
    return view('frontend.header.country.uk.university-assignment-writing-help' , compact('data'));
});

//07/11/24 new page in uk country university coursework writing help
route::get('/uk/coursework-writing-help', function()
{
    $data['title']= 'Coursework Writing Help Services In Uk-  40% Off & Free CV ';
    $data['description']='Top-quality Coursework Writing Help services in the UK. Affordable, original, and timely assistance from expert writers to boost your grades and meet deadlines.';
    $data['keyword']='';
    $data['canonical']='https://www.assignnmentinneed.com/uk/coursework-writing-help';
    return view('frontend.header.country.uk.coursework-writing-help' , compact('data'));
});

//07/11/24 new page in uk country university proofreading and editing writing help
route::get('/uk/proofreading-and-editing-writing-help', function()
{
    $data['title']='Proofreading & Editing Writing Help In Uk- 40% Off & Free CV';
    $data['description']='Get professional Proofreading and Editing Writing Services in the UK. Affordable rates, starting at £7.99 per 1000 words, with a full money-back guarantee.';
    $data['keyword']='';
    $data['canonical']='https://www.assignnmentinneed.com/uk/proofreading-and-editing-writing-help';
    return view(  'frontend.header.country.uk.proofreading-and-editing-writing-help' , compact('data') );
});

//07/11/24 new page in uk country university cheap assignment writing help
route::get('/uk/cheap-assignment-writing-help', function()
{
    $data['title']='Cheap Assignment Writing Help Service Uk- 40% Off & Free CV';
    $data['description']='Get affordable, 100% original Cheap Assignment Writing Help in the UK. Quick, expert assistance from PhD writers to ensure top grades at the best prices in all subjects.';
    $data['keyword']='';
    $data['canonical']='https://www.assignnmentinneed.com/uk/cheap-assignment-writing-help';
    return view(   'frontend.header.country.uk.cheap-assignment-writing-help',  compact('data'));
});


//08/11/24 newpage in uk country instant assignment writing help
    route::get('/uk/instant-assignment-writing-help', function()
    {
      $data['title']='Instant Assignment Writing Help in Uk- 40% Off & Get Free CV';
      $data['description']= 'Get Instant Assignment Writing Help services in the UK. Get professional writing service to meet your deadlines and deliver quality work, anytime you need it';
      $data['keyword']='';
      $data['canonical']= 'https://www.assignmenntinneed.com/uk/instant-assignment-writing-help';
      return view(   'frontend.header.country.uk.instant-assignment-writing-help',  compact('data'));
    });

    //08/11/24 new page in uk country pay someone to do my assignment writing help
    route::get('/uk/pay-someone-to-do-my-assignment-writing-help', function()
    {
      $data['title']='Pay Someone To Do My Assignment in Uk- 40% Off & Get Free CV';
      $data['description']='Hire Our No.1 Pay Someone to Do My Assignment Writing Help Services Online in the UK. Affordable, high-quality writing assistance from over 500+ British experts.';
      $data['keyword']='';
      $data['canonical']= 'https://www.assignmenntinneed.com/uk/pay-someone-to-do-my-assignment-writing-help';
      return view(   'frontend.header.country.uk.pay-someone-to-do-my-assignment-writing-help',  compact('data'));
    });
//08/11/24 new page in uk country Do My assignment for me 
    route::get('/uk/do-my-assignment-for-me', function()
    {
      $data['title']='Do My Assignment For Me Online In UK- 40% Off & Get Free CV';
      $data['description']='Need someone to do your assignment in the UK? Get expert help from top writers for high-quality, timely results at affordable prices. best for British students';
      $data['keyword']='';
      $data['canonical']='https://www.assignmenntinneed.com/uk/do-my-assignment-for-me';
      return view( 'frontend.header.country.uk.do-my-assignment-for-me',   compact('data'));
    });

    //08/11/24 new page in uk country thesis assignment writing help 
    route::get('/uk/thesis-assignment-writing-help', function()
    {
      $data['title']='Thesis Assignment Writing Help In Uk - 40% Off & Get Free CV';
      $data['description']='Get custom Thesis Writing Services in the UK. Experienced writers deliver high-quality, personalized theses from undergraduate to doctoral levels. Order today!';
      $data['keyword']='';
      $data['canonical']='https://www.assignmenntinneed.com/uk/thesis-assignment-writing-help';
      return view( 'frontend.header.country.uk.thesis-assignment-writing-help',   compact('data'));
    });
//08/11/24 new page in uk country case study writitng help
    route::get('/uk/case-study-writing-help', function()
    {
      $data['title']='Case Study Writing Help Service In UK- 40% Off & Get Free CV';
      $data['description']='Get expert Case Study Writing Services in the UK. Our professional writers provide top-quality, customized case studies to help you achieve your desired grade.';
      $data['keyword']='';
      $data['canonical']='https://www.assignmenntinneed.com/uk/case-study-writing-help';
      return view( 'frontend.header.country.uk.case-study-writing-help',   compact('data'));
    });

    //08/11/24/new page in uk country Dissertation writing help online
    route::get('/uk/dissertation-writing-help-online', function()
    {
      $data['title']='Dissertation Writing Help Services UK- 40% Off & Get Free CV';
      $data['description']='Top UK Dissertation Writing Service Onl;ine: Expert Writers, Proofreading and editing services, Topic Creation & More! Trusted for Quality & Personalised Support.';
      $data['keyword']='';
      $data['canonical']='https://www.assignmenntinneed.com/uk/dissertation-writing-help-online';
      return view( 'frontend.header.country.uk.dissertation-writing-help-online',   compact('data'));
    });
//08/11/24/ new page in uk country online math assignment helper
    route::get('/uk/online-math-assignment-helper', function()
    {
      $data['title']='Math Assignment Help | Math Homework Help UK- 40% + Free CV';
      $data['description']='Get Expert Math Assignment Help & Homework Help in UK: Step-by-Step Solution, Plagiarism-Free Work. 24/7 Online Math Helpers Ready for Homework & Last-Minute Edits!';
      $data['keyword']='';
      $data['canonical']='https://www.assignmenntinneed.com/uk/online-math-assignment-helper';
      return view('frontend.header.country.uk.online-math-assignment-helper', compact('data'));
    }) ;
    //08//11/24 new page in uk country chemistry writing help services
    route::get('/uk/chemistry-writing-help-services', function()
    {
      $data['title']='Chemistry Assignment & Homework Help in UK-40% off & Free CV';
      $data['description']='Get Chemistry Assignment Help Chemistry Homework Help from UK Experts, 24/7 Support, and Affordable, High-Quality Solutions for Higher Education to Post-Graduation Students';
      $data['keyword']='';
      $data['canonical']='https://www.assignmenntinneed.com/uk/chemistry-writing-help-services';
      return view('frontend.header.country.uk.chemistry-writing-help-services', compact('data'));
    });





Route::get('/au/sydney/assignment-help', function () {
  $data['title'] = 'Assignment Writing Help Services in Sydney- 40% Off & Free CV';
  $data['description'] = 'Get Expert Online assignment writing help Services in Sydney. Our expert writers provide 100% original, high-quality work for students at all academic levels.';
  $data['keyword'] = 'assignment writing help in Sydney, assignment writing help services, Assignment Services';
  $data['canonical'] = 'https://www.assignnmentinneed.com/au/sydney/assignment-help';
  $data['Faqschema'] = generateFaqSchema([
    [
      "question" => "How can Sydney students benefit from your assignment writing help?",
      "answer" => "Sydney students can benefit from expert assistance tailored to their academic needs, including personalized support for essays, reports, and other assignments. Our service ensures that the work adheres to local academic standards and is delivered on time."
    ],
    [
      "question" => "What options are available for urgent assignment help in Sydney?",
      "answer" => "For urgent assignments, Sydney students can choose expedited services to meet tight deadlines. We prioritize these requests to ensure that even last-minute assignments are completed promptly."
    ],
    [
      "question" => "What types of assignments do you handle for students in Sydney?",
      "answer" => "We handle a variety of assignments including essays, case studies, research papers, and lab reports, customized to fit the specific academic requirements of Sydney students."
    ],
    [
      "question" => "How do you ensure that assignments for Sydney students are original?",
      "answer" => "All assignments are written from scratch and checked using plagiarism detection tools to ensure originality and compliance with Sydney's academic standards."
    ],
    [
      "question" => "Can Sydney students get help with different sections of their dissertation?",
      "answer" => "Yes, Sydney students can receive assistance with any part of their dissertation, such as the introduction, literature review, methodology, and analysis."
    ],
    [
      "question" => "How do you manage dissertation deadlines for Sydney students?",
      "answer" => "We manage deadlines efficiently by prioritizing dissertation projects and maintaining a structured workflow to ensure timely completion."
    ],
    [
      "question" => "What makes your dissertation writing service suitable for Sydney students?",
      "answer" => "Our service is tailored to Sydney students with expert guidance on research, writing, and editing, ensuring that dissertations meet local academic requirements."
    ],
    [
      "question" => "Can Sydney students request urgent help with their homework?",
      "answer" => "Yes, we offer urgent homework help to ensure that even last-minute assignments are completed on time for Sydney students."
    ],
    [
      "question" => "What subjects do you cover for homework help in Sydney?",
      "answer" => "We provide homework help across a wide range of subjects, including math, science, English, and more, tailored to the needs of Sydney students."
    ],
    [
      "question" => "How do you ensure homework assignments are plagiarism-free?",
      "answer" => "All homework assignments are written from scratch, and we use plagiarism detection tools to ensure the work is original and adheres to academic standards."
    ]
  ]);
  $data['website'] = generateWebsiteSchema();
  $data['org'] = generateOrganizationSchema();
  $priceRanges = [
  ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
 
  ];

  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);

  return view('frontend/header/country/sydney', compact('data'));
});

Route::redirect('assignment-writing-help-in-sydney', '/au/sydney/assignment-help', 301);

Route::get('/au/melbourne/assignment-help', function () {
  $data['title'] = 'Assignment Help Online in Melbourne - Get 40% Off & Free CV';
  $data['description'] = 'Melbourne Assignment Help: Providing students with customized, high-quality assignments across all subjects. Our experienced writers ensure academic success.';
  $data['keyword'] = 'assignment writing help in Melbourne, assignment writing, Assignment help';
  $data['canonical'] = 'https://www.assignnmentinneed.com/au/melbourne/assignment-help';
  $data['Faqschema'] = generateFaqSchema([
    [
      "question" => "Where can I get help with my assignment in Melbourne?",
      "answer" => "You can get help with your assignment in Melbourne through our professional assignment writing service. We offer personalized support tailored to Melbourne's academic standards, ensuring high-quality and timely work for all types of assignments."
    ],
    [
      "question" => "What types of assignments can you assist Melbourne students with?",
      "answer" => "We assist Melbourne students with a wide range of assignments, including essays, research papers, case studies, lab reports, presentations, and annotated bibliographies. Each assignment is tailored to meet Melbourne's academic standards."
    ],
    [
      "question" => "How do I get someone to write my assignment in Melbourne?",
      "answer" => "To get someone to write your assignment in Melbourne, choose our reputable assignment writing service known for its expertise across various subjects. Submit comprehensive information about your assignment, including the topic, guidelines, and deadline, to ensure we understand your needs. Once an expert writer is assigned, you can directly communicate your specific requirements to ensure clarity and alignment with your expectations. After the assignment is completed, review the work and request any necessary revisions to ensure it meets all your academic requirements before giving final approval."
    ],
    [
      "question" => "Can I request revisions for my assignment?",
      "answer" => "Yes, we offer free revisions if the initial assignment does not meet your expectations. Melbourne students can request modifications, and our team will make the necessary changes to ensure the final work meets all requirements."
    ],
    [
      "question" => "Can Melbourne students get support for different sections of their dissertation?",
      "answer" => "Yes, Melbourne students can receive help with any part of their dissertation, including the introduction, literature review, methodology, and analysis. Our experts provide tailored support to ensure each section meets academic requirements."
    ],
    [
      "question" => "How can Melbourne students get help with their essays?",
      "answer" => "Melbourne students can access professional help with essay writing, including topic selection, drafting, and revising, to ensure their essays meet academic standards and expectations."
    ],
    [
      "question" => "Do you handle different types of essays for Melbourne students?",
      "answer" => "Yes, we assist with various essay types, such as argumentative, descriptive, and analytical essays, customized to the needs of Melbourne students."
    ],
    [
      "question" => "How do you ensure essays are unique for Melbourne students?",
      "answer" => "We guarantee essay uniqueness by writing from scratch and using plagiarism detection software to ensure all work is original and adheres to Melbourne's academic standards."
    ],
    [
      "question" => "What if a Melbourne student needs revisions for their essay?",
      "answer" => "Revisions are available if the essay requires changes. Melbourne students can request modifications, and we will adjust the work to meet their specific requirements."
    ],
    [
      "question" => "What is research paper writing, and how can it help Melbourne students?",
      "answer" => "Research paper writing involves conducting thorough research and presenting the findings in a structured manner. Melbourne students benefit from expert assistance with research, writing, and data analysis to produce high-quality research papers."
    ],
    [
      "question" => "What subjects do you cover for homework help in Melbourne?",
      "answer" => "We provide homework help across a wide range of subjects, including math, science, English, and more, tailored to the needs of Melbourne students."
    ]
  ]);
    $data['website'] = generateWebsiteSchema();
  $data['org'] = generateOrganizationSchema();
  $priceRanges = [
  ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
 
  ];

  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);
  return view('frontend/header/country/melbourne', compact('data'));
});


Route::redirect('assignment-writing-help-in-melbourne', 'au/melbourne/assignment-help', 301);


Route::get('/my', function () {
  $data['title'] = 'Best Assignment Writing Help in Malaysia- 40% Off & Free CV';
  $data['description'] = 'Assignment In Need offers top-notch assignment writing help in Malaysia. Our expert writers provide tailored assistance to ensure you achieve excellent results.';
  $data['keyword'] = 'assignment writing help in Malaysia, assignment writing help services, Assignment help services';
  $data['canonical'] = 'https://www.assignnmentinneed.com/my';
  $data['Faqschema'] = generateFaqSchema([
    [
      "question" => "How can I find the best assignment help service in Malaysia?",
      "answer" => "To find the best assignment help service in Malaysia, look for providers with experienced writers, positive reviews, and a strong track record of delivering high-quality work. Ensure they offer services tailored to Malaysian academic standards and deadlines."
    ],
    [
      "question" => "What types of assignments can you assist with in Malaysia?",
      "answer" => "We assist Malaysian students with a variety of assignments, including essays, research papers, case studies, dissertations, and lab reports. Our team of experts is equipped to handle assignments across different academic disciplines."
    ],
    [
      "question" => "Are there specific academic requirements for assignments in Malaysia?",
      "answer" => "Yes, assignments in Malaysia may require adherence to specific formatting styles and academic standards set by local universities. Providing clear instructions and guidelines helps us tailor the work to meet these requirements."
    ],
    [
      "question" => "How can I ensure my homework is done correctly in Malaysia?",
      "answer" => "To ensure your homework is done correctly, provide detailed instructions and any specific guidelines when placing your order. Our experienced writers in Malaysia will follow these instructions closely to deliver accurate and high-quality work."
    ],
    [
      "question" => "What is the process for getting help with a research paper in Malaysia?",
      "answer" => "To get help with a research paper, submit your research topic, requirements, and deadlines through our platform. We will assign a writer with expertise in your field to conduct thorough research and produce a well-structured paper that meets Malaysian academic standards."
    ],
    [
      "question" => "How do you guarantee the originality of essays and research papers?",
      "answer" => "We guarantee originality by writing essays and research papers from scratch and using advanced plagiarism detection tools to ensure each piece of work is unique and meets academic integrity standards."
    ],
    [
      "question" => "Can I get help with essay writing in Malaysia?",
      "answer" => "Yes, we offer comprehensive essay writing help in Malaysia. Whether you need assistance with brainstorming, drafting, or final editing, our expert writers are here to help you craft a compelling and well-organized essay."
    ],
    [
      "question" => "How do I get urgent assignment help in Malaysia?",
      "answer" => "For urgent assignment help in Malaysia, contact us as soon as possible. We offer expedited services to ensure your assignment is completed on time, even under tight deadlines, without compromising quality."
    ],
    [
      "question" => "What should I do if I need revisions for my assignment or essay in Malaysia?",
      "answer" => "If you need revisions for your assignment or essay, request them through our platform. We offer free revisions to ensure the final work meets all your requirements and academic expectations."
    ],
    [
      "question" => "How can I track the progress of my homework, assignment, or research paper?",
      "answer" => "You can track the progress of your homework, assignment, or research paper through regular updates on our secure platform. You also have the option to communicate directly with your writer for any additional instructions or updates."
    ]
  ]);
  $data['website'] = generateWebsiteSchema();
   $data['org'] = generateOrganizationSchema();
   $priceRanges = [
  ['currency' => 'MYR', 'low' => '44.97 ', 'high' => '59.97 ']
 
  ];

  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);
  return view('frontend/header/country/malaysia', compact('data'));
});

Route::redirect('assignment-writing-malaysia', '/my', 301);



Route::get('/es/barcelona/assignment-help', function () {
  $data['title'] = 'Best Assignment Writing Help in Barcelona- 40% Off & Free CV';
  $data['description'] = 'We offer the best online assignment writing help services in Spain, ensuring you receive accurate solutions. our experts for reliable assistance to your needs.';
  $data['keyword'] = 'assignment writing help in Barcelona, assignment writing services, Assignment help';
  $data['canonical'] = 'https://www.assignnmentinneed.com/es/barcelona/assignment-help';
  $data['Faqschema'] = generateFaqSchema([
    [
      "question" => "How can I get top-quality assignment help in Barcelona?",
      "answer" => "To get top-quality assignment help in Barcelona, choose a service with experienced writers who understand local academic standards. Look for a service with a proven track record, reviews, and a commitment to delivering assignments on time."
    ],
    [
      "question" => "What types of assignments can you help with in Barcelona?",
      "answer" => "We assist Barcelona students with a wide range of assignments, including essays, research papers, case studies, dissertations, and lab reports. Our team is skilled in various subjects to meet your specific needs."
    ],
    [
      "question" => "Are there any special considerations for assignments in Barcelona?",
      "answer" => "Yes, assignments in Barcelona may require adherence to specific formatting styles and academic guidelines set by local universities. Providing detailed instructions and guidelines helps us tailor the work to meet these requirements."
    ],
    [
      "question" => "How do I get a reliable assignment writer in Barcelona?",
      "answer" => "To get a reliable assignment writer in Barcelona, select a service with vetted professionals who have expertise in your subject area. Check their qualifications, experience, and previous client feedback to ensure they can meet your needs."
    ],
    [
      "question" => "What should I do if I need urgent assignment help in Barcelona?",
      "answer" => "If you need urgent assignment help in Barcelona, contact us as soon as possible. We offer expedited services to handle tight deadlines and ensure that your assignment is completed on time without sacrificing quality."
    ],
    [
      "question" => "How can I ensure my homework is completed correctly?",
      "answer" => "To ensure your homework is completed correctly, provide clear instructions and guidelines when placing your order. Our experienced writers will follow these details closely to deliver accurate and high-quality work."
    ],
    [
      "question" => "What is the process for getting help with a research paper in Barcelona?",
      "answer" => "For help with a research paper in Barcelona, submit your topic, research requirements, and deadlines through our platform. We will assign a writer with expertise in your field to conduct thorough research and craft a well-structured paper."
    ],
    [
      "question" => "How do you ensure originality in essays and research papers?",
      "answer" => "We ensure originality by writing all essays and research papers from scratch and using advanced plagiarism detection tools. Each piece of work is checked to meet academic standards and ensure it is unique."
    ],
    [
      "question" => "What are the benefits of using your homework and assignment help service in Barcelona?",
      "answer" => "The benefits include access to expert writers, high-quality work tailored to your needs, timely delivery, and support throughout the process. We aim to help you achieve academic success with minimal stress."
    ]
  ]);

 $data['website'] = generateWebsiteSchema();
   $data['org'] = generateOrganizationSchema();
   $priceRanges = [
  ['currency' => 'MYR', 'low' => '44.97 ', 'high' => '59.97 ']
 
  ];

  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);
  return view('frontend/header/country/barcelona', compact('data'));
});

Route::redirect('assignment-in-need-barcelona', '/es/barcelona/assignment-help', 301);


Route::get('/ae', function () {
  $data = [
    'title' => 'Assignment Writing Help Services in UAE - 40% Off & Free CV',
    'description' => 'Experience crazy-fast turnaround with our UAE assignment writing services! Enjoy 24/7 support, plagiarism-free papers, and unlimited revisions from our experts.',
    'keyword' => '',
    'canonical' => 'https://www.assignnmentinneed.com/ae',
   
  ];


  $data['Faqschema'] = generateFaqSchema([
    [
      "question" => "What types of assignments can you help with in the UAE?",
      "answer" => "We provide assistance with a wide range of assignments for UAE students, including essays, research papers, case studies, dissertations, and lab reports. Our expert writers cover various subjects to meet your academic needs."
    ],
    [
      "question" => "Are there any specific academic standards for assignments in the UAE?",
      "answer" => "Yes, assignments in the UAE often have specific formatting and citation requirements based on local academic institutions' guidelines. Providing clear instructions helps us ensure that your work adheres to these standards."
    ],
    [
      "question" => "How do I ensure my homework is completed accurately in the UAE?",
      "answer" => "To ensure your homework is completed accurately, provide detailed instructions and any specific guidelines when placing your order. Our UAE-based writers will follow these instructions closely to deliver high-quality work."
    ],
    [
      "question" => "What is the process for getting help with a research paper in the UAE?",
      "answer" => "For research paper assistance, submit your topic, research requirements, and deadline through our platform. We will assign a writer with expertise in your field to conduct thorough research and produce a well-structured paper that meets UAE academic standards."
    ],
    [
      "question" => "Can I get help with essay writing in the UAE?",
      "answer" => "Yes, we offer comprehensive essay writing help in the UAE. Whether you need help with brainstorming, drafting, or editing, our experienced writers will assist you in creating a compelling and well-organized essay."
    ],
    [
      "question" => "What should I do if I need urgent assignment help in the UAE?",
      "answer" => "If you need urgent assignment help, contact us immediately. We offer expedited services to ensure your assignment is completed on time, even under tight deadlines, while maintaining high quality."
    ],
    [
      "question" => "How can I request revisions for my assignment or essay in the UAE?",
      "answer" => "You can request revisions through our platform if you need changes to your assignment or essay. We offer free revisions to ensure the final work meets all your expectations and academic requirements."
    ],
    [
      "question" => "How can I track the progress of my homework, assignment, or research paper?",
      "answer" => "You can track the progress of your homework, assignment, or research paper through our secure platform, which provides regular updates. Additionally, you can communicate directly with your writer for any additional instructions or updates."
    ]
  ]);

$data['website'] = generateWebsiteSchema();
   $data['org'] = generateOrganizationSchema();
   $priceRanges = [
  ['currency' => 'AED', 'low' => '35.98  ', 'high' => '47.98 ']
 
  ];

  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);
  return view('frontend/header/country/uae', compact('data'));
});

Route::redirect('best-assignment-help-uae', 'ae', 301);


Route::get('/au', function () {
  $data['title'] = 'Best Assignment Writing Help in Australia- 40% Off & Free CV';
  $data['description'] = 'Find top assignment writers help at Assignment In Need. Get expert help from Ph.D. certified writers in Australia. 100% original work, no AI, no plagiarism!';
  $data['keyword'] = '';
  $data['canonical'] = 'https://www.assignnmentinneed.com/au';

  $data['Faqschema'] = generateFaqSchema([
    [
      "question" => "What is the best assignment help service in Australia?",
      "answer" => "The best assignment help service in Australia is one that offers comprehensive support, including experienced writers, timely delivery, and high-quality work tailored to local academic standards. Look for services that provide a range of academic support, from research and writing to editing and proofreading, and ensure they offer guarantees such as plagiarism-free work and satisfaction guarantees."
    ],
    [
      "question" => "What makes your assignment writing service the best for Australian students?",
      "answer" => "Our assignment writing service stands out for Australian students due to our team of highly qualified writers who specialize in various academic fields. We prioritize custom-written assignments, offer timely delivery, and provide free revisions to ensure the work meets all requirements. Additionally, our service includes a strict plagiarism policy and 24/7 customer support to address any concerns promptly."
    ],
    [
      "question" => "How can Australian students benefit from your assignment writing service?",
      "answer" => "Australian students get tailored support for their assignments, including detailed research, structured writing, and comprehensive editing, all aligned with local academic expectations."
    ],
    [
      "question" => "What if I need help with an assignment last minute in Australia?",
      "answer" => "For urgent assignments, Australian students can opt for expedited service to ensure timely completion, even with short deadlines."
    ],
    [
      "question" => "What types of assignments do you handle for Australian students?",
      "answer" => "We cover a variety of assignments, such as essays, research papers, case studies, and more, customized to fit the needs of Australian students."
    ],
    [
      "question" => "How do you ensure assignments are original for Australian students?",
      "answer" => "We create assignments from scratch and utilize plagiarism detection software to guarantee that the work is unique and meets academic standards."
    ],
    [
      "question" => "Can Australian students get support for different parts of their dissertation?",
      "answer" => "Yes, Australian students can receive help with any section of their dissertation, including the proposal, methodology, and data analysis."
    ],
    [
      "question" => "How do you ensure dissertations meet the deadlines for Australian students?",
      "answer" => "We manage deadlines carefully by prioritizing tasks and maintaining efficient workflows to ensure timely delivery of high-quality dissertations."
    ],
    [
      "question" => "How can Australian students get help with their essays?",
      "answer" => "Australian students can access expert assistance for essay writing, including topic selection, drafting, and revision, to meet specific academic guidelines."
    ],
    [
      "question" => "Do you handle different types of essays for Australian students?",
      "answer" => "Yes, we assist with various essay types, such as analytical, persuasive, and reflective essays, customized to the needs of Australian students."
    ],
    [
      "question" => "How do you ensure essays are unique for Australian students?",
      "answer" => "We ensure originality by writing essays from scratch and using advanced plagiarism detection tools to confirm that all work is unique."
    ]
  ]);
 $data['website'] = generateWebsiteSchema();
  $data['org'] = generateOrganizationSchema();
  $priceRanges = [
  ['currency' => 'AUD', 'low' => '14.99', 'high' => '19.99']
 
  ];

  $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);

  return view('frontend/header/country/assignment-writing-australia', compact('data'));
});

Route::redirect('assignment-writing-australia', '/au', 301);

Route::get('/es', function () {
  $data['title'] = 'Assignment Writing Help Service in Spain -40% Off & Free CV';
  $data['description'] = 'Assignment in Need is the top choice for Spanish students needing assistance. Our experienced experts provide tailored help to complete your assignments on time.';
  $data['keyword'] = '';
  $data['canonical'] = 'https://www.assignnmentinneed.com/es';
  $data['Faqschema'] = generateFaqSchema([
    [
      "question" => "What is the best assignment help service in Spain?",
      "answer" => "The best assignment help service in Spain is one that offers expert writers, timely delivery, and high-quality work tailored to Spain's academic standards. Look for services that have positive reviews and a track record of success."
    ],
    [
      "question" => "What subjects do you cover for assignment help in Spain?",
      "answer" => "We cover a wide range of subjects for Spain students, including literature, history, business, science, and engineering. Our diverse team of experts can assist with assignments in various academic disciplines."
    ],
    [
      "question" => "Are your assignment services available in different cities in Spain?",
      "answer" => "Yes, our assignment services are available to students in various cities across Spain, including Madrid, Barcelona, Valencia, and more. We provide support to students regardless of their location."
    ],
    [
      "question" => "How can I be sure my assignment will be plagiarism-free?",
      "answer" => "All assignments are written from scratch and checked using advanced plagiarism detection tools to ensure originality. We guarantee that your assignment will be unique and comply with Spain's academic standards."
    ],
    [
      "question" => "Can I get help with urgent assignments in Spain?",
      "answer" => "Yes, we offer expedited services for urgent assignments to ensure they are completed on time. Spain students can rely on us to handle tight deadlines without compromising the quality of the work."
    ],
    [
      "question" => "How do I track the progress of my assignment?",
      "answer" => "Spain students can track the progress of their assignments through regular updates. We provide status reports and allow direct communication with the writer for any queries or additional instructions."
    ],
    [
      "question" => "What are the benefits of using an assignment help service in Spain?",
      "answer" => "Using an assignment help service in Spain offers benefits such as expert guidance, time-saving, improved grades, and reduced stress. Our service provides personalized support to ensure that assignments meet Spain's academic standards."
    ],
    [
      "question" => "How do I find a reliable assignment help service in Spain?",
      "answer" => "To find a reliable assignment help service in Spain, look for services with positive reviews, experienced writers, transparent pricing, and a solid track record of delivering quality work on time."
    ],
    [
      "question" => "What should I consider when choosing an assignment help service in Spain?",
      "answer" => "When choosing an assignment help service in Spain, consider factors such as the service's reputation, the qualifications of their writers, customer reviews, guarantees for quality and originality, and their ability to meet deadlines."
    ]
  ]);

       $data['website'] = generateWebsiteSchema();
       $data['org'] = generateOrganizationSchema();
       $priceRanges = [
      ['currency' => 'EURO', 'low' => '8.99', 'high' => '11.99']
     
      ];
    
      $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);
  return view('frontend/header/country/best-assignment-help-spain', compact('data'));
});


Route::redirect('best-assignment-help-spain', 'es', 301);

Route::get('/canada', function () {
  $data['title'] = 'Best Assignment Writing Help in Canada- Get 40% Off & Free CV ';
  $data['description'] = 'Canada Assignment Writing Help: Expert assistance with homework, essays, research papers, and dissertations. Get the support you need for academic success!';
  $data['keyword'] = '';
  $data['canonical'] = 'https://www.assignnmentinneed.com/canada';
  $data['Faqschema'] = generateFaqSchema([
    [
      "question" => "How fast can you do an online assignment?",
      "answer" => "Completing an online assignment as soon as possible is our top priority. You can set your deadline when assigning an order; our writers never fail to follow it. We work even on orders with 3-hour deadlines, so your tasks will be finished in time."
    ],
    [
      "question" => "Will I be able to communicate with the assignment expert?",
      "answer" => "We recognize effective communication is the key to success, and do our best to provide you with efficient communication channels. You can easily contact your assignment expert and discuss particular details if necessary. Our support is also always ready to help."
    ],
    [
      "question" => "How much time does it take for assignment writers to do a paper?",
      "answer" => "It depends on your paper. Short work can be done in just 3 hours if that’s what you need. But the more time you give to your writer the better quality assignment help they can provide. It’s better to order your papers in advance to allow your helper to do decent research."
    ],
    [
      "question" => "For what subjects will your Canadian assignment helper assist?",
      "answer" => "We have native academic experts to help you in preparing all types of assignment papers on any subject. Some common subjects for which we provide assignment assistance are physics, chemistry, math, management, etc."
    ],
    [
      "question" => "How can I find a specialized assignment writer for my course in Canada?",
      "answer" => "To find a specialized assignment writer in Canada, look for services that offer writers with expertise in your specific subject or course. Check their qualifications and previous work to ensure they are well-versed in your academic field."
    ],
    [
      "question" => "What types of essays can you help with for Canadian students?",
      "answer" => "We can help with various types of essays, including argumentative, descriptive, analytical, and reflective essays. Just specify the type and any particular requirements to get tailored assistance."
    ],
    [
      "question" => "How can I get help with homework in specific subjects?",
      "answer" => "To get help with homework in specific subjects, specify the subject and topic when placing your request. Our team will assign a writer with expertise in that area to provide targeted assistance."
    ],
    [
      "question" => "What should I do if I need help with homework at the last minute?",
      "answer" => "For last-minute homework help, contact us immediately with your request. We offer expedited services to handle urgent deadlines and ensure that your homework is completed on time."
    ],
    [
      "question" => "What types of assignments can you handle for Canadian students?",
      "answer" => "We handle a variety of assignments, including research papers, case studies, term papers, and essays. Our team is equipped to tackle assignments across different subjects and academic levels, ensuring customized support for each request."
    ],
    [
      "question" => "How do you ensure that the assignment meets my specific guidelines?",
      "answer" => "We ensure that your assignment meets your specific guidelines by closely reviewing the instructions you provide. Our writers follow these guidelines meticulously and communicate with you if any clarifications are needed to meet your expectations."
    ],
    [
      "question" => "What if I need help with an assignment in a subject not listed on your site?",
      "answer" => "If you need help with a subject not listed, contact us directly. We have a network of experts across various disciplines and can often accommodate requests for less common subjects by matching you with a qualified writer."
    ],
    [
      "question" => "How do you handle urgent assignments that require immediate attention?",
      "answer" => "For urgent assignments, we prioritize them to ensure timely completion. You can select expedited services, and our team will work swiftly to meet your tight deadlines while maintaining high quality."
    ]
  ]);

  $data['website'] = generateWebsiteSchema();
       $data['org'] = generateOrganizationSchema();
       $priceRanges = [
      ['currency' => 'CAD', 'low' => '8.99', 'high' => '11.99']
     
      ];
    
      $data['schema'] = generateSchema($data['title'], $data['description'], $data['canonical'], $priceRanges);
  return view('frontend/header/country/canada', compact('data'));
});

route::get('/nz', function () {
  return view('frontend.header.country.nz');
});


// Route::get('/samples', function () {return view('frontend/header/samples');});
Route::get(
  '/upload-your-assignment',
  function () {
    $data['title'] = 'Order Now- Assignment Help- 40% Off & Free CV- Assignment In Need';
    $data['description'] = 'Get expert assignment help by placing your order now at Assignment In Need. We provide reliable and top-quality academic support for students in all Subjects.';
    $data['keyword'] = '';
    $data['canonical'] = 'https://www.assignnmentinneed.com/upload-your-assignment';
    return view('frontend/header/order-now', compact('data'));
  }
);
// Route::get('myProfile', function () {return view('frontend/myProfile');});
Route::get(
  'myProfile',
  function () {
    // Get the authenticated user
    $user = Auth::user();

    // Check if the user is authenticated
    if ($user) {
      // User is authenticated, retrieve user details
      $userData = [
        'name' => $user->name,
        'email' => $user->email,
        'address' => $user->address,
        'mobile_no' => $user->mobile_no,
        'photo' => $user->photo,
        'Id' => $user->id,
        // Add other user details as needed
      ];
    } else {
      // User is not authenticated, set user data to null or handle accordingly
      $userData = null;
    }

    // Define other data for the view
    $data['title'] = 'My Profile | Online Essay, Research Paper writers UK';
    $data['description'] = 'If you are looking for Online Assignment Help UK then Assignment In Need is one of the best Online Essay, Research Paper writers UK.';
    $data['keyword'] = '';

    // Pass user data and other data to the view
    return view('frontend.myProfile', compact('data', 'userData'));
  }
);
Route::post('/change-user-password', function () {

  // Retrieve the current user's ID
  $userId = Auth::id();

  // Retrieve the payload
  $payload = request()->all();

  // Retrieve the user record from the database
  $user = User::find($userId);

  // Verify if the new password and its confirmation are not empty
  if (empty($payload['current_password']) || empty($payload['new_password']) || empty($payload['new_password_confirmation'])) {
    // Passwords are empty, redirect back with an error message
    return Redirect::back()->with('error', 'password cannot be empty');
  }


  // Verify if the new password and its confirmation match
  if ($payload['new_password'] !== $payload['new_password_confirmation']) {
    // Passwords don't match, redirect back with an error message
    return Redirect::back()->with('error', 'New password and confirmation do not match');
  }

  // Verify if the current password matches the hashed password stored in the database
  if (Hash::check($payload['current_password'], $user->password)) {
    // Hash the new password
    $hashedNewPassword = Hash::make($payload['new_password']);

    // Update the user's password
    $user->update(['password' => $hashedNewPassword]);

    // Password updated successfully, redirect back with a success message
    return Redirect::back()->with('success', 'Password updated successfully');
  } else {
    // Current password doesn't match, redirect back with an error message
    return Redirect::back()->with('error', 'Current password is incorrect');
  }
})->name('postChangeUserPassword');

Route::post('/userProfile/{id}', function ($id, Request $request) {
  try {
    $user = User::findOrFail($id);

    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->mobile_no = $request->input('phone');
    $user->address = $request->input('address');

    if ($request->hasFile('photo')) {
      $uploadedFile = $request->file('photo');

      $fileName = uniqid() . '_' . $uploadedFile->getClientOriginalName();
      $destinationPath = public_path('assets/media/avatars');

      $uploadedFile->move($destinationPath, $fileName);

      $user->photo = 'assets/media/avatars/' . $fileName;
    } else {
      $user->photo = 'assets/media/avatars/blank.png';
    }

    $user->save();
    // dd($user);
    return redirect()->back()->with('success', 'Profile Updated Successfully');
  } catch (\Exception $e) {
    return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
  }
})->name('userProfile.update');
Route::post('/myordersFeedback', function (Request $request) {
  // Get the content from the request
  $content = $request->input('content');

  // Get the user ID from authentication
  $userId = auth()->id();

  // Get the orderId from the request
  $orderId = $request->input('order_id');

  // Create a new instance of the FeedbackOrder model
  $feedbackOrder = new FeedbackOrder();

  // Set the feedback, uid, and orderId fields
  $feedbackOrder->feedback = $content;
  $feedbackOrder->uid = $userId;
  $feedbackOrder->order_Id = $orderId;

  // Save the feedback order to the database
  $feedbackOrder->save();

  // You can also return a response if needed
  return response()->json(['message' => 'Feedback saved successfully'], 200);

})->name('myordersFeedback');

Route::get('/fetchFeedback', function () {
  // Fetch feedback from the database
  $feedback = FeedbackOrder::all();

  // Return the feedback as JSON
  return response()->json($feedback);
})->name('fetchFeedback');


Route::get(
  'contact-us',
  function () {
    $data['title'] = 'Contact us Today For All Types Of Assignment- Assignment In Need';
    $data['description'] = 'Contact Assignment In Need today for expert assistance with all types of assignments. Our experienced team is ready to provide high-quality academic Support.';
    $data['keyword'] = '';
    $data['canonical'] = 'https://www.assignnmentinneed.com/contact-us';
    return view('frontend/header/contact-us', compact('data'));
  }
);
Route::get('/advertisement', [HomeController::class, 'write_advertisement'])->name('advertisement');
Route::post('/submit_advertisement', [HomeController::class, 'advertisement_store'])->name('submit_advertisement');
Route::delete('/advertisement/{id}', [HomeController::class, 'destroyAdvertisement'])->name('advertisement.destroy');



Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/write_blog', [HomeController::class, 'write_blog'])->name('write_blog');
Route::get('/blog_list', [HomeController::class, 'blog_list'])->name('blog_list');
Route::get('/blog_edit.{id}', [HomeController::class, 'blogedit'])->name('blog_edit');
Route::put('/blog/{id}', [HomeController::class, 'blog_edit'])->name('blog.update');

Route::post('/submit_blog', [HomeController::class, 'blog_store'])->name('submit_blog');

Route::get('/blog/{slug}', [HomeController::class, 'getBlogBySlug']);

Route::delete('/blogs/{id}', [HomeController::class, 'destroyBlog'])->name('blogs.destroy');
Route::delete('/blog_list/{id}', [HomeController::class, 'editBlog'])->name('blogs.edit');

Route::get('/samples', [HomeController::class, 'sample'])->name('samples');
Route::get('/create_sample', [HomeController::class, 'create_sample'])->name('create_sample');
Route::get('/sample_list', [HomeController::class, 'sample_list'])->name('sample_list');

Route::post('/submit_sample', [HomeController::class, 'sample_store'])->name('submit_sample');
Route::get('/sample/{slug}', [HomeController::class, 'getSampleBySlug']);
Route::delete('/sample/{id}', [HomeController::class, 'destroySample'])->name('sample.destroy');
Route::delete('/sample_list/{id}', [HomeController::class, 'editSample'])->name('sample.edit');


Route::get('/orders_data', function () {
  return view('orders_data');
});

Route::get('/blog-sitemap', [SitemapController::class, 'blogSitemap'])->name('blog-sitemap');


Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::get('/fetch-team-members', function () {
  try {
    // Get the role_id from the request
    $roleId = request()->get('role_id');

    // Fetch team members based on the role_id
    $teamMembers = User::where('role_id', $roleId)->get();

    // Return team members as JSON response
    return response()->json(['teamMembers' => $teamMembers]);
  } catch (\Exception $e) {
    // Log the exception
    \Log::error('Error fetching team members: ' . $e->getMessage());

    // Return an error response
    return response()->json(['error' => 'Internal Server Error'], 500);
  }
});

Route::get('/pricing', [HomeController::class, 'pricing'])->name('pricing');
// Route::get('/place-order', [HomeController::class, 'placeOrder'])->name('placeOrder');

// Route::middleware(['auth', 'checkrole'])->group(function () {

//   Route::get('/profile', [ProfileController::class, 'profile']);
//   Route::post('/change-password', [ProfileController::class, 'changePasswordSave'])->name('postChangePassword');
//   Route::post('/change-passwordby-admin', [ProfileController::class, 'changePasswordSaveAdmin'])->name('postChangePasswordAdmin');
//   Route::POST('/profile/{id}', [ProfileController::class, 'updateProfile'])->name('profile.update');


//   Route::get('/menus', [MenuController::class, 'index'])->name('menus');
//   Route::post('/menus', [MenuController::class, 'store'])->name('menus');
//   Route::delete('menus/{menu}', [MenuController::class, 'destroy'])->name('menus.destroy');
//   Route::put('/menu/{id}', [MenuController::class, 'update'])->name('update');

//   Route::get('/submenu', [MenuController::class, 'submenu'])->name('submenu');
//   Route::post('/submenu', [MenuController::class, 'submenu_insert'])->name('submenu');
//   Route::delete('submenu/{submenus}', [MenuController::class, 'delete'])->name('submenu.delete');
//   Route::put('/submenu/{id}', [MenuController::class, 'submenu_update'])->name('submenu_update');

//   Route::get('/userright', [MenuController::class, 'userright'])->name('userright');
//   Route::Post('/userright', [MenuController::class, 'permission'])->name('userright');
//   Route::get('/rolePermission', [MenuController::class, 'rolePermission'])->name('rolePermission');
//   Route::post('/updateUser/{id}', [LeadsController::class, 'updateUser']);



//   Route::get('/user', [UserController::class, 'index'])->name('user');
//   Route::POST('/user/{id}', [UserController::class, 'EditUser'])->name('user.update');
//   Route::delete('/user/{id}', [UserController::class, 'DeleteUser'])->name('user.delete');
//   Route::get('/usercreate', [UserController::class, 'new_user'])->name('usercreate');
//   Route::Post('/usercreate', [UserController::class, 'insert_new_user'])->name('usercreate');

//   Route::Get('/order', [OrderController::class, 'index'])->name('order');

//   Route::Post('/order/feedback', [OrderController::class, 'saveFeedback'])->name('feedback');




//   Route::get('/get-data', [OrderController::class, 'get-data'])->name('get');
//   Route::put('/order/{id}', [OrderController::class, 'OrderEdit'])->name('order.update');
//   Route::put('/fail/{orderId}', [OrderController::class, 'fail'])->name('update.order');
//   Route::put('/update-status/{id}', [OrderController::class, 'updateOrderStatus'])->name('order.update-status');
//   route::put('/payment/{id}', [OrderController::class, 'payment'])->name('payment.update');
//   route::get('/search', [OrderController::class, 'search']);
//   route::get('/suggestions', [UserController::class, 'search'])->name('suggestions');
//   Route::get('/fetch-subwriters', [OrderController::class, 'fetchSubWriters'])->name('fetch-subwriters');
//   // Route::get('/search', [SearchController::class, 'fetchSubWriters'])->name('search.index');
//   Route::get('/search-order', [SearchController::class, 'search'])->name('search-order');
//   // routes/web.php

//   Route::get('/search-user', [SearchController::class, 'searchUser'])->name('search-user');



//   route::get('/search-writer', [OrderController::class, 'search_writer']);
//   route::get('/search-writerTl', [OrderController::class, 'search_writerTl']);
//   route::get('/filter', [OrderController::class, 'filter']);
//   route::get('edit.{id}', [OrderController::class, 'orderEditPage'])->name('edit');
//   route::get('call.{id}', [OrderController::class, 'orderCallPage'])->name('call');
//   route::get('comment.{id}', [OrderController::class, 'orderCommentPage'])->name('comment');
//   route::get('orderpayments.{id}', [OrderController::class, 'orderPayment'])->name('orderpayments');
//   route::delete('orderpayments.{id}', [OrderController::class, 'orderPayment_delete'])->name('orderpayments.delete');
//   Route::post('/comment/{id}', [OrderController::class, 'insert_feedback'])->name('comment.insert');
//   Route::post('/orderedit/{id}', [OrderController::class, 'OrderEditwriterAdmin'])->name('orderedit.update');


//   Route::post('/status/{id}', [OrderController::class, 'status_update'])->name('status.update');

//   Route::get('/feedback', [OrderController::class, 'feedbacksheet'])->name('feedback');
//   Route::post('/send-feedback', [OrderController::class, 'sendFeedback'])->name('send.feedback');

//   Route::post('/mark-as-read', [OrderController::class, 'markAsRead']);

//   route::post('/OrderCallInsert.{id}', [OrderController::class, 'OrderCallInsert']);

//   Route::post('/swap-user-data', [OrderController::class, 'swapUserData']);



//   Route::get('/master', [MasterController::class, 'index'])->name('master');

//   Route::get('/typeOfSecvices', [MasterController::class, 'typeOfSecvices'])->name('typeOfSecvices');
//   Route::Post('/typeOfSecvices', [MasterController::class, 'insert_services'])->name('typeOfSecvices');
//   Route::put('/typeOfSecvices/{id}', [MasterController::class, 'update_service'])->name('typeOfSecvices.update');
//   Route::delete('/typeOfSecvices/{id}', [MasterController::class, 'Delete_service'])->name('typeOfSecvices.delete');



//   Route::get('/formatting', [MasterController::class, 'formatting'])->name('formatting');
//   Route::post('/formatting', [MasterController::class, 'formatting_insert'])->name('formatting');
//   Route::put('/formatting/{id}', [MasterController::class, 'formatting_update'])->name('formatting.update');
//   Route::delete('/formatting/{id}', [MasterController::class, 'formatting_delete'])->name('formatting.delete');

//   Route::get('/Categories', [MasterController::class, 'Categories'])->name('Categories');
//   Route::post('/categories', [MasterController::class, 'store_categories'])->name('categories.store');
//   Route::Put('/categories/{id}', [MasterController::class, 'update_categories'])->name('categories.update');
//   Route::delete('/categories/{id}', [MasterController::class, 'delete_categories'])->name('categories.delete');


//   Route::get('/Banks', [MasterController::class, 'Banks'])->name('Banks');
//   Route::post('/banks', [MasterController::class, 'store_bank'])->name('banks.store');
//   Route::put('/banks/{id}/edit', [MasterController::class, 'edit'])->name('banks.edit');
//   Route::delete('/banks/{id}', [MasterController::class, 'destroy'])->name('banks.destroy');

//   Route::get('/status', [MasterController::class, 'status'])->name('status');
//   Route::get('/Payments', [MasterController::class, 'Payments'])->name('Payments');
//   // Route::post('/update-payment-status/{paymentId}/{isChecked}', [MasterController::class, 'updateStatus']);
//   Route::post('/update-payment-status/bulk', [MasterController::class, 'bulkUpdateStatus'])->name('payments.bulkUpdateStatus');

//   Route::post('/Payments', [MasterController::class, 'update_payments'])->name('update_payments');
//   Route::delete('/Payments/{id}', [MasterController::class, 'delete_payments'])->name('delete_payments');


//   Route::get('/failedJobs', [MasterController::class, 'failedJobs'])->name('failedJobs');


//   Route::get('/writer', [MasterController::class, 'Writer'])->name('writer');
//   Route::POst('/writer', [MasterController::class, 'store_writer'])->name('writer');
//   Route::Put('/writer/{id}', [MasterController::class, 'update_writer'])->name('writer.update');
//   Route::delete('/writer/{id}', [MasterController::class, 'delete_writer'])->name('writer.delete');

//   Route::get('/writerTL', [MasterController::class, 'writerTL'])->name('writerTL');
//   Route::Post('/writerTL', [MasterController::class, 'writerTLinsert'])->name('writerTL');
//   Route::PUT('/writerTL/{id}', [MasterController::class, 'update_writerTL'])->name('writerTL.update');
//   Route::delete('/writerTL/{id}', [MasterController::class, 'delete_writerTL'])->name('writerTL.delete');


//   Route::get('/subwriter', [MasterController::class, 'SubWriter'])->name('subwriter');
//   Route::get('/getSubWriters/{writerTLId}', [MasterController::class, 'getSubWriters'])->name('getSubWriters');
//   Route::get('/get-writer-tls', [MasterController::class, 'getWriterTLs'])->name('get.writer.tls');
//   Route::Post('/subwriter', [MasterController::class, 'store_subwriter'])->name('subwriter');
//   Route::Put('/subwriter/{id}', [MasterController::class, 'update_subwriter'])->name('subwriter.update');
//   Route::Put('/subwriter/delete/{id}', [MasterController::class, 'delete_subwriter'])->name('subwriter.delete');

//   route::get('/typeofpaper', [MasterController::class, 'paperType'])->name('typeofpaper');
//   route::post('/typeofpaper', [MasterController::class, 'insert_paper'])->name('typeofpaper');
//   Route::put('/typeofpaper/{id}', [MasterController::class, 'paper_update'])->name('typeofpaper.update');
//   Route::delete('/typeofpaper/{id}', [MasterController::class, 'delete_paper'])->name('typeofpaper.delete');

//   Route::get('/college', [MasterController::class, 'college'])->name('college');
//   Route::post('/college', [MasterController::class, 'store_college'])->name('college.store');
//   Route::put('/college/{id}', [MasterController::class, 'college_update'])->name('college.update');
//   Route::delete('/college/{id}', [MasterController::class, 'delete_college'])->name('college.delete');

//   //
//   Route::post('/swap-lead-mobile', [LeadsController::class, 'swapUserData']);
//   Route::get('/leads', [LeadsController::class, 'index'])->name('leads');
//   Route::get('/leads-new', [LeadsController::class, 'index2'])->name('leads-new');
//   Route::POST('/leads', [LeadsController::class, 'insert_leads'])->name('leads');
//   route::get('/search-leads', [LeadsController::class, 'search'])->name('search-leads');

//   Route::post('/leads/send-data', [LeadsController::class, 'insert_call'])->name('send-data');

//   Route::get('/leads/fetch-data/{id}', [LeadsController::class, 'fetchData'])->name('fetch-data');


//   Route::get('/c-leads', [LeadsController::class, 'cancelleads'])->name('c-leads');
//   Route::POST('/leads/{id}', [LeadsController::class, 'leads_update'])->name('leads.edit');
//   Route::put('/cancel_leads{id}', [LeadsController::class, 'leads_Cancel'])->name('leads.update');
//   Route::put('/active_leads{id}', [LeadsController::class, 'leads_Active'])->name('leads.update');
//   Route::Delete('/Delete{id}', [LeadsController::class, 'delete_leads'])->name('leads.Delete');
//   // routes/web.php
//   Route::get('/userData', [LeadsController::class, 'userData'])->name('userData');
//   Route::POST('/convert/{id}', [LeadsController::class, 'convert'])->name('convert.convert');

//   route::get('leadedit.{id}', [LeadsController::class, 'leadEditPage'])->name('leadedit');
//   route::get('leadcall.{id}', [LeadsController::class, 'leadCallPage'])->name('leadcall');
//   route::post('neworder', [LeadsController::class, 'orderByuser'])->name('neworder');
//   route::post('updateEmail/{email}', [LeadsController::class, 'updateEmail'])->name('neworder');
//   Route::get('checkEmail', [LeadsController::class, 'checkEmail'])->name('update.email');
//   Route::post('/convertleads/{lead}', [LeadsController::class, 'convertLead'])->name('convertLead');

//   Route::put('/checklead/{id}', [LeadsController::class, 'checked'])->name('update.value');

//   Route::get('/Qc-Sheets', [OrderController::class, 'Qc'])->name('Qc-Sheets');
//   Route::post('/qc/{id}', [OrderController::class, 'QcUpdate'])->name('qc.update');
//   route::get('/search-qc', [SearchController::class, 'searchQc']);
//   route::get('/Qc-edit.{id}', [SearchController::class, 'Qc_edit'])->name('Qc-edit.update');

//   Route::PUT('/followUpUser/{id}', [UserController::class, 'followupuser']);
//   Route::get('/follow-up', [OrderController::class, 'followUp'])->name('follow-up');
//   Route::post('/follow.{id}', [OrderController::class, 'followUpUpdate'])->name('follow.update');
//   Route::get('/search-fw', [SearchController::class, 'searchFw']);


//   Route::post('/update-ai-score/{orderId}', [SearchController::class, 'updateAi']);
//   Route::post('/qcchecked/{orderId}', [SearchController::class, 'qcchecked']);


//   Route::post('/appdialnumber', [CallController::class, 'initiateCall'])->name('appdialnumber');
//   Route::get('/HangUp', [CallController::class, 'HangUp'])->name('HangUp');
//   Route::get('/HoldCall', [CallController::class, 'HoldCall'])->name('HoldCall');
//   Route::get('/unhold', [CallController::class, 'UnHoldCall'])->name('unhold');

//   Route::get('/export', [ExportController::class, 'export'])->name('export.orders');
//   Route::get('/export-leads', [ExportController::class, 'exportLeads'])->name('export.leads');
//   Route::get('/export-users', [ExportController::class, 'exportUsers'])->name('export.users');

//   Route::get('/export-WD', [ExportController::class, 'exportWD'])->name('export.WD');
//   Route::get('/order-writer', [OrderController::class, 'orderWD'])->name('order.writer');
//   Route::post('/order-writer', [OrderController::class, 'orderWD2'])->name('order.writer2');

//   Route::POST('/update_status', [OrderController::class, 'updateStatus'])->name('update_status');
//   Route::POST('/update_date', [OrderController::class, 'updateDate'])->name('update_date');

//   route::get('/status-details', [OrderController::class, 'statusDetails'])->name('status-details');
//   Route::get('/writer-available', [OrderController::class, 'writerAvailable'])->name('writer.available');

//   route::get('/whatsapp', [WhatsappController::class, 'whatsapp'])->name('whatsapp');
//   Route::post('/image-upload', [WhatsappController::class, 'uploagImages'])->name('image.upload');
//   Route::post('/complaint.submit', [WhatsappController::class, 'sendMessage'])->name('complaint.submit');


    

// });
Route::middleware(['auth'])->group(function () {

  // Admin-only routes (role_id = 1)
    Route::middleware('checkrole:1')->group(function () {
        Route::post('/change-passwordby-admin', [ProfileController::class, 'changePasswordSaveAdmin'])->name('postChangePasswordAdmin');
        Route::get('/menus', [MenuController::class, 'index'])->name('menus');
        Route::post('/menus', [MenuController::class, 'store'])->name('menus');
        Route::delete('menus/{menu}', [MenuController::class, 'destroy'])->name('menus.destroy');
        Route::put('/menu/{id}', [MenuController::class, 'update'])->name('update');

        Route::get('/submenu', [MenuController::class, 'submenu'])->name('submenu');
        Route::post('/submenu', [MenuController::class, 'submenu_insert'])->name('submenu');
        Route::delete('submenu/{submenus}', [MenuController::class, 'delete'])->name('submenu.delete');
        Route::put('/submenu/{id}', [MenuController::class, 'submenu_update'])->name('submenu_update');

        Route::get('/userright', [MenuController::class, 'userright'])->name('userright');
        Route::Post('/userright', [MenuController::class, 'permission'])->name('userright');
        Route::get('/rolePermission', [MenuController::class, 'rolePermission'])->name('rolePermission');
        Route::post('/updateUser/{id}', [LeadsController::class, 'updateUser']);



        Route::get('/user', [UserController::class, 'index'])->name('user');
        Route::POST('/user/{id}', [UserController::class, 'EditUser'])->name('user.update');
        Route::delete('/user/{id}', [UserController::class, 'DeleteUser'])->name('user.delete');
        Route::get('/usercreate', [UserController::class, 'new_user'])->name('usercreate');
        Route::Post('/usercreate', [UserController::class, 'insert_new_user'])->name('usercreate');

        Route::get('/master', [MasterController::class, 'index'])->name('master');

        Route::get('/typeOfSecvices', [MasterController::class, 'typeOfSecvices'])->name('typeOfSecvices');
        Route::Post('/typeOfSecvices', [MasterController::class, 'insert_services'])->name('typeOfSecvices');
        Route::put('/typeOfSecvices/{id}', [MasterController::class, 'update_service'])->name('typeOfSecvices.update');
        Route::delete('/typeOfSecvices/{id}', [MasterController::class, 'Delete_service'])->name('typeOfSecvices.delete');



        Route::get('/formatting', [MasterController::class, 'formatting'])->name('formatting');
        Route::post('/formatting', [MasterController::class, 'formatting_insert'])->name('formatting');
        Route::put('/formatting/{id}', [MasterController::class, 'formatting_update'])->name('formatting.update');
        Route::delete('/formatting/{id}', [MasterController::class, 'formatting_delete'])->name('formatting.delete');

        Route::get('/Categories', [MasterController::class, 'Categories'])->name('Categories');
        Route::post('/categories', [MasterController::class, 'store_categories'])->name('categories.store');
        Route::Put('/categories/{id}', [MasterController::class, 'update_categories'])->name('categories.update');
        Route::delete('/categories/{id}', [MasterController::class, 'delete_categories'])->name('categories.delete');


        Route::get('/Banks', [MasterController::class, 'Banks'])->name('Banks');
        Route::post('/banks', [MasterController::class, 'store_bank'])->name('banks.store');
        Route::put('/banks/{id}/edit', [MasterController::class, 'edit'])->name('banks.edit');
        Route::delete('/banks/{id}', [MasterController::class, 'destroy'])->name('banks.destroy');

        Route::get('/status', [MasterController::class, 'status'])->name('status');
        Route::get('/Payments', [MasterController::class, 'Payments'])->name('Payments');
        // Route::post('/update-payment-status/{paymentId}/{isChecked}', [MasterController::class, 'updateStatus']);
        Route::post('/update-payment-status/bulk', [MasterController::class, 'bulkUpdateStatus'])->name('payments.bulkUpdateStatus');

        Route::post('/Payments', [MasterController::class, 'update_payments'])->name('update_payments');
        Route::delete('/Payments/{id}', [MasterController::class, 'delete_payments'])->name('delete_payments');


        Route::get('/failedJobs', [MasterController::class, 'failedJobs'])->name('failedJobs');


        Route::get('/writer', [MasterController::class, 'Writer'])->name('writer');
        Route::POst('/writer', [MasterController::class, 'store_writer'])->name('writer');
        Route::Put('/writer/{id}', [MasterController::class, 'update_writer'])->name('writer.update');
        Route::delete('/writer/{id}', [MasterController::class, 'delete_writer'])->name('writer.delete');

        Route::get('/writerTL', [MasterController::class, 'writerTL'])->name('writerTL');
        Route::Post('/writerTL', [MasterController::class, 'writerTLinsert'])->name('writerTL');
        Route::PUT('/writerTL/{id}', [MasterController::class, 'update_writerTL'])->name('writerTL.update');
        Route::delete('/writerTL/{id}', [MasterController::class, 'delete_writerTL'])->name('writerTL.delete');


        Route::get('/subwriter', [MasterController::class, 'SubWriter'])->name('subwriter');
        Route::get('/getSubWriters/{writerTLId}', [MasterController::class, 'getSubWriters'])->name('getSubWriters');
        Route::get('/get-writer-tls', [MasterController::class, 'getWriterTLs'])->name('get.writer.tls');
        Route::Post('/subwriter', [MasterController::class, 'store_subwriter'])->name('subwriter');
        Route::Put('/subwriter/{id}', [MasterController::class, 'update_subwriter'])->name('subwriter.update');
        Route::Put('/subwriter/delete/{id}', [MasterController::class, 'delete_subwriter'])->name('subwriter.delete');

        route::get('/typeofpaper', [MasterController::class, 'paperType'])->name('typeofpaper');
        route::post('/typeofpaper', [MasterController::class, 'insert_paper'])->name('typeofpaper');
        Route::put('/typeofpaper/{id}', [MasterController::class, 'paper_update'])->name('typeofpaper.update');
        Route::delete('/typeofpaper/{id}', [MasterController::class, 'delete_paper'])->name('typeofpaper.delete');

        Route::get('/c-leads', [LeadsController::class, 'cancelleads'])->name('c-leads');
        Route::put('/cancel_leads{id}', [LeadsController::class, 'leads_Cancel'])->name('leads.update');
        Route::put('/active_leads{id}', [LeadsController::class, 'leads_Active'])->name('leads.update');
        Route::Delete('/Delete{id}', [LeadsController::class, 'delete_leads'])->name('leads.Delete');

        Route::get('/export', [ExportController::class, 'export'])->name('export.orders');
        Route::get('/export-leads', [ExportController::class, 'exportLeads'])->name('export.leads');
        Route::get('/export-users', [ExportController::class, 'exportUsers'])->name('export.users');
        Route::get('/export-WD', [ExportController::class, 'exportWD'])->name('export.WD');
    });
  // Shared routes (for role_id = 1, 4, 9)
    Route::middleware('checkrole:1,4,9')->group(function () {
        Route::get('/profile', [ProfileController::class, 'profile']);
        Route::post('/change-password', [ProfileController::class, 'changePasswordSave'])->name('postChangePassword');
        Route::POST('/profile/{id}', [ProfileController::class, 'updateProfile'])->name('profile.update');

        Route::Get('/order', [OrderController::class, 'index'])->name('order');

        Route::Post('/order/feedback', [OrderController::class, 'saveFeedback'])->name('feedback');




        Route::get('/get-data', [OrderController::class, 'get-data'])->name('get');
        Route::put('/order/{id}', [OrderController::class, 'OrderEdit'])->name('order.update');
        Route::put('/fail/{orderId}', [OrderController::class, 'fail'])->name('update.order');
        Route::put('/update-status/{id}', [OrderController::class, 'updateOrderStatus'])->name('order.update-status');
        route::put('/payment/{id}', [OrderController::class, 'payment'])->name('payment.update');
        route::get('/search', [OrderController::class, 'search']);
        route::get('/suggestions', [UserController::class, 'search'])->name('suggestions');
        Route::get('/fetch-subwriters', [OrderController::class, 'fetchSubWriters'])->name('fetch-subwriters');
        // Route::get('/search', [SearchController::class, 'fetchSubWriters'])->name('search.index');
        Route::get('/search-order', [SearchController::class, 'search'])->name('search-order');
        // routes/web.php

        Route::get('/search-user', [SearchController::class, 'searchUser'])->name('search-user');



        route::get('/search-writer', [OrderController::class, 'search_writer']);
        route::get('/search-writerTl', [OrderController::class, 'search_writerTl']);
        route::get('/filter', [OrderController::class, 'filter']);
        route::get('edit.{id}', [OrderController::class, 'orderEditPage'])->name('edit');
        route::get('call.{id}', [OrderController::class, 'orderCallPage'])->name('call');
        route::get('comment.{id}', [OrderController::class, 'orderCommentPage'])->name('comment');
        route::get('orderpayments.{id}', [OrderController::class, 'orderPayment'])->name('orderpayments');
        route::delete('orderpayments.{id}', [OrderController::class, 'orderPayment_delete'])->name('orderpayments.delete');
        Route::post('/comment/{id}', [OrderController::class, 'insert_feedback'])->name('comment.insert');
        Route::post('/orderedit/{id}', [OrderController::class, 'OrderEditwriterAdmin'])->name('orderedit.update');


        Route::post('/status/{id}', [OrderController::class, 'status_update'])->name('status.update');

        Route::get('/feedback', [OrderController::class, 'feedbacksheet'])->name('feedback');
        Route::post('/send-feedback', [OrderController::class, 'sendFeedback'])->name('send.feedback');

        Route::post('/mark-as-read', [OrderController::class, 'markAsRead']);

        route::post('/OrderCallInsert.{id}', [OrderController::class, 'OrderCallInsert']);

        Route::post('/swap-user-data', [OrderController::class, 'swapUserData']);



        

        Route::get('/college', [MasterController::class, 'college'])->name('college');
        Route::post('/college', [MasterController::class, 'store_college'])->name('college.store');
        Route::put('/college/{id}', [MasterController::class, 'college_update'])->name('college.update');
        Route::delete('/college/{id}', [MasterController::class, 'delete_college'])->name('college.delete');

        //
        Route::post('/swap-lead-mobile', [LeadsController::class, 'swapUserData']);
        Route::get('/leads', [LeadsController::class, 'index'])->name('leads');
        Route::get('/leads-new', [LeadsController::class, 'index2'])->name('leads-new');
        Route::POST('/leads', [LeadsController::class, 'insert_leads'])->name('leads');
        route::get('/search-leads', [LeadsController::class, 'search'])->name('search-leads');

        Route::post('/leads/send-data', [LeadsController::class, 'insert_call'])->name('send-data');

        Route::get('/leads/fetch-data/{id}', [LeadsController::class, 'fetchData'])->name('fetch-data');


        Route::POST('/leads/{id}', [LeadsController::class, 'leads_update'])->name('leads.edit');
        
        // routes/web.php
        Route::get('/userData', [LeadsController::class, 'userData'])->name('userData');
        Route::POST('/convert/{id}', [LeadsController::class, 'convert'])->name('convert.convert');

        route::get('leadedit.{id}', [LeadsController::class, 'leadEditPage'])->name('leadedit');
        route::get('leadcall.{id}', [LeadsController::class, 'leadCallPage'])->name('leadcall');
        route::post('neworder', [LeadsController::class, 'orderByuser'])->name('neworder');
        route::post('updateEmail/{email}', [LeadsController::class, 'updateEmail'])->name('neworder');
        Route::get('checkEmail', [LeadsController::class, 'checkEmail'])->name('update.email');
        Route::post('/convertleads/{lead}', [LeadsController::class, 'convertLead'])->name('convertLead');

        Route::put('/checklead/{id}', [LeadsController::class, 'checked'])->name('update.value');

        Route::get('/Qc-Sheets', [OrderController::class, 'Qc'])->name('Qc-Sheets');
        Route::post('/qc/{id}', [OrderController::class, 'QcUpdate'])->name('qc.update');
        route::get('/search-qc', [SearchController::class, 'searchQc']);
        route::get('/Qc-edit.{id}', [SearchController::class, 'Qc_edit'])->name('Qc-edit.update');

        Route::PUT('/followUpUser/{id}', [UserController::class, 'followupuser']);
        Route::get('/follow-up', [OrderController::class, 'followUp'])->name('follow-up');
        Route::post('/follow.{id}', [OrderController::class, 'followUpUpdate'])->name('follow.update');
        Route::get('/search-fw', [SearchController::class, 'searchFw']);


        Route::post('/update-ai-score/{orderId}', [SearchController::class, 'updateAi']);
        Route::post('/qcchecked/{orderId}', [SearchController::class, 'qcchecked']);


        Route::post('/appdialnumber', [CallController::class, 'initiateCall'])->name('appdialnumber');
        Route::get('/HangUp', [CallController::class, 'HangUp'])->name('HangUp');
        Route::get('/HoldCall', [CallController::class, 'HoldCall'])->name('HoldCall');
        Route::get('/unhold', [CallController::class, 'UnHoldCall'])->name('unhold');

        
        Route::get('/order-writer', [OrderController::class, 'orderWD'])->name('order.writer');
        Route::post('/order-writer', [OrderController::class, 'orderWD2'])->name('order.writer2');

        Route::POST('/update_status', [OrderController::class, 'updateStatus'])->name('update_status');
        Route::POST('/update_date', [OrderController::class, 'updateDate'])->name('update_date');

        route::get('/status-details', [OrderController::class, 'statusDetails'])->name('status-details');
        Route::get('/writer-available', [OrderController::class, 'writerAvailable'])->name('writer.available');

        route::get('/whatsapp', [WhatsappController::class, 'whatsapp'])->name('whatsapp');
        Route::post('/image-upload', [WhatsappController::class, 'uploagImages'])->name('image.upload');
        Route::post('/complaint.submit', [WhatsappController::class, 'sendMessage'])->name('complaint.submit');

    });

  
    

});

Route::middleware(['auth', 'letslearn.access'])->group(function () {
  // Route for LetsLearn Start
  Route::get('/ll-leads', [ApiControllerForLetsLearn::class, 'll_fetchLeads'])->name('ll_fetchLeads');
  Route::put('/ll-leads/update/{id}', [ApiControllerForLetsLearn::class, 'updateLead'])->name('ll.lead.update');
  Route::post('/ll-leads/convert/{id}', [ApiControllerForLetsLearn::class, 'convertLead'])->name('ll.lead.convert');
  Route::post('/ll-leads/cancel/{id}', [ApiControllerForLetsLearn::class, 'cancelLead'])->name('ll.lead.cancel');
  
  Route::get('/ll-get-files-by-order', [ApiControllerForLetsLearn::class, 'getFilesByOrder']);
  Route::get('/ll-checkUser', [ApiControllerForLetsLearn::class, 'checkUser'])->name('ll.checkUser');
  Route::post('/ll-leads', [ApiControllerForLetsLearn::class, 'createLead'])->name('ll.leads.create');
  
  // c-leads on ll
  Route::get('/ll-c-leads', [ApiControllerForLetsLearn::class, 'll_fetchC_Leads'])->name('ll_fetchC_Leads');
  Route::post('/ll-leads/restore/{id}', [ApiControllerForLetsLearn::class, 'restore'])->name('ll.lead.restore');
  Route::post('/ll-leads/delete/{id}', [ApiControllerForLetsLearn::class, 'delete'])->name('ll.lead.delete');

  // orders on ll
  Route::get('/ll-orders', [ApiControllerForLetsLearn::class, 'll_fetchOrders'])->name('ll_fetchOrders');
  Route::put('/ll-orders/update/{id}', [ApiControllerForLetsLearn::class, 'updateOrder'])->name('ll.order.update');

  // get ll user
  Route::get('/ll-search-user', [ApiControllerForLetsLearn::class, 'll_SearchUser'])->name('ll_search_user');

  // Route for LetsLearn End
});

require __DIR__ . '/auth.php';

