<?php
include("header.php");
?>

<div class="container">

    <div class="row">

        <div class="col-md-12">

            <h3>Sisesta/vaata mootoreid</h3>

            <form action="engine_db_insert.php" method="POST"> <!-- GET/POST --> 

<select name="name" id="name">
<option selected="selected"></option>

<?php

$engineList = $db->fetchAll("select `name` from `cl_engine`");

  foreach($engineList as $name) { ?>

    <option value="<?= $name['name'] ?>"><?= $name['name'] ?></option>

<?php
  } ?>
</select> 

<!-- 4 form submiti järel ... 
      inserdi failis võtad selle ID  siit andmebaasi_tulba_nimi  
     ja teed uue fuksiooni mis inserdib Model_Engine  tabelisse:  mudeli id ja mootori id  (NB!  mootori id saad sellel hetkel kui kõigepalt on mootor edukalt salvestatud, ehk pärast mootori salvetamist inser failis salvestad seose)
-->


  <select name="engine_cm3" id="engine_cm3"  required>
  <option value="">CM3</option><!-- defauldis tyhi -->
  <?php     
   

  
   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"   );
   foreach ($engineList as $name) {
     echo $name;       
   }
   
   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"  );
   foreach ($engineList as $name => $value) {
     echo $value;       
   }?>
   äõüv
    <option value=""></option>
    <option id="<?php echo $name ;?>"><?php echo $value ;?></option>

</select>

<select name="engine_power" id="engine_power"  required>
  <option value="">Power</option><!-- defauldis tyhi -->
  <?php     
   

   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"   );
   foreach ($engineList as $name) {
     echo $name;       
   }
   
   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"  );
   foreach ($engineList as $name => $value) {
     echo $value;       
   }?>
   äõüv
    <option value=""></option>
    <option id="<?php echo $name ;?>"><?php echo $value ;?></option>

</select>

<select name="engine_nm" id="engine_nm"  required>
  <option value="">Nimi</option><!-- defauldis tyhi -->
  <?php     
   

   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"   );
   foreach ($engineList as $name) {
     echo $name;       
   }
   
   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"  );
   foreach ($engineList as $name => $value) {
     echo $value;       
   }?>
   äõüv
    <option value=""></option>
    <option id="<?php echo $name ;?>"><?php echo $value ;?></option>

</select>

<select name="fuel_type" id="fuel_type"  required>
  <option value="">Nimi</option><!-- defauldis tyhi -->
  <?php     
   

   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"   );
   foreach ($engineList as $name) {
     echo $name;       
   }
   
   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"  );
   foreach ($engineList as $name => $value) {
     echo $value;       
   }?>
   äõüv
    <option value=""></option>
    <option id="<?php echo $name ;?>"><?php echo $value ;?></option>

</select>

<select name="fuel_tank" id="fuel_tank"  required>
  <option value="">Nimi</option><!-- defauldis tyhi -->
  <?php     
   

   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"   );
   foreach ($engineList as $name) {
     echo $name;       
   }
   
   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"  );
   foreach ($engineList as $name => $value) {
     echo $value;       
   }?>
   äõüv
    <option value=""></option>
    <option id="<?php echo $name ;?>"><?php echo $value ;?></option>

</select>

<select name="fuel_consumption" id="fuel_consumption"  required>
  <option value="">Nimi</option><!-- defauldis tyhi -->
  <?php     
   

   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"   );
   foreach ($engineList as $name) {
     echo $name;       
   }
   
   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"  );
   foreach ($engineList as $name => $value) {
     echo $value;       
   }?>
   äõüv
    <option value=""></option>
    <option id="<?php echo $name ;?>"><?php echo $value ;?></option>

</select>

<select name="co2_emission" id="co2_emission"  required>
  <option value="">Nimi</option><!-- defauldis tyhi -->
  <?php     
   

   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"   );
   foreach ($engineList as $name) {
     echo $name;       
   }
   
   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"  );
   foreach ($engineList as $name => $value) {
     echo $value;       
   }?>
   äõüv
    <option value=""></option>
    <option id="<?php echo $name ;?>"><?php echo $value ;?></option>

</select>

<select name="co2_normative" id="co2_normative"  required>
  <option value="">Nimi</option><!-- defauldis tyhi -->
  <?php     
   

   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"   );
   foreach ($engineList as $name) {
     echo $name;       
   }
   
   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"  );
   foreach ($engineList as $name => $value) {
     echo $value;       
   }?>
   äõüv
    <option value=""></option>
    <option id="<?php echo $name ;?>"><?php echo $value ;?></option>

</select>

<select name="speed" id="speed"  required>
  <option value="">Nimi</option><!-- defauldis tyhi -->
  <?php     
   

   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"   );
   foreach ($engineList as $name) {
     echo $name;       
   }
   
   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"  );
   foreach ($engineList as $name => $value) {
     echo $value;       
   }?>
   äõüv
    <option value=""></option>
    <option id="<?php echo $name ;?>"><?php echo $value ;?></option>

</select>

