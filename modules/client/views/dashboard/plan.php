
<script type="text/javascript">

$(function(){

	var hash = window.location.hash;
	$('.benefit_plan_info').removeClass('active');

	if(hash == '#generalplaninformation'){
		 
		  $(".parent-tabs").css( "background-image", "" );
	$( "#collapseOne" ).prev().css( "background-image", "-webkit-linear-gradient(#6394ce,#395fa2)" );
	$(".custom-bg").css( "color", "" );
  $( "#collapseOne" ).prev().find('.custom-bg').css("color", "white");
	$( ".panel-collapse" ).removeClass("in");
	
		 $("#collapseOne").addClass( "in" );
		  $('html, body').animate({ scrollTop: $(hash).offset().top -110  }); 
		  $('#benefit_plan_info_menu_1').addClass('active');
		  editbasic();
	  }
	  else if(hash == '#meccoverage'){
		 
		 
	        
			
	$(".parent-tabs").css( "background-image", "" );
	$( "#collapseTwo" ).prev().css( "background-image", "-webkit-linear-gradient(#6394ce,#395fa2)" );
	$(".custom-bg").css( "color", "" );
  $( "#collapseTwo" ).prev().find('.custom-bg').css("color", "white");
	$( ".panel-collapse" ).removeClass("in");
	
	
		 $('#benefit_plan_info_menu_2').addClass('active');
		//  $("#collapseOne").removeClass( "in" );
		  $("#collapseTwo").addClass( "in" );
		//  $('#basic_btn_1').trigger('click');
		   $('html, body').animate({ scrollTop: $(hash).offset().top -126  }); 
		   editbasic1();
	  }

	  return false;
	  
	    e.preventDefault();

	
});
function benefitNavigation()
{
	var hash = window.location.hash;
	$('.benefit_plan_info').removeClass('active');

	if(hash == '#generalplaninformation'){
		 
		  $(".parent-tabs").css( "background-image", "" );
	$( "#collapseOne" ).prev().css( "background-image", "-webkit-linear-gradient(#6394ce,#395fa2)" );
	$(".custom-bg").css( "color", "" );
  $( "#collapseOne" ).prev().find('.custom-bg').css("color", "white");
	$( ".panel-collapse" ).removeClass("in");
	
		 $("#collapseOne").addClass( "in" );
		  $('html, body').animate({ scrollTop: $(hash).offset().top -110  }); 
		  $('#benefit_plan_info_menu_1').addClass('active');
		  editbasic();
	  }
	  else if(hash == '#meccoverage'){
		 
		 
	        
			
	$(".parent-tabs").css( "background-image", "" );
	$( "#collapseTwo" ).prev().css( "background-image", "-webkit-linear-gradient(#6394ce,#395fa2)" );
	$(".custom-bg").css( "color", "" );
  $( "#collapseTwo" ).prev().find('.custom-bg').css("color", "white");
	$( ".panel-collapse" ).removeClass("in");
	
	
		 $('#benefit_plan_info_menu_2').addClass('active');
		//  $("#collapseOne").removeClass( "in" );
		  $("#collapseTwo").addClass( "in" );
		//  $('#basic_btn_1').trigger('click');
		   $('html, body').animate({ scrollTop: $(hash).offset().top -126  }); 
		   editbasic1();
	  }

	  return false;
	  
	    e.preventDefault();
}


$(document).ready(function(){
$("input[name='multiple_waiting_period']").click(function(){
		$value = this.value;
		if($value != 0)
		{
			$('.explain').show();
		}
		else
		{
			$('.explain').hide();
			
		}
		
		});
		
		$("input[name='company_offer']").click(function(){
		$value = this.value;
		if($value != 0)
		{
			$('.text_hra').show();
		}
		else
		{
			$('.text_hra').hide();
			
		}
		
		});


		$("input[name='company_insured_plans']").click(function(){
			$value = this.value;
			if($value != 0)
			{
				$('#combination_div1').show();
			}
			else
			{
				$('#combination_div1').hide();
				
			}
			
			});
		
		
		});
