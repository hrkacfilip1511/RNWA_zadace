<style>
p {
  margin-left: 10px;
}

.button {
  border: none;
  color: white;
  margin-top: 10px;
  margin-left: 10px;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
}

a {
  color: red;
}

</style>
<p>Potvrdi brisanje</p>
<button class="button"><a href="?controller=product&action=delete&id=<?php echo $_GET["id"]?>"> Obriši!</a></button>