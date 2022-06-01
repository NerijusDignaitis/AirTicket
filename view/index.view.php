<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous">
    <title>Bilietu rezervacija</title>
</head>
<body>
    <div class="container">
    <h2 class="text-center">Skrydzio bilietas</h2>
    <form method="post" action="/data/submit.php">

        <div class="form-group mb-3">
            <select name="number" class="form-control">
                <option selected disabled>--Pasirinkite skrydzio numeri--</option>
                <?php foreach ($numbers as $number):?>
                    <option value="<?=$number;?>"><?=$number;?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="form-group mb-3">
            <input type="personN" class="form-control" name="personNumber" placeholder="Asmens kodas">
        </div>
        <div class="form-group mb-3">
            <input type="text" class="form-control" name="firstLastName" placeholder="Vardas , Pavarde">
        </div>
        <div class="form-group mb-3">
            <select name="flyOut" class="form-control">
                <option selected disabled>--Is kur skrydis?--</option>
                <?php foreach ($flyOut as $flyOuts):?>
                    <option value="<?=$flyOuts;?>"><?=$flyOuts;?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="form-group mb-3">
            <select name="flyIn" class="form-control">
                <option selected disabled>--I kur skrydis?--</option>
                <?php foreach ($flyIn as $flyIns):?>
                    <option value="<?=$flyIns;?>"><?=$flyIns;?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="form-group mb-3">
            <input type="price" class="form-control" name="price" placeholder="Kaina">

        </div>
        <div class="form-group mb-3">
            <select name="numbers" class="form-control">
                <option selected disabled>--Pasirinkite bagazo svori--</option>
                <?php foreach ($luggage as $luggages):?>
                    <option value="<?=$luggages;?>"><?=$luggages;?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="form-group mb-3">
            <textarea name="message" class="form-control" placeholder="Pastabos"></textarea>
        </div>
        <div class="text-center">
        <button class="btn btn-primary" style="text-align:center;" name="save">Spausdinti</button>
    </div>
    </form>
</div>