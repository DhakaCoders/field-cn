<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="theme-color" content="#E63312">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php $favicon = get_theme_mod('favicon'); if(!empty($favicon)) { ?> 
<link rel="shortcut icon" href="<?php echo $favicon; ?>" />
<?php } ?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->	
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<svg style="display: none;">
<symbol id="square-red-icon" width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M10.0148 9.3667H0V0H10.0148V9.3667ZM1.13216 8.24981H8.89081V1.11688H1.13216V8.24981Z" fill="#E63312"/>
</symbol>
<symbol id="right-arrow-white-icon" width="33" height="18" viewBox="0 0 33 18" xmlns="http://www.w3.org/2000/svg">
  <path d="M1.56855 10.4905H27.8831L22.9531 15.413C21.537 16.8268 23.6612 18.9476 25.0772 17.5337L29.5671 13.0438L32.5643 10.0464C33.1452 9.463 33.1452 8.5207 32.5643 7.93725L25.0772 0.452911C24.7924 0.160647 24.4003 -0.00334025 23.9918 5.15908e-05C22.6433 0.000221183 21.9815 1.64018 22.9531 2.57384L27.8948 7.49629H1.49101C-0.585803 7.59918 -0.430736 10.5937 1.56855 10.4905Z"/>
</symbol>
  <symbol id="ftr-facebook-icon" width="24" height="25" viewBox="0 0 24 25" xmlns="http://www.w3.org/2000/svg">
  <g clip-path="url(#clip0_14230_4838)">
    <path d="M13.5 8.75V5.75C13.5 4.922 14.172 4.25 15 4.25H16.5V0.5H13.5C11.0145 0.5 9 2.5145 9 5V8.75H6V12.5H9V24.5H13.5V12.5H16.5L18 8.75H13.5Z"/>
  </g>
  <defs>
    <clipPath id="clip0_14230_4838">
      <rect width="24" height="24" transform="translate(0 0.5)"/>
    </clipPath>
  </defs>
</symbol>
<symbol id="ftr-instagram-icon" width="24" height="25" viewBox="0 0 24 25" xmlns="http://www.w3.org/2000/svg">
  <g clip-path="url(#clip0_14230_4842)">
    <path d="M16.5 0.5H7.5C3.3585 0.5 0 3.8585 0 8V17C0 21.1415 3.3585 24.5 7.5 24.5H16.5C20.6415 24.5 24 21.1415 24 17V8C24 3.8585 20.6415 0.5 16.5 0.5ZM21.75 17C21.75 19.895 19.395 22.25 16.5 22.25H7.5C4.605 22.25 2.25 19.895 2.25 17V8C2.25 5.105 4.605 2.75 7.5 2.75H16.5C19.395 2.75 21.75 5.105 21.75 8V17Z"/>
    <path d="M12 6.5C8.6865 6.5 6 9.1865 6 12.5C6 15.8135 8.6865 18.5 12 18.5C15.3135 18.5 18 15.8135 18 12.5C18 9.1865 15.3135 6.5 12 6.5ZM12 16.25C9.933 16.25 8.25 14.567 8.25 12.5C8.25 10.4315 9.933 8.75 12 8.75C14.067 8.75 15.75 10.4315 15.75 12.5C15.75 14.567 14.067 16.25 12 16.25Z"/>
    <path d="M18.4501 6.84949C18.8917 6.84949 19.2496 6.49154 19.2496 6.04999C19.2496 5.60844 18.8917 5.25049 18.4501 5.25049C18.0086 5.25049 17.6506 5.60844 17.6506 6.04999C17.6506 6.49154 18.0086 6.84949 18.4501 6.84949Z"/>
  </g>
  <defs>
    <clipPath id="clip0_14230_4842">
      <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
    </clipPath>
  </defs>
