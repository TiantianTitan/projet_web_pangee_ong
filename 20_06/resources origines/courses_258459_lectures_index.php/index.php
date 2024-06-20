<?php 
include("php/dbconnect.php");
require_once('config.php'); 
include("constant/connect.php");
$zo=$_GET['vid'];
$mat=$_GET['pro'];
$id=$_SESSION['userId'];;

$mainSql = "SELECT * FROM visionnage where idcl='$id'and idcour='$mat' and idchp='$zo'";
      $mainResult = $connect->query($mainSql);

      if($mainResult->num_rows >= 0) {
        $value = $mainResult->fetch_assoc();

  
  $num= $value['num'];
   
      } 

?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<div>
   <div id="here"> </div>
   <div>
     <?php 
    
   if($num <= 100) {
  
  $sql = $conn->query("UPDATE  visionnage  SET num = num + 10 where idcl='$id' and idcour='$mat' and idchp='$zo'");
      } 
      if($num >100) {
  
  $num =100;
      } 
      ?> 
   </div>
</div>
<script>
   $(document).ready(function(){
       var counter = 9;
   window.setInterval(function(){
    counter = counter - 3;
     if(counter>=0){
       document.getElementById('off').innerHTML=counter;
     }
     if (counter===0){
       counter=9;
     }
     $("#here").load(window.location.href + " #here" );
   }, 100);
   });
</script>
 <meta charset="UTF-8">
    <meta name="viewport" content=
        "width=device-width, initial-scale=1.0">
  


<!DOCTYPE html>
<html>


<head>
  <link href='https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:32,height:32/https://www.filepicker.io/api/file/f1iQ65JcQ9ySzldWtd4w' rel='icon' type='image/png'>

<link href='https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:72,height:72/https://www.filepicker.io/api/file/f1iQ65JcQ9ySzldWtd4w' rel='apple-touch-icon' type='image/png'>

<link href='https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:144,height:144/https://www.filepicker.io/api/file/f1iQ65JcQ9ySzldWtd4w' rel='apple-touch-icon' type='image/png'>

<link href='https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:320,height:345/https://www.filepicker.io/api/file/V6pFdpVuTW6SpKxTKJd5' rel='apple-touch-startup-image' type='image/png'>

<link href='https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:640,height:690/https://www.filepicker.io/api/file/V6pFdpVuTW6SpKxTKJd5' rel='apple-touch-startup-image' type='image/png'>

<meta name='apple-mobile-web-app-capable' content='yes' />
<meta charset="UTF-8">
<meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="/x2M+DrHAj7NprOUvMa83Srn4PHwhYzocMpE2nTc76xvoUUj+yJilaJVFLRuEk4/mvpe8L3rZElRrIEXL7rhiw==" />
<link rel="stylesheet" media="screen" href="../../../../mya/assets/bootstrap-a14e0219bff457941c01e229139fcb9f4709e289d96efa3a24bad96561d56e6c.css" data-turbolinks-track="true" /><link href="../../../../themes2.teachablecdn.com/themecss/production/base22eb.css?_=de473e730796&amp;brand_course_heading=%23ffffff&amp;brand_heading=%23000000&amp;brand_homepage_heading=%23ffffff&amp;brand_navbar_fixed_text=%23ffffff&amp;brand_navbar_text=%23ffffff&amp;brand_primary=%23000000&amp;brand_secondary=%23FF9900&amp;brand_text=%232b3636&amp;font=OpenSans&amp;logged_out_homepage_background_image_overlay=0.0&amp;logged_out_homepage_background_image_url=https%3A%2F%2Fwww.filepicker.io%2Fapi%2Ffile%2FV6pFdpVuTW6SpKxTKJd5" rel="stylesheet" data-turbolinks-track="true"></link>
<title>PANGEE FORMATION</title>
<meta name="description" content="PANGEE FORMATION">
<link rel="canonical" href="10185727.html">
<meta property="og:description" content="PANGEE FORMATION">
<meta property="og:image" content="https://www.filepicker.io/api/file/ONkNq16PRbaPTNOA5GbZ">
<meta property="og:title" content="Pixelfy.me (SPECIAL DEAL)">
<meta property="og:type" content="website">
<meta property="og:url" content="10185727.html">
<meta name="brand_video_player_color" content="#FF9900">
<meta name="site_title" content="PANGEE FORMATION">
<style></style>
<script src='../../../../fast.wistia.com/assets/external/E-v1.js'></script>
<script src='../../../../www.recaptcha.net/recaptcha/api.js' async defer></script>


    <meta name="asset_host">
   <script src="../../../../mya/packs/student-globals--1ce28ee88d163a11ac63.js"></script><script src="../../../../mya/packs/student-legacy--b027d640baf72bb1ce77.js"></script><script src="../../../../mya/packs/student--3787d3522463a6b77fa2.js"></script>
