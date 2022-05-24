@extends('layout.template')
@section('title', 'Portofolio')
@section('content')

<div class="section" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-md-6 ml-auto mr-auto">
        <div class="h4 text-center mb-4 title">Certificate</div>
        <div class="nav-align-center">
          <ul class="nav nav-pills nav-pills-primary" role="tablist">
            
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#graphic-design" role="tablist"><i class="fa fa-certificate" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="tab-content gallery mt-5">
      <div class="tab-pane active" id="web-development">
       
      <div class="tab-pane" id="graphic-design" role="tabpanel">
        <div class="ml-auto mr-auto">
          <div class="row">

            <!-- sertifikat1 -->
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="https://www.hackerrank.com/certificates/e2d4299c5b7b" target="_blank">
                  <figure class="cc-effect"><img src="{{asset('images/JavaScript Basic.png')}}" alt="JavaScript Basic"/>
                    <figcaption>
                      <div class="h4">JavaScript Basic</div>
                      <p>HackerRank Certificate</p>
                    </figcaption>
                  </figure></a>
                </div>

                <!-- sertifikat2 -->
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="https://skilvul.com/courses/javascript-intermediate/student/Raditya" target="_blank">
                  <figure class="cc-effect"><img src="{{asset('images/Javascript Intermediate.jpg')}}" alt="JavaScript Intermediate"/>
                    <figcaption>
                      <div class="h4">JavaScript Intermediate</div>
                      <p>Skilvul Certificate</p>
                    </figcaption>
                  </figure></a>
              </div>

              <!-- sertifikat3 -->
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="https://progate.com/course_certificate/55f7cdedr32cbp" target="_blank">
                  <figure class="cc-effect"><img src="{{asset('images/Javascript.png')}}" alt="Javascript Certificate"/>
                    <figcaption>
                      <div class="h4">Javascript Certificate</div>
                      <p>Javascript Course at Progate</p>
                    </figcaption>
                  </figure></a>
              </div>

              <!-- sertifikat4 -->
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="https://progate.com/course_certificate/fe5983b2r2pbw8" target="_blank">
                  <figure class="cc-effect"><img src="{{asset('images/python.png')}}" alt="Python Certificate"/>
                    <figcaption>
                      <div class="h4">Python Certificate</div>
                      <p>Python Course at Progate</p>
                    </figcaption>
                  </figure></a>
              </div>

              <!-- sertifikat5 -->
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#">
                  <figure class="cc-effect"><img src="{{asset('images/DQLAB.jpg')}}" alt="Data Science With Python"/>
                    <figcaption>
                      <div class="h4">Data Science With Python</div>
                      <p>DQLAB Academy</p>
                    </figcaption>
                  </figure></a>
              </div>
            </div>


            <div class="col-md-6">
              <!-- sertifikat6 -->
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#">
                  <figure class="cc-effect"><img src="{{asset('images/Javascript Intermediate progate.jpg')}}" alt="JavaScript Intermediate"/>
                    <figcaption>
                      <div class="h4">JavaScript Intermediate</div>
                      <p>Progate Certificate</p>
                    </figcaption>
                  </figure></a>
              </div>

              <!-- sertifikat7 -->
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#">
                  <figure class="cc-effect"><img src="{{asset('images/express js.jpg')}}" alt="Backend Express Fast Track Bootcamp"/>
                    <figcaption>
                      <div class="h4">Backend Express Fast Track Bootcamp</div>
                      <p>Progate Certificate</p>
                    </figcaption>
                  </figure></a>
              </div>

              <!-- sertifikat8 -->
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="https://progate.com/course_certificate/cbffc813r8vrbt" target="_blank">
                  <figure class="cc-effect"><img src="{{asset('images/node js.jpg')}}" alt="Node.js Certificate"/>
                    <figcaption>
                      <div class="h4">Node.js Certificate</div>
                      <p>Progate Certificate</p>
                    </figcaption>
                  </figure></a>
              </div>

              <!-- sertifikat9 -->
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="https://progate.com/course_certificate/5a1cd002r8mbab" target="_blank">
                  <figure class="cc-effect"><img src="{{asset('images/php.jpg')}}" alt="PHP Certificate"/>
                    <figcaption>
                      <div class="h4">PHP Certificate</div>
                      <p>Progate Certificate</p>
                    </figcaption>
                  </figure></a>
              </div>
              <!-- sertifikat10 -->
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#">
                  <figure class="cc-effect"><img src="{{asset('images/python2.jpg')}}" alt="Pyton For Data Professional"/>
                    <figcaption>
                      <div class="h4">Pyton For Data Professional</div>
                      <p>DQLAB Academy</p>
                    </figcaption>
                  </figure></a>
              </div>
              
            </div>
            <div class="col-md-6">
                <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#">
                  <figure class="cc-effect"><img src="{{asset('images/MTCNA.jpg')}}" alt="Pyton For Data Professional"/>
                    <figcaption>
                      <div class="h4">MikroTik Certified Network Associate</div>
                      <p>MikroTik</p>
                    </figcaption>
                  </figure></a>
              </div>
            </div>



            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection