<?php
/**
  Template Name: RSI Candidate
*/

//* Force full width content layout
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

//* Add Custom Loop
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'custom_do_loop' );
function custom_do_loop() { ?>

<div class="about-strengths">
  <div class="wrap">

    <section class="purple-light">

      <h3 class="title-content">Our Mission</h3>

      <?php the_field('our_mission'); ?>

    </section>

  </div>
</div>

<div class="specialisation">
  <div class="wrap">

    <div class="title-content">Our Areas of Specialisation</div>

    <?php echo do_shortcode('

    [expand title="General Management" rel="animal-highlander"]
    <div class="bg-general">
      <div class="one-half area-opacity">

        <p>In today\'s commercial environment, the themes of globalisation, enhanced competition and increased customer expectation are the common challenges facing all leading organisations requiring competent, focused and proven management professionals with outstanding leadership and management skills.</p>
        <p>At RSI International Asia, we focus on General Management and Director Search assignments for a wide variety of business organisations. These organisations include large publicly held and private corporations, emerging public and private companies, and not for profit entities. Our mission has been straightforward: add value to boards of directors and their shareholders by identifying, evaluating and presenting exceptional senior management candidates.</p>
        <p>Types of assignments include:</p>

        <div><b>Managing Director</b> — Leading Luxury Goods Retailer</div>
        <div><b>Managing Director</b> – Asian Insurance Company</div>
        <div><b>Country Manager</b> – US Tool Manufacturer</div>
        <div><b>Country Director</b> — Leading Transportation Company</div>
        <div><b>Client Services Director</b> – International Consulting Company</div>

      </div>
    </div>
    [/expand]

    [expand title="CFO/Financial Management" rel="animal-highlander"]
    <div class="bg-cfo">
      <div class="one-half area-opacity">

        <p>As we see continual investment and market expansion in SE Asia, the need for highly skilled finance professionals has become increasingly apparent. In line with this, businesses are also becoming increasingly aware of the need for diversity, whereby organisations are keen to hire a true representation of the demographics of the region. The roles of chief financial officers and other senior finance executives are growing more complex and demanding. Not only are they expected to run the financial day to day operations of the company, they must guarantee the integrity of an organization\'s financial condition and reported results, enhance shareholder value, oversee mergers &amp; acquisitions, establish an optimal risk management program, and keep a close watch on costs.</p>
        <p>In addition, this must be done under scrutiny from the board of directors and shareholders alike. RSI International Asia focuses on finding experienced and proven senior finance managers who are seasoned finance professionals in all aspects of financial management.</p>
        <p>Types of assignments include:</p>

        <div><b>Financial Controller</b> – Leading UK Lifestyle Company</div>
        <div><b>Finance Director</b> – International Facility Services Company</div>
        <div><b>Financial Manager</b> – Australian Oil and Gas Company</div>
        <div><b>Financial Controller</b> – Australian Steel Fabricator</div>
        <div><b>Finance Manager</b> – International FMCG Company</div>

      </div>
    </div>
    [/expand]

    [expand title="Sales & Marketing" rel="animal-highlander"]
    <div class="bg-sales">
      <div class="one-half area-opacity">

        <p>Finding really "hands on" dynamic and commercially astute and productive senior sales professionals in today\'s commercially driven environment is not for the timid.</p>
        <p>Today\'s global customer base requires a multi-faceted approach to sales and marketing. With increased competition and an array of choices, customers have become very demanding and senior sales professionals need to really understand the needs of their target audience and more importantly build sound commercial relationships with their clients and customers alike.</p>
        <p>At RSI International Asia, we focus on finding highly accomplished sales business development and marketing professionals across all the sales and marketing disciplines: VP Sales and Marketing, Business Development Director, Business Development Managers, Marketing Directors, Sales Directors, Sales Managers and Marketing Managers.</p>
        <p>Types of assignments include:</p>

        <div><b>VP Sales & Marketing</b> – Leading European Logistics Provider</div>
        <div><b>BD Director</b> – US Power Generation Company</div>
        <div><b>Marketing Director</b> – Leading FMCG Multinational</div>
        <div><b>BD Manager</b> – Global Specialty Chemicals Company</div>
        <div><b>VP Sales</b> – International Insurance Brokerage</div>

      </div>
    </div>
    [/expand]

    [expand title="Human Resources" rel="animal-highlander"]
    <div class="bg-human">
      <div class="one-half area-opacity">

        <p>The Human Resources function is playing an increasingly important role in organisations which now expect a strong commercial focus and a drive for business results from their HR partners.</p>
        <p>As organisations focus on finding and retaining the best talent across all their disciplines, it is the HR function which is ultimately responsible for driving the talent agenda.</p>
        <p>Successful management and retention of top talent will always be a key priority in any business and this can only be truly supported if the HR function also has these competencies and experience. At RSI International Asia, we focus on finding HR professionals across all the HR disciplines: HR Generalist, Learning and Development, HR Recruitment, Organisational Development, Employee and Industrial Relations, HR Compensation and Benefits and HR Shared Services. We work across a broad range of sectors.</p>
        <p>Types of assignments include:</p>

        <div><b>Head of HR</b> – Pharmaceutical Multinational</div>
        <div><b>HR Director</b> – European Manufacturing Company</div>
        <div><b>HR Manager</b> –Leading International Insurance Company</div>
        <div><b>HR Partner</b> – Consulting Services Leader</div>
        <div><b>Talent Acquisition Manager</b> – Leading Asian Retailer</div>

      </div>
    </div>
    [/expand]

    [expand title="Supply Chain, Logistics & Operations" rel="animal-highlander"]
    <div class="bg-supply">
      <div class="one-half area-opacity">

        <p>Supply chains have existed for a long time but many organisations have only recently understood, much less managed the entire chain of activities that ultimately delivered products to the final customer. The result was disjointed and often ineffective supply chains. Most companies now actively manage their supply chain activities in order to maximise customer value and achieve a sustainable competitive advantage. It represents a conscious effort by companies to develop and run supply chains in the most effective & efficient ways possible. The organisations that make up the supply chain are "linked" together through physical flows and information flows. Physical flows involve the transformation, movement, and storage of goods and materials. RSI International Asia focuses on finding exceptional candidates from the entire supply chain which covers product development, sourcing, production, and logistics, as well as the distribution systems needed to coordinate these activities.</p>
        <p>Types of assignments include:</p>

        <div><b>Supply Chain Director</b> – Leading Footwear Manufacturer</div>
        <div><b>Logistics Director</b> – International Roofing Manufacturer</div>
        <div><b>Transport Director</b> – Concrete Processing & Distribution Leader</div>
        <div><b>Operations Director</b> – Leading Transportation Company</div>
        <div><b>Supply Chain Manager</b> – Leading FMCG Company</div>

      </div>
    </div>
    [/expand]

    [expand title="Consumer & Retail" rel="animal-highlander"]
    <div class="bg-consumer">
      <div class="one-half area-opacity">

        <p>Among the first casualties in tough times are development activities and investment in people. However, it is exactly in times of great challenge that forward-thinking organisations show conviction and courage. They recognise that addressing the demographic trends that are shaping the future for consumer companies will require exceptional leadership talent. Further, history tells us that organisations which have made a thoughtful investment in talent enjoy positive returns even in a downturn and outperform their competitors over the longer term. This approach includes acquisition of key talent, as well as an effective strategy for developing and optimising the effectiveness of international teams. RSI International Asia is clients in Consumer and Retail comprise companies manufacturing and distributing food, beverages, personal care, durable goods and general merchandise. They range from large blue chip multinationals to strong regional/domestic players and smaller, often private equity backed start-up organisations.</p>
        <p>Types of assignments include:</p>

        <div><b>General Manager</b> – International Retailer</div>
        <div><b>Product Development Director</b> – Leading FMCG Company</div>
        <div><b>Marketing Manager</b> – Leading FMCG Company</div>
        <div><b>Head of Sales</b> – Non-Food, Leading FMCG Company</div>
        <div><b>Brand Development Director</b> – Luxury Goods Company</div>
        <div><b>Production Director</b> – International Battery Manufacturer</div>

      </div>
    </div>
    [/expand]

    [expand title="Industry & Manufacturing" rel="animal-highlander"]
    <div class="bg-industry">
      <div class="one-half area-opacity">

        <p>Quality, experience and innovation remain critical to the manufacturing sector. Customers have more supplier choices than ever, and to remain competitive, businesses must think strategically about their products, services and delivery channels. RSI International Asia serves clients involved in the manufacturing of components, parts and finished goods and in the fabrication of metals, plastics and components for industry. Other clients are involved in the manufacturing of electronic goods, industrial equipment, tooling, machines, automotive parts and durables that are manufactured for both domestic and overseas markets. We are very familiar with the SE Asian local and regional candidate pools available to manufacturing plants and factories and the specific terminology used within the industry, thus enabling us to rapidly source candidates and to effectively assess the skill sets of suitable individuals.</p>
        <p>Types of assignments include:</p>

        <div><b>Operations Director</b> – European Components Manufacturer</div>
        <div><b>Production Director</b> – International Battery Manufacturer</div>
        <div><b>QA Manager</b> – US Tool Manufacturer</div>
        <div><b>Manufacturing Director</b> – International Adhesives Manufacturer</div>
        <div><b>Engineering & Facilities Manager</b> – Leading FMCG Company</div>

      </div>
    </div>
    [/expand]

    [expand title="Information Technology" rel="animal-highlander"]
    <div class="bg-info">
      <div class="one-half area-opacity">

        <p>The compelling financial attraction for software development in Asia has long been known, but with the increasing sophistication of users and the need for Asian regional offices to offer local support, so the increase in regionally based resources has increased. Overseas IT vendors cannot rely on periodic visits to Asia if they wish to be taken seriously, no matter how compelling their proposition appears to be; face to face dialogue and local office presence is essential. This is fuelling demand in the IT sector for local expertise with comprehensive understanding of local business practices and processes. In addition, the increasing usage of sophisticated IT implementations for Cloud computing and related data security, CRM, PoS, ERM, etc. is driving demand for local business development, project management, implementation and technical support resources. RSI International Asia has in-depth expertise in this sector with a combined knowledge spanning more than 50 years in the IT arena.</p>
        <p>Types of assignments include:</p>

        <div><b>CTO</b> – Leading Healthcare Provider</div>
        <div><b>CIO</b> – Global Insurance Company</div>
        <div><b>Project Manager</b> – International Management Consultancy Firm</div>
        <div><b>Business Process Consultant</b> – Global IT Consulting Division</div>
        <div><b>Development Team Manager</b> – Large Asian Software House</div>
        <div><b>IT Manager</b> – Leading Regional Insurer</div>
        <div><b>Managing Director, Asia</b> – Big Data Analytics Company</div>
        <div><b>Major Account Sales Director</b> – Global Insurance Software Company</div>
        <div><b>New Business Development Manager</b> – Global Cyber Security Software</div>

      </div>
    </div>
    [/expand]

    [expand title="Insurance" rel="animal-highlander"]
    <div class="bg-insurance">
      <div class="one-half area-opacity">

        <p>The insurance industry in Asia is undergoing significant change. The introduction of Risk Based Capital is leading to a huge demand in actuarial, underwriting and risk management resources.</p>
        <p>In the case of capital adequacy shortfalls, raising reserves in the current climate can be a challenge and as a consequence we are seeing M & A activity leading to increased personnel requirements.</p>
        <p>The focus of foreign insurers to establish and expand across the region continues to grow and this is driving the demand for skilled insurance executives at all levels.</p>
        <p>RSI International Asia has the knowledge and contacts across the insurance sector in the whole of Asia and a comprehensive understanding of the industry, its challenges and the resources required to ensure successful growth in this market.</p>
        <p>Types of assignments include:</p>

        <div><b>Business Development Director</b> – Worldwide Insurer</div>
        <div><b>Actuarial Consultant</b> – Regional Non-Life Insurer</div>
        <div><b>Underwriting Manager</b> – International Insurer</div>

      </div>
    </div>
    [/expand]

    [expand title="Life Sciences" rel="animal-highlander"]
    <div class="bg-sciences">
      <div class="one-half area-opacity">

        <p>Life Science is one of the largest, most innovative and exciting industries in the world; the constant demand for greater healthcare pushes companies to break new boundaries year on year.</p>
        <p>The Life Sciences industry is expanding at a phenomenal rate throughout Asia and with new innovations in healthcare and drug development at an all-time high, the need for exceptional talent has never been greater.</p>
        <p>RSI International Asia are leaders in the delivery of world class candidates to the pharmaceutical, medical device, animal health and nutrition industries. Drawing on local talent as a foundation, RSI has a proven record in delivering the very best candidates across all disciplines and functions. RSI are also able to call upon its global Life Sciences network to bring the world\'s best talent to this region.</p>
        <p>Types of assignments include:</p>

        <div><b>VP, Market Access</b> – Dynamic Biopharma MNC</div>
        <div><b>Country General Manager</b> – Global Pharma MNC</div>
        <div><b>Chief Scientific Officer</b> – Global Pharma MNC</div>
        <div><b>Head of Regulatory Affairs</b> – Global Medical Device MNC</div>
        <div><b>Director of Innovation</b> – Healthcare Consortium</div>
        <div><b>Clinical Lead</b> – Contract Research Organisation</div>

      </div>
    </div>
    [/expand]

    ')?>

  </div>
</div>

<div id="available-positions" class="available-positions">
  <div class="wrap">

    <div class="title-content">Available Positions</div>

    <p>Whether you're searching for your dream job or looking to recruit the ideal person for your business, we can help.</br>
    At RSI International Asia we bring business executives and employers together.</p> <?php

    //* Include Avaliable Positions Loop
    include_once( get_stylesheet_directory() . '/inc/available-positions-loop.php' ); ?>

    <div class="clear-6rem"></div>

    <div style="text-align:center;">
      <a href="/available-jobs/" class="button">View all jobs</a>
    </div>

    <p>If our current job positions do not suit your experience, but you would like to discuss your specific requirements, please feel free to contact us for a confidential discussion.</p>

  </div>
</div>

<div class="testimonail">
  <div class="wrap">

    <h3 class="title-content">Testimonials</h3> <?php

    //* Include Testimonials Slider
    include_once( get_stylesheet_directory() . '/inc/testimonials-slider.php' ); ?>

  </div>
</div>

<div class="clients">
  <div class="wrap content-padding"> <?php

    //* Include Testimonials Slider
    include_once( get_stylesheet_directory() . '/inc/client-logo-slider.php' ); ?>

  </div>
</div>

<div class="contact">
  <div class="wrap">

    <div class="column one-half">
      <h4 class="title-content">Contact Us</h4>
      <p>We are always ready to assist you with your search requirements. Talk to us to find out how RSI International Asia can be of assistance to you.</p>

      <div id="contact" class="form-container"> <?php
        echo do_shortcode('[contact-form-7 id="45" title="Main Contact Form"]'); ?>
      </div>

    </div>

    <div class="column one-half">
      <h4 class="title-content">Our Location</h4>
      <p>Our office in Park Ventures is the newest prime CBD location in the heart of Bangkok, situated at the intersection of Wireless Road and Ploenchit Road. The office has direct access to the Ploenchit BTS skytrain station.</p>

      <p><strong class="purple-light">RSI International Asia, Level 18, Park Ventures Ecoplex, 57 Wireless Road, Lumpini, Patumwan, Bangkok, 10330, Thailand.</strong>
    </p>

      <div class="callus">
        Telephone: + 66 2 309 3538
        <br> Facsimile: + 66 2 309 3434
        <br> Email: enquiry@rsiinternational.asia
      </div>
    </div>

  </div>
</div>

<div class="map">
  <p><a href="https://www.google.com/maps/place/Park+Ventures+Ecoplex/@13.742902,100.548288,17z/data=!4m2!3m1!1s0x0:0xa9c63295a78094e0?hl=en" target="_blank">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/map.jpg" style="width: 100%;">
  </a></p>
</div> <?php
}

genesis();
