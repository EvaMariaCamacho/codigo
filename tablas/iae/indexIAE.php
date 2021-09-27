<?php 

include_once '../../db.php';

include_once '../../includes/header.php';

?>
    
<div class="container">


    <div class="row">

    <?php 

        include_once '../../includes/nav.php';

    ?>
      
        <div class="col-md-12">

            <table class="table">
                <thead>
                    <tr>
                        <th>Epigrafe</th>
                        <th>Descripcion</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php

                        $query = "SELECT * FROM iae";
                        $result = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                            <td><?php echo $row['epigrafe'] ?></td>
                            <td><?php echo $row['descripcion'] ?></td>
                        
                        <td class="td-actions text-right">
                            <button type="button" rel="tooltip" class="btn btn-success btn-round">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" class="btn btn-danger btn-round">
                                <i class="material-icons">delete</i>
                            </button>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php 


include_once '../../includes/pagination.php';

include_once '../../includes/footer.php';

?>