$(function() {

	$( ".custom-bg" ).click(function() {

		console.log(this);
		  //alert( "Handler for .click() called." );
		});
		

		$('.steps').hover(
				
               function () {
				   $(this).css('background','#000000');
                  $( this ).find('.check').css( "display", "none" );
  $( this ).find('.edit').css( "display", "block" );
               }, 
				
               function () {
				   $(this).css('background','rgb(14, 187, 121)');
                  $( this ).find('.check').css( "display", "block" );
  $( this ).find('.edit').css( "display", "none" );
               }
            );
			
			
		

//	$( "#dashboard-menu-id" ).addClass( "active" );
});

function redirect(){
	
	
		url='<?php echo Yii::$app->request->baseUrl. '/client/dashboard/planclass' ?>';
		
		location=url;
}
function disableyear(){
	if($('#entire_year').is(':checked')) { 

		   $(".specific_year").attr("disabled", true);

		    }else{

		    	 $(".specific_year").attr("disabled", false);
			    }
}

function basic(){
	
	$('.benefit_plan_info').removeClass('active');
	 $('#benefit_plan_info_menu_2').addClass('active');
	 
	$( "#collapseOne" ).prev().find('.steps').css( "display", "block" );
	$( "#collapseOne" ).prev().find('.check').css( "display", "block" );

	$('.fixed-number').css( "display", "block");
	$("#collapseOne" ).prev().find('.fixed-number').css( "display", "none");
	
	$(".parent-tabs").css( "background-image", "" );
	$("#collapseTwo" ).prev().css( "background-image","-webkit-linear-gradient(#6394ce,#395fa2)");
	$(".custom-bg").css( "color", "" );
	$( "#collapseTwo" ).prev().find('.custom-bg').css("color", "white");
	
	
	$( "#collapseTwo,#collapseOne" ).prev().css("opacity", "1");
	
	// console.log($( "#collapseOne" ).prev());background: rgba(222, 217, 210, 0.68);

	$("#collapseTwo").addClass( "in" );
	$("#collapseTwo").css("height","auto");
	$("#collapseTwo").removeClass( "collapsed" );
	
	$("#collapseTwo").attr("aria-expanded","true");
}

function editbasic(){

	$('.benefit_plan_info').removeClass('active');
	 $('#benefit_plan_info_menu_1').addClass('active');
$('.steps').css( "display", "none" );

$('.fixed-number').css( "display", "block");

	$(".parent-tabs").css( "background-image", "" );
	$("#collapseOne" ).prev().css( "background-image", "-webkit-linear-gradient(#6394ce,#395fa2)" );
	$(".custom-bg").css( "color", "" );
	$( "#collapseOne" ).prev().find('.custom-bg').css("color", "white");
	$( ".panel-collapse" ).removeClass("in");
	
	$("#collapseOne").addClass("in");
	$("#collapseOne").css("height","auto");
	$("#collapseOne").removeClass("collapsed");
	$("#collapseOne").attr("aria-expanded","true");
	
	$( "#collapseTwo,#collapseThree,#collapseFour,#collapseFive,#collapseSix" ).prev().css("opacity", "1");
	
}



function basic2(){
	
$('.steps').css( "display", "none" );

$('.fixed-number').css( "display", "block");

	$(".parent-tabs").css( "background-image", "" );
	$("#collapseOne" ).prev().css( "background-image", "-webkit-linear-gradient(#6394ce,#395fa2)" );
	$(".custom-bg").css( "color", "" );
	$( "#collapseOne" ).prev().find('.custom-bg').css("color", "white");
	$( ".panel-collapse" ).removeClass("in");
	
	$("#collapseOne").addClass("in");
	$("#collapseOne").css("height","auto");
	$("#collapseOne").removeClass("collapsed");
	$("#collapseOne").attr("aria-expanded","true");
	
	//$( "#collapseTwo" ).prev().find('.custom-bg').css("color", "white");
	
	
	$( "#collapseTwo,#collapseOne" ).prev().css("opacity", "1");
	
	// console.log($( "#collapseOne" ).prev());background: rgba(222, 217, 210, 0.68);

	$("#collapseTwo").addClass( "in" );
	$("#collapseTwo").css("height","auto");
	$("#collapseTwo").removeClass( "collapsed" );
	
}



