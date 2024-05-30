<?php

require_once dirname(__FILE__) . "/layout/user/header.php";


?>

<form class="p-5 m-5 " action="<?php echo INSERT_FORM ?>" style="background-color: black;" method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="pswd" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <input type="submit" value="INSERT" name="insert" class="btn btn-primary">
</form>



<form class="p-5 m-5 " enctype="multipart/form-data" action="<?php echo INSERT_FORM ?>" style="background-color: black;"
    method="POST">

    <div class="mb-3">
        <label for="" class="form-label">IMAGE</label>
        <input type="file" class="form-control" name="profile" id="" placeholder="" aria-describedby="fileHelpId" />
        <div id="fileHelpId" class="form-text">Help text</div>
    </div>

    <input type="submit" value="UPLOAD" name="uploadFile" class="btn btn-primary">
</form>




<div class="table-responsive">

    <?php

    $sql = "SELECT * FROM `users`";

    $exe_fetch = $conn->query($sql);

    if ($exe_fetch->num_rows > 0) {

        // join query INNER JOIN OUTER JOIN FULL JOIN 
    

        ?>

        <table class="table table-bordered table-hover table-dark">
            <tr>
                <th>#</th>
                <th>IMAGE</th>
                <th>USER NAME</th>
                <th>EMAIL</th>
                <th>ACTION</th>
            </tr>

            <?php

            while ($row = $exe_fetch->fetch_assoc()) {


                $query_address = "SELECT * FROM `user_address` WHERE  `user_id`='{$row["user_id"]}'";

                $exe_address_fetch = $conn->query($query_address);


                if ($exe_address_fetch->num_rows > 0) {
                    # code...
                    $address_row = $exe_address_fetch->fetch_assoc();
                    //   echo  $cleanedJsonData = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $address_row['image']);
                    // $address_row["image"];
                    // echo $address_row["image"];
        
                    if (isset($address_row["image"])) {
                        # code...
                        $images = json_decode($address_row["image"], true);

                    } else {
                        $images = [
                            "absolute_path" => Default_image
                        ];
                    }


                } else {
                    $images = [
                        "absolute_path" => Default_image
                    ];
                }
                ?>

                <tr>

                    <td><?php echo $row["user_id"] ?></td>

                    <td class="d-flex flex-wrap justify-content-center">
                        <a href="<?php echo $images["absolute_path"] ?>">

                            <img width="200" height="200" src="<?php echo $images["absolute_path"] ?>" alt="">

                        </a>
                    </td>

                    <td><?php echo $row["user_name"] ?></td>
                    <td><?php echo $row["email"] ?></td>
                    <td>


                        <div class="card">
                            <div class="card-body d-flex justify-content-center gap-3">

                                <a href="<?php echo UPDATE_FORM ?>?token=<?php echo base64_encode($row["user_id"]) ?>"
                                    class="btn btn-info">EDIT</a>

                                <button type="button" onclick="OnDELETE('<?php echo base64_encode($row["user_id"]) ?>')"
                                    class="btn btn-danger">DELETE</button>

                            </div>
                        </div>

                    </td>
                </tr>

                <?php

            } ?>

        </table>

    <?php } else {



        ?>

        <h1> DATA NOT FOUND </h1>

    <?php } ?>


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">DELETE</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h1>ARE YOU SURE <span class="text-danger">!</span></h1>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->

                    <form action="" method="post">
                        <input type="hidden" id="delete_token" name="delete_token">

                        <input type="submit" value="YES" name="delete" class="btn btn-primary">
                    </form>


                </div>
            </div>
        </div>
    </div>

</div>

<?php

require_once dirname(__FILE__) . "/layout/user/footer.php";


?>

<script>
    function OnDELETE(id) {

        const Mymodal = document.querySelector("#staticBackdrop");

        const bootstrapModal = new bootstrap.Modal(Mymodal);

        bootstrapModal.show(Mymodal);

        let user_id = document.querySelector("#delete_token");

        user_id.value = id;

    }
</script>