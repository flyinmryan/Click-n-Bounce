<?php
    foreach ($orders as $order)
      {
?>
      <tr>       
        <td> <?= $order['id'] ?> </td>
        <td><?= date_format(date_create($order['depdate']), 'F j, Y') ?></td>
        <td><?= date_format(date_create($order['retdate']), 'F j, Y') ?></td>
        <td> <?= $order['billadd'].$order['billadd2']. ", ".$order['billcity'].", ".$order['billstate']." ".$order['billzip']  ?> </td>
        <td> <?= '$' . $order['price'] * $order['qty'] . '.00'?> </td>
        <td> <?= $order['status'] ?> </td>
        <td><a class=<?= '"' . $order['id'] . '"' ?> name="edit" href="">Edit</a> | <a class=<?= '"' . $order['id'] . '"' ?> name="delete" href="">Delete</a></td>
      </tr>
<?php
      }

?>