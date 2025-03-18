<?php include('../hefo/header.html') ?>

<div class="row">
    <div class="col-2">
        <h2>NHL Café</h2>
    </div>
    <div class="col-10 ">
        <ul class="nav nav-tabs d-flex justify-content-between w-100">
            <li class="nav-item flex-grow-1 text-center">
                <a class="nav-link text-primary w-100" href="../index.php">Bestellen</a>
            </li>
            <li class="nav-item flex-grow-1 text-center">
                <a class="nav-link active text-black w-100" href="#">Overzicht</a>
            </li>
            <li class="nav-item flex-grow-1 text-center">
                <a class="nav-link text-primary w-100" href="../pages/pay.php">Alles betalen</a>
            </li>
            <li class="nav-item flex-grow-1 text-center">
                <a class="nav-link text-primary w-100" href="../pages/paypp.php">Per persoon betalen</a>
            </li>
        </ul>
    </div>
</div>

<div class="row mt-4">
    <h3 class="border-bottom"><b>Overzicht</b></h3>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Product</th>
            <th>Hoeveelheid</th>
            <th>Prijs</th>
            <th>Totaal</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Cola</td>
            <td class="d-flex align-items-center gap-2">
                <i class="fa fa-minus text-black cursor-pointer"></i>
                <span>2</span>
                <i class="fa fa-plus text-black cursor-pointer"></i>
                <i class="fa fa-trash text-black cursor-pointer"></i>
            </td>
            <td>&dollar; 2.50</td>
            <td>&dollar; 5.00</td>
        </tr>
        <tr>
            <td>Fanta</td>
            <td class="d-flex align-items-center gap-2">
                <i class="fa fa-minus text-black cursor-pointer"></i>
                <span>3</span>
                <i class="fa fa-plus text-black cursor-pointer"></i>
                <i class="fa fa-trash text-black cursor-pointer"></i>
            </td>
            <td>&dollar; 2.50</td>
            <td>&dollar; 5.00</td>
        </tr>
        <tr>
            <td>Franziskaner Weissbier 0.5L</td>
            <td class="d-flex align-items-center gap-2">
                <i class="fa fa-minus text-black cursor-pointer"></i>
                <span>0</span>
                <i class="fa fa-plus text-black cursor-pointer"></i>
                <i class="fa fa-trash text-black cursor-pointer"></i>
            </td>
            <td>&dollar; 5.00</td>
            <td>&dollar; 0.00</td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="3" class="text-end border-bottom-0 fw-bold"></td>
            <td class="fw-bold border-bottom-0">&dollar; 10.00</td>
        </tr>
        </tfoot>
    </table>

    <div class="d-flex justify-content-end gap-3 mt-4">
        <button class="btn btn-primary">Alles betalen</button>
        <button class="btn btn-primary">Betalen per persoon</button>
    </div>
</div>

<?php include('../hefo/footer.html') ?>