<meta id='iris-url' data-iris-url=https://eventable.teachable.cloud />
<script type="text/javascript">
window.heap=window.heap||[],heap.load=function(e,t){window.heap.appid=e,window.heap.config=t=t||{};var r=document.createElement("script");r.type="text/javascript",r.async=!0,r.src="https://cdn.heapanalytics.com/js/heap-"+e+".js";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(r,a);for(var n=function(e){return function(){heap.push([e].concat(Array.prototype.slice.call(arguments,0)))}},p=["addEventProperties","addUserProperties","clearEventProperties","identify","resetIdentity","removeEventProperty","setEventProperties","track","unsetEventProperty"],o=0;o<p.length;o++)heap[p[o]]=n(p[o])},heap.load("318805607");
window.heapShouldTrackUser = true;
</script>


<script type="text/javascript">
var _user_id = ''; // Set to the user's ID, username, or email address, or '' if not yet known.
var _session_id = '1d284265599df45597ea579fbfc1e599'; // Set to a unique session ID for the visitor's current browsing session.

var _sift = window._sift = window._sift || [];
_sift.push(['_setAccount', 'b0151b2153']);
_sift.push(['_setUserId', _user_id]);
_sift.push(['_setSessionId', _session_id]);
_sift.push(['_trackPageview']);

(function() {
  function ls() {
    var e = document.createElement('script');
    e.src = '../../../../cdn.sift.com/s.js';
    document.body.appendChild(e);
  }
  if (window.attachEvent) {
    window.attachEvent('onload', ls);
  } else {
    window.addEventListener('load', ls, false);
  }
})();
</script>

<style>  
.p1{
 
 
  height: 70px;
}

</style>  
<script>
if(typeof ga != 'function') {
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');
}
ga('create', 'UA-44397410-1', 'auto', {'name': 'fedoraTracker', 'allowLinker': true});
ga('fedoraTracker.html', 'anonymizeIp', false);
ga('fedoraTracker.require', 'linker');
ga('fedoraTracker.linker:autoLink', ['oseilletv.teachable.com',  'sso.teachable.com'], false, true );
ga('fedoraTracker.require', 'ecommerce');
ga('fedoraTracker.require', 'ec');
ga('fedoraTracker.send', 'pageview');
ga('create', 'UA-44397410-4', 'auto', {'name': 'teachableTracker', 'allowLinker': true});
ga('teachableTracker.html', 'anonymizeIp', false);
ga('teachableTracker.require', 'linker');
ga('teachableTracker.linker:autoLink', ['oseilletv.teachable.com', 'sso.teachable.com'], false, true );
ga('teachableTracker.require', 'ecommerce');
ga('teachableTracker.require', 'ec');
ga('teachableTracker.send', 'pageview');
</script>

<meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta id="custom-text" data-referral-block-button="Learn more">
<script async src='../../../cdn-cgi/bm/cv/669835187/api.js'></script></head>

<body data-no-turbolink="true" class="revamped_lecture_player">
        <meta http-content='IE=Edge' http-equiv='X-UA-Compatible'>
    <meta content='width=device-width,initial-scale=1.0,user-scalable=no' name='viewport'>
