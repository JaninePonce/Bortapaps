<?php include 'components/header.php' ?>

<body>
<style>
    
@keyframes banner_loop {
    0% {background-image: url(resources/newarrival_yellow.jpg);}
    25% {background-image: url(resources/newarrival_bw.jpg);}
    50% {background-image: url(resources/newarrival_grey.jpg);}
    75% {background-image: url(resources/newarrival_orange.jpg);}
    100%{background-image: url(resources/newarrival_yellow.jpg);}
  }

  .banner-section {
    width: 100%;
    height: 55dvh;
    background-size: contain;

    animation-name: banner_loop;
    animation-duration: 4s;
    animation-iteration-count: infinite;
    cursor: pointer;

  }
</style>
<div class="banner-section"></div>

<section class="item-section">
    <?php include 'items/item-maker.php' ?>
</section>


<?php include 'components/footer.php' ?>
<script>
    $(".banner-section").click(function(){
        window.location.href = "items.php?category=New Arrival";
    })
</script>
</body>