</symbol>
<symbol id="cntct-tel-icon" width="18" height="30" viewBox="0 0 18 30" xmlns="http://www.w3.org/2000/svg">
  <path d="M15 0H3C1.34643 0 0 1.34643 0 3V27C0 28.6548 1.34643 30 3 30H15C16.6548 30 18 28.6548 18 27V3C18 1.34643 16.6548 0 15 0ZM16.8 27C16.8 27.9924 15.9924 28.8 15 28.8H3C2.0076 28.8 1.2 27.9924 1.2 27V3C1.2 2.0076 2.0076 1.2 3 1.2H15C15.9924 1.2 16.8 2.0076 16.8 3V27Z"/>
  <path d="M10.2012 2.40001H7.80117C7.46994 2.40001 7.20117 2.66884 7.20117 3.00001C7.20117 3.33118 7.47 3.60001 7.80117 3.60001H10.2012C10.5323 3.60001 10.8012 3.33118 10.8012 3.00001C10.8012 2.66884 10.5323 2.40001 10.2012 2.40001Z"/>
  <path d="M9.0004 26.4C8.66922 26.4 8.40039 26.6688 8.40039 27C8.40039 27.3312 8.66922 27.6 9.0004 27.6C9.33157 27.6 9.6004 27.3312 9.6004 27C9.6004 26.6688 9.33157 26.4 9.0004 26.4Z"/>
  <path d="M17.4 4.8H0.6C0.268769 4.8 0 5.06883 0 5.4C0 5.73123 0.268769 6 0.6 6H17.4C17.7312 6 18 5.73117 18 5.4C18 5.06883 17.7312 4.8 17.4 4.8Z"/>
  <path d="M17.4 24H0.6C0.268769 24 0 24.2688 0 24.6C0 24.9312 0.268769 25.2 0.6 25.2H17.4C17.7312 25.2 18 24.9312 18 24.6C18 24.2688 17.7312 24 17.4 24Z"/>         
</symbol>
<symbol id="btn-right-arrow" width="16" height="9" viewBox="0 0 16 9" xmlns="http://www.w3.org/2000/svg">
  <path d="M0.760508 5.09412H13.5191L11.1288 7.48443C10.4422 8.171 11.4721 9.20083 12.1587 8.51425L14.3356 6.33397L15.7888 4.87849C16.0704 4.59517 16.0704 4.13759 15.7888 3.85427L12.1587 0.21993C12.0206 0.0780093 11.8304 -0.001622 11.6324 2.50521e-05C10.9786 0.000107405 10.6577 0.796462 11.1288 1.24984L13.5247 3.64015H0.722916C-0.284026 3.69011 -0.208842 5.14425 0.760508 5.09412Z"/>
