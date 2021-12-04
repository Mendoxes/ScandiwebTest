<?php
require_once "Product.php";
require_once "SubProduct.php";

if (isset($_POST['Submit'])){
    // echo "goodi";
    // print_r($_POST);
    
    $obj = new $_POST['type']($_POST['name'],$_POST['price'],$_POST['type'],$_POST['sku']);

    $obj->setDescription($_POST);
 
  
     $obj->getFullDescription();
  
}
?>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>











<div class="col-md-12">
            <!--<form action="add.php" method="post" name="form1" onsubmit = "return(validate());">-->
            <form action="" method="post" name="form1" id="product_form">
               
                <div class="form-group">
                    <label for="sku">SKU</label>
                    <input required type="text" name="sku" class="form-control w-50" id="sku" aria-describedby="skuhelp">
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input required type="text" name="name" class="form-control w-50" id="name" aria-describedby="namehelp">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input required type="text" name="price" pattern="[0-9]+" title="please enter only numbers" class="form-control w-50" id="price" aria-describedby="pricehelp">
                </div>
               <div class="form-group">
                    <label for="productType">Type switcher</label>
                    <select name="type" required class="form-control w-50" id="productType">
                        <option selected disabled value=''></option>
                        <option id="DVD" value="DVD">DVD</option>
                        <option  id="book" value="book">Book</option>
                        <option id="furniture" value="furniture">Furniture</option>
                    </select>
                </div>
                <div class="typeSwitch"></div>
                <div class="form-group">
                    <input class="btn btn-success" type="submit" name="Submit" value="Submit" 
                    >
                   <a href="index.php"> <input class="btn btn-danger" type="button" name="Submit" value="Cancel" 
                    ></a>
                </div>
            </form>
        </div>








<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

<script>



$("#productType").on("change", function() {
    const innerArray = { DVD:"<div class='form-group selectable' name=DVD id=DVD > <label for=size>Size</label><input required  type=text name=size  pattern=[0-9]+ title='Numbers' class=form-control w-50 id=size aria-describedby=sizehelp> <small>Please provide size in MB format.</small></div>",
     book: "<div class='form-group selectable' name=book id=book><label for=weight>Weight</label><input required  type=text  pattern=[0-9]+ title='please enter only numbers' name=weight class=form-control w-50 id=weight aria-describedby=weighthelp><small>Please provide weight in Kg format.</small></div>"
, furniture: "<div class='form-group selectable' name=furniture id=furniture><label for=height>Height</label> <input required  pattern=[0-9]+ title='please enter only numbers' type=text name=height class='form-control w-50' id=height aria-describedby=heighthelp> <label for=width>Width</label><input required  pattern=[0-9]+ title='please enter only numbers' type=text name=width class='form-control w-50' id=width aria-describedby=widthhelp> <label for=length>Length</label><input required  pattern=[0-9]+ title='please enter only numbers' type=text name=length class='form-control w-50' id=length aria-describedby=lengthhelp> <small>Please provide dimensions in HxWxL format.</small></div>"

    }
        // $(".selectable").hide()     
     
        $(".typeSwitch")[0].innerHTML = innerArray[$(this).val()];
        // const a = $("#" + $(this).val()).show();
        // console.log(a);
      
    })
</script>
</html>