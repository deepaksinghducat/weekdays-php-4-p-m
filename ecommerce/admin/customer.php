<?php require_once '../layouts/header.php'; ?>
<?php require_once '../layouts/navigation.php'; ?>

<div class="container  mb-4">

    <div class="container mt-2  mb-2">
        <div class="row">
            <div class="col-sm-2">
                <?php require_once 'sidebar.php'; ?>
            </div>
            <div class="col-sm-10">
                <h1>Customer</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">S No</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Customer Name</td>
                            <td>Email</td>
                            <td>
                                <a href="#" class="btn btn-primary">Edit</a>
                                <a href="#" class="btn btn-primary">Delete</a>
                            </td>
                        </tr>                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<?php require_once '../layouts/footer.php'; ?>