</symbol>
<symbol id="upload-icon" width="33" height="26" viewBox="0 0 33 26" xmlns="http://www.w3.org/2000/svg">
  <path d="M23.2253 11.7982C23.0473 11.8961 22.9259 12.0711 22.8879 12.2849C22.8498 12.4986 22.8982 12.7335 23.0225 12.9379C23.892 14.3684 24.2308 16.0126 23.9645 17.5087C23.6981 19.0049 22.8484 20.2304 21.6022 20.9156C21.0006 21.2494 20.322 21.4445 19.6047 21.4897C19.4996 21.4968 19.4004 21.526 19.3126 21.5756C19.2248 21.6251 19.1501 21.6941 19.0929 21.7785C19.0357 21.863 18.9971 21.9612 18.9792 22.0677C18.9613 22.1742 18.9645 22.2868 18.9886 22.399C19.0128 22.5113 19.0574 22.6211 19.1199 22.7221C19.1824 22.8231 19.2616 22.9134 19.3529 22.9877C19.4443 23.0621 19.546 23.1191 19.6523 23.1555C19.7586 23.1919 19.8674 23.2069 19.9724 23.1998C21.1481 23.1206 22.2396 22.7341 23.151 22.0741C24.0625 21.4142 24.7659 20.501 25.1997 19.4148C25.6334 18.3286 25.7841 17.1027 25.6386 15.8446C25.493 14.5866 25.0557 13.3349 24.365 12.1996C24.2407 11.9953 24.0509 11.8382 23.8372 11.7629C23.6235 11.6876 23.4034 11.7003 23.2253 11.7982Z"/>
  <path d="M13.4418 18.7576L10.8154 14.364C10.6993 14.1698 10.5219 14.0205 10.3221 13.949C10.1224 13.8774 9.91672 13.8895 9.75035 13.9825C9.58398 14.0756 9.47054 14.2419 9.43499 14.445C9.39944 14.6482 9.44469 14.8714 9.56078 15.0656L12.1872 19.4591C13.0904 20.9559 14.4016 22.162 15.9062 22.8802C16.0161 22.9321 16.1316 22.9588 16.2443 22.9584C16.357 22.9579 16.464 22.9303 16.5575 22.8775C16.7016 22.7979 16.8071 22.663 16.8564 22.4954C16.8847 22.3989 16.8936 22.2943 16.8826 22.1874C16.8717 22.0806 16.841 21.9737 16.7924 21.8729C16.7437 21.772 16.6782 21.6793 16.5994 21.5999C16.5206 21.5205 16.4302 21.4561 16.3333 21.4103C15.1613 20.8603 14.14 19.9233 13.4418 18.7576Z"/>
  <path d="M19.5259 4.6356C19.3605 4.72834 19.2477 4.8942 19.2124 5.09668C19.1771 5.29916 19.2221 5.52168 19.3374 5.71528L21.9481 10.0952C22.0635 10.2888 22.2398 10.4377 22.4384 10.509C22.6369 10.5803 22.8413 10.5683 23.0067 10.4755C23.1721 10.3828 23.2848 10.2169 23.3202 10.0144C23.3555 9.81197 23.3105 9.58945 23.1951 9.39584L20.5845 5.0159C20.4691 4.82229 20.2927 4.67346 20.0942 4.60214C19.8957 4.53082 19.6912 4.54286 19.5259 4.6356Z"/>
  <path d="M12.988 11.3157C12.8155 11.4109 12.6978 11.5811 12.661 11.7889C12.6241 11.9967 12.671 12.225 12.7914 12.4237L15.5147 16.9185C15.9962 17.7132 16.7322 18.3242 17.5606 18.6169C18.3891 18.9097 19.2422 18.8603 19.9323 18.4796C20.6224 18.0989 21.0929 17.4181 21.2404 16.587C21.3879 15.7559 21.2003 14.8425 20.7187 14.0477L16.4068 6.93099C15.6243 5.63956 14.4285 4.64677 13.0822 4.17101C11.736 3.69526 10.3497 3.77552 9.22827 4.39413C8.10686 5.01275 7.34222 6.11905 7.10255 7.46965C6.86288 8.82026 7.16781 10.3045 7.95028 11.596C8.07065 11.7947 8.25464 11.9474 8.46175 12.0206C8.66886 12.0938 8.88214 12.0814 9.05467 11.9863C9.22719 11.8911 9.34483 11.7209 9.3817 11.5131C9.41857 11.3053 9.37166 11.077 9.25128 10.8783C8.70958 9.98421 8.49847 8.95663 8.66439 8.0216C8.83032 7.08656 9.35968 6.32067 10.136 5.8924C10.9124 5.46412 11.8722 5.40856 12.8042 5.73793C13.7362 6.0673 14.5641 6.75461 15.1058 7.64868L19.4177 14.7654C19.6585 15.1628 19.7523 15.6195 19.6786 16.0351C19.6048 16.4506 19.3696 16.791 19.0245 16.9814C18.6795 17.1717 18.2529 17.1964 17.8387 17.05C17.4245 16.9036 17.0565 16.5982 16.8157 16.2008L14.0924 11.706C13.972 11.5073 13.788 11.3546 13.5809 11.2814C13.3738 11.2082 13.1605 11.2206 12.988 11.3157Z" fill="#E63312"/>
