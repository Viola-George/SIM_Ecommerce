<!DOCTYPE html>
<html>
   <head>
    <base href="/public">

      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="home/images/favicon.png" type="">
      <title>Famms</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
      <style>
        * {
  font-family: Nunito, sans-serif;
}

.responsive-cell-block {
  min-height: 75px;
}

.text-blk {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
  line-height: 25px;
}

.responsive-container-block {
  min-height: 75px;
  height: fit-content;
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  margin-top: 0px;
  margin-right: auto;
  margin-bottom: 0px;
  margin-left: auto;
  justify-content: space-evenly;
}

.team-head-text {
  font-size: 48px;
  font-weight: 900;
  text-align: center;
}

.team-head-text {
  line-height: 50px;
  width: 100%;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 50px;
  margin-left: 0px;
}

.container {
  max-width: 1380px;
  margin-top: 60px;
  margin-right: auto;
  margin-bottom: 60px;
  margin-left: auto;
  padding-top: 0px;
  padding-right: 30px;
  padding-bottom: 0px;
  padding-left: 30px;
}

.card {
  text-align: center;
  box-shadow: rgba(0, 0, 0, 0.05) 0px 4px 20px 7px;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding-top: 30px;
  padding-right: 25px;
  padding-bottom: 30px;
  padding-left: 25px;
}

.card-container {
  width: 280px;
  margin-top: 0px;
  margin-right: 10px;
  margin-bottom: 25px;
  margin-left: 10px;
}

.name {
  margin-top: 20px;
  margin-right: 0px;
  margin-bottom: 5px;
  margin-left: 0px;
  font-size: 18px;
  font-weight: 800;
}

.position {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 10px;
  margin-left: 0px;
}

.feature-text {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 20px;
  margin-left: 0px;
  color: rgb(122, 122, 122);
  line-height: 30px;
}

.social-icons {
  width: 70px;
  display: flex;
  justify-content: space-between;
}

.team-image-wrapper {
  clip-path: circle(50% at 50% 50%);
  width: 130px;
  height: 130px;
}

.team-member-image {
  max-width: 100%;
}

