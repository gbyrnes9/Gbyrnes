@extends('layout/layout')

@section('content')
<div class="nav-spacer"></div>
<div class="why-container">
    <h1>Why does my business need a website?</h1>
    <h4>The internet is the number one place people search for a business when they are in need of something.</h4><br/>
    <p>Imagine how many prospective customers have searched online for your contact info, hours, location, products, etc.  If prospective customers can’t find this information about your business, then your business doesn’t exist and they’ll go elsewhere.  Wouldn’t you?</p><br/><p>The information age of the late 20th and early 21st century means that people not only have access to significant levels of information but they expect that it is readily available. Customers often research companies and product options online, but in most cases, local businesses and chain stores offer the most efficient path to immediate gratification because they have inventory on hand for same-day purchase. By providing a website, a business can offer the convenience of instant information and still fulfill demand for product quickly.</p><br/><p>A website provides 24/7 access to your product. When you call it a day and head home, your product is out there with access 24hours per day 7 days per week.</p>
<br/><br/>

    <h4>In just 15 years 32% more Americans are using the internet.</h4>
    <img src="{{ URL::asset('/img/internet_usage_chart.svg') }}"><br/><br/>
    <p>32% in 15 years is an incredible rise and very telling of older and younger generations. Younger generations in America require this technology to operate every day. Many would be lost without it. Older generation, that grew up without it have even adapted it into their everyday routine. </p><br/>
    <p>As you can see, in the 18-49 categories well over <b>90% use the Internet on a daily basis</b>.  The 65+ age group has almost tripled to 60% and in the 50-64 has nearly doubles to 80%. These numbers continue to increase and should do so over the years until all categories are at approximately 99%.</p><br/>
    <img src="{{ URL::asset('/img/age_of_internet_users_chart.svg') }}"><br/><br/>
    <p>This means prospective customers are referring to the Internet for most of their information. It is imperative of your business to satisfy their need. If you do not satisfy the customer’s needs, they will look to your competition that does provide for their needs. It is impossible to reach your potential customer if they do not know your exist, or sell the product.</p><br/>
    <img src="{{ URL::asset('/img/interesting_statistics_chart.svg') }}"><br/><br/>

    <h1 class="center">Contact Us Or Request a Quote to Get Your Business Online</h1>
    <div class="why-contact-div">

        <a href="/Contact/Send"><div class="button expand why-btn">Contact Us</div></a>
    </div>

    </div>
@endsection