<meta id="fedora-keys" data-commit-sha="de473e7307964fe3eb3af8ea472108f59ed1c3d9" data-env="production" data-sentry-public-dsn="https://8149a85a83fa4ec69640c43ddd69017d@sentry.io/120346" data-stripe="pk_live_hkgvgSBxG4TAl3zGlXiB1KUX" data-track-all-ahoy="false" data-track-changes-ahoy="false" data-track-clicks-ahoy="false" data-track-sumbits-ahoy="false" data-filepicker="ADNupMnWyR7kCWRvm76Laz" data-iris-url="https://eventable.teachable.cloud" /><meta id="fedora-data" data-report-card="{}" data-course-ids="[]" data-completed-lecture-ids="[]" data-school-id="180779" data-school-launched="true" data-preview="logged_out" data-turn-off-fedora-branding="true" data-plan-supports-whitelabeling="true" data-powered-by-text="Créer avec" data-asset-path="//https://mya/assets/footer/teachable-logomark-white-31d2296978598bacace50e6d48a2e1223c20a9b074af424acdd465676f81560f.svg" data-school-preferences="{&quot;ssl_forced&quot;:&quot;true&quot;,&quot;bazaar_enabled&quot;:&quot;false&quot;,&quot;paypal_enabled&quot;:&quot;true&quot;,&quot;autoplay_lectures&quot;:&quot;true&quot;,&quot;comments_threaded&quot;:&quot;true&quot;,&quot;themeable_enabled&quot;:&quot;false&quot;,&quot;course_blocks_beta&quot;:&quot;true&quot;,&quot;eu_vat_tax_enabled&quot;:&quot;false&quot;,&quot;legacy_back_office&quot;:&quot;true&quot;,&quot;themeable_disabled&quot;:&quot;false&quot;,&quot;comments_moderation&quot;:&quot;false&quot;,&quot;eu_vat_tax_eligible&quot;:&quot;true&quot;,&quot;charge_exclusive_tax&quot;:&quot;true&quot;,&quot;drip_content_enabled&quot;:&quot;true&quot;,&quot;send_receipts_emails&quot;:&quot;true&quot;,&quot;autocomplete_lectures&quot;:&quot;true&quot;,&quot;class_periods_enabled&quot;:&quot;false&quot;,&quot;authors_can_manage_pbc&quot;:&quot;true&quot;,&quot;css_properties_enabled&quot;:&quot;false&quot;,&quot;preenrollments_enabled&quot;:&quot;false&quot;,&quot;native_comments_enabled&quot;:&quot;true&quot;,&quot;new_text_editor_enabled&quot;:&quot;true&quot;,&quot;require_terms_agreement&quot;:&quot;true&quot;,&quot;send_new_comment_emails&quot;:&quot;true&quot;,&quot;send_drip_content_emails&quot;:&quot;true&quot;,&quot;ssl_forced_from_creation&quot;:&quot;true&quot;,&quot;turn_off_fedora_branding&quot;:&quot;true&quot;,&quot;allow_comment_attachments&quot;:&quot;true&quot;,&quot;authors_can_email_students&quot;:&quot;false&quot;,&quot;authors_can_manage_coupons&quot;:&quot;false&quot;,&quot;teachable_accounts_enabled&quot;:&quot;true&quot;,&quot;teachable_payments_enabled&quot;:&quot;true&quot;,&quot;authors_can_import_students&quot;:&quot;false&quot;,&quot;authors_can_publish_courses&quot;:&quot;false&quot;,&quot;internal_subscriptions_beta&quot;:&quot;true&quot;,&quot;recaptcha_enabled_on_signup&quot;:&quot;true&quot;,&quot;tax_form_collection_enabled&quot;:&quot;false&quot;,&quot;display_vat_inclusive_prices&quot;:&quot;false&quot;,&quot;single_page_checkout_enabled&quot;:&quot;true&quot;,&quot;authors_can_set_course_prices&quot;:&quot;false&quot;,&quot;send_lead_confirmation_emails&quot;:&quot;true&quot;,&quot;affiliate_cookie_duration_days&quot;:&quot;365&quot;,&quot;authors_can_issue_certificates&quot;:&quot;false&quot;,&quot;store_student_cards_separately&quot;:&quot;true&quot;,&quot;authors_can_manage_certificates&quot;:&quot;false&quot;,&quot;authors_can_manage_course_pages&quot;:&quot;false&quot;,&quot;disable_js_course_event_tracking&quot;:&quot;false&quot;,&quot;exclusive_vat_on_custom_gateways&quot;:&quot;false&quot;,&quot;is_edit_site_onboarding_complete&quot;:&quot;false&quot;,&quot;send_certificate_issuance_emails&quot;:&quot;true&quot;,&quot;owner_teachable_accounts_required&quot;:&quot;true&quot;,&quot;prevent_payment_plan_cancellation&quot;:&quot;true&quot;,&quot;send_subscription_reminder_emails&quot;:&quot;true&quot;,&quot;automatically_add_disqus_attachments&quot;:&quot;true&quot;,&quot;recalc_course_pct_on_lecture_publish&quot;:&quot;true&quot;,&quot;send_confirmation_instructions_emails&quot;:&quot;true&quot;,&quot;send_limited_time_unenrollment_emails&quot;:&quot;true&quot;,&quot;turn_off_myteachable_sign_up_branding&quot;:&quot;true&quot;}" data-accessible-features="[&quot;bulk_enroll_students&quot;,&quot;manually_importing_users&quot;,&quot;native_certificates&quot;,&quot;earnings_statements&quot;,&quot;teachable_payments&quot;,&quot;teachable_u&quot;,&quot;course_compliance&quot;,&quot;page_editor_v2&quot;,&quot;certificates_editor_v2&quot;,&quot;drip_content&quot;,&quot;custom_domain&quot;,&quot;coupons&quot;,&quot;graded_quizzes&quot;,&quot;power_editor&quot;,&quot;email&quot;,&quot;course_reports&quot;,&quot;webhooks&quot;,&quot;integrations&quot;,&quot;zapier_action_create_user&quot;,&quot;teachable_payments_payout_view&quot;,&quot;upsells&quot;,&quot;facebook_pixel&quot;,&quot;user_search_filters&quot;,&quot;user_tags&quot;,&quot;multiple_course_pages&quot;,&quot;proration_upgrade_flow&quot;,&quot;cross_border_payments&quot;,&quot;limited_time_enrollments&quot;,&quot;sales_tax_on_student_checkout&quot;,&quot;new_device_confirmation&quot;,&quot;elasticsearch_users&quot;,&quot;elasticsearch_transactions&quot;,&quot;reset_progress&quot;,&quot;fraud_warnings&quot;,&quot;paypal_through_tp&quot;,&quot;new_creator_checkout&quot;,&quot;circle_oauth&quot;]" data-course-data="{&quot;is_lecture_order_enforced&quot;:false,&quot;is_minimum_quiz_score_enforced&quot;:false,&quot;is_video_completion_enforced&quot;:false,&quot;minimum_quiz_score&quot;:0.0,&quot;maximum_quiz_retakes&quot;:0}" data-course-url="https://oseilletv.teachable.com/courses/258459" data-course-id="258459" data-lecture-id="10185727" data-lecture-url="https://oseilletv.teachable.com/courses/258459/lectures/10185727" data-quiz-strings="{&quot;check&quot;:&quot;Vérifier&quot;,&quot;error&quot;:&quot;Choisir une réponse&quot;,&quot;label&quot;:&quot;Quiz&quot;,&quot;next&quot;:&quot;Continuer&quot;,&quot;previous&quot;:&quot;Retour&quot;,&quot;scored&quot;:&quot;Tu as marqué des points&quot;,&quot;retake&quot;:&quot;Reprendre le quiz&quot;,&quot;retry&quot;:&quot;You need a score of at least %{minimumQuizScore}% to continue - you may retake this quiz %{retakes} more time(s).&quot;,&quot;request&quot;:&quot;You need a score of at least %{minimumQuizScore}% to continue - a request has been sent to the school owner to reset your score. You will be notified if the school owner allows you to retake this quiz.&quot;}" /><meta id="analytics-keys" name="analytics" data-analytics="{&quot;Google Analytics&quot;:{&quot;trackingId&quot;:&quot;UA-93509217-3&quot;,&quot;enhancedEcommerce&quot;:true,&quot;sendUserId&quot;:true,&quot;schoolDomain&quot;:&quot;oseilletv.teachable.com&quot;,&quot;anonymizeIp&quot;:true}}" />
  
  <!-- Lecture Header -->
