<style>
.container {
  height: 300px;
  margin-left: 10px;
}

.form-group {
  margin-top: 10px;
}

.button {
  background-color: #566ee8;
  border: none;
  color: white;
  margin-top: 10px;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
}

</style>

<div class="container">
<form action="?controller=product&action=insert" method="POST">
 <div class="form-group">
    <label for="product_id">Produkt ID:</label>
    <input type="text" class="form-control" name="product_id">
    </div>
   <div class="form-group">
    <label for="product_name">Naziv:</label>
    <input type="text" class="form-control" name="product_name">
  </div>
  <div class="form-group">
    <label for="brand_id">Brand:</label>
    <input type="text" class="form-control" name="brand_id">
  </div>
  <div class="form-group">
    <label for="category_id">Kategorija:</label>
    <input type="text" class="form-control" name="category_id">
  </div>
  <div class="form-group">
    <label for="quantity">Količina:</label>
    <input type="text" class="form-control" name="quantity">
    </div>
   <div class="form-group">
    <label for="rate">Ocjena:</label>
    <input type="text" class="form-control" name="rate">
  </div>
  <div class="form-group">
    <label for="active">Aktivno:</label>
    <input type="text" class="form-control" name="active">
  </div>
  <div class="form-group">
    <label for="status">Status:</label>
    <input type="text" class="form-control" name="status">
  </div>
    <button type="submit" class="button">Potvrda</button>
</form> 
</div>