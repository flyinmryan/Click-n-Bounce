    <div class="row">
      <h3 class="white-text col s6 offset-s4">Edit order #<?= $order['id'] ?></h3>
      <button class="btn white black-text hideEdit right">Hide</button>
    </div>
    <div class="row">
      <form method="post" action="" class="col s12" id="editOrder">
        <input type="hidden" name="postNum" value=<?= $order['id'] ?>>
        <div class="row">
          <div class="input-field col s6">
            <input id="billadd1" type="text" name="billadd" class="white-text" value=<?= '"' . $order['billadd'] . '"'?>>
            <label for ="billadd1" class="white-text active">Billing Address</label>
          </div>
          <div class="input-field col s6">
            <input id="shipadd1" type="text" name="shipadd" class="white-text" value=<?= '"' . $order['shipadd'] . '"' ?>>
            <label for ="shipadd1" class="white-text active">Shipping Address</label>
          </div>
          <div class="input-field col s3">
            <input id="billadd2" type="text" name="billadd2" class="white-text" value=<?= '"' . $order['billadd2'] . '"' ?>>
            <label for="billadd2" class="white-text active">Billing Address 2</label>
          </div>
          <div class="input-field col s3">
            <input id="billcity" type="text" name="billcity" class="white-text" value=<?= '"' . $order['billcity'] . '"' ?>>
            <label for="billcity" class="white-text active">Billing City</label>
          </div>
          <div class="input-field col s3">
            <input id="shipadd2" type="text" name="shipadd2" class="white-text" value=<?= '"' . $order['shipadd2'] . '"' ?>>
            <label for="shipadd2" class="white-text active">Shipping Address 2</label>
          </div>
          <div class="input-field col s3">
            <input id="shipcity" type="text" name="shipcity" class="white-text" value=<?= '"' . $order['shipcity'] . '"' ?>>
            <label for="shipcity" class="white-text active">Shipping City</label>
          </div>
          <div class="input-field col s3">
            <input id="billstate" type="text" name="billstate" class="white-text" value=<?= '"' . $order['billstate'] . '"' ?>>
            <label for="billstate" class="white-text active">Billing State</label>
          </div>
          <div class="input-field col s3">
            <input id="billzip" type="text" name="billzip" class="white-text" value=<?= '"' . $order['billzip'] . '"' ?>>
            <label for="billzip" class="white-text active">Billing Zip</label>
          </div>
          <div class="input-field col s3">
            <input id="shipstate" type="text" name="shipstate" class="white-text" value=<?= '"' . $order['shipstate'] . '"' ?>>
            <label for="shipstate" class="white-text active">Shipping State</label>
          </div>
          <div class="input-field col s3">
            <input id="shipzip" type="text" name="shipzip" class="white-text" value=<?= '"' . $order['shipzip'] . '"' ?>>
            <label for="shipzip" class="white-text active">Shipping Zip</label>
          </div>
          <div class="input-field col s3">
            <input id="depdate" type="text" name="depdate" class="white-text" value=<?= '"' . date_format(date_create($order['depdate']), 'F j, Y') . '"' ?>>
            <label for="depdate" class="white-text active">Departure Date</label>
          </div>
          <div class="input-field col s3">
            <input id="deptime" type="text" name="deptime" class="white-text" value=<?= '"' . date_format(date_create($order['depdate']), 'H:i') . '"' ?>>
            <label for="deptime" class="white-text active">Departure Time</label>
          </div>
          <div class="input-field col s3">
            <input id="retdate" type="text" name="retdate" class="white-text" value=<?= '"' . date_format(date_create($order['retdate']), 'F j, Y') . '"' ?>>
            <label for="retdate" class="white-text active">Return Date</label>
          </div>
          <div class="input-field col s3">
            <input id="rettime" type="text" name="rettime" class="white-text" value=<?= '"' . date_format(date_create($order['retdate']), 'H:i') . '"' ?>>
            <label for="rettime" class="white-text active">Return Time</label>
          </div>
          <div class="input-field col s2">
            <input id="qty" type="text" name="qty" class="white-text" value=<?= '"' . $order['qty'] . '"' ?>>
            <label for="qty" class="white-text active">Quantity</label>
          </div>
          <div class="input-field col s2 offset-s1">
            <select class="browser-default" name="status" selected=<?= $order['status'] ?>>
              <option value="pending">Pending</option>
              <option value="processed">Processed</option>
              <option value="completed">Completed</option>
            </select>
          </div>
          <div class="input-field col s3 offset-s4">
            <button class="btn white black-text subEdit" type="submit">Save Changes</button>
          </div>
        </div>
      </form>
    </div>