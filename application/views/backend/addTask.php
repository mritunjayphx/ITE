<?php include('header.php') ?>


<section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">Add Task</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Task Name</label>
                  <input type="text" class="form-control" id="exampleInputName" placeholder="Task Name">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Descrition</label>
                  <textarea id="summernote" style="height:100px !important;">Description</textarea>
                </div>

                  <label for="exampleInputEmail1">Status</label>

                <div class="form-group">
                  <label for="exampleInputEmail1">Instruction</label>
                  <textarea id="summernote2" style="height:100px !important;">Instruction</textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Task Training Video Url</label>
                  <input type="url" class="form-control" placeholder="Eg.'https://youtube.com' ">
                </div>

                

              <div class="row">
                  <div class="col-4">
                  <label for="exampleSelectRounded0">Min Age Target</label>
                    <input type="text" class="form-control" placeholder="Min Age Targeting">
                  </div>
                  <div class="col-4">
                  <label for="exampleSelectRounded0">Max Age Target</label>
                    <input type="text" class="form-control" placeholder="Max Age Targeting">
                  </div>
                  <div class="col-4">
                  <label>Targer City</label>
                  <div class="select2-purple">
                    <select class="select2" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-purple" style="width: 100%;">
                        <option>Delhi</option>
                        <option>Jaipur</option>
                        <option>Begusarai</option>
                        <option>Bangalore</option>
                        <option>Pune</option>
                    </select>
                  </div>
                  </div>
              </div>  
              
              <br>

              <div class="row">
                  <div class="col-4">
                  <label for="exampleSelectRounded0">Number of Screenshots</label>
                    <input type="text" class="form-control" placeholder="Number of Screenshots">
                  </div>

                  <div class="col-4">
                  <label for="exampleSelectRounded0">Number of Recordings</label>
                  <input type="text" class="form-control" placeholder="Number of Recordings">

                  </div>

                  <div class="col-4">
                  <label for="exampleSelectRounded0">Task Url</label>
                    <input type="text" class="form-control" id="exampleInputName" placeholder="Task Url">
                  </div>

              </div>  

              <br>
              
              <div class="form-group">
                  <label>Assign to manager</label>
                  <div class="select2-purple">
                    <select class="select2" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-purple" style="width: 100%;">
                      <option>Amit</option>
                      <option>Abhishek</option>
                      <option>Mritunjay</option>
                      <option>Himanshu</option>
                      <option>Rahul</option>
                    </select>
                  </div>
                </div>
              
              <br>
              
            <div class="col-md-6">
              <button type="button" class="btn btn-block bg-gradient-primary btn-lg"><i class="fa fa-bookmark"></i> Publish</button>
                </div>


            </div>

             
          </div>
        </div>
        <!-- /.col-->
      </div>
       
     </section>

<?php include('footer.php') ?>