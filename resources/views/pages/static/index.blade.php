<div class="container">
    <div class="row marg10">
        <div id="carousel-example-generic" class="carousel slide well" data-ride="carousel" style="height-min: 320px">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                @foreach($attractions  as $index => $value)
                <li data-target="#carousel-example-generic" data-slide-to="{{ $index }}" class="{{ $index == 0?'active':'' }}"></li>
                @endforeach
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                @foreach($attractions as $index => $attraction)
                <div class="item {{ $index == 0?'active':'' }}" style="background-image: url('{{ $attraction['image']['url'] }}');background-size:cover;min-height: 320px">
                    <!--<img src="{{ $attraction['image']['url'] }}" alt="{{ $attraction['image']['alt'] }}" style="background-size: cover">-->
                    <div class="carousel-caption">
                        {{  $attraction['description'] }}
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
    <div class="row marg25">
        <div class="col-lg-4 col-md-4 col-xs-4 col-ms-4">
            <div class="iconbox"><span class="iconbox-cash"></span><br>
                <h3>Package Bank Account</h3>
                <p>If you pay a monthly fee for your bank account you may be entitled to claim all of the fees back. If the Terms and Conditions were not explained fully or you were upgraded without agreeing.</p>
                <p class="read"><a href="/our-services/package-bank-accounts">Read More →</a></p>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-4 col-ms-4">
            <div class="iconbox"><span class="iconbox-calculator"></span><br>
                <h3>Payment Protection Insurance</h3>
                <p>Have you been paying a monthly insurance premium on your loan, credit card or mortgage? Consumers all across the UK have been mis-sold invalid insurance and can make a claim for a refund.</p>
                <p class="read"><a href="/our-services/payment-protection-insurance">Read More →</a></p>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-4 col-ms-4">
            <div class="iconbox"><span class="iconbox-refresh"></span><br>
                <h3>PPI Redress</h3>
                <p>You may think that you have claimed your PPI back already, but are you aware that some banks only paid a small portion of the compensation you deserved? We can re-evaluate your win and claim back what you are actually entitled to.</p>
                <p class="read"><a href="/our-services/payment-protection-insurance-redress">Read More →</a></p>
            </div>
        </div>
    </div>
</div>