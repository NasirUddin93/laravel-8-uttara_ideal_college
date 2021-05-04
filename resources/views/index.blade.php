<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>mind</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- fevicon -->
  <link rel="icon" href="{{ asset('assets/images/fevicon.png" type="image/gif')}}"/>
  <!-- bootstrap css -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
  <!-- style css -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('assets/css/layout.css')}}">
        <!-- style css -->
        <link rel="stylesheet" href="{{ asset('assets/css/framework.css')}}">
  <!-- Responsive-->
  <link rel="stylesheet" href="{{ asset('assets/css/responsive.css">')}}  
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/jquery.mCustomScrollbar.min.css')}}">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="{{ asset('assets/https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen')}}">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
  <!-- loader  -->
  <div class="loader_bg">
    <div class="loader"><img src="{{ asset('assets/images/loading.gif')}}" alt="#" /></div>
  </div>
  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
    <div class="header-top">
      <div class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                    <a href="/"><img src="{{ asset('assets/images/uic_logo.jpg')}}" alt="#" /></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-8 col-md-8 col-sm-9">
              <div class="header_information">
               <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main">
                      <li class="active"> <a href="/">Home</a> </li>
                      <li> <a href="#courses">Groups </a> </li>
                      <li> <a href="#about">About</a> </li>
                      <li> <a href="#learn">Profile</a> </li>
                      <li> <a href="#important">Facilities</a> </li>
                      <li> <a href="#contact">Contact</a> </li>
                     </ul>
                   </nav>
                 </div>
               </div> 
               <div class="mean-last">
                       <a href="#"><img src="{{ asset('assets/images/search_icon.png')}}" alt="#" /></a> <a href="#">login/sing up</a></div>              
             </div>
           </div>
         </div>
       </div>
     </div>
     <!-- end header inner -->

     <!-- end header -->
     <section class="slider_section">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">
                <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="text-bg">
                      {{-- <h1>Search your Favorite Course here</h1> --}}
                      <h1>উত্তরা আইডিয়াল কলেজটিতে আপনাকে স্বাগতম</h1>
                      <p>TOP NOTCH COURSES FROM TRAINED PROFESSIONALS</p>
                      <a href="#">Read more</a> <a href="#">get a qoute</a>
                    </div>
                  </div>
                  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                    <div class="images_box">
                      <figure><img src="{{ asset('assets\images/img2.png')}}"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid padding_dd">
              <div class="carousel-caption">

                <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="text-bg">
                      {{-- <h1>Search your Favorite Course here</h1> --}}
                      <h1>TC এর মাধ্যমে ভর্তি চলছে</h1>
                      <p>TOP NOTCH COURSES FROM TRAINED PROFESSIONALS</p>
                      <a href="#">Read more</a><a href="#">get a qoute</a>
                    </div>
                  </div>

                  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                    <div class="images_box">
                      <figure><img src="{{ asset('assets/images/img2.png')}}"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>


          <div class="carousel-item">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption ">
                <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="text-bg">
                      {{-- <h1>Search your Favorite Course here</h1> --}}
                      <h1> কলেজের সকল লেনদেন ব্যাংকের মাধ্যমে হয়</h1>
                      <p>TOP NOTCH COURSES FROM TRAINED PROFESSIONALS</p>
                      <a href="#">Read more</a> <a href="#">get a qoute</a>
                    </div>
                  </div>
                  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                    <div class="images_box">
                      <figure><img src="{{ asset('assets/images/img2.png')}}"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</section>
</div>
</header>



<!-- about  -->
<div id="about" class="about">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <h2>অধ্যক্ষের <strong class="yellow">বাণী</strong></h2>
          <p> শিক্ষা হলো একজন মানুষের জন্মগত মৌলিক অধিকার। এ পৃথিবীতে শিক্ষাকে ব্যাবস্থাকে পশ্চাতে রেখে শুধু বাংলাদেশ নয় পৃথিবীর কোন জাতি বা জনগোষ্ঠী আজ পর্যন্ত সামনের দিকে অগ্রসর হতে পারছে না। তাই পৃথিবীর সকল জাতিই সবার আগে সর্বাগ্রে শিক্ষা ব্যবস্থাকে গুরুত্ব দিচ্ছে। একজন মানুষ এ পৃথিবীতে পরিপূর্ণ ভাবে বাচতে হলে ৫ টি মৌলিক চাহিদার মধ্যে  সর্বাগ্রে প্রয়োজন তার শিক্ষা। শিক্ষাই পারে একজন মানুষকে একটি জাতি কে সভ্য, আদর্শ ও মানবিক করে তোলতে। এজন্য বাংলাদেশ সরকার দেশের প্রতিটি নাগরিক কে শিক্ষার আওতায় আনার জন্য ব্যাপক পদক্ষেপ গ্রহণ করে। দেশের প্রতিটি শিশু কে সু শিক্ষায় শিক্ষিত করে গড়ে তোলার জন্য শিক্ষাখাতকে  যুগোপযোগী করে তোলছে।</p>
          <a href="Javascript:void(0)">আরো পড়ুন </a>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <figure><img src="{{ asset('assets/images/about.jpg')}}" alt="#" /></figure>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- end abouts -->

