<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="IT Solutions &amp; Business Services Responsive HTML5 Bootstrap5  Website Template">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <!-- fav icon -->
        <link rel="icon" href="assets/images/fav-icon/fav-icon.png">
        
        <!-- bootstarp -->
        <link rel="stylesheet" href="css/vendors/bootstrap.min.css">
        
        <!-- animate.css file -->
        <link rel="stylesheet" href="css/vendors/animate.css">
        
        <!-- flaticon -->
        <link rel="stylesheet" href="css/vendors/flaticon/flaticon.css">
        
        <!-- fontAwesome -->
        <link rel="stylesheet" href="css/vendors/all.min.css">
        
        <!-- bootstrap icons -->
        <link rel="stylesheet" href="css/vendors/bootstrap-icons-1.9.1/bootstrap-icons.css">
        
        <!-- Font Family -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800&amp;display=swap">
        
        <!-- main-LTR -->
         <!-- Include Bootstrap (if not already included) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<style>
    .toast-container {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 1050;
    }

    .toast {
        animation: slideIn 0.5s ease-in-out;
    }

    @keyframes slideIn {
        from {
            transform: translateY(-50px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }
</style>
        <link rel="stylesheet" href="css/main-LTR.css">
        <title> Qabaal |   Contact Us</title>
  </head>
  <body class=" dark-theme ">
  @include('frontend.layouts.page-header')
    <!--End Page Header-->
    <!-- Start inner Page hero-->
    <section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
      <div class="overlay-photo-image-bg parallax" data-bg-img="assets/images/hero/qa2.jpg" data-bg-opacity="1"></div>
      <div class="overlay-color" data-bg-opacity=".75"></div>
      <div class="container">
        <div class="hero-text-area centerd">
          <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">Request Form</h1>
          <nav aria-label="breadcrumb ">
            <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="/frontedn/indexHome"><i class="bi bi-house icon "></i>home</a></li>
              <li class="breadcrumb-item active">Request Form</li>
            </ul>
          </nav>
        </div>
      </div>
    </section>
   
 
<section class="contact-us mega-section pb-0" id="contact-us">
    <div class="container">
        <div class="row">
            <!-- Request Form Section -->
            <div class="col-md-7">
                <div class="contact-form-panel">
                    <div class="sec-heading centered">
                        <div class="content-area">
                            <h2 class="title wow fadeInUp" data-wow-delay=".4s">Request Form</h2>
                        </div>
                    </div>
         <div class="contact-form-inputs wow fadeInUp" data-wow-delay=".6s">
          <div class="custom-form-area input-boxed">
           <div class="toast-container">
              @if(session('success'))
                  <div class="toast show align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
                      <div class="d-flex">
                          <div class="toast-body">
                              <i class="bi bi-bell-fill"></i> <!-- Bootstrap Bell Icon -->
                              {{ session('success') }}
                          </div>
                          <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                      </div>
                  </div>
              @endif
        </div>
        
                            <!-- Form -->
   <form class="main-form" action="{{ route('request.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="input-wrapper">
                <input class="text-input form-control" id="name" name="name" type="text" required>
                <label class="input-label" for="name"> Name <span class="req">*</span></label>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="input-wrapper">
                <input class="text-input form-control" id="email" name="email" type="email" required>
                <label class="input-label" for="email"> E-mail <span class="req">*</span></label>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="input-wrapper">
                <input class="text-input form-control" id="phone" name="phone" type="text">
                <label class="input-label" for="phone"> Phone Number</label>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="input-wrapper">
                <input class="text-input form-control" id="city" name="city" type="text">
                <label class="input-label" for="city"> City <span class="req">*</span></label>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="input-wrapper">
                <input class="text-input form-control" id="institution" name="institution" type="text">
                <label class="input-label" for="institution"> Institution <span class="req">*</span></label>
            </div>
        </div>
        <div class="col-12 col-lg-6">
    <div class="input-wrapper">
        <select class="text-input form-control" id="project" name="project">
            <option value="" disabled selected>Select System for Your Institution</option>
            @foreach ($projects as $project)
                <option value="{{ $project->name }}">{{ $project->name }}</option>
            @endforeach
        </select>
        <label class="input-label" for="project"> Systems<span class="req">*</span> </label>
    </div>
</div>




        <div class="col-12">
            <div class="input-wrapper">
                <textarea class="text-input form-control" id="message" name="message" rows="4"></textarea>
                <label class="input-label" for="message"> Your Message </span></label>
            </div>
        </div>
        <div class="col-12 submit-wrapper">
    <button class="btn custom-btn w-100" type="submit">Send Your Request</button>
</div>


<style>
    /* Style for the Submit Button */
    .custom-btn {
        background-color: #3498db;    /* Blue color for the button */
        color: #fff;                  /* White text */
        font-size: 16px;               /* Larger text for readability */
        padding: 15px;                 /* Add some padding for comfort */
        border: none;                 /* Remove the border */
        border-radius: 5px;           /* Rounded corners */
        font-weight: 600;              /* Bold text */
        transition: background-color 0.3s ease, transform 0.2s ease; /* Smooth transition effects */
    }

    .custom-btn:hover {
        background-color: #2980b9;    /* Darker blue when hovering */
        transform: scale(1.05);        /* Slightly enlarge on hover */
    }

    .custom-btn:active {
        background-color: #1c5980;    
    }
</style>
    </div>
</form>

                        </div>
                    </div>
                </div>
            </div>

          <!-- Contact Information Section -->
          <div class="col-md-5 d-flex align-items-center">
          <div class="card p-4 shadow-sm mx-auto" style="max-width: 400px; width: 100%;">
          <!-- Logo Section -->
        <div class="text-center mb-3">
            <img src="{{ asset('/assets/img/logo.png') }}" alt="Logo" class="img-fluid" style="max-width: 150px;">
        </div>

        <h4 class="text-center custom-heading">Office Location</h4>
        <p class="text-center custom-phone"><strong>+252 (05) 800000</strong></p>
        <p class="text-center custom-location">Bosaso, Masjid Aqsa</p>
        <p class="text-center">
            <a href="mailto:info@qabaal.so" class="custom-email">info@qabaal.com</a>
        </p>
        <h6 class="text-center custom-subheading">Opening Hours</h6>
        <p class="text-center custom-hours">SAT - THUR 7:30 - 21:00</p>

    </div>
</div>



        </div>
    </div>
</section>



    <!-- End contact-us -->
    @include('frontend.layouts.footer')
    <!-- End  page-footer Section-->
    
    <!-- Start back-to-top Button-->
    <div class="back-to-top" id="back-to-top"><i class="bi bi-arrow-up icon "></i>
    </div>
    <!-- End back-to-top Button-->
    <!-- Start privacy-policy-modal-->
    <div class="modal privacy-policy-modal fade" id="privacyPolicyModal" aria-labelledby="PrivacyPolicyModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-xl ">
        <div class="modal-content text-dark">
          <div class="modal-header">
            <h2 class="modal-title" id="PrivacyPolicyModalLabel">Privacy Policy  Qabaal Software Tech.</h2>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="content">
              <h4>Privacy Policy</h4>
              <p>At Qabaal Software Technologies, we are committed to safeguarding the privacy and security of our clients and website visitors. This Privacy Policy outlines how we collect, use, share, and protect personal information when you engage with our services, access our website, or communicate with us. By using our services, you agree to the practices described in this policy.?</p>
            </div>
            <div class="content">
              <h4>Introduction </h4>
              <p>Qabaal Software Technologies, headquartered in Bosaso, Puntland, Somalia, takes privacy seriously and is dedicated to maintaining transparency about how we handle your personal information. This Privacy Policy explains the types of data we collect, how we use it, and the measures we take to ensure its protection. We are committed to complying with all applicable privacy laws and ensuring the security of the information entrusted to us.</p>
            </div>
            <div class="content">
              <h4>Information We Collect </h4>
              <p>We collect personal data to enhance the quality of our services. The types of information we may collect include:</p>
              <h5>Personal Information: <b style="font-weight: normal;font-size: 16px;">Such as name, email address, phone number, company information, and payment details when you register for services, request information, or make a transaction. <br></b> </h5>
              <h5>Usage Data: <b style="font-weight: normal;font-size: 16px;">Information automatically collected from interactions with our website, such as IP address, browser type, device information, geographic location, and browsing activity.<br></b> </h5>
              <h5>Cookies and Tracking Technologies:  <b style="font-weight: normal;font-size: 16px;">We use cookies and similar technologies to gather information about how our website is used, personalize your experience, and conduct website analytics.<br></b> </h5>
            </div>
            <div class="content">
              <h4>How We Use Your Information </h4>
              <p>The data we collect is used to deliver and improve our services, communicate with you, and ensure compliance with legal obligations. Specifically, we use your information for the following purposes:</p>
              <ul>
                <li>To provide and maintain our services, including processing transactions and communicating with you.</li>
                <li>To personalize your experience and tailor content or features based on your preferences.</li>
                <li>To monitor and analyze usage trends, improve the performance of our website and services, and develop new features.</li>
                <li>To comply with legal obligations, respond to law enforcement requests, and protect our legal rights.</li>
                <li>To communicate updates, marketing materials, or service-related information if you have opted to receive such communications.</li>
              </ul>              

            </div><div class="content">
              <h4>Data Sharing and Disclosure</h4>
              <p>We do not sell or rent your personal information to third parties. However, we may share your data in the following circumstances:</p>
              <ul>
                <li><strong>Service Providers:</strong> We may engage third-party vendors, consultants, or service providers who perform essential functions on our behalf, such as payment processing, hosting, and analytics. These parties have access to personal data only as needed to perform their services and are bound by confidentiality agreements.</li>
                <li><strong>Legal Compliance:</strong> We may disclose your information if required to do so by law, in response to a court order, subpoena, or government request, or to protect the rights, property, or safety of Qabaal Software Technologies, our clients, or the public.</li>
                <li><strong>Business Transfers:</strong> If Qabaal Software Technologies undergoes a business transaction such as a merger, acquisition, or asset sale, your data may be transferred as part of the transaction.</li>
              </ul>
            </div>
            
            <div class="content">
              <h4>Cookies and Tracking Technologies</h4>
              <p>Our website uses cookies to provide a seamless and personalized experience for users. Cookies are small text files placed on your device to track how you navigate our site, remember your preferences, and improve functionality. We also use third-party tracking services to analyze website traffic and user behavior.</p>
              <p>You may choose to disable cookies through your browser settings, but this may impact the usability of certain features on our site.</p>
            </div>
            
            <div class="content">
              <h4>Data Security Measures</h4>
              <p>We employ a variety of technical and organizational security measures to protect your personal data from unauthorized access, misuse, alteration, and disclosure. These measures include encryption, firewalls, access controls, and secure data storage. Despite our efforts to secure your information, no method of data transmission over the internet or electronic storage is entirely secure. While we strive to protect your personal data, we cannot guarantee its absolute security.</p>
            </div>
            
            <div class="content">
              <h4>Your Privacy Rights</h4>
              <p>You have several rights regarding your personal data, which may vary based on your jurisdiction. These rights may include:</p>
              <ul>
                <li><strong>Access:</strong> The right to request a copy of the personal information we hold about you.</li>
                <li><strong>Correction:</strong> The right to request corrections to any inaccurate or incomplete data.</li>
                <li><strong>Deletion:</strong> The right to request that we delete your personal data, City to certain legal obligations.</li>
                <li><strong>Restriction:</strong> The right to limit the processing of your personal data.</li>
                <li><strong>Objection:</strong> The right to object to the use of your personal data for direct marketing or other purposes.</li>
              </ul>
              <p>To exercise your privacy rights or make a request, please contact us at <a href="mailto:info@qabaal.com">info@qabaal.com</a>.</p>
            </div>
            
            <div class="content">
              <h4>Third-Party Services</h4>
              <p>Qabaal Software Technologies may link to third-party websites or services that operate independently from us. Please be aware that third-party services have their own privacy policies, and we do not control how they collect, use, or share your information. We encourage you to review the privacy policies of these external services before engaging with them.</p>
            </div>
            
            <div class="content">
              <h4>Data Retention and Deletion</h4>
              <p>We retain your personal information only as long as necessary to fulfill the purposes outlined in this Privacy Policy, including complying with legal and regulatory obligations. When your data is no longer required, we will securely delete or anonymize it to ensure it cannot be linked back to you.</p>
            </div>
            
            <div class="content">
              <h4>Children’s Privacy</h4>
              <p>Our services are not directed toward individuals under the age of 13, and we do not knowingly collect personal information from children. If we learn that we have inadvertently collected data from a child without parental consent, we will take steps to delete it as soon as possible.</p>
            </div>
            
            <div class="content">
              <h4>International Data Transfers</h4>
              <p>As a company based in Somalia, we may transfer, store, and process your information in countries outside your own. These countries may not have the same level of data protection laws as your jurisdiction. However, we take steps to ensure your information remains protected under appropriate safeguards when transferred internationally.</p>
            </div>
            
            <div class="content">
              <h4>Changes to This Privacy Policy</h4>
              <p>We reserve the right to modify or update this Privacy Policy at any time. Any changes will be posted on this page, and significant changes will be communicated directly to you via email or a prominent notice on our website. Please check this page periodically to stay informed of any updates.</p>
            </div>
            
            <div class="content">
              <h4>Contact Information</h4>
              <p>If you have any questions, concerns, or requests regarding this Privacy Policy or your personal information, please contact us using the details below:</p>
              <p><strong>Qabaal Software Technologies</strong><br>
              Bosaso, Puntland, Somalia<br>
              Email: <a href="mailto:info@qabaal.com">info@qabaal.com</a><br>
              Phone: +252907390040</p>
            </div>
            
            <div class="modal-footer">
              <button class="btn-solid" type="button" data-bs-dismiss="modal" aria-label="Close">Click to close</button>
              <button class="btn-outline" type="button" data-bs-dismiss="modal" >Do something else</button>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <!-- End privacy-policy-modal-->   
        
        <!--     JQuery     -->
        <script src="js/vendors/jquery-3.6.1.min.js"></script>
        
        <!--     bootstrap     -->
        <script src="js/vendors/bootstrap.bundle.min.js"></script>
        
        <!--     wow     -->
        <script src="js/vendors/wow.min.js"></script>
        
        <!--     main     -->
        <script src="js/main.js"></script>
  </body>
</html>