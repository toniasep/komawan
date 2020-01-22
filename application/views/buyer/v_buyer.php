<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Klola</title>
  <link rel="icon" href="<?=base_url()?>img/Untitled-3.png" type="image">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="<?= base_url(); ?>assets/css/pidie-0.0.1.css?v=1.0" rel="stylesheet"/>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="font-family: lato;">

  <div class="pd-panel"></div>
  <!-- Hidden -->
  <nav class="pd-nav" style="display: none;">
    <button id="panel" class="pd-nav-toggle">
      <span class="pd-nav-toggle-icon"></span>
    </button>
    
    <!--<form class="pd-nav-search">
      <input type="search" name="q"/>
      <button type="submit">Search</button>
    </form>
    <ul class="pd-nav-menu pd-menu-right">
      <li><a href="#">About</a></li>
      <li><a href="#">Download</a></li>
    </ul>-->
  </nav>
  <!-- Hidden -->
  <header class="pd-header-slide" style="display: none">
    <span class="pd-slide-prev">&lsaquo;</span>
    <span class="pd-slide-next">&rsaquo;</span>
    <div class="pd-slide-items">
      <div class="pd-slide-item pd-red">
        <div class="pd-slide-container">
          <div class="pd-row">
            <div class="pd-col">
              <img src="https://loremflickr.com/600/400/cat?lock=3" class="pd-image"/>
            </div>
            <div class="pd-col pd-text-light">
              <h1>Lorem ipsum dolor sit amet</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at lobortis nunc, ac lacinia odio. Sed vitae ex nec urna rutrum scelerisque quis a risus. Duis bibendum felis eget massa finibus, in mollis mauris venenatis. Morbi sit amet tristique nibh. Curabitur efficitur elementum erat, ac ultrices lectus maximus nec. Donec mi lectus, dictum in sodales et, vulputate sodales tortor. Nam eget elit consectetur, molestie purus ac, efficitur velit. Suspendisse ut odio lobortis, aliquam mauris eget, blandit mi. Maecenas diam ex, egestas at finibus et, bibendum id mi. Suspendisse finibus purus est. Curabitur in ex sed dui laoreet pulvinar id quis nulla. Donec consequat, urna a pharetra tempus, lacus neque pellentesque odio, sed feugiat magna libero quis nisl. Donec vel sem ut arcu imperdiet volutpat. Phasellus fermentum sagittis sapien et aliquam. Nunc id tincidunt lectus. Vestibulum aliquet ex non sapien facilisis, a tempus tellus dictum. </p>
            </div>
          </div>
        </div>
      </div>
      <div class="pd-slide-item pd-green">
        <div class="pd-slide-container">
          <div class="pd-row">
            <div class="pd-col pd-text-light">
              <h1 class="pd-text-right">Cras sed feugiat magna</h1>
              <p>Cras sed feugiat magna. Aenean metus nunc, dapibus sed turpis id, lacinia vestibulum dui. Maecenas cursus sagittis convallis. Proin ullamcorper porta dui, at egestas mauris tristique auctor. Ut eu urna vel lectus varius molestie ac et massa. Duis congue, nunc ac porttitor tristique, nulla risus porta tortor, ac eleifend magna lorem sed enim. Sed nec ipsum dapibus, faucibus diam eu, scelerisque ex. Curabitur sed neque nec nunc tempor placerat eu in libero. Etiam dui nisi, interdum in turpis a, porta ultrices dolor. Suspendisse consectetur vitae nulla et commodo. Suspendisse suscipit quis tellus a interdum. Phasellus vel diam nec risus suscipit iaculis. Donec turpis turpis, varius a sem in, ultricies consectetur mauris. Pellentesque a tellus eget diam viverra iaculis nec nec est. Integer eu purus ac mi suscipit semper vel ac nisl. Nullam non quam elit. </p>
            </div>
            <div class="pd-col">
              <img src="https://loremflickr.com/600/400/cat?lock=4" class="pd-image"/>
            </div>
          </div>
        </div>
      </div>
      <div class="pd-slide-item pd-blue">
        <div class="pd-slide-container">
          <div class="pd-row">
            <div class="pd-col">
              <img src="https://loremflickr.com/600/400/cat?lock=5" class="pd-image"/>
              <br/>
              <img src="https://loremflickr.com/600/400/cat?lock=6" class="pd-image"/>
            </div>
            <div class="pd-col">
              <img src="https://loremflickr.com/600/400/cat?lock=7" class="pd-image"/>
              <br/>
              <img src="https://loremflickr.com/600/400/cat?lock=8" class="pd-image"/>
            </div>
            <div class="pd-col">
              <img src="https://loremflickr.com/600/400/cat?lock=9" class="pd-image"/>
              <br/>
              <img src="https://loremflickr.com/600/400/cat?lock=10" class="pd-image"/>
            </div>
            <div class="pd-col">
              <img src="https://loremflickr.com/600/400/cat?lock=11" class="pd-image"/>
              <br/>
              <img src="https://loremflickr.com/600/400/cat?lock=12" class="pd-image"/>
            </div>
          </div>
        </div>
      </div>
      <div class="pd-slide-item pd-yellow">
        <div class="pd-slide-container">
          <div class="pd-row">
            <div class="pd-col">
              <div class="pd-card">
                <img class="pd-card-img-top" src="https://loremflickr.com/400/300/cat?lock=13"/>
                <div class="pd-card-body">
                  <h4 class="pd-card-title">Image 1</h4>
                </div>
              </div>
            </div>
            <div class="pd-col">
              <div class="pd-card">
                <img class="pd-card-img-top" src="https://loremflickr.com/400/300/cat?lock=14"/>
                <div class="pd-card-body">
                  <h4 class="pd-card-title">Image 2</h4>
                </div>
              </div>
            </div>
            <div class="pd-col">
              <div class="pd-card">
                <img class="pd-card-img-top" src="https://loremflickr.com/400/300/cat?lock=15"/>
                <div class="pd-card-body">
                  <h4 class="pd-card-title">Image 3</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pd-slide-item pd-violet">
        <div class="pd-slide-container">
          <div class="pd-row">
            <div class="pd-col pd-text-light">
              <h1 class="pd-text-right">Etiam enim sapien</h1>
              <p>Etiam enim sapien, iaculis a nulla sed, ultrices volutpat massa. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis nulla tellus, euismod in eleifend sed, tempus eget massa. Morbi sed nibh sit amet lacus gravida egestas. Donec quis lacus tincidunt, porta nulla quis, sagittis urna. Nulla lectus neque, rhoncus vel lorem sed, eleifend lobortis mauris. Nulla tristique fringilla augue vel hendrerit. Nulla quis mauris nisi. Vestibulum vel vehicula odio, ac posuere nisl. Integer vitae lorem nec risus posuere malesuada. Ut non lorem justo. Duis ullamcorper nisl sed nisi congue porttitor. </p>
            </div>
            <div class="pd-col">
              <img src="https://loremflickr.com/400/400/cat?lock=1" class="pd-image"/>
            </div>
            <div class="pd-col pd-text-light">
              <h1 class="pd-text-right">Suspendisse ultricies</h1>
              <p>Suspendisse ultricies, augue at rutrum posuere, odio est feugiat neque, ut blandit neque justo et sem. Curabitur nisi libero, maximus rutrum nisl vitae, rutrum auctor est. Praesent tempor odio id ante posuere feugiat. Nam efficitur blandit nunc, eu porttitor orci mollis ut. Quisque magna massa, venenatis sed odio sit amet, lobortis fringilla ipsum. Fusce laoreet fringilla augue, at cursus nulla maximus ac. Morbi in orci quam. Praesent sollicitudin malesuada quam, vel consequat sem porttitor eget. Maecenas quis tempor felis. Vestibulum commodo nisl enim, vitae porttitor enim mollis sed. Fusce vehicula molestie ultricies. Curabitur vitae consequat enim, vitae pretium leo. Quisque nisi diam, porttitor nec lacinia a, accumsan eget urna. Maecenas non velit elit. Vivamus sit amet mi vestibulum, eleifend ipsum varius, interdum massa. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="pd-slide-pagination"></div>
  </header>

  <div class="pd-container-full">
    <div class="pd-row-full">
      <div class="">
        <div class="pd-horizontal-filter" style="background-color: #0f4c75; border: #0f4c75">
          <a href="#" style="text-decoration: none; color: #fff; font-size: 20px; margin-top: 6px; margin-left: 10px;">TOKO JAYA ABADI</a>
          <a href="#" class="pd-button-grid" style="display: none;"><span class="fa fa-list fa-2x"></span></a>
          <a href="#" class="pd-button-list" style="display: none;"><span class="fa fa-th-large fa-2x"></span></a>
          <span class="pd-filter-total" style="display: none"></span>
          <div class="pd-filter-right" style="margin-right: 1%">
            <select class="pd-input-filter" style="display: none;">
              <option value="popular">Popularity</option>
              <option value="low">Price low to high</option>
              <option value="high">Price high to low</option>
            </select>
            <input type="search" class="pd-input-filter" placeholder="Cari Produk"/>
          </div>
          <a href="#" class="pd-button-list"><span class="fa fa-shopping-cart fa-lg" style="color: #fff; margin-top: 12px; margin-right: 10px;"> (0)</span></a>
        </div>
          <div class="container-fluid">
        <div class="pd-filter pd-filter-grid pd-row">
          <?php 
            foreach($data_produk->result() as $dp){ 
          ?>
          <div class="pd-list-grid pd-col-md-3" style="margin-bottom: 15px;">
            <div class="pd-card">
              <img src="<?= base_url() ?>gambar/<?=$dp->gambar?>" style='object-fit: cover; height: 300px;' class="pd-card-img-top"/>
              <div class="pd-card-body">
                <b class="pd-card-title"><?=$dp->nama?></b>
                <p class="pd-card-text pd-text-orange">Rp. <?=$dp->harga_jual?></p>
              </div>
              <div class="pd-card-footer pd-text-right">
                <button class="pd-button pd-button-sm" style="background-color: #3282b8; color: #fff"><span class="fa fa-shopping-cart"> Beli</span></button>
                <button class="pd-button pd-button-sm" data-toggle="modal" data-target="#myModal<?= $dp->id ?>" style="background-color: #3282b8; color: #fff">Detail</button>
              </div>
            </div>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="myModal<?= $dp->id ?>">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Deskripsi <?= $dp->nama ?></h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                  <?= $dp->deskripsi ?>
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                
              </div>
            </div>
          </div>


          <?php
          }
          ?>
          </div>
        </div>

        <div class="pd-filter-pagination pb-4" data-pagination="6"></div>

      </div>
    </div>
  </div>

  <!-- Hidden -->
  <div class="pd-container" style="display: none">
    <div class="pd-tabs pd-tabs-horizontal">
      <ul class="pd-tabs-header">
        <li class="pd-tabs-title">Tab 1</li>
        <li class="pd-tabs-title">Tab 2</li>
        <li class="pd-tabs-title">Tab 3</li>
        <li class="pd-tabs-title">Tab 4</li>
      </ul>
      <div class="pd-tabs-body">
        <div class="pd-tabs-content">
          <h3>Lorem ipsum dolor sit amet</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at lobortis nunc, ac lacinia odio. Sed vitae ex nec urna rutrum scelerisque quis a risus. Duis bibendum felis eget massa finibus, in mollis mauris venenatis. Morbi sit amet tristique nibh. Curabitur efficitur elementum erat, ac ultrices lectus maximus nec. Donec mi lectus, dictum in sodales et, vulputate sodales tortor. Nam eget elit consectetur, molestie purus ac, efficitur velit. Suspendisse ut odio lobortis, aliquam mauris eget, blandit mi. Maecenas diam ex, egestas at finibus et, bibendum id mi. Suspendisse finibus purus est. Curabitur in ex sed dui laoreet pulvinar id quis nulla. Donec consequat, urna a pharetra tempus, lacus neque pellentesque odio, sed feugiat magna libero quis nisl. Donec vel sem ut arcu imperdiet volutpat. Phasellus fermentum sagittis sapien et aliquam. Nunc id tincidunt lectus. Vestibulum aliquet ex non sapien facilisis, a tempus tellus dictum. </p>
        </div>
        <div class="pd-tabs-content">
          <h3>Cras sed feugiat magna</h3>
          <p>Cras sed feugiat magna. Aenean metus nunc, dapibus sed turpis id, lacinia vestibulum dui. Maecenas cursus sagittis convallis. Proin ullamcorper porta dui, at egestas mauris tristique auctor. Ut eu urna vel lectus varius molestie ac et massa. Duis congue, nunc ac porttitor tristique, nulla risus porta tortor, ac eleifend magna lorem sed enim. Sed nec ipsum dapibus, faucibus diam eu, scelerisque ex. Curabitur sed neque nec nunc tempor placerat eu in libero. Etiam dui nisi, interdum in turpis a, porta ultrices dolor. Suspendisse consectetur vitae nulla et commodo. Suspendisse suscipit quis tellus a interdum. Phasellus vel diam nec risus suscipit iaculis. Donec turpis turpis, varius a sem in, ultricies consectetur mauris. Pellentesque a tellus eget diam viverra iaculis nec nec est. Integer eu purus ac mi suscipit semper vel ac nisl. Nullam non quam elit. </p>
        </div>
        <div class="pd-tabs-content">
          <h3>Etiam enim sapien</h3>
          <p>Etiam enim sapien, iaculis a nulla sed, ultrices volutpat massa. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis nulla tellus, euismod in eleifend sed, tempus eget massa. Morbi sed nibh sit amet lacus gravida egestas. Donec quis lacus tincidunt, porta nulla quis, sagittis urna. Nulla lectus neque, rhoncus vel lorem sed, eleifend lobortis mauris. Nulla tristique fringilla augue vel hendrerit. Nulla quis mauris nisi. Vestibulum vel vehicula odio, ac posuere nisl. Integer vitae lorem nec risus posuere malesuada. Ut non lorem justo. Duis ullamcorper nisl sed nisi congue porttitor. </p>
        </div>
        <div class="pd-tabs-content">
          <h3>Suspendisse ultricies</h3>
          <p>Suspendisse ultricies, augue at rutrum posuere, odio est feugiat neque, ut blandit neque justo et sem. Curabitur nisi libero, maximus rutrum nisl vitae, rutrum auctor est. Praesent tempor odio id ante posuere feugiat. Nam efficitur blandit nunc, eu porttitor orci mollis ut. Quisque magna massa, venenatis sed odio sit amet, lobortis fringilla ipsum. Fusce laoreet fringilla augue, at cursus nulla maximus ac. Morbi in orci quam. Praesent sollicitudin malesuada quam, vel consequat sem porttitor eget. Maecenas quis tempor felis. Vestibulum commodo nisl enim, vitae porttitor enim mollis sed. Fusce vehicula molestie ultricies. Curabitur vitae consequat enim, vitae pretium leo. Quisque nisi diam, porttitor nec lacinia a, accumsan eget urna. Maecenas non velit elit. Vivamus sit amet mi vestibulum, eleifend ipsum varius, interdum massa. </p>
        </div>
      </div>
    </div>
  </div>
 <!-- Hidden -->
  <div class="pd-container" style="display: none">
    <div class="pd-accordion">
      <h3 class="pd-accordion-title">Lorem ipsum dolor sit amet</h3>
      <div class="pd-accordion-body">
        <p class="pd-accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at lobortis nunc, ac lacinia odio. Sed vitae ex nec urna rutrum scelerisque quis a risus. Duis bibendum felis eget massa finibus, in mollis mauris venenatis. Morbi sit amet tristique nibh. Curabitur efficitur elementum erat, ac ultrices lectus maximus nec. Donec mi lectus, dictum in sodales et, vulputate sodales tortor. Nam eget elit consectetur, molestie purus ac, efficitur velit. Suspendisse ut odio lobortis, aliquam mauris eget, blandit mi. Maecenas diam ex, egestas at finibus et, bibendum id mi. Suspendisse finibus purus est. Curabitur in ex sed dui laoreet pulvinar id quis nulla. Donec consequat, urna a pharetra tempus, lacus neque pellentesque odio, sed feugiat magna libero quis nisl. Donec vel sem ut arcu imperdiet volutpat. Phasellus fermentum sagittis sapien et aliquam. Nunc id tincidunt lectus. Vestibulum aliquet ex non sapien facilisis, a tempus tellus dictum. </p>
      </div>
      <h3 class="pd-accordion-title">Cras sed feugiat magna</h3>
      <div class="pd-accordion-body">
        <p class="pd-accordion-content">Cras sed feugiat magna. Aenean metus nunc, dapibus sed turpis id, lacinia vestibulum dui. Maecenas cursus sagittis convallis. Proin ullamcorper porta dui, at egestas mauris tristique auctor. Ut eu urna vel lectus varius molestie ac et massa. Duis congue, nunc ac porttitor tristique, nulla risus porta tortor, ac eleifend magna lorem sed enim. Sed nec ipsum dapibus, faucibus diam eu, scelerisque ex. Curabitur sed neque nec nunc tempor placerat eu in libero. Etiam dui nisi, interdum in turpis a, porta ultrices dolor. Suspendisse consectetur vitae nulla et commodo. Suspendisse suscipit quis tellus a interdum. Phasellus vel diam nec risus suscipit iaculis. Donec turpis turpis, varius a sem in, ultricies consectetur mauris. Pellentesque a tellus eget diam viverra iaculis nec nec est. Integer eu purus ac mi suscipit semper vel ac nisl. Nullam non quam elit. </p>
      </div>
      <h3 class="pd-accordion-title">Etiam enim sapien</h3>
      <div class="pd-accordion-body">
        <p class="pd-accordion-content">Etiam enim sapien, iaculis a nulla sed, ultrices volutpat massa. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis nulla tellus, euismod in eleifend sed, tempus eget massa. Morbi sed nibh sit amet lacus gravida egestas. Donec quis lacus tincidunt, porta nulla quis, sagittis urna. Nulla lectus neque, rhoncus vel lorem sed, eleifend lobortis mauris. Nulla tristique fringilla augue vel hendrerit. Nulla quis mauris nisi. Vestibulum vel vehicula odio, ac posuere nisl. Integer vitae lorem nec risus posuere malesuada. Ut non lorem justo. Duis ullamcorper nisl sed nisi congue porttitor. </p>
      </div>
      <h3 class="pd-accordion-title">Suspendisse ultricies</h3>
      <div class="pd-accordion-body">
        <p class="pd-accordion-content">Suspendisse ultricies, augue at rutrum posuere, odio est feugiat neque, ut blandit neque justo et sem. Curabitur nisi libero, maximus rutrum nisl vitae, rutrum auctor est. Praesent tempor odio id ante posuere feugiat. Nam efficitur blandit nunc, eu porttitor orci mollis ut. Quisque magna massa, venenatis sed odio sit amet, lobortis fringilla ipsum. Fusce laoreet fringilla augue, at cursus nulla maximus ac. Morbi in orci quam. Praesent sollicitudin malesuada quam, vel consequat sem porttitor eget. Maecenas quis tempor felis. Vestibulum commodo nisl enim, vitae porttitor enim mollis sed. Fusce vehicula molestie ultricies. Curabitur vitae consequat enim, vitae pretium leo. Quisque nisi diam, porttitor nec lacinia a, accumsan eget urna. Maecenas non velit elit. Vivamus sit amet mi vestibulum, eleifend ipsum varius, interdum massa. </p>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="<?= base_url(); ?>assets/js/pidie-0.0.1.js"></script>
  <script>


    var pidie = new Pidie();
    pidie.panel
    pidie.slide
    pidie.gridList
    pidie.filterSearch
    pidie.tabs
    pidie.accordionCollapse
    pidie.filterSort
    pidie.filterPagination
    pidie.filterCheckbox
  </script>
</body>
</html>