<select name="acceleration" id="acceleration"  required>
  <option value="">Nimi</option><!-- defauldis tyhi -->
  <?php     
   

   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"   );
   foreach ($engineList as $name) {
     echo $name;       
   }
   
   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"  );
   foreach ($engineList as $name => $value) {
     echo $value;       
   }?>
   äõüv
    <option value=""></option>
    <option id="<?php echo $name ;?>"><?php echo $value ;?></option>

</select>

<select name="gearbox" id="gearbox"  required>
  <option value="">Nimi</option><!-- defauldis tyhi -->
  <?php     
   

   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"   );
   foreach ($engineList as $name) {
     echo $name;       
   }
   
   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"  );
   foreach ($engineList as $name => $value) {
     echo $value;       
   }?>
   äõüv
    <option value=""></option>
    <option id="<?php echo $name ;?>"><?php echo $value ;?></option>

</select>

<select name="drive" id="drive"  required>
  <option value="">Nimi</option><!-- defauldis tyhi -->
  <?php     
   

   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"   );
   foreach ($engineList as $name) {
     echo $name;       
   }
   
   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"  );
   foreach ($engineList as $name => $value) {
     echo $value;       
   }?>
   äõüv
    <option value=""></option>
    <option id="<?php echo $name ;?>"><?php echo $value ;?></option>

</select>

<select name="measurements" id="measurements"  required>
  <option value="">Nimi</option><!-- defauldis tyhi -->
  <?php     
   

   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"   );
   foreach ($engineList as $name) {
     echo $name;       
   }
   
   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"  );
   foreach ($engineList as $name => $value) {
     echo $value;       
   }?>
   äõüv
    <option value=""></option>
    <option id="<?php echo $name ;?>"><?php echo $value ;?></option>

</select>

<select name="doors" id="doors"  required>
  <option value="">Nimi</option><!-- defauldis tyhi -->
  <?php     
   

   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"   );
   foreach ($engineList as $name) {
     echo $name;       
   }
   
   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"  );
   foreach ($engineList as $name => $value) {
     echo $value;       
   }?>
   äõüv
    <option value=""></option>
    <option id="<?php echo $name ;?>"><?php echo $value ;?></option>

</select>

<select name="axle_length" id="axle_length"  required>
  <option value="">Nimi</option><!-- defauldis tyhi -->
  <?php     
   

   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"   );
   foreach ($engineList as $name) {
     echo $name;       
   }
   
   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"  );
   foreach ($engineList as $name => $value) {
     echo $value;       
   }?>
   äõüv
    <option value=""></option>
    <option id="<?php echo $name ;?>"><?php echo $value ;?></option>

</select>

<select name="seats" id="seats"  required>
  <option value="">Nimi</option><!-- defauldis tyhi -->
  <?php     
   

   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"   );
   foreach ($engineList as $name) {
     echo $name;       
   }
   
   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"  );
   foreach ($engineList as $name => $value) {
     echo $value;       
   }?>
   äõüv
    <option value=""></option>
    <option id="<?php echo $name ;?>"><?php echo $value ;?></option>

</select>

<select name="exterior" id="exterior"  required>
  <option value="">Nimi</option><!-- defauldis tyhi -->
  <?php     
   

   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"   );
   foreach ($engineList as $name) {
     echo $name;       
   }
   
   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"  );
   foreach ($engineList as $name => $value) {
     echo $value;       
   }?>
   äõüv
    <option value=""></option>
    <option id="<?php echo $name ;?>"><?php echo $value ;?></option>

</select>

<select name="interior" id="interior"  required>
  <option value="">Nimi</option><!-- defauldis tyhi -->
  <?php     
   

   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"   );
   foreach ($engineList as $name) {
     echo $name;       
   }
   
   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"  );
   foreach ($engineList as $name => $value) {
     echo $value;       
   }?>
   äõüv
    <option value=""></option>
    <option id="<?php echo $name ;?>"><?php echo $value ;?></option>

</select>

<select name="dealer_price_eur_without_vat" id="dealer_price_eur_without_vat"  required>
  <option value="">Nimi</option><!-- defauldis tyhi -->
  <?php     
   

   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"   );
   foreach ($engineList as $name) {
     echo $name;       
   }
   
   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"  );
   foreach ($engineList as $name => $value) {
     echo $value;       
   }?>
   äõüv
    <option value=""></option>
    <option id="<?php echo $name ;?>"><?php echo $value ;?></option>

</select>

<select name="client_price_eur_with_vat" id="client_price_eur_with_vat"  required>
  <option value="">Nimi</option><!-- defauldis tyhi -->
  <?php     
   

   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"   );
   foreach ($engineList as $name) {
     echo $name;       
   }
   
   $engineList = array( "name" => "GR5",  "name" => "6PR",  "name" => "EA40"  );
   foreach ($engineList as $name => $value) {
     echo $value;       
   }?>
   äõüv
    <option value=""></option>
    <option id="<?php echo $name ;?>"><?php echo $value ;?></option>

</select>


                
                <div class="input-group input-group-sm mb-3"> 
                  <input type="submit" class="btn-success" type="submit" value="Submit">
                </div>
            </form> 
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h3>Mootorid</h3>
            <?php include("engine_show.php"); ?>
        </div>
    </div>


 </div> <!-- end container -->

</body>
</html>