<header class='full-width half-height is-not-signed-in p1'>
<div class='lecture-left'>
  <a class='nav-icon-back' aria-label='Back to course curriculum' data-no-turbolink="true" role='button' href='https://formationpangee.com/dashboard.php'>
    <svg width="35" height="35" title="Back to course curriculum">
      <use xlink:href="#icon__Home"></use>
    </svg>
  </a>
  
  <a class="nav-icon-list show-xs hidden-sm hidden-md hidden-lg collapsed" aria-label='Course Sidebar' role="button" data-toggle="collapse" href="#courseSidebar" aria-expanded="false" aria-controls="courseSidebar">
      <svg width="35" height="35" title="Course Sidebar">
        <use xlink:href="#icon__FormatListBulleted"></use>
      </svg>
    </a>
    <a class="nav-icon-list show-xs hidden-sm hidden-md hidden-lg collapsed" aria-label='Course Sidebar' role="button" data-toggle="collapse" href="#courseSidebar" aria-expanded="false" aria-controls="courseSidebar">
      <svg width="35" height="35" title="Course Sidebar">
       
      </svg>
    </a>
    <a class="" aria-label='Course Sidebar' role="button" data-toggle="collapse" href="#courseSidebar" aria-expanded="false" aria-controls="courseSidebar">
      <svg width="35" height="35" title="Course Sidebar">
       
      </svg>
    </a>
