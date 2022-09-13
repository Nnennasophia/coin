@extends("layouts.spacedcustomlayout")


@section('body')
    



<br>

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js"
    async>
    {
      "symbols": [{
          "proName": "FOREXCOM:SPXUSD",
          "title": "S&P 500"
        },
        {
          "proName": "FOREXCOM:NSXUSD",
          "title": "US 100"
        },
        {
          "proName": "FX_IDC:EURUSD",
          "title": "EUR/USD"
        },
        {
          "proName": "BITSTAMP:BTCUSD",
          "title": "Bitcoin"
        },
        {
          "proName": "BITSTAMP:ETHUSD",
          "title": "Ethereum"
        }
      ],
      "showSymbolLogo": true,
      "colorTheme": "light",
      "isTransparent": false,
      "displayMode": "adaptive",
      "locale": "en"
    }
  </script>
</div>
<!-- TradingView Widget END -->


<!-- start slider section -->
<div id="top_section" class=" banner_main">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container-fluid">
                <div class="carousel-caption relative">
                  <div class="row d_flex">
                    <div class="col-md-6">
                      <div class="con_img">
                        <figure><img class="img_responsive" src="{{asset("images/section6.webp")}}"
                            alt="#" />
                        </figure>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="bluid">
                        <h1>Buy Bitcoin<br> And Invest Today</h1>
                        <p>Easily buy any amount of Bitcoin you need and invest comfortably.
                        </p>
                        <a class="read_more" href="Javascript:void(0)">Read More </a><a
                          class="read_more" href="Javascript:void(0)">Get Started </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container-fluid">
                <div class="carousel-caption relative">
                  <div class="row d_flex">
                    <div class="col-md-6">
                      <div class="con_img">
                        <figure><img class="img_responsive" src="{{asset("images/section5.png")}}"
                            alt="#" /></figure>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="bluid">
                        <h1>Cashout <br> From Anywhere</h1>
                        <p>Withdraw funds anywhere, anytime, from home or on the go!
                        </p>
                        <a class="read_more" href="Javascript:void(0)">Read More </a><a
                          class="read_more" href="Javascript:void(0)">Get Started </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container-fluid">
                <div class="carousel-caption relative">
                  <div class="row d_flex">
                    <div class="col-md-6">
                      <div class="con_img">
                        <figure><img class="img_responsive" src="{{asset("images/section2.svg")}}"
                            alt="#" /></figure>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="bluid">
                        <h1>Fast Transaction <br>Like Speed of Light</h1>
                        <p>We make every transaction swift and faster than you expect!
                        </p>
                        <a class="read_more" href="Javascript:void(0)">Read More </a><a
                          class="read_more" href="Javascript:void(0)">Get Started </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end slider section -->
<!-- wallet -->
<div class="wallet">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-sm-6 col-xs-6">
        <div id="wa_hover" class="wallet_box text_align_center">
          <i><img src="{{asset("images/wa1.svg")}}" alt="#" /></i>
          <h3>ONLINE WALLET</h3>
          <p>Securely buy, store & invest cryptocurrencies. </p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 col-xs-6">
        <div id="wa_hover" class="wallet_box text_align_center">
          <i><img src="{{asset("images/wa2.svg")}}" alt="#" /></i>
          <h3>SEND COINS</h3>
          <p>Send and receive coins between accounts. </p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 col-xs-6">
        <div id="wa_hover" class="wallet_box text_align_center">
          <i><img src="{{asset("images/wa3.svg")}}" alt="#" /></i>
          <h3>MOBILE APP </h3>
          <p>Keeping things simple yet secure on mobile and web. </p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 col-xs-6">
        <div id="wa_hover" class="wallet_box text_align_center">
          <i><img src="{{asset("images/wa4.svg")}}" alt="#" /></i>
          <h3>COIN MINING</h3>
          <p>Mint new coins through algorithm using GPU. </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end wallet -->

<!-- works -->
<div class="works">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage text_align_center">
          <h2>How It Works</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="works_vedio">
          <!--<figure><img class="img_responsive" src="images/work.png" alt="#"></figure>-->
          <div id="myVideo">
        <iframe width="100%" height="450" src="https://www.youtube.com/embed/HhOuvNDMlI0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- works -->