{{-- Teacher Speech start --}}
<div class="wrapper row3">
  <section id="team" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="center btmspace-80">
      <h6 class="heading underline font-x2">সম্মানিত শিক্ষকবৃন্দের বাণী</h6>
    </div>
    <ul class="nospace group">
      <li class="one_quarter first">
        <article>
          <figure><a class="imgover" href="#"><img src="{{ asset('assets/images/my1.jpg')}}" alt=""></a>
            <figcaption class="heading">অনিমেষ হালদার</figcaption>
          </figure>
          <em>প্রভাষক, অর্থনীতি</em>
          <p>আমাদের দেশে মধ্যবিত্তরা বেশ বিপদেই আছেন। ঢাকা শহরের সন্তানদের স্কুলে ভর্তি করা যে কত বড় বিড়ম্বনা তা বলে বোঝানো যাবে না। যাদের ছেলেমেয়ে বড় হয়ে গেছে তারাও বুঝবেন। [<a href="#">&hellip;</a>]</p>
          <footer>
            <ul class="faico clear">
              <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
              <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
              <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
              <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
            </ul>
          </footer>
        </article>
      </li>
      <li class="one_quarter">
        <article>
          <figure><a class="imgover" href="#"><img src="{{ asset('assets/images/Nasir_Uddin.JPG')}}" alt=""></a>
            <figcaption class="heading">নাছির উদ্দিন</figcaption>
          </figure>
          <em>প্রভাষক, আইসিটি</em>
          <p>ঢাকা শহরের মিশনারি স্কুলের পড়াশোনার মান তুলনামূলক ভাবে উন্নত। কিন্তু তাদের ভর্তি পদ্ধতি খুবই জটিল এবং অস্পষ্ট। তারা কারও কাছেই জবাবদিহি করে না। [<a href="#">&hellip;</a>]</p>
          <footer>
            <ul class="faico clear">
              <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
              <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
              <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
              <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
            </ul>
          </footer>
        </article>
      </li>
      <li class="one_quarter">
        <article>
          <figure><a class="imgover" href="#"><img src="{{ asset('assets/images/my1.jpg')}}" alt=""></a>
            <figcaption class="heading">আব্দুর রাহমান রানা</figcaption>
          </figure>
          <em>Job Type Here</em>
          <p>জেলা শহরগুলোতেও একেবারে কেজি ক্লাসে ভর্তি করতেও নানা ধরনের পেরেশানির মধ্যে পড়তে হচ্ছে। প্রায় জায়গায় লটারির মাধ্যমে নিজের সন্তানদের ভর্তির যোগ্যতা অর্জন করতে হয়। [<a href="#">&hellip;</a>]</p>
          <footer>
            <ul class="faico clear">
              <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
              <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
              <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
              <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
            </ul>
          </footer>
        </article>
      </li>
      <li class="one_quarter">
        <article>
          <figure><a class="imgover" href="#"><img src="{{ asset('assets/images/my1.jpg')}}" alt=""></a>
            <figcaption class="heading">Jamie Doe</figcaption>
          </figure>
          <em>Job Type Here</em>
          <p>শিক্ষা ও জ্ঞানার্জনের জন্য পঠন-পাঠন অন্যতম মাধ্যম। আমাদের প্রিয় নবী (সা.)–এর প্রতি ওহির প্রথম নির্দেশ ছিল, ‘পড়ো, তোমার রবের নামে, যিনি সৃষ্টি করেছেন, সৃষ্টি করেছেন[<a href="#">&hellip;</a>]</p>
          <footer>
            <ul class="faico clear">
              <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
              <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
              <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
              <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
            </ul>
          </footer>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>