</div>

<div class='lecture-nav'>
 <a
    class='nav-btn complete'
  
    href='https://formationpangee.com/bn/a/courses/258459/lectures/video.php?pro=<?php echo $mat ?>&vid=<?php echo $zo - 1?>'
    id='nav-btn complete'
    role='button'
  >
   
    
    <svg width="24" height="24" aria-hidden='true'>
        <use xlink:href="#icon__ArrowBack"></use>
      </svg>
      &nbsp;
       <span class='nav-text'> Chapitre précédent</span>
  </a>
   <a
    class='nav-btn complete'
  
    href='https://formationpangee.com/bn/a/courses/258459/lectures/video.php?pro=<?php echo $mat ?>&vid=<?php echo $zo + 1 ?>'
    id='nav-btn complete'
    role='button'
  >
   
    
    <span class='nav-text'>Terminer et continuer</span>
    &nbsp;
    <svg width="24" height="24" aria-hidden='true'>
        <use xlink:href="#icon__ArrowForward"></use>
      </svg>
  </a>
 
</div>
 <style>
 
 @media only screen and (max-width: 767px) {
.responsive.html_header_sidebar #header .avia-custom-sidebar-widget-area {
  display: block;
}}
.embed-youtube {
    position: relative;
    padding-bottom: 56.25%; /* - 16:9 aspect ratio (most common) */
    /* padding-bottom: 62.5%; - 16:10 aspect ratio */
    /* padding-bottom: 75%; - 4:3 aspect ratio */
    padding-top: 30px;
    height: 0;
    overflow: hidden;
}

.embed-youtube iframe,
.embed-youtube object,
.embed-youtube embed {
    border: 0;
    position: absolute;
    top: 0;
     left: 25;
     right: 0;
    width: 100%;
    height: 90%;
}

    .book-cover{
        object-fit:contain !important;
        height:auto !important;
    }
    
 
    
</style>