</symbol> 
<symbol id="user-icon-svg" width="12" height="14" viewBox="0 0 12 14" xmlns="http://www.w3.org/2000/svg">
  <path d="M8.87541 6.75964C9.55359 6.04844 9.97164 5.08693 9.97164 4.02828C9.97164 1.84772 8.20978 0 6.0094 0C3.82553 0 1.98112 1.84441 1.98112 4.02828C1.98112 5.05451 2.38331 6.02327 3.11367 6.76757C1.30228 7.78322 0 9.73264 0 12.0189V13.0094C0 13.5562 0.4438 14 0.990559 14H10.9623C11.509 14 11.9528 13.5562 11.9528 13.0094V12.0189C11.9528 9.77755 10.72 7.79775 8.87541 6.75964ZM6.0094 1.98119C7.08317 1.98119 7.99052 2.91891 7.99052 4.02835C7.99052 5.12062 7.10166 6.00947 6.0094 6.00947C4.89996 6.00947 3.96224 5.10212 3.96224 4.02835C3.96224 2.93807 4.91912 1.98119 6.0094 1.98119ZM1.98112 12.0189C1.98112 9.83501 3.82553 7.99059 6.0094 7.99059C8.19393 7.99059 9.97164 9.79736 9.97164 12.0189H1.98112Z"/>
</symbol>
<symbol id="slider-lft-arrow-svg" width="44" height="24" viewBox="0 0 44 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M41.8444 13.9873H6.8122L13.3754 20.5506C15.2606 22.4358 12.4328 25.2635 10.5476 23.3783L4.57026 17.3917L0.580097 13.3953C-0.193233 12.6173 -0.193233 11.3609 0.580097 10.583L10.5476 0.603881C10.9268 0.214196 11.4488 -0.00445366 11.9926 6.87877e-05C13.7879 0.00029491 14.6689 2.18691 13.3754 3.43179L6.79662 9.99506H41.9476C44.7125 10.1322 44.5061 14.125 41.8444 13.9873Z"/>
</symbol>
<symbol id="slider-rgt-arrow-svg" width="44" height="24" viewBox="0 0 44 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M2.08819 13.9873H37.1204L30.5572 20.5506C28.672 22.4358 31.4998 25.2635 33.385 23.3783L39.3624 17.3917L43.3525 13.3953C44.1259 12.6173 44.1259 11.3609 43.3525 10.583L33.385 0.603881C33.0058 0.214196 32.4838 -0.00445366 31.94 6.87877e-05C30.1447 0.00029491 29.2637 2.18691 30.5572 3.43179L37.136 9.99506H1.98497C-0.779873 10.1322 -0.573434 14.125 2.08819 13.9873Z"/>
</symbol>
<symbol id="facebook-svg" width="10" height="18" viewBox="0 0 10 18" xmlns="http://www.w3.org/2000/svg">
  <path d="M6.125 6.1875V3.9375C6.125 3.3165 6.629 2.8125 7.25 2.8125H8.375V0H6.125C4.26087 0 2.75 1.51088 2.75 3.375V6.1875H0.5V9H2.75V18H6.125V9H8.375L9.5 6.1875H6.125Z"/>
</symbol>
<symbol id="instagram-svg" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
  <path d="M12.375 0H5.625C2.51888 0 0 2.51888 0 5.625V12.375C0 15.4811 2.51888 18 5.625 18H12.375C15.4811 18 18 15.4811 18 12.375V5.625C18 2.51888 15.4811 0 12.375 0ZM16.3125 12.375C16.3125 14.5463 14.5463 16.3125 12.375 16.3125H5.625C3.45375 16.3125 1.6875 14.5463 1.6875 12.375V5.625C1.6875 3.45375 3.45375 1.6875 5.625 1.6875H12.375C14.5463 1.6875 16.3125 3.45375 16.3125 5.625V12.375Z"/>
  <path d="M9 4.5C6.51487 4.5 4.5 6.51487 4.5 9C4.5 11.4851 6.51487 13.5 9 13.5C11.4851 13.5 13.5 11.4851 13.5 9C13.5 6.51487 11.4851 4.5 9 4.5ZM9 11.8125C7.44975 11.8125 6.1875 10.5503 6.1875 9C6.1875 7.44863 7.44975 6.1875 9 6.1875C10.5503 6.1875 11.8125 7.44863 11.8125 9C11.8125 10.5503 10.5503 11.8125 9 11.8125Z"/>
  <path d="M13.8375 4.76212C14.1687 4.76212 14.4372 4.49366 14.4372 4.16249C14.4372 3.83133 14.1687 3.56287 13.8375 3.56287C13.5064 3.56287 13.2379 3.83133 13.2379 4.16249C13.2379 4.49366 13.5064 4.76212 13.8375 4.76212Z"/>