<!-- about -->
<div id="about" class="about">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="about_border">
          <div class="row">
            <div class="col-md-6">
              <div class="titlepage text_align_left">
                <h2>About Us</h2>
              </div>
              <div class="about_text">
                <p>We at {{$compd? $compd->companyname: 'Coming soon'}} have been working continuously to transform the traditional smart trading industry, in order to open the financial markets to everyone, everywhere. </p>
                <a class="read_more" href="about.html">Read More</a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="about_img">
                <figure><img class="img_responsive" src="{{asset("images/about2.png")}}" alt="#" /></figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end about -->

<!-- contact -->
<div class="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage text_align_center">
          <h2>Request A call Back</h2>
        </div>
      </div>
      <div class=" col-md-10 offset-md-1">
        <form id="request" class="main_form">
          <div class="row">
            <div class="col-md-6 ">
              <input class="contactus" placeholder="Full Name" type="type" name="Full Name">
            </div>
            <div class="col-md-6">
              <input class="contactus" placeholder="Email" type="type" name="Email">
            </div>
            <div class="col-md-6">
              <input class="contactus" placeholder="Phone number" type="type" name="Phone number">
            </div>
            <div class="col-md-6">
              <textarea class="textarea" placeholder="Message" type="type" Message="Name"></textarea>
            </div>
            <div class="col-md-12">
              <button class="send_btn">Send</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- end contact -->

<br>




<!-- TradingView Widget BEGIN -->
          <div class="titlepage text_align_center">
          <h2>Cryptocurrency Market </h2>
        </div>
<div class="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      </div>
    </div>
    <div class="row">
      <div class="tradingview-widget-container">
<div class="tradingview-widget-container__widget"></div>
<div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank"></div>
<script type="text/javascript" src="s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
{
"width": 100%,
"height": 490,
"defaultColumn": "overview",
"screener_type": "crypto_mkt",
"displayCurrency": "USD",
"colorTheme": "light",
"locale": "en"
}
</script>
</div>
    </div>
  </div>
</div>
<!-- TradingView Widget END -->


<br>


