<div class="col-sm-2">
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
        alert(id);
        const data = await fetch(`http://localhost/march03php/MVC/getProduct/${id}`);
        const result = await data.text();
        
    }
    </script>

  