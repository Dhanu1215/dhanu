
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<form action="<?= base_url();?>index.php/user/addProduct" method="post">
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">

       <label>Enter the product Name</label>
       <input type="text" class="form-control" name="product_name">
       
       <br>
      <label>Product Category</label>
       <select name="product_category">
       <?php if(isset($product_category) && !empty($product_category))
       {
        print_r($product_category);
        foreach ($product_category as $key => $value)
         {
         ?><option value="<?= $value->product_category;?>"><?= $value->product_category;?></option><?php
         }
        }
        ?>
       </select>
       <br><br>

       <label>Product Size</label>
       <select name="product_size">
       <?php if(isset($product_size) && !empty($product_size))
       {
        print_r($product_size);
        foreach ($product_size as $key => $value)
         {
           ?><option value="<?= $value->product_size;?>"><?= $value->product_size;?></option><?php
         }
        }
        ?>
       </select><br>
       <br>
       <label>Enter the product Price</label>
       <input type="text" class="form-control" name="product_price">
       <label>Enter the product stock</label>
       <input type="text" class="form-control" name="product_stock">
      </div>
      <div class="modal-footer">
         <button type="Submit" name="Submit" >Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</form>



<form action="<?= base_url();?>index.php/user/updateProduct" method="post">
<!-- Modal -->
<div id="product_edit_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
<input type="hidden" name="product_id" id="product_id">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">

       <label>Enter the product Name</label>
       <input type="text" class="form-control" id="product_name" name="product_name">
       
       <br>
      <label>Product Category</label>
       <select name="product_category" id="product_category">
       <?php if(isset($product_category) && !empty($product_category))
       {
        print_r($product_category);
        foreach ($product_category as $key => $value)
         {
         ?><option value="<?= $value->product_category;?>"><?= $value->product_category;?></option><?php
         }
        }
        ?>
       </select>
       <br><br>

       <label>Product Size</label>
       <select name="product_size" id="product_size">
       <?php if(isset($product_size) && !empty($product_size))
       {
        print_r($product_size);
        foreach ($product_size as $key => $value)
         {
           ?><option value="<?= $value->product_size;?>"><?= $value->product_size;?></option><?php
         }
        }
        ?>
       </select><br>
       <br>
       <label>Enter the product Price</label>
       <input type="text" class="form-control" id="product_price" name="product_price">
       <label>Enter the product stock</label>
       <input type="text" class="form-control" id="product_stock" name="product_stock">
      </div>
      <div class="modal-footer">
         <button type="Submit" name="Submit" >Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</form>


<form action="<?= base_url();?>index.php/user/addProductCategory" method="post">
<!-- Modal -->
<div id="my_product_category_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">

       <label>Enter the Product Category Name</label>
       <input type="text" class="form-control" name="product_category">
       
      
      </div>
      <div class="modal-footer">
         <button type="Submit" name="Submit" >Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</form>

<form action="<?= base_url();?>index.php/user/updateProductCategory" method="post">
<!-- Modal -->
<div id="my_edit_product_category_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
<input type="hidden" name="product_id" id="product_id1">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">

       <label>Enter the Product Category Name</label>
       <input type="text" class="form-control" id="product_category1" name="product_category">
       
      
      </div>
      <div class="modal-footer">
         <button type="Submit" name="Submit" >Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</form>


<form action="<?= base_url();?>index.php/user/addProductSize" method="post">
<!-- Modal -->
<div id="my_product_size_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">

       <label>Enter the Product size</label>
       <input type="text" class="form-control" name="product_size">
       
      
      </div>
      <div class="modal-footer">
         <button type="Submit" name="Submit" >Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</form>

<form action="<?= base_url();?>index.php/user/updateProductSize" method="post">
<!-- Modal -->
<div id="my_edit_product_size_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
<input type="hidden" name="product_id" id="product_id2">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">

       <label>Enter the Product Size</label>
       <input type="text" class="form-control" id="product_size1" name="product_size">
       
      
      </div>
      <div class="modal-footer">
         <button type="Submit" name="Submit" >Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</form>

