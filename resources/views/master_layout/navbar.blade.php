
 
        <marquee behavior="scroll" direction="left" scrollamount="2">
            <strong><font face="Bookman Old Style" size="+1" color="#ff0000">
            "New product AM PM Toothpaste available in Three Size 200gm, 100gm, 45gm"</font></strong>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <strong><font face="Bookman Old Style" size="+1" color="#ff0000">
            Choose Kohinoor products and be rest assured for daylong freshness.</font></strong>
        </marquee>
  
        <div>
                <img class="bd-placeholder-img" 
                style="
                height: 105px;
                width: 80px;
                margin-bottom: .5%;"
                src="{{asset('image/logo/logo.jpg')}}" 
                preserveaspectratio="xMidYMid slice" focusable="false" role="img">
        </div>




        @php
            use App\Models\HalfYearlyReport;
            use App\Models\QuarterlyResult;
            use App\Models\CorporateGovernance;
            use App\Models\About;

            $quaterlyResult = QuarterlyResult::all();
            $about = About::all();
            $halfYearlyReport = HalfYearlyReport::all();
            $corporateGovernance = CorporateGovernance::all();
            
        @endphp
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">  About  </a>
                    <ul class="dropdown-menu dropdown-content">
                        @foreach($about as $a)
                        <li><a class="dropdown-item dropdown-toggle" href="{{route('abshow',[$a->id])}}"> {{$a->name}} </a>
                        </li>
                        @endforeach
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" 
                    id="navbarDropdown" role="button" data-toggle="dropdown" 
                    aria-haspopup="true" aria-expanded="false">
                   Finance
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" 
                    id="navbarDropdown" role="button" data-toggle="dropdown" 
                    aria-haspopup="true" aria-expanded="false">
                   Product
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" 
                    id="navbarDropdown" role="button" data-toggle="dropdown" 
                    aria-haspopup="true" aria-expanded="false">
                   Brand
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" 
                    href="#" id="navbarDropdown" role="button" 
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Annual Report
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>



                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">  Half Yearly Result  </a>
                    <ul class="dropdown-menu dropdown-content">
                        @foreach($halfYearlyReport as $h)
                        <li><a class="dropdown-item dropdown-toggle" href="{{route('hshow',[$h->id])}}"> {{$h->name}} </a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">  Quaterly Result  </a>
                    <ul class="dropdown-menu dropdown-content">
                        @foreach($quaterlyResult as $q)
                        <li><a class="dropdown-item dropdown-toggle" href="{{route('qshow',[$q->id])}}"> {{$q->name}} </a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">P S I</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">   Corporate Governance </a>
                    <ul class="dropdown-menu dropdown-content">
                        @foreach($corporateGovernance as $c)
                        <li><a class="dropdown-item dropdown-toggle" href="{{route('cshow',[$c->id])}}"> {{$c->name}} </a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mail</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">News</a>
                </li>
            </ul>
        </div>
</nav>