function basic3(){

$( "#collapseTwo" ).prev().find('.steps').css( "display", "block" );
	$( "#collapseTwo" ).prev().find('.check').css( "display", "block" );
	
	//$('.fixed-number').css( "display", "block");
	$("#collapseTwo" ).prev().find('.fixed-number').css( "display", "none");
	
	$( "#collapseThree" ).prev().css("opacity", "1");
	
$(".parent-tabs").css( "background-image", "" );
	$( "#collapseThree" ).prev().css( "background-image", "-webkit-linear-gradient(#6394ce,#395fa2)" );
	$(".custom-bg").css( "color", "" );
	$( "#collapseThree" ).prev().find('.custom-bg').css("color", "white");
	
	$("#collapseThree").addClass( "in" );
	$("#collapseThree").css("height","auto");
	$("#collapseThree").removeClass( "collapsed" );
	$("#collapseThree").attr("aria-expanded","true");
	
}


function basic1(){

$( "#collapseTwo" ).prev().find('.steps').css( "display", "block" );
	$( "#collapseTwo" ).prev().find('.check').css( "display", "block" );
	
	//$('.fixed-number').css( "display", "block");
	$("#collapseTwo" ).prev().find('.fixed-number').css( "display", "none");
	
	$( "#collapseThree" ).prev().css("opacity", "1");
	
$(".parent-tabs").css( "background-image", "" );
	$( "#collapseThree" ).prev().css( "background-image", "-webkit-linear-gradient(#6394ce,#395fa2)" );
	$(".custom-bg").css( "color", "" );
	$( "#collapseThree" ).prev().find('.custom-bg').css("color", "white");
	
	$("#collapseThree").addClass( "in" );
	$("#collapseThree").css("height","auto");
	$("#collapseThree").removeClass( "collapsed" );
	$("#collapseThree").attr("aria-expanded","true");
}

function editbasic1(){
	
	$('#step1').css({"display":"none"});
	$('#step2').css({"display":"none"});
	$('#step3').css({"display":"none"});
	$('#step4').css({"display":"none"});
	$('#step5').css({"display":"none"});

	$("#collapseTwo,#collapseThree,#collapseFour,#collapseFive" ).prev().find('.fixed-number').css( "display", "block");
	
	$(".parent-tabs").css( "background-image", "" );
	$("#collapseTwo" ).prev().css( "background-image", "-webkit-linear-gradient(#6394ce,#395fa2)" );
	$(".custom-bg").css( "color", "" );
	$( "#collapseTwo" ).prev().find('.custom-bg').css("color", "white");
	$( ".panel-collapse" ).removeClass("in");
	
	$("#collapseTwo").addClass("in");
	$("#collapseTwo").css("height","auto");
	$("#collapseTwo").removeClass("collapsed");
	$("#collapseTwo").attr("aria-expanded","true");
	
	$( "#collapseThree,#collapseFour,#collapseFive,#collapseSix" ).prev().css("opacity", "1");
}



/*
function basic5(){
	$( "#collapseSix" ).prev().find('.steps').css( "display", "block" );
	$( "#collapseSix" ).prev().find('.check').css( "display", "block" );
	
	$("#collapseSix" ).prev().find('.fixed-number').css( "display", "none");
	
$(".parent-tabs").css( "background-image", "" );
	$( "#collapseSix" ).prev().css( "background-image", "-webkit-linear-gradient(#6394ce,#395fa2)" );
	$(".custom-bg").css( "color", "" );
	$( "#collapseSix" ).prev().find('.custom-bg').css("color", "white");
	
	$("#collapseSix").addClass( "in" );
	$("#collapseSix").css("height","auto");
	$("#collapseSix").removeClass( "collapsed" );
	$("#collapseSix").attr("aria-expanded","true");
}

function editbasic5(){
	
	
	$('#step5').css({"display":"none"});

	$("#collapseSix" ).prev().find('.fixed-number').css( "display", "block");

	
	$(".parent-tabs").css( "background-image", "" );
	$("#collapseSix" ).prev().css( "background-image", "-webkit-linear-gradient(#6394ce,#395fa2)" );
	$(".custom-bg").css( "color", "" );
	$( "#collapseSix" ).prev().find('.custom-bg').css("color", "white");
	$( ".panel-collapse" ).removeClass("in");
	
	$("#collapseSix").addClass("in");
	$("#collapseSix").css("height","auto");
	$("#collapseSix").removeClass("collapsed");
	$("#collapseSix").attr("aria-expanded","true");
}
*/

</script>
<style>