<style>
    bod {
        background-color: #ABBAEA;
    }
    di {
        height: 200px;
        margin: 20px;
        border: 5px solid;
        background-color: #FBD603;
    }
</style>

    
<style>
  
  body {
    font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
    font-weight: 300;
}
  
</style>  
</header>
<?php 
            $products = $conn->query("SELECT * FROM `categories` where  id ='".$_GET['pro']."' ");
              while($row = $products->fetch_assoc()):
             $g=$row['id'];
              $L=$row['category'];
               $category=$row['category'];
                  $upload_path = base_app.'./a/uploads/cours_'.$row['id'];
                  $img = "";
                  if(is_dir($upload_path)){
                      $fileO = scandir($upload_path);
                      if(isset($fileO[2]))
                          $img = "a/uploads/cours_".$row['id']."/".$fileO[2];
                      // var_dump($fileO);
                  }
                  foreach($row as $k=> $v){
                      $row[$k] = trim(stripslashes($v));
                  }
               
          ?>
  <section class="lecture-page-layout">
    <div role="navigation" class='course-sidebar lecture-page navbar-collapse navbar-sidebar-collapse' id='courseSidebar'>
<div class='div-1' >
  
  <CENTER ><span> <img    src="<?php echo validate_image($img) ?>" width="250px" height="80" /></i></span></CENTER>	
  <!-- Course Progress -->
  <bod>
   
</bod>


    
<div class="progress div-1">
    <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $num?>%; background-color:Orange !important;">
    </div>
</div>

            
               
             <CENTER class='div-1'>   <label for="file"><?php echo $num?>% VISIONNÉ</CENTER>
            
</div>
<!-- Lecture list on courses page (enrolled user) -->

  
  
  
  
  
  
  <!-- Sidebar-->
         
        
               
            
                       
                                 
                                  
                             
                         
            
                   <!-- Product actions-->
                  
          
         
         
         
       
              
<?php endwhile; ?>
    
    
    
    
      <?php 
              $products = $conn->query("SELECT * FROM sub_categories  where parent_id='$g' ");
              while($row = $products->fetch_assoc()):
                  
              $fg=$row['sub_category'];
              $i=$row['id'];
              $des=$row['description'];
          ?>

     
    <div class='col-sm-12 course-section'>
      <div role="heading" aria-level="3" class='section-title' data-release-date="" data-days-until-dripped="" data-is-dripped-by-date="" data-course-id="258459">
        <span class="section-lock v-middle">
          <svg width="24" height="24">
            <use xlink:href="#icon__LockClock"></use>
          </svg>&nbsp;
        </span>
        <h3>  <?php echo $fg; ?> </h3>
      </div>
     <?php 
              $productsv = $conn->query("SELECT P.*, V.num as ninoi FROM products P,visionnage V  where P.id=V.idchp and  sub_category_id='$i'  and V.idcl='$id' ");
              while($rowv = $productsv->fetch_assoc()):
                  
              $pro=$rowv['title'];
             $pi=$rowv['id'];
              $numqs=$rowv['ninoi'];
          
              
             
          ?>
      <ul class='section-list'>
        
        <li data-lecture-id="4012697" data-lecture-url='https://formationpangee.com/bn/a/courses/258459/lectures/video.php?pro=<?php echo $g ?>&vid=<?php echo $pi ?>' class='section-item incomplete'>
          <a class='item' data-no-turbolink='true' data-ss-course-id='258459'
            data-ss-event-name='Lecture: Navigation Sidebar' data-ss-event-href=https://formationpangee.com/bn/a/courses/258459/lectures/video.php?pro=<?php echo $g ?>&vid=<?php echo $pi ?>'
            data-ss-event-type='link' data-ss-lecture-id='4012697'
            data-ss-position='2' data-ss-school-id='180779'
            data-ss-user-id='' href='https://formationpangee.com/bn/a/courses/258459/lectures/video.php?pro=<?php echo $g ?>&vid=<?php echo $pi ?>'>
            <style>
        .piechart<?php echo $pi ; ?>{
            
            position: relative;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-image: conic-gradient(
               
              orange  0 <?php echo $numqs*400; ?>deg, 
                white 0);
        }
  
        bod,
        .piechart {
            display: flex;
            justify-content: center;
            align-items: center;
        }
       
        
        
    </style>
            <span class='status-container'>
              <span class='status-icon'>
               <div class="piechart<?php echo $pi ; ?>"></div>
              </span>
              
            </span>
            <div class='title-container'>
               
              <span class='lecture-icon v-middle'>
               
                  <svg width="24" height="24">
                    <use xlink:href="#icon__Video"></use>
                  </svg>
              </span>
           <span class='lecture-name'  style=" font-size:14px;">
              <?php echo $pro; ?>  
                
              </span>
              
            </div>
          </a>
        </li>
        
       
        
        
        
       
        
       
        
      </ul>
      <?php endwhile; ?> 
    </div>
     <?php endwhile; ?>
   
      
        
       
    
  </div>
