<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Ahmad Shope</title>
</head>
<body>
    <div class="bg-danger p-5">
    <h1 class="text-center text-white">Ahmad Shope</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="tugas2.php" method="post" class="mt-3">
            
            <div class="form-group">
                    <label for=""> Customer</label>
                    <input type="text" name="nama" value="" class="form-control">
            </div>

                <div class="form-group">
                <label for="">Item</label><br>
                  <div class="form-check form-check-inline">
                  
                    <input class="form-check-input" type="radio" name="barang" id="inlineRadio1" value="AC" <?php echo (($item == "AC")? "Checked" : "") ?>>
                    <label class="form-check-label" for="inlineRadio1">AC</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="barang" id="inlineRadio2" value="Laptop" <?php echo (($item == "Laptop")? "Checked" : "") ?>>
                    <label class="form-check-label" for="inlineRadio2">Laptop</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="mesin_cuci" id="inlineRadio3" value="Kipas" <?php echo (($item == "Kipas")? "Checked" : "") ?>>
                    <label class="form-check-label" for="inlineRadio3">Kipas</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Total Barang</label>
                    <input type="text" name="barang-barang" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for=""></label>
                    <input type="date" name="perabotan" value="" class="form-control">
                </div>

                <label for="">Courier Type</label>
                <select class="form-select form-control" name="pengiriman" class="form-control">
                    <option selected>Choose Courier Type :</option>
                    <option value="Tiki">Uber</option>
                    <option value="Si Cepat">Wahana</option>
                    <option value="Pos">JNE</option>
                    <option value="Grab">Ninja</option>
                    <option value="Gojek">Gojek</option>
                </select>

                <div class="form-group">
                    <label for="">Shipping Address</label>
                    <textarea class="form-control" name="juanda" id="" cols="30" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Courier Cost</label>
                    <input type="text" name="grab" value="" class="form-control">
                </div>

                
                <div class="form-group">
                    <label for="">Assurance Cost</label>
                    <input type="text" name="bpjs" value="" class="form-control">
                </div>
                <input type="submit" value="Simpan" name="proses" class="btn btn-success btn-sm btn-block">

            </form>
            <?php
            $customer = $_POST["nama"];
            $item = $_POST["barang"];
            // $item1 = $_POST["TV"];
            // $item1 = $_POST["Refrigator"];
            $total_item = $_POST["barang-barang"];
            $perabotan = $_POST["perabotan"];
            $courier_Type = $_POST["pengiriman"];
            $shipping_Address = $_POST["juanda"];
            $Courier_Cost = $_POST["grab"];
            $assurance_Cost = $_POST["bpjs"];
            if($item == "AC"){
                $total = $Courier_Cost +$assurance_Cost +(3000.000 * $total_item).".000"; 
            } elseif($item == "Laptop"){
                $total = $Courier_Cost +$assurance_Cost +(6000.000 * $total_item).".000";
            } elseif($item == "Kipas"){
                $total = $Courier_Cost +$assurance_Cost +(4000.000 * $total_item).".000";
            }

            ?>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-danger text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Customer : <?= $customer?></li>
                    <li class="list-group-item">Item : <?= $item?></li>
                    <li class="list-group-item">Date Shipping : <?= $perabotan?></li>
                    <li class="list-group-item">Courier Type : <?= $courier_Type?></li>
                    <li class="list-group-item">Shipping Address : <?= $shipping_Address?></li>
                    <li class="list-group-item">Courier Cost : <?= $Courier_Cost?></li>
                    <li class="list-group-item">Assurance Cost : <?= $assurance_Cost?></li>
                    <li class="list-group-item">Total Cost : <?= $total?></li>
                   
                </ul>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-danger text-white">
                    Cost List
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">AC : Rp.3000.000</li>
                    <li class="list-group-item">Laptop : Rp.6000.000</li>
                    <li class="list-group-item">Kipas : Rp. 4000.000</li>
                </ul>
                </div>
            </div>
            
        </div>
        
    </div>
</body>
</html>