<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="img/JDlogos.png" />
<title>The Fashion Show</title>
    <meta property="og:title" content="The fashion show" />
    <meta name="description" content="fashion show in nagpur" />
    <meta name="description" content="jai deshmukh fashion event" />
    <meta name="description" content="the fashion fair" />
    <meta name="description" content="the fashion show" />
    <meta name="description" content="fashion show near me" />
    <meta name="description" content="fashion event" />
    <meta name="description" content="jdfashionfair.com" />
    <meta name="description" content="jdfashionfair" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="stylesheet" href="css\bootstrap.css">
<link rel="stylesheet" href="css\font-awesome.min.css">
<link rel="stylesheet" href="css\style.css">
<link href="https://fonts.googleapis.com/css?family=Joti+One" rel="stylesheet">
<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
<link href="css/photoswipe.css" rel="stylesheet"/>
<!-- Skin CSS file (styling of UI - buttons, caption, etc.)
     In the folder of skin CSS file there are also:
     - .png and .svg icons sprite, 
     - preloader.gif (for browsers that do not support CSS animations) -->
      <link rel="stylesheet" href="css/default-skin.css"/> 

</head>
<body id="home">
  <nav class="navbar navbar-toggleable-md navbar-light fixed-top py-4">
      <div class="container">
         <button class="navbar-toggler navbar-toggler-right"><span class="navbar-toggler-icon" data-toggle="collapse" data-target="#navbarNav"></span></button>
        <a href="#" class="navbar-brand">
          <img src="img/JDlogos.png" width="150" height="50" alt=""> <h4 class="d-inline align-middle"><small>Presents </small>The Fashion Show</h4>
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="index.php" class="nav-link">About</a>
            </li>
            <li class="nav-item">
                <a href="index.php" class="nav-link">Meet The Sopnsers</a>
            </li>
            <li class="nav-item">
              <a href="index.php" class="nav-link">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- PHOTO GALLERY -->
    <!-- PHOTO GALLERY -->
    <section id="gallery" class="py-5">
        <div  class="container">
            <div  data-aos="fade-right" class="info-header mb-5 text-center">
          <h1 class="text-primary pb-3">
            Gallery
          </h1>
            <p class="lead pb-3"> Miscellaneous Movements</p>
        </div>

            <div class="row">
                <div class="">
                <div data-aos="fade-up"
     data-aos-duration="3000" class="my-gallery" itemscope itemtype="">
           
                    <?php
                    $resource = opendir("gallery");
                    while(($entery = readdir($resource) ) !== FALSE ){
                        if($entery !== '_' && $entery !== '..' && $entery !== '.'){
                            
                        
                            ?>
                                    <figure itemprop="associatedMedia" itemscope itemtype="">
                                        <a href="gallery/<?php echo $entery; ?>" itemprop="contentUrl" data-size="720x800">
                                            <img class="embed-responsive-item"  src="gallery/<?php echo $entery; ?>" itemprop="thumbnail" alt="Image description" />
                                        </a>
                                    </figure>        
                    
                    
                    <?php
                        }
                    }
                    ?>
                    
                </div>    
                </div>     
                
            </div>
        </div>
    </section>

<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe. 
         It's a separate element, as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
        <!-- don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" title="Share"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div> 
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"> 
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"> 
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

          </div>

        </div>

</div>


    
<footer id="main-footer" class="py-5 bg-primary text-white">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-6">
        <h3 class="lead">Contact info</h3>
                    <div class="d-flex flex-column row-h1">
                        <div class="p-2 item-hl">
                            <i class="fa fa-phone news-letter-col-2" aria-hidden="true"></i> 9096160005 <br>
                            <i class="fa fa-phone news-letter-col-2" aria-hidden="true"></i> 9766761308 <br>
                        </div>
                        <div class="p-2 item-hl "><i class="fa fa-envelope news-letter-col-2" aria-hidden="true"></i> 
                        jaykumar.deshmukh@gmail.com
                        <br>
                        response@jdfashionfair.com
                        </div>
                        <div class="p-2 item-hl ">
                            <i class="fa fa-map-marker news-letter-col-2" aria-hidden="true"></i>  Scientific Hall, Laxminagar,Nagpur
                        </div>
                    </div>
      </div>
       <div class="col-md-6">
        <p class="lead">Copyright &copy; <?php echo date('Y'); ?> JDeshmukh</p>
      </div>
    </div>
  </div>
</footer>
 <script type="text/javascript" src="js/jquery.min.js"></script>   
