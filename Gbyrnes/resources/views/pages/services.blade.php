@extends('layout/layout')


@section('content')
    <div class="nav-spacer"></div>
    <div class="services-wrapper">
        <div class="services-container">
            <h2>Services We provide</h2>
            <br/>
            <p class="text-align-left shrink-text">We provide a Simple, Eloquent and Practical solutions to marketing online. From web design and development, to Search Engine Optimization, to social media presence, we provide small businesses with the tools to succeed online. Whether you are looking for increased customer traffic, or looking to sell online, we provide the necessary tools to succeed. </p>


        <div class="drop-down">
          <h4>Web Design & Development&nbsp
              <button type="button" class="btn btn-default 1" aria-label="Left Align">
                  <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span>
              </button>
          </h4>
                       <p id="1">We specialize in developing websites for small businesses and individuals that deliver results. Our websites are up to today's standards and will work with any screen size (<b><span id="response-design">responsive design</span></b>). It has become imperative for website to work on mobile devices, as well are pc's. Therefore we always recommend responsive design when developing your site. We will work through a multi step process, from initial consultation to product launch.</p>


          <h4>SEO Management (Search Engine Optimization)&nbsp
              <button type="button" class="btn btn-default 2" aria-label="Left Align">
                  <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span>
              </button>
          </h4>

                <p id="2">Once your website is created, it needs to be optimized for search engines. We use a 30+ point checklist on your website to provide you with top-notch search optimization. We set up everything from analytics monitoring to <b><span id="meta">meta tags</span></b>.</p>

          <h4>Social Media Coordination & Implementation&nbsp
              <button type="button" class="btn btn-default 3" aria-label="Left Align">
                  <span class="glyphicon glyphicon-triangle-bottom" id="social" aria-hidden="true"></span>
              </button>
          </h4>

                <p id="3">We can create, maintain and set your business up in the social media world.</p>

          <h4>Graphic & Content Supplementation&nbsp
                <button type="button" class="btn btn-default 4" aria-label="Left Align">
                    <span class="glyphicon glyphicon-triangle-bottom" id="graphic" aria-hidden="true"></span>
                </button>
          </h4>

                <p id="4">We will populate your website with images, graphics and content about your business. </p>

          <h4>Hosting & URL Registration&nbsp
               <button type="button" class="btn btn-default 5" aria-label="Left Align">
                   <span class="glyphicon glyphicon-triangle-bottom" id="hosting" aria-hidden="true"></span>
               </button>
          </h4>

            <p id="5">We can <b><span id="host">host</span></b> your website and handel all technical issues. Dealing with hosting companies can be troublesome, that is where we come in. We will work with a third party hosting site to keep your website up and running without any hassle for you.</p>

          <h4>Affordable Prices for Any Business&nbsp
              <button type="button" class="btn btn-default 6" aria-label="Left Align">
                  <span class="glyphicon glyphicon-triangle-bottom" id="affordable" aria-hidden="true"></span>
              </button>
          </h4>

            <p id="6">We will work with you to establish a web presence that work for your business and wallet. <a href='{{ URL::asset("/Contact/Send") }}' style="color:blue">Contact us</a> for a free estimate. </p>
        </div>
                </div>
            </div>


@endsection
@section('footer-link')

<script>
    $( document ).ready(function() {
        $('.1').click(function(){
            $('#1').toggle();
        });

        $('.2').click(function(){
            $('#2').toggle();
        });

        $('.3').click(function(){
            $('#3').toggle();
        });

        $('.4').click(function(){
            $('#4').toggle();
        });

        $('.5').click(function(){
            $('#5').toggle();
        });

        $('.6').click(function(){
            $('#6').toggle();
        });


        Tipped.create('#meta', ' A meta tag is a tag (that is, a coding statement) in the Hypertext Markup Language (HTML) that describes some aspect of the contents of a Web page.');
        Tipped.create('#response-design', 'Responsive design is an approach to web page creation that makes use of flexible layouts, flexible images and cascading style sheet media queries. The goal of responsive design is to build web pages that detect the visitor'+'s screen size and orientation and change the layout accordingly.');
        Tipped.create('#host', 'the activity or business of providing storage space and access for websites.');
    });
</script>
    @endsection