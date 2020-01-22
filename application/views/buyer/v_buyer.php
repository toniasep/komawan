<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PidieUi</title>
  <link href="<?= base_url(); ?>assets/css/pidie-0.0.1.css" rel="stylesheet"/>
</head>
<body>

  <div class="pd-panel"></div>

  <nav class="pd-nav" style="display: none">
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

  <div class="pd-container">
    <div class="pd-row">
  
      <div class="pd-col-12">
        <div class="pd-horizontal-filter">
          <a href="#" class="pd-button-grid"><span class="pd-icon">view_module</span></a>
          <a href="#" class="pd-button-list"><span class="pd-icon">view_list</span></a>
          <span class="pd-filter-total"></span>
          <div class="pd-filter-right">
            <input type="search" class="pd-input-filter" placeholder="Cari Produk"/>
          </div>
        </div>
        <div class="pd-filter pd-filter-grid pd-row">
          <div class="pd-list-grid pd-col-md-4">
            <div class="pd-card">
              <img src="https://loremflickr.com/300/200/cat?lock=1" class="pd-card-img-top"/>
              <div class="pd-card-body">
                <b class="pd-card-title">Acis Cat Salmon</b>
                <p class="pd-card-text pd-text-orange">485000</p>
              </div>
              <div class="pd-card-footer pd-text-right">
                <button class="pd-button pd-button-danger pd-button-sm"><span class="pd-icon">shop</span></button>
                <button class="pd-button pd-button-primary pd-button-sm"><span class="pd-icon">shopping_cart</span></button>
                <button class="pd-button pd-button-success pd-button-sm"><span class="pd-icon">bookmark</span></button>
              </div>
            </div>
          </div>
          <div class="pd-list-grid pd-col-md-4">
            <div class="pd-card">
              <img src="https://loremflickr.com/300/200/cat?lock=3" class="pd-card-img-top"/>
              <div class="pd-card-body">
                <b class="pd-card-title">Catfood Caesar Natural</b>
                <p class="pd-card-text pd-text-orange">1750000</p>
              </div>
              <div class="pd-card-footer pd-text-right">
                <button class="pd-button pd-button-danger pd-button-sm"><span class="pd-icon">shop</span></button>
                <button class="pd-button pd-button-primary pd-button-sm"><span class="pd-icon">shopping_cart</span></button>
                <button class="pd-button pd-button-success pd-button-sm"><span class="pd-icon">bookmark</span></button>
              </div>
            </div>
          </div>
          <div class="pd-list-grid pd-col-md-4">
            <div class="pd-card">
              <img src="https://loremflickr.com/300/200/cat?lock=28" class="pd-card-img-top"/>
              <div class="pd-card-body">
                <b class="pd-card-title">Me O Kitten Persian Cat</b>
                <p class="pd-card-text pd-text-orange">77500</p>
              </div>
              <div class="pd-card-footer pd-text-right">
                <button class="pd-button pd-button-danger pd-button-sm"><span class="pd-icon">shop</span></button>
                <button class="pd-button pd-button-primary pd-button-sm"><span class="pd-icon">shopping_cart</span></button>
                <button class="pd-button pd-button-success pd-button-sm"><span class="pd-icon">bookmark</span></button>
              </div>
            </div>
          </div>
          <div class="pd-list-grid pd-col-md-4">
            <div class="pd-card">
              <img src="https://loremflickr.com/300/200/cat?lock=4" class="pd-card-img-top"/>
              <div class="pd-card-body">
                <b class="pd-card-title">Universal Kitten</b>
                <p class="pd-card-text pd-text-orange">35000</p>
              </div>
              <div class="pd-card-footer pd-text-right">
                <button class="pd-button pd-button-danger pd-button-sm"><span class="pd-icon">shop</span></button>
                <button class="pd-button pd-button-primary pd-button-sm"><span class="pd-icon">shopping_cart</span></button>
                <button class="pd-button pd-button-success pd-button-sm"><span class="pd-icon">bookmark</span></button>
              </div>
            </div>
          </div>
          <div class="pd-list-grid pd-col-md-4">
            <div class="pd-card">
              <img src="https://loremflickr.com/300/200/cat?lock=5" class="pd-card-img-top"/>
              <div class="pd-card-body">
                <b class="pd-card-title">Omega Cat</b>
                <p class="pd-card-text pd-text-orange">19000</p>
              </div>
              <div class="pd-card-footer pd-text-right">
                <button class="pd-button pd-button-danger pd-button-sm"><span class="pd-icon">shop</span></button>
                <button class="pd-button pd-button-primary pd-button-sm"><span class="pd-icon">shopping_cart</span></button>
                <button class="pd-button pd-button-success pd-button-sm"><span class="pd-icon">bookmark</span></button>
              </div>
            </div>
          </div>
          <div class="pd-list-grid pd-col-md-4">
            <div class="pd-card">
              <img src="https://loremflickr.com/300/200/cat?lock=6" class="pd-card-img-top"/>
              <div class="pd-card-body">
                <b class="pd-card-title">Bolt</b>
                <p class="pd-card-text pd-text-orange">19500</p>
              </div>
              <div class="pd-card-footer pd-text-right">
                <button class="pd-button pd-button-danger pd-button-sm"><span class="pd-icon">shop</span></button>
                <button class="pd-button pd-button-primary pd-button-sm"><span class="pd-icon">shopping_cart</span></button>
                <button class="pd-button pd-button-success pd-button-sm"><span class="pd-icon">bookmark</span></button>
              </div>
            </div>
          </div>

          <div class="pd-list-grid pd-col-md-4">
            <div class="pd-card">
              <img src="https://loremflickr.com/300/200/cat?lock=7" class="pd-card-img-top"/>
              <div class="pd-card-body">
                <b class="pd-card-title">Cat Food SUPERCAT</b>
                <p class="pd-card-text pd-text-orange">14750</p>
              </div>
              <div class="pd-card-footer pd-text-right">
                <button class="pd-button pd-button-danger pd-button-sm"><span class="pd-icon">shop</span></button>
                <button class="pd-button pd-button-primary pd-button-sm"><span class="pd-icon">shopping_cart</span></button>
                <button class="pd-button pd-button-success pd-button-sm"><span class="pd-icon">bookmark</span></button>
              </div>
            </div>
          </div>

          <div class="pd-list-grid pd-col-md-4">
            <div class="pd-card">
              <img src="https://loremflickr.com/300/200/cat?lock=8" class="pd-card-img-top"/>
              <div class="pd-card-body">
                <b class="pd-card-title">Momo Cat</b>
                <p class="pd-card-text pd-text-orange">34000</p>
              </div>
              <div class="pd-card-footer pd-text-right">
                <button class="pd-button pd-button-danger pd-button-sm"><span class="pd-icon">shop</span></button>
                <button class="pd-button pd-button-primary pd-button-sm"><span class="pd-icon">shopping_cart</span></button>
                <button class="pd-button pd-button-success pd-button-sm"><span class="pd-icon">bookmark</span></button>
              </div>
            </div>
          </div>

          <div class="pd-list-grid pd-col-md-4">
            <div class="pd-card">
              <img src="https://loremflickr.com/300/200/cat?lock=9" class="pd-card-img-top"/>
              <div class="pd-card-body">
                <b class="pd-card-title">Felibite</b>
                <p class="pd-card-text pd-text-orange">25000</p>
              </div>
              <div class="pd-card-footer pd-text-right">
                <button class="pd-button pd-button-danger pd-button-sm"><span class="pd-icon">shop</span></button>
                <button class="pd-button pd-button-primary pd-button-sm"><span class="pd-icon">shopping_cart</span></button>
                <button class="pd-button pd-button-success pd-button-sm"><span class="pd-icon">bookmark</span></button>
              </div>
            </div>
          </div>

          <div class="pd-list-grid pd-col-md-4">
            <div class="pd-card">
              <img src="https://loremflickr.com/300/200/cat?lock=10" class="pd-card-img-top"/>
              <div class="pd-card-body">
                <b class="pd-card-title">Royal Canin Kitten</b>
                <p class="pd-card-text pd-text-orange">55000</p>
              </div>
              <div class="pd-card-footer pd-text-right">
                <button class="pd-button pd-button-danger pd-button-sm"><span class="pd-icon">shop</span></button>
                <button class="pd-button pd-button-primary pd-button-sm"><span class="pd-icon">shopping_cart</span></button>
                <button class="pd-button pd-button-success pd-button-sm"><span class="pd-icon">bookmark</span></button>
              </div>
            </div>
          </div>

          <div class="pd-list-grid pd-col-md-4">
            <div class="pd-card">
              <img src="https://loremflickr.com/300/200/cat?lock=11" class="pd-card-img-top"/>
              <div class="pd-card-body">
                <b class="pd-card-title">Cat Food</b>
                <p class="pd-card-text pd-text-orange">470000</p>
              </div>
              <div class="pd-card-footer pd-text-right">
                <button class="pd-button pd-button-danger pd-button-sm"><span class="pd-icon">shop</span></button>
                <button class="pd-button pd-button-primary pd-button-sm"><span class="pd-icon">shopping_cart</span></button>
                <button class="pd-button pd-button-success pd-button-sm"><span class="pd-icon">bookmark</span></button>
              </div>
            </div>
          </div>

          <div class="pd-list-grid pd-col-md-4">
            <div class="pd-card">
              <img src="https://loremflickr.com/300/200/cat?lock=12" class="pd-card-img-top"/>
              <div class="pd-card-body">
                <b class="pd-card-title">Maxi</b>
                <p class="pd-card-text pd-text-orange">22500</p>
              </div>
              <div class="pd-card-footer pd-text-right">
                <button class="pd-button pd-button-danger pd-button-sm"><span class="pd-icon">shop</span></button>
                <button class="pd-button pd-button-primary pd-button-sm"><span class="pd-icon">shopping_cart</span></button>
                <button class="pd-button pd-button-success pd-button-sm"><span class="pd-icon">bookmark</span></button>
              </div>
            </div>
          </div>

          <div class="pd-list-grid pd-col-md-4">
            <div class="pd-card">
              <img src="https://loremflickr.com/300/200/cat?lock=13" class="pd-card-img-top"/>
              <div class="pd-card-body">
                <b class="pd-card-title">Whiskas Pouch</b>
                <p class="pd-card-text pd-text-orange">4600</p>
              </div>
              <div class="pd-card-footer pd-text-right">
                <button class="pd-button pd-button-danger pd-button-sm"><span class="pd-icon">shop</span></button>
                <button class="pd-button pd-button-primary pd-button-sm"><span class="pd-icon">shopping_cart</span></button>
                <button class="pd-button pd-button-success pd-button-sm"><span class="pd-icon">bookmark</span></button>
              </div>
            </div>
          </div>

          <div class="pd-list-grid pd-col-md-4">
            <div class="pd-card">
              <img src="https://loremflickr.com/300/200/cat?lock=14" class="pd-card-img-top"/>
              <div class="pd-card-body">
                <b class="pd-card-title">Fancy Feast</b>
                <p class="pd-card-text pd-text-orange">9500</p>
              </div>
              <div class="pd-card-footer pd-text-right">
                <button class="pd-button pd-button-danger pd-button-sm"><span class="pd-icon">shop</span></button>
                <button class="pd-button pd-button-primary pd-button-sm"><span class="pd-icon">shopping_cart</span></button>
                <button class="pd-button pd-button-success pd-button-sm"><span class="pd-icon">bookmark</span></button>
              </div>
            </div>
          </div>

          <div class="pd-list-grid pd-col-md-4">
            <div class="pd-card">
              <img src="https://loremflickr.com/300/200/cat?lock=15" class="pd-card-img-top"/>
              <div class="pd-card-body">
                <b class="pd-card-title">Proplan</b>
                <p class="pd-card-text pd-text-orange">38000</p>
              </div>
              <div class="pd-card-footer pd-text-right">
                <button class="pd-button pd-button-danger pd-button-sm"><span class="pd-icon">shop</span></button>
                <button class="pd-button pd-button-primary pd-button-sm"><span class="pd-icon">shopping_cart</span></button>
                <button class="pd-button pd-button-success pd-button-sm"><span class="pd-icon">bookmark</span></button>
              </div>
            </div>
          </div>

          <div class="pd-list-grid pd-col-md-4">
            <div class="pd-card">
              <img src="https://loremflickr.com/300/200/cat?lock=16" class="pd-card-img-top"/>
              <div class="pd-card-body">
                <b class="pd-card-title">Rawfood</b>
                <p class="pd-card-text pd-text-orange">24000</p>
              </div>
              <div class="pd-card-footer pd-text-right">
                <button class="pd-button pd-button-danger pd-button-sm"><span class="pd-icon">shop</span></button>
                <button class="pd-button pd-button-primary pd-button-sm"><span class="pd-icon">shopping_cart</span></button>
                <button class="pd-button pd-button-success pd-button-sm"><span class="pd-icon">bookmark</span></button>
              </div>
            </div>
          </div>

          <div class="pd-list-grid pd-col-md-4">
            <div class="pd-card">
              <img src="https://loremflickr.com/300/200/cat?lock=17" class="pd-card-img-top"/>
              <div class="pd-card-body">
                <b class="pd-card-title">Vitakraft</b>
                <p class="pd-card-text pd-text-orange">19500</p>
              </div>
              <div class="pd-card-footer pd-text-right">
                <button class="pd-button pd-button-danger pd-button-sm"><span class="pd-icon">shop</span></button>
                <button class="pd-button pd-button-primary pd-button-sm"><span class="pd-icon">shopping_cart</span></button>
                <button class="pd-button pd-button-success pd-button-sm"><span class="pd-icon">bookmark</span></button>
              </div>
            </div>
          </div>

          <div class="pd-list-grid pd-col-md-4">
            <div class="pd-card">
              <img src="https://loremflickr.com/300/200/cat?lock=18" class="pd-card-img-top"/>
              <div class="pd-card-body">
                <b class="pd-card-title">Gojek Jio</b>
                <p class="pd-card-text pd-text-orange">412000</p>
              </div>
              <div class="pd-card-footer pd-text-right">
                <button class="pd-button pd-button-danger pd-button-sm"><span class="pd-icon">shop</span></button>
                <button class="pd-button pd-button-primary pd-button-sm"><span class="pd-icon">shopping_cart</span></button>
                <button class="pd-button pd-button-success pd-button-sm"><span class="pd-icon">bookmark</span></button>
              </div>
            </div>
          </div>

          <div class="pd-list-grid pd-col-md-4">
            <div class="pd-card">
              <img src="https://loremflickr.com/300/200/cat?lock=19" class="pd-card-img-top"/>
              <div class="pd-card-body">
                <b class="pd-card-title">Nekko pouch</b>
                <p class="pd-card-text pd-text-orange">5500</p>
              </div>
              <div class="pd-card-footer pd-text-right">
                <button class="pd-button pd-button-danger pd-button-sm"><span class="pd-icon">shop</span></button>
                <button class="pd-button pd-button-primary pd-button-sm"><span class="pd-icon">shopping_cart</span></button>
                <button class="pd-button pd-button-success pd-button-sm"><span class="pd-icon">bookmark</span></button>
              </div>
            </div>
          </div>

          <div class="pd-list-grid pd-col-md-4">
            <div class="pd-card">
              <img src="https://loremflickr.com/300/200/cat?lock=20" class="pd-card-img-top"/>
              <div class="pd-card-body">
                <b class="pd-card-title">Yummy</b>
                <p class="pd-card-text pd-text-orange">13300</p>
              </div>
              <div class="pd-card-footer pd-text-right">
                <button class="pd-button pd-button-danger pd-button-sm"><span class="pd-icon">shop</span></button>
                <button class="pd-button pd-button-primary pd-button-sm"><span class="pd-icon">shopping_cart</span></button>
                <button class="pd-button pd-button-success pd-button-sm"><span class="pd-icon">bookmark</span></button>
              </div>
            </div>
          </div>

          <div class="pd-list-grid pd-col-md-4">
            <div class="pd-card">
              <img src="https://loremflickr.com/300/200/cat?lock=21" class="pd-card-img-top"/>
              <div class="pd-card-body">
                <b class="pd-card-title">Profelin</b>
                <p class="pd-card-text pd-text-orange">13000</p>
              </div>
              <div class="pd-card-footer pd-text-right">
                <button class="pd-button pd-button-danger pd-button-sm"><span class="pd-icon">shop</span></button>
                <button class="pd-button pd-button-primary pd-button-sm"><span class="pd-icon">shopping_cart</span></button>
                <button class="pd-button pd-button-success pd-button-sm"><span class="pd-icon">bookmark</span></button>
              </div>
            </div>
          </div>

          <div class="pd-list-grid pd-col-md-4">
            <div class="pd-card">
              <img src="https://loremflickr.com/300/200/cat?lock=22" class="pd-card-img-top"/>
              <div class="pd-card-body">
                <b class="pd-card-title">Nature Protection</b>
                <p class="pd-card-text pd-text-orange">120000</p>
              </div>
              <div class="pd-card-footer pd-text-right">
                <button class="pd-button pd-button-danger pd-button-sm"><span class="pd-icon">shop</span></button>
                <button class="pd-button pd-button-primary pd-button-sm"><span class="pd-icon">shopping_cart</span></button>
                <button class="pd-button pd-button-success pd-button-sm"><span class="pd-icon">bookmark</span></button>
              </div>
            </div>
          </div>

          <div class="pd-list-grid pd-col-md-4">
            <div class="pd-card">
              <img src="https://loremflickr.com/300/200/cat?lock=23" class="pd-card-img-top"/>
              <div class="pd-card-body">
                <b class="pd-card-title">Equilibrio Kitten</b>
                <p class="pd-card-text pd-text-orange">430000</p>
              </div>
              <div class="pd-card-footer pd-text-right">
                <button class="pd-button pd-button-danger pd-button-sm"><span class="pd-icon">shop</span></button>
                <button class="pd-button pd-button-primary pd-button-sm"><span class="pd-icon">shopping_cart</span></button>
                <button class="pd-button pd-button-success pd-button-sm"><span class="pd-icon">bookmark</span></button>
              </div>
            </div>
          </div>

          <div class="pd-list-grid pd-col-md-4">
            <div class="pd-card">
              <img src="https://loremflickr.com/300/200/cat?lock=24" class="pd-card-img-top"/>
              <div class="pd-card-body">
                <b class="pd-card-title">Friskies Indoor Delight</b>
                <p class="pd-card-text pd-text-orange">55000</p>
              </div>
              <div class="pd-card-footer pd-text-right">
                <button class="pd-button pd-button-danger pd-button-sm"><span class="pd-icon">shop</span></button>
                <button class="pd-button pd-button-primary pd-button-sm"><span class="pd-icon">shopping_cart</span></button>
                <button class="pd-button pd-button-success pd-button-sm"><span class="pd-icon">bookmark</span></button>
              </div>
            </div>
          </div>

          <div class="pd-list-grid pd-col-md-4">
            <div class="pd-card">
              <img src="https://loremflickr.com/300/200/cat?lock=25" class="pd-card-img-top"/>
              <div class="pd-card-body">
                <b class="pd-card-title">Smart Heart Cat</b>
                <p class="pd-card-text pd-text-orange">30000</p>
              </div>
              <div class="pd-card-footer pd-text-right">
                <button class="pd-button pd-button-danger pd-button-sm"><span class="pd-icon">shop</span></button>
                <button class="pd-button pd-button-primary pd-button-sm"><span class="pd-icon">shopping_cart</span></button>
                <button class="pd-button pd-button-success pd-button-sm"><span class="pd-icon">bookmark</span></button>
              </div>
            </div>
          </div>

          <div class="pd-list-grid pd-col-md-4">
            <div class="pd-card">
              <img src="https://loremflickr.com/300/200/cat?lock=26" class="pd-card-img-top"/>
              <div class="pd-card-body">
                <b class="pd-card-title">Smart Heart Cat</b>
                <p class="pd-card-text pd-text-orange">30000</p>
              </div>
              <div class="pd-card-footer pd-text-right">
                <button class="pd-button pd-button-danger pd-button-sm"><span class="pd-icon">shop</span></button>
                <button class="pd-button pd-button-primary pd-button-sm"><span class="pd-icon">shopping_cart</span></button>
                <button class="pd-button pd-button-success pd-button-sm"><span class="pd-icon">bookmark</span></button>
              </div>
            </div>
          </div>

          <div class="pd-list-grid pd-col-md-4">
            <div class="pd-card">
              <img src="https://loremflickr.com/300/200/cat?lock=27" class="pd-card-img-top"/>
              <div class="pd-card-body">
                <b class="pd-card-title">Good Cat</b>
                <p class="pd-card-text pd-text-orange">315000</p>
              </div>
              <div class="pd-card-footer pd-text-right">
                <button class="pd-button pd-button-danger pd-button-sm"><span class="pd-icon">shop</span></button>
                <button class="pd-button pd-button-primary pd-button-sm"><span class="pd-icon">shopping_cart</span></button>
                <button class="pd-button pd-button-success pd-button-sm"><span class="pd-icon">bookmark</span></button>
              </div>
            </div>
          </div>

        </div>

        <div class="pd-filter-pagination" data-pagination="6"></div>

      </div>
    </div>
  </div>

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

  <footer class="pd-text-center">
    <p>Apache License 2.0 Tedir Ghazali</p>
  </footer>

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