<!-- graf -->
<div class="graf">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="nav nav-tabs md-tabs graf_tab" id="myTabMD" role="tablist">
          <li>
            <a class="nav-link active" id="home-tab-md" data-toggle="tab" href="#tab1" role="tab"
              aria-controls="home-md" aria-selected="true">Bitcoin(BTC)</a>
          </li>
          <li>
            <a class="nav-link" id="profile-tab-md" data-toggle="tab" href="#tab2" role="tab"
              aria-controls="profile-md" aria-selected="false">Bitcoin Cash(BCH)</a>
          </li>
          <li>
            <a class="nav-link" id="contact-tab-md" data-toggle="tab" href="#tab3" role="tab"
              aria-controls="contact-md" aria-selected="false">Bitcoin Lite(LTC)</a>
          </li>
          <li>
            <a class="nav-link" id="contact-tab-md" data-toggle="tab" href="#tab4" role="tab"
              aria-controls="contact-md" aria-selected="false">Bitcoin Ethereum(ETH)</a>
          </li>
          <li>
            <a class="nav-link" id="contact-tab-md" data-toggle="tab" href="#tab5" role="tab"
              aria-controls="contact-md" aria-selected="false">Bitcoin Ripple(XRP)</a>
          </li>
        </ul>
        <div class="tab-content card  graf_content" id="myTabContentMD">
          <div class="tab-pane fade show active padi" id="tab1" role="tabpanel"
            aria-labelledby="home-tab-md">
            <div class="row">
              <div class="col-md-2 col-sm-4">
                <div class="usd text_align_center">
                  <h4><span>USD</span> 123456.09 <br> Last Price </h4>
                </div>
              </div>
              <div class="col-md-2 col-sm-4">
                <div class="usd text_align_center">
                  <h4>USD 123456.09 <br> Daily Change </h4>
                </div>
              </div>
              <div class="col-md-2 col-sm-4">
                <div class="usd text_align_center">
                  <h4>USD 123456.09 <br> 24 Hour Low </h4>
                </div>
              </div>
              <div class="col-md-2 col-sm-4">
                <div class="usd text_align_center">
                  <h4>USD 123456.09 <br> 24 Hour High </h4>
                </div>
              </div>
              <div class="col-md-2 col-sm-4">
                <div class="usd text_align_center">
                  <h4>USD 123456.09 <br> Today Open </h4>
                </div>
              </div>
              <div class="col-md-2 col-sm-4">
                <div class="usd text_align_center">
                  <h4>BTC 09876 <br> 24 hour volume </h4>
                </div>
              </div>
            </div>
            <div class="graf_bootom">
              <div class="row">
                <div class="col-md-6">
                  <div class="growth text_align_center">
                    <figure>
                      <h3 class="h3tota">Total Growth</h3>
                      <img class="img_responsive" src="images/graf1.jpg" alt="#" />
                    </figure>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="growth text_align_center">
                    <h3>LiveTrades <span style="color: #face34;" class="pa_ri">USD
                        123456.09</span></h3>
                    <figure><img class="img_responsive" src="images/graf2.jpg" alt="#" />
                    </figure>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade padi" id="tab2" role="tabpanel" aria-labelledby="profile-tab-md">
            <div class="row">
              <div class="col-md-2">
                <div class="usd text_align_center">
                  <h4><span>USD</span> 123456.09 <br> Last Price </h4>
                </div>
              </div>
              <div class="col-md-2">
                <div class="usd text_align_center">
                  <h4>USD 123456.09 <br> Daily Change </h4>
                </div>
              </div>
              <div class="col-md-2">
                <div class="usd text_align_center">
                  <h4>USD 123456.09 <br> 24 Hour Low </h4>
                </div>
              </div>
              <div class="col-md-2">
                <div class="usd text_align_center">
                  <h4>USD 123456.09 <br> 24 Hour High </h4>
                </div>
              </div>
              <div class="col-md-2">
                <div class="usd text_align_center">
                  <h4>USD 123456.09 <br> Today Open </h4>
                </div>
              </div>
              <div class="col-md-2">
                <div class="usd text_align_center">
                  <h4>BTC 09876 <br> 24 hour volume </h4>
                </div>
              </div>
            </div>
            <div class="graf_bootom">
              <div class="row">
                <div class="col-md-6">
                  <div class="growth text_align_center">
                    <figure>
                      <h3 class="h3tota">Total Growth</h3>
                      <img class="img_responsive" src="images/graf1.jpg" alt="#" />
                    </figure>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="growth text_align_center">
                    <h3>LiveTrades <span style="color: #face34;" class="pa_ri">USD
                        123456.09</span></h3>
                    <figure><img class="img_responsive" src="images/graf2.jpg" alt="#" />
                    </figure>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade padi" id="tab3" role="tabpanel" aria-labelledby="contact-tab-md">
            <div class="row">
              <div class="col-md-2">
                <div class="usd text_align_center">
                  <h4><span>USD</span> 123456.09 <br> Last Price </h4>
                </div>
              </div>
              <div class="col-md-2">
                <div class="usd text_align_center">
                  <h4>USD 123456.09 <br> Daily Change </h4>
                </div>
              </div>
              <div class="col-md-2">
                <div class="usd text_align_center">
                  <h4>USD 123456.09 <br> 24 Hour Low </h4>
                </div>
              </div>
              <div class="col-md-2">
                <div class="usd text_align_center">
                  <h4>USD 123456.09 <br> 24 Hour High </h4>
                </div>
              </div>
              <div class="col-md-2">
                <div class="usd text_align_center">
                  <h4>USD 123456.09 <br> Today Open </h4>
                </div>
              </div>
              <div class="col-md-2">
                <div class="usd text_align_center">
                  <h4>BTC 09876 <br> 24 hour volume </h4>
                </div>
              </div>
            </div>
            <div class="graf_bootom">
              <div class="row">
                <div class="col-md-6">
                  <div class="growth text_align_center">
                    <figure>
                      <h3 class="h3tota">Total Growth</h3>
                      <img class="img_responsive" src="images/graf1.jpg" alt="#" />
                    </figure>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="growth text_align_center">
                    <h3>LiveTrades <span style="color: #face34;" class="pa_ri">USD
                        123456.09</span></h3>
                    <figure><img class="img_responsive" src="images/graf2.jpg" alt="#" />
                    </figure>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade padi" id="tab4" role="tabpanel" aria-labelledby="contact-tab-md">
            <div class="row">
              <div class="col-md-2">
                <div class="usd text_align_center">
                  <h4><span>USD</span> 123456.09 <br> Last Price </h4>
                </div>
              </div>
              <div class="col-md-2">
                <div class="usd text_align_center">
                  <h4>USD 123456.09 <br> Daily Change </h4>
                </div>
              </div>
              <div class="col-md-2">
                <div class="usd text_align_center">
                  <h4>USD 123456.09 <br> 24 Hour Low </h4>
                </div>
              </div>
              <div class="col-md-2">
                <div class="usd text_align_center">
                  <h4>USD 123456.09 <br> 24 Hour High </h4>
                </div>
              </div>
              <div class="col-md-2">
                <div class="usd text_align_center">
                  <h4>USD 123456.09 <br> Today Open </h4>
                </div>
              </div>
              <div class="col-md-2">
                <div class="usd text_align_center">
                  <h4>BTC 09876 <br> 24 hour volume </h4>
                </div>
              </div>
            </div>
            <div class="graf_bootom">
              <div class="row">
                <div class="col-md-6">
                  <div class="growth text_align_center">
                    <figure>
                      <h3 class="h3tota">Total Growth</h3>
                      <img class="img_responsive" src="{{asset("images/graf1.jpg")}}" alt="#" />
                    </figure>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="growth text_align_center">
                    <h3>LiveTrades <span style="color: #face34;" class="pa_ri">USD
                        123456.09</span></h3>
                    <figure><img class="img_responsive" src="{{asset("images/graf2.jpg")}}" alt="#" />
                    </figure>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade padi" id="tab5" role="tabpanel" aria-labelledby="contact-tab-md">
            <div class="row">
              <div class="col-md-2">
                <div class="usd text_align_center">
                  <h4><span>USD</span> 123456.09 <br> Last Price </h4>
                </div>
              </div>
              <div class="col-md-2">
                <div class="usd text_align_center">
                  <h4>USD 123456.09 <br> Daily Change </h4>
                </div>
              </div>
              <div class="col-md-2">
                <div class="usd text_align_center">
                  <h4>USD 123456.09 <br> 24 Hour Low </h4>
                </div>
              </div>
              <div class="col-md-2">
                <div class="usd text_align_center">
                  <h4>USD 123456.09 <br> 24 Hour High </h4>
                </div>
              </div>
              <div class="col-md-2">
                <div class="usd text_align_center">
                  <h4>USD 123456.09 <br> Today Open </h4>
                </div>
              </div>
              <div class="col-md-2">
                <div class="usd text_align_center">
                  <h4>BTC 09876 <br> 24 hour volume </h4>
                </div>
              </div>
            </div>
            <div class="graf_bootom">
              <div class="row">
                <div class="col-md-6">
                  <div class="growth text_align_center">
                    <figure>
                      <h3 class="h3tota">Total Growth</h3>
                      <img class="img_responsive" src="{{asset("images/graf1.jpg")}}" alt="#" />
                    </figure>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="growth text_align_center">
                    <h3>LiveTrades <span style="color: #face34;" class="pa_ri">USD
                        123456.09</span></h3>
                    <figure><img class="img_responsive" src="{{asset("images/graf2.jpg")}}" alt="#" />
                    </figure>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end graf -->


