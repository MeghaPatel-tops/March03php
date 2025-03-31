<div class="col-sm-2">
<div class="well">
      <button type="button" onclick="getProduct(0)">ALL</button>
      <p></p>
      </div>
     <?php
     
       foreach($catdata as $key){
        ?>
     <div class="well">
      <button type="button" onclick="getProduct(<?php echo $key->cid?>)"><img src="<?php echo $GLOBALS['baseurl']."/Uploads/".$key->cimage?>" alt="" height="80px" width="80px" ></button>
      <p><?php echo $key->cname?></p>
      </div>

        <?php
       }
     
     ?>
  </div>
  <script>
    async function getProduct(id){
        const data = await fetch(`http://localhost/march03php/MVC/getProduct/${id}`);
        const result = await data.text();
        //console.log(result)
        createTable(result)
    }

    async function getCartCount(){
        const data = await fetch(`http://localhost/march03php/MVC/getCartCount/`);
        const result = await data.text();
        //console.log(result)
        document.getElementById('cartcount').innerHTML = "("+result+")";
    }

    function createTable(result){
         result = JSON.parse(result)
         let str="";
         for(index of result){
          //console.log(index)
           str+=`
            <div class="col-sm-3 product">
          <img src="<?php echo $GLOBALS['baseurl']."Uploads/products"?>${index.pimage}" class="img-responsive" style="width:100%;height:150px" alt="Image">
          <h3 style="text-align:left"><b>${index.pname}</b></h3>
          <h5 style="text-align:left"><span>&#8377</span>${index.price}</h5>
          <br>
          <a href="<?php echo $GLOBALS['baseurl']?>addtocart/${index.pid}" class= "btn btn-primary btn-sm" >Add To Cart</a>
        </div>
           `;
         }
        // console.log(str);
         document.getElementById('pdata').innerHTML = str;
    }
    </script>

  