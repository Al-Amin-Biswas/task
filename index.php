<?php 
   //include('db.php');
   require_once "db.php";
   $sql="SELECT * FROM division";
   $result= $conn->query($sql);
   //print_r($result->num_rows);
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container" style="padding-bottom: 100px">
      <div class="row">
        <div class="col-md-12">
          <div>&nbsp;</div>
          <h3 style="text-align: center; font-family: revert;">Registration Form</h3>
          <div>&nbsp;</div>
          <form id="dataStore" action="insertForm.php" type="post" enctype="multipart/form-data">
                <div class="mb-3 row">
                  <label class="col-sm-2 col-form-label">Applicant Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="applicantName" id="ApplicantName" placeholder="John Smith">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-2 col-form-label">Applicant Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="applicantEmail" id="ApplicantEmail" placeholder="email@example.com">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-2 col-form-label">Division</label>
                  <div class="col-sm-2">
                    <select class="form-control" name="division" id="div_dropdown">
                      <option>--Select--</option>
                      <?php 
                        if ($result->num_rows > 0) {
                          while ($row = $result->fetch_assoc()) {   
                      ?>
                      <option value="<?php echo $row['id'];?>"><?php echo $row["name"];?></option>
                      <?php 
                        }
                      }
                      ?>
                    </select>
                  </div>
                  <label class="col-sm-2 col-form-label">District</label>
                  <div class="col-sm-2">
                    <select class="form-control" name="district" id="district">
                      
                    </select>
                  </div>
                  <label class="col-sm-2 col-form-label">Upazila</label>
                  <div class="col-sm-2">
                    <select class="form-control" name="Upazila" id="upazila">
                      
                    </select>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-2 col-form-label">Address Details</label>
                  <div class="col-sm-10">
                    <textarea id="descript" name="applicantAddress" rows="2" class="form-control">
                    </textarea>
                  </div>
                </div>
                 <div class="mb-3 row">
                  <label class="col-sm-2 col-form-label">Language</label>
                  <div class="col-sm-10">
                    <input class="form-check-input" name="language[]" id="vehicle" type="checkbox" value="Bangla" id="flexCheckCheckedDisabled">
                    <label class="form-check-label" for="flexCheckCheckedDisabled">Bangla</label>
                    <input class="form-check-input" name="language[]" id="vehicle" type="checkbox" value="English" id="flexCheckCheckedDisabled">
                    <label class="form-check-label" for="flexCheckCheckedDisabled">English</label>
                    <input class="form-check-input" name="language[]" id="vehicle" type="checkbox" value="French" id="flexCheckCheckedDisabled">
                    <label class="form-check-label" for="flexCheckCheckedDisabled">French</label>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-3 col-form-label">Education Qualification :</label>
                  <div class="col-sm-9">
                    
                  </div>
                </div>
                <div class="mb-3 row">
                  <div class="col-sm-12">
                    <table class="table" border="1px">
                      <thead>
                        <tr>
                          <th scope="col">Exam Name</th>
                          <th scope="col">University</th>
                          <th scope="col">Board</th>
                          <th scope="col">Result</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody id="addNewRow">
                        
                        <tr>
                          <td>
                            <select class="form-control" name="exam_name[]">
                              <option>-Select-</option>
                              <option value="BSC">BSC</option>
                              <option value="MSC">MSC</option>
                              <option value="MBA">MBA</option>
                            </select>
                          </td>
                          <td>
                            <select class="form-control" name="versity[]">
                              <option>-Select-</option>
                              <option value="Dhaka University">Dhaka University</option>
                              <option value="Khulna University">Khulna University</option>
                              <option value="Rajsahi University">Rajsahi University</option>
                            </select>
                          </td>
                          <td>
                            <select class="form-control" name="board[]">
                              <option>-Select-</option>
                              <option value="Dhaka">Dhaka</option>
                              <option value="Jashore">Khulna</option>
                            </select>
                          </td>
                          <td><input type="text" class="form-control" name="point[]" id="gpa" placeholder="5.00"></td>
                          <td><button type="button" class="btn btn-success" id="addEdu">Add More</button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-2 col-form-label align-items-center">Photo</label>
                  <div class="col-sm-10 row g-3 align-items-center">
                    <div class="col-auto">
                    <input type="file" class="form-control" name="image" id="moreword">
                  </div>
                  <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text">
                      Only Image are allow.
                    </span>
                  </div>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="col-sm-2 col-form-label align-items-center">Resume</label>
                  <div class="col-sm-10 row g-3 align-items-center">
                    <div class="col-auto">
                    <input type="file" class="form-control" name="documentpdf" id="ApplicantName">
                  </div>
                  <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text">
                      Only document or pdf allow.
                    </span>
                  </div>
                  </div>
                </div>
                <div class="mb-3 row" >
                  <label class="col-sm-2 col-form-label align-items-center">Training</label>
                  <div class="col-sm-10">
                      <input class="form-check-input" type="radio" name="trainingleve" id="yesbutton" >
                      <label class="form-check-label">
                        Yes
                      </label>
                      <input class="form-check-input" type="radio" name="traininglevel" id="nobutton" >
                      <label class="form-check-label">
                        No
                      </label>
                      <div>&nbsp;</div>
                      <table class="table" border="1px" id="trainingTable" style="display: none;">
                      <thead>
                        <tr>
                          <th scope="col">Training Name</th>
                          <th scope="col">About Training</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody id="trainingNew">
                        <tr>             
                          <td><input type="text" class="form-control" name="trainname[]" id="ApplicantName1" placeholder="Training Name"></td>
                          <td><input type="text" class="form-control" name="traitopic[]" id="ApplicantName2" placeholder="Training Topic"></td>
                           <td><button type="button" class="btn btn-info"  id=addTra>More</button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              <button type="submit" id="submit" class="btn btn-primary">Submit</button>
              <h3 id="doo"></h3>
            </form>
        </div>
      </div>
    </div> 

