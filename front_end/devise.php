<!-- Header -->
<?php include "includes/Header.php" ?>

<body>
    <div class="position-absolute w-100" style="height: 40vh; background-color: var(--second-color);"></div>
    <div class="d-flex flex-row-reverse gap-3 mx-3" style="height: 100vh;">
        <!-- AssidBar -->
        <?php include "includes/AssidBar.php" ?>

        <div class="position-relative w-100">
            <!-- Navbar -->
            <?php include "includes/Navbar.php" ?>

            <!-- Statistiques -->
            <div class="container-fluid py-4">
                <div class="card border-0 shadow-sm overflow-auto" style="min-height: 200px; max-height: 560px; border-radius: 16px;">
                    <div class="d-flex flex-row-reverse justify-content-between align-items-center m-4">
                        <h4>العملات</h4>
                        <div class="input-group me-3" style="width: 25%;">
                            <input type="text" class="form-control" placeholder="الاسم" style="height: 45px;">
                            <span class="input-group-text" style="border-radius: 0px 16px 16px 0px;"><i class="bi bi-search"></i></span>
                        </div>
                        <!-- Button Add modal -->
                        <i class="bi bi-plus-circle-fill h1" type="button" data-bs-toggle="modal" data-bs-target="#add"></i>
                        <?php include "includes_modales/Modale_devise.php" ?>
                    </div>
                    <table class="table mb-0 text-center">
                        <thead>
                            <tr>
                                <th class="col-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                                <th class="col-5 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">القيمة مقابل الدولار</th>
                                <th class="col-5 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">الاسم</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for($i=0 ; $i<8 ; $i++): ?>
                            <tr>
                                <td class="col-2">
                                    <a class="text-dark me-1" href=""><i class="bi bi-pen-fill"></i></a>
                                    <a class="text-dark ms-1" href=""><i class="bi bi-trash3-fill"></i></a>
                                </td>
                                <td class="col-5"><?php echo "ابت" ;?></td>
                                <td class="col-5"><?php echo "ابت" ;?></td>
                            </tr>
                            <?php endfor ;?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Copyright -->
            <div class="position-fixed bottom-0 start-50 text-center h6">Copyright &copy; SayfCo 2022</div>
        </div>
    </div>
</body>

<style>
    /* Tables */
    th,td{
        height: 50px;
    }
    tbody tr:hover{
        background-color: var(--second-color) !important;
        color: var(--white-color) !important;
    }
    tbody tr:hover a{
        color: var(--white-color) !important;
    }
</style>

<!-- Footer -->
<?php include "includes/Footer.php" ?>