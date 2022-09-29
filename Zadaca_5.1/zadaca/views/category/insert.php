<style>
.container {
  height: 200px;
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
<form action="?controller=category&action=insert" method="POST">
   <div class="form-group">
    <label for="category_name">Naziv:</label>
    <input type="text" class="form-control" name="category_name">
  </div>
  <div class="form-group">
    <label for="category_active">Aktivno:</label>
    <input type="text" class="form-control" name="category_active">
  </div>
  <div class="form-group">
    <label for="category_status">Status:</label>
    <input type="text" class="form-control" name="category_status">
  </div>
    <button type="submit" class="button">Potvrdi</button>
</form> 
</div>