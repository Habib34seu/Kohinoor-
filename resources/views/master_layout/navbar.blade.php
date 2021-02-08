
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>


<script type="text/javascript">
/// some script

// jquery ready start
$(document).ready(function() {
	jQuery code

	////////////////////// Prevent closing from click inside dropdown
    $(document).on('click', '.dropdown-menu', function (e) {
      e.stopPropagation();
    });

    make it as accordion for smaller screens
    if ($(window).width() < 992) {
	  	$('.dropdown-menu a').click(function(e){
	  		e.preventDefault();
	        if($(this).next('.submenu').length){
	        	$(this).next('.submenu').toggle();
	        }
	        $('.dropdown').on('hide.bs.dropdown', function () {
			   $(this).find('.submenu').hide();
			})
	  	});
	}
	
}); // jquery end
</script>
<style type="text/css">
	@media (min-width: 992px){
		.dropdown-menu .dropdown-toggle:after{
			border-top: .3em solid transparent;
		    border-right: 0;
		    border-bottom: .3em solid transparent;
		    border-left: .3em solid;
		}

		.dropdown-menu .dropdown-menu{
			margin-left:0; margin-right: 0;
		}

		.dropdown-menu li{
			position: relative;
		}
		.nav-item .submenu{ 
			display: none;
			position: absolute;
			left:100%; top:-7px;
		}
		.nav-item .submenu-left{ 
			right:100%; left:auto;
		}

		.dropdown-menu > li:hover{ background-color: #f1f1f1 }
		.dropdown-menu > li:hover > .submenu{
			display: block;
		}
    }
    .dropdown:hover .dropdown-content {display: block;}
</style>
 
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
            use App\Models\BrandCategory;
            use App\Models\Brand;
            use App\Models\Product;
            use App\Models\ProductCategory;
            use App\Models\ProductSubCategory;

            $quaterlyResult = QuarterlyResult::all();
            $about = About::all();
            $halfYearlyReport = HalfYearlyReport::all();
            $corporateGovernance = CorporateGovernance::all();

           // Brand start=======================================
            $brandCatarray = BrandCategory::all();
            $brandarry=[];
            for($i=0;$i<count($brandCatarray); $i++){
                $brandArray = Brand::where('brandcat_id',$brandCatarray[$i]['id'])->get();
                $brandCatarray[$i]['brandarry']=$brandArray;
            }
            // Brand End=========================================

            // Product Start ===================================
            $productCatarray = ProductCategory::all();
            $subcatarry=[];
            for($i=0;$i<count($productCatarray) ;$i++){
                $produsubctCatarray = ProductSubCategory::where('prod_cat_id',$productCatarray[$i]['id'])->get();
                for($j=0;$j<count($produsubctCatarray);$j++){
                    $productarray=Product::where('prod_subcat_id',$produsubctCatarray[$j]['id'])->get();
                    $produsubctCatarray[$j]['productarray']=$productarray;

                }
                $productCatarray[$i]['subcatarry']=$produsubctCatarray;
            }
        // Product End ==========================================
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
                        <a class="nav-link dropdown-toggle" href="product" product>  Product  </a>
                        <ul class="dropdown-menu dropdown-content">
                            @foreach($productCatarray as $prodcat)
                                    <li>
                                        <a class="dropdown-item dropdown-toggle" href="#" value="{{$prodcat->id}}"> 
                                        {{ $prodcat->name }}
                                        </a>
                                        <ul class="submenu dropdown-menu">
                                        @foreach($prodcat->subcatarry as $subprodcat)
                                                <li>
                                                    <a class="dropdown-item dropdown-toggle" href="#" value="{{$subprodcat->id}}"> 
                                                    {{ $subprodcat->name  }}
                                                    </a>
                                                    <ul class="submenu dropdown-menu">
                                                    @foreach($subprodcat->productarray as $product)
                                                        <li>
                                                        
                                                            <a class="dropdown-item" href="{{route('pshow',[$product->id])}}"  value="{{$product->id}}">
                                                            {{ $product->name }}
                                                            </a>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                        @endforeach
                                        </ul>
                                    </li>
                            @endforeach
                        </ul>
               </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle">Brand</a>
                    <ul class="dropdown-menu dropdown-content">
                        @foreach($brandCatarray as $brancat)
                        <li>
                            <a class="dropdown-item dropdown-toggle" value="{{$brancat->id}}" href="#"> 
                                {{$brancat->name}} 
                            </a>
                            <ul class="submenu dropdown-menu">
                                @foreach($brancat->brandarry as $brand)
                                <li>
                                    <a class="dropdown-item" value="{{$brand->id}}" href="{{route('bshow',[$brand->id])}}">
                                        {{$brand->name}} 
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach
                    </ul>
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