@media (max-width: 500px) {
  .card-container {
    width: 100%;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 25px;
    margin-left: 0px;
  }
}
      </style>
      
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')

         {{-- <section id="testimonials" class="section-padding">
            <div class="container pt-25">
                <!-- <div class="row mb-50">
                    <div class="col-lg-12 col-md-12 text-center">
                        <h6 class="mt-0 mb-10 text-uppercase  text-brand font-sm wow fadeIn animated">some facts</h6>
                        <h2 class="mb-15 text-grey-1 wow fadeIn animated">Take a look what<br> our clients say about us</h2>
                        <p class="w-50 m-auto text-grey-3 wow fadeIn animated">At vero eos et accusamus et iusto odio dignissimos ducimus quiblanditiis praesentium. ebitis nesciunt voluptatum dicta reprehenderit accusamus</p>
                    </div>
                </div> -->
                <div class="row align-items-center">
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex">
                            <div class="hero-card-icon icon-left-2 hover-up ">
                                <img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="assets/imgs/about/Mayar hesham eismat.jpeg" alt="">
                            </div>
                            <div class="pl-30">
                                <h5 class="mb-5 fw-500">
                                    Mayar hesham eismat
                                </h5>
                                <p class="font-sm text-grey-5">Web Developer</p>
                                <p class="text-grey-3">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis nesciunt voluptatum dicta reprehenderit accusamus voluptatibus voluptas."</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex">
                            <div class="hero-card-icon icon-left-2 hover-up ">
                                <img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="assets/imgs/about/YaSmeen alsayid kasaab mohamad.jpeg" alt="">
                            </div>
                            <div class="pl-30">
                                <h5 class="mb-5 fw-500">
                                    YaSmeen alsayid kasaab mohamad
                                </h5>
                                <p class="font-sm text-grey-5">Web Developer</p>
                                <p class="text-grey-3">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis nesciunt voluptatum dicta reprehenderit accusamus voluptatibus voluptas."</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex">
                            <div class="hero-card-icon icon-left-2 hover-up ">
                                <img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="assets/imgs/about/Samia emad abd Allah moustafa.jpeg" alt="">
                            </div>
                            <div class="pl-30">
                                <h5 class="mb-5 fw-500">
                                    Samia emad abd Allah moustafa
                                </h5>
                                <p class="font-sm text-grey-5">Web Developer</p>
                                <p class="text-grey-3">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis nesciunt voluptatum dicta reprehenderit accusamus voluptatibus voluptas."</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex">
                            <div class="hero-card-icon icon-left-2 hover-up ">
                                <img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="assets/imgs/about/Mohamed ahmed abd Allah alsayid.jpeg" alt="">
                            </div>
                            <div class="pl-30">
                                <h5 class="mb-5 fw-500">
                                    Mohamed ahmed abd Allah alsayid
                                </h5>
                                <p class="font-sm text-grey-5">Web Developer</p>
                                <p class="text-grey-3">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis nesciunt voluptatum dicta reprehenderit accusamus voluptatibus voluptas."</p>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-md-6 col-lg-4">
                        <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex">
                            <div class="hero-card-icon icon-left-2 hover-up ">
                                <img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="assets/imgs/about/Mohamed ahmed abd alraaziq alsayid.jpeg" alt="">
                            </div>
                            <div class="pl-30">
                                <h5 class="mb-5 fw-500">
                                    Mohamed ahmed abd alraaziq alsayid
                                </h5>
                                <p class="font-sm text-grey-5">Web Developer</p>
                                <p class="text-grey-3">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis nesciunt voluptatum dicta reprehenderit accusamus voluptatibus voluptas."</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex">
                            <div class="hero-card-icon icon-left-2 hover-up ">
                                <img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="assets/imgs/about/Ahmed abdallah abdelhamid abdallah.jpeg" alt="">
                            </div>
                            <div class="pl-30">
                                <h5 class="mb-5 fw-500">
                                    Ahmed abdallah abdelhamid abdallah
                                </h5>
                                <p class="font-sm text-grey-5">Web Developer</p>
                                <p class="text-grey-3">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis nesciunt voluptatum dicta reprehenderit accusamus voluptatibus voluptas."</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-6 col-lg-4">
                        <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex">
                            <div class="hero-card-icon icon-left-2 hover-up ">
                                <img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="assets/imgs/about/Ahmed Hesham Ahmed Mohamed Radwan.jpeg" alt="">
                            </div>
                            <div class="pl-30">
                                <h5 class="mb-5 fw-500">
                                    Ahmed Hesham Ahmed Mohamed Radwan
                                </h5>
                                <p class="font-sm text-grey-5">Web Developer</p>
                                <p class="text-grey-3">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis nesciunt voluptatum dicta reprehenderit accusamus voluptatibus voluptas."</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex">
                            <div class="hero-card-icon icon-left-2 hover-up ">
                                <img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="assets/imgs/about/Yossef Mohamed Abdel Samie Abdel Qader.jpeg" alt="">
                            </div>
                            <div class="pl-30">
                                <h5 class="mb-5 fw-500">
                                    Yossef Mohamed Abdel Samie Abdel Qader
                                </h5>
                                <p class="font-sm text-grey-5">Web Developer</p>
                                <p class="text-grey-3">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis nesciunt voluptatum dicta reprehenderit accusamus voluptatibus voluptas."</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex">
                            <div class="hero-card-icon icon-left-2 hover-up ">
                                <img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="assets/imgs/about/Ahmed hossam aldiyn mahmoud ahmed.jpeg" alt="">
                            </div>
                            <div class="pl-30">
                                <h5 class="mb-5 fw-500">
                                    Ahmed hossam aldiyn mahmoud ahmed
                                </h5>
                                <p class="font-sm text-grey-5">Web Developer</p>
                                <p class="text-grey-3">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis nesciunt voluptatum dicta reprehenderit accusamus voluptatibus voluptas."</p>
                            </div>
                        </div>
                    </div>
                   
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex">
                            <div class="hero-card-icon icon-left-2 hover-up ">
                                <img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="assets/imgs/about/Samira Osama Mohamed mahmoud.jpeg" alt="">
                            </div>
                            <div class="pl-30">
                                <h5 class="mb-5 fw-500">
                                    Samira Osama Mohamed mahmoud
                                </h5>
                                <p class="font-sm text-grey-5">Web Developer</p>
                                <p class="text-grey-3">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis nesciunt voluptatum dicta reprehenderit accusamus voluptatibus voluptas."</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex">
                            <div class="hero-card-icon icon-left-2 hover-up ">
                                <img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="assets/imgs/about/Abd alrahman Mohamed mahmoud.jpeg" alt="">
                            </div>
                            <div class="pl-30">
                                <h5 class="mb-5 fw-500">
                                    Abd alrahman Mohamed mahmoud
                                </h5>
                                <p class="font-sm text-grey-5">Web Developer</p>
                                <p class="text-grey-3">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis nesciunt voluptatum dicta reprehenderit accusamus voluptatibus voluptas."</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex">
                            <div class="hero-card-icon icon-left-2 hover-up ">
                                <img style="width: 80%;" class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="assets/imgs/about/Ahmed Mohamed Hamdy Mohamed.jpeg" alt="">
                            </div>
                            <div class="pl-30">
                                <h5 class="mb-5 fw-500">
                                    Ahmed Mohamed Hamdy Mohamed
                                </h5>
                                <p class="font-sm text-grey-5">Web Developer</p>
                                <p class="text-grey-3">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis nesciunt voluptatum dicta reprehenderit accusamus voluptatibus voluptas."</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
    
            </div>
        </section> --}}
      <!-- footer start -->
      <div class="responsive-container-block container">
        <p class="text-blk team-head-text">
          Our Team
        </p>
        <div class="responsive-container-block">
          <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
            <div class="card">
              <div class="team-image-wrapper">
                <img class="team-member-image" src="assets/imgs/about/Mayar hesham eismat.jpeg" >
              </div>
              <p class="text-blk name">
                Mayar hesham eismat
            </p>
              <p class="text-blk position">
               Web Developer
              </p>
              <p class="text-blk feature-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              </p>
              <div class="social-icons">
                <a href="https://www.twitter.com" target="_blank">
                  <img class="twitter-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon.svg">
                </a>
                <a href="https://www.facebook.com" target="_blank">
                  <img class="facebook-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon-1.svg">
                </a>
              </div>
            </div>
          </div>
          <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
            <div class="card">
              <div class="team-image-wrapper">
                <img class="team-member-image"src="assets/imgs/about/YaSmeen alsayid kasaab mohamad.jpeg" >
              </div>
              <p class="text-blk name">
                YaSmeen alsayid kasaab mohamad

              </p>
              <p class="text-blk position">
               Web Developer
              </p>
              <p class="text-blk feature-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              </p>
              <div class="social-icons">
                <a href="https://www.twitter.com" target="_blank">
                  <img class="twitter-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon.svg">
                </a>
                <a href="https://www.facebook.com" target="_blank">
                  <img class="facebook-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon-1.svg">
                </a>
              </div>
            </div>
          </div>
          <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
            <div class="card">
              <div class="team-image-wrapper">
                <img class="team-member-image"  src="assets/imgs/about/Samia emad abd Allah moustafa.jpeg" >
              </div>
              <p class="text-blk name">
                Samia emad abd Allah moustafa
            </p>
              <p class="text-blk position">
               Web Developer
              </p>
              <p class="text-blk feature-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              </p>
              <div class="social-icons">
                <a href="https://www.twitter.com" target="_blank">
                  <img class="twitter-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon.svg">
                </a>
                <a href="https://www.facebook.com" target="_blank">
                  <img class="facebook-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon-1.svg">
                </a>
              </div>
            </div>
          </div>
          <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
            <div class="card">
              <div class="team-image-wrapper">
                <img class="team-member-image"  src="assets/imgs/about/Mohamed ahmed abd Allah alsayid.jpeg">
              </div>
              <p class="text-blk name">
                Mohamed ahmed abd Allah alsayid
            </p>
              <p class="text-blk position">
               Web Developer
              </p>
              <p class="text-blk feature-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              </p>
              <div class="social-icons">
                <a href="https://www.twitter.com" target="_blank">
                  <img class="twitter-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon.svg">
                </a>
                <a href="https://www.facebook.com" target="_blank">
                  <img class="facebook-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon-1.svg">
                </a>
              </div>
            </div>
          </div>
          <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
            <div class="card">
              <div class="team-image-wrapper">
                <img class="team-member-image"src="assets/imgs/about/Mohamed ahmed abd alraaziq alsayid.jpeg">
              </div>
              <p class="text-blk name">
                Mohamed ahmed abd alraaziq alsayid
            </p>
              <p class="text-blk position">
               Web Developer
              </p>
              <p class="text-blk feature-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              </p>
              <div class="social-icons">
                <a href="https://www.twitter.com" target="_blank">
                  <img class="twitter-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon.svg">
                </a>
                <a href="https://www.facebook.com" target="_blank">
                  <img class="facebook-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon-1.svg">
                </a>
              </div>
            </div>
          </div>
          <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
            <div class="card">
              <div class="team-image-wrapper">
                <img class="team-member-image" src="assets/imgs/about/Ahmed abdallah abdelhamid abdallah.jpeg" >
              </div>
              <p class="text-blk name">
                Ahmed abdallah abdelhamid abdallah
            </p>
              <p class="text-blk position">
               Web Developer
              </p>
              <p class="text-blk feature-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              </p>
              <div class="social-icons">
                <a href="https://www.twitter.com" target="_blank">
                  <img class="twitter-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon.svg">
                </a>
                <a href="https://www.facebook.com" target="_blank">
                  <img class="facebook-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon-1.svg">
                </a>
              </div>
            </div>
          </div>
          <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
            <div class="card">
              <div class="team-image-wrapper">
                <img class="team-member-image" src="assets/imgs/about/Ahmed Hesham Ahmed Mohamed Radwan.jpeg">
              </div>
              <p class="text-blk name">
                Ahmed Hesham Ahmed Mohamed Radwan
            </p>
              <p class="text-blk position">
               Web Developer
              </p>
              <p class="text-blk feature-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              </p>
              <div class="social-icons">
                <a href="https://www.twitter.com" target="_blank">
                  <img class="twitter-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon.svg">
                </a>
                <a href="https://www.facebook.com" target="_blank">
                  <img class="facebook-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon-1.svg">
                </a>
              </div>
            </div>
          </div>
          <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
            <div class="card">
              <div class="team-image-wrapper">
                <img class="team-member-image"src="assets/imgs/about/Yossef Mohamed Abdel Samie Abdel Qader.jpeg">
              </div>
              <p class="text-blk name">
                Yossef Mohamed Abdel Samie Abdel Qader
            </p>
              <p class="text-blk position">
               Web Developer
              </p>
              <p class="text-blk feature-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              </p>
              <div class="social-icons">
                <a href="https://www.twitter.com" target="_blank">
                  <img class="twitter-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon.svg">
                </a>
                <a href="https://www.facebook.com" target="_blank">
                  <img class="facebook-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon-1.svg">
                </a>
              </div>
            </div>
          </div>
          <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
            <div class="card">
              <div class="team-image-wrapper">
                <img class="team-member-image" src="assets/imgs/about/Ahmed hossam aldiyn mahmoud ahmed.jpeg" >
              </div>
              <p class="text-blk name">
                Ahmed hossam aldiyn mahmoud ahmed
            </p>
              <p class="text-blk position">
               Web Developer
              </p>
              <p class="text-blk feature-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              </p>
              <div class="social-icons">
                <a href="https://www.twitter.com" target="_blank">
                  <img class="twitter-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon.svg">
                </a>
                <a href="https://www.facebook.com" target="_blank">
                  <img class="facebook-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon-1.svg">
                </a>
              </div>
            </div>
          </div>
          <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
            <div class="card">
              <div class="team-image-wrapper">
                <img class="team-member-image"src="assets/imgs/about/Samira Osama Mohamed mahmoud.jpeg">
              </div>
              <p class="text-blk name">
                Samira Osama Mohamed mahmoud
            </p>
              <p class="text-blk position">
               Web Developer
              </p>
              <p class="text-blk feature-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              </p>
              <div class="social-icons">
                <a href="https://www.twitter.com" target="_blank">
                  <img class="twitter-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon.svg">
                </a>
                <a href="https://www.facebook.com" target="_blank">
                  <img class="facebook-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon-1.svg">
                </a>
              </div>
            </div>
          </div>
          <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
            <div class="card">
              <div class="team-image-wrapper">
                <img class="team-member-image" src="assets/imgs/about/Abd alrahman Mohamed mahmoud.jpeg">
              </div>
              <p class="text-blk name">
                Abd alrahman Mohamed mahmoud
            </p>
              <p class="text-blk position">
               Web Developer
              </p>
              <p class="text-blk feature-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              </p>
              <div class="social-icons">
                <a href="https://www.twitter.com" target="_blank">
                  <img class="twitter-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon.svg">
                </a>
                <a href="https://www.facebook.com" target="_blank">
                  <img class="facebook-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon-1.svg">
                </a>
              </div>
            </div>
          </div>
          <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
            <div class="card">
              <div class="team-image-wrapper">
                <img class="team-member-image"src="assets/imgs/about/Ahmed Mohamed Hamdy Mohamed.jpeg">
              </div>
              <p class="text-blk name">
                Ahmed Mohamed Hamdy Mohamed
            </p>
              <p class="text-blk position">
               Web Developer
              </p>
              <p class="text-blk feature-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              </p>
              <div class="social-icons">
                <a href="https://www.twitter.com" target="_blank">
                  <img class="twitter-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon.svg">
                </a>
                <a href="https://www.facebook.com" target="_blank">
                  <img class="facebook-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon-1.svg">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2023 All Rights Reserved By <a href="https://html.design/">My Efferts</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">Viola George</a>
         
         </p>
      </div>
      <script>
         

      </script>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>