<!-- testimonial -->
<div class="testimonial">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="border_testi">
          <div class="row">
            <div class="col-md-12">
              <div class="titlepage text_align_center">
                <h2>Testimonial</h2>
              </div>
            </div>
          </div>
          <div class="row d_flex">
            <div class="col-md-10 offset-md-1">
              <div id="testimo" class="carousel slide our_testimonial" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#testimo" data-slide-to="0" class="active"></li>
                  <li data-target="#testimo" data-slide-to="1"></li>
                  <li data-target="#testimo" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="container">
                      <div class="carousel-caption posi_in">
                        <div class="row">
                          <div class="col-md-3">
                            <div class="testomoniam_text text_align_center">
                              <i><img src="{{asset("images/janice001.jpg")}}" alt="#" /></i>
                              <h3>Janice Hunt </h3>
                              <span>Bitcoin</span>
                              
                            </div>
                          </div>
                          <div class="col-md-9">
                            <div class="testomoniam_text text_align_left">
                              <p>My husband and I were in so much debt and financial crisis that we couldn't even afford to feed the kids properly. A friend showed me this platform and look how things turned out for good!</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="container">
                      <div class="carousel-caption posi_in">
                        <div class="row">
                          <div class="col-md-3">
                            <div class="testomoniam_text text_align_center">
                              <i><img src="{{asset("images/wayne002.jpg")}}" alt="#" /></i>
                              <h3>Wayne MacQuoid</h3>
                              <span>Crypto Minning</span>
                            </div>
                          </div>
                          <div class="col-md-9">
                            <div class="testomoniam_text text_align_left">
                              <p>I wasn't sure how cryptocurrency works until I moved from Glasgow to Edinburgh and met colleagues who were already gaining from {{$compd? $compd->companyname: 'Coming soon'}}. I tried it with a couple thousands and it just keeps getting better everyday.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="container">
                      <div class="carousel-caption posi_in">
                        <div class="row">
                          <div class="col-md-3">
                            <div class="testomoniam_text text_align_center">
                              <i><img src="{{asset("images/happy777.jpg")}}" alt="#" /></i>
                              <h3>Michelle B. Harris</h3>
                              <span>Bitcoin</span>
                            </div>
                          </div>
                          <div class="col-md-9">
                            <div class="testomoniam_text text_align_left">
                              <p>{{$compd? $compd->companyname: 'Coming soon'}} was the only rescue I had after covid-19 did it's damage to my business. I'm happily back on my feet now, thanks to this amazing platform.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#testimo" role="button" data-slide="prev">
                  <i class="fa fa-angle-left" aria-hidden="true"></i>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#testimo" role="button" data-slide="next">
                  <i class="fa fa-angle-right" aria-hidden="true"></i>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end testimonial -->