<?php if($this->session->flashdata('message'))
{
  ?>
  <div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong><?= $this->session->flashdata('message');?></strong> 
</div>
  <?php

}?>
 
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Product</a></li>
    <li><a data-toggle="tab" href="#menu1">Product_Category</a></li>
    <li><a data-toggle="tab" href="#menu2">Product Size</a></li>
    
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add</button>
      <div align="center">
        
        <table class="table">
          <tr>
            <th>Sr.No.</th>
            <th>Product Name</th>
            <th>Product Catagory</th>
            <th>Product Size</th>
            <th>Product Price</th>
            <th>Product Stock</th>
          </tr>
          <?php
          $i=0;
               foreach ($userlist as $re)
               {
                $i++;
                ?>
                <tr>
                  <td><?= $i; ?></td>
                  <td><?= $re->product_name; ?></td>
                  <td><?= $re->product_category; ?></td>
                  <td><?= $re->product_size; ?></td>
                  <td><?= $re->product_price; ?></td>
                  <td><?= $re->product_stock; ?></td>
                  <td><button onclick="my_product_edit(<?= $re->product_id;?>,'<?= $re->product_name;?>','<?= $re->product_category;?>',<?= $re->product_size;?>,<?= $re->product_price;?>,'<?= $re->product_stock;?>')"> Edit</button>
                   <button ><a href="<?= base_url();?>index.php/user/deleteProduct?id=<?= $re->product_id;?>" onclick="return my_product_delete(this)"> Delete</a></button></td>
                </tr>
                <?php
              
               }
          ?>
        </table>
      </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#my_product_category_modal">Add</button>
      <div align="center">
        
        <table class="table">
          <tr>
          <th>Sr.No</th>
            <th>Product Catagory</th>
          </tr>
          <?php
          $i=0;
               foreach ($product_category as $re)
               {
               $i++;
                ?>
                <tr>
                  <td><?= $i; ?></td>
                  <td><?= $re->product_category; ?></td>
                  <td><button onclick="my_product_category_edit(<?= $re->product_id;?>,'<?= $re->product_category;?>')"> Edit</button>
                   <button ><a href="<?= base_url();?>index.php/user/deleteProductCategory?id=<?= $re->product_id;?>" onclick="return my_product_delete(this)"> Delete</a></button></td>
                </tr>
                <?php
               }
          ?>
        </table>
      </div></div>
    <div id="menu2" class="tab-pane fade">
       <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#my_product_size_modal">Add</button>
      <div align="center">
        
        <table class="table">
          <tr>
            <th>Sr. No</th>
            <th>Product Size</th>
          </tr>
          <?php
          $i=0;
               foreach ($product_size as $re)
               {
                $i++;
                  ?>
                  <tr>
                    <td><?= $i; ?></td>
                    <td><?= $re->product_size; ?></td>
                    <td><button onclick="my_product_size_edit(<?= $re->product_id;?>,'<?= $re->product_size;?>')"> Edit</button>
                     <button ><a href="<?= base_url();?>index.php/user/deleteProductSize?id=<?= $re->product_id;?>" onclick="return my_product_delete(this)"> Delete</a></button></td>
                  </tr>
                  <?php
               }
          ?>
        </table>
      </div> </div>

  </div>
</div>

<script type="text/javascript">
  function my_product_edit(product_id,product_name,product_category,product_size,product_price,product_stock)
  {
    $('#product_edit_modal').modal('show');
    $('#product_id').val(product_id);
    $('#product_name').val(product_name);
    $('#product_category option[value="'+product_category+'"]').attr("selected", "selected");
    $('#product_size option[value="'+product_size+'"]').attr("selected", "selected");
    $('#product_price').val(product_price);
    $('#product_stock').val(product_stock);

  }
   function my_product_category_edit(product_id,product_category)
  {
    $('#my_edit_product_category_modal').modal('show');
    $('#product_id1').val(product_id);
    $('#product_category1').val(product_category);
    

  }
   function my_product_size_edit(product_id,product_size)
  {
    $('#my_edit_product_size_modal').modal('show');
    $('#product_id2').val(product_id);
    $('#product_size1').val(product_size);
    

  }

  function my_product_delete(data)
  {
     if(confirm('Are you Sure Want To delete'))
     {
       window.location.href = data.href;
     }
     return false;

  }
</script>

</body>
</html>





























