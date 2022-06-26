<?php require "partials/head.php" ?>
<?php require "partials/navbar.php" ?>

<div class="container">
    <div class="row">
        <div class="col-4">
        <h2 class="mb-3">Students</h2>
        <table class="table table-dark table-striped">
            <thead class="thead-dark">
                <tr>
                    <td>Email</td>
                    <td colspan="2">Action</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>All students</td>
                    <td><button class="btn btn-danger find-btn form-control" data-email="">All</button></td>
                    <?php if($user->isAdmin()): ?>
                    <td><button class="btn btn-warning form-control">New</button></td>
                    <?php endif; ?>
                </tr>
                <?php foreach($students as $index => $student) : ?>
                    <tr>
                        <td><?php echo $student->email; ?></td>
                        <td><button data-email=<?php echo $student->email; ?> class="btn btn-info find-btn form-control">Find</button></td>
                        <?php if($user->isAdmin()): ?>
                        <td><button data-email=<?php echo $student->email; ?> class="btn btn-secondary form-control info-btn">Info</button></td>
                        <?php endif; ?>
                        </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
        <div class="col-6 offset-2">
        <h2 class="mb-3">Payments</h2>
        <table class="table table-dark table-striped">
            <thead class="thead-dark">
                <tr>
                    <td>Email</td>
                    <td>Created at</td>
                    <td class="text-end">Amount</td>
                </tr>
            </thead>
            <tbody id="payments-body">
                <?php foreach($payments as $payments) : ?>
                    <tr>
                        <td><?php echo $payments->email; ?></td>
                        <td><?php echo $payments->created_at ?></td>
                        <td class="text-end"><?php echo $payments->amount; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Total:</th>
                    <th id="total-payments" colspan="2" class="text-end"><?php echo $totalAmount->total ?></th>
                </tr>
            </tfoot>
        </table>
        </div>
    </div>
</div>

<?php require "partials/modal.php" ?>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="js/DB.js"></script>
<script src="js/main.js"></script>

<?php require "partials/bottom.php" ?>