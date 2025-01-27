<div class="container">
    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
            <div class="col-12 col-md">
                <img class="mb-2" src="{{ asset('assets/images/logo.png') }}" alt="" style="height: 45px; width: auto;">
                <p><b>"Fund Raise BD"</b> is a non-profit organization. Our main goal is to establish a simple and digital connection between donors and fund collectors.</p>
                <small class="d-block mb-3 text-muted"> &copy; 2025 FundRaiseBD All Rights Reserved </small>
            </div>
            <div class="col-6 col-md">
                <h5>Donate</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Categories</a></li>
                    <li><a class="text-muted" href="#">Crisis Relief</a></li>
                    <li><a class="text-muted" href="#">Social Impact Funds</a></li>
                    <li><a class="text-muted" href="#">Supporter Space</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Fundraise</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Start A Fundraising</a></li>
                    <li><a class="text-muted" href="#">Fundraising Categories</a></li>
                    <li><a class="text-muted" href="#">Fundraising Blog</a></li>
                    <li><a class="text-muted" href="#">Charity Fundraising</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">About FundRaiseBD</a></li>
                    @guest
                    <li><a class="text-muted" href="{{ route('login') }}">Login Portal</a></li>
                    @endguest
                    <li><a class="text-muted" href="{{ route('webpage.contact') }}">Contact</a></li>
                    <li><a class="text-muted" href="#">Privacy Policy</a></li>
                    <li><a class="text-muted" href="#">Terms & Conditons</a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>