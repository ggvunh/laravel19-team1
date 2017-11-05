@extends('layouts.users.layout')
	@section('product')
  <!-- products -->
 <div class="products">
   <div class="container">
     <div class="col-md-9 product-w3ls-right">
       <!-- breadcrumbs -->
       <ol class="breadcrumb breadcrumb1">
         <li><a href="layout">Home</a></li>
         <li class="active">Products</li>
       </ol>
       <div class="clearfix"> </div>
       <!-- //breadcrumbs -->
       <div class="product-top">
         <h4>Electronics</h4>
         <div class="clearfix"> </div>
       </div>
       <div class="products-row">
         <div class="col-md-3 product-grids">
           <div class="agile-products">
             <div class="new-tag"><h6>10%<br>Off</h6></div>
             <a href="single.html"><img src="images/e13.jpg" class="img-responsive" alt="img"></a>
             <div class="agile-product-text">
               <h5><a href="single.html">Audio speaker</a></h5>
               <h6> $1900</h6>
               <form action="#" method="post">
                 <input type="hidden" name="cmd" value="_cart" />
                 <input type="hidden" name="add" value="1" />
                 <input type="hidden" name="w3ls_item" value="Audio speaker" />
                 <input type="hidden" name="amount" value="100.00" />
                 <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
               </form>
             </div>
           </div>
         </div>
         <div class="col-md-3 product-grids">
           <div class="agile-products">
             <div class="new-tag"><h6>New</h6></div>
             <a href="single.html"><img src="images/e13.jpg" class="img-responsive" alt="img"></a>
             <div class="agile-product-text">
               <h5><a href="single.html">Macbook 2017</a></h5>
               <h6><del>$4000</del> $3900</h6>
               <form action="#" method="post">
                 <input type="hidden" name="cmd" value="_cart" />
                 <input type="hidden" name="add" value="1" />
                 <input type="hidden" name="w3ls_item" value="Refrigerator" />
                 <input type="hidden" name="amount" value="300.00" />
                 <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
               </form>
             </div>
           </div>
         </div>
         <div class="col-md-3 product-grids">
           <div class="agile-products">
             <div class="new-tag"><h6>10% <br> Off</h6></div>
             <a href="single.html"><img src="images/e5.jpg" class="img-responsive" alt="img"></a>
             <div class="agile-product-text">
               <h5><a href="single.html">Macbook 2017</a></h5>
               <h6>$3000</h6>
               <form action="#" method="post">
                 <input type="hidden" name="cmd" value="_cart"/>
                 <input type="hidden" name="add" value="1"/>
                 <input type="hidden" name="w3ls_item" value="Smart Phone"/>
                 <input type="hidden" name="amount" value="70.00"/>
                 <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
               </form>
             </div>
           </div>
         </div>
         <div class="col-md-3 product-grids">
           <div class="agile-products">
             <div class="new-tag"><h6>New</h6></div>
             <a href="single.html"><img src="images/e13.jpg" class="img-responsive" alt="img"></a>
             <div class="agile-product-text">
               <h5><a href="single.html">Macbook 2016</a></h5>
               <h6>$3000</h6>
               <form action="#" method="post">
                 <input type="hidden" name="cmd" value="_cart"/>
                 <input type="hidden" name="add" value="1"/>
                 <input type="hidden" name="w3ls_item" value="Digital Camera"/>
                 <input type="hidden" name="amount" value="80.00"/>
                 <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
               </form>
             </div>
           </div>
         </div>
         <div class="col-md-3 product-grids">
           <div class="agile-products">
             <div class="new-tag"><h6>New</h6></div>
             <a href="single.html"><img src="images/e5.jpg" class="img-responsive" alt="img"></a>
             <div class="agile-product-text">
               <h5><a href="single.html">Macbook </a></h5>
               <h6><del>$4000</del> $3800</h6>
               <form action="#" method="post">
                 <input type="hidden" name="cmd" value="_cart"/>
                 <input type="hidden" name="add" value="1"/>
                 <input type="hidden" name="w3ls_item" value="Digital Camera"/>
                 <input type="hidden" name="amount" value="80.00"/>
                 <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
               </form>
             </div>
           </div>
         </div>
         <div class="col-md-3 product-grids">
           <div class="agile-products">
             <div class="new-tag"><h6>5% <br> Off</h6></div>
             <a href="single.html"><img src="images/e5.jpg" class="img-responsive" alt="img"></a>
             <div class="agile-product-text">
               <h5><a href="single.html">Macbook 2017</a></h5>
               <h6>$2500</h6>
               <form action="#" method="post">
                 <input type="hidden" name="cmd" value="_cart"/>
                 <input type="hidden" name="add" value="1"/>
                 <input type="hidden" name="w3ls_item" value="Smart Phone"/>
                 <input type="hidden" name="amount" value="70.00"/>
                 <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
               </form>
             </div>
           </div>
         </div>
         <div class="col-md-3 product-grids">
           <div class="agile-products">
             <div class="new-tag"><h6>20%<br>Off</h6></div>
             <a href="single.html"><img src="images/e4.jpg" class="img-responsive" alt="img"></a>
             <div class="agile-product-text">
               <h5><a href="single.html">Macbook</a></h5>
               <h6> $2000</h6>
               <form action="#" method="post">
                 <input type="hidden" name="cmd" value="_cart" />
                 <input type="hidden" name="add" value="1" />
                 <input type="hidden" name="w3ls_item" value="Audio speaker" />
                 <input type="hidden" name="amount" value="100.00" />
                 <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
               </form>
             </div>
           </div>
         </div>
         <div class="col-md-3 product-grids">
           <div class="agile-products">
             <div class="new-tag"><h6>New</h6></div>
             <a href="single.html"><img src="images/e13.jpg" class="img-responsive" alt="img"></a>
             <div class="agile-product-text">
               <h5><a href="single.html">Macbook 2017</a></h5>
               <h6>$3000</h6>
               <form action="#" method="post">
                 <input type="hidden" name="cmd" value="_cart" />
                 <input type="hidden" name="add" value="1" />
                 <input type="hidden" name="w3ls_item" value="Refrigerator" />
                 <input type="hidden" name="amount" value="300.00" />
                 <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
               </form>
             </div>
           </div>
         </div>
         <div class="col-md-3 product-grids">
           <div class="agile-products">
             <div class="new-tag"><h6>20%<br>Off</h6></div>
             <a href="single.html"><img src="images/e5.jpg" class="img-responsive" alt="img"></a>
             <div class="agile-product-text">
               <h5><a href="single.html">Macbook 2017</a></h5>
               <h6>$1000</h6>
               <form action="#" method="post">
                 <input type="hidden" name="cmd" value="_cart" />
                 <input type="hidden" name="add" value="1" />
                 <input type="hidden" name="w3ls_item" value="Audio speaker" />
                 <input type="hidden" name="amount" value="100.00" />
                 <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
               </form>
             </div>
           </div>
         </div>
         <div class="col-md-3 product-grids">
           <div class="agile-products">
             <div class="new-tag"><h6>New</h6></div>
             <a href="single.html"><img src="images/e4.jpg" class="img-responsive" alt="img"></a>
             <div class="agile-product-text">
               <h5><a href="single.html">Macbook 2017</a></h5>
               <h6><del>$1300</del> $1250</h6>
               <form action="#" method="post">
                 <input type="hidden" name="cmd" value="_cart" />
                 <input type="hidden" name="add" value="1" />
                 <input type="hidden" name="w3ls_item" value="Refrigerator" />
                 <input type="hidden" name="amount" value="300.00" />
                 <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
               </form>
             </div>
           </div>
         </div>
         <div class="col-md-3 product-grids">
           <div class="agile-products">
             <div class="new-tag"><h6>5% <br> Off</h6></div>
             <a href="single.html"><img src="images/e13.jpg" class="img-responsive" alt="img"></a>
             <div class="agile-product-text">
               <h5><a href="single.html">Macbook 2017</a></h5>
               <h6><del>$1000</del> $700</h6>
               <form action="#" method="post">
                 <input type="hidden" name="cmd" value="_cart"/>
                 <input type="hidden" name="add" value="1"/>
                 <input type="hidden" name="w3ls_item" value="Smart Phone"/>
                 <input type="hidden" name="amount" value="70.00"/>
                 <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
               </form>
             </div>
           </div>
         </div>
         <div class="col-md-3 product-grids">
           <div class="agile-products">
             <div class="new-tag"><h6>New</h6></div>
             <a href="single.html"><img src="images/e5.jpg" class="img-responsive" alt="img"></a>
             <div class="agile-product-text">
               <h5><a href="single.html">Macbook 2017</a></h5>
               <h6><del>$1000</del> $800</h6>
               <form action="#" method="post">
                 <input type="hidden" name="cmd" value="_cart"/>
                 <input type="hidden" name="add" value="1"/>
                 <input type="hidden" name="w3ls_item" value="Digital Camera"/>
                 <input type="hidden" name="amount" value="80.00"/>
                 <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
               </form>
             </div>
           </div>
         </div>
         <div class="col-md-3 product-grids">
           <div class="agile-products">
             <div class="new-tag"><h6>New</h6></div>
             <a href="single.html"><img src="images/e13.jpg" class="img-responsive" alt="img"></a>
             <div class="agile-product-text">
               <h5><a href="single.html">Macbook 2017</a></h5>
               <h6><del>$1000</del> $800</h6>
               <form action="#" method="post">
                 <input type="hidden" name="cmd" value="_cart"/>
                 <input type="hidden" name="add" value="1"/>
                 <input type="hidden" name="w3ls_item" value="Digital Camera"/>
                 <input type="hidden" name="amount" value="80.00"/>
                 <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
               </form>
             </div>
           </div>
         </div>
         <div class="col-md-3 product-grids">
           <div class="agile-products">
             <div class="new-tag"><h6>5% <br> Off</h6></div>
             <a href="single.html"><img src="images/e13.jpg" class="img-responsive" alt="img"></a>
             <div class="agile-product-text">
               <h5><a href="single.html">Macbook </a></h5>
               <h6><del>$1100</del> $1000</h6>
               <form action="#" method="post">
                 <input type="hidden" name="cmd" value="_cart"/>
                 <input type="hidden" name="add" value="1"/>
                 <input type="hidden" name="w3ls_item" value="Smart Phone"/>
                 <input type="hidden" name="amount" value="70.00"/>
                 <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
               </form>
             </div>
           </div>
         </div>
         <div class="col-md-3 product-grids">
           <div class="agile-products">
             <div class="new-tag"><h6>20%<br>Off</h6></div>
             <a href="single.html"><img src="images/e5.jpg" class="img-responsive" alt="img"></a>
             <div class="agile-product-text">
               <h5><a href="single.html">Macbook 2017</a></h5>
               <h6><del>$1200</del> $1100</h6>
               <form action="#" method="post">
                 <input type="hidden" name="cmd" value="_cart" />
                 <input type="hidden" name="add" value="1" />
                 <input type="hidden" name="w3ls_item" value="Audio speaker" />
                 <input type="hidden" name="amount" value="100.00" />
                 <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
               </form>
             </div>
           </div>
         </div>
         <div class="col-md-3 product-grids">
           <div class="agile-products">
             <div class="new-tag"><h6>New</h6></div>
             <a href="single.html"><img src="images/e4.jpg" class="img-responsive" alt="img"></a>
             <div class="agile-product-text">
               <h5><a href="single.html">Macbook 2017</a></h5>
               <h6>$1300</h6>
               <form action="#" method="post">
                 <input type="hidden" name="cmd" value="_cart" />
                 <input type="hidden" name="add" value="1" />
                 <input type="hidden" name="w3ls_item" value="Refrigerator" />
                 <input type="hidden" name="amount" value="300.00" />
                 <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
               </form>
             </div>
           </div>
         </div>
         <div class="clearfix"> </div>
       </div>
       <!-- add-products -->
       <div class="w3ls-add-grids w3agile-add-products">
         <a href="#">
           <h4>TOP 10 TRENDS FOR YOU FLAT <span>20%</span> OFF</h4>
           <h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
         </a>
       </div>
       <!-- //add-products -->
     </div>
     <div class="clearfix"> </div>
   </div>
 </div>
 <!--//products-->
@endsection
