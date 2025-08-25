<!DOCTYPE html>
<html>
<head>
    <title>Diet Plan</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<div class="container">
    <div class="row justify-content-center" style="padding: 10px 10px 10px 10px;margin-bottom: 20px;">
        <div class=" col-lg-6 text-left">
            <img src="img/logo.png" class="logo">
        </div>
        <div class=" col-lg-6 text-right">
          <!--  <a href="#popup-article" style="text-decoration: underline;padding-top: 40px;"><span class="top-lefthelp"><i class="fa fa-question-circle fa-2x"></i></span></a> -->
        </div>
    </div>
    <div class="row justify-content-center">
        <div class=" col-lg-12 text-center">
            <h2 style="margin-bottom: 15px;">Personalized meal plans, look <b> AMAZING! </b></h2><br>
            <div class="card ">
                <form id="msform" method="post" action="create-plan.php">
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-4">
                                    <h2 class="fs-title"><b>Let's get start!</b> <br><br> Select Your Gender </h2>
                                </div>
                                <div class="col-8">
                                    <input type="radio" id="radio1" name="gender" value="male" checked>
                                       <label for="radio1"><img src="img/u-2.1.png" style="width: 150px; height: auto;margin-bottom: -8px;"></label>
                                    <input type="radio" id="radio2" name="gender" value="female">
                                       <label for="radio2"><img src="img/u-2.2.png" style="width: 150px; height: auto;margin-bottom: -8px;"></label>
                                </div>
                            </div> 
                            
                        </div><br> <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                       <div class="form-card">
                            <div class="row">
                                <div class="col-4">
                                    <h2 class="fs-title">Do you eat meat? </h2>
                                    <img src="img/meat-1.png" style="width: 100px;height: auto;">
                                </div>
                                <div class="col-8">
                                    <input type="radio" id="radio3" name="veg" value="veg" checked>
                                       <label for="radio3">Eat Meat &nbsp; <img src="img/meat-2.png" style="width: 150px; height: auto;margin-bottom: -8px;"></label>
                                    <input type="radio" id="radio4" name="veg" value="non-veg">
                                       <label for="radio4">Vegitarian &nbsp; <img src="img/meat-3.png" style="width: 150px; height: auto;margin-bottom: -8px;"></label>
                                </div>
                            </div> 
                        </div><br> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                       <div class="form-card">
                            <div class="row">
                                <div class="col-4">
                                    <h2 class="fs-title">Do you eat fish? </h2>
                                    <img src="img/fish-1.png" style="width: 100px;height: auto;">
                                </div>
                                <div class="col-8">
                                    <input type="radio" id="radio5" name="fish" value="fish" checked>
                                       <label for="radio5">Eat Fish &nbsp; <img src="img/fish-2.png" style="width: 150px; height: auto;margin-bottom: -8px;"></label>
                                    <input type="radio" id="radio6" name="fish" value="non-fish">
                                       <label for="radio6">No I Don't &nbsp; <img src="img/fish-3.png" style="width: 150px; height: auto;margin-bottom: -8px;"></label>
                                </div>
                            </div> 
                        </div><br> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                       <div class="form-card">
                            <div class="row">
                                <div class="col-4">
                                    <h2 class="fs-title">How do you feel about diary? </h2>
                                    <img src="img/dairy-1.png" style="width: 100px;height: auto;">
                                </div>
                                <div class="col-8">
                                    <input type="radio" id="radio7" name="diary" value="diary" checked>
                                       <label for="radio7">Good &nbsp; <img src="img/dairy-2.png" style="width: 150px; height: auto;margin-bottom: -8px;"></label>
                                    <input type="radio" id="radio8" name="diary" value="non-diary">
                                       <label for="radio8">No Good &nbsp; <img src="img/dairy-3.png" style="width: 150px; height: auto;margin-bottom: -8px;"></label>
                                </div>
                            </div> 
                        </div><br> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                       <div class="form-card">
                            <div class="row">
                                <div class="col-4">
                                    <h2 class="fs-title">What is your regular level of physical activity?</h2>
                                </div>
                                <div class="col-8">
                                    <input type="radio" id="radio9" name="act" value="almost-no" checked>
                                       <label for="radio9">Almost No Physical Activity</label>
                                    <input type="radio" id="radio10" name="act" value="walk">
                                       <label for="radio10">Go for walk</label>
                                    <input type="radio" id="radio11" name="act" value="1-2">
                                       <label for="radio11">Excersie 1-2 per week</label>
                                    <input type="radio" id="radio12" name="act" value="3-5">
                                       <label for="radio12">Excersie 3-5 per week</label>
                                    <input type="radio" id="radio13" name="act" value="5-7">
                                       <label for="radio13">Excersie 5-7 per week</label>

                                </div>
                            </div> 
                        </div><br> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                       <div class="form-card">
                            <div class="row">
                                <div class="col-4">
                                    <h2 class="fs-title">Describe a typical day for you?</h2>
                                </div>
                                <div class="col-8">
                                    <input type="radio" id="radio14" name="typ" value="at-office" checked>
                                       <label for="radio14">At the office</label>
                                    <input type="radio" id="radio15" name="typ" value="regular">
                                       <label for="radio15">Go out rgular basis</label>
                                    <input type="radio" id="radio16" name="typ" value="foot">
                                       <label for="radio16">Better part on the foot</label>
                                    <input type="radio" id="radio17" name="typ" value="labor">
                                       <label for="radio17">Manual Labor</label>
                                    <input type="radio" id="radio18" name="typ" value="home">
                                       <label for="radio18">Stay at home</label>

                                </div>
                            </div> 
                        </div><br> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                       <div class="form-card">
                            <div class="row">
                                <div class="col-4">
                                    <h2 class="fs-title">Let us know your Measurements</h2>
                                    <img src="img/mes-1.png" style="width: 150px;height: auto;">
                                </div>
                                <div class="col-8">
                                    <div class="row">
                                        <div class="col-1">
                                            <img src="img/mes-2.png" style="width: 50px; height: auto;margin-top: 0px;text-align: right;">
                                        </div>
                                        <div class="col-11">
                                            <input type="text" name="age" placeholder="Age" required="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1">
                                            <img src="img/mes-3.png" style="width: 50px; height: auto;margin-top: 0px;text-align: right;">
                                        </div>
                                        <div class="col-11">
                                            <input type="text" name="height" placeholder="Height (cm)" required="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1">
                                            <img src="img/mes-4.png" style="width: 50px; height: auto;margin-top: 0px;text-align: right;">
                                        </div>
                                        <div class="col-11">
                                            <input type="text" name="weight" placeholder="Weight (kg)" required="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1">
                                            <img src="img/mes-5.png" style="width: 50px; height: auto;margin-top: 0px;text-align: right;">
                                        </div>
                                        <div class="col-11">
                                           <input type="text" name="tweight" placeholder="Target Weight (kg)" required="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1">
                                            <img src="img/mes-6.png" style="width: 50px; height: auto;margin-top: 0px;text-align: right;">
                                        </div>
                                        <div class="col-11">
                                            <input type="email" name="mail" placeholder="Email" required="">
                                        </div>
                                    </div>

                                </div>
                            </div> 
                        </div><br>
                        <button type="submit" name="submit" class="submit action-button" value="Continue">Continue</button><input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
         
                </form>
                <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="account"><strong>Gender</strong></li>
                        <li id="personal"><strong>Protein</strong></li>
                        <li id="payment"><strong>Fish</strong></li>
                        <li id="payment"><strong>Diary</strong></li>
                        <li id="payment"><strong>Activity</strong></li>
                        <li id="payment"><strong>Life Style</strong></li>
                        <li id="payment"><strong>Measurements</strong></li>
                        <!-- <li id="confirm"><strong>Q4</strong></li>
                        <li id="done"><strong>Q5</strong></li> -->
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> <!-- fieldsets -->
            </div>
        </div>
    </div>