<!-- affiliates starts here -->
                  <section>
                      <div _ngcontent-sc182="" class="container">
                          <div _ngcontent-sc182="" id="affiliates" class="text-center">
                              <div class="row">
            <div class="col-md-12">
              <div class="titlepage text_align_center">
                <h2>Affiliates</h2>
              </div>
            </div>
          </div>
                              <div _ngcontent-sc182="" class="partners-wrapper">
                                  <coinsource-raised-card _ngcontent-sc182="" _nghost-sc173=""
                                      class="ng-star-inserted">
                                      <div _ngcontent-sc173="" class="raised-card card-image-only">
                                          <div _ngcontent-sc173="" class="card-image-container"><a _ngcontent-sc182=""
                                                  image="" target="_blank" rel="noreferrer noopener"
                                                  href="http://atmheadquarters.com/" class="ng-star-inserted"><img
                                                      _ngcontent-sc182=""
                                                      src="https://storage.googleapis.com/prod_cms_media/Atm_headquarter_bbcb17b817/Atm_headquarter_bbcb17b817.svg"
                                                      alt="ATM Headquarters"></a>
                                              <!---->
                                              <!---->
                                          </div>
                                          <!---->
                                      </div>
                                  </coinsource-raised-card>
                                  <!---->
                                  <coinsource-raised-card _ngcontent-sc182="" _nghost-sc173=""
                                      class="ng-star-inserted">
                                      <div _ngcontent-sc173="" class="raised-card card-image-only">
                                          <div _ngcontent-sc173="" class="card-image-container"><a _ngcontent-sc182=""
                                                  image="" target="_blank" rel="noreferrer noopener"
                                                  href="https://www.cordfinancial.com/" class="ng-star-inserted"><img
                                                      _ngcontent-sc182=""
                                                      src="https://storage.googleapis.com/prod_cms_media/Cord_financial_d120089541/Cord_financial_d120089541.svg"
                                                      alt="Cord Financial"></a>
                                              <!---->
                                              <!---->
                                          </div>
                                          <!---->
                                      </div>
                                  </coinsource-raised-card>
                                  <!---->
                                  <coinsource-raised-card _ngcontent-sc182="" _nghost-sc173=""
                                      class="ng-star-inserted">
                                      <div _ngcontent-sc173="" class="raised-card card-image-only">
                                          <div _ngcontent-sc173="" class="card-image-container"><a _ngcontent-sc182=""
                                                  image="" target="_blank" rel="noreferrer noopener" href="https://firstcoinatm.com/"
                                                  class="ng-star-inserted"><img _ngcontent-sc182=""
                                                      src="https://storage.googleapis.com/prod_cms_media/Firstcoin_8529960a67/Firstcoin_8529960a67.svg"
                                                      alt="First Coin ATM"></a>
                                              <!---->
                                              <!---->
                                          </div>
                                          <!---->
                                      </div>
                                  </coinsource-raised-card>
                                  <!---->
                                  <coinsource-raised-card _ngcontent-sc182="" _nghost-sc173=""
                                      class="ng-star-inserted">
                                      <div _ngcontent-sc173="" class="raised-card card-image-only">
                                          <div _ngcontent-sc173="" class="card-image-container"><a _ngcontent-sc182=""
                                                  image="" target="_blank" rel="noreferrer noopener"
                                                  href="https://www.coinbridgepartners.io/"
                                                  class="ng-star-inserted"><img _ngcontent-sc182=""
                                                      src="https://storage.googleapis.com/prod_cms_media/Coinbridge_c3cf684ff4/Coinbridge_c3cf684ff4.svg"
                                                      alt="Coinbridge"></a>
                                              <!---->
                                              <!---->
                                          </div>
                                          <!---->
                                      </div>
                                  </coinsource-raised-card>
                                  <!---->
                                  <coinsource-raised-card _ngcontent-sc182="" _nghost-sc173=""
                                      class="ng-star-inserted">
                                      <div _ngcontent-sc173="" class="raised-card card-image-only">
                                          <div _ngcontent-sc173="" class="card-image-container"><a _ngcontent-sc182=""
                                                  image="" target="_blank" rel="noreferrer noopener"
                                                  href="https://atmmachines.com/" class="ng-star-inserted"><img
                                                      _ngcontent-sc182=""
                                                      src="https://storage.googleapis.com/prod_cms_media/Atm_machines_fcc1f9961f/Atm_machines_fcc1f9961f.svg"
                                                      alt="ATM Machines"></a>
                                              <!---->
                                              <!---->
                                          </div>
                                          <!---->
                                      </div>
                                  </coinsource-raised-card>
                                  <!---->
                                  <coinsource-raised-card _ngcontent-sc182="" _nghost-sc173=""
                                      class="ng-star-inserted">
                                      <div _ngcontent-sc173="" class="raised-card card-image-only">
                                          <div _ngcontent-sc173="" class="card-image-container"><a _ngcontent-sc182=""
                                                  image="" target="_blank" rel="noreferrer noopener"
                                                  href="https://atmbitcoin.com/" class="ng-star-inserted"><img
                                                      _ngcontent-sc182=""
                                                      src="https://storage.googleapis.com/prod_cms_media/Atm_bitcoin_8671a3282c/Atm_bitcoin_8671a3282c.svg"
                                                      alt="ATM Bitcoin"></a>
                                              <!---->
                                              <!---->
                                          </div>
                                          <!---->
                                      </div>
                                  </coinsource-raised-card>
                                  <!---->
                                  <coinsource-raised-card _ngcontent-sc182="" _nghost-sc173=""
                                      class="ng-star-inserted">
                                      <div _ngcontent-sc173="" class="raised-card card-image-only">
                                          <div _ngcontent-sc173="" class="card-image-container"><a _ngcontent-sc182=""
                                                  image="" target="_blank" rel="noreferrer noopener"
                                                  href="https://atmcoiners.com/" class="ng-star-inserted"><img
                                                      _ngcontent-sc182=""
                                                      src="https://storage.googleapis.com/prod_cms_media/Atm_coiners_7847180921/Atm_coiners_7847180921.svg"
                                                      alt="ATM Coiners"></a>
                                              <!---->
                                              <!---->
                                          </div>
                                          <!---->
                                      </div>
                                  </coinsource-raised-card>
                                  <!---->
                                  <coinsource-raised-card _ngcontent-sc182="" _nghost-sc173=""
                                      class="ng-star-inserted">
                                      <div _ngcontent-sc173="" class="raised-card card-image-only">
                                          <div _ngcontent-sc173="" class="card-image-container"><a _ngcontent-sc182=""
                                                  image="" target="_blank" rel="noreferrer noopener"
                                                  href="https://sunlifeatm.com/" class="ng-star-inserted"><img
                                                      _ngcontent-sc182=""
                                                      src="https://storage.googleapis.com/prod_cms_media/Sunlife_7b58ce23e7/Sunlife_7b58ce23e7.svg"
                                                      alt="Sunlife ATM"></a>
                                              <!---->
                                              <!---->
                                          </div>
                                          <!---->
                                      </div>
                                  </coinsource-raised-card>
                                  <!---->
                                  <coinsource-raised-card _ngcontent-sc182="" _nghost-sc173=""
                                      class="ng-star-inserted">
                                      <div _ngcontent-sc173="" class="raised-card card-image-only">
                                          <div _ngcontent-sc173="" class="card-image-container"><a _ngcontent-sc182=""
                                                  image="" target="_blank" rel="noreferrer noopener"
                                                  href="http://www.nationalcash.com/" class="ng-star-inserted"><img
                                                      _ngcontent-sc182=""
                                                      src="https://storage.googleapis.com/prod_cms_media/National_cash_f5f1146120/National_cash_f5f1146120.svg"
                                                      alt="National Cash Systems"></a>
                                              <!---->
                                              <!---->
                                          </div>
                                          <!---->
                                      </div>
                                  </coinsource-raised-card>
                                  <!---->
                                  <!---->
                              </div>
                          </div>
                      </div>
                  </section>
                  <!-- affiliates ends here -->



    @endsection
