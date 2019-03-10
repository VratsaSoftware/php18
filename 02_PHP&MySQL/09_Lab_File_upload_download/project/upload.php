<?php include 'includes/header.php'; ?>
<!-- Contact -->
<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Files To Upload</h2>
        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <form method="post" enctype="multipart/form-data" action="save_uploaded_file.php">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <input class="form-control" name="username" type="text" placeholder="Your Name *" >                  
              </div>
            </div>
            <div class="col-md-12">
              <div style="position:relative;">
                <a class='btn btn-primary' href='javascript:;'>
                  Choose File...
                  <input type="file" id="input-file" name="file_to_upload" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
                </a>
                &nbsp;
                <span class='label label-info' id="upload-file-info"></span>
              </div>
            </div>            
            <div class="col-lg-12 text-center">               
              <input class="btn btn-primary btn-xl text-uppercase" name="submit" type="submit" value="Save">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<?php include 'includes/footer.php'; ?>
