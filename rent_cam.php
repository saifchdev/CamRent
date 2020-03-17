<?php
include 'header.php';
?>




<link rel="stylesheet" href="bootstrap/css/bootstrap.css">


<div class="row">
<div class="col-12">
<form action="order.php" method="POST">
<section class="">
<h5>From:</h5>  <input type="date" id="fromdate" name="fromdate" required><h5>To:</h5>  <input type="date" id="todate" name="todate" required>

<section class="products-list">
    <section class="product-container">

        <img src="https://images-na.ssl-images-amazon.com/images/I/81naihI0PmL._SX355_.jpg" alt="Product Image">
        <br>    Quantity:
    <input type="number" id="camera" name="camera" required><br><br>
        <footer class="product-footer">
            <div class="title-container">
                <h5 class="product-title">Canon 5D MarkIV</h2>
           
            </div>
            <h5 class="product-price">RS21000</h3>
        </footer>
    </section>
    <section class="product-container">
  

        <img src="https://media.teds.com.au/media/catalog/product/cache/1/image/750x750/9df78eab33525d08d6e5fb8d27136e95/c/a/canon-ef-100-400mm-is-usm-ii-front.jpg?cache_timestamp=1567487471" alt="Product Image">
       <br> Quantity:
    <input type="number" id="lens" name="lens" required> <br><br>
        <footer class="product-footer">
            <div class="title-container">
                <h5 class="product-title">Canon Lens</h5>
            </div>
            <h5 class="product-price">RS800</h5>
        </footer>   
    </section>
   
  
   
  
   <input type="Submit" value="submit order">  <br>
  
</section>

</section>
</div>
<div class="col-3">
<br>

</div>


</form>