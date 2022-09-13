@extends("layouts.spacedcustomlayout")

@section('body')


<div class="faq">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
          </div>
      </div>
      <div class="row">
          <div class="col-md-12">
              <div class="titlepage text_align_center">
                  <h2>F.A.Q</h2>
              </div>
          </div>
          <div class=" col-md-10 offset-md-1">
              <div>
                     <p> How is my profit calculated?
Your profit from a trade ranges from 0.8% up to 1.82% daily profit of the investment amount. Total profit depends on the duration you set for the investment. <br /><br />

What is the minimum amount that I can invest?
The minimum amount to invest in a single investment is $1000 unless otherwise stated.<br /><br />

What is the minimum deposit amount?
The minimum deposit amount is $100 unless otherwise stated.<br /><br />

What is the minimum withdrawal amount?
Minimum withdrawal amount is $100.<br /><br />

Are there any commissions upon making transactions with my trading account?
Our company does not take any commissions on your transactions. But such commissions can be taken by the payment systems or payment aggregator you used.<br /><br />

How much time does it take to withdraw funds?
Withdrawal requests are processed and sent almost immediately. Sometimes, it may take some minutes or few hours depending on system congestion. <br /><br />

Do I need any documents to withdraw funds?
Company representative can ask you to send scanned documents, depending on the withdraw type, especially if you have not submitted your required KYC or AML documents. All the information will be sent to your e-mail. <br /><br />

Can I lose my money in this investment?
NO! The simple answer is NO. We have a dedicated team of experts that work tirelessly to maximize profit for you and make sure it is available in your account daily. <br /><br />

How can I close my account?
In case you wish to stop using your account, please contact our Clients support department via email info@ {{$compd? $compd->companyemail: 'Coming soon'}} </p>
                  
              </div>
              
          </div>
      </div>
  </div>
</div>


<!-- footer -->
<footer>
  <style>
a {text-align: center;}
</style>


@endsection()