</div>

<div class="footer" style="position:;left: 0; bottom: 0;width: 100%;background-color: #fff;text-align: center; text-align: center; padding: 20px;border-top: 1px solid #ccc;">
    <div class="row" style="">
        <div class="col-4">
         <p style="font-size: 12.9px;">&copy; 2021 Diet Plan | All Rights Reserved</p>
        </div>
        <div class="col-8">
         <ul>
         <li style="display: inline-block;"><a href="#" style="font-size: 10px;margin-right: 10px;">Privacy Policy</a></li>
         <li style="display: inline-block;"><a href="#" style="font-size: 10px;margin-right: 10px;">Terms & Conditions</a></li>
         <li style="display: inline-block;"><a href="#" style="font-size: 10px;">Refund Policy</a></li>
         </ul> 
        </div>
           
</div>

<div id="popup-article" class="popup">
  <div class="popup__block">
    <h1 class="popup__title">Support Center</h1>
    <h6>Your Token: <?php echo "HFA".uniqid()."";?> <br> Please Mention This Token in The Email Subject</h6>
    <h5>support@zatadevelopment.work</h5>
    <!-- <h5>Need a Quick Help?</h5>
    <h4>0094 716 791 412</h4> -->
    <hr style="height:1px;border-width:0;color:#000;background-color:#000;">
    *Note: We available at 8AM to 11PM in Colombo, Sri Lanka Time Zone(GMT+5:30) 
    <a href="#" class="popup__close">close</a>
  </div>
</div>

<script src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
    /*function show1(){
  document.getElementById('div1').style.display ='none';
}
function show2(){
  document.getElementById('div1').style.display = 'block';
}

jQuery(document).ready(function($){
        
    $(".btnrating").on('click',(function(e) {
    
    var previous_value = $("#selected_rating").val();
    
    var selected_value = $(this).attr("data-attr");
    $("#selected_rating").val(selected_value);
    
    $(".selected-rating").empty();
    $(".selected-rating").html(selected_value);
    
    for (i = 1; i <= selected_value; ++i) {
    $("#rating-star-"+i).toggleClass('btn-primary');
    $("#rating-star-"+i).toggleClass('btn-default');
    }
    
    for (ix = 1; ix <= previous_value; ++ix) {
    $("#rating-star-"+ix).toggleClass('btn-primary');
    $("#rating-star-"+ix).toggleClass('btn-default');
    }
    
    }));
    
        
});*/

    $(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;

setProgressBar(current);

$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(++current);
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(--current);
});

function setProgressBar(curStep){
var percent = parseFloat(100 / steps) * curStep;
percent = percent.toFixed();
$(".progress-bar")
.css("width",percent+"%")
}

$(".submit").click(function(){

 document.getElementById("msform").submit();  
   /* var radio1=$('input[type="radio"]:checked').val();
    var pass_data = {
            'radio1' : radio1,
        };
        alert(pass_data);
        $.ajax({
            url : "",
            type : "POST",
            data : pass_data,
            success : function(data) {
            }
        });
        return false;*/
})

});
</script>
</body>
</html>