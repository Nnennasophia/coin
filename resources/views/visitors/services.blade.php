@extends("layouts.spacedcustomlayout")

@section("body")



<main class="ourservice-contents ourcompany-page">
	<!-- contents of the page -->
	<section>
		<!-- first row -->
		<div class="flex services">
			<div class="left not-img">
				<h3>forex trading</h3>
				<p>
					Forex is a portmanteau of foreign currency and exchange. Foreign exchange is the process of changing one currency into another currency for a variety of reasons, usually for commerce, trading, or tourism. According to a recent triennial report...
				</p>
				<a href="{{route("forextrading")}}" target="_blank" class="services-cta">read more</a>
			</div>
		<div class="right">
			<div class="img-container">
				<img src="{{asset("images/ourservice-img1.jpg")}}" alt="forex image">
			</div>
		</div>
	   </div>

	   <!-- second row -->
		<div class="flex services">
			<div class="left">
			<div class="img-container">
				<img src="{{asset("images/ourservice-img2.jpg")}}" alt="real estate image">
			</div>
			</div>
			<div class="right">
				<h3>real estate investments</h3>
				<p>
					Real estate investments involves the purchase, ownership, management, rental and/or sale of real estate for profit. Improvement of realty property as part of a real estate investment strategy is generally considered to be a sub-specialty of real estate investing...
				</p>
				<a href="{{route("realestateplan")}}" target="_blank" class="services-cta">read more</a>
		     </div>
		    </div>

		    <!-- third row -->
		   <div class="flex services">
			<div class="left not-img">
			<h3>gold investments</h3>
				<p>
					Commonly seen as a great store of wealth, this precious metal is also known as a reliable safe-haven asset. With a rich history amongst almost all global cultures, gold remains a highly popular...
				</p>
				<a href="{{route("goldinvestment")}}" target="_blank" class="services-cta">read more</a>	
			</div>
			<div class="right">
			<div class="img-container">
				<img src="{{asset("images/ourservice-img3.jpg")}}" alt="gold investment image">
			</div>
			</div>
		   </div>
            
            <!-- fourth row -->
		   <div class="flex services">
			<div class="left">
			<div class="img-container">
				<img src="{{asset("images/ourservice-img4.jpg")}}" alt="retirement plan image">
			</div>	
			</div>
			<div class="right">
			<h3>retirement planning</h3>
				<p>
					Saving for retirement can be a daunting task, but with a sound strategy, it???s well within reach. igenius fx is here to bring clarity to retirement...
				</p>
				<a href="{{route("retirement")}}" target="_blank" class="services-cta">read more</a>
			</div>
		   </div>

		   <!-- fifth row not-img-->
		   <div class="flex services">
			<div class="left not-img">
				<h3>medical cannabis</h3>
				<p>
					For many years we have been working conscientiously and with the most diverse technologies and means. We have constantly successfully completed our projects..
				</p>
				<a href="{{route("cannabis")}}" target="_blank" class="services-cta">read more</a>	
			</div>
			<div class="right">
			<div class="img-container">
				<img src="{{asset("images/ourservice-img5.png")}}" alt="medical service image">
			</div>	
			</div>
		   </div>

		   <!-- sixth row -->
		   <div class="flex services">
			<div class="left">
			 <div class="img-container">
				<img src="{{asset("images/ourservice-img6.jpg")}}" alt="cryptocurrency image">
			</div>
			</div>
			<div class="right">
				<h3>cryptocurrencies</h3>
				<p>
					FUNDFLUX fx now offers all traders the opportunity to trade a wide range of the top ranked digital coins 24/7*. Today cryptocurrencies have become known to most people...
				</p>
				<a href="{{route("cryptoplans")}}" target="_blank" class="services-cta">read more</a>
			</div>
		   </div>

		   <!--seventh row -->
		   <div class="flex services">
			<div class="left not-img">
				<h3>financial planning</h3>
				<p>
				A financial plan is a comprehensive evaluation of an investor???s current and future financial state by using currently known variables to predict future cash flows, asset values and withdrawal...
				</p>
				<a href="{{route("finacialplaning")}}" target="_blank" class="services-cta">read more</a>
			</div>
			<div class="right">
			<div class="img-container">
				<img src="{{asset("images/ourservice-img7.jpg")}}" alt="financial plan image">
			</div>
			</div>
		   </div>


		   <!-- eight row -->
		   <div class="flex services">
			<div class="left">
			<div class="img-container">
				<img src="{{asset("images/ourservice-img8.jpg")}}" alt="oil and gas image">
			</div>
			</div>
			<div class="right">
				<h3>oil and gas</h3>
				<p>
					Surprising as it might be, anyone can invest in the oil market to make a profit. Indeed, the development of online trading platforms has allowed individuals to use their savings to speculate on rising or falling oil prices...
				</p>
				<a href="{{route("oilandgas")}}" target="_blank" class="services-cta">read more</a>
			</div>
		   </div>

		   <!-- nineth row -->
		   <div class="flex services">
			<div class="left not-img">
				<h3>loan and grant</h3>
				<p>
					Getting a loan doesn???t have to be intimidating, with the right lender it can be a simple process. You only need a lender committed to taking the mystery out of the mortgage loan process...
				</p>
				<a href="{{route("loansandgrant")}}" target="_blank" class="services-cta">read more</a>
			</div>
			<div class="right">
			<div class="img-container">
				<img src="{{asset("images/ourservice-img9.jpg")}}" alt="loan image">
			</div>
			</div>
		   </div>


		   <!-- tenth row -->
		   <div class="flex services">
			<div class="left">
			<div class="img-container">
				<img src="{{asset("images/ourservice-img10.jpg")}}" alt="stock images">
			</div>
			</div>
			<div class="right">
				<h3>stock or share</h3>
				<p>
					A stock or share (also known as a company's "equity") is a financial instrument that represents ownership in a company or corporation and represents a proportionate claim on its assets (what it owns) and earnings...
				</p>
				<a href="{{route('stockplans')}}" target="_blank" class="services-cta">read more</a>
			</div>
		   </div>

	</section>

	  <section class="start-financial-freedom">
    	<div class="flex">
    		<p>Start your journey to
    	   <span class="lg-font">financial freedom</span></p>
    	   <a href="{{route('login')}}"class="cta-btn" target="_blank">get started</a>
    	</div>
    </section>

</main>


@endsection
