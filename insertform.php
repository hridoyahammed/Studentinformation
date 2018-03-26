<?php
include('header.php'); ?>
<!doctype html>
<html>
    <head>
    
        <link href="b.css" rel="stylesheet" type="text/css">
        
    </head>
    
    <body>
     
        <div class="container-fluid">
        	<div class="row main-row">
            	<div class="col-md-3">
               </div>
            	<div class="col-md-6">
                	<div class="row">
                        <div class="col-md-3">
                        </div>
                    	
                        <div class="col-md-3">
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-md-12 head">
                        	<b><h2 style="color:black; background-color:lightgreen" >Inserting Student Information </h2></b><hr>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-md-12">
                        	<form class="from" method="POST" action="process.php" enctype="multipart/form-data">
                            	<div class="row">
                              <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Full Name :</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder=" Full Name" required="">
                              </div>
                              
                              <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Roll:</label>
                                <input type="text"  name="roll" class="form-control" id="exampleInputEmail1" placeholder=" Roll" required="">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Reg:</label>
                                <input type="text" name="reg" class="form-control" id="exampleInputEmail1" placeholder=" Reg" required="">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="exampleInputrequired=""Email1">Dep:</label>
                                <input type="text" name="dep" class="form-control" id="exampleInputEmail1" placeholder=" Dep" required="">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Shift:</label>
                                <input type="text" name="shift" class="form-control" id="exampleInputEmail1" placeholder=" Shift" required="">
                              </div>
                              <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Email:</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder=" Email" required=""> 
                              </div>
                              <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Password:</label>
                                <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder=" Password" required="">
                              </div>
                            </div>
            <center>
              <tr>
                 <th><b>Sex:&nbsp;&nbsp;</b></th>
                 <td>
                     <input type="radio" name="sex" value="male">Male
                     <input type="radio" name="sex" value="female">Female
                 </td>
             </tr>
             
             <tr>
                 <th><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Skill:&nbsp;&nbsp;</b></th>
                 <td>
                 <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="c" value="c">C
                </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="php" value="php">PHP
                    </label>
                  </div>                
                 </td>
               </tr>
               <br>
               <tr>
                <th><b><i>Uplode Images</i></b></th>
                <td>
                  <input class="form-control" type="file" name="fileToUpload" >
                </td>
               </tr>
                    
          </center>
          <br>




                             
                              <center>
                               <input type="submit" name="submit" class="btn btn-default"/>
                               <input type="reset" name="Clear" class="btn btn-default"/>
                             </center>
                            </form>
                        </div>
                    </div>
               </div>
            	<div class="col-md-3">
               </div> 
            </div>
        </div>
   
        
    </body>
</html>
<?php
include('footer.php'); ?>
