<form >
<label for="">Kelas</label>  
<select class="form-select" aria-label="Default select example" name="kelas" id="kelas">
    <option value="">-Pilih Kelas Bus-</option>
    <?php
    $ktg = ['Ekonomi', 'Bisnis', 'Eksekutif'];
    foreach ($ktg as $key) {
      echo "<option value='" . $key . "'>" . $key . "</option>";
    }
    ?>
  </select><br>
  <label for="quantity">Quantity:</label>
  <input type="number" id="quantity" name="quantity" min="1" max="100" ><br>

  <label for="clas">clas:</label>
  <input type="text" id="clas" name="clas" min="1" max="100" ><br>

  <label for="price">Price:</label>
  <input type="number" id="price" name="price" min="0" max="1000" step="0.01" ><br>

  <label for="total">Total:</label>
  <input type="number" id="total" name="total" readonly><br>

  <button type="button" onclick="calculateTotal()">Calculate Total</button>
  <button type="submit" onclick="submitForm()">Submit Form</button>
</form>

<script>
  function calculateTotal() {

    var kelas = document.getElementById("kelas").value;
    var quantity = document.getElementById("quantity").value;
    var price = document.getElementById("price").value;
    var total = quantity * price;
    document.getElementById("clas").value = kelas;
    document.getElementById("total").value = total.toFixed(2);
  }

  // function submitForm() {
  //   var form = document.getElementById("myForm");
  //   var xhr = new XMLHttpRequest();
  //   xhr.open("POST", "submit-form.php", true);
  //   xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  //   xhr.onreadystatechange = function() {
  //     if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
  //       console.log(this.responseText);
  //     }
  //   };
  //   xhr.send("quantity=" + encodeURIComponent(document.getElementById("quantity").value) +
  //     "&price=" + encodeURIComponent(document.getElementById("price").value) +
  //     "&total=" + encodeURIComponent(document.getElementById("total").value));
  // }
</script>

<?php echo $clas; ?>