{{-- Teacher Speech end --}}







<!-- our -->
<div id="important" class="important">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage">
          <h2>Some <strong class="yellow">important facts</strong></h2>
          <span>luptatum. Libero eligendi molestias iure error animi totam laudantium, aspernatur similique id eos a
          t consectetur illo culpa,</span>
        </div>
      </div>
    </div>
  </div>
  <div class="important_bg">
    <div class="container">
      <div class="row">

        <div class="col col-xs-12">
          <div class="important_box">
            <h3>৫০০+</h3>
            <span>শিক্ষার্থী সংখ্যা</span>
          </div>
        </div>
        <div class="col col-xs-12">
          <div class="important_box">
            <h3>১২+</h3>
            <span>বিষয় সংখ্যা</span>
          </div>
        </div>
        <div class="col col-xs-12">
          <div class="important_box">
            <h3>২টি</h3>
            <span>বিভাগ সংখ্যা</span>
          </div>
        </div>
        {{-- <div class="col col-xs-12">
          <div class="important_box">
            <h3>700+</h3>
            <span>Students</span>
          </div>
        </div> --}}
        {{-- <div class="col col-xs-12">
          <div class="important_box">
            <h3>10+</h3>
            <span>countries</span>
          </div>
        </div> --}}
      </div>
    </div>
  </div>
</div>
</div>

<!-- end our -->
<!-- Courses -->
<div id="courses" class="Courses">
  <div class="container-fluid padding_left3">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="box_bg">
          <div class="box_bg_img">
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="box_my">
                  <figure><img src="{{ asset('assets/images/my1.jpg')}}"></figure>
                  <div class="overlay">
                    <h3>ব্যবসায় শিক্ষা</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable content o</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="box_my">
                  <figure><img width="263px" height="212px"  src="{{ asset('assets/images/my2.jpg')}}"></figure>
                  <div class="overlay">
                    <h3>মানবিক বিভাগ</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable content o</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="box_my">
                  <figure><img width="263px" height="212px" src="{{ asset('assets/images/my3.jpg')}}"></figure>
                  <div class="overlay">
                    <h3>ব্যবসায় শিক্ষা</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable content o</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="box_my">
                  <figure><img width="263px" height="212px" src="{{ asset('assets/images/my4.jpg')}}"></figure>
                  <div class="overlay">
                    <h3>মানবিক বিভাগ</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable content o</p>
                  </div>
                </div>
              </div>



            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 border_right">
        <div class="box_text">
          <div class="titlepage">
            <h2>আমাদের<strong class="yellow"> বিভাগসমূহ</strong></h2>
            <p>আমাদের রয়েছে দুটি বিভাগ, ব্যবসায় শিক্ষা ও মানবিক বিভাগ</p>
          <p>আন্তর্জাতিক শিশু সনদ এবং শিশু আইনসহ দেশের প্রচলিত আইনে প্রতিটি শিশুকে তাদের সুষ্ঠু শারীরিক ও মানসিক বিকাশ লাভের জন্য শিক্ষা, খেলাধুলা, খাদ্য ও পুষ্টি, শিশুতোষ বিনোদনের সর্বোত্তম ব্যবস্থাসহ শিশুদের সব ধরণের নির্যাতন ও বৈষম্যমুলক আচরণ থেকে আত্মরক্ষার ব্যবস্থার কথা বলা হয়েছে। কিন্তু আমাদের দেশের রাজনৈতিক দলগুলোর আন্দোলন ও হরতালের কারণে শিক্ষার্থীদের পড়ালেখায় ব্যাঘাত ঘটছে। হরতাল-অবরোধ-বিক্ষোভ এবং বিভিন্ন রাজনৈতিক কর্মসুচি চলাকালীন নিরাপত্তার অভাবে শিক্ষার্থীরা বিদ্যালয়ে যেতে পারে না। আবার বিভিন্ন কর্মসুচিতে রাজধানী জুড়ে শুরু হয় অসহনীয় যানজট। তখন ছোট ছোট শিশুদের ঘন্টার পর ঘন্টা যানজটে বসে থাকতে হয়। এতে স্কুলে যেতে দেরি হওয়ার পাশাপাশি অনেক সময় অসুস্থ হয়ে পড়ে শিক্ষার্থীরা।</p>
          <a href="Javascript:void(0)">আর পড়ুন</a>
        </div>
      </div> 
    </div>
  </div>