<script type="text/javascript" src="js/tether.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/navbar-fixed.js"></script>
 <script type="text/javascript" src="js/jquery.min.js"></script>
  
  <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
   <script>
    AOS.init();
  </script>
  
  <script>
  var initPhotoSwipeFromDOM = function(gallerySelector) {

    // parse slide data (url, title, size ...) from DOM elements 
    // (children of gallerySelector)
    var parseThumbnailElements = function(el) {
        var thumbElements = el.childNodes,
            numNodes = thumbElements.length,
            items = [],
            figureEl,
            linkEl,
            size,
            item;

        for(var i = 0; i < numNodes; i++) {

            figureEl = thumbElements[i]; // <figure> element

            // include only element nodes 
            if(figureEl.nodeType !== 1) {
                continue;
            }

            linkEl = figureEl.children[0]; // <a> element

            size = linkEl.getAttribute('data-size').split('x');

            // create slide object
            item = {
                src: linkEl.getAttribute('href'),
                w: parseInt(size[0], 10),
                h: parseInt(size[1], 10)
            };



            if(figureEl.children.length > 1) {
                // <figcaption> content
                item.title = figureEl.children[1].innerHTML; 
            }

            if(linkEl.children.length > 0) {
                // <img> thumbnail element, retrieving thumbnail url
                item.msrc = linkEl.children[0].getAttribute('src');
            } 

            item.el = figureEl; // save link to element for getThumbBoundsFn
            items.push(item);
        }

        return items;
    };

    // find nearest parent element
    var closest = function closest(el, fn) {
        return el && ( fn(el) ? el : closest(el.parentNode, fn) );
    };

    // triggers when user clicks on thumbnail
    var onThumbnailsClick = function(e) {
        e = e || window.event;
        e.preventDefault ? e.preventDefault() : e.returnValue = false;

        var eTarget = e.target || e.srcElement;

        // find root element of slide
        var clickedListItem = closest(eTarget, function(el) {
            return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
        });

        if(!clickedListItem) {
            return;
        }

        // find index of clicked item by looping through all child nodes
        // alternatively, you may define index via data- attribute
        var clickedGallery = clickedListItem.parentNode,
            childNodes = clickedListItem.parentNode.childNodes,
            numChildNodes = childNodes.length,
            nodeIndex = 0,
            index;

        for (var i = 0; i < numChildNodes; i++) {
            if(childNodes[i].nodeType !== 1) { 
                continue; 
            }

            if(childNodes[i] === clickedListItem) {
                index = nodeIndex;
                break;
            }
            nodeIndex++;
        }



        if(index >= 0) {
            // open PhotoSwipe if valid index found
            openPhotoSwipe( index, clickedGallery );
        }
        return false;
    };

    // parse picture index and gallery index from URL (#&pid=1&gid=2)
    var photoswipeParseHash = function() {
        var hash = window.location.hash.substring(1),
        params = {};

        if(hash.length < 5) {
            return params;
        }

        var vars = hash.split('&');
        for (var i = 0; i < vars.length; i++) {
            if(!vars[i]) {
                continue;
            }
            var pair = vars[i].split('=');  
            if(pair.length < 2) {
                continue;
            }           
            params[pair[0]] = pair[1];
        }

        if(params.gid) {
            params.gid = parseInt(params.gid, 10);
        }

        return params;
    };

    var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
        var pswpElement = document.querySelectorAll('.pswp')[0],
            gallery,
            options,
            items;

        items = parseThumbnailElements(galleryElement);

        // define options (if needed)
        options = {

            // define gallery index (for URL)
            galleryUID: galleryElement.getAttribute('data-pswp-uid'),

            getThumbBoundsFn: function(index) {
                // See Options -> getThumbBoundsFn section of documentation for more info
                var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
                    pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                    rect = thumbnail.getBoundingClientRect(); 

                return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
            }

        };

        // PhotoSwipe opened from URL
        if(fromURL) {
            if(options.galleryPIDs) {
                // parse real index when custom PIDs are used 
                // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
                for(var j = 0; j < items.length; j++) {
                    if(items[j].pid == index) {
                        options.index = j;
                        break;
                    }
                }
            } else {
                // in URL indexes start from 1
                options.index = parseInt(index, 10) - 1;
            }
        } else {
            options.index = parseInt(index, 10);
        }

        // exit if index not found
        if( isNaN(options.index) ) {
            return;
        }

        if(disableAnimation) {
            options.showAnimationDuration = 0;
        }

        // Pass data to PhotoSwipe and initialize it
        gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
        gallery.init();
    };

    // loop through all gallery elements and bind events
    var galleryElements = document.querySelectorAll( gallerySelector );

    for(var i = 0, l = galleryElements.length; i < l; i++) {
        galleryElements[i].setAttribute('data-pswp-uid', i+1);
        galleryElements[i].onclick = onThumbnailsClick;
    }

    // Parse URL and open gallery if it contains #&pid=3&gid=1
    var hashData = photoswipeParseHash();
    if(hashData.pid && hashData.gid) {
        openPhotoSwipe( hashData.pid ,  galleryElements[ hashData.gid - 1 ], true, true );
    }
};

// execute above function
initPhotoSwipeFromDOM('.my-gallery');    
  </script>
      <script src="js/photoswipe.js"></script>
    
    <!-- Core JS file -->
<script src="js/photoswipe.min.js"></script> 

<!-- UI JS file -->
<script src="js/photoswipe-ui-default.min.js"></script> 

  
</body>
</html>

</body>
</html>