</symbol>
<symbol id="xs-facebook-svg" width="12" height="24" viewBox="0 0 12 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M7.5 8.25V5.25C7.5 4.422 8.172 3.75 9 3.75H10.5V0H7.5C5.0145 0 3 2.0145 3 4.5V8.25H0V12H3V24H7.5V12H10.5L12 8.25H7.5Z"/>
</symbol>
<symbol id="xs-instragram-svg" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M16.5 0H7.5C3.3585 0 0 3.3585 0 7.5V16.5C0 20.6415 3.3585 24 7.5 24H16.5C20.6415 24 24 20.6415 24 16.5V7.5C24 3.3585 20.6415 0 16.5 0ZM21.75 16.5C21.75 19.395 19.395 21.75 16.5 21.75H7.5C4.605 21.75 2.25 19.395 2.25 16.5V7.5C2.25 4.605 4.605 2.25 7.5 2.25H16.5C19.395 2.25 21.75 4.605 21.75 7.5V16.5Z"/>
  <path d="M12 6C8.6865 6 6 8.6865 6 12C6 15.3135 8.6865 18 12 18C15.3135 18 18 15.3135 18 12C18 8.6865 15.3135 6 12 6ZM12 15.75C9.933 15.75 8.25 14.067 8.25 12C8.25 9.9315 9.933 8.25 12 8.25C14.067 8.25 15.75 9.9315 15.75 12C15.75 14.067 14.067 15.75 12 15.75Z"/>
  <path d="M18.4501 6.34949C18.8916 6.34949 19.2496 5.99154 19.2496 5.54999C19.2496 5.10844 18.8916 4.75049 18.4501 4.75049C18.0085 4.75049 17.6506 5.10844 17.6506 5.54999C17.6506 5.99154 18.0085 6.34949 18.4501 6.34949Z"/>
