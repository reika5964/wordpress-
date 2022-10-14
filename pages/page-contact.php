<?php /* Template Name: Contact Us */ ?>
<?php get_header(); ?>

<div class="contact-wrapper">
  <!-- header -->
  <section class="contact-header">
    <div class="container">
      <h1>CONTACT US</h1>
      <p>
        Hi, welcome to Starbugs.<br/> 
        What can we do for you?
      </p>
    </div>
  </section>
  
  <!-- content -->
  <section class="contact-content">
    <article class="page-content">
      <div class="container">
        <?php if( have_posts() ) { ?>
            <?php while( have_posts() ) {?>
                <?php the_post(); ?>
                <?php the_content(); ?>
            <?php } ?> 
        <?php  } ?>  
      </div>
    </article>
  </section>

  <!-- contact form -->
  <section class="contact-form">
    <div class="container">
      <h3>Contact Form</h3>
      <p>We will get back to you as soon as possible</p>
      <?php echo do_shortcode('[contact-form-7 id="49" title="Contact Us Form"]');?>
      <!-- <form action="" class=""form id="contact_form">
        <div class="row">
            
            <div class="col-md-4">
                <div class="form-group">
                    <label for="" class="control-label">
                        Your name <span>*</span>
                    </label>
                    <input type="text" class="form-control">
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="form-group">
                    <label for="" class="control-label">
                        Email <span>*</span>
                    </label>
                    <input type="text" class="form-control">
                </div>
            </div>
           
            <div class="col-md-4">
                <div class="form-group">
                    <label for="" class="control-label">
                        Phone number 
                    </label>
                    <input type="text" class="form-control">
                </div>
            </div>
          
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="" class="control-label">
                        Message <span>*</span>
                    </label>
                    <textarea name="" id="" cols="30" rows="10"
                    class="form-control"></textarea>
                </div>
            </div>
           
            <div class="col-lg-12">
                <div class="form-group">
                    <button class="btn btn-primary" type="button">Submit</button>
                </div>
            </div>
        </div>
      </form> -->
    </div>
  </section>
</div>

<?php get_footer(); ?>