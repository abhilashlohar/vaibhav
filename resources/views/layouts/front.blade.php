<?php 
use \App\Http\Controllers\CategoryController;
?>
<?php 
$categories = CategoryController::list();

?>
<!doctype html>
<html>
    
    <head>
        <title>{{ config('app.name') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        @yield ('headpart')

   
        
        <div class="container-fluid">
            <div class="">

                <nav class="navbar navbar-expand-md navbar-light fixed-top">
                 
                        <a class="navbar-brand" href="{{ route('home') }}"><img src="<?php echo url('/'); ?>/assets/img/horeca-logo-2.png" width="200px"/></a>

                        <button type="button" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#nav">

                        <span class="navbar-toggler-icon"></span>

                        </button>
                 
                            <div class="collapse navbar-collapse justify-content-between" id="nav">
                             
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('aboutus') }}">About</a>
                                </li>
                                <li class="nav-item">
                       
                                    <div class="dropdown show">
                                      <a class="btn btn-service dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       Services
                                      </a>

                                      <div class="dropdown-menu drop-items" aria-labelledby="dropdownMenuLink">
                                        
                                        <?php 
                                        foreach ($categories as $category) { ?>
                                            <a class="dropdown-item" href="{{ route('products.list', $category->id) }}"><?php echo $category->name ?></a>
                                        <?php }
                                        ?>
                                        
                                      </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul>
                                         
                             
                           
                        </div>
                 
                </nav>
            </div>
           @yield ('content')
            </div>
           
    <div class="row footer" style="background-color:#42153b;"  id="contact">
            
                <div class="col-sm-4">
                    <div class="">
                        <img src="<?php echo url('/'); ?>/assets/img/horeca-logo-3.png" width="150">
                    </div>
                        
                </div>

                <div class="col-sm-4">
                    <div class="text-white">
                        <p>202, Vinayak Residency, Close to Sona Resort, Sanganeri Road, Bhilwara (Raj.) - 313001 </p>
                            <button type="button" class="btn btn-light contactbutton">Get in Touch</button>
                    </div>
                        
                </div>

                <div class="col-sm-4">
                    <div class="">
                        <a href="#"><img src="<?php echo url('/'); ?>/assets/img/icons/instagram.svg" width="15"></a>
                        <span><a href="#"><img src="<?php echo url('/'); ?>/assets/img/icons/facebook-logo.svg" width="15"></a></span>
                        <span><a href="#"><img src="<?php echo url('/'); ?>/assets/img/icons/whatsapp.svg" width="15"></a></span>
                    </div>
                        
                </div>
                    <div class="footer-copyright text-center py-3 col-sm-12 text-white">Copyright © 2019
                    <a href="#home" class="text-white"> HorecaHospitality</a>
                  </div>
        </div>
        

    </body>

</html>