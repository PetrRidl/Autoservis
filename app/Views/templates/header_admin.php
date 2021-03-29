<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Autoservis Rídl</title>
</head>
<style>
li{
    color: white;
}
.prihlaseni {
    background-color: #dc3545;
    color: white;
    text-align: center;
    
    padding: 15px 32px;
    margin-left: 70%;
    display: inline-block;
}
.negr{
    margin-left: 1%
}
a:hover {
    text-decoration: none;
    color: white;
}
a {
    text-decoration: none;
    color: white;
}
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">
        <a class="navbar-brand negr" href="<?php echo base_url();?>/Hlavnistrana">Autoservis Rídl</a>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url()?>/HlavniStrana/vypisAut">Auta k opravě</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url()?>/HlavniStrana/vypisZamestnancu">Zaměstnanci</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url()?>/HlavniStrana/vypisDilu">Díly na skladě</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url()?>/HlavniStrana/vypisZakazniku">Zákaznicí</a>
                </li>

            </ul>
            
             <a class="prihlaseni" href="<?php echo base_url();?>/auth/logout">Odhlásit se</a>
              
        </div>
    </nav>
    </br>
    </br>
    </br>
    </br>
    