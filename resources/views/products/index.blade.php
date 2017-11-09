  @extends('layouts.admin.master')
  @section('content')
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <div class="row">
              <div class="col-xs-4">
                <a id="add-product" class="btn btn-primary"><i class="fa fa-plus"></i> Add New Product</a>
              </div>
              <div class="col-xs-8 text-right form-inline"> 
                <div class="form-group">
                  <select name="filter" id="filter" class="form-control search-option">
                    <option>Product Name</option>
                    <option>Manufacturer Name</option>
                  </select>
                </div>
                <div class="form-group">
                  <span>
                  <input id="search-product" name="name" value="{{ old('username') }}" type="text" class="form-control search-input" placeholder="Search...">
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive">
            <table class="table table-bordered table-hover" id="datagrid">
              <thead >
                <tr >
                  <th>Name</th>
                  <th>Image</th>
                  <th>Category Name</th>
                  <th>Manufacturer Name</th>
                  <th>Menu</th>

                </tr>
              </thead>
              <tbody>
                
              </tbody>
            </table>
          </div>
          <div class="page">
          <ul id="pagination" class="pagination">

          </ul> 
          </div>
          <!-- /.box-body -->
          <div class="box-footer clearfix">
            <div class="row">
              <div class="col-xs-3 ">
              <span id="show-entries"></span>
              </div>
            </div>  
            <div class="row">
              <div class="col-xs-2 col-md-4 form-inline">
                <div class="form-group">
                  <select class="form-control option" id="select-page" >
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option selected>6</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4 text-center info"></div>
              <div class="col-md-4">
                <ul class="pagination pagination-sm no-margin pull-right pagination-main"></ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="container">
  <!-- Trigger the modal with a button -->
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content col-md-8 col-md-offset-2">
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add new product</h4>
        </div>
        <div class="modal-body">
         <form class="form-horizontal" id="form-action">
          <input name="_token" type="hidden" value="{{ csrf_token() }}">
            <div class="form-group">
            <label for="name">Name</label>
            <div class="form-controls">
              <input class="form-control" name="name" type="text" id="name">
            </div>
            <span class="text-warning">
                <strong id="errorName"> </strong>
            </span>
          </div>
          <div class="form-group">
            <label for="illustrative_photo">Avatar</label>
            <div class="form-controls">
              <input onchange="loadFile(event)" name="illustrative_photo" type="file" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|images/*"  id="illustrative_photo">
            </div>
            <span class="text-warning">
                <strong id="errorIllustrative"> </strong>
            </span>
            <img id="output">
          </div>
          <div class="form-group">
            <label for="photos">Sub images</label>
            <div class="form-controls">
              <input multiple="" onchange="loadPhoto(event)" name="photos[]" type="file" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|images/*" id="photos">
            </div>
            <ul class="sub_image" id="photo">
            </ul>
          </div>
          <div class="form-group h3_product">
            <label for="category_id">Category Name</label>
            <div class="form-controls">
              <select class="form-control" id="category_id" name="category_id">
            
              </select>
            </div>
            <span class="text-warning">
                <strong id="errorCategory"> </strong>
            </span>
            </div>
          <div class="form-group">
            <label for="manufacturer_id">Manufacturer Name</label>
            <div class="form-controls">
              <select class="form-control" id="manufacturer_id" name="manufacturer_id">
              </select>
            </div>
            <span class="text-warning">
                <strong id="errorManufacturer"> </strong>
            </span>
            </div>
          <div class="form-group">
            <label for="description">Description</label>
            <div class="form-controls">
              <textarea class="form-control" name="description" cols="30" rows="5" id="description"></textarea>
            </div>
            <span class="text-warning">
                <strong id="errorDescription"> </strong>
            </span>
            </div>
          <div class="form-group">
            <label for="unit_price">Price</label>
            <div class="form-controls">
              <input class="form-control" name="unit_price" type="number" id="unit_price">
            </div>
            <span class="text-warning">
                <strong id="errorPrice"> </strong>
            </span>
            </div>
          <div class="form-group">
            <label for="quality_in_store">Quality</label>
            <div class="form-controls">
              <input class="form-control" name="quality_in_store" type="number" id="quality_in_store">
            </div>
            <span class="text-warning">
                <strong id="errorQuality"> </strong>
            </span>
            </div>

          <script>
             var loadFile = function(event) {
              var output = document.getElementById('output');
              output.src = URL.createObjectURL(event.target.files[0]);
              output.width="350";
              output.height="300";
            };

            var loadPhoto = function(event) {
              //var output = document.getElementById('photos')
              $("#photo").empty();
             for(i=0;i<=event.target.files.length;i++) {

              src=URL.createObjectURL(event.target.files[i]);
               $("#photo").append('<li >'+'<img ' +'src='+src+' height=100' +' width=120'+'</li>');
             }
            };
</script>

      
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button  type="submit" class="btn btn-primary" title="save">Save</button>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="editModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content col-md-8 col-md-offset-2">
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit product</h4>
        </div>
        <div class="modal-body">
        <form class="form-horizontal" id="form-update">
          <input name="_method" type="hidden" value="PUT"><input name="_token" type="hidden" value="{{ csrf_token() }}">
          <div class="form-group">
            <label for="name2">Name</label>
            <div class="form-controls">
              <input class="form-control" name="name" type="text" id="name2">
            </div>
            <span class="text-warning">
                <strong id="errorName2"> </strong>
            </span>
            </div>
          <div>
            <input id="productimage" type="hidden" name="productimage" value="">
            <input id="photoimages" type="hidden" name="photoimages[]" value="[]">
          </div>
          <div class="form-group">
            <label for="illustrative_photo2">Avatar</label>
            <div class="form-controls">
              <input onchange="loadFile2(event)"  name="illustrative_photo" type="file" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|images/*" id="illustrative_photo2" value="ok">
            </div>
            <img id="output2">
          </div>
          <div class="form-group">
            <label for="photos2">Sub images</label>
            <div class="form-controls">
              <input onchange="loadPhoto2(event)" multiple=""  name="photos[]" type="file" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|images/*" id="photos2">
            </div>
            <ul class="sub_image" id="photo2">
            </ul>
          </div>
          <div class="form-group h3_product">
            <label for="category_id2">Category Name</label>
            <div class="form-controls">
              <select class="form-control" id="category_id2" name="category_id">
              
              </select>
            </div>
            </div>
          <div class="form-group">
            <label for="manufacturer_id2">Manufacturer Name</label>
            <div class="form-controls">
              <select class="form-control" id="manufacturer_id2" name="manufacturer_id">
                
              </select>
            </div>
            </div>
          <div class="form-group">
            <label for="description2">Description</label>
            <div class="form-controls">
              <textarea class="form-control" name="description" cols="30" rows="5" id="description2"></textarea>
            </div>
            <span class="text-warning">
                <strong id="errorDescription2"> </strong>
            </span>
          </div>
          <div class="form-group">
            <label for="unit_price2">Price</label>
            <div class="form-controls">
              <input class="form-control" name="unit_price" type="number"  id="unit_price2">
            </div>
            <span class="text-warning">
                <strong id="errorPrice2"> </strong>
            </span>
          </div>
          <div class="form-group">
            <label for="quality_in_store2">Quality</label>
            <div class="form-controls">
              <input class="form-control" name="quality_in_store" type="number" id="quality_in_store2">
            </div>
            <span class="text-warning">
                <strong id="errorQuality2"> </strong>
            </span>
          </div>
           
            <script>
           var loadFile2 = function(event) {
              var output2 = document.getElementById('output2');
              output2.src = URL.createObjectURL(event.target.files[0]);
              output2.width="350";
              output2.height="300";
            };

            var loadPhoto2 = function(event) {
              $("#photo2").empty();
             for(i=0;i<=event.target.files.length;i++) {

              src=URL.createObjectURL(event.target.files[i]);
               $("#photo2").append('<li >'+'<img ' +'src='+src+' height=100' +' width=120'+'</li>');
             }
            };
          </script>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button id="update-data"  type="submit" class="btn btn-primary" title="update">Update</button>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
<script>

  $(document).ready(function(){
    $("#add-product").click(function(){
        $("#myModal").modal("show");
    })
    $("#myModal").on('show.bs.modal', function () {  
      $("#photo").empty();
      $("#illustrative_photo").val('');
      $("#photos").val('');
      document.getElementById('output').height=0;
      $.ajax({
        url:"products/create",
        type:"get",
        success: function(data,status){
          $("#category_id").empty();
          $("#manufacturer_id").empty();
          $.each(data.categories,function(key, category){
            $("#category_id").append (
              '<option value='+category.id+'>'+category.name+'</option>'
            )
          });
          $.each(data.manufacturers,function(key, manufacturer){
            $("#manufacturer_id").append (
              '<option value='+manufacturer.id+'>'+manufacturer.name+'</option>'
            )
          });    
        }
      })
    });

    $("#form-action").submit(function(event){
      event.preventDefault();
      var form = $(this);
      var formdata = false;
      if (window.FormData){
            formdata = new FormData(form[0]);
      }
      $("button[title='save']").html("Saving data, please wait...");
      $.ajax({
              url:"products",
              type:"post",
              data:formdata ? formdata : form.serialize(),
              enctype: "multipart/form-data",
              cache       : false,
              contentType : false,
              processData : false,
              success: function(data,status){
                $('#myModal').modal("hide");
                $("button[title='save']").html("Save");
                var limit = document.getElementById("select-page").value;
                $.ajax({
                  url:"api",
                  type:"post",
                  data:{limit:limit,_token:"{{ csrf_token() }}"},
                  success: function(data,status){
                    getData(data, status),
                    totalPage(data),
                    disabled(data),
                    show(data),
                    swal("Data successfully saved", {
                      icon: "success",
                      buttons: false,
                      timer: 1300,
                    }); 
                  }

                })
              },
              error: function(jqxhr,textStatus,errorThrown)
              {
                $("button[title='save']").html("Save");
                $('#errorName').text(jqxhr['responseJSON'].name);
                $('#errorCategory').text(jqxhr['responseJSON'].category_id);
                $('#errorManufacturer').text(jqxhr['responseJSON'].manufacturer_id);
                $('#errorPrice').text(jqxhr['responseJSON'].unit_price);
                $('#errorDescription').text(jqxhr['responseJSON'].description);
                $('#errorQuality').text(jqxhr['responseJSON'].quality_in_store);
                $('#errorIllustrative').text(jqxhr['responseJSON'].illustrative_photo);
                // console.log(jqxhr);
                // console.log(textStatus);
                // console.log(errorThrown);                               
                // console.log(jqxhr['responseJSON'].name);
              }

              })

      document.getElementById("form-action").reset();
      
    })

    $("#form-update").submit(function(event){
      event.preventDefault();
      var form = $(this);
      var formdata = false;
      var product_id=$("#update-data").data('myval');

      if (window.FormData){
            formdata = new FormData(form[0]);
      }
      var token=form.find('input[name="_token"]').val();
      $("button[title='update']").html("Updating data, please wait...");
      
      $.ajax({
        url:"products/"+product_id,
        type:'post',
        data:formdata ? formdata : form.serialize(),
        enctype: "multipart/form-data",
        cache       : false,
        contentType : false,
        processData : false,
        success: function(data,status){
         $('#editModal').modal("hide");
          $("button[title='update']").html("Update");
          var limit = document.getElementById("select-page").value;
          var current_page=$("#pagination").find(".active").text();

          $.ajax({
            url:"api",
            type:"post",
            data:{
              current_page:current_page,
              limit:limit,
              _token:"{{ csrf_token() }}"
            },
            success: function(data,status){
              getData(data, status),
              disabled(data),
              show(data),
              swal("Data successfully updated", {
                icon: "success",
                buttons: false,
                timer: 1300,
              }); 
            }
          })
        },
        error: function(jqxhr,textStatus,errorThrown)
        {
          $("button[title='update']").html("Update");
          $('#errorName2').text(jqxhr['responseJSON'].name);
          $('#errorCategory2').text(jqxhr['responseJSON'].category_id);
          $('#errorManufacturer2').text(jqxhr['responseJSON'].manufacturer_id);
          $('#errorPrice2').text(jqxhr['responseJSON'].unit_price);
          $('#errorDescription2').text(jqxhr['responseJSON'].description);
          $('#errorQuality2').text(jqxhr['responseJSON'].quality_in_store);
          $('#errorIllustrative2').text(jqxhr['responseJSON'].illustrative_photo);
          // console.log(jqxhr);
          // console.log(textStatus);
          // console.log(errorThrown);                               
        }
        })
    })

    $("#select-page").change(function() {
      var limit = document.getElementById("select-page").value;
      var name=$("#search-product").val();
      var filter=$("#filter").val();
      $.ajax({
        url:"api",
        type:"post",
        data:{limit:limit,name:name,filter:filter,_token:"{{ csrf_token() }}"},
        success: function(data,status){
          getData(data, status),
          totalPage(data),
          disabled(data),
          show(data)
        }
      })
    })

    $("#search-product").keyup(function(){
      var name=$(this).val();
      var filter=$("#filter").val();
      var limit = document.getElementById("select-page").value;
      $.ajax({
        url:"api",
        type:"post",
        data:{name:name,filter:filter,limit:limit,_token:"{{ csrf_token() }}"},
        success: function(data,status){
          getData(data, status),
          totalPage(data,status),
          disabled(data),
          show(data)
        }     
      })

    })  

    $.ajax({
      url:"api",
      type:"post",
      data:{_token:"{{ csrf_token() }}"},
      success: function(data,status){
        getData(data, status),
        totalPage(data),
        disabled(data),
        show(data)
      }
    })

    
    
      
  });
      function getData(data, status){
      $("tbody").empty();
      $.each(data.products,function(key, product){
          $("tbody").append (
            "<tr>" +
            "<td>" + "<a " + "href="+"products/product/"+product.id+" >"+product.name+
            " </a>"+"</td>"+
            "<td>"+
             '<img src=upload/'+product.illustrative_photo+' height="100" width="80" class="img-rounded" />'
            +"</td>" +  
            "<td>"+product.category.name+"</td>" +  
            "<td>"+product.manufacturer.name+"</td>"+
            "<td>"+
              '<a href="#editModal" data-toggle="modal" id="edit" data-product-id='+product.id+' ><i class="fa fa-pencil"></i> Edit&nbsp;&nbsp;</a>'+
                '<a href="#" onclick="delete_data('+product.id+')"><i class="fa fa-trash"></i> Delete</a>'+
            "</td>"+
            "</tr>"
          )
      });
     
     
    } 

    function disabled(data)
    {
      if(data.first==true){
        $('.page .pagination li:contains("«")').attr("class","disabled");
      }
      
      if(data.last==true){
        $('.page .pagination li:contains("»")').attr("class","disabled");
      }
    }

    function totalPage(data, status)
    {
      $('.page .pagination').empty();
      $('.page .pagination').append(
        '<li> <a href="#" >&laquo;</a> </li>'
      ) 
      for (data.start_page; data.start_page<=data.end_page;data.start_page++) {
      $('.page .pagination').append(
        '<li> <a href="#" >'+data.start_page+'</a </li>'
      )
      }
      $('.page .pagination').append(
        '<li> <a href="#" >&raquo;</a> </li>'
      )
    
      $("#pagination li:first-child").next().attr("class","active");
      if(data.current_page=="»"){
        $('.page .pagination').find('li').removeClass("active");
        $("#pagination li:first-child").next().attr("class","active");
      }
      else if(data.current_page=="«"){
        $('.page .pagination').find('li').removeClass("active");
        $("#pagination li:last-child").prev().attr("class","active");
      }

      $('.page .pagination').find('li').click(function() {

        $('.page .pagination').find('li').removeClass("active");
        
        var limit = document.getElementById("select-page").value;
        var current_page=$(this).find('a').text();
        var previous_page=$(this).next().find('a').text();
        var next_page=$(this).prev().find('a').text();
        var name=$("#search-product").val();
        var filter=$("#filter").val();
        $(this).attr("class","active");
        $.ajax({
          url:"api",
          type:"post",
          data: {
                limit:limit,
                previous_page:previous_page,
                next_page:next_page,
                current_page:current_page,
                name:name,
                filter:filter,
                _token:"{{ csrf_token() }}"
                },
          success: function(data,status){
            if(data.current_page=="»")
            {
              //alert(data.start_page);
              data.current_page=data.start_page;
              totalPage(data,status),
              getData(data, status),
              disabled(data),
              show(data)  
            }
            else if(data.current_page=="«")
            {
              totalPage(data,status)
              data.current_page=data.end_page;
              getData(data, status),
              disabled(data),
              show(data)  
            }
            else {
              getData(data, status),
              disabled(data),
              show(data)  
            }
          }
        })
      });
    }

    function delete_data(productId)
    {
      
      var limit = document.getElementById("select-page").value;
      var current_page=$("#pagination").find(".active").text();
      swal({
      title: "Are you sure want to delete this data?",   
      text: "Deleted data can not be restored!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          $.ajax({
            url:"/products/"+productId+"/delete",
            type:"get",
            success: function(){
              $.ajax({
              url:"api",
              type:"post",
              data:{current_page:current_page,limit:limit,_token:"{{ csrf_token() }}"},
              success: function(data,status){
                getData(data, status),
                disabled(data),
                show(data),
                swal("Data successfully deleted", {
                  icon: "success",
                  buttons: false,
                  timer: 1200,
                }); 
              }
              })
            }
          }) 
        }
      });
    }

     $("#editModal").on('show.bs.modal', function (e) {  
        //get data-id attribute of the clicked element
        var productId = $(e.relatedTarget).data('product-id');
        $.ajax({
        url:"products/"+productId+"/edit",
        type:"get",
        success: function(data,status){
          $("#category_id2").empty();
          $("#manufacturer_id2").empty();
          $.each(data.categories,function(key, category){
            $("#category_id2").append (
              '<option value='+category.id+'>'+category.name+'</option>'
            );
          });
          $("#category_id2").val(data.product.category_id);
          $.each(data.manufacturers,function(key, manufacturer){
            $("#manufacturer_id2").append (
              '<option value='+manufacturer.id+'>'+manufacturer.name+'</option>'
            )
          });
          $("#manufacturer_id2").val(data.product.manufacturer_id);
          $("#name2").val(data.product.name);
          $("#description2").val(data.product.description);
          $("#unit_price2").val(data.product.unit_price);  
          $("#quality_in_store2").val(data.product.quality_in_store);
          $("#productimage").val(data.product.illustrative_photo); 
          $("#photoimages").val(data.photos);
          $('#update-data').data('myval',data.product.id); //setter
          $("#photo2").empty();
          if (typeof data.product.illustrative_photo!== 'undefined') 
          {
             var output2 = document.getElementById('output2');
             output2.src ="upload/"+data.product.illustrative_photo;
             output2.width="350";
             output2.height="300";
          }
          if (typeof data.photos!== 'undefined')
          { 
            for (var i = 0; i < data.photos.length; i++){
               src="upload/"+data.photos[i];
               $("#photo2").append('<li >'+'<img ' +'src='+src+' height=100' +' width=120'+'</li>');
            }
          }
        }
        //$(e.currentTarget).find('input[name="bookId"]').val(bookId);
        });
        document.getElementById("form-update").reset();
      
    });
     function show(data){
      if(data.total_records==0){
        $('#show-entries').text("No matching records found");
      }
      else if(data.limit*data.current_page>data.total_records){
        $('#show-entries').text('Showing '+(data.limit*(data.current_page-1)+1)+' to '+data.total_records+' of '+data.total_records+' entries');
      }
      else {
        $('#show-entries').text('Showing '+(data.limit*(data.current_page-1)+1)+' to '+data.limit*data.current_page+' of '+data.total_records+' entries');
      } 
     }
     
  </script>
  <!-- footer-top -->
  <div class="w3agile-ftr-top">
    <div class="container">
      <div class="ftr-toprow">
        <div class="col-md-4 ftr-top-grids">
          <div class="ftr-top-left">
            <i class="fa fa-truck" aria-hidden="true"></i>
          </div>
          <div class="ftr-top-right">
            <h4>FREE SHIPPING</h4>
            <p>Shipping after 30 minutes with Da Nang's customer, 2-5 days with customer in others. </p>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="col-md-4 ftr-top-grids">
          <div class="ftr-top-left">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
          <div class="ftr-top-right">
            <h4>CUSTOMER CARE</h4>
            <p>24/24 online advisory staff.</p>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="col-md-4 ftr-top-grids">
          <div class="ftr-top-left">
            <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
          </div>
          <div class="ftr-top-right">
            <h4>GOOD QUALITY</h4>
            <p>Brand new products. </p>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  @yield('footer_top')
  </div>
  <!-- //footer-top -->
  
  @stop