</div>
   <?php 
                 $products = $conn->query("SELECT * FROM products where  id= '".$_GET['vid']."' ");
                while($row = $products->fetch_assoc()):
                    $video=$row['lien'];
                    $title=$row['title'];
                     $desc=$row['description '];
                      $pi=$rowv['id'];
                    $upload_path = base_app.'/a/uploads/module_'.$row['id'];
                    $img = "";
                    $fg=$row[$k];
                    if(is_dir($upload_path)){
                        $fileO = scandir($upload_path);
                        if(isset($fileO[2]))
                            $img = "a/uploads/module_".$row['id']."/".$fileO[2];
                        // var_dump($fileO);
                    }
                    foreach($row as $k=> $v){
                        $row[$k] = trim(stripslashes($v));
                    }
                 
            ?>

      <!-- Lecture Content -->
<div class="course-mainbar lecture-content full-width-content ">
 
<center><strong>    <h1> <font color="#000000">  <?php echo $title; ?></font> </h1>  </strong> </center> 
  
  <center>
    

    <div class="well">
      <!---This section for panel component-->

     
								 <div class="embed-youtube">

                    <!-- Product image-->
          <?php     echo "<iframe width=\"0\" height=\"0\" src=\"$video\" frameborder=\"0\" allowfullscreen></iframe>"; ?>
                    
                    </div>
                    
                    <div class="card-body p-4">
                        <div class="">
                        

            <div class="main-body">
              <!-- this section we will add information about the video-->

                 <CENTER> <h3 style="color:#000000";>  <?php echo stripslashes(html_entity_decode( $desc)) ?> </p></h3></CENTER>
            </div>
         
        </div>
       
         <?php endwhile; ?>
      </div>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>  
      <table class="table table-striped">  
  <tr><th>Designation</th><th>Action</th></tr>  
  <tr><td>exemple de lien ou de document</td><td><button type="button" class="btn btn-warning">Télécharger</button></td></tr>  
   
</table>  
  </center>
</div>

</div>

    </section>
    <!-- No lecture footer in the new redesign -->
<script>
  $('#pb').css({'background-color': "red"})
</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>    
  <script>(function(){window['__CF$cv$params']={r:'7315ebd9bf290b57',m:'oi05NDkA4zovzsa8Esworh5bzEYvSUo44lgKpIQxOCM-1658930636-0-AW7U4ExbWmTlJiS3/4D/ZsEexC4n9PKChsqpLYqtP+VTuoRDfCk8YwNG0aB2XL0IuNDngagqYHhoZdfXlAde+1mAnHJfViFHdS76Ukx8TduRCr1eB69Gw6N4w+MJCkseCvNNAcJB/atHB/pfYkHJ7IjvKoW47UHo+rnxHc5AnTGL',s:[0x2bcc06398c,0x0112435641],}})();</script></body>

<!-- Mirrored from oseilletv.teachable.com/courses/258459/lectures/10185727 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jul 2022 14:09:09 GMT -->
</html>