</div>
<!-- end Courses -->

<!-- learn -->


<div id="learn" class="learn">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage">
          <h2>প্রযুক্তি <strong class="yellow">হাতে কলমে শিক্ষাদান </strong></h2>
          <span>সরকার দেশে সর্বজনীন প্রাথমিক শিক্ষা নিশ্চিতকরণে আন্তর্জাতিকভাবে অঙ্গিকারাবদ্ধ। এ কারনেই সরকার এখাতে অধিক হারে বরাদ্দ দিয়ে আসছে। প্রাথমিক শিক্ষার ক্ষেত্রে আরো সুযোগ সুবিধা বৃদ্ধি, ছাত্র-ছাত্রীদের ভর্তির হার বাড়ানো, ঝরে পড়া শিশুদের বিদ্যালয়ে ভর্তির সুযোগ সৃষ্টি, শিক্ষার গুনগত মানোন্নয়ন ও ব্যবস্থাপনা জোরদার করা হয়েছে। ফলে প্রাথমিক শিক্ষার ক্ষেত্রে বিরাট সাফল্য অর্জিত হয়েছে। আমাদের সকলের উচিৎ এই অর্জন ধরে রাখা।</span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="learn_box">
          <figure><img src="{{ asset('assets/images/img.jpg')}}" alt="img"/></figure>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- MAKE --> 
<div class="make">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage">
          <h2>বিভাগ বাচাই <strong class="white_colo">Courses Standout</strong></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
        <div class="make_text">
          <p>আন্তর্জাতিক শিশু সনদ এবং শিশু আইনসহ দেশের প্রচলিত আইনে প্রতিটি শিশুকে তাদের সুষ্ঠু শারীরিক ও মানসিক বিকাশ লাভের জন্য শিক্ষা, খেলাধুলা, খাদ্য ও পুষ্টি, শিশুতোষ বিনোদনের সর্বোত্তম ব্যবস্থাসহ শিশুদের সব ধরণের নির্যাতন ও বৈষম্যমুলক আচরণ থেকে আত্মরক্ষার ব্যবস্থার কথা বলা হয়েছে। কিন্তু আমাদের দেশের রাজনৈতিক দলগুলোর আন্দোলন ও হরতালের কারণে শিক্ষার্থীদের পড়ালেখায় ব্যাঘাত ঘটছে। হরতাল-অবরোধ-বিক্ষোভ এবং বিভিন্ন রাজনৈতিক কর্মসুচি চলাকালীন নিরাপত্তার অভাবে শিক্ষার্থীরা বিদ্যালয়ে যেতে পারে না। আবার বিভিন্ন কর্মসুচিতে রাজধানী জুড়ে শুরু হয় অসহনীয় যানজট। তখন ছোট ছোট শিশুদের ঘন্টার পর ঘন্টা যানজটে বসে থাকতে হয়। এতে স্কুলে যেতে দেরি হওয়ার পাশাপাশি অনেক সময় অসুস্থ হয়ে পড়ে শিক্ষার্থীরা।সবার জন্য শিক্ষা নিশ্চিতকরণের লক্ষ্যে দেশের সুবিধাবঞ্চিত, স্কুল বহির্ভূত, ঝরে পড়া এবং শহরের কর্মজীবি দরিদ্র শিশুদের প্রাথমিক শিক্ষা কার্যক্রমের আওতায় নিয়ে আসার লক্ষ্যে সরকার বহুমুখী কার্যক্রম গ্রহণ করেছে। দেশের বিভাগীয় শহরগুলোতে  কর্মজীবি শিশু ও কিশোর-কিশোরীদের উন্নততর জীবন অনুসন্ধানে শিক্ষা, নিরাপত্তা ও উন্নয়নমুলক কর্মকান্ডে অংশগ্রহণ নিশ্চিত করার জন্য পর্যায়ক্রমে শিক্ষার্থীদের মৌলিক শিক্ষা প্রদানের কার্যক্রম চলছে।
          </p>
          <a href="Javascript:void(0)">Strat now</a>
        </div>
      </div>
      <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
        <div class="make_img">
          <figure><img src="{{ asset('assets/images/make_img.jpg')}}"></figure>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end MAKE --> 
<!-- end learn --> 


