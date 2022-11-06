<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Brand</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        foreach($products as $data){
            extract($data);
            ?>
                <tr>
                    <td><?=$id?></td>
                    <td><?=$name?></td>
                    <td><?=$price?></td>
                    <td><?=$brand?></td>
                </tr>
            <?php
        }
    
    ?>
  </tbody>
</table>