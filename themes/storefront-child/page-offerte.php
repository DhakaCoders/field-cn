<?php
/*Template Name: Offerte*/
get_header();
$thisID = get_the_ID();
$customtitle = get_field('titel', $thisID);
$pagetitle = !empty($customtitle)?$customtitle:get_the_title($thisID);
$beschrijving = get_field('beschrijving', $thisID);
?>
<section class="breadcrumb-sec hide-sm">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="breadcrumb-cntlr">
          <ul class="reset-list clearfix">
            <li>
              <a href="<?php echo esc_url(home_url('/')); ?>">
                <span><?php _e('Home', 'field'); ?></span>
              </a>
            </li>
            <li class="active">
              <span><?php the_title(); ?></span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="offerte-form-sec-cntlr">
  <section class="page-entry-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="page-entry-hdr-cntlr text-center">
            <?php if( !empty($pagetitle) ) printf('<h1 class="fl-h2 page-entry-hdr-title">%s</h1>', $pagetitle); ?>
            <div class="page-entry-hdr-desc">
              <?php if( !empty($beschrijving) ) echo wpautop( $beschrijving ); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="offerte-form-sec-wrp">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="offerte-form-block clearfix">
            <div class="offerte-form-con-cntlr">
              <div class="offerte-form-con-inner">
                <div class="offerte-form-wrp clearfix">
                  <div class="wpforms-container">
                    <form class="wpforms-form needs-validation" novalidate>

                      <div class="wpforms-page-indicator">
                        <div class="wpforms-page-indicator-page checked">
                          <span class="wpforms-page-indicator-page-number"></span>
                        </div>
                        <div class="wpforms-page-indicator-page active">
                          <span class="wpforms-page-indicator-page-number"></span>
                        </div>
                        <div class="wpforms-page-indicator-page">
                          <span class="wpforms-page-indicator-page-number"></span>
                        </div>
                      </div>
                      
                      <div class="wpforms-field-container">

                        <div class="wpforms-page wpforms-page-1">
                          
                          <div class="wpforms-field XsNameField pjt-name-field">
                            <label class="wpforms-field-label">Naam van het project *</label>
                            <input type="text" name="name" placeholder="Naam club" required>
                            <label id="wpforms-222-field_1-error" class="wpforms-error" for="wpforms-222-field_1">Controleer dit veld</label>
                          </div>
                          <div class="wpforms-field NameField">
                            <label class="wpforms-field-label">Wat zijn de clubkleuren?</label>
                            <input type="text" name="name" placeholder="Jouw antwoord" required>
                            <label id="wpforms-222-field_1-error" class="wpforms-error" for="wpforms-222-field_1">Controleer dit veld</label>
                          </div>

                          <div class="wpforms-field wpforms-field-radio">
                            <label class="wpforms-field-label">Wat is de grootte van uw club/vereniging/school/bedrijf waarvoor u een aanvraag indient?</label>
                            <ul>
                              <li>
                                <input type="radio" value="1 tot 30 personen" name="anyone" id="wpforms-99-field_5_1" required>
                                <label class="wpforms-field-label-inline" for="wpforms-99-field_5_1">1 tot 30 personen</label>
                              </li>
                              <li>
                                <input type="radio" value="30 tot 50 personen" name="anyone" id="wpforms-99-field_5_2" required>
                                <label class="wpforms-field-label-inline" for="wpforms-99-field_5_2">30 tot 50 personen</label>
                              </li>
                              <li>
                                <input type="radio" value="50 tot 100 personen" name="anyone" id="wpforms-99-field_5_3" required>
                                <label class="wpforms-field-label-inline" for="wpforms-99-field_5_3">50 tot 100 personen</label>
                              </li>

                              <li>
                                <input type="radio" value="100 tot 200 personen" name="anyone" id="wpforms-99-field_5_4" required>
                                <label class="wpforms-field-label-inline" for="wpforms-99-field_5_4">100 tot 200 personen</label>
                              </li>

                              <li>
                                <input type="radio" value="200 tot 500 personen" name="anyone" id="wpforms-99-field_5_5" required>
                                <label class="wpforms-field-label-inline" for="wpforms-99-field_5_5">200 tot 500 personen</label>
                              </li>

                              <li>
                                <input type="radio" value="meer dan 500 personen" name="anyone" id="wpforms-99-field_5_6" required>
                                <label class="wpforms-field-label-inline" for="wpforms-99-field_5_6">meer dan 500 personen</label>
                              </li>
                            </ul>
                          </div>

                          <div class="wpforms-field wpforms-field-textarea">
                            <label class="wpforms-field-label">Waarmee kunnen wij u helpen? Wat zijn de details van deze aanvraag? *</label>
                            <textarea name="message" placeholder="It’s all about the details"></textarea>
                          </div>

                          <div class="wpforms-field wpforms-field-file-upload">
                            <label class="wpforms-field-label">Waarmee kunnen wij u helpen? Wat zijn de details van deze aanvraag? *</label>
                            <div class="wpforms-uploader">
                              <div class="dz-message">
                                <i>
                                  <svg class="upload-icon" width="33" height="26" viewBox="0 0 33 26" fill="#E63312">
                                    <use xlink:href="#upload-icon"></use> 
                                  </svg>
                                </i>
                                <span class="upload-title">Choose File</span>
                              </div>
                            </div>
                          </div>

                          <div class="wpforms-field">
                            <label class="wpforms-field-label">Hoeveel shirts/kits wenst u te bestellen?</label>
                            <input type="text" name="text" placeholder="0" required>
                            <label id="wpforms-222-field_1-error" class="wpforms-error" for="wpforms-222-field_1">Controleer dit veld</label>
                          </div>

                        </div>
                        
                        <div class="wpforms-page wpforms-page-2">
                          
                          <div class="wpforms-field wpforms-field-check">
                            <ul>
                              <li>
                                <input type="checkbox" value="Voetbal" name="check" id="wpforms-99-field_5_7" required>
                                <label class="wpforms-field-label-inline" for="wpforms-99-field_5_7">Voetbal</label>
                              </li>
                              <li>
                                <input type="checkbox" value="Basketball" name="check" id="wpforms-99-field_5_8" required>
                                <label class="wpforms-field-label-inline" for="wpforms-99-field_5_8">Basketball</label>
                              </li>
                              <li>
                                <input type="checkbox" value="Volleyball" name="check" id="wpforms-99-field_5_9" required>
                                <label class="wpforms-field-label-inline" for="wpforms-99-field_5_9">Volleyball</label>
                              </li>
                              <li>
                                <input type="checkbox" value="Hockey" name="check" id="wpforms-99-field_5_10" required>
                                <label class="wpforms-field-label-inline" for="wpforms-99-field_5_10">Hockey</label>
                              </li>
                              <li>
                                <input type="checkbox" value="Rugby" name="check" id="wpforms-99-field_5_11" required>
                                <label class="wpforms-field-label-inline" for="wpforms-99-field_5_11">Rugby</label>
                              </li>
                              <li>
                                <input type="checkbox" value="Atletiek" name="check" id="wpforms-99-field_5_12" required>
                                <label class="wpforms-field-label-inline" for="wpforms-99-field_5_12">Atletiek</label>
                              </li>
                              <li>
                                <input type="checkbox" value="Korfbal" name="check" id="wpforms-99-field_5_13" required>
                                <label class="wpforms-field-label-inline" for="wpforms-99-field_5_13">Korfbal</label>
                              </li>
                              <li>
                                <input type="checkbox" value="Andere sport" name="check" id="wpforms-99-field_5_14" required>
                                <label class="wpforms-field-label-inline" for="wpforms-99-field_5_14">Andere sport</label>
                              </li>
                            </ul>
                          </div>

                          <div class="wpforms-field">
                            <label class="wpforms-field-label">Extra info</label>
                            <input type="text" name="text" placeholder="URL Website / Facebook / Instagram" required>
                            <label id="wpforms-222-field_1-error" class="wpforms-error" for="wpforms-222-field_1">Controleer dit veld</label>
                          </div>

                        </div>

                        <div class="wpforms-page wpforms-page-3">
                          
                          <div class="wpforms-field wpforms-field-check">
                            <ul>
                              <li>
                                <input type="checkbox" value="Ik ben een nieuwe klant" name="check" id="wpforms-99-field_5_15" required>
                                <label class="wpforms-field-label-inline" for="wpforms-99-field_5_15">Ik ben een nieuwe klant</label>
                              </li>
                              <li>
                                <input type="checkbox" value="Ik ben een bestaande klant" name="check" id="wpforms-99-field_5_16" required>
                                <label class="wpforms-field-label-inline" for="wpforms-99-field_5_16">Ik ben een bestaande klant</label>
                              </li>
                            </ul>
                          </div>

                          <div class="wpforms-field XsNameField HalfWidthField">
                            <label class="wpforms-field-label">Voornaam</label>
                            <input type="text" name="name" placeholder="Voornaam" required>
                            <label id="wpforms-222-field_1-error" class="wpforms-error" for="wpforms-222-field_1">Controleer dit veld</label>
                          </div>

                          <div class="wpforms-field NameField HalfWidthField">
                            <label class="wpforms-field-label">Achternaam</label>
                            <input type="text" name="name" placeholder="Achternaam" required>
                            <label id="wpforms-222-field_1-error" class="wpforms-error" for="wpforms-222-field_1">Controleer dit veld</label>
                          </div>

                          <div class="wpforms-field HalfWidthField">
                            <label class="wpforms-field-label">Telefoon</label>
                            <input type="text" name="text" placeholder="Telefoon" required>
                            <label id="wpforms-222-field_1-error" class="wpforms-error" for="wpforms-222-field_1">Controleer dit veld</label>
                          </div>

                          <div class="wpforms-field HalfWidthField">
                            <label class="wpforms-field-label">E-mailadres</label>
                            <input type="email" name="email" placeholder="info@" required>
                            <label id="wpforms-222-field_1-error" class="wpforms-error" for="wpforms-222-field_1">Controleer dit veld</label>
                          </div>

                          <div class="wpforms-field wpforms-field-gap">
                            <label class="wpforms-field-label">Wanneer mogen we jou contacteren?</label>
                            <input type="text" name="text" placeholder="" required>
                            <label id="wpforms-222-field_1-error" class="wpforms-error" for="wpforms-222-field_1">Controleer dit veld</label>
                          </div>

                        </div>

                      </div><!-- end of .wpforms-field-container-->


                      <div class="wpforms-submit-container">
                        <button type="submit" name="submit" class="wpforms-submit lft-angle-transparent">Terug</button>
                        <button type="submit" name="submit" class="wpforms-submit rgt-angle-bg">Volgende</button>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>   
          </div>
        </div>
      </div>
    </div>
  </section>

</div>
<?php get_footer(); ?>