</symbol>
</svg>
<?php 
  $topbartekst = get_field('topbartekst', 'options');
  $logoObj = get_field('hdlogo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
  $fb_url = get_field('facebook_url', 'options');
  $inst_url = get_field('instagram_url', 'options');
?>  
<div class="page-body-cntlr">
<?php if( is_front_page() && $topbartekst ): ?>
  <section class="home-messege d-none">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="home-messege-inr">
            <?php if( !empty($topbartekst) ) echo wpautop( $topbartekst  ); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<div class="bdoverlay"></div>
<header class="header hdr-border-none ">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="header-inr clearfix">
            <div class="hdr-lft">
              <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php echo $logo_tag; ?>
                </a>
              </div>
            </div>
            <div class="hdr-rgt hide-sm">
              <div class="hdr-top-bar">
                <div class="hdr-account">
                  <a href="<?php echo get_permalink( wc_get_page_id( 'myaccount' ) ); ?>"><?php _e('Mijn account', 'field'); ?>
                    <i>
                      <svg class="user-icon-svg" width="12" height="14" viewBox="0 0 12 14" fill="#7D8D98">
                        <use xlink:href="#user-icon-svg"></use> 
                      </svg>
                    </i>
                  </a>
                </div>
                <div class="hdr-social-media">
                  <ul class="reset-list">
                    <?php if( !empty($fb_url) ): ?>
                    <li class="facebook">
                      <a href="<?php echo $fb_url; ?>" target="_blank">
                        <i>
                          <svg class="facebook-svg" width="10" height="18" viewBox="0 0 10 18" fill="#7D8D98">
                            <use xlink:href="#facebook-svg"></use> 
                          </svg>
                        </i>
                      </a>
                    </li>
                    <?php endif;
                    if( !empty($inst_url) ):
                    ?>
                    <li class="instagram">
                      <a href="<?php echo $inst_url; ?>" target="_blank">
                        <i>
                          <svg class="instagram-svg" width="18" height="18" viewBox="0 0 18 18" fill="#7D8D98">
                            <use xlink:href="#instagram-svg"></use> 
                          </svg>
                        </i>
                      </a>
                    </li>
                    <?php endif; ?>
                  </ul>
                </div>
                <div class="hdr-lang-cntlr">
                  <div class="hdr-lang">
                    <ul class="reset-list">
                      <li class="active"><a href="#">NL</a></li>
                      <li><a href="#">EN</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="hdr-main-menu">
                <nav class="main-nav">
                  <?php 
                    $mmenuOptions = array( 
                        'theme_location' => 'cbv_main_menu', 
                        'menu_class' => 'clearfix reset-list',
                        'container' => '',
                        'container_class' => ''
                      );
                    wp_nav_menu( $mmenuOptions ); 
                  ?>
                </nav>
              </div>
            </div>
            <div class="hamburgar-cntlr show-sm">
              <div class="hamburgar">
                <div class="hamburger-icon">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</header>


<div class="xs-mobile-menu ">
  <div class="xs-pop-up-menu-top">
    <div class="logo">
    <a href="<?php echo esc_url(home_url('/')); ?>">
      <?php echo $logo_tag; ?>
    </a>
    </div>
    <div class="hamburgar-cntlr show-sm">
      <div class="hamburgar">
        <div class="hamburger-icon">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
  </div>
  <div class="xs-menu">
    <div class="hdr-menu">
      <nav class="main-nav">
        <?php 
          $menuOptions = array( 
              'theme_location' => 'cbv_mobile_main_menu', 
              'menu_class' => 'reset-list clearfix',
              'container' => 'ul',
              'container_class' => ''
            );
          wp_nav_menu( $menuOptions ); 
        ?>
      </nav>
    </div>
    <div class="hdr-account">
      <a href="<?php echo get_permalink( wc_get_page_id( 'myaccount' ) ); ?>"><?php _e('Mijn account', 'field'); ?>
        <i>
          <svg class="user-icon-svg" width="12" height="14" viewBox="0 0 12 14" fill="#7D8D98">
            <use xlink:href="#user-icon-svg"></use> 
          </svg>
        </i>
      </a>
    </div>
    <div class="xs-contact-btn">
      <a href="<?php echo get_link_by_page_template('page-contact.php'); ?>" class="fl-btn fl-btn-angel"><?php _e('Contact', 'field'); ?></a>
    </div>
    <div class="xs-btm-menu">
      <div class="hdr-lang-cntlr">
        <div class="hdr-lang">
          <ul class="reset-list">
            <li class="active"><a href="#">NL</a></li>
            <li><a href="#">EN</a></li>
          </ul>
        </div>
      </div>
      <div class="xs-hdr-social-media">
        <div class="hdr-social-media">
          <ul class="reset-list">
            <?php if( !empty($fb_url) ): ?>
            <li class="facebook">
              <a href="<?php echo $fb_url; ?>" target="_blank">
                <i>
                  <svg class="facebook-svg" width="10" height="18" viewBox="0 0 10 18" fill="#7D8D98">
                    <use xlink:href="#facebook-svg"></use> 
                  </svg>
                </i>
              </a>
            </li>
            <?php endif;
            if( !empty($inst_url) ):
            ?>
            <li class="instagram">
              <a href="<?php echo $inst_url; ?>" target="_blank">
                <i>
                  <svg class="instagram-svg" width="18" height="18" viewBox="0 0 18 18" fill="#7D8D98">
                    <use xlink:href="#instagram-svg"></use> 
                  </svg>
                </i>
              </a>
            </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>