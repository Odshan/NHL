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
                    <a class="nav-link text-primary w-100" href="../pages/overzicht.php">Overzicht</a>
                </li>
                <li class="nav-item flex-grow-1 text-center">
                    <a class="nav-link text-primary w-100" href="../pages/pay.php">Alles betalen</a>
                </li>
                <li class="nav-item flex-grow-1 text-center">
                    <a class="nav-link active text-black w-100" href="../pages/paypp.php">Per persoon betalen</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="row mt-4">
        <h3 class="border-bottom"><b>Per persoon betalen</b></h3>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Product</th>
                <th>Nog te betalen</th>
                <th>Prijs</th>
                <th>Totaal</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Cola</td>
                <td class="text-success">
                    <i class="fa fa-minus text-black"></i> 2 <i
                            class="fa fa-plus text-black"></i> van de 2
                </td>
                <td>&dollar; 2.50</td>
                <td>&dollar; 5.00</td>
            </tr>
            <tr>
                <td>Fanta</td>
                <td class="text-success">
                    <i class="fa fa-minus text-black"></i> 1 <i
                            class="fa fa-plus text-black"></i> van de 5
                </td>
                <td>&dollar; 2.50</td>
                <td>&dollar; 5.00</td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3" class="border-bottom-0 fw-bold">Te betalen:</td>
                <td class="fw-bold border-bottom-0">&dollar; 7.50</td>
            </tr>
            </tfoot>
        </table>

        <div class="d-flex justify-content-end mt-4">
            <button class="btn btn-primary">Betalen</button>
        </div>
    </div>

<?php include('../hefo/footer.html') ?>