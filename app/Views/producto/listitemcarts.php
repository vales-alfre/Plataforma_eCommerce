  <?php

  foreach ($data as $row) {
      echo '<a class="dropdown-item d-flex align-items-center" href="#">
            <div class="mr-3">
                <div class="icon-circle bg-primary">
                    <i class="fas fa-file-alt text-white"></i>
                </div>
            </div>
            <div>
                <div class="small text-gray-500">'.$row['idcategoria'].'</div>
                <span class="font-weight-bold">'.$row['descripcion'].'</span>
            </div>
        </a>' ;
}

?>

