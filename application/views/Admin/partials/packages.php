<?php
      foreach ($packages as $package)
      {
?>
        <tr>
          <td> <?= $package['id'] ?> </td>
          <td> <?= $package['name'] ?> </td>
          <td> <?= $package['duration'] . ' days' ?> </td>
          <td> <?= "$" . $package['price'] . ".00" ?> </td>
          <td><a class=<?= '"' . $package['id'] . '"' ?> name="edit" href="">Edit</a> | <a class=<?= '"' . $package['id'] . '"' ?> name="delete" href="">Delete</a></td>
        </tr>
<?php
      }

?>