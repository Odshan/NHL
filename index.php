<?php include('hefo/header.html') ?>


<div class="row">
    <div class="col-2">
        <h2>NHL Café</h2>
    </div>
    <div class="col-10 ">
        <ul class="nav nav-tabs d-flex justify-content-between w-100">
            <li class="nav-item flex-grow-1 text-center">
                <a class="nav-link active w-100" href="#">Bestellen</a>
            </li>
            <li class="nav-item flex-grow-1 text-center">
                <a class="nav-link text-primary w-100" href="pages/overzicht.php">Overzicht</a>
            </li>
            <li class="nav-item flex-grow-1 text-center">
                <a class="nav-link text-primary w-100" href="pages/pay.php">Alles betalen</a>
            </li>
            <li class="nav-item flex-grow-1 text-center">
                <a class="nav-link text-primary w-100" href="pages/paypp.php">Per persoon betalen</a>
            </li>
        </ul>
    </div>
</div>

<div class="row mt-4">
    <h3><b>Bestellen</b></h3>
    <div class="col-md-4">
        <div class="list-group">
            <button class="list-group-item list-group-item-action">Frisdrank</button>
            <button class="list-group-item list-group-item-action">Bier</button>
            <button class="list-group-item list-group-item-action">Wijn</button>
            <button class="list-group-item list-group-item-action active">Koffie</button>
            <button class="list-group-item list-group-item-action">Thee</button>
            <button class="list-group-item list-group-item-action">Hapjes</button>
        </div>
    </div>
    <div class="col-md-4">
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">Normaal <i
                        class="fa fa-plus text-primary"></i></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">Cappuccino <i
                        class="fa fa-plus text-primary"></i></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">Latte <i
                        class="fa fa-plus text-primary"></i></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">Verkeerd <i
                        class="fa fa-plus text-primary"></i></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">...</li>
        </ul>
    </div>
    <div class="col-md-4">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Product</th>
                <th>Amount</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Cola</td>
                <td class="d-flex align-items-center gap-2"><i class="fa fa-minus text-black"></i> 2 <i
                            class="fa fa-plus text-black"></i> <i class="fa fa-trash text-black"></i></td>
            </tr>
            <tr>
                <td>Fanta</td>
                <td class="d-flex align-items-center gap-2"><i class="fa fa-minus text-black"></i> 3 <i
                            class="fa fa-plus text-black"></i> <i class="fa fa-trash text-black"></i></td>
            </tr>
            <tr>
                <td>Koffie Normaal</td>
                <td class="d-flex align-items-center gap-2"><i class="fa fa-minus text-black"></i> 0 <i
                            class="fa fa-plus text-black"></i> <i class="fa fa-trash text-black"></i></td>
            </tr>
            <tr>
                <td>Franziskaner Weissbier 0.5L</td>
                <td class="d-flex align-items-center gap-2"><i class="fa fa-minus text-black"></i> 4 <i
                            class="fa fa-plus text-black"></i> <i class="fa fa-trash text-black"></i></td>
            </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            <button class="btn btn-primary">Bestel</button>
        </div>
    </div>
</div>


<?php include('hefo/footer.html') ?>