<!-- contact -->
<div id="contact" class="contact">
  <div class="container-fluid padding_left2">
    <div class="white_color">
      <div class="row">

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div id="map">
          </div>

        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

          <form class="contact_bg">
            <div class="row">
              <div class="col-md-12">
                <div class="titlepage">
                  <h2>Contact <strong class="yellow">us</strong></h2>
                </div>
                <div class="col-md-12">
                  <input class="contactus" placeholder="Your Name" type="text" name="Your Name">
                </div>
                <div class="col-md-12">
                  <input class="contactus" placeholder="Your Email" type="text" name="Your Email">
                </div>
                <div class="col-md-12">
                  <input class="contactus" placeholder="Your Phone" type="text" name="Your Phone">
                </div>
                <div class="col-md-12">
                  <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <button class="send">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>

    <!-- end contact -->

    <!--  footer -->
    <footr>
      <div class="footer ">
        <div class="container">
          <div class="row">

            <div class="col-md-12">
              <form class="news">
                <input class="newslatter" placeholder="Email" type="text" name=" Email">
                <button class="submit">Subscribe</button>
              </form>
            </div>
            <div class="col-md-12">
              <h2>Newsletter</h2>
              <span>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in  </span>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 ">
                  <div class="address">
                    <h3>Contact us </h3>
                    <ul class="loca">
                      <li>
                        <a href="#"><img src="{{ asset('assets/icon/loc.png')}}" alt="#" /></a>London 145
                        <br>Road-15, <br> Sector-06,<br> Uttara-Dhaka</li>
                        <li>
                          <a href="#"><img src="{{ asset('assets/icon/email.png')}}" alt="#" /></a>nasir93cse@gmail.com</li>
                          <li>
                            <a href="#"><img src="{{ asset('assets/icon/call.png')}}" alt="#" /></a>01707568468</li>
                          </ul>
                          <ul class="social_link">
                            <li><a href="https://www.facebook.com/groups/354177125215661"><img src="{{ asset('assets/icon/fb.png')}}"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/icon/tw.png')}}"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/icon/lin(2).png')}}"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/icon/instagram.png')}}"></a></li>
                          </ul>

                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="address">
                          <h3>Subjects</h3>
                          <ul class="Menu_footer">
                            <li class="active"> <a href="#">Bangla</a> </li>
                            <li><a href="#">English</a> </li>
                            <li><a href="#">ICT</a> </li>
                            <li><a href="#">Psychology</a> </li>
                            <li><a href="#">Economic</a> </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="address">
                          <h3>Information</h3>
                          <ul class="Links_footer">
                            <li class="active"><a href="#">Campus Tour</a> </li>
                            <li><a href="#">Student Lifes</a> </li>
                            <li><a href="#">scholarship</a> </li>
                            <li><a href="#"> Admission</a> </li>
                            <li><a href="#">Leadership</a> </li>
                          </ul>
                        </div>
                      </div>

                      <div class="col-lg-3 col-md-6 col-sm-6 ">
                        <div class="address">
                          <a href="index.html"> <img src="{{ asset('assets/images/logo.jpg')}}" alt="logo"></a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

              </div>
              <div class="copyright">
                <div class="container">
                  <p>Copyright © 2021 Design by <a href="https://www.facebook.com/nasirduet">Nasir Uddin </a></p>
                </div>
              </div>
            </div>
          </footr>
          <!-- end footer -->
          <!-- Javascript files-->
          <script src="{{ asset('assets\js/jquery.min.js')}}"></script>
          <script src="{{ asset('assets\js/popper.min.js')}}"></script>
          <script src="{{ asset('assets\js/bootstrap.bundle.min.js')}}"></script>
          <script src="{{ asset('assets\js/jquery-3.0.0.min.js')}}"></script>
          <script src="{{ asset('assets\js/plugin.js')}}"></script>
          <!-- sidebar -->
          <script src="{{ asset('assets\js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
          <script src="{{ asset('assets\js/custom.js')}}"></script>
          <script src="{{ asset('assets\https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js')}}"></script>


          <script>
// This example adds a marker to indicate the position of Bondi Beach in Sydney,
// Australia.
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 11,
    center: {
      lat: 23.8702,
      lng: 90.4018
    },
  });

  var image = 'images/maps-and-flags.png';
  var beachMarker = new google.maps.Marker({
    position: {
      lat: 23.8702,
      lng: 90.4018
    },
    map: map,
    icon: image
  });
}
</script>
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->



</body>

</html>