.mr-tp-2{
margin-top: 4%;}

.mr-tp-15{
margin-top: 15%;}
.mr-r-1{
    margin-right: 1%;
}
.btn{
white-space: normal;
   /* box-shadow: 3px 2px 5px rgba(136, 136, 136, 0.28);*/
}

ol>li.btn-lg{
font-size: 16px;
text-align:left;
}

ol>li.btn-lg>span{
margin-right: 5%;
text-align:center;
}
.margin{
	
	margin-top:0px;
	margin-bottom:0px;
}

.bullet2{
	padding-bottom:6px;
}
.circle{
float: left;
    border-radius: 50%;
    background: white;
    color: black;
    width: 22px;
    }
    .btn-default-cancel{
        background-color: #d2d6de;
        }
    .btn-success{
        background-color: rgb(0, 166, 36);
    }


   .form-horizontal .control-label{
   text-align:left;
   }

	.steps{
		display:none; background-image: linear-gradient(#0ebb79,#22a642);
    color: #fff;
    width: 58px; border-bottom: 1px solid rgba(0,0,0,0.5);
    border-radius: 0.8em 0.3em 0.3em 0.8em;
    text-align: center;
    line-height: 23px;
    font-weight: 900;
    font-size: 15px;
	}
	
	.steps{
		cursor:pointer;
	}
	
	.block-number{
		    font-family: initial;
		border-radius: 0.3em;
    width: 23px;
    height: 23px;
    letter-spacing: -1px;
    text-align: center;
    line-height: 23px;
    font-weight: 900;
    font-size: 15px;
    left: 3px;
    top: -2px;      
	position: absolute;
	color: #fff;
    background-color: #6699cc; 
    box-shadow: inset 0 1px 2px rgba(0,0,0,0.3); 
    background-color: #436799;
    background-image: -moz-linear-gradient(#375984,#436799);
    background-image: -webkit-linear-gradient(#375984,#436799); 
	}
	
	.highlight-fancy{
		border: 1px solid #FBEED5;
    text-shadow: 0 1px 0 rgba(255,255,255,0.5);
    padding: 0.1em 0.5em 0.3em 0.5em;
    border-radius: 0.2em;
    box-shadow: 0px 1px 0px rgba(106,32,28,0.1);
    background-color: #ffffcc;
    color: #90724a;
	}
.panel.box {
	border-top: none !important;
}
	.form-height{
    height: 42px;
    width: 90%;
	}
	.control-checkbox{
	font-weight: normal;
    font-size: 16px;
	}
	
	
</style>

<div class="box box-warning container-fluid">
	<div class="box-header with-border">
              <h3 class="box-title col-xs-6">General Plan Information - ABC Corp <small>(ACA-10000-1)</small></h3>
             <div class="col-xs-6 pull-right">
			<a class=" btn bg-orange btn-flat btn-social pull-right"> <i
				class="fa fa-youtube-play"></i>View Help Video
			</a>
		</div>
            </div>
			
 <div class="col-xs-12 header-new-main width-98 hide"> 
	<span class="header-icon-band"><i class="fa fa-file-text-o icon-band" style="font-weight: lighter;"></i></span>
	<p class="sub-header-new">Below is the form to capture general plan information.</p>
</div>
		<div class="col-md-12 " >
		
		
		
		<div class="row">
        <div class="col-md-12">
          <div class="box box-solid">
           
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel  box " id="generalplaninformation">
                  <div class="parent-tabs box-header with-border" style="background-image:-webkit-linear-gradient(#6394ce,#395fa2);">
				  
				  <span id="step" class="steps col-xs-2" onclick="editbasic();"   >
<span class="check " style="display:none;" >
<i class="fa fa-check" aria-hidden="true"></i>
<span class="">7</span>
</span>
<span  style="display:none;" class="edit">Edit</span></span> 
				  
                    <h4 class="box-title col-sm-6 col-xs-12">
					<div class="fixed-number col-sm-1 col-xs-2" style="top: 3px;">
						<span class="block-number">7</span>
						</div>	
                      <a  class="custom-bg col-sm-11 col-xs-10"  onclick="editbasic();" data-parent="#accordion"  style="color:white; padding-left: 0;" >

					General Plan Information
                      </a>
                    </h4>
					
					<div class="box-title col-xs-3 pull-right" style="padding-top: 7px;">
					<p class="custom-bg summary-text pull-right" style="font-size: 12px; color:white; ">
					
					</p>
					</div>
					
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in bg-white black panel-collapse" >
                    <div class="box-body">
                    <p class="highlight-fancy">
			<span class="status"><i class="fa fa-info-circle" aria-hidden="true"></i></span> Fill the General Plan information
			
			</p>
                      
					<div class="row">
						<div class="col-md-12">
						
							<div class=" box-info">
          
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body padding-right-0">
              <div class="col-xs-offset-1 col-xs-10">
             	  <div class="form-group">
                <div class="col-sm-12">
                  <label class="control-label"><h4>7.1&nbsp;&nbsp;&nbsp;Is this your first year Offering Coverage ?</h4>
                   <input type="radio" name="first_year_coverage"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio"  name="first_year_coverage"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;No</span> 
                    </label>
                  </div>
                </div>

            <div class="form-group">
                <div class="col-sm-12">
                  <label class="control-label"><h4>7.2&nbsp;&nbsp;&nbsp;What is your renewal month for your medical plans ? If you have multiple plans/renewals, enter the earliest one of the year. If you did not offer a plan then select "Not Applicable"
                  </h4>
                  <select class="form-control form-height" style="width:50%;">
				  <option>January</option>
				  <option>February</option>
				  <option>March</option>
				  <option>April</option>
				   <option>May</option>
				    <option>June</option>
					 <option>July</option>
					  <option>August</option>
					   <option>September</option> 
					   <option>October</option>
					    <option>November</option>
						 <option>December</option>
				  <option>Not Applicable</option>
				  </select> 
                    </label>
                  </div>
                </div>
             
                 <div class="form-group">
                <div class="col-sm-12">
                  <label class="control-label"><h4>7.3&nbsp;&nbsp;&nbsp;Enter a short description of the type of plans you offer, insurance carriers, and any other relevant information
                  </h4></label>
                    <textarea class="form-control"  style="width:50%;"></textarea>
					</div>
                </div>	

               <div class="form-group">
                <div class="col-sm-12">
                  <label class="control-label"><h4>7.4&nbsp;&nbsp;&nbsp;Do you have multiple waiting periods for different employees ?</h4>
                    <input type="radio" name="multiple_waiting_period" value="1"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio"  name="multiple_waiting_period" value="0"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;No</span> 
                   </label>
					</div>
					</div>
					
			 <div class="form-group explain" style="display:none;">
                <div class="col-sm-12">
                  <label class="control-label"><h4>7.4.1&nbsp;&nbsp;&nbsp;If yes, explain</h4></label>
                    <textarea class="form-control"  style="width:50%;"></textarea>
                  </div>
                </div>
				
				<div class="form-group">
                <div class="col-sm-12">
                  <label class="control-label"><h4>7.5&nbsp;&nbsp;&nbsp;Did your company offer a Health Reimbursement Arrangement (HRA) to employees that did NOT require their participation in the medical plan ?</h4>
                    <input type="radio" name="company_offer" value="1"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio"  name="company_offer"  value="0"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;No</span> 
                   </label>
                  </div>
                </div>
                
               
				
				<div class="form-group text_hra" style="display:none;">
                <div class="col-sm-12">
                  <label class="control-label"><h4>7.5.5&nbsp;&nbsp;&nbsp;Please contact customer service for additional information</h4></label>
                    
                  </div>
                </div>
                
                 <div class="form-group">
                <div class="col-sm-12">
                  <label class="control-label"><h4>7.6&nbsp;&nbsp;&nbsp;Overall as a company, did you have BOTH Self Insured AND Fully Insured Plans During the reporting year ?</h4>
                    <input type="radio" name="company_insured_plans" value="1"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio"  name="company_insured_plans"  value="0" checked><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;No</span> 
                   </label>
                  </div>
                  
                  <div class="col-sm-12" id="combination_div1" style="margin-top: 15px;display:none;" >
																		<div class="col-xs-12 padding-left-0 padding-right-0" style="border: 1px solid #ddd;">
																			<div class="col-sm-4">
																				<div class="row" style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">January</div>
																					<div class="col-sm-9">
																						<select class="form-control">
																							<option>Select a Plan</option>
																							<option>Fully Insured</option>
																							<option>Self Insured</option>
																						</select>
																					</div>
																				</div>

																				<div class="row" style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">April</div>
																					<div class="col-sm-9">
																						<select class="form-control">
																							<option>Select a Plan</option>
																							<option>Fully Insured</option>
																							<option>Self Insured</option>
																						</select>
																					</div>
																				</div>

																				<div class="row" style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">July</div>
																					<div class="col-sm-9">
																						<select class="form-control">
																							<option>Select a Plan</option>
																							<option>Fully Insured</option>
																							<option>Self Insured</option>
																						</select>
																					</div>
																				</div>

																				<div class="row" style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">October</div>
																					<div class="col-sm-9">
																						<select class="form-control">
																							<option>Select a Plan</option>
																							<option>Fully Insured</option>
																							<option>Self Insured</option>
																						</select>
																					</div>
																				</div>
																			</div>
																			<div class="col-md-4 padding-left-0">

																				<div class="row" style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">February</div>
																					<div class="col-sm-9">
																						<select class="form-control">
																							<option>Select a Plan</option>
																							<option>Fully Insured</option>
																							<option>Self Insured</option>
																						</select>
																					</div>
																				</div>
																				<div class="row" style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">May</div>
																					<div class="col-sm-9">
																						<select class="form-control">
																							<option>Select a Plan</option>
																							<option>Fully Insured</option>
																							<option>Self Insured</option>
																						</select>
																					</div>
																				</div>
																				<div class="row" style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">August</div>
																					<div class="col-sm-9">
																						<select class="form-control">
																							<option>Select a Plan</option>
																							<option>Fully Insured</option>
																							<option>Self Insured</option>
																						</select>
																					</div>
																				</div>
																				<div class="row" style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">November</div>
																					<div class="col-sm-9">
																						<select class="form-control">
																							<option>Select a Plan</option>
																							<option>Fully Insured</option>
																							<option>Self Insured</option>
																						</select>
																					</div>
																				</div>
																			</div>
																			<div class="col-md-4 padding-left-0">

																				<div class="row" style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">March</div>
																					<div class="col-sm-9">
																						<select class="form-control">
																							<option>Select a Plan</option>
																							<option>Fully Insured</option>
																							<option>Self Insured</option>
																						</select>
																					</div>
																				</div>

																				<div class="row" style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">June</div>
																					<div class="col-sm-9">
																						<select class="form-control">
																							<option>Select a Plan</option>
																							<option>Fully Insured</option>
																							<option>Self Insured</option>
																						</select>
																					</div>
																				</div>

																				<div class="row" style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">September</div>
																					<div class="col-sm-9">
																						<select class="form-control">
																							<option>Select a Plan</option>
																							<option>Fully Insured</option>
																							<option>Self Insured</option>
																						</select>
																					</div>
																				</div>

																				<div class="row" style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">December</div>
																					<div class="col-sm-9">
																						<select class="form-control">
																							<option>Select a Plan</option>
																							<option>Fully Insured</option>
																							<option>Self Insured</option>
																						</select>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	
                </div>
				
                  </div>
				  
				  
                </div>	

               <div class="box-footer pull-right padding-right-0" >
				<a  class="btn btn-default btn-default-cancel"  href="#">Cancel</a>
				<a  class="btn btn-success " href="#">Save and Exit</a>
                <button type="button" data-toggle="collapse" href="#collapseOne" onclick="basic()" class="btn btn-success">Save and Continue</button>
              </div>				
              </div>
              <!-- /.box-body -->
           
              <!-- /.box-footer -->
            </form>
          </div>
				  			
						</div>
				
					
				
				</div>
				</div>
			
				
				
                    </div>
                  </div>
               <div class="box-group" id="accordion">
                <div class="panel box " id="meccoverage">
                  <div class="parent-tabs box-header with-border" >
				  <span id="step1" class="steps col-xs-2" onclick="editbasic1()"   >
<span class="check " style="display:none;" >
<i class="fa fa-check" aria-hidden="true"></i>
<span class="">8</span>
</span>
<span  style="display:none;" class="edit">Edit</span></span>

                    <h4 class="box-title col-sm-6 col-xs-12">
					<div class="fixed-number col-sm-1 col-xs-2" style="top: 3px;">
						<span class="block-number">8</span>
						</div>	
                      <a  class="custom-bg col-sm-11 col-xs-10" onclick="editbasic1();" data-parent="#accordion"  style="padding-left: 0;" >
                       MEC Coverage
                      </a>
                    </h4>
					
					<div class="box-title col-xs-3 pull-right" style="padding-top: 7px;">
					<p class="custom-bg summary-text pull-right" style=" font-size: 12px; ">
					
					</p>
					</div>
					
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse bg-white black panel-collapse">
                    <div class="box-body padding-right-0">
					<p class="highlight-fancy">
			<span class="status"><i class="fa fa-info-circle" aria-hidden="true"></i></span> Specify the MEC Coverage period
			 
			</p>
					
					<div class="col-md-offset-1 col-md-10 padding-right-0">
					   <form class="form-horizontal" >
			  <div class="form-group">
			  <div class="col-sm-12 padding-right-0">
                  <label class="control-label"><h4  class="margin">8.1&nbsp;&nbsp;&nbsp;Select the months in which you offered Minimum Essential Coverage (MEC) to your employees.</h4>
				   </label>
				  <ul>
				   <li>
				  <h4 class="margin control-label">For 2015 reporting, you must have offered MEC to at least 70% of your full time employees during the month.</h4>
				  </li>
				   <li>
				   <h4 class="margin control-label bullet2">For 2016 reporting, you must have offered MEC to at least 95% of your full time employees during the month</h4>
				   </li></ul>
				   <div class="col-sm-12">
				  <div class="checkbox">
                 <label><input type="checkbox" onclick="disableyear();" id="entire_year"><span class="control-checkbox">Entire Year</span></label>
                  </div>
				    </div>
					<div class="col-sm-3">
                  
                 
                  <div class="checkbox">
                 <label><input type="checkbox" class="specific_year"><span class="control-checkbox">January</span></label>
                  </div>
                  <div class="checkbox">
                 <label><input type="checkbox" class="specific_year"><span class="control-checkbox">February</span></label>
                  </div>
                  <div class="checkbox">
                 <label><input type="checkbox" class="specific_year"><span class="control-checkbox">March</span></label>
                  </div>
                 
                  <div class="checkbox">
                   <label><input type="checkbox" class="specific_year"><span class="control-checkbox">April</span></label>
                 </div>
                 
                  <div class="checkbox">
                  <label><input type="checkbox" class="specific_year"><span class="control-checkbox">May</span></label>
                  </div>
                   <div class="checkbox">
                   <label><input type="checkbox" class="specific_year"><span class="control-checkbox">June</span></label>
                  </div>
                  </div>
                  
                  <div class="col-sm-3">
                  <div class="checkbox">
                   <label><input type="checkbox" class="specific_year"><span class="control-checkbox">July</span></label>
                   </div>
                  <div class="checkbox">
                   <label><input type="checkbox" class="specific_year"><span class="control-checkbox">August</span></label>
                 </div>
                  <div class="checkbox">
                   <label><input type="checkbox" class="specific_year"><span class="control-checkbox">September</span></label>
                 </div>
                  <div class="checkbox">
                   <label><input type="checkbox" class="specific_year"><span class="control-checkbox">October</span></label>
                 </div>
                  <div class="checkbox">
                   <label><input type="checkbox" class="specific_year"><span class="control-checkbox">November</span></label>
                 </div>
                  <div class="checkbox">
                   <label><input type="checkbox" class="specific_year"><span class="control-checkbox">December</span></label>
                  </div>
                 
                  </div>
                   
				    </div>
                </div>
			
             	
			
					
						  
				    </div>
                      
								
					</form>
                    </div>
					 <div class=" box-footer pull-right padding-right-0" >
              
                <button  class="btn btn-default btn-default-cancel" type="button" data-toggle="collapse" href="#collapseTwo" onclick="basic2();" >Cancel</button>
				<button type="submit" class="btn btn-success " type="button" data-toggle="collapse" href="#collapseTwo" onclick="basic2();" >Save and Exit</button>
                <button type="button" data-toggle="collapse" href="#" onclick="redirect();" class="btn  btn-success">Save and Continue</button>
              </div>
                     </div>
                  </div>
                </div>
              </div>
			  </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
			 </div>
		   </div>
		</div>
	
</div>


