<?php session_start(); ?>
<!DOCTYPE html>
<!-- IT21702372 W.C.I.PERERA-->
<html>
    <head>

            <title>Royal Wrist</title>
            <link rel="shortcut icon" href="asserts/logo.png" /> 
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
           <!-- CDN LIBS --> 
            <link rel="stylesheet"  href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
            <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
            <link rel="stylesheet" type="text/css" href="style.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>




            
    </head>



    <body>
    <?php

        
            include("headerfile3.html");
        
    ?>
    
<!----------- product table starts-------------->


<section class="table" >
    <h3 id="table-head">Product Management</h3>
    <h2 id="sub-head">New Arrivales</h2>
    <form action="admin.php" method="post" id="addproduct">

            
        <table width="100%" cellpadding="5" cellspacing="5" class="table1" id="data_table" >

            <tr>
                <th width="10%">Product ID</th>
                <th width="25%">Product Name</th>
                <th width="25%">Description</th>
                <th width="20%">Price</th>
                <th width="20%">Image Path</th>
                <th width="20%">Type</th>
                
                                
            </tr>


            <?php 

                $con = mysqli_connect("localhost","root","","royal");
                // $sql = "SELECT * FROM `product`";
                // $result = mysqli_query($con,$sql);

                $fetch="SELECT * FROM product";
     
                $select_sql = mysqli_query($con,$fetch);
                
                 while ($result1 = mysqli_fetch_array($select_sql))
                 {
                    //  $productID = $result['productID'];

                    ?>
                     
                     <!-- <tr><td>  </td><td> </td><td>  </td><td> </td><td> </td><td><button  id="drop" onclick="deleterow()" >X</button></td><tr>; -->
                          

                          <tr id="delete<?php echo $result1['productID'] ?>" class="editable"> 
                                <td class="ntd">
                                    <?php echo $result1['productID'] ?>
                                </td>       

                                <td class="ntd">
                                    <?php echo $result1['productName'] ?>
                                </td>
                                <td class="ntd">
                                    <?php echo $result1['description']?>
                                </td>
                                <td class="ntd">
                                    <?php echo $result1['price']?>
                                </td>
                                <td class="ntd">
                                    <?php echo $result1['imgpath']?>
                                </td>
                                <td class="ntd">
                                    <?php echo $result1['prodtype']?>
                                </td>
                                <td class="btd">

                                    <a href="edit.php?u_id=<?php echo $result1['productID']; ?>"> 
                                    <input type="button" id="btnedit" value="EDIT" class="sidebtn">
                                    </a>
                                    <!-- <button name="edit" id="edit" class="sidebtn"><i class="fas fa-pen-to-square"></i></button> </a> -->
                                </td>

                                <td class="btd">
                                    
                                    <button name="delete" id="delete" onclick="deleteAjax(<?php echo $result1['productID']; ?>)" class="sidebtn">
                                    <i class="fas fa-trash"></i>
                                        
                                    </button>
                                    
                                </td>
                            </tr>


                    <?php
                 }
                 ?>
                 

                        <?php

               
                mysqli_close($con);

            ?>
                        
                  

        </table>

    <!-----------------------------------------ADD ROWS TO TABLE------------------------>
        <script type="text/javascript">
        $(document).ready(function(){

            
            var tt ='<tr id="row"><td><input type="text" name="productID" readonly></td><td><input type="text" name="productName"></td><td><input type="text" name="description" ></td><td><input type="text" name="price"  ></td><td><input type="text" name="imgpath"  ></td><td><input type="text" name="prodtype"></td><td><input type="button" name="remove" value="X" id="remove"></td></tr>';
            
            $('#btnaddrow').click(function(){

                $('#data_table').append(tt);

                var button = document.createElement("BUTTON");
                button.innerHTML = "Insert";

                var body = document.getElementById("insert");
                body.appendChild(button);

                button.addEventListener("click", insert);
                
            });

            $(document).on('click', '#remove', function(){

                $(this).closest('tr').remove();
                window.location.reload();

            });

            

        });
        </script>



    </form>


    


      



    <!-- <div class="search">
        <input type="text" name="txtsearch" id="txtsearch">       
        <input type="button" name="btnsearch" value="Search" id="btnsearch">
        
    </div> -->

    <div class="tblbuttons">
        <input type="button" name="btnaddrow" value="add row" id="btnaddrow">
        <!-- <input type="submit" name="btninsert" value="Insert" id="btninsert"> -->
        <span id="insert"></span>
        <!-- <input type="submit" name="btnupdate" value="Update" id="btnupdate"> -->
        <!-- <input type="hidden" name="hideme"> -->
        
        <!-- <input type="button" name="btndrop" value="Drop" id="btndrop"> -->
        <!-- <input type="reset" name="btnreset" value="Clear" id="btnreset"> -->
    </div>

</section>
<!----------- product table ends -------------->



<!------------------------------------------------------------------------------------------------------------------>



















        <!--footer section starts -->

        <section class="footer2"> 
            <div class="credit2">© 2022 <span>Perera, W.C.I</span> | All Rights Reserved</div>
        </section> 

        

        <!--footer section ends -->


        <!--JS SWIP-->
            <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
        <!--Local JS-->
            <script src="myscript.js"></script>


    </body>
        

    

</html>


        




  <!----INSERT QUERY SCRIPT---->

    <script>
        function insert(){

            $.ajax({

                    url:"insert.php",
                    type:"post",
                    data:$("#addproduct").serialize(),
                    success:function(data)
                    {
                        // alert(data);
                        window.location.reload();
                        
                    }
                    
            

                });

                
            
            }
    </script>

    

<!------------DELETE QUERY SCRIPT----------------->

 <script>

    function deleteAjax(id){

    if(confirm('are you sure?'))
    {
        $.ajax({

            type:'post',
            url:"delete.php",
            data:{delete_id:id},
            // data:$('#user').serialize(),
            success:function(data){

                 $('#delete'+id).hide();
                //  window.location.reload();
                }

            });
        }
    }

</script>






<!--------------EDIT ROW SCRIPT------------------>

<script>
    function setEditable(row_id)
    {
                var tr = document.getElementById(row_id);
                var tr_elements = $("#" + row_id).find(".editable");

                for( var i = 0; i<tr_elements.length; i++)
                { // set the row td's Editible
                    tr_elements[i].contentEditable = "true";
                    // tr_elements[i].style.color="red";
                }
                
                

                // var updateLinkHTML = "<a onclick='editStudent(" + row_id + ")' class='updateLink' ><img class='linkImage'       src='update.png' />Update</a>";
                // $("#" + row_id).find(".editLink").fadeOut('slow' ,function() {$(this).replaceWith(updateLinkHTML).fadeIn()});
                alert('Row is now editibale edit it and click Update to Save');
    }
</script>





