<script src="custome.js"></script>
<script type="text/javascript">
      $("#dataStore").on('submit',function(e){
      //var formdata = $("#dataStore").serialize();
      //console.log(formdata);
      e.preventDefault();
  $.ajax({
         url: "insertForm.php",
         type: "POST",
         data:  new FormData(this),
         contentType: false,
            cache: false,
         processData:false,
         beforeSend : function()
         {

          $("#err").fadeOut();
         },
         success: function(data)
            {
              alert(data);
          // if(data=='invalid')
          // {

          //  $("#err").html("Invalid File !").fadeIn();
          // }
          // else
          // {

          //  $("#preview").html(data).fadeIn();
          //  $("#form")[0].reset(); 
          // }
            },
         error: function(e) 
          {
        $("#err").html(e).fadeIn();
          }          
        });
    });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    var i=1; 
    $("#addEdu").click(function(){
          i++;
          if (i<= 5) {
          $("#addNewRow").append('<tr id="row'+i+'"><td><select class="form-control" name="exam_name[]"><option>-Select-</option><option value="BSC">BSC</option><option value="MSC">MSC</option><option value="MBA">MBA</option></select></td><td><select class="form-control" name="versity[]"><option>-Select-</option><option value="Dhaka University">Dhaka University</option><option value="Khulna University">Khulna University</option><option value="Rajsahi University">Rajsahi University</option></select></td><td><select class="form-control" name="board[]"><option>-Select-</option><option value="Dhaka">Dhaka</option><option value="Jashore">Khulna</option></select></td><td><input type="text" class="form-control" name="point[]" id="gpa" placeholder="5.00"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">Delete</button></td></tr>');
          }
        });
        
        //Delete item
        $(document).on('click', '.btn_remove', function(){  
            var button_id = $(this).attr("id");  
            //alert(button_id); 
            $('#row'+button_id+'').remove(); 
              i--;
          });
           var j=1; 
    $("#addTra").click(function(){
          j++;
          if (j<= 3) {
          $("#trainingNew").append('<tr id="rowLine'+j+'"><td><input type="text" class="form-control" id="ApplicantName1" name="trainname[]" placeholder="Training Name"></td><td><input type="text" class="form-control" id="ApplicantName2" name="traitopic[]" placeholder="Training Topic"></td><td><button type="button" name="remove" id="'+j+'" class="btn btn-danger btn_rem">Delete</button></td></tr>');
          }
        });
        
        //Delete item
        $(document).on('click', '.btn_rem', function(){  
            var butn_id = $(this).attr("id");  
            //alert(button_id); 
            $('#rowLine'+butn_id+'').remove(); 
              j--;
          });


    $("#div_dropdown").change(function(){
      var division= document.getElementById('div_dropdown').value;
     // console.log(division);
     // alert(division);
     $.ajax({
        url:"divTodis.php",
        type:"POST",
        data: {
            divId : division
        },     
        cache: false,
        success: function(result){
                    $("#district").html(result);
                }
     });

    })
  });


$(document).ready(function(){
$("#district").on("change", function(){
  var district= document.getElementById("district").value;
  $.ajax({
    url:"disToupzila.php",
    type:"POST",
    data: {
      disId:district
    },
    cache: false,
    success:function(res){

      $("#upazila").html(res);
      //$("#doo").html(res);
      //alertresult();
    }
  